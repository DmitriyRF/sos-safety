<?php
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

// Update Cart Count After AJAX
add_filter( 'woocommerce_add_to_cart_fragments', 'iconic_cart_count_fragments', 10, 1 );

function iconic_cart_count_fragments( $fragments ) {
    
    $fragments['span.header-cart-count'] = '<span class="header-cart-count">' . WC()->cart->get_cart_contents_count() . '</span>';
    
    return $fragments;
    
}

// Customize products page grid through add <div>
function woocommerce_get_product_thumbnail( 
						$size = 'shop_catalog', $deprecated1 = 0, $deprecated2 = 0 ) {
	global $product;

	$image_size = apply_filters( 'single_product_archive_thumbnail_size', $size );

	$image =  $product ? $product->get_image( $image_size ) : '';

	$image = '<div class="image-square-thumbnail">' . $image . '</div>';

	return $image;
}

// Change product search page title
function sos_woocommerce_page_title($page_title) {
	if((isset($_GET['sossafety']) && $_GET['sossafety'] == 1)) {
		$page_title = __(sprintf('Search results for: %s', $_GET['woof_text']), 'sos');
	}
	return $page_title;
}
add_filter( 'woocommerce_page_title', 'sos_woocommerce_page_title', 10, 1  );
