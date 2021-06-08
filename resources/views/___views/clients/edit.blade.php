 @include('header_home')
@extends('layout')

@section('content')




    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
	
    @endif
    


      <form method="post" action="{{ route('students.update', $student->id) }}">
       
              @csrf
 @method('PATCH')


 <div class="row mt-5 w-100">
            <div class="col-11" style="margin-left: 80px;">
                <div class="card m-auto text-right" style="width: 70%">
                    <div class="card-header text-center">
                        <h2> تعديل بيانات الشركة</h2>
                    </div>
                    <div class="card-body text-right">
                            <div class="form-group">
                                <label for="name"> إسم الشركة</label>
                                <input type="text" class="form-control text-right" id="name" name="name" value="{{ $student->name }}" placeholder="إسم الشركة" required>
                            </div>
                            <div class="form-group">
                                <label for="address"> عنوان الشركة</label>
                                <input type="text" class="form-control text-right" id="address"  name="address" value="{{ $student->address }}" placeholder="عنوان الشركة" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">رقم الهاتف</label>
                                <input type="text" class="form-control text-right" id="phone"  name="phone" value="{{ $student->phone }}" placeholder="رقم الهاتف" required>
                            </div>
                            <div class="form-group">
                                <label for="vat"> الرقم الضريبى</label>
                                <input type="text" class="form-control text-right" id="vat"  name="vat" value="{{ $student->vat }}" placeholder=" الرقم الضريبى" >
                            </div>
                            <button type="submit" class="btn btn-success w-100">حفظ</button>
                    </div>
                </div>
            </div>
        </div>
		      </form>
@endsection
@include('footer_home') 