@extends('Customer.layout.main')
@section('content')
	<h1> Cart Product</h1>
	<hr>
	
	<table border="1" class="table table-striped table-bordered">
		<tr class="text-center">
			<td><b>Product name</b></td>
			<td><b>Price</b></td>
			<td><b>Description</b></td>
			<td><b>Action</b></td>
		</tr>
		@if(count($product) > 0)
		@foreach($product as $value)
		<tr class="text-center">
			<td>{{$value['name']}}</td>
			<td>{{$value['price']}}</td>
			<td>{{$value['description']}}</td>
			<td>
				<a href="/order/{{$value['productid']}}">Order</a> |
				<a href="/delete/{{$value['id']}}">Delete</a> 
				
			</td>
		</tr>
		@endforeach
		
		@else
		<tr>
        	<td align="center" colspan="4">No Data Found</td>
        </tr>
		@endif
@endsection