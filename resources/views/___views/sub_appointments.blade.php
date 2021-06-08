 @include('header_home') 

			
			
			
			
			
			
			
			<!DOCTYPE html>
<html>

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
            <h3><span class="pb-1 border-buttom" > مواعيد الباقة </span></h3>
            <div class="px-md-5 px-0 mt-5 overflow-auto">
                <table class="table table-striped table-bordered mx-auto shadow" style="width: 92%;">
                    <thead class="bg-blue text-white" style="font-size: larger;">
                        <tr>
                            <th class="align-middle"> اسم الفرع </th>
                          
                            <th class="align-middle"> الباقة  </th>
                            <th class="align-middle"> اجمالي السعر </th>
                            <th class="align-middle"> تاريخ البدء </th>
							  <th class="align-middle"> تاريخ الإنتهاء </th>
                            <th class="align-middle"> التفعيل </th>
                            <th class="align-middle">مدفوعة</th>
                        </tr>
                    </thead>
                    <tbody class="text-blue" style="font-size: large;">
                       <?php    $subscriptions = DB::table('subscriptions')->where('cancel', 0)->where('user_create_id', Auth::id())->where('id', $_GET['subid'])->get();

foreach ($subscriptions as $subscription)
{
   
?>
        <tr>
		<td class="align-middle"><?php $branchs = DB::table('branches')->where('cancel', 0)->where('id', $subscription->branch_id)->get(); ?>
<?php		foreach ($branchs as $branch) { 
echo $branch->name; }
?></td>
				
		<td class="align-middle">
		<?php $bouquets = DB::table('bouquets')->where('cancel', 0)->where('id', $subscription->subscription_id)->get(); ?>
<?php		foreach ($bouquets as $bouquet) { 
echo $bouquet->name; }
?>

		</td>
<td class="align-middle"> <?=$subscription->total_amount?></td>
		<td class="align-middle"><?=$subscription->date_from?></td>
		<td class="align-middle"><?=$subscription->date_to?></td>
		
		<td class="align-middle"><?php if($subscription->active == 0) { ?>
لا
<?php }else { ?>
نعم
<?php } ?></td>
    <td class="align-middle">
<?php if($subscription->paid == 0) { ?>
لا
<?php }else { ?>
نعم
<?php } ?>
		</td>    
        </tr>
        <?php } ?>
                       
                    </tbody>
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
                            
                          
                            <th colspan="4"> المواعيد</th>
                        
                        </tr>
                        <tr>
                            <th>اليوم</th>
                          
                            <th>الساعة </th>

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
								<input type="time" disabled value="<?=$appointment->hour_choosed;?>" class="py-1 shadow border-0 bg-blue text-white" style="padding-left:2.5rem; border-radius: 20px;">
                            </td>
                            
                            
                        </tr>

					<?php } ?>
		


	

					
                    </tbody>
                </table>
            </div>
            <hr class="w-25 my-4">
    </div>
</body>

</html>

										