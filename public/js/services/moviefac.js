movieApp.factory("moviefac", function($http){
	return{
		getMovies: function(){
			var movies = [];
			var promise = $http.get('api/v1/movies/featured').then(function(response) {
    			movies = response.data;
    			return movies;
    		});
    		return promise;
		},
		getOutnow: function(){
			var outnow = [];
			var promise = $http.get('api/v1/movies').then(function(response){
				outnow = response.data;
				return outnow;
				// console.log(outnow);
			});
			return promise;
		},
		// checkController: function(){
		// 	var wallpapers = [];
		// 	var promise = $http.get('api/v1/movies/get-all').then(function(response){
		// 		wallpapers =response.data;
		// 		return wallpapers;
		// 	});
		// 	return promise;
		// },
		getWallpapers: function(){
			var wallpapers = [];
			var promise = $http.get('js/wallpapers.json').then(function(response){
				wallpapers = response.data;
				return wallpapers;
			});
			return promise;
		},
		editMovies: function(moviedata){
			var movies = moviedata;
			console.log(movies);
			_token = document.getElementById('csrf_token').value;
			// var promise = $http.post('api/v1/movies/editMovies').then(function(response){
			// 	movies = response.data;
			// 	return movies;
			// });
			// var promise = $http.post('api/v1/movies/editMovies',
			// 	data: movies
			// })
			// .success(function(response) {
			// 	console.log(response);
			// })
			// .error(function(response) {
			// 	console.log(response);
			// });

			var promise = $http({
               method: 'POST',
               url: 'api/v1/movies/editMovies',
               data:   {movies,
               	_token : _token 
          		}
           }).then(function (response) {
               console.log(response);
           }, function (error) {
               return error.data;
           });
           return promise;
		}
	}
});