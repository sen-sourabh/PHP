<!DOCTYPE html>
<html>
<head>
	<title>Invoice</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,300i,400,400i,500,500i,600,600i,700,700i|Tangerine:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
</head>
<body>
<div class="container">
	<div class="inside-container">
		<div class="row first-row">
			<div class="col-md-6">
				<h1 class="invoice-head">INVOICE</h1>
				<p class="address"><b>East Repair Inc.</b></p>	
				<p class="address">1912 Harvest Lane</p>
				<p class="address">New York, NY 12210</p>
			</div>
			<div class="col-md-6">
				<img class="logo-img" src="logoplaceholder.png"/>	
			</div>
		</div>
		<div class="row second-row">
			<div class="col-md-4 first-col">
				<p class="bill_to">BILL TO</p>
				<p class="address">John Smith</p>
				<p class="address">2 Court Square</p>
				<p class="address">New York, NY 12210</p>
			</div>
			<div class="col-md-4 middle-col">
				<p class="sub-in">Invoice #</p>
				<p class="sub-in">Invoice Date</p>
				<p class="sub-in">P.O. #</p>
				<p class="sub-in">Due Date</p>
			</div>
			<div class="col-md-4">
				<p class="sub-text">US 0001</p>
				<p class="sub-text">John Smith</p>
				<p class="sub-text">2 Court Square</p>
				<p class="sub-text">New York, NY 12210</p>
			</div>
		</div>
		<div class="row third-row">
			<table class="table">
			    <thead>
			    	<tr>
				        <th><p class="address">QTY</p></th>
				        <th><p class="address">DESCRIPTION</p></th>
				        <th><p class="address">UNIT PRICE</p></th>
				        <th><p class="address">AMOUNT</p></th>
			      	</tr>
			    </thead>
			    <tbody>
			      	<tr>
				        <td><p class="address">1</p></td>
				        <td><p class="address">Front and rear brake cables</p></td>
				        <td><p class="address">100.00</p></td>
				        <td><p class="address">100.00</p></td>
			      	</tr>
			      	<tr>
				        <td><p class="address">2</p></td>
				        <td><p class="address">Now set of podel arm</p></td>
				        <td><p class="address">15.00</p></td>
				        <td><p class="address">30.00</p></td>
			      	</tr>
			      	<tr>
				        <td><p class="address">3</p></td>
				        <td><p class="address">Labor 3hrs</p></td>
				        <td><p class="address">05.00</p></td>
				        <td><p class="address">15.00</p></td>
			      	</tr>
			      	<tr>
				        <td><p class="address"> </p></td>
				        <td><p class="address"> </p></td>
				        <td><p class="address"><b>Sales Tax 6.25%</b></p></td>
				        <td><p class="address"><b>9.06</b></p></td>
			      	</tr>
			      	<tr>
				        <td><p class="address"> </p></td>
				        <td><p class="address"> </p></td>
				        <td><p class="sub-in"><b>TOTAL</b></p></td>
				        <td><p class="sub-in"><b>$154.06</b></p></td>
			      	</tr>
			    </tbody>
			</table>
		</div>
		<div class="row forth-row">
			<div class="col-md-12">
				<h1 class="thank"><b>Thank you</b></h1>
			</div>
		</div>
	</div>
</div>
</body>
</html>