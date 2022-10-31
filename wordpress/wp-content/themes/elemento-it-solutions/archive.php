<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Elemento IT Solutions
 */

get_header(); ?>

<div class="header-image-box text-center">
  <div class="container">
    <?php the_archive_title('<h1 class="mb-0">', '</h1>') ?> <?php the_archive_description(); ?>
    <div class="crumb-box mt-3">
      <?php elemento_it_solutions_the_breadcrumb(); ?>
    </div>
  </div>
</div>

<div id="content" class="mt-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8">
        <div class="row">
          <?php
            if ( have_posts() ) :

              while ( have_posts() ) :

                the_post();
                get_template_part( 'template-parts/content' );

              endwhile;

            else:

              esc_html_e( 'Sorry, no post found on this archive.', 'elemento-it-solutions' );

            endif;

            get_template_part( 'template-parts/pagination' );
          ?>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>