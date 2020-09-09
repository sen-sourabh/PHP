<?php
    foreach ($product as $productDetail) {   
?>
<div class="populr_prdct_area">
    <div class="container">
        <div class="row">
            <div class="my_heading wow fadeInDown">
                <?php if(isset($_GET['diploma'])){  ?>
                
                  <h1>CONGRATULATIONS</h1>

                <?php }else{ ?>

                <h1>Shop with us</h1>

                <?php } ?>

                <p>Made with care for your little ones, our products are perfect for every occasion. Check it out.</p>
            </div>
        </div>
        <div class="populr_prdct_area_in sngl_product_area">
            <div class="row">


            	
                <div class="col-md-5 col-sm-5col-xs-12">
                    <div class="prdct_bx_img">
                        <img src="<?php echo base_url(); ?>assets/product/<?php echo $productDetail->product_img;  ?>">
                    </div>
                </div>
                 <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="prdct_bx_deatil">
                         <div class="col-md-12 col-sm-12 col-xs-12">
                        <h1 class="product-title entry-title"> <?php echo $productDetail->product_title;  ?></h1>
                        <span class="woocommerce-Price-amount amount"><?php echo $productDetail->product_price;  ?></span></p>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 prdct_bx_desc">
                            <p><?php echo $productDetail->product_desc;  ?></p>
                        </div>
                        <!-- <form class="cart" action="" method="post" enctype="multipart/form-data"> -->
                        <div class="quantity buttons_added">
                          <!--  </form> -->
                           <div class="col-md-12 col-sm-12 col-xs-12 product_qty">
                            <div class="input-group">
                                  <span class="input-group-btn">
                                      <button type="button" class="btn  btn-number"  data-type="minus" data-field="quant[2]">
                                        <span class="glyphicon glyphicon-minus"></span>
                                      </button>
                                  </span>
                                  <input type="text" name="quant[2]" id="quantity" class="form-control input-number" value="1" min="1" max="100">
                                  <span class="input-group-btn">
                                      <button type="button" class="btn  btn-number" data-type="plus" data-field="quant[2]">
                                          <span class="glyphicon glyphicon-plus"></span>
                                      </button>
                                  </span>
                            </div>
                        </div>
                         <div class="col-md-12 col-sm-12 col-xs-12 product_cart">
                            <div class="input-group">
                              <button type="button" name="add-to-cart"  class="btn btn-success" onclick="load_data_ajax();">Add to cart</button>
                             </div>
                        </div>


                            <div id="wait" style="display:none;width:69px;height:89px;position:absolute;top:60%;left:47%;padding:2px;"><img src='<?php echo base_url(); ?>assets/images/demo_wait.gif' width="64" height="64" /><br>Loading..</div>

                    </div>
                </div>
               

            </div>
        </div>
    </div>
</div>

 <script type="text/javascript">
        var controller = 'Welcome';
        var base_url = '<?php echo site_url(); ?>';
        function load_data_ajax(){

        	var itemid=<?php echo $productDetail->product_id;  ?>;
        	var itemqty=$("#quantity").val();
        	var itemtitle='<?php echo $productDetail->product_title;  ?>';
        	var itemprice='<?php echo $productDetail->product_price;  ?>';
        	var itemimg='<?php echo $productDetail->product_img;  ?>';
            $("#wait").css("display", "block");
            $.ajax({
               'url' : base_url + 'addtocart',
               'type' : 'POST', 
               'data' : {'itemid' : itemid , 'itemqty' : itemqty, 'itemtitle': itemtitle, 'itemprice':itemprice , 'itemimg':itemimg },
               'success' : function(data){ 
                 var container = $('#cartqut'); 
                    if(data){
                         container.html(data);
                         $("#wait").css("display", "none");
                    }
                }
            }); 
        }
 </script>
 <script type="text/javascript">
     //plugin bootstrap minus and plus
//http://jsfiddle.net/laelitenetwork/puJ6G/
$('.btn-number').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    
    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    
    
});
$(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
 </script>
<?php 
     }
?>
