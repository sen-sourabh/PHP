<?php
    require "header/header.php";
?>
<style type="text/css">
    /*Style for display image before insert database*/
    #PreviewPicture
    {
        width: 220px;
        height: 150px;
        background-position: center center;
        background-size: cover;
        /*-webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);*/
        display: inline-block;
    }
</style>

<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>/assets/css/demo.css">
<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>/assets/css/jquery-te-1.4.0.css">

<script type="text/javascript" src="http://code.jquery.com/jquery.min.js" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery-te-1.4.0.min.js" charset="utf-8"></script>

<?php
    foreach($blog_data as $row)
    {
?>
<form method="post" enctype="multipart/form-data">
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li>
                    <a href="<?php echo base_url();?>index">
                        <em class="fa fa-home"></em>
                    </a>
                </li>
                <li class="active">Blogs / Edit Blog</li>
            </ol>
        </div>
        <!--/.row-->
        <div class="productde">
            <div class="">
                <div class="row">
                        <div class="col-lg-9">
                            <div class="mybts">
                                <h3 class="addme">Edit Blog</h3>
                                <input type="text" value="<?php echo $row->blogs_title;?>" name="title" class="form-control" placeholder="Enter Title Here" required="required">
                                <textarea name="desc" class="jqte-test" placeholder="Description"><?php echo $row->blogs_desc;?></textarea>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="box">
                                <div class="panel panel-default ">
                                    <div class="panel-heading">
                                        Publish
                                        <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
                                    <div class="panel-body timeline-container">
                                        <input type="submit" name="save" class="btn btn-default draftbtn" value="Save Draft"/>
                                        <!-- <button type="button" class="btn btn-default pull-right draftbtn">Preview</button> -->
                                        <p> <i class="fa fa-map-pin"></i> Status :  <?php echo $row->blogs_save;?> </p>
                                        <p> <i class="fa fa-eye"></i> Visibilty : Public <a href="#">Edit</a></p>
                                        <p> <i class="fa fa-calendar"></i> Publish immediately <a href="#">Edit</a></p>
                                    </div>
                                    <input type="submit" name="publish" class="btn btn-primary pull-right publisbtn" value="Publish"/>
                                </div>
                            </div>
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
                                                    foreach($parent as $row)
                                                    {
                                                ?>
                                                        <option value="<?php echo $row->parent;?>">
                                                            <?php echo $row->parent;?>
                                                        </option>
                                                      echo "<option value=".$row->parent.">".$row->parent."</option>"; 
                                                <?php
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Template</label>
                                            <select name="template" class="form-control">
                                                <?php
                                                    foreach($template as $row)
                                                    {
                                                ?>
                                                        <option value="<?php echo $row->template;?>">
                                                            <?php echo $row->template;?>
                                                        </option>
                                                       echo "<option value=".$row->template.">".$row->template."</option>"; 
                                                <?php
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Order</label>
                                            <input type="text" name="pageorder" placeholder="0" class="form-control">
                                        </div>
                                        <p>Need Help? Use the Help tab above the screen title.</p>

                                    </div>
                                </div>
                            </div> -->
                            <div class="box">
                                <div class="panel panel-default ">
                                    <div class="panel-heading">
                                        Featured Images
                                        <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
                                    <div class="panel-body timeline-container">
                                        <h4>Current Image</h4>
                                        <div class="panel-body timeline-container">
                                            <img src="<?php echo base_url();?>image/<?php echo $row->blogs_image;?>"  onerror="this.src='http://endeavoritsolution.com/webookit/assets/images/placeholder.png'">
                                            <input type="hidden" name="old_image" vlaue="<?php echo $blogs_image;?>"/>
                                        </div>
                                        <br>
                                        <h4>Add New Image</h4>
                                        <div id="PreviewPicture"></div>
                                        <label for="file-input">
                                            <p style="color:#30a5ff;text-decoration:underline;cursor:pointer;">
                                                set featured image
                                            </p>
                                        </label>
                                        <input id="file-input" name="image" type="file" onchange="ImagePreview()" style="display:none;"/>
                                    </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</form>
<?php
    }
?>

<?php
    require "footer/footer.php";
?>
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
<!-- Display image before insert in database -->
<script type="text/javascript">
    function ImagePreview() 
    { 
        var PreviewIMG = document.getElementById('PreviewPicture'); 
        var UploadFile    =  document.getElementById('file-input').files[0]; 
        var ReaderObj  =  new FileReader(); 
        ReaderObj.onloadend = function () 
        { 
           PreviewIMG.style.backgroundImage  = "url("+ ReaderObj.result+")";
        } 
        if (UploadFile) 
        { 
           ReaderObj.readAsDataURL(UploadFile);
        } 
        else 
        { 
            PreviewIMG.style.backgroundImage  = "";
        } 
    }
</script>