@include('includes.header')

<div class="container">
	<div class="row">
		<div class="col-lg-4">
			<h1>Client Login</h1>
			<form method="POST" action="{{ url('/login') }}">
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
				  	<label class="col-form-label" for="inputDefault">Email</label>
				  	<input name="email" type="email" class="form-control" placeholder="Email" id="inputDefault">
				</div>
				<div class="form-group">
				  	<label class="col-form-label" for="inputDefault">Password</label>
				  	<input name="password" type="password" class="form-control" placeholder="Password" id="inputDefault">
				</div>
				<div class="form-group">
				  	<input name="login" type="submit" class="btn btn-outline-primary" value="Login"/>
				</div>
			</form>
		</div>
	</div>
</div>

@include('includes.footer')