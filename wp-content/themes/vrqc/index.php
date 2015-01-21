<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="stylesheet" href="get_template_directory_uri(). '/style.css'" type="text/css" media="screen">
    <?php wp_head(); ?>

</head>
<body>

<?php
    if ( is_front_page() ) {
        get_header( 'home' );
        get_template_part( 'page', 'home' );
        get_footer( 'home' );
    } elseif ( is_single() ) {
        get_header();
        get_template_part( 'page', 'single' );
        get_footer();
    } else {
        get_header();
        get_template_part( 'page', 'home' );
        get_footer();
    }
?>