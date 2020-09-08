<?php
include("config.php");
$id = $_POST['id'];
$result = mysqli_query($con,"SELECT * FROM users WHERE id='$id'");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body>
<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h3>Update Register</h3>
				<?php
					while($row = mysqli_fetch_array($result))
					{
				?>
				<form method="post" id="upform" enctype="multipart/form-data">
					<input type="hidden" name="upregi" value="<?php echo $row['id'];?>">
					<input value="<?php echo $row['name'];?>" id="name" class="form-control" type="text" name="name" placeholder="Name" required="required"/>
					<br>
					<input value="<?php echo $row['email'];?>" id="email" class="form-control" type="email" name="email" placeholder="Email" required="required"/><br>
					<input value="<?php echo $row['password'];?>" id="pass" class="form-control" type="password" name="pass" placeholder="Password" required="required"/><br>
					<input value="<?php echo $row['dob'];?>" id="dob" class="form-control" type="date" name="dob" required="required"/><br>
					<input id="image" class="form-control" type="file" name="image" required="required"/><br>
					<input type="hidden" name="old_img" value="<?php echo $row['image'];?>"/>
					<input id="upreg" class="btn btn-success submitBtn" type="submit" name="submit" value="Update"/><br>
				</form>
				<?php
					}
				?>	
			</div>
			<div class="col-md-8">
				<div id="show"></div>
			</div>
		</div>
	</div>
	<script>
		$("#upform").on('submit', function(e){
	        e.preventDefault();
	        $.ajax({
	            type: 'POST',
	            url: 'update.php',
	            data: new FormData(this),
	            contentType: false,
	            cache: false,
	            processData:false,
	            success: function(){
	            	var confirm = 1;
	            	if(confirm == 1){
	            		show();
	                }	                
	            }
	        });
	    });
	</script>
</body>
</html>