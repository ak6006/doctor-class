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
<?php if (Auth::user()->role == "admin") { ?>
@include('header_admin')
<?php } elseif (Auth::user()->role == "") { ?>
@include('header_home') 
<?php } ?>

@extends('layouts.app')

@section('content')

			
<?php //$title = 'register'; 


?>

        <!-- login div -->
			<?php if ($langg == "ar") { ?>
        <div class="text-center">
            <h1 class="py-4"><span class="py-2" style="border-bottom: 2px solid #0174CF; color: #0174CF;">تغيير كلمة السر </span></h1>
            <div class="container-md container-fluid mt-3 mb-5">
                <div class="row ">
                    <div class="col-md-1"></div>
                    <div class="col-12 col-md-10 shadow overflow-hidden" style="background-color: #0174CF; border-radius: 30px;">
                        <div class="row">
                            <div class="col-3 col-md-2 pr-0 my-auto">
                                <a title="تعديل بياناتى" href="">
                                    <div class="w-100 bg-light" style="border-radius: 40px 0 0 40px;">
                                        <img src="img/edit.svg" style="width: 50px; padding: 2.5rem 0;">
                                        <!-- <i class="fas fa-user " style="font-size: xxx-large; color: #0174CF; padding: 2.5rem 0;"></i> -->
                                    </div>
                                </a>
                            </div>
                            <div class="col-9 col-md-10 text-light my-auto px-sm-5 text-right p-5" >
                                <form onsubmit ="return verifyPassword()" method="GET" action="userpasswordchanged" enctype="multipart/form-data">
								@csrf
                                    
                                  <input type="hidden" value="KL34KLG43KLJHFS888FLKJFD098FDLJHFD8709809DFLJHDF0980DFLKJFD098DFLKJFDLKJFD090FD80989080FDLJKHLKHDF897DFJHSDBNVZX,MMNX';DSLSF" name="a">
                                  <div class="row">
                                        <div class="col-sm-4 py-2 pr-5" style="font-size: x-large;"> كلمة السر الجديدة</div>
                                        <div class="col-sm-8 m-auto py-2">
											<div class="input-group mb-3 w-75 m-auto" dir="ltr">
												<div class="input-group-append">
											<div class="input-group-text">
											  <input class="fa fa-fw fa-eye field_icon toggle-password" type="checkbox" onclick="myFunction()">
											</div>
										  </div>
												<input id="pswd"  type="password" class="form-control @error('password') is-invalid @enderror rounded-0" name="password" required autocomplete="new-password">
											</div>
											<p id="passwordHelpBlock" class="form-text text-light text-right w-75 m-auto">
كلمة المرور يجب ان تكون أكثر من 8 و أقل من 15 حرف									</p>
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
												<input id="password-confirm" onkeyup="disbtn()" type="password" class="form-control rounded-0" name="password_confirmation">
										@error('password')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
											</div>
											
										</div>
                                    </div>
 
                                    <br>

									<div class="row">
                                        <div class="col-sm-4 py-0 py-sm-2"></div>
                                        <div class="col-sm-8 m-auto py-3">
                                            <div class="m-auto text-left" style="width: 75%;">
                                                <input class="btn  pb-2 pt-0 px-5" id="changepass" disabled type="submit" value="تعديل" style="background-color: white; color: #0174CF; border-radius: 10px; font-size: x-large;">
                                            </div>
										</div>
                                    </div>
                                   
                                </form>
								
								
								

<script>

function disbtn() {
		var pass=$("#pswd").val();
		var comfpass=$("#password-confirm").val();;
    if ( pass == comfpass ) {
	   document.getElementById('changepass').removeAttribute("disabled");
	   document.getElementById("confmessage").innerHTML = "";
    } else {
       document.getElementById('changepass').setAttribute("disabled","disabled");
	   document.getElementById("confmessage").innerHTML = " تاكيد كلمة السر غير متطابقة";
    }
}
  
function verifyPassword() {  
  var pw = document.getElementById("pswd").value;  
  //check empty password field  
  if(pw == "") {  
     document.getElementById("message").innerHTML = "**Fill the password please!";  
     return false;  
  }  
   
 //minimum password length validation  
  if(pw.length < 8) {  
     document.getElementById("message").innerHTML = "يجب ألا يقل طول كلمة المرور عن 8 أحرف";  
     return false;  
  }  
  
//maximum length of password validation  
  if(pw.length > 15) {  
     document.getElementById("message").innerHTML = "يجب ألا يتجاوز طول كلمة المرور 15 حرفًا";  
     return false;  
  } else {  
     alert("تأكيد تغير كلمة السر");  
  }  
}  
</script>  

<center>  

  

<h3><span id = "message" style="color:#ffffff;"> </span> </h3>
<h3><span id = "confmessage" style="color:#ffffff;"> </span> </h3>

 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
			<?php }elseif ($langg == "en") { ?>
			        <div class="text-center">
            <h1 class="py-4"><span class="py-2" style="border-bottom: 2px solid #0174CF; color: #0174CF;">Change Password</span></h1>
            <div class="container-md container-fluid mt-3 mb-5">
                <div class="row ">
                    <div class="col-md-1"></div>
                    <div class="col-12 col-md-10 pl-0 shadow overflow-hidden" style="background-color: #0174CF; border-radius: 30px;">
                        <div class="row">
                            <div class="col-3 col-md-2 pr-0 my-auto">
                                <a title="Change Password" href="">
                                    <div class="w-100 bg-light" style="border-radius:0 40px 40px 0;">
                                        <img src="img/edit.svg" style="width: 50px; padding: 2.5rem 0;">
                                        <!-- <i class="fas fa-user " style="font-size: xxx-large; color: #0174CF; padding: 2.5rem 0;"></i> -->
                                    </div>
                                </a>
                            </div>
                            <div class="col-9 col-md-10 text-light my-auto px-sm-5 text-left p-5" >
                                <form onsubmit ="return verifyPassword()" method="GET" action="userpasswordchanged" enctype="multipart/form-data">
								@csrf
                                    
                                  <input type="hidden" value="KL34KLG43KLJHFS888FLKJFD098FDLJHFD8709809DFLJHDF0980DFLKJFD098DFLKJFDLKJFD090FD80989080FDLJKHLKHDF897DFJHSDBNVZX,MMNX';DSLSF" name="a">
                                  <div class="row">
                                        <div class="col-sm-4 py-2 pr-5" style="font-size: x-large;"> New Password</div>
                                        <div class="col-sm-8 m-auto py-2">
											<div class="input-group mb-3 w-75 m-auto" dir="ltr">
												<div class="input-group-append">
											<div class="input-group-text">
											  <input class="fa fa-fw fa-eye field_icon toggle-password" type="checkbox" onclick="myFunction()">
											</div>
										  </div>
												<input id="pswd"  type="password" class="form-control @error('password') is-invalid @enderror rounded-0" name="password" required autocomplete="new-password">
											</div>
											<p id="passwordHelpBlock" class="form-text text-light text-right w-75 m-auto">
Password must be more than 8 and less than 15 characters								</p>
												@error('password')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
												@enderror
			
										</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-4 py-2 pr-5" style="font-size: x-large;">Confirm New Password</div>
                                        <div class="col-sm-8 m-auto py-2">
											<div class="input-group mb-3 w-75 m-auto" dir="ltr">
												<div class="input-group-append">
											<div class="input-group-text">
											  <input class="fa fa-fw fa-eye field_icon toggle-password" type="checkbox" onclick="myFunction2()">
											</div>
										  </div>
												<input id="password-confirm" onkeyup="disbtn()" type="password" class="form-control rounded-0" name="password_confirmation">
										@error('password')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
											</div>
											
										</div>
                                    </div>
 
                                    <br>

									<div class="row">
                                        <div class="col-sm-4 py-0 py-sm-2"></div>
                                        <div class="col-sm-8 m-auto py-3">
                                            <div class="m-auto text-left" style="width: 75%;">
                                                <input class="btn  pb-2 pt-0 px-5" id="changepass" disabled type="submit" value="Update" style="background-color: white; color: #0174CF; border-radius: 10px; font-size: x-large;">
                                            </div>
										</div>
                                    </div>
                                   
                                </form>
								
								
								

<script>

function disbtn() {
		var pass=$("#pswd").val();
		var comfpass=$("#password-confirm").val();;
    if ( pass == comfpass ) {
	   document.getElementById('changepass').removeAttribute("disabled");
	   document.getElementById("confmessage").innerHTML = "";
    } else {
       document.getElementById('changepass').setAttribute("disabled","disabled");
	   document.getElementById("confmessage").innerHTML = " تاكيد كلمة السر غير متطابقة";
    }
}
  
function verifyPassword() {  
  var pw = document.getElementById("pswd").value;  
  //check empty password field  
  if(pw == "") {  
     document.getElementById("message").innerHTML = "**Fill the password please!";  
     return false;  
  }  
   
 //minimum password length validation  
  if(pw.length < 8) {  
     document.getElementById("message").innerHTML = "يجب ألا يقل طول كلمة المرور عن 8 أحرف";  
     return false;  
  }  
  
//maximum length of password validation  
  if(pw.length > 15) {  
     document.getElementById("message").innerHTML = "يجب ألا يتجاوز طول كلمة المرور 15 حرفًا";  
     return false;  
  } else {  
     alert("تأكيد تغير كلمة السر");  
  }  
}  
</script>  

<center>  

  

<h3><span id = "message" style="color:#ffffff;"> </span> </h3>
<h3><span id = "confmessage" style="color:#ffffff;"> </span> </h3>

 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
			<?php } ?>
    </body>
	<!-- /.register-box -->
<script>
    function myFunction() {
  var x = document.getElementById("pswd");
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

