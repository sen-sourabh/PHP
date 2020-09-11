<?php 
	include('includes/header.php');
?>
<!-- MAIN CONTENT-->
<?php 
    if(!empty($single_contact)){
        foreach($single_contact as $contact){
?>
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                        	<div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong><?php echo ucfirst($contact->contact_subject);?></strong>
                                        <p><small><?php echo ucfirst($contact->contact_name);?></small></p>
                                        <p><small><?php echo $contact->contact_email;?></small></p>
                                        <p><small>
                                            <?php 
                                                if(!empty($contact->contact_created_at)){
                                                    $update_date = explode(' ',$contact->contact_created_at); 
                                                    $update_date = new DateTime($update_date[0]); 
                                                    echo $update_date->format('F d, Y');
                                                }else{
                                                    echo "";
                                                }
                                            ?>
                                        </small></p>
                                    </div>
                                    <div class="card-body card-block">
                                        <div class="row form-group">
                                            <div class="col col-md-12">
                                                <?php echo ucfirst($contact->contact_message);?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php
        }
    }
?>

<?php 
	include('includes/footer.php');
?>