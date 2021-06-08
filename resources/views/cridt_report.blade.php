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
            
			
			
			<hr style="background-color:green;">
			<div class="row">
			<h3 class="m-auto">عمليات الإيداع</h3>		
				<div class="col-12 ">
					<div class="tabbable" > 
						<div class=" px-0 my-5 overflow-auto">
							<table id='table-draggable1' class="table table-striped table-bordered mx-auto shadow w-100 text-center" >
								<thead class="bg-white text-blue" style="font-size: larger;">
									<tr>
										<th class="align-middle" style="min-width: 200px;">رقم العملية</th>
										<th class="align-middle" style="min-width: 200px;">نوع العملية</th>
										<th class="align-middle" >اسم الشركه</th>  
										<th class="align-middle" style="min-width: 250px;">تاريخ العملية</th>  
										<th class="align-middle" style="min-width: 200px;">المبلغ</th>  
										<th class="align-middle" style="min-width: 150px;">القئم بلإيداع  </th> 
										<th class="align-middle" style="min-width: 150px;">الملاحظات</th> 
										
									</tr>
								</thead>  
								<tbody class="connectedSortable">  
								     <?php    $wallets = DB::table('money_wallet')->orderBy('id', 'desc')->where('companyid', $_GET['coid'])->where('cancel', 0)->where('current_amount', '!=', '0')->get();

									foreach ($wallets as $wallet)
									{ ?>
									<tr>   
										<td class="align-middle">
										<span class="bg-danger text-white rounded-lg px-2 mx-2"><?=$wallet->id?></span>
										</td>                                                                                         
										<td class="align-middle">
											إيداع
										</td>  
										<td>
									<?php    $company = DB::table('students')->where('cancel', 0)->where('id', $_GET['coid'])->get();

									foreach ($company as $compan) {
									echo $compan->name;
									} ?>
									</td>
									
										<td>   <?=$wallet->entry_date?>                                  
										</td>
										<td> <?=$wallet->current_amount?>                                      
										</td>
										<td>
										<?php    
										$users = DB::table('users')->where('cancel', 0)->where('id', Auth::id())->get();

									foreach ($users as $user) {
									echo $user->name;
									} ?>
										</td>
										<td><?=$wallet->comments?></td>
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