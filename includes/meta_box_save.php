<?php

function sos_meta_box_save( $post_id ) {
	
	if( !isset( $_POST['sos_slider_nonce_field'] ) || !wp_verify_nonce( $_POST['sos_slider_nonce_field'], 'sos_slider_nonce_action' ) ) return;  

    if( !current_user_can( 'edit_post' ) ) return;

    $slide_url = $_POST['slide_url'];
     
    update_post_meta( $post_id, 'slide_url', $slide_url );
}