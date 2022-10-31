<?php
/**
 * hero banner section
 *
 * This is the template for the content of hero banner section
 *
 * @package Theme Palace
 * @subpackage Bloghill
 * @since Bloghill 1.0.0
 */
if ( ! function_exists( 'bloghill_add_hero_banner_section' ) ) :
    /**
    * Add hero banner section
    *
    *@since Bloghill 1.0.0
    */
    function bloghill_add_hero_banner_section() {
    	$options = bloghill_get_theme_options();
        // Check if about is enabled on frontpage
        $hero_banner_enable = apply_filters( 'bloghill_section_status', true, 'hero_banner_section_enable' );

        if ( true !== $hero_banner_enable ) {
            return false;
        }
        // Get hero banner section details
        $section_details = array();
        $section_details = apply_filters( 'bloghill_filter_hero_banner_section_details', $section_details );

        if ( empty( $section_details ) ) {
            return;
        }

 
        bloghill_render_hero_banner_section( $section_details );

    }
endif;

if ( ! function_exists( 'bloghill_get_hero_banner_section_details' ) ) :
    /**
    * hero banner section details.
    *
    * @since Bloghill 1.0.0
    * @param array $input hero banner section details.
    */
    function bloghill_get_hero_banner_section_details( $input ) {
        $options = bloghill_get_theme_options();
        $content = array();

        $page_id = ! empty( $options['hero_banner_content_page'] ) ? $options['hero_banner_content_page'] : '';
        $args = array(
            'post_type'         => 'page',
            'page_id'           => $page_id,
            'posts_per_page'    => 1,
            );     

        $query = new WP_Query( $args );
        if ( $query->have_posts() ) : 
            while ( $query->have_posts() ) : $query->the_post();
                $page_post['title']     = get_the_title();
                $page_post['id']        = get_the_id();
                $page_post['url']       = get_the_permalink();
                $page_post['excerpt']   = bloghill_trim_content( $options['hero_banner_excerpt_length'] );
                $page_post['image']     = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_id(), 'full' ) : get_template_directory_uri() . '/assets/uploads/no-featured-image-590x650.jpg';

                // Push to the main array.
                array_push( $content, $page_post );
            endwhile;
        endif;
        wp_reset_postdata();
            
        if ( ! empty( $content ) ) {
            $input = $content;
        }
        return $input;
    }
endif;
// hero banner section content details.
add_filter( 'bloghill_filter_hero_banner_section_details', 'bloghill_get_hero_banner_section_details' );


if ( ! function_exists( 'bloghill_render_hero_banner_section' ) ) :
  /**
   * Start hero banner section
   *
   * @return string about content
   * @since Bloghill 1.0.0
   *
   */
   function bloghill_render_hero_banner_section( $content_details = array() ) {
        $options = bloghill_get_theme_options();

        if ( empty( $content_details ) ) {
            return;
        } ?>

        <?php foreach ( $content_details as $content ) : ?>
            <div id="bloghill_hero_banner_section" class="page-section hero-banner">
                <?php if ( is_customize_preview()):
                    bloghill_section_tooltip( 'hero-banner-class' );
                endif; ?>
                <div class="wrapper">
                    <article class="has-post-thumbnail">
                        <div class="featured-image" style="background-image: url('<?php echo esc_url( $content['image'] ); ?>');">
                            <a href="#" class="post-thumbnail-link"></a>
                        </div>

                        <div class="entry-container">
                            <div class="section-header">
                                <?php if ( !empty( $options['hero_banner_sub_title'] ) ): ?>
                                        <p class="section-subtitle"><?php echo esc_html( $options['hero_banner_sub_title'] ); ?></p>
                                <?php endif ?>
                                <h2 class="section-title"><a href="<?php echo esc_url( $content['url'] ); ?>"><?php echo esc_html( $content['title'] ); ?></a></h2>
                            </div><!-- .section-header -->

                            <div class="entry-content">
                                <p><?php echo esc_html( $content['excerpt'] ); ?></p>
                            </div><!-- .entry-content -->

                            <div class="read-more clear">
                                <a href="<?php echo esc_url( $content['url'] ); ?>" class="btn regular"><?php echo esc_html( $options['hero_banner_btn_text'] ); ?></a>
                                <?php if ( !empty($options['hero_banner_alt_btn_url']) ): ?>
                                    <a href="<?php echo esc_url( $options['hero_banner_alt_btn_url'] ); ?>" class="btn alt"><?php echo esc_html( $options['hero_banner_alt_btn_text'] ); ?></a>
                                <?php endif ?>
                                
                            </div><!-- .read-more -->
                        </div><!-- .entry-container -->
                    </article>
                </div><!-- .wrapper -->
            </div><!-- #bloghill_hero_banner_section -->

            <?php endforeach; ?>
        
        <?php 
    }
endif;