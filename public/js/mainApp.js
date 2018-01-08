var app = angular.module('mainApp', ['mainRoutes', 'todoService', 'ngAnimate', 'toastr', 'ui.bootstrap']);

app.controller('mainController', ['$scope', '$http', 'toastr', 'TodoService', function($scope, $http, toastr, TodoService){
	$scope.lists = [];
	$scope.completedTodos = [];
	$scope.allTodos = [];

	var initializeTodos = function() {
		TodoService.getAllActiveTodos().success(function (data) {
			$scope.lists = data;
			$scope.anyActiveTodos = $scope.lists.length;
			console.log($scope.lists);
		});
		TodoService.getAllCompletedTodos().success(function(data) {
			$scope.completedTodos = data;
			console.log('completed todos');
			console.log($scope.completedTodos);
		});
	}
	initialzeTodos();
	$scope.addTodos = function() {
		var input = $scope.myInput;
		TodoService.add(input).success(function(data) {
			$scope.myinput = &quot;&quot;;
			toastr.success('Successfully added!', 'Success');
			$scope.anyActiveTodos = true;

			initializeTodos();
			$scope.lists.push({
				id: data.id,
				TodoName: input,
				IsDone: false
			});

		}).error(function(){
			toastr.error('please try again', 'fail')
		});
	}
	$scope.done = function(list) {
		console.log('task done!');
		console.log(list);
		if(list.IsDone){
			var todoIndex = $scope.lists.indexOf(list);

			TodoService.update(list.id, list.IsDone, list.TodoName).success(function(){
				$scope.anyActiveTodos = $scope.lists.length;
				initializeTodos();
				toastr.success('done a task!', 'success');
			});
		}
	}
	}

} ]);
