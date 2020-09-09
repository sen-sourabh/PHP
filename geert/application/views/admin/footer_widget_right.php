<div class="col-sm-10 col-sm-offset-2 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Pages / Widget / Footer Widget Right </li>
			</ol>
		</div><!--/.row-->
		<?php
			foreach($contact_data as $row)
			{
		?>
		<form action="" method="Post" name="editcontact">
		<input type="hidden" class="form-control" name="addwidgetcontact" placeholder="Widget Name" value="addwidget">
		<div class="panel panel-default articles">
			<div class="">
				<!-- <h3>Contact Details</h3>  -->
				<div class="row">
					<div class="col-lg-8">
						<div class="mybts">
							<div class="col-lg-12">
								<div class="form-group">
									<label>Title</label>
									<input type="text" class="form-control" name="contact_title" placeholder="Title" value="<?php echo $row->widget_contact_title;?>">
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<label>Address</label>
									<input type="text" class="form-control" name="address" placeholder="Address" value="<?php echo $row->widget_contact_address;?>">
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<label>City</label>
									<input type="text" class="form-control" name="city" placeholder="City" value="<?php echo $row->widget_contact_city;?>">
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<label>State</label>
									<input type="text" class="form-control" name="state" placeholder="State" value="<?php echo $row->widget_contact_state;?>">
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<label>Country</label>
									<input type="text" class="form-control" name="country" placeholder="Country" value="<?php echo $row->widget_contact_country;?>">
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="mybts">
							<div class="col-lg-12">
								<div class="form-group">
									<label>Contact Phone</label>
									<input type="text" class="form-control" name="phone" placeholder="Phone" value="<?php echo $row->widget_contact_phone;?>"/>
								</div>
								<div class="form-group">
									<label>Contact Email</label>
									<input type="text" class="form-control" name="contact_email" placeholder="Email" value="<?php echo $row->widget_contact_email;?>"/>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="form-group">
						<button type="submit" class="btn btn-primary" style="float: right;">Save</button>
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

	
	