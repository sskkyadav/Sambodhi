<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Elemento IT Solutions
 */

get_header(); ?>

<div class="header-image-box text-center">
  <div class="container">
    <?php echo '<h1 class="mb-0">' . esc_html__('You searched: ', 'elemento-it-solutions') . get_search_query() . '</h1>'; ?>
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