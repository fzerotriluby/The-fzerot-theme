<?php
/**
 * 403 functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package 403
 */

if ( ! function_exists( 'fzerot_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function fzerot_setup() {

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
}
endif;
add_action( 'after_setup_theme', 'fzerot_setup' );

/**
 * Excerpt length
 */
function astrid_excerpt_length( $length ) {
  $excerpt = get_theme_mod('exc_length', '90');
  return absint($excerpt);
}
add_filter( 'excerpt_length', 'astrid_excerpt_length', 99 );

/**
 * Enqueue scripts and styles.
 */
function wpdocs_403_scripts() {
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );
    wp_enqueue_script( 'script-jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '', true );
    wp_enqueue_script( 'script-masonry', get_template_directory_uri() . '/js/masonry.min.js', array(), '', true );
    wp_enqueue_script( 'script-imagesloaded', get_template_directory_uri() . '/js/imagesloaded.min.js', array(), '', true );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_403_scripts' );


/**
 * Enqueue Bootstrap
 */
function fzerot_enqueue_bootstrap() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), true );
	wp_enqueue_script( 'script-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '', true );
}
add_action( 'wp_enqueue_scripts', 'fzerot_enqueue_bootstrap', 9 );