<?php
  require("header.php");
  $result = mysqli_query($con,"SELECT ppts.*, rating.*, AVG(rating.rating_number) AS avg_rate FROM ppts LEFT JOIN rating ON ppts.ppts_id=rating.rating_ppts_id GROUP BY ppts.ppts_id ORDER BY ppts.ppts_id DESC");
?>
<style>
.rate-star
{
  color:#9da8b5;
}
.checked
{
  color:#172d44;
}
</style>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Articles </h3>
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
                            <th class="column-title">Image</th>
                            <th class="column-title">Title </th>
                            <th class="column-title">Description </th>
                            <th class="column-title">User Email </th>
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
                          if(mysqli_fetch_array($result))
                          {
                            while($row = mysqli_fetch_array($result))
                            {
                          ?>
                          <tr class="even pointer">
                            <td class=" ">
                              <img src="images/<?php echo $row['ppts_image'];?>" alt="..." style="width:40px;height:40px;"/>
                            </td>
                            <td class=" "><?php 
                                            echo $row['ppts_title']."<br>";
                                            $count = 1; $max_rate = 5;
                                            while($count <= $max_rate)
                                            {
                                              if($count <= $row['avg_rate'])
                                              {
                                                echo "<span class='fa fa-star checked'></span>";
                                              }
                                              else
                                              {
                                                echo "<span class='fa fa-star rate-star'></span>";
                                              }
                                              $count++;   
                                            }
                                          ?></td>
                            <td class=" "><?php echo $row['ppts_desc'];?></td>
                            <td class=" "><?php echo $row['ppts_email'];?></td>
                            <td class=" "><?php echo $row['ppts_date'];?></td>
                            <td class=" last"><a href="delete_article.php?article_id=<?php echo $row['ppts_id'];?>">Delete</a>
                            </td>
                          </tr>
                          <?php
                            }
                          }
                          else
                          {
                          ?>
                          <td class=" " colspan="6">No Articles Uploaded Yet.</td>
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