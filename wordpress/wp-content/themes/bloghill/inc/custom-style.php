<?php


function bloghill_style( $args = array() ) {
		$options = bloghill_get_theme_options();
	?>

		<style type="text/css">

		<?php if ( is_customize_preview() ): ?>
			.home .page-section:hover{
				border: 3px solid;
			}
		<?php endif ?>
		
		
		<?php foreach ( explode( ',', $options['all_sortable'] ) as $list ) { ?>
			<?php if ( !empty( $options[$list.'_padding_top'] ) || !empty( $options[$list.'_padding_bottom'] )	): ?>
				#bloghill_<?php echo $list; ?>_section {
					padding-bottom: <?php echo esc_attr( $options[$list.'_padding_bottom'] ); ?>px;
					padding-top: <?php echo esc_attr( $options[$list.'_padding_top'] ); ?>px;;
				}
			<?php endif ?>

			<?php if ( !in_array( $list, array( 'hero_banner', 'project', 'cta', 'blog_post', 'slider', 'latest_product', 'promotion', 'featured_products', 'trending_products', 'counter', 'sponsor', 'about' ) ) ) { ?>
				<?php if ( !empty( $options[$list.'_header_alignment_type'] ) ): ?>
					#bloghill_<?php echo $list; ?>_section .section-header { 
						text-align: <?php echo esc_attr( $options[$list.'_header_alignment_type'] ); ?>;
						max-width: 100%;
					}

				<?php endif ?>
			<?php } ?>
			
		<?php } ?>

		<?php if ( 	!is_active_sidebar( 'blog-post-left-sidebar' ) && !is_active_sidebar( 'blog-post-right-sidebar' ) ) { ?>
            @media screen and (min-width: 1024px){
            	#bloghill_blog_post_section #primary {
				    width: 100%;
				}
            }

            #bloghill_blog_post_section .archive-blog-wrapper .featured-image{
				padding: 250px 0;
			}

        <?php } ?>

		</style>
		
<?php }

add_action( 'wp_head', 'bloghill_style' );