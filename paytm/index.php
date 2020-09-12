<?php
	session_start();
	$_SESSION['user'] = "Sourabh";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Paytm</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<h4>Select Amount</h4>

<form class="form-inline" method="post" action="checkout.php">
	<div class="form-group">
		<div class="col-md-3">
			<select name="price" class="form-control">
				<option value="100">100</option>
				<option value="200">200</option>
			</select>
		</div>
	</div>
	<input class="btn btn-primary" type="submit" name="pay" value="Pay Now"/>
</form>
</body>
</html>