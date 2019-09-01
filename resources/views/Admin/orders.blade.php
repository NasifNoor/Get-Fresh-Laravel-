@extends('Admin.layout.main')
@section('content')

<script src="/js/jquery.min.js"></script>
    <div>
      {{session('msg')}}
    </div>
	<h1>Customer Orders</h1>
	<hr>
	<table border="1" class="table table-striped table-bordered">
		<tr class="text-center">
			<td><b>Product name</b></td>
			<td><b>Price</b></td>
			<td><b>Username</b></td>
			<td><b>Action</b></td>
		</tr>
    @foreach($orders as $value)
		<tr class="text-center">
			<td>{{$value['name']}}</td>
			<td>{{$value['price']}}</td>
			<td>{{$value['username']}}</td>
			<td>
				<a href="/confirm/{{$value['id']}}">Confirm</a>
				
			</td>
		</tr>
		@endforeach

@endsection