<?php 
	require("header.php");

	$ppts_id = $_GET['ppts_id'];
	$query_rate = mysqli_query($con,"SELECT ppts.*, rating.* FROM ppts, rating WHERE ppts.ppts_id = rating.rating_ppts_id AND rating.rating_ppts_id='$ppts_id' AND rating.rating_user_email='$useremail'");
	
	// echo "<pre>";
	if(mysqli_num_rows($query_rate) == 0)
	{
		$query_ppts = mysqli_query($con,"SELECT * FROM ppts WHERE ppts_id='$ppts_id'");		
	}
	// else
	// {
	// 	print_r(mysqli_fetch_assoc($query_rate));
	// }
	
	// exit();
?>

<style type="text/css">
	/*Rating system*/
.grey
{
	color:#000;
}
.warning
{
	color:orange;
}
.default
{
	color: lightgray;
}
.fa-star
{	
	font-size:1.5vw;
	cursor:pointer;
}
.pre-grey
{
	color:#000;
}
.pre-warning
{
	color:orange;
}
.pre-default
{
	color: lightgray;
}

</style>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
$count=0;
if(mysqli_num_rows($query_rate) > 0)
{	
	$count = $count + 1;
	while($row = mysqli_fetch_assoc($query_rate))
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
			<div class="row">
				<div class="col-md-12">
					<form method="post">
						<input type="hidden" name="ppts_id" value="<?php echo $row['rating_ppts_id'];?>"/>
						<input type="hidden" name="ppts_email" value="<?php echo $row['rating_user_email'];?>"/>
						<div class="col-md-12">
							<span class="fa fa-star warning" aria-hidden="true"></span>
						  	<span class="fa fa-star default grey" aria-hidden="true"></span>
						  	<span class="fa fa-star default grey" aria-hidden="true"></span>
						  	<span class="fa fa-star default grey" aria-hidden="true"></span>
						  	<span class="fa fa-star default grey" aria-hidden="true"></span>
							<input type="hidden" required="required" class="form-control" id="rating" name="rate" value="1">

							(<strong>Previous Rating :</strong>
							<?php
								$averageRating = round($row['rating_number'], 0);
								for ($i = 1; $i <= 5; $i++) 
								{
									$ratingClass = "pre-default pre-grey";
									if($i <= $averageRating) {
										$ratingClass = "pre-warning";
									}
								?>
								<span class="fa fa-star <?php echo $ratingClass; ?>" aria-hidden="true"></span>
								
								<?php } ?>)
						</div>
						<br>
						<br>
						<div class="col-md-12">
							<input type="text" name="title" required="required" class="form-control" placeholder="Title" value="<?php echo $row['rating_title'];?>"/>
						</div>
						<br>
						<br>
						<div class="col-md-12">
							<textarea name="desc" class="form-control" required="required" placeholder="What did you like or dislike? What did you use this for?"><?php echo $row['rating_desc'];?></textarea>
						</div>
						<br>
						<br>
						<br>
						<div class="col-md-12">
							<button class="btn btn-success btn-sm">Submit</button>
						</div>
						<br>
						<br>
					</form>
				</div>
			</div>
		</div>
		<br>
		<br>
		<br>
<?php
	}
}
else
{
	while($row = mysqli_fetch_assoc($query_ppts))
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
			<div class="row">
				<div class="col-md-12">
					<form method="post">
						<input type="hidden" name="ppts_id" value="<?php echo $row['ppts_id'];?>"/>
						<input type="hidden" name="ppts_email" value="<?php echo $useremail;?>"/>
						<div class="col-md-12">
							  <span class="fa fa-star warning" aria-hidden="true"></span>
							  <span class="fa fa-star default grey" aria-hidden="true"></span>
							  <span class="fa fa-star default grey" aria-hidden="true"></span>
							  <span class="fa fa-star default grey" aria-hidden="true"></span>
							  <span class="fa fa-star default grey" aria-hidden="true"></span>
							
							<input type="hidden" required="required" class="form-control" id="rating" name="rate" value="1">
						</div>
						<br>
						<br>
						<div class="col-md-12">
							<input type="text" name="title" required="required" class="form-control" placeholder="Title"/>
						</div>
						<br>
						<br>
						<div class="col-md-12">
							<textarea name="desc" class="form-control" required="required" placeholder="What did you like or dislike? What did you use this for?"></textarea>
						</div>
						<br>
						<br>
						<br>
						<div class="col-md-12">
							<button class="btn btn-success btn-sm">Submit</button>
						</div>
						<br>
						<br>
					</form>
				</div>
			</div>
		</div>
		<br>
		<br>
		<br>
<?php
	}
}
?>
<script type="text/javascript">
	// implement start rating select/deselect
	$( ".fa-star" ).click(function() {
		if($(this).hasClass('grey')) {			
			$(this).removeClass('grey default').addClass('warning star-selected');
			$(this).prevAll('.fa-star').removeClass('grey default').addClass('warning star-selected');
			$(this).nextAll('.fa-star').removeClass('warning star-selected').addClass('grey default');			
		} else {						
			$(this).nextAll('.fa-star').removeClass('warning star-selected').addClass('grey default');
		}
		$("#rating").val($('.star-selected').length);	
	});
</script>
<?php
if(isset($_POST['ppts_id']))
{
	$ppts_id = $_POST['ppts_id'];
	$ppts_email = strip_tags($_POST['ppts_email']);
	$rate = $_POST['rate'];
	$title = strip_tags($_POST['title']);
	$desc = strip_tags($_POST['desc']);
	$create_date = date('Y-m-d H:i:s A');
	$update_date = date('Y-m-d H:i:s A');

	// echo "<pre>";
	// echo $ppts_id;
	// echo $ppts_email;
	// echo $rate;
	// echo $title;
	// echo $desc;
	// echo $create_date;
	// echo $update_date;
	// echo $count;
	// exit();

	if($count == 0)
	{
		mysqli_query($con,"INSERT INTO rating VALUES('','$ppts_id','$ppts_email','$rate','$title','$desc','$create_date','$update_date')");
	}
	else
	{
		mysqli_query($con,"UPDATE rating SET rating_number='$rate', rating_title='$title', rating_desc='$desc', rating_update_date='$update_date' WHERE rating_ppts_id='$ppts_id' AND rating_user_email='$ppts_email'");
	}
	echo "<script>window.location.href = 'document.php'</script>";
}
?>


<?php
	require("footer.php");
?>
