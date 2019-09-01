@extends('Customer.layout.main')
@section('content')
	<h1> Purchase History</h1>
	<hr>

	<table border="1" class="table table-striped table-bordered">
		<tr class="text-center">
			<td><b>Product name</b></td>
			<td><b>Price</b></td>
			<td><b>Date</b></td>
		</tr>
		@if(count($product) > 0)
		@foreach($product as $value)
		<tr class="text-center">
			<td>{{$value['name']}}</td>
			<td>{{$value['price']}}</td>
			<td>{{$value['date']}}</td>
		</tr>
		@endforeach	
		@else
		<tr>
        	<td align="center" colspan="4">Didn't Purchase anything yet!</td>
        </tr>
		@endif
@endsection