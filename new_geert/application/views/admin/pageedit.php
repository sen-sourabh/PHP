<?php // print_r($productdetail); ?>

	<div class="col-sm-10 col-sm-offset-2 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Page </li>
			</ol>
		</div><!--/.row-->
        <?php 
			foreach ($pageDetail as $pageList) {
		?>
		<form action="" method="Post" name="editProduct" enctype="multipart/form-data" accept-charset="utf-8">
			<input type="hidden" name="editPage" value="editPage">
			<div class="panel panel-default articles">
				<div class="">
					<div class="row">
						<div class="col-lg-9">
							<div class="mybts">
								
								<div class="col-lg-12">
									<div class="form-group">
										<label> Title</label>
										<input type="text" class="form-control" name="pageTitle" placeholder="Product Name" value="<?php echo  $pageList->page_title; ?>">
									</div>
								</div>
								<div class="col-lg-12">
									
									<div class="form-group">
										<label>Description</label>
										<textarea name="pageDescription" class="jqte-test" height="500"><?php echo  $pageList->page_desc; ?></textarea>
									</div>
								</div>
							
							</div>
						</div>
						<div class="col-lg-3">
							<div class="mybts">
							<div class="col-lg-12">
								<div class="form-group">
									<label>Type</label>
									 <select  class="form-control" name="pageType">
							   		 	<option value="Page" <?php if($pageList->page_type=='Page'){ echo "selected"; } ?> > Page </option>
							   		 	<option value="Blog" <?php if($pageList->page_type=='Blog'){ echo "selected"; } ?> > Blog </option>		
							   		 </select>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									
									<div class="box">
										<label>Image</label>
										
										<?php if($pageList->page_image !=""){  ?>

										<img src="<?php echo base_url(); ?>uploads/<?php echo $pageList->page_image;  ?>" class="img-thumbnail" />
										<?php } ?>

										<label class="btn btn-default">
											<input type="file" hidden="" name="pageImage">
										</label>
									</div>
								</div>
							</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="panel-body">
								<div class="form-group">
									<button type="submit" class="btn btn-primary" style="float: right;">Save </button>
								</div>
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

	<style type="text/css">
		.jqte_editor {
			min-height: 400px;
		}
		input[type="file"] {
		    width: 100%;
		}
		.jqte{
			    box-shadow: none;
		}
	</style>
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
