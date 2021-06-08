<?php if (Auth::user()->role == "admin") { ?>
@include('header_admin')
<?php } elseif (Auth::user()->role == "") { ?>
@include('header_home') 
<?php } ?>

@extends('layout')

@section('content')

 <?php
                    use Illuminate\Support\Facades\Auth;

                    // Get the currently authenticated user...
                    //echo $user = Auth::user() . "<hr/>"; 
                    // Get the currently authenticated user's ID...
					
                    $id = Auth::id() ;
					
					if ($id) {
                    $name = Auth::user()->name;
                    $email = Auth::user()->email;
					$role = Auth::user()->role;
                    $verified = Auth::user()->email_verified_at ;
					}
                    $title = '';
                 
					if (isset($_GET['active']))   // if ANY of the options was checked
					   $_GET['active'];    // echo the choice
					   
					if (isset($_GET['active'])){
                    DB::table('subscriptions')
                    ->where('id', $_GET['maxid'])
                    ->update(['branch_id' => $_GET["active"]])
                    ;
					}
					if (isset($_GET['date_from'])){
                    DB::table('subscriptions')
                    ->where('id', $_GET['maxid'])
                    ->update(['date_from' => $_GET["date_from"]])
                    ;
					}
						if (isset($_GET['date_from'])){
							
										
			
						$Date = $_GET['date_from'];
						$enddate = date('Y-m-d', strtotime($Date. ' + 29 days'));

				
                    DB::table('subscriptions')
                    ->where('id', $_GET['maxid'])
                    ->update(['date_to' => $enddate])
                    ;
					}
/*
					if (isset($_GET['active1'])){
					DB::insert('insert into appointments_details (appointments_id, create_user_id, day, hour_from, hour_to) values (?, ?, ?, ?, ?)', [$_GET['maxid'],  Auth::id(), $_GET['day1'], $_GET['choosefromhour1'], $_GET['choosetohour1']]); 
					}
					if (isset($_GET['active2'])){
					DB::insert('insert into appointments_details (appointments_id, create_user_id, day, hour_from, hour_to) values (?, ?, ?, ?, ?)', [$_GET['maxid'],  Auth::id(), $_GET['day2'], $_GET['choosefromhour2'], $_GET['choosetohour2']]); 
					}
					if (isset($_GET['active3'])){
					DB::insert('insert into appointments_details (appointments_id, create_user_id, day, hour_from, hour_to) values (?, ?, ?, ?, ?)', [$_GET['maxid'],  Auth::id(), $_GET['day3'], $_GET['choosefromhour3'], $_GET['choosetohour3']]); 
					}
					if (isset($_GET['active4'])){
					DB::insert('insert into appointments_details (appointments_id, create_user_id, day, hour_from, hour_to) values (?, ?, ?, ?, ?)', [$_GET['maxid'],  Auth::id(), $_GET['day4'], $_GET['choosefromhour4'], $_GET['choosetohour4']]); 
					}
					if (isset($_GET['active5'])){
					DB::insert('insert into appointments_details (appointments_id, create_user_id, day, hour_from, hour_to) values (?, ?, ?, ?, ?)', [$_GET['maxid'],  Auth::id(), $_GET['day5'], $_GET['choosefromhour5'], $_GET['choosetohour5']]); 
					}
					if (isset($_GET['active6'])){
					DB::insert('insert into appointments_details (appointments_id, create_user_id, day, hour_from, hour_to) values (?, ?, ?, ?, ?)', [$_GET['maxid'],  Auth::id(), $_GET['day6'], $_GET['choosefromhour6'], $_GET['choosetohour6']]); 
					}
					if (isset($_GET['active7'])){
					DB::insert('insert into appointments_details (appointments_id, create_user_id, day, hour_from, hour_to) values (?, ?, ?, ?, ?)', [$_GET['maxid'],  Auth::id(), $_GET['day7'], $_GET['choosefromhour7'], $_GET['choosetohour7']]); 
					}
*/



					if (isset($_GET['total_amount'])){
                    DB::table('subscriptions')
                    ->where('id', $_GET['maxid'])
                    ->update(['total_amount' => $_GET['total_amount']])
                    ;
					}
					if (isset($_GET['total_amount'])) {

DB::insert('insert into money_wallet (companyid, boqauet_cridet, entry_userid, subid) values (?, ?, ?, ?)', 
[$_GET['compnayidd'], $_GET['total_amount'], Auth::id(), $_GET['maxid']]);


 }
						if (isset($_GET['payRadio'])){
                    DB::table('subscriptions')
                    ->where('id', $_GET['maxid'])
                    ->update(['payment_method' => $_GET['payRadio']])
                    ;
					header("refresh: 0; subscriptions_success");
				
					}
				 ?>
				
		<style>
            input[type="time"]::-webkit-calendar-picker-indicator {
                display: none !important;
            }

            input[type="time"]::-webkit-calendar-picker-indicator {
                display: none !important;
            }
            .calender::-webkit-scrollbar {
                width: 10px;
                height: 10px;
            }

                /* Track */
            ::-webkit-scrollbar-track {
                box-shadow: inset 0 0 5px grey; 
                border-radius: 10px;
            }
                
                /* Handle */
            ::-webkit-scrollbar-thumb {
                background: #6a7177; 
                border-radius: 10px;
            }

                /* Handle on hover */
            ::-webkit-scrollbar-thumb:hover {
                background: #60666d; 
            }
            th {
                z-index: 20;
                position: sticky;
                top: 0;
                background-color: #0174CF ;
            }

        </style>


