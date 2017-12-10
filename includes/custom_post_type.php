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

	//Meta box for training page template only
	global $post;
	    if(!empty($post))
	    {
	        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);

	        if($pageTemplate == 'page-templates/training-page.php' )
	        {
	            add_meta_box(
	            		'sos_lp_training', // $id
	            		'Page options', // $title
	            		'display_sos_admin_options', // $callback
	            		'page',// type of WP_Screen
	            		'normal', // $context
	            		'high'// $priority
	            );
	        }
	    }
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

function display_sos_admin_options(){

		global $post;  
		$meta_section = get_post_meta( $post->ID, 'section', true ); ?>
		
		<input type="hidden" name="sos_meta_box_nonce" value="<?php echo wp_create_nonce( 'my-nonce' ); ?>">

		<p>
			<label for="section-text">Input Text</label>
			<br>
			<input type="text" name="section[text]" id="section-text" class="regular-text" value="<?php echo isset($meta_section['text'])?$meta_section['text']:''; ?>">
		</p>

		<p>
			<label for="section-textarea">Textarea</label>
			<br>
			<textarea name="section[textarea]" id="section-textarea" rows="5" cols="30" style="min-width:500px;"><?php echo isset($meta_section['textarea']) ? $meta_section['textarea']: '' ; ?></textarea>
		</p>

		<p>
			<label for="section-image">Image Upload</label><br>
			<input type="text" name="section[image]" id="section-image" class="meta-image regular-text" value="<?php echo isset($meta_section['image']) ? $meta_section['image']: ''; ?>">
			<input type="button" class="button image-upload" value="Browse">
		</p>

		<div class="image-preview"><img src="<?php echo isset($meta_section['image']) ? $meta_section['image'] : ''; ?>" style="max-width: 250px;"></div>

<?php
}