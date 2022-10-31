<?php
/*
* Display Theme menus
*/
?>
<?php
$adventure_travelling_sticky = get_theme_mod('adventure_travelling_sticky');
    $data_sticky = "false";
    if ($adventure_travelling_sticky) {
    $data_sticky = "true";
    }
    global $wp_customize;
?>

<div class="menubar <?php if( is_user_logged_in() && !isset( $wp_customize ) ){ echo "login-user";} ?>" data-sticky="<?php echo esc_attr($data_sticky); ?>">
  	<div class="container right_menu">
  		<div class="row">
	    	<div class="menubox col-lg-11 col-md-10 col-8 align-self-center">
	      		<div class="innermenubox">
	      			<?php if(has_nav_menu('primary-menu')){ ?>
			          	<div class="toggle-nav mobile-menu">
	            			<button onclick="adventure_travelling_menu_open()" class="responsivetoggle"><i class="fas fa-bars"></i><span class="screen-reader-text"><?php esc_html_e('Open Button','adventure-travelling'); ?></span></button>
	          			</div>
          			<?php }?>
         	 		<div id="mySidenav" class="nav sidenav">
            			<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'adventure-travelling' ); ?>">
			              	<?php if(has_nav_menu('primary-menu')){
			                  	wp_nav_menu( array(
				                    'theme_location' => 'primary-menu',
				                    'container_class' => 'main-menu clearfix' ,
				                    'menu_class' => 'clearfix',
				                    'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
				                    'fallback_cb' => 'wp_page_menu',
			                  	) );
			              	} ?>
              				<a href="javascript:void(0)" class="closebtn mobile-menu" onclick="adventure_travelling_menu_close()"><i class="fas fa-times"></i><span class="screen-reader-text"><?php esc_html_e('Close Button','adventure-travelling'); ?></span></a>
	            		</nav>
	          		</div>
          			<div class="clearfix"></div>
        		</div>
	    	</div>
	    	<div class="search-box col-lg-1 col-md-1 col-4 align-self-center">
	    		<?php if(get_theme_mod('adventure_travelling_search_icon',true) != ''){ ?>
		        	<button class="search_btn"><i class="fas fa-search"></i></button>
		        <?php }?>
	      	</div>
	    </div>
	    <div class="search_outer">
	      	<div class="search_inner">
	        	<?php get_search_form(); ?>
	        </div>
      	</div>
  	</div>
</div>
