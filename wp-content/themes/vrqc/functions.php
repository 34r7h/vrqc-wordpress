<?php


function vrqc_enqueue_footer() {

	wp_enqueue_style( 'style', get_template_directory_uri(). '/style.css');
	wp_enqueue_script( 'vrqc-jquery', 'https://code.jquery.com/jquery-1.11.2.min.js' );
	wp_enqueue_script( 'jquery-easing', get_template_directory_uri(). '/js/jquery.easing.1.3.js', array( 'vrqc-jquery' ) );
	wp_enqueue_script( 'jquery-mobile', get_template_directory_uri(). '/js/jquery.mobile.customized.min.js', array( 'vrqc-jquery' ) );
	wp_enqueue_script( 'html5', 'http://html5shim.googlecode.com/svn/trunk/html5.js' );
	wp_enqueue_script( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js', array( 'vrqc-jquery' ) );
	wp_enqueue_script( 'superfish', get_template_directory_uri(). '/js/superfish.js', array( 'vrqc-jquery' ) );
	wp_enqueue_script( 'jquery-ui-to-top', get_template_directory_uri(). '/js/jquery.ui.totop.js', array( 'vrqc-jquery' ) );
}
add_action('wp_head', 'vrqc_enqueue_footer');

register_nav_menus( array(
	'main_menu' => 'Main Menu',
	'footer_menu' => 'Footer Menu',
));

function my_wp_nav_menu_args( $args = '' ) {
	$args['container'] = false;
	return $args;
}
add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );

add_theme_support( 'custom-header' );

function featuredSupport() {
add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'title-tag' );
add_theme_support( 'custom-background' );

}
add_action( 'after_setup_theme', 'featuredSupport' );