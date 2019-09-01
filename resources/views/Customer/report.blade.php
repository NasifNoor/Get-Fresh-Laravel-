@extends('Customer.layout.main')
@section('content')
<h1>Customer's Report</h1>
<hr>

<h6>Orders Not Approved yet</h6>
<hr>
<table border="1" class="table table-striped table-bordered">
	<tr class="text-center">
		<td>Product Name</td>
		<td>Price</td>
	</tr>
	@if(count($order) > 0)
	@foreach($order as $value)
	<tr class="text-center">
		<td>{{$value['name']}}</td>
		<td>{{$value['price']}}</td>
	</tr>
	@endforeach
	@else
	<tr class="text-center">
    	<td align="center" colspan="4">No ordered product available</td>
    </tr>
	@endif
</table><br><br>

<h6>Purchased Product</h6>
<hr>
<table border="1" class="table table-striped table-bordered">
	<tr class="text-center">
		<td>Product Name</td>
		<td>Price</td>
		<td>Date</td>
	</tr>
	@if(count($purchase) > 0)
	@foreach($purchase as $value)
	<tr class="text-center">
		<td>{{$value['name']}}</td>
		<td>{{$value['price']}}</td>
		<td>{{$value['date']}}</td>
	</tr>
	@endforeach
	@else
	<tr class="text-center">
    	<td align="center" colspan="4">Didn,t Purchase anything yet</td>
    </tr>
	@endif
</table><br><br>

<h6>My Comments</h6>
<hr>
<table border="1" class="table table-striped table-bordered">
	<tr class="text-center">
		<td>Product Id</td>
		<td>Comment</td>
		<td>Date</td>
	</tr>
	@if(count($com) > 0)
	@foreach($com as $value)
	<tr class="text-center">
		<td>{{$value['productid']}}</td>
		<td>{{$value['comment']}}</td>
		<td>{{$value['date']}}</td>
	</tr>
	@endforeach
	@else
	<tr class="text-center">
    	<td align="center" colspan="4">Didn,t Comment on any product</td>
    </tr>
	@endif
</table><br><br>
	
@endsection