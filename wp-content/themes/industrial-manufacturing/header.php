<?php
/**
 * The Header for our theme.
 * @package Industrial Manufacturing
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php if ( function_exists( 'wp_body_open' ) ) {
	    wp_body_open();
	} else {
	    do_action( 'wp_body_open' );
	}?>
	
	<?php if(get_theme_mod('industrial_manufacturing_preloader',false) || get_theme_mod('industrial_manufacturing_preloader_responsive',false)){ ?>
    <?php if(get_theme_mod( 'industrial_manufacturing_preloader_type','Square') == 'Square'){ ?>
      <div id="overlayer"></div>
      <span class="tg-loader">
      	<span class="tg-loader-inner"></span>
      </span>
    <?php }else if(get_theme_mod( 'industrial_manufacturing_preloader_type') == 'Circle') {?>    
      <div class="preloader text-center">
        <div class="preloader-container">
          <span class="animated-preloader"></span>
        </div>
      </div>
    <?php }?>
	<?php }?>
	<header role="banner" class="position-relative">
		<a class="screen-reader-text skip-link" href="#maincontent"><?php esc_html_e( 'Skip to content', 'industrial-manufacturing' ); ?><span class="screen-reader-text"><?php esc_html_e( 'Skip to content', 'industrial-manufacturing' ); ?></span></a>
		<?php if (has_nav_menu('primary')){ ?>
			<div class="toggle-menu responsive-menu">
        <button role="tab" class="mobiletoggle"><i class="<?php echo esc_html(get_theme_mod('industrial_manufacturing_menu_open_icon','fas fa-bars')); ?> me-2"></i><?php echo esc_html( get_theme_mod('industrial_manufacturing_mobile_menu_label', __('Menu','industrial-manufacturing'))); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('industrial_manufacturing_mobile_menu_label', __('Menu','industrial-manufacturing'))); ?></span></button>
      </div>
    <?php }?>	

		<div id="header">	
			<?php if(get_theme_mod('industrial_manufacturing_top_header',false) == true || get_theme_mod('industrial_manufacturing_hide_topbar_responsive',true) == true){ ?>
				<div class="top-bar py-2 text-center text-lg-start">
					<div class="container">
		    		<div class="row">
		    			<div class="col-lg-8 col-md-12 align-self-center contact-info text-lg-start text-center">
		    				<?php if ( get_theme_mod('industrial_manufacturing_call','') != "" ) {?>
									<span><i class="fas fa-phone me-2"></i><?php esc_html_e('Phone:', 'industrial-manufacturing') ?> <a href="tel:<?php echo esc_attr(get_theme_mod('industrial_manufacturing_call')); ?>"><?php echo esc_html(get_theme_mod('industrial_manufacturing_call')); ?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('industrial_manufacturing_call')); ?></span></a></span>
								<?php }?>
								<?php if ( get_theme_mod('industrial_manufacturing_mail_address','') != "" ) {?>
									<span><i class="fas fa-envelope me-2"></i><?php esc_html_e('Email:', 'industrial-manufacturing') ?> <a href="mailto:<?php echo esc_attr(get_theme_mod('industrial_manufacturing_mail_address')); ?>"><?php echo esc_html(get_theme_mod('industrial_manufacturing_mail_address')); ?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('industrial_manufacturing_mail_address')); ?></span></a></span>
								<?php }?>
								<?php if ( get_theme_mod('industrial_manufacturing_timing','') != "" ) {?>
									<span><i class="fas fa-clock me-2"></i><?php esc_html_e('Hours:', 'industrial-manufacturing') ?> <?php echo esc_html(get_theme_mod('industrial_manufacturing_timing')); ?></span>
								<?php }?>
		    			</div>
		    			<div class="col-lg-4 col-md-12 align-self-center text-lg-end text-center">
		    				<div class="creer-faq d-md-inline-block me-md-3 mb-0 mb-2">
		    					<?php if ( get_theme_mod('industrial_manufacturing_career_url') != "" || get_theme_mod('industrial_manufacturing_career_text') != "" ) {?>
										<a href="<?php echo esc_url(get_theme_mod('industrial_manufacturing_career_url')); ?>"><?php echo esc_html(get_theme_mod('industrial_manufacturing_career_text')); ?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('industrial_manufacturing_career_text')); ?></span></a>
									<?php }?>
									<?php if ( get_theme_mod('industrial_manufacturing_faq_url') != "" || get_theme_mod('industrial_manufacturing_faq_text') != "" ) {?>
										<a href="<?php echo esc_url(get_theme_mod('industrial_manufacturing_faq_url')); ?>"><?php echo esc_html(get_theme_mod('industrial_manufacturing_faq_text')); ?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('industrial_manufacturing_faq_text')); ?></span></a>
									<?php }?>
		    				</div>
		    				<div class="social-icons d-md-inline-block">
		    					<?php if ( get_theme_mod('industrial_manufacturing_facebook_url') != "" ) {?>
										<a href="<?php echo esc_url(get_theme_mod('industrial_manufacturing_facebook_url')); ?>"><i class="fab fa-facebook-f"></i><span class="screen-reader-text"><?php echo esc_html('Facebook', 'industrial-manufacturing'); ?></span></a>
									<?php }?>
									<?php if ( get_theme_mod('industrial_manufacturing_twitter_url') != "" ) {?>
										<a href="<?php echo esc_url(get_theme_mod('industrial_manufacturing_twitter_url')); ?>"><i class="fab fa-twitter"></i><span class="screen-reader-text"><?php echo esc_html('Twitter', 'industrial-manufacturing'); ?></span></a>
									<?php }?>
									<?php if ( get_theme_mod('industrial_manufacturing_instagram_url') != "" ) {?>
										<a href="<?php echo esc_url(get_theme_mod('industrial_manufacturing_instagram_url')); ?>"><i class="fab fa-instagram"></i><span class="screen-reader-text"><?php echo esc_html('Instagram', 'industrial-manufacturing'); ?></span></a>
									<?php }?>
									<?php if ( get_theme_mod('industrial_manufacturing_pinterest_url') != "" ) {?>
										<a href="<?php echo esc_url(get_theme_mod('industrial_manufacturing_pinterest_url')); ?>"><i class="fab fa-pinterest"></i><span class="screen-reader-text"><?php echo esc_html('Pinterest', 'industrial-manufacturing'); ?></span></a>
									<?php }?>
		    				</div>
		    			</div>
		    		</div>
				  </div>
				</div>
			<?php }?>
			<div class="middle-header">
				<div class="container">
					<div class="row">
						<div class="col-lg-2 col-md-4 pe-md-0 align-self-center">
							<div class="logo text-md-start text-center">
		          	<?php if ( has_custom_logo() ) : ?>
		            	<div class="site-logo"><?php the_custom_logo(); ?></div>
		            <?php endif; ?>
		              <?php $blog_info = get_bloginfo( 'name' ); ?>
		              <?php if ( ! empty( $blog_info ) ) : ?>
		              	<?php if( get_theme_mod('industrial_manufacturing_show_site_title',true) != ''){ ?>
			                <?php if ( is_front_page() && is_home() ) : ?>
			                	<h1 class="site-title p-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			                <?php else : ?>
			                  <p class="site-title m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			                <?php endif; ?>
			            <?php }?>
		            <?php endif; ?>
		            <?php if( get_theme_mod('industrial_manufacturing_show_tagline',true) != ''){ ?>
	                <?php
	                $description = get_bloginfo( 'description', 'display' );
	                if ( $description || is_customize_preview() ) :
	                ?>
	                	<p class="site-description m-0">
	                    <?php echo esc_html($description); ?>
	                	</p>
	                <?php endif; ?>
		            <?php }?>
			        </div>
						</div>
						<div class="<?php if(get_theme_mod('industrial_manufacturing_header_button_text') != '' || get_theme_mod('industrial_manufacturing_header_button_link') != '') {?> col-lg-6 col-md-2 <?php } else {?> col-lg-8 col-md-6 <?php }?> align-self-center">
							<div class="<?php if( get_theme_mod( 'industrial_manufacturing_sticky_header') != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
		            <div id="sidelong-menu" class="nav side-nav">
		              <nav id="primary-site-navigation" class="nav-menu text-lg-end" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'industrial-manufacturing' ); ?>">
		              	<?php if (has_nav_menu('primary')){
		                  wp_nav_menu( array( 
		                    'theme_location' => 'primary',
		                    'container_class' => 'main-menu-navigation clearfix' ,
		                    'menu_class' => 'clearfix',
		                    'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
		                    'fallback_cb' => 'wp_page_menu',
		                  ) ); 
		              	}?>
		                <a href="javascript:void(0)" class="closebtn responsive-menu"><?php echo esc_html( get_theme_mod('industrial_manufacturing_close_menu_label', __('Close Menu','industrial-manufacturing'))); ?><i class="<?php echo esc_html(get_theme_mod('industrial_manufacturing_menu_close_icon','fas fa-times-circle')); ?> m-3"></i><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('industrial_manufacturing_close_menu_label', __('Close Menu','industrial-manufacturing'))); ?></span></a>
		              </nav>
		            </div>
							</div>
						</div>
						<?php if(get_theme_mod('industrial_manufacturing_header_button_text') != '' || get_theme_mod('industrial_manufacturing_header_button_link') != '') {?>
							<div class="col-lg-2 col-md-3 text-md-end text-center quote-btn align-self-center">
								<a href="<?php echo esc_url(get_theme_mod('industrial_manufacturing_header_button_link')); ?>"><i class="fas fa-share me-2"></i><?php echo esc_html(get_theme_mod('industrial_manufacturing_header_button_text')); ?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('industrial_manufacturing_header_button_text')); ?></span></a>
							</div>
						<?php }?>
						<div class="col-lg-2 col-md-3 header-search">
							<?php get_search_form(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<?php if(get_theme_mod('industrial_manufacturing_post_featured_image') == 'banner' ){
    if( is_singular() ) {?>
    	<div id="page-site-header">
        <div class='page-header'> 
        	<?php the_title( '<h1>', '</h1>' ); ?>
        </div>
    	</div>
    <?php }
	}?>