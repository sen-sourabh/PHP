<?php
include("config.php");
$result = mysqli_query($con,"SELECT * FROM users");
?>
<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"> -->
</head>
<body>
<h3>All Registrations</h3>
<table class="table table-stripped table-hover">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Email</th>
		<th>DOB</th>
		<th>Image</th>
		<th>Create Date</th>
		<th>Actions</th>
	</tr>
	<?php
		while($row = mysqli_fetch_array($result))
		{
	?>
	<tr>
		<td><?php $id = $row['id']; echo $id;?></td>
		<td><?php echo $row['name'];?></td>
		<td><?php echo $row['email'];?></td>
		<td><?php echo $row['dob'];?></td>
		<td><img src="img/<?php echo $row['image'];?>" alt="img" style="width:100px;height:100px;"></td>
		<td><?php echo $row['create_date'];?></td>
		<td>
			<form method="post">
				<input type="hidden" id="delete_id<?php echo $id;?>" name="delete_id" value="<?php echo $id;?>"/>
				<a href="javascript:;" id="delete<?php echo $id;?>">DELETE</a>
			</form>
			 | 
			<form method="post">
				<input type="hidden" id="update_id<?php echo $id;?>" name="update_id" value="<?php echo $id;?>"/>
				<a href="javascript:;" id="update<?php echo $id;?>">UPDATE</a>
			</form>
		</td>
		<script type="text/javascript">
			$("#delete<?php echo $id;?>").on('click',function(){
				var id = document.getElementById("delete_id<?php echo $id;?>").value;
				$.ajax({
	    			type: 'POST',
	    			url: 'delete.php',
	    			async: false,
		            data:{
		            	id: id
		            },
		            success: function(){
		            	show();
		            }
	    		});
			});
		</script>
		<script type="text/javascript">

			$("#update<?php echo $id;?>").on('click',function(){
				var id = document.getElementById("update_id<?php echo $id;?>").value;
				alert(id);
				$.ajax({
	    			type: 'POST',
	    			url: 'update.php',
	    			async: false,
		            data:{
		            	id: id
		            },
		            success: function(){
		            	$("#update_form").html(response);
		            	// show();
		            }
	    		});
			});
		</script>
	</tr>
	<?php
		}
	?>
</table>
</body>
</html>