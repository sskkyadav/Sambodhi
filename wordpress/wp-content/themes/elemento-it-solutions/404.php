<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Elemento IT Solutions
 */

get_header(); ?>

<div class="header-image-box text-center">
  <div class="container">
    <h1><?php esc_html_e('404 Error!', 'elemento-it-solutions'); ?></h1>
    <div class="crumb-box mt-3">
      <?php elemento_it_solutions_the_breadcrumb(); ?>
    </div>
  </div>
</div>

<div id="content">
	<div class="container">
		<div class="py-5 text-center">
			<figure>
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/404-error.png' ); ?>" alt="<?php esc_attr_e( '404 Not Found', 'elemento-it-solutions' ); ?>">
			</figure>
			<p><?php esc_html_e('The page you are looking for may have been moved, deleted, or possibly never existed.', 'elemento-it-solutions'); ?></p>
			<?php get_search_form(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>