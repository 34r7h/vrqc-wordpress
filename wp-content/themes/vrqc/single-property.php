<div class="clearfix">
    <article class="col-xs-6 col-sm-7 col-sm-offset-1 property">
        <div class="panel panel-default">
            <h1 class="panel-heading">
                <i class="fa fa-home">
                    <?php
                    $property_id = url_to_postid($url);
                    $property = get_post($property_id);
                    echo $property->post_title;
                    ?>
                </i>
            </h1>
            <div class="property-featured">
                <?php echo get_the_post_thumbnail(); ?>
            </div>
            <br/>
            <div ng-init="show.propertySection='Overview'" class="col-xs-12 btn-group btn-group-justified">
                <a ng-repeat="(key, section) in nav.property" ng-click='$parent.show.propertySection={}; $parent.show.propertySection=section' type="button" class="btn btn-default">{{section}}</a>
            </div>
            <hr/>


            <div class="panel-body">
                <div class="col-xs-12 well">
                    At a glance..
                    <div class="table-responsive"><table class="table">
                        <tr><th>Rooms</th><th>Sleeps</th><th>Bathrooms</th><th>Cost</th></tr>
                        <tr>
                            <td>
                                <?php $meta = get_post_meta( get_the_ID(), 'roomcount' ); echo $meta[0] ?>
                            </td>

                            <td>
                                <?php $meta = get_post_meta( get_the_ID(), 'sleeps' ); echo $meta[0] ?>
                            </td>
                            <td>
                                <?php $meta = get_post_meta( get_the_ID(), 'bathrooms' ); echo $meta[0] ?>
                            </td>
                            <td>
                                <?php $meta = get_post_meta( get_the_ID(), 'bathrooms' ); echo $meta[0] ?>
                            </td>
                        </tr>

                    </table></div>
                </div>
                <div ng-show="show.propertySection ==='Overview'" class="col-xs-12 well">
                    <h2>Overview</h2>
                    <?php echo the_content(); ?>
                    <hr/>
                    <h4>Property Type</h4>
                    <?php $meta = get_post_meta( get_the_ID(), 'type' ); echo $meta[0] ?>
                    <hr/>
                    <h4>Meals</h4>
                    <?php $meta = get_post_meta( get_the_ID(), 'meals' ); echo $meta[0] ?>
                    <hr/>
                    <h4>Amenities</h4>
                    <?php $meta = get_post_meta( get_the_ID(), 'amenities' ); echo $meta[0] ?>
                    <hr/>
                    <h4>Suitability</h4>
                    <?php $meta = get_post_meta( get_the_ID(), 'suitability' ); echo $meta[0] ?>
                    <hr/>
                    <h4>Entertainment</h4>
                    <?php $meta = get_post_meta( get_the_ID(), 'entertainment' ); echo $meta[0] ?>
                    <hr/>
                    <h4>Kitchen</h4>
                    <?php $meta = get_post_meta( get_the_ID(), 'kitchen' ); echo $meta[0] ?>
                </div>
                <div ng-show="show.propertySection ==='Overview' || show.propertySection ==='Rates'" class="col-xs-12 well">
                    <h2>Rates</h2>
                </div>
                <div ng-show="show.propertySection ==='Overview' || show.propertySection ==='Location'" ng-init="loc.address='779+Côte+de+la+Citadelle,+Quebec+City,+QC,+Canada'; loc.src = $sce.trustAsHtml('http://www.google.com/maps/embed/v1/place?q='+ loc.address +'&key=AIzaSyBOX888m2mY9tbI1PgtJcgGvb7KsjTxTzE')" class="col-xs-12 well ">
                    <h2>Location</h2>
                    <div class="google-maps">
                        <iframe width="600" height="450" frameborder="0" style="border:0" ng-src="https://www.google.com/maps/embed/v1/place?q=779%20C%C3%B4te%20de%20la%20Citadelle%2C%20Quebec%20City%2C%20QC%2C%20Canada&key=AIzaSyBOX888m2mY9tbI1PgtJcgGvb7KsjTxTzE"></iframe>
                    </div>                      <!--<iframe
                            width="600"
                            height="450"
                            frameborder="0"
                            style="border:0"
                            ng-src="{{loc.src}}">

                    </iframe>-->
                </div>
                <div ng-show="show.propertySection ==='Overview' || show.propertySection ==='Photos'" class="col-xs-12 well">
                    <h2>Photos</h2>
                </div>
                <div ng-show="show.propertySection ==='Overview' || show.propertySection ==='Reviews'" class="col-xs-12 well">
                    <h2>Reviews</h2>
                </div>

            </div>
        </div>
    </article>
    <aside class="col-xs-6 col-sm-4">
        <?php get_sidebar('property'); ?>
    </aside>
</div>
<hr/>
