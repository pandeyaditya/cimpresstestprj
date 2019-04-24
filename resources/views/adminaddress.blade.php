@extends('layout.adminbackend')
@section('content')
  <h2>Admin Address</h2>
  <br>
  <p>
    <h4>List of Address</h4>
    <span class="pull-right"><a href="addaddress" class="btn btn-success">Add Address</a></span>
  </p>
   
  <br>  <br>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Address Title</th>
        <th>Contact Name</th>
        <th>Contact Number</th>
        <th>Address 1</th>
        <th>Address 2</th>
        <th>Address 3</th>
        <th>Pincode</th>
        <th>City</th>
        <th>State</th>
        <th>Country</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($addressdata as $address)
		<tr>
			<td>{{ $address->id }} </td>
      <td>{{ $address->address_title }} </td>
      <td>{{ $address->contact_name }} </td>
      <td>{{ $address->contact_number }} </td>
      <td>{{ $address->address_1 }} </td>
      <td>{{ $address->address_2 }} </td>
      <td>{{ $address->address_3 }} </td>
      <td>{{ $address->pincode }} </td>
      <td>{{ $address->city }} </td>
      <td>{{ $address->state }} </td>
      <td>{{ $address->country }} </td>

			<td><a href="editaddress/{{$address->id}}">Edit</a>&nbsp;/&nbsp;<a href="#">View</a>&nbsp;/&nbsp;<a href="#">Delete</a></td>
		</tr>
	@endforeach
    </tbody>
  </table>
@endsection