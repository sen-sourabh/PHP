<div class="col-sm-10 col-sm-offset-2 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Slider / Slider List</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
		<div class="col-lg-12">
			<h3>Slider
			<button type="button" onclick="location.href='<?php echo base_url();?>Admin/addslider';" class="btn btn-primary"> Add </button>
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
							  if($slider_data)
							  {
							  	foreach ($slider_data as $slide) 
							  	{	
							  		$slide_img_str = $slide->slider_img;
							  		$slide_img = explode(' ',$slide_img_str);

							  ?>
								 <tr>
								 	<td>
								 		<img src="<?php echo base_url(); ?>assets/img/<?php echo $slide_img[0];  ?>" class="img-thumbnail" onerror="this.src='http://localhost/geert/assets/admin/img/no-image.jpg'" width="40">	
								 	</td>
								 	<td>
								 		
								 			<?php echo $slide->slider_title; ?>	
										<br/>
								 			<a href="<?php echo base_url(); ?>admin/editslider?slider_id=<?php echo $slide->slider_id; ?>" class="small-link"> Edit </a>	| 
								 			<a href="<?php echo base_url(); ?>admin/deleteslider?slider_id=<?php echo $slide->slider_id; ?>" class="small-link"> Delete </a>	
								 	</td>
								 	<td><?php echo  $slide->slider_description; ?></td>
								 	<td>Published <br/>
								 		<?php 	
								 				echo $slide->slider_date;
										?>
		                            </td>
								 </tr>
							  <?php
							  	}
							  }
							  else
							  {
							  ?>
							  <tr>
							  	<td colspan="4"> No Slider Available. </td>
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
		<div id="orderList">
		</div>

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