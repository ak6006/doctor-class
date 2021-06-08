@include('header_home') 

@extends('layout')

@section('content')




    <head>
        <meta charset="utf-8">
       
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="img/logo_100.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/ef9b0108c9.js" crossorigin="anonymous"></script>
        <script src="dataTables.min.js"></script>
        <script src="dataTables.bootstrap4.min.js"></script>
        <link rel="stylesheet" href="style.css">
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
            <h2><span class="pb-1 border-buttom" >  بيانات الشركة </span></h2>
            <div class="px-md-5 px-0 my-5 overflow-auto">
                <table class="table table-striped table-bordered mx-auto shadow" style="width: 90%;">
                    <thead class="bg-blue text-white" style="font-size: larger;">
                        <thead class="bg-blue text-white" style="font-size: larger;">
                            <tr>
                                <th class="align-middle"style="min-width: 165px;">التحكم</th>
                                <th class="align-middle"> كود الشركة </th>
                                <th class="align-middle">اسم الشركة</th>
                                <th class="align-middle"> العنوان </th>
                                <th class="align-middle"> المنطقة </th>
                                <th class="align-middle"> الهاتف </th>
                                <th class="align-middle"> الرقم الضريبي </th>
                            </tr>
                        </thead>
                    </thead>
                    <tbody class="text-blue" style="font-size: large;">
					   @foreach($student->where('user_id', Auth::id())  as $students)

					<tr>
                        <td class="align-middle">
                            <a  class="btn bg-blue text-white" href="{{ route('students.edit', $students->id)}}" title="تعديل"><i class="fas fa-edit"></i></a>
                            <button type="button" class="btn bg-blue text-white" title="عرض"><i class="far fa-eye"></i></button>
                            <button type="button" class="btn bg-blue text-white" title="حذف"><i class="fas fa-trash-alt"></i></button>
                        </td>
                        <td class="align-middle">{{$students->id}}</td>
                        <td class="align-middle">{{$students->name}}</td>
                        <td class="align-middle">{{$students->address}}</td>
                         <?php      
									$city = DB::table('cities')->where('id', $students->city)->get();

												
									?>
									
									<?php foreach ($city as $contr)
												{ ?>
						<td class="align-middle"><?= $contr->name;?></td>
									<?php }?>
                        <td class="align-middle">{{$students->phone}}</td>
                        <td class="align-middle">{{$students->vat}}</td>
						</tr>
                    </tbody>
                </table>
            </div>
            <h3 class="text-right mx-auto mb-3" style="width: 80%;"><span class="pb-1 border-buttom" >  بيانات الفروع </span></h3>
            <div class="text-left m-auto " style="width: 80%;">
                <a href="{{ url('/branchs/create') }}" class="btn bg-blue text-white"> اضافة فرع جديد </a>
            </div>
            <div class="px-md-5 px-0 mt-2 overflow-auto">
                    <table id="example" class="table table-striped table-bordered  mx-auto shadow" style="width:90%">
                        <thead class="bg-blue text-white" style="font-size: larger;">
                            <tr>
                                <th class="align-middle"style="min-width: 165px;">التحكم</th>
                                <th class="align-middle">اسم الفرع</th>
                                <th class="align-middle"> كود الفرع </th>
                                <th class="align-middle"> العنوان </th>
                                <th class="align-middle"> المنطقة </th>
                                <th class="align-middle"> الهاتف </th>
                                <th class="align-middle"> الشخص المسئول </th>
                            </tr>
                        </thead>
                        <tbody>

								<?php      $branch = DB::table('branches')->where('co_id', $students->id)->get();

							foreach ($branch as $branchss)
							{
							   ?>

                            <tr>
                                <td class="align-middle">
                                    <a  href="{{ route('branchs.edit', $branchss->id)}}" class="btn bg-blue text-white" title="تعديل"><i class="fas fa-edit"></i></a>
                                    <button type="button" class="btn bg-blue text-white" title="عرض"><i class="far fa-eye"></i></button>
                                    <button type="button" class="btn bg-blue text-white" title="حذف"><i class="fas fa-trash-alt"></i></button>
                                </td>
                                <td class="align-middle"><?=$branchss->name ?> </td>
                                <td class="align-middle"><?=$branchss->code ?></td>
                                <td class="align-middle"><?=$branchss->address ?></td>
                                 <?php      
									$city = DB::table('cities')->where('id', $branchss->city)->get();

												
									?>
									
									<?php foreach ($city as $contr)
												{ ?>
									<td class="align-middle"><?= $contr->name;?></td>
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
@endsection
