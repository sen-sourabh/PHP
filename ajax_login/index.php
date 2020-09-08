<?php 
include("config.php");
if(isset($_POST['login']))
{	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$check = mysqli_query($con,"SELECT * FROM users WHERE email='$email' AND password='$pass'");
	if($check->num_rows > 0)
	{
		echo "success";
		$_SESSION['email'] = $email;
		setcookie("AJAX_login","login_ajax",time()+86400*30);
	}
	else
	{
		echo "failed";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ajax Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<form id="login_form" method="post" action="index.php">
	<input class="form-control" type="email" name="email" id="email" placeholder="Email" required="required" />
	<input class="form-control" type="password" name="pass" id="pass" placeholder="Password" required="required" />
	<input class="btn btn-warning" type="button" name="login" value="Login" id="login"/>
</form>

<script>
	$("#login").on('click',function(){
		var email = $("#email").val();
		var pass = $("#pass").val();
		if(email == "" || pass == "")
		{
			alert("Please Check inputs");
		}
		$.ajax({
			url: 'index.php',
			type: 'POST',
			data: {login: 1, email: email, pass: pass},
			success:function(response){
				$("#response").html(response);
			}
		});
		return false;
	});
</script>
<div id="response"></div>
</body>
</html>