<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">

        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span></button>
        <a class="navbar-brand" href="#"><span>Endevor</span> Admin</a>
        <ul class="nav navbar-top-links navbar-right">
          <!-- <li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
            <em class="fa fa-envelope"></em><span class="label label-danger">15</span>
          </a>
            <ul class="dropdown-menu dropdown-messages">
              <li>
                <div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
                  <img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
                  </a>
                  <div class="message-body"><small class="pull-right">3 mins ago</small>
                    <a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
                  <br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
                </div>
              </li>
              <li class="divider"></li>
              <li>
                <div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
                  <img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
                  </a>
                  <div class="message-body"><small class="pull-right">1 hour ago</small>
                    <a href="#">New message from <strong>Jane Doe</strong>.</a>
                  <br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
                </div>
              </li>
              <li class="divider"></li>
              <li>
                <div class="all-button"><a href="#">
                  <em class="fa fa-inbox"></em> <strong>All Messages</strong>
                </a></div>
              </li>
            </ul> -->
          </li>
          <?php 
            foreach ($count_id as $key => $notification_count) 
            {
              $countall=$notification_count->countall;
            }
          ?>
          <a href="#">
            <li class="dropdown">
              <a class="dropdown-toggle count-info" id="clicker"data-toggle="dropdown" href="">
                <em class="fa fa-bell"></em>
                <span class="label label-info"><?php echo $countall; ?></span>
              </a>
              <ul class="dropdown-menu dropdown-alerts myalert">
                <li>
                  <a href="#">
                  <div>
                  <p class="ic_my">
                    <em class="fa fa-bell"></em> Notification
                  </p>  <!-- <span class="pull-right text-muted small">3 mins ago</span></div> -->

          <?php 
            foreach ($supplier_detail as $key => $supplier_detail_notification) 
            {
              $supplier_detail_id=$supplier_detail_notification->user_id;
              $supplier_detail_contact_name=$supplier_detail_notification->contact_name;
              $supplier_detail_date_of_join=$supplier_detail_notification->date_of_join;

              foreach ($data as $key => $supplier_detail_data) 
              {
                $supplier_detail_id_notification=$supplier_detail_data->supplier_id;
                /*$supplier_detail_contact_name=$supplier_detail_notification->contact_name;
                $supplier_detail_date_of_join=$supplier_detail_notification->date_of_join;*/
                if($supplier_detail_id==$supplier_detail_id_notification)
                {
          ?>
          <a href="<?php echo base_url();?>All_pages/view_details_supplier?id=<?php echo $supplier_detail_id;?>">
                  <!-- <em class="fa fa-bell"></em>New Supplier Ragistration - <?php echo $supplier_detail_contact_name ;?> 
              <br><span><?php   echo $supplier_detail_date_of_join; ?></span>
 -->
              <div class="mystry">
                <p class="ic_my2">New Supplier Register-<?php echo $supplier_detail_contact_name ;?>  <span><?php echo $supplier_detail_date_of_join; ?></span></p>
                <!-- <p class="ic_my3"></p> -->
              </div>
            </a>

              <?php
            }

          }
        }
        ?></a></li>
              <!-- <li class="divider"></li>
              <li><a href="#">
                <div><em class="fa fa-heart"></em> 12 New Likes
                  <span class="pull-right text-muted small">4 mins ago</span></div>
              </a></li> 
              <li class="divider"></li> -->
              <li><a href="#">
                <div>

<?php 
foreach ($user_detail as $key => $user_detail_notification) {
  $user_detail_id=$user_detail_notification->user_id;
  $user_detail_name=$user_detail_notification->name;
  $user_detail_login_data=$user_detail_notification->login_date;

foreach ($data as $key => $supplier_detail_data) {
  $user_detail_id_notification=$supplier_detail_data->user_id;
  /*$supplier_detail_contact_name=$supplier_detail_notification->contact_name;
  $supplier_detail_date_of_join=$supplier_detail_notification->date_of_join;*/
  if($user_detail_id==$user_detail_id_notification)
  {
?>


<a href="<?php echo base_url();?>All_pages/view_details_user?id=<?php echo $user_detail_id;?>">
                  <!-- <em class="fa fa-user"></em> User- <?php echo $user_detail_name; echo $user_detail_login_data;?> -->
                
<div class="mystry">
                
                <p class="ic_my2">New User Register-<?php echo $user_detail_name ;?>  <span><?php echo $user_detail_login_data; ?></span></p>
                <!-- <p class="ic_my3"></p> -->
              </div>

                </a>
              
<?php 
}
}
}
?>
              </a></li>

            </ul>
          </li> </a>


          <li class="dropdown">

            <a class="dropdown-toggle" data-toggle="dropdown">
              <em class="fa fa-gear"></em>
            </a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo base_url();?>All_pages/change_password">
                  <div><em class="fa fa-unlock-alt"></em>Change Password</div>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div><!-- /.container-fluid -->
  </nav>