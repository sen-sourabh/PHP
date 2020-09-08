var myApp = angular.module("test_app",[]);
myApp.controller("test_control", function($scope, $http){
	$scope.sum = function(){
		$http.post("sum.php",{
			"num1" : $scope.num1,
			"num2" : $scope.num2,
			"sum" : 1
		}).then(function(data){
			$scope.res = data.data;
		});
	}
	$scope.mul = function(){
		$http.post("sum.php",{
			"num1" : $scope.num1,
			"num2" : $scope.num2,
			"mul" : 1
		}).then(function(data){
			$scope.res = data.data;
		});
	}
	$scope.div = function(){
		$http.post("sum.php",{
			"num1" : $scope.num1,
			"num2" : $scope.num2,
			"div" : 1
		}).then(function(data){
			$scope.res = data.data;
		});
	}
	$scope.sub = function(){
		$http.post("sum.php",{
			"num1" : $scope.num1,
			"num2" : $scope.num2,
			"sub" : 1
		}).then(function(data){
			$scope.res = data.data;
		});
	}
});







// var newApp = angular.module("test_app",[]);
// newApp.controller("test_control", function($scope){

// });


// BREAKING NEWS
// newApp.controller("test_control", function($scope, $interval){
// 	$scope.news = [
// 		"Soft loan diplomacy: India goes from taking to giving funds to Russia",
// 		"Chandrayaan 2: 100m above Moon, Vikram will pick final landing",
// 		"Foods that help in reducing dark circles naturally",
// 		"Is Aishwarya Rai Bachchan's magazine cover inspired by Kate Winslet's 2009 cover?",
// 		"3 unique sari and blouse colour combinations inspired by Bollywood"
// 	];

// 	$scope.index = 0;
// 	$scope.item = "";

// 	$interval(function(){
// 		var noi = $scope.news.length;
// 		if($scope.index < noi){
// 			$scope.item = $scope.news[$scope.index];
// 			$scope.index++;
// 		}
// 		else
// 		{
// 			$scope.index = 0;
// 			$scope.item = $scope.news[$scope.index];
// 		}
// 	}, 2000);
// });


// DIRECTIVES IN ANGULARJS
// newApp.directive("admin",function(){
// 	var users = [ 
// 		{"Name" : "Admin", "City" : "Indore"},
// 		{"Name" : "Atul", "City" : "Dewas"},
// 		{"Name" : "Don", "City" : "Ujjain"},
// 		{"Name" : "Dumb", "City" : "Kanpur"}
// 	];

// 	// var con = "Hello";
// 	// con += " World!";
// 	return {
// 		template : "Name : " + users[3].Name + ", City : " + users[2].City
// 	};
// });