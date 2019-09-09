@extends('layout.adminaddpage')
@section('content')     
<div class="container">
	  <div class="row">
	  <div class="col-md-3"></div>
	  <div class="col-md-6">
		@if (session('invalid_login'))
			<div class="alert alert-danger">
				{{ session('invalid_login') }}
			</div>
        @endif
        
        <br>
		@if (session('categorystatus'))
            <div class="alert alert-success">
                {{ session('categorystatus') }}
            </div>
        @endif
	    <form class="form-signup" name="frmsignup" action="/user/savecategory" method="post">
        <h2 class="form-signup-heading">Add Category</h2>
        
        <p>
            <label>Category Name : </label>
            <input type="text" class="form-control" name="categoryname" id="categoryname" placeholder="Enter Category Name">
        </p>       
		
		<br/>
		 {{ csrf_field() }}
        <input type="submit" name="submit" id="submit" class="btn btn-lg btn-primary btn-block" value="Add Category">
       
      </form>

    </div>
    <div class="col-md-3"></div>	
    @endsection