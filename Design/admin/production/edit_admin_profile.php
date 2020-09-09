<?php
  require("header.php");
  $admin_id = $_GET['admin_id'];
  // $result = mysqli_query($con,"SELECT * FROM admin WHERE admin_id='$admin_id'");
  // while($row = mysqli_fetch_array($result))
  // {
        $name = $_SESSION['userdata']['admin_name'];
        $email = $_SESSION['userdata']['admin_email'];
        $gender = $_SESSION['userdata']['admin_gender'];
        $phone = $_SESSION['userdata']['admin_phone'];
        $image = $_SESSION['userdata']['admin_image'];
  // }
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Admin Profile</h3>
              </div>

              <!-- <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                  </div>
                </div>
              </div> -->
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Admin Profile </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" novalidate>
                      <span class="section">Personal Info</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="admin_name" placeholder="both name(s) e.g Jon Doe" required="required" value="<?php echo $name;?>" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email" name="admin_email" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $email;?>" readonly="readonly">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <p>
                            M:
                            <input type="radio" class="flat" name="admin_gender" id="genderM" value="male" <?php if($gender == 'male'){ echo 'checked';}?>/> F:
                            <input type="radio" class="flat" name="admin_gender" id="genderF" value="female" <?php if($gender == 'female'){ echo 'checked';}?>/>
                          </p>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Number <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="number" name="admin_phone" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12" value="<?php echo $phone;?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Image 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="image" name="admin_image" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <input type="reset" class="btn btn-primary" value="Cancel"/>
                          <input id="send" name="update" type="submit" class="btn btn-success" value="Submit"/>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

<?php
  require("footer.php");
?>

<?php
if(isset($_POST['update']))
{
  $admin_name = $_POST['admin_name'];
  $admin_email = $_POST['admin_email'];
  $admin_phone = $_POST['admin_phone'];
  $admin_gender = $_POST['admin_gender'];
  if($_FILES['admin_image']['name'])
  {
   $admin_image = $_FILES['admin_image']['name'];
   $temp_name = $_FILES['admin_image']['tmp_name'];
   move_uploaded_file($temp_name,"images/$admin_image"); 
  }
  $admin_create_date = date('Y-m-d H:i:s');
  

  mysqli_query($con,"UPDATE admin SET admin_name='$admin_name', admin_email='$admin_email', admin_phone='$admin_phone', admin_gender='$admin_gender', admin_image='$admin_image', admin_create_date='$admin_create_date' WHERE admin_id='$admin_id'");
  echo "<script>window.location.href= 'profile.php'</script>";
}
?>