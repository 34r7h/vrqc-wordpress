app = angular.module('vrqc', []);

app.controller('vrqcPropCtrl', function($scope, data){
    $scope.vrqc = data[0];
    $scope.nav = data[1];
    $scope.index = data[2];
    $scope.show = {rooms:0};

    $scope.getTheId = data[0].propertySlug;

}).factory('data', function($http, $timeout, $location, $sce){
    var vrqc = {propertiesData:{}, propertiesObject:{}, postsData:{}, postsObject:{}, postData:{}, offersData:{}, weather:{}};
    var nav = {property: ['Overview','Rates','Location','Photos','Reviews'],properties: ['All', '1 BR', '2 BR', '3 BR', '4+ BR'], categories:[]};
    var index = {postsById:{}, postsBySlug:{}, postsByCategory:{}, propertiesById:{},propertiesBySlug:{},propertyPostsById:{},propertyPostsBySlug:{}};
    $timeout(function(){

        // Property Posts
        $http.get('http://localhost/vrqc/?json=get_posts&cat=7')
            .success(function (data, status, headers, config) {
                vrqc.propertyPosts = data;
                if(vrqc.propertyPosts.posts){
                    angular.forEach(vrqc.propertyPosts.posts, function (post) {
                        index.propertyPostsBySlug[post.slug]=post.id;
                        index.propertyPostsById[post.id]=post.slug;
                    });
                }
            }).error(function (data, status, headers, config) {
        });

        // Property Resources
        $http.get('http://localhost/vrqc/api/get_posts/?post_type=easy-rooms')
            .success(function (data, status, headers, config) {
                vrqc.propertiesData = data;
                angular.forEach(vrqc.propertiesData.posts, function(property){
                    vrqc.propertiesObject[property.slug]=property;
                    index.propertiesById[property.id]=property.slug;
                    index.propertiesBySlug[property.slug]=property.id;

                    $http.get('http://localhost/vrqc/api/get_post/?slug='+property.slug).success(function(data){
                        var status = data.status,
                            post = data.post,
                            nonce = '',
                            updateNonce = '';

                        // Gets create permission key if admin is logged in
                        $http.get('http://localhost/vrqc/?json=core.get_nonce&controller=posts&method=create_post')
                            .success(function(data, status, headers, config){
                                nonce = data.nonce;
                            }).error(function(data, status, headers, config){
                            });
                        // Gets update permission key if admin is logged in
                        $http.get('http://localhost/vrqc/?json=core.get_nonce&controller=posts&method=update_post')
                            .success(function(data, status, headers, config){
                                updateNonce = data.nonce;
                            }).error(function(data, status, headers, config){
                            });

                        $timeout(function(){
                        // Creates a new post from a new resource
                            if( status === 'error' ) {
                                var custom = '';
                                var propertyProperties = ['type','meals','amenities','suitability','sleeps','bathrooms','entertainment','kitchen','address', 'rate-info','off-peak-night', 'off-peak-week','peak-night', 'peak-week'];
                                angular.forEach(property.custom_fields, function(value,field){
                                    custom = custom + '&custom['+field+']='+encodeURI(value);
                                });
                                angular.forEach(propertyProperties, function(property){
                                    custom = custom + '&custom['+property+']=';
                                });

                                var createPostUrl = 'http://localhost/vrqc/?json=create_post&nonce=' + nonce + '&title=' + encodeURI(property.title) + '&categories=properties&status=publish&'+custom;
                                console.log('createPostUrl', createPostUrl);
                                console.log('index.propertyPostsBySlug[property.slug]', index.propertyPostsBySlug);
                                console.log('[property.slug]', property.slug);
                                if (!index.propertyPostsBySlug[property.slug]) {
                                    $http.get(createPostUrl)
                                        .success(function (data, status, headers, config) {
                                        }).error(function (data, status, headers, config) {
                                            console.log('post not created');
                                    });
                                }
                            }/* else if(status === 'ok' && property.custom_fields != post.custom_fields){
                                console.log('Some custom property fields should copy over to posts..');

                                 $timeout(function(){
                                 var custom = '';
                                 angular.forEach(property.custom_fields, function(value,field){
                                 custom = custom + '&custom_field['+field+']='+encodeURI(value);
                                 });
                                 // console.log('custom', custom);
                                 var updatePostUrl = 'http://localhost/vrqc/api/posts/update_post/?slug=' + property.slug + '&nonce=' + updateNonce + custom;
                                 console.log('updatePostUrl', updatePostUrl);
                                 $http.get(updatePostUrl)
                                 .success(function (data, status, headers, config) {
                                 console.log(data);
                                 }).error(function (data, status, headers, config) {
                                 console.log('post.custom_fields', 'Didn\'t happen.');
                                 });
                                 },2000)
                            }*/
                        },3000);

                    });
                })
            }).error(function (data, status, headers, config) {
                console.log('sucks');
            });
        // All regular posts
        $http.get('http://localhost/vrqc/?json=get_posts&cat=-5,-2,-7')
            .success(function (data, status, headers, config) {
                //console.log('postsData',data);
                vrqc.postsData = data;
                angular.forEach(vrqc.postsData.posts, function (post) {
                    vrqc.postsObject[post.slug]=post;
                    index.postsById[post.id]=post.slug;
                    index.postsBySlug[post.slug]=post.id;
                    if (!index.postsByCategory[post.categories[0].slug]) {
                        index.postsByCategory[post.categories[0].slug] = [post.id];
                        nav.categories.push(post.categories[0].slug);
                    } else {
                        index.postsByCategory[post.categories[0].slug].push(post.id);
                    }
                })

            }).error(function (data, status, headers, config) {
                //console.log('sucks');
            });
        // Specific Post or Page
        $http.get($location.$$absUrl+'?json=1')
            .success(function (data, status, headers, config) {
                //console.log('postsData',data);
                vrqc.postData = data;
                // Get Corresponding Property Data
                if(data.post && data.post.categories[0].slug === 'properties'){
                    vrqc.propertyData = vrqc.propertiesObject[data.post.slug];
                    $timeout(function(){
                        vrqc.propertyDataId = vrqc.propertyData['id'];
                    },0);
                }
            }).error(function (data, status, headers, config) {
                //console.log('sucks');
            });
        // Offer Posts
        $http.get('http://localhost/vrqc/?json=get_posts&cat=5')
            .success(function (data, status, headers, config) {
                //console.log('OffersData',data);
                vrqc.offersData = data;
            }).error(function (data, status, headers, config) {
                //console.log('sucks');
            });

        // Weather API
        $http.get('http://api.wunderground.com/api/d26d4a3f9b087f03/geolookup/conditions/q/Canada/Québec.json')
            .success(function (data, status, headers, config) {
                //console.log('weather',data);
                vrqc.weather = data.current_observation;
            }).error(function (data, status, headers, config) {
                //console.log('sucks');
            });
    },0);

    vrqc.encode = function(string){
        return $sce.trustAsHtml(encodeURI(string));
    };

    vrqc.trust = function(str){
        var encodedStr = encodeURI(str);
        return $sce.trustAsResourceUrl(encodedStr);
    };

    vrqc.addToArray = function (arr, item) {
        return arr.push(item)
    };

    vrqc.propertySlug = function(id) {
        console.log(id);
        var slug = '';
        $timeout(function () {
            angular.forEach(vrqc.propertyPosts.posts, function(property){
                if (property.id == id) {
                    console.log('id',property.id);
                    slug = property.slug;
                    console.log('slug',slug);
                    return slug;
                }
            });

        },6000);

    };

    return [vrqc, nav, index];

    /*        $scope.propertyID = function(properties, url) {
     $timeout(function(url){
     console.log('url', url);
     console.log('properties', properties);
     console.log(properties[url]);
     },5000);
     }*/
});