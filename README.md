# Custom Wordpress App for VRQC
===============================
##Benefits
* Easy to use for customers and administrators
* Fast loading SPA (Single Page Application)
* Automagically pulls and posts to other services
    * HomeAway
    * AirBnB

##Features
* Uses a modern JSON RESTful API
* Communicates with the Wordpress back-end via HTTP.get() requests

##Basic API Request
    $http.get('http://localhost/vrqc/?json=get_posts')
        .success(function (data, status, headers, config) {
            console.log('propertyPosts',data);
            $scope.vrqc.posts = data;
        }).error(function (data, status, headers, config) {
            console.log('Sorry, no data from posts.');
    });

### // TODO
* enable custom fields on post editing
* set calendar / form to smart
* Weather
* Put in real info!! yay