<?php include('includes/header.php'); ?>

<div class="container">
	<center>
		<br>
		<h1>Contact</h1>
		<?php 
			if($msg = $this->session->flashdata('response')){
				echo "<p style='color:green;'>".$msg."</p>";
			}else if($msg = $this->session->flashdata('error')){
				echo "<p style='color:red;'>".$msg."</p>";
			}

		?>
		<hr>
		<br>
	</center>
	<div class="row">
		<div class="col-lg-12">
		  	<form method="post" class="form-vertical">
		      	<div class="form-group">
			      	<label for="exampleTextarea">Name <suffix style="color:red;">*</suffix></label>
		      		<input class="form-control mr-sm-2" type="text" name="name" required="required">
		      	</div>
		      	<div class="form-group">
			      	<label for="exampleTextarea">Email <suffix style="color:red;">*</suffix></label>
		      		<input class="form-control mr-sm-2" type="email" name="email" required="required">
		      	</div>
		      	<div class="form-group">
			      	<label for="exampleTextarea">Subject <suffix style="color:red;">*</suffix></label>
		      		<input class="form-control mr-sm-2" type="text" name="subject" required="required">
		      	</div>
		      	<div class="form-group">
			      	<label for="exampleTextarea">Message <suffix style="color:red;">*</suffix></label>
			      	<textarea class="form-control" id="exampleTextarea" name="message" rows="3" required="required"></textarea>
			    </div>
			    <div class="form-group">
			    	<label for="exampleTextarea"></label>
		      		<input class="btn btn-secondary my-2 my-sm-0" type="submit" value="Send" name="send"/>
		      	</div>
		    </form>
		</div>
	</div>
</div>

<?php include('includes/footer.php'); ?>