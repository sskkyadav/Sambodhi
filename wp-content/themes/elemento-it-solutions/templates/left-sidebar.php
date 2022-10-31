<?php 

/* Template Name: Left Sidebar Template */

get_header(); ?>

<div class="header-image-box text-center">
  <div class="container">
    <h1><?php the_title(); ?></h1>
    <div class="crumb-box mt-3">
      <?php elemento_it_solutions_the_breadcrumb(); ?>
    </div>
  </div>
</div>

<div id="content" class="mt-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4">
        <?php get_sidebar(); ?>
      </div>
      <div class="col-lg-8 col-md-8">
        <?php
          while ( have_posts() ) :
            the_post();
            get_template_part( 'template-parts/content', get_post_type());

            wp_link_pages(
              array(
                'before' => '<div class="elemento-it-solutions-pagination">',
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
  </div>
</div>

<?php get_footer(); ?>
