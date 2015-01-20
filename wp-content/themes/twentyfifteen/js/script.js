angular.module('app', [])
.controller('Main', function($scope, $http, $location) {
	console.log('$location',$location);
	$http.get($location.$$absUrl + '?json=1').success(function(res){
		if (Object.keys(res)[1] === 'post') {
			$scope.posts = res;
			console.log(Object.keys(res)[1],$scope.posts);
		} else if (Object.keys(res)[1] === 'page') {
			$scope.posts = res;
			console.log(Object.keys(res)[1],$scope.posts);
} else {
			$scope.posts = res;
			console.log(Object.keys(res)[1],$scope.posts);
		}
	});
});