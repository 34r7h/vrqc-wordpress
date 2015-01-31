# Custom Wordpress App for VRQC
__
* Uses a modern JSON RESTful API
* Communicates with the Wordpress back-end via HTTP.get() requests

Basic Request
_
`$http.get('http://localhost/vrqc/?json=get_posts')
     .success(function (data, status, headers, config) {
         console.log('propertyPosts',data);
         $scope.vrqc.posts = data;
     }).error(function (data, status, headers, config) {
         console.log('Sorry, no data from posts.');
 });`
