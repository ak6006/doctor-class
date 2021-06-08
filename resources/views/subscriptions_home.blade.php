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

			
			
			
			
<style>
	label {
	display: inline-flex;
	margin-bottom: .7rem;
	margin-top: .7rem;
	width: 70%;
}
</style>


<?php if ($langg == "ar") { ?>
 <script src="dataTables.min.js"></script>
<?php }elseif ($langg == "en") { ?>
 <script src="dataTablesen.min.js"></script>
<?php } ?>
 <script src="dataTables.bootstrap4.min.js"></script>
 
<div class="container-fluid my-5 text-center text-blue">
<?php if ($langg == "en") { ?>
            <h3><span class="pb-1 border-buttom" > Manage My Subscriptions </span></h3>
			<?php if (isset($_GET['active']) == 1) { ?>
			<h5><span class="pb-1 border-buttom" > Active Subscriptions  </span></h5>
			<?php }elseif (isset($_GET['unactive']) == 1) {  ?>
			<h5><span class="pb-1 border-buttom" > Inactive Subscriptions  </span></h5>
			<?php }elseif (isset($_GET['paid']) == 1) {  ?>
						<h5><span class="pb-1 border-buttom" > Paid Subscriptions  </span></h5>
			<?php }elseif (isset($_GET['unpaid']) == 1) {  ?>
			<h5><span class="pb-1 border-buttom" >    Unpaid Subscriptions</span></h5>
			<?php } ?>
<?php }elseif ($langg == "ar") { ?>	
            <h3><span class="pb-1 border-buttom" > إدارة إشتراكاتي </span></h3>
			<?php if (isset($_GET['active']) == 1) { ?>
			<h5><span class="pb-1 border-buttom" > الاشتراكات المفعلة  </span></h5>
			<?php }elseif (isset($_GET['unactive']) == 1) {  ?>
			<h5><span class="pb-1 border-buttom" > الاشتراكات الغير مفعلة  </span></h5>
			<?php }elseif (isset($_GET['paid']) == 1) {  ?>
						<h5><span class="pb-1 border-buttom" > الاشتراكات المدفوعة  </span></h5>
			<?php }elseif (isset($_GET['unpaid']) == 1) {  ?>
			<h5><span class="pb-1 border-buttom" >    الاشتراكات الغير مدفوعة</span></h5>
			<?php } ?>
<?php } ?>			
            <div class="px-md-5 px-0 mt-5 overflow-auto">
                <table id="example" class="table table-striped table-bordered mx-auto shadow" style="width: 92%;">
                    <thead class="bg-blue text-white" style="font-size: larger;">
<?php if ($langg == "en") { ?>             
						<tr>
                            <th class="align-middle"> Appointments </th>
                            <th class="align-middle"> Branch Name </th> 
                            <th class="align-middle">  Bouquet  </th>
                            <th class="align-middle"> Total Price </th>
                            <th class="align-middle"> Start Date </th>
							<th class="align-middle"> End Date </th>
                            <th class="align-middle"> Activation </th>
                            <th class="align-middle">Paid</th>
                        </tr>
<?php }elseif ($langg == "ar") { ?>	
						<tr>
                            <th class="align-middle"> المواعيد </th>
                            <th class="align-middle"> اسم الفرع </th> 
                            <th class="align-middle"> الباقة  </th>
                            <th class="align-middle"> اجمالي السعر </th>
                            <th class="align-middle"> تاريخ البدء </th>
							<th class="align-middle"> تاريخ  الإنتهاء </th>
                            <th class="align-middle"> التفعيل </th>
                            <th class="align-middle">مدفوعة</th>
                        </tr>
<?php } ?>
						
                    </thead>
                    <tbody class="text-blue" style="font-size: large;">
                      
					  <?php if (isset($_GET['active']) == 1) { ?>
					  <?php    $subscriptions = DB::table('subscriptions')->where('cancel', 0)->where('active', 1)->where('user_create_id', Auth::id())->get(); ?>
					  <?php }elseif (isset($_GET['unactive']) == 1) {  ?>
					  <?php    $subscriptions = DB::table('subscriptions')->where('cancel', 0)->where('active', 0)->where('user_create_id', Auth::id())->get(); ?>
					  <?php }elseif (isset($_GET['paid']) == 1) {  ?>
					  <?php    $subscriptions = DB::table('subscriptions')->where('cancel', 0)->where('paid', 1)->where('user_create_id', Auth::id())->get(); ?>
					  <?php }elseif (isset($_GET['unpaid']) == 1) {  ?>
					  <?php    $subscriptions = DB::table('subscriptions')->where('cancel', 0)->where('paid', 0)->where('user_create_id', Auth::id())->get(); ?>
					  <?php } else { ?>
					  <?php    $subscriptions = DB::table('subscriptions')->where('cancel', 0)->where('user_create_id', Auth::id())->get(); ?>
					  <?php } ?>

<?php
foreach ($subscriptions as $subscription)
{
   
?>
        <tr>
		<td class="align-middle">
            <a href="sub_appointments?subid=<?=$subscription->id?>" class="btn bg-blue text-white" title="عرض"><i class="far fa-eye"></i></a>
			<?php if($subscription->active == 0 AND $subscription->paid == 0) { ?>
			<a href="managesubscriptionsdelete?subid=<?=$subscription->id?>" onclick="return confirm(' هل تريد مسح الإشتراك؟')" class="btn bg-blue text-white" title="حذف"><i class="fas fa-trash-alt"></i></a>

			<?php } ?>
        </td>
		<td class="align-middle"><?php $branchs = DB::table('branches')->where('cancel', 0)->where('id', $subscription->branch_id)->get(); ?>
<?php		foreach ($branchs as $branch) { 
echo $branch->name; }
?></td>
		
		<td class="align-middle">
		<?php $bouquets = DB::table('bouquets')->where('cancel', 0)->where('id', $subscription->subscription_id)->get(); ?>
<?php		
foreach ($bouquets as $bouquet) { 
 if ($langg == "ar") { 
echo $bouquet->name; 
}
elseif ($langg == "en") {
	echo $bouquet->name_en; 
}
}
?>

		</td>
			<td class="align-middle"> <?=$subscription->total_amount?></td>
			<td><?=$subscription->date_from?></td>
			<td><?=$subscription->date_to?></td>
		<td class="align-middle">
		<?php if($subscription->active == 0) { ?>
<?php if ($langg == "ar") { ?> 
لا
<?php }elseif ($langg == "en") { ?> 
No
<?php } ?>
<?php }else { ?>
<?php if ($langg == "ar") { ?> 
نعم
<?php }elseif ($langg == "en") { ?> 
Yes
<?php } ?>
<?php } ?></td>
		
		



		<td class="align-middle">
<?php if($subscription->paid == 0) { ?>
<?php if ($langg == "ar") { ?> 
لا
<?php }elseif ($langg == "en") { ?> 
No
<?php } ?>
<?php }else { ?>
<?php if ($langg == "ar") { ?> 
نعم
<?php }elseif ($langg == "en") { ?> 
Yes
<?php } ?>

<?php } ?>
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