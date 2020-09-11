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
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Date</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            	<?php 
			                    	if(!empty($contact)){
			                    		foreach($contact as $row){
			                    ?>
                                <tr class="tr-shadow">
                                    <td><b><?php echo ucfirst($row->contact_name);?></b></td>
                                    <td><?php echo ucfirst($row->contact_email);?></td>
                                    <td><?php echo ucfirst($row->contact_subject);?></td>
                                    <td><?php echo ucfirst($row->contact_message);?></td>
                                    <td><?php 
                                            if(!empty($row->contact_created_at)){
                                                $update_date = explode(' ',$row->contact_created_at); 
                                                $update_date = new DateTime($update_date[0]); 
                                                echo $update_date->format('F d, Y');
                                            }else{
                                                echo "";
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <div class="table-data-feature">
                                            <a href="<?php echo base_url();?>view_contact?contact_id=<?php echo $row->contact_id;?>" class="item" title="View">
                                                <i class="zmdi zmdi-eye"></i>
                                            </a>
                                            <a href="<?php echo base_url();?>delete_contact?contact_id=<?php echo $row->contact_id;?>" class="item" title="Delete">
                                                <i class="zmdi zmdi-delete"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="spacer"></tr>
                                <?php 
				                    	}
				                    }else{
				                    	echo '<tr class="tr-shadow"><td colspan="6"><center> No Contacts Avaliable. </center></td></tr>';
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