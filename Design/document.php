<?php 
	require("header.php");
?>
<?php
	$query = mysqli_query($con,"SELECT ppts.*, rating.*, AVG(rating.rating_number) AS avg_rate FROM ppts LEFT JOIN rating ON ppts.ppts_id=rating.rating_ppts_id GROUP BY ppts.ppts_id ORDER BY ppts.ppts_id DESC");
	// echo "<pre>";
	// print_r(mysqli_num_rows($query));
	// print_r(mysqli_fetch_assoc($query));
	// exit();
	
	$count = mysqli_query($con,"SELECT count(*) AS count FROM ppts");
	$no_row = mysqli_fetch_array($count);
	$no_of_row = $no_row['count'];
	if(isset($_GET['search_name']))
	{
		$title = $_GET['search_name'];
		$query = mysqli_query($con,"SELECT ppts.*, rating.*, AVG(rating.rating_number) AS avg_rate FROM ppts LEFT JOIN rating ON ppts.ppts_id=rating.rating_ppts_id WHERE ppts.ppts_title LIKE '%$title%' GROUP BY ppts.ppts_id ORDER BY ppts.ppts_id DESC");
		// $query = mysqli_query($con,"SELECT * FROM ppts WHERE ppts_title LIKE '%$title%' ORDER BY ppts_id DESC");
		// echo "<pre>";
		// print_r(mysqli_num_rows($query));
		// print_r(mysqli_fetch_assoc($query));
		// exit();
		$count = mysqli_query($con,"SELECT count(*) AS count_search FROM ppts WHERE ppts_title LIKE '%$title%'");
		$no_row = mysqli_fetch_array($count);
		$no_of_row = $no_row['count_search'];
	}
?>
<style>
.rate-star
{
	color:black;
}
.checked
{
	color:orange;
}
</style>
<div id="videos">
	<div class="container">
		<ul class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li>Videos (<?php echo $no_of_row;?>)</li>
		</ul>
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
				<form class="form-inline" method="get" action=" ">
					<input class="form-control text-form" type="text" name="search_name"/>
							<span class="floating-label">Search...</span>
					<button class="btn btn-primary btn-md"><i class="fas fa-search"></i>&nbsp;Search</button>
				</form>
			</div>
		</div>
		<div class="row">
			<?php
				$i=0;
				while($row = mysqli_fetch_assoc($query))
				{	
					if($i < mysqli_num_rows($query))
					{
			?>
					<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 col-12">
						<div class="flip-card">
						    <div class="flip-card-inner">
						        <div class="flip-card-front">
						            <img src="img/<?php echo $row['ppts_image'];?>">
									<p class="video-para"><i class="fas fa-play"></i>&nbsp;<?php echo substr($row['ppts_title'],0,8)."...";?><a href="videos/<?php echo $row['ppts_file'];?>" download style="color:green; float:right;"><i class="fas fa-download"></i>&nbsp;Download</a>
									<br>
									<a href="rating.php?ppts_id=<?php echo $row['ppts_id']; ?>" style="cursor:pointer;">
										<?php
											$count = 1; $max_rate = 5;
											while($count <= $max_rate)
											{
												if($count <= $row['avg_rate'])
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
									</a>
						    	</div>
						  	</div>
						</div>	
					</div>
			<?php
					}
					$i++;
				}
			?>
		</div>
	</div>
</div>

<!-- <input type="number" name="rate" min="1" max="5" required="required" class="form-control" placeholder="Rate between 1 to 5" value="<?php echo $row['rating_number'];?>"/> -->
<?php
	require("footer.php");
?>