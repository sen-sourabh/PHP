<!-- <!DOCTYPE html>
<html>
<head>
	<title>AngularJs</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script type="text/javascript">
        var app = angular.module('MyApp', [])
        app.controller('MyController', function ($scope) {
            $scope.SelectFile = function (e) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $scope.PreviewImage = e.target.result;
                    $scope.$apply();
                };
 
                reader.readAsDataURL(e.target.files[0]);
            };
        });
    </script>
</head>
<body>

<div class="container" ng-app="MyApp" ng-controller="MyController">
	<table class="table table-stripped" left>
		<tr>
			<td><input type="text" name="name" placeholder="Name" ng-model="name"></td>
			<td><p ng-bind="name"></p></td>
		</tr>
		<tr>
			<td><input type="email" name="email" placeholder="Email" ng-model="email"></td>
			<td><p ng-bind="email"></p></td>
		</tr>
		<tr>
			<td><input type="password" name="pass" placeholder="Password" ng-model="pass"></td>
			<td><p ng-bind="pass"></p></td>
		</tr>
		<tr>
			<td>
				<select name="gender" ng-model="gender">
					<option>Select Gender</option>
					<option>Male</option>
					<option>Female</option>
				</select>
			</td>
			<td><p ng-bind="gender"></p></td>
		</tr>
		<tr>
			<td><input type="radio" name="hello" value="Hello" ng-model="hello">Hello<br><input type="radio" name="hello" value="Hi" ng-model="hello">Hi</td>
			<td><p ng-bind="hello"></p></td>
		</tr>
		<tr>
			<td><input type="file" name="image" ng-model="image"/></td>
			<td><img ng-bind="image"/></td>
		</tr>
		<tr>
			<td><input type="file" onchange="angular.element(this).scope().SelectFile(event)" /></td>
        	<td><img ng-src="{{PreviewImage}}" ng-show="PreviewImage != null" alt="" style="height:200px;width:200px" /></td>
		</tr>
	</table>
</div>
</body>
</html> -->


<!DOCTYPE html>
<html>
<script  src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js">  </script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<body>
    <div ng-app="myApp" ng-controller="myCtrl">
    	<h3>Register</h3>
        <form name="regForm">
            Name:-<input class="form-control" name="name" type="text" ng-model="bname" required="required" placeholder="Name"/>
            Email:-<input class="form-control" name="email" type="email" ng-model="bemail"  required="required" placeholder="Email"/>
            Password:-<input class="form-control" name="pass" type="password" ng-model="bpass"  required="required" placeholder="Password"/>
            <input type="button" class="btn btn-success" value="Submit" ng-click="insertData()" />
        </form>
    </div>
    <script>
    var app = angular.module('myApp',[]);
    app.controller('myCtrl',function($scope,$http){
        $scope.insertData=function(){
            $http.post("test.php", {
                'bname':$scope.bname,
                'bemail':$scope.bemail,
                'bpass':$scope.bpass
            }).success(function(data){
            		alert(data);
            		$scope.bname = null;
            		$scope.bemail = null;
            		$scope.bpass = null;
                    window.location.href= 'login.php';
                });
                // ,function(error){
                //     alert("Sorry! Data Couldn't be inserted!");
                //     console.error(error);

                // });
            }
        });
    </script>

</body>
</html>