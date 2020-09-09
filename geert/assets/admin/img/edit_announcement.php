<?php
include('include/header.php');
$uniq_id=$_GET['id'];
//$payment=$_GET['id'];
//echo $payment;
?>
<style>
#PreviewPicture{
        background-position: center center;
        background-size: cover;
        background-image: url('<?php echo base_url();?>assets/img/no-image.jpg');
        /*-webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);*/
        display: inline-block;
}
</style>
<?php
                                        foreach ($data as $key => $edit_announcement) {
                                            $add_page= $edit_announcement->add_page;
                                            $no_of_deceased= $edit_announcement->no_of_deceased;
                                            $add_title= $edit_announcement->add_title;
                                            $oname= $edit_announcement->oname;
                                            $dob= $edit_announcement->dob;
                                            $dod= $edit_announcement->dod;
                                            $oname2= $edit_announcement->oname2;
                                            $place= $edit_announcement->place;
                                            $dob2= $edit_announcement->dob2;
                                            $adddesc= $edit_announcement->adddesc;
                                            $place2= $edit_announcement->place2;
                                             $frame= $edit_announcement->frame;

                                       }

  foreach ($dat as $key => $edit_announcement_second) {
                                           $SelectedPackagePrice= $edit_announcement_second->SelectedPackagePrice;
                                           $SelectedPackage= $edit_announcement_second->SelectedPackage;
                                           $Announcementfor= $edit_announcement_second->Announcementfor;
                                           $NumberofDeceased= $edit_announcement_second->NumberofDeceased;
                                           $AdditionalServiceOffered= $edit_announcement_second->AdditionalServiceOffered;
                                           $StartDate= $edit_announcement_second->StartDate;
                                           $end_date= $edit_announcement_second->end_date;
                                           $AdditionalDescrition= $edit_announcement_second->AdditionalDescrition;
///echo $Announcementfor;
                                       }

foreach ($da as $key => $edit_announcement_third) {
                                           $plan_name= $edit_announcement_third->plan_name;
                                           $dnumber= $edit_announcement_third->dnumber;
                                           $Title= $edit_announcement_third->Title;
                                           $FullName= $edit_announcement_third->FullName;
                                           $SecondName= $edit_announcement_third->SecondName;
                                           $LastName= $edit_announcement_third->LastName;
                                           $dob= $edit_announcement_third->dob;
                                           $dod= $edit_announcement_third->dod;
                                           $PreferredNameonNotice= $edit_announcement_third->PreferredNameonNotice;
                                           $Title2= $edit_announcement_third->Title2;
                                           $SecondName2= $edit_announcement_third->SecondName2;
                                           $LastName2= $edit_announcement_third->LastName2;
                                           $PlaceofBirth2= $edit_announcement_third->PlaceofBirth2;
                                           $PreferredNameonNotice2= $edit_announcement_third->PreferredNameonNotice2;
                                           $dob2= $edit_announcement_third->dob2;
                                           $dob2= $edit_announcement_third->dob2;
                                           $dod2= $edit_announcement_third->dod2;
                                              
                                       }
                                       ?>


<div class="add_anocmnt_area my_wrapper_area">
    <div class="container">
        <div class="my_wrapper">
            <div class="my_wrapper_area_in">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                        <div class="add_anocmnt_form_area">
                            <h1>Edit Announcement</h1>
                            <form action="<?php base_url();?>edit_announce" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-3">Selected Package Price</label>
                                    <div class="col-md-9 col-sm-9">
                                 <input type="text" id="package1" name="package_price" placeholder="Selected package prise"value="<?php echo $SelectedPackagePrice;?> " class="form-control" readonly="" autofocus="">
                                 <img src="http://percymarys-co-uk.stackstaging.com/wp-content/uploads/2017/11/travel-icon-pay-in-sterlingx2.png" id="input_img" style="width: 100px;
                                margin-left: 440px;
                                margin-top: -50px;">
                                 </div>
   
                                </div>
                                <?php
                               //$uniq_id= rand(100000000,10000000);
                              //echo $uniq_id;
                               ?>

                                <input type="hidden" name="uniq_id" value=<?php echo $uniq_id;?>>
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-3">Selected Package</label>
                                    <div class="col-md-9 col-sm-9">
                                        <?php 
                                       /* foreach ($data as $key => $plan_price) {
                                           $plan_name= $plan_price->plan_name;
                                    */
