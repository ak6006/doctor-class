
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


			<?php
                    use Illuminate\Support\Facades\Auth;
					date_default_timezone_set('Asia/Riyadh');
					
				//	$browserlang == $langg;
//echo $langg;
					
//$userlang = DB::table('users')->where('cancel', 0)->where('id', Auth::user()->id)->get("lang");

			
					
				//	echo $langg . "<br>";
					 ?>
				
					
					<?php //echo "------------".$langg;


 

	
/* if (isset($_GET['lang'])){
	echo "changed to:" . $lang = $_GET['lang'] . "<br>";
 }
					    echo  "userstored lang:" . Auth::user()->lang;					
					
		$userlang = DB::table('languages')->where('cancel', 0)->where('active', 0)->where('name', Auth::user()->lang)->get();

			 foreach ($userlang as $userlan)
					{ //echo  "userstored lang:" . $userlan->name;
					}
				*/				
		?>

	<?php	if ($langg == "en"){ ?>
			@include('header_welcome_en') 
	<?php }elseif ($langg == "ar"){?>
			@include('header_welcome_ar') 
	<?php } ?>

		
        <!-- Main content -->
        <div class="container-fluid my-5">
            <div dir="" class="row">
			<?php if ($langg == "ar"){?>
            <div class="col-12 col-lg-6 col-sm-6 order-lg-0 order-sm-0 order-1 text-right pr-lg-5 my-auto">
			<?php	}elseif ($langg == "en"){ ?>
			<div class="col-12 col-lg-6 col-sm-6 order-lg-0 order-sm-0 order-1 text-left pr-lg-5 my-auto">
			<?php } ?>
                    <div class="container mt-lg-5 mt-md-5 pr-lg-5 mb-sm-5 mb-0" style="line-height: .7;">
					<?php 	
								if ($langg == "ar"){ ?>
						<h1 class="pt-5" style="color: #0174CF; line-height: 1;">دكتور <span class="text-orange">جلاس</span></h1>

                        <h3 style="color: #646464; line-height: .7;">الأشياء الثمينة أكثر بريقاً</h3>
					<?php			}elseif ($langg == "en"){ ?>
						<h1 class="pt-5" style="color: #0174CF; line-height: 1;">GLASS <span class="text-orange">DOCTORS</span></h1>

                        <h3 style="color: #646464; line-height: .7;">Let the sun in</h3>
					<?php			} ?>	
                        
						 @if (Route::has('login'))
                      @auth
                    

				 @else
			<?php if ($langg == "ar"){?>
            <div class="widgets-wrap float-md-right">
			<?php	}elseif ($langg == "en"){ ?>
			<div class="widgets-wrap float-md-left">
			<?php } ?>         
			<a href="register?lang=<?=$langg?>" class="btn pr-3 pl-3 pb-2" style="background-color: #0174CF; color: white; border-radius: 50px;" >
			<?php if ($langg == "ar"){?>
            	سجل الان
			<?php	}elseif ($langg == "en"){ ?>
			Register Now
			<?php } ?>	
						</a>
				
				
				</div> <!-- widgets-wrap.// -->
        
        
           @endauth
           @endif		
                    </div>
                    <div class="container mt-lg-5 mt-md-5 pr-lg-5 mb-5 pt-5" style="line-height: 1;">
                        <div class="row">
                            <div class="col-12 col-lg-6 ">
						<?php 
							
							$misionlang = DB::table('publicwebcontents')->where('id', 2)->where('cancel', 0)->where('active', 0)->get();

								foreach ($misionlang as $misionlang)
							{  ?>
                                <h4 style="color: #0174CF;">
								
						<?php 	
								if ($langg == "ar"){
								echo  $misiontitle = $misionlang->title_ar;
								}elseif ($langg == "en"){ 
								echo  $misiontitle = $misionlang->title_en;
								} ?>								
								
								</h4>
                                <p>
						<?php  
								if ($langg == "ar"){
								 $misionlang = $misionlang->desc_ar;
								}elseif ($langg == "en"){ 
								 $misionlang = $misionlang->desc_en;
								}
								
						   if (strlen($misionlang) > 1000) {
						   echo  substr($misionlang, 0, 400) . '...'; }else { echo  $misionlang; } ?>
<?php if ($langg == "ar"){?>
<button type="button" class="btn btn-sm btn-primary mt-2 float-left" data-toggle="modal" data-target="#missionModal">اقرأ المزيد</button>
<?php }elseif ($langg == "en"){?>
<button type="button" class="btn btn-sm btn-primary mt-2 float-right" data-toggle="modal" data-target="#missionModal"> More</button>
<?php } ?>
							</p>
								<div class="modal fade" id="missionModal" tabindex="-1" role="dialog"  aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-blue text-white">
                                                <h5 class="modal-title"><?php echo $misiontitle ; ?></h5>
                                                <button type="button" class="close float-left text-white" style="margin: -1rem;" data-dismiss="modal" aria-label="Close">
                                                    <span  class="text-white" aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body p-4 text-blue" style="line-height: normal;">
											                 
				<?php echo $misionlang ;?>

							<?php } ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 ">
                        <?php 
							
							$misionlang = DB::table('publicwebcontents')->where('id', 1)->where('cancel', 0)->where('active', 0)->get();

								foreach ($misionlang as $misionlang)
							{  ?>
                                <h4 style="color: #0174CF;">
								
						<?php 	
								if ($langg == "ar"){
								echo  $misiontitle = $misionlang->title_ar;
								}elseif ($langg == "en"){ 
								echo  $misiontitle = $misionlang->title_en;
								} ?>								
								
								</h4>
                                <p>
						<?php  
								if ($langg == "ar"){
								 $misionlang = $misionlang->desc_ar;
								}elseif ($langg == "en"){ 
								 $misionlang = $misionlang->desc_en;
								}
						   if (strlen($misionlang) > 1000) {
						   echo  substr($misionlang, 0, 400) . '...'; }else { echo  $misionlang; } ?>
<?php if ($langg == "ar"){?>
 <button type="button" class="btn btn-sm btn-primary mt-2 float-left" data-toggle="modal" data-target="#visionModal">اقرأ المزيد</button>
<?php }elseif ($langg == "en"){?>
 <button type="button" class="btn btn-sm btn-primary mt-2 float-right" data-toggle="modal" data-target="#visionModal"> More</button>
<?php } ?>
								</p>
								<div class="modal fade" id="visionModal" tabindex="-1" role="dialog"  aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-blue text-white">
                                                <h5 class="modal-title"><?php echo $misiontitle ; ?></h5>
                                                <button type="button" class="close float-left text-white" style="margin: -1rem;" data-dismiss="modal" aria-label="Close">
                                                    <span  class="text-white" aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body p-4 text-blue" style="line-height: normal;">
												         
<?php echo $misionlang ;?>

							<?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-sm-6 text-center order-lg-1 order-sm-1 order-0 my-auto">
                    <img src="img/vector_600.png" style="width: 70%;">
                </div>
            </div>
        </div>
        <!-- video -->
		
       <div dir="rtl" class="container-fluid" id="service" style="background-image: url('img/1080.png'); min-height: 600px; background-size: 100% 100%; background-repeat: no-repeat;">
            <div class="pb-5">
                <div class="pb-5">
                    <div class="pb-5">
                        <div class="pb-5">
                            <div class="pb-5">
                                <div class="pb-5">
                                    <div class="container pb-5">
                                        <div class="row text-center">
                                            <!-- change add pt-4 -->
                                            <div class="col-md-7 col-12 pt-4 p-sm-5" >
                                                <video style="width: 100%; height: auto; border-radius: 30px;" controls autoplay muted loop >
                                                    <source src="img/clean.mp4" type="video/mp4">
                                                </video>
                                            </div>

	
					<?php 
							
							$misionlang = DB::table('publicwebcontents')->where('id', 3)->where('cancel', 0)->where('active', 0)->get();

								foreach ($misionlang as $misionlang)
							{  ?>
							
<?php if ($langg == "ar"){?>
		<div  class="col-md-5 col-12 p-5 my-auto text-right">
        <div>
<h1 class="pb-2 " style="color:white;"><?=$misionlang->title_ar?></h1>
<?php }elseif ($langg == "en"){?>
		<div  class="col-md-5 col-12 p-5 my-auto text-left">
        <div>
<h1 class="pb-2 " style="color:white;"><?=$misionlang->title_en?></h1>
<?php } ?>
<p style="font-size: large; color: white;"> 
                                <h4 style="color: #0174CF;">		
						<?php 	
								if ($langg == "ar"){
								  $misiontitle = $misionlang->title_ar;
								}elseif ($langg == "en"){ 
								  $misiontitle = $misionlang->title_en;
								} ?>								
								</h4>
                                <p>
						<?php  
								if ($langg == "ar"){
								 $misionlang = $misionlang->desc_ar;
								}elseif ($langg == "en"){ 
								 $misionlang = $misionlang->desc_en;
								}
							

						   if (strlen($misionlang) > 1000) {
						   echo  substr($misionlang, 0, 200) . ''; }else { echo  $misionlang; } ?>
<?php if ($langg == "ar"){?>
 <button type="button" class="btn btn-sm btn-primary mt-2 float-left" data-toggle="modal" data-target="#videoModal">اقرأ المزيد</button>
<?php }elseif ($langg == "en"){?>
 <button type="button" class="btn btn-sm btn-primary mt-2 float-right" data-toggle="modal" data-target="#videoModal"> More</button>
<?php } ?>
										</p>
										<div class="modal fade" id="videoModal" tabindex="-1" role="dialog"  aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-blue text-white">
                                                <h5 class="modal-title"><?php echo $misiontitle ; ?></h5>
                                                <button type="button" class="close float-left text-white" style="margin: -1rem;" data-dismiss="modal" aria-label="Close">
                                                    <span  class="text-white" aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body p-4 text-blue" style="line-height: normal;">
									
‎<?php echo $misionlang ;?>
<?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                        </div>
                                    </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Appointments -->
		
		
		
		
		<div class="container mb-5 pb-5 text-center" id="appointments" style="margin-top: -10rem; color: #2a56c6;">
            <h2 class="py-2">
<?php if ($langg == "ar"){?>
مواعيد الخدمة المتاحة
<?php }elseif ($langg == "en"){?>
Available Service Times
<?php } ?>
			
			</h2>
            <div class="px-md-5 px-0 my-5 overflow-auto">
               <table class="table table-striped table-bordered mx-auto shadow w-75 text-center" >
                    <thead class="bg-orange text-white" style="font-size: larger; background-color:#f6b009 ">
                        <tr>
                            <th class="align-middle" colspan="3">
<?php if ($langg == "ar"){?>
منطقة الرياض
<?php }elseif ($langg == "en"){?>
Riyadh Region
<?php } ?>
						</th>                          
                        </tr>
                        <tr>
<?php if ($langg == "ar"){?>
<th class="align-middle" style="min-width:180px !important;"> اليوم </th>
                            <th class="align-middle"> من الساعة </th>
                            <th class="align-middle"> الي الساعة </th> 
<?php }elseif ($langg == "en"){?>
<th class="align-middle" style="min-width:180px !important;"> Day </th>
                            <th class="align-middle"> From Hour</th>
                            <th class="align-middle"> To Hour </th> 
<?php } ?>
                                                     
                        </tr>
                    </thead>
                    <tbody class="text-blue" style="font-size: large;">
					<?php      
							
		$appointments = DB::table('appointments')->where('cancel', 0)->where('active', 0)->where('city_id', 1)->get();

					
		?>

			<?php foreach ($appointments as $appointment)
					{ ?>
                        <tr>
                            <td class="align-middle"><a href="showcalender?appid=<?=$appointment->id?>&lang=<?=$langg?>" target="_new" class="btn bg-white shadow px-3 text-blue w-75">
							<?php if ($langg == "ar"){?>
							<!--<i class="fas fa-arrow-circle-right"></i>-->
							<?php }elseif ($langg == "en"){?>
							<!--<i class="fas fa-arrow-circle-left"></i>-->
							<?php } ?>
							<?php if ($langg == "ar"){?>
							<?=$appointment->day_name?> 
							<?php }elseif ($langg == "en"){?>
							<?=$appointment->day_name_en; }?> 
							</a>
							 </td>
                            <td class="align-middle"> <input type="time" class="text-center border-0 text-blue" style="background:none;"  value="<?=$appointment->fromhour?>" disabled />  </td>
                            <td class="align-middle"> <input type="time" class="text-center border-0 text-blue" style="background:none;" value="<?=$appointment->tohour?>" disabled />   </td>
                        </tr>
					<?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- subscriptions -->
		
		
		<div class="container-fluid mt-5 pb-5 text-center" id="subscriptions" style="color: white;background-image: url('img/1080x.png'); min-height: 500px;  background-repeat: no-repeat;  background-position: center bottom; background-size: 100% 50%; ">
            <div class="container pb-5 mb-5">
                <div class="row my-sm-5 pb-sm-5">
                    <?php    					
					$bouquets = DB::table('bouquets')->where('cancel', 0)->where('id', 1)->get();
					foreach ($bouquets as $bouquet)
					{  
					?>
					<div class="col-12 col-md-4 py-5  my-auto pl-2 pl-sm-0" style="z-index: 1;" >
					
                        <div class="pb-2 py-3" style="background-color: #5FA4C5; border-radius:50px 0; ">
                            <h2 class="py-3 w-75 m-auto" style="border-bottom:2px solid white ;"> 
							<?php if ($langg == "ar"){?>
							<?=$bouquet->name?> 
							<?php }elseif ($langg == "en"){?>
							<?=$bouquet->name_en; }?> 
							</h2>
							<?php if ($langg == "ar"){?>
                            <ul class="text-right py-4 px-3 m-0 mb-3">
                                <li class="py-2"><i class="fas fa-check pl-3"></i> ايام العمل بالاسبوع <span class="float-left ml-4">{{ $bouquet->daysperweek }}</span></li>
                                <li class="py-2"><i class="fas fa-check pl-3"></i>مرات العمل باليوم  <span class="float-left ml-4">{{ $bouquet->workperday }}</span></li>
                                <li class="py-2"><i class="fas fa-check pl-3"></i>  مدة الباقة باليوم <span class="float-left ml-4">{{ $bouquet->dayspersubscription }}</span></li>
                            </ul>
							<?php }elseif ($langg == "en"){?>
							<ul class="text-left py-4 px-3 m-0 mb-3">
                                <li class="py-2"><i class="fas fa-check pl-3"></i> Working days per week <span class="float-right ml-4">{{ $bouquet->daysperweek }}</span></li>
                                <li class="py-2"><i class="fas fa-check pl-3"></i>Working times per day  <span class="float-right ml-4">{{ $bouquet->workperday }}</span></li>
                                <li class="py-2"><i class="fas fa-check pl-3"></i>  Package duration <span class="float-right ml-4">{{ $bouquet->dayspersubscription }}</span></li>
                            </ul>
							<?php } ?>
                            
                            <h3>{{ $bouquet->currancy_symbol }} {{ $bouquet->price }}</h3>
                            <td>
						
						   @if (Route::has('login'))
                      @auth
				  <?php if (Auth::user()->role != "admin") { ?>
									<?php      
									$students1 = DB::table('students')->where('user_id', Auth::id())->first();
									?>
									
									<?php if (!$students1) { ?>
						<a  class="btn w-50 pb-2" href="students/create" style="background-color: white; color: #0174CF; border-radius: 30px; font-size: large;"> <?php if ($langg == "ar"){?>اشترك الأن<?php }elseif ($langg == "en"){?>Subscripe Now <?php } ?></a>
											<?php }else{?>
						<a  class="btn w-50 pb-2"  style="background-color: white; color: #0174CF; border-radius: 30px; font-size: large;" href="subscriptions_insert?subid=<?= $bouquet->id;?>"> <?php if ($langg == "ar"){?>اشترك الأن<?php }elseif ($langg == "en"){?>Subscripe Now <?php } ?></a>
											<?php } ?>
											 <?php  } else { ?>
											 <a  class="btn w-50 pb-2"  style="background-color: white; color: #0174CF; border-radius: 30px; font-size: large;" href=""> لا يمكن لمدير الموقع الأشتراك</a>
											 <?php } ?>
    @else
						<a class="btn w-50 pb-2"  style="background-color: white; color: #0174CF; border-radius: 30px; font-size: large;" href="{{ route('login')}}">
					<?php if ($langg == "ar"){?>
					اشترك الأن
					<?php }elseif ($langg == "en"){?>
					Subscripe Now
					<?php } ?>
					</a>

        
           @endauth
           @endif
		   
						
						</td>
                        </div>
					
                    </div>
					<?php } ?>
										<?php    
					
					$bouquets = DB::table('bouquets')->where('cancel', 0)->where('id', 2)->get();

					foreach ($bouquets as $bouquet)
					{
					   
					?>
                    <div class="col-12 col-md-4  py-5" style="background-color: #D3D6DB; border-radius: 50px; z-index: 2; box-shadow:0px 0px 15px grey;  ">
                            <h2 class="py-3 w-75 m-auto" style="border-bottom:2px solid white ;">
							<?php if ($langg == "ar"){?>
							<?=$bouquet->name?> 
							<?php }elseif ($langg == "en"){?>
							<?=$bouquet->name_en; }?>
							</h2>
							<?php if ($langg == "ar"){?>
                            <ul class="text-right py-4 px-3 m-0 mb-3">
                                <li class="py-2"><i class="fas fa-check pl-3"></i> ايام العمل بالاسبوع <span class="float-left ml-4">{{ $bouquet->daysperweek }}</span></li>
                                <li class="py-2"><i class="fas fa-check pl-3"></i>مرات العمل باليوم  <span class="float-left ml-4">{{ $bouquet->workperday }}</span></li>
                                <li class="py-2"><i class="fas fa-check pl-3"></i>  مدة الباقة باليوم <span class="float-left ml-4">{{ $bouquet->dayspersubscription }}</span></li>
                            </ul>
							<?php }elseif ($langg == "en"){?>
							<ul class="text-left py-4 px-3 m-0 mb-3">
                                <li class="py-2"><i class="fas fa-check pl-3"></i> Working days per week <span class="float-right ml-4">{{ $bouquet->daysperweek }}</span></li>
                                <li class="py-2"><i class="fas fa-check pl-3"></i>Working times per day  <span class="float-right ml-4">{{ $bouquet->workperday }}</span></li>
                                <li class="py-2"><i class="fas fa-check pl-3"></i>  Package duration <span class="float-right ml-4">{{ $bouquet->dayspersubscription }}</span></li>
                            </ul>
							<?php } ?>

                            <h3>{{ $bouquet->currancy_symbol }} {{ $bouquet->price }}</h3>
                        <td>
						
						   @if (Route::has('login'))
                      @auth
				  <?php if (Auth::user()->role != "admin") { ?>
									<?php      
									$students1 = DB::table('students')->where('user_id', Auth::id())->first();
									?>
									
									<?php if (!$students1) { ?>
						<a  class="btn w-50 pb-2" href="students/create" style="background-color: white; color: #0174CF; border-radius: 30px; font-size: large;"> <?php if ($langg == "ar"){?>اشترك الأن<?php }elseif ($langg == "en"){?>Subscripe Now <?php } ?></a>
											<?php }else{?>
						<a  class="btn w-50 pb-2"  style="background-color: white; color: #0174CF; border-radius: 30px; font-size: large;" href="subscriptions_insert?subid=<?= $bouquet->id;?>"> <?php if ($langg == "ar"){?>اشترك الأن<?php }elseif ($langg == "en"){?>Subscripe Now <?php } ?></a>
											<?php } ?>
											 <?php  } else { ?>
											 <a  class="btn w-50 pb-2"  style="background-color: white; color: #0174CF; border-radius: 30px; font-size: large;" href=""> لا يمكن لمدير الموقع الأشتراك</a>
											 <?php } ?>
		   @else
						<a class="btn w-50 pb-2"  style="background-color: white; color: #0174CF; border-radius: 30px; font-size: large;" href="{{ route('login')}}">
					<?php if ($langg == "ar"){?>
					اشترك الأن
					<?php }elseif ($langg == "en"){?>
					Subscripe Now
					<?php } ?>
					</a>
           @endauth
           @endif
						</td>
                    </div>
					<?php } ?>
									
										<?php    
					
					$bouquets = DB::table('bouquets')->where('cancel', 0)->where('id', 3)->get();

					foreach ($bouquets as $bouquet)
					{
					   
					?>
                    <div class="col-12 col-md-4 py-5  my-auto pr-2 pr-sm-0" style="z-index: 1;" >
                        <div class="pb-2  py-3" style="background-color: #DEB57B; border-radius:0 50px;">
                            <h2 class="py-3 w-75 m-auto" style="border-bottom:2px solid white ;">
							<?php if ($langg == "ar"){?>
							<?=$bouquet->name?> 
							<?php }elseif ($langg == "en"){?>
							<?=$bouquet->name_en; }?>
							</h2>
							<?php if ($langg == "ar"){?>
                            <ul class="text-right py-4 px-3 m-0 mb-3">
                                <li class="py-2"><i class="fas fa-check pl-3"></i> ايام العمل بالاسبوع <span class="float-left ml-4">{{ $bouquet->daysperweek }}</span></li>
                                <li class="py-2"><i class="fas fa-check pl-3"></i>مرات العمل باليوم  <span class="float-left ml-4">{{ $bouquet->workperday }}</span></li>
                                <li class="py-2"><i class="fas fa-check pl-3"></i>  مدة الباقة باليوم <span class="float-left ml-4">{{ $bouquet->dayspersubscription }}</span></li>
                            </ul>
							<?php }elseif ($langg == "en"){?>
							<ul class="text-left py-4 px-3 m-0 mb-3">
                                <li class="py-2"><i class="fas fa-check pl-3"></i> Working days per week <span class="float-right ml-4">{{ $bouquet->daysperweek }}</span></li>
                                <li class="py-2"><i class="fas fa-check pl-3"></i>Working times per day  <span class="float-right ml-4">{{ $bouquet->workperday }}</span></li>
                                <li class="py-2"><i class="fas fa-check pl-3"></i>  Package duration <span class="float-right ml-4">{{ $bouquet->dayspersubscription }}</span></li>
                            </ul>
							<?php } ?>
                            <h3>{{ $bouquet->currancy_symbol }} {{ $bouquet->price }}</h3>
                            <td>
						
						   @if (Route::has('login'))
                      @auth
				  <?php if (Auth::user()->role != "admin") { ?>
									<?php      
									$students1 = DB::table('students')->where('user_id', Auth::id())->first();
									?>
									
									<?php if (!$students1) { ?>
						<a  class="btn w-50 pb-2" href="students/create" style="background-color: white; color: #0174CF; border-radius: 30px; font-size: large;"> <?php if ($langg == "ar"){?>اشترك الأن<?php }elseif ($langg == "en"){?>Subscripe Now <?php } ?></a>
											<?php }else{?>
						<a  class="btn w-50 pb-2"  style="background-color: white; color: #0174CF; border-radius: 30px; font-size: large;" href="subscriptions_insert?subid=<?= $bouquet->id;?>"> <?php if ($langg == "ar"){?>اشترك الأن<?php }elseif ($langg == "en"){?>Subscripe Now <?php } ?></a>
											<?php } ?>
											 <?php  } else { ?>
											 <a  class="btn w-50 pb-2"  style="background-color: white; color: #0174CF; border-radius: 30px; font-size: large;" href=""> لا يمكن لمدير الموقع الأشتراك</a>
											 <?php } ?>
    @else
						<a class="btn w-50 pb-2"  style="background-color: white; color: #0174CF; border-radius: 30px; font-size: large;" href="{{ route('login')}}">
					<?php if ($langg == "ar"){?>
					اشترك الأن
					<?php }elseif ($langg == "en"){?>
					Subscripe Now
					<?php } ?>
					</a>

        
           @endauth
           @endif
		   
						
						</td>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
		
		
		
        
        <!-- who are we? -->
		
		
		
		
		
		
		
		
        <div class="container pb-5 text-center" id="we" style="color: #2a56c6; margin-top: -8rem !important;">
		<?php if ($langg == "ar"){?>
            <h1>من نحن</h1>
		<?php }elseif ($langg == "en"){?>
		<h1> About Us</h1>
		<?php } ?>
							<?php 
							$misionlang = DB::table('publicwebcontents')->where('id', 4)->where('cancel', 0)->where('active', 0)->get();
								foreach ($misionlang as $misionlang)
							{  ?>
            <div class="row p-5">
			<?php if ($langg == "ar"){?>
                <div class="col-12 col-lg-6 text-right order-1 order-lg-0">
                    <h2 class="pt-5 pb-2" style="color: #0174CF;"><?=$misionlang->title_ar?></h2>
					<?php }elseif ($langg == "en"){?>
					<div class="col-12 col-lg-6 text-left order-1 order-lg-0">
                    <h2 class="pt-5 pb-2" style="color: #0174CF;"><?=$misionlang->title_en?></h2>
					<?php }?>
                    <p style="font-size: large; font-weight: bolder;">
			<?php 	
								if ($langg == "ar"){
								  $misiontitle = $misionlang->title_ar;
								}elseif ($langg == "en"){ 
								  $misiontitle = $misionlang->title_en;
								} ?>								
								</h4>
                                <p>
			<?php  
								if ($langg == "ar"){
								 $misionlang = $misionlang->desc_ar;
								}elseif ($langg == "en"){ 
								 $misionlang = $misionlang->desc_en;
								}
							

						   if (strlen($misionlang) > 1000) {
						   echo  substr($misionlang, 0, 1000) . ''; }else { echo  $misionlang; } ?>
<?php if ($langg == "ar"){?>
<button type="button" class="btn btn-sm btn-primary mt-2 float-left" data-toggle="modal" data-target="#companyModal">اقرأ المزيد</button>
<?php }elseif ($langg == "en"){?>
<button type="button" class="btn btn-sm btn-primary mt-2 float-right" data-toggle="modal" data-target="#companyModal">More </button>
<?php } ?>                        

                    </p>
					<div class="modal fade" id="companyModal" tabindex="-1" role="dialog"  aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-blue text-white">
                                                <h5 class="modal-title"><?=$misiontitle?>  </h5>
                                                <button type="button" class="close float-left text-white" style="margin: -1rem;" data-dismiss="modal" aria-label="Close">
                                                    <span  class="text-white" aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body" style="line-height: normal;">
											
‎<?php echo $misionlang ;?>
<?php } ?>
                                            </div>
                                        </div>
                                    </div>
							
                                </div>
                </div>
                <div class="col-12 col-lg-6 order-0 order-lg-1">
                    <img src="img/glass doctors 400px.png" class="w-50">
                </div>
            </div>
        </div>
        <!-- contact us -->
        <div class="container text-center mb-5 text-blue" id="contact" >
		<?php if ($langg == "ar"){?>
            <h1 class="pb-5">اتصل بنا</h1>
		<?php }elseif ($langg == "en"){?>
		 <h1 class="pb-5">Contact Us</h1>
		<?php } ?>
            <div class="row m-auto border overflow-hidden shadow bg-blue text-white" style=" border-radius: 40px;">
                <?php if ($langg == "ar"){?>
				<div class="col-12 col-lg-6 text-right p-5 my-auto" style="font-size: x-large; line-height: 2.5;">
				<?php }elseif ($langg == "en"){?>
				<div class="col-12 col-lg-6 text-left p-5 my-auto" style="font-size: x-large; line-height: 2.5;">
				<?php } ?>
				<?php if ($langg == "ar"){?>
                    <a href="#" style="color: white; text-decoration: none;"><i class="fas fa-map-marker-alt" style="padding-left: 1.3rem; padding-right: 1.3rem;"></i> 
					<?php	$current_contents_fc = DB::table('publicwebcontents')->where('id', 5)->where('cancel', 0)->where('active', 0)->get();
					foreach ($current_contents_fc as $current_contents_fcb)
					{ echo $current_contents_fcb->desc_ar; }?> 
					</a> <br>
					<?php }elseif ($langg == "en"){?>
                    <a href="#" style="color: white; text-decoration: none;"><i class="fas fa-map-marker-alt" style="padding-left: 1.3rem; padding-right: 1.3rem;"></i> 
					<?php	$current_contents_fc = DB::table('publicwebcontents')->where('id', 5)->where('cancel', 0)->where('active', 0)->get();
					foreach ($current_contents_fc as $current_contents_fcb)
					{ echo $current_contents_fcb->desc_en; }?> 
					</a> <br>
					<?php } ?>
					
					<a href="mailto:someone@example.com" style="color: white; text-decoration: none;"><i class="fas fa-envelope px-3"></i> 
					<?php	$current_contents_fc = DB::table('publicwebcontents')->where('id', 6)->where('cancel', 0)->where('active', 0)->get();
					foreach ($current_contents_fc as $current_contents_fcb)
					{ echo $current_contents_fcb->desc_ar; }?> 
					</a><br>
                    
					<?php if ($langg == "ar"){?>
				    <a href="tel:+201141133812" style="color: white; text-decoration: none;"><i class="fas fa-phone-alt px-3"></i> 
					<?php	$current_contents_fc = DB::table('publicwebcontents')->where('id', 7)->where('cancel', 0)->where('active', 0)->get();
					foreach ($current_contents_fc as $current_contents_fcb)
					{ echo $current_contents_fcb->desc_ar; }?> 
					</a> 
					<br>
					<?php }elseif ($langg == "en"){?>
				    <a href="tel:+201141133812" style="color: white; text-decoration: none;"><i class="fas fa-phone-alt px-3"></i> 
					<?php	$current_contents_fc = DB::table('publicwebcontents')->where('id', 7)->where('cancel', 0)->where('active', 0)->get();
					foreach ($current_contents_fc as $current_contents_fcb)
					{ echo $current_contents_fcb->desc_en; }?> 
					</a> 
					<br>
					<?php } ?>                   
                    <div class="pt-5" style="font-size: xxx-large;">
					<?php	$current_contents_fc = DB::table('publicwebcontents')->where('id', 10)->where('cancel', 0)->where('active', 0)->get();
					foreach ($current_contents_fc as $current_contents_fcb)
					{ ?>
                       <a  target="_new" href="<?php echo $current_contents_fcb->desc_en; ?>"><i class="fab fa-instagram p-2 text-white"></i></a>
					<?php } ?>
					<?php	$current_contents_fc = DB::table('publicwebcontents')->where('id', 9)->where('cancel', 0)->where('active', 0)->get();
					foreach ($current_contents_fc as $current_contents_fcb)
					{ ?>                      
					  <a  target="_new" href="<?php echo $current_contents_fcb->desc_en; ?>"><i class="fab fa-whatsapp p-2 text-white"></i></a>
						
						<?php } ?>
					<?php	$current_contents_fc = DB::table('publicwebcontents')->where('id', 8)->where('cancel', 0)->where('active', 0)->get();
					foreach ($current_contents_fc as $current_contents_fcb)
					{ ?>                       
					   <a  target="_new" href="<?php echo $current_contents_fcb->desc_en; ?>"><i class="fab fa-facebook-f p-2 text-white"></i></a>
						<?php } ?>
                    </div>
                </div>
				<!-- map -->
                <div class="col-12 col-lg-6 bg-light p-0 overflow-hidden"  style=" border-radius: 40px; min-height:400px">
					<div class="mapouter">
						<div class="gmap_canvas">
							<iframe style="width: 100%; height: 100%;"  id="gmap_canvas" src="https://maps.google.com/maps?q=%D8%A7%D9%84%D8%B1%D9%8A%D8%A7%D8%B6&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
							<a href="https://fmovies2.org">fmovies</a><br>
							<style>.mapouter{position:relative;text-align:right;height:100%;width:100%;}</style>
							<a href="https://www.embedgooglemap.net">google maps in iframe</a>
							<style>.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style>
						</div>
					</div>

                </div>
            </div>
        </div> 
        <!-- footer -->
        <footer class="container-fluid mt-4 p-0 bg-blue text-white text-center">
		<?php if ($langg == "en"){?>
							<p class="h5 m-0 p-5">All rights reserved <?php echo date('Y')?> © DOCTOR GLASS </p>
<?php }elseif ($langg == "ar"){?>
<p class="h5 m-0 p-5">جميع الحقوق محفوظة <?php echo date('Y')?> © دكتور جلاس</p>
<?php } ?>            
        </footer>
	</div>
    </body>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjCCuQL1P3qR6qti1Hh-eb5WwigF9F_84&callback=initMap&libraries=&v=weekly" async ></script>
   
    <script>
function openNav() {
            document.getElementById("mySidepanel").style.width = "300px";
           // document.getElementById("mySidepanel").focus();
        }
            function closeNav() {
            document.getElementById("mySidepanel").style.width = "0";
        }
    </script>
	<script>
        var mybutton = document.getElementById("topBtn");
        window.onscroll = function() {scrollFunction()};
        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
          } else {
            mybutton.style.display = "none";
          }
        }
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
    </script>
</html>
