app = angular.module('vrqc', []);
/*app.run(function($rootScope){
    console.log('BlogInfo',BlogInfo);
    $rootScope.dir = BlogInfo.url;
    $rootScope.site = BlogInfo.site;
    $rootScope.api = AppAPI.url;
    console.log(BlogInfo.site);
    console.log(AppAPI.url);
});*/
app.controller('vrqcCtrl', function($scope, $http, $location){
    $scope.test = 'testoes';
    console.log('hello helpful');
    $http({
        method: 'GET',
        url: $location.absUrl() + '/?json=1',
        params: {
            json: 'get_posts'
        }
    }).
        success(function(data, status, headers, config) {
            $scope.postData = data.posts;
        }).
        error(function(data, status, headers, config) {
        });

});
