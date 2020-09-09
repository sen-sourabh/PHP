<div class="col-sm-10 col-sm-offset-2 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#">
				<em class="fa fa-home"></em>
			</a></li>
			<li class="active">Banners</li>
		</ol>
	</div><!--/.row-->
	<div class="row">
		<div class="col-lg-12">
			<h3>Video Banner
			<?php
				if(empty($top_banner_data))
				{
			?>
			<button type="button" onclick="location.href='<?php echo base_url();?>Admin/add_top_banner';" class="btn btn-primary"> Add </button>
			<?php
				}
			?>
			</h3>
		</div>
	</div><!--/.row-->

	<div class="productde">
		<div class="">
			<div class="row">
				<div class="table-responsive">
					<table class="table">
						  <thead>
						    <tr>
						      <th scope="col">Image</th>
						      <th scope="col">Title</th>
						      <th scope="col">Video</th>
						      <th scope="col">Date</th>
						    </tr>
						  </thead>
						  <tbody>
						  	<?php
						  		if($top_banner_data)
						  		{
						  			foreach($top_banner_data as $top_ban)
						  	?>
						 <tr>
						 	<td>
						  		<img src="<?php echo base_url(); ?>assets/img/<?php echo $top_ban->video_back_image; ?>" class="img-thumbnail"" width="40">	
						 	</td>
						 	<td>
						 		<?php echo $top_ban->video_title;?>
						 		<br/>
						 		<a href="<?php echo base_url(); ?>admin/edit_Top_Banner?top_banner_id=<?php echo $top_ban->video_id;?>" class="small-link"> Edit </a>	| 
						 		<a href="<?php echo base_url(); ?>admin/delete_Top_Banner?top_banner_id=<?php echo $top_ban->video_id;?>" class="small-link"> Delete </a>	
						 	</td>
						 	<td><?php echo $top_ban->video; ?>
						  		<!-- <video style="width: 40px;"  id="video">
						            <source src="<?php echo base_url(); ?>sound/<?php echo $top_ban->video; ?>" type="video/mp4" class="img-thumbnail" style="width: 40px;"/>
						            Your browser does not support the video tag.
						        </video> -->	
						 	</td>						 	
						 	<td>Published <br/>
						 		<?php echo $top_ban->video_date;?>
                            </td>
						

						 </tr>
						  <?php
						  	}
						  	else
						  	{
						  ?>
						  <tr>
						  	<td colspan="4">Top Banner Data Not Available.</td>
						  </tr>
						  <?php
						  	}
						  ?>
						  	
						  </tbody>
						</table>
						 <div id="wait" style="display:none;width:69px;height:89px;position:absolute;top:60%;left:47%;padding:2px;"><img src='<?php echo base_url(); ?>assets/images/demo_wait.gif' width="64" height="64" /><br>Loading..</div>
					</div>
				</div>
			</div>
	</div>
</div><!--/.main-->

<div class="col-sm-10 col-sm-offset-2 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h3>Shop Banner
			<?php
				if(empty($shop_banner_data))
				{
			?>
			<button type="button" onclick="location.href='<?php echo base_url();?>Admin/add_shop_Banner';" class="btn btn-primary"> Add </button>
			<?php
				}
			?>
			</h3>
		</div>
	</div><!--/.row-->
				
	<div class="productde">
		<div class="">
			<div class="row">
				<div class="table-responsive">
					<table class="table">
						  <thead>
						    <tr>
						    	<th scope="col">Image</th>
							    <th scope="col">Title</th>
							    <th scope="col">Description</th>
							    <th scope="col">Date</th>
						    </tr>
						  </thead>
						  <tbody>
						  	<?php
						  		if($shop_banner_data)
						  		{
						  			foreach($shop_banner_data as $shop_ban)
						  	?>
						 <tr>
						 	<td><img src="<?php echo base_url();?>assets/img/<?php echo $shop_ban->shop_banner_back_image;?>" onerror="this.src='http://localhost/geert/assets/admin/img/no-image.jpg'" class="img-thumbnail" width="40"></td>
						 	<td>
						 		<?php echo $shop_ban->shop_banner_title;?>
						 		<br/>
						 		<a href="<?php echo base_url(); ?>admin/edit_Shop_Banner?ban_id=<?php echo $shop_ban->shop_banner_id;?>" class="small-link"> Edit </a>	| 
						 		<a href="<?php echo base_url(); ?>admin/delete_Shop_Banner?ban_id=<?php echo $shop_ban->shop_banner_id;?>" class="small-link"> Delete </a>	
						 	</td>
						 	<td><?php echo $shop_ban->shop_banner_desc;?></td>
						 	<td>Published <br/>
						 		<?php echo $shop_ban->shop_banner_date;?>
                            </td>
						 </tr>
						  <?php
						  	}
						  	else
						  	{
						  ?>
						  <tr>
						  	<td colspan="4">Bottom Banner Not Available.</td>
						  </tr>
						  <?php
						  	}
						  ?>
						  	
						  </tbody>
						</table>
						 <div id="wait" style="display:none;width:69px;height:89px;position:absolute;top:60%;left:47%;padding:2px;"><img src='<?php echo base_url(); ?>assets/images/demo_wait.gif' width="64" height="64" /><br>Loading..</div>
					</div>
				</div>
			</div>
	</div>
</div><!--/.main-->

<div class="col-sm-10 col-sm-offset-2 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h3>Diploma Banner
			<?php
				if(empty($bottom_banner_data))
				{
			?>
			<button type="button" onclick="location.href='<?php echo base_url();?>Admin/add_bottom_banner';" class="btn btn-primary"> Add </button>
			<?php
				}
			?>
			</h3>
		</div>
	</div><!--/.row-->
				
	<div class="productde">
		<div class="">
			<div class="row">
				<div class="table-responsive">
					<table class="table">
						  <thead>
						    <tr>
						    	<th scope="col">Image</th>
							    <th scope="col">Title</th>
							    <th scope="col">Description</th>
							    <th scope="col">Button Text</th>
							    <th scope="col">Date</th>
						    </tr>
						  </thead>
						  <tbody>
						  	<?php
						  		if($bottom_banner_data)
						  		{
						  			foreach($bottom_banner_data as $bottom_ban)
						  	?>
						 <tr>
						 	<td><img src="<?php echo base_url();?>assets/images/<?php echo $bottom_ban->bottom_banner_image;?>" onerror="this.src='http://localhost/geert/assets/admin/img/no-image.jpg'" class="img-thumbnail" width="40"></td>
						 	<td>
						 		<?php echo $bottom_ban->bottom_banner_title;?>
						 		<br/>
						 		<a href="<?php echo base_url(); ?>admin/edit_Bottom_Banner?ban_id=<?php echo $bottom_ban->bottom_banner_id;?>" class="small-link"> Edit </a>	| 
						 		<a href="<?php echo base_url(); ?>admin/delete_Bottom_Banner?ban_id=<?php echo $bottom_ban->bottom_banner_id;?>" class="small-link"> Delete </a>	
						 	</td>
						 	<td><?php echo $bottom_ban->bottom_banner_desc;?></td>
						 	<td><?php echo $bottom_ban->bottom_banner_btn_text;?></td>
						 	<td>Published <br/>
						 		<?php echo $bottom_ban->bottom_banner_date;?>
                            </td>
						 </tr>
						  <?php
						  	}
						  	else
						  	{
						  ?>
						  <tr>
						  	<td colspan="5">Shop Banner Not Available.</td>
						  </tr>
						  <?php
						  	}
						  ?>
						  	
						  </tbody>
						</table>
						 <div id="wait" style="display:none;width:69px;height:89px;position:absolute;top:60%;left:47%;padding:2px;"><img src='<?php echo base_url(); ?>assets/images/demo_wait.gif' width="64" height="64" /><br>Loading..</div>
					</div>
				</div>
			</div>
	</div>
</div><!--/.main-->


	<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/chart.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/chart-data.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/easypiechart.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/easypiechart-data.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/custom.js"></script>
	<script type="text/javascript">
		$("input[type='image']").click(function() {
	    $("input[id='my_file']").click();
		});
	</script>
	<script>
		$('.jqte-test').jqte();
		
		// settings of status
		var jqteStatus = true;
		$(".status").click(function()
		{
			jqteStatus = jqteStatus ? false : true;
			$('.jqte-test').jqte({"status" : jqteStatus})
		});
	</script>

	
</body>
</html>
