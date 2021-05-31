

@section('content')

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
        <link rel="icon" type="image/png" href="img/logo_100.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/ef9b0108c9.js" crossorigin="anonymous"></script>
        <script src="dataTables.min.js"></script>
        <script src="dataTables.bootstrap4.min.js"></script>
        <link rel="stylesheet" href="style.css">
        <style>
            table{
                width:100%;
            }
            label {
                display: inline-flex;
                margin-bottom: .7rem;
                margin-top: .7rem;
                width: 70%;
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
            <a href="javascript:void(0)" class="closebtn px-2" onclick="closeNav()">×</a>
            <a href="{{ url('/') }}" >الصفحة الرئيسية</a>
			<a href="{{ url('/admindashboard') }}" >لوحة تحكم المدير</a>
			<a href="{{ url('/publicwebcontents') }}" > ادارة الموقع</a>
            <a href="{{ url('/useredit') }}" >بياناتى</a>
            <a href="{{ url('/users') }}" >ادارة المستخدمين</a>
            <a href="{{ url('/companies') }}" >ادارة الشركات</a>
			<a href="{{ url('/branchss') }}" >ادارة الفروع</a>
            <a href="{{ url('/managesubscriptions') }}" >ادارة الاشتراكات</a>
            <a href="{{ url('/bouquets') }}" >ادارة الباقات</a>
			<a href="#" > الرسائل</a>
			<a href="{{ url('/cities') }}" > ادارة مواعيد العمل</a>
			<a href="{{ url('/payment_method') }}" >   ادارة طرق الدفع</a>
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
        <nav class="navbar navbar-expand navbar-light px-3 py-0 text-center bg-blue" dir="ltr" style="  font-size: larger;">
            <div class="float-left">
                <a  href="{{ url('/') }}" class="navbar-brand text-left"><img src="img/Logo_white.png" class="w-50 py-2"></a>
            </div>
            <div class="float-right w-100 text-right">
                <ul dir="rtl" class="m-0 d-inline-block pr-0 ">
				
                    <li class="nav-item nav-hide-element">
                        <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class=" nav-link btn text-light logbtn" >
						 تسجيل الخروج</a>
                    </li>
					      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
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