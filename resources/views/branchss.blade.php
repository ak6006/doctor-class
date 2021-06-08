 @include('header_admin') 

			
					
			<?php
			
			if (isset($_GET['remove'])){
                    DB::table('branches')
                    ->where('id', $_GET['seen'])
                    ->update(['new' => 0])
                    ;
					}
			if (isset($_GET['add'])){
                    DB::table('branches')
                    ->where('id', $_GET['seen'])
                    ->update(['new' => 1])
                    ;
					}
					?>	
			
			
			
			

<head>

    <style>
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }

        th,
        td {
            text-align: center;
            padding: 8px;
        }
        .address{
            min-width: 150px;
        }
    </style>
</head>







<div class="container-fluid my-5 text-center text-blue">
            <h2><span class="pb-1 border-buttom" > إدارة الفروع </span></h2>
			<?php   if (isset($_GET['new'])) { ?>
        <h5 class="pb-1 border-buttom"> الفروع الجديدة </h5>
<?php } ?>
            <div class="px-md-5 px-0 my-5 overflow-auto">
                    <table id="example" class="table table-striped table-bordered  mx-auto shadow" style="width:90%">
                        <thead class="bg-blue text-white" style="font-size: larger;">
                            <tr>
                                <th class="align-middle"style="min-width: 165px;">التحكم</th>
                                <th class="align-middle">اسم الفرع</th>
                                <th class="align-middle"> العنوان </th>
                                <th class="align-middle"> الهاتف </th>
                                <th class="align-middle"> المنطقة </th>
                                <th class="align-middle">الشخص المسئول </th>
                                <th class="align-middle"> اسم المستخدم </th>
								<th class="align-middle"> اسم الشركة </th>
                                <?php	if (isset($_GET['new'])) { ?>
             <th class="text-center"> ازالة </th>    
<?php } else {?>	
<th class="text-center"> اضافة للجديد </th> 
<?php } ?>	
                            </tr>
                        </thead>
                        <tbody>
						 <?php    
						if (isset($_GET['new'])) {
							
							$branchs = DB::table('branches')->where('cancel', 0)->where('new', 1)->get();
}else {
	$branchs = DB::table('branches')->where('cancel', 0)->get();
}
foreach ($branchs as $branch)
{
   
?>
                            <tr>
                                <td class="align-middle">
										<a href="brancheditadmin?bid=<?=$branch->id?>" class="btn bg-blue text-white" title="تعديل"><i class="fas fa-edit"></i></a>
                                        <a href="branchview?bid=<?=$branch->id?>" class="btn bg-blue text-white" title="عرض"><i class="far fa-eye"></i></a>
                                        <a href="branchdelete?bid=<?=$branch->id?>" class="btn bg-blue text-white" title="مسح"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                <td class="align-middle">{{$branch->name}}</td>
                                <td class="align-middle">{{$branch->address}}</td>
                                <td class="align-middle">{{$branch->phone}}</td>
                                <td class="align-middle">
								<?php    $city = DB::table('cities')->where('cancel', 0)->where('id', $branch->city)->get(); 
								foreach ($city as $cit)
								{
									echo $cit->name;
								}
								?>
								</td>
                                <td class="align-middle">{{$branch->response_person}}</td>
                                <td class="align-middle">
								<?php    
								$company = DB::table('students')->where('id', $branch->co_id)->get();
									foreach ($company as $co)
								{
								$usersss = DB::table('users')->where('id', $co->user_id)->get(); 
		
									foreach ($usersss as $userss)
								{
									echo $userss->name ;
								}
								}
								?>
								</td>
								<td>
								<?php 
								$company = DB::table('students')->where('id', $branch->co_id)->get();
									foreach ($company as $co)
								{
								
									echo $co->name ;
								
								}
								?>
								</td>
                                <td class="align-middle">
								<?php   
if (isset($_GET['new'])) { ?>
		<a href="branchs?new=1&seen=<?=$branch->id?>&remove=1"><i class="fas fa-eye"  style="cursor: pointer;"></i></a>
		<?php }else { ?>
	<?php	if ($branch->new == 0) { ?>
		<a href="branchs?seen=<?=$branch->id?>&add=1"><i class="fas fa-eye-slash " style="cursor: pointer;"></i></a>
<?php }else { ?>
<i class="fas fa-eye"></i>
<?php } ?>
		<?php } ?>
                                    </i>
                                </td>
                            </tr>
<?php } ?>
                        </tbody>
                    </table>
            </div>
        </div>


    </body>

   <script>
       $(document).ready(function() {
            $('#example').DataTable(
                {     
            "aLengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
                "iDisplayLength": 5
            } 
                );
        } );
   </script>
 @include('footer_admin') 