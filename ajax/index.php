<?php
	include('conn.php');
?>
<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "UTF-8" name = "viewport" content = "width-device=width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<title>PHP CRUD Operation using AJAX/JQuery</title>
	</head>
<body>
	<div style="height:30px;"></div>
<div class="container-fluid">
	<div class = "row">	
		<div class = "col-md-3">
		</div>
		<div class = "col-md-6 well">
			<div class="row">
                <div class="col-lg-12">
                    <center><h2 class = "text-primary">PHP - CRUD Operation using AJAX/JQuery</h2></center>
					<hr>
				<div>
					<form class="form-inline" enctype="multipart/form-data">
						<div class = "form-group">
							<label>Firstname:</label>
							<input type  = "text" id = "firstname" class = "form-control">
						</div>
						<div class = "form-group">
							<label>Lastname:</label>
							<input type  = "text" id = "lastname" class = "form-control">
						</div>
						<br><br>
						<div class = "form-group">
							<label>Email:</label>
							&emsp;&emsp;<input type  = "email" id = "email" class = "form-control">
						</div>
						
						<div class = "form-group">
							<label>Phone:</label>
							&emsp;&nbsp;&nbsp;<input type  = "text" id = "phone" class = "form-control">
						</div>
						<br><br>
						<div class = "form-group">
							<label>Upload Photo:</label>
							<input type  = "file" name="image_file" id = "image" class = "form-control">
						</div>
						<center>
							<div class = "form-group">
								<button type = "button" id="addnew" class = "btn btn-primary"><span class = "glyphicon glyphicon-plus"></span> Add</button>
							</div>
						</center>
						<div class = "form-group">
							<label>Search:</label>
							<input type="text" name="search_data" id="search_data" class = "form-control"/>
							<button type = "button" id="search" class = "btn btn-primary"><span class = "glyphicon glyphicon-plus"></span> Search</button>
						</div>
					</form>
				</div>
                </div>
            </div><br>
			<div class="row">
			<div id="userTable"></div>
			</div>
		</div>
	</div>
</div>
</body>

<script type = "text/javascript">
	$(document).ready(function(){
		showUser();
		//search
		$(document).on('click', '#search', function(){
			if ($('#search_data').val()==""){
				alert('Please input data first.');
			}
			else
			{
				$search_data = $('#search_data').val();
				$ajax({
					type:"POST",
					url:"search.php",
					data:{search: $search_data},
					success:function(){
						showUser();
					}
				});
			}
		});

		//Add New
		$(document).on('click', '#addnew', function(){
			if ($('#firstname').val()=="" || $('#lastname').val()=="" || $('#email').val()=="" || $('#phone').val()==""){
				alert('Please input data first');
			}
			else{
			$firstname=$('#firstname').val();
			$lastname=$('#lastname').val();
			$email=$('#email').val();				
			$phone=$('#phone').val();
			$image=$('#image').val();
				$.ajax({
					type: "POST",
					url: "addnew.php",
					data: {
						firstname: $firstname,
						lastname: $lastname,
						email: $email,
						phone: $phone,
						image: $image,
						add: 1,
					},
					success: function(){
						showUser();
					}
				});
			}
		});
		//Delete
		$(document).on('click', '.delete', function(){
			$id=$(this).val();
				$.ajax({
					type: "POST",
					url: "delete.php",
					data: {
						id: $id,
						del: 1,
					},
					success: function(){
						showUser();
					}
				});
		});
		//Update
		$(document).on('click', '.updateuser', function(){
			$uid=$(this).val();
			$('#edit'+$uid).modal('hide');
			$('body').removeClass('modal-open');
			$('.modal-backdrop').remove();
			$ufirstname=$('#ufirstname'+$uid).val();
			$ulastname=$('#ulastname'+$uid).val();
			$uemail=$('#uemail'+$uid).val();
			$uphone=$('#uphone'+$uid).val();
			$uimage=$('#uimage'+$uid).val();
				$.ajax({
					type: "POST",
					url: "update.php",
					data: {
						id: $uid,
						firstname: $ufirstname,
						lastname: $ulastname,
						email: $uemail,
						phone: $uphone,
						image: $uimage,
						edit: 1,
					},
					success: function(){
						showUser();
					}
				});
		});
 
	});
 
	//Showing our Table
	function showUser(){
		$.ajax({
			url: 'show_user.php',
			type: 'POST',
			async: false,
			data:{
				show: 1
			},
			success: function(response){
				$('#userTable').html(response);
			}
		});
	}
 
</script>
</html>



