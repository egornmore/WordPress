<?php


if ( ! function_exists( 'twentytwentytwo_support' ) ) :

	function twentytwentytwo_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

	}

endif;

add_action( 'after_setup_theme', 'twentytwentytwo_support' );



if ( ! function_exists( 'twentytwentytwo_styles' ) ) :

	function twentytwentytwo_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;

	}

endif;

add_action( 'wp_enqueue_scripts', 'twentytwentytwo_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';
