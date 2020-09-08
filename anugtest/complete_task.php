<!-- Create text field and show data with typing -->
<!DOCTYPE html>
<html>
<head>
	<title>AngularJS</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	<script type="text/javascript" src="custom.js"></script>
</head>
<body>
	<div class="container">
		<div ng-app="test_app">
			<admin></admin>
			<div ng-controller="test_control">
				<div class="row">
					<div class="col-lg-3">
						<input type="text" ng-model="username">
						<p ng-bind="username | uppercase"></p>
						<input type="number" ng-model="price">
						<p ng-bind="price | currency : '$'"></p>
						<input type="text" ng-model="search" placeholder="Search..."/>
						<ol>
							<li ng-repeat="data in users | orderBy : 'Name' | filter : search">{{  "Name : " + data.Name }}</li>
						</ol>						
					</div>
				</div>
			</div>
		</div>	
	</div>
</body>
</html>

<script>
	var newApp = angular.module("test_app",[]);
// newApp.controller("test_control", function($scope){
// 	$scope.users = [ 
// 		{"Name" : "Admin", "City" : "Indore"},
// 		{"Name" : "Atul", "City" : "Dewas"},
// 		{"Name" : "Don", "City" : "Ujjain"},
// 		{"Name" : "Dumb", "City" : "Kanpur"}
// 	];
// });

newApp.directive("admin",function(){
	var users = [ 
		{"Name" : "Admin", "City" : "Indore"},
		{"Name" : "Atul", "City" : "Dewas"},
		{"Name" : "Don", "City" : "Ujjain"},
		{"Name" : "Dumb", "City" : "Kanpur"}
	]; 

	// var con = "Hello";
	// con += " World!";
	return {
		template : "Name : " + users[3].Name + ", City : " + users[2].City
	};
});
</script>