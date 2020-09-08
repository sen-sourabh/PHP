<!DOCTYPE html>
<html>
<head>
	<title>AngularJS</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	<script type="text/javascript" src="custom.js"></script>
	<style type="text/css">
		.breaking-news{
			background-color: black;
			color: white;
			width:100%;
			font-family: consolas;
			padding: 10px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div ng-app="test_app">
			<div ng-controller="test_control" ng-init="num1=0;num2=0;">
				<div class="row">
					<div class="col-lg-3">
						<input type="number" name="num1" value="0" ng-model="num1" placeholder="Num 1"/>
						<input type="number" name="num2" value="0" ng-model="num2" placeholder="Num 2"/>
						<p ng-bind="res"></p><br><br>
						<input class="btn btn-lg btn-dark" type="button" ng-click="sum()" name="sum" value="+" ng-model="sum"/>
						<input class="btn btn-lg btn-dark" type="button" ng-click="sub()" name="sub" value="-" ng-model="sub"/>
						<input class="btn btn-lg btn-dark" type="button" ng-click="mul()" name="mul" value="*" ng-model="mul"/>
						<input class="btn btn-lg btn-dark" type="button" ng-click="div()" name="div" value="/" ng-model="div"/>						
					</div>
				</div>
			</div>
		</div>	
	</div>
</body>
</html>