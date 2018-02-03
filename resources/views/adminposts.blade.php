@extends('layout.adminbackend')
@section('content')
  <h2>Admin Dashboard</h2>
  <br>
  <p><h4>List of User Posts</h4></p>
    <br>
		@if (session('adminupdatestatus'))
		<div class="alert alert-success">
			{{ session('adminupdatestatus') }}
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
	@foreach ($postdata as $post)
		<tr>
			<td>{{ $post->post_id }} </td>
			<td>{{ $post->posttitle }} </td>
			<td>{{ $post->created_at }} </td>
			<td>
			
			<a href="viewpostadmin/{{$post->post_id}}" class="btn btn-info">View</a>
			<a href="editpostadmin/{{$post->post_id}}" class="btn btn-primary">Edit</a>
			<a href="deletepost/{{$post->post_id}}" class="btn btn-danger">Delete</a></td>
		</tr>
	@endforeach
      
    </tbody>
  </table>
@endsection