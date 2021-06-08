 @include('header_admin') 


			
			
			
			

	
	
	
	
	
	
	
	
	
	
	
	
        <!-- Main content -->
        <div class="container-fluid my-5 text-center text-blue">
            <h2><span class="pb-1 border-buttom" > بيانات المستخدم  </span></h2>
			 <?php   
if (isset($_GET['userid'])) { ?>
        <h5 class="text-center px-5"> <?php 
		$username = DB::table('users')->where('cancel', 0)->where('id', $_GET['userid'])->get();


foreach ($username as $usernam)
{
		echo $usernam->name; 
} }?> </h5>

                <div class="px-md-5 px-0 mt-5 overflow-auto">
                        <table id="example" class="table table-striped table-bordered  mx-auto shadow" style="width:85%">
                            <thead class="bg-blue text-white" style="font-size: larger;">
                                <tr>
                                    <th style="min-width: 165px;">التحكم</th>
                                    <th >اسم المستخدم</th>
                                    <th >البريد الالكتروني</th>
                                    <th >الموبايل</th>
                                    <th >اسم الشركة</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
							
							
							     <?php   

	$users = DB::table('users')->where('cancel', 0)->where('id', $_GET['userid'])->get();


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
									<td>                       
									<?php    $company = DB::table('students')->where('cancel', 0)->where('user_id', $user->id)->get();

foreach ($company as $comp)
{ ?>
<a href="companyview?coid=<?=$comp->id?>" class="btn bg-blue text-white" title="عرض"><i class="far fa-eye"></i>&nbsp;<?php echo $comp->name; ?></a>

<?php }
?>

</td>
		                       
		
		
		
		

       

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
  
</html>
	
	
	
	
	
	
	
	
	
	
	
 @include('footer_admin') 