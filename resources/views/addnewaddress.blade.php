@extends('layout.adminbackend')
@section('content')
     
  <h2> Add New Address </h2>
   <div class="container">
	  <div class="row">
	  <div class="col-md-3"></div>
	  <div class="col-md-6">
	    <form class="form-signin" name="frmlogin" action="/user/insertaddress" method="post">
		
		<div class="form-group">
			<label for="addresstitle" class="sr-only">Address Title</label>
			<input type="text" id="addresstitle" name="addresstitle" class="form-control" placeholder="Address Title"  autofocus>
			<div class="error">{{ $errors->first('addresstitle') }}</div>
		</div>

		<div class="form-group">
			<label for="contactname" class="sr-only">Contact Name</label>
			<input type="text" id="contactname" name="contactname" class="form-control" placeholder="Contact Name"  autofocus>
			<div class="error">{{ $errors->first('contactname') }}</div>
        </div>
        
        <div class="form-group">
			<label for="contactnum" class="sr-only">Contact Number</label>
			<input type="text" id="contactnum" name="contactnum" class="form-control" placeholder="Contact Number"  autofocus>
			<div class="error">{{ $errors->first('contactnum') }}</div>
		</div>

		<div class="form-group">
			<label for="addressone" class="sr-only">Address one</label>
			<input type="text" id="addressone" name="addressone" class="form-control" placeholder="Address 1"  autofocus>
			<div class="error">{{ $errors->first('addressone') }}</div>
		</div>

		<div class="form-group">
			<label for="addresstwo" class="sr-only">Address two</label>
			<input type="text" id="addresstwo" name="addresstwo" class="form-control" placeholder="Address 2"  autofocus>
			<div class="error">{{ $errors->first('addresstwo') }}</div>
		</div>

		<div class="form-group">
			<label for="addressthree" class="sr-only">Address three</label>
			<input type="text" id="addressthree" name="addressthree" class="form-control" placeholder="Address 3"  autofocus>
			<div class="error">{{ $errors->first('addressthree') }}</div>
		</div>

		<div class="form-group">
			<label for="pincode" class="sr-only">Pincode</label>
			<input type="text" id="pincode" name="pincode" class="form-control" placeholder="Pincode"  autofocus>
			<div class="error">{{ $errors->first('pincode') }}</div>
		</div>

		<div class="form-group">
			<label for="city" class="sr-only">City</label>
			<input type="text" id="postticitytle" name="city" class="form-control" placeholder="City"  autofocus>
			<div class="error">{{ $errors->first('city') }}</div>
		</div>

		<div class="form-group">
			<label for="state" class="sr-only">State</label>
			<input type="text" id="state" name="state" class="form-control" placeholder="State"  autofocus>
			<div class="error">{{ $errors->first('state') }}</div>
		</div>

		<div class="form-group">
			<label for="country" class="sr-only">Country</label>
			<input type="text" id="country" name="country" class="form-control" placeholder="Country"  autofocus>
			<div class="error">{{ $errors->first('country') }}</div>
		</div>


		<br/>
		 {{ csrf_field() }}
        <input type="submit" name="submit" id="submit" class="btn btn-lg btn-primary btn-block" value="Add Address">
      </form>

    </div>
	<div class="col-md-3"></div>	
    </div>
    </div>
@endsection