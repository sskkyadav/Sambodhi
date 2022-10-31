<?php
	/**
	 * The header for our theme.
	 *
	 * This is the template that displays all of the <head> section and everything up until <div id="content">
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
	 *
	 * @package Theme Palace
	 * @subpackage Bloghill
	 * @since Bloghill 1.0.0
	 */

	/**
	 * bloghill_doctype hook
	 *
	 * @hooked bloghill_doctype -  10
	 *
	 */
	do_action( 'bloghill_doctype' );

?>
<head>
<?php
	/**
	 * bloghill_before_wp_head hook
	 *
	 * @hooked bloghill_head -  10
	 *
	 */
	do_action( 'bloghill_before_wp_head' );

	wp_head(); 
?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'wp_body_open' ); ?>

<?php
	/**
	 * bloghill_page_start_action hook
	 *
	 * @hooked bloghill_page_start -  10
	 *
	 */
	do_action( 'bloghill_page_start_action' ); 

	/**
	 * bloghill_loader_action hook
	 *
	 * @hooked bloghill_loader -  10
	 *
	 */
	do_action( 'bloghill_before_header' );

	/**
	 * bloghill_header_action hook
	 *
	 * @hooked bloghill_header_start -  10
	 * @hooked bloghill_site_branding -  20
	 * @hooked bloghill_site_navigation -  30
	 * @hooked bloghill_header_end -  50
	 *
	 */
	do_action( 'bloghill_header_action' );

	/**
	 * bloghill_content_start_action hook
	 *
	 * @hooked bloghill_content_start -  10
	 *
	 */
	do_action( 'bloghill_content_start_action' );

	/**
	 * bloghill_header_image_action hook
	 *
	 * @hooked bloghill_header_image -  10
	 *
	 */
	do_action( 'bloghill_header_image_action' );

	if ( bloghill_is_frontpage() ) {
    	$options = bloghill_get_theme_options();
    	$sorted = array();
		$sorted = explode( ',' , bloghill_get_homepage_sections() );
		
		foreach ( $sorted as $section ) {
			add_action( 'bloghill_primary_content', 'bloghill_add_'. $section .'_section' );
		}

		do_action( 'bloghill_primary_content' );
	}