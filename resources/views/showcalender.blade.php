
@extends('layout')

@section('content')
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



		
 <script type="text/javascript">
        window.history.forward();
        function noBack() {
            window.history.forward();
        }
    </script>
 <?php    
 
 if (isset($_GET['minutespertask'])){
 //echo  "minutespertask = " . $_GET['minutespertask'];
 }
if (isset($_GET['appid'])){
 //echo  "appid = " . $_GET['appid'];
 }


                    
				
	
	
?>

 <?php      
							
		$subsc = DB::table('subscriptions')->where('cancel', 0)->where('active', 0)->get();

					
		?>
	
					
					
			
  <?php      
							
		$appointments = DB::table('appointments')->where('cancel', 0)->where('active', 0)->where('id', $_GET['appid'])->get();

					
		?>
		
			<?php foreach ($appointments as $appointment)
					{ ?>
                        <tr>
						
						<?php
if($appointment->tohour != '0') {
    list($hourss, $minutess) = explode(':', $appointment->tohour);
	if (isset($appointment->tohour)) {
     $hourss + ($minutess / 60);
	}
}
if($appointment->fromhour != '0') {
    list($hours, $minutes) = explode(':', $appointment->fromhour);
      floor(abs(($hourss + ($minutess / 60)) - ($hours + ($minutes / 60))) * (60 / 20));
}
												} 
	?> 
					
 

<!DOCTYPE html>
<html lang="ar" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="img/logo_100.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/ef9b0108c9.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
		<style>
            input[type="time"]::-webkit-calendar-picker-indicator {
                display: none !important;
            }
        </style>
    </head>
    <body class="bg-light">

        
        <div class="card text-center mx-auto my-5 card-width" >
			<?php	if ($langg == "ar"){ ?>
			 <div class="card-header bg-blue">
			<?php if ($_GET['appid'] == 1) {?>
            <h3 class="text-center text-white">السبت</h3>
			<?php }elseif ($_GET['appid'] == 2) { ?>
			<h3 class="text-center text-white">الأحد</h3>
			<?php }elseif ($_GET['appid'] == 3) { ?>
			<h3 class="text-center text-white">الأثنين</h3>
			<?php }elseif ($_GET['appid'] == 4) { ?>
			<h3 class="text-center text-white">الثلاثاء</h3>
			<?php }elseif ($_GET['appid'] == 5) { ?>
			<h3 class="text-center text-white">الأربعاء</h3>
			<?php }elseif ($_GET['appid'] == 6) { ?>
			<h3 class="text-center text-white">الخميس</h3>
			<?php }elseif ($_GET['appid'] == 7) { ?>
			<h3 class="text-center text-white">الجمعة</h3>
			<?php } ?>
            </div>
			<?php }elseif ($langg == "en"){?>
            <div class="card-header bg-blue">
			<?php if ($_GET['appid'] == 1) {?>
            <h3 class="text-center text-white">Saturday</h3>
			<?php }elseif ($_GET['appid'] == 2) { ?>
			<h3 class="text-center text-white">Sunday</h3>
			<?php }elseif ($_GET['appid'] == 3) { ?>
			<h3 class="text-center text-white">Monday</h3>
			<?php }elseif ($_GET['appid'] == 4) { ?>
			<h3 class="text-center text-white">Tuesday</h3>
			<?php }elseif ($_GET['appid'] == 5) { ?>
			<h3 class="text-center text-white">Wednesday</h3>
			<?php }elseif ($_GET['appid'] == 6) { ?>
			<h3 class="text-center text-white">Thursday</h3>
			<?php }elseif ($_GET['appid'] == 7) { ?>
			<h3 class="text-center text-white">Friday</h3>
			<?php } ?>
            </div>
			<?php } ?>
            <div class="card-body">
			
                <div class="row">
				<?php
	//echo $appointment->fromhour;



$date = new DateTime($appointment->fromhour);
$count = floor(abs(($hourss + ($minutess / 60)) - ($hours + ($minutes / 60))) * (60 / 20));; 
$arr = array();

while($count--) {
 
?>
        <?php 

  $date_now = date("Y-m-d");

		$resirved_hours = DB::table('appointments_details')
		->where('cancel', 0)
		->where('active', 0)
		->where('day', $_GET['appid'])
		->where('bouquet_end_date', '>=' , $date_now)
		->where('hour_choosed', $arr[] = $date->add(new DateInterval("P0Y0DT0H00M"))->format("H:i"))
		->exists(); 
			if ($resirved_hours != null) { //echo  $arr[] = $date->add(new DateInterval("P0Y0DT0H00M"))->format("H:i");
		?>
		
		
					<div class="col-12 col-sm-4 col-md-3 col-lg-2  p-2" >
                        <div class="w-100  p-2" style="border-radius: 10px; background: none;">
                            <div class="input-group m-auto" dir="ltr" >
                                <input style="border-radius: 15px; background-color: #f6b009; text-align:center;" type="time" disabled=""  class="form-control text-white bg-orange  font-weight-bolder " value="<?PHP echo $arr[] = $date->add(new DateInterval("P0Y0DT0H00M"))->format("H:i")?>">
                                <!--<div class="input-group-append">
                                    <span class="input-group-text bg-orange" style=" background-color: #f6b009; border-radius: 0px 15px 15px 0;">
                                        <input disabled value="<?PHP echo $arr[] = $date->add(new DateInterval("P0Y0DT0H20M"))->format("H:i")?>"  type="radio" name="blankRadio" id="blankRadio1">
                                    </span>
                                </div>-->
                            </div>
                        </div>
                    </div>
		
 <?PHP } else { ?>
					<div class="col-12 col-sm-4 col-md-3 col-lg-2  p-2" >
                        <div class="w-100  bg-white p-2" style="border-radius: 10px;">
                            <div class="input-group m-auto" dir="ltr" >
                                <input style="border-radius: 15px; text-align:center;" type="time" disabled="" class="form-control bg-blue text-white font-weight-bolder " value="<?PHP echo $arr[] = $date->add(new DateInterval("P0Y0DT0H00M"))->format("H:i")?>">
                                <!--<div class="input-group-append ">
                                    <span class="input-group-text bg-blue" style="border-radius: 0px 15px 15px 0;">
                                        <input disabled value="<?PHP echo $arr[] = $date->add(new DateInterval("P0Y0DT0H20M"))->format("H:i")?>"  type="radio" name="blankRadio" id="blankRadio1">
                                    </span>
                                </div>-->
                            </div>
                        </div>
                    </div>

<?php } } ?>                   
                
                    
                </div>
            </div>
          </div>
    </body>
</html>
