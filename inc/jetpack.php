<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package Devons Theme - Node
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function devons_theme_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'devons_theme_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function devons_theme_jetpack_setup
add_action( 'after_setup_theme', 'devons_theme_jetpack_setup' );

function devons_theme_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function devons_theme_infinite_scroll_render