@include('includes.header')

<div class="container">
	<div class="row">
		<div class="col-lg-4">
			<h1>Client Register</h1>
			<form method="POST" action="{{ url('/save') }}">
				@csrf
				@if(count($errors) > 0)
					@foreach($errors->all() as $error)
						<div class="alert alert-dismissible alert-warning">
							<strong>Warning!</strong>
							{{ $error }}						
						</div>
					@endforeach
				@endif
				@if(session('response'))
					<div class="alert alert-dismissible alert-primary">
						<strong>Well Done!</strong>
						{{ session('response') }}						
					</div>
				@endif
				<div class="form-group">
				  	<label class="col-form-label" for="inputDefault">Name</label>
				  	<input name="name" type="text" class="form-control" placeholder="Name" id="inputDefault">
				</div>
				<div class="form-group">
				  	<label class="col-form-label" for="inputDefault">Email</label>
				  	<input name="email" type="email" class="form-control" placeholder="Email" id="inputDefault">
				</div>
				<div class="form-group">
				  	<label class="col-form-label" for="inputDefault">Password</label>
				  	<input name="password" type="password" class="form-control" placeholder="Password" id="inputDefault">
				</div>
				<div class="custom-control custom-radio">
				    <input type="radio" id="customRadio1" value="male" name="gender" class="custom-control-input">
				    <label class="custom-control-label" for="customRadio1">Male</label>
			    </div>
			    <div class="custom-control custom-radio">
				    <input type="radio" id="customRadio2" value="female" name="gender" class="custom-control-input">
				    <label class="custom-control-label" for="customRadio2">Female</label>
			    </div>
				<div class="form-group">
				  	<label class="col-form-label" for="inputDefault">Number</label>
				  	<input name="number" type="text" class="form-control" placeholder="Number" id="inputDefault">
				</div>
				<div class="form-group">
				  	<label class="col-form-label" for="inputDefault">Date of Birth</label>
				  	<input name="dob" type="date" class="form-control" id="inputDefault">
				</div>
				<div class="form-group">
				  	<label class="col-form-label" for="inputDefault">City</label>
				  	<input name="city" type="text" class="form-control" placeholder="City" id="inputDefault">
				</div>
				<div class="form-group">
				  	<label class="col-form-label" for="inputDefault">Pincode</label>
				  	<input name="pincode" type="text" class="form-control" placeholder="Pincode" id="inputDefault">
				</div>
				<div class="form-group">
				  	<label class="col-form-label" for="inputDefault">State</label>
				  	<input name="state" type="text" class="form-control" placeholder="State" id="inputDefault">
				</div>				
				<div class="form-group">
				  	<label class="col-form-label" for="inputDefault">Country</label>
				  	<input name="country" type="text" class="form-control" placeholder="Country" id="inputDefault">
				</div>
				<div class="form-group">
				  	<input name="save" type="submit" class="btn btn-outline-primary" value="Save"/>
				</div>
			</form>
		</div>
	</div>
</div>

@include('includes.footer')