<?php // print_r($productdetail); ?>
<style type="text/css">
    /*Style for display image before insert database*/
    #PreviewPicture
    {
        width: 300px;
        height: 150px;
        background-position: center center;
        background-size: cover;
        background-image: url('<?php echo base_url();?>assets/admin/img/no-image.jpg');
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
			<li class="active">Banners / Video Banner / Add Video Banner</li>
		</ol>
	</div><!--/.row-->
		
	<form action="" method="Post" name="addVideo" enctype="multipart/form-data" accept-charset="utf-8">
		<input type="hidden" name="addVideo" value="addVideo">
		<div class="panel panel-default articles">
			<div class="">
				<div class="row">
					<div class="col-lg-8">
						<div class="mybts">
							
							<div class="col-lg-12">
								<div class="form-group">
									<label> Title</label>
									<input type="text" class="form-control" name="video_title" placeholder="Video Name" value="" required="required">
								</div>
							</div>
							<div class="col-lg-12">
								<label for="file-input-video">
                                    	Video Preview (mp4,mpeg,mov,3gp)
	                                </label>
								<div class="panel-body timeline-container">
                                    <div id="PreviewVideo"></div>
	                                <input required="required" id="file-input-video" name="video" accept="video/mp4,video/avi,video/3gp,video/mpeg" type="file" onchange="ImagePreview()"/>
                                </div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="mybts">
							<div class="col-lg-12">
								<div class="panel-body timeline-container">
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
