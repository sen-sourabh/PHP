<!DOCTYPE html>
<head>
	<title>Ajax Form</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<!-- Latest compiled AngularJs -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

<style type="text/css">
#PreviewPicture
{
	width: 240px;
	height: 150px;
	background-position: center center;
	background-size: cover;
	/*-webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);*/
	display: inline-block;
}
</style>
</head>
<body>
<div class="container" id="container">
	<a class="btn btn-link" id="log">Login</a>/<a class="btn btn-link" id="reg">Registration</a>
	<br><br>
	<div>
		<div>
			<form ng-app="" action="" id="logform" method="post" name="logform" style="width:30%;">
				<input class="form-control" type="text" name="username" required="required" placeholder="Username"/><br>
				<input class="form-control" type="email" name="email" required="required" placeholder="Email" ng-model="useremail"/>
				<span ng-show="logform.email.$error.email">Not a valid e-mail address</span><br>
				<input class="form-control" type="password" name="pass" required="required" placeholder="Password"/><br>
				<input class="btn btn-success" type="submit" name="submit" value="Submit"/>
			</form>
		</div>
		<div>
			<form action="" enctype="multipart/form-data" id="regform" method="post" style="width:30%;">
				<input class="form-control" type="text" name="username" id="username" required="required" placeholder="Username"/><br>
				<input class="form-control" type="email" name="email" id="email" required="required" placeholder="Email"/><br>
				<input class="form-control" type="password" name="pass" id="pass" required="required" placeholder="Password"/><br>
				<input class="form-control" type="text" name="phone" id="phone" required="required" placeholder="Phone"/><br>
				<div id="PreviewPicture"></div>
				<input id="FileUpload" type="file" name="image" id="image" class="image" onchange="ImagePreview()"/><br><br>
				<input class="btn btn-success" type="submit" id="register" name="register" value="Submit"/>
			</form>
		</div>
	</div>
</div>

<script>
		$(document).ready(function(){
			$("#regform").hide();
		    
		});

		$(document).ready(function(){
		  $("#log").click(function(){
		  	$("#regform").slideUp();
		    $("#logform").slideDown();
		  });
		});
	
	
		$(document).ready(function(){
		  $("#reg").click(function(){
		  	 $("#logform").slideUp();
		    $("#regform").slideDown();
		  });
		});	

		function ImagePreview() 
		{ 
			var PreviewIMG = document.getElementById('PreviewPicture'); 
			var UploadFile = document.getElementById('FileUpload').files[0]; 
			var ReaderObj  = new FileReader(); 
			ReaderObj.onloadend = function () 
			{ 
			   PreviewIMG.style.backgroundImage  = "url("+ ReaderObj.result+")";
			} 
			if (UploadFile)
			{ 
				ReaderObj.readAsDataURL(UploadFile);
				$(document).ready(function(){
					$("#FileUpload").click(function(){
						$("#PreviewPicture").show();
					});
				});
			} 
			else 
			{ 
			    PreviewIMG.style.backgroundImage  = "";
			} 
		}




</script>
</body>
</html>
<?php 
include("config.php");
session_start();
if(isset($_POST['submit']))
{
	$name = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['pass'];

	$query = mysqli_query($con,"SELECT * FROM user WHERE name='$name' AND email='$email' AND password='$password'");

	$num = mysqli_num_rows($query);
	if($num == 1)
	{	
		$_SESSION['username'] = $name;
		header("location: http://localhost/phpdoc/formajax/home.php");
	}
	else
	{	
		echo "<script>alert('Invalid username and password.')</script>";
		header("location: http://localhost/phpdoc/formajax/index.php");
	}

}
else if(isset($_POST['register']))
{
	$name = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['pass'];
	$phone = $_POST['phone'];
	$image = $_FILES['image']['name'];
	$temp_name = $_FILES['image']['tmp_name'];
	move_uploaded_file($temp_name,"img/$image");


	$query = mysqli_query($con,"INSERT INTO user VALUES ('','$name','$email','$password','$phone','$image')");
	header("location: http://localhost/phpdoc/formajax/index.php");
}
?>