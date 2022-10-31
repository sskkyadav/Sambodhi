<?php
/**
 * pagination options
 *
 * @package Theme Palace
 * @subpackage Bloghill
 * @since Bloghill 1.0.0
 */

// Add sidebar section
$wp_customize->add_section( 'bloghill_pagination', array(
	'title'               => esc_html__('Pagination','bloghill'),
	'description'         => esc_html__( 'Pagination section options.', 'bloghill' ),
	'panel'               => 'bloghill_theme_options_panel',
) );

// Sidebar position setting and control.
$wp_customize->add_setting( 'bloghill_theme_options[pagination_enable]', array(
	'sanitize_callback' => 'bloghill_sanitize_switch_control',
	'default'             => $options['pagination_enable'],
) );

$wp_customize->add_control( new Bloghill_Switch_Control( $wp_customize, 'bloghill_theme_options[pagination_enable]', array(
	'label'               => esc_html__( 'Pagination Enable', 'bloghill' ),
	'section'             => 'bloghill_pagination',
	'on_off_label' 		=> bloghill_switch_options(),
) ) );

// Site layout setting and control.
$wp_customize->add_setting( 'bloghill_theme_options[pagination_type]', array(
	'sanitize_callback'   => 'bloghill_sanitize_select',
	'default'             => $options['pagination_type'],
) );

$wp_customize->add_control( 'bloghill_theme_options[pagination_type]', array(
	'label'               => esc_html__( 'Pagination Type', 'bloghill' ),
	'section'             => 'bloghill_pagination',
	'type'                => 'select',
	'choices'			  => bloghill_pagination_options(),
	'active_callback'	  => 'bloghill_is_pagination_enable',
) );
