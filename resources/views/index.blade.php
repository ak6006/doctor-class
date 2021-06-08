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
<?php if ($langg == "ar") { ?>
 <script src="dataTables.min.js"></script>
<?php }elseif ($langg == "en") { ?>
 <script src="dataTablesen.min.js"></script>
<?php } ?>
 <script src="dataTables.bootstrap4.min.js"></script>
        <style>
            table{
                width:100%;
            }
            label {
                display: inline-flex;
                margin-bottom: .7rem;
                margin-top: .7rem;
                width: 70%;
            }
        </style>


<div class="container-fluid my-5 text-center text-blue">
				    <?php if ($langg == "ar"){?>
                     <h2><span class="pb-1 border-buttom" >  بيانات الشركة </span></h2>
					<?php }elseif ($langg == "en"){?>
            <h2><span class="pb-1 border-buttom" >   Company Information </span></h2>
					<?php } ?>
            <div class="px-md-5 px-0 my-5 overflow-auto">
                <table class="table table-striped table-bordered mx-auto shadow" style="width: 90%;">
                    <thead class="bg-blue text-white" style="font-size: larger;">
                        <thead class="bg-blue text-white" style="font-size: larger;">
						<?php if ($langg == "ar"){?>
                            <tr>
                                <th class="align-middle"style="min-width: 165px;">التحكم</th>
                                <th class="align-middle"> كود الشركة </th>
                                <th class="align-middle">اسم الشركة</th>
                                <th class="align-middle"> العنوان </th>
                                <th class="align-middle"> المنطقة </th>
                                <th class="align-middle"> الهاتف </th>
                                <th class="align-middle"> الرقم الضريبي </th>
                            </tr>
							<?php }elseif ($langg == "en"){?>
							<tr>
                                <th class="align-middle"style="min-width: 165px;">Controls</th>
                                <th class="align-middle">  Company Code </th>
                                <th class="align-middle"> Company Name</th>
                                <th class="align-middle"> Address </th>
                                <th class="align-middle"> Area </th>
                                <th class="align-middle"> Phone Number </th>
                                <th class="align-middle">  VAT </th>
                            </tr>
							<?php } ?>
                        </thead>
                    </thead>
                    <tbody class="text-blue" style="font-size: large;">
					   @foreach($student->where('user_id', Auth::id())  as $students)

					<tr>
                        <td class="align-middle">
						<?php if ($langg == "ar"){?>
                            <a  class="btn bg-blue text-white" href="{{ route('students.edit', $students->id)}}" title="تعديل"><i class="fas fa-edit"></i></a>
						<?php }elseif ($langg == "en"){?>
						    <a  class="btn bg-blue text-white" href="{{ route('students.edit', $students->id)}}" title="Edit"><i class="fas fa-edit"></i></a>
						<?php } ?>
                           <!-- <button type="button" class="btn bg-blue text-white" title="عرض"><i class="far fa-eye"></i></button>
                            <button type="button" class="btn bg-blue text-white" title="حذف"><i class="fas fa-trash-alt"></i></button>-->
                        </td>
                        <td class="align-middle">{{$students->id}}</td>
                        <td class="align-middle">{{$students->name}}</td>
                        <td class="align-middle">{{$students->address}}</td>
                         <?php      
									$city = DB::table('cities')->where('id', $students->city)->get();

												
									?>
									
									<?php foreach ($city as $contr)
												{ ?>
												<?php if ($langg == "ar"){?>
									<td class="align-middle"><?= $contr->name;?></td>
									<?php }elseif ($langg == "en"){?>
									<td class="align-middle"><?= $contr->name_en;?></td>
									<?php } ?>
					
									<?php }?>
                        <td class="align-middle">{{$students->phone}}</td>
                        <td class="align-middle">{{$students->vat}}</td>
						</tr>
                    </tbody>
                </table>
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
				
										$coname = DB::table('students')->where('cancel', 0)->where('id', $students->id)->get();


										foreach ($coname as $conam) {
											 $conam->user_id;
										}
									 ?>
									 <?php
				 $currentcuttedamount = DB::table('money_wallet')->where('cancel', 0)->where('companyid', $students->id)->sum("boqauet_cridet");
				?>
				<?php
				$currentamount = DB::table('money_wallet')->where('cancel', 0)->where('companyid', $students->id)->sum("current_amount");
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
				$currentamount = DB::table('money_wallet')->where('cancel', 0)->where('companyid', $students->id)->sum("current_amount");
				?>
 				<input type="number" disabled class="form-control text-blue  text-center font-weight-bolder m-auto" style="font-size: xxx-large;" value="<?=$currentamount?>">
 			</div>
			
 		</div>
 	</div>
 	<div id="id01" class="modal">
 		<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
 		    <form method="GET" action="{{ url('walletaddsuccess') }}" >
			<input type="hidden" name="coid" value="<?=$students->id?>" />
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
							<textarea placeholder="ملاحظات علي العملية" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
	  		<a href="cridt_report?coid=<?=$students->id?>"  value="" class="btn bg-warning px-5 text-black float-left font-weight-bolder" style="font-size:larger;">عمليات الإيداع</a>
 &nbsp;
	  		<a href="debit_report?coid=<?=$students->id?>"  value="" class="btn bg-warning px-5 text-black float-left font-weight-bolder" style="font-size:larger; margin: 0 0 0 5%;">عمليات السحب</a>
		</div>



 </div>
	 <hr class="bg-blue w-75">
			<?php if ($langg == "ar"){?>
            <h3 class="text-right mx-auto mb-3" style="width: 80%;"><span class="pb-1 border-buttom" >  بيانات الفروع </span></h3>
            <div class="text-left m-auto " style="width: 80%;">
                <a href="{{ url('/branchs/create') }}" class="btn bg-blue text-white"> اضافة فرع جديد </a>
            </div>
			<?php }elseif ($langg == "en"){?>
			<h3 class="text-left mx-auto mb-3" style="width: 80%;"><span class="pb-1 border-buttom" >  Branchs Information </span></h3>
            <div class="text-right m-auto " style="width: 80%;">
                <a href="{{ url('/branchs/create') }}" class="btn bg-blue text-white"> Add New Branch </a>
            </div>
			<?php } ?>
            <div class="px-md-5 px-0 mt-2 overflow-auto">
                    <table id="example" class="table table-striped table-bordered  mx-auto shadow" style="width:90%">
                        <thead class="bg-blue text-white" style="font-size: larger;">
						<?php if ($langg == "ar"){?>
                            <tr>
                                <th class="align-middle"style="min-width: 165px;">التحكم</th>
                                <th class="align-middle">اسم الفرع</th>
                                <th class="align-middle"> كود الفرع </th>
                                <th class="align-middle"> العنوان </th>
                                <th class="align-middle"> المنطقة </th>
                                <th class="align-middle"> الهاتف </th>
                                <th class="align-middle"> الشخص المسئول </th>
                            </tr>
						<?php }elseif ($langg == "en"){?>
						    <tr>
                                <th class="align-middle"style="min-width: 165px;">Controls</th>
                                <th class="align-middle"> Branch Name</th>
                                <th class="align-middle">  Branch Code </th>
                                <th class="align-middle"> Address </th>
                                <th class="align-middle"> Area </th>
                                <th class="align-middle"> Phone Number </th>
                                <th class="align-middle">  Contact Person </th>
                            </tr>
						<?php } ?>
                        </thead>
                        <tbody>

								<?php      $branch = DB::table('branches')->where('co_id', $students->id)->get();

							foreach ($branch as $branchss)
							{
							   ?>

                            <tr>
                                <td class="align-middle">
                                    <a  href="{{ route('branchs.edit', $branchss->id)}}" class="btn bg-blue text-white" title="تعديل"><i class="fas fa-edit"></i></a>
                                   <!-- <button type="button" class="btn bg-blue text-white" title="عرض"><i class="far fa-eye"></i></button>
                                    <button type="button" class="btn bg-blue text-white" title="حذف"><i class="fas fa-trash-alt"></i></button>-->
                                </td>
                                <td class="align-middle"><?=$branchss->name ?> </td>
                                <td class="align-middle"><?=$branchss->code ?></td>
                                <td class="align-middle"><?=$branchss->address ?></td>
                                 <?php      
									$city = DB::table('cities')->where('id', $branchss->city)->get();

												
									?>
									
									<?php foreach ($city as $contr)
												{ ?>
									<?php if ($langg == "ar"){?>
									<td class="align-middle"><?= $contr->name;?></td>
									<?php }elseif ($langg == "en"){?>
									<td class="align-middle"><?= $contr->name_en;?></td>
									<?php } ?>
									<?php }?>
                                <td class="align-middle"><?=$branchss->phone ?></td>
                                <td class="align-middle"><?=$branchss->response_person ?></td>
                            </tr>
							<?php } ?>
                        </tbody>
                    </table>
						
					   @endforeach
            </div>
        </div>

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
</html>

