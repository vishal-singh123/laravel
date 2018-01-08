var App = angular.module('mainRoutes', ['ngRoute']);

app.config(function($routeProvider){
	$routeProvider.when('/',{
		controller: 'mainController',
		templateUrl: '../views/main.php'
	}).when('/about',{
		templateUrl: '../views/home/about.php'
	}).otherwise({
		redirectTo: '/'
	});
});