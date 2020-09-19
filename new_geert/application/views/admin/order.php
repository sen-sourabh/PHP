	<div class="col-sm-10 col-sm-offset-2 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Order Info</li>
			</ol>
		</div><!--/.row-->
		<div id="ordermessage">
		</div>

		<div class="productde">
			<div class="">
				<div class="row">
					<div class="table-responsive">
						<table class="table">
							  <thead>
							    <tr>
							      <th scope="col">#</th>
							      <th scope="col">Order ID</th>
							      <th scope="col">Name</th>
							      <th scope="col">Email</th>
							      <th scope="col">Adderss</th>
							      <th scope="col">Date</th>
							      <th scope="col">Status</th>
							      <th scope="col"></th>
							    </tr>
							  </thead>
							  <tbody>
							  	<?php
								    foreach ($userorder as $orderDetail) {   
								?>
							    <tr id="order<?php echo $orderDetail->order_id; ?>">
							     	<th scope="row">
										<div class="custom-control custom-checkbox">
									 		 <input type="checkbox" class="custom-control-input" id="customCheck1">
										</div>
									</th>
									<td>
										<a href="#" onclick="show_data_ajax(<?php echo $orderDetail->order_id; ?>)">
											<?php echo $orderDetail->order_id; ?>
										</a>
									</td>
									<td><?php echo $orderDetail->username; ?></td>
									<td><?php echo $orderDetail->useremail	; ?></td>
									<td>
										<?php echo $orderDetail->Address; ?> ,
										<?php echo $orderDetail->City; ?> ,
										<?php echo $orderDetail->postcode; ?> , 
										<?php echo $orderDetail->Country; ?> 
									</td>
									<td><?php echo $orderDetail->orderdate; ?></td>
									<td><?php echo $orderDetail->status; ?></td>
									<td><a href="#" onclick="load_data_ajax(<?php echo $orderDetail->order_id; ?>)">
										<i class="fa fa-close fa-1x"></i></a></td>
								</tr>
								<?php } ?>
							  </tbody>
							</table>
							 <div id="wait" style="display:none;width:69px;height:89px;position:absolute;top:60%;left:47%;padding:2px;"><img src='<?php echo base_url(); ?>assets/images/demo_wait.gif' width="64" height="64" /><br>Loading..</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.main-->
		<div id="orderList">
		</div>

	<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/chart.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/chart-data.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/easypiechart.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/easypiechart-data.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/custom.js"></script>
	<script type="text/javascript">
		$("input[type='image']").click(function() {
	    $("input[id='my_file']").click();
		});
	</script>
	<script>
		$('.jqte-test').jqte();
		
		// settings of status
		var jqteStatus = true;
		$(".status").click(function()
		{
			jqteStatus = jqteStatus ? false : true;
			$('.jqte-test').jqte({"status" : jqteStatus})
		});
	</script>
	<script type="text/javascript">
        var controller = 'Admin';
        var base_url = '<?php echo site_url(); ?>admin/';
        function load_data_ajax(orderid){
            $("#wait").css("display", "block");
            $.ajax({
               'url' : base_url + 'deleteorder',
               'type' : 'POST', 
               'data' : {'orderid' : orderid  },
               'success' : function(data){ 
                 var container = $('#ordermessage'); 
                    if(data){
                         container.html(data);
                         $("#order"+orderid).css("display", "none");
                         $("#wait").css("display", "none");
                    }
                }
            }); 
        }
    </script>

    <script type="text/javascript">
        var controller = 'Admin';
        var base_url = '<?php echo site_url(); ?>admin/';
        function show_data_ajax(orderid){
            $.ajax({
               'url' : base_url + 'showorder',
               'type' : 'POST', 
               'data' : {'orderid' : orderid  },
               'success' : function(data){ 
                 var container = $('#orderList'); 
                    if(data){
                         container.html(data);
                        
                    }
                }
            }); 
        }
    </script>
	
	
</body>
</html>
