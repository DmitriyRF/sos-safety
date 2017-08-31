<?php


function sos_before_main_content() {
	echo '<div class="wrap"><div class="container">';
}
add_action( 'woocommerce_before_main_content', 'sos_before_main_content', 9);

function sos_after_main_content() {
	echo '</div></div>';
}
add_action( 'woocommerce_after_main_content', 'sos_after_main_content', 11);

add_action( 'init', 'sos_remove_sidebar' );
function sos_remove_sidebar() {
	// remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
}

function sos_remove_wc_breadcrumbs() {
    // remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}
add_action( 'init', 'sos_remove_wc_breadcrumbs' );

function sos_excerpt_more($more) {
    global $post;
	return ' [...] <a class="moretag" href="'. get_permalink($post->ID) . '">'.__('Read More', 'sos').'</a>';
}
add_filter('excerpt_more', 'sos_excerpt_more');


function sos_init_woo_hooks() {
	// remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
	add_action( 'woocommerce_before_single_product_summary', 'woocommerce_sos_single_title', 9 );

	// remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
	add_action( 'woocommerce_before_single_product_summary', 'woocommerce_template_single_excerpt', 9 );

	// remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
	add_action( 'woocommerce_single_product_summary', 'woocommerce_output_product_data_tabs', 20 );
	
	//add_action( 'woocommerce_single_product_summary', 'sos_show_pdf_link_frontend', 25 );
	
	// remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
	
	// remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
	//add_action( 'woocommerce_after_single_product_summary', 'sos_output_related_categories', 20 );
	
}
add_action( 'wp_head', 'sos_init_woo_hooks', 11);

function woocommerce_sos_single_title() {
	?>
	<header class="page-header">
        <h1 class="page-title product_title"><?php the_title(); ?></h1>
    </header>
	<?php
}

function sos_output_related_categories() {
	global $post;
	$term =  get_the_terms( $post->ID, 'product_cat' );
	$html = '';
	foreach ($term as $t) {
		$parent_id = $t->parent;
		if($parent_id > 0) {
			$term_children = get_term_children( $parent_id, 'product_cat' );
			foreach ( $term_children as $child ) {
				$term = get_term_by( 'id', $child, 'product_cat' );
				$thumb_id = get_woocommerce_term_meta( $term->term_id, 'thumbnail_id', true );
				$term_img = wp_get_attachment_url(  $thumb_id );
				$html .= '<li class="product"><a href="' . get_term_link( $child, 'product_cat' ) . '"><img src="'.$term_img.'"/><h2>' . $term->name . '</h2></a><a class="button" href="' . get_term_link( $child, 'product_cat' ) . '">'.__('Read More', 'sos').'</a></li>';
			}
		}
	}

	echo '<div class="rel-cats"><h2>'.__('Related Categories', 'sos').'</h2><ul class="products child-cats">'.$html.'</ul></div>';
}

add_filter( 'woocommerce_product_tabs', 'sos_woo_remove_reviews_tab', 98 );
    function sos_woo_remove_reviews_tab($tabs) {
    unset($tabs['reviews']);
    return $tabs;
}

/*
 * Register Related Products tab
 */
function sos_related_product_tab( $tabs ) {
   
    $custom_tab = array( 
		'related_products' =>  array( 
			'title' => __('Related Products','sos'), 
			'priority' => 11, 
			'callback' => 'sos_related_product_tab_content' 
		),
		'catalog_pdf' =>  array( 
			'title' => __('Catalog','sos'), 
			'priority' => 12, 
			'callback' => 'sos_catalog_pdf_tab_content' 
		)
	);
    return array_merge( $custom_tab, $tabs );
}
/*
 * Place content in tab (related products in this sample)
 */
function sos_related_product_tab_content() {
	woocommerce_related_products();
}

function sos_catalog_pdf_tab_content() {
	sos_show_pdf_link_frontend();
}

add_filter( 'woocommerce_product_tabs', 'sos_related_product_tab' );

function sos_show_pdf_link_frontend() {
	$pdf_url = get_post_meta(get_the_ID(), 'pdf_url', true);
	if(!empty($pdf_url)) {
		echo '<a class="pdf-catalog" href="'.$pdf_url.'" target="_blank">'.__('View catalog pdf', 'sos').'</a>'; 
	}
}

function sos_add_pdf_upload_metabox() {
	add_meta_box('sos_pdf_uploads', 'Upload PDF', 'sos_pdf_uploads_html', 'product', 'normal', 'default');
}
add_action( 'add_meta_boxes', 'sos_add_pdf_upload_metabox' );

function sos_pdf_uploads_html() {
	global $post;
		
	$pdf_url = get_post_meta($post->ID, 'pdf_url', true);
	
	// Echo out the field
	wp_nonce_field( 'sos_pdf_nonce_action', 'sos_pdf_nonce_field' );
	?>
	<table class="form-table">
		<tbody>
		<tr>
			<th scope="row"><label for="pdf_url"><?php _e('PDF URL:', 'sos'); ?></label></th>
			<td><input type="text" class="regular-text" value="<?php echo $pdf_url; ?>" id="pdf_url" name="pdf_url"><input type="button" id="pdf_uploads" value="Upload"></td>
		</tr>
		<tbody>
	</table>
	<script>
	var sos_gallery_frame;
    var $pdf_url = jQuery( '#pdf_url' );

    jQuery( '#pdf_uploads' ).on( 'click', function( event ) {
        var $el = jQuery( this );

        event.preventDefault();

        // If the media frame already exists, reopen it.
        if ( sos_gallery_frame ) {
            sos_gallery_frame.open();
            return;
        }

        // Create the media frame.
        sos_gallery_frame = wp.media.frames.sos_gallery = wp.media({
            // Set the title of the modal.
            title: $el.data( 'choose' ),
            button: {
                text: $el.data( 'update' )
            },
            states: [
                new wp.media.controller.Library({
                    title: $el.data( 'choose' ),
                    filterable: 'all',
                    multiple: true
                })
            ]
        });

        // When an image is selected, run a callback.
        sos_gallery_frame.on( 'select', function() {
            var selection = sos_gallery_frame.state().get( 'selection' );
             selection.map( function( attachment ) {
                attachment = attachment.toJSON();
				$pdf_url.val( attachment.url );
            });
            
        });

        // Finally, open the modal.
        sos_gallery_frame.open();
    });
	</script>
	<?php 
	

}

function sos_pdf_meta_box_save( $post_id ) {
	
	if( !isset( $_POST['sos_pdf_nonce_field'] ) || !wp_verify_nonce( $_POST['sos_pdf_nonce_field'], 'sos_pdf_nonce_action' ) ) return;  

    if( !current_user_can( 'edit_post' ) ) return;

    $pdf_url = $_POST['pdf_url'];
     
    update_post_meta( $post_id, 'pdf_url', $pdf_url );
}
add_action( 'save_post', 'sos_pdf_meta_box_save' );

function sos_archive_custom_cart_button_text() {
	return __( 'Product Details', 'SOS' );
}
add_filter( 'woocommerce_product_add_to_cart_text', 'sos_archive_custom_cart_button_text' );    // 2.1 +

function sos_excerpt_in_product_archives() {
	$excerpt = get_the_excerpt();   
	if( trim($excerpt) !='' ) { 
        echo '<p>'.substr($excerpt, 0, 24);
        if(strlen($excerpt)>24) {
        	echo '...';
        }
        echo '</p>';
    } 
}
add_action( 'woocommerce_after_shop_loop_item_title', 'sos_excerpt_in_product_archives', 40 );