
@include('header_admin')


@extends('layouts.app')

@section('content')
			<?php
			
			if (isset($_GET['name'])){
                    DB::table('students')
                    ->where('id', $_GET['coid'])
                    ->update(['name' => $_GET['name']])
                    ;
					}
			if (isset($_GET['address'])){
                    DB::table('students')
                    ->where('id', $_GET['coid'])
                    ->update(['address' => $_GET['address']])
                    ;
					}
			if (isset($_GET['city'])){
                    DB::table('students')
                    ->where('id', $_GET['coid'])
                    ->update(['city' => $_GET['city']])
                    ;
					}
			if (isset($_GET['phone'])){
                    DB::table('students')
                    ->where('id', $_GET['coid'])
                    ->update(['phone' => $_GET['phone']])
                    ;
					}
			if (isset($_GET['vat'])){
                    DB::table('students')
                    ->where('id', $_GET['coid'])
                    ->update(['vat' => $_GET['vat']])
                    ;
					}
					?>
			
<?php //$title = 'register'; ?>

        <!-- login div -->
        <div class="text-center">
            <h1 class="py-4"><span class="py-2" style="border-bottom: 2px solid #0174CF; color: #0174CF;"> تعديل بيانات الشركة</span></h1>
            			 <?php   
if (isset($_GET['coid'])) { ?>
        <h5 class="text-center px-5"> 
		<?php 
		$companyname = DB::table('students')->where('cancel', 0)->where('id', $_GET['coid'])->get();


foreach ($companyname as $companynam)
{
		echo $companynam->name; 
?> </h5>
			<div class="container-md container-fluid mt-3 mb-5">
                <div class="row ">
                    <div class="col-md-1"></div>
                    <div class="col-12 col-md-10 shadow overflow-hidden" style="background-color: #0174CF; border-radius: 30px;">
                        <div class="row">
                            <div class="col-3 col-md-2 pr-0 my-auto">
                                    <div class="w-100 bg-light" style="border-radius: 40px 0 0 40px;">
                                        <img src="img/edit.svg" style="width: 50px; padding: 2.5rem 0;">
                                        <!-- <i class="fas fa-user " style="font-size: xxx-large; color: #0174CF; padding: 2.5rem 0;"></i> -->
                                    </div>
                                </a>
                            </div>
                            <div class="col-9 col-md-10 text-light my-auto px-sm-5 text-right " >
                                <form method="GET" action="" enctype="multipart/form-data">
								@csrf
								<input id="coid"  type="hidden" value="<?=$_GET['coid']?>" name="coid"  >
                                    <div class="row mt-5">
                                        <div class="col-sm-4 py-2 pr-5" style="font-size: x-large;"> اسم الشركة </div>
                                        <div class="col-sm-8 m-auto py-2 ">
										<input id="name"  type="text"  name="name" value="{{ $companynam->name }}"  autocomplete="name"  class="form-control w-75 m-auto @error('name') is-invalid @enderror rounded-0" required>
										</div>
								@error('name')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
                                    </div>
									<div class="row">
                                        <div class="col-sm-4 py-2 pr-5" style="font-size: x-large;"> المنطقة </div>
										 <?php      
									$city = DB::table('cities')->where('cancel', 0)->where('active', 0)->get();

												
									?>
									<div class="col-sm-8 m-auto py-2 ">
									<select class="form-control w-75 m-auto" required dir="rtl" id="city"  name="city" required>
	<?php    $city1 = DB::table('cities')->where('cancel', 0)->where('id', $companynam->city)->get();

foreach ($city1 as $cit1)
{ ?>								
								<option value="<?=$companynam->city?>">

<?php echo $cit1->name; ?>

									</option>
									<?php  }
?>
									<option value="">اختر المنطقة...</option>
									<?php foreach ($city as $contr)
												{ ?>
									<option class="form-control text-right" value="<?= $contr->id;?>"><?= $contr->name;?></option>
									<?php }?>
									</select>
									 </div>
                                        <div class="col-sm-8 m-auto py-2 ">
										</div>
								@error('city')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 py-2 pr-5" style="font-size: x-large;"> العنوان </div>
                                        <div class="col-sm-8 m-auto py-2 ">
										<input id="address" type="text" class="form-control w-75 m-auto @error('address') is-invalid @enderror rounded-0" name="address" value="{{ $companynam->address }}" required autocomplete="address" >
										</div>
								@error('address')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 py-2 pr-5" style="font-size: x-large;"> الهاتف  </div>
                                        <div class="col-sm-8 m-auto py-2 ">
											<div class="input-group mb-3 w-75 m-auto" dir="ltr">
										<div class="input-group-prepend ">
										  <span class="input-group-text  py-0" id="basic-addon1"><i class="flag-icon flag-icon-sa" style="font-size:xx-large"></i>+966</span>
										</div>
										<input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror rounded-0" name="phone" value="{{ $companynam->phone }}" required autocomplete="phone" >
									</div>
										</div>
								@error('phone')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 py-2 pr-5" style="font-size: x-large;"> الرقم الضريبى </div>
										 <div class="col-sm-8 m-auto py-2 ">
									     <input id="vat" type="text" class="form-control w-75 m-auto @error('vat') is-invalid @enderror rounded-0" name="vat" value="{{ $companynam->vat }}" required autocomplete="vat" >
										 </div>
                                        <div class="col-sm-8 m-auto py-2 ">
										</div>
								@error('vat')
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

