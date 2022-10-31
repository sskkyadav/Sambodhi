<?php
/**
 * About Section options
 *
 * @package Theme Palace
 * @subpackage Bloghill
 * @since Bloghill 1.0.0
 */

// Add About section
$wp_customize->add_section( 'bloghill_cta_section', array(
	'title'             => esc_html__( 'Cta','bloghill' ),
	'description'       => esc_html__( 'Cta Section options.', 'bloghill' ),
	'panel'             => 'bloghill_front_page_panel',

) );

// About content enable control and setting
$wp_customize->add_setting( 'bloghill_theme_options[cta_section_enable]', array(
	'default'			=> 	$options['cta_section_enable'],
	'sanitize_callback' => 'bloghill_sanitize_switch_control',
) );

$wp_customize->add_control( new Bloghill_Switch_Control( $wp_customize, 'bloghill_theme_options[cta_section_enable]', array(
	'label'             => esc_html__( 'Cta Section Enable', 'bloghill' ),
	'section'           => 'bloghill_cta_section',
	'on_off_label' 		=> bloghill_switch_options(),
) ) );

if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'bloghill_theme_options[cta_section_enable]', array(
		'selector'      => '#bloghill_cta_section .tooltiptext',
		'settings'      => 'bloghill_theme_options[cta_section_enable]',
    ) );
}


$wp_customize->add_setting( 'bloghill_theme_options[cta_sub_title]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['cta_sub_title'],
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'bloghill_theme_options[cta_sub_title]', array(
	'label'           	=> esc_html__( 'Secttion Sub Title', 'bloghill' ),
	'section'        	=> 'bloghill_cta_section',
	'active_callback' 	=> 'bloghill_is_cta_section_enable',
	'type'				=> 'text',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'bloghill_theme_options[cta_sub_title]', array(
		'selector'            => '#bloghill_cta_section .section-header p',
		'settings'            => 'bloghill_theme_options[cta_sub_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'bloghill_cta_section_sub_title_partial',
    ) );
}

// about title setting and control
$wp_customize->add_setting( 'bloghill_theme_options[cta_btn_text]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['cta_btn_text'],
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'bloghill_theme_options[cta_btn_text]', array(
	'label'           	=> esc_html__( 'Button Label', 'bloghill' ),
	'section'        	=> 'bloghill_cta_section',
	'active_callback' 	=> 'bloghill_is_cta_section_enable',
	'type'				=> 'text',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'bloghill_theme_options[cta_btn_text]', array(
		'selector'            => '#bloghill_cta_section .read-more a',
		'settings'            => 'bloghill_theme_options[cta_btn_text]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'bloghill_cta_section_btn_text_partial',
    ) );
}

// long Excerpt length setting and control.
$wp_customize->add_setting( 'bloghill_theme_options[cta_excerpt_length]', array(
	'sanitize_callback' => 'bloghill_sanitize_number_range',
	'validate_callback' => 'bloghill_validate_long_excerpt',
	'default'			=> $options['cta_excerpt_length'],
	) );

$wp_customize->add_control( 'bloghill_theme_options[cta_excerpt_length]', array(
	'label'       		=> esc_html__( 'Cta Excerpt Length', 'bloghill' ),
	'description' 		=> esc_html__( 'Total description words to be displayed in about posts.', 'bloghill' ),
	'section'     		=> 'bloghill_cta_section',
	'active_callback' 	=> 'bloghill_is_cta_section_enable',
	'type'        		=> 'number',
	'input_attrs' 		=> array(
		'style'       => 'width: 80px;',
		'max'         => 100,
		'min'         => 5,
		),
	) );


// about pages drop down chooser control and setting
$wp_customize->add_setting( 'bloghill_theme_options[cta_content_page]', array(
	'sanitize_callback' => 'bloghill_sanitize_page',
) );

$wp_customize->add_control( new Bloghill_Dropdown_Chooser( $wp_customize, 'bloghill_theme_options[cta_content_page]', array(
	'label'             => esc_html__( 'Select Page', 'bloghill' ),
	'section'           => 'bloghill_cta_section',
	'choices'			=> bloghill_page_choices(),
	'active_callback'	=> 'bloghill_is_cta_section_enable',
) ) );
