@extends('Customer.layout.main')
@section('content')
	<h1> Employee List</h1>
	<hr>

	<table border="1" class="table table-striped table-bordered">
		<tr class="text-center">
			<td><b>Employee Name</b></td>
			<td><b>Contact Number</b></td>
		</tr>
		@foreach($emp as $value)
		<tr class="text-center">
			<td>{{$value['name']}}</td>
			<td>{{$value['contact']}}</td>
		</tr>
		@endforeach	
@endsection