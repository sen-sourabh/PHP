<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>

		<?php
			$con = mysqli_connect("localhost","root","","javascript_form");		
		?>
		<table class="table table-bordered table-hover table-striped">
			<thead>
				<th>Image</th>
				<th>Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Action</th>
			</thead>
				<tbody>
					<?php
						$quser=mysqli_query($con,"select * from user");
						while($urow=mysqli_fetch_array($quser)){
					?>
						<tr>
							<td><img src="img/<?php echo $urow['image'];?>" style="width:80px;height:80px;border:1px solid lightgray;border-radius: 50%;"></td>
							<td><?php echo $urow['name']; ?></td>
							<td><?php echo $urow['email']; ?></td>
							<td><?php echo $urow['phone']; ?></td>
							<td><button class="btn btn-success" data-toggle="modal" data-target="#edit<?php echo $urow['userid']; ?>"><span class = "glyphicon glyphicon-pencil"></span> Edit</button> | <button id="del" class="btn btn-danger delete" value="<?php echo $urow['id'];?>"> Delete</button>
							</td>
						</tr>
					<?php
						}
					?>
				</tbody>
			</table>
</body>
</html>