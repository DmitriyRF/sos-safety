<?php
//Define theme support


function sos_setup() {
	
	load_theme_textdomain( 'sos' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'top'    => __( 'Main Menu', 'sos' ),
		'footer' => __( 'Footer Menu', 'sos' )
		// 'company' => __( 'Top Company Menu', 'sos' ),
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'flex-width'  => true,
	) );

	add_theme_support( 'woocommerce' );

}