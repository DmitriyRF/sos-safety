<?php
/**
 * Content wrappers
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/wrapper-start.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$template = get_option( 'template' );

if($template == 'sos'){

	if( is_product() ){
		echo '<div id="primary" role="main" class="col-xs-12">';
	}else{
		echo '<div id="primary" role="main" class="col-xs-12 col-sm-8 col-sm-push-4 col-md-9 col-md-push-3">';
	}
}else{
	echo '<div id="container"><div id="content" role="main">';
}