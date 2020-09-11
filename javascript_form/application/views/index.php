<!DOCTYPE html>
<html>
<head>
	<title>Javascript Form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
	<style>
		.msg{
			display:none;
		}
		#upload_link{
		    text-decoration:none;
		}
		#image{
		    display:none
		}
	</style>
	<!-- <script src="<?php echo base_url();?>assets/js/form.js"></script> -->
</head>
<body>
	<div id="form_save" class="form_data_save">
		<form style="width:30%" method="get" action="" name="form1" enctype="multipart/form-data">
			Name  :<input class="form-control" type="text" name="name" id="name"/><br>
			Email :<input class="form-control" type="email" name="email" id="email"/><br>
			Phone :<input class="form-control" type="phone" name="phone" id="phone"/><br>
			Image :<input class="form-control" type="file" name="image" id="image" onChange="form_submit();"/>
					<a href="" id="upload_link">Choose</a>
			<br>
			<input class="btn btn-success" type="button" name="submit" value="Submit">
		</form>
		<div id="message" class="msg" style="width:30%;">
			<div class='alert alert-success alert-dismissible fade show'>
		    	<button type='button' class='close' data-dismiss='alert'>&times;</button>
		    	<strong>Success!</strong> Data Saved Successfully.
		    </div>
		</div>
		<script>
			$(function(){
				$("#upload_link").on('click', function(e){
				    e.preventDefault();
				    $("#image:hidden").trigger('click');
				});
			});

			function form_submit()
			{
				var xmlhttp;
				var name = document.getElementById("name").value;
				var email = document.getElementById("email").value;
				var phone = document.getElementById("phone").value;
				
				var fullPath = document.getElementById("image").value;
			    var filename = fullPath.replace(/^.*[\\\/]/, '');
			     // or, try this, 
			     // var filename = fullPath.split("/").pop();
				xmlhttp = new XMLHttpRequest();
				xmlhttp.open("GET","<?php echo base_url();?>Web/index?name="+name+"&email="+email+"&phone="+phone+"&image="+filename,false);
				xmlhttp.send(null);
				form1.reset();
				$("#message").removeClass("msg");
				$("#name").css("background-color", "#ffffff");		
			}

			$("#name").click(function(){
				$(this).css("background-color", "#f5f7f5");
				$("#message").addClass("msg");
			});
		</script>
</body>
</html>