@extends('Admin.layout.main')
@section('content')
	<div>
    	{{session('msg')}}
  	</div>
	<h1>Admin page</h1>
	<hr>
	<table>
		<tr>
			<td>Name :</td>
			<td>{{$admin['name']}}</td>
		</tr>
		<tr>
			<td>Username :</td>
			<td>{{$admin['username']}}</td>
		</tr>
		<tr>
			<td>Email : </td>
			<td>{{$admin['email']}}</td>
		</tr>
	</table>
@endsection