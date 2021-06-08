 @include('header_admin')

 <style>
 	.buttonmodal {
 		background-color: #04AA6D;
 		color: white;
 		padding: 14px 20px;
 		margin: 8px 0;
 		border: none;
 		cursor: pointer;
 		width: 100%;
 		opacity: 0.9;
 	}

 	.buttonmodal:hover {
 		opacity: 1;
 	}

 	/* Float cancel and delete buttons and add an equal width */
 	.cancelbtn,
 	.deletebtn {
 		float: left;
 		width: 50%;
 	}

 	/* Add a color to the cancel button */
 	.cancelbtn {
 		background-color: #ccc;
 		color: black;
 	}

 	/* Add a color to the delete button */
 	.deletebtn {
 		background-color: #2a56c6;
 	}

 	/* Add padding and center-align text to the container */
 	.container {
 		padding: 16px;
 		text-align: center;
 	}

 	/* The Modal (background) */
 	.modal {
 		display: none;
 		/* Hidden by default */
 		position: fixed;
 		/* Stay in place */
 		z-index: 1;
 		/* Sit on top */
 		left: 0;
 		top: 0;
 		width: 100%;
 		/* Full width */
 		height: 100%;
 		/* Full height */
 		overflow: auto;
 		/* Enable scroll if needed */
 		background-color: #474e5d;
 		padding-top: 50px;
 	}

 	/* Modal Content/Box */
 	.modal-content {
 		background-color: #fefefe;
 		margin: 5% auto 15% auto;
 		/* 5% from the top, 15% from the bottom and centered */
 		border: 1px solid #888;
 		width: 80%;
 		/* Could be more or less, depending on screen size */
 	}

 	/* Style the horizontal ruler */
 	hr {
 		border: 1px solid #f1f1f1;
 		margin-bottom: 25px;
 	}

 	/* The Modal Close Button (x) */
 	.close {
 		position: absolute;
 		right: 35px;
 		top: 15px;
 		font-size: 40px;
 		font-weight: bold;
 		color: #f1f1f1;
 	}

 	.close:hover,
 	.close:focus {
 		color: #f44336;
 		cursor: pointer;
 	}

 	/* Clear floats */
 	.clearfix::after {
 		content: "";
 		clear: both;
 		display: table;
 	}

 	/* Change styles for cancel button and delete button on extra small screens */
 	@media screen and (max-width: 300px) {

 		.cancelbtn,
 		.deletebtn {
 			width: 100%;
 		}
 	}
 </style>



 <!-- Main content -->
 <div class="container-fluid my-5 text-center text-blue">
 	<h2><span class="pb-1 border-buttom"> بيانات الشركة </span></h2>
 	<?php
		if (isset($_GET['coid'])) { ?>
 		<h5 class="text-center px-5"> <?php
										$coname = DB::table('students')->where('cancel', 0)->where('id', $_GET['coid'])->get();


										foreach ($coname as $conam) {
											echo $conam->name;
										}
									} ?> </h5>

 		<div class="px-md-5 px-0 mt-5 overflow-auto">
 			<table id="example" class="table table-striped table-bordered  mx-auto shadow" style="width:85%">
 				<thead class="bg-blue text-white" style="font-size: larger;">
 					<tr>
 						<th style="min-width: 165px;">التحكم</th>
 						<th>اسم الشركة</th>
 						<th>المنطقة</th>
 						<th>العنوان </th>
 						<th>الهاتف</th>

 						<th>الرقم الضريبى</th>
 						<th>اسم المستخدم</th>

 					</tr>
 				</thead>
 				<tbody>


 					<?php

						$coname = DB::table('students')->where('cancel', 0)->where('id', $_GET['coid'])->get();


						foreach ($coname as $conam) {

						?>
 						<tr>
 							<td>
 								<a href="companyeditadmin?coid=<?= $conam->id ?>" class="btn bg-blue text-white" title="تعديل"><i class="fas fa-edit"></i></a>
 								<a href="companyview?coid=<?= $conam->id ?>" class="btn bg-blue text-white" title="عرض"><i class="far fa-eye"></i></a>
 								<a href="companydelete?coid=<?= $conam->id ?>" class="btn bg-blue text-white" title="مسح"><i class="fas fa-trash-alt"></i></a>
 							</td>
 							<td>{{$conam->name}}</td>
 							<td>
 								<?php $city = DB::table('cities')->where('cancel', 0)->where('id', $conam->city)->get();

									foreach ($city as $cit) {
										echo $cit->name;
									}
									?>

 							</td>
 							<td>{{$conam->address}}</td>
 							<td>{{$conam->phone}}</td>
 							<td>{{$conam->vat}}</td>
 							<td>
 								<?php $users = DB::table('users')->where('cancel', 0)->where('id', $conam->user_id)->get();

									foreach ($users as $user) { ?>
 									<a href="userview?userid=<?= $conam->user_id ?>" class="btn bg-blue text-white" title="عرض"><i class="far fa-eye"></i>&nbsp;<?php echo $user->name; ?></a>

 								<?php }
									?>

 							</td>

 						</tr>
 					<?php } ?>

 				</tbody>

 			</table>
 		</div>
 </div>
 <hr class="bg-blue w-75">
 <div class="container my-5 text-center text-blue">
 	<h3><span class="pb-1 border-buttom"> محفظة الشركة المالية </span></h3>
 	<div class="row mt-5">
 		<div class="col-md-6 col-12 text-center ">
 			<h3 style="padding: .375rem .75rem; font-size: xxx-large; height: 100%;">المبلغ الحالي</h3>
 		</div>
 		<div class="col-md-6 col-12 align-middle">
 			<div class="input-group mb-3 w-75" dir="ltr">
 				<div class="input-group-prepend">
 					<span class="input-group-text font-weight-bolder text-blue" style="font-size: xxx-large;" id="basic-addon1">RS</span>
 				</div>
				<?php
				
										$coname = DB::table('students')->where('cancel', 0)->where('id', $_GET['coid'])->get();


										foreach ($coname as $conam) {
											 $conam->user_id;
										}
									 ?>
				<?php
				 $currentcuttedamount = DB::table('money_wallet')->where('cancel', 0)->where('companyid', $_GET['coid'])->sum("boqauet_cridet");
				?>
				<?php
				$currentamount = DB::table('money_wallet')->where('cancel', 0)->where('companyid', $_GET['coid'])->sum("current_amount");
				?>
 				<input type="number" disabled class="form-control text-blue  text-center font-weight-bolder m-auto" style="font-size: xxx-large;" value="<?=$currentamount - $currentcuttedamount?>">
 			</div>
 		</div>
		<div class="col-md-6 col-12 text-center ">
 			<h3 style="padding: .375rem .75rem; font-size: xxx-large; height: 100%;">جميع المبالغ المضافة </h3>
 		</div>
 		<div class="col-md-6 col-12 align-middle">
 			<div class="input-group mb-3 w-75" dir="ltr">
 				<div class="input-group-prepend">
 					<span class="input-group-text font-weight-bolder text-blue" style="font-size: xxx-large;" id="basic-addon1">RS</span>
 				</div>
				<?php
				$currentamount = DB::table('money_wallet')->where('cancel', 0)->where('companyid', $_GET['coid'])->sum("current_amount");
				?>
 				<input type="number" disabled class="form-control text-blue  text-center font-weight-bolder m-auto" style="font-size: xxx-large;" value="<?=$currentamount?>">
 			</div>
			
 		</div>
 	</div>
 	<div id="id01" class="modal">
 		<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
 		    <form method="GET" action="{{ url('walletaddsuccess') }}" >
			<input type="hidden" name="coid" value="<?=$_GET['coid']?>" />
 			<div class="container">
 				<h1>إضافة مبلغ للمحفظة</h1>
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<div class="input-group my-4 mx-auto" dir="ltr">
							<div class="input-group-prepend">
								<span class="input-group-text font-weight-bolder text-blue" style="font-size: larger;" id="basic-addon1">RS</span>
							</div>
							<input type="number" name="amount" required class="form-control text-blue  text-center font-weight-bolder m-auto" style="font-size: larger;">
						</div>
						<div class="form-group">
							<textarea placeholder="ملاحظات علي العملية" class="form-control" name="comments" id="exampleFormControlTextarea1" rows="3"></textarea>
						 </div>
					</div>
					<div class="col-md-4"></div>
				</div>
 				
 				<div class="clearfix">
 					<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn buttonmodal">الغاء</button>
 					<button type="submit" onclick="document.getElementById('id01').style.display='none'" class="deletebtn buttonmodal">إضافة</button>
 				</div>
 			</div>
 		</form>
 	</div>
 	<div class="py-5">
 		<input type="button" onclick="document.getElementById('id01').style.display='block'" value="ايداع مبلغ" class="btn bg-blue px-5 text-white float-left font-weight-bolder" style="font-size:larger;">

 	</div>
	 <hr class="bg-blue w-75">

	 	<div class="py-5">
	  		<a href="cridt_report?coid=<?=$_GET['coid']?>"  value="" class="btn bg-warning px-5 text-black float-left font-weight-bolder" style="font-size:larger;">عمليات الإيداع</a>
 &nbsp;
	  		<a href="debit_report?coid=<?=$_GET['coid']?>"  value="" class="btn bg-warning px-5 text-black float-left font-weight-bolder" style="font-size:larger; margin: 0 0 0 5%;">عمليات السحب</a>
 	</div>
 </div>
	 <hr class="bg-blue w-75">


 </body>
 <script>
 	function openNav() {
 		document.getElementById("mySidepanel").style.width = "300px";
 	}

 	function closeNav() {
 		document.getElementById("mySidepanel").style.width = "0";
 	}
 </script>
 <script>
 	// Get the modal
 	var modal = document.getElementById('id01');

 	// When the user clicks anywhere outside of the modal, close it
 	window.onclick = function(event) {
 		if (event.target == modal) {
 			modal.style.display = "none";
 		}
 	}
 </script>

 </html>











 @include('footer_admin')