<?php

/**
 * Add menu support
 */
if (function_exists('add_theme_support')) {
	add_theme_support( 'menus' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
}

/**
 * Add Gutenberg support
 */
function simple_theme_setup(){
	// Enqueuing the editor style
	add_theme_support( 'editor-styles' );
	add_editor_style( 'editor.css' );
}
add_action('after_setup_theme', 'simple_theme_setup');

/**
 * Register Scripts and Style
 */
function theme_register_scripts() {
	wp_enqueue_style( 'simple-css', get_stylesheet_uri() );
	wp_enqueue_script( 'simple-js', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'theme_register_scripts', 1 );

/**
 * Debug function
 */
function dd( $arr ) {
	echo '<pre>';
	print_r( $arr );
	echo '</pre>';
}