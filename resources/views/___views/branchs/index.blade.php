@extends('layout')

@section('content')

 @include('header_home') 
<style>
  .push-top {
    margin-top: 50px;
  }
</style>
<h3 class="text-right">بيانات الفرع</h3>
<div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table">
    <thead>
        <tr class="table-warning">
		<td>الرقم الضريبى</td>
		<td>الهاتف</td>
		<td>العنوان</td>
		<td>الامارة</td>
		<td>اسم الشركة</td>
        <td>كود الشركة</td>
        <td class="text-center">التحكم</td>
        </tr>
    </thead>
    <tbody>
        @foreach($student->where('user_id', Auth::id())  as $students)
        <tr>
            <td>{{$students->vat}}</td>
			<td>{{$students->phone}}</td>
			<td>{{$students->address}}</td>
			<td>{{$students->city}}</td>
			<td>{{$students->name}}</td>
			<td>{{$students->id}}</td>
            <td class="text-center">
                <a href="{{ route('students.edit', $students->id)}}" class="btn btn-primary btn-sm"">تعديل البانات</a>
               <!-- <form action="{{ route('students.destroy', $students->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"" type="submit">Delete</button>
                  </form>
				-->
            </td>
        </tr>
       
    </tbody>
  </table>
  <hr>
  <h3 class="text-right">بيانات الفروع</h3> <a href="{{ url('/branchs/create') }}">اضافة فرع جديد</a>
  <hr>
  <table class="table">
    <thead>
        <tr class="table-warning">
		<td>الشخص المسئول</td>
		<td>الهاتف</td>
		<td>العنوان</td>
		
        <td>كود الفرع</td>
		<td>اسم الفرع</td>
        <td class="text-center">التحكم</td>
        </tr>
    </thead>
    <tbody>
  <?php      $branch = DB::table('branches')->where('co_id', $students->id)->get();

foreach ($branch as $branchss)
{
   ?>

        <tr>
		<td><?=$branchss->response_person ?></td>
			<td><?=$branchss->phone ?></td>
			<td><?=$branchss->address ?></td>
			
			
			
			<td><?=$branchss->code ?></td>
			<td><?=$branchss->name ?></td>
			
            <td class="text-center">
                <a href="{{ route('students.edit', $students->id)}}" class="btn btn-primary btn-sm"">تعديل البانات</a>
               <!-- <form action="{{ route('students.destroy', $students->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"" type="submit">Delete</button>
                  </form>
				-->
            </td>
        </tr>
		<?php } ?>
        @endforeach

    </tbody>
  </table>
<div>
@endsection
 @include('footer_home') 