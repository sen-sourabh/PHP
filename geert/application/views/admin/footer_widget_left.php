<div class="col-sm-10 col-sm-offset-2 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Pages / Widget / Footer Widget Left </li>
			</ol>
		</div><!--/.row-->
		<?php
			foreach($about_data as $row)
			{
		?>
		<form action="" method="Post" name="editAbout" enctype="multipart/form-data">
		<input type="hidden" class="form-control" name="addwidget" placeholder="Widget Name" value="addwidget">
		<div class="panel panel-default articles">
			<div class="">
				<div class="row">
					<div class="col-lg-8">
						<div class="mybts">
							<div class="col-lg-12">
								<div class="form-group">
									<label>Title</label>
									<input type="text" class="form-control" name="about_title" placeholder="About Title" value="<?php echo $row->widget_about_title;?>">
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<textarea name="about_desc" class="jqte-test"><?php echo $row->widget_about_description;?></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="mybts">
							<div class="col-lg-12">
								<div class="form-group">
									<label>Facebook:</label>
									<input type="text" class="form-control" name="facebook" value="<?php echo $row->widget_about_facebook;?>"/>
								</div>
								<div class="form-group">
									<label>Twitter:</label>
									<input type="text" class="form-control" name="twitter" value="<?php echo $row->widget_about_twitter;?>"/>
								</div>
								<div class="form-group">
									<label>Google+:</label>
									<input type="text" class="form-control" name="google_plus" value="<?php echo $row->widget_about_google;?>"/>
								</div>
								<div class="form-group">
									<label>Skype:</label>
									<input type="text" class="form-control" name="skype" value="<?php echo $row->widget_about_skype;?>"/>
								</div>
								<div class="form-group">
									<label>Linkedin:</label>
									<input type="text" class="form-control" name="linkedin" value="<?php echo $row->widget_about_linkedin;?>"/>
								</div>
								<div class="form-group">
									<label>Instagram:</label>
									<input type="text" class="form-control" name="instagram" value="<?php echo $row->widget_about_instagram;?>"/>
								</div>
								<div class="form-group">
									<label>Pinterest:</label>
									<input type="text" class="form-control" name="pinterest" value="<?php echo $row->widget_about_pinterest;?>"/>
								</div>
								<div class="form-group">
									<label>Tumblr:</label>
									<input type="text" class="form-control" name="tumblr" value="<?php echo $row->widget_about_tumblr;?>"/>
								</div>
								<div class="form-group">
									<label>Youtube:</label>
									<input type="text" class="form-control" name="youtube" value="<?php echo $row->widget_about_youtube;?>"/>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="form-group">
						<button type="submit" class="btn btn-primary" style="float:right;">Save</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		</form>
		<?php
			}
		?>
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

	
	