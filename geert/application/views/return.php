<div class="my_account_area">
	<div class="container">
		<div class="row">
			<div class="my_heading">
                <h1>My Account</h1>
            </div>
		</div>
		<div class="row">
			<div class="my_account_area_in">
				<div class="my_order">
					<h3>your order was successfully submitted</h3>

					<?php 
					 foreach ($userorder as $orderu) {   
						
					?>
					<div class="my_order_bx">	
					  <h4 class="order_status">Order Product </h4>
						<ul>
							<li>Order number: <?php echo $orderu->order_id; ?></li>
						</ul>
						<?php foreach ($orderlist as $order) {    ?>
						<div class="my_order_bx_dtl">
							<div class="col-md-4 col-sm-4 col-xs-12 my_order_bx_dtl_img">
								<img src="<?php echo base_url(); ?>assets/product/<?php echo $order->images;  ?>">
							</div>
							<div class="col-md-2 col-sm-2 col-xs-12 my_order_bx_dtl_text">
								<p class="quantity"> Quantity : <?php echo $order->quantity;  ?> </p>
							</div>
							<div class="col-md-5 col-sm-5 col-xs-12 my_order_bx_dtl_text">
								<h1 class="order_title"><?php echo $order->name;  ?></h1>
								<h2 class="order_price">€<?php echo $order->price;  ?></h2>
							</div>
						</div>
						<?php } ?>
					</div>
					
					<?php } ?>
			
					

				



					
				</div>
			</div>

		</div>
	</div>
</div>
