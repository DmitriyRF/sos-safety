<?php
/**
 * Property Pinnacle functions
 */

include(get_template_directory() . '/includes/theme_support.php');
include(get_template_directory() . '/includes/widgets_init.php');
include(get_template_directory() . '/includes/front_enqueue.php');
include(get_template_directory() . '/includes/custom_post_type.php');
include(get_template_directory() . '/includes/meta_box_save.php');
include(get_template_directory() . '/includes/header_menu_add_class.php');

include(get_template_directory() . '/includes/woocommerce_products_delivery_time_filed.php');
include(get_template_directory() . '/includes/woocommerce_pdf_product_tab.php');
include(get_template_directory() . '/includes/woocommerce_products_pages_customization.php');

require_once(get_template_directory() . '/includes/bootstrap-pagination.php');


// actions
add_action( 'after_setup_theme', 'sos_setup' );
add_action( 'widgets_init', 'sos_widgets_init' );
add_action( 'wp_enqueue_scripts', 'sos_scripts' );
add_action( 'init', 'sos_register_cpt' );
add_action( 'add_meta_boxes', 'sos_add_events_metaboxes' );
add_action( 'save_post', 'sos_meta_box_save' );

// filters
add_filter( 'nav_menu_link_attributes', 'sos_header_menu_add_class', 10, 3 );//Add page scroll for anchor tag- navigation