<div class="container-fluid my-5 text-center text-blue">
            <h3><span class="pb-1 border-buttom" >
			<?php	$sub = DB::table('subscriptions')->where('id', $_GET['maxid'])->get();

												
									?>
									
									<?php foreach ($sub as $subs)
												{ ?>
			<?php      
									$bouquets = DB::table('bouquets')->where('id', $subs->subscription_id)->get();
			
									?>
									
									<?php foreach ($bouquets as $bouquet)
												{ ?>
									<?= $bouquet->name;?>
									</span></h3>
            <div class="px-md-5 px-0 mt-5 overflow-auto">
                <table class="table table-striped table-bordered w-75 mx-auto shadow">
                    <thead class="bg-blue text-white" style="font-size: larger;">
                        <tr>
                            <th >اسم الشركة</th>
                            <th >كود الشركة</th>
                        </tr>
                    </thead>
                    <tbody class="text-blue" style="font-size: large;">
								 <?php      
									$students = DB::table('students')->where('user_id', Auth::id())->get();

												
									?>
									
									<?php foreach ($students as $student)
												{ ?>
								
									
                          
        <tr>
            <td>{{$student->name}}</td>
			
			<td>{{$student->id}}</td>

                    </tr>
                    </tbody>
                </table>
            </div>
            <hr class="w-25 my-4">
			<form method="get" action="">
				 @csrf
				 @method('PATCH')
				<input type="hidden" name="maxid" value="<?=$subs->id?>">
				<input type="hidden" name="compnayidd" value="<?=$student->id?>">
									<?php
									$subscriptionssd = DB::table('subscriptions')->where('id', $subs->id)->get();

									foreach ($subscriptionssd as $subscriptionsssd)
												{ 
												if ($subscriptionsssd->branch_id == NULL) {
									?>
			<h3 class=""><span class="pb-1 border-buttom"> اختيار الفرع</span></h3>
            <div class="px-md-5 px-0 mt-5 overflow-auto">
                <table class="table table-striped table-bordered w-75 mx-auto shadow">
                    <thead class="bg-blue text-white" style="font-size: larger;">
                        <tr>
                            <th >اسم الفرع</th>
                            <th >كود الفرع</th>
                            <th >المنطقة </th>
							<!-- <th >الباقة المفعلة </th>-->
                            <th >اختيار الفرع</th>
							
                        </tr>
                    </thead>
                    <tbody class="text-blue" style="font-size: large;">
					
					<?php     
					$branch = DB::table('branches')->where('co_id', $student->id)->get();

					foreach ($branch as $branchss)
					{
					   ?>

        <tr>

			<td><?=$branchss->name ?></td>
				<td><?=$branchss->code ?></td>
									<?php      
									$city = DB::table('cities')->where('id', $branchss->city)->get();			
									?>
									<?php foreach ($city as $contr)
												{ ?>
									<td><?= $contr->name;?></td>
									<?php }?>
								<!--	<td>
									<?php 
									/*echo $date_now = date("Y-m-d");
									echo $activeboq = DB::table('subscriptions')
									->where('branch_id', $branchss->id)
									->where('date_to', '<=', '2021-05-11')->get("date_to");
									if($activeboq != null){echo "boq name";}
									echo $branchss->id."---";
									//echo $subscriptionsssd->date_to;*/
									?>
									</td>		-->	
									<td>
									<div class="form-check">
									<input class="form-check-input" type="radio" value="<?=$branchss->id?>" name="active">
									</div>
									</td>
									</tr>
		<?php } ?>
    
	
	
                    </tbody>
                </table>
            </div>
												
												<?php }else {
													
												?>
            <h3 class=""><span class="pb-1 border-buttom">تم اختيار الفرع</span></h3>
            <div class="px-md-5 px-0 mt-5 overflow-auto">
                <table class="table table-striped table-bordered w-75 mx-auto shadow">
                    <thead class="bg-blue text-white" style="font-size: larger;">
                        <tr>
                            <th >اسم الفرع</th>
                            <th >كود الفرع</th>
                            <th >المنطقة </th>
                            <th >اختيار الفرع</th>
                        </tr>
                    </thead>
                    <tbody class="text-blue" style="font-size: large;">
					<?php      $branch = DB::table('branches')->where('id', $subscriptionsssd->branch_id)->get();

				foreach ($branch as $branchss)
				{
   ?>

        <tr>


			
			<td><?=$branchss->name ?></td>
			<td><?=$branchss->code ?></td>
						 <?php      
									$city = DB::table('cities')->where('id', $branchss->city)->get();

												
									?>
									
									<?php foreach ($city as $contr)
												{ ?>
									<td><?= $contr->name;?></td>
									<?php }?>
			
			
			
		<td>
		<div class="form-check">
		<input type="radio" checked value="<?=$branchss->id?>" name="active" class="form-check-input">
		</div>
		</td>
                    </tr>
		<?php } ?>
                        
                    </tbody>
                </table>
            </div>
			<?php } } ?>
			
				<?php	$subscriptionss = DB::table('subscriptions')->where('id', $subs->id)->get();

									foreach ($subscriptionss as $subscriptionsss)
												{ 
												if ($subscriptionsss->branch_id != NULL) {
												?>
			
			
			
			
			<?php if ($subscriptionsss->date_from != NULL) { ?>
            <hr class="w-25 my-4">
            <h5 class="mb-3">تم اختيار تاريخ  تفعيل الباقة </h5>
            <div class="form-group row  mx-auto">
                <div class="col-12 px-sm-5">
				<?php if (Auth::user()->role == "admin") { ?>
                  <input class="form-control px-4 mx-auto bg-blue text-white" name="date_from"  style="width: 215px;border-radius: 20px;" type="date" value="<?php echo date('Y-m-d');?>" id="example-date-input">
				<?php } else { ?>
					<input disabled class="form-control px-4 mx-auto bg-blue text-white text-center" name="date_from"  style="width: 215px;border-radius: 20px;"  value="<?=$subscriptionsss->date_from?>" >
                <?php } ?>
				</div>

            </div>
			 <h5 class="mb-3">تاريخ انتهاء الباقة  </h5>
            <div class="form-group row  mx-auto">
                <div class="col-12 px-sm-5">
                  <input disabled class="form-control px-4 mx-auto bg-blue text-white text-center" name="date_to"  style="width: 215px;border-radius: 20px;"  value="<?=$subscriptionsss->date_to?>" >
                </div>

            </div>
            <p style="font-weight: bolder;"> مدة الباقة   <?= $bouquet->dayspersubscription;?> يوم </p>
            <hr class="w-25 my-4">
			<?php }else { ?>
			
			<hr class="w-25 my-4">
            <h5 class="mb-3">  اختيار تاريخ تفعيل الباقة </h5>
            <div class="form-group row  mx-auto">
                <div class="col-12 px-sm-5">
                  <input class="form-control px-4 mx-auto bg-blue text-white" name="date_from"  style="width: 215px;border-radius: 20px;" type="date" value="<?php echo date('Y-m-d');?>" id="example-date-input">
                </div>
            </div>
            <p style="font-weight: bolder;">علما بان مدة الباقة   <?= $bouquet->dayspersubscription;?> يوم </p>
            <hr class="w-25 my-4">
			<?php } ?>
			
			 <?php if ($subscriptionsss->date_from != NULL) { ?>
            <h3><span class="pb-1 border-buttom" >  إختيار مواعيد الزيارات</span></h3>
            <p class="text-dark"> بحد أقصى عدد   <?= $bouquet->daysperweek;?> يوم فى الأسبوع </p>
            <div class="px-md-5 px-0 mt-5 overflow-auto">
                <table class="table table-striped table-bordered w-75 mx-auto shadow" id="largtable">
                    <thead class="bg-blue text-white" style="font-size: larger;">
                        <tr>
                            <th colspan="6"> مواعيد العمل في منطقة  <?php      
									$city = DB::table('cities')->where('id', $branchss->city)->get();

												
									?>
									
									<?php foreach ($city as $contr)
												{ ?>
									<?= $contr->name;?>  </th>
                        </tr>
                        <tr>
                            <th></th>
                            <th colspan="2">المواعيد المتاحة</th>
                            <th colspan="2">اختيار المواعيد</th>
                            
                        </tr>
                        <tr>
					
                            <th>اليوم</th>
                            <th style="min-width:170px;">من الساعة</th>
							<th style="min-width:170px;">إلى الساعة</th>
                            <th style="min-width:170px;">اختيار الوقت</th>

                            <th>اليوم</th>
                        </tr>
                    </thead>
                    <tbody class="text-blue" style="font-size: large;">
					    <?php      
							
		$appointments = DB::table('appointments')->where('cancel', 0)->where('active', 0)->where('city_id', $contr->id)->where('id', 1)->get();

					
		?>
		
			<?php foreach ($appointments as $appointment)
					{ ?>
                        <tr>
						
                            <td><?=$appointment->day_name;?>
							<input id="day1"  name="day1" type="hidden" value="<?=$appointment->day_name;?>">
							</td>
                            <td>
								<input type="time" disabled value="<?=$appointment->fromhour;?>" class="py-1 shadow border-0 bg-blue text-white px-4" style=" border-radius: 20px;">
                  
                            </td>
                           <td>
								<input type="time" disabled value="<?=$appointment->tohour;?>" class="py-1 shadow border-0 bg-blue text-white px-4" style=" border-radius: 20px;">
                  
                            </td>
					<?php 		
		$appointments_detailss = DB::table('appointments_details')
		->where('cancel', 0)
		->where('active', 0)
		->where('day', $appointment->id)
		->where('appointments_id', $_GET['maxid'])->exists(); 
		if ($appointments_detailss == null){ 
		?>
                            <td>
								<a href="subscriptionschoosetime?appid=<?=$appointment->id;?>&subscriptionid=<?=$subs->id?>&new=1" class=" btn text-blue shadow bg-white px-5 pb-2 " style="font-size:large; border:1px solid #2a56c6; border-radius: 20px; display:none;"  id="satarday" >إختار</a>
                            </td>
                            <td>
                                <div class="form-check">
                                  <input type="checkbox" id="satardaycheck"   value="<?=$appointment->id;?>" name="active1" class="form-check-input1">
                                </div>
                            </td>
		<?php }else { ?>
		
							<td>
		<?php 
		$appointments_detailsss = DB::table('appointments_details')
		->where('cancel', 0)
		->where('active', 0)
		->where('day', $appointment->id)
		->where('appointments_id', $_GET['maxid'])->get(); 
		foreach($appointments_detailsss as $appointments_deta)     {
		 ?>
		<input type="time" disabled value="<?=$appointments_deta->hour_choosed;?>" class="py-1 shadow border-0 bg-white text-blue px-4" style=" border-radius: 20px;">

		
		<?php }
		?>
                            </td>
                            <td>
                                <div class="form-check">
                                  <input type="checkbox" disabled  checked value="<?=$appointment->id;?>" name="active1" class="form-check-input1">
                                </div>
                            </td>
		
		<?php } ?>
                        </tr>
						<script>
							$("#satardaycheck").change(function(){
								if(document.getElementById("satarday").style.display == "none"){
									$("#satarday").css("display", "inline-block");
								}
							  else{
								  $("#satarday").css("display", "none");
							  }
							});
						</script>
					<?php } ?>
					<?php      
							
		$appointments = DB::table('appointments')->where('cancel', 0)->where('active', 0)->where('city_id', $contr->id)->where('id', 2)->get();

					
		?>
		
			<?php foreach ($appointments as $appointment)
					{ ?>
                        <tr>
                            <td><?=$appointment->day_name;?>
							<input id="day2"  name="day2" type="hidden" value="<?=$appointment->day_name;?>">
							</td>
                           <td>
								<input type="time" disabled value="<?=$appointment->fromhour;?>" class="py-1 shadow border-0 bg-blue text-white px-4" style=" border-radius: 20px;">
                  
                            </td>
                            <td>
							<input type="time" disabled value="<?=$appointment->tohour;?>" class="py-1 shadow border-0 bg-blue text-white px-4" style=" border-radius: 20px;">

                            </td>
							<?php 		
		$appointments_detailss = DB::table('appointments_details')
		->where('cancel', 0)
		->where('active', 0)
		->where('day', $appointment->id)
		->where('appointments_id', $_GET['maxid'])->exists(); 
		if ($appointments_detailss == null){ 
		?>
                            <td>
						<a href="subscriptionschoosetime?appid=<?=$appointment->id;?>&subscriptionid=<?=$subs->id?>&new=1"  id="sunday" class=" btn text-blue shadow bg-white px-5 pb-2" style="font-size:large; border:1px solid #2a56c6; border-radius: 20px; display:none;" >إختار</a>
                            </td>
                       
                            <td>
                                <div class="form-check">
                                  <input type="checkbox" id="sundaycheck"  value="<?=$appointment->id;?>" name="active2" class="form-check-input1">
                                </div>
                            </td>
							<?php }else { ?>
		
							<td>
		<?php 
		$appointments_detailsss = DB::table('appointments_details')
		->where('cancel', 0)
		->where('active', 0)
		->where('day', $appointment->id)
		->where('appointments_id', $_GET['maxid'])->get(); 
		foreach($appointments_detailsss as $appointments_deta)     {
		 
		?>
				<input type="time" disabled value="<?=$appointments_deta->hour_choosed;?>" class="py-1 shadow border-0 bg-white text-blue px-4" style=" border-radius: 20px;">

		
		<?php }
		?>
                            </td>
                            <td>
                                <div class="form-check">
                                  <input type="checkbox" disabled  checked value="<?=$appointment->id;?>" name="active1" class="form-check-input1">
                                </div>
                            </td>
		
		<?php } ?>
                        </tr>
						<script>
							$("#sundaycheck").change(function(){
								if(document.getElementById("sunday").style.display == "none"){
									$("#sunday").css("display", "inline-block");
								}
							  else{
								  $("#sunday").css("display", "none");
							  }
							});
						</script>
					<?php } ?>
					<?php      
							
		$appointments = DB::table('appointments')->where('cancel', 0)->where('active', 0)->where('city_id', $contr->id)->where('id', 3)->get();

					
		?>
		
			<?php foreach ($appointments as $appointment)
					{ ?>
                        <tr>
                            <td><?=$appointment->day_name;?>
							<input id="day3"  name="day3" type="hidden" value="<?=$appointment->day_name;?>">
							</td>
                            <td>
								<input type="time" disabled value="<?=$appointment->fromhour;?>" class="py-1 shadow border-0 bg-blue text-white px-4" style=" border-radius: 20px;">
                  
                            </td>
                            <td>
							<input type="time" disabled value="<?=$appointment->tohour;?>" class="py-1 shadow border-0 bg-blue text-white px-4" style=" border-radius: 20px;">

                            </td>
							<?php 		
		$appointments_detailss = DB::table('appointments_details')
		->where('cancel', 0)
		->where('active', 0)
		->where('day', $appointment->id)
		->where('appointments_id', $_GET['maxid'])->exists(); 
		if ($appointments_detailss == null){ 
		?>
                            <td>
								<a href="subscriptionschoosetime?appid=<?=$appointment->id;?>&subscriptionid=<?=$subs->id?>&new=1"  class=" btn text-blue shadow bg-white px-5 pb-2" style="font-size:large; border:1px solid #2a56c6; border-radius: 20px; display:none;" id="monday">إختار</a>

                            </td>
              
                            <td>
                                <div class="form-check">
                                  <input type="checkbox" id="mondaycheck"  value="<?=$appointment->id;?>" name="active3" class="form-check-input1">
                                </div>
                            </td>
							<?php }else { ?>
		
							<td>
		<?php 
		$appointments_detailsss = DB::table('appointments_details')
		->where('cancel', 0)
		->where('active', 0)
		->where('day', $appointment->id)
		->where('appointments_id', $_GET['maxid'])->get(); 
		foreach($appointments_detailsss as $appointments_deta)     {
	
		?>
				<input type="time" disabled value="<?=$appointments_deta->hour_choosed;?>" class="py-1 shadow border-0 bg-white text-blue px-4" style=" border-radius: 20px;">

		
		<?php }
		?>
                            </td>
                            <td>
                                <div class="form-check">
                                  <input type="checkbox" disabled  checked value="<?=$appointment->id;?>" name="active1" class="form-check-input1">
                                </div>
                            </td>
		
		<?php } ?>
                        </tr>

						<script>
							$("#mondaycheck").change(function(){
								if(document.getElementById("monday").style.display == "none"){
									$("#monday").css("display", "inline-block");
								}
							  else{
								  $("#monday").css("display", "none");
							  }
							});
						</script>
					<?php } ?>
					<?php      
							
		$appointments = DB::table('appointments')->where('cancel', 0)->where('active', 0)->where('city_id', $contr->id)->where('id', 4)->get();

					
		?>
		
			<?php foreach ($appointments as $appointment)
					{ ?>
                        <tr>
                            <td><?=$appointment->day_name;?>
							<input id="day4"  name="day4" type="hidden" value="<?=$appointment->day_name;?>">
							</td>
                            <td>
								<input type="time" disabled value="<?=$appointment->fromhour;?>" class="py-1 shadow border-0 bg-blue text-white px-4" style=" border-radius: 20px;">
                  
                            </td>
                            <td>
							<input type="time" disabled value="<?=$appointment->tohour;?>" class="py-1 shadow border-0 bg-blue text-white px-4" style=" border-radius: 20px;">

                            </td>
							<?php 		
		$appointments_detailss = DB::table('appointments_details')
		->where('cancel', 0)
		->where('active', 0)
		->where('day', $appointment->id)
		->where('appointments_id', $_GET['maxid'])->exists(); 
		if ($appointments_detailss == null){ 
		?>
                            <td>
								<a href="subscriptionschoosetime?appid=<?=$appointment->id;?>&subscriptionid=<?=$subs->id?>&new=1" class=" btn text-blue shadow bg-white px-5 pb-2" style="font-size:large; border:1px solid #2a56c6; border-radius: 20px; display:none;"  id="tuesday">إختار</a>

                            </td>
                           
                            <td>
                                <div class="form-check">
                                  <input type="checkbox" id="tuesdaycheck"  value="<?=$appointment->id;?>" name="active4" class="form-check-input1">
                                </div>
                            </td>
							<?php }else { ?>
		
							<td>
		<?php 
		$appointments_detailsss = DB::table('appointments_details')
		->where('cancel', 0)
		->where('active', 0)
		->where('day', $appointment->id)
		->where('appointments_id', $_GET['maxid'])->get(); 
		foreach($appointments_detailsss as $appointments_deta)     {
	
		?>
				<input type="time" disabled value="<?=$appointments_deta->hour_choosed;?>" class="py-1 shadow border-0 bg-white text-blue px-4" style=" border-radius: 20px;">

		
		<?php }
		?>
                            </td>
                            <td>
                                <div class="form-check">
                                  <input type="checkbox" disabled  checked value="<?=$appointment->id;?>" name="active1" class="form-check-input1">
                                </div>
                            </td>
		
		<?php } ?>
                        </tr>
						<script>
							$("#tuesdaycheck").change(function(){
								if(document.getElementById("tuesday").style.display == "none"){
									$("#tuesday").css("display", "inline-block");
								}
							  else{
								  $("#tuesday").css("display", "none");
							  }
							});
						</script>
					<?php } ?>
					<?php      
							
		$appointments = DB::table('appointments')->where('cancel', 0)->where('active', 0)->where('city_id', $contr->id)->where('id', 5)->get();

					
		?>
		
			<?php foreach ($appointments as $appointment)
					{ ?>
                        <tr>
                            <td><?=$appointment->day_name;?>
							<input id="day5"  name="day5" type="hidden" value="<?=$appointment->day_name;?>">
							</td>
                            <td>
								<input type="time" disabled value="<?=$appointment->fromhour;?>" class="py-1 shadow border-0 bg-blue text-white px-4" style=" border-radius: 20px;">
                  
                            </td>
                            <td>
							<input type="time" disabled value="<?=$appointment->tohour;?>" class="py-1 shadow border-0 bg-blue text-white px-4" style=" border-radius: 20px;">

                            </td>
							<?php 		
		$appointments_detailss = DB::table('appointments_details')
		->where('cancel', 0)
		->where('active', 0)
		->where('day', $appointment->id)
		->where('appointments_id', $_GET['maxid'])->exists(); 
		if ($appointments_detailss == null){ 
		?>
                            <td>
								<a href="subscriptionschoosetime?appid=<?=$appointment->id;?>&subscriptionid=<?=$subs->id?>&new=1"  class=" btn text-blue shadow bg-white px-5 pb-2" style="font-size:large; border:1px solid #2a56c6; border-radius: 20px; display:none;" id="wednesday" >إختار</a>

                            </td>
                            
                            <td>
                                <div class="form-check">
                                  <input type="checkbox" id="wednesdaycheck"  value="<?=$appointment->id;?>" name="active5" class="form-check-input1">
                                </div>
                            </td>
							<?php }else { ?>
		
							<td>
		<?php 
		$appointments_detailsss = DB::table('appointments_details')
		->where('cancel', 0)
		->where('active', 0)
		->where('day', $appointment->id)
		->where('appointments_id', $_GET['maxid'])->get(); 
		foreach($appointments_detailsss as $appointments_deta)     {
	
		?>
				<input type="time" disabled value="<?=$appointments_deta->hour_choosed;?>" class="py-1 shadow border-0 bg-white text-blue px-4" style=" border-radius: 20px;">

		
		<?php }
		?>
                            </td>
                            <td>
                                <div class="form-check">
                                  <input type="checkbox" disabled  checked value="<?=$appointment->id;?>" name="active1" class="form-check-input1">
                                </div>
                            </td>
		
		<?php } ?>
                        </tr>
						<script>
							$("#wednesdaycheck").change(function(){
								if(document.getElementById("wednesday").style.display == "none"){
									$("#wednesday").css("display", "inline-block");
								}
							  else{
								  $("#wednesday").css("display", "none");
							  }
							});
						</script>
					<?php } ?>
					<?php      
							
		$appointments = DB::table('appointments')->where('cancel', 0)->where('active', 0)->where('city_id', $contr->id)->where('id', 6)->get();

					
		?>
		
			<?php foreach ($appointments as $appointment)
					{ ?>
                        <tr>
                            <td><?=$appointment->day_name;?>
							<input id="day6"  name="day6" type="hidden" value="<?=$appointment->day_name;?>">
							</td>
                            <td>
								<input type="time" disabled value="<?=$appointment->fromhour;?>" class="py-1 shadow border-0 bg-blue text-white px-4" style=" border-radius: 20px;">
                  
                            </td>
                            <td>
							<input type="time" disabled value="<?=$appointment->tohour;?>" class="py-1 shadow border-0 bg-blue text-white px-4" style=" border-radius: 20px;">

                            </td>
							<?php 		
		$appointments_detailss = DB::table('appointments_details')
		->where('cancel', 0)
		->where('active', 0)
		->where('day', $appointment->id)
		->where('appointments_id', $_GET['maxid'])->exists(); 
		if ($appointments_detailss == null){ 
		?>
                            <td>
								<a href="subscriptionschoosetime?appid=<?=$appointment->id;?>&subscriptionid=<?=$subs->id?>&new=1"  class=" btn text-blue shadow bg-white px-5 pb-2" style="font-size:large; border:1px solid #2a56c6; border-radius: 20px; display:none;" id="thursday">إختار</a>

                            </td>
                           
                            <td>
                                <div class="form-check">
                                  <input type="checkbox" id="thursdaycheck"  value="<?=$appointment->id;?>" name="active6" class="form-check-input1">
                                </div>
                            </td>
							<?php }else { ?>
		
							<td>
		<?php 
		$appointments_detailsss = DB::table('appointments_details')
		->where('cancel', 0)
		->where('active', 0)
		->where('day', $appointment->id)
		->where('appointments_id', $_GET['maxid'])->get(); 
		foreach($appointments_detailsss as $appointments_deta)     {
	
		?>
				<input type="time" disabled value="<?=$appointments_deta->hour_choosed;?>" class="py-1 shadow border-0 bg-white text-blue px-4" style=" border-radius: 20px;">

		
		<?php }
		?>
                            </td>
                            <td>
                                <div class="form-check">
                                  <input type="checkbox" disabled  checked value="<?=$appointment->id;?>" name="active1" class="form-check-input1">
                                </div>
                            </td>
		
		<?php } ?>
                        </tr>
						<script>
							$("#thursdaycheck").change(function(){
								if(document.getElementById("thursday").style.display == "none"){
									$("#thursday").css("display", "inline-block");
								}
							  else{
								  $("#thursday").css("display", "none");
							  }
							});
						</script>
					<?php } ?>
					<?php      
							
		$appointments = DB::table('appointments')->where('cancel', 0)->where('active', 0)->where('city_id', $contr->id)->where('id', 7)->get();

					
		?>
		
			<?php foreach ($appointments as $appointment)
					{ ?>
                        <tr>
                            <td><?=$appointment->day_name;?>
							<input id="day7"  name="day7" type="hidden" value="<?=$appointment->day_name;?>">
							</td>
                            <td>
								<input type="time" disabled value="<?=$appointment->fromhour;?>" class="py-1 shadow border-0 bg-blue text-white px-4" style=" border-radius: 20px;">
                  
                            </td>
                            <td>
							<input type="time" disabled value="<?=$appointment->tohour;?>" class="py-1 shadow border-0 bg-blue text-white px-4" style=" border-radius: 20px;">

                            </td>
							<?php 		
		$appointments_detailss = DB::table('appointments_details')
		->where('cancel', 0)
		->where('active', 0)
		->where('day', $appointment->id)
		->where('appointments_id', $_GET['maxid'])->exists(); 
		if ($appointments_detailss == null){ 
		?>
                            <td>
								<a href="subscriptionschoosetime?appid=<?=$appointment->id;?>&subscriptionid=<?=$subs->id?>&new=1" target="self" class=" btn text-blue shadow bg-white px-5 pb-2" style="font-size:large; border:1px solid #2a56c6; border-radius: 20px; display:none;" id="friday" >إختار</a>

                            </td>
                            
                            <td>
                                <div class="form-check">
                                  <input type="checkbox" id="fridaycheck"  value="<?=$appointment->id;?>" name="active7" class="form-check-input1">
                                </div>
                            </td>
							<?php }else { ?>
		
							<td>
		<?php 
		$appointments_detailsss = DB::table('appointments_details')
		->where('cancel', 0)
		->where('active', 0)
		->where('day', $appointment->id)
		->where('appointments_id', $_GET['maxid'])->get(); 
		foreach($appointments_detailsss as $appointments_deta)     {
		
		?>
				<input type="time" disabled value="<?=$appointments_deta->hour_choosed;?>" class="py-1 shadow border-0 bg-white text-blue px-4" style=" border-radius: 20px;">

		
		<?php }
		?>
                            </td>
                            <td>
                                <div class="form-check">
                                  <input type="checkbox" disabled  checked value="<?=$appointment->id;?>" name="active1" class="form-check-input1">
                                </div>
                            </td>
		
		<?php } ?>
                        </tr>
						<script>
							$("#fridaycheck").change(function(){
								if(document.getElementById("friday").style.display == "none"){
									$("#friday").css("display", "inline-block");
								}
							  else{
								  $("#friday").css("display", "none");
							  }
							});
						</script>
					<?php } ?>
<script>
var checks = document.querySelectorAll(".form-check-input1");
var max = <?= $bouquet->daysperweek;?>;
for (var i = 0; i < checks.length; i++)
  checks[i].onclick = selectiveCheck;
function selectiveCheck (event) {
  var checkedChecks = document.querySelectorAll(".form-check-input1:checked");
  if (checkedChecks.length >= max + 1)
    return false;
}
</script>
					
                    </tbody>
                </table>
            </div>
			<div class="container calender px-0 my-5 overflow-auto" style="max-height: 500px;">
            <table class="table table-striped table-bordered mx-auto shadow text-center " style="position: relative;" >
                <thead class="bg-blue text-white" style="font-size: larger;" >
                    <tr>
                        <th class="align-middle"> السبت </th>
                        <th class="align-middle"> الاحد </th>
                        <th class="align-middle"> الاثنين </th>
                        <th class="align-middle"> الثلاثاء </th>
                        <th class="align-middle"> الاربعاء </th>
                        <th class="align-middle"> الخميس </th>
                        <th class="align-middle"> الجمعة </th>
                    </tr>
                </thead>
                <tbody class="text-blue" style="font-size: large; overflow: auto;">
                    <tr>
                        <td class="align-middle">
                            <div class="col-12 col-sm-4 col-md-3 col-lg-3  p-2">
                                <div class="w-100  bg-white p-2" style="border-radius: 10px;">
                                    <div class="input-group m-auto" dir="ltr" style="width: 160px;">
                                        <input style="border-radius: 15px 0px 0px 15px;" type="time" disabled="" class="form-control bg-orange text-white font-weight-bolder " value="10:00">
                                        <div class="input-group-append ">
                                            <span class="input-group-text bg-orange" style="border-radius: 0px 15px 15px 0;">
                                                <input  value="10:20" type="checkbox" name="blankcheckboxday1" id="blankcheckbox1">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="col-12 col-sm-4 col-md-3 col-lg-3  p-2">
                                <div class="w-100  bg-white p-2" style="border-radius: 10px;">
                                    <div class="input-group m-auto" dir="ltr" style="width: 160px;">
                                        <input style="border-radius: 15px 0px 0px 15px;" type="time" disabled="" class="form-control bg-blue text-white font-weight-bolder " value="10:00">
                                        <div class="input-group-append ">
                                            <span class="input-group-text bg-blue" style="border-radius: 0px 15px 15px 0;">
                                                <input  value="10:20" type="checkbox" name="blankcheckboxday1" id="blankcheckbox1">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="col-12 col-sm-4 col-md-3 col-lg-3  p-2">
                                <div class="w-100  bg-white p-2" style="border-radius: 10px;">
                                    <div class="input-group m-auto" dir="ltr" style="width: 160px;">
                                        <input style="border-radius: 15px 0px 0px 15px;" type="time" disabled="" class="form-control bg-blue text-white font-weight-bolder " value="10:00">
                                        <div class="input-group-append ">
                                            <span class="input-group-text bg-blue" style="border-radius: 0px 15px 15px 0;">
                                                <input  value="10:20" type="checkbox" name="blankcheckboxday1" id="blankcheckbox1">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="col-12 col-sm-4 col-md-3 col-lg-3  p-2">
                                <div class="w-100  bg-white p-2" style="border-radius: 10px;">
                                    <div class="input-group m-auto" dir="ltr" style="width: 160px;">
                                        <input style="border-radius: 15px 0px 0px 15px;" type="time" disabled="" class="form-control bg-blue text-white font-weight-bolder " value="10:00">
                                        <div class="input-group-append ">
                                            <span class="input-group-text bg-blue" style="border-radius: 0px 15px 15px 0;">
                                                <input  value="10:20" type="checkbox" name="blankcheckboxday1" id="blankcheckbox1">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="col-12 col-sm-4 col-md-3 col-lg-3  p-2">
                                <div class="w-100  bg-white p-2" style="border-radius: 10px;">
                                    <div class="input-group m-auto" dir="ltr" style="width: 160px;">
                                        <input style="border-radius: 15px 0px 0px 15px;" type="time" disabled="" class="form-control bg-blue text-white font-weight-bolder " value="10:00">
                                        <div class="input-group-append ">
                                            <span class="input-group-text bg-blue" style="border-radius: 0px 15px 15px 0;">
                                                <input  value="10:20" type="checkbox" name="blankcheckboxday1" id="blankcheckbox1">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="col-12 col-sm-4 col-md-3 col-lg-3  p-2">
                                <div class="w-100  bg-white p-2" style="border-radius: 10px;">
                                    <div class="input-group m-auto" dir="ltr" style="width: 160px;">
                                        <input style="border-radius: 15px 0px 0px 15px;" type="time" disabled="" class="form-control bg-blue text-white font-weight-bolder " value="10:00">
                                        <div class="input-group-append ">
                                            <span class="input-group-text bg-blue" style="border-radius: 0px 15px 15px 0;">
                                                <input  value="10:20" type="checkbox" name="blankcheckboxday1" id="blankcheckbox1">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="col-12 col-sm-4 col-md-3 col-lg-3  p-2">
                                <div class="w-100  bg-white p-2" style="border-radius: 10px;">
                                    <div class="input-group m-auto" dir="ltr" style="width: 160px;">
                                        <input style="border-radius: 15px 0px 0px 15px;" type="time" disabled="" class="form-control bg-blue text-white font-weight-bolder " value="10:00">
                                        <div class="input-group-append ">
                                            <span class="input-group-text bg-blue" style="border-radius: 0px 15px 15px 0;">
                                                <input  value="10:20" type="checkbox" name="blankcheckboxday1" id="blankcheckbox1">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
            <hr class="w-25 my-4">
			<?php }?>
            <h3><span class="pb-1 border-buttom"> طريقة الدفع</span></h3>
            <div class="px-md-5 px-0 mt-5 overflow-auto">
                <table class="table table-striped table-bordered w-75 mx-auto shadow">
                    <thead class="bg-blue text-white" style="font-size: larger;">
                        <tr>
                            <th > طريقة الدفع </th>
							 <th >  رقم الحساب </th>
							 <th>المبلغ الحالى</th>
                            <th > اختيار </th>
                        </tr>
                    </thead>
                    <tbody class="text-blue" style="font-size: large;">
        <?php 
		$payment_methods = DB::table('payment_methods')
		->where('cancel', 0)
		->where('active', 0)->get(); 
		foreach($payment_methods as $payment_method)     {
		
		?>
						 <tr>
                            <td> <?=$payment_method->name?> </td>
							 <td> <?=$payment_method->number?> </td>
							 <td>									<?php
				 $currentcuttedamount = DB::table('money_wallet')->where('cancel', 0)->where('companyid', $_GET['compnayidd'])->sum("boqauet_cridet");
				?>
				<?php
				$currentamount = DB::table('money_wallet')->where('cancel', 0)->where('companyid', $_GET['compnayidd'])->sum("current_amount");
				?>
				<?=$currentamount - $currentcuttedamount?></td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" value="<?=$payment_method->id?>" type="radio" name="payRadio" required id="Radio1"  >
                                </div>
                            </td>
                        </tr>
		<?php } ?>
                    </tbody>
                </table>
            </div>
            <hr class="w-25 my-4">
            <div class="mb-5 pb-5">
                <h1 class="mx-auto py-2 bg-blue text-white" style="width: 300px; border-radius: 30px;">الاجمالي</h1>
                <h2 class="mx-auto py-3 shadow bg-white text-blue" style="width: 240px; border-bottom-right-radius: 30px; border-bottom-left-radius: 30px; margin-top: -8px;"><?= $bouquet->price;?> <?= $bouquet->currancy_symbol;?></h2>
            </div>

			
											<?php } } }?>
												
					<?php if ($subscriptionsss->date_from != NULL) { ?>
					<div class="my-5 pt-5">
									<?php
				 $currentcuttedamount = DB::table('money_wallet')->where('cancel', 0)->where('companyid', $_GET['compnayidd'])->sum("boqauet_cridet");
				?>
				<?php
				$currentamount = DB::table('money_wallet')->where('cancel', 0)->where('companyid', $_GET['compnayidd'])->sum("current_amount");
				?>
				<?php if ($currentamount - $currentcuttedamount < $bouquet->price){ ?>
				<h1>عفوا رصيدك لا يكفى</h1>
				<?php }else { ?>
		 			 <button class="btn mx-auto px-5 py-2 text-blue" style="border: 2px solid #0174CF; font-weight: bolder; border-radius: 30px;"><h3>تفعيل الأشتراك </h3></button>
				<?php } ?>
					</div>
					 <input type="hidden" name="total_amount" value="<?= $bouquet->price;?>" />
					 <?php }elseif ($subscriptionsss->date_from === NULL) { ?>
					 <div class="my-5 pt-5">
					 <button class="btn mx-auto px-5 py-2 text-blue" style="border: 2px solid #0174CF; font-weight: bolder; border-radius: 30px;"><h3>التالى </h3></button>
					  </div>
					 <?php } ?>
											
											<?php } } }?>
        </div>
			</form>	
<script>
	$("#largtable td").addClass("align-middle");
</script>			
 @include('footer_home') 
 