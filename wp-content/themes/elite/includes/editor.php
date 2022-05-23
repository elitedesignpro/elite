<?php
/**
 * Functions for editor styles
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package BaseTheme Package
 * @since 1.0.0
 *
 */

 /**
 * Add support for editor styles
 */

function glide_editor_css_support() {
	add_theme_support( 'editor-styles' ); // if you don't add this line, your stylesheet won't be added
}

add_action( 'after_setup_theme', 'glide_editor_css_support' );


/**
 * Add CSS to Gutenberg Editor and the Blocks
 */

function glide_custom_editor_css() {
	wp_enqueue_style(
		'editor-styles-css',
		get_stylesheet_directory_uri() . '/assets/css/admin/glide-editor-styles.css',
		array( 'wp-edit-blocks' ),
		time()
	);
}

add_action( 'enqueue_block_editor_assets', 'glide_custom_editor_css' );
