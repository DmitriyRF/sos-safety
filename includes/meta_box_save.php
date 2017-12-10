<?php

function sos_meta_box_save( $post_id ) {
	
	if( !isset( $_POST['sos_slider_nonce_field'] ) || ! wp_verify_nonce( $_POST['sos_slider_nonce_field'], 'sos_slider_nonce_action' ) ) return;  

    if( !current_user_can( 'edit_post' ) ) return;

    $slide_url = $_POST['slide_url'];
     
    update_post_meta( $post_id, 'slide_url', $slide_url );
}

function sos_meta_lp_save( $post_id ) {   

	// verify nonce
	if ( ! isset( $_POST['sos_meta_box_nonce'] ) ) { //||  ! wp_verify_nonce( $_POST['sos_meta_box_nonce'], 'my-nonce' )
		return $post_id; 
	}
	// check autosave
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return $post_id;
	}
	// check permissions
	if ( 'page' === $_POST['post_type'] ) {
		if ( !current_user_can( 'edit_page', $post_id ) ) {
			return $post_id;
		} elseif ( !current_user_can( 'edit_post', $post_id ) ) {
			return $post_id;
		}  
	}
	$old = get_post_meta( $post_id, 'section', true );
	$new = $_POST['section'];

	if ( $new && $new !== $old ) {
		update_post_meta( $post_id, 'section', $new );
	} elseif ( '' === $new && $old ) {
		delete_post_meta( $post_id, 'section', $old );
	}
}