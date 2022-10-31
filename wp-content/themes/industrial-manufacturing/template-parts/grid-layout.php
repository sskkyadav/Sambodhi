<?php
/**
 * The template part for displaying grid layout
 * @package Industrial Manufacturing
 * @subpackage industrial_manufacturing
 * @since 1.0
 */
?>
<div class="col-lg-4 col-md-4">
    <article class="blog-sec text-center p-2 mb-4">
        <?php 
            if(has_post_thumbnail() && get_theme_mod('industrial_manufacturing_featured_image',true) == true) { 
            the_post_thumbnail(); 
            }
        ?>
        <h2><a href="<?php echo esc_url(get_permalink() ); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
        <?php if(get_the_excerpt()) { ?>
            <div class="entry-content"><p><?php $excerpt = get_the_excerpt(); echo esc_html( industrial_manufacturing_string_limit_words( $excerpt, esc_attr(get_theme_mod('industrial_manufacturing_post_excerpt_number','20')))); ?> <?php echo esc_html( get_theme_mod('industrial_manufacturing_button_excerpt_suffix','...') ); ?></p></div>
        <?php }?>
        <?php if ( get_theme_mod('industrial_manufacturing_blog_button_text','Read Full') != '' ) {?>
            <div class="blogbtn my-3">
              <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small"><?php echo esc_html( get_theme_mod('industrial_manufacturing_blog_button_text',__('Read Full', 'industrial-manufacturing')) ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('industrial_manufacturing_blog_button_text',__('Read Full', 'industrial-manufacturing')) ); ?></span></a>
            </div>
        <?php }?>
    </article>
</div>