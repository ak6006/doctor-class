@include('header_admin') 

<body class="w-100">
      <div class="row mt-5 w-100">
            <div class="col-11" style="margin-left: 80px;">
                <div class="card m-auto text-center" style="width: 70%">
<table class="table">
    <thead>
        <tr class="table-warning">
		<td> العملة</td>
		<td> السعر</td>
		<td> اسم الباقة</td>
        <td class="text-center">التحكم</td>
        </tr>
    </thead>
    <tbody>
        @foreach($bouquet->where('cancel', 0)  as $bouquets)
        <tr>
		<td>{{$bouquets->currancy_symbol}}</td>
		<td>{{$bouquets->price}}</td>
		<td>{{$bouquets->name}}</td>
            <td class="text-center">
                <a href="{{ route('bouquets.edit', $bouquets->id)}}" class="btn btn-primary btn-sm">تعديل البيانات</a>
				<a href="{{ route('bouquets_points.index', $bouquets->id)}}" class="btn btn-primary btn-sm">المميزات</a>
            </td>
        </tr>
           @endforeach
    </tbody>
  </table>
          </div>
                </div>
            </div>
 @include('footer_admin') 