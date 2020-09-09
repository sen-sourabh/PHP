 

 <?php   foreach ($quiz as $quizList) {   ?>
<!--  <li><a onclick="load_data_ajax(<?php //echo $doc->doc_id; ?>)" ><?php //echo $doc->doc_title; ?></a></li> -->

<div class="quiz_game_area_in_que" id="sh1" >
    <h1><?php echo  $quizList->quiz_qus; ?>  </h1>
</div>
<div class="quiz_game_area_in_optn"  id="sh2"  >
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


<div id="wait" style="display:none;width:69px;height:89px;position:absolute;top:60%;left:47%;padding:2px;"><img src='<?php echo base_url(); ?>assets/images/demo_wait.gif' width="64" height="64" /><br>Loading..</div>


<script>
// $('#wait').show();
// setTimeout(function(){
//    $('#wait').hide();
// },1000);
</script>
                 
<?php   } ?>
