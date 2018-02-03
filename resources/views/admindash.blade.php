@extends('layout.adminbackend')
@section('content')
  <h2>Admin Dashboard</h2>
  <br>
  <p><h4>List of Users</h4></p>
    <br>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>User Id</th>
        <th>UserName</th>
        <th>Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($userdata as $user)
		<tr>
			<td>{{ $user->id }} </td>
			<td>{{ $user->username }} </td>
			<td>{{ $user->firstname. ' '. $user->lastname }}</td>
			<td><a href="#">Edit</a>&nbsp;/&nbsp;<a href="#">View</a>&nbsp;/&nbsp;<a href="#">Delete</a></td>
		</tr>
	@endforeach
    </tbody>
  </table>
@endsection