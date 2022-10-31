<?php
/**
* Blog Post Section options
*
* @package Theme Palace
* @subpackage Bloghill
* @since Bloghill 1.0.0
*/

// Add Blog Post section
$wp_customize->add_section( 'bloghill_blog_post_section', array(
	'title'             => esc_html__( 'Blog Post','bloghill' ),
	'description'       => esc_html__( 'Blog Post Section options.', 'bloghill' ),
	'panel'             => 'bloghill_front_page_panel',

	) );

// Blog Post content enable control and setting
$wp_customize->add_setting( 'bloghill_theme_options[blog_post_section_enable]', array(
	'default'			=> 	$options['blog_post_section_enable'],
	'sanitize_callback' => 'bloghill_sanitize_switch_control',
	) );

$wp_customize->add_control( new Bloghill_Switch_Control( $wp_customize, 'bloghill_theme_options[blog_post_section_enable]', array(
	'label'             => esc_html__( 'Blog Post Section Enable', 'bloghill' ),
	'section'           => 'bloghill_blog_post_section',
	'on_off_label' 		=> bloghill_switch_options(),
	) ) );

if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'bloghill_theme_options[blog_post_section_enable]', array(
		'selector'      => '#bloghill_blog_post_section .tooltiptext',
		'settings'      => 'bloghill_theme_options[blog_post_section_enable]',
    ) );
}

// Popular Posts btn label setting and control
$wp_customize->add_setting( 'bloghill_theme_options[blog_post_title]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['blog_post_title'],
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'bloghill_theme_options[blog_post_title]', array(
	'label'           	=> esc_html__( 'Section Sub Title', 'bloghill' ),
	'section'        	=> 'bloghill_blog_post_section',
	'active_callback' 	=> 'bloghill_is_blog_post_section_enable',
	'type'				=> 'text',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'bloghill_theme_options[blog_post_title]', array(
		'selector'            => '#bloghill_blog_post_section h2.section-title',
		'settings'            => 'bloghill_theme_options[blog_post_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'bloghill_blog_post_title_partial',
    ) );
}

$wp_customize->add_setting( 'bloghill_theme_options[blog_post_btn_title]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> $options['blog_post_btn_title'],
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'bloghill_theme_options[blog_post_btn_title]', array(
	'label'           	=> esc_html__( 'Button Label', 'bloghill' ),
	'section'        	=> 'bloghill_blog_post_section',
	'active_callback' 	=> 'bloghill_is_blog_post_section_enable',
	'type'				=> 'text',
) );

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'bloghill_theme_options[blog_post_btn_title]', array(
		'selector'            => '#bloghill_blog_post_section .read-more a',
		'settings'            => 'bloghill_theme_options[blog_post_btn_title]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'bloghill_blog_post_btn_title_partial',
    ) );
}

$wp_customize->add_setting( 'bloghill_theme_options[blog_post_excerpt_length]', array(
	'sanitize_callback' => 'bloghill_sanitize_number_range',
	'validate_callback' => 'bloghill_validate_long_excerpt',
	'default'			=> $options['blog_post_excerpt_length'],
	) );

$wp_customize->add_control( 'bloghill_theme_options[blog_post_excerpt_length]', array(
	'label'       		=> esc_html__( 'Service Excerpt Length', 'bloghill' ),
	'description' 		=> esc_html__( 'Total description words to be displayed in service posts.', 'bloghill' ),
	'section'     		=> 'bloghill_our_blog_post_section',
	'active_callback' 	=> 'bloghill_is_blog_post_section_enable',
	'type'        		=> 'number',
	'input_attrs' 		=> array(
		'style'       => 'width: 80px;',
		'max'         => 100,
		'min'         => 5,
		),
	) );


for ( $i = 1; $i <= 5; $i++ ) :


// blog_post posts drop down chooser control and setting
$wp_customize->add_setting( 'bloghill_theme_options[blog_post_content_post_' . $i . ']', array(
	'sanitize_callback' => 'bloghill_sanitize_page',
	) );

$wp_customize->add_control( new Bloghill_Dropdown_Chooser( $wp_customize, 'bloghill_theme_options[blog_post_content_post_' . $i . ']', array(
	'label'             => sprintf( esc_html__( 'Select Post %d', 'bloghill' ), $i ),
	'section'           => 'bloghill_blog_post_section',
	'choices'			=> bloghill_post_choices(),
	'active_callback'	=> 'bloghill_is_blog_post_section_enable',
	) ) );
endfor;

