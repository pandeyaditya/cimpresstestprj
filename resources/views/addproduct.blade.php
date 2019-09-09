@extends('layouts.sitepage')
	  <div class="row">
	  <div class="col-md-3"></div>
	  <div class="col-md-6">
		@if (session('invalid_login'))
			<div class="alert alert-danger">
				{{ session('invalid_login') }}
			</div>
        @endif
        
        <br>
		@if (session('productstatus'))
            <div class="alert alert-success">
                {{ session('productstatus') }}
            </div>
        @endif
	    <form class="form-signup" name="frmsignup" action="/user/saveproduct" method="post">
        <h2 class="form-signup-heading">Add Product</h2>
        
        <p>
            <label>Product Name : </label>
            <input type="text" class="form-control" name="product_name" id="product_name">
        </p>       

        <p>
            <label>Product Category : </label>
            <input type="text" class="form-control" name="product_category" id="product_category">
        </p>       

        <p>
            <label>Product Description : </label>
            <input type="text" class="form-control" name="product_description" id="product_description">
        </p>       

        <p>
            <label>Product Image : </label>
            <input type="file" class="form-control" name="product_image" id="product_image">
        </p>       

        <p>
            <label>Product Price : </label>
            <input type="text" class="form-control" name="product_price" id="product_price">
        </p>       
		
		<br/>
		 {{ csrf_field() }}
        <input type="submit" name="submit" id="submit" class="btn btn-lg btn-primary btn-block" value="Add Category">
       
      </form>

    </div>
	<div class="col-md-3"></div>	
    </div>
    </div>
