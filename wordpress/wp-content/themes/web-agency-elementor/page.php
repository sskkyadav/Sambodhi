<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Web Agency Elementor
 */

get_header(); ?>

<div class="header-image-box text-center">
  <div class="container">
    <h1><?php the_title(); ?></h1>
    <div class="crumb-box mt-3">
      <?php web_agency_elementor_the_breadcrumb(); ?>
    </div>
  </div>
</div>

<div id="content" class="mt-5">
  <div class="container">
    <?php
      while ( have_posts() ) :
        the_post();
        get_template_part( 'template-parts/content', get_post_type());

        wp_link_pages(
          array(
            'before' => '<div class="web-agency-elementor-pagination">',
            'after' => '</div>',
            'link_before' => '<span>',
            'link_after' => '</span>'
          )
        );
        comments_template();
      endwhile;
    ?>
  </div>
</div>

<?php get_footer(); ?>