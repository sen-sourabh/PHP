<?php 
	require("header.php");
?>

<div id="signup">
	<div class="container">
		<div class="row">
			<h3 class="form-heading">Upload</h3>
				<form class="form" method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'];?>">
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<input type="hidden" name="upload" value="upload"/>
						<!-- <div class="col-md-12">
							<div class="form-group">
								<input class="form-control text-form" type="text" name="name" required="required"/>
								<span class="floating-label">Name(Write full name with extension same as original file name.)</span>
							</div>
						</div> -->
						<div class="col-md-12">
							<div class="form-group">
								<input class="form-control text-form" type="text" name="title" required="required"/>
								<span class="floating-label">Title</span>
							</div>
						</div>
						<div class="col-md-12">
				            <div class="form-group">
				              	<textarea class="form-control text-form" name="desc" style="padding-top: 2%!important;height: 150px!important;" required="required"></textarea>
				              	<span class="floating-label">Description</span>
				            </div>
				        </div>
				        <div class="col-md-12">
							<div class="form-group">
								<button class="btn btn-primary btn-md sign-now" data-toggle="tooltip" data-placement="bottom" title="Upload Now">Upload Now</button>
							</div>
						</div>
			   		</div>
			   		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="col-md-12">
							<div class="file-upload">
								<div class="file-select">
							    	<div class="file-select-button" id="fileName">Choose Image</div>
							    	<div class="file-select-name" id="noFile">No file chosen...</div> 
							    	<input type="file" name="chooseFile" id="chooseFile">
							  	</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<div class="file-upload">
								  <div class="image-upload-wrap">
								    <input class="file-upload-input" name="file_doc" type='file' onchange="readURL(this);" accept="image/*" />
								    <div class="drag-text">
								      <h3>Drag and drop a file</h3>
								    </div>
								  </div>
								  <div class="file-upload-content">
								    <img class="file-upload-image" src="#" alt="your image" />
								    <div class="image-title-wrap">
								      <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
								    </div>
								  </div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php
	if(isset($_POST['upload']))
	{
		$email = $useremail;
		$title = $_POST['title'];
		$desc = $_POST['desc'];
		$image = $_FILES['chooseFile']['name'];
		$temp_name = $_FILES['chooseFile']['tmp_name'];
		move_uploaded_file($temp_name,"img/$image");
		$file_doc = $_FILES['file_doc']['name'];
		$temp_name = $_FILES['file_doc']['tmp_name'];
		move_uploaded_file($temp_name,"videos/$file_doc");

		mysqli_query($con,"INSERT INTO ppts VALUES ('','$email','$title','$desc','$image','$file_doc')");
		echo "<script>location.href='document.php'</script>";
	}
?>
<?php
	require("footer.php");
?>