<?php

function sos_enqueue_admin(  $hook ) {

		// if ( 'edit.php' != $hook  || 'post.php' != $hook) {
		//      return;
		//  }
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'sos-admin-script', get_template_directory_uri() . '/assets/js/scripts_admin.js', array( 'jquery' ), null, false);
}