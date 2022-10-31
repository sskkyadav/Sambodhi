<?php
/**
 * Testimonial Section options
 *
 * @package Theme Palace
 * @subpackage Bloghill
 * @since Bloghill 1.0.0
 */

// Add Testimonial section
$wp_customize->add_section( 'bloghill_testimonial_section', array(
	'title'             => esc_html__( 'Testimonial','bloghill' ),
	'description'       => esc_html__( 'Testimonial Section options.', 'bloghill' ),
	'panel'             => 'bloghill_front_page_panel',
) );

// Testimonial content enable control and setting
$wp_customize->add_setting( 'bloghill_theme_options[testimonial_section_enable]', array(
	'default'			=> 	$options['testimonial_section_enable'],
	'sanitize_callback' => 'bloghill_sanitize_switch_control',
) );

$wp_customize->add_control( new Bloghill_Switch_Control( $wp_customize, 'bloghill_theme_options[testimonial_section_enable]', array(
	'label'             => esc_html__( 'Testimonial Section Enable', 'bloghill' ),
	'section'           => 'bloghill_testimonial_section',
	'on_off_label' 		=> bloghill_switch_options(),
) ) );

if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'bloghill_theme_options[testimonial_section_enable]', array(
		'selector'      => '#bloghill_testimonial_section .tooltiptext',
		'settings'      => 'bloghill_theme_options[testimonial_section_enable]',
    ) );
}

$wp_customize->add_setting( 'bloghill_theme_options[testimonial_sub_title]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['testimonial_sub_title'],
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'bloghill_theme_options[testimonial_sub_title]', array(
	'label'           	=> esc_html__( 'Sub Title', 'bloghill' ),
	'section'        	=> 'bloghill_testimonial_section',
	'active_callback' 	=> 'bloghill_is_testimonial_section_enable',
	'type'				=> 'text',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'bloghill_theme_options[testimonial_sub_title]', array(
		'selector'            => '#bloghill_testimonial_section .section-header p',
		'settings'            => 'bloghill_theme_options[testimonial_sub_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'bloghill_testimonial_sub_title_partial',
    ) );
}

$wp_customize->add_setting( 'bloghill_theme_options[testimonial_title]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['testimonial_title'],
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'bloghill_theme_options[testimonial_title]', array(
	'label'           	=> esc_html__( 'Title', 'bloghill' ),
	'section'        	=> 'bloghill_testimonial_section',
	'active_callback' 	=> 'bloghill_is_testimonial_section_enable',
	'type'				=> 'text',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'bloghill_theme_options[testimonial_title]', array(
		'selector'            => '#bloghill_testimonial_section .section-header h2',
		'settings'            => 'bloghill_theme_options[testimonial_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'bloghill_testimonial_title_partial',
    ) );
}


// long Excerpt length setting and control.
$wp_customize->add_setting( 'bloghill_theme_options[testimonial_excerpt_length]', array(
	'sanitize_callback' => 'bloghill_sanitize_number_range',
	'validate_callback' => 'bloghill_validate_long_excerpt',
	'default'			=> $options['testimonial_excerpt_length'],
	) );

$wp_customize->add_control( 'bloghill_theme_options[testimonial_excerpt_length]', array(
	'label'       		=> esc_html__( 'Testimonial Excerpt Length', 'bloghill' ),
	'description' 		=> esc_html__( 'Total description words to be displayed in testimonial posts.', 'bloghill' ),
	'section'     		=> 'bloghill_testimonial_section',
	'active_callback' 	=> 'bloghill_is_testimonial_section_enable',
	'type'        		=> 'number',
	'input_attrs' 		=> array(
		'style'       => 'width: 80px;',
		'max'         => 100,
		'min'         => 5,
		),
	) );


for ( $i = 1; $i <= 3; $i++ ) :
	// testimonial pages drop down chooser control and setting
	$wp_customize->add_setting( 'bloghill_theme_options[testimonial_content_page_' . $i . ']', array(
		'sanitize_callback' => 'bloghill_sanitize_page',
	) );

	$wp_customize->add_control( new Bloghill_Dropdown_Chooser( $wp_customize, 'bloghill_theme_options[testimonial_content_page_' . $i . ']', array(
		'label'             => sprintf( esc_html__( 'Select Page %d', 'bloghill' ), $i ),
		'section'           => 'bloghill_testimonial_section',
		'choices'			=> bloghill_page_choices(),
		'active_callback'	=> 'bloghill_is_testimonial_section_enable',
	) ) );

	// testimonial position setting and control
	$wp_customize->add_setting( 'bloghill_theme_options[testimonial_position_' . $i . ']', array(
		'sanitize_callback' => 'sanitize_text_field',
	) );

	$wp_customize->add_control( 'bloghill_theme_options[testimonial_position_' . $i . ']', array(
		'label'           	=> sprintf( esc_html__( 'position %d', 'bloghill' ), $i ),
		'section'        	=> 'bloghill_testimonial_section',
		'active_callback' 	=> 'bloghill_is_testimonial_section_enable',
		'type'				=> 'text',
	) );

	// testimonial hr setting and control
	$wp_customize->add_setting( 'bloghill_theme_options[testimonial_hr_'. $i .']', array(
		'sanitize_callback' => 'sanitize_text_field'
	) );

	$wp_customize->add_control( new Bloghill_Customize_Horizontal_Line( $wp_customize, 'bloghill_theme_options[testimonial_hr_'. $i .']',
		array(
			'section'         => 'bloghill_testimonial_section',
			'active_callback' => 'bloghill_is_testimonial_section_enable',
			'type'			  => 'hr'
	) ) );
	
endfor;