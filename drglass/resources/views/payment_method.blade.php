			
@include('header_admin') 
@extends('layout')

@section('content')

<?php
if (isset($_GET['delete'])){
                    DB::table('payment_methods')
                    ->where('id', $_GET['delete'])
                    ->update(['cancel' => 1])
                    ;
					}
					?>


<div class="container-fluid my-5 text-center text-blue">
            <h3><span class="pb-1 border-buttom" > إدارة طرق الدفع </span></h3>
            <div class="px-md-5 px-0 mt-5 overflow-auto">
                <table class="table table-striped table-bordered mx-auto shadow" style="width: 92%;">
                    <thead class="bg-blue text-white" style="font-size: larger;">
					<tr>
					<td><a class="btn bg-blue text-white" href="addnewpaymentmethod">إضافة طريقة دفع</a></td>
					<td colspan="4"></td>
					</tr>
                        <tr>
                            <th class="align-middle"> التحكم </th>
                            <th class="align-middle"> طريقة الدفع </th>
							<th class="align-middle"> اسم البنك  </th>
							<th class="align-middle">  رقم الحساب </th>
                            <th class="align-middle">التفعيل</th>
                        </tr>
                    </thead>
                    <tbody class="text-blue" style="font-size: large;">
					 <?php      
						$cityy = 1;
						$payment_methods = DB::table('payment_methods')->where('cancel', 0)->get();
			?>
		
			<?php foreach ($payment_methods as $payment_method)
					{ ?>
                        <tr>
                            <td class="align-middle" style="min-width: 160px;"> 
                                <a href="paymentmethodedit?payid={{$payment_method->id}}" class="btn bg-blue text-white" title="تعديل"><i class="fas fa-edit"></i></a>
								<a href="payment_method?delete={{$payment_method->id}}" onclick="return confirm(' هل تريد مسح طريقة الدفع؟؟')"  class="btn bg-blue text-white" title="حذف"><i class="fas fa-trash-alt"></i></a>
                            </td>
							<td class="align-middle">{{$payment_method->name}}</td>
							<td class="align-middle">{{$payment_method->bank_name}}</td>
							<td class="align-middle">{{$payment_method->number}}</td>
                            <td>
                                <div class="form-check pt-1">
								<?php if ($payment_method->active == 1) { ?>
                                    <input disabled class="form-check-input"  type="checkbox" style="width:25px; height:25px;"  >
								<?php } else { ?>
								     <input disabled class="form-check-input"  checked type="checkbox"  style="width:25px; height:25px;" >

								<?php } ?>
                                </div>
                            </td>
                        </tr>
					<?php } ?>  
                       
                    </tbody>
                </table>
            </div>
        </div>
@endsection

 @include('footer_admin') 