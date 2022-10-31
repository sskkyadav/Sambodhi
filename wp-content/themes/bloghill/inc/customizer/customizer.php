<?php
/**
 * Bloghill Customizer.
 *
 * @package Theme Palace
 * @subpackage Bloghill
 * @since Bloghill 1.0.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function bloghill_customize_register( $wp_customize ) {
	$options = bloghill_get_theme_options();

	// Load custom control functions.
	require get_template_directory() . '/inc/customizer/custom-controls.php';

	// Load customize active callback functions.
	require get_template_directory() . '/inc/customizer/active-callback.php';

	// Load partial callback functions.
	require get_template_directory() . '/inc/customizer/partial.php';

	// Load validation callback functions.
	require get_template_directory() . '/inc/customizer/validation.php';

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';


	// Remove the core header textcolor control, as it shares the main text color.
	$wp_customize->remove_control( 'header_textcolor' );

	// Header title color setting and control.
	$wp_customize->add_setting( 'bloghill_theme_options[header_title_color]', array(
		'default'           => $options['header_title_color'],
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'			=> 'postMessage'
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bloghill_theme_options[header_title_color]', array(
		'priority'			=> 5,
		'label'             => esc_html__( 'Header Title Color', 'bloghill' ),
		'section'           => 'colors',
	) ) );

	// Header tagline color setting and control.
	$wp_customize->add_setting( 'bloghill_theme_options[header_tagline_color]', array(
		'default'           => $options['header_tagline_color'],
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'			=> 'postMessage'
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bloghill_theme_options[header_tagline_color]', array(
		'priority'			=> 6,
		'label'             => esc_html__( 'Header Tagline Color', 'bloghill' ),
		'section'           => 'colors',
	) ) );

	// Site identity extra options.
	$wp_customize->add_setting( 'bloghill_theme_options[header_txt_logo_extra]', array(
		'default'           => $options['header_txt_logo_extra'],
		'sanitize_callback' => 'bloghill_sanitize_select',
		'transport'			=> 'refresh'
	) );

	$wp_customize->add_control( 'bloghill_theme_options[header_txt_logo_extra]', array(
		'priority'			=> 50,
		'type'				=> 'radio',
		'label'             => esc_html__( 'Site Identity Extra Options', 'bloghill' ),
		'section'           => 'title_tagline',
		'choices'				=> array( 
			'hide-all'     => esc_html__( 'Hide All', 'bloghill' ),
			'show-all'     => esc_html__( 'Show All', 'bloghill' ),
			'title-only'   => esc_html__( 'Title Only', 'bloghill' ),
			'tagline-only' => esc_html__( 'Tagline Only', 'bloghill' ),
			'logo-title'   => esc_html__( 'Logo + Title', 'bloghill' ),
			'logo-tagline' => esc_html__( 'Logo + Tagline', 'bloghill' ),
			)
	) );


	// Add panel for common theme options
	$wp_customize->add_panel( 'bloghill_theme_options_panel' , array(
	    'title'      => esc_html__( 'Theme Options','bloghill' ),
	    'description'=> esc_html__( 'Bloghill Theme Options.', 'bloghill' ),
	    'priority'   => 150,
	) );


	// breadcrumb
	require get_template_directory() . '/inc/customizer/theme-options/breadcrumb.php';

	// load layout
	require get_template_directory() . '/inc/customizer/theme-options/layout.php';

	// load menu
	require get_template_directory() . '/inc/customizer/theme-options/menu.php';

	// load static homepage option
	require get_template_directory() . '/inc/customizer/theme-options/homepage-static.php';

	// load archive option
	require get_template_directory() . '/inc/customizer/theme-options/archive.php';
	
	// load single post option
	require get_template_directory() . '/inc/customizer/theme-options/single-posts.php';

	// load pagination option
	require get_template_directory() . '/inc/customizer/theme-options/pagination.php';

	// load footer option
	require get_template_directory() . '/inc/customizer/theme-options/footer.php';

	// load reset option
	require get_template_directory() . '/inc/customizer/theme-options/reset.php';

	// Add panel for front page theme options.
	$wp_customize->add_panel( 'bloghill_front_page_panel' , array(
	    'title'      => esc_html__( 'Front Page','bloghill' ),
	    'description'=> esc_html__( 'Front Page Theme Options.', 'bloghill' ),
	    'priority'   => 140,
	) );

	// Add panel for front page theme options.
	$wp_customize->add_panel( 'bloghill_front_page_panel' , array(
	    'title'      => esc_html__( 'Front Page','bloghill' ),
	    'description'=> esc_html__( 'Front Page Theme Options.', 'bloghill' ),
	    'priority'   => 140,
	) );


	foreach ( explode( ',', $options['all_sortable'] ) as $list ) {
		require get_template_directory() . '/inc/customizer/sections/'.str_replace( '_', '-', $list).'.php';

		$wp_customize->add_setting( 'bloghill_theme_options['.$list.'_padding_top]', array(
			'sanitize_callback' => 'bloghill_sanitize_number_range',
			) );

		$wp_customize->add_control( 'bloghill_theme_options['.$list.'_padding_top]', array(
			'label'             => esc_html__( 'Padding Top', 'bloghill' ),
			'section'           => 'bloghill_'.$list.'_section',
			'type'				=> 'number',
			'active_callback' 	=> 'bloghill_is_'.$list.'_section_enable',
			'input_attrs'		=> array(
				'min'	=> 0,
				'max'	=> 99,
				'style' => 'width: 100px;'
				),
			) );

		$wp_customize->add_setting( 'bloghill_theme_options['.$list.'_padding_bottom]', array(
			'sanitize_callback' => 'bloghill_sanitize_number_range',
			) );

		$wp_customize->add_control( 'bloghill_theme_options['.$list.'_padding_bottom]', array(
			'label'             => esc_html__( 'Padding Bottom', 'bloghill' ),
			'section'           => 'bloghill_'.$list.'_section',
			'type'				=> 'number',
			'active_callback' 	=> 'bloghill_is_'.$list.'_section_enable',
			'input_attrs'		=> array(
				'min'	=> 0,
				'max'	=> 99,
				'style' => 'width: 100px;'
				),
			) );
		if ( !in_array( $list, array( 'hero_banner', 'project', 'cta', 'blog_post', 'slider', 'latest_product', 'promotion', 'featured_products', 'trending_products', 'counter', 'sponsor', 'about' ) ) ) {
			$wp_customize->add_setting( 'bloghill_theme_options['.$list.'_header_alignment_type]', array(
				'default' => 'center',
				'sanitize_callback' => 'bloghill_sanitize_select',
			) );

			$wp_customize->add_control( 'bloghill_theme_options['.$list.'_header_alignment_type]', array(
				'label'             => esc_html__( 'Section Header Alignment', 'bloghill' ),
				'section'           => 'bloghill_'.$list.'_section',
				'type'				=> 'select',
				'active_callback' 	=> 'bloghill_is_'.$list.'_section_enable',
				'choices'			=> array( 
					'right' 		=> esc_html__( 'Right', 'bloghill' ),
					'left' 			=> esc_html__( 'Left', 'bloghill' ),
					'center' 		=> esc_html__( 'Center', 'bloghill' ),
				),
			) );
		}
		

	}

}
add_action( 'customize_register', 'bloghill_customize_register' );

/*
 * Load customizer sanitization functions.
 */
require get_template_directory() . '/inc/customizer/sanitize.php';

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function bloghill_customize_preview_js() {
	wp_enqueue_script( 'bloghill-customizer', get_template_directory_uri() . '/assets/js/customizer' . bloghill_min() . '.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'bloghill_customize_preview_js' );

/**
 * Load dynamic logic for the customizer controls area.
 */
function bloghill_customize_control_js() {
	// fontawesome
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri() . '/assets/css/font-awesome' . bloghill_min() . '.css' );
	
	// Choose from select jquery.
	wp_enqueue_style( 'chosen-css', get_template_directory_uri() . '/assets/css/chosen' . bloghill_min() . '.css' );
	wp_enqueue_script( 'jquery-chosen', get_template_directory_uri() . '/assets/js/chosen.jquery' . bloghill_min() . '.js', array( 'jquery' ), '1.4.2', true );

	wp_enqueue_style( 'bloghill-customize-controls-css', get_template_directory_uri() . '/assets/css/customize-controls' . bloghill_min() . '.css' );
	wp_enqueue_script( 'bloghill-customize-controls', get_template_directory_uri() . '/assets/js/customize-controls.js', array(), '1.0', true );
	$bloghill_reset_data = array(
		'reset_message' => esc_html__( 'Refresh the customizer page after saving to view reset effects', 'bloghill' )
	);
	// Send list of color variables as object to custom customizer js
	wp_localize_script( 'bloghill-customize-controls', 'bloghill_reset_data', $bloghill_reset_data );
}
add_action( 'customize_controls_enqueue_scripts', 'bloghill_customize_control_js' );

if ( !function_exists( 'bloghill_reset_options' ) ) :
	/**
	 * Reset all options
	 *
	 * @since Bloghill 1.0.0
	 *
	 * @param bool $checked Whether the reset is checked.
	 * @return bool Whether the reset is checked.
	 */
	function bloghill_reset_options() {
		$options = bloghill_get_theme_options();
		if ( true === $options['reset_options'] ) {
			// Reset custom theme options.
			set_theme_mod( 'bloghill_theme_options', array() );
			// Reset custom header and backgrounds.
			remove_theme_mod( 'header_image' );
			remove_theme_mod( 'header_image_data' );
			remove_theme_mod( 'background_image' );
			remove_theme_mod( 'background_color' );
			remove_theme_mod( 'header_textcolor' );
	    }
	  	else {
		    return false;
	  	}
	}
endif;
add_action( 'customize_save_after', 'bloghill_reset_options' );
