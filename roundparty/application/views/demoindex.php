<!DOCTYPE html>
<html>
<head>
	<title>Create event</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Round Party</title>
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<style type="text/css">
#PreviewPicture
{
	width: 240px;
	height: 150px;
	background-position: center center;
	background-size: cover;
	/*-webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);*/
	display: inline-block;
}
</style>
</head>
<body>
<div class="my_pg_wrapper">
	<div class="container">
		<!-- <div class="row">
			<div class="my_subtitle col-md-12">
				<h1>Create Event</h1>
			</div>
		</div> -->
		<div class="row">
			<div class="col-md-12">
			<div class="create_event_dashboard">
				<div class="my_default_form create_event_dashboard_form">
					<form method="post">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="form-group">
								<label>Title <small>(Daniel's 3rd Birthday Party)</small></label>
								<input type="text" class="form-control" name="title">
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="form-group">
								<label>Type <small>(e.g. Birthday, wedding, anniversary)</small></label>
								<input type="text" class="form-control" name="type">
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="form-group">
								<label>Special instructions</label>
								<input type="text" class="form-control" name="special_instructions">
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="form-group">
								<label>Event location</label>
								<input type="text" class="form-control" name="location">
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="form-group">
								<label>Event location postcode</label>
								<input type="text" class="form-control" name="location_postcode">
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="form-group">
								<label>Age group</label>
								<input type="text" class="form-control" name="age">
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="form-group">
								<label>Date</label>
								<input type="date" class="form-control" name="event_date">
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="form-group">
								<label>Start time</label>
								<select name="start_time">
									<option> - - - </option>
									<option>8:00 AM</option>
									<option>9:00 AM</option>
									<option>10:00 AM</option>
									<option>11:00 AM</option>
									<option>12:00 PM</option>
									<option>1:00 PM</option>
									<option>2:00 PM</option>
									<option>3:00 PM</option>
									<option>4:00 PM</option>
									<option>5:00 PM</option>
									<option>6:00 PM</option>
									<option>7:00 PM</option>
									<option>8:00 PM</option>
									<option>9:00 PM</option>
									<option>10:00 PM</option>
									<option>11:00 PM</option>
									<option>12:00 AM</option>
									<option>1:00 AM</option>
								</select>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="form-group">
								<label>End time</label>
								<select name="end_time">
									<option> - - - </option>
									<option>8:00 AM</option>
									<option>9:00 AM</option>
									<option>10:00 AM</option>
									<option>11:00 AM</option>
									<option>12:00 PM</option>
									<option>1:00 PM</option>
									<option>2:00 PM</option>
									<option>3:00 PM</option>
									<option>4:00 PM</option>
									<option>5:00 PM</option>
									<option>6:00 PM</option>
									<option>7:00 PM</option>
									<option>8:00 PM</option>
									<option>9:00 PM</option>
									<option>10:00 PM</option>
									<option>11:00 PM</option>
									<option>12:00 AM</option>
									<option>1:00 AM</option>
								</select>
							</div>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="form-group">
								<label>Photos <small>(Upload images in JPG, PNG format)</small></label>
								<div class="img_upload_area">
									<div class="row">
	  									<div class="imgUp">
	    									<div class="imagePreview" id="PreviewPicture"></div>
											<label class="btn">Upload<input name="image" id="FileUpload" type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" onchange="ImagePreview()"></label>
	  									</div>
	  									<span class="imgAdd"><i class="fa fa-plus"></i></span>
  									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12 create_event_dashboard_button">
							<button name="create" class="btn cmn_btn_1" value="submit">Create Event</button>
						</div>
					</form>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>

<script>
	function ImagePreview() 
		{ 
			var PreviewIMG = document.getElementById('PreviewPicture'); 
			var UploadFile = document.getElementById('FileUpload').files[0]; 
			var ReaderObj  = new FileReader(); 
			ReaderObj.onloadend = function () 
			{ 
			   PreviewIMG.style.backgroundImage  = "url("+ ReaderObj.result+")";
			} 
			if (UploadFile)
			{ 
				ReaderObj.readAsDataURL(UploadFile);
				$(document).ready(function(){
					$("#FileUpload").click(function(){
						$("#PreviewPicture").show();
					});
				});
			} 
			else 
			{ 
			    PreviewIMG.style.backgroundImage  = "";
			} 
		}
</script>
</body>
</html>