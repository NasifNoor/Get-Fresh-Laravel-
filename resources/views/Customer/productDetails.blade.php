<a href="/availableProduct" style="">Back</a>
<h1>Product Details</h1>
<hr>
<table>
	<tr>
		<td>Product Name :</td>
		<td>{{$product['name']}}</td>
	</tr>
	<tr>
		<td>Price :</td>
		<td>{{$product['price']}}</td>
	</tr>
	<tr>
		<td>Description :</td>
		<td>{{$product['description']}}</td>
	</tr>
</table><br><br>
<h1>User's Comment</h1>
<hr>
<table border="1">
	<tr>
		<td>User Name</td>
		<td>Date</td>
		<td>Comment</td>
	</tr>
	@if(count($com) > 0)
	@foreach($com as $value)
	<tr>
		<td>{{$value['Username']}}</td>
		<td>{{$value['date']}}</td>
		<td>{{$value['comment']}}</td>
	</tr>
	@endforeach
	@else
	<tr>
    	<td align="center" colspan="4">Didn,t Find any Comment</td>
    </tr>
	@endif
</table><br><br>
<h1>Comment</h1>
<hr>
<form method="post">
<table border="0">
	<tr>
		<td><textarea name='comment' type="text"></textarea></td>
	</tr>
	<td>
		<input type="submit" value="Comment">
	</td>
</table>
</form>
	
