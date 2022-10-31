<?php
/**
 * Custom header implementation
 *
 * @link https://codex.wordpress.org/Custom_Headers
 *
 * @package Adventure Travelling
 * @subpackage adventure_travelling
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses adventure_travelling_header_style()
 */
function adventure_travelling_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'adventure_travelling_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1600,
		'height'                 => 400,
		'wp-head-callback'       => 'adventure_travelling_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'adventure_travelling_custom_header_setup' );

if ( ! function_exists( 'adventure_travelling_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see adventure_travelling_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'adventure_travelling_header_style' );
function adventure_travelling_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$custom_css = "
        .headerbox{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
		}";
	   	wp_add_inline_style( 'adventure-travelling-style', $custom_css );
	endif;
}
endif;