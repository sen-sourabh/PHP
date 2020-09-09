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
                <li class="active">Partner & Suppliers</li>
            </ol>
        </div>
        <!--/.row-->
        <div class="productde">
            <div class="">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="allpage_doc">
                            <span class="meta2"></span>
                            <!-- <button type="button" onclick="location.href='<?php echo base_url();?>add_partner_supplier';" class="btn btn-default draftbtn">Add New</button> -->
                            <div class="row">
                                <div class="col-lg-8">
                                    <ul class="allpageul">
                                        <li><a href="<?php echo base_url();?>partner_supplier">Partner & Suppliers </a>(
                                            <?php 
                                            $counterpartner_supplier = 0;
                                            if($partner_supplier_data){
                                                foreach($partner_supplier_data as $row)
                                                {
                                                    $counterpartner_supplier++;
                                                }
                                            }
                                            if($counterpartner_supplier == 0){ echo $counterpartner_supplier;}else{ echo $counterpartner_supplier;}
                                            ?>
                                        )</li>
                                        <!-- <li><a href="<?php echo base_url();?>all_users"> User </a>( -->
                                            <?php 
                                            // foreach($countuser as $row)
                                            // {
                                            //     echo $row->countuser;
                                            // }
                                            ?>
                                        <!-- )</li> -->
                                        <!-- <li><a href="<?php //echo base_url();?>All_pages/all_suppliers"> Supplier </a>(
                                            <?php //foreach($countsupplier as $row)
                                            {
                                                //echo $row->countsupplier;
                                            }
                                            ?>
                                        )</li> -->
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <div class="serc_allpage">
                                            <div class="input-group">
                                                <input id="btn-input" type="text" class="form-control jsrt input-md" placeholder="Search" name="search_user"/><span class="input-group-btn">
                                                <!-- <input name="searchuser" type="submit" class="btn btn-primary btn-md" id="btn-chat" value="Search"/> -->
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
                                                <select name="delete_from_top" class="form-control">
                                                    <option value="">Bulk Action</option>
                                                    <option value="delete_top">Delete</option>
                                                    <option value="update_status">Update Status</option>
                                                </select>
                                            </div>
                                        </li>
                                        <li>
                                            <input type="submit" name="delete_top" class="btn btn-default draftbtn" value="Apply"/>
                                        </li>
                                        <!-- <li>
                                            <form method="post">
                                                <div class="form-group">
                                                    <select name="filterdate" class="form-control">
                                                        <option value="-">All Dates</option>
                                                        <?php
                                                            //foreach($date as $row)
                                                            {
                                                              //echo "<option value=".$row->savedate.">".$row->savedate."</option>";
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                        </li> 
                                        <li>
                                            <input type="submit" name="filter" class="btn btn-default draftbtn" value="Filter"/>
                                            </form>
                                        </li>  -->
                                        <li>
                                            <button type="button" onclick="location.href='<?php echo base_url();?>add_partner_supplier';" class="btn btn-default draftbtn">Add New</button>
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
                                                                        <!-- <input name="check_all_post" id="check_all_post" type="checkbox" value=""> -->
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </th>
                                                        <th class="aut_cs1">Image</th>
                                                        <th class="aut_cs1">Name</th>
                                                        <!-- <th class="aut_cs1">Email</th> -->
                                                        <th class="aut_cs1">Expertise</th>
                                                        <th class="aut_cs1">Joining Date</th>
                                                        <th class="aut_cs1">Status</th>
                                                        <th class="aut_cs1">Verified</th>
                                                        <!-- <th class="aut_cs1">Delete</th> -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    if($partner_supplier_data)
                                                    {
                                                        foreach($partner_supplier_data as $row)
                                                        {
                                                    ?>
                                                    <tr class="single">
                                                        <td>
                                                            <div class="form-group">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input name="user_id[]" class="checkbox_post" type="checkbox" value="<?php echo $row->expert_id;?>">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="aut_cs">
                                                            <img src="http://endeavoritsolution.com/webookit/image/<?php echo $row->expert_image;?>" onerror="this.src='http://endeavoritsolution.com/webookit/assets/images/placeholder.png'" style="width:30px;height:30px;"/>
                                                        </td>
                                                        <td class="aut_cs"><a href="<?php echo base_url();?>partner_supplier_details?id=<?php echo $row->expert_id;?>"><?php echo $row->expert_name;?></a></td>
                                                        <!-- <td class="aut_cs"><?php echo $row->expert_email;?></td> -->
                                                        <td class="aut_cs"><?php echo $row->expert_expertise;?></td>
                                                        <td class="aut_cs"><?php echo $row->expert_joining_date;?></td>
                                                        <td class="aut_cs">
                                                            <?php 
                                                                if ($row->expert_status == 1)
                                                                {
                                                            ?>
                                                            
                                                            <a href="active_partner_supplier?id=<?php echo $row->expert_id;?>" style="color:white;background-color: #1ea69a;" type="submit" class="btn btn-xs" name="status">Active</a>&nbsp;
                                                            <?php 
                                                                }
                                                                else
                                                                {
                                                            ?>
                                                            <a href="blocked_partner_supplier?id=<?php echo $row->expert_id;?>" type="submit" class="btn btn-danger btn-xs" name="status">Blocked</a>
                                                            <?php
                                                                }
                                                            ?>
                                                        </td>
                                                        <td class="aut_cs">
                                                            <?php 
                                                                if($row->expert_email_verification == 0){
                                                            ?>
                                                                <span style="font-size: 12px;font-weight: normal;" class="label label-success">Verified</span> 
                                                            <?php
                                                                }else{
                                                            ?>
                                                                <span style="font-size: 12px;font-weight: normal;" class="label label-danger">Not Verified</span>
                                                            <?php
                                                                }
                                                            ?>
                                                        </td>
                                                        <!-- <td class="aut_cs">
                                                            <a href="view_details_user?id=<?php echo $row->user_id;?>"><i class="fa fa-eye fa_size1"></i></a>
                                                            <a href="delete_user?id=<?php echo $row->user_id;?>"><i class="fa fa-trash fa_size"></i>
                                                            </a>
                                                        </td> -->
                                                    </tr>
                                                    <?php
                                                        }
                                                    }
                                                    else
                                                    {
                                                        ?>
                                                        <tr>
                                                            <td class="aut_cs" colspan="6">No Partner & Supplier Available.</td>
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
                            <br>
                            <div class="row">
                                <div class="col-lg-12">
                                    <ul class="allpageul">
                                        <li>
                                            <div class="form-group">
                                                <select name="delete_from_bottom" class="form-control">
                                                    <option value="">Bulk Action</option>
                                                    <option value="delete_bottom">Delete</option>
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