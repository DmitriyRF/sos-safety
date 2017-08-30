<?php
/**
 * Property Pinnacle functions
 */

function sos_setup() {
	
	load_theme_textdomain( 'sos' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'top'    => __( 'Main Menu', 'sos' ),
		'footer' => __( 'Footer Menu', 'sos' ),
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 300,
		'height'      => 200,
		'flex-width'  => true,
	) );

}
add_action( 'after_setup_theme', 'sos_setup' );

function sos_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'sos' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'sos' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Shop Sidebar', 'sos' ),
		'id'            => 'shop-sidebar',
		'description'   => __( 'Add widgets here to appear in your sidebar on shop page.', 'sos' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	for($i=1; $i<=4; $i++) {
		register_sidebar( array(
			'name'          => sprintf(__( 'Footer %d', 'sos' ), $i),
			'id'            => 'footer-'.$i,
			'description'   => sprintf(__( 'Add widgets here to appear in your footer column %d.', 'sos' ), $i),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
	}
}
add_action( 'widgets_init', 'sos_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function sos_scripts() {
	
	// Load style
	wp_enqueue_style( 'sos-bootstrap-style', get_theme_file_uri( '/assets/css/bootstrap.min.css' ));
	wp_enqueue_style( 'sos-font-awesome', get_theme_file_uri( '/assets/css/font-awesome.min.css' ) );
	wp_enqueue_style( 'sos-style', get_stylesheet_uri() );
		
	// Load scripts
	wp_enqueue_script( 'sos-bootstrap-script', get_theme_file_uri( '/assets/js/bootstrap.min.js' ), array( 'jquery' ) );
	wp_enqueue_script( 'sos-theme-script', get_theme_file_uri( '/assets/js/scripts.js' ), array( 'sos-bootstrap-script' ) );
	wp_enqueue_script('yith_wcas_frontend' );

}
add_action( 'wp_enqueue_scripts', 'sos_scripts' );

// Slider Functions
function sos_register_cpt() {
	// Slide post type
    $args = array(
		'public' 		=> true,
		'label'  		=> 'Slides',
		'supports'	=> array( 'title', 'thumbnail', 'excerpt', 'page-attributes' )
    );
    register_post_type( 'slide', $args );
    
    $args = array(
		'public' 		=> true,
		'label'  		=> 'Client Logo',
		'supports'	=> array( 'title', 'thumbnail', 'excerpt', 'page-attributes' )
    );
    register_post_type( 'client-logo', $args );
    
}
add_action( 'init', 'sos_register_cpt' );

function sos_add_events_metaboxes() {
	add_meta_box('sos_slider_url', 'Redirect Info', 'sos_slider_html', 'slide', 'normal', 'default');
	add_meta_box('sos_slider_url', 'Redirect Info', 'sos_slider_html', 'client-logo', 'normal', 'default');
}
add_action( 'add_meta_boxes', 'sos_add_events_metaboxes' );

function sos_slider_html() {
	global $post;
		
	$slide_url = get_post_meta($post->ID, 'slide_url', true);
	
	// Echo out the field
	wp_nonce_field( 'sos_slider_nonce_action', 'sos_slider_nonce_field' );
	
	echo '<table class="form-table">
			<tbody><tr>
			<th scope="row"><label for="slide_url">'.__('URL:', 'sos').'</label></th>
			<td><input type="text" class="regular-text" value="' . $slide_url  . '" id="slide_url" name="slide_url"></td>
			</tr>
			<tbody>
		</table>';

}

function sos_meta_box_save( $post_id ) {
	
	if( !isset( $_POST['sos_slider_nonce_field'] ) || !wp_verify_nonce( $_POST['sos_slider_nonce_field'], 'sos_slider_nonce_action' ) ) return;  

    if( !current_user_can( 'edit_post' ) ) return;

    $slide_url = $_POST['slide_url'];
     
    update_post_meta( $post_id, 'slide_url', $slide_url );
}
add_action( 'save_post', 'sos_meta_box_save' );


//Add page scroll for anchor tag- navigation
add_filter( 'nav_menu_link_attributes', 'sos_header_menu_add_class', 10, 3 );
function sos_header_menu_add_class( $atts, $item, $args ) {
	if( $args->theme_location=='top') {
		$class = 'page-scroll';
		$atts['class'] = $class;
	}
    return $atts;
}

require_once('wp-bootstrap-navwalker.php');

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
	remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
}

function sos_remove_wc_breadcrumbs() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}
add_action( 'init', 'sos_remove_wc_breadcrumbs' );

function sos_excerpt_more($more) {
    global $post;
	return ' [...] <a class="moretag" href="'. get_permalink($post->ID) . '">'.__('Read More', 'sos').'</a>';
}
add_filter('excerpt_more', 'sos_excerpt_more');

function sos_init_woo_hooks() {
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
	add_action( 'woocommerce_before_single_product_summary', 'woocommerce_sos_single_title', 9 );

	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
	add_action( 'woocommerce_before_single_product_summary', 'woocommerce_template_single_excerpt', 9 );

	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
	add_action( 'woocommerce_single_product_summary', 'woocommerce_output_product_data_tabs', 20 );
	
	//add_action( 'woocommerce_single_product_summary', 'sos_show_pdf_link_frontend', 25 );
	
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
	
	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
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

