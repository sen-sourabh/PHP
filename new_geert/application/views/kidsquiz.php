<div class="quiz_area">
    <div class="container">
      <!--   <div class="my_heading wow fadeInDown">
                <h1>Play The Quiz Now</h1>
                <p>Geert Gevaar’s kids corner! Play the Quiz and get your own cool Geert Gevaar Diploma to hand in your room!</p>
            </div> -->
        <div class="row">
            <div class="quiz_game_area" style="padding:0px !important;">
                <div class="quiz_game_area_in">
                <div class="quiz_game_area_in_brdr" id="container1">

                    <?php   
                    $ans="";
                    foreach ($quiz as $quizList) {   

                        $ans= $quizList->quiz_id; 
                    ?>
                    <!--  <li><a onclick="load_data_ajax(<?php //echo $doc->doc_id; ?>)" ><?php //echo $doc->doc_title; ?></a></li> -->
                    <div class="quiz_game_area_in_que">
                        <h1><?php echo  $quizList->quiz_qus; ?></h1>
                    </div>
                    <div class="quiz_game_area_in_optn">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="option_box">
                                <a onclick="load_data_ajax(<?php echo $quizList->quiz_id; ?>,1)" >
                                <img src="<?php echo base_url(); ?>assets/quiz/<?php echo  $quizList->quiz_option1_img; ?>">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="option_box">
                                <a onclick="load_data_ajax(<?php echo $quizList->quiz_id; ?>,2)" >
                                <img src="<?php echo base_url(); ?>assets/quiz/<?php echo  $quizList->quiz_option2_img; ?>">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div id="wait" style="display:none;width:69px;height:89px;position:absolute;top:60%;left:47%;padding:2px;">
                    	<img src='<?php echo base_url(); ?>assets/images/demo_wait.gif' width="64" height="64" /><br>Loading..</div>
                    <?php   } ?>


                </div>
                </div>
            </div>
        </div>
    </div>
</div>
 <script type="text/javascript">
        var baseUrl = "<?php echo site_url(); ?>";
        var audio = ["sound_one.mp3", "sound_two.mp3"];
        var controller = 'Welcome';
        var base_url = '<?php echo site_url(); ?>';
        function load_data_ajax(type,ans){

            //new Audio(baseUrl + audio[6]).play();
            // if(ans == '<?php echo  $ans;?>'){
            //     new Audio("http://itsolution.co.in/geert-gevaar/sound/sound_two.mp3").play();
            // }

            $("#wait").css("display", "block");

            $.ajax({
               'url' : base_url + 'anscheck',
               'type' : 'POST', 
               'data' : {'type' : type , 'ans' : ans},
               'success' : function(data){ 
                var container = $('#container1'); 
                    if(data){
                    	
                         container.html(data);
                    }
                }
            });

        }
 </script>