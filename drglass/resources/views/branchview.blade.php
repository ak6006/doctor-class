 @include('header_admin') 


			
			
			
			

	
	
	
	
	
	
	
	
	
	
	
	
        <!-- Main content -->
        <div class="container-fluid my-5 text-center text-blue">
            <h2><span class="pb-1 border-buttom" > بيانات الفرع  </span></h2>
			 <?php   
if (isset($_GET['bid'])) { ?>
        <h5 class="text-center px-5"> <?php 
		$branchs = DB::table('branches')->where('cancel', 0)->where('id', $_GET['bid'])->get();


foreach ($branchs as $branch)
{
		echo $branch->name; 
} }?> </h5>

                <div class="px-md-5 px-0 mt-5 overflow-auto">
                        <table id="example" class="table table-striped table-bordered  mx-auto shadow" style="width:85%">
                            <thead class="bg-blue text-white" style="font-size: larger;">
                                <tr>
                                    <th style="min-width: 165px;">التحكم</th>
                                    <th >اسم الفرع</th>
								<th class="align-middle"> العنوان </th>
                                <th class="align-middle"> الهاتف </th>
                                <th class="align-middle"> المنطقة </th>
                                <th class="align-middle">الشخص المسئول </th>
								<th class="align-middle"> اسم الشركة </th>
                                    
                                </tr>
                            </thead>
                            <tbody>
							
							
							     <?php   

								$branchs = DB::table('branches')->where('cancel', 0)->where('id', $_GET['bid'])->get();


								foreach ($branchs as $branch)
								{
								   
							?>
								<tr>
		                            <td>
                                        <a href="brancheditadmin?bid=<?=$branch->id?>" class="btn bg-blue text-white" title="تعديل"><i class="fas fa-edit"></i></a>
                                        <a href="branchview?bid=<?=$branch->id?>" class="btn bg-blue text-white" title="عرض"><i class="far fa-eye"></i></a>
                                        <button type="button" class="btn bg-blue text-white" title="حذف"><i class="fas fa-trash-alt"></i></button>
                                    </td>
									<td>{{$branch->name}}</td>
									<td>{{$branch->address}}</td>
									<td>{{$branch->phone}}</td>
									<td>
							<?php   

								$cities = DB::table('cities')->where('cancel', 0)->where('id', $branch->city)->get();
								foreach ($cities as $citie)
								{
								echo $citie->name;
								}								
							?>
									</td>
									<td>{{$branch->response_person}}</td>

									<td>                       
									<?php    $company = DB::table('students')->where('cancel', 0)->where('id', $branch->co_id)->get();

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