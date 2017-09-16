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



// actions
add_action( 'after_setup_theme', 'sos_setup' );
add_action( 'widgets_init', 'sos_widgets_init' );
add_action( 'wp_enqueue_scripts', 'sos_scripts' );
add_action( 'init', 'sos_register_cpt' );
add_action( 'add_meta_boxes', 'sos_add_events_metaboxes' );
add_action( 'save_post', 'sos_meta_box_save' );

// filters
add_filter( 'nav_menu_link_attributes', 'sos_header_menu_add_class', 10, 3 );//Add page scroll for anchor tag- navigation

// require_once('wp-bootstrap-navwalker.php');


// include(get_template_directory() . '/includes/woocommerce_customization.php');


// Customize products page grid through add <div>
function woocommerce_get_product_thumbnail( 
						$size = 'shop_catalog', $deprecated1 = 0, $deprecated2 = 0 ) {
	global $product;

	$image_size = apply_filters( 'single_product_archive_thumbnail_size', $size );

	$image =  $product ? $product->get_image( $image_size ) : '';

	$image = '<div class="image-square-thumbnail">' . $image . '</div>';

	return $image;
}

//Wrapping the every product in div.item
add_action( 'woocommerce_before_shop_loop_item', 
		'woocommerce_template_add_div_before_product_loop_create', 5 );
function woocommerce_template_add_div_before_product_loop_create(){	echo '<div class="item">';}
add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_add_div_before_add_to_cart_button', 5 );
function woocommerce_template_add_div_before_add_to_cart_button(){ echo '<div class="button-cart-wrapper">'; }

add_action( 'woocommerce_after_shop_loop_item', 
		'woocommerce_template_add_div_after_product_loop_create', 15 );
function woocommerce_template_add_div_after_product_loop_create(){	echo '</div></div>';}

// Remove Sidebar on all the Single Product Pages
add_action( 'wp', 'sos_remove_sidebar_product_pages' );
function sos_remove_sidebar_product_pages() {
	if (is_product()) {
		remove_action('woocommerce_sidebar','woocommerce_get_sidebar',10);
	}
}


// add_action( 'woocommerce_single_product_summary', 'woocommerce_template_modify_single_price', 5 );
// add_action( 'woocommerce_single_product_summary', 'woocommerce_template_close_single_price_tag', 15 );
// function woocommerce_template_modify_single_price(){
// 		echo '<div class="price-wrapper" ><span class="label-price">Price: </span>';
// 	}
// function woocommerce_template_close_single_price_tag(){
// 		echo '</div>';
// 	}

// Update Cart Count After AJAX
add_filter( 'woocommerce_add_to_cart_fragments', 'iconic_cart_count_fragments', 10, 1 );

function iconic_cart_count_fragments( $fragments ) {
    
    $fragments['span.header-cart-count'] = '<span class="header-cart-count">' . WC()->cart->get_cart_contents_count() . '</span>';
    
    return $fragments;
    
}

