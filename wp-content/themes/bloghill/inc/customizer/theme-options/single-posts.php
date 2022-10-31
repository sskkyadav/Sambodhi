<?php
/**
 * Excerpt options
 *
 * @package Theme Palace
 * @subpackage Bloghill
 * @since Bloghill 1.0.0
 */

// Add excerpt section
$wp_customize->add_section( 'bloghill_single_post_section', array(
	'title'             => esc_html__( 'Single Post','bloghill' ),
	'description'       => esc_html__( 'Options to change the single posts globally.', 'bloghill' ),
	'panel'             => 'bloghill_theme_options_panel',
) );

// Tourableve date meta setting and control.
$wp_customize->add_setting( 'bloghill_theme_options[single_post_hide_date]', array(
	'default'           => $options['single_post_hide_date'],
	'sanitize_callback' => 'bloghill_sanitize_switch_control',
) );

$wp_customize->add_control( new Bloghill_Switch_Control( $wp_customize, 'bloghill_theme_options[single_post_hide_date]', array(
	'label'             => esc_html__( 'Hide Date', 'bloghill' ),
	'section'           => 'bloghill_single_post_section',
	'on_off_label' 		=> bloghill_hide_options(),
) ) );

// Tourableve author meta setting and control.
$wp_customize->add_setting( 'bloghill_theme_options[single_post_hide_author]', array(
	'default'           => $options['single_post_hide_author'],
	'sanitize_callback' => 'bloghill_sanitize_switch_control',
) );

$wp_customize->add_control( new Bloghill_Switch_Control( $wp_customize, 'bloghill_theme_options[single_post_hide_author]', array(
	'label'             => esc_html__( 'Hide Author', 'bloghill' ),
	'section'           => 'bloghill_single_post_section',
	'on_off_label' 		=> bloghill_hide_options(),
) ) );

// Tourableve author category setting and control.
$wp_customize->add_setting( 'bloghill_theme_options[single_post_hide_category]', array(
	'default'           => $options['single_post_hide_category'],
	'sanitize_callback' => 'bloghill_sanitize_switch_control',
) );

$wp_customize->add_control( new Bloghill_Switch_Control( $wp_customize, 'bloghill_theme_options[single_post_hide_category]', array(
	'label'             => esc_html__( 'Hide Category', 'bloghill' ),
	'section'           => 'bloghill_single_post_section',
	'on_off_label' 		=> bloghill_hide_options(),
) ) );

// Tourableve tag category setting and control.
$wp_customize->add_setting( 'bloghill_theme_options[single_post_hide_tags]', array(
	'default'           => $options['single_post_hide_tags'],
	'sanitize_callback' => 'bloghill_sanitize_switch_control',
) );

$wp_customize->add_control( new Bloghill_Switch_Control( $wp_customize, 'bloghill_theme_options[single_post_hide_tags]', array(
	'label'             => esc_html__( 'Hide Tag', 'bloghill' ),
	'section'           => 'bloghill_single_post_section',
	'on_off_label' 		=> bloghill_hide_options(),
) ) );

// single post image setting and controll
$wp_customize->add_setting( 'bloghill_theme_options[single_post_hide_image]', array(
	'default'			=> $options['single_post_hide_image'],
	'sanitize_callback'	=> 'bloghill_sanitize_switch_control',
	) );

$wp_customize->add_control( new Bloghill_Switch_Control( $wp_customize, 'bloghill_theme_options[single_post_hide_image]', array(
	'label'		=> esc_html__( 'Hide Image', 'bloghill' ),
	'section'	=> 'bloghill_single_post_section',
	'on_off_label'	=> bloghill_hide_options(),
	) ) );

// single post description setting and control
$wp_customize->add_Setting( 'bloghill_theme_options[single_post_hide_description]', array(
	'default'		=> $options['single_post_hide_description'],
	'sanitize_callback' => 'bloghill_sanitize_switch_control',
	) );

$wp_customize->add_control( new Bloghill_Switch_Control( $wp_customize, 'bloghill_theme_options[single_post_hide_description]', array(
	'label'		=> esc_html__( 'Hide Description', 'bloghill' ),
	'section'	=> 'bloghill_single_post_section',
	'on_off_label'	=> bloghill_hide_options(),
	) ) );