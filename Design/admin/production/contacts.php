<?php
  require("header.php");
  $result = mysqli_query($con,"SELECT * FROM contact");
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Contact </h3>
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

                  <div class="x_content">

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <!-- <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th> -->
                            <th class="column-title">Name </th>
                            <th class="column-title">Email </th>
                            <th class="column-title">Phone </th>
                            <th class="column-title">Message </th>
                            <th class="column-title">Created Date </th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <!-- <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th> -->
                          </tr>
                        </thead>

                        <tbody>
                          <?php
                            while($row = mysqli_fetch_array($result))
                            {
                          ?>
                          <tr class="even pointer">
                            <!-- <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td> -->
                            <td class=" "><?php echo $row['contact_name'];?></td>
                            <td class=" "><?php echo $row['contact_email'];?></td>
                            <td class=" "><?php echo $row['contact_phone'];?></td>
                            <td class=" "><?php echo $row['contact_message'];?></td>
                            <td class=" "><?php echo $row['contact_created_date'];?></td>
                            <td class=" last"><a href="delete_contact.php?contact_id=<?php echo $row['contact_id'];?>">Delete</a>
                            </td>
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
            </div>
          </div>
        </div>
        <!-- /page content -->
<?php
  require("footer.php");
?>