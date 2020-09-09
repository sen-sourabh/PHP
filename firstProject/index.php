<!DOCTYPE html>
<html>
<head>
	<title>firstProject/index.php</title>
	<meta name="viewport" cotent="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/indexstyle.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/animate.min.css"> -->
	<!-- <script type="text/javascript" src="js/wow.min.js"></script> -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
<body>
	
		<center id="center">
			<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data">	
				<div id="slidetext">
					<fieldset class="wow swing" style="animation-duration: 2s;">
					<legend><h1> ADD VALUES </h1></legend>
					
						<input class="input" type="text" name="username" placeholder="Username" required="required"/>
						
						<input class="input" type="email" name="email" placeholder="Email" required="required"/>
						
						<input class="input" type="password" name="password" placeholder="Password" required="required"/>
						
						<h4>Gender</h4>
						<div class="radiobtn">
							<input class="radiobtns" type="radio" name="gender" required="required" value="Male"/> <span>Male</span> 
							<input class="radiobtns" type="radio" name="gender" required="required" value="Female"/> <span>Female</span>
							<input class="radiobtns" type="radio" name="gender" required="required" value="Other"/> <span>Other</span>
						</div>

						<input class="input" type="date" name="date" required="required"/>

						<input class="input" type="text" name="phone" placeholder="Phone Number" required="required"/>
						<br>

						<h4>Skills</h4>
						<div class="checkboxbtn" required="required">
							<input type="checkbox" name="skills[]" value="HTML"/> <span>HTML</span>
							<input type="checkbox" name="skills[]" value="CSS"/> <span>CSS</span>
							<input type="checkbox" name="skills[]" value="PHP"/> <span>PHP</span>
							<input type="checkbox" name="skills[]" value="Wordpress"/> <span>WORDPRESS</span>
							<input type="checkbox" name="skills[]" value="MySQL"/> <span>MYSQL</span>
						</div>	


						<select class="selectlist" name="country" placeholder="Country">
							<option>India</option>
							<option>China</option>
							<option>Srilanka</option>
							<option>Russia</option>
						</select>

						
						<input type="file" name="image_file" value="upload_image" required="required" style="width:260px;color:white;margin-top:10px;margin-bottom: 10px;font-size: 16px;cursor: pointer;"/>
						
						<button type="submit" name="submit" value="submit"> Add Values </button>
						<br>
						<a href="index.php" title="Insert">INSERT |</a><a href="viewdata.php" title="View Table">VIEW TABLE
					</fieldset>
				</div>
			</form>
		</center>
	</div>

<script src="js/wow.min.js"></script>
<script>
    new WOW().init();
</script>


</body>
</html>

<?php
include_once("confige.php");
if(isset($_POST['submit']))
{
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$gender = $_POST['gender'];
	$date = $_POST['date'];
	$phone = $_POST['phone'];
	$skills = $_POST['skills'];
	$skill = implode(', ',(array)$skills);
	$country =  $_POST['country'];
	$image_name = $_FILES['image_file']['name'];
	$tempname = $_FILES['image_file']['tmp_name'];
	move_uploaded_file($tempname,"img/$image_name");

	//Validation For Inserted Values by Users
	if(empty($username) || empty($email) || empty($password) || empty($gender) || empty($date) || empty($phone) || empty($skill) || empty($country) || empty($image_name))
	{
		echo "<script>window.alert('Please Fill All Fields');</script>";
	}
	else
	{	
		//For Insert Values Into the Database
		mysqli_query($connection,"insert into firstInsert (username,email,password,gender,date,phone,skills,country,image) values ('$username','$email','$password','$gender','$date','$phone','$skill','$country','$image_name')");
		
		//DATA SUBMITTED SUCCESSFULLY
		echo "<script>window.alert('data successfully submited');</script>";
		//echo "<script>window.location='http://localhost/phpdoc/firstProject/index.php'</script>";
		header('Locaton: http://localhost/phpdoc/firstProject/viewdata.php');
	}
}
?>