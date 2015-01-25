<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <?php wp_head(); ?>

</head>
<body>

<!--==============================header=================================-->
<header class="">
    <div class="col-xs-2 brand">
        <a href=""><img src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" /></a>
    </div>
    <div class="col-xs-10 visible-xs">
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

    <div class="col-xs-12 visible-xs well">
        <h3>Vacation Rentals Quebec City</h3>
        <span><h4>Tel</h4></span>
        <span><h4>Email</h4></span>
        <span><h4>Chat</h4></span>
    </div>

    <div class="col-sm-8 col-md-3 hidden-xs well">
        <h3>Vacation Rentals Quebec City</h3>
        <span><h4>Tel</h4></span>
        <span><h4>Email</h4></span>
        <span><h4>Chat</h4></span>
    </div>
    <div class="col-xs-12 col-md-7 col-lg-7">
        <div class="featured-offer">
            <?php
            $args = array( 'numberposts' => '1', 'category' => 'offers' );
            $recent_posts = wp_get_recent_posts( $args );
            foreach( $recent_posts as $recent ){
            echo '<a href="' . get_permalink($recent["ID"]) . '">';
            echo get_the_post_thumbnail( $recent["ID"] );
            echo '<a href="' . get_permalink($recent["ID"]) . '">' .   ( __($recent["post_title"])).'</a>';
            }
            ?>
        </div>
        <div class="col-sm-12 hidden-xs">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">Link</a></li>
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">Brand</a>
                            <?php wp_nav_menu( array( 'items_wrap' => '%3$s', 'depth' => 1 ) ); ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <?php wp_nav_menu( array( 'items_wrap' => '%3$s') ); ?>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>

    </div>

</header>