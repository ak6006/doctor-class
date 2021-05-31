
@include('header_admin')


@extends('layouts.app')

@section('content')
			<?php
			
			if (isset($_GET['name'])){
                    DB::table('users')
                    ->where('id', $_GET['userid'])
                    ->update(['name' => $_GET['name']])
                    ;
					}
		    if (isset($_GET['email'])){
                    DB::table('users')
                    ->where('id', $_GET['userid'])
                    ->update(['email' => $_GET['email']])
                    ;
					}
			if (isset($_GET['mobile'])){
                    DB::table('users')
                    ->where('id', $_GET['userid'])
                    ->update(['mobile' => $_GET['mobile']])
                    ;
					}
					?>
			
<?php //$title = 'register'; ?>

        <!-- login div -->
        <div class="text-center">
            <h1 class="py-4"><span class="py-2" style="border-bottom: 2px solid #0174CF; color: #0174CF;"> تعديل بيانات المستخدم</span></h1>
            			 <?php   
if (isset($_GET['userid'])) { ?>
        <h5 class="text-center px-5"> 
		<?php 
		$username = DB::table('users')->where('cancel', 0)->where('id', $_GET['userid'])->get();


foreach ($username as $usernam)
{
		echo $usernam->name; 
?> </h5>
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
                            <div class="col-9 col-md-10 text-light my-auto px-sm-5 text-right " >
                                <form method="GET" action="" enctype="multipart/form-data">
								@csrf
								<input id="userid"  type="hidden" value="<?=$_GET['userid']?>" name="userid"  >
                                    <div class="row mt-5">
                                        <div class="col-sm-4 py-2 pr-5" style="font-size: x-large;"> اسم المستخدم </div>
                                        <div class="col-sm-8 m-auto py-2 ">
										<input id="name"  type="text"  name="name" value="{{ $usernam->name }}"  autocomplete="name"  class="form-control w-75 m-auto @error('name') is-invalid @enderror rounded-0" required>
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
										<input id="email" type="email" class="form-control w-75 m-auto @error('email') is-invalid @enderror rounded-0" name="email" value="{{ $usernam->email }}" required autocomplete="email" >
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
										<input id="mobile" type="number" class="form-control @error('mobile') is-invalid @enderror rounded-0" name="mobile" value="{{ $usernam->mobile }}" required autocomplete="mobile" >
									</div>
										</div>
								@error('mobile')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
                                    </div>
                                    
									          
											  
			
                                    
                          
                                    
                                    <br>
									
									
									
									<div class="row">
                                        <div class="col-sm-4 py-0 py-sm-2"></div>
                                        <div class="col-sm-8 m-auto py-3">
                                            <div class="m-auto text-left" style="width: 75%;">
                                                <input class="btn  pb-2 pt-0 px-5" type="submit" value="تعديل" style="background-color: white; color: #0174CF; border-radius: 10px; font-size: x-large;">
                                            </div>
										</div>
                                    </div>
                                    <div class="row mb-5">
                                        <div class="col-sm-4 py-0 py-sm-2"></div>
                                        <div class="col-sm-8 m-auto py-3">
                                            <div class="m-auto text-left" style="width: 75%;">
                                                <a href="" class="btn pb-1 pt-0 px-4  text-white font-weight-bolder" style="border: 2px solid white; border-radius: 10px;" >تغيير كلمة السر </a>
                                            </div>
										</div>
                                    </div>
									
                                </form>
								
								<?php } } ?>
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

