<?php
/**
 * Project Section options
 *
 * @package Theme Palace
 * @subpackage Bloghill
 * @since Bloghill 1.0.0
 */

// Add Project section
$wp_customize->add_section( 'bloghill_project_section', array(
	'title'             => esc_html__( 'Project','bloghill' ),
	'description'       => esc_html__( 'Project Section options.', 'bloghill' ),
	'panel'             => 'bloghill_front_page_panel',

) );

// Project content enable control and setting
$wp_customize->add_setting( 'bloghill_theme_options[project_section_enable]', array(
	'default'			=> 	$options['project_section_enable'],
	'sanitize_callback' => 'bloghill_sanitize_switch_control',
) );

$wp_customize->add_control( new Bloghill_Switch_Control( $wp_customize, 'bloghill_theme_options[project_section_enable]', array(
	'label'             => esc_html__( 'Project Section Enable', 'bloghill' ),
	'section'           => 'bloghill_project_section',
	'on_off_label' 		=> bloghill_switch_options(),
) ) );

if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'bloghill_theme_options[project_section_enable]', array(
		'selector'      => '#bloghill_project_section .tooltiptext',
		'settings'      => 'bloghill_theme_options[project_section_enable]',
    ) );
}

$wp_customize->add_setting( 'bloghill_theme_options[project_cat_title]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['project_cat_title'],
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'bloghill_theme_options[project_cat_title]', array(
	'label'           	=> esc_html__( 'Tab Title', 'bloghill' ),
	'section'        	=> 'bloghill_project_section',
	'active_callback' 	=> 'bloghill_is_project_section_enable',
	'type'				=> 'text',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'bloghill_theme_options[project_cat_title]', array(
		'selector'            => '#bloghill_project_section .section-header-content .section-header h2.section-title',
		'settings'            => 'bloghill_theme_options[project_cat_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'bloghill_project_section_cat_title_partial',
    ) );
}

// stories title setting and control
$wp_customize->add_setting( 'bloghill_theme_options[project_title]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['project_title'],
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'bloghill_theme_options[project_title]', array(
	'label'           	=> esc_html__( 'Title', 'bloghill' ),
	'section'        	=> 'bloghill_project_section',
	'active_callback' 	=> 'bloghill_is_project_section_enable',
	'type'				=> 'text',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'bloghill_theme_options[project_title]', array(
		'selector'            => '#bloghill_project_section .section-content .section-header h2.section-title',
		'settings'            => 'bloghill_theme_options[project_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'bloghill_project_section_title_partial',
    ) );
}

$wp_customize->add_setting( 'bloghill_theme_options[project_about_title]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['project_about_title'],
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'bloghill_theme_options[project_about_title]', array(
	'label'           	=> esc_html__( 'About Us Title', 'bloghill' ),
	'section'        	=> 'bloghill_project_section',
	'active_callback' 	=> 'bloghill_is_project_section_enable',
	'type'				=> 'text',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'bloghill_theme_options[project_about_title]', array(
		'selector'            => '#bloghill_project_section .about-wrapper h2.section-title',
		'settings'            => 'bloghill_theme_options[project_about_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'bloghill_project_section_about_title_partial',
    ) );
}

$wp_customize->add_setting( 'bloghill_theme_options[project_about_content]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['project_about_content'],
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'bloghill_theme_options[project_about_content]', array(
	'label'           	=> esc_html__( 'About Us Content', 'bloghill' ),
	'section'        	=> 'bloghill_project_section',
	'active_callback' 	=> 'bloghill_is_project_section_enable',
	'type'				=> 'textarea',
) );

if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'bloghill_theme_options[project_about_content]', array(
		'selector'            => '#bloghill_project_section .about-wrapper .entry-content p',
		'settings'            => 'bloghill_theme_options[project_about_content]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'bloghill_project_section_about_content_partial',
    ) );
}


// Add dropdown category setting and control.
$wp_customize->add_setting(  'bloghill_theme_options[project_content_category]', array(
	'sanitize_callback' => 'bloghill_sanitize_integers',
) ) ;

$wp_customize->add_control( new Bloghill_Dropdown_Category_Control( $wp_customize,'bloghill_theme_options[project_content_category]', array(
	'label'             => esc_html__( 'Select Multiple Category', 'bloghill' ),
	'description'		=> esc_html__( 'Press ctrl to select multiple category', 'bloghill' ),
	'section'           => 'bloghill_project_section',
	'type'              => 'dropdown-categories',
	'active_callback'	=> 'bloghill_is_project_section_enable'
) ) );