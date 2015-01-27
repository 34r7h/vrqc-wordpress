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
<body ng-controller="vrqcCtrl">
{{test}}

<!--==============================header=================================-->
<header class="clearfix container">
    <div class="col-xs-3 brand text-center">
        <a href=""><img src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" /></a>
    </div>
    <div class="col-xs-9 visible-xs">
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
                    <ul class="nav navbar-nav navbar-right text-right">
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

    <div class="col-xs-12 visible-xs well header-info text-center">
        <h1>Vacation Rentals Quebec City</h1>
        <span class="col-xs-7">
            <a href="tel:15817776339">1 (581) 777-6339</a>
        </span>
        <span class="col-xs-2">
            <a href="mailto:quebeccityreservations@gmail.com">E</a>
        </span>
        <span class="col-xs-3">
            <a href="">F</a>
        </span>
    </div>

    <div class="col-sm-9 col-md-3 hidden-xs well header-info text-center">
        <h1>Vacation Rentals Quebec City</h1>
        <span class="col-xs-7">
            <h4>Tel</h4>
            <a href="tel:15817776339">1 (581) 777-6339</a>
        </span>
        <span class="col-xs-2">
            <h4>Email</h4>
            <a href="mailto:quebeccityreservations@gmail.com">E</a>
        </span>
        <span class="col-xs-3">
            <h4>Facebook</h4>
            <a href="">F</a>
        </span>
    </div>
    <div class="col-xs-12 col-md-6">
        <div class="featured-offer">
            <?php
                $cat_id = 5; //the certain category ID
                $latest_cat_post = new WP_Query( array('posts_per_page' => 1, 'category__in' => array($cat_id)));
                if( $latest_cat_post->have_posts() ) : while( $latest_cat_post->have_posts() ) : $latest_cat_post->the_post();  ?>
                    <?php echo get_the_post_thumbnail() ?>
            <?php endwhile; endif; ?>
        </div>
        <div class="col-sm-12 hidden-xs">
            <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
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

    </div>

</header>