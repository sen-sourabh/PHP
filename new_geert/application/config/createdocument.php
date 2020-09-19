<?php include('include/header.php'); ?>
<!-- header end here -->

<!-- my_page_header start here -->
<div class="my_page_area">
    <div class="my_page_header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="my_sub_menu">
                        <ul>
                            <li><a href="#"><span> <i class="fas fa-home"></i> </span></a></li>
                            <li> / </li>
                            <li>Create a Document</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 col-sm-5 col-xs-12 no_padding">
                    <div class="my_sub_search input-group col-md-12">
                        <input type="text" class="  search-query form-control" placeholder="Search" />
                        <span class="input-group-btn">
                            <button class="btn" type="button">
                                <span class=" glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- my_page_header end here -->


<!-- my_page_content start here -->
<div class="my_page_content my_bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12 no_padding">
                 <?php include('include/sidebar.php'); ?>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-12 no_padding">
                <div class="my_page_content_right">
                    <div class="activity_content">
                        <div class="activity_content_head">
                            <h1>Create a Document</h1>
                        </div>
                        <div class="my_create_search input-group">
                            <span class="input-group-btn">
                                <button class="btn" type="button">
                                    <span class=" glyphicon glyphicon-search"></span>
                                </button>
                            </span>
                            <input type="text" class="  search-query form-control" placeholder="Search our documents" />
                        </div>
                        <div class="create_content_area">

                            <div  id="container1"> </div>






                            <div class="create_document_list">
                                <h3>I need :</h3>
                                <ul>
                                    <?php 
                                        foreach ($document as $doc) {
                                    ?>
                                          <li><a onclick="load_data_ajax(<?php echo $doc->doc_id; ?>)" ><?php echo $doc->doc_title; ?></a></li>
                                    <?php
                                        }
                                    ?>
                                   
                                </ul>
                            </div>
                            <!-- <div class="popular_doc_area">
                                <h3>Most Popular Documents</h3>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <div class="popular_doc_box">
                                            <img src="<?= base_url();?>assets/images/doc.jpg">
                                            <div class="popular_doc_box_over">
                                                <h2>Living Bill</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <div class="popular_doc_box">
                                            <img src="<?= base_url();?>assets/images/doc.jpg">
                                            <div class="popular_doc_box_over">
                                                <h2>Bill of sale</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <div class="popular_doc_box">
                                            <img src="<?= base_url();?>assets/images/doc.jpg">
                                            <div class="popular_doc_box_over">
                                                <h2>Affidavit</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <div class="popular_doc_box">
                                            <img src="<?= base_url();?>assets/images/doc.jpg">
                                            <div class="popular_doc_box_over">
                                                <h2>Rental application</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- my_page_content end here -->


 <script type="text/javascript">
        var controller = 'user_controller';
        var base_url = '<?php echo site_url(); ?>';
        function load_data_ajax(type){
            $.ajax({
               'url' : base_url + '/documentneed',
               'type' : 'POST', 
               'data' : {'type' : type},
               'success' : function(data){ 
                 var container = $('#container1'); 
                    if(data){
                         container.html(data);
                    }
                }
            });
        }
 </script>

<!-- footer start here -->
<?php include('include/footer.php');?>