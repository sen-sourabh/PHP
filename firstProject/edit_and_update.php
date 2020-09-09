<?php
include_once("confige.php");

$Id = $_GET['Id'];
$result = mysqli_query($connection,"SELECT * FROM firstInsert WHERE id = $Id");

while($row = mysqli_fetch_array($result)){
	$username = $row['username'];
	$email = $row['email'];
	$password = $row['password'];
	$gender = $row['gender'];
	$date = $row['date'];
	$phone = $row['phone'];
	$skills = $row['skills'];
	$skill = explode(', ',(string)$skills);
	$country = $row['country'];
	$old_image = $row['image'];
	
	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>firstProject/edit_and_update.php</title>
	<meta name="viewport" cotent="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/indexstyle.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/animate.min.css">
	<script type="text/javascript" src="js/wow.min.js"></script> -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
<body>
	
		<center id="center">
			<form action="" method="post" enctype="multipart/form-data">	
				<div id="slidetext">
					<fieldset class="wow swing" style="animation-duration: 2s;">
					<legend><h1> UPDATE VALUES </h1></legend>
					
						<input class="input" type="text" name="username" placeholder="Username" value="<?php echo $username;?>" required="required"/>
						
						<input class="input" type="email" name="email" placeholder="Email" value="<?php echo $email;?>" required="required"/>
						
						<input class="input" type="password" name="password" placeholder="Password" value="<?php echo $password;?>" required="required"/>
						
						<h4>Gender</h4>
						<div class="radiobtn">
							<input class="radiobtns" type="radio" name="gender" required="required" <?php if($gender=='male'){ echo "checked";}?> value="Male"/> <span>Male</span> 
							<input class="radiobtns" type="radio" name="gender" required="required" <?php if($gender=='Female'){ echo "checked";}?> value="Female"/> <span>Female</span>
							<input class="radiobtns" type="radio" name="gender" required="required" <?php if($gender=='Other'){ echo "checked";}?> value="Other"/> <span>Other</span>
						</div>

						<input class="input" type="date" name="date" value="<?php echo $date;?>" required="required"/>

						<input class="input" type="text" name="phone" placeholder="Phone Number" value="<?php echo $phone;?>" required="required"/>
						<br>

						<h4>Skills</h4>
						<div class="checkboxbtn" required="required">
							<input type="checkbox" name="skills[]" <?php if(in_array("HTML",$skill)){echo "checked";}?> value="HTML"/> <span>HTML</span>
							<input type="checkbox" name="skills[]" <?php if(in_array("CSS",$skill)){echo "checked";}?> value="CSS"/> <span>CSS</span>
							<input type="checkbox" name="skills[]" <?php if(in_array("PHP",$skill)){echo "checked";}?> value="PHP"/> <span>PHP</span>
							<input type="checkbox" name="skills[]" <?php if(in_array("Wordpress",$skill)){echo "checked";}?> value="Wordpress"/> <span>Wordpress</span>
							<input type="checkbox" name="skills[]" <?php if(in_array("MySQL",$skill)){echo "checked";}?> value="MySQL"/> <span>MySQL</span>
						</div>	


						<select class="selectlist" name="country" placeholder="Country">
							<option <?php if($country=='India'){ echo "selected";}?>>India</option>
							<option <?php if($country=='China'){ echo "selected";}?>>China</option>
							<option <?php if($country=='Srilanka'){ echo "selected";}?>>Srilanka</option>
							<option <?php if($country=='Russia'){ echo "selected";}?>>Russia</option>
						</select>

						
						<input type="file" name="image_file" value="<?php echo $old_image;?>" style="width:260px;color:white;margin-top:10px;margin-bottom: 10px;font-size: 16px;cursor: pointer;"/><?php echo $old_image;?>
						
						<!-- <input type="hidden" name="id" value="<?php //echo $_GET['id'];?>"> -->
						<button type="submit" name="update" value="submit"> Update Values </button>
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
if(isset($_POST['update']))
{
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$gender = $_POST['gender'];
	$date = $_POST['date'];
	$phone = $_POST['phone'];
	$skills = $_POST['skills'];
	$skill = implode(', ',(array)$skills);
	$country = $_POST['country'];



	if($_FILES['image_file']['name'])
	{
		$image_name = $_FILES['image_file']['name'];
		$tempname = $_FILES['image_file']['tmp_name'];
		move_uploaded_file($tempname,"img/$image_name");
	}
	else
	{
		$image_name = $old_image;
	}	

	//Validation For Inserted Values by Users
	if(empty($username) || empty($email) || empty($password) || empty($gender) || empty($date) || empty($phone) || empty($skill) || empty($country))
	{
		echo "<script>window.alert('Please Fill All Fields');</script>";
	}
	else
	{	
		//For Insert Values Into the Database
		mysqli_query($connection,"UPDATE firstInsert SET username='$username', email='$email', password='$password', gender='$gender', date='$date', phone='$phone', skills='$skill', country='$country', image='$image_name' WHERE Id=$Id");
		
		//DATA SUBMITTED SUCCESSFULLY
		echo "<script>window.alert('data successfully updated');</script>";
		//echo "<script>window.location='http://localhost/phpdoc/firstProject/index.php'</script>";
		header("Locaton: http://localhost/phpdoc/firstProject/viewdata.php");
	}

}
?>