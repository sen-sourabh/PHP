<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Dashboard</title>
    <link href="<?php echo base_url();?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/css/datepicker3.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/css/styles.css" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>/assets/css/demo.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>/assets/css/jquery-te-1.4.0.css">

    <script type="text/javascript" src="http://code.jquery.com/jquery.min.js" charset="utf-8"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery-te-1.4.0.min.js" charset="utf-8"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span></button>
                <a class="navbar-brand" href="#"><span>Endevor</span> Admin</a>
                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <em class="fa fa-envelope"></em><span class="label label-danger">15</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
                                    </a>
                                    <div class="message-body"><small class="pull-right">3 mins ago</small>
                                        <a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
                                        <br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
                                    </a>
                                    <div class="message-body"><small class="pull-right">1 hour ago</small>
                                        <a href="#">New message from <strong>Jane Doe</strong>.</a>
                                        <br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="all-button">
                                    <a href="#">
                                        <em class="fa fa-inbox"></em> <strong>All Messages</strong>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <em class="fa fa-bell"></em><span class="label label-info">5</span>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="#">
                                    <div><em class="fa fa-envelope"></em> 1 New Message
                                        <span class="pull-right text-muted small">3 mins ago</span></div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div><em class="fa fa-heart"></em> 12 New Likes
                                        <span class="pull-right text-muted small">4 mins ago</span></div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div><em class="fa fa-user"></em> 5 New Followers
                                        <span class="pull-right text-muted small">4 mins ago</span></div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
            <div class="profile-userpic">
                <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
            </div>
            <div class="profile-usertitle">
                <div class="profile-usertitle-name"><?php echo $this->session->userdata('username');?></div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>

        <ul class="nav menu">
            <li><a href="index"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
            <li><a href="widgets.html"><em class="fa fa-product-hunt">&nbsp;</em> Products</a></li>
            <li class="parent ">
                <a data-toggle="collapse" href="#sub-item-1">
                    <em class="fa fa-navicon">&nbsp;</em> Page <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-1">
                    <li>
                        <a class="" href="allpage">
                            <span class="fa fa-arrow-right">&nbsp;</span> All Page
                        </a>
                    </li>
                    <li>
                        <a class="" href="addnewpage">
                            <span class="fa fa-arrow-right">&nbsp;</span> Add New
                        </a>
                    </li>
                </ul>
            </li>
            <li class="parent ">
                <a data-toggle="collapse" href="#sub-item-2">
                    <em class="fa fa-navicon">&nbsp;</em> Post <span data-toggle="collapse" href="#sub-item-2" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-2">
                    <li>
                        <a class="" href="all_post">
                            <span class="fa fa-arrow-right">&nbsp;</span> All Post
                        </a>
                    </li>
                    <li>
                        <a class="" href="post_add">
                            <span class="fa fa-arrow-right">&nbsp;</span> Add New
                        </a>
                    </li>
                    <li>
                        <a class="" href="categories">
                            <span class="fa fa-arrow-right">&nbsp;</span> Catagories
                        </a>
                    </li>
                </ul>
            </li>
            <li><a href="charts.html"><em class="fa fa-bar-chart">&nbsp;</em> Charts</a></li>
            <li><a href="<?php echo base_url();?>index.php/Login/logout"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>

        </ul>
    </div>
    <!--/.sidebar-->

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li>
                    <a href="#">
                        <em class="fa fa-home"></em>
                    </a>
                </li>
                <li class="active">Post</li>
            </ol>
        </div>
        <!--/.row-->
        <div class="productde">
            <div class="">
                <div class="row">
                    <form method="post">
                        <div class="col-lg-9">
                            <div class="mybts">
                                <h3 class="addme">Add New Post</h3>
                                <input type="text" name="title" class="form-control" placeholder="Enter Titel Here" required="required">
                                <textarea name="content" class="jqte-test"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="box">
                                <div class="panel panel-default ">
                                    <div class="panel-heading">
                                        Publish
                                        <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
                                    <div class="panel-body timeline-container">
                                        <input name="save" type="submit" class="btn btn-default draftbtn" value="Save Draft"/>
                                        <button type="button" class="btn btn-default pull-right draftbtn">Preview</button>
                                        <p> <i class="fa fa-map-pin"></i> Status : Draft <a href="#">Edit</a></p>
                                        <p> <i class="fa fa-eye"></i> Visibilty : Public <a href="#">Edit</a></p>
                                        <p> <i class="fa fa-calendar"></i> Publish immediately <a href="#">Edit</a></p>

                                    </div>
                                    <input name="publish" type="submit" class="btn btn-primary pull-right publisbtn" value="Publish"/>
                                </div>
                            </div>
                            <!-- PAGE ATTRIBUTES -->
                            <!-- <div class="box">
                                <div class="panel panel-default ">
                                    <div class="panel-heading">
                                        Page Attributes
                                        <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
                                    <div class="panel-body timeline-container">
                                        <div class="form-group">
                                            <label>Parent</label>
                                            <select name="parent" class="form-control">
                                                <?php
                                                        // foreach($parent as $row)
                                                        //  {
                                                        //    echo "<option value=".$row->id.">".$row->parent."</option>";
                                                        // }
                                                    ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Template</label>
                                            <select name="template" class="form-control">
                                                <?php
                                                        // foreach($template as $row)
                                                        // {
                                                        //   echo "<option value=".$row->id.">".$row->template."</option>";
                                                        // }
                                                    ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Order</label>
                                            <input type="text" name="postorder" placeholder="0" class="form-control"/>
                                        </div>
                                        <p>Need Help? Use the Help tab above the screen title.</p>
                                    </div>
                                </div>
                            </div> -->
                            <!-- CATEGORIES -->
                            <!-- <div class="box">
                                <div class="panel panel-default ">
                                    <div class="panel-heading">
                                        Categories
                                        <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
                                    </div>
                                    <div class="panel-body timeline-container">
                                        <div class="form-group">
                                            <?php 
                                                // foreach($category as $row)
                                                // {
                                            ?>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="category" id="optionsRadios1" value="<?php //echo $row->id;?>"/>
                                                    <i class="fa fa-quote-left"></i>
                                                    <?php //echo $row->category;?>
                                                </label>
                                            </div>
                                            
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="category" id="optionsRadios2" value="link">
                                                    <i class="fa fa-link"></i> Link
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="category" id="optionsRadios3" value="gallery">
                                                    <i class="fa fa-folder"></i> Gallery
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="category" id="optionsRadios3" value="audio">
                                                    <i class="fa fa-music"></i> Audio
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="category" id="optionsRadios3" value="chat">
                                                    <i class="fa fa-comment"></i> Chat
                                                </label>
                                            </div>
                                            <?php
                                                // }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="box">
                                <div class="panel panel-default ">
                                    <div class="panel-heading">
                                        Categories
                                        <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
                                    </div>
                                    <div class="panel-body timeline-container">
                                        <div class="categories_uncate">
                                            <div class="panel panel-default">
                                                <div class="panel-body tabs">
                                                    <ul class="nav nav-tabs">
                                                        <li class="active"><a href="#tab1" data-toggle="tab">All Categories</a></li>
                                                        <li><a href="#tab2" data-toggle="tab">Most Used</a></li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div class="tab-pane fade in active" id="tab1">
                                                            <?php 
                                                                foreach($category as $row)
                                                                {
                                                            ?>
                                                            <div class="form-group">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="category[]" value="<?php echo $row->id;?>">
                                                                        <?php
                                                                            
                                                                            echo $row->categories;
                                                                        ?>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <?php
                                                                }
                                                            ?>
                                                        </div>
                                                        <div class="tab-pane fade" id="tab2">
                                                            <div class="form-group">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="">Categories
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/.panel-->
                                            <p><a href="categories">+ Add New Categories</a></p>
                                        </div>
                                        <!--/.col-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!--/.main-->
    <script type="text/javascript">
        $("input[type='image']").click(function() {
            $("input[id='my_file']").click();
        });
    </script>
    <script>
        $('.jqte-test').jqte();

        // settings of status
        var jqteStatus = true;
        $(".status").click(function() {
            jqteStatus = jqteStatus ? false : true;
            $('.jqte-test').jqte({
                "status": jqteStatus
            })
        });
    </script>
    <script src="<?php echo base_url();?>/assets/js/jquery-1.11.1.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/chart.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/chart-data.js"></script>
    <script src="<?php echo base_url();?>/assets/js/easypiechart.js"></script>
    <script src="<?php echo base_url();?>/assets/js/easypiechart-data.js"></script>
    <script src="<?php echo base_url();?>/assets/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url();?>/assets/js/custom.js"></script>

</body>
</html>