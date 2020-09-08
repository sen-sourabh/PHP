<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="js/jquery.min.js"></script>
</head>
<body>
<div id="save_form" style="width: 30%;">
	<h3>Add User</h3>
	<form id="form_user">
		<input class="form-control" type="text" id="name" placeholder="Name" required="required" />
		<input class="form-control" type="email" id="email" placeholder="Email" required="required"/>
		<input class="form-control" type="password" id="pass" placeholder="Password" required="required"/>
		<button class="btn btn-success" type="button" id="save"> Save </button>
	</form>
</div>
<div id="show"></div>
<script type="text/javascript">
	$(document).ready(function(){
		view();
	});

	$("#save").on('click', function(event){
		event.preventDefault();
		var name = document.getElementById('name').value;
		var email = document.getElementById('email').value;
		var pass = document.getElementById('pass').value;
		if(name=='' || email=='' || pass==''){
			alert('Please fill all the fields.');
			return false;
		}
		$email_check = isEmail(email);
		if($email_check==false){
			alert('Invalid email address.');
			return false;
		}
		$.ajax({
			method: 'POST',
			url: 'insert.php',
			data:{name: name, email: email, pass: pass, insert: 1},
			async: false,
			success:function(response){
				view();
				document.getElementById('name').value='';
				document.getElementById('email').value='';
				document.getElementById('pass').value='';
				// $("#myform").trigger("reset");
			}
		});
	});

	function isEmail(email) {
		var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		return regex.test(email);
	}

	function view(){
    	$.ajax({
			url: 'view.php',
            success: function(response){
            	$("#show").html(response);
            }
		});
	}
</script>
</body>
</html>