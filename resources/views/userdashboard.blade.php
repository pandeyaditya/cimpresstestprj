@extends('layout.userbackend')
@section('content')
  <h2>User Posts</h2>
  
  <div>
	<a href="addpost" class="btn btn-success" style="float:right">Add New Post</a>
  </div>
  <br/>
	@if (session('status'))
		<div class="alert alert-success">
			{{ session('status') }}
		</div>
	@endif
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Post Id</th>
        <th>Post Title</th>
        <th>Posted On</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
	<?php //pr($postdata); ?>
	@foreach ($postdata as $post)
		<tr>
			<td>{{ $post->post_id }} </td>
			<td>{{ $post->posttitle }} </td>
			<td>{{ $post->created_at }} </td>
			<td>
			<a href="viewpost/{{$post->post_id}}" class="btn btn-info">View</a>
			@if($post->user_id == session('user_id'))
				<a href="editpost/{{$post->post_id}}" class="btn btn-primary">Edit</a>
			@endif	
			</td>
		</tr>
	@endforeach
      
    </tbody>
  </table>
  
@endsection