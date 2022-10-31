<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Web Agency Elementor
*/

  global $post;
?>

<div class="col-lg-6 col-md-6 col-sm-6">
  <div id="post-<?php the_ID(); ?>" <?php post_class('post-box mb-4'); ?>>
    <div class="box">
      <div class="post-thumbnail">        
        <?php if ( has_post_thumbnail() ) { ?>
          <?php the_post_thumbnail(); ?>
        <?php } else { ?>
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/post-dummy.png' ); ?>" alt="<?php esc_attr_e( 'Post Image', 'web-agency-elementor' ); ?>">
         <?php }?>
      </div>
      <div class="box-content">
        <p class="slider-button mb-0">
          <a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php esc_html_e('Read More','web-agency-elementor'); ?><i class="fas fa-angle-right ml-2"></i></a>
        </p>
      </div>
    </div>      
    <div class="post-content-box p-3">
      <div class="post-meta my-3">
        <i class="far fa-clock"></i>
        <?php
          esc_html_e(' Posted On ','web-agency-elementor');
          echo esc_attr(get_the_date());
        ?>
      </div>
      <h3 class="post-title mb-3 mt-0"><a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php the_title(); ?></a></h3>
      <div class="post-content">
        <?php echo wp_trim_words( get_the_content(), 15); ?>
      </div>
    </div>
  </div>
</div>