<?php include('includes/header.php'); ?>

<div class="container">
	<center>
		<br>
		<h1>Latest Music</h1>
		<hr>
		<br>
	</center>
	<?php 
		if(!empty($all_song)){
	?>
	<div class="row">
		<?php 
			foreach ($all_song as $song){
		?>
		<div class="col-lg-3">
			<div class="card mb-3">
			  	<h3 class="card-header"><?php echo ucfirst(substr($song->song_name,0,15))."...";?></h3>
			  	<img style="height: 200px; width: 100%; display: block;" src="<?php echo base_url();?>admin/assets/img/<?php echo $song->song_image;?>" alt="<?php echo $song->song_image;?>">
			  	<div class="card-body">
			    	<audio controls class="audio">
					  	<source src="<?php echo base_url();?>admin/assets/music/<?php echo $song->song_file;?>" type="audio/ogg">
					  	<source src="<?php echo base_url();?>admin/assets/music/<?php echo $song->song_file;?>" type="audio/mpeg">
						Your browser does not support the audio element.
					</audio>
			  	</div>
			  	<div class="card-footer text-muted">
			    	<?php
	    				if(!empty($song->song_updated_at)){
                            $update_date = explode(' ',$song->song_updated_at); 
                            $update_date = new DateTime($update_date[0]); 
                            echo $update_date->format('F d, Y');
                        }else{
                            echo "";
                        }
                    ?>
			  	</div>
			</div>
		</div>
		<?php 
			}
		?>
	</div>
	<?php 
		}else{
			echo "<center><h3>No Songs Avaliable.</h3></center>";
		}
	?>
</div>

<?php include('includes/footer.php'); ?>