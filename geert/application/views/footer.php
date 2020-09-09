<footer>
<div class="footer">
    <div class="container">
        <div class="footer_in">
            <div class="row">
                <?php
                    foreach($about_data as $row)
                    {
                ?>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="footer_bx footer_bx_1">
                        <h1><?php echo $row->widget_about_title;?></h1>
                        <p><?php echo $row->widget_about_description;?></p>
                        <ul class="ftr_socail">
                            <?php
                                if($row->widget_about_facebook)
                                {
                            ?>
                                <li><a href="<?php echo $row->widget_about_facebook;?>"><i class="fab fa-facebook-f"></i></a></li>
                            <?php
                                }
                            ?>
                            <?php
                                if($row->widget_about_google)
                                {
                            ?>
                                <li><a href="<?php echo $row->widget_about_google;?>"><i class="fab fa-google-plus-g"></i></a></li>
                            <?php
                                }
                            ?>
                            <?php
                                if($row->widget_about_twitter)
                                {
                            ?>
                                <li><a href="<?php echo $row->widget_about_twitter;?>"><i class="fab fa-twitter"></i></a></li>
                            <?php
                                }
                            ?>
                            <?php
                                if($row->widget_about_skype)
                                {
                            ?>
                                <li><a href="<?php echo $row->widget_about_skype;?>"><i class="fab fa-skype"></i></a></li>
                            <?php
                                }
                            ?>
                            <?php
                                if($row->widget_about_youtube)
                                {
                            ?>
                                <li><a href="<?php echo $row->widget_about_youtube;?>"><i class="fab fa-youtube"></i></a></li>
                            <?php
                                }
                            ?>
                            <?php
                                if($row->widget_about_tumblr)
                                {
                            ?>
                                <li><a href="<?php echo $row->widget_about_tumblr;?>"><i class="fab fa-tumblr"></i></a></li>
                            <?php
                                }
                            ?>
                            <?php
                                if($row->widget_about_instagram)
                                {
                            ?>
                                <li><a href="<?php echo $row->widget_about_instagram;?>"><i class="fab fa-instagram"></i></a></li>
                            <?php
                                }
                            ?>
                            <?php
                                if($row->widget_about_linkedin)
                                {
                            ?>
                                <li><a href="<?php echo $row->widget_about_linkedin;?>"><i class="fab fa-linkedin-in"></i></a></li>
                            <?php
                                }
                            ?>
                            <?php
                                if($row->widget_about_pinterest)
                                {
                            ?>
                                <li><a href="<?php echo $row->widget_about_pinterest;?>"><i class="fab fa-pinterest"></i></a></li>
                            <?php
                                }
                            ?>
                        </ul>
                    </div>
                </div>
                <?php
                    }
                ?>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="footer_bx footer_bx_1">
                        <h1>Useful Links</h1>
                        <ul class="ftr_links">
                            <li><a href="<?php echo base_url(); ?>">Home</a></li>
                            <li><a href="<?php echo base_url(); ?>shop">Web Shop</a></li>
                            <li><a href="<?php echo base_url(); ?>kidsquiz">Kids Quiz</a></li>
                            <li><a href="<?php echo base_url(); ?>contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <?php
                    foreach($contact_data as $contact)
                    {
                ?>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="footer_bx footer_bx_1">
                        <h1><?php echo $contact->widget_contact_title;?></h1>
                        <ul class="ftr_cntct">
                            <?php
                                if($contact->widget_contact_address)
                                {
                            ?>
                                <li><span><i class="fas fa-map-marker-alt"></i></span>
                            <?php 
                                echo $contact->widget_contact_address.", ";
                                }
                                if($contact->widget_contact_city)
                                {
                                    echo $contact->widget_contact_city.", ";
                                }
                                if($contact->widget_contact_state)
                                {
                                    echo $contact->widget_contact_state.", ";
                                }
                                if($contact->widget_contact_country)
                                {
                                    echo $contact->widget_contact_country;
                                }
                            ?>
                                </li>
                            <?php
                                if($contact->widget_contact_phone)
                                {
                            ?>
                                <li><span><i class="fas fa-mobile-alt"></i></span><?php echo $contact->widget_contact_phone;?></li>
                            <?php
                                }
                            ?>
                            <?php
                              if($contact->widget_contact_email)
                                {  
                            ?>
                            <li><span><i class="far fa-envelope"></i></span><?php echo $contact->widget_contact_email;?></li>
                            <?php
                                }
                            ?>
                        </ul>

                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
</div>

<div class="footer_bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Copyright 2018 © Geert Gevaar. Design by <a href="http://endeavoritsolution.com/">Endeavor IT Solution</a></p>
            </div>
        </div>
    </div>
</div>

</footer>


    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/fontawesome-all.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/slider.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/wow.js"></script>
    <script>
        wow = new WOW({
            animateClass: 'animated',
            offset: 100,
            callback: function(box) {
                console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
            }
        });
        wow.init();
        document.getElementById('moar').onclick = function() {
            var section = document.createElement('section');
            section.className = 'section--purple wow fadeInDown';
            this.parentNode.insertBefore(section, this);
        };
    </script>
    <script type="text/javascript">
        $(document).on("scroll", function(){
    if
      ($(document).scrollTop() > 140){
      $("header").addClass("shrink");
    }
    else
    {
      $("header").removeClass("shrink");
    }
  });
    </script>

</body>

</html>