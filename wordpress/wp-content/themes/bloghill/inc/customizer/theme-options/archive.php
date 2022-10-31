<?php
/**
 * Archive options
 *
 * @package Theme Palace
 * @subpackage Bloghill
 * @since Bloghill 1.0.0
 */

// Add archive section
$wp_customize->add_section( 'bloghill_archive_section', array(
	'title'             => esc_html__( 'Blog/Archive','bloghill' ),
	'description'       => esc_html__( 'Archive section options.', 'bloghill' ),
	'panel'             => 'bloghill_theme_options_panel',
) );

// Archive post title setting and controll
$wp_customize->add_setting( 'bloghill_theme_options[hide_title]', array(
	'default'			=> $options['hide_title'],
	'sanitize_callback' => 'bloghill_sanitize_switch_control',
	) );

$wp_customize->add_control( new Bloghill_Switch_Control( $wp_customize, 'bloghill_theme_options[hide_title]',
	array(
		'label'			=> esc_html__( 'Hide Title', 'bloghill' ),
		'section'		=> 'bloghill_archive_section',
		'on_off_label'	=> bloghill_hide_options(),
		)
 ) );

 // Archive image setting and control.
$wp_customize->add_setting( 'bloghill_theme_options[hide_image]', array(
	'default'				=> $options['hide_image'],
	'sanitize_callback'		=>'bloghill_sanitize_switch_control',
	) );

$wp_customize->add_control( new Bloghill_Switch_Control( $wp_customize, 'bloghill_theme_options[hide_image]', array(
		'label'			=> esc_html__( 'Hide Image', 'bloghill' ),
		'section'		=> 'bloghill_archive_section',
		'on_off_label'	=> bloghill_hide_options(),
	) ) );

// Your latest posts title setting and control.
$wp_customize->add_setting( 'bloghill_theme_options[your_latest_posts_title]', array(
	'default'           => $options['your_latest_posts_title'],
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( 'bloghill_theme_options[your_latest_posts_title]', array(
	'label'             => esc_html__( 'Your Latest Posts Title', 'bloghill' ),
	'description'       => esc_html__( 'This option only works if Static Front Page is set to "Your latest posts."', 'bloghill' ),
	'section'           => 'bloghill_archive_section',
	'type'				=> 'text',
	'active_callback'   => 'bloghill_is_latest_posts'
) );



// Archive category setting and control.
$wp_customize->add_setting( 'bloghill_theme_options[hide_category]', array(
	'default'           => $options['hide_category'],
	'sanitize_callback' => 'bloghill_sanitize_switch_control',
) );

$wp_customize->add_control( new Bloghill_Switch_Control( $wp_customize, 'bloghill_theme_options[hide_category]', array(
	'label'             => esc_html__( 'Hide Category', 'bloghill' ),
	'section'           => 'bloghill_archive_section',
	'on_off_label' 		=> bloghill_hide_options(),
) ) );



// Archive post description setting and controll
$wp_customize->add_setting( 'bloghill_theme_options[hide_author]', array(
	'default'			=> $options['hide_author'],
	'sanitize_callback' => 'bloghill_sanitize_switch_control',
	) );

$wp_customize->add_control( new Bloghill_Switch_Control( $wp_customize, 'bloghill_theme_options[hide_author]',
	array(
		'label'			=> esc_html__( 'Hide Author', 'bloghill' ),
		'section'		=> 'bloghill_archive_section',
		'on_off_label'	=> bloghill_hide_options(),
		)
 ) );