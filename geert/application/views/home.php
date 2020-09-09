<?php
if($slider_data)
{
       
?>
<div class="banner_area">
        <div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="500000">
            
      		<ol class="carousel-indicators">
                <?php
                    $i = 0;
                    foreach($slider_data as $slide)
                    {
                ?>
                <li data-target="#bootstrap-touch-slider" data-slide-to="<?php echo $i; ?>" class="<?php echo !$i ? 'active' : ''; ?>"></li>
                <?php
                        $i++;
                    }
                ?>
                <!-- <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li> -->
                <!-- <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li> -->
            </ol>
            <div class="carousel-inner" role="listbox">
                <?php
                    $i = 0;$j = 0;
                    foreach($slider_data as $slide)
                    {
                        if($j<1)
                        {
                            $class="slide_style_right";
                        }
                        else if(($j<2) && ($j>0))
                        {
                            $class = "slide_style_center";
                        }
                        else
                        {
                            $class = "slide_style_left";
                        }
                ?>
                <div class="item <?php echo !$i ? 'active' : ''; ?>">
                   <img src="<?php echo base_url(); ?>assets/img/<?php echo $slide->slider_img;?>" class="slide-image" />
                    <div class="container">
                        <div class="row">
                            <!-- slide_style_right -->
                            <div class="slide-text <?php echo $class;?>">
                                <h1 data-animation="animated fadeInLeft"><?php echo $slide->slider_title;?></h1>
                                <p data-animation="animated fadeInLeft"><?php echo $slide->slider_description;?></p>
                                <a href="<?php echo base_url(); ?>info" class="btn btn-default" data-animation="animated fadeInLeft"><?php echo $slide->slider_btn_text;?></a>
                            </div>
                        </div>
                    </div> 
                </div>
                <?php
                        if($j<2)
                        {
                            $j++;
                        }
                        else
                        {
                            $j=0;
                        }
                        $i++;
                    }
                ?>
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
<?php
}    
?>
<?php
if($top_banner_data)
{
    foreach($top_banner_data as $video)
    {
?>
<div class="quiz_area" style="background-image: url('<?php echo base_url();?>assets/img/<?php echo $video->video_back_image;?>');">
    <div class="container">
        <div class="row">
		     <div class="col-md-12 col-sm-12 col-xs-12">
                <?php
                    if($video->video)
                    {
                ?>
		           <video playsinline autoplay loop controls style="width: 100%;" id="video" poster="<?php echo base_url(); ?>assets/images/poster.png">
		             <source src="<?php echo base_url(); ?>sound/<?php echo $video->video; ?>"  type="video/mp4"  style="width:100%; height:auto;">
		             Your browser does not support the video tag.
		          </video>
                <?php
                    }
                ?>
		    </div>
		</div>
    </div>
</div>
<?php
    }
}
?>
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

<?php
if($shop_banner_data)
{
    foreach($shop_banner_data as $shop_ban)
    {
?>
<div class="populr_prdct_area" style="background-image: url('<?php echo base_url();?>assets/img/<?php echo $shop_ban->shop_banner_back_image;?>');">
    <div class="container">
        <div class="row">
            <div class="my_heading wow fadeInDown">
                <h1><?php echo $shop_ban->shop_banner_title;?></h1>
                <p><?php echo $shop_ban->shop_banner_desc;?></p>
            </div>
        </div>
        <div class="populr_prdct_area_in">
            <div class="row">
                <?php
                    foreach ($productlist as $product) 
                    {   
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
<?php
    }
}
else
{
?>

<div class="populr_prdct_area">
    <div class="container">
        <div class="populr_prdct_area_in">
            <div class="row">
                <?php
                    foreach ($productlist as $product) 
                    {   
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
<?php
}
?>

<?php

if($bottom_banner_data)
{
    foreach($bottom_banner_data as $bottom_ban)
    {
?>
<div class="quiz_area" style="background-image: url('<?php echo base_url();?>assets/images/<?php echo $bottom_ban->bottom_banner_image;?>');">
    <div class="container">
        <div class="my_heading wow fadeInDown">
            <h1><?php echo $bottom_ban->bottom_banner_title;?></h1>
            <p><?php echo $bottom_ban->bottom_banner_desc;?></p>
            <h1> <a href="<?php echo base_url(); ?>index.php/welcome/kidsquiz" class="btn btn-default"><?php echo $bottom_ban->bottom_banner_btn_text;?></a></h1>
        </div>
    </div>
</div>
<?php
    }
}
?>

<script type="text/javascript">
var video = document.getElementById('video'); video.addEventListener('click',function(){ video.play(); },false);
</script>