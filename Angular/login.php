<!DOCTYPE html> 
<html>
<script  src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js">  </script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<body>
    <div ng-app="myApp" ng-controller="myCtrl">
        <h3>Login</h3>
        <form>
            Email:-<input class="form-control" type="email" ng-model="bemail"  required="required" placeholder="Email"/>
            Password:-<input class="form-control" type="password" ng-model="bpass"  required="required" placeholder="Password"/>
            <input type="button" class="btn btn-success" value="Submit" ng-click="loginData()" />
        </form>
    </div>
    <script>
    var app = angular.module('myApp',[]);
    app.controller('myCtrl',function($scope,$http){
        $scope.loginData=function(){      
            $http.post("checklogin.php", {
                'bemail':$scope.bemail,
                'bpass':$scope.bpass
            }).success(function(data){
            		window.location.href= 'home.php';
                    app.config(function($routeProvider) {
                        $routeProvider.when("home.php", {
                            templateUrl : "home.php"
                        });
                    });
                }
            }
        });
    </script>

</body>
</html>