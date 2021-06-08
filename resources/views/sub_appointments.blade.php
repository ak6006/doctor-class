	<?Php
	/*
                    DB::table('users')
                    ->where('id', Auth::id())
                    ->update(['blang' => substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2)])
                    ; */
  substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
?>

<?php
 	if (isset($_GET['lang'])){
                    DB::table('users')
                    ->where('id', Auth::id())
                    ->update(['lang' => $_GET['lang']])
                    ;
					//header("refresh: 0; ../?lang=$_GET[lang]");
					}
//if (isset($_GET['lang'])){ echo "lkjlkjljlkjlkjl";}
?>

@if (Route::has('login'))
@auth
<?php if (isset($_GET['lang'])){ ?>	
@php ($langg = $_GET['lang'])
<?php }else { ?>
@php ($langg = Auth::user()->lang)
<?php } ?>
@else
<?php if (isset($_GET['lang'])){ ?>	
@php ($langg = $_GET['lang'])
<?php }else { ?>
@php ($langg = @substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2))
<?php } ?>
@endauth
@endif
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
		 <?php if ($langg == "ar") { ?>
            <h3><span class="pb-1 border-buttom" > مواعيد الباقة </span></h3>
		 <?php }elseif ($langg == "en") { ?>
			 <h3><span class="pb-1 border-buttom" > Bouquet Appointments </span></h3>
			<?php } ?>
			
			<div class=" text-right px-5">
				
			</div>
            <div class="px-md-5 px-0 mt-5 overflow-auto">
			
                <table class="table table-striped table-bordered mx-auto shadow" style="width: 92%;">
                    <thead class="bg-blue text-white" style="font-size: larger;">
                         <?php if ($langg == "ar") { ?>
						 <tr>
						  <?php    $subscriptions1 = DB::table('subscriptions')->where('id', $_GET['subid'])->get();
							 foreach ($subscriptions1 as $subscriptions12)		{
						 ?>
							<th colspan="7"class="text-left">
							<?php if ($subscriptions12->cancel_request == 0) {?>
								<a  onclick="confirmfunc('ar');" class="btn bg-danger text-white px-4">طلب إيقاف الباقة</a>
							<?php }elseif ($subscriptions12->cancel_request == 1) {?>
							<a disabled  class="btn bg-danger text-white px-4"> تم إرسال طلب إيقاف الباقة</a>
						 <?php }  }?>
							</th>
						 </tr>

						<tr>
                            <th class="align-middle"> اسم الفرع </th>
                            <th class="align-middle"> الباقة  </th>
                            <th class="align-middle"> اجمالي السعر </th>
                            <th class="align-middle"> تاريخ البدء </th>
							  <th class="align-middle"> تاريخ الإنتهاء </th>
                            <th class="align-middle"> التفعيل </th>
                            <th class="align-middle">مدفوعة</th>
                        </tr>
						 <?php }elseif ($langg == "en") { ?>
						 <?php    $subscriptions1 = DB::table('subscriptions')->where('id', $_GET['subid'])->where('cancel', 0)->where('active', 0)->get("cancel_request");
									
						 ?>
						<tr>
						  <?php    $subscriptions1 = DB::table('subscriptions')->where('id', $_GET['subid'])->get();
							 foreach ($subscriptions1 as $subscriptions12)		{
						 ?>
							<th colspan="7"class="text-right">
							<?php if ($subscriptions12->cancel_request == '0') {?>
								<a  onclick="confirmfunc('ar');" class="btn bg-danger text-white px-4">Bouquet Cancel Request</a>
							<?php }elseif ($subscriptions12->cancel_request == '1') {?>
							<a disabled  class="btn bg-danger text-white px-4"> Bouquet Cancel Request sent</a>
						 <?php }  }?>
							</th>
						 </tr>
						 <tr>
                            <th class="align-middle">Branch Name </th>
                          
                            <th class="align-middle"> Bouquet  </th>
                            <th class="align-middle"> Total Price </th>
                            <th class="align-middle"> Start Date </th>
							  <th class="align-middle"> End Date </th>
                            <th class="align-middle"> Activation </th>
                            <th class="align-middle">Paid</th>
                        </tr>
						 <?php } ?>
                    </thead>
                    <tbody class="text-blue" style="font-size: large;">
                       <?php    $subscriptions = DB::table('subscriptions')->where('cancel', 0)->where('user_create_id', Auth::id())->where('id', $_GET['subid'])->get();

