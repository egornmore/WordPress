<?php


if ( ! function_exists( 'nmore_support' ) ) :

	function nnmore_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style('style.css');

	}

endif;

add_action( 'after_setup_theme', 'nmore_support' );


// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';
