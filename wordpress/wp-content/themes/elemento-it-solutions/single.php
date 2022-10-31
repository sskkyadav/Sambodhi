<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Elemento IT Solutions
 */

get_header(); ?>

<div class="header-image-box text-center">
  <div class="container">
    <div class="headerimgbox-meta">
      <span><i class="far fa-clock"></i><?php esc_html_e(' Posted On ','elemento-it-solutions'); echo esc_attr(get_the_date()); ?></span>
    </div>
    <h1 class="my-3"><?php the_title(); ?></h1>
    <div class="headerimgbox-meta">
      <?php while ( have_posts() ) : the_post(); ?>
        <span><i class="far fa-user mr-2"></i><?php the_author(); ?></span>
      <?php endwhile; ?>
      <span class="ml-3"><i class="far fa-comments mr-2"></i> <?php comments_number( esc_attr('0', 'elemento-it-solutions'), esc_attr('0', 'elemento-it-solutions'), esc_attr('%', 'elemento-it-solutions') ); ?> <?php esc_html_e('comments','elemento-it-solutions'); ?></span>
    </div>
    <div class="crumb-box mt-3">
      <?php elemento_it_solutions_the_breadcrumb(); ?>
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
            get_template_part( 'template-parts/content', 'post');

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
      <div class="col-lg-4 col-md-4">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>