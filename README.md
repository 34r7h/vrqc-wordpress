# Custom Wordpress/AngularJS App for VRQC
===============================
##Benefits
* Easy to use for customers and administrators
* Fast loading SPA (Single Page Application)
* Automagically pulls and posts to other services
    * HomeAway
    * AirBnB

##Features
* Twitter Bootstrap 3.0 Responsive Layout
* Uses a modern JSON RESTful API
* Communicates with the Wordpress back-end via $http.get() requests

##Basic API Request
The following code can be used in any controller ($scope), directive (scope), or service (what.ever).

    $http.get('http://localhost/vrqc/api/get_posts')
        .success(function (data, status, headers, config) {
            console.log('propertyPosts',data);
            $scope.vrqc.posts = data;
        }).error(function (data, status, headers, config) {
            console.log('Sorry, no data from posts.');
    });

##### // TODO
* set a watcher to check for value changes to properties and update the corresponding post.
* set calendar/form to smart (based on property post reference.)
* weather
* Build filters for posts and properties
* Update README with all the `possibilities`!
* Garbage collection when resources are removed, etc

***
***
###### add to plugins/json-api/models/post.php ~ line 122 if JSON API updates

    // support for custom fields
    if ( !empty($values["custom"]) ) {
        foreach ($values["custom"] as $metakey => $metavalue) {
        update_post_meta($this->id,$metakey, $metavalue);
    }

*Custom fields might not be visible on post editing, check that Screen Options is enabled.*