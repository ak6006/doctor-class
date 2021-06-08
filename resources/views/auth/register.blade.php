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
 <?php $title = 'register'; ?>
 
   	<?php	if ($langg == "en"){ ?>
			@include('header_welcome_en') 
	<?php }elseif ($langg == "ar"){?>
			@include('header_welcome_ar') 
	<?php } ?>
  

        <!-- login div -->
        <div class="text-center">
		<?php	if ($langg == "ar"){ ?>
            <h1 class="py-4"><span class="py-2" style="border-bottom: 2px solid #0174CF; color: #0174CF;">تسجيل مستخدم جديد</span></h1>
	    <?php	}elseif ($langg == "en"){ ?>
		<h1 class="py-4"><span class="py-2" style="border-bottom: 2px solid #0174CF; color: #0174CF;">Register A New User</span></h1>
		<?php } ?>
            <div class="container-md container-fluid mt-3 mb-5">
                <div class="row ">
                    <div class="col-md-1"></div>
                    <div class="col-12 col-md-10 shadow overflow-hidden" style="background-color: #0174CF; border-radius: 30px;">
                        <div class="row">
						<?php	if ($langg == "en"){ ?>
								<div class="col-3 col-md-2 px-0 my-auto">
                                <a title="Login" href="login?lang=<?=$langg?>">
								<div style="border-radius: 0 40px 40px 0; background-color: #55ACF1; width: 70%;">
                                    
                                        <img src="img/user.svg" style="width: 50px; padding: 2.5rem 0;">
                                    </div>
                                </a>
                                <a title="Register A New User" href="register?lang=<?=$langg?>">
                                    <div class="w-100 bg-light" style="border-radius: 0 40px 40px 0;">
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
                                    <div style="border-radius: 40px 0 0 40px; background-color: #55ACF1; width: 70%;">
                                        <img src="img/user.svg" style="width: 50px; padding: 2.5rem 0;">
                                    </div>
                                </a>
                                <a title="تسجيل مستخدم جديد" href="register?lang=<?=$langg?>">
								<div class="w-100 bg-light" style="border-radius: 40px 0 0 40px;">
                                    
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
                            <div class="col-9 col-md-10 text-light my-auto px-sm-5 text-left " >
                                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
								<input type="hidden" name="lang" value="<?=$langg?>" >
								@csrf
                                    <div class="row">
                                        <div class="col-sm-4 py-2 pr-5" style="font-size: x-large;"> User Full Name </div>
                                        <div class="col-sm-8 m-auto py-2 ">
										<input id="name"  type="text"  name="name" value="{{ old('name') }}"  autocomplete="name"  class="form-control w-75 m-auto @error('name') is-invalid @enderror rounded-0" required>
										</div>
								@error('name')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 py-2 pr-5" style="font-size: x-large;"> E Mail</div>
                                        <div class="col-sm-8 m-auto py-2 ">
										<input id="email" type="email" class="form-control w-75 m-auto @error('email') is-invalid @enderror rounded-0" name="email" value="{{ old('email') }}" required autocomplete="email" >
										</div>
								@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 py-2 pr-5" style="font-size: x-large;"> Mobile Number </div>
                                        <div class="col-sm-8 m-auto py-2 ">
											<div class="input-group mb-3 w-75 m-auto" dir="ltr">
										<div class="input-group-prepend ">
										  <span class="input-group-text  py-0" id="basic-addon1"><i class="flag-icon flag-icon-sa" style="font-size:xx-large"></i>+966</span>
										</div>
										<input id="mobile" type="number" class="form-control @error('mobile') is-invalid @enderror rounded-0" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" >
									</div>
										</div>
								@error('mobile')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 py-2 pr-5" style="font-size: x-large;"> Password</div>
                                        <div class="col-sm-8 m-auto py-2">
											<div class="input-group mb-3 w-75 m-auto" dir="ltr">
												<div class="input-group-append">
											<div class="input-group-text">
											  <input class="fa fa-fw fa-eye field_icon toggle-password" type="checkbox" onclick="myFunction()">
											</div>
										  </div>
												<input id="password" type="password" class="form-control @error('password') is-invalid @enderror rounded-0" name="password" required autocomplete="new-password">
											</div>
											<p id="passwordHelpBlock" class="form-text text-light text-right w-75 m-auto">
Password must be more than 8 and less than 15 characters long							
									</p>
												@error('password')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
												@enderror
			
										</div>
                                    </div>
									
									          
											  
			
                                    <div class="row">
                                        <div class="col-sm-4 py-2 " style="font-size: x-large;"> Confirm Password</div>
                                        <div class="col-sm-8 m-auto py-2">
											<div class="input-group mb-3 w-75 m-auto" dir="ltr">
												<div class="input-group-append">
											<div class="input-group-text">
											  <input class="fa fa-fw fa-eye field_icon toggle-password" type="checkbox" onclick="myFunction2()">
											</div>
										  </div>
												<input id="password-confirm" type="password" class="form-control rounded-0" name="password_confirmation">
										@error('password')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
											</div>
											
										</div>
                                    </div>
                                     <div class="row">
                                        <div class="col-sm-4"></div>
                                        <div class="col-sm-8 m-auto py-2 ">
                                            <div class="w-75 m-auto text-left">
                                                <input class="form-check-input check m-0 ml-1 " type="checkbox" id="exampleCheck1" style="width: 25px; height : 25px;" required>
                                                <label class="form-check-label ml-5 my-0 font-weight-bolder w-100" for="exampleCheck1"><p> I Agree <a href="#" class="text-warning"> Terms And Conditions</a></p></label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-4 py-3"></div>
                                        <div class="col-sm-8 m-auto py-3">
                                            <div class="m-auto text-left" style="width: 75%;">
                                                <input class="btn px-3 pb-2 pt-0 w-50" type="submit" value="Register" style="background-color: white; color: #0174CF; border-radius: 10px; font-size: x-large;">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
							<?php }elseif ($langg == "ar"){?>
							
                            <div class="col-9 col-md-10 text-light my-auto px-sm-5 text-right " >
                                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
								<input type="hidden" name="lang" value="<?=$langg?>" >
								@csrf
                                    <div class="row">
                                        <div class="col-sm-4 py-2 pr-5" style="font-size: x-large;"> اسم المستخدم </div>
                                        <div class="col-sm-8 m-auto py-2 ">
										<input id="name"  type="text"  name="name" value="{{ old('name') }}"  autocomplete="name"  class="form-control w-75 m-auto @error('name') is-invalid @enderror rounded-0" required>
										</div>
								@error('name')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 py-2 pr-5" style="font-size: x-large;"> البريد الالكتروني</div>
                                        <div class="col-sm-8 m-auto py-2 ">
										<input id="email" type="email" class="form-control w-75 m-auto @error('email') is-invalid @enderror rounded-0" name="email" value="{{ old('email') }}" required autocomplete="email" >
										</div>
								@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 py-2 pr-5" style="font-size: x-large;"> رقم الموبايل </div>
                                        <div class="col-sm-8 m-auto py-2 ">
											<div class="input-group mb-3 w-75 m-auto" dir="ltr">
										<div class="input-group-prepend ">
										  <span class="input-group-text  py-0" id="basic-addon1"><i class="flag-icon flag-icon-sa" style="font-size:xx-large"></i>+966</span>
										</div>
										<input id="mobile" type="number" class="form-control @error('mobile') is-invalid @enderror rounded-0" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" >
									</div>
										</div>
								@error('mobile')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 py-2 pr-5" style="font-size: x-large;"> كلمة السر</div>
                                        <div class="col-sm-8 m-auto py-2">
											<div class="input-group mb-3 w-75 m-auto" dir="ltr">
												<div class="input-group-append">
											<div class="input-group-text">
											  <input class="fa fa-fw fa-eye field_icon toggle-password" type="checkbox" onclick="myFunction()">
											</div>
										  </div>
												<input id="password" type="password" class="form-control @error('password') is-invalid @enderror rounded-0" name="password" required autocomplete="new-password">
											</div>
											<p id="passwordHelpBlock" class="form-text text-light text-right w-75 m-auto">
كلمة المرور يجب ان تكون أكثر من 8 و أقل من 15 حرف								
									</p>
												@error('password')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
												@enderror
			
										</div>
                                    </div>
									
									          
											  
			
                                    <div class="row">
                                        <div class="col-sm-4 py-2 pr-5" style="font-size: x-large;"> تاكيد كلمة السر </div>
                                        <div class="col-sm-8 m-auto py-2">
											<div class="input-group mb-3 w-75 m-auto" dir="ltr">
												<div class="input-group-append">
											<div class="input-group-text">
											  <input class="fa fa-fw fa-eye field_icon toggle-password" type="checkbox" onclick="myFunction2()">
											</div>
										  </div>
												<input id="password-confirm" type="password" class="form-control rounded-0" name="password_confirmation">
										@error('password')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
											</div>
											
										</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4"></div>
                                        <div class="col-sm-8 m-auto py-2 ">
                                            <div class="w-75 m-auto">
                                                <input class="form-check-input check" type="checkbox" id="exampleCheck1" style="width: 25px; height : 25px;" required>
                                                <label class="form-check-label mr-5 my-0 font-weight-bolder pt-1" for="exampleCheck1">اوافق علي <a href="#" class="text-warning"> الشروط والاحكام</a></label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-4 py-3"></div>
                                        <div class="col-sm-8 m-auto py-3">
                                            <div class="m-auto text-left" style="width: 75%;">
                                                <input class="btn px-3 pb-2 pt-0 w-50" type="submit" value="تسجيل" style="background-color: white; color: #0174CF; border-radius: 10px; font-size: x-large;">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
							<?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
	<!-- /.register-box -->
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
    function myFunction2() {
  var x = document.getElementById("password-confirm");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
    <script>
        function openNav() {
            document.getElementById("mySidepanel").style.width = "300px";
        }
            function closeNav() {
            document.getElementById("mySidepanel").style.width = "0";
        }
    </script>
	


</html>




