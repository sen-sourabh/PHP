<div class="banner_area">
        <div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="500000">
      		 <ol class="carousel-indicators">
                <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                   <img src="<?php echo base_url(); ?>assets/images/slider 1 (1).jpg" class="slide-image" />
                    <div class="container">
                        <div class="row">
                            <div class="slide-text slide_style_right">
                                <h1 data-animation="animated fadeInLeft">Only a few minutes a day.</h1>
                                <p data-animation="animated fadeInLeft">It will take only minutes a day to get your kids to recognize Geert Gevaar! We can be the easy way for you to keep your kids safe.</p>
                                <a href="<?php echo base_url(); ?>info" class="btn btn-default" data-animation="animated fadeInLeft">Know More</a>
                            </div>
                        </div>
                    </div> 
                 
                </div>
                <div class="item">
                    <img src="<?php echo base_url(); ?>assets/images/slider 2 (1).jpg" class="slide-image" />
                    <div class="slide-text slide_style_center">
                        <h1 data-animation="animated fadeInLeft">Protect Your Children</h1>
                        <p data-animation="animated fadeInLeft">Everyyear in the netharlands, thousands of children have accidents with houshold products, tool and all types of medicine.</p>
                        <a href="<?php echo base_url(); ?>info" class="btn btn-default" data-animation="animated fadeInLeft">Know More</a>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo base_url(); ?>assets/images/slider 3 (1).jpg" class="slide-image" />
                    <div class="slide-text slide_style_left">
                        <h1 data-animation="animated fadeInLeft">Danger awareness stickers</h1>
                        <p data-animation="animated fadeInLeft">We can help protect your children from the dangers that are lurking in your home. Prevention starts with education and communication.</p>
                        <a href="<?php echo base_url(); ?>info" class="btn btn-default" data-animation="animated fadeInLeft">Know More</a>
                    </div>
                </div> 
            </div>
            <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="quiz_area">
    <div class="container">
        <div class="row">
		     <div class="col-md-12 col-sm-12 col-xs-12">
		           <video playsinline autoplay loop controls style="width: 100%;  " id="video" poster="<?php echo base_url(); ?>assets/images/poster.png">
		             <source src="<?php echo base_url(); ?>sound/GG dutch -SD 480p.mov"  type="video/mp4"  style="width:100%; height:auto;">
		             Your browser does not support the video tag.
		          </video>
		    </div>
		</div>
    </div>
</div>
    <div class="colctn_area">
        <div class="container">
            <div class="row">
            		
                <div class="colctn_area_in">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="colctn_bx">
                            <div class="colctn_bx_in">
                                <img src="<?php echo base_url(); ?>assets/images/cl1.jpg">
                                <div class="colctn_bx_txt">
                                    <h2><span>New Collection</span></h2>
                                    <h3><span>Boys 4-14 Yrs</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="colctn_bx">
                            <div class="colctn_bx_in">
                                <img src="<?php echo base_url(); ?>assets/images/cl2.jpg">
                                <div class="colctn_bx_txt">
                                    <h2><span>Baby Cloths</span></h2>
                                    <h3><span>Mini 0-12 Month</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="colctn_bx">
                            <div class="colctn_bx_in">
                                <img src="<?php echo base_url(); ?>assets/images/cl1.jpg">
                                <div class="colctn_bx_txt">
                                    <h2><span>New Arrivals</span></h2>
                                    <h3><span>Girls 2-12 Yrs</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


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
                ?>
            </div>
         
        </div>
    </div>
</div>


<div class="quiz_area">
    <div class="container">
        <div class="my_heading wow fadeInDown">
                <h1>GEERT GEVAAR DIPLOMA</h1>
                <p>Geert Gevaar’s kids corner! Play the Quiz and get your own cool Geert Gevaar Diploma to hand in your room!</p>

                 <h1> <a href="<?php echo base_url(); ?>index.php/welcome/kidsquiz" class="btn btn-default"> PLAY THE QUIZ NOW </a></h1>
              
            </div>

                 
         
    </div>
</div>


<script type="text/javascript">
var video = document.getElementById('video'); video.addEventListener('click',function(){ video.play(); },false);
</script>