@extends('Admin.layout.main')
@section('content')

<script src="/js/jquery.min.js"></script>

	<h1>Available Product</h1>
	<hr>
	<table border="1" class="table table-striped table-bordered">
		<tr class="text-center">
			<td><b>Product name</b></td>
			<td><b>Price</b></td>
			<td><b>Description</b></td>
			<td><b>Action</b></td>
		</tr>
	  @foreach($product as $value)
		<tr class="text-center">
			<td>{{$value['name']}}</td>
			<td>{{$value['price']}}</td>
			<td>{{$value['description']}}</td>
			<td>
				<a href="/details/{{$value['id']}}">Details</a> |
				<a href="/order/{{$value['id']}}">Order</a> |
				<a href="/cart/{{$value['id']}}">Cart</a> 
				
			</td>
		</tr>
		@endforeach
    

@endsection