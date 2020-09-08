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
<form method="post">
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li>
                    <a href="#">
                        <em class="fa fa-home"></em>
                    </a>
                </li>
                <li class="active">All Post</li>
            </ol>
        </div>
        <!--/.row-->
        <div class="productde">
            <div class="">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="allpage_doc">
                            <span class="meta2"> Posts</span>
                            <button type="button" onclick="location.href='post_add';" class="btn btn-default draftbtn">Add New</button>
                            <div class="row">
                                <div class="col-lg-8">
                                    <ul class="allpageul">
                                        <li><a href="all_post">All </a>(
                                            <?php foreach($countallpost as $row)
                                            {
                                                echo $row->countallpost;
                                            }
                                            ?>
                                            )</li>
                                        <li><a href="published_post"> Published </a>(
                                            <?php foreach($countpublishpost as $row)
                                            {
                                                echo $row->countpublishpost;
                                            }
                                            ?>
                                        )</li>
                                        <li><a href="draft_post">  Draft </a>(
                                            <?php foreach($countdraftpost as $row)
                                            {
                                                echo $row->countdraftpost;
                                            }
                                            ?>)</li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <div class="serc_allpage">
                                        <div class="input-group">
                                                <input id="btn-input" name="searchbox" type="text" class="form-control jsrt input-md" placeholder="" /><span class="input-group-btn">
    								            <input type="submit" name="search" class="btn btn-primary btn-md" id="btn-chat" value="Search Pages"/>
    						                    </span>
                                            </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <ul class="allpageul">
                                        <li>
                                            <div class="form-group">
                                                <select name="delete_selected_post_top" class="form-control">
                                                    <option value="">Bulk Action</option>
                                                    <option value="delete_post_top">Delete</option>
                                                </select>
                                            </div>
                                        </li>
                                        <li>
                                            <!-- <div class="form-group"> -->
                                        	<input type="submit" name="deleteposttop" class="btn btn-default draftbtn" value="Apply"/>
                                            <!-- </div> -->
                                        </li>
                                        <li>
                                        <form method="post">
                                            <div class="form-group">
                                                <select name="filterdate" class="form-control">
                                                    <option value="-">All Dates</option>
                                                    <?php 
                                                        foreach($date as $datedata)
                                                        {
                                                    ?>
                                                    <option value="<?php echo $datedata->postdate;?>"><?php echo $datedata->postdate;?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <select class="form-control">
                                                    <option>All Categories</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                    <option>Option 4</option>
                                                </select>
                                            </div>
                                        </li>
                                        <li>
                                            <input type="submit" name="searchdate" class="btn btn-default draftbtn" value="Filter"/>
                                            </form>
                                        </li>
                                    
                                    </ul>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="allpage_list">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <div class="form-group">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" name="check_all_post" id="check_all_post" value=""><a href="#">Title</a>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </th>
                                                        <th class="aut_cs1">Author</th>
                                                        <th class="aut_cs1">Categories</th>
                                                        <th class="aut_cs1"><i class="fa fa-comment"></i></th>
                                                        <th class="aut_cs1">Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        foreach($data as $row)
                                                        {
                                                    ?>
                                                    <tr>
                                                        <td>
                                                            <div class="form-group">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input name="post_id[]" class="checkbox_post" type="checkbox" value="<?php echo $row->id;?>">
                                                                        <a href="edit_post?id=<?php echo $row->id;?>"> <?php echo $row->title;?>
                                                                        </a>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="aut_cs"><?php echo $row->author;?></td>
                                                        <td class="aut_cs"><?php echo $row->categories;?></td>
                                                        <td class="aut_cs">--</td>
                                                        <td class="aut_cs">
                                                            <?php if(($row->status)=="Publish")
                                                                {
                                                                    echo "Published";
                                                                }
                                                                else
                                                                {
                                                                    echo "Draft";
                                                                }
                                                            ?>
                                                            <br><?php echo $row->postdate;?></td>
                                                    </tr>
                                                    <?php
                                                        }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            	<div class="col-lg-12">
                            		<ul class="allpageul">
                                        <li>
                                            <div class="form-group">
                                                <select name="delete_selected_post_bottom" class="form-control">
                                                    <option value="">Bulk Action</option>
                                                    <option value="delete_post_bottom">Delete</option>
                                                </select>
                                            </div>
                                        </li>
                                        <li>
                                            <input type="submit" name="deletepostbottom" class="btn btn-default draftbtn" value="Apply"/>
                                        </li>
                                    </ul>
                            	</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
    <!--/.main-->

    <!-- Script for bulk delete option -->
    <script type="text/javascript">
        $(document).ready(function(){
            $('#check_all_post').on('click',function(){
                if(this.checked){
                    $('.checkbox_post').each(function(){
                        this.checked = true;
                    });
                }else{
                     $('.checkbox_post').each(function(){
                        this.checked = false;
                    });
                }
            });
            $('.checkbox_post').on('click',function(){
                if($('.checkbox_post:checked').length == $('.checkbox_post').length){
                    $('#check_all_post').prop('checked',true);
                }else{
                    $('#check_all_post').prop('checked',false);
                }
            });
        });
    </script>


    <!-- Script for Designing -->
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