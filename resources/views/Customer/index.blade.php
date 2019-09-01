@extends('Customer.layout.main')
@section('content')
	<div>
    	{{session('msg')}}
  	</div>
	<h1>Customer page</h1>
	<hr>
	<table>
		<tr>
			<td>Name :</td>
			<td>{{$customer['Name']}}</td>
		</tr>
		<tr>
			<td>Username :</td>
			<td>{{$customer['username']}}</td>
		</tr>
		<tr>
			<td>Phone no :</td>
			<td>{{$customer['contactnumber']}}</td>
		</tr>
		<tr>
			<td>Email : </td>
			<td>{{$customer['email']}}</td>
		</tr>
		<tr>
			<td>Address: </td>
			<td>{{$customer['address']}}</td>
		</tr>
	</table>
@endsection