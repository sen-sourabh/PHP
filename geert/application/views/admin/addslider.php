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
				<li class="active">Slider / Add Slider</li>
			</ol>
		</div><!--/.row-->

		<form action="" method="Post" name="addslider" enctype="multipart/form-data">
		<input type="hidden" class="form-control" name="addslider" placeholder="Slider Name" value="addslider">
		<div class="panel panel-default articles">
			<div class=""> 
				<div class="row">
					<div class="col-lg-8">
						<div class="mybts">
							<div class="col-lg-12">
								<div class="form-group">
									<label>Title</label>
									<input type="text" class="form-control" name="slider_title" placeholder="Title" value="">
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<label>Description</label>
									<textarea class="jqte-test" name="slider_description" placeholder="Description" value=""></textarea>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<label>Button Text</label>
									<input type="text" class="form-control" name="slider_btn_text" placeholder="Button Text" value=""/>
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
                                    	Slider Image
	                                </label>
	                                <input id="file-input" name="slider_image" type="file" onchange="ImagePreview()"/>
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
		
	</div><!--/.main-->


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
	<script type="text/javascript">
		// $(function()
		// {
		//     $(document).on('click', '.btn-add', function(e)
		//     {
		//         e.preventDefault();

		//         var controlForm = $('.controls form:first'),
		//             currentEntry = $(this).parents('.entry:first'),
		//             newEntry = $(currentEntry.clone()).appendTo(controlForm);

		//         newEntry.find('input').val('');
		//         controlForm.find('.entry:not(:last) .btn-add')
		//             .removeClass('btn-add').addClass('btn-remove')
		//             .removeClass('btn-success').addClass('btn-danger')
		//             .html('<span class="glyphicon glyphicon-minus"> <b>Remove</b></span>');
		//     }).on('click', '.btn-remove', function(e)
		//     {
		// 		$(this).parents('.entry:first').remove();

		// 		e.preventDefault();
		// 		return false;
		// 	});
		// });

	</script>

</body>
</html>	
	