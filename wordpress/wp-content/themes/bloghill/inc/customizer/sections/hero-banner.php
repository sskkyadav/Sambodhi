<?php
/**
 * Hero Banner Section options
 *
 * @package Theme Palace
 * @subpackage Bloghill
 * @since Bloghill 1.0.0
 */

// Add Hero Banner section
$wp_customize->add_section( 'bloghill_hero_banner_section', array(
	'title'             => esc_html__( 'Hero Banner','bloghill' ),
	'description'       => esc_html__( 'Hero Banner Section options.', 'bloghill' ),
	'panel'             => 'bloghill_front_page_panel',

) );

// Hero Banner content enable control and setting
$wp_customize->add_setting( 'bloghill_theme_options[hero_banner_section_enable]', array(
	'default'			=> 	$options['hero_banner_section_enable'],
	'sanitize_callback' => 'bloghill_sanitize_switch_control',
) );

$wp_customize->add_control( new Bloghill_Switch_Control( $wp_customize, 'bloghill_theme_options[hero_banner_section_enable]', array(
	'label'             => esc_html__( 'Hero Banner Section Enable', 'bloghill' ),
	'section'           => 'bloghill_hero_banner_section',
	'on_off_label' 		=> bloghill_switch_options(),
) ) );

if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'bloghill_theme_options[hero_banner_section_enable]', array(
		'selector'      => '#bloghill_hero_banner_section .tooltiptext',
		'settings'      => 'bloghill_theme_options[hero_banner_section_enable]',
    ) );
}


$wp_customize->add_setting( 'bloghill_theme_options[hero_banner_sub_title]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['hero_banner_sub_title'],
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'bloghill_theme_options[hero_banner_sub_title]', array(
	'label'           	=> esc_html__( 'Sub Title', 'bloghill' ),
	'section'        	=> 'bloghill_hero_banner_section',
	'active_callback' 	=> 'bloghill_is_hero_banner_section_enable',
	'type'				=> 'text',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'bloghill_theme_options[hero_banner_sub_title]', array(
		'selector'            => '#bloghill_hero_banner_section .section-subtitle',
		'settings'            => 'bloghill_theme_options[hero_banner_sub_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'bloghill_hero_banner_section_sub_title_partial',
    ) );
}

// Hero Banner title setting and control
$wp_customize->add_setting( 'bloghill_theme_options[hero_banner_btn_text]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['hero_banner_btn_text'],
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'bloghill_theme_options[hero_banner_btn_text]', array(
	'label'           	=> esc_html__( 'Button Label', 'bloghill' ),
	'section'        	=> 'bloghill_hero_banner_section',
	'active_callback' 	=> 'bloghill_is_hero_banner_section_enable',
	'type'				=> 'text',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'bloghill_theme_options[hero_banner_btn_text]', array(
		'selector'            => '#bloghill_hero_banner_section .read-more .regular',
		'settings'            => 'bloghill_theme_options[hero_banner_btn_text]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'bloghill_hero_banner_section_btn_text_partial',
    ) );
}

$wp_customize->add_setting( 'bloghill_theme_options[hero_banner_alt_btn_text]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['hero_banner_alt_btn_text'],
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'bloghill_theme_options[hero_banner_alt_btn_text]', array(
	'label'           	=> esc_html__( 'Alt Button Label', 'bloghill' ),
	'section'        	=> 'bloghill_hero_banner_section',
	'active_callback' 	=> 'bloghill_is_hero_banner_section_enable',
	'type'				=> 'text',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'bloghill_theme_options[hero_banner_alt_btn_text]', array(
		'selector'            => '#bloghill_hero_banner_section .read-more .alt',
		'settings'            => 'bloghill_theme_options[hero_banner_alt_btn_text]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'bloghill_hero_banner_section_alt_btn_text_partial',
    ) );
}

$wp_customize->add_setting( 'bloghill_theme_options[hero_banner_alt_btn_url]', array(
		'sanitize_callback' => 'esc_url_raw',
	) );

	$wp_customize->add_control( 'bloghill_theme_options[hero_banner_alt_btn_url]', array(
		'label'           	=> esc_html__( 'Alt Btn Url', 'bloghill' ),
		'section'        	=> 'bloghill_hero_banner_section',
		'active_callback' 	=> 'bloghill_is_hero_banner_section_enable',
		'type'				=> 'url',
	) );

// long Excerpt length setting and control.
$wp_customize->add_setting( 'bloghill_theme_options[hero_banner_excerpt_length]', array(
	'sanitize_callback' => 'bloghill_sanitize_number_range',
	'validate_callback' => 'bloghill_validate_long_excerpt',
	'default'			=> $options['hero_banner_excerpt_length'],
	) );

$wp_customize->add_control( 'bloghill_theme_options[hero_banner_excerpt_length]', array(
	'label'       		=> esc_html__( 'Hero Banner Excerpt Length', 'bloghill' ),
	'description' 		=> esc_html__( 'Total description words to be displayed in hero banner posts.', 'bloghill' ),
	'section'     		=> 'bloghill_hero_banner_section',
	'active_callback' 	=> 'bloghill_is_hero_banner_section_enable',
	'type'        		=> 'number',
	'input_attrs' 		=> array(
		'style'       => 'width: 80px;',
		'max'         => 100,
		'min'         => 5,
		),
	) );

// Hero Banner pages drop down chooser control and setting
$wp_customize->add_setting( 'bloghill_theme_options[hero_banner_content_page]', array(
	'sanitize_callback' => 'bloghill_sanitize_page',
) );

$wp_customize->add_control( new Bloghill_Dropdown_Chooser( $wp_customize, 'bloghill_theme_options[hero_banner_content_page]', array(
	'label'             => esc_html__( 'Select Page', 'bloghill' ),
	'section'           => 'bloghill_hero_banner_section',
	'choices'			=> bloghill_page_choices(),
	'active_callback'	=> 'bloghill_is_hero_banner_section_enable',
) ) );
