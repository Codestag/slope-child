<?php
/**
 * Slope Child Theme
 *
 * Place any custom functionality/code snippets here.
 *
 * @since Slope Child 1.0.1
 */

/**
 * Include child theme styles.
 *
 * @return void
 */
function slope_child_styles() {
	$theme = wp_get_theme();
	wp_enqueue_style( 'slope-style', get_template_directory_uri() . '/style.css', array(), $theme->parent()->get( 'Version' ) );
	wp_enqueue_style( 'slope-child-style', get_stylesheet_uri(), array( 'slope-style' ), $theme->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'slope_child_styles' );
