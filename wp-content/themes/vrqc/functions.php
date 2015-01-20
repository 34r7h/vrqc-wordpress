<?php


function vrqc_enqueue_footer() {

	wp_enqueue_style( 'style', get_template_directory_uri(). '/style.css');

	wp_enqueue_script( 'vrqc-jquery', get_template_directory_uri(). '/js/jquery.js' );
	wp_enqueue_script( 'jquery-easing', get_template_directory_uri(). '/js/jquery.easing.1.3.js', array( 'vrqc-jquery' ) );
	wp_enqueue_script( 'camera', get_template_directory_uri(). '/js/camera.js', array( 'vrqc-jquery' ) );
	wp_enqueue_script( 'jquery-mobile', get_template_directory_uri(). '/js/jquery.mobile.customized.min.js', array( 'vrqc-jquery' ) );
	wp_enqueue_script( 'html5', 'http://html5shim.googlecode.com/svn/trunk/html5.js' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri(). '/js/bootstrap.js', array( 'vrqc-jquery' ) );
	wp_enqueue_script( 'superfish', get_template_directory_uri(). '/js/superfish.js', array( 'vrqc-jquery' ) );
	wp_enqueue_script( 'jquery-ui-to-top', get_template_directory_uri(). '/js/jquery.ui.totop.js', array( 'vrqc-jquery' ) );
}
add_action('wp_head', 'vrqc_enqueue_footer');

register_nav_menus( array(
	'main_menu' => 'Main Menu',
	'footer_menu' => 'Footer Menu',
) );

function my_wp_nav_menu_args( $args = '' ) {
	$args['container'] = false;
	return $args;
}
add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );