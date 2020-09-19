
<?php
    $flg=2;
    foreach ($blog as $blogVal) {

        if($flg==2){ $flg=1; }else{ $flg=2; }
?>
<div class="info_area info_area_<?php echo $flg; ?>">
	<div class="container">
		<div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12  <?php  if($flg==2){ echo 'col-md-push-6 col-sm-push-6';  } ?>">
                <div class="content_area_img">
                    <?php if($blogVal->page_image !=""){  ?>
                        <img src="<?php echo base_url(); ?>uploads/<?php echo $blogVal->page_image;  ?>" class="img-thumbnail">   
                    <?php } ?>
                    <img src="">
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 <?php  if($flg==2){ echo 'col-md-pull-6 col-sm-pull-6';  } ?>">
                <div class="content_area_text">
                   <h2><?php echo  $blogVal->page_title; ?></h2>
                   <?php echo  $blogVal->page_desc; ?>
                </div>
            </div>
        </div>
	</div>
</div>
 <?php } ?>

<!-- <div class="info_area info_area_2">
	<div class="container">
		<div class="row">
	        <div class="col-md-6 col-md-push-6 col-sm-6 col-sm-push-6 col-xs-12">
	            <div class="content_area_img">
	                <img src="http://itsolution.co.in/geert-gevaar/assets/images/info2.jpg">
	            </div>
	        </div>
	        <div class="col-md-6 col-md-pull-6 col-sm-6 col-sm-pull-6 col-xs-12">
	            <div class="content_area_text">
	                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	            </div>
	        </div>
	    </div>
	</div>
</div> -->