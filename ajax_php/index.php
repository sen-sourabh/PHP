<!DOCTYPE html>
<html>
<head>
	<title>index</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<form method="post" id="user_form">
	<input type="text" id="name" name="name" placeholder="Name" />
	<input type="email" id="email" name="email" placeholder="Email" />
	<input type="password" id="pass" name="pass" placeholder="Password" />
	<input type="button" id="submit" name="submit" value="Save">
</form>
<div class="container">
	<div id="showuser"></div>
</div>
<script>
	$(document).ready(function(){
		showuser();
	});

	function showuser(){
		$.ajax({
			url: 'view.php',
			success:function(response){
				$("#showuser").html(response);
			}
		});		
	}

	$("#submit").on('click',function(){
		var name = document.getElementById('name').value;
		var email = document.getElementById('email').value;
		var pass = document.getElementById('pass').value;
		$.ajax({
			type: 'POST',
			url: 'insert.php',
			data:{
				name: name,
				email: email,
				pass: pass,
				save: 1
			},
			success:function(){
				showuser();
			}
		});
		$("#user_form").trigger("reset");
	});
</script>

</body>
</html>