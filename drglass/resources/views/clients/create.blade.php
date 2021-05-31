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
					$had_company = Auth::user()->had_company;
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
      <form method="post" action="{{ route('students.store') }}">
       
              @csrf
						   <input type="hidden" class="form-control" value="<?=$id?>" name="user_id"/>



 <div class="row mt-5 w-100">
            <div class="col-11" style="margin-left: 80px;">
                <div class="card m-auto text-right" style="width: 70%">
                    <div class="card-header text-center">
                        <h2>إضافة شركة</h2>
                    </div>
                    <div class="card-body text-right" >
                            <div class="form-group">
                                <label for="name"> إسم الشركة</label>
                                <input type="text" class="form-control text-right" id="name" name="name" placeholder="إسم الشركة" required>
                            </div>
                            <div class="form-group">
                                <label for="address"> نوان الشركة</label>
                                <input type="text" class="form-control text-right" id="address"  name="address" placeholder="عنوان الشركة" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">رقم الهاتف</label>
                                <input type="text" class="form-control text-right" id="phone"  name="phone" placeholder="رقم الهاتف" required>
                            </div>
                            <div class="form-group">
                                <label for="vat"> الرقم الضريبى</label>
                                <input type="text" class="form-control text-right" id="vat"  name="vat" placeholder=" الرقم الضريبى" >
                            </div>
                            <button type="submit" class="btn btn-success w-100">حفظ</button>
                    </div>
                </div>
            </div>
        </div>
		      </form>

 @include('footer_home') 