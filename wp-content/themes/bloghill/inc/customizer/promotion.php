<?php
/**
 * About Section options
 *
 * @package Theme Palace
 * @subpackage Bloghill
 * @since Bloghill 1.0.0
 */

// Add About section
$wp_customize->add_section( 'bloghill_promotion_section', array(
	'title'             => esc_html__( 'Promotion','bloghill' ),
	'description'       => esc_html__( 'Promotion Section options.', 'bloghill' ),
	'panel'             => 'bloghill_front_page_panel',
	'active_callback'   => function( $control ) {
        return (
            bloghill_is_default_layout( $control )
            ||
            bloghill_is_third_layout( $control )
            ||
            bloghill_is_fourth_layout( $control )
        );
    },
) );

// About content enable control and setting
$wp_customize->add_setting( 'bloghill_theme_options[promotion_section_enable]', array(
	'default'			=> 	$options['promotion_section_enable'],
	'sanitize_callback' => 'bloghill_sanitize_switch_control',
) );

$wp_customize->add_control( new Bloghill_Switch_Control( $wp_customize, 'bloghill_theme_options[promotion_section_enable]', array(
	'label'             => esc_html__( 'Promotion Section Enable', 'bloghill' ),
	'section'           => 'bloghill_promotion_section',
	'on_off_label' 		=> bloghill_switch_options(),
) ) );



// about title setting and control
$wp_customize->add_setting( 'bloghill_theme_options[promotion_btn_text]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['promotion_btn_text'],
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'bloghill_theme_options[promotion_btn_text]', array(
	'label'           	=> esc_html__( 'Button Label', 'bloghill' ),
	'section'        	=> 'bloghill_promotion_section',
	'active_callback' 	=> 'bloghill_is_promotion_section_enable',
	'type'				=> 'text',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'bloghill_theme_options[promotion_btn_text]', array(
		'selector'            => '#bloghill_promotion_section .view-more a',
		'settings'            => 'bloghill_theme_options[promotion_btn_text]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'bloghill_promotion_btn_text_partial',
    ) );
}

// long Excerpt length setting and control.
$wp_customize->add_setting( 'bloghill_theme_options[promotion_excerpt_length]', array(
	'sanitize_callback' => 'bloghill_sanitize_number_range',
	'validate_callback' => 'bloghill_validate_long_excerpt',
	'default'			=> $options['promotion_excerpt_length'],
	) );

$wp_customize->add_control( 'bloghill_theme_options[promotion_excerpt_length]', array(
	'label'       		=> esc_html__( 'promotion Excerpt Length', 'bloghill' ),
	'description' 		=> esc_html__( 'Total description words to be displayed in about posts.', 'bloghill' ),
	'section'     		=> 'bloghill_promotion_section',
	'active_callback' 	=> 'bloghill_is_promotion_section_enable',
	'type'        		=> 'number',
	'input_attrs' 		=> array(
		'style'       => 'width: 80px;',
		'max'         => 100,
		'min'         => 5,
		),
	) );

// About content type control and setting
$wp_customize->add_setting( 'bloghill_theme_options[promotion_content_type]', array(
	'default'          	=> $options['promotion_content_type'],
	'sanitize_callback' => 'bloghill_sanitize_select',
) );

$wp_customize->add_control( 'bloghill_theme_options[promotion_content_type]', array(
	'label'             => esc_html__( 'Content Type', 'bloghill' ),
	'section'           => 'bloghill_promotion_section',
	'type'				=> 'select',
	'active_callback' 	=> 'bloghill_is_promotion_section_enable',
	'choices'			=> array( 
		'page' 		=> esc_html__( 'Page', 'bloghill' ),
		'post' 		=> esc_html__( 'Post', 'bloghill' ),
	),
) );

// about pages drop down chooser control and setting
$wp_customize->add_setting( 'bloghill_theme_options[promotion_content_page]', array(
	'sanitize_callback' => 'bloghill_sanitize_page',
) );

$wp_customize->add_control( new Bloghill_Dropdown_Chooser( $wp_customize, 'bloghill_theme_options[promotion_content_page]', array(
	'label'             => esc_html__( 'Select Page', 'bloghill' ),
	'section'           => 'bloghill_promotion_section',
	'choices'			=> bloghill_page_choices(),
	'active_callback'	=> 'bloghill_is_promotion_section_content_page_enable',
) ) );

// about posts drop down chooser control and setting
$wp_customize->add_setting( 'bloghill_theme_options[promotion_content_post]', array(
	'sanitize_callback' => 'bloghill_sanitize_page',
) );

$wp_customize->add_control( new Bloghill_Dropdown_Chooser( $wp_customize, 'bloghill_theme_options[promotion_content_post]', array(
	'label'             => esc_html__( 'Select Post', 'bloghill' ),
	'section'           => 'bloghill_promotion_section',
	'choices'			=> bloghill_post_choices(),
	'active_callback'	=> 'bloghill_is_promotion_section_content_post_enable',
) ) );