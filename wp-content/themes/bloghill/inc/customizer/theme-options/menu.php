<?php
/**
 * Menu options
 *
 * @package Theme Palace
 * @subpackage Bloghill
 * @since Bloghill 1.0.0
 */

// Add sidebar section
$wp_customize->add_section( 'bloghill_menu', array(
	'title'             => esc_html__('Header Menu','bloghill'),
	'description'       => esc_html__( 'Header Menu options.', 'bloghill' ),
	'panel'             => 'nav_menus',
) );

// Menu Search setting and control.
$wp_customize->add_setting( 'bloghill_theme_options[menu_search]', array(
	'sanitize_callback' => 'bloghill_sanitize_switch_control',
	'default'           => $options['menu_search'],
) );

$wp_customize->add_control( new Bloghill_Switch_Control( $wp_customize, 'bloghill_theme_options[menu_search]', array(
	'label'             => esc_html__( 'Menu Search Enable', 'bloghill' ),
	'section'           => 'bloghill_menu',
	'on_off_label' 		=> bloghill_switch_options(),
) ) );

// Social Menu setting and control.
$wp_customize->add_setting( 'bloghill_theme_options[social_menu]', array(
	'sanitize_callback' => 'bloghill_sanitize_switch_control',
	'default'           => $options['social_menu'],
) );

$wp_customize->add_control( new Bloghill_Switch_Control( $wp_customize, 'bloghill_theme_options[social_menu]', array(
	'label'             => esc_html__( 'Social Menu Enable', 'bloghill' ),
	'section'           => 'bloghill_menu',
	'on_off_label' 		=> bloghill_switch_options(),
) ) );