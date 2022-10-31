<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Theme Palace
 * @subpackage Bloghill
 * @since Bloghill 1.0.0
 */
$options = bloghill_get_theme_options();
$class = has_post_thumbnail() ? '' : 'no-post-thumbnail';
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'clear ' . $class ); ?>>

<?php if( $options['single_post_hide_image'] == false ):
if (has_post_thumbnail()): ?>
		<div class="featured-image">
		<a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url( 'large' ) ?>" alt="<?php the_title(); ?>"></a>
	</div>
	<?php endif;
	endif; ?>

	<?php if( $options['single_post_hide_description'] == false ): ?>
	<div class="entry-container">
		<div class="entry-content">
			<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'bloghill' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bloghill' ),
				'after'  => '</div>',
				) );
				?>
			</div><!-- .entry-content -->
		</div><!-- .entry-container -->
	<?php endif; ?>

		<div class="entry-meta">
			<?php if ( ! $options['single_post_hide_author'] ) :
			echo bloghill_author( get_the_author_meta( 'ID' ) );
			endif; 

			if ( ! $options['single_post_hide_date'] ) :
				bloghill_posted_on(); 
			endif; ?>

			<?php  
			bloghill_single_categories();
			bloghill_entry_footer();
			?>

		</div><!-- .entry-meta -->

</article><!-- #post-## -->