?>
                                        <h5><?php echo $plan_name;?> Or <a href="#" data-toggle="modal" data-target="#myPackg">Change Selected Package</a></h5>
                                        <?php
                                  //  }
                                    ?>
                                    <input type="hidden" name="plan_day" value="<?php echo $plan_name;?>">
                                    </div>
                                    <div class="package_boxne">
                                    <div id="myPackg" class="modal fade" role="dialog">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                            <h4 class="">Change Selected Package</h4>
                                          </div>
                                          <!-- <div class="modal-body">
                                             <?php
                                              $i=1;
                                                foreach ($dat as $key => $plan_da) {
                                              $plan_name_second=$plan_da->plan_name;
                                               $plan_price_second=$plan_da->Prices;
                                           
                                        ?>
                                            
                                            <p><?php echo $i;?>)<a href="add_announcement?id=<?php echo $plan_price_second; ?>"> <?php echo $plan_name_second;?></a></p>
                                            <?php
                                            $i++;
                                            }

                                            ?>
                                          </div> -->
                                          <div class="modal-footer">
                                            <div class="form-group add_anocmnt_form_btn">
                                                <button class="btn" value="publish announcement" data-dismiss="modal">Close</button>
                                            </div>
                                            <!-- <button type="button" class="btn btn-default" >Close</button> -->
                                          </div>
                                        </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-3">Announcement for:</label>
                                    <div class="col-md-9 col-sm-9">
                                        <select class="form-control" name="announcement" value="<?php echo $Announcementfor ;?>">
                                            <option value="<?php echo $Announcementfor;?>"><?php echo $Announcementfor;?></option>
                                            <option value="">Select Announcement</option>
                                            <option value="obituary">Obituary Notice</option>
                                            <option value="remembrance">Remembrance Notice</option>
                                            <option value="annivarsary">Anniversary Notice</option>
                                            <option value="Birthday">Birthday Notice</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-3">Number of Deceased</label>
                                    <div class="col-md-9 col-sm-9">
                                        <select class="form-control" name="deceased" id="Deceased" value="<?php echo $dnumber;?>">
                                            <option value="Deceased1">Deceased 1</option>
                                            <option value="Deceased2">Deceased 2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-3">Photo Gallery</label>
                                    <div class="col-md-9 col-sm-9 img_upload_area_in">
                                        <input type="file" class="form-control" name="image_first[]" multiple value="<?php echo $?>"/>
                                        <div id="thumb-output"></div>

                                     <!-- <input type="file" name="image[]" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;"/>  
                                     -->

                                    </div>
                                </div> 
                                <h3>Deceased 1</h3>
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-3">Title</label>
                                    <div class="col-md-9 col-sm-9">
                                        <input type="text" class="form-control" name="title" value="<?php echo $Title;?>"placeholder="Rev./Dr./Dr(Mrs)/Mr/Mrs/Miss/Ms">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-3">Full Name</label>
                                    <div class="col-md-3 col-sm-3">
                                        <input type="text" class="form-control" name="first_name" placeholder="First Name" value="<?php echo $FullName;?>">
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <input type="text" class="form-control" name="second_name" placeholder="Second Name" value="<?php echo $SecondName;?>">
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <input type="text" class="form-control" name="surname" placeholder="Surname"value="<?php echo $LastName;?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-3">Place of Birth/Lived Most</label>
                                    <div class="col-md-9 col-sm-9">
                                        <input type="text" class="form-control" name="birth_place" placeholder="Birth Place" value="<?php echo $place;?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-3">Preferred Name on Notice</label>
                                    <div class="col-md-9 col-sm-9">
                                        <input type="text" class="form-control" name="preferred_name" placeholder="Preferred Name" value="<?php echo $PreferredNameonNotice;?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-3">Date of Birth</label>
                                    <div class="col-md-9 col-sm-9">
                                        <input type="date" class="form-control" name="date_of_birth" placeholder="Date of Birth" value="<?php echo $dob;?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-3">Date of Death</label>
                                    <div class="col-md-9 col-sm-9">
                                        <input type="date" class="form-control" name="date_of_death" placeholder="Date of Death" value="<?php echo $dod;?>">
                                    </div>
                                </div>
                               <div id="deceased-two" style="display: none">   
                                     <h3>Deceased 2</h3>
                                    <div class="form-group">
                                        <label class="col-md-3 col-sm-3">Title</label>
                                        <div class="col-md-9 col-sm-9">
                                            <input type="text" class="form-control" name="title_second" placeholder="Rev./Dr./Dr(Mrs)/Mr/Mrs/Miss/Ms" value="<?php echo $Title2;?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-sm-3">Full Name</label>
                                        <div class="col-md-3 col-sm-3">
                                            <input type="text" class="form-control" name="first_name__second" placeholder="First Name" value="<?php echo $oname2;?>">
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <input type="text" class="form-control" name="second_name_second" placeholder="Second Name" value="<?php echo $SecondName2;?>">
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <input type="text" class="form-control" name="surname_second" placeholder="Surname" value="<?php echo $LastName2;?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-sm-3">Place of Birth/Lived Most</label>
                                        <div class="col-md-9 col-sm-9">
                                            <input type="text" class="form-control" name="birth_place_second" placeholder="Birth Place" value="<?php echo $PlaceofBirth2;?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-sm-3">Preferred Name on Notice</label>
                                        <div class="col-md-9 col-sm-9">
                                            <input type="text" class="form-control" name="preferred_name_second" placeholder="Preferred Name" value="<?php echo $PreferredNameonNotice2;?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-sm-3">Date of Birth</label>
                                        <div class="col-md-9 col-sm-9">
                                            <input type="date" class="form-control" name="date_of_birth_third" placeholder="Date of Birth" value="<?php echo $dob2;?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-sm-3">Date of Death</label>
                                        <div class="col-md-9 col-sm-9">
                                            <input type="date" class="form-control" name="date_of_death_third" placeholder="Date of Death" value="<?php echo $dod2;?>">
                                        </div>
                                    </div>
                                </div>

                                <h3>Additional charge will be applied:</h3>
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-3">Service Offered:</label>
                                    <div class="col-md-9 col-sm-9">
                                        <input type="text" class="form-control" name="service_offered_for" value="<?php echo $AdditionalServiceOffered;?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-3">Start Date</label>
                                    <div class="col-md-9 col-sm-9">
                                        <input type="date" class="form-control" name="start_date_for" placeholder="Start Date" value="<?php echo $StartDate;?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-3">End Date</label>
                                    <div class="col-md-9 col-sm-9">
                                        <input type="date" class="form-control" name="end_date_for" placeholder="End Date" value="<?php echo $end_date;?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-3">Descrition</label>
                                    <div class="col-md-9 col-sm-9">
                                        <textarea class="form-control" rows="5" name="descrition" placeholder="Descrition of Notice" value="<?php echo $adddesc;?>"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-3">Image</label>
                                    <div class="col-md-9 col-sm-9">
                                        <input type="file" class="form-control" id="file-input" onchange="ImagePreview()" name="image_second">
                                    </div>

                                </div>

                                 
                                <div class="frame_slctn">
                                    <label class="col-md-3 col-sm-3">Choose Frame</label>
                                    <div class="col-md-12 col-sm-12 frame_slctn_gallery">
                                       <div id="main_area">
                                            <div class="row">
                                                <div id="slider-thumbs">
                                                    <ul>
                                                        <li><a id="carousel-selector-0" onclick="selFrame('frame1.png')">
                                                            <img src="<?php echo base_url();?>assets/images/frame1.png" alt="images"></a>
                                                        </li>
                                                        <li><a id="carousel-selector-1" onclick="selFrame('frame2.png')"><img src="<?php echo base_url();?>assets/images/frame2.png" alt="images"></a>
                                                        </li>
                                                        <li><a id="carousel-selector-2" onclick="selFrame('frame3.png')" ><img src="<?php echo base_url();?>assets/images/frame3.png" alt="images"></a>
                                                        </li>
                                                        <li><a id="carousel-selector-3" onclick="selFrame('frame4.png')"><img src="<?php echo base_url();?>assets/images/frame4.png" alt="images"></a>
                                                        </li>
                                                        <li><a id="carousel-selector-4" onclick="selFrame('frame5.png')" ><img src="<?php echo base_url();?>assets/images/frame5.png" alt="images"></a>
                                                        </li>
                                                        <li><a id="carousel-selector-5" onclick="selFrame('frame6.png')"><img src="<?php echo base_url();?>assets/images/frame6.png" alt="images"></a>
                                                        </li>
                                                        <li><a id="carousel-selector-6" onclick="selFrame('frame7.png')"> <img src="<?php echo base_url();?>assets/images/frame7.png" alt="images"></a>
                                                        </li>
                                                        <li><a id="carousel-selector-7" onclick="selFrame('frame8.png')"><img src="<?php echo base_url();?>assets/images/frame8.png" alt="images"></a>
                                                        </li>
                                                        <li><a id="carousel-selector-8" onclick="selFrame('frame9.png')"><img src="<?php echo base_url();?>assets/images/frame9.png" alt="images"></a>
                                                        </li>
                                                        <li><a id="carousel-selector-9" onclick="selFrame('frame10.png')"><img src="<?php echo base_url();?>assets/images/frame10.png" alt="images"></a>
                                                        </li>
                                                        <li><a id="carousel-selector-10" onclick="selFrame('frame11.png')" ><img src="<?php echo base_url();?>assets/images/frame11.png" alt="images"></a>
                                                        </li>
                                                        <li><a id="carousel-selector-11" onclick="selFrame('frame12.png')"><img src="<?php echo base_url();?>assets/images/frame12.png" alt="images"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <input type="hidden" name="selFrameName" id="selFrameName" value="frame1.png"> 
                                                <div id="slider">
                                                    <div class="row">
                                                        <div id="carousel-bounding-box">
                                                            <div class="carousel slide" id="myCarousel">
                                                                <div class="carousel_inner_back">
                                                                    <img id="PreviewPicture"/>
                                                                </div>
                                                                <div class="carousel-inner carousel_inner_frame">
                                                                    <div class="active item" data-slide-number="0">
                                                                        <img src="<?php echo base_url();?>assets/images/frame1.png" alt="images" id="selNew">
                                                                    </div>
                                                                   
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="img_upload_area">
                                    <label class="col-md-3 col-sm-3">Upload Images </label>
                                    <div class="col-md-12 col-sm-12 img_upload_area_in">
                                        <input type="file" class="form-control" name="image_third[]" multiple />
                                        <div id="thumb-output"></div>
                                    </div>
                                </div>
                                <div class="form-group add_anocmnt_form_btn">
                                    <button class="btn" value="publish announcement">publish announcement</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Display image before insert in database -->
    <script type="text/javascript">
        function ImagePreview() 
        { 
            var PreviewIMG = document.getElementById('PreviewPicture'); 
            var UploadFile    =  document.getElementById('file-input').files[0]; 
            var ReaderObj  =  new FileReader(); 
            ReaderObj.onloadend = function () 
            { 
               PreviewIMG.style.backgroundImage  = "url("+ ReaderObj.result+")";
            } 
            if (UploadFile) 
            { 
               ReaderObj.readAsDataURL(UploadFile);
            } 
            else 
            { 
                PreviewIMG.style.backgroundImage  = "";
            } 
        }
    </script>

<!-- frame select by javascript -->

<script type="text/javascript">
    function selFrame(selFrm) {
       var srclink= '<?php echo base_url();?>assets/images/'+selFrm;
       $('#selNew').attr('src', srclink);
       $("#selFrameName").val(selFrm);
    }
</script>

<!-- Deceased select chnage -->

<script type="text/javascript">
    $(document).ready(function(){
        $('#Deceased').change(function(){
            var deceased = $(this).val();

            if(deceased == 'Deceased1'){
                $("#deceased-two").hide();
            }else{
                $("#deceased-two").show();
            }

        });
    });
</script>

<?php
include('include/footer.php');
?>
