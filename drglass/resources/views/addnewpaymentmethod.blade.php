@include('header_admin')
@extends('layout')

@section('content')
 <?php
                    use Illuminate\Support\Facades\Auth;

                    // Get the currently authenticated user...
                    //echo $user = Auth::user() . "<hr/>"; 
                    // Get the currently authenticated user's ID...
					
                    $id = Auth::id() ;	
				/*	if ($id) {
                    $name = Auth::user()->name;
                    $email = Auth::user()->email;
					$role = Auth::user()->role;
                    $verified = Auth::user()->email_verified_at ;
					$had_company = Auth::user()->had_company;
					}*/
                    $title = '';
					if (isset($_GET['active']) == NULL) {
						$activate = 0;
					}else { $activate = 1; }
if (isset($_GET['name']))  {             
DB::insert('insert into payment_methods (name, user_create_id, number, bank_name, active) values ( ?, ?, ?, ?, ?)', [$_GET['name'], Auth::id(), $_GET['accountnumber'], $_GET['bankname'], $activate ]); 
header("refresh: 0; payment_method");
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
    <head>
        <meta charset="utf-8">
        <title>Glass-Doctors</title>
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

            <form method="get" action="">       
              @csrf


        <!-- login div -->
        <div class="text-center">
            <h1 class="py-4"><span class="py-2" style="border-bottom: 2px solid #0174CF; color: #0174CF;"> إضافة طريقة دفع</span></h1>
            <div class="container-md container-fluid mt-3 mb-5">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-12 col-md-10 shadow overflow-hidden" style="background-color: #0174CF; border-radius: 30px;">
                        <div class="row">                            
                            <div class="col-9 col-md-10 text-light my-auto px-sm-5 text-right " >
                                    <div class="row">
                                        <div class="col-sm-4 py-2 pr-5" style="font-size: x-large;"> اسم طريقة الدفع </div>
                                        <div class="col-sm-8 m-auto py-2 ">
										<input type="text" id="name" name="name" value="" class="form-control w-75 m-auto" required>
										</div>
                                    </div>
							        <div class="row">
                                        <div class="col-sm-4 py-2 pr-5" style="font-size: x-large;"> رقم الحساب </div>
                                        <div class="col-sm-8 m-auto py-2 ">
										<input value="" type="text" id="accountnumber"  name="accountnumber" class="form-control w-75 m-auto" required>
										</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 py-2 pr-5" style="font-size: x-large;"> اسم البنك </div>
                                        <div class="col-sm-8 m-auto py-2 ">
										<input type="text"  id="bankname"  name="bankname" value="" class="form-control w-75 m-auto" required>
										</div>
                                    </div>
									<div class="row">
                                        <div class="col-sm-4 py-2 pr-5" style="font-size: x-large;"> غير مفعل  </div>
                                        <div class="col-sm-8 m-auto py-2 ">
										<input type="checkbox"  id="active"  name="active" value="1" class="form-control w-75 m-auto" >
										</div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-4 py-3"></div>
                                        <div class="col-sm-8 m-auto py-3">
                                            <div class="m-auto text-left" style="width: 75%;">
                                                <input class="btn px-3 pb-2 pt-0 w-50" type="submit" value="حفظ" style="background-color: white; color: #0174CF; border-radius: 10px; font-size: x-large;">
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		</form>
    </body>
    <script>
        function openNav() {
            document.getElementById("mySidepanel").style.width = "300px";
        }
            function closeNav() {
            document.getElementById("mySidepanel").style.width = "0";
        }
    </script>
</html>


 @include('footer_home') 