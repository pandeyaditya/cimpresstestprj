@extends('layout.userbackend')
@section('content')
     
  <h2> Add New Address </h2>
   <div class="container">
	  <div class="row">
	  <div class="col-md-3"></div>
	  <div class="col-md-6">
	    <form class="form-signin" name="frmlogin" action="/user/insertpost" method="post">
		
		<div class="form-group">
			<label for="posttitle" class="sr-only">Address Title</label>
			<input type="text" id="posttitle" name="posttitle" class="form-control" placeholder="Post Title"  autofocus>
			<div class="error">{{ $errors->first('posttitle') }}</div>
		</div>

		<div class="form-group">
			<label for="posttitle" class="sr-only">Contact Name</label>
			<input type="text" id="posttitle" name="posttitle" class="form-control" placeholder="Post Title"  autofocus>
			<div class="error">{{ $errors->first('posttitle') }}</div>
		</div>

		<div class="form-group">
			<label for="posttitle" class="sr-only">Address one</label>
			<input type="text" id="posttitle" name="posttitle" class="form-control" placeholder="Post Title"  autofocus>
			<div class="error">{{ $errors->first('posttitle') }}</div>
		</div>

		<div class="form-group">
			<label for="posttitle" class="sr-only">Address two</label>
			<input type="text" id="posttitle" name="posttitle" class="form-control" placeholder="Post Title"  autofocus>
			<div class="error">{{ $errors->first('posttitle') }}</div>
		</div>

		<div class="form-group">
			<label for="posttitle" class="sr-only">Address three</label>
			<input type="text" id="posttitle" name="posttitle" class="form-control" placeholder="Post Title"  autofocus>
			<div class="error">{{ $errors->first('posttitle') }}</div>
		</div>

		<div class="form-group">
			<label for="posttitle" class="sr-only">Pincode</label>
			<input type="text" id="posttitle" name="posttitle" class="form-control" placeholder="Post Title"  autofocus>
			<div class="error">{{ $errors->first('posttitle') }}</div>
		</div>

		<div class="form-group">
			<label for="posttitle" class="sr-only">City</label>
			<input type="text" id="posttitle" name="posttitle" class="form-control" placeholder="Post Title"  autofocus>
			<div class="error">{{ $errors->first('posttitle') }}</div>
		</div>

		<div class="form-group">
			<label for="posttitle" class="sr-only">State</label>
			<input type="text" id="posttitle" name="posttitle" class="form-control" placeholder="Post Title"  autofocus>
			<div class="error">{{ $errors->first('posttitle') }}</div>
		</div>

		<div class="form-group">
			<label for="posttitle" class="sr-only">Country</label>
			<input type="text" id="posttitle" name="posttitle" class="form-control" placeholder="Post Title"  autofocus>
			<div class="error">{{ $errors->first('posttitle') }}</div>
		</div>


		<br/>
		 {{ csrf_field() }}
        <input type="submit" name="submit" id="submit" class="btn btn-lg btn-primary btn-block" value="Add Post">
      </form>

    </div>
	<div class="col-md-3"></div>	
    </div>
    </div>
@endsection