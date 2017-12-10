<?php

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


function sos_add_events_metaboxes() {
	
	add_meta_box('sos_slider_url', 'Redirect Info', 'sos_slider_html', 'slide', 'normal', 'default');
	add_meta_box('sos_slider_url', 'Redirect Info', 'sos_slider_html', 'client-logo', 'normal', 'default');
}



function sos_slider_html() {
	global $post;
		
	$slide_url = get_post_meta($post->ID, 'slide_url', true);
	$yvideo_id = get_post_meta($post->ID, 'yvideo_id', true);
	
	// Echo out the field
	wp_nonce_field( 'sos_slider_nonce_action', 'sos_slider_nonce_field' );
	
	echo '<table class="form-table">
			<tbody><tr>
			<th scope="row"><label for="slide_url">'.__('URL:', 'sos').'</label></th>
			<td><input type="text" class="regular-text" value="' . $slide_url  . '" id="slide_url" name="slide_url"></td>
			</tr>
			<tr>
			<th scope="row"><label for="slide_url">'.__('Youtube video ID:', 'sos').'</label></th>
			<td><input type="text" class="regular-text" value="' . $yvideo_id  . '" id="yvideo_id" name="yvideo_id"></td>
			</tr>
			<tbody>
		</table>';

}