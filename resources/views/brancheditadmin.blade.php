
@include('header_admin')


@extends('layouts.app')

@section('content')
			<?php
			
			if (isset($_GET['name'])){
                    DB::table('branches')
                    ->where('id', $_GET['bid'])
                    ->update(['name' => $_GET['name']])
                    ;
					}
		  /*  if (isset($_GET['city'])){
                    DB::table('branches')
                    ->where('id', $_GET['bid'])
                    ->update(['city' => $_GET['city']])
                    ;
					}*/
			if (isset($_GET['address'])){
                    DB::table('branches')
                    ->where('id', $_GET['bid'])
                    ->update(['address' => $_GET['address']])
                    ;
					}
			if (isset($_GET['phone'])){
                    DB::table('branches')
                    ->where('id', $_GET['bid'])
                    ->update(['phone' => $_GET['phone']])
                    ;
					}
			if (isset($_GET['response_person'])){
                    DB::table('branches')
                    ->where('id', $_GET['bid'])
                    ->update(['response_person' => $_GET['response_person']])
                    ;
					}
					?>
			
<?php //$title = 'register'; ?>

        <!-- login div -->
        <div class="text-center">
            <h1 class="py-4"><span class="py-2" style="border-bottom: 2px solid #0174CF; color: #0174CF;"> تعديل بيانات الفرع</span></h1>
            			 <?php   
if (isset($_GET['bid'])) { ?>
        <h5 class="text-center px-5"> 
		<?php 
		$branchs = DB::table('branches')->where('cancel', 0)->where('id', $_GET['bid'])->get();


foreach ($branchs as $branch)
{
		echo $branch->name; 
?> </h5>
			   <form method="GET" action="" enctype="multipart/form-data">
								@csrf
 <input id="bid"  type="hidden" value="<?=$_GET['bid']?>" name="bid"  >
 
 <div class="container-fluid mb-5 text-center text-blue">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6 col-12">
                    <div class="card mx-auto mt-5 overflow-hidden" style=" border-radius:0 50px ; border: 2px solid #0174CF;">
                        <div class="card-header text-white bg-blue">
                            <h3><span class="pb-1"> تعديل بيانات الفرع </span></h3>
                        </div>
                        <div class="card-body text-right">
                            <div class="form-group">
                                <label for="name"> إسم الفرع</label>
                                <input type="text" class="form-control text-right" id="name" name="name" value="{{ $branch->name }}" placeholder=" إسم الفرع" required>
                            </div>
                            <div class="form-group">
                                <label for="city"> المنطقة </label>
<?php 
$cities = DB::table('cities')->where('cancel', 0)->where('id', $branch->city)->get();

foreach ($cities as $citie)
{ 
?>
                                <input disabled type="text" class="form-control text-right" id="city"  name="city" value="{{ $citie->name }}" placeholder=" المنطقة" required>
<?php } ?>
                            </div>
                            <div class="form-group">
                                <label for="address">العنوان</label>
                                <input type="text" class="form-control text-right" id="address"  name="address" value="{{ $branch->address }}" placeholder=" العنوان" required>
                            </div>
                             <div class="form-group">
                                <label for="phone">الهاتف</label>
                                <input type="text" class="form-control text-right" id="phone"  name="phone" value="{{ $branch->phone }}" placeholder=" الهاتف" required>
                            </div>
							<div class="form-group">
                                <label for="response_person"> الشخص المسئول</label>
                                <input type="text" class="form-control text-right" id="response_person"  name="response_person" value="{{ $branch->response_person }}" placeholder=" الشخص المسئول " required>
                            </div>
							
							<div class="text-center">
							    <button type="submit" class="btn bg-blue text-white px-5">حفظ</button>
							</div>

                    </div>
                    </div>
                </div>
            </div>
        </div>
      </form>
<?php } }?>
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

