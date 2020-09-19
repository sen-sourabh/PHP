<?php // print_r($productdetail); ?>

	<div class="col-sm-10 col-sm-offset-2 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Add Product</li>
			</ol>
		</div><!--/.row-->
		<form action="" method="Post" name="editProduct" enctype="multipart/form-data">
		<input type="hidden" class="form-control" name="addproduct" placeholder="Product Name" value="addproduct">
		<div class="panel panel-default articles">
			<div class="">
				<div class="row">
					<div class="col-lg-8">
						<div class="mybts">
							
							<div class="col-lg-12">
								<div class="form-group">
									<label>Product Title</label>
									<input type="text" class="form-control" name="product_title" placeholder="Product Name" value="">
								</div>
							</div>

							<div class="col-lg-12">
								<div class="form-group">
									<textarea name="product_desc" class="jqte-test"></textarea>
								</div>
							</div>

								<div class="prods">
									<div class="col-lg-3">
										<div class="form-group">
									    	<label for="text">SKU</label>
									    	<input type="text" class="form-control" name="product_sku" value="">
									  	</div>
									</div>
									<div class="col-lg-3">
										<div class="form-group">
									    	<label for="text">Price</label>
									    	<input type="text"  name="product_price" class="form-control" value="">
									  	</div>
									</div>
									<div class="col-lg-3">
										<div class="form-group">
									   		 <label >Stock</label>
									   		 <select  class="form-control"  name="Product_Stock">
									   		 	<option value="In stock" >In stock</option>
									   		 	<option value="Out stock" >Out stock</option>
									   		 </select>
									   		
									  	</div>
									</div>
									<div class="col-lg-3">
										<div class="form-group">
										    <label >Status</label>
										    <select  class="form-control" name="product_status">
									   		 	<option value="Active" >Active</option>
									   		 	<option value="InActive" >InActive</option>
									   		 </select>
										   
									  	</div>
									</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="mybts">
						<div class="col-lg-12">
							<div class="form-group">
								<label>Product Category</label>
								 <select  class="form-control" name="cat_id">
						   		 	<?php  foreach ($category as $Catvalue) { ?>
						   		 		<option value="<?php echo $Catvalue->cat_id; ?>" > 
						   		 			<?php echo $Catvalue->cat_title; ?>		
						   		 		</option>>	
						   		 	<?php }  ?>
						   		 </select>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="box">
									<!-- <input type="image" src="<?php echo base_url(); ?>assets/product/<?php //echo $productdetail[0]->product_img;  ?>" class="img-thumbnail" width="200px"/> -->
								    <input type="file" id="my_file" style="display: none;" />
									<div class="custom-file">
								  		<input type="file" class="custom-file-input" id="customFile" name="product_img">
									</div>
								</div>
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
