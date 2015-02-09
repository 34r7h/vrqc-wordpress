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
* Real-time weather update

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
* Main data -> custom data for properties
* Masonry http://w3bits.com/css-masonry/
* Update README with all the `possibilities`!
* Garbage collection when resources are removed, etc
* Style reservation workflow
* Weather icons
* Payment
* Localization

***
When exporting this theme to a new database, be sure to update the theme files with appropriate category ids
***
###### add to plugins/json-api/models/post.php ~ line 122 if JSON API updates

    // support for custom fields
    if ( !empty($values["custom"]) ) {
        foreach ($values["custom"] as $metakey => $metavalue) {
        update_post_meta($this->id,$metakey, $metavalue);
    }

###### add first block to easyReservations_form_shortcode.php ~line 270 and the second line to easyReservations_calendar_shortcode.php ~line 11

    $slug = get_post( $post )->post_name;
    $propertyID = get_post_id( $slug, 'easy-rooms' );
    $theForm=str_replace('['.$fields.']', '<select name="easyroom" style="'.$style.'" id="form_room" '.$disabled.' onchange="'.$price_action.$validate_action.'">'.easyreservations_resource_options($propertyID, 0).'</select>', $theForm);

    'resource' => easyreservations_resource_options($propertyID, 0),

*Custom fields might not be visible on post editing, check that Screen Options is enabled.*