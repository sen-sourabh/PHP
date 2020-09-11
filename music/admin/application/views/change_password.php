<?php 
	include('includes/header.php');
?>
<!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                        	<div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Change Password</strong> 
                                        <?php 
                                            if($msg = $this->session->flashdata('response')){
                                                echo "<div style='color:green'>".$msg."</div>";
                                            }else if($msg = $this->session->flashdata('error')){
                                                echo "<div style='color:red'>".$msg."</div>";
                                            }
                                        ?>
                                    </div>
                                    <form method="post" class="form-horizontal" action="<?php echo base_url();?>change_password">
                                        <div class="card-body card-block">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="cur_pass" class=" form-control-label">Current Password</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="cur_pass" class="form-control" required="required">
                                                    <small class="form-text text-muted">Please enter current password.</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="new_pass" class="form-control-label">New Password</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="new_pass" class="form-control" required="required">
                                                    <small class="help-block form-text">Please enter new password.</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="con_pass" class="form-control-label">Confirm Password</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="con_pass" class="form-control" required="required">
                                                    <small class="help-block form-text">Please enter confirm password.</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <input type="submit" name="change" class="btn btn-primary btn-sm" value="Change Now"/>
                                            <input type="reset" class="btn btn-danger btn-sm" value="Cancel"/>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


<?php 
	include('includes/footer.php');
?>