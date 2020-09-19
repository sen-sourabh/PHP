

<div class="populr_prdct_area">
    <div class="container">
        <div class="row">
          <div id="cart_details">
           <?php
              $output = '';
                $output .= '
                <h3>Shopping Cart</h3><br />
                <div class="table-responsive">
                 <div align="right">
                  <button type="button" id="clear_cart" class="btn btn-warning">Clear Cart</button>
                 </div>
                 <br />
                 <table class="table table-bordered">
                  <tr>
                   <th width="40%">Name</th>
                   <th width="15%">Quantity</th>
                   <th width="15%">Price</th>
                   <th width="15%">Total</th>
                   <th width="15%">Action</th>
                  </tr> ';

                $count = 0;

               // print_r($this->cart->contents());
                foreach($this->cart->contents() as $items)
                {
                 $count++;
                 $output .= '
                 <tr> 
                  <td>'.$items["name"].'</td>
                  <td>'.$items["qty"].'</td>
                  <td>'.$items["price"].'</td>
                  <td>'.$items["subtotal"].'</td>
                  <td><button type="button" name="remove" class="btn btn-danger btn-xs remove_inventory" id="'.$items["rowid"].'">Remove</button></td>
                 </tr>
                 ';
                }

                $output .= '
                 <tr>
                  <td colspan="4" align="right">Total</td>
                  <td>'.$this->cart->total().'</td>
                 </tr>
                </table>

                </div>
                ';
                 $output .= '<div align="right">
                    <a href="'. base_url().'checkout">
                      <button type="button" id="paymet" class="btn btn-info">Proceed To Payment Details</button>
                    </a>
                 </div>';
                 
                if($count == 0)
                {
                 $output = '<h3 align="center">Cart is Empty</h3>';
                }
                
               echo  $output;  ?>
                
          </div>
        </div>
    </div>
</div>
<script>
  $(document).ready(function(){
      var controller = 'Welcome';
      var base_url = '<?php echo site_url(); ?>';
     $('.add_cart').click(function(){
        var product_id = $(this).data("productid");
        var product_name = $(this).data("productname");
        var product_price = $(this).data("price");
        var quantity = $('#' + product_id).val();
        if(quantity != '' && quantity > 0)
        {
           $.ajax({
            url:"<?php echo base_url(); ?>index.php/welcome/add",
            method:"POST",
            data:{product_id:product_id, product_name:product_name, product_price:product_price, quantity:quantity},
            success:function(data)
            {
             alert("Product Added into Cart");
             $('#cart_details').html(data);

             $('#' + product_id).val('');

            }
           });
        }else{
          alert("Please Enter quantity");
        }
     });


    //$('#cart_details').load("<?php echo base_url(); ?>index.php/welcome/load");

    $(document).on('click', '.remove_inventory', function(){
        var row_id = $(this).attr("id");

        if(confirm("Are you sure you want to remove this?"))
        {
         $.ajax({
          url:"<?php echo base_url(); ?>index.php/welcome/remove",
          method:"POST",
          data:{row_id:row_id},
          success:function(data)
          {
           alert("Product removed from Cart");
           $('#cart_details').html(data);
            location.reload();
           
          }
         });
        }
        else
        {
         return false;
        }
   });

   $(document).on('click', '#clear_cart', function(){
      if(confirm("Are you sure you want to clear cart?"))
      {
       $.ajax({
        url:"<?php echo base_url(); ?>index.php/welcome/clear",
        success:function(data)
        {
         alert("Your cart has been clear...");
         $('#cart_details').html(data);
        }
       });
      }
      else
      {
       return false;
      }
   });

  });
</script>