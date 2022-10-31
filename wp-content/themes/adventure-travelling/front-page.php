<?php
/**
 * The front page template file
 *
 * @package Adventure Travelling
 * @subpackage adventure_travelling
 */

get_header(); ?>

<main id="tp_content" role="main">
	<?php do_action( 'adventure_travelling_before_slider' ); ?>

	<?php get_template_part( 'template-parts/home/slider' ); ?>
	<?php do_action( 'adventure_travelling_after_slider' ); ?>

	<?php get_template_part( 'template-parts/home/blog' ); ?>
	<?php do_action( 'adventure_travelling_after_blog' ); ?>

	<?php get_template_part( 'template-parts/home/home-content' ); ?>
	<?php do_action( 'adventure_travelling_after_home_content' ); ?>
</main>

<?php get_footer();