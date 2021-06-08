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



<!DOCTYPE html>
 <?php if ($langg == "ar"){?>
<html lang="ar" dir="rtl">
 <?php }elseif ($langg == "en"){?>
 <html lang="ar" dir="ltr">
 <?php } ?>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" id="favic" type="image/png" href="img/logo_100.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/ef9b0108c9.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">


        <style>
            .nav-item{
                list-style-type: none;
                display: inline-block;
            }
            li{
                list-style-type: none;
            }
            a{
                text-decoration: none;
                color: #646464;
            }
            .sidepanell  {
                width: 0;
                position: fixed;
                z-index: 22;
                height: 100vh;
                top: 0;
                background-color: #303030;
                overflow-x: hidden;
                transition: 0.5s;
                padding-top: 60px;
                border-bottom-left-radius: 30px;
            }

            .sidepanell a {
                padding: 8px 50px;
                text-decoration: none;
                font-size: 20px;
                color: #0174CF;
                display: block;
                transition: 0.3s;
            }

            .sidepanell a:hover {
                color: #f1f1f1;
            }

            .sidepanell .closebtn {
                position: absolute;
                top: 0;
                left: 25px;
                font-size: 36px;
            }
            .openbtn{
                color: #0174CF;
            }
            .openbtn:hover {
                background-color:#0174CF;
                color: white;
            }
            .social{
                display: inline-block !important;
                padding: 8px !important;
                color: white !important; 
                font-size: xx-large !important;
            }
            @media screen and (max-width: 992px) {
                .nav-hide-element{
                    display: none !important;
                }
            } 
			.sidepanelar{
				right:0 !important;
			}
			.sidepanelen{
				border-bottom-right-radius: 30px !important;
				border-bottom-left-radius: 0px !important;
				left:0 !important;
			}
			.closebtnen{
				position: absolute;
				top: 0;
				right: 25px;
				font-size: 36px !important;
			}
        </style>
    </head>
    <body class="bg-light">
        <!-- side bar -->
			<?php	if ($langg == "en"){ ?>
			
	
        <div id="mySidepanel" tabindex="0" onblur="closeNav()" class="sidepanell sidepanelen text-left panel">
            <a href="javascript:void(0)" class="closebtnen px-2" onclick="closeNav()">×</a><br>
            <a href="{{ url('/') }}"> Home Page </a>
            <a href="{{ url('/home') }}"> Control Panel </a>
						<?php  $company = DB::table('students')->where('user_id', Auth::id())->first();


   if ($company){
 ?>
			<a href="{{ url('/students') }}">
							 Manage Company
						</a>
			
			
			<?php }else { ?>
						<a href="{{ url('/students/create') }}">
						 New Company
						</a>	
<?php } ?>
			  <?php   if ($company){ ?>
			  <a href="{{ url('/branchs/create') }}"> New Branch </a>
 
			  <?php } ?>
            <a href="{{ url('/useredit') }}"> My Information </a>
            <a href="{{ url('subscriptions_home') }}"> Subscriptions </a>
            <!--<a href="#"> مواعيد الزيارات </a>-->
            <a href="#"> Contact Us </a>
                 <?php if (isset($_GET['subid'])){ ?>
            <?php if ($langg == "en") { ?>
                        <a class="nav-link" href="?lang=ar&subid=<?=$_GET['subid']?>">عربى</a>
					<?php }elseif ($langg == "ar") { ?>
					
                        <a class="nav-link" href="?lang=en&subid=<?=$_GET['subid']?>">English</a>
					<?php } }else { ?>
					 <?php if ($langg == "en") { ?>
                        <a class="nav-link" href="?lang=ar">عربى</a>
					<?php }elseif ($langg == "ar") { ?>
					
                        <a class="nav-link" href="?lang=en">English</a>
					<?php } } ?>
            
            <br>
            <hr class="bg-light w-75">
            <div class="text-center">

                <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class=" btn text-light logbtn" style="padding: 3px 5px; width: 50%;margin: auto;" >
          <span class="glyphicon glyphicon-log-out"></span>Log Out
        </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
		<br>
                <a  href="{{ url('/home') }}" class=" btn userbtn bg-white text-blue" style="padding: 3px 5px; width: 50%;margin: auto;"> {{Auth::user()->name}} <i class="fas fa-user"></i></a>
            </div>
          </div>
        <!--Navbar-->
        <nav class="navbar navbar-expand navbar-light px-3 py-0 text-center bg-blue" dir="ltr" style="font-size: larger;">
            
            <div class="float-left w-100 text-left">
			<button class="btn text-light" onclick="openNav()"><i class="fas fa-bars" style="font-size: xx-large;"></i></button>
                <ul dir="rtl" class="m-0 d-inline-block pr-0 ">
                  
                    <li class="nav-item nav-hide-element">
                        <a  href="{{ url('/home') }}" class="nav-link btn userbtn bg-white text-blue"> {{Auth::user()->name}} <i class="fas fa-user"></i></a>
                    </li>
					  <li class="nav-item active nav-hide-element">
                        
						  <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="nav-link btn text-light logbtn" >
          <span class="glyphicon glyphicon-log-out"></span>  Log Out
        </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
                    </li>
                </ul>
                
            </div>
			<div class="float-right">
                <a  href="{{ url('/') }}"  class="navbar-brand text-right"><img id="logo" src="img/Logo_white.png" class="w-50 py-2"></a>
            </div>
        </nav>
		<!-------------------------------------------------------------->
		<?php }elseif ($langg == "ar"){?>
			
        <div id="mySidepanel" tabindex="0" onblur="closeNav()" class="sidepanelar sidepanell text-right panel">
            <a href="javascript:void(0)" class="closebtn px-2" onclick="closeNav()">×</a><br>
            <a href="{{ url('/') }}"> الصفحة الرئيسية </a>
            <a href="{{ url('/home') }}"> لوحة التحكم </a>
						<?php  $company = DB::table('students')->where('user_id', Auth::id())->first();


   if ($company){
 ?>
			<a href="{{ url('/students') }}">
							 إدارة الشركة
						</a>
			
			
			<?php }else { ?>
						<a href="{{ url('/students/create') }}">
						 تسجيل شركة
						</a>	
<?php } ?>
			  <?php   if ($company){ ?>
			  <a href="{{ url('/branchs/create') }}">تسجيل فرع جديد </a>
 
			  <?php } ?>
            <a href="{{ url('/useredit') }}"> بياناتي </a>
            <a href="{{ url('subscriptions_home') }}"> الإشتراكات </a>
          <!--  <a href="#"> مواعيد الزيارات </a>-->
            <a href="#"> اتصل بنا </a>
					<?php if (isset($_GET['subid'])){ ?>
					<?php if ($langg == "en") { ?>
                        <a class="nav-link" href="?lang=ar&subid=<?=$_GET['subid']?>">عربى</a>
					<?php }elseif ($langg == "ar") { ?>
					
                        <a class="nav-link" href="?lang=en&subid=<?=$_GET['subid']?>">English</a>
					<?php } }else { ?>
					 <?php if ($langg == "en") { ?>
                        <a class="nav-link" href="?lang=ar">عربى</a>
					<?php }elseif ($langg == "ar") { ?>
					
                        <a class="nav-link" href="?lang=en">English</a>
					<?php } } ?>
            <br>
            <hr class="bg-light w-75">
            <div class="text-center">

                <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class=" btn text-light logbtn" style="padding: 3px 5px; width: 50%;margin: auto;" >
          <span class="glyphicon glyphicon-log-out"></span>تسجيل الخروج
        </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
		<br>
                <a  href="{{ url('/home') }}" class=" btn userbtn bg-white text-blue" style="padding: 3px 5px; width: 50%;margin: auto;"> {{Auth::user()->name}} <i class="fas fa-user"></i></a>
            </div>
          </div>
        <!--Navbar-->
        <nav class="navbar navbar-expand navbar-light px-3 py-0 text-center bg-blue" dir="ltr" style="font-size: larger;">
            <div class="float-left">
                <a  href="{{ url('/') }}"  class="navbar-brand text-left"><img id="logo" src="img/Logo_white.png" class="w-50 py-2"></a>
            </div>
            <div class="float-right w-100 text-right">
                <ul dir="rtl" class="m-0 d-inline-block pr-0 ">
                    <li class="nav-item active nav-hide-element">
                        
		<a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="nav-link btn text-light logbtn" >
          <span class="glyphicon glyphicon-log-out"></span>  تسجيل الخروج
        </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
                    </li>
                    <li class="nav-item nav-hide-element">
                        <a  href="{{ url('/home') }}" class="nav-link btn userbtn bg-white text-blue"> {{Auth::user()->name}} <i class="fas fa-user"></i></a>
                    </li>
                </ul>
                <button class="btn text-light" onclick="openNav()"><i class="fas fa-bars" style="font-size: xx-large;"></i></button>
            </div>
        </nav>
		<?php } ?>
		   <script>
       function openNav() {
           document.getElementById("mySidepanel").style.width = "300px";
		             //  document.getElementById("mySidepanel").focus();
       }
           function closeNav() {
           document.getElementById("mySidepanel").style.width = "0";
       }
   </script>