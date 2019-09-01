@extends('Customer.layout.main')
@section('content')
	<h1> Change Password</h1>
	<hr>
	
<form method="post">
<table>
	<tr>
		<td>Username: </td>
		<td>{{$custo['username']}}</td>
	</tr>
	<tr>
		<td>Password: </td>
		<td><input type="text" name="password" value="{{$custo['password']}}"></td>
		<div>
			{{ $errors->first('password')}}
		</div>
	</tr>	
	<tr>
		<td></td>
		<td><input type="submit" name="save" value="Update"></td>
	</tr>
</form>
@endsection