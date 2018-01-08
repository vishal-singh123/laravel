movieApp.controller("appCtrl", function($uibModal, moviefac, $scope) {
	$scope.movies = [];
	$scope.movielist = [];


	moviefac.getMovies().then(function(r){
		// console.log(r);
		$scope.movies = r;
	});
	moviefac.getOutnow().then(function(x){
		// console.log(x);
		$scope.movielist = x;
		// movieService.getId($scope.movielist);
		// $scope.rate = $scope.movielist.rating;
	});
	moviefac.getWallpapers().then(function(response){
		// console.log(response);
		$scope.wallpapers = response;
	});
	// moviefac.checkController().then(function(response) {
	// 	console.log('checkController', response.name);
	// })
	$scope.trailerModal = function(){
		// console.log('huh');
		var modalInstance = $uibModal.open({
			animation: true,
			templateUrl: 'js/myModal.html',
			controller: 'trailerModalCtrl'
		});

	};

	$scope.editMovieModal = function(){
		var ModalInstance = $uibModal.open({
			animation: true,
			templateUrl: 'js/formModal.html',
			controller: 'editMovieCtrl'
		});
	};
 

});
movieApp.controller("trailerModalCtrl", function($uibModalInstance, $scope) {
// console.log('jhghjg');
	$scope.close = function () {
    $uibModalInstance.dismiss('close');
  };
});


movieApp.controller("editMovieCtrl", function($uibModalInstance, $scope, moviefac){

	$scope.movie = {
		"name" :"",
		"image_url" : "",
		"release_year" : 0 ,
		"country" : "",
		"trailer_link" : "",
		"featured" : "",
		"rating" :  0,
		"description" : "",
		"genre" : "",
		"duration" : "",
		"thumbnail" : ""
	};

	$scope.saveForm = function(){
		// console.log($scope.movie);
		moviefac.editMovies($scope.movie).then(function (response) {
			$scope.movie = response;
		});
	// 	moviefac.editMovies($scope.movie);
	}

	$scope.close = function(){
		$uibModalInstance.dismiss('close');
	};
});
// movieApp.controller("appDetailsCtrl", function($scope, $stateParams, $state) {
// 	$scope.movieId = $stateParams.id;
	
// 	console.log($state.params);
// 	console.log($stateParams);
// });
