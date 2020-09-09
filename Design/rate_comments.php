<?php 
	require('header.php');
	$ppts_id = $_GET['ppts_id'];
	$query = mysqli_query($con,"SELECT ppts.*, rating.*, signup.* FROM ppts, rating, signup WHERE ppts.ppts_id=rating.rating_ppts_id AND rating.rating_user_email=signup.signup_email AND rating.rating_ppts_id='$ppts_id'");
	// echo "<pre>";
	// print_r(mysqli_num_rows($query));
	// print_r(mysqli_fetch_assoc($query));
	// exit();
	$count = 0;
?>
<style>
.avtar
{
	width:100px;
	height:100px;
	border:1px solid lightgray;
	border-radius: 50%;
}
.fa-star
{
	font-size: 1.2vw;
}
.rate-star
{
	color:black;
}
.checked
{
	color:orange;
}
.comment-section
{
	padding:1%;
	background-color: #eeeeee;
}
</style>
<br>
<br>
<br>
<br>
<?php
if(mysqli_num_rows($query))
{
	while($row = mysqli_fetch_array($query))
	{
		if($count == 0)
		{
?>
<div class="container">	
	<div class="row">
		<div class="col-md-3">
			<img style="width:270px;height:150px;border:1px solid lightgray;" src="img/<?php echo $row['ppts_image'];?>"/>
		</div>
		<div class="col-md-9">
			<h2><?php echo $row['ppts_title'];?></h2>
			<p style="text-align: left;"><?php echo substr($row['ppts_desc'],0,200)."...  ";?><a href="#">Read More>>></a></p>
		</div>
	</div>
</div>
<br>
<br>
<div class="container">
	<h2>Comments</h2>
	<br>
	<?php
		}
	?>
	
	<div class="row comment-section">
		<div class="col-md-3">
			<?php 
				if($row['signup_gender'] == 'male')
				{
			?>
					<img class="avtar" src="images/male.png" alt="Avatar">
			<?php
				}
				else
				{
			?>
					<img class="avtar" src="images/female.png" alt="Avatar">
			<?php
				}
			?>
			<br><p style="text-align: left">
				<?php
					$count = 1; $max_rate = 5;
					while($count <= $max_rate)
					{
						if($count <= $row['rating_number'])
						{
							echo "<span class='fa fa-star checked'></span>";
						}
						else
						{
							echo "<span class='fa fa-star rate-star'></span>";
						}
						$count++;		
					}
				?>
				<br>by <?php echo $row['rating_user_email'];?><br><?php echo $row['rating_update_date'];?></p>
		</div>
		<div class="col-md-9">
			<h3><?php echo $row['rating_title'];?></h3>
			<p style="text-align: left"><?php echo $row['rating_desc'];?></p>
		</div>
	</div>
	<hr>
	<?php
			$count++;
		}
	}
	else
	{
	?>
	<div class="container">
		<div class="row">
			<h3 style="color: red; font-size: 1.5vw; font-weight: bold;">No Comments Available Yet.</h3>	
		</div>
	</div>
	<?php
	}
	?>
</div>

<br>
<br>
<br>
<br>
<br>
<?php 
	require('footer.php');
?>