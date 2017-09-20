<?php
/*
 * Register Related Products tab
 */
function sos_related_product_tab( $tabs ) {
   
    $custom_tab = array( 
		'catalog_pdf' =>  array( 
			'title' => __('Catalog','sos'), 
			'priority' => 12, 
			'callback' => 'sos_catalog_tab_content_show_pdf_link_frontend' 
		)
	);
    return array_merge( $custom_tab, $tabs );
}
add_filter( 'woocommerce_product_tabs', 'sos_related_product_tab' );
/*
 * Place content in tab (related products in this sample)
 */
function sos_catalog_tab_content_show_pdf_link_frontend() {
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
