@extends('layout.adminbackend')
@section('content')
   
  
  <h2> Edit Post </h2>
   <div class="container">
	  <div class="row">
	  <div class="col-md-3"></div>
	  <div class="col-md-6">

		@foreach($postdata as $post)
	    <form class="form-signin" name="frmlogin" action="/user/updatepostadmin" method="post">
        <label for="posttitle" class="sr-only">Post Title</label>
        <input type="text" id="posttitle" name="posttitle" class="form-control" placeholder="Post Title" value="{{ $post->posttitle}}">
		<div class="error">{{ $errors->first('posttitle') }}</div>
		<br/>
        <label for="inputPassword" class="sr-only">Content</label>
        <textarea rows="20" cols="20" id="content" name="content" class="form-control" placeholder="Enter Content" >
		{{$post->postdata}}
		</textarea>
		<div class="error">{{ $errors->first('content') }}</div>
		<br/>
		
		<br/>
		 {{ csrf_field() }}
		 <input type="hidden" name="postid" id="postid" value="{{$post->post_id}}">
        <input type="submit" name="submit" id="submit" class="btn btn-lg btn-primary btn-block" value="Update Post">
      </form>
		@endforeach
    </div>
	<div class="col-md-3"></div>	
    </div>
    </div>
@endsection