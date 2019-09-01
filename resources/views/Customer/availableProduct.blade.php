@extends('Customer.layout.main')
@section('content')

<script src="/js/jquery.min.js"></script>

	<h1>Available Product</h1>
	<hr>
  <form id="sidebar-search">
            <div class="input-group">
              <input type="text" id="search" name="search" placeholder="Search...">
            </div><br>
  </form>


	<table border="1" class="table table-striped table-bordered">
		<thead class="text-center">
			<td><b>Product name</b></td>
			<td><b>Price</b></td>
			<td><b>Description</b></td>
			<td><b>Action</b></td>
		</thead>
    <tbody class="text-center">
      
    </tbody>
		<!-- @foreach($product as $value)
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
 -->
    <script>
    $(document).ready(function(){
     fetch_customer_data();

     function fetch_customer_data(query = '')
     {
      $.ajax({
       url:"{{ route('customer.searchProduct') }}",
       method:'GET',
       data:{query:query},
       dataType:'json',
       success:function(data)
       {
        $('tbody').html(data.table_data);
        //$('#total_records').text(data.total_data);
       }
      })
     }

     $(document).on('keyup', '#search', function(){
      var query = $(this).val();
      fetch_customer_data(query);
     });
    });
    </script>


@endsection