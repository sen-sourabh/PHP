<style type="text/css">
    /*Style for display image before insert database*/
    #PreviewPicture
    {
        width: 300px;
        height: 150px;
        background-position: center center;
        background-size: cover;
        /*-webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);*/
        display: inline-block;
    }
</style>
<div class="col-sm-10 col-sm-offset-2 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Banners / Edit Shop Banner</li>
			</ol>
		</div><!--/.row-->
		<?php
			foreach($shop_banner_data as $shop_ban)
			{
		?>
		<form action="" method="Post" name="editShop" enctype="multipart/form-data">
		<input type="hidden" class="form-control" name="editShop" placeholder="Shop Name" value="editShop">
		<div class="panel panel-default articles">
			<div class="">
				<!-- <h3>Contact Details</h3>  -->
				<div class="row">
					<div class="col-lg-8">
						<div class="mybts">
							<div class="col-lg-12">
								<div class="form-group">
									<label>Title</label>
									<input type="text" class="form-control" name="shop_title" placeholder="Title" value="<?php echo $shop_ban->shop_banner_title;?>">
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<textarea name="shop_desc" class="jqte-test"><?php echo $shop_ban->shop_banner_desc;?></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="mybts">
							<div class="col-lg-12">
								<div class="panel-body timeline-container">
									<label>Previous Image : </label><?php echo $shop_ban->shop_banner_back_image;?>
									<img src="<?php echo base_url();?>assets/img/<?php echo $shop_ban->shop_banner_back_image;?>" style="width: 300px;height: 150px;">
									<label>New Image : </label>
                                    <div id="PreviewPicture"></div>
                                    <label for="file-input">
                                    	Background Image
	                                </label>
	                                <input id="file-input" name="shop_image" type="file" onchange="ImagePreview()"/>
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
		<?php
			}
		?>
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

	<!-- Display image before insert in database -->
    <script type="text/javascript">
        function ImagePreview() 
        { 
            var PreviewIMG = document.getElementById('PreviewPicture'); 
            var UploadFile    =  document.getElementById('file-input').files[0]; 
            var ReaderObj  =  new FileReader(); 
            ReaderObj.onloadend = function () 
            { 
               PreviewIMG.style.backgroundImage  = "url("+ ReaderObj.result+")";
            } 
            if (UploadFile) 
            { 
               ReaderObj.readAsDataURL(UploadFile);
            } 
            else 
            { 
                PreviewIMG.style.backgroundImage  = "";
            } 
        }
    </script>
	<script type="text/javascript">
		$("input[type='image']").click(function() {
	    $("input[id='my_file']").click();
	});
	</script>

	
</body>
</html>