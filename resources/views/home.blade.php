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
 
 <!DOCTYPE html>
<html>

    <head>
       
        <style>
            .circle-tile {
                margin-bottom: 15px;
                text-align: center;
            }
            .circle-tile-heading {
                border: 3px solid rgba(255, 255, 255, 0.3);
                border-radius: 100%;
                color: #FFFFFF;
                height: 80px;
                margin: 0 auto -40px;
                position: relative;
                transition: all 0.3s ease-in-out 0s;
                width: 80px;
            }
            .circle-tile-heading .fa {
                line-height: 80px;
            }
            .circle-tile-content {
                padding-top: 50px;
            }
            .circle-tile-number {
                font-size: 26px;
                font-weight: 700;
                line-height: 1;
                padding: 5px 0 15px;
            }
            .circle-tile-description {
                text-transform: uppercase;
            }
            .circle-tile-footer {
                background-color: rgba(0, 0, 0, 0.1);
                color: rgba(255, 255, 255, 0.5);
                display: block;
                padding: 5px;
                transition: all 0.3s ease-in-out 0s;
            }
            .circle-tile-footer:hover {
                background-color: rgba(0, 0, 0, 0.2);
                color: rgba(255, 255, 255, 0.5);
                text-decoration: none;
            }
            .circle-tile-heading.dark-blue:hover {
                background-color: #2E4154;
            }
            .circle-tile-heading.green:hover {
                background-color: #138F77;
            }
            .circle-tile-heading.orange:hover {
                background-color: #DA8C10;
            }
            .circle-tile-heading.blue:hover {
                background-color: #2473A6;
            }
            .circle-tile-heading.red:hover {
                background-color: #CF4435;
            }
            .circle-tile-heading.purple:hover {
                background-color: #7F3D9B;
            }
            .tile-img {
                text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.9);
            }

            .dark-blue {
                background-color: #34495E;
            }
            .green {
                background-color: #16A085;
            }
            .blue {
                background-color: #2980B9;
            }
            .orange {
                background-color: #F39C12;
            }
            .red {
                background-color: #E74C3C;
            }
            .purple {
                background-color: #8E44AD;
            }
            .dark-gray {
                background-color: #7F8C8D;
            }
            .gray {
                background-color: #95A5A6;
            }
            .light-gray {
                background-color: #BDC3C7;
            }
            .yellow {
                background-color: #F1C40F;
            }
            .text-dark-blue {
                color: #34495E;
            }
            .text-green {
                color: #16A085;
            }
            .text-blue {
                color: #2980B9;
            }
            .text-orange {
                color: #F39C12;
            }
            .text-red {
                color: #E74C3C;
            }
            .text-purple {
                color: #8E44AD;
            }
            .text-faded {
                color: rgba(255, 255, 255, 0.7);
            }


        </style>
    </head>
