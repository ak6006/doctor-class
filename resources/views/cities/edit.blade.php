 @include('header_home')
@extends('layout')

@section('content')
 <?php
                    use Illuminate\Support\Facades\Auth;

                    // Get the currently authenticated user...
                    //echo $user = Auth::user() . "<hr/>"; 
                    // Get the currently authenticated user's ID...
					
                    $id = Auth::id() ;
					
					if ($id) {
                    $name = Auth::user()->name;
                    $email = Auth::user()->email;
					$role = Auth::user()->role;
                    $verified = Auth::user()->email_verified_at ;
					}
                    $title = '';
                    ?>


    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>

    @endif




           <form method="post" action="{{ route('branchs.update', $branch->id) }}">
          <div class="form-group text-right">
              @csrf
	 @method('PATCH')
 <div class="row mt-5 w-100">
            <div class="col-11" style="margin-left: 80px;">
                <div class="card m-auto text-center" style="width: 70%">
                    <div class="card-header text-center">
                        <h2> تعديل بيانات الفرع</h2>
                    </div>
                    <div class="card-body text-right">
                        <form class="text-right">
                            <div class="form-group">
                                <label for="name"> إسم الفرع</label>
                                <input type="text" class="form-control text-right" id="name"  name="name" value="{{ $branch->name }}" placeholder="إسم الفرع" required>
                            </div>
							<div class="form-group">
                                <label for="code"> كود الفرع</label>
                                <input type="text" class="form-control text-right" id="code"  value="{{ $branch->code }}" name="code" placeholder="كود الفرع" >
                            </div>
                            <div class="form-group">
                                <label for="address">عنوان الفرع</label>
                                <input type="text" class="form-control text-right" id="address" name="address" value="{{ $branch->address }}" placeholder="عنوان الفرع" required>
                            </div>
                            <div class="form-group">
                                <label for="phone"> رقم الهاتف</label>
                                <input type="text" class="form-control text-right" id="phone" name="phone" value="{{ $branch->phone }}" placeholder="رقم الهاتف" required>
                            </div>
                            <div class="form-group">
                                <label for="response_person">  إسم الشخص المسئول</label>
                                <input type="text" class="form-control text-right" id="response_person"  name="response_person" value="{{ $branch->response_person }}" placeholder="إسم الشخص المسئول" required>
                            </div>
                            <button type="submit" class="btn btn-success w-100">حفظ</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
 @include('footer_home') 