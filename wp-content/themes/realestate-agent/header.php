<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="Content-Type" content="<?php echo esc_attr(get_bloginfo('html_type')); ?>; charset=<?php echo esc_attr(get_bloginfo('charset')); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) )
	{
		wp_body_open();
	}else{
		do_action('wp_body_open');
	}
?>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'realestate-agent' ); ?></a>

<div class="top-header text-center text-md-left py-2">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-12 align-self-center">
	    		<div class="logo text-center text-md-center text-lg-left">
		    		<div class="logo-image mr-3">
		    			<?php echo esc_url( the_custom_logo() ); ?>
			    	</div>
			    	<div class="logo-content">
				    	<?php
				    		if ( get_theme_mod('realestate_agent_display_header_title', true) == true ) :
					      		echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '">';
					      			echo esc_attr(get_bloginfo('name'));
					      		echo '</a>';
					      	endif;

					      	if ( get_theme_mod('realestate_agent_display_header_text', true) == true ) :
				      			echo '<span>'. esc_attr(get_bloginfo('description')) . '</span>';
				      		endif;
			    		?>
					</div>
				</div>
		   	</div>
			<div class="col-lg-6 col-md-8 align-self-center text-center text-md-right">
				<?php if ( get_theme_mod('realestate_agent_header_email_address') ) : ?>
					<span class="mr-3"><i class="fas fa-envelope mr-3"></i><?php echo esc_html( get_theme_mod('realestate_agent_header_email_address' ) ); ?></span>
				<?php endif; ?>

				<?php if ( get_theme_mod('realestate_agent_header_phone_number') ) : ?>
					<span class="mr-3"><i class="fas fa-phone mr-3"></i><?php echo esc_html( get_theme_mod('realestate_agent_header_phone_number' ) ); ?></span>
				<?php endif; ?>
			</div>
			<div class="col-lg-3 col-md-4 align-self-center">
				<?php $realestate_agent_settings = get_theme_mod( 'realestate_agent_social_links_settings' ); ?>
				<div class="social-links text-center text-md-right">
					<?php if ( is_array($realestate_agent_settings) || is_object($realestate_agent_settings) ){ ?>
					    	<?php foreach( $realestate_agent_settings as $realestate_agent_setting ) { ?>
						        <a href="<?php echo esc_url( $realestate_agent_setting['link_url'] ); ?>">
						            <i class="<?php echo esc_attr( $realestate_agent_setting['link_text'] ); ?> mr-3"></i>
						        </a>
					    	<?php } ?>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>

<header id="site-navigation" class="header text-center text-md-left">
	<div class="container">
		<div class="row">
		    <div class="col-lg-9 col-md-8 align-self-center">
				<?php if(has_nav_menu('main-menu')){ ?>
					<button class="menu-toggle my-2 py-2 px-3" aria-controls="top-menu" aria-expanded="false" type="button">
						<span aria-hidden="true"><?php esc_html_e( 'Menu', 'realestate-agent' ); ?></span>
					</button>
					<nav id="main-menu" class="close-panal">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'main-menu',
								'container' => 'false'
							));
						?>
						<button class="close-menu my-2 p-2" type="button">
							<span aria-hidden="true"><i class="fa fa-times"></i></span>
						</button>
					</nav>
				<?php }?>
			</div>
			<div class="col-lg-1 col-md-1 col-sm-1 col-2 align-self-center">
	            <div class="header-search text-center py-3 py-md-0">
	            	<?php if ( get_theme_mod('realestate_agent_search_box_enable', true) == true ) : ?>
	                    <a class="open-search-form" href="#search-form"><i class="fa fa-search" aria-hidden="true"></i></a>
	                    <div class="search-form"><?php get_search_form();?></div>
	            	<?php endif; ?>
	            </div>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-3 col-10 align-self-center">
				<?php if ( get_theme_mod('realestate_agent_header_property_btn_link') || get_theme_mod('realestate_agent_header_property_btn_text') ) : ?>
					<p class="mb-0 property-btn text-right"><a href="<?php echo esc_url( get_theme_mod('realestate_agent_header_property_btn_link' ) ); ?>"><?php echo esc_html( get_theme_mod('realestate_agent_header_property_btn_text' ) ); ?></a>
				<?php endif; ?></p>
			</div>
		</div>
	</div>
</header>