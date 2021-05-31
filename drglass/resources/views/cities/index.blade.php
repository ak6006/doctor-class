
 @include('header_admin') 
@extends('layout')

@section('content')






        <!-- Main content -->
        <div class="container-fluid my-5 text-center text-blue">
            <h3><span class="pb-1 border-buttom" > إدارة مواعيد العمل </span></h3>
            <div class="row mt-5">
                <div class="col-2 col-md-4"></div>
                <div class="col-8  col-md-4">
                    <div class="form-group">
					<?php      
		$country = DB::table('countries')->where('cancel', 0)->get();

					
		?>
		<select class="form-control text-white font-weight-bolder" style="background-color:#0174Cf ; border: 2px solid #0174CF;">
		<?php foreach ($country as $contr)
					{ ?>
		<option><?= $contr->name;?></option>
		<?php }?>
		</select>
		
                    </div>
                </div>
            </div>
            <div class="px-md-5 px-0 mt-3 overflow-auto">
                <table class="table table-striped table-bordered mx-auto shadow" style="width: 92%;">
                    <thead class="bg-blue text-white" style="font-size: larger;">
                        <tr>
                            <th class="align-middle"> المنطقة </th>
                            <th class="align-middle"> عدد الشركات </th>
                            <th class="align-middle"> عدد الفروع </th>
                            <th class="align-middle"> المواعيد </th>
                            <th class="align-middle"> تفعيل المنطقة </th>                            
                        </tr>
                    </thead>
                    <tbody class="text-blue" style="font-size: large;">
					<?php      
		$cities = DB::table('cities')->where('cancel', 0)->get();

					
		?>
			<?php foreach ($cities as $contrs)
					{ ?>
                        <tr>
                            <td class="align-middle"> <?=$contrs->name;?>  </td>
                            <td class="align-middle"><?php      
	echo	$companies = DB::table('students')->where('cancel', 0)->where('city', $contrs->id)->count();

					
		?></td>
                            <td class="align-middle"><?php      
	echo	$branchs = DB::table('branches')->where('cancel', 0)->where('city', $contrs->id)->count();

					
		?></td>
                            <td class="align-middle">
                                <a href="appointments?cityid=<?= $contrs->id;?>" class="btn bg-blue text-white" title="تعديل"><i class="fas fa-edit"></i></a>
                            </td>
                            <td class="align-middle">
                                <div class="form-check pt-1">
								
			<?php if($contrs->active === 1) { ?>
			<input class="form-check-input" type="checkbox" unchecked/>
			<?php } else { ?>
			<input class="form-check-input" type="checkbox" checked/>
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