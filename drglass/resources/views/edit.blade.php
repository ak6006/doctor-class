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
					$had_company = Auth::user()->had_company;
					}
                    $title = '';
                    ?>




 
 
 
  <link rel="stylesheet" href="../../style.css">
 
 
 
 <!DOCTYPE html>
<html lang="ar" dir="rtl">
    <head>
        <meta charset="utf-8">
        <title>Mr-Clean</title>
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

            <form method="post" action="{{ route('students.update', $student->id) }}">
       
              @csrf
 @method('PATCH')
						   <input type="hidden" class="form-control" value="<?=Auth::id()?>" name="user_id"/>

        <!-- login div -->
        <div class="text-center">
            <h1 class="py-4"><span class="py-2" style="border-bottom: 2px solid #0174CF; color: #0174CF;"> ?????????? ???????????? ????????????</span></h1>
            <div class="container-md container-fluid mt-3 mb-5">
                <div class="row">
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
                                    <div class="w-100 bg-light" style="border-radius: 40px 0 0 40px;">
                                        <img src="../../img/business-and-trade.svg" style="width: 50px; padding: 2.5rem 0;">
                                    </div>
                                </a>
                                
                                <a href="#">
                                    <div style="border-radius: 40px 0 0 40px; background-color: #55ACF1; width: 70%;">
                                        <img src="../../img/business-center.svg" style="width: 40px; padding: 2.5rem 0;">
                                    </div>
                                </a>
                            </div>
                            <div class="col-9 col-md-10 text-light my-auto px-sm-5 text-right " >
                                <form>
                                    <div class="row">
                                        <div class="col-sm-4 py-2 pr-5" style="font-size: x-large;"> ?????? ???????????? </div>
                                        <div class="col-sm-8 m-auto py-2 "><input type="text" disabled id="name" name="name" value="{{ $student->name }}" class="form-control w-75 m-auto" required></div>
                                    </div>
								<div class="row">

                                <div class="col-sm-4 py-2 pr-5" style="font-size: x-large;">?????????????? </div>
                                <?php      
									$city = DB::table('cities')->where('cancel', 0)->where('active', 0)->get();

												
									?>
									<div class="col-sm-8 m-auto py-2 ">
									<?php      
									$city = DB::table('cities')->where('id',  $student->city )->get();

												
									?>
									<select disabled class="form-control w-75 m-auto" required dir="rtl" id="city"  name="city" >
									<?php foreach ($city as $contr)
												{ ?>
									<option class="form-control text-right" value="<?= $contr->id;?>"><?= $contr->name;?></option>
									<?php }?>
									</select>
									 </div>
									</div>
							        <div class="row">
                                        <div class="col-sm-4 py-2 pr-5" style="font-size: x-large;"> ?????????????? ?????????????? </div>
                                        <div class="col-sm-8 m-auto py-2 "><input value="{{ $student->address }}" type="text" id="address"  name="address" class="form-control w-75 m-auto" required></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 py-2 pr-5" style="font-size: x-large;"> ?????? ???????????? </div>
                                        <div class="col-sm-8 m-auto py-2 "><input type="number"  id="phone"  name="phone" value="{{ $student->phone }}" class="form-control w-75 m-auto" required></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-4 py-2 pr-5" style="font-size: x-large;">  ?????????? ?????????????? </div>
                                        <div class="col-sm-8 m-auto py-2 "><input disabled type="text" class="form-control w-75 m-auto" id="vat"  value="{{ $student->vat }}" name="vat" ></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4"></div>
                                        <div class="col-sm-8 m-auto py-2 ">
                                            <div class="w-75 m-auto">
                                                <input class="form-check-input check" type="checkbox" id="exampleCheck1" style="width: 25px; height : 25px;"  required>
                                                <label class="form-check-label mr-5 py-2" for="exampleCheck1">?????????? ?????? <a href="#" class="text-warning"> ???????????? ????????????????</a></label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-4 py-3"></div>
                                        <div class="col-sm-8 m-auto py-3">
                                            <div class="m-auto text-left" style="width: 75%;">
                                                <input class="btn px-3 pb-2 pt-0 w-50" type="submit" value="??????????" style="background-color: white; color: #0174CF; border-radius: 10px; font-size: x-large;">
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