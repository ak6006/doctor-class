
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
 @include('header_home') 


<script>
	function logoload(){
    
	  document.getElementById("logo").src="../img/Logo_white.png";
	  document.getElementById("favic").href="../img/logo_100.png";
	};
	logoload();
	</script>

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

 <link rel="stylesheet" href="../style.css">
		
		
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
        <form method="post" action="{{ route('branchs.store') }}">
              @csrf
			  <?php  $company = DB::table('students')->where('user_id',Auth::user()->id)->first(); ?>
			   <input type="hidden" class="form-control" value="<?=$company->id?>" name="co_id"/>  
        <!-- login div -->
			<?php if ($langg == "en") { ?>
        <div class="text-center">
            <h1 class="py-4"><span class="py-2" style="border-bottom: 2px solid #0174CF; color: #0174CF;"> Register A New Branch</span></h1>
            <div class="container-md container-fluid mt-3 mb-5">
                <div class="row ">
                    <div class="col-md-1"></div>
                    <div class="col-12 col-md-10 pl-0 shadow overflow-hidden" style="background-color: #0174CF; border-radius: 30px;">
                        <div class="row">
                            <div class="col-3 col-md-2 pr-0 my-auto">
                                <a href="#">
                                    <div style="border-radius:0 40px 40px 0; background-color: #55ACF1; width: 70%;">
                                        <img src="../img/user.svg" style="width: 40px; padding: 2.5rem 0;">
                                    </div>
                                </a>
                                <a href="#">
                                    <div style="border-radius: 0 40px 40px 0; background-color: #55ACF1; width: 70%;">
                                        <img src="../img/add-friend.svg" style="width: 40px; padding: 2.5rem 0;">
                                    </div>
                                </a>
                                <a href="#">
                                    <div style="border-radius: 0 40px 40px 0; background-color: #55ACF1; width: 70%;">
                                        <img src="../img/business-and-trade.svg" style="width: 40px; padding: 2.5rem 0;">
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="w-100 bg-light" style="border-radius: 0 40px 40px 0;">
                                        <img src="../img/business-center.svg" style="width: 50px; padding: 2.5rem 0;">
                                    </div>
                                </a>
                            </div>
                            <div class="col-9 col-md-10 text-light my-auto px-sm-5 text-right " >
                            
                                    <div class="row">
                                        <div class="col-sm-4 py-2 pr-5" style="font-size: x-large;">  Branch Name </div>
                                        <div class="col-sm-8 m-auto py-2 "><input id="name"  name="name" type="text" class="form-control w-75 m-auto" required></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 py-2 pr-5" style="font-size: x-large;">  Branch Code </div>
                                        <div class="col-sm-8 m-auto py-2 "><input id="code"  name="code" type="text" class="form-control w-75 m-auto" required></div>
                                    </div>
									<div class="row">
                                        <div class="col-sm-4 py-2 pr-5" style="font-size: x-large;"> Address </div>
                                        <div class="col-sm-8 m-auto py-2 "><input id="address"  name="address" type="text" class="form-control w-75 m-auto" required></div>
                                    </div>
									<div class="row">
                                        <div class="col-sm-4 py-2 pr-5" style="font-size: x-large;">  Area </div>
									 <div class="col-sm-8 m-auto py-2 ">
									<?php      
									$city = DB::table('cities')->where('cancel', 0)->where('active', 0)->get();
		
									?>
									<select dir="ltr" class="form-control w-75 m-auto" dir="rtl" id="city"  name="city" required>
									<option value="">Select Area...</option>
									<?php foreach ($city as $contr)
												{ ?>
									<option class="form-control text-right" value="<?= $contr->id;?>"><?= $contr->name_en;?></option>
									<?php }?>
									</select>
									  </div>
									  </div>
                                    <div class="row">
                                        <div class="col-sm-4 py-2 pr-5" style="font-size: x-large;"> Phone Number </div>
                                        <div class="col-sm-8 m-auto py-2 "><input id="phone" name="phone" type="number" class="form-control w-75 m-auto" required></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-4 py-2 pr-5" style="font-size: x-large;">  Contact Person </div>
                                        <div class="col-sm-8 m-auto py-2 "><input id="response_person"  name="response_person" type="text" class="form-control w-75 m-auto" required></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4"></div>
                                        <div class="col-sm-8 m-auto py-2 ">
                                            <div class="w-75 m-auto text-left">
                                                <input class="form-check-input check m-0 ml-1 " type="checkbox" id="exampleCheck1" style="width: 25px; height : 25px;" required>
                                                <label class="form-check-label mx-5 my-0 font-weight-bolder" for="exampleCheck1"> I Agree <a href="#" class="text-warning"> Terms And Conditions</a></label>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<?php }elseif ($langg == "ar") { ?>
		        <div class="text-center">
            <h1 class="py-4"><span class="py-2" style="border-bottom: 2px solid #0174CF; color: #0174CF;">?????????? ??????</span></h1>
            <div class="container-md container-fluid mt-3 mb-5">
                <div class="row ">
                    <div class="col-md-1"></div>
                    <div class="col-12 col-md-10 shadow overflow-hidden" style="background-color: #0174CF; border-radius: 30px;">
                        <div class="row">
                            <div class="col-3 col-md-2 pr-0 my-auto">
                                <a href="#">
                                    <div style="border-radius: 40px 0 0 40px; background-color: #55ACF1; width: 70%;">
                                        <img src="../img/user.svg" style="width: 40px; padding: 2.5rem 0;">
                                    </div>
                                </a>
                                <a href="#">
                                    <div style="border-radius: 40px 0 0 40px; background-color: #55ACF1; width: 70%;">
                                        <img src="../img/add-friend.svg" style="width: 40px; padding: 2.5rem 0;">
                                    </div>
                                </a>
                                <a href="#">
                                    <div style="border-radius: 40px 0 0 40px; background-color: #55ACF1; width: 70%;">
                                        <img src="../img/business-and-trade.svg" style="width: 40px; padding: 2.5rem 0;">
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="w-100 bg-light" style="border-radius: 40px 0 0 40px;">
                                        <img src="../img/business-center.svg" style="width: 50px; padding: 2.5rem 0;">
                                    </div>
                                </a>
                            </div>
                            <div class="col-9 col-md-10 text-light my-auto px-sm-5 text-right " >
                            
                                    <div class="row">
                                        <div class="col-sm-4 py-2 pr-5" style="font-size: x-large;"> ?????? ?????????? </div>
                                        <div class="col-sm-8 m-auto py-2 "><input id="name"  name="name" type="text" class="form-control w-75 m-auto" required></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 py-2 pr-5" style="font-size: x-large;"> ?????? ?????????? </div>
                                        <div class="col-sm-8 m-auto py-2 "><input id="code"  name="code" type="text" class="form-control w-75 m-auto" required></div>
                                    </div>
									<div class="row">
                                        <div class="col-sm-4 py-2 pr-5" style="font-size: x-large;"> ?????????????? </div>
                                        <div class="col-sm-8 m-auto py-2 "><input id="address"  name="address" type="text" class="form-control w-75 m-auto" required></div>
                                    </div>
									<div class="row">
                                        <div class="col-sm-4 py-2 pr-5" style="font-size: x-large;">  ?????????????? </div>
									 <div class="col-sm-8 m-auto py-2 ">
									<?php      
									$city = DB::table('cities')->where('cancel', 0)->where('active', 0)->get();
		
									?>
									<select class="form-control w-75 m-auto" dir="rtl" id="city"  name="city" required>
									<option value="">???????? ??????????????...</option>
									<?php foreach ($city as $contr)
												{ ?>
									<option class="form-control text-right" value="<?= $contr->id;?>"><?= $contr->name;?></option>
									<?php }?>
									</select>
									  </div>
									  </div>
                                    <div class="row">
                                        <div class="col-sm-4 py-2 pr-5" style="font-size: x-large;"> ?????? ???????????? </div>
                                        <div class="col-sm-8 m-auto py-2 "><input id="phone" name="phone" type="number" class="form-control w-75 m-auto" required></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-4 py-2 pr-5" style="font-size: x-large;"> ?????????? ?????????????? </div>
                                        <div class="col-sm-8 m-auto py-2 "><input id="response_person"  name="response_person" type="text" class="form-control w-75 m-auto" required></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4"></div>
                                        <div class="col-sm-8 m-auto py-2 ">
                                            <div class="w-75 m-auto">
                                                <input class="form-check-input check" type="checkbox" id="exampleCheck1" style="width: 25px; height : 25px;" required>
                                                <label class="form-check-label mr-5 my-0 font-weight-bolder pt-1" for="exampleCheck1">?????????? ?????? <a href="#" class="text-warning"> ???????????? ????????????????</a></label>
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
		<?php } ?>
    </body>

</html>
 @include('footer_home') 
 