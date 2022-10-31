<?php
/**
 * About section
 *
 * This is the template for the content of about section
 *
 * @package Theme Palace
 * @subpackage Bloghill
 * @since Bloghill 1.0.0
 */
if ( ! function_exists( 'bloghill_add_cta_section' ) ) :
    /**
    * Add about section
    *
    *@since Bloghill 1.0.0
    */
    function bloghill_add_cta_section() {
    	$options = bloghill_get_theme_options();
        // Check if about is enabled on frontpage
        $cta_enable = apply_filters( 'bloghill_section_status', true, 'cta_section_enable' );

        if ( true !== $cta_enable ) {
            return false;
        }
        // Get about section details
        $section_details = array();
        $section_details = apply_filters( 'bloghill_filter_cta_section_details', $section_details );

        if ( empty( $section_details ) ) {
            return;
        }

 
        bloghill_render_cta_section( $section_details );

    }
endif;

if ( ! function_exists( 'bloghill_get_cta_section_details' ) ) :
    /**
    * about section details.
    *
    * @since Bloghill 1.0.0
    * @param array $input about section details.
    */
    function bloghill_get_cta_section_details( $input ) {
        $options = bloghill_get_theme_options();

        $content = array();

        $page_id = ! empty( $options['cta_content_page'] ) ? $options['cta_content_page'] : '';
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
                $page_post['excerpt']   = bloghill_trim_content( $options['cta_excerpt_length'] );
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
// about section content details.
add_filter( 'bloghill_filter_cta_section_details', 'bloghill_get_cta_section_details' );


if ( ! function_exists( 'bloghill_render_cta_section' ) ) :
  /**
   * Start about section
   *
   * @return string about content
   * @since Bloghill 1.0.0
   *
   */
   function bloghill_render_cta_section( $content_details = array() ) {
        $options = bloghill_get_theme_options();

        if ( empty( $content_details ) ) {
            return;
        } ?>

        <?php foreach ( $content_details as $content ) { ?>
        <div id="bloghill_cta_section" class="relative page-section cta">
            <?php if ( is_customize_preview()):
                bloghill_section_tooltip( 'cta-class' );
            endif; ?>
            <div class="wrapper">
                
               <article class="has-post-thumbnail">
                    <div class="featured-image" style="background-image: url('<?php echo esc_url( $content['image'] ); ?>');">
                        <a href="#" class="post-thumbnail-link"></a>
                    </div><!-- .featured-image -->

                    <div class="entry-container">
                       <div class="section-header">
                            <?php if ( !empty( $options['cta_sub_title'] ) ){ ?>
                                <p class="section-subtitle"><?php echo esc_html( $options['cta_sub_title'] ); ?></p>
                            <?php } ?>
                            <h2 class="section-title"><a href="<?php echo esc_url( $content['url'] ); ?>"><?php echo esc_html( $content['title'] ); ?></a></h2>
                        </div>

                        <div class="entry-content">
                            <p><?php echo esc_html( $content['excerpt'] ); ?></p> 
                        </div><!-- .entry-content -->

                        <div class="read-more clear">
                            <a href="<?php echo esc_url( $content['url'] ); ?>" class="btn"><?php echo esc_html( $options['cta_btn_text'] ); ?></a>
                        </div>
                    </div><!-- .entry-container -->
                </article>
            </div><!-- .wrapper -->
        </div>
    
            <?php }
    }
endif;