<body >
        <div class="container bootstrap snippet">
            <div class="row mt-5">

               
           
            
              <div class="col-lg-4 col-sm-6">
                <div class="circle-tile ">
                  <a href="{{ url('/subscriptions_home?active=1') }}"><div class="circle-tile-heading green"><i class="fab fa-delicious fa-fw fa-3x mt-2"></i></div></a>
                  <div class="circle-tile-content green">
				    <?php if ($langg == "ar"){?>
                    <div class="circle-tile-description text-faded"> الاشتراكات المفعلة</div>
					<?php }elseif ($langg == "en"){?>
					<div class="circle-tile-description text-faded"> Active Subscriptions </div>
					<?php } ?>
                    <div class="circle-tile-number text-faded ">
					<?php echo $subscriptions = DB::table('subscriptions')->where('cancel', 0)->where('active', 1)->where('user_create_id', Auth::id())->count(); ?>
					</div>
                    <a class="circle-tile-footer" href="{{ url('/subscriptions_home?active=1') }}"><i class="fa fa-chevron-circle-right"></i></a>
                  </div>
                </div>
              </div>

             

            <div class="col-lg-4 col-sm-6">
                <div class="circle-tile ">
                  <a href="{{ url('/subscriptions_home?paid=1') }}"><div class="circle-tile-heading blue"><i class="fab fa-unsplash fa-fw fa-3x mt-2"></i></div></a>
                  <div class="circle-tile-content blue">
				    <?php if ($langg == "ar"){?>
                    <div class="circle-tile-description text-faded">   الاشتراكات المدفوعة  </div>
					<?php }elseif ($langg == "en"){?>
					<div class="circle-tile-description text-faded">    Paid Subscriptions  </div>
					<?php } ?>
                    <div class="circle-tile-number text-faded ">
					<?php echo $subscriptions = DB::table('subscriptions')->where('cancel', 0)->where('paid', 1)->where('user_create_id', Auth::id())->count(); ?>
					</div>
                    <a class="circle-tile-footer" href="{{ url('/subscriptions_home?paid=1') }}"><i class="fa fa-chevron-circle-right"></i></a>
                  </div>
                </div>
              </div>

			<div class="col-lg-4 col-sm-6">
                <div class="circle-tile ">
                  <a href="#"><div class="circle-tile-heading red"><i class="fas fa-envelope-open-text fa-fw fa-3x mt-2"></i></div></a>
                  <div class="circle-tile-content red">
				   <?php if ($langg == "ar"){?>
                    <div class="circle-tile-description text-faded"> الرسائل </div>
					<?php }elseif ($langg == "en"){?>
					<div class="circle-tile-description text-faded"> Messages </div>
					<?php } ?>
                    <div class="circle-tile-number text-faded ">0</div>
                    <a class="circle-tile-footer" href="#"><i class="fa fa-chevron-circle-right"></i></a>
                  </div>
                </div>
              </div>



            </div> 
			
			
			<div class="row mt-5">
            
               
          
             
			  
              <div class="col-lg-4 col-sm-6">
                <div class="circle-tile ">
                  <a href="{{ url('/subscriptions_home?unactive=1') }}"><div class="circle-tile-heading green"><i class="fab fa-delicious fa-fw fa-3x mt-2"></i></div></a>
                  <div class="circle-tile-content green">
				  <?php if ($langg == "ar"){?>
                    <div class="circle-tile-description text-faded"> الاشتراكات الغير مفعلة</div>
					<?php }elseif ($langg == "en"){?>
					<div class="circle-tile-description text-faded"> Inactive Subscriptions</div>
					<?php } ?>
                    <div class="circle-tile-number text-faded ">
					<?php echo $subscriptions = DB::table('subscriptions')->where('cancel', 0)->where('active', 0)->where('user_create_id', Auth::id())->count(); ?>
					</div>
                    <a class="circle-tile-footer" href="{{ url('/subscriptions_home?unactive=1') }}"><i class="fa fa-chevron-circle-right"></i></a>
                  </div>
                </div>
              </div>
				<div class="col-lg-4 col-sm-6">
                <div class="circle-tile ">
                  <a href="{{ url('/subscriptions_home?unpaid=1') }}"><div class="circle-tile-heading blue"><i class="fab fa-unsplash fa-fw fa-3x mt-2"></i></div></a>
                  <div class="circle-tile-content blue">
				  <?php if ($langg == "ar"){?>
                    <div class="circle-tile-description text-faded"> الاشتراكات الغير مدفوعة  </div>
				  <?php }elseif ($langg == "en"){?>
					<div class="circle-tile-description text-faded"> Unpaid Subscriptions  </div>
				  <?php } ?>
                    <div class="circle-tile-number text-faded ">
					<?php echo $subscriptions = DB::table('subscriptions')->where('cancel', 0)->where('paid', 0)->where('user_create_id', Auth::id())->count(); ?>
					</div>
                    <a class="circle-tile-footer" href="{{ url('/subscriptions_home?unpaid=1') }}"><i class="fa fa-chevron-circle-right"></i></a>
                  </div>
                </div>
              </div>

             <div class="col-lg-4 col-sm-6">
                <div class="circle-tile ">
                  <a href="?new=1"><div class="circle-tile-heading red"><i class="fas fa-envelope-open-text fa-fw fa-3x mt-2"></i></div></a>
                  <div class="circle-tile-content red">
				   <?php if ($langg == "ar"){?>
                    <div class="circle-tile-description text-faded"> الرسائل الجديدة</div>
					<?php }elseif ($langg == "en"){?>
					<div class="circle-tile-description text-faded">  New Messages</div>
					<?php } ?>
                    <div class="circle-tile-number text-faded ">0</div>
                    <a class="circle-tile-footer" href="?new=1"><i class="fa fa-chevron-circle-right"></i></a>
                  </div>
                </div>
              </div>



            </div> 
          </div>  
            
    </body>

 @include('footer_home') 