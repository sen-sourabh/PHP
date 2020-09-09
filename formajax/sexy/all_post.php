<?php
    require "header/header.php";
?>
<style type="text/css">
    #btn-input{
        width:350px;
    }
</style>
<form method="post">
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li>
                    <a href="<?php echo base_url();?>index">
                        <em class="fa fa-home"></em>
                    </a>
                </li>
                <li class="active">Blogs</li>
            </ol>
        </div>
        <!--/.row-->
        <div class="productde">
            <div class="">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="allpage_doc">
                            <span class="meta2"> </span>
                            
                            <div class="row">
                                <div class="col-lg-8">
                                    <ul class="allpageul">
                                        <li><a href="all_post">All </a>(
                                            <?php 
                                            // foreach($countallpost as $row)
                                            // {
                                            //     echo $row->countallpost;
                                            // }
                                            ?>
                                            )</li>
                                        <li><a href="published_post"> Published </a>(
                                            <?php 
                                            // foreach($countpublishpost as $row)
                                            // {
                                            //     echo $row->countpublishpost;
                                            // }
                                            ?>
                                        )</li>
                                        <li><a href="draft_post">  Draft </a>(
                                            <?php 
                                            // foreach($countdraftpost as $row)
                                            // {
                                            //     echo $row->countdraftpost;
                                            // }
                                            ?>)</li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <div class="serc_allpage">
                                        
                                            <div class="input-group">
                                                <input id="btn-input" type="text" class="form-control jsrt input-md" placeholder="Search" name="search_user"/><span class="input-group-btn">
                                            </div>
                                        
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <ul class="allpageul">
                                        <li>
                                            <div class="form-group">
                                                <select name="delete_from_top" class="form-control">
                                                    <option value="">Bulk Action</option>
                                                    <option value="delete">Delete</option>
                                                    <option value="update_status">Update Status</option>
                                                </select>
                                            </div>
                                        </li>
                                        <li>
                                            <!-- <div class="form-group"> -->
                                            <input type="submit" name="delete_top" class="btn btn-default draftbtn" value="Apply"/>
                                            <!-- </div> -->
                                        </li>
                                        <!-- <li>
                                        
                                            <div class="form-group">
                                                <select name="filterdate" class="form-control">
                                                    <option value="-">All Dates</option>
                                                    <?php 
                                                        // foreach($date as $datedata)
                                                        // {
                                                    ?>
                                                    <option value="<?php //echo $datedata->postdate;?>"><?php //echo $datedata->postdate;?></option>
                                                    <?php
                                                        // }
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
                                            
                                        </li> -->
                                        <li>
                                            <button type="button" onclick="location.href='add_post';" class="btn btn-default draftbtn">Add Blog</button>
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
                                                                        <!-- <input type="checkbox" name="check_all_post" id="check_all_post" value=""> -->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </th>
                                                        <th class="aut_cs1"><a href="#">Title</a></th>
                                                        <!-- <th class="aut_cs1">Description</th> -->
                                                        <th class="aut_cs1">Author</th>
                                                        <th class="aut_cs1"><i style="font-size: large;" class="fa fa-thumbs-up"></i></th>
                                                        <th class="aut_cs1"><i style="font-size: larger;" class="fa fa-comment"></i></th>
                                                        <th class="aut_cs1">Date</th>
                                                        <th class="aut_cs1">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    if($post_data)
                                                    {
                                                        foreach($post_data as $row)
                                                        {
                                                    ?>
                                                    <tr class="single">
                                                        <td>
                                                            <div class="form-group">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input name="blog_id[]" class="checkbox_post" type="checkbox" value="<?php echo $row->blogs_id;?>">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="aut_cs">
                                                            <a href="edit_post?blog_id=<?php echo $row->blogs_id;?>"> <?php echo $row->blogs_title;?>
                                                            </a>
                                                        </td>
                                                        <!-- <td class="aut_cs"><?php echo $row->blogs_desc;?></td> -->
                                                        <td class="aut_cs"><?php echo $row->blogs_author;?></td>
                                                        <td class="aut_cs">0</td>
                                                        <td class="aut_cs">0</td>
                                                        <td class="aut_cs">
                                                            <?php if(($row->blogs_save)=="publish")
                                                                {
                                                                    echo "<p style='font-weight:bold;'>Publish</p>";
                                                                }
                                                                else
                                                                {
                                                                    echo "<p style='font-weight:bold;'>Draft</p>";
                                                                }
                                                            ?>
                                                            <br><?php echo $row->blogs_date;?>
                                                        </td>
                                                        <td class="aut_cs">
                                                            <?php 
                                                                if(($row->blogs_status) == 1)
                                                                {
                                                            ?>
                                                                    <a href="active_blog?blog_id=<?php echo $row->blogs_id;?>" style="color:white;background-color: #1ea69a;" type="submit" class="btn btn-xs" name="status">Active</a>&nbsp;
                                                            <?php
                                                                }
                                                                else
                                                                {
                                                            ?>
                                                                    <a href="blocked_blog?blog_id=<?php echo $row->blogs_id;?>" type="submit" class="btn btn-danger btn-xs" name="status">Blocked</a>
                                                            <?php
                                                                }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                            }
                                                        }
                                                        else
                                                        {
                                                    ?>
                                                        <tr>
                                                            <td class="aut_cs" colspan="8">No Blogs Available.</td>
                                                        </tr>
                                                    <?php
                                                        }
                                                    ?>
                                                    <!-- <tr>
                                                        <td>
                                                            <div class="form-group">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value=""><a href="#"> About Home</a>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="aut_cs">Admin</td>
                                                        <td class="aut_cs">Categories</td>
                                                        <td class="aut_cs">--</td>
                                                        <td class="aut_cs">Published
                                                            <br>10/12/2018</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-group">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value=""><a href="#"> Banner Home</a>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="aut_cs">Admin</td>
                                                        <td class="aut_cs">Uncategories</td>
                                                        <td class="aut_cs">--</td>
                                                        <td class="aut_cs">Published
                                                            <br>10/12/2018</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-group">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value=""><a href="#"> Cart</a>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="aut_cs">Admin</td>
                                                        <td class="aut_cs">Categories</td>
                                                        <td class="aut_cs">--</td>
                                                        <td class="aut_cs">Published
                                                            <br>10/12/2018</td>
                                                    </tr> -->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <br>
                                    <ul class="allpageul">
                                        <li>
                                            <div class="form-group">
                                                <select name="delete_from_top" class="form-control">
                                                    <option value="">Bulk Action</option>
                                                    <option value="delete">Delete</option>
                                                    <option value="update_status">Update Status</option>
                                                </select>
                                            </div>
                                        </li>
                                        <li>
                                            <input type="submit" name="delete_bottom" class="btn btn-default draftbtn" value="Apply"/>
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




<?php
    require "footer/footer.php";
?>
<script>
$(document).ready(function(){
 $("#btn-input").on("keyup", function() {
   var value = $(this).val().toLowerCase();
   $(".single").filter(function() {
     $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
   });
 });
});
</script>