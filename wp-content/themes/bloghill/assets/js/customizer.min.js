/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

	const bloghill_section_lists = ['hero_banner_section','project_section','cta_section','testimonial_section','blog_post_section','slider_section','latest_product_section','popular_products_section','promotion_section','recent_products_section','featured_products_section','trending_products_section','counter_section','most_read_section','sponsor_section','service_section','team_section','music_gallery_section','about_section','playlist_section','upcomming_events_section'];
    bloghill_section_lists.forEach( bloghill_homepage_scroll_preview );

    function bloghill_homepage_scroll_preview(item, index) {
    	// Collect information from customize-controls.js about which panels are opening.
		wp.customize.bind( 'preview-ready', function() {
			
			// Initially hide the theme option placeholders on load.
			$( '.panel-placeholder' ).hide();
			//console.log('working');
			wp.customize.preview.bind( item, function( data ) {
				// Only on the front page.
				if ( ! $( 'body' ).hasClass( 'home' ) ) {
					return;
				}

				// When the section is expanded, show and scroll to the content placeholders, exposing the edit links.
				if ( true === data.expanded ) {
					$('html, body').animate({
				        'scrollTop' : $('#bloghill_'+item).position().top
				    });
				} 
			});

		});
 	}

	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-title a, .site-description' ).css( {
					'color': to
				} );
			}
		} );
	} );

	// Header title color.
	wp.customize( 'bloghill_theme_options[header_title_color]', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title a' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title a' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-title a' ).css( {
					'color': to
				} );
			}
		} );
	} );

	// Header tagline color.
	wp.customize( 'bloghill_theme_options[header_tagline_color]', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-description' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-description' ).css( {
					'color': to
				} );
			}
		} );
	} );

	// Color scheme.
	wp.customize( 'bloghill_theme_options[colorscheme]', function( value ) {
		value.bind( function( to ) {

			// Update color body class.
			$( 'body' )
				.removeClass( 'colors-light colors-dark colors-custom' )
				.addClass( 'colors-' + to );
		});
	});

	// Custom color hue.
	wp.customize( 'bloghill_theme_options[colorscheme_hue]', function( value ) {
		value.bind( function( to ) {

			// Update custom color CSS
			var style = $( '#custom-theme-colors' ),
			    color = style.data( 'color' ),
			    css = style.html();
			css = css.split( color ).join( to );
			style.html( css )
			     .data( 'color', to );
		} );
	} );

	//Real Time Partial Refresh
	
	wp.customize( 'bloghill_theme_options[top_bar_notice]', function( value ) {
		value.bind( function( to ) {
			$( '#top_navigation .top-navigation-content p' ).text( to );
		} );
	} );
	
	wp.customize( 'bloghill_theme_options[top_bar_email]', function( value ) {
		value.bind( function( to ) {
			$( '#top_navigation .contact-information a' ).text( to );
		} );
	} );
	
	wp.customize( 'bloghill_theme_options[topics_title]', function( value ) {
		value.bind( function( to ) {
			$( '#bloghill_trending_topics_section .section-title' ).text( to );
		} );
	} );
	
	wp.customize( 'bloghill_theme_options[stories_title]', function( value ) {
		value.bind( function( to ) {
			$( '#bloghill_top_stories_section h2.section-title' ).text( to );
		} );
	} );
	
	wp.customize( 'bloghill_theme_options[about_btn_text]', function( value ) {
		value.bind( function( to ) {
			$( '#bloghill_about_section .view-more a' ).text( to );
		} );
	} );
	
	wp.customize( 'bloghill_theme_options[recent_posts_title]', function( value ) {
		value.bind( function( to ) {
			$( '#bloghill_most_recent_posts_section .section-title' ).text( to );
		} );
	} );
	
	wp.customize( 'bloghill_theme_options[most_read_title]', function( value ) {
		value.bind( function( to ) {
			$( '#bloghill_most_read_section h2.section-title' ).text( to );
		} );
	} );
	
	wp.customize( 'bloghill_theme_options[subscription_title]', function( value ) {
		value.bind( function( to ) {
			$( '#bloghill_subscribe_now_section h2.section-title' ).text( to );
		} );
	} );
	
	wp.customize( 'bloghill_theme_options[subscription_description]', function( value ) {
		value.bind( function( to ) {
			$( '#bloghill_subscribe_now_section .subscribe-text p' ).text( to );
		} );
	} );
	
	wp.customize( 'bloghill_theme_options[copyright_text]', function( value ) {
		value.bind( function( to ) {
			$( '#colophon .site-info span.copyright' ).text( to );
		} );
	} );
	
	wp.customize( 'bloghill_theme_options[top_destination_title]', function( value ) {
		value.bind( function( to ) {
			$( '#bloghill_top_destination_section .section-title' ).text( to );
		} );
	} );
	
	wp.customize( 'bloghill_theme_options[top_destination_btn_label]', function( value ) {
		value.bind( function( to ) {
			$( '#bloghill_top_destination_section .read-more a' ).text( to );
		} );
	} );
	
	wp.customize( 'bloghill_theme_options[gallery_title]', function( value ) {
		value.bind( function( to ) {
			$( '#bloghill_music_gallery_section h2.section-title' ).text( to );
		} );
	} );
	
	wp.customize( 'bloghill_theme_options[gallery_btn_label]', function( value ) {
		value.bind( function( to ) {
			$( '#bloghill_music_gallery_section .btn' ).text( to );
		} );
	} );
	
	wp.customize( 'bloghill_theme_options[playlist_title]', function( value ) {
		value.bind( function( to ) {
			$( '#bloghill_playlist_section .section-title' ).text( to );
		} );
	} );
	
	wp.customize( 'bloghill_theme_options[upcomming_event_title]', function( value ) {
		value.bind( function( to ) {
			$( '#bloghill_music_event_section h2.section-title' ).text( to );
		} );
	} );
	
	wp.customize( 'bloghill_theme_options[upcomming_event_readmore]', function( value ) {
		value.bind( function( to ) {
			$( '#bloghill_music_event_section .buy-ticket a.btn' ).text( to );
		} );
	} );
	
	wp.customize( 'bloghill_theme_options[upcomming_event_btn_title]', function( value ) {
		value.bind( function( to ) {
			$( '#bloghill_music_event_section .read-more a.btn' ).text( to );
		} );
	} );
	
	wp.customize( 'bloghill_theme_options[team_title]', function( value ) {
		value.bind( function( to ) {
			$( '#bloghill_team_section h2.section-title' ).text( to );
		} );
	} );
	
	wp.customize( 'bloghill_theme_options[music_gallery_title]', function( value ) {
		value.bind( function( to ) {
			$( '#bloghill_music_gallery_section h2.section-title' ).text( to );
		} );
	} );
	
	wp.customize( 'bloghill_theme_options[blog_events_title]', function( value ) {
		value.bind( function( to ) {
			$( '#bloghill_blog_events_section .section-title' ).text( to );
		} );
	} );
	
	wp.customize( 'bloghill_theme_options[special_events_title]', function( value ) {
		value.bind( function( to ) {
			$( '#bloghill_special_events_section .section-title' ).text( to );
		} );
	} );
	
	wp.customize( 'bloghill_theme_options[service_title]', function( value ) {
		value.bind( function( to ) {
			$( '#bloghill_our_service_section .section-title' ).text( to );
		} );
	} );
	
	wp.customize( 'bloghill_theme_options[contact_section_title]', function( value ) {
		value.bind( function( to ) {
			$( '#bloghill_contact_section .section-title' ).text( to );
		} );
	} );
	
	wp.customize( 'bloghill_theme_options[contact_number]', function( value ) {
		value.bind( function( to ) {
			$( '#bloghill_contact_section span.phone' ).text( to );
		} );
	} );
	
	wp.customize( 'bloghill_theme_options[contact_email]', function( value ) {
		value.bind( function( to ) {
			$( '#bloghill_contact_section span.message' ).text( to );
		} );
	} );
	
	wp.customize( 'bloghill_theme_options[contact_address]', function( value ) {
		value.bind( function( to ) {
			$( '#bloghill_contact_section span.address' ).text( to );
		} );
	} );

} )( jQuery );