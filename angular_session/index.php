<!DOCTYPE html>
<html>
<head>
	<title>Angular Session</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<script src="bootstrap/js/jquery-3.3.1.min.js"></script>
	<script src="angular.min.js"></script>
	<style type="text/css">
		.btn:hover{ cursor:pointer;box-shadow: 0px 0px 10px 2px #999999; }
	</style>
</head>
<body>
<div class="container" ng-app="session_app">
	<h2><b>AngularJs</b></h2>
	<div ng-controller="session_control" ng-init="showuser()"><br>
		<div class="row">
			<div class="col-lg-4">
				<form method="post" name="myform">
					<input class="form-control" type="text" name="name" ng-model="name" placeholder="Name" />
					<br><input class="form-control" type="email" name="email" ng-model="email" placeholder="Email"/>
					<br><input class="form-control ng-pristine ng-untouched ng-valid ng-empty" type="password" name="password" ng-model="password" placeholder="Password"/>
					<input type="hidden" ng-model="id" name="id">
					<br><input class="btn btn-success" type="button" name="submit" ng-click="saveData()" value="{{ btnName }}"/>
				</form>
			</div>
			<div class="col-lg-8">
				<form method="post">
					<div class="input-group">
						<input class="form-control" required="required" type="text" ng-model="addstr" placeholder="Add"/>
						<input class="btn btn-primary" type="button" ng-click="addInArray()" value="Add"/>
					</div>
				</form>
				<ol>
					<li ng-repeat="ar in colors track by $index">{{ ar }}</li>
				</ol>
			</div>
		</div><br>
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-lg-10">
						<input class="form-control" type="text" name="Search" ng-model="search" placeholder="Search..."><br>
					</div>
					<div class="col-lg-2">
						<b>{{ "Time : " + time}}</b>
					</div>
				</div>
				<table class="table table-stripped table-hover">
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>Email</th>
						<th>Password</th>
						<th>Date</th>
						<th>Actions</th>
					</tr>
					<tr ng-repeat="x in datas | filter: search">
						<td><input type="hidden" ng-model="id" value="{{ x.id }}"/>{{ x.id }}</td>
						<td>{{ x.name }}</td>
						<td>{{ x.email }}</td>
						<td>{{ x.password }}</td>
						<td>{{ x.create_date }}</td>
						<td><button class="btn btn-danger btn-sm" ng-click="delete(x.id)"><span class="fa fa-times"> Delete</span></button> | <button class="btn btn-warning btn-sm" ng-click="updateData(x.id, x.name, x.email, x.password)"><span class="fa fa-edit"> Update</span></button></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	var app = angular.module('session_app', []);
	app.controller('session_control', function($scope, $http, $interval){
		$scope.colors = ["Red","Green"];
		$scope.btnName = "Save";
		$scope.saveData = function(){
			if($scope.name == null || $scope.email == null || $scope.password == null){
				alert("All field requires.");
			}else{
				$http.post('insert.php', {
					'name' : $scope.name,
					'email' : $scope.email,
					'pass' : $scope.password,
					'id' : $scope.id,
					'btnName' : $scope.btnName
				}).then(function(data){
					$scope.name = null;
					$scope.email = null;
					$scope.password = null;
					$scope.btnName = "Save";
					$scope.showuser();
				});
			}
		};
		$scope.updateData = function(id, name, email, password){
			$scope.id = id;
			$scope.name = name;
			$scope.email = email;
			$scope.password = password;
			$scope.btnName = "Update";
		};
		$scope.delete = function(id){
			$http({
				'method': 'POST',
				'url': 'delete.php',
				'data' : ({'id':id})
			}).then(function(data){
				$scope.showuser();
			});
		};
		$scope.showuser = function(){
			$http.get("select.php").then(function(response){
				$scope.datas = response.data;
			});
		};
		$scope.addInArray = function(){
			str = $scope.addstr;
			$scope.colors.push(str);
			$scope.addstr = null;
		};
		$interval(function(){
			$scope.time = new Date().toLocaleTimeString();
		}, 1000);
	});
</script>
</body>
</html>