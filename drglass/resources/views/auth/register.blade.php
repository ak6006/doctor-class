@extends('layouts.app')

@section('content')


 <?php $title = 'register'; ?>
 
   	<?php	if (substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) == "en"){ ?>
			@include('header_welcome_en') 
	<?php }elseif (substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) == "ar"){?>
			@include('header_welcome_ar') 
	<?php } ?>
  

        <!-- login div -->
        <div class="text-center">
            <h1 class="py-4"><span class="py-2" style="border-bottom: 2px solid #0174CF; color: #0174CF;">تسجيل مستخدم جديد</span></h1>
            <div class="container-md container-fluid mt-3 mb-5">
                <div class="row ">
                    <div class="col-md-1"></div>
                    <div class="col-12 col-md-10 shadow overflow-hidden" style="background-color: #0174CF; border-radius: 30px;">
                        <div class="row">
						<?php	if (substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) == "en"){ ?>
								<div class="col-3 col-md-2 px-0 my-auto">
                                <a title="تسجيل الدخول  " href="{{ url('/login') }}">
                                    <div style="border-radius: 0 40px 40px 0; background-color: #55ACF1; width: 70%;">
                                        <img src="img/user.svg" style="width: 40px; padding: 2.5rem 0;">
                                        <!-- <i class="fas fa-user-plus " style="font-size: xx-large; color: #0174CF; padding: 2.5rem 0;"></i> -->
                                    </div>
                                </a>
                                <a title="تسجيل مستخدم جديد" href="{{ url('/register') }}">
                                    <div class="w-100 bg-light" style="border-radius: 0 40px 40px 0;">
                                        <img src="img/add-friend.svg" style="width: 50px; padding: 2.5rem 0;">
                                        <!-- <i class="fas fa-user " style="font-size: xxx-large; color: #0174CF; padding: 2.5rem 0;"></i> -->
                                    </div>
                                </a>
                                <a title="تسجيل شركة  " href="#">
                                    <div style="border-radius: 0 40px 40px 0; background-color: #55ACF1; width: 70%;">
                                        <img src="img/business-and-trade.svg" style="width: 40px; padding: 2.5rem 0;">
                                        <!-- <i class="fas fa-building " style="font-size: xx-large; color: #0174CF; padding: 2.5rem 0;"></i> -->
                                    </div>
                                </a>
                                <a title="تسجيل فرع  " href="#">
                                    <div style="border-radius: 0 40px 40px 0; background-color: #55ACF1; width: 70%;">
                                        <img src="img/business-center.svg" style="width: 40px; padding: 2.5rem 0;">
                                        <!-- <i class="fas fa-user-plus" style="font-size: xx-large; color: #0174CF; padding: 2.5rem 0;"></i> -->
                                    </div>
                                </a>
                            </div> 
						<?php }elseif (substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) == "ar"){?>
								<div class="col-3 col-md-2 px-0 my-auto">
                                <a title="تسجيل الدخول  " href="{{ url('/login') }}">
                                    <div style="border-radius: 40px 0 0 40px; background-color: #55ACF1; width: 70%;">
                                        <img src="img/user.svg" style="width: 40px; padding: 2.5rem 0;">
                                        <!-- <i class="fas fa-user-plus " style="font-size: xx-large; color: #0174CF; padding: 2.5rem 0;"></i> -->
                                    </div>
                                </a>
                                <a title="تسجيل مستخدم جديد" href="{{ url('/register') }}">
                                    <div class="w-100 bg-light" style="border-radius: 40px 0 0 40px;">
                                        <img src="img/add-friend.svg" style="width: 50px; padding: 2.5rem 0;">
                                        <!-- <i class="fas fa-user " style="font-size: xxx-large; color: #0174CF; padding: 2.5rem 0;"></i> -->
                                    </div>
                                </a>
                                <a title="تسجيل شركة  " href="#">
                                    <div style="border-radius: 40px 0 0 40px; background-color: #55ACF1; width: 70%;">
                                        <img src="img/business-and-trade.svg" style="width: 40px; padding: 2.5rem 0;">
                                        <!-- <i class="fas fa-building " style="font-size: xx-large; color: #0174CF; padding: 2.5rem 0;"></i> -->
                                    </div>
                                </a>
                                <a title="تسجيل فرع  " href="#">
                                    <div style="border-radius: 40px 0 0 40px; background-color: #55ACF1; width: 70%;">
                                        <img src="img/business-center.svg" style="width: 40px; padding: 2.5rem 0;">
                                        <!-- <i class="fas fa-user-plus" style="font-size: xx-large; color: #0174CF; padding: 2.5rem 0;"></i> -->
                                    </div>
                                </a>
                            </div> 
						<?php } ?>
                            
                            <div class="col-9 col-md-10 text-light my-auto px-sm-5 text-right " >
                                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
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
                                                <input class="form-check-input check" type="checkbox" id="exampleCheck1" required>
                                                <label class="form-check-label mr-5 py-2" for="exampleCheck1">اوافق علي <a href="#" class="text-warning"> الشروط والاحكام</a></label>
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





@endsection

