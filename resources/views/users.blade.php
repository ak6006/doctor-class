 @include('header_admin') 


			
			<?php
			
			if (isset($_GET['remove'])){
                    DB::table('users')
                    ->where('id', $_GET['seen'])
                    ->update(['new' => 0])
                    ;
					}
			if (isset($_GET['add'])){
                    DB::table('users')
                    ->where('id', $_GET['seen'])
                    ->update(['new' => 1])
                    ;
					}
					?>

        <!-- Main content -->
        <div class="container-fluid my-5 text-center text-blue">
            <h2><span class="pb-1 border-buttom" > إدارة المستخدمين </span></h2>
			 <?php   
			if (isset($_GET['new'])) { ?>
					<h5 class="text-center px-5"> المستخدمين الجدد </h5>
			<?php } ?>
                <div class="px-md-5 px-0 mt-5 overflow-auto">
                        <table id="example" class="table table-striped table-bordered  mx-auto shadow" style="width:85%">
                            <thead class="bg-blue text-white" style="font-size: larger;">
                                <tr>
                                    <th style="min-width: 165px;">التحكم</th>
                                    <th >اسم المستخدم</th>
                                    <th >البريد الالكتروني</th>
                                    <th >الموبايل</th>
                                    <th >اسم الشركة</th>
                                    <?php	if (isset($_GET['new'])) { ?>
									<th class="text-center"> ازالة </th>    
									<?php } else {?>	
									<th class="text-center"> اضافة للجديد  </th> 
									<?php } ?>		 
                                </tr>
                            </thead>
                            <tbody>
							
							
							     <?php   
									if (isset($_GET['new'])) {
															$users = DB::table('users')->where('cancel', 0)->where('new', 1)->get();
									}else {
										$users = DB::table('users')->where('cancel', 0)->get();
									}

									foreach ($users as $user)
									{
									   
								?>
								<tr>
		                            <td>
                                        <a href="usereditadmin?userid=<?=$user->id?>" class="btn bg-blue text-white" title="تعديل"><i class="fas fa-edit"></i></a>
                                        <a href="userview?userid=<?=$user->id?>" class="btn bg-blue text-white" title="عرض"><i class="far fa-eye"></i></a>
                                        <button type="button" class="btn bg-blue text-white" title="حذف"><i class="fas fa-trash-alt"></i></button>
                                    </td>
									<td>{{$user->name}}</td>
									<td>{{$user->email}}</td>
									<td>{{$user->mobile}}</td>
									<td>                        <?php    $company = DB::table('students')->where('cancel', 0)->where('user_id', $user->id)->get();

foreach ($company as $comp)
{
	echo $comp->name;
}
?>

</td>
		                        <?php   
if (isset($_GET['new'])) { ?>
		<td class="text-center"><a href="users?new=1&seen=<?=$user->id?>&remove=1"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
		<?php }else { ?>
		  <?php   
if ($user->new == 0) { ?>
		<td class="text-center"><a href="users?seen=<?=$user->id?>&add=1"><i class="fas fa-eye-slash"></i></a></td>
<?php }else { ?>
<td class="text-center"><i class="fas fa-eye"></i></td>
<?php } ?>
		<?php } ?>
		
		
		
		

       

                    </tr>
        <?php } ?>
		
		
		
		
                               
         
                                                               
                               
                         
                            </tbody>
                            
                        </table>
                </div>
        </div>


    </body>
   <script>
       function openNav() {
           document.getElementById("mySidepanel").style.width = "300px";
       }
           function closeNav() {
           document.getElementById("mySidepanel").style.width = "0";
       }
   </script>
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
</html>
	
	
	
	
	
	
	
	
	
	
	
 @include('footer_admin') 