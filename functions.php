<?php
/**
 * Inland Toner Child functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package inland-toner-child
 */

if ( ! function_exists( 'wonkasoft_child_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function wonkasoft_child_setup() {

	}
endif;
add_action( 'after_setup_theme', 'wonkasoft_child_setup' );

/**
 * Enqueues styles and scripts
 */
function custom_enqueues_for_child() {
	 wp_dequeue_style( 'wonkasoft-starter-style' );
	 wp_deregister_style( 'wonkasoft-starter-style' );
	 wp_register_style( 'wonkasoft-starter-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
	 wp_enqueue_style( 'wonkasoft-starter-style' );
	 wp_register_style( 'inland-toner-child-style', get_stylesheet_directory_uri() . '/style.css', array( 'wonkasoft-starter-style' ), wp_get_theme()->get( 'Version' ) );
	 wp_enqueue_style( 'inland-toner-child-style' );

	 wp_enqueue_script( 'inland-toner-child-js', get_stylesheet_directory_uri() . '/assets/js/inland-toner-child-style.min.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );

}
add_action( 'wp_enqueue_scripts', 'custom_enqueues_for_child', 99 );
