<?php
require("config.php");
include "qrlib/qrlib.php";
$id = $_GET['id'];
$result = mysqli_query($con,"SELECT * FROM user WHERE id='$id'");
while($row = mysqli_fetch_array($result))
{
	$email = $row['email'];
	$pass = $row['password'];
	$created_date = $row['date'];

	$qrcode = $row['booking'];
	$qrImgName = "QR_Code_".rand(101,99999999);

	$qrs = QRcode::png($qrcode,"Qrimg/$qrImgName.png","H","3","3");
    $qrimage = $qrImgName.".png";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>User's Information</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style>
		.card
		{
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}
	</style>
</head>
<body style="margin-top: 3%; background-color: #f1f1f1;">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<center>
					<div class="card">
						<img src="Qrimg/<?php echo $qrimage;?>" alt="<?php echo $qrimage;?>"/>
						<div class="card-body">
							<p><?php echo $created_date;?></p>
							<p><?php echo $email;?></p>
							<p><?php echo $pass;?></p>
						</div>
					</div>
				</center>
			</div>
		</div>
	</div>
</body>
</html>