<!DOCTYPE html>


<html lang="en" ng-app="vrqc">
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
    <div>
        <a href="tel:15817776339"><button class="btn btn-default "><i class="fa fa-phone"> <span class="hidden-xs">(581) 777-6339</span></i></button></a>
        <a href="mailto:quebeccityreservations@gmail.com"><button class="btn btn-default "><i class="fa fa-envelope"> <span class="hidden-xs">Email</span></i></button></a>
        <a href="facebook.com"><button class="btn btn-default "><i class="fa fa-facebook-official"> <span class="hidden-xs">Facebook</span></i></button></a>
        <a href=""><button class="btn btn-default pull-right"><i class="fa fa-language"> Le French?</i></button></a>
        <span class="hidden-xs pull-right weather">Current weather: <b>{{vrqc.weather.weather}}</b> Temp: <b>{{vrqc.weather.temperature_string}}</b></span>
        <hr/>
    </div>
    <div class="col-sm-5 col-md-7 col-xs-12 brand">
        <a class="col-xs-12" href="">
            <img src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" /><span class="col-xs-9"><h1>Vacation Rentals Quebec City</h1></span>
        </a>
    </div>

    <div class="col-xs-12 col-sm-7 col-md-5 pull-right">
        <div class="featured-offer">
            <?php
                $cat_id = 5; //the certain category ID
                $latest_cat_post = new WP_Query( array('posts_per_page' => 1, 'category__in' => array($cat_id)));
                if( $latest_cat_post->have_posts() ) : while( $latest_cat_post->have_posts() ) : $latest_cat_post->the_post();  ?>
                    <?php echo get_the_post_thumbnail() ?>
            <?php endwhile; endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>

    <div class="col-md-7 col-sm-12">
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
                <ul class="nav navbar-nav navbar-left text-right">
                    <?php wp_nav_menu( array( 'items_wrap' => '%3$s', 'depth' => 1 ) ); ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <?php wp_nav_menu( array( 'items_wrap' => '%3$s') ); ?>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </div>

</header>