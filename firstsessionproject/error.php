<!DOCTYPE html>
<html>
<head>
	<title>ERROR PAGE</title>
	<style>
		body{
			background-image: url("hero-img.png");
			background-size: 100%;
			background-attachment: fixed;
		}
		.error_page{
			margin-top: 160px;
			text-align: center;
		}
		.error_page a{
			text-decoration: none;
			color:red;
		}
		.error_page a:hover{
			color:green;
			cursor:pointer;
			transition: .035s ease-in-out;
		}
	</style>
</head>
<body>
	<center>
		<div class="error_page">
			<h1>EMAIL AND PASSWORD <br> ARE INVALID</h1>
			<h4>TRY AGAIN <a href="login.php">LOGIN...</a></h4>
		</div>
	</center>
</body>
</html>