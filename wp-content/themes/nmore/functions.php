<?php

if ( ! function_exists( 'nmore_styles' ) ) :

	function nmore_styles() {

		// Register stylesheet
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;

		wp_register_style(
			'nmore-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		wp_enqueue_style('nmore-style');
	}

endif;

add_action( 'wp_enqueue_scripts', 'nmore_styles' );



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
