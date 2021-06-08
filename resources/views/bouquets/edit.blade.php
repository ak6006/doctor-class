@include('header_admin')
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
 <link rel="stylesheet" href="../../style.css">
      <form method="post" action="{{ route('bouquets.update', $bouquet->id) }}">
              @csrf
			  @method('PATCH')
 
 
 <div class="container-fluid mb-5 text-center text-blue">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6 col-12">
                    <div class="card mx-auto mt-5 overflow-hidden" style=" border-radius:0 50px ; border: 2px solid #0174CF;">
                        <div class="card-header text-white bg-blue">
                            <h3><span class="pb-1"> تعديل بيانات الباقة </span></h3>
                        </div>
                        <div class="card-body text-right">
                            <div class="form-group">
                                <label for="name"> إسم الباقة</label>
                                <input type="text" class="form-control text-right" id="name" name="name" value="{{ $bouquet->name }}" placeholder=" إسم الباقة" required>
                            </div>
                            <div class="form-group">
                                <label for="price"> السعر </label>
                                <input type="text" class="form-control text-right" id="price"  name="price" value="{{ $bouquet->price }}" placeholder=" السعر" required>
                            </div>
                            <div class="form-group">
                                <label for="currancy_symbol">العملة</label>
                                <input type="text" class="form-control text-right" id="currancy_symbol"  name="currancy_symbol" value="{{ $bouquet->currancy_symbol }}" placeholder=" العملة" required>
                            </div>
                             <div class="form-group">
                                <label for="daysperweek">ايام العمل فى الأسبوع</label>
                                <input type="text" class="form-control text-right" id="daysperweek"  name="daysperweek" value="{{ $bouquet->daysperweek }}" placeholder=" ايام العمل فى الأسبوع" required>
                            </div>
							<div class="form-group">
                                <label for="workperday">  مرات العمل باليوم </label>
                                <input type="text" class="form-control text-right" id="workperday"  name="workperday" value="{{ $bouquet->workperday }}" placeholder=" مرات العمل بليوم  " required>
                            </div>
							<div class="form-group">
                                <label for="dayspersubscription">  مدة الباقة باليوم </label>
                                <input type="text" class="form-control text-right" id="dayspersubscription"  name="dayspersubscription" value="{{ $bouquet->dayspersubscription }}" placeholder=" مرات العمل بليوم  " required>
                            </div>
							<div class="form-group">
                                <label for="minutespertask">  مدة العمل بالدقيقة</label>
                                <input type="text" class="form-control text-right" id="minutespertask"  name="minutespertask" value="{{ $bouquet->minutespertask }}" placeholder=" مدة العمل بلدقيقة  " required>
                            </div>
							<div class="text-center">
							    <button type="submit" class="btn bg-blue text-white px-5">حفظ</button>
							</div>

                    </div>
                    </div>
                </div>
            </div>
        </div>
      </form>
@endsection
@include('footer_home') 