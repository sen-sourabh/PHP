<?php 
include('includes/header.php');
?>
<style>
.overview-box .text {
    margin-left: 100px;
}
</style>
<?php 
    $hindi = 0;
    $english = 0;
    $all = 0;
    if(!empty($song)){
        foreach($song as $row){
            $all++;
            if($row->song_language == 'hindi'){
                $hindi++;
            }
            if($row->song_language == 'english'){
                $english++;
            }
        }
    }
?>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">overview</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="fa fa-music"></i>
                                            </div>
                                            <br>
                                            <div class="text">
                                                <h2><?php echo $all;?></h2>
                                                <span>All Songs</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="fa fa-music"></i>
                                            </div>
                                            <br>
                                            <div class="text">
                                                <h2><?php echo $hindi;?></h2>
                                                <span>Hindi Songs</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="fa fa-music"></i>
                                            </div>
                                            <br>
                                            <div class="text">
                                                <h2><?php echo $english;?></h2>
                                                <span>English Songs</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="fa fa-eye"></i>
                                            </div>
                                            <br>
                                            <div class="text">
                                                <h2>1</h2>
                                                <span>visitors</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
<?php 
include('includes/footer.php');
?>