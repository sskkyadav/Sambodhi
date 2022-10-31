<?php
/**
 * Layout options
 *
 * @package Theme Palace
 * @subpackage Bloghill
 * @since Bloghill 1.0.0
 */

// Add sidebar section
$wp_customize->add_section( 'bloghill_layout', array(
	'title'               => esc_html__('Layout','bloghill'),
	'description'         => esc_html__( 'Layout section options.', 'bloghill' ),
	'panel'               => 'bloghill_theme_options_panel',
) );

// Site layout setting and control.
$wp_customize->add_setting( 'bloghill_theme_options[site_layout]', array(
	'sanitize_callback'   => 'bloghill_sanitize_select',
	'default'             => $options['site_layout'],
) );

$wp_customize->add_control(  new Bloghill_Custom_Radio_Image_Control ( $wp_customize, 'bloghill_theme_options[site_layout]', array(
	'label'               => esc_html__( 'Site Layout', 'bloghill' ),
	'section'             => 'bloghill_layout',
	'choices'			  => bloghill_site_layout(),
) ) );

// Sidebar position setting and control.
$wp_customize->add_setting( 'bloghill_theme_options[sidebar_position]', array(
	'sanitize_callback'   => 'bloghill_sanitize_select',
	'default'             => $options['sidebar_position'],
) );

$wp_customize->add_control(  new Bloghill_Custom_Radio_Image_Control ( $wp_customize, 'bloghill_theme_options[sidebar_position]', array(
	'label'               => esc_html__( 'Global Sidebar Position', 'bloghill' ),
	'section'             => 'bloghill_layout',
	'choices'			  => bloghill_global_sidebar_position(),
) ) );

// Post sidebar position setting and control.
$wp_customize->add_setting( 'bloghill_theme_options[post_sidebar_position]', array(
	'sanitize_callback'   => 'bloghill_sanitize_select',
	'default'             => $options['post_sidebar_position'],
) );

$wp_customize->add_control(  new Bloghill_Custom_Radio_Image_Control ( $wp_customize, 'bloghill_theme_options[post_sidebar_position]', array(
	'label'               => esc_html__( 'Posts Sidebar Position', 'bloghill' ),
	'section'             => 'bloghill_layout',
	'choices'			  => bloghill_sidebar_position(),
) ) );

// Post sidebar position setting and control.
$wp_customize->add_setting( 'bloghill_theme_options[page_sidebar_position]', array(
	'sanitize_callback'   => 'bloghill_sanitize_select',
	'default'             => $options['page_sidebar_position'],
) );

$wp_customize->add_control( new Bloghill_Custom_Radio_Image_Control( $wp_customize, 'bloghill_theme_options[page_sidebar_position]', array(
	'label'               => esc_html__( 'Pages Sidebar Position', 'bloghill' ),
	'section'             => 'bloghill_layout',
	'choices'			  => bloghill_sidebar_position(),
) ) );