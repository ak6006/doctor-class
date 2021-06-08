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

<?php $title = "login"; ?>

	<?php	if ($langg == "en"){ ?>
			@include('header_welcome_en') 
	<?php }elseif ($langg == "ar"){?>
			@include('header_welcome_ar') 
	<?php } ?>


<div class="text-center">
			<?php	if ($langg == "en"){ ?>
            <h1 class="py-4"><span class="py-2" style="border-bottom: 2px solid #0174CF; color: #0174CF;"> User Login</span></h1>
			<?php }elseif ($langg == "ar"){?>
			<h1 class="py-4"><span class="py-2" style="border-bottom: 2px solid #0174CF; color: #0174CF;">تسجيل الدخول</span></h1>
			<?php } ?>
            <div class="container-md container-fluid mt-3 mb-5 ">
                <div class="row ">
                    <div class="col-md-1"></div>
                    <div class="col-12 col-md-10 shadow overflow-hidden" style="background-color: #0174CF; border-radius: 40px;">
                        <div class="row">
						<?php	if ($langg == "en"){ ?>
								<div class="col-3 col-md-2 px-0 my-auto">
                                <a title="Login  " href="login?lang=<?=$langg?>">
                                    <div class="w-100 bg-light" style="border-radius: 0 40px 40px 0;">
                                        <img src="img/user.svg" style="width: 50px; padding: 2.5rem 0;">
                                    </div>
                                </a>
                                <a title="Register A New User" href="register?lang=<?=$langg?>">
                                    <div style="border-radius: 0 40px 40px 0; background-color: #55ACF1; width: 70%;">
                                        <img src="img/add-friend.svg" style="width: 40px; padding: 2.5rem 0;">
                                    </div>
                                </a>
                                <a title="Register A New Company  " href="#">
                                    <div style="border-radius: 0 40px 40px 0; background-color: #55ACF1; width: 70%;">
                                        <img src="img/business-and-trade.svg" style="width: 40px; padding: 2.5rem 0;">
                                    </div>
                                </a>
                                <a  title="Create New Branch" href="#">
                                    <div style="border-radius: 0 40px 40px 0; background-color: #55ACF1; width: 70%;">
                                        <img src="img/business-center.svg" style="width: 40px; padding: 2.5rem 0;">
                                    </div>
                                </a>
                            </div> 
						<?php }elseif ($langg == "ar"){?>
							<div class="col-3 col-md-2 px-0 my-auto">
                                <a title="تسجيل الدخول  " href="login?lang=<?=$langg?>">
                                    <div class="w-100 bg-light" style="border-radius: 40px 0 0 40px;">
                                        <img src="img/user.svg" style="width: 50px; padding: 2.5rem 0;">
                                    </div>
                                </a>
                                <a title="تسجيل مستخدم جديد" href="register?lang=<?=$langg?>">
                                    <div style="border-radius: 40px 0 0 40px; background-color: #55ACF1; width: 70%;">
                                        <img src="img/add-friend.svg" style="width: 40px; padding: 2.5rem 0;">
                                    </div>
                                </a>
                                <a title="تسجيل شركة" href="#">
                                    <div style="border-radius: 40px 0 0 40px; background-color: #55ACF1; width: 70%;">
                                        <img src="img/business-and-trade.svg" style="width: 40px; padding: 2.5rem 0;">
                                    </div>
                                </a>
                                <a title="تسجيل فرع" href="#">
                                    <div style="border-radius: 40px 0 0 40px; background-color: #55ACF1; width: 70%;">
                                        <img src="img/business-center.svg" style="width: 40px; padding: 2.5rem 0;">
                                    </div>
                                </a>
                            </div>
						<?php } ?>
                            
							<?php	if ($langg == "en"){ ?>
                            <div class="col-9 col-md-10 text-light my-auto px-sm-5 text-left" >
							<?php }elseif ($langg == "ar"){?>
							<div class="col-9 col-md-10 text-light my-auto px-sm-5 text-right" >
							<?php } ?>
                           <form method="POST" action="{{ route('login') }}">
					@csrf
                                    <div class="row">
									<?php	if ($langg == "en"){ ?>
                                        <div class="col-sm-4 py-3 pr-5" style="font-size: x-large;">  E Mail</div>
									<?php }elseif ($langg == "ar"){?>
										<div class="col-sm-4 py-3 pr-5" style="font-size: x-large;"> البريد الالكتروني</div>
									<?php } ?>
                                        <div class="col-sm-8 m-auto py-3 ">
										<input  type="email" class="form-control rounded-0 w-75 m-auto text-left" name="email" placehodel="Email" required   >
										</div>
										 @error('email')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										 @enderror
                                    </div>
                                    <div class="row">
									<?php	if ($langg == "en"){ ?>
                                        <div class="col-sm-4 py-3 pr-5" style="font-size: x-large;">  Password</div>
									<?php }elseif ($langg == "ar"){?>
									<div class="col-sm-4 py-3 pr-5" style="font-size: x-large;"> كلمة السر</div>
									<?php } ?>
                                        <div class="col-sm-8 m-auto py-3">
											<div class="input-group mb-3 w-75 m-auto" dir="ltr">
												<div class="input-group-append">
											<div class="input-group-text">
											  <input class="fa fa-fw fa-eye field_icon toggle-password" type="checkbox" onclick="myFunction()">
											</div>
										  </div>
												<input id="password" type="password" class="form-control @error('password') is-invalid @enderror rounded-0 w-75 m-auto" name="password" required autocomplete="new-password">
											</div>
											
												@error('password')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
												@enderror
			
										</div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-4 py-3"></div>
                                        <div class="col-sm-8 m-auto py-3">
                                            <div class="m-auto text-right" style="width: 75%;">
											<?php	if ($langg == "en"){ ?>
                                                <input class="btn px-3 pb-2 pt-0 w-50" type="submit" value="Login" style="background-color: white; color: #0174CF; border-radius: 10px; font-size: x-large;">
											<?php }elseif ($langg == "ar"){?>
											    <input class="btn px-3 pb-2 pt-0 w-50" type="submit" value="دخول" style="background-color: white; color: #0174CF; border-radius: 10px; font-size: x-large;">
											<?php } ?>
                                            </div>
											<br>
											<div class="m-auto text-right" style="width: 100%;">
											<?php	if ($langg == "en"){ ?>
                                                <a class="btn px-3 pb-2 pt-0 w-50" href="email"  style="background-color: white; color: #0174CF; border-radius: 10px; font-size: x-large;">Forget Password</a>
											<?php }elseif ($langg == "ar"){?>
											    <a class="btn px-3 pb-2 pt-0 w-50" href="email"  style="background-color: white; color: #0174CF; border-radius: 10px; font-size: x-large;">نسيت كلمة السر</a>
											<?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<script>
    function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

<script>
function openNav() {
            document.getElementById("mySidepanel").style.width = "300px";
           // document.getElementById("mySidepanel").focus();
        }
            function closeNav() {
            document.getElementById("mySidepanel").style.width = "0";
        }
</script>

