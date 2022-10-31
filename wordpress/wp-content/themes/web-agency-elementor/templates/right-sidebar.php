<?php 

/* Template Name: Right Sidebar Template */

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
    <div class="row">
      <div class="col-lg-8 col-md-8">
        <?php
          while ( have_posts() ) :
            the_post();
            get_template_part( 'template-parts/content', 'page');

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
      <div class="col-lg-4 col-md-4">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
