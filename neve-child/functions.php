<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( ! function_exists( 'neve_child_load_css' ) ):
	/**
	 * Load CSS file.
	 */
	function neve_child_load_css() {
		wp_enqueue_style( 'neve-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'neve-child-style', get_stylesheet_uri() );
	}
endif;
add_action( 'wp_enqueue_scripts', 'neve_child_load_css', 20 );
?>