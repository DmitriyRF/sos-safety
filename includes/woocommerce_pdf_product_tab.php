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
        if ( count( $pdf_url ) > 0 && is_array($pdf_url)) {
            foreach( $pdf_url as $pdf_url_each ) {
                if ( isset( $pdf_url_each) && $pdf_url_each != '') {
                    $file_name = array_pop( explode('/', $pdf_url_each ) );
                    if( $file_name != '' ){ 
                        echo '<a class="pdf-catalog" href="'.$pdf_url_each.'" target="_blank">'. $file_name .'</a><br/>';
                    }else{
                        echo '<a class="pdf-catalog" href="'.$pdf_url_each.'" target="_blank">'.__('View catalog pdf', 'sos').'</a><br/>';
                    }
                }       
            }
        }else{
            $file_name = array_pop( explode('/', $pdf_url ) );
            
            if( $file_name != '' ){ 
                echo '<a class="pdf-catalog" href="'.$pdf_url.'" target="_blank">'. $file_name .'</a><br/>';
            }else{
                echo '<a class="pdf-catalog" href="'.$pdf_url.'" target="_blank">'.__('View catalog pdf', 'sos').'</a><br/>';
            }
            
        }
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
	?>
    <table class="form-table-pdf">
    <?php
    $c = 0;
    wp_nonce_field( 'sos_pdf_nonce_action', 'sos_pdf_nonce_field' );
    if ( count( $pdf_url ) > 0 && is_array($pdf_url)) {
        foreach( $pdf_url as $pdf_url_each ) {
            if ( isset( $pdf_url_each)  && $pdf_url_each != '') {
                ?>
                <tr>
                    <th scope="row">
                        <label for="pdf_url_<?php echo $c; ?>">
                            <?php _e('PDF URL:', 'sos'); ?>    
                        </label>
                    </th>
                    <td>
                        <input type="text" class="regular-text pdf_url" value="<?php echo $pdf_url_each; ?>" id="pdf_url_<?php echo $c; ?>" name="pdf_url[<?php echo  $c; ?>]">
                        <input type="button" class="pdf_uploads" value="Upload">
                        <a href="#" class="remove-package"><?php echo "Remove"; ?></a>
                    </td>
                </tr>   
                <?php
                $c++;
            }
        }
    }else{//this the else for the old version of database structure
        ?>
                <tr>
                    <th scope="row">
                        <label for="pdf_url_<?php echo $c; ?>">
                            <?php _e('PDF URL:', 'sos'); ?>    
                        </label>
                    </th>
                    <td>
                        <input type="text" class="regular-text pdf_url" value="<?php echo $pdf_url; ?>" id="pdf_url_<?php echo $c; ?>" name="pdf_url[<?php echo  $c; ?>]">
                        <input type="button" class="pdf_uploads" value="Upload">
                        <a href="#" class="remove-package"><?php echo "Remove"; ?></a>
                    </td>
                </tr>
    <?php 
    $c++;  
    }
    ?>
                <tr>
                    <th scope="row">
                        <label for="pdf_url_<?php echo $c; ?>">
                            <?php _e('PDF URL:', 'sos'); ?>    
                        </label>
                    </th>
                    <td>
                        <input type="text" class="regular-text pdf_url" value="" id="pdf_url_<?php echo $c; ?>" name="pdf_url[<?php echo  $c; ?>]">
                        <input type="button" class="pdf_uploads" value="Upload">
                        <a href="#" class="remove-package"><?php echo "Remove"; ?></a>
                    </td>
                </tr>  		
	</table>
    <a href="#" id="add_pdf"><?php _e('Add PDF Details'); ?></a>
	<script>
    jQuery(document.body).on('click','.remove-package',function(event) {
                event.preventDefault();
                jQuery(this).parent().parent().remove();
            });
    var count = <?php echo $c; ?>;
    jQuery("#add_pdf").click(function(event) {
        event.preventDefault();
        count = count + 1;
        jQuery('.form-table-pdf').append('<tr><th scope="row"><label for="pdf_url_'+count+'"><?php _e("PDF URL:", "sos"); ?></label></th><td><input type="text" class="regular-text pdf_url" value="" id="pdf_url_'+count+'" name="pdf_url['+count+']"><input type="button" class="pdf_uploads" value="Upload"><a href="#" class="remove-package"><?php echo "Remove"; ?></a></td></tr>');
        return false;
    });
	
     jQuery(document.body).on('click','.pdf_uploads',function(event) {
        var sos_gallery_frame;
        var $el = jQuery( this );
        var $pdf_url = $el.prev('.pdf_url');
        event.preventDefault();

        // If the media frame already exists, reopen it.
        if ( sos_gallery_frame ) {
            sos_gallery_frame.open();
            return;
        }

        // Create the media frame.
        sos_gallery_frame = wp.media.frames.sos_gallery = wp.media({
            // Set the title of the modal.
            title: $el.data( 'choose pdf' ),
            button: {
                text: $el.data( 'update' )
            },
            states: [
                new wp.media.controller.Library({
                    title: $el.data( 'choose' ),
                    filterable: 'all',
                    multiple: false
                })
            ]
        });

        // When an image is selected, run a callback.
        sos_gallery_frame.on( 'select', function(event) {
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
