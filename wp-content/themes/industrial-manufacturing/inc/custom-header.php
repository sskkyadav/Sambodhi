<?php
/**
 * @package Industrial Manufacturing
 * @subpackage industrial-manufacturing
 * Setup the WordPress core custom header feature.
 *
 * @uses industrial_manufacturing_header_style()
*/

function industrial_manufacturing_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'industrial_manufacturing_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1400,
		'height'                 => 125,
		'wp-head-callback'       => 'industrial_manufacturing_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'industrial_manufacturing_custom_header_setup' );

if ( ! function_exists( 'industrial_manufacturing_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see industrial_manufacturing_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'industrial_manufacturing_header_style' );
function industrial_manufacturing_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$industrial_manufacturing_custom_css = "
        #header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: left top;
		}";
	   	wp_add_inline_style( 'industrial-manufacturing-basic-style', $industrial_manufacturing_custom_css );
	endif;
}
endif; //industrial_manufacturing_header_style