<!DOCTYPE html>
<html>
<head>
	<title>AngularJS</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	<script type="text/javascript" src="custom.js"></script>
	
</head>
<body>
<div  class="container">
	<div ng-app="myApp">
		<div ng-controller="Web">
			Users : <input type="text" ng-model="user" name="user" ng-change="getuser()"><br>
			<pre>
				<p ng-bind="data"></p>
				<p ng-repeat="x in data">{{"Name : " + x.name }}</p>
			</pre>
		</div>
	</div>
</div>

</body>
</html>