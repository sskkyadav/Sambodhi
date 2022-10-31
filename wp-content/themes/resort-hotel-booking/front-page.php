<?php
/**
 * The front page template file
 *
 * @package Resort Hotel Booking
 * @subpackage resort_hotel_booking
 */

get_header(); ?>

<main id="tp_content" role="main">

	<?php get_template_part( 'template-parts/home/slider' ); ?>

	<?php get_template_part( 'template-parts/home/popular-hotel' ); ?>

	<?php get_template_part( 'template-parts/home/blog' ); ?>
	
	<?php get_template_part( 'template-parts/home/home-content' ); ?>
</main>

<?php get_footer();