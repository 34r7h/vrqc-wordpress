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
            <hr/>
            <div class="col-xs-12 btn-group btn-group-justified">
                <a ng-repeat="section in nav.property" type="button" class="btn btn-default">{{section}}</a>
            </div>
            <hr/>


            <div class="panel-body">
                <div class="col-xs-12 well">
                    At a glance..
                </div>
                <div class="col-xs-12 well">
                    <h2>Overview</h2>
                    <?php echo the_content(); ?>
                </div>
                <div ng-init="loc.address='779+Côte+de+la+Citadelle,+Quebec+City,+QC,+Canada'; loc.src = $sce.trustAsHtml('http://www.google.com/maps/embed/v1/place?q='+ loc.address +'&key=AIzaSyBOX888m2mY9tbI1PgtJcgGvb7KsjTxTzE')" class="col-xs-12 well ">
                    <h2>Location</h2>
                    <div class="google-maps">
                        <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=779%20C%C3%B4te%20de%20la%20Citadelle%2C%20Quebec%20City%2C%20QC%2C%20Canada&key=AIzaSyBOX888m2mY9tbI1PgtJcgGvb7KsjTxTzE"></iframe>
                    </div>                      <!--<iframe
                            width="600"
                            height="450"
                            frameborder="0"
                            style="border:0"
                            ng-src="{{loc.src}}">

                    </iframe>-->
                </div>
                <div class="col-xs-12 well">
                    <h2>Photos</h2>
                </div>
                <div class="col-xs-12 well">
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
