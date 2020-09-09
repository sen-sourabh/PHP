

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog  modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Order ( ID : <?php echo  $_POST['orderid']; ?>)</h4>
      </div>
      <div class="modal-body">
        
  
            <?php foreach ($orderlist as $order) {    ?>

            <div class="row">
              <div class="col-md-1 col-sm-1 col-xs-12 my_order_bx_dtl_img">
                <img src="<?php echo base_url(); ?>assets/product/<?php echo $order->images;  ?>" class="img-thumbnail" >
              </div>
              <div class="col-md-2 col-sm-2 col-xs-12 my_order_bx_dtl_text">
                <p class="quantity"> Quantity : <?php echo $order->quantity;  ?> </p>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-12 my_order_bx_dtl_text">
                <p class="order_title"><?php echo $order->name;  ?></p>
              </div>
              <div class="col-md-2 col-sm-2 col-xs-12 my_order_bx_dtl_text">
                <p class="order_price">€<?php echo $order->price;  ?></p>
              </div>
              <div class="col-md-2 col-sm-2 col-xs-12 my_order_bx_dtl_text">
                <p class="order_price">€<?php echo $order->subtotal;  ?></p>
              </div>
            </div>

            <?php } ?>
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<script type="text/javascript">
 $(document).ready(function(){
   $('#myModal').modal('show'); 
});

 </script>