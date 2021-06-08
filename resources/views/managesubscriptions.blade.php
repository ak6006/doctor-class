 @include('header_admin') 

			
			
						<?php
			
			if (isset($_GET['remove'])){
                    DB::table('subscriptions')
                    ->where('id', $_GET['seen'])
                    ->update(['new' => 0])
                    ;
					}
			if (isset($_GET['add'])){
                    DB::table('subscriptions')
                    ->where('id', $_GET['seen'])
                    ->update(['new' => 1])
                    ;
					}
					?>	
			
		
			

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
            <h2><span class="pb-1 border-buttom" > إدارة الاشتراكات </span></h2>
			<br>
			<div class="text-center">
			<a class="btn btn-danger" href="managesubscriptionsstoped" >الإشتراكات الموقوفة</a>
			</div>
			<?php   
if (isset($_GET['new'])) { ?>
        <h5 class="text-right px-5 text-center">  الأشتراكات الجديدة </h5>
<?php } ?>
            <div class="px-md-5 px-0 my-5 overflow-auto">
                    <table id="example" class="table table-striped table-bordered  mx-auto shadow" style="width:90%">
                        <thead class="bg-blue text-white" style="font-size: larger;">
                            <tr>
                                <th class="align-middle"style="min-width: 165px;">التحكم</th>
                                <th class="align-middle"> إسم الفرع </th>
                                
                                <th class="align-middle"> الباقة </th>
                                <th class="align-middle"> اجمالي السعر </th>
                                <th class="align-middle"> تاريخ البدء </th>
								<th class="align-middle"> تاريخ الإنتهاء </th>
                                <th class="align-middle"> التفعيل </th>
                                <th class="align-middle"> مدفوعة </th>
							<?php	if (isset($_GET['new'])) { ?>
								<th class="align-middle"> إزالة من الجديد </th>
							<?php } else {?>
                                <th class="align-middle"> اضافة للجديد </th>
							<?php } ?>
                            </tr>
                        </thead>
                        <tbody>
						                
						<?php    
						  if (isset($_GET['new'])) { 
						$subscriptions = DB::table('subscriptions')->where('cancel', 0)->where('new', 1)->get();
						  } else {
							  $subscriptions = DB::table('subscriptions')->where('cancel', 0)->get();

						  }
						foreach ($subscriptions as $subscription)
						{
						   
						?>
                            <tr>
                                <td class="align-middle">
                                    <a href="managesubscriptionsedit?subid=<?=$subscription->id?>" class="btn bg-blue text-white" title="تعديل"><i class="fas fa-edit"></i></a>
                                    <a href="managesubscriptionsview?subid=<?=$subscription->id?>" class="btn bg-blue text-white" title="عرض"><i class="far fa-eye"></i></a>
                                    <a href="managesubscriptionsdelete?subid=<?=$subscription->id?>" onclick="return confirm(' هل تريد مسح الإشتراك؟')" class="btn bg-blue text-white" title="حذف"><i class="fas fa-trash-alt"></i></a>
                                </td>
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
                                <td class="align-middle"><?php if($subscription->active == 0) { ?>
								لا
								<?php }else { ?>
								نعم
								<?php } ?></td>
								<td class="align-middle">
								<?php if($subscription->paid == 0) { ?>
								لا
								<?php }else { ?>
								نعم
								<?php } ?>
																
																			  <?php   
if (isset($_GET['new'])) { ?>
		<td class="align-middle"><a href="managesubscriptions?new=1&seen=<?=$subscription->id?>&remove=1"><i class="far fa-eye text-blue" style=" cursor: pointer;"></i></a></td>
		<?php }else { ?>
	<?php	if ($subscription->new == 0) { ?>
		<td class="align-middle"><a href="managesubscriptions?seen=<?=$subscription->id?>&add=1"><i class="far fa-eye-slash text-blue" style=" cursor: pointer;"></i></a></td>
		<?php }else { ?>
<td class="align-middle"><i class="fas fa-eye"></i></td>
<?php } ?>
		<?php } ?>
                              
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