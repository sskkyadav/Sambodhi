<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Theme Palace
 * @subpackage Bloghill
 * @since Bloghill 1.0.0
 */

/**
 * bloghill_footer_primary_content hook
 *
 * @hooked bloghill_add_contact_section -  10
 *
 */
do_action( 'bloghill_footer_primary_content' );

/**
 * bloghill_content_end_action hook
 *
 * @hooked bloghill_content_end -  10
 *
 */
do_action( 'bloghill_content_end_action' );

/**
 * bloghill_content_end_action hook
 *
 * @hooked bloghill_footer_start -  10
 * @hooked bloghill_Footer_Widgets->add_footer_widgets -  20
 * @hooked bloghill_footer_site_info -  40
 * @hooked bloghill_footer_end -  100
 *
 */
do_action( 'bloghill_footer' );

/**
 * bloghill_page_end_action hook
 *
 * @hooked bloghill_page_end -  10
 *
 */
do_action( 'bloghill_page_end_action' ); 

?>

<?php wp_footer(); ?>

</body>
</html>
