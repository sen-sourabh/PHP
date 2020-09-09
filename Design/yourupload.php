<?php 
	require("header.php");
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		mysqli_query($con,"DELETE FROM ppts WHERE ppts_id = '$id'");	
	}
	$query = mysqli_query($con,"SELECT ppts.*, rating.*, AVG(rating.rating_number) AS avg_rate FROM ppts LEFT JOIN rating ON ppts.ppts_id=rating.rating_ppts_id WHERE ppts.ppts_email LIKE '$useremail' GROUP BY ppts.ppts_id ORDER BY ppts.ppts_id DESC");
	// $query = mysqli_query($con,"SELECT * FROM ppts WHERE ppts_email LIKE '$useremail' ORDER BY ppts_id DESC");
	$count = mysqli_query($con,"SELECT count(*) AS count FROM ppts WHERE ppts_email LIKE '$useremail'");
	$no_row = mysqli_fetch_array($count);
	$no_of_row = $no_row['count'];
	if(isset($_GET['search_name']))
	{
		$title = $_GET['search_name'];
		$query = mysqli_query($con,"SELECT ppts.*, rating.*, AVG(rating.rating_number) AS avg_rate FROM ppts LEFT JOIN rating ON ppts.ppts_id=rating.rating_ppts_id WHERE ppts.ppts_title LIKE '%$title%' AND ppts.ppts_email LIKE '$useremail' GROUP BY ppts.ppts_id ORDER BY ppts.ppts_id DESC");
		// $query = mysqli_query($con,"SELECT * FROM ppts WHERE ppts_title LIKE '%$title%' AND ppts_email LIKE '$useremail' ORDER BY ppts_id DESC");
		$count = mysqli_query($con,"SELECT count(*) AS count_search FROM ppts WHERE ppts_title LIKE '%$title%' AND ppts_email LIKE '$useremail'");
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
			<center>
				<table class="table table-hover" style="width:97%;">
					<thead>
						<tr>
							<th>Image</th>
							<th>Title</th>
							<th>Description</th>
							<th>File</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						<?php
							while($row = mysqli_fetch_assoc($query))
							{
						?>
								<tr>
									<td>
										<img src="img/<?php echo $row['ppts_image'];?>" alt="<?php echo $row['ppts_image'];?>" style="width:50px;height:50px;border:1px solid lightgray;">
									</td>
									<td><?php echo $row['ppts_title'];?><br>
										<a href="rate_comments.php?ppts_id=<?php echo $row['ppts_id']; ?>" style="cursor:pointer;">
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
									</td>
									<td><?php echo $row['ppts_desc'];?></td>
									<td><?php echo $row['ppts_file'];?></td>
									<td>
										<a href="yourupload.php?id=<?php echo $row['ppts_id'];?>">
											<i class="far fa-trash-alt"></i>
										</a>
									</td>
								</tr>
						<?php
							}
						?>
					</tbody>
				</table>
			</center>
		</div>
	</div>
</div>


<?php
	require("footer.php");
?>