foreach ($subscriptions as $subscription)
{
	?>
	<button type="button" class="btn bg-blue text-white px-5 mb-4"><?php echo "ID" . $subscription->id;?></button>

        <tr>
		<td class="align-middle"><?php $branchs = DB::table('branches')->where('cancel', 0)->where('id', $subscription->branch_id)->get(); ?>
<?php		foreach ($branchs as $branch) { 
echo $branch->name; }
?></td>
				
		<td class="align-middle">
		<?php $bouquets = DB::table('bouquets')->where('cancel', 0)->where('id', $subscription->subscription_id)->get(); ?>
<?php		foreach ($bouquets as $bouquet) { 
			if ($langg == "ar") { 
			echo $bouquet->name; 
			}elseif ($langg == "en") {
				echo $bouquet->name_en; 
			}
			}
?>

		</td>
<td class="align-middle"> <?=$subscription->total_amount?></td>
		<td class="align-middle"><?=$subscription->date_from?></td>
		<td class="align-middle"><?=$subscription->date_to?></td>
		
		<td class="align-middle">
<?php if($subscription->active == 0) { ?>
<?php if ($langg == "ar") { ?>
لا
<?php }elseif ($langg == "en") { ?>
No
<?php } ?>
<?php }else { ?>
<?php if ($langg == "ar") { ?>
نعم
<?php }elseif ($langg == "en") { ?>
Yes
<?php } ?>
<?php } ?></td>
    <td class="align-middle">
<?php if($subscription->paid == 0) { ?>
<?php if ($langg == "ar") { ?>
لا
<?php }elseif ($langg == "en") { ?>
No
<?php } ?>
<?php }else { ?>
<?php if ($langg == "ar") { ?>
نعم
<?php }elseif ($langg == "en") { ?>
Yes
<?php } ?>
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
                            
                          <?php if ($langg == "ar") { ?>
                            <th colspan="4"> طريقة الدفع</th>
						  <?php }elseif ($langg == "en") { ?>
						   <th colspan="4">  Payment Method</th>
						  <?php } ?>
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
                            
                          <?php if ($langg == "ar") { ?>
                            <th colspan="4"> المواعيد</th>
						  <?php }elseif ($langg == "en") { ?>
						  <th colspan="4"> Appointments</th>
						  <?php } ?>
                        
                        </tr>
						 <?php if ($langg == "ar") { ?>
                        <tr>
                            <th>اليوم</th>
                            <th>الساعة </th>
                        </tr>
						<?php }elseif ($langg == "en") { ?>
						<tr>
                            <th>Day</th>
                            <th>Hour </th>
                        </tr>
						<?php } ?>
                    </thead>
                    <tbody class="text-blue" style="font-size: large;">
					    <?php      
							
		$appointments = DB::table('appointments_details')->where('cancel', 0)->where('appointments_id', $_GET['subid'])->get();

					
		?>
		
			<?php foreach ($appointments as $appointment)
					{ ?>
					<?php if ($langg == "ar") { ?>
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
								<input type="time" disabled="" value="10:20" class="py-1 shadow border-0 bg-blue text-white" style="padding-left:2.5rem; border-radius: 20px;">
							</td>
                        </tr>
<?php }elseif ($langg == "en") { ?>
                       <tr>
						<?php if ($appointment->day == 1 ) { ?>
                            <td>Saturday</td>
						<?php }elseif ($appointment->day == 2 ) { ?>
						  <td>Sunday</td>
						  <?php }elseif ($appointment->day == 3 ) { ?>
						  <td>Monday</td>
						  <?php }elseif ($appointment->day == 4 ) { ?>
						  <td>Tuesday</td>
						  <?php }elseif ($appointment->day == 5 ) { ?>
						  <td>Wednesday</td>
						  <?php }elseif ($appointment->day == 6 ) { ?>
						  <td>Thursday</td>
						  <?php }elseif ($appointment->day == 7 ) { ?>
						  <td>Friday</td>
						  <?php } ?>
                            <td>
								<input type="time" disabled value="<?=$appointment->hour_choosed;?>" class="py-1 shadow border-0 bg-blue text-white" style="padding-left:2.5rem; border-radius: 20px;">
                            </td>
                        </tr>
<?php } ?>
					<?php } ?>
		


	

					
                    </tbody>
                </table>
            </div>
            <hr class="w-25 my-4">
    </div>
</body>
<script>
function confirmfunc(lang) {
	if(lang=="ar"){
		var r = confirm('هل تريد ايقاف الباقة بالفعل ؟');
	}
	else{
		var r =confirm('Do you want to cancel this Bouquet ?');
	}
  if (r == true) {
    window.location.href = "bouquetcancelrequest?subid=<?=$_GET['subid']?>";
  } else {
  }
  document.getElementById("demo").innerHTML = txt;
}
</script>
</html>

										