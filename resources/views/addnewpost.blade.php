@extends('layout.userbackend')
@section('content')
   
  
  <h2> Add New Post </h2>
   <div class="container">
	  <div class="row">
	  <div class="col-md-3"></div>
	  <div class="col-md-6">
	    <form class="form-signin" name="frmlogin" action="/user/insertpost" method="post">
        <label for="posttitle" class="sr-only">Post Title</label>
        <input type="text" id="posttitle" name="posttitle" class="form-control" placeholder="Post Title"  autofocus>
		<div class="error">{{ $errors->first('posttitle') }}</div>
		<br/>
        <label for="inputPassword" class="sr-only">Content</label>
        <textarea rows="20" cols="20" id="content" name="content" class="form-control" placeholder="Enter Content" >
		</textarea>
		<div class="error">{{ $errors->first('content') }}</div>
		<br/>
		
		<br/>
		 {{ csrf_field() }}
        <input type="submit" name="submit" id="submit" class="btn btn-lg btn-primary btn-block" value="Add Post">
      </form>

    </div>
	<div class="col-md-3"></div>	
    </div>
    </div>
@endsection