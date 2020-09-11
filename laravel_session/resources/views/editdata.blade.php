@include('includes.header')

<div class="container">
	<div class="row">
		<div class="col-lg-4">
			<h1>Client Register</h1>
		@foreach($client as $row)
			<form method="POST" action="{{ url('/edit') }}">
				@csrf
				@if(count($errors) > 0)
					@foreach($errors->all() as $error)
						<div class="alert alert-dismissible alert-warning">
							<strong>Warning!</strong>
							{{ $error }}						
						</div>
					@endforeach
				@endif
				<input type="hidden" name="id" value="{{ session()->get('info')[0]->id }}"/>
				<div class="form-group">
				  	<label class="col-form-label" for="inputDefault">Name</label>
				  	<input value="{{ $row->name }}" name="name" type="text" class="form-control" placeholder="Name" id="inputDefault">
				</div>
				<div class="form-group">
				  	<label class="col-form-label" for="inputDefault">Email</label>
				  	<input readonly value="{{ $row->email }}" name="email" type="email" class="form-control" placeholder="Email" id="inputDefault">
				</div>
				<div class="custom-control custom-radio">
				    <input type="radio" id="customRadio1" value="male" name="gender" class="custom-control-input" {{ $row->gender == 'male' ? 'checked' : ''}}>
				    <label class="custom-control-label" for="customRadio1">Male</label>
			    </div>
			    <div class="custom-control custom-radio">
				    <input type="radio" id="customRadio2" value="female" name="gender" class="custom-control-input" {{ $row->gender == 'female' ? 'checked' : ''}}>
				    <label class="custom-control-label" for="customRadio2">Female</label>
			    </div>
				<div class="form-group">
				  	<label class="col-form-label" for="inputDefault">Number</label>
				  	<input value="{{ $row->number }}" name="number" type="text" class="form-control" placeholder="Number" id="inputDefault">
				</div>
				<div class="form-group">
				  	<label class="col-form-label" for="inputDefault">Date of Birth</label>
				  	<input value="{{ $row->dob }}" name="dob" type="date" class="form-control" id="inputDefault">
				</div>
				<div class="form-group">
				  	<label class="col-form-label" for="inputDefault">City</label>
				  	<input value="{{ $row->city }}" name="city" type="text" class="form-control" placeholder="City" id="inputDefault">
				</div>
				<div class="form-group">
				  	<label class="col-form-label" for="inputDefault">Pincode</label>
				  	<input value="{{ $row->pincode }}" name="pincode" type="text" class="form-control" placeholder="Pincode" id="inputDefault">
				</div>
				<div class="form-group">
				  	<label class="col-form-label" for="inputDefault">State</label>
				  	<input value="{{ $row->state }}" name="state" type="text" class="form-control" placeholder="State" id="inputDefault">
				</div>				
				<div class="form-group">
				  	<label class="col-form-label" for="inputDefault">Country</label>
				  	<input value="{{ $row->country }}" name="country" type="text" class="form-control" placeholder="Country" id="inputDefault">
				</div>
				<div class="form-group">
				  	<input name="edit" type="submit" class="btn btn-outline-primary" value="Update"/>
				</div>
			</form>
		@endforeach
		</div>
	</div>
</div>

@include('includes.footer')