@extends('layout.userbackend')
@section('content')
   
  
  <h2> View Post </h2>
   <div class="container">
	  <div class="row">
	  <div class="col-md-3"></div>
	  <div class="col-md-6">

		@foreach($postdata as $post)
	    
        <label for="posttitle" class="sr-only">Post Title</label>
		<p class="heading"> Post Title </p>
        <div>{{ $post->posttitle}}</div>
		
		<br/>
		<p class="heading"> Post Content </p>
        <div>
			{{$post->postdata}}
		</div>
		<br/><br/>
			<a href="/user/dashboard" class="btn btn-primary">Go back</a>
		<br/>
		 
		@endforeach
    </div>
	<div class="col-md-3"></div>	
    </div>
    </div>
@endsection