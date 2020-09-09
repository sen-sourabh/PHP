<?php
include('include/header_home.php');
?>
    <div class="home_area">
        <div class="container">
            <div class="home_wrapper my_gray_bg">
                <div class="home_wrapper_coloumn home_wrapper_left">
                    <div class="home_wrapper_left_bx admin_profile_photo">
                        <h3>Hi <?php echo $first_name;?>!</h3>
                        <a href="#"><img src="<?php echo base_url();?>assets/img/<?php echo $user_image;?>" onError="this.src = '<?php echo base_url();?>assets/images/admin1.png'" alt="images"></a>
                    </div>
                    <div class="home_wrapper_left_bx admin_profile_link">
                        <div class="admin_profile_link_user">
                            <a href="#"><img src="<?php echo base_url();?>assets/img/<?php echo $user_image;?>"onError="this.src = '<?php echo base_url();?>assets/images/admin1.png'" alt="images"></a>
                            <a href="<?php echo base_url();?>view_profile"><h4><?php echo $first_name;?></h4></a>
                        </div>
                        <div class="admin_profile_quicklink">
                            <ul>
                                <li><a href="<?php echo base_url();?>notifications"><span><i class="fas fa-bell"></i></span> View Recent Updates</a></li>
                                <li><a href="<?php echo base_url();?>view_profile"><span><i class="fas fa-address-card"></i></span> View My Profile</a></li>
                                <li><a href="<?php echo base_url();?>edit_profile"><span><i class="fas fa-pencil-alt"></i></span> Edit My Profile</a></li>
                                <li><a href="<?php echo base_url();?>members"><span><i class="fas fa-search"></i></span> Browse Members</a></li>
                                <!-- <li><a href="#"><span><i class="fas fa-cog"></i></span> Manage BuySell Products</a></li> -->
                                <li><a href="<?php echo base_url();?>invite_your_friends"><span><i class="fas fa-envelope"></i></span> Invite Your Friends</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="home_wrapper_left_bx member_online_list">
                        <h3>1 Member Online</h3>
                        <ul>
                            <li><a href="#"><img src="<?php echo base_url();?>assets/images/admin1.png" alt="images"></a></li>
                        </ul>
                    </div>
                    <div class="home_wrapper_left_bx network_statistics">
                        <h3>Network Status</h3>
                        <ul>
                            <li><a href="#"><span><?php 
                            foreach ($count_all_user_id as $key => $value_count_all_user_id) {
                              echo  $value_count_all_user_id->all_post_user_id;
                            }?></span> members</a></li>
                            <li><a href="#"><span>2</span> r</a></li>
                            <li><a href="#"><span><?php 
                            foreach ($count_all_post_data as $key => $value_count_all_post_data) {
                              echo  $value_count_all_post_data->all_post_cout;
                            }?></span> posts</a></li>
                            <li><a href="#"><span><?php 
                            foreach ($count_all_comment_id as $key => $value_count_all_comment_id) {
                              echo  $value_count_all_comment_id->all_post_comment_id;
                            }?></span> comments</a></li>
                            <li><a href="#"><span><?php 
                            foreach ($count_all_post_data_video as $key => $value_count_all_post_data_video) {
                              echo  $value_count_all_post_data_video->all_post_cout_vedio;
                            }?></span> video</a></li>
                            <!-- <li><a href="#"><span>10</span> channels</a></li> -->
                        </ul>
                    </div>
                </div>



                <div class="home_wrapper_coloumn home_wrapper_center">
                    <div class="home_wrapper_center_tabs">
                        <div class="panel with-nav-tabs panel-default">
                            <div class="panel-heading">
                                <ul class="nav nav-tabs">
                                    <li><a href="#tab1default" data-toggle="tab"><img src="<?php echo base_url();?>assets/images/welcome-icon.png" alt="images"> Welcome</a></li>
                                    <li class="active"><a href="#tab2default" data-toggle="tab"><img src="<?php echo base_url();?>assets/images/web.png" alt="images"> What's New!</a></li>
                                    <li><a href="#tab3default" data-toggle="tab"><img src="<?php echo base_url();?>assets/images/twitter-icon.png" alt="images"> Twitter</a></li>
                                </ul>
                            </div>
                            <div class="panel-body">
                                <div class="tab-content">
                                    <div class="tab-pane" id="tab1default">
                                        <div class="home_tabdefault1">
                                            <h1>Welcome to Sexy Hangout, admin! What's next?</h1>
                                            <div class="home_tabdefault1_bx">
                                                <h2>A New Wall!</h2>
                                                <p>Welcome! We now have a more interactive Wall for you from where you can share posts with the people you want to, add friends in your updates, control the things that you see, easily navigate through updates, and a lot more! Explore and Share!</p>
                                            </div>
                                            <div class="home_tabdefault1_bx">
                                                <h2>Search for People</h2>
                                                <p>Search by name or look for classmates and co-workers.</p>
                                                <form>
                                                    <input type="text" name="search">
                                                    <button class="btn my_btn_1" value="serach">Search</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane active" id="tab2default">
                                        <div class="home_tabdefault2">


                                            <div class="my_overlay"></div>
                                            <div class="home_post_section">
                                          
                                                <div class="home_post_box">

                                                    <div class="home_post_bx_top" id="con">
                                                        <ul>
                                                            <li><a href="#"><span><i class="far fa-edit"></i></span> Update Status</a></li>
                                                            <li>
                                                           <form method="post" id="myform"enctype="multipart/form-data" >
                                                              <input name="image"  id="upload" type="file" onChange="form_submit();"/>
                                                            <a href="" id="upload_link">
                                                              <span><i class="fas fa-camera-retro"></i></span> Add Photo</a>
                                                            </form>
                                                            </li>
                                                            <li><a onclick="document.getElementById('home_post_prgres_areas').style.display= 'block';document.getElementById('post_text_submit').style.display= 'none';document.getElementById('uploadd').style.display= 'block';   " id="uploadFile" name="uploadFile" href="javascript:;"><span><i class="fas fa-video"></i></span> Add Video</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="home_post_upload_progress_area" id="home_post_prgres_areas">
                                                         <div id="filelist">Your browser doesn't have Flashs, Silverlight or HTML5 support.</div>
                                                        <div class="con_class">

                                                            <div id="myProgress">
                                                                 <div id="myBar"></div>
                                                        </div>
                                                                 <!-- <div class="form-group">
                                                                <a id="uploadFile" name="uploadFile" href="javascript:;">Select file</a>
                                                            </div> -->

                                                          <div class="form-group">
                                                               
                                                          </div> 

                                                        </div>
                                                        <input type="hidden" id="file_ext" name="file_ext" value="<?=substr( md5( rand(10,100) ) , 0 ,10 )?>">
                                                        <div id="console"></div>
                                                        <script type="text/javascript">
                                                            BASE_URL = "<?php echo base_url();?>"
                                                        </script>
                                                        
                                                    </div>
                                                     <div class="home_post_bx_middle">
                                                        <div class="home_post_bx_middle_img">
                                                            <img  src="<?php echo base_url();?>assets/img/<?php echo $user_image;?>" onError="this.src = '<?php echo base_url();?>assets/images/admin1.png'" alt="images">
                                                        </div>
                                                        <div class="home_post_bx_middle_txt">
                                                            <form method="post" id="post_text">
                                                                <textarea id="emojionearea1" placeholder="Post Something..." name="emojionearea1"></textarea>
                                                            </form>

                                                        </div>
                                                    </div>
                                                    <div class="home_post_bx_bottom">
                                                        <div class="home_post_bx_bottom_btns">
                                                            <div id="post_btn_1" class="collapse post_collapse">
                                                                <input type="text" name="location" placeholder="Where are you?">
                                                            </div>
                                                            <div id="post_btn_2" class="collapse post_collapse">
                                                                <input type="text" name="location" placeholder="Who are you with?">
                                                            </div>
                                                            <div id="post_btn_3" class="collapse post_collapse">
                                                                <input type="text" name="location" placeholder="What are you doing?">
                                                            </div>
                                                            <div id="post_btn_4" class="collapse post_collapse">
                                                                <p>44444444444444444444</p>
                                                            </div>
                                                            <div id="post_btn_5" class="collapse post_collapse">
                                                                <p>555555555555555555</p>
                                                            </div>
                                                            <ul id="post_button_before">
                                                                <li><button data-toggle="collapse" data-target="#post_btn_1" class="btn post_btn_1"><span><i class="fas fa-map-marker-alt"></i></span> Share Location</button></li>
                                                                <li><button data-toggle="collapse" data-target="#post_btn_2" class="btn post_btn_2"><span><i class="fas fa-user-plus"></i></span> Tag Friends</button></li>
                                                                <li>
                                                                    <a onclick="document.getElementById('post_button_after').style.display= 'block'; document.getElementById('post_button_before').style.display= 'none'; document.getElementById('post_btm_bar').style.display= 'block';"><button class="btn post_btn_dot">&#183;&#183;&#183;</button></a>
                                                                </li>
                                                            </ul>
                                                            <ul id="post_button_after">
                                                                <li><button data-toggle="collapse" data-target="#post_btn_1" class="btn post_btn_1"><span><i class="fas fa-map-marker-alt"></i></span> Share Location</button></li>
                                                                <li><button data-toggle="collapse" data-target="#post_btn_2" class="btn post_btn_2"><span><i class="fas fa-user-plus"></i></span> Tag Friends</button></li>
                                                                <li><button data-toggle="collapse" data-target="#post_btn_3" class="btn post_btn_3"><span><i class="far fa-smile"></i></span> Feeling/Activity</button></li>
                                                                <li> <button data-toggle="collapse" data-target="#post_btn_4" class="btn post_btn_4"><span><i class="fas fa-tags"></i></span> Sell Something</button></li>
                                                                <li><button data-toggle="collapse" data-target="#post_btn_5" class="btn post_btn_5"><span><img src="<?php echo base_url();?>assets/images/sticker-icon.png" alt="images"></span> Post a Sticker</button></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="home_post_bx_bottom_bar" id="post_btm_bar">
                                                        <ul>
                                                            <li class="process-img">
                                                              <img src="<?php echo base_url();?>assets/images/process.gif" class="hide-img">
                                                            </li>
                                                            <li>
                                                                <button data-toggle="modal" data-target="#target_modal" class="btn target_btn"><i class="fas fa-crosshairs"></i></button>
                                                            </li>
                                                            <li>
                                                                <button data-toggle="modal" data-target="#schedule_modal" class="btn schedule_btn"><i class="far fa-calendar-alt"></i></button>
                                                            </li>
                                                            <li>
                                                                <ul class="prod-gram">
                                                                  <li class="init"><span><i class="fas fa-globe"></i></span> Everyone</li>
                                                                  <li><span><i class="fas fa-users"></i></span> Friends & Networks</li>
                                                                  <li><span><i class="fas fa-users"></i></span> Friends Only</li>
                                                                  <li><span><i class="fas fa-lock"></i></span> Only Me</li>
                                                                  <li><span><i class="fas fa-cog"></i></span> Custom</li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <button class="btn share_btn my_btn_1" id="post_text_submit" value="share">Share</button>
                                                                 <a id="uploadd" href="javascript:;" class="btn my_btn_1" style="display: none;">Share</a>
                                                            </li>
                                                        </ul>
                                                        <div id="target_modal" class="modal post_modal1 fade" role="dialog">
                                                          <div class="modal-dialog">
                                                            <div class="modal-content">
                                                              <div class="modal-header">
                                                                <h4 class="modal-title">Target Your Post</h4>
                                                              </div>
                                                              <div class="modal-body">
                                                                <p>Target your audience to whom you want to show this post</p>
                                                                <ul class="audience_category">
                                                                    <li>
                                                                        <label><input type="radio" name="audience">All</label>
                                                                    </li>
                                                                    <li>
                                                                        <label><input type="radio" name="audience">Male</label>
                                                                    </li>
                                                                    <li>
                                                                        <label><input type="radio" name="audience">Female</label>
                                                                    </li>
                                                                </ul>
                                                                <p>Age</p>
                                                                <ul class="age_selection">
                                                                    <li>
                                                                        <select>
                                                                            <option value="0" selected="selected">Min age</option>
                                                                            <option value="14">14</option>
                                                                            <option value="15">15</option>
                                                                            <option value="16">16</option>
                                                                            <option value="17">17</option>
                                                                            <option value="18">18</option>
                                                                            <option value="19">19</option>
                                                                            <option value="20">20</option>
                                                                            <option value="21">21</option>
                                                                            <option value="22">22</option>
                                                                            <option value="23">23</option>
                                                                            <option value="24">24</option>
                                                                            <option value="25">25</option>
                                                                            <option value="26">26</option>
                                                                            <option value="27">27</option>
                                                                            <option value="28">28</option>
                                                                            <option value="29">29</option>
                                                                            <option value="30">30</option>
                                                                            <option value="31">31</option>
                                                                            <option value="32">32</option>
                                                                            <option value="33">33</option>
                                                                            <option value="34">34</option>
                                                                            <option value="35">35</option>
                                                                            <option value="36">36</option>
                                                                            <option value="37">37</option>
                                                                            <option value="38">38</option>
                                                                            <option value="39">39</option>
                                                                            <option value="40">40</option>
                                                                            <option value="41">41</option>
                                                                            <option value="42">42</option>
                                                                            <option value="43">43</option>
                                                                            <option value="44">44</option>
                                                                            <option value="45">45</option>
                                                                            <option value="46">46</option>
                                                                            <option value="47">47</option>
                                                                            <option value="48">48</option>
                                                                            <option value="49">49</option>
                                                                            <option value="50">50</option>
                                                                            <option value="51">51</option>
                                                                            <option value="52">52</option>
                                                                            <option value="53">53</option>
                                                                            <option value="54">54</option>
                                                                            <option value="55">55</option>
                                                                            <option value="56">56</option>
                                                                            <option value="57">57</option>
                                                                            <option value="58">58</option>
                                                                            <option value="59">59</option>
                                                                            <option value="60">60</option>
                                                                            <option value="61">61</option>
                                                                            <option value="62">62</option>
                                                                            <option value="63">63</option>
                                                                            <option value="64">64</option>
                                                                            <option value="65">65</option>
                                                                            <option value="66">66</option>
                                                                            <option value="67">67</option>
                                                                            <option value="68">68</option>
                                                                            <option value="69">69</option>
                                                                            <option value="70">70</option>
                                                                            <option value="71">71</option>
                                                                            <option value="72">72</option>
                                                                            <option value="73">73</option>
                                                                            <option value="74">74</option>
                                                                            <option value="75">75</option>
                                                                            <option value="76">76</option>
                                                                            <option value="77">77</option>
                                                                            <option value="78">78</option>
                                                                            <option value="79">79</option>
                                                                            <option value="80">80</option>
                                                                            <option value="81">81</option>
                                                                            <option value="82">82</option>
                                                                            <option value="83">83</option>
                                                                            <option value="84">84</option>
                                                                            <option value="85">85</option>
                                                                            <option value="86">86</option>
                                                                            <option value="87">87</option>
                                                                            <option value="88">88</option>
                                                                            <option value="89">89</option>
                                                                            <option value="90">90</option>
                                                                            <option value="91">91</option>
                                                                            <option value="92">92</option>
                                                                            <option value="93">93</option>
                                                                            <option value="94">94</option>
                                                                            <option value="95">95</option>
                                                                            <option value="96">96</option>
                                                                            <option value="97">97</option>
                                                                            <option value="98">98</option>
                                                                            <option value="99">99</option>
                                                                            <option value="100">100</option>
                                                                            <option value="101">101</option>
                                                                        </select>
                                                                    </li>
                                                                    <li>
                                                                        <select>
                                                                            <option value="0" selected="selected">Max age</option>
                                                                            <option value="14">14</option>
                                                                            <option value="15">15</option>
                                                                            <option value="16">16</option>
                                                                            <option value="17">17</option>
                                                                            <option value="18">18</option>
                                                                            <option value="19">19</option>
                                                                            <option value="20">20</option>
                                                                            <option value="21">21</option>
                                                                            <option value="22">22</option>
                                                                            <option value="23">23</option>
                                                                            <option value="24">24</option>
                                                                            <option value="25">25</option>
                                                                            <option value="26">26</option>
                                                                            <option value="27">27</option>
                                                                            <option value="28">28</option>
                                                                            <option value="29">29</option>
                                                                            <option value="30">30</option>
                                                                            <option value="31">31</option>
                                                                            <option value="32">32</option>
                                                                            <option value="33">33</option>
                                                                            <option value="34">34</option>
                                                                            <option value="35">35</option>
                                                                            <option value="36">36</option>
                                                                            <option value="37">37</option>
                                                                            <option value="38">38</option>
                                                                            <option value="39">39</option>
                                                                            <option value="40">40</option>
                                                                            <option value="41">41</option>
                                                                            <option value="42">42</option>
                                                                            <option value="43">43</option>
                                                                            <option value="44">44</option>
                                                                            <option value="45">45</option>
                                                                            <option value="46">46</option>
                                                                            <option value="47">47</option>
                                                                            <option value="48">48</option>
                                                                            <option value="49">49</option>
                                                                            <option value="50">50</option>
                                                                            <option value="51">51</option>
                                                                            <option value="52">52</option>
                                                                            <option value="53">53</option>
                                                                            <option value="54">54</option>
                                                                            <option value="55">55</option>
                                                                            <option value="56">56</option>
                                                                            <option value="57">57</option>
                                                                            <option value="58">58</option>
                                                                            <option value="59">59</option>
                                                                            <option value="60">60</option>
                                                                            <option value="61">61</option>
                                                                            <option value="62">62</option>
                                                                            <option value="63">63</option>
                                                                            <option value="64">64</option>
                                                                            <option value="65">65</option>
                                                                            <option value="66">66</option>
                                                                            <option value="67">67</option>
                                                                            <option value="68">68</option>
                                                                            <option value="69">69</option>
                                                                            <option value="70">70</option>
                                                                            <option value="71">71</option>
                                                                            <option value="72">72</option>
                                                                            <option value="73">73</option>
                                                                            <option value="74">74</option>
                                                                            <option value="75">75</option>
                                                                            <option value="76">76</option>
                                                                            <option value="77">77</option>
                                                                            <option value="78">78</option>
                                                                            <option value="79">79</option>
                                                                            <option value="80">80</option>
                                                                            <option value="81">81</option>
                                                                            <option value="82">82</option>
                                                                            <option value="83">83</option>
                                                                            <option value="84">84</option>
                                                                            <option value="85">85</option>
                                                                            <option value="86">86</option>
                                                                            <option value="87">87</option>
                                                                            <option value="88">88</option>
                                                                            <option value="89">89</option>
                                                                            <option value="90">90</option>
                                                                            <option value="91">91</option>
                                                                            <option value="92">92</option>
                                                                            <option value="93">93</option>
                                                                            <option value="94">94</option>
                                                                            <option value="95">95</option>
                                                                            <option value="96">96</option>
                                                                            <option value="97">97</option>
                                                                            <option value="98">98</option>
                                                                            <option value="99">99</option>
                                                                            <option value="100">100</option>
                                                                            <option value="101">101</option>
                                                                        </select>
                                                                    </li>
                                                                </ul>
                                                              </div>
                                                              <div class="modal-footer">
                                                                <button type="button" class="btn my_btn_1" value="save">Save</button>
                                                                <button type="button" class="btn my_btn_1" data-dismiss="modal">Close</button>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div id="schedule_modal" class="modal post_modal1 fade" role="dialog">
                                                          <div class="modal-dialog">
                                                            <div class="modal-content">
                                                              <div class="modal-header">
                                                                <h4 class="modal-title">Schedule Your Post</h4>
                                                              </div>
                                                              <div class="modal-body">
                                                                <p>Select date and time on which you want to publish your post</p>
                                                                <ul class="schedule_selection">
                                                                    <li>
                                                                        <div id="datepicker" class="input-group date quote_txt" data-date-format="mm-dd-yyyy">
                                                                        <input class="form-control cwf_txt" type="text" readonly />
                                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                                    </div>

                                                                    </li>
                                                                    <li>
                                                                        <select>
                                                                            <option selected="selected"></option>
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                            <option value="6">6</option>
                                                                            <option value="7">7</option>
                                                                            <option value="8">8</option>
                                                                            <option value="9">9</option>
                                                                            <option value="10">10</option>
                                                                            <option value="11">11</option>
                                                                            <option value="12">12</option>
                                                                        </select>
                                                                    </li>
                                                                    <li>
                                                                        <select>
                                                                            <option selected="selected"></option>
                                                                            <option value="00">00</option>
                                                                            <option value="10">10</option>
                                                                            <option value="20">20</option>
                                                                            <option value="30">30</option>
                                                                            <option value="40">40</option>
                                                                            <option value="50">50</option>
                                                                        </select>
                                                                    </li>
                                                                    <li>
                                                                        <select>
                                                                            <option selected="selected"></option>
                                                                            <option value="AM">AM</option>
                                                                            <option value="PM">PM</option>
                                                                        </select>
                                                                    </li>
                                                                </ul>
                                                                <h6>(UTC+7) Bangkok, Jakarta, Hanoi</h6>
                                                              </div>
                                                              <div class="modal-footer">
                                                                <button type="button" class="btn my_btn_1" value="schedule">Schedule</button>
                                                                <button type="button" class="btn my_btn_1" data-dismiss="modal">Close</button>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="home_post_view_section">
                                                <div class="home_post_view_section_tabs">
                                                    <div class="panel with-nav-tabs panel-default">
                                                        <div class="panel-heading">
                                                            <ul class="nav nav-tabs">
                                                                <li class="active"><a href="#postview_tab1" data-toggle="tab">All Updates</a></li>
                                                                <li><a href="#postview_tab2" data-toggle="tab">Friends</a></li>
                                                                <li><a href="#postview_tab3" data-toggle="tab">Schedule Posts</a></li>
                                                                <li class="dropdown">
                                                                    <a href="#" data-toggle="dropdown">More <span class="caret"></span></a>
                                                                    <ul class="dropdown-menu" role="menu">
                                                                        <li><a href="#postview_tab4" data-toggle="tab"><span><i class="fas fa-eye-slash"></i></span> Hidden Posts</a></li>
                                                                        <li><a href="#postview_tab5" data-toggle="tab"><span><i class="far fa-calendar-check"></i></span> On This Day</a></li>
                                                                        <li><a href="#postview_tab6" data-toggle="tab"><span><i class="fas fa-tags"></i></span> Buy Sell</a></li>
                                                                        <li><a href="#postview_tab7" data-toggle="tab"><span><i class="fas fa-list-ul"></i></span> Saved Feeds</a></li>
                                                                        <li><a href="#postview_tab8" data-toggle="tab"><span><i class="far fa-image"></i></span> Images</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="panel-body">
                                                            <div class="tab-content">
                                                                <div class="tab-pane active" id="postview_tab1">
                                                                  

                                                              <div id="userTable"></div>

              

                                                                </div>
                                                                <div class="tab-pane" id="postview_tab2">
                                                                    <h3>Friends Tab Content</h3>
                                                                </div>
                                                                <div class="tab-pane" id="postview_tab3">
                                                                    <h3>schedule post Tab Content</h3>
                                                                </div>
                                                                <div class="tab-pane" id="postview_tab4">
                                                                    <h3>hidden post Tab Content</h3>
                                                                </div>
                                                                <div class="tab-pane" id="postview_tab5">
                                                                    <h3> on this day Tab Content</h3>
                                                                </div>
                                                                <div class="tab-pane" id="postview_tab6">
                                                                    <h3>buy sell Tab Content</h3>
                                                                </div>
                                                                <div class="tab-pane" id="postview_tab7">
                                                                    <h3> save feed Tab Content</h3>
                                                                </div>
                                                                <div class="tab-pane" id="postview_tab8">
                                                                    <h3>images Tab Content</h3>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab3default">
                                        <div class="home_tabdefault3">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="home_wrapper_coloumn home_wrapper_right">
                    <div class="home_wrapper_right_bx newest_member_list">
                        <h3>Newest Members</h3>
                        <ul>
                            <?php 
                                foreach($new_members as $new_members)
                                {
                            ?>
                            <li>
                                <a href="<?php echo base_url();?>members_profile?poster_id=<?php echo $new_members->user_id;?>"><img src="<?php echo base_url();?>assets/img/<?php echo $new_members->user_image;?>" onerror="this.src='<?php echo base_url();?>assets/images/admin1.png'" alt="images"></a>
                                <h4><a href="<?php echo base_url();?>members_profile?poster_id=<?php echo $new_members->user_id;?>"><?php echo $new_members->first_name." ".$new_members->last_name;?></a></h4>
                                <h5><?php $join_date = explode(' ',$new_members->joining_date); echo $join_date[0];?></h5>
                            </li>
                            <?php
                                }
                            ?>
                            <!-- <li>
                                <a href="#"><img src="<?php echo base_url();?>assets/images/member2.png" alt="images"></a>
                                <h4><a href="#">Sunil kumar</a></h4>
                                <h5>June 19, 2018</h5>
                            </li>
                            <li>
                                <a href="#"><img src="<?php echo base_url();?>assets/images/member3.jpg" alt="images"></a>
                                <h4><a href="#">Admin 2</a></h4>
                                <h5>February 26, 2016</h5>
                            </li>
                            <li>
                                <a href="#"><img src="<?php echo base_url();?>assets/images/member4.png" alt="images"></a>
                                <h4><a href="#">Josef Meier</a></h4>
                                <h5>February 24, 2016</h5>
                            </li>
                            <li>
                                <a href="#"><img src="<?php echo base_url();?>assets/images/admin.jpg" alt="images"></a>
                                <h4><a href="#">Carl Swanson</a></h4>
                                <h5>February 24, 2016</h5>
                            </li> -->
                        </ul>                         
                    </div>
                    <div class="home_wrapper_right_bx popular_member_list">
                        <h3>Popular Members</h3>
                        <ul>
                            <?php 
                                foreach($popular_members as $popular_members)
                                {
                            ?>
                            <li>
                                <a href="<?php echo base_url();?>members_profile?poster_id=<?php echo $popular_members->user_id;?>"><img src="<?php echo base_url();?>assets/img/<?php echo $popular_members->user_image;?>" onerror="this.src='<?php echo base_url();?>assets/images/admin1.png'" alt="images"></a>
                                <h4><a href="<?php echo base_url();?>members_profile?poster_id=<?php echo $popular_members->user_id;?>"><?php echo $popular_members->first_name." ".$popular_members->last_name;?></a></h4>
                                <h5>2 friends</h5>
                            </li>
                            <?php
                                }
                            ?>
                            <!-- <li>
                                <a href="#"><img src="<?php echo base_url();?>assets/images/admin.jpg" alt="images"></a>
                                <h4><a href="#">Admin</a></h4>
                                <h5>1 friend</h5>
                            </li>
                            <li>
                                <a href="#"><img src="<?php echo base_url();?>assets/images/member1.jpeg" alt="images"></a>
                                <h4><a href="#">Carl Swanson</a></h4>
                                <h5>1 friend</h5>
                            </li>
                            <li>
                                <a href="#"><img src="<?php echo base_url();?>assets/images/member4.png" alt="images"></a>
                                <h4><a href="#">Josef Meier</a></h4>
                                <h5>0 friend</h5>
                            </li> -->
                            <li class="view_all_list"><a href="#">View All</a></li>
                        </ul>                         
                    </div>
                </div>

            </div>
        </div>
    </div>






<?php
include('include/footer_home.php');
?>



<script type="text/javascript">      

 $(document).ready(function(){
        showUser();

        });
function showUser(){
        $.ajax({
            url: '<?php echo base_url();?>post_center',
            type: 'POST',
            async: false,
            data:{
                sho: 1
            },
            success: function(response){
                $('#userTable').html(response);
                // showUserr();
            }
        });
    }

/*function showUserr(){
        $.ajax({
        url: "<?php echo base_url();?>post_center",
type: 'POST',
async: false,
data:{
show: 1
},
success: function(response){
$("#com_show").html(response);
}
        });
       }*/

   </script>


    <script type="text/javascript">
        $(document).ready(function() {
    $("#emojionearea1").emojioneArea({
    
        pickerPosition: "right",
        tonesStyle: "bullet",
        events: {
            keyup: function (editor, event) {
                console.log(editor.html());
                console.log(this.getText());
            }
        }
    });
});
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
          $(document).on("click", "ul.prod-gram .init", function() {
            $(this).parent().find('li:not(.init)').toggle();
          });
          var allOptions = $("ul.prod-gram").children('li:not(.init)');
          $("ul.prod-gram").on("click", "li:not(.init)", function() {
            allOptions.removeClass('selected');
            $(this).addClass('selected');
            $(this).parent().children('.init').html($(this).html());
            $(this).parent().find('li:not(.init)').toggle();
          });
        });
    </script>
    <script type="text/javascript">
        $(function() {
            $("#datepicker").datepicker({
                autoclose: true,
                todayHighlight: true
            }).datepicker('update', new Date());
        });
    </script>



<script type="text/javascript">
//my js code 
    $(function(){
$("#upload_link").on('click', function(e){
    e.preventDefault();
    $("#upload:hidden").trigger('click');
});
});
</script>


<script>
    $("#post_text_submit").on('click', function(){

        var post_data = document.getElementById("emojionearea1").value;
        $('.emojionearea-editor').text('');
         $(".hide-img").addClass("show-img");    
        //document.getElementById("emojionearea1").value = "";
        //alert(post_data);
        $.ajax({
            url: '<?php echo base_url();?>text_upload_post',
            type: 'POST',
            data: {post_data: post_data, post: 1},
            success:function(){
               // alert('success');
                 $(".hide-img").removeClass("show-img");
                 $(".my_overlay").removeClass("my_overlay_show");

                showUser();

            }
        }); 
    });
</script>   

<script type="text/javascript">
    $(document).ready(function(){
                      $('#upload').change(function(){

                        $(".hide-img").addClass("show-img"); 

                        event.preventDefault();
                        $.ajax({
                          url: '<?php echo base_url();?>photo_upload_post',
                          type: "POST",
                          data : new FormData($('#myform')[0]),
                          processData: false,
                          contentType: false,
                          async:false
                        }).done(function(data){
                          /*$('#myform')[0].reset();
                          $('#message1').html(data);*/

                             $(".hide-img").removeClass("show-img");
                             $(".my_overlay").removeClass("my_overlay_show");

                           showUser();
                        }).fail(function() {
                          alert( "Posting failed." );
                        });
                        // to prevent refreshing the whole page page
                        return false;
                      });
                    });




</script>


<script type="text/javascript"> 
$('.home_post_section').click(function() { 
$('.my_overlay').addClass('my_overlay_show'); 
}); 
$('.home_post_section').on('click', function(){ 
$('#post_button_after').removeClass('my_hide').addClass('my_show'); 
}); 
$('.home_post_section').on('click', function(){ 
$('#post_button_before').removeClass('my_show').addClass('my_hide'); 
}); 
$('.home_post_section').on('click', function(){ 
$('.home_post_bx_bottom_bar').removeClass('my_hide').addClass('my_show'); 
}); 
$('.my_overlay').on('click', function(){ 
$('#post_button_after').removeClass('my_show').addClass('my_hide'); 
}); 
$('.my_overlay').on('click', function(){ 
$('#post_button_before').removeClass('my_hide').addClass('my_show'); 
}); 
$('.my_overlay').on('click', function(){ 
$('.home_post_bx_bottom_bar').removeClass('my_show').addClass('my_hide'); 
}); 
$('.my_overlay').click(function(){
$('.my_overlay').removeClass('my_overlay_show'); 
}); 
</script>
<script src="<?php echo base_url();?>public/js/plupload/plupload.full.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/js/application.js"></script>

<style type="text/css">
    
    .hide-img{
      width: 80px;
      height: 80px;
      display: none;
    }
    .show-img{
     display: block !important;

    }
    #myBar{

        background: red;
    }
</style>
</body>

</html>