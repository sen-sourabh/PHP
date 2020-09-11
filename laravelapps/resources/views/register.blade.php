@include('includes.header')
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
			<div class="jumbotron">
					<h1>Register</h1><br>
					<form method="POST" action="{{ url('/register') }}">
						<!-- {{ csrf_field() }} -->
						@csrf
						@if(count($errors) > 0)
							@foreach($errors->all() as $error)
								<div class="alert alert-danger">{{ $error }}</div>
							@endforeach
						@endif

						@if(session('response'))
							<div class="alert alert-success">
								{{ session('response') }}
							</div>
						@endif
						<input class="form-control" type="text" name="name" placeholder="Name"/><br>
						<input class="form-control" type="email" name="email" placeholder="Email"/><br>
						<input class="form-control" type="password" name="pass" placeholder="Password"/><br>
						<input class="form-control" type="text" name="number" placeholder="Phone Number"/><br>
						<!-- <div class="custom-file">
					        <input type="file" class="custom-file-input" name="image" id="inputGroupFile02">
					        <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
					    </div><br><br> -->
						<input class="btn btn-outline-primary" type="submit" name="save" value="Save"/><br>
					</form>
				</div>
			</div>
		</div>
	</div>
@include('includes.footer')