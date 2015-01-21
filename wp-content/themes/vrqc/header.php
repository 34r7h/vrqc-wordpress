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
<header class="container">
    <div class="panel panel-default">
        <div class="panel-body col-xs-12 col-md-4 col-lg-2">
            <?php get_header_image(); ?>
            <img width="100%" src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" />
        </div>
        <div class="panel-body col-xs-12 col-md-2 col-lg-3">Info</div>
        <div class="panel-body col-xs-12 col-md-6 col-lg-7">
            <div class="col-xs-10 col-md-12">
                <?php
	            $args = array( 'numberposts' => '1', 'category' => 'offers' );
                $recent_posts = wp_get_recent_posts( $args );
                foreach( $recent_posts as $recent ){
                echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   ( __($recent["post_title"])).'</a> </li> ';
                echo get_the_post_thumbnail( $recent["ID"] );
                }
                ?>
            </div>
            <div class="col-xs-2 col-md-12">
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
    </div>

</header>