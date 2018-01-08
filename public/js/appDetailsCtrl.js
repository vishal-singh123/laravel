movieApp.service("movieService",function($http){
	return{
		getId: function(id) {
			var movieInstance = [];
			var promise = $http.get('js/moviesadd.json').then(function(response){
				_.each(response.data, function(value, key){
					if(value.id == id){
						movieInstance = value;
					}
				})
				return movieInstance;
			});
			return promise;
		}	
	}
	
});

movieApp.controller("appDetailsCtrl",['$scope', '$stateParams', 'movieService', '$state', function($scope, $stateParams, movieService, $state){
	$scope.movieId = $stateParams.id;
	console.log($scope.movieId)
	movieService.getId($scope.movieId).then(function(response){
		$scope.movieDetails = response;
		console.log($scope.movieDetails);
	});
}]);
