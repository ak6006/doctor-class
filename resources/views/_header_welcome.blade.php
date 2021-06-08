
 <?php
                    use Illuminate\Support\Facades\Auth;
date_default_timezone_set('Asia/Riyadh');

                    // Get the currently authenticated user...
                    //echo $user = Auth::user() . "<hr/>"; 
                    // Get the currently authenticated user's ID...
					
                    $id = Auth::id() ;
					
					if ($id) {
              //      $name = Auth::user()->name;
               //     $email = Auth::user()->email;
				//	$role = Auth::user()->role;
                //    $verified = Auth::user()->email_verified_at ;
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
    </head>
    <body class="bg-light">
	<button onclick="topFunction()" id="topBtn" title="الي اعلي"><i class="fas fa-arrow-circle-up"></i></button>
        <!-- side bar -->
 <div id="mySidepanel" class="sidepanel text-right">
            <a href="javascript:void(0)" class="closebtn px-2" onclick="closeNav()">×</a>
            <h3 class="px-4 pt-4 pb-2" style="color: white;">الصفحة الرئيسية</h3>
           
			


			@if (Route::has('login'))
                      @auth
				  
				  <?php if (Auth::user()->role === "admin") { ?>
				<a href="{{ url('/admindashboard') }}" >
							 لوحة التحكم
						</a>
	
				<?php }else {?>
			
						<a href="{{ url('/home') }}" >
							لوحة التحكم
						</a>
		
				<?php } ?>
			
			<?php  $company = DB::table('students')->where('user_id', Auth::id())->first();


   if ($company){
 ?>
			<a href="{{ url('/students') }}" id="manage">
							 ادارة الشركة
						</a>
			
			<?php }else { ?>
						<a href="{{ url('/students/create') }}" id="manage">
						 تسجيل شركة
						</a>
			
<?php } ?>
			  <?php   if ($company){ ?>
			  <a href="{{ url('/branchs/create') }}" id="manage2">تسجيل فرع جديد </a>
 
			  <?php } ?>
			<a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" >
            تسجيل الخروج
        </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <br>
			<hr class="bg-light w-75">
            <div class="text-center">
                <a href="#" class="social"><i class="fab fa-instagram p-3"></i></a>
                <a href="#" class="social"><i class="fab fa-whatsapp p-3"></i></a>
                <a href="#" class="social"><i class="fab fa-facebook-f p-3"></i></a>
            </div>
			</div>

    @else

          
		   <?php if ($title == "register") { ?>
            <h6 class="px-4" style="color: white;">تسجيل مستخدم جديد</h6>
		   <?php } elseif ($title == "login") {?>
		   		 <h6 class="px-4" style="color: white;"> تسجيل الدخول </h6>
			<?php } else {?>	 
          <h6 class="px-4" style="color: white;"> تسجيل </h6>
		   <?php } ?>
            
		    <hr class="bg-light w-75">
		   
            	<a href="{{ url('/login') }}" >
							
							تسجيل الدخول  
				</a>
	
		   <?php if ($title == "register") { ?>
            <a  style="color: #fff;" href="{{ url('/register') }}" >تسجيل مستخدم جديد</a>
		   <?php } else {?>
		   		 
            <a  href="{{ url('/register') }}" >تسجيل مستخدم جديد</a>
		   <?php } ?>
            <br>
			<hr class="bg-light w-75">
            <div class="text-center">
                <a href="#" class="social"><i class="fab fa-instagram p-3"></i></a>
                <a href="#" class="social"><i class="fab fa-whatsapp p-3"></i></a>
                <a href="#" class="social"><i class="fab fa-facebook-f p-3"></i></a>
            </div>
			@endauth
           @endif
            
          </div>
        <!--Navbar-->
        <nav class="navbar navbar-expand navbar-light bg-light " dir="ltr" style="font-size: larger;">
            <div class="float-left pl-4">
                <a href="{{ url('/') }}"  class="navbar-brand"><img src="img/logo_100.png" style="width:35px; height: 60px;"></a>
            </div>
            <div class="float-right w-100 text-right">
                
                <ul dir="rtl" class="m-0 d-inline-block pr-0 nav-hide-element">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/') }}" style="border-bottom:2px solid #0174CF ;">الصفحة الرئيسية</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/#service') }}">عن الخدمة</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/#appointments') }}">مواعيد الخدمة المتاحة</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/#subscriptions') }}">باقات الاسعار</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/#we') }}">من نحن</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/#contact') }}">اتصل بنا</a>
                    </li>
                </ul>
                <button class="btn openbtn" onclick="openNav()"><i class="fas fa-bars" style="font-size: xx-large;"></i></button>
            </div>
        </nav>
		
   <script>
       function openNav() {
           document.getElementById("mySidepanel").style.width = "300px";
       }
           function closeNav() {
           document.getElementById("mySidepanel").style.width = "0";
       }
   </script>