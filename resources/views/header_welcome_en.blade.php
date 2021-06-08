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
		?>
<!DOCTYPE html>
<html dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Doctor Glass</title>

        <link rel="icon" id="favic" type="image/png" href="img/logo_100.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/ef9b0108c9.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
		<style>
			.sidepanel{
				border-bottom-right-radius: 30px;
				border-bottom-left-radius: 0px;
				left:0;
			}
			.closebtnen{
				position: absolute;
				top: 0;
				right: 25px;
				font-size: 36px !important;
			}

		</style>
    </head>
    <body dir="ltr" class="bg-light">
	<button onclick="topFunction()" id="topBtn" title="الي اعلي"><i class="fas fa-arrow-circle-up"></i></button>
        <!-- side bar -->
        <div id="mySidepanel" tabindex="0" onblur="closeNav()" class="sidepanel text-left">
            <a href="javascript:void(0)" class="closebtnen px-2"  onclick="closeNav()">×</a>
            <h3 class="px-4 pt-4 pb-2" style="color: white;">Home Page</h3>

			@if (Route::has('login'))
                      @auth
				  
				  <?php if (Auth::user()->role === "admin") { ?>
				<a href="{{ url('/admindashboard') }}" >
							 Control Panel
						</a>
	
				<?php }else {?>			
						<a href="{{ url('/home') }}" >
							 Control Panel
						</a>
			<?php  $company = DB::table('students')->where('user_id', Auth::id())->first();
			   if ($company){
			 ?>
			<a href="{{ url('/students') }}" id="manage">
							 Manage Company
						</a>
			
			<?php }else { ?>
						<a href="{{ url('/students/create') }}" id="manage">
						 New Company
						</a>
			
			<?php } ?>
			  <?php   if ($company){ ?>
			  <a href="{{ url('/branchs/create') }}" id="manage2"> New Branch</a>
 
			  <?php } ?>
				<?php } ?>
			
			
			<a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" >
            Log Out
			</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <br>
			<hr class="bg-light w-75">
			<ul dir="rtl" class="m-0 d-inline-block pr-0 ">
                    <li class="nav-item nav-hide-element">
                        <a class="nav-link" href="../public#service">About Service</a>
                    </li>
                    <li class="nav-item nav-hide-element">
                        <a class="nav-link" href="../public#appointments">Service Times</a>
                    </li>
                    <li class="nav-item nav-hide-element">
                        <a class="nav-link" href="../public#subscriptions">Price Packages</a>
                    </li>
                    <li class="nav-item nav-hide-element">
                        <a class="nav-link" href="../public#we">About Us</a>
                    </li>
                    <li class="nav-item nav-hide-element">
                        <a class="nav-link" href="../public#contact">Contact Us</a>
                    </li>	
					<?php if ($langg == "en") { ?>
					<li class="nav-item">
                        <a class="nav-link" href="?lang=ar">عربى</a>
                    </li>
					<?php }elseif ($langg == "ar") { ?>
					<li class="nav-item">
                        <a class="nav-link" href="?lang=en">English</a>
                    </li>
					<?php } ?>					
			</ul>
					<div class="text-center">
					<?php	$current_contents_fc = DB::table('publicwebcontents')->where('id', 10)->where('cancel', 0)->where('active', 0)->get();
					foreach ($current_contents_fc as $current_contents_fcb)
					{ ?>
                       <a  class="social" target="_new" href="<?php echo $current_contents_fcb->desc_en; ?>"><i class="fab fa-instagram p-3 text-white"></i></a>
					<?php } ?>
					<?php	$current_contents_fc = DB::table('publicwebcontents')->where('id', 9)->where('cancel', 0)->where('active', 0)->get();
					foreach ($current_contents_fc as $current_contents_fcb)
					{ ?>                      
					  <a   class="social" target="_new" href="<?php echo $current_contents_fcb->desc_en; ?>"><i class="fab fa-whatsapp p-3 text-white"></i></a>
						
						<?php } ?>
					<?php	$current_contents_fc = DB::table('publicwebcontents')->where('id', 8)->where('cancel', 0)->where('active', 0)->get();
					foreach ($current_contents_fc as $current_contents_fcb)
					{ ?>                       
					   <a  class="social" target="_new" href="<?php echo $current_contents_fcb->desc_en; ?>"><i class="fab fa-facebook-f p-3 text-white"></i></a>
						<?php } ?>
					
					</div>
					</div>

					@else

          
		   
					<h4 class="px-4" style="color: white;"> Register </h4>
				   
						<a href="login?lang=<?=$langg?>" >
									
									Log In 
						</a>
			
				   
					<a  href="register?lang=<?=$langg?>" >Register A New User</a>
				
					<br>
					<hr class="bg-light w-75">
					<ul dir="rtl" class="m-0 d-inline-block pr-0 ">
                    <li class="nav-item">
                        <a class="nav-link" href="../public?lang=<?=$langg?>#service">About Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../public?lang=<?=$langg?>#appointments">Service Times</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../public?lang=<?=$langg?>#subscriptions">Price Packages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../public?lang=<?=$langg?>#we">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../public?lang=<?=$langg?>#contact">Contact Us</a>
                    </li>
					<?php if ($langg == "en") { ?>
					<li class="nav-item">
                        <a class="nav-link" href="?lang=ar">عربى</a>
                    </li>
					<?php }elseif ($langg == "ar") { ?>
					<li class="nav-item">
                        <a class="nav-link" href="?lang=en">English</a>
                    </li>
					<?php } ?>
					 </ul>
					<div class="text-center">
					<?php	$current_contents_fc = DB::table('publicwebcontents')->where('id', 10)->where('cancel', 0)->where('active', 0)->get();
					foreach ($current_contents_fc as $current_contents_fcb)
					{ ?>
                       <a  class="social" target="_new" href="<?php echo $current_contents_fcb->desc_en; ?>"><i class="fab fa-instagram p-3 text-white"></i></a>
					<?php } ?>
					<?php	$current_contents_fc = DB::table('publicwebcontents')->where('id', 9)->where('cancel', 0)->where('active', 0)->get();
					foreach ($current_contents_fc as $current_contents_fcb)
					{ ?>                      
					  <a   class="social" target="_new" href="<?php echo $current_contents_fcb->desc_en; ?>"><i class="fab fa-whatsapp p-3 text-white"></i></a>
						
						<?php } ?>
					<?php	$current_contents_fc = DB::table('publicwebcontents')->where('id', 8)->where('cancel', 0)->where('active', 0)->get();
					foreach ($current_contents_fc as $current_contents_fcb)
					{ ?>                       
					   <a  class="social" target="_new" href="<?php echo $current_contents_fcb->desc_en; ?>"><i class="fab fa-facebook-f p-3 text-white"></i></a>
						<?php } ?>
					
					</div>
					@endauth
           @endif
          </div>
        <!--Navbar-->
        <nav class="navbar navbar-expand navbar-light bg-light " dir="ltr" style="font-size: larger;">
            
            <div class="float-left w-100 text-left">
                <button class="btn openbtn" onclick="openNav()"><i class="fas fa-bars" style="font-size: xx-large;"></i></button>
                <ul dir="ltr" class="m-0 d-inline-block pr-0 nav-hide-element">
                    <li class="nav-item active">
                        <a class="nav-link" href="../public?lang=<?=$langg?>" style="border-bottom:2px solid #f6b009 ;">Home Page</span></a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="../public?lang=<?=$langg?>#service">About Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../public?lang=<?=$langg?>#appointments">Available Service Times</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../public?lang=<?=$langg?>#subscriptions">Price Packages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../public?lang=<?=$langg?>#we">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../public?lang=<?=$langg?>#contact">Contact Us</a>
                    </li>
					<?php if ($langg == "en") { ?>
					<li class="nav-item">
                        <a class="nav-link" href="?lang=ar">عربى</a>
                    </li>
					<?php }elseif ($langg == "ar") { ?>
					<li class="nav-item">
                        <a class="nav-link" href="?lang=en">English</a>
                    </li>
					<?php } ?>
                </ul>
                
            </div>
			<div class="float-right">
                <a href="../public?lang=<?=$langg?>" class="navbar-brand pl-4"><img src="img/logo_100.png" style="width:35px; height: 60px;"></a>
            </div>
        </nav>
		<div onclick="closeNav()">

		
		
		
       
		
		
		
		

       