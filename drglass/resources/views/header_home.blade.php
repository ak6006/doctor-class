



 <?php
                    use Illuminate\Support\Facades\Auth;
date_default_timezone_set('Asia/Riyadh');

                    // Get the currently authenticated user...
                    //echo $user = Auth::user() . "<hr/>"; 
                    // Get the currently authenticated user's ID...
					
                    $id = Auth::id() ;
					
					if ($id) {
                    $name = Auth::user()->name;
                    $email = Auth::user()->email;
					$role = Auth::user()->role;
                    $verified = Auth::user()->email_verified_at ;
					$had_company = Auth::user()->had_company;
					}
                    $title = '';
                    ?>



<!DOCTYPE html>
<html lang="ar" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="img/LOGO_WHITE_100.png">
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
            .sidepanel  {
                width: 0;
                position: fixed;
                z-index: 3;
                height: 100vh;
                top: 0;
                right: 0;
                background-color: #303030;
                overflow-x: hidden;
                transition: 0.5s;
                padding-top: 60px;
                border-bottom-left-radius: 30px;
            }

            .sidepanel a {
                padding: 8px 50px;
                text-decoration: none;
                font-size: 20px;
                color: #0174CF;
                display: block;
                transition: 0.3s;
            }

            .sidepanel a:hover {
                color: #f1f1f1;
            }

            .sidepanel .closebtn {
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
        </style>
    </head>
    <body class="bg-light">
        <!-- side bar -->
        <div id="mySidepanel" tabindex="0" onblur="closeNav()" class="sidepanel text-right panel">
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
            <a href="#"> مواعيد الزيارات </a>
            <a href="#"> اتصل بنا </a>
         
            
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
                <button class=" btn userbtn bg-white text-blue"> {{Auth::user()->name}} <i class="fas fa-user"></i></button>
            </div>
          </div>
        <!--Navbar-->
        <nav class="navbar navbar-expand navbar-light px-3 py-0 text-center bg-blue" dir="ltr" style="font-size: larger;">
            <div class="float-left">
                <a  href="{{ url('/') }}" class="navbar-brand text-left"><img src="img/Logo_white.png" class="w-50 py-2"></a>
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
                        <a class="nav-link btn userbtn bg-white text-blue"> {{Auth::user()->name}} <i class="fas fa-user"></i></a>
                    </li>
                </ul>
                <button class="btn text-light" onclick="openNav()"><i class="fas fa-bars" style="font-size: xx-large;"></i></button>
            </div>
        </nav>
		
		   <script>
       function openNav() {
           document.getElementById("mySidepanel").style.width = "300px";
		             //  document.getElementById("mySidepanel").focus();
       }
           function closeNav() {
           document.getElementById("mySidepanel").style.width = "0";
       }
   </script>