<?php 
	include('includes/header.php');
?>
<style>
.table-data2.table tbody td {
    padding: 5px 30px !important;
    padding-right: 10px;
}
</style>
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
			<div class="row">
                <div class="col-md-12">
                    <div class="table-data__tool">
                        <div class="table-data__tool-left">
                            <div class="rs-select2--light rs-select2--md">
                                <select class="js-select2" id="lang" name="lang">
                                    <option selected="selected">Languages</option>
                                    <option value="all">All</option>
                                    <option value="hindi">Hindi</option>
                                    <option value="english">English</option>
                                    <option value="other">Other</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                        </div>
                        <div class="table-data__tool-right">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" id="search" name="search" placeholder="Search for favourite songs..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    
                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2">
                            <thead>
                                <tr>
                                    <!-- <th>
                                        <label class="au-checkbox">
                                            <input type="checkbox">
                                            <span class="au-checkmark"></span>
                                        </label>
                                    </th> -->
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Singer</th>
                                    <th>Language</th>
                                    <th>Country</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            	<?php 
			                    	if(!empty($song)){
			                    		foreach($song as $row){
			                    ?>
                                <tr class="tr-shadow">
                                    <td>
                                        <img src="<?php echo base_url();?>assets/img/<?php echo $row->song_image;?>" onerror="this.src='https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSYzcIyNmd36YGpJaGwPhj8DjQ0hZbPN-OD-kmU7kdpwpggd1Sp'" style="width:70px;height:70px;">
                                    </td>
                                    <td><b><?php echo ucfirst($row->song_name);?></b></td>
                                    <td><?php echo ucfirst($row->song_singer);?></td>
                                    <td><?php echo ucfirst($row->song_language);?></td>
                                    <td><?php echo ucfirst($row->song_country);?></td>
                                    <td>
                                        <?php 
                                            if(!empty($row->song_updated_at)){
                                                $update_date = explode(' ',$row->song_updated_at); 
                                                $update_date = new DateTime($update_date[0]); 
                                                echo $update_date->format('F d, Y');
                                            }else{
                                                echo "";
                                            }
                                        ?>
                                    </td>
                                    <td><?php 
	                                    	if($row->song_status == 1){
	                                    		echo '<span style="color:green;">Active</span>';
	                                    	}else{
	                                    		echo '<span style="color:red;">Inactive</span>';
	                                    	}
                                    	?>
                                    </td>
                                    <td>
                                        <div class="table-data-feature">
                                            <a href="<?php echo base_url();?>edit_song?song_id=<?php echo $row->song_id;?>" class="item" title="Edit">
                                                <i class="zmdi zmdi-edit"></i>
                                            </a>
                                            <a href="<?php echo base_url();?>delete_song?song_id=<?php echo $row->song_id;?>" class="item" title="Delete">
                                                <i class="zmdi zmdi-delete"></i>
                                            </a>
                                            <?php 
                                            	if($row->song_status == 1){
                                            ?>
                                            <a href="<?php echo base_url();?>status?song_id=<?php echo $row->song_id;?>" class="item" title="Change Status">
                                                <i class="fas fa-toggle-on"></i>
                                            </a>
                                            <?php 
                                            	}else{
                                            ?>
                                            <a href="<?php echo base_url();?>status?song_id=<?php echo $row->song_id;?>" class="item" title="Change Status">
                                                <i class="fas fa-toggle-off"></i>
                                            </a>
                                            <?php 
                                            	}
                                            ?>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="spacer"></tr>
                                <?php 
				                    	}
				                    }else{
				                    	echo '<tr class="tr-shadow"><td colspan="8"><center> No Songs Avaliable. </center></td></tr>';
				                    }
			                    ?>
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- END DATA TABLE -->
                </div>
            </div>
		</div>
	</div>
</div>

<?php 
	include('includes/footer.php');
?>

<script>
    $(document).ready(function(){        
        $("#search").on("keyup", function() {
            var value = document.getElementById('search').value.toLowerCase();
            $(".tr-shadow").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });

        $("#lang").on('change', function(){
        	var value = document.getElementById('lang').value;
        	if(value == 'hindi'){
	        	$(".tr-shadow").filter(function() {
	                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
	            });
        	}else if(value == 'english'){
	        	$(".tr-shadow").filter(function() {
	                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
	            });
        	}
        	else if(value == 'other'){
	        	$(".tr-shadow").filter(function() {
	                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
	            });
        	}else{
        		value = '';
        		$(".tr-shadow").filter(function() {
	                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
	            });
        	}
        });
    });
</script>