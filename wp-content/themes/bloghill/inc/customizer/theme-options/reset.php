<?php
/**
 * Reset options
 *
 * @package Theme Palace
 * @subpackage Bloghill
 * @since Bloghill 1.0.0
 */

/**
* Reset section
*/
// Add reset enable section
$wp_customize->add_section( 'bloghill_reset_section', array(
	'title'             => esc_html__('Reset all settings','bloghill'),
	'description'       => esc_html__( 'Caution: All settings will be reset to default. Refresh the page after clicking Save & Publish.', 'bloghill' ),
) );

// Add reset enable setting and control.
$wp_customize->add_setting( 'bloghill_theme_options[reset_options]', array(
	'default'           => $options['reset_options'],
	'sanitize_callback' => 'bloghill_sanitize_checkbox',
	'transport'			  => 'postMessage',
) );

$wp_customize->add_control( 'bloghill_theme_options[reset_options]', array(
	'label'             => esc_html__( 'Check to reset all settings', 'bloghill' ),
	'section'           => 'bloghill_reset_section',
	'type'              => 'checkbox',
) );
