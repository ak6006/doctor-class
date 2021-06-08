 @include('header_admin') 

			
			

			
		
			

    <style>
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }

        th,
        td {
            text-align: center;
            padding: 8px;
        }
        .address{
            min-width: 150px;
        }
    </style>
</head>







<div class="container-fluid my-5 text-center text-blue">
            <h2><span class="pb-1 border-buttom" > الإشتراكات الموقوفة </span></h2>
			<?php   
if (isset($_GET['new'])) { ?>
        <h5 class="text-right px-5 text-center">  الإشتراكات الموقوفة </h5>
<?php } ?>
            <div class="px-md-5 px-0 my-5 overflow-auto">
                    <table id="example" class="table table-striped table-bordered  mx-auto shadow" style="width:90%">
                        <thead class="bg-blue text-white" style="font-size: larger;">
                            <tr>
                                <th class="align-middle"> إسم الفرع </th>
                                
                                <th class="align-middle"> الباقة </th>
                                <th class="align-middle"> اجمالي السعر </th>
                                <th class="align-middle"> تاريخ البدء </th>
								<th class="align-middle"> تاريخ الإنتهاء </th>
                                <th class="align-middle"> تاريخ التوقف </th>
								<th class="align-middle"> الزيارات المتبقية </th>
                                <th class="align-middle"> المبلغ المتبقى </th>
							
                            </tr>
                        </thead>
                        <tbody>
						                
						<?php    
						$subscriptions = DB::table('subscriptions')->where('stoped', 1)->get();
			
			
						foreach ($subscriptions as $subscription)
						{
						   
						?>
                            <tr>
                                
                                <td class="align-middle"><?php $branchs = DB::table('branches')->where('cancel', 0)->where('id', $subscription->branch_id)->get(); ?>
								<?php		foreach ($branchs as $branch) { 
								echo $branch->name; }
								?>
								</td>
                                
                                <td class="align-middle"> <?php $bouquets = DB::table('bouquets')->where('cancel', 0)->where('id', $subscription->subscription_id)->get(); ?>
								<?php		foreach ($bouquets as $bouquet) { 
								echo $bouquet->name; }
								?></td>
                                <td class="align-middle"><?=$subscription->total_amount?></td>
                                <td class="align-middle"><?=$subscription->date_from?></td>
								<td class="align-middle"><?=$subscription->date_to?></td>
								
								
                                <td class="align-middle">
								<?php echo $subscription->cancel_request_dat;  ?>
								</td>
								<td></td>
								<td class="align-middle">
								<?php   ?>
								</td>
																

                              
                            </tr>
<?php } ?>
                        </tbody>
                    </table>
            </div>
        </div>


    </body>

   <script>
       $(document).ready(function() {
            $('#example').DataTable(
                {     
            "aLengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
                "iDisplayLength": 5
            } 
                );
        } );
   </script>
   
   
   
   
 @include('footer_admin') 