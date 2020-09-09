

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
					<h3>My Order</h3>

					<?php 
						if(isset($_GET['order'])){
					?>
					<div class="my_order_bx">	
					  <h4 class="order_status">Order Product </h4>
						<ul>
							<li>Order number: <?php echo $_GET['order']; ?></li>
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
					<?php 

							
						} 
					?>
					
					<div class="my_order_bx">
						<h4 class="order_status">New Order</h4>
						<?php
							if($neworderlist !=null){ 
							foreach ($neworderlist as $order) {   	?>
						<ul>
							<li><?php echo $order->orderdate;  ?></li>
							<li><?php echo $order->username;  ?></li>
							<li>Order number: <a href="<?php echo base_url(); ?>account?order=<?php echo $order->order_id;?>"><?php echo $order->order_id;  ?></a></li>
						</ul>	
						<?php } }else{ ?>

							<p class=""> No Order  </p>
							
						<?php } ?>	
					</div>

				

					<div class="my_order_bx">
						<h4 class="order_status">Shipped</h4>
						<?php
						if($shippedorderlist !=null){
	  						foreach ($shippedorderlist as $order) {   
	            		?>
						
						<ul>
							<li><?php echo $order->orderdate;  ?></li>
							<li><?php echo $order->username;  ?></li>
							<li>Order number: <?php echo $order->order_id;  ?></li>
						</ul>

							<?php } }else{ ?>

							<p class=""> No Order  </p>
							
						<?php } ?>	

					</div>

					<div class="my_order_bx">
						<h4 class="order_status">Delivered</h4>
						<?php
							if($deliveredorderlist !=null){
	  						foreach ($deliveredorderlist as $order) {   
	            		?>
						<ul>
							<li><?php echo $order->orderdate;  ?></li>
							<li><?php echo $order->username;  ?></li>
							<li>Order number: <?php echo $order->order_id;  ?></li>
						</ul>	
							<?php } }else{ ?>

							<p class=""> No Order  </p>
							
						<?php } ?>	
					</div>

					

				



					<!-- <div class="my_order_bx">
						<h4 class="order_status">Delivered</h4>
						<ul>
							<li>Wed, 29-Aug-2018 12:02 pm</li>
							<li>User name</li>
							<li>Order number: 5180829214801792</li>
						</ul>
						<div class="my_order_bx_dtl">
							<div class="col-md-7 col-sm-7 col-xs-12 my_order_bx_dtl_img">
								<img src="<?php echo base_url(); ?>assets/images/pro3.jpg">
							</div>
							<div class="col-md-5 col-sm-5 col-xs-12 my_order_bx_dtl_text">
								<h1 class="order_title">Geert Gevaar Diploma</h1>
								<h2 class="order_price">$ 5.99</h2>
							</div>
						</div>
					</div>


					<div class="my_order_bx">
						<h4 class="order_status">Shipped</h4>
						<ul>
							<li>Wed, 12-Aug-2018 08:43 pm</li>
							<li>User name</li>
							<li>Order number: 5679346219451568</li>
						</ul>
						<div class="my_order_bx_dtl">
							<div class="col-md-7 col-sm-7 col-xs-12 my_order_bx_dtl_img">
								<img src="<?php echo base_url(); ?>assets/images/pro3.jpg">
							</div>
							<div class="col-md-5 col-sm-5 col-xs-12 my_order_bx_dtl_text">
								<h1 class="order_title">Geert Gevaar Diploma</h1>
								<h2 class="order_price">$ 5.99</h2>
							</div>
						</div>
					</div> -->
				</div>
			</div>

		</div>
	</div>
</div>