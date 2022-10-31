<?php
/**
* Homepage (Static ) options
*
* @package Theme Palace
* @subpackage Bloghill
* @since Bloghill 1.0.0
*/

// Homepage (Static ) setting and control.
$wp_customize->add_setting( 'bloghill_theme_options[enable_frontpage_content]', array(
	'sanitize_callback'   => 'bloghill_sanitize_checkbox',
	'default'             => $options['enable_frontpage_content'],
) );

$wp_customize->add_control( 'bloghill_theme_options[enable_frontpage_content]', array(
	'label'       	=> esc_html__( 'Enable Content', 'bloghill' ),
	'description' 	=> esc_html__( 'Check to enable content on static front page only.', 'bloghill' ),
	'section'     	=> 'static_front_page',
	'type'        	=> 'checkbox',
	'active_callback' => 'bloghill_is_static_homepage_enable',
) );