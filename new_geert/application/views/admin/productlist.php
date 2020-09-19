	<div class="col-sm-10 col-sm-offset-2 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Product List</li>
			</ol>
		</div><!--/.row-->
		<div id="ordermessage">
		</div>

		<div class="productde">
			<div class="">
				<div class="row">
					<div class="table-responsive">
						<table class="table">
							  <thead>
							    <tr>
							      <th scope="col">#</th>
							      <th scope="col">Image</th>
							      <th scope="col">Title</th>
							      <th scope="col">SKU</th>
							      <th scope="col">Stock</th>
							      <th scope="col">Price</th>
							      <th scope="col">Categories</th>
							      <th scope="col">Date</th>
							    </tr>
							  </thead>
							  <tbody>
							  <?php 
							  	foreach ($productarr as $productList) {
							  ?>
							 <tr>
							 	<th scope="row">
									<div class="custom-control custom-checkbox">
								 		 <input type="checkbox" class="custom-control-input" id="customCheck1">
									</div>
								</th>
							 	<td>
							 		<img src="<?php echo base_url(); ?>assets/product/<?php echo $productList->product_img;  ?>" class="img-thumbnail"" width="40">	
							 	</td>
							 	<td>
							 		
							 			<?php echo  $productList->product_title; ?>	
									<br/>
							 			<a href="<?php echo base_url(); ?>admin/productdetail?ProductID=<?php echo $productList->product_id; ?>" class="small-link"> Edit </a>	| 
							 			<a href="<?php echo base_url(); ?>admin/productlist?deleteID=<?php echo $productList->product_id; ?>" class="small-link"> Delete </a>	
							 	</td>
							 	<td><?php echo  $productList->product_sku; ?></td>
							 	<td><?php echo  $productList->Product_Stock; ?></td>
							 	<td><?php echo  $productList->product_price; ?></td>
							 	<td><?php echo  $productList->product_cat; ?></td>
							 	<td>Published <br/>
							 		<?php 	
							 				$originalDate = $productList->dateTime;
											echo $newDate = date("Y-m-d", strtotime($originalDate));
									?>
	                            </td>
							

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
