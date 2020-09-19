<footer>
<div class="footer">
    <div class="container">
        <div class="footer_in">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="footer_bx footer_bx_1">
                        <h1>About Us</h1>
                        <p>Everyyear in the netharlands, thousands of children have accidents with houshold products, tool and all types of medicine.
                        We can help protect your children from the dangers that are lurking in your home.</p>
                        <ul class="ftr_socail">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#"><i class="fab fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
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

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="footer_bx footer_bx_1">
                        <h1>Contact Us</h1>
                        <ul class="ftr_cntct">
                            <li><span><i class="fas fa-map-marker-alt"></i></span>111 New Street 300, Australia</li>
                            <li><span><i class="fas fa-mobile-alt"></i></span>(00) 000 111 222</li>
                            <li><span><i class="far fa-envelope"></i></span>info@domain.com</li>
                        </ul>

                    </div>
                </div>
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