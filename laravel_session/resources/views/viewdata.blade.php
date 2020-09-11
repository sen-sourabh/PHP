@include('includes.header')
<style>
	.del_form { width: 76px; }
	.del_btn { width: 70px; }
	.act { display: flex; }
</style>
<div class="container-fluid">
	<div class="row">
		<h3>{{ session()->get('info')[0]->name }}</h3>&emsp;|&emsp;<h3><a href="{{ url('/logout') }}">Logout</a></h3>
		<table class="table table-hover">
			<thead>
			    <tr>
			      	<th scope="col">Name</th>
			      	<th scope="col">Email</th>
			      	<th scope="col">Gender</th>
			      	<th scope="col">Number</th>
			      	<th scope="col">Date of Birth</th>
			      	<th scope="col">City</th>
			      	<th scope="col">Pincode</th>
			      	<th scope="col">State</th>
			      	<th scope="col">Country</th>
			      	<th scope="col">Status</th>
			      	<th scope="col">Join Date</th>
			      	<th scope="col">Update Date</th>
			      	<th scope="col">Actions</th>
			    </tr>
			</thead>
			<tbody>
				@foreach($client as $row)
				    <tr class="table-active">
				      	<th scope="row">{{ $row->name }}</th>
				      	<td>{{ $row->email }}</td>
				      	<td>{{ $row->gender }}</td>
				      	<td>{{ $row->number }}</td>
				      	<td>{{ $row->dob }}</td>
				      	<td>{{ $row->city }}</td>
				      	<td>{{ $row->pincode }}</td>
				      	<td>{{ $row->state }}</td>
				      	<td>{{ $row->country }}</td>
				      	<td>
				      		@if($row->status == 1)
				      			<form class="del_form" method="POST" action="{{ url('/inactive') }}">
					      			@csrf
									<input type="hidden" name="act" value="{{ $row->id }}"/>
									<input type="submit" class="btn btn-sm btn-outline-success del_btn" name="acti" value="Active"/>
								</form>
				      		@else
				      			<form class="del_form" method="POST" action="{{ url('/active') }}">
					      			@csrf
									<input type="hidden" name="inact" value="{{ $row->id }}"/>
									<input type="submit" class="btn btn-sm btn-outline-info del_btn" name="inacti" value="Inactive"/>
								</form>
							@endif
				      	</td>
				      	<td>{{ $row->created_at }}</td>
				      	<td>{{ $row->updated_at }}</td>
				      	<td>
				      		<div class="act">
					      		<form class="del_form" method="POST" action="{{ url('/update') }}">
					      			@csrf
									<input type="hidden" name="ed" value="{{ $row->id }}"/>
									<input type="submit" class="btn btn-sm btn-outline-warning del_btn" name="edit" value="Edit"/>
								</form> | &nbsp;
						      	<form class="del_form" method="POST" action="{{ url('/delete') }}">
						      		@csrf
									<input type="hidden" name="del" value="{{ $row->id }}"/>
									<input type="submit" class="btn btn-sm btn-outline-danger del_btn" name="delete" value="Delete"/>
								</form>
							</div>
				      	</td>
				    </tr>
				@endforeach
			</tbody>
		</table> 
	</div>
</div>

@include('includes.footer')