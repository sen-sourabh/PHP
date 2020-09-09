<div class="post_view_wrapper">
        <div class="post_view_wrapper_top">
            <div class="post_view_wrapper_top_left">
                <img src="<?php echo base_url();?>assets/img/<?php echo $value_post_data->user_image;?>" onError="this.src = '<?php echo base_url();?>assets/images/admin1.png'" alt="images">
                <h4><a href="<?php echo base_url();?>members_profile?poster_id=<?php echo $value_post_data->user_id;?>"><?php echo $value_post_data->first_name;?></a> has added a new cover photo.
                    <?php 
                       //  if($value_post_data->post_type=="video")
                       // {
                       //      echo "has added a new video.";
                       // }
                       // else if($value_post_data->post_type==$value_post_data->user_cover_image)
                       // {
                       //      echo "has added a new cover photo.";
                       // }
                       // else if(($value_post_data->post_type)==($value_post_data->user_image))
                       // {
                       //      echo "has changed the";
                       // }
                       // else if($value_post_data->post_type=="text")
                       // {
                       //      echo "post.";
                       // }
                       // else
                       // {
                       //      echo "image.";
                       // }
                    ?>
                </h4>
                <h5> <?php echo $value_post_data->post_date;?></h5>
            </div>
            <div class="post_view_wrapper_top_right">
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" data-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></button>
                    <ul class="dropdown-menu">
                        <?php
                            if($value_user->user_id==$value_post_data->post_user_id)
                            {
                              ?>
                            <li><a href="#">Save Feed</a></li>
                            <li><a href="#">Feed Link</a></li>
                            <li><a href="#">Edit Feed</a></li>

                            <li><a href="javascript:;" onclick="delete_post(<?php echo $value_post_data->post_id;?>)">Delete Feed</a></li>

                            <script type="text/javascript">
                                function delete_post(delid) {
                                    var xmlhttp;
                                    xmlhttp = new XMLHttpRequest();
                                    xmlhttp.open("GET", "<?php echo base_url();?>delete_post?id=" + delid + "");
                                    xmlhttp.send(null);
                                    showUser();
                                }
                            </script>
                            <li><a href="#">Turn Off Notifications</a></li>
                            <li><a href="javascript:;" onclick="enable_comment(<?php echo $value_post_data->post_id;?>)">Disable Comments</a></li>

                            <script type="text/javascript">
                                function enable_comment(enableid) {
                                    var xmlhttp;
                                    xmlhttp = new XMLHttpRequest();
                                    xmlhttp.open("GET", "<?php echo base_url();?>enable_comment?id=" + enableid + "");
                                    xmlhttp.send(null);
                                    showUser();
                                }
                            </script>

                            <li><a href="#">Lock This Feed</a></li>
                            <?php
                                   }
                                   else
                                   {
                                    ?>
                                <li><a href="#">Save Feed</a></li>
                                <li><a href="#">Feed Link</a></li>
                                <li><a href="#">Hide</a></li>
                                <li><a href="#">Report Feed</a></li>
                                <li><a href="#">Hide all by Admin</a></li>
                                <?php
                                    }
                                    ?>

                    </ul>
                </div>
            </div>
        </div>
        <div class="post_view_wrapper_middle">
            <?php
                      if($value_post_data->post_type=="video")
                       {
                        ?>
                <div class="vide">
                    <div id='myElement<?php echo $value_post_data->post_value;?>'>Loading the player...</div>

                </div>
                <script type='text/javascript'>

 
 jwplayer('myElement<?php echo $value_post_data->post_value;?>').setup({
    file: '<?php echo base_url();?>uploads/<?php echo $value_post_data->post_value;?>',
 aboutlink: '',
        controls: 'true',
        title: 'simo lazaar',
        width: '100%',
        aspectratio: '16:7.5',
        stretching: 'uniform',
        "autostart": "false",
        primary: 'flash',
 skin: 'roundster',
 androidhls: 'true',
  //sources: "true",
 // label: "SD",
image: "",logo: {file:"",link: ""},
sources: [{
        file: "<?php echo base_url();?>uploads/<?php echo $value_post_data->post_value;?>",
        label: "Full HD"
      },
{
        file: "<?php echo base_url();?>uploads/<?php echo $value_post_data->post_value;?>",
        label: "720p HD",
        "default": "true"
      },{
        file: "<?php echo base_url();?>uploads/<?php echo $value_post_data->post_value;?>",
        label: "360p SD"
      }],
"sharing": {
                            "sites": ["reddit", "facebook", "twitter"]
                        }

        
    });


/*
                    jwplayer("myElement<?php echo $value_post_data->post_value;?>").setup({
                        "sources": [{
                            "file": "<?php echo base_url();?>uploads/<?php echo $value_post_data->post_value;?>",
                            "label": "HD"

                        }, {
                            "file": "<?php echo base_url();?>uploads/<?php echo $value_post_data->post_value;?>",
                            "label": "SD"

                        }],
                        "sharing": {
                            "sites": ["reddit", "facebook", "twitter"]
                        },
                       "controls": {
                            
                           "scrolling":"none",
                            "preload": "none",
                            
                        
                    });*/
                
                   //jwplayer("myElement<?php echo $value_post_data->post_value;?>").play();*/
                   
                </script>
                <!--  <video autoplay="" controls="">
                                                                                <source src="<?php echo base_url();?>uploads/<?php echo $value_post_data->post_value;?>" type="video/mp4">
                                                                                <source src="<?php echo base_url();?>uploads/<?php echo $value_post_data->post_value;?>" type="video/mp4">
                                                                                <source src="<?php echo base_url();?>uploads/<?php echo $value_post_data->post_value;?>" type="video/mkv">
                                                                                <source src="<?php echo base_url();?>uploads/<?php echo $value_post_data->post_value;?>" type="video/mov">
                                                                                <source src="<?php echo base_url();?>uploads/<?php echo $value_post_data->post_value;?>" type="video/mpg">
                                                                                <source src="<?php echo base_url();?>uploads/<?php echo $value_post_data->post_value;?>" type="video/mpeg">
                                                                                <source src="<?php echo base_url();?>uploads/<?php echo $value_post_data->post_value;?>" type="video/wmv">
                                                                                <source src="<?php echo base_url();?>uploads/<?php echo $value_post_data->post_value;?>" type="video/avi">
                                                                            </video> -->
                <?
                          }
                          

                       
                          else if($value_post_data->post_type=="image")
                          {
                            ?>
                    <img src="<?php echo base_url();?>assets/img/<?php echo $value_post_data->post_value;?>" alt="images">
                    <?php
                        }
                        else
                        {
                            echo $value_post_data->post_value;
                        }
                        ?>
        </div>
        <div class="post_view_wrapper_bottom">
            <ul class="post_btm_link">
                <li class="post_btm_link_like">
                    <?php
                        foreach($post_likes as $num_likes)
                        {
                            if($value_post_data->post_id == $num_likes->like_post_id)
                            {
                                ++$post_like_count;
                            }
                        }
                        if($post_like_count)
                        {

                        ?>
                            <img style="width:18px;" src="<?php echo base_url();?>assets/images/reactions_like.png">
                        <?php
                            echo $post_like_count;    
                        }
                        else
                        {
                            echo "";
                        }
                    ?>

                    <a href="#">Like
                    <div class="like_reaction_box">
                        <form method="post">
                            <input type="hidden" id="comment_id<?php echo $value_post_data->post_id;?>" value="<?php echo $value_post_data->post_id;?>"/>
                            <div class="like_reaction_icon reaction_like">
                                <a href="javascript:;" id="like<?php echo $value_post_data->post_id;?>"><img src="<?php echo base_url();?>assets/images/reactions_like.png"></a><span>Like</span>
                            </div>
                            <div class="like_reaction_icon reaction_love">
                                <a href="javascript:;" id="love<?php echo $value_post_data->post_id;?>"><img src="<?php echo base_url();?>assets/images/reactions_love.png"></a><span>Love</span>
                            </div>
                            <div class="like_reaction_icon reaction_haha">
                                <a href="javascript:;" id="haha<?php echo $value_post_data->post_id;?>"><img src="<?php echo base_url();?>assets/images/reactions_haha.png"></a><span>Haha</span>
                            </div>
                            <div class="like_reaction_icon reaction_wow">
                                <a href="javascript:;" id="wow<?php echo $value_post_data->post_id;?>"><img src="<?php echo base_url();?>assets/images/reactions_wow.png"></a><span>Wow</span>
                            </div>
                            <div class="like_reaction_icon reaction_sad">
                                <a href="javascript:;" id="sad<?php echo $value_post_data->post_id;?>"><img src="<?php echo base_url();?>assets/images/reactions_sad.png"></a><span>Sad</span>
                            </div>
                            <div class="like_reaction_icon reaction_angry">
                                <a href="javascript:;" id="angry<?php echo $value_post_data->post_id;?>"><img src="<?php echo base_url();?>assets/images/reactions_angry.png"></a><span>Angry</span>
                            </div>
                        </form>
                    <script type="text/javascript">
                        BASE_URL = "<?php echo base_url();?>"
                    </script>
                    <script type="text/javascript">
                        $("#like<?php echo $value_post_data->post_id;?>").click(function(){
                        var post_id = document.getElementById("comment_id<?php echo $value_post_data->post_id;?>").value;
                        /*alert(post_id);*/
                        $.ajax({
                            type: "POST",
                            url: "<?php echo base_url();?>post_like",
                            data: {
                            post_id: post_id,
                            like_post: 'like'
                            },
                            success: function(){
                            showUser();
                            }
                        });
                        // to prevent refreshing the whole page page
                        return false;
                        });
                        $("#love<?php echo $value_post_data->post_id;?>").click(function(){
                        var post_id = document.getElementById("comment_id<?php echo $value_post_data->post_id;?>").value;
                        $.ajax({
                            type: "POST",
                            url: "<?php echo base_url();?>post_like",
                            data: {
                            post_id: post_id,
                            like_post: 'love'
                            },
                            success: function(){
                            showUser();
                            }
                        });
                        // to prevent refreshing the whole page page
                        return false;
                        });
                        $("#haha<?php echo $value_post_data->post_id;?>").click(function(){
                        var post_id = document.getElementById("comment_id<?php echo $value_post_data->post_id;?>").value;
                        $.ajax({
                            type: "POST",
                            url: "<?php echo base_url();?>post_like",
                            data: {
                            post_id: post_id,
                            like_post: 'haha'
                            },
                            success: function(){
                            showUser();
                            }
                        });
                        // to prevent refreshing the whole page page
                        return false;
                        });
                        $("#wow<?php echo $value_post_data->post_id;?>").click(function(){ 
                        var post_id = document.getElementById("comment_id<?php echo $value_post_data->post_id;?>").value;
                        $.ajax({
                            type: "POST",
                            url: "<?php echo base_url();?>post_like",
                            data: {
                            post_id: post_id,
                            like_post: 'wow'
                            },
                            success: function(){
                            showUser();
                            }
                        });
                        // to prevent refreshing the whole page page
                        return false;
                        });
                        $("#sad<?php echo $value_post_data->post_id;?>").click(function(){ 
                        var post_id = document.getElementById("comment_id<?php echo $value_post_data->post_id;?>").value;
                        $.ajax({
                            type: "POST",
                            url: "<?php echo base_url();?>post_like",
                            data: {
                            post_id: post_id,
                            like_post: 'sad'
                            },
                            success: function(){
                            showUser();
                            }
                        });
                        // to prevent refreshing the whole page page
                        return false;
                        });
                        $("#angry<?php echo $value_post_data->post_id;?>").click(function(){ 
                        var post_id = document.getElementById("comment_id<?php echo $value_post_data->post_id;?>").value;
                        $.ajax({
                            type: "POST",
                            url: "<?php echo base_url();?>post_like",
                            data: {
                            post_id: post_id,
                            like_post: 'angry'
                            },
                            success: function(){
                            showUser();
                            }
                        });
                        // to prevent refreshing the whole page page
                        return false;
                        });
                    </script>
                </div>
                </a>
                </li>
                <li class="post_btm_link_comment"><a data-toggle="collapse" data-target="#post_comment_area<?php echo $a;?>">Comment</a></li>
                <li class="post_btm_link_share"><a href="#">Share
                        <div class="share_reaction_box">
                          <div class="share_reaction_icon share_sexy_hangout">
                            <img src="<?php echo base_url();?>assets/images/sexy_hangout.png">
                            <span>Hangout</span>
                          </div>
                          <div class="share_reaction_icon share_facebook">
                           <!--  <img src="<?php echo base_url();?>assets/images/share_facebook.png">
                            <span>Facebook</span> -->
                            <a href="http://www.facebook.com/share.php?u=<?php echo base_url();?>" target="_blank"> <img src="<?php echo base_url();?>assets/images/share_facebook.png">
                           </a><span>Facebook</span>
                    </div>
                    <div class="share_reaction_icon share_twitter">
                        <a href="https://twitter.com/share?url=<?php echo base_url();?>&amp;text=YOUR_TITLE&amp;hashtags=YOUR_HASHTAGS" target="_blank"> <img src="<?php echo base_url();?>assets/images/share_twitter.png">
                        </a><span>Twitter</span>
                    </div>
                    <div class="share_reaction_icon share_linkedin">
                        <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo base_url();?>" target="_blank"><img src="<?php echo base_url();?>assets/images/share_linkedin.png"></a>
                        <span>Linkedin</span>
                    </div>
                    <div class="share_reaction_icon share_google_plus">
                        <a href="https://plus.google.com/share?url=<?php echo base_url();?>" target="_blank"> <img src="<?php echo base_url();?>assets/images/share_google_plus.png"></a>
                        <span>Google</span>
                    </div>
                    </div>
                    </a>
                </li>
                <li class="post_btm_link_translate"><a href="#">Translate</a></li>
            </ul>
        </div>
        <div class="post_view_comment_area collapse" id="post_comment_area<?php echo $a ;?>">
            <div class="post_view_comment_view_box" id="com_show">
                <?php 
foreach($comment as $row_comment)
{
  if($value_post_data->post_id==$row_comment->comment_post_id)
  {
?>
                    <div class="post_view_comment_area_left">
                        <img src="<?php echo base_url();?>assets/img/<?php echo $row_comment->user_image;?>" onError="this.src = '<?php echo base_url();?>assets/images/admin1.png'" alt="images">
                    </div>
                    <div class="post_view_comment_area_right">
                        <h4><a href="#"></a> <?php echo $row_comment->value_comment;?>
                                                                                  </h4>
                        <ul>

                            <li><span><?php echo $row_comment->comment_date;?></span></li>
                            <li>
                                <form method="post" id="like_formmm">
                                    <input type="hidden" id="comment_id<?php echo $row_comment->comment_id;?>" value="<?php echo $row_comment->comment_id;?>" />
                                    <input type="hidden" id="post_id<?php echo $row_comment->comment_post_id;?>" value="<?php echo $row_comment->comment_post_id;?>" />
                                    <a href="javascript:;" name="like<?php echo $row_comment->comment_id;?>" title="Like" id="like<?php echo $row_comment->comment_id;?>">
<?php foreach ($check_com_like_fetch as $key => $value_check_com_like_fetch) {

   if($value_check_com_like_fetch->post_com_id==$row_comment->comment_post_id && $row_comment->comment_id==$value_check_com_like_fetch->com_post_id && $value_check_com_like_fetch->post_com_like_type==1)
   {
?>
 unlike</a>
  <?php
   }
   elseif($value_check_com_like_fetch->post_com_id==$row_comment->comment_post_id && $row_comment->comment_id==$value_check_com_like_fetch->com_post_id && $value_check_com_like_fetch->post_com_like_type==0 || empty($value_check_com_like_fetch->post_com_like_type))
   {
    ?>
like</a>
<?php
}
}
?>

                                    
                                </form>
<script type="text/javascript">
BASE_URL = "<?php echo base_url();?>"
</script>
<script type="text/javascript">

$("#like<?php echo $row_comment->comment_id;?>").click(function(){
var comment_id = document.getElementById("comment_id<?php echo $row_comment->comment_id;?>").value;
var post_id = document.getElementById("post_id<?php echo $row_comment->comment_post_id;?>").value;
alert(comment_id);
alert(post_id);
$.ajax({
type: "POST",
url: "<?php echo base_url();?>comment_post_like",
data: {
comment_id: comment_id,
post_id:post_id
},
success: function(){
// alert('success');
showUser();
}
});
// to prevent refreshing the whole page page
           return false;
});
</script>


                            </li>
                        </ul>
                        <span class="del_cmnt_btn"><a href="#"><i class="fas fa-times"></i></a></span>
                    </div>
                    <?php
                                                                             }
                                                                              }
                                                                              ?>
            </div>
            <div class="post_view_comment_txt_box">
                <div class="post_view_comment_area_left">
                    <img src="<?php echo base_url();?>assets/img/<?php echo $user_image;?>" onError="this.src = '<?php echo base_url();?>assets/images/admin1.png'" alt="images">
                </div>
                <div class="post_view_comment_area_right">

                    <!--  <textarea name="comment" placeholder="Post a comment..."></textarea> -->
                    <form method="post" id="myformm<?php echo $i;?>">
                        <input type="hidden" name="post_id" id="post_id<?php echo $value_post_data->post_id;?>" value="<?php echo $value_post_data->post_id;?>">
                        <input type="text" name="comment" id="comment<?php echo $value_post_data->post_id;?>" placeholder="Post Comment Here..." />
                    </form>

                </div>
            </div>
        </div>
    </div>