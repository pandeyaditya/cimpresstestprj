@extends('layout.sitepage')
@section('content')
<div class="container">
<div class="card shopping-cart">
            <div class="card-header bg-dark text-light">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                Cart Page
                <div class="clearfix"></div>
            </div>
            <div class="card-body">
            <?php $total_price = 0; ?>
            @if(session('cart'))
            <?php $cart[] = $request->session()->get('cart') ?> 
            @foreach(session('cart') as $id => $details)

                 <!-- PRODUCT -->
                 <div class="row">
                        <div class="col-12 col-sm-12 col-md-2 text-center">
                                <img class="img-responsive" src="http://placehold.it/120x80" alt="prewiew" width="120" height="80">
                        </div>
                        <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                            <h4 class="product-name"><strong>{{ $details['title'] }} </strong></h4>
                            <h4>
                                <small>{{ $details['description'] }}</small>
                            </h4>
                        </div>
                        <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                            <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                                <h6><strong>{{ $details['price'] }} <span class="text-muted">x</span></strong></h6>

                                <?php $total_price += $details['price']; ?>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4">
                                <div class="quantity">
                                    <!-- <input type="button" value="+" class="plus"> -->
                                    <!-- <input type="number" step="1" max="99" min="1" value="{{ $details['quantity'] }}" title="Qty" class="qty"
                                           size="4"> -->
                                            <!-- <input type="button" value="-" class="minus"> -->
                                    <h6><strong>{{ $details['quantity'] }} <span class="text-muted">x</span></strong></h6>
                                   
                                </div>
                            </div>
                            <div class="col-2 col-sm-2 col-md-2 text-right">
                                <button type="button" class="btn btn-outline-danger btn-xs">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </div>
            @endforeach

            <br/><hr>
            <p style="float:left;"><h4>Enter Shipping Details</h4></p>
            <form method="post" action="{{ url('/confirmorder') }}">
            <label> Address : </label><input type="text" class="form-control" name="address" id="address"><br/>
            <label> City : </label><input type="text"  class="form-control" name="city" id="city"><br/>
            <label> State : </label><input type="text"  class="form-control" name="state" id="state"><br/>
            <label> Mobile : </label> <input type="text"  class="form-control" name="mobile" id="mobile"><br/>

                <label> Payment Method : </label>

                <!-- <input type="radio" name="cash_on_delivery" value="1">Cash On Delivery -->
                <select class="form-control" name="payment_method">
                    <option value="cash">Cash On Delivery</option>
                </select><br/>
                
                <input type="hidden" value="" name="cart[]" value="$cart">
                <label>Total price:  </label> 
                <input type="text" class="form-control" readonly value="$123123"><br/>
                {{ csrf_field() }}
                <input type="hidden" value="" name="total_price" id="total_price">
                <input type="submit" class="btn btn-success btn-lg" value="Confirm Order">
            </form>



            
        @endif


        <!-- Select Address -->



        <!-- Select SHipping Method -->



                   
                    <hr>
                    <!-- END PRODUCT -->
            </div>
            <div class="card-footer">
                
                <div class="pull-right" style="margin: 10px">
                    <a href="" class="btn btn-success pull-right">Checkout</a>
                    <div class="pull-right" style="margin: 5px">
                        Total price: <b>{{ $total_price }}</b>
                    </div>
                </div>
            </div>
        </div>
   
</div>
@endsection