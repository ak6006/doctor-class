@include('header_home')
@extends('layout')

@section('content')
 <?php
                    use Illuminate\Support\Facades\Auth;

                    // Get the currently authenticated user...
                    //echo $user = Auth::user() . "<hr/>"; 
                    // Get the currently authenticated user's ID...
					
                    $id = Auth::id() ;
					
					if ($id) {
                    $name = Auth::user()->name;
                    $email = Auth::user()->email;
					$role = Auth::user()->role;
                    $verified = Auth::user()->email_verified_at ;
					}
                    $title = '';
                    ?>


 
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
	
    @endif
 <link rel="stylesheet" href="../../style.css">

		
		
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
        <style>
            .nav-item{
                list-style-type: none;
                display: inline-block;
            }
            li{
                list-style-type: none;
            }
            a{
                text-decoration: none;
                color: #646464;
            }
            .sidepanel  {
                width: 0;
                position: fixed;
                z-index: 3;
                height: 100vh;
                top: 0;
                right: 0;
                background-color: #303030;
                overflow-x: hidden;
                transition: 0.5s;
                padding-top: 60px;
                border-bottom-left-radius: 30px;
            }

            .sidepanel a {
                padding: 8px 50px;
                text-decoration: none;
                font-size: 20px;
                color: #0174CF;
                display: block;
                transition: 0.3s;
            }

            .sidepanel a:hover {
                color: #f1f1f1;
            }

            .sidepanel .closebtn {
                position: absolute;
                top: 0;
                left: 25px;
                font-size: 36px;
            }
            .openbtn{
                color: #0174CF;
            }
            .openbtn:hover {
                background-color:#0174CF;
                color: white;
            }
            .social{
                display: inline-block !important;
                padding: 8px !important;
                color: white !important; 
                font-size: xx-large !important;
            }
            @media screen and (max-width: 992px) {
                .nav-hide-element{
                    display: none !important;
                }
            }
        </style>
    </head>
    <body class="bg-light">
         <form method="post" action="{{ route('branchs.update', $branch->id) }}">
          <div class="form-group text-right">
              @csrf
	 @method('PATCH')
		
        <!-- login div -->
        <div class="text-center">
            <h1 class="py-4"><span class="py-2" style="border-bottom: 2px solid #0174CF; color: #0174CF;">  تعديل بيانات الفرع</span></h1>
            <div class="container-md container-fluid mt-3 mb-5">
                <div class="row ">
                    <div class="col-md-1"></div>
                    <div class="col-12 col-md-10 shadow overflow-hidden" style="background-color: #0174CF; border-radius: 30px;">
                        <div class="row">
                            <div class="col-3 col-md-2 pr-0 my-auto">
                                <a href="#">
                                    <div style="border-radius: 40px 0 0 40px; background-color: #55ACF1; width: 70%;">
                                        <img src="../../img/user.svg" style="width: 40px; padding: 2.5rem 0;">
                                    </div>
                                </a>
                                <a href="#">
                                    <div style="border-radius: 40px 0 0 40px; background-color: #55ACF1; width: 70%;">
                                        <img src="../../img/add-friend.svg" style="width: 40px; padding: 2.5rem 0;">
                                    </div>
                                </a>
                                <a href="#">
                                    <div style="border-radius: 40px 0 0 40px; background-color: #55ACF1; width: 70%;">
                                        <img src="../../img/business-and-trade.svg" style="width: 40px; padding: 2.5rem 0;">
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="w-100 bg-light" style="border-radius: 40px 0 0 40px;">
                                        <img src="../../img/business-center.svg" style="width: 50px; padding: 2.5rem 0;">
                                    </div>
                                </a>
                            </div>
                            <div class="col-9 col-md-10 text-light my-auto px-sm-5 text-right " >
                            
                                    <div class="row">
                                        <div class="col-sm-4 py-2 pr-5" style="font-size: x-large;"> اسم الفرع </div>
                                        <div class="col-sm-8 m-auto py-2 "><input id="name"  name="name" value="{{ $branch->name }}" type="text" class="form-control w-75 m-auto" required></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 py-2 pr-5" style="font-size: x-large;"> كود الفرع </div>
                                        <div class="col-sm-8 m-auto py-2 "><input id="code"  name="code" value="{{ $branch->code }}" type="text" class="form-control w-75 m-auto" required></div>
                                    </div>
									<div class="row">
                                        <div class="col-sm-4 py-2 pr-5" style="font-size: x-large;"> العنوان </div>
                                        <div class="col-sm-8 m-auto py-2 "><input id="address"  name="address" value="{{ $branch->address }}"  type="text" class="form-control w-75 m-auto" required></div>
                                    </div>
									<div class="row">
                                        <div class="col-sm-4 py-2 pr-5" style="font-size: x-large;">  المنطقة </div>
									 <div class="col-sm-8 m-auto py-2 ">
									 
<?php      
									$city = DB::table('cities')->where('id',  $branch->city )->get();

												
									?>
									<select disabled  class="form-control w-75 m-auto" dir="rtl" id="city"  name="city" required>
									<?php foreach ($city as $contr)
												{ ?>
									<option class="form-control text-right" value="<?= $contr->id;?>"><?= $contr->name;?></option>
									<?php }?>
									</select>
									  </div>
									  </div>
                                    <div class="row">
                                        <div class="col-sm-4 py-2 pr-5" style="font-size: x-large;"> رقم الهاتف </div>
                                        <div class="col-sm-8 m-auto py-2 "><input id="phone" name="phone" value="{{ $branch->phone }}" type="number" class="form-control w-75 m-auto" required></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-4 py-2 pr-5" style="font-size: x-large;"> الشخص المسئول </div>
                                        <div class="col-sm-8 m-auto py-2 "><input id="response_person"  value="{{ $branch->response_person }}"  name="response_person" type="text" class="form-control w-75 m-auto" required></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4"></div>
                                        <div class="col-sm-8 m-auto py-2 ">
                                            <div class="w-75 m-auto">
                                                <input class="form-check-input check" type="checkbox" id="exampleCheck1" style="width: 25px; height : 25px;" required>
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

</html>
 @include('footer_home') 