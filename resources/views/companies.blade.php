 @include('header_admin') 

			
					
			<?php
			
			if (isset($_GET['remove'])){
                    DB::table('students')
                    ->where('id', $_GET['seen'])
                    ->update(['new' => 0])
                    ;
					}
			if (isset($_GET['add'])){
                    DB::table('students')
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
            <h2><span class="pb-1 border-buttom" > إدارة الشركات </span></h2>
			<?php   if (isset($_GET['new'])) { ?>
        <h5 class="pb-1 border-buttom"> الشركات الجديدة </h5>
<?php } ?>
            <div class="px-md-5 px-0 my-5 overflow-auto">
                    <table id="example" class="table table-striped table-bordered  mx-auto shadow" style="width:90%">
                        <thead class="bg-blue text-white" style="font-size: larger;">
                            <tr>
                                <th class="align-middle"style="min-width: 165px;">التحكم</th>
                                <th class="align-middle"> كود الشركة </th>
                                <th class="align-middle">اسم الشركة</th>
                                <th class="align-middle"> العنوان </th>
                                <th class="align-middle"> الهاتف </th>
                                <th class="align-middle"> عدد الفروع </th>
                                <th class="align-middle"> الرقم الضريبي </th>
                                <th class="align-middle"> اسم المستخدم </th>
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
							
							$comp = DB::table('students')->where('cancel', 0)->where('new', 1)->get();
						}else {
							$comp = DB::table('students')->where('cancel', 0)->get();
						}
						foreach ($comp as $compa)
						{
						   
						?>
                            <tr>
                                <td class="align-middle">
										<a href="companyeditadmin?coid=<?=$compa->id?>" class="btn bg-blue text-white" title="تعديل"><i class="fas fa-edit"></i></a>
                                        <a href="companyview?coid=<?=$compa->id?>" class="btn bg-blue text-white" title="عرض"><i class="far fa-eye"></i></a>
                                        <a href="companydelete?coid=<?=$compa->id?>" class="btn bg-blue text-white" title="مسح"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                <td class="align-middle">{{$compa->id}}</td>
                                <td class="align-middle">{{$compa->name}}</td>
                                <td class="align-middle">{{$compa->address}}</td>
                                <td class="align-middle">{{$compa->phone}}</td>
                                <td class="align-middle"><?php  echo  $branchs = DB::table('branches')->where('cancel', 0)->where('co_id', $compa->id)->count(); ?></td>
                                <td class="align-middle">{{$compa->vat}}</td>
                                <td class="align-middle"><?php    $usersss = DB::table('users')->where('id', $compa->user_id)->get(); 
		
										foreach ($usersss as $userss)
								{
									echo $userss->name ;
								}
										?></td>
                                <td class="align-middle">
								<?php   
								if (isset($_GET['new'])) { ?>
										<a href="companies?new=1&seen=<?=$compa->id?>&remove=1"><i class="fas fa-eye"  style="cursor: pointer;"></i></a>
										<?php }else { ?>
									<?php	if ($compa->new == 0) { ?>
										<a href="companies?seen=<?=$compa->id?>&add=1"><i class="fas fa-eye-slash " style="cursor: pointer;"></i></a>
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