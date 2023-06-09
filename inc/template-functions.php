<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 */

/**
 * Adds custom class to the array of posts classes.
 *
 * @param array $classes An array of CSS classes.
 * @return array
 */
function dizadiz_theme_post_classes( $classes ) {
	$classes[] = 'entry';

	return $classes;
}
add_filter( 'post_class', 'dizadiz_theme_post_classes', 10, 3 );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function dizadiz_theme_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'dizadiz_theme_pingback_header' );

/**
 * Creates continue reading text.
 */
function dizadiz_theme_continue_reading_text() {
	$continue_reading = sprintf(
		/* translators: %s: Name of current post. */
		esc_html__( 'Continue reading %s', 'dizadiz' ),
		the_title( '<span class="screen-reader-text">', '</span>', false )
	);

	return $continue_reading;
}

/**
 * Creates the continue reading link for excerpt.
 */
function dizadiz_theme_continue_reading_link_excerpt() {
	if ( ! is_admin() ) {
		return '&hellip; <a class="more-link" href="' . esc_url( get_permalink() ) . '">' . dizadiz_theme_continue_reading_text() . '</a>';
	}
}
add_filter( 'excerpt_more', 'dizadiz_theme_continue_reading_link_excerpt' );

/**
 * Creates the continue reading link.
 */
function dizadiz_theme_continue_reading_link() {
	if ( ! is_admin() ) {
		return '<div class="more-link-container"><a class="more-link" href="' . esc_url( get_permalink() ) . '#more-' . esc_attr( get_the_ID() ) . '">' . dizadiz_theme_continue_reading_text() . '</a></div>';
	}
}
add_filter( 'the_content_more_link', 'dizadiz_theme_continue_reading_link' );
