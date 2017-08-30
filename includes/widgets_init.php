<?php

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