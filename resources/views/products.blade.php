@extends('layout.sitepage')  

@section('content')
<div class="container text-center">
  <h3>List of Products in our Shop</h3>
  @if(session('success'))

<div class="alert alert-success">
    {{ session('success') }}
</div>

@endif
  <!-- Cart List -->
  <div class="row">
  @if(session('cart'))
            <center>
            <table border="1">
            <tr>
              <th>Product</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Action</th>
              <!-- <th>Checkout</th> -->
            </tr>
            @foreach(session('cart') as $id => $details)
                <tr>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="{{ $details['image'] }}" width="100" height="100" class="img-responsive"/></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['title'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">${{ $details['price'] }}</td>
                    <td data-th="Quantity">{{ $details['quantity'] }}</td>

                    <td class="actions" data-th="">
                        <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash-o"></i></button>
                    </td>
                </tr>
            @endforeach
            <a href="{{ url('/checkout') }}" class="btn btn-lg btn-success pull-right">Checkout</a>
            </table>
            
            </center>
        @endif    
  </div>
  
  <br>
  <div class="row">   
    @foreach ($products as $product)
		<div class="col-sm-4">
      <p><strong>{{ $product->title }}</strong></p><br>
      <img src="bandmember.jpg" alt="Random Name" width="255" height="255">
      <p>{{ $product->price }}</p>
      <a class="btn btn-primary btn-small" href="{{ url('/product/addtocart/'.$product->id) }}" id="">Add to Cart</a>
    </div>
	@endforeach

     
  </div>
</div>
@endsection