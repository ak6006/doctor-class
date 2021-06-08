 @include('header_admin') 
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/ef9b0108c9.js" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>

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
			td {
                text-align: center;
                padding: 10px;
                border: 1px solid #b6b3b3;
            } 
            tr{
                width: 900px !important;
            }
            .connectedSortable tr {
                cursor: move;
            }

        </style>
    </head>
    <body >
        <div class="container bootstrap snippet">
            <div class="row mt-5">
              <div class="col-lg-2 col-sm-6">
                <div class="circle-tile ">
                  <a href="{{ url('/users') }}"><div class="circle-tile-heading dark-blue"><i class="fa fa-users fa-fw fa-3x"></i></div></a>
                  <div class="circle-tile-content dark-blue">
                    <div class="circle-tile-description text-faded"> المستخدمين </div>
                    <div class="circle-tile-number text-faded ">
					<?php echo $users = DB::table('users')->where('cancel', 0)->count(); ?>
					</div>
                    <a class="circle-tile-footer" href="{{ url('/users') }}"><i class="fa fa-chevron-circle-right"></i></a>
                  </div>
                </div>
              </div>
               
              <div class="col-lg-2 col-sm-6">
                <div class="circle-tile ">
                  <a href="{{ url('/companies') }}"><div class="circle-tile-heading red"><i class="fas fa-building fa-fw fa-3x mt-2"></i></div></a>
                  <div class="circle-tile-content red">
                    <div class="circle-tile-description text-faded"> الشركات </div>
                    <div class="circle-tile-number text-faded ">
					<?php echo $companies = DB::table('students')->where('cancel', 0)->count(); ?>
					</div>
                    <a class="circle-tile-footer" href="{{ url('/companies') }}"><i class="fa fa-chevron-circle-right"></i></a>
                  </div>
                </div>
              </div> 

              <div class="col-lg-2 col-sm-6">
                <div class="circle-tile ">
                  <a href="{{ url('/branchss') }}"><div class="circle-tile-heading yellow"><i class="fas fa-bell fa-fw fa-3x mt-2"></i></div></a>
                  <div class="circle-tile-content yellow">
                    <div class="circle-tile-description text-faded"> الفروع </div>
                    <div class="circle-tile-number text-faded ">
					<?php echo $branches = DB::table('branches')->where('cancel', 0)->count(); ?>
					</div>
                    <a class="circle-tile-footer" href="{{ url('/branchss') }}"><i class="fa fa-chevron-circle-right"></i></a>
                  </div>
                </div>
              </div>
			  
              <div class="col-lg-2 col-sm-6">
                <div class="circle-tile ">
                  <a href="{{ url('/managesubscriptions') }}"><div class="circle-tile-heading green"><i class="fab fa-delicious fa-fw fa-3x mt-2"></i></div></a>
                  <div class="circle-tile-content green">
                    <div class="circle-tile-description text-faded"> الاشتراكات </div>
                    <div class="circle-tile-number text-faded ">
					<?php echo $subscriptions = DB::table('subscriptions')->where('cancel', 0)->count(); ?>
					</div>
                    <a class="circle-tile-footer" href="{{ url('/managesubscriptions') }}"><i class="fa fa-chevron-circle-right"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-2 col-sm-6">
                <div class="circle-tile ">
                  <a href="{{ url('/bouquets') }}"><div class="circle-tile-heading blue"><i class="fab fa-unsplash fa-fw fa-3x mt-2"></i></div></a>
                  <div class="circle-tile-content blue">
                    <div class="circle-tile-description text-faded"> الباقات </div>
                    <div class="circle-tile-number text-faded ">
					<?php echo $bouquets = DB::table('bouquets')->where('cancel', 0)->count(); ?>
					</div>
                    <a class="circle-tile-footer" href="{{ url('/bouquets') }}"><i class="fa fa-chevron-circle-right"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-2 col-sm-6">
                <div class="circle-tile ">
                  <a href="#"><div class="circle-tile-heading dark-gray"><i class="fas fa-envelope-open-text fa-fw fa-3x mt-2"></i></div></a>
                  <div class="circle-tile-content dark-gray">
                    <div class="circle-tile-description text-faded"> الرسائل </div>
                    <div class="circle-tile-number text-faded ">0</div>
                    <a class="circle-tile-footer" href="#"><i class="fa fa-chevron-circle-right"></i></a>
                  </div>
                </div>
              </div>



            </div> 
			
			
			<div class="row mt-5">
              <div class="col-lg-2 col-sm-6">
                <div class="circle-tile ">
                  <a href="{{ url('/users?new=1') }}"><div class="circle-tile-heading dark-blue"><i class="fa fa-users fa-fw fa-3x"></i></div></a>
                  <div class="circle-tile-content dark-blue">
                    <div class="circle-tile-description text-faded"> المستخدمين الجدد</div>
                    <div class="circle-tile-number text-faded ">
					<?php echo $users = DB::table('users')->where('cancel', 0)->where('new', 1)->count(); ?>
					</div>
                    <a class="circle-tile-footer" href="{{ url('/users?new=1') }}"><i class="fa fa-chevron-circle-right"></i></a>
                  </div>
                </div>
              </div>
               
              <div class="col-lg-2 col-sm-6">
                <div class="circle-tile ">
                  <a href="{{ url('/companies?new=1') }}"><div class="circle-tile-heading red"><i class="fas fa-building fa-fw fa-3x mt-2"></i></div></a>
                  <div class="circle-tile-content red">
                    <div class="circle-tile-description text-faded"> الشركات الجديدة</div>
                    <div class="circle-tile-number text-faded ">
					<?php echo $companies = DB::table('students')->where('cancel', 0)->where('new', 1)->count(); ?>
					</div>
                    <a class="circle-tile-footer" href="{{ url('/companies?new=1') }}"><i class="fa fa-chevron-circle-right"></i></a>
                  </div>
                </div>
              </div> 

              <div class="col-lg-2 col-sm-6">
                <div class="circle-tile ">
                  <a href="{{ url('/branchss?new=1') }}"><div class="circle-tile-heading yellow"><i class="fas fa-bell fa-fw fa-3x mt-2"></i></div></a>
                  <div class="circle-tile-content yellow">
                    <div class="circle-tile-description text-faded"> الفروع الجديدة</div>
                    <div class="circle-tile-number text-faded ">
					<?php echo $branches = DB::table('branches')->where('cancel', 0)->where('new', 1)->count(); ?>
					</div>
                    <a class="circle-tile-footer" href="{{ url('/branchss?new=1') }}"><i class="fa fa-chevron-circle-right"></i></a>
                  </div>
                </div>
              </div>
			  
              <div class="col-lg-2 col-sm-6">
                <div class="circle-tile ">
                  <a href="{{ url('/managesubscriptions?new=1') }}"><div class="circle-tile-heading green"><i class="fab fa-delicious fa-fw fa-3x mt-2"></i></div></a>
                  <div class="circle-tile-content green">
                    <div class="circle-tile-description text-faded"> الاشتراكات الجديدة</div>
                    <div class="circle-tile-number text-faded ">
					<?php echo $subscriptions = DB::table('subscriptions')->where('cancel', 0)->where('new', 1)->count(); ?>
					</div>
                    <a class="circle-tile-footer" href="{{ url('/managesubscriptions?new=1') }}"><i class="fa fa-chevron-circle-right"></i></a>
                  </div>
                </div>
              </div>
				<div class="col-lg-2 col-sm-6">
                <div class="circle-tile ">
                  <a href="{{ url('/bouquets?new=1') }}"><div class="circle-tile-heading blue"><i class="fab fa-unsplash fa-fw fa-3x mt-2"></i></div></a>
                  <div class="circle-tile-content blue">
                    <div class="circle-tile-description text-faded"> الباقات الغير مفعلة</div>
                    <div class="circle-tile-number text-faded ">
					<?php echo $bouquets = DB::table('bouquets')->where('cancel', 0)->where('active', 1)->count(); ?>
					</div>
                    <a class="circle-tile-footer" href="{{ url('/bouquets?new=1') }}"><i class="fa fa-chevron-circle-right"></i></a>
                  </div>
                </div>
              </div>

             <div class="col-lg-2 col-sm-6">
                <div class="circle-tile ">
                  <a href="?new=1"><div class="circle-tile-heading dark-gray"><i class="fas fa-envelope-open-text fa-fw fa-3x mt-2"></i></div></a>
                  <div class="circle-tile-content dark-gray">
                    <div class="circle-tile-description text-faded"> الرسائل الجديدة</div>
                    <div class="circle-tile-number text-faded ">0</div>
                    <a class="circle-tile-footer" href="?new=1"><i class="fa fa-chevron-circle-right"></i></a>
                  </div>
                </div>
              </div>



            </div> 
			<hr style="background-color:green;">
			<div class="row">
			<h3 class="m-auto"> طلبات إيقاف الباقات</h3>		
				<div class="col-12 ">
					<div class="tabbable" > 
						<div class=" px-0 my-5 overflow-auto">
							<table id='table-draggable1' class="table table-striped table-bordered mx-auto shadow w-100 text-center" >
								<thead class="bg-white text-blue" style="font-size: larger;">
									<tr>
										<th class="align-middle" style="min-width: 200px;">حالة الباقة</th>
										<th class="align-middle" style="min-width: 200px;"> تاريخ طلب الإيقاف</th>
										<th class="align-middle" >اسم الشركه</th>  
										<th class="align-middle" style="min-width: 250px;">اسم الفرع</th>  
										<th class="align-middle" style="min-width: 200px;">الباقه</th>  
										<th class="align-middle" style="min-width: 150px;">تاريخ البدء </th> 
										<th class="align-middle" style="min-width: 150px;">تاريخ الإنتهاء </th> 
										
									</tr>
								</thead>  
								<tbody class="connectedSortable">  
								     <?php    $subscriptions = DB::table('subscriptions')->orderBy('id', 'desc')->where('cancel_request', 1)->where('cancel', 0)->get();

									foreach ($subscriptions as $subscription)
									{ ?>
									<tr>   
										<td class="align-middle">
											<a href="managesubscriptionsedit?subid=<?=$subscription->id?>"><span class="bg-danger text-white rounded-lg px-2 mx-2">طلب ايقاف</span></a>
										</td>                                                                                         
										<td class="align-middle text-right">
											<?=$subscription->cancel_request_dat;?>
										</td>  
											<td>
									<?php    $company = DB::table('students')->where('cancel', 0)->where('user_id', $subscription->user_create_id)->get();

									foreach ($company as $compan) {
									echo $compan->name;
									} ?>
									</td>

			   
									
										<td>                                     <?php    $branch = DB::table('branches')->where('cancel', 0)->where('id', $subscription->branch_id)->get();

									foreach ($branch as $branc) {
									echo $branc->name;
									} ?></td>
										<td>                                    
										<?php    $boq = DB::table('bouquets')->where('cancel', 0)->where('id', $subscription->subscription_id)->get();

									foreach ($boq as $boqs) {
									echo $boqs->name;
									} ?></td>
										<td><?=$subscription->date_from;?></td>
										<td><?=$subscription->date_to;?></td>
									</tr>  
									<?php } ?>
								</tbody> 
							</table>
						</div>
					</div>
				</div>
				<div class="col-12">
				
				</div>
			</div>
 
 
 
 
 <hr style="background-color:green;">
			<div class="row">
			<h3 class="m-auto"> باقات أوشكت على الإنتهاء</h3>		
				<div class="col-12 ">
					<div class="tabbable" > 
						<div class=" px-0 my-5 overflow-auto">
							<table id='table-draggable1' class="table table-striped table-bordered mx-auto shadow w-100 text-center" >
								<thead class="bg-white text-blue" style="font-size: larger;">
									<tr>
										<th class="align-middle" style="min-width: 200px;">حالة الباقة</th>
										<th class="align-middle" style="min-width: 200px;"> تاريخ التجديد </th>
										<th class="align-middle" >اسم الشركه</th>  
										<th class="align-middle" style="min-width: 250px;">اسم الفرع</th>  
										<th class="align-middle" style="min-width: 200px;">الباقه</th>  
										<th class="align-middle" style="min-width: 150px;">تاريخ البدء </th> 
										<th class="align-middle" style="min-width: 150px;">تاريخ الإنتهاء </th> 
										
									</tr>
								</thead>  
								<tbody class="connectedSortable">  
								    
								</tbody> 
							</table>
						</div>
					</div>
				</div>
				<div class="col-12">
				
				</div>
			</div>
    </body>
    <script>
        	$(document).ready(function() {
            $tabs = $(".tabbable");
            $('.nav-tabs a').click(function(e) {
                e.preventDefault();
                $(this).tab('show');
            })
            $( "tbody.connectedSortable" ).sortable({
                connectWith: ".connectedSortable",
                items: "> tr",
                appendTo: $tabs,
                helper:"clone",
                zIndex: 99999,
                start: function(){ $tabs.addClass("dragging") },
                stop: function(){ $tabs.removeClass("dragging") }
            });
        });
    </script>
          </div>  
            
    </body>

</html>
 @include('footer_admin') 