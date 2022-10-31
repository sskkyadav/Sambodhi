<?php
/**
 * Breadcrumb options
 *
 * @package Theme Palace
 * @subpackage Bloghill
 * @since Bloghill 1.0.0
 */

$wp_customize->add_section( 'bloghill_breadcrumb', array(
	'title'             => esc_html__( 'Breadcrumb','bloghill' ),
	'description'       => esc_html__( 'Breadcrumb section options.', 'bloghill' ),
	'panel'             => 'bloghill_theme_options_panel',
) );

// Breadcrumb enable setting and control.
$wp_customize->add_setting( 'bloghill_theme_options[breadcrumb_enable]', array(
	'sanitize_callback' => 'bloghill_sanitize_switch_control',
	'default'          	=> $options['breadcrumb_enable'],
) );

$wp_customize->add_control( new Bloghill_Switch_Control( $wp_customize, 'bloghill_theme_options[breadcrumb_enable]', array(
	'label'            	=> esc_html__( 'Enable Breadcrumb', 'bloghill' ),
	'section'          	=> 'bloghill_breadcrumb',
	'on_off_label' 		=> bloghill_switch_options(),
) ) );

// Breadcrumb separator setting and control.
$wp_customize->add_setting( 'bloghill_theme_options[breadcrumb_separator]', array(
	'sanitize_callback'	=> 'sanitize_text_field',
	'default'          	=> $options['breadcrumb_separator'],
) );

$wp_customize->add_control( 'bloghill_theme_options[breadcrumb_separator]', array(
	'label'            	=> esc_html__( 'Separator', 'bloghill' ),
	'active_callback' 	=> 'bloghill_is_breadcrumb_enable',
	'section'          	=> 'bloghill_breadcrumb',
) );
