<!DOCTYPE html>


<html <?php language_attributes(); ?> ng-app="vrqc" ng-init="$root.siteUrl = '<?php echo get_site_url(); ?>'">
<head>
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <?php wp_head(); ?>

</head>
<body ng-controller="vrqcPropCtrl">
<!--==============================header=================================-->
<header class="clearfix">
    <div class="col-xs-12">
        <a href="tel:15817776339"><i class="fa fa-phone fa-2x phone"> <span class="hidden-xs">(581) 777-6339</span></i></a>
        <a href="mailto:quebeccityreservations@gmail.com"><button class="btn btn-default "><i class="fa fa-envelope"> <span class="hidden-xs">Email</span></i></button></a>
        <a target="new" href="https://www.facebook.com/pages/Vacation-Rentals-Quebec-City/188400344615871">
            <button class="btn btn-default ">
                <i class="fa fa-facebook-official"> <span class="hidden-xs">Facebook</span></i>
            </button>
        </a>
        <a><span class="pull-right language" ></span></a>
        <i><span class="hidden-xs weather pull-right ">Current weather: <img style="height: 40px; width: auto" ng-src="{{vrqc.weather.icon_url}}" alt=""/><b> {{vrqc.weather.weather}}</b> - <b>{{vrqc.weather.temperature_string}}</b></span></i>
        <hr/>
    </div>
    <div class="col-sm-7 col-md-6 col-xs-12 brand">
        <a class="col-xs-9 col-sm-12" href="<?php echo get_site_url(); ?>">
            <img class="col-xs-4 pull-left" src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" />
            <span>
                <h1>Vacation Rentals Quebec City</h1>
            </span>
            <hr/>
        </a>
        <div class="col-xs-3 col-sm-12">
            <nav class="navbar navbar-default">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Brand and toggle get grouped for better mobile display -->
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-left">
                        <?php wp_nav_menu( array( 'items_wrap' => '%3$s', 'depth' => 1 ) ); ?>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </div>
    </div>

    <div class="col-xs-12 col-sm-5 col-md-6 pull-right">
        <div class="featured-offer">
            <?php
                $cat_id = 5; //the certain category ID
                $latest_cat_post = new WP_Query( array('posts_per_page' => 1, 'category__in' => array($cat_id)));
                if( $latest_cat_post->have_posts() ) : while( $latest_cat_post->have_posts() ) : $latest_cat_post->the_post();  ?>
                    <a href="<?php the_permalink() ?>"><?php echo get_the_post_thumbnail() ?></a>
            <?php endwhile; endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>



</header>