<?php


function sos_header_menu_add_class( $atts, $item, $args ) {
	if( $args->theme_location=='top') {
		$class = 'page-scroll';
		$atts['class'] = $class;
	}
    return $atts;
}