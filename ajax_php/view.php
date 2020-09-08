<?php
include("config.php");
$result = mysqli_query($con,"SELECT * FROM users");
?>
<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<style type="text/css">
		.fade:not(.show) {
		     opacity: 1; 
		}
	</style>
</head>
<body>
	<input type="text" name="search" id="search" placeholder="Search"/>
<table class="table table-stripped table-hover">
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Email</th>
		<th>Password</th>
		<th>Date</th>
		<th>Status</th>
		<th>Actions</th>
	</tr>
<?php 
	while($row = mysqli_fetch_array($result)){
?>
	<tr class="single">
		<td><?php echo $row['users_id'];?></td>
		<td><?php echo $row['users_name'];?></td>
		<td><?php echo $row['users_email'];?></td>
		<td><?php echo $row['users_password'];?></td>
		<td><?php echo $row['users_date'];?></td>
		<td><?php echo $row['users_status'];?></td>
		<td>
			<button id="ed<?php echo $row['users_id']; ?>" class="btn btn-success" data-toggle="modal" data-target="#edit<?php echo $row['users_id']; ?>"> Edit</button>
			 | 
			<button class="btn btn-danger delete" id="del<?php echo $row['users_id']; ?>" value="<?php echo $row['users_id']; ?>"> Delete</button>
			<script>
				$("#del<?php echo $row['users_id']; ?>").on('click',function(){
					var id = document.getElementById("del<?php echo $row['users_id']; ?>").value;
					$.ajax({
						type: 'POST',
						url: 'delete.php',
						data: {id: id},
						success:function(){
							showuser();
						}
					});
				});
			</script>
		</td>
			<div class="modal fade" style="display:none;" id="edit<?php echo $row['users_id']; ?>" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
		    		<div class="modal-content">
						<div class="modal-header">
							<h3 class = "text-success modal-title">Update</h3>
						</div>
						<form class="form-inline">
							<div class="modal-body">
								Name: <input type="text" value="<?php echo $row['users_name']; ?>" id="name<?php echo $row['users_id']; ?>" class="form-control">
								<br><br>
								Email: &emsp;&emsp;<input type="email" value="<?php echo $row['users_email']; ?>" id="email<?php echo $row['users_id']; ?>" class="form-control">
								<br><br>
								<input type="hidden" value="<?php echo $row['users_id']; ?>" id="id<?php echo $row['users_id']; ?>" class="form-control">
							</div>
							<div class="modal-footer">
								<button id="modclose<?php echo $row['users_id']; ?>" type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button> | <button id="update<?php echo $row['users_id']; ?>" type="button" class="updateuser btn btn-success" value="<?php echo $row['users_id']; ?>"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
							</div>
						</form>
		    		</div>
		  		</div>
			</div>
			<script type="text/javascript">
				$("#ed<?php echo $row['users_id']; ?>").on('click',function(){
					$("#edit<?php echo $row['users_id']; ?>").show();
				});

				$("#modclose<?php echo $row['users_id']; ?>").on('click',function(){
					$("#edit<?php echo $row['users_id']; ?>").hide();
				});
			</script>
			<script type="text/javascript">
			$("#update<?php echo $row['users_id']; ?>").on('click',function(){
					var name = document.getElementById('name<?php echo $row['users_id']; ?>').value;
					var email = document.getElementById('email<?php echo $row['users_id']; ?>').value;
					var id = document.getElementById('id<?php echo $row['users_id']; ?>').value;
					$.ajax({
						type: 'POST',
						url: 'update.php',
						data:{
							name: name,
							email: email,
							id: id,
							update: 1
						},
						async: false,
						success:function(){
							showuser();
						}
					});
					$("#edit<?php echo $row['users_id']; ?>").model('toggle');
				});
			</script>
	</tr>
<?php
	}
?>
</table>
<script>
$(document).ready(function(){
 $("#search").on("keyup", function() {
   var value = $(this).val().toLowerCase();
   $(".single").filter(function() {
     $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
   });
 });
});
</script>
</body>
</html>