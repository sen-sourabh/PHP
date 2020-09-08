<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	body{
		margin: 0px;
	}
		.alert-info {
	    	color: black!important;
	    }
	</style>
</head>
<body>

<?php
	include('conn.php');
	if(isset($_POST['show'])){
		?>
		<table class = "table table-bordered table-hover table-striped alert-info">
			<thead>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Image</th>
				<th>Action</th>
			</thead>
				<tbody>
					<?php
						$quser=mysqli_query($conn,"select * from `user`");
						while($urow=mysqli_fetch_array($quser)){
							?>
								<tr>
									<td><?php echo $urow['firstname']; ?></td>
									<td><?php echo $urow['lastname']; ?></td>
									<td><?php echo $urow['email']; ?></td>
									<td><?php echo $urow['phone']; ?></td>
									<td><img src="img/<?php echo $urow['image'];?>" width="50px" height="50px"/></td>
									<td><button class="btn btn-success" data-toggle="modal" data-target="#edit<?php echo $urow['userid']; ?>"><span class = "glyphicon glyphicon-pencil"></span> Edit</button> | <button class="btn btn-danger delete" value="<?php echo $urow['userid']; ?>"><span class = "glyphicon glyphicon-trash"></span> Delete</button>
									<?php include('edit_modal.php'); ?>
									</td>
								</tr>
							<?php
						}
 
					?>
				</tbody>
			</table>
		<?php
	} 
?>

</body>
</html>