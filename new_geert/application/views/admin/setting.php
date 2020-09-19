
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Setting</li>
			</ol>


		</div><!--/.row-->
		
		<?php 
			if(isset($message)){
				print_r($message);
			}
		?>
		<div class="panel panel-default">

					<div class="panel-heading">Change Password</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" action="<?php echo base_url(); ?>admin/setting" method="post">
								<div class="form-group">
									<label>Old Password</label>
									<input type="password" class="form-control" name="password" required>
								</div>
								<div class="form-group">
									<label>New Password</label>
									<input type="password" class="form-control" name="newpass" required>
								</div>
								<div class="form-group">
									<label>Confirm password</label>
									<input type="password" class="form-control" name="confpassword" required>
								</div>
								<button type="submit" class="btn btn-primary">Submit Button</button>
								<button type="reset" class="btn btn-default">Reset Button</button>
								
							</form>
						</div>
						<div class="col-md-6">
							
							
						</div>
							
						</div>
					</div>
	
	</div>	<!--/.main-->
	

	<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/chart.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/chart-data.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/easypiechart.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/easypiechart-data.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>