 @include('header_admin') 


			
			
			
			

	
	
	
	
	
	
	
	
	
	
	
	
        <!-- Main content -->
        <div class="container-fluid my-5 text-center text-blue">
            <h2><span class="pb-1 border-buttom" >  بيانات الشركة  </span></h2>
			 <?php   
if (isset($_GET['coid'])) { ?>
        <h5 class="text-center px-5"> <?php 
		$coname = DB::table('students')->where('cancel', 0)->where('id', $_GET['coid'])->get();


foreach ($coname as $conam)
{
		echo $conam->name; 
} }?> </h5>

                <div class="px-md-5 px-0 mt-5 overflow-auto">
                        <table id="example" class="table table-striped table-bordered  mx-auto shadow" style="width:85%">
                            <thead class="bg-blue text-white" style="font-size: larger;">
                                <tr>
                                    <th style="min-width: 165px;">التحكم</th>
                                    <th >اسم الشركة</th>
									<th>المنطقة</th>
                                    <th >العنوان </th>
                                    <th >الهاتف</th>
									
									<th>الرقم الضريبى</th>
                                    <th >اسم المستخدم</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
							
							
							     <?php   

	$coname = DB::table('students')->where('cancel', 0)->where('id', $_GET['coid'])->get();


foreach ($coname as $conam)
{
   
?>
        <tr>
		                                    <td>
                                        <a href="companyeditadmin?coid=<?=$conam->id?>" class="btn bg-blue text-white" title="تعديل"><i class="fas fa-edit"></i></a>
                                        <a href="companyview?coid=<?=$conam->id?>" class="btn bg-blue text-white" title="عرض"><i class="far fa-eye"></i></a>
                                        <a href="companydelete?coid=<?=$conam->id?>" class="btn bg-blue text-white" title="مسح"><i class="fas fa-trash-alt"></i></a>
                                    </td>
									<td>{{$conam->name}}</td>
									<td>
									<?php    $city = DB::table('cities')->where('cancel', 0)->where('id', $conam->city)->get();

foreach ($city as $cit)
{ 
echo $cit->name;
 }
?>
									
									</td>
									<td>{{$conam->address}}</td>
									<td>{{$conam->phone}}</td>
									<td>{{$conam->vat}}</td>
									<td>                       
<?php    $users = DB::table('users')->where('cancel', 0)->where('id', $conam->user_id)->get();

foreach ($users as $user)
{ ?>
<a href="userview?userid=<?=$conam->user_id?>" class="btn bg-blue text-white" title="عرض"><i class="far fa-eye"></i>&nbsp;<?php echo $user->name; ?></a>

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