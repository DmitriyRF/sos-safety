<?php

/**
 * Enqueue scripts and styles.
 */
function sos_scripts() {
	
	// Load style
	wp_enqueue_style( 'sos-bootstrap-style', get_theme_file_uri( '/assets/css/bootstrap.min.css' ));
	wp_enqueue_style( 'sos-font-awesome', get_theme_file_uri( '/assets/css/font-awesome.min.css' ) );
	wp_enqueue_style( 'customize', get_theme_file_uri( '/customize.css' ) );

	wp_enqueue_style( 'sos-style', get_stylesheet_uri() );
		
	// Load scripts

	wp_enqueue_script('jquery');
	wp_enqueue_script( 'sos-bootstrap-script',  get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ),null, false);
	if( is_page_template('page-templates/training-page.php') ){
		wp_enqueue_script( 'sos-parallax-script', get_theme_file_uri( '/assets/js/parallax.min.js' ), array( 'jquery' ),null, false);
		wp_enqueue_script( 'sos-scrollto-script', get_theme_file_uri( '/assets/js/scrollToId.min.js' ), array( 'jquery' ),null, false);
	}
	wp_enqueue_script( 'sos-theme-script', get_theme_file_uri( '/assets/js/scripts.js' ), array( 'sos-bootstrap-script' ),null, false);
	wp_enqueue_script('yith_wcas_frontend' );
}