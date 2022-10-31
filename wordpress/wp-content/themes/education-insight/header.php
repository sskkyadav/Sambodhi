<?php
/**
 * The header for our theme
 *
 * @subpackage Education Insight
 * @since 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) ) {
	    wp_body_open();
	} else {
	    do_action( 'wp_body_open' );
	}
?>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'education-insight' ); ?></a>
	<?php if( get_theme_mod('education_insight_theme_loader','') != ''){ ?>
		<div class="preloader">
			<div class="load">
			  <hr/><hr/><hr/><hr/>
			</div>
		</div>
	<?php }?>
	<div id="page" class="site">
		<div class="top_header">
			<div class="container">
				<?php if( get_theme_mod('education_insight_call') != ''){ ?>
					<span><i class="fas fa-phone"></i><?php echo esc_html(get_theme_mod('education_insight_call','')); ?></span>
				<?php }?>
				<?php if( get_theme_mod('education_insight_email') != ''){ ?>
					<span><i class="far fa-envelope"></i><?php echo esc_html(get_theme_mod('education_insight_email','')); ?></span>
				<?php }?>
				<?php if(class_exists('woocommerce')){ ?>
					<?php if ( is_user_logged_in() ) { ?>
						<a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>"><?php esc_html_e('MY ACCOUNT','education-insight'); ?></a>
					<?php }
					else { ?>
						<a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>"><?php esc_html_e('LOGIN / REGISTER','education-insight'); ?></a>
					<?php } ?>
                <?php }?>
			</div>
		</div>
		<div id="header">
			<div class="wrap_figure">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 box-center">
						   	<div class="menu_box">
						   		<?php get_template_part('template-parts/navigation/navigation-left'); ?>
						   	</div>
						</div>
						<div class="col-lg-2 col-md-3 box-center">
							<div class="logo">
						        <?php if ( has_custom_logo() ) : ?>
				            		<?php the_custom_logo(); ?>
					            <?php endif; ?>
				              	<?php $blog_info = get_bloginfo( 'name' ); ?>
				              		<?php if( get_theme_mod('education_insight_logo_title',true) != '' ){ ?>
						                <?php if ( ! empty( $blog_info ) ) : ?>
						                  	<?php if ( is_front_page() && is_home() ) : ?>
						                    	<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						                  	<?php else : ?>
					                      		<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					                  		<?php endif; ?>
						                <?php endif; ?>
						            <?php }?>
					                <?php
				                  		$description = get_bloginfo( 'description', 'display' );
					                  	if ( $description || is_customize_preview() ) :
					                ?>
					                <?php if( get_theme_mod('education_insight_logo_text',true) != '' ){ ?>
					                  	<p class="site-description">
					                    	<?php echo esc_html($description); ?>
					                  	</p>
					                <?php }?>
				              	<?php endif; ?>
						    </div>
						</div>
						<div class="col-lg-5 col-md-8 box-center">
							<div class="row">
								<div class="col-lg-8 col-md-4 col-3">
								   	<div class="menu_box">
								   		<?php get_template_part('template-parts/navigation/navigation-right'); ?>
								   	</div>
								   	<?php if(has_nav_menu('primary-3')){?>
										<div class="toggle-menu gb_menu">
											<button onclick="education_insight_gb_Menu_open()" class="gb_toggle"><i class="fas fa-ellipsis-h"></i><p><?php esc_html_e('Menu','education-insight'); ?></p></button>
										</div>
									<?php }?>
									<div class="menu_box_mobile">
								   		<?php get_template_part('template-parts/navigation/navigation-responsive'); ?>
								   	</div>
								</div>
								<div class="col-lg-4 col-md-8 col-9">
									<div class="links">
										<?php if( get_theme_mod('education_insight_facebook') != ''){ ?>
											<a href="<?php echo esc_url(get_theme_mod('education_insight_facebook','')); ?>"><i class="fab fa-facebook-f"></i></a>
										<?php }?>
										<?php if( get_theme_mod('education_insight_twitter') != ''){ ?>
											<a href="<?php echo esc_url(get_theme_mod('education_insight_twitter','')); ?>"><i class="fab fa-twitter"></i></a>
										<?php }?>
										<?php if( get_theme_mod('education_insight_linkedin') != ''){ ?>
											<a href="<?php echo esc_url(get_theme_mod('education_insight_linkedin','')); ?>"><i class="fab fa-linkedin-in"></i></a>
										<?php }?>
										<?php if( get_theme_mod('education_insight_pintrest') != ''){ ?>
											<a href="<?php echo esc_url(get_theme_mod('education_insight_pintrest','')); ?>"><i class="fab fa-pinterest-p"></i></a>
										<?php }?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>