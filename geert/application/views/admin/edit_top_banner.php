<?php // print_r($productdetail); ?>
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
    .entry:not(:first-of-type)
	{
	    margin-top: 10px;
	}

	.glyphicon
	{
	    font-size: 12px;
	}
</style>
<div class="col-sm-10 col-sm-offset-2 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#">
				<em class="fa fa-home"></em>
			</a></li>
			<li class="active">Banners / Edit Video Banner</li>
		</ol>
	</div><!--/.row-->
	<?php
		foreach($top_banner_data as $top_ban)
		{
	?>
	<form action="" method="Post" name="editVideo" enctype="multipart/form-data" accept-charset="utf-8">
		<input type="hidden" name="editVideo" value="editVideo">
		<div class="panel panel-default articles">
			<div class="">
				<div class="row">
					<div class="col-lg-8">
						<div class="mybts">
							
							<div class="col-lg-12">
								<div class="form-group">
									<label> Title</label>
									<input type="text" class="form-control" name="video_title" placeholder="Video Name" value="<?php echo $top_ban->video_title;?>">
								</div>
							</div>
							<div class="col-lg-6">
								<label for="file-input">
                                    	Current Video (mp4,mpeg,mov,3gp) : <?php echo $top_ban->video;?>
	                            </label>
								<div class="panel-body timeline-container">
                                    
                                    	<video playsinline autoplay loop controls style="width: 100%;" id="video" poster="<?php echo base_url(); ?>assets/admin/img/video-placeholder.jpg">
								            <source src="<?php echo base_url(); ?>sound/<?php echo $top_ban->video; ?>" onerror="this.src='http://localhost/geert/assets/admin/img/video-placeholder.jpg'" type="video/mp4"/>
								            Your browser does not support the video tag.
								        </video>
                                    
                                </div>
							</div>
							<div class="col-lg-6">
								<label for="file-input-video">
                                    	Video Preview (mp4,mpeg,mov,3gp)
	                            </label>
								<div class="panel-body timeline-container">
                                    <div id="PreviewVideo"></div>
	                                <input id="file-input-video" name="video" accept="video/mp4,video/avi,video/3gp,video/mpeg" type="file" onchange="ImagePreview()"/>
                                </div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="mybts">
							<div class="col-lg-12">
								<div class="panel-body timeline-container">
									<label>Previous Image : </label><?php echo $top_ban->video_back_image; ?>
									<img src="<?php echo base_url();?>assets/img/<?php echo $top_ban->video_back_image; ?>" onerror="this.src='http://localhost/geert/assets/admin/img/no-image.jpg'" style="width: 300px;height: 150px;">
									<label>New Image : </label>
                                    <div id="PreviewPicture"></div>
                                    <label for="file-input">
                                    	Background Image
	                                </label>
	                                <input id="file-input" name="image" type="file" onchange="ImagePreview()"/>
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
