<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="style.css" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

    	<!--[if lt IE 8]>
      		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>
     	<![endif]-->

      <!--[if (gt IE 9)|!(IE)]><!-->
      <!--<![endif]-->
      	<!--[if lt IE 9]>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>
      <![endif]-->
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
        get_template_part( 'page' );
        get_footer();
    }
?>