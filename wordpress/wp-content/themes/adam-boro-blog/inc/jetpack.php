<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package Adam_Boro_Blog
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function adam_boro_blog_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'adam_boro_blog_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function adam_boro_blog_jetpack_setup
add_action( 'after_setup_theme', 'adam_boro_blog_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function adam_boro_blog_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function adam_boro_blog_infinite_scroll_render
