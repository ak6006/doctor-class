@extends('layouts.app')

@section('content')



                   
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CREW | HOME</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="src/images/favicon.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/ef9b0108c9.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="src/login.css">


<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    

  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">


</head>

    
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">




























  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="../images/favicon.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/ef9b0108c9.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/register.css">
  <div class="loginDiv" >
    <div class="container-fluid mt-0 text-center">
        <div class="pt-0">
            <div class="row">
              <div class="col-md-5 col-sm-5 p-0   text-light" style="background-color: #FEFF04;">
                <img src="img/register.jpg" class="img-fluid register-img" alt="Crew Image"  />
              </div>
              <div class="col-md-5 col-sm-5 mx-auto  text-light" style="position: relative;">
                <img src="img/logo png.png"  alt="Crew Image"  style="height: 75px; width: 150px; position: absolute; top: 25px; right: 40px; " />
                <div style="margin-top: 80px;"></div>
                <span class="anchor" id="formLogin"></span>
                <div class="card " style="background: none;">
                  <div class="card-header text-left">
                    <span class="mb-0 " style="font-size: 20px; font-weight: bolder; font-family: Arial, Helvetica, sans-serif; border-bottom: 2px solid #FEFF04;">R E G I S T E R</span>
                  </div>
                  <div class="card-body text-left" >
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
					@csrf
					 <div class="input-group mb-3">
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror rounded-0" name="email" value="{{ old('email') }}" required autocomplete="email"  placeholder="E M A I L ..." style="background: none; border: none; font-family: Arial, Helvetica, sans-serif; font-size: 20px; color: white;">
                  
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div> 
                    
                      <hr style="background-color: white;">
					   <div class="input-group mb-3">
           <input id="name"  type="text" class="form-control @error('name') is-invalid @enderror rounded-0" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="N A M E ..." style="background: none; border: none; font-family: Arial, Helvetica, sans-serif; font-size: 20px; color: white;">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
                      
                      <hr style="background-color: white;">
                     
        <div class="input-group mb-3">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror rounded-0" name="password" required autocomplete="new-password" style="background: none; border: none; font-family: Arial, Helvetica, sans-serif; font-size: 20px; color: white;" placeholder="P A S S W O R D ...">
          <div class="input-group-append">
            <div class="input-group-text">
              <input class="fa fa-fw fa-eye field_icon toggle-password" type="checkbox" onclick="myFunction()">&nbsp;&nbsp; <span class="fas fa-lock"></span>
            </div>
          </div>
          <p id="passwordHelpBlock" class="form-text text-muted">
                Your password must be more than 8 characters long, should contain at-least 1 Uppercase, 1 Lowercase, 1 Numeric and 1 special character.
          </p>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
		 <hr style="background-color: white;">
		 <div class="input-group mb-3">
          <input id="password-confirm" type="password" class="form-control rounded-0" name="password_confirmation" required style="background: none; border: none; font-family: Arial, Helvetica, sans-serif; font-size: 20px; color: white;" autocomplete="new-password"  placeholder="C O N F I R M P A S S W O R D ...">
          <div class="input-group-append">
            <div class="input-group-text">
              <input class="fa fa-fw fa-eye field_icon toggle-password" type="checkbox" onclick="myFunction2()">&nbsp;&nbsp; <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
                    
                      <hr style="background-color: white;">
					  <div class="input-group mb-3">
					  <label for="Image" style=" font-family: Arial, Helvetica, sans-serif; font-size: 20px; color: gray;">I M A G E : &nbsp;</label>
					  <input type="file"  name="fileToUpload" placeholder="Image ..." required id="fileToUpload" class="rounded-0" value="upload"  style="background: none; color: gray;border: none; font-family: Arial, Helvetica, sans-serif; font-size: 20px; width: 125PX; color: white; ">
					
						@error('photo')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div> 
                       <div class="row"> 
          <div class="col-8">
            <div class="icheck-primary">
                <input required type="checkbox" name="agreeTerms" id="agreeTerms" value="{{old('option')}}" class="form-check-input" >
              <label for="agreeTerms">
               I agree to the user <a href="#">terms</a>
              </label>
            </div>
          </div>
        
        </div>
                      <button type="submit" style="font-size: 20px; font-family: Arial, Helvetica, sans-serif;"  class="btn DetailsBtn float-right">REGISTER <i class="fas fa-arrow-right"></i></button>
                    </form>
                  </div>
                </div>
                <br>
                <span style="font-family: Arial, Helvetica, sans-serif; letter-spacing: 5px;">All rights Reserved <i class="far fa-copyright"></i> Crew 2021</span>
              </div>
            </div>
          </div>
    </div>
  </div> 

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
@endsection

