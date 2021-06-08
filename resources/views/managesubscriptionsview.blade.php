 @include('header_admin') 

	<?php
if (isset($_GET['activate'])){
                    DB::table('subscriptions')
                    ->where('id', $_GET['subid'])
                    ->update(['active' => $_GET["activate"]])
                    ;
					}
					if (isset($_GET['pay'])){
                    DB::table('subscriptions')
                    ->where('id', $_GET['subid'])
                    ->update(['paid' => $_GET["pay"]])
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
            <h2><span class="pb-1 border-buttom" > بيانات الإشتراك </span></h2>
            <div class="px-md-5 px-0 my-5 overflow-auto">
                <table class="table table-striped table-bordered  mx-auto shadow" style="width:90%">
                    <thead class="bg-blue text-white" style="font-size: larger;">
                        <tr>
                            <th class="align-middle"style="min-width: 165px;">التحكم</th>
                            <th class="align-middle"> إسم الفرع </th>
                            <th class="align-middle"> اسم الشركة </th>
                            <th class="align-middle"> الباقة </th>
                            <th class="align-middle"> اجمالي السعر </th>
                            <th class="align-middle"> تاريخ البدء </th>
							<th class="align-middle"> تاريخ الإنتهاء </th>
                            <th class="align-middle"> التفعيل </th>
                            <th class="align-middle"> مدفوعة </th>
                        </tr>
                    </thead>
                    <tbody>
					<?php    $subscriptions = DB::table('subscriptions')->where('cancel', 0)->where('id', $_GET['subid'])->get();

foreach ($subscriptions as $subscription)
{
   
?>


     
			   
         
                        <tr>
                            <td class="align-middle">
                                <a href="managesubscriptionsedit?subid=<?=$subscription->id?>" class="btn bg-blue text-white" title="تعديل"><i class="fas fa-edit"></i></a>
                                <a href="managesubscriptionsview?subid=<?=$subscription->id?>" class="btn bg-blue text-white" title="عرض"><i class="far fa-eye"></i></a>
                                <a href="managesubscriptionsdelete?subid=<?=$subscription->id?>" onclick="return confirm(' هل تريد مسح الإشتراك؟')" class="btn bg-blue text-white" title="حذف"><i class="fas fa-trash-alt"></i></a>
                            </td>
                            <td class="align-middle"><?php $branchs = DB::table('branches')->where('cancel', 0)->where('id', $subscription->branch_id)->get(); ?>
<?php		foreach ($branchs as $branch) { 
echo $branch->name; }
?></td>
                            <td class="align-middle"><?php $companies = DB::table('students')->where('cancel', 0)->where('user_id', $subscription->user_create_id)->get(); ?>
<?php		foreach ($companies as $companie) { 
echo $companie->name; }
?></td>
                            <td class="align-middle"> 	
							<?php $bouquets = DB::table('bouquets')->where('cancel', 0)->where('id', $subscription->subscription_id)->get(); ?>
<?php		foreach ($bouquets as $bouquet) { 
echo $bouquet->name; }
?></td>
                            <td class="align-middle"><?=$subscription->total_amount?></td>
                            <td class="align-middle"><?=$subscription->date_from?></td>
							<td class="align-middle"><?=$subscription->date_to?></td>
                            <td class="align-middle"><?php if($subscription->active == 0) { ?>
لا
<?php }else { ?>
نعم
<?php } ?></td>
                            <td class="align-middle"><?php if($subscription->paid == 0) { ?>
لا
<?php }else { ?>
نعم
<?php } ?></td>
                        </tr>
						
						
						
<?php } ?>
                    </tbody>
                    <tfoot>
                        
                    </tfoot>
                </table>
            </div>
        </div>
<div class="px-md-5 px-0 mt-5 overflow-auto">
                <table class="table table-striped table-bordered w-75 mx-auto shadow">
                    <thead class="bg-blue text-white" style="font-size: larger;">
                       
                        <tr>
                            
                          
                            <th colspan="4"> طريقة الدفع</th>
                        
                        </tr>
                        <tr>
						        <?php 
		$payment_methods = DB::table('payment_methods')

		->where('id', $subscription->payment_method)->get(); 
		foreach($payment_methods as $payment_method)     {
		
		?>
						 
		
                            <th><?=$payment_method->name?></th>
							<?php } ?>
                          
                            
                          
                            
                        </tr>
                    </thead>
                    
                </table>
            </div>	


<div class="px-md-5 px-0 mt-5 overflow-auto">
                <table class="table table-striped table-bordered w-75 mx-auto shadow">
                    <thead class="bg-blue text-white" style="font-size: larger;">
                       
                        <tr>
                       
                          
                            <th colspan="3"> المواعيد</th>
                        
                        </tr>
                        <tr>
                            <th>اليوم</th>
                          
                            <th>الوقت</th>
              
                            
                        </tr>
                    </thead>
                    <tbody class="text-blue" style="font-size: large;">
					    <?php      
							
		$appointments = DB::table('appointments_details')->where('cancel', 0)->where('appointments_id', $_GET['subid'])->get();

					
		?>
		
			<?php foreach ($appointments as $appointment)
					{ ?>
                        <tr>
                            <?php if ($appointment->day == 1 ) { ?>
                            <td>السبت</td>
						<?php }elseif ($appointment->day == 2 ) { ?>
						  <td>الأحد</td>
						  <?php }elseif ($appointment->day == 3 ) { ?>
						  <td>الإثنين</td>
						  <?php }elseif ($appointment->day == 4 ) { ?>
						  <td>الثلاثاء</td>
						  <?php }elseif ($appointment->day == 5 ) { ?>
						  <td>الأربعاء</td>
						  <?php }elseif ($appointment->day == 6 ) { ?>
						  <td>الخميس</td>
						  <?php }elseif ($appointment->day == 7 ) { ?>
						  <td>الجمعة</td>
						  <?php } ?>
                            <td>
                                <span class="px-5 py-1 bg-blue text-white" style="border-radius: 20px;"><?=$appointment->hour_choosed;?> </span>
                            </td>

                            
                        </tr>

					<?php } ?>
		


	

					
                    </tbody>
                </table>
            </div>
 @include('footer_admin') 