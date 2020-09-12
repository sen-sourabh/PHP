<!DOCTYPE html>
<html>
<head>
	<title>QR CODE</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<div class="row">
		<h2 align="center">You Are Welcome To Develop QR Code Generator</h2>
		<div class="col-lg-12">
			<form method="post" action="">
				<label for="email"><b>Email</b></label>
			    <input class="form-control" type="email" name="email" required/><br>
			    <label for="password"><b>Password</b></label>
			    <input class="form-control" type="password" name="password" required/><br>
			    <!-- <label for="txt"><b>Text For QR Code</b></label>
			    <input class="form-control" type="text" name="qrtext" required/><br> -->
      			<input class="btn btn-success" type="submit" value="Submit Details" name="create"><br>
  			</form>
		</div>
	</div>
</div>
</body>
</html>
<?php
require("config.php");
if(isset($_POST['create']))
{
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$created_date = date('Y-m-d');
	$status = "success";
	
    mysqli_query($con,"INSERT INTO user Values ('','$email','$pass','$status','$created_date')");
    echo "<script>window.location.href= 'all_users.php'</script>";
}
?>