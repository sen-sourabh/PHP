<!DOCTYPE html>
<html>
<head>
	<title>AJAX</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h3>Register</h3>
				<form method="post" id="myform" enctype="multipart/form-data">
					<input type="hidden" name="reg" value="1"/>
					<input id="name" class="form-control" type="text" name="name" placeholder="Name" required="required"/>
					<br>
					<input id="email" class="form-control" type="email" name="email" placeholder="Email" required="required"/><br>
					<input id="pass" class="form-control" type="password" name="pass" placeholder="Password" required="required"/><br>
					<input id="dob" class="form-control" type="date" name="dob" required="required"/><br>
					<input id="image" class="form-control" type="file" name="image" required="required"/><br>
					<input id="reg" class="btn btn-success submitBtn" type="submit" name="submit" value="Register"/><br>
				</form>	
			</div>
			<div class="col-md-8">
				<div id="show"></div>
			</div>
		</div>
	</div>
	<script>
	    $("#myform").on('submit', function(e){
	        e.preventDefault();
	        $.ajax({
	            type: 'POST',
	            url: 'insert.php',
	            data: new FormData(this),
	            contentType: false,
	            cache: false,
	            processData:false,
	            success: function(){
	            	var confirm = 1;
	            	if(confirm == 1){
	            		show();
	                }
	                else
	                {
	                	alert("not Done.");
	                }
	                $("#myform").trigger("reset");	                
	            }
	        });
	    });

	    $(document).ready(function(){
	    	show();
	    });

	    function show(){
	    	$.ajax({
    			// type: 'POST',
    			url: 'view.php',
    			// async: false,
    			// contentType: false,
	      //       cache: false,
	      //       processData:false,
	            success: function(response){
	            	$("#show").html(response);
	            }
    		});
    	}
	</script>
</body>
</html>