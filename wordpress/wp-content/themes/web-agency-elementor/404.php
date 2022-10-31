<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Web Agency Elementor
 */

get_header(); ?>

<div class="header-image-box text-center">
  <div class="container">
    <h1><?php esc_html_e('404 Error!', 'web-agency-elementor'); ?></h1>
    <div class="crumb-box mt-3">
      <?php web_agency_elementor_the_breadcrumb(); ?>
    </div>
  </div>
</div>

<div id="content">
	<div class="container">
		<div class="py-5 text-center">
			<p><?php esc_html_e('The page you are looking for may have been moved, deleted, or possibly never existed.', 'web-agency-elementor'); ?></p>
			<?php get_search_form(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>