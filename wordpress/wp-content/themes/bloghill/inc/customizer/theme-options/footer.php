<?php
/**
 * Footer options
 *
 * @package Theme Palace
 * @subpackage Bloghill
 * @since Bloghill 1.0.0
 */

// Footer Section
$wp_customize->add_section( 'bloghill_section_footer',
	array(
		'title'      			=> esc_html__( 'Footer Options', 'bloghill' ),
		'priority'   			=> 900,
		'panel'      			=> 'bloghill_theme_options_panel',
	)
);

// scroll top visible
$wp_customize->add_setting( 'bloghill_theme_options[footer_enable]',
	array(
		'default'       		=> $options['footer_enable'],
		'sanitize_callback' => 'bloghill_sanitize_switch_control',
	)
);
$wp_customize->add_control( new Bloghill_Switch_Control( $wp_customize, 'bloghill_theme_options[footer_enable]',
    array(
		'label'      			=> esc_html__( 'Foote section Enable', 'bloghill' ),
		'section'    			=> 'bloghill_section_footer',
		'on_off_label' 		=> bloghill_switch_options(),
    )
) );

// footer copyright text
$wp_customize->add_setting( 'bloghill_theme_options[copyright_text]',
	array(
		'default'       		=> $options['copyright_text'],
		'sanitize_callback'		=> 'bloghill_santize_allow_tag',
		'transport'				=> 'postMessage',
	)
);
$wp_customize->add_control( 'bloghill_theme_options[copyright_text]',
    array(
		'label'      			=> esc_html__( 'Copyright Text', 'bloghill' ),
		'section'    			=> 'bloghill_section_footer',
		'type'		 			=> 'textarea',
    )
);

// Abort if selective refresh is not available.
if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'bloghill_theme_options[copyright_text]', array(
		'selector'            => '#colophon .site-info span.copyright',
		'settings'            => 'bloghill_theme_options[copyright_text]',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'bloghill_copyright_text_partial',
    ) );
}

// scroll top visible
$wp_customize->add_setting( 'bloghill_theme_options[scroll_top_visible]',
	array(
		'default'       		=> $options['scroll_top_visible'],
		'sanitize_callback' => 'bloghill_sanitize_switch_control',
	)
);
$wp_customize->add_control( new Bloghill_Switch_Control( $wp_customize, 'bloghill_theme_options[scroll_top_visible]',
    array(
		'label'      			=> esc_html__( 'Display Scroll Top Button', 'bloghill' ),
		'section'    			=> 'bloghill_section_footer',
		'on_off_label' 		=> bloghill_switch_options(),
    )
) );