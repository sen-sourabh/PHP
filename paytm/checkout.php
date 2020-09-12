<?php
	session_start();
	if(isset($_POST['pay']))
	{
		$price = $_POST['price'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Paytm</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6">
				<form method="post" action="paytmlib/PaytmKit/pgRedirect.php">
					<table class="table" border="1">
						<tbody>
							<tr>
								<th>S.No</th>
								<th>Label</th>
								<th>Value</th>
							</tr>
							<tr>
								<td>1</td>
								<td><label>ORDER_ID::*</label></td>
								<td><input class="form-control" id="ORDER_ID" tabindex="1" maxlength="20" size="20"
									name="ORDER_ID" autocomplete="off"
									value="<?php echo  "ORDS" . rand(10000,99999999)?>">
								</td>
							</tr>
							<tr>
								<td>2</td>
								<td><label>CUSTID ::*</label></td>
								<td><input class="form-control" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php echo $_SESSION['user'];?>"></td>
							</tr>
							<tr>
								<td>3</td>
								<td><label>INDUSTRY_TYPE_ID ::*</label></td>
								<td><input class="form-control" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail"></td>
							</tr>
							<tr>
								<td>4</td>
								<td><label>Channel ::*</label></td>
								<td><input class="form-control" id="CHANNEL_ID" tabindex="4" maxlength="12"
									size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
								</td>
							</tr>
							<tr>
								<td>5</td>
								<td><label>txnAmount*</label></td>
								<td><input class="form-control" title="TXN_AMOUNT" tabindex="10"
									type="text" name="TXN_AMOUNT"
									value="<?php echo $price;?>">
								</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td><input class="btn btn-primary" value="CheckOut" type="submit"	onclick=""></td>
							</tr>
						</tbody>
					</table>
					* - Mandatory Fields
				</form>
			</div>
		</div>
	</div>
</body>
</html>