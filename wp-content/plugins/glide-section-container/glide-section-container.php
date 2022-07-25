<?php
/**
 * Plugin Name:       Glide Section Container
 * Description:       Example block written with ESNext standard and JSX support – build step required.
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       glide-section-container
 *
 * @package           create-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */

if(!defined( 'WPINC' )){
	die;
}

// exit if accessed directly
if( ! defined( 'ABSPATH' ) ) exit;


// define plugin version number
if(!defined('GLIDE_PLUGIN_VERSION')){
	define('GLIDE_PLUGIN_VERSION','1.0.0');
}


function create_block_glide_section_container_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'create_block_glide_section_container_block_init' );
