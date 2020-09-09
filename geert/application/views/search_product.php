<div class="populr_prdct_area">
    <div class="container">
        <div class="row">
            <div class="my_heading wow fadeInDown">
                <h1>Shop with us</h1>
                <p>Made with care for your little ones, our products are perfect for every occasion. Check it out.</p>
            </div>
        </div>
        <div class="populr_prdct_area_in">
            <div class="row">


            	<?php
                    if($productlist != Null){
  					foreach ($productlist as $product) {   
            	?>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="prdct_bx">
                    	<a href="<?php echo base_url(); ?>product?item=<?php echo $product->product_id;  ?>">
                        <div class="prdct_bx_img">
                            <img src="<?php echo base_url(); ?>assets/product/<?php echo $product->product_img;  ?>">
                        </div>
                        <div class="prdct_bx_txt">
                            <h4><?php echo $product->product_cat;  ?></h4>
                            <h1><?php echo $product->product_title;  ?></h1>
                            <h3><?php echo $product->product_price;  ?></h3>
                        </div>
                        </a>
                    </div>
                </div>

                <?php 
                	}
                }else{
                ?>
                    <p class="emt"> There are no products </p>
                <?php } ?>
            </div>  
        </div>
    </div>
</div>