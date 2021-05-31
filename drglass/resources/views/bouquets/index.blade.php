
			
 @include('header_admin') 
@extends('layout')

@section('content')




<div class="container-fluid my-5 text-center text-blue">
            <h3><span class="pb-1 border-buttom" > إدارة الباقات </span></h3>
            <div class="px-md-5 px-0 mt-5 overflow-auto">
                <table class="table table-striped table-bordered mx-auto shadow" style="width: 92%;">
                    <thead class="bg-blue text-white" style="font-size: larger;">
                        <tr>
                            <th class="align-middle"> التحكم </th>
                            <th class="align-middle"> اسم الباقة </th>
                            <th class="align-middle"> السعر </th>
                            <th class="align-middle"> العملة </th>
                            <th class="align-middle">ايام العمل في الاسبوع </th>
                            <th class="align-middle">مرات العمل في اليوم </th>
                            <th class="align-middle">عدد ايام الباقة</th>
                            <th class="align-middle">التفعيل</th>
                        </tr>
                    </thead>
                    <tbody class="text-blue" style="font-size: large;">
					 @foreach($bouquet->where('cancel', 0)  as $bouquets)
                        <tr>
                            <td class="align-middle" style="min-width: 160px;"> 
                                <a href="{{ route('bouquets.edit', $bouquets->id)}}" type="button" class="btn bg-blue text-white" title="تعديل"><i class="fas fa-edit"></i></a>
                            </td>
                            <td class="align-middle"> {{$bouquets->name}} </td>
                            <td class="align-middle">{{$bouquets->price}}</td>
                            <td class="align-middle font-weight-bolder">{{$bouquets->currancy_symbol}}</td>
                            <td class="align-middle">{{$bouquets->daysperweek}}</td>
                            <td class="align-middle">{{$bouquets->workperday}}</td>
                            <td class="align-middle">{{$bouquets->dayspersubscription}}</td>
                            <td>
                                <div class="form-check pt-1">
                                    <input class="form-check-input" checked type="checkbox"   >
                                </div>
                            </td>
                        </tr>
                     @endforeach    
                       
                    </tbody>
                </table>
            </div>
        </div>
@endsection
@include('footer_admin') 