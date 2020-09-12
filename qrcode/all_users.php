<?php
require("config.php");
$result = mysqli_query($con,"SELECT * FROM user");
?>
<!DOCTYPE html>
<html>
<head>
	<title>All User</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Email</th>
							<th>Password</th>
							<th>Date</th>
							<th>View</th>
						</tr>
					</thead>
					<tbody>
						<?php
							while($row = mysqli_fetch_array($result))
							{
						?>
						<tr>
							<td><?php echo $row['email'];?></td>
							<td><?php echo $row['password'];?></td>
							<td><?php echo $row['date'];?></td>
							<td><a class="btn btn-danger" href="view_code.php?id=<?php echo $row['id'];?>">View</td>
						</tr>
						<?php
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>