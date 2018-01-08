window.movieApp = angular.module('movieApp', ['ui.router', 'ui.bootstrap']);
movieApp.config(function($stateProvider, $urlRouterProvider, $locationProvider){
	$locationProvider.html5Mode(true);
	$stateProvider
	.state('details',{
		url: '/info/{id}',
		templateUrl: 'templates/details.html',
		controller: 'appDetailsCtrl'
	}).state('main',{
		url: '/',
		templateUrl: 'templates/main.html',
		controller: 'appCtrl'
	});
	$urlRouterProvider.otherwise('/');
});

// movieApp.controller("featuredMovies", function($scope){
// 	var movies = $scope.movies = [];
// 	$scope.active = 0;
// 	$scope.addMovies = function(){
// 		movies.push({
// 			image: 'movies/Avengers_Infiinity_War.jpg',
// 			text: 'Avengers',
// 			id: 0
// 		});
// 		movies.push({
// 			image: 'movies/batman_vs_superman.jpg',
// 			text: 'Batman vs Superman',
// 			id: 1
// 		});
// 		movies.push({
// 			image: 'movies/iron_man.jpg',
// 			text: 'Iron Man',
// 			id: 2
// 		});
// 		movies.push({
// 			image: 'movies/Justice_League.jpg',
// 			text: 'Justice League',
// 			id: 3
// 		});
// 	};
// 	console.log(movies)
// 	$scope.addMovies();
		
// });
movieApp.controller("ratingCtrl", function($scope){
		$scope.rate = 5;
});