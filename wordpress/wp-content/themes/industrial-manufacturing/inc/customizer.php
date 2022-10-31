<?php
/**
 * Industrial Manufacturing Theme Customizer
 * @package Industrial Manufacturing
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function industrial_manufacturing_customize_register( $wp_customize ) {	

	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-selector.php' );

	class Industrial_Manufacturing_WP_Customize_Range_Control extends WP_Customize_Control{
	    public $type = 'custom_range';
	    public function enqueue(){
	        wp_enqueue_script(
	            'cs-range-control',
	            false,
	            true
	        );
	    }
	    public function render_content(){?>
	        <label>
	            <?php if ( ! empty( $this->label )) : ?>
	                <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
	            <?php endif; ?>
	            <div class="cs-range-value"><?php echo esc_html($this->value()); ?></div>
	            <input data-input-type="range" type="range" <?php $this->input_attrs(); ?> value="<?php echo esc_attr($this->value()); ?>" <?php $this->link(); ?> />
	            <?php if ( ! empty( $this->description )) : ?>
	                <span class="description customize-control-description"><?php echo esc_html($this->description); ?></span>
	            <?php endif; ?>
	        </label>
        <?php }
	}

	//add home page setting pannel
	$wp_customize->add_panel( 'industrial_manufacturing_panel_id', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Theme Settings', 'industrial-manufacturing' ),
		'description' => __( 'Description of what this panel does.', 'industrial-manufacturing' ),
	) );

	// font array
	$industrial_manufacturing_font_array = array(
		'' => 'No Fonts',
		'Abril Fatface' => 'Abril Fatface',
		'Acme' => 'Acme',
		'Anton' => 'Anton',
		'Architects Daughter' => 'Architects Daughter',
		'Arimo' => 'Arimo',
		'Arsenal' => 'Arsenal', 
		'Arvo' => 'Arvo',
		'Alegreya' => 'Alegreya',
		'Alfa Slab One' => 'Alfa Slab One',
		'Averia Serif Libre' => 'Averia Serif Libre',
		'Bangers' => 'Bangers', 
		'Boogaloo' => 'Boogaloo',
		'Bad Script' => 'Bad Script',
		'Bitter' => 'Bitter',
		'Bree Serif' => 'Bree Serif',
		'BenchNine' => 'BenchNine', 
		'Cabin' => 'Cabin', 
		'Cardo' => 'Cardo',
		'Courgette' => 'Courgette',
		'Cherry Swash' => 'Cherry Swash',
		'Cormorant Garamond' => 'Cormorant Garamond',
		'Crimson Text' => 'Crimson Text',
		'Cuprum' => 'Cuprum', 
		'Cookie' => 'Cookie', 
		'Chewy' => 'Chewy', 
		'Days One' => 'Days One', 
		'Dosis' => 'Dosis',
		'Droid Sans' => 'Droid Sans',
		'Economica' => 'Economica',
		'Fredoka One' => 'Fredoka One',
		'Fjalla One' => 'Fjalla One',
		'Francois One' => 'Francois One',
		'Frank Ruhl Libre' => 'Frank Ruhl Libre',
		'Gloria Hallelujah' => 'Gloria Hallelujah',
		'Great Vibes' => 'Great Vibes',
		'Handlee' => 'Handlee', 
		'Hammersmith One' => 'Hammersmith One',
		'Inconsolata' => 'Inconsolata', 
		'Indie Flower' => 'Indie Flower', 
		'IM Fell English SC' => 'IM Fell English SC', 
		'Julius Sans One' => 'Julius Sans One',
		'Josefin Slab' => 'Josefin Slab', 
		'Josefin Sans' => 'Josefin Sans', 
		'Kanit' => 'Kanit', 
		'Lobster' => 'Lobster', 
		'Lato' => 'Lato',
		'Lora' => 'Lora', 
		'Libre Baskerville' =>'Libre Baskerville',
		'Lobster Two' => 'Lobster Two',
		'Merriweather' =>'Merriweather', 
		'Monda' => 'Monda',
		'Montserrat' => 'Montserrat',
		'Muli' => 'Muli', 
		'Marck Script' => 'Marck Script',
		'Noto Serif' => 'Noto Serif',
		'Open Sans' => 'Open Sans', 
		'Overpass' => 'Overpass',
		'Overpass Mono' => 'Overpass Mono',
		'Oxygen' => 'Oxygen', 
		'Orbitron' => 'Orbitron', 
		'Patua One' => 'Patua One', 
		'Pacifico' => 'Pacifico',
		'Padauk' => 'Padauk', 
		'Playball' => 'Playball',
		'Playfair Display' => 'Playfair Display', 
		'PT Sans' => 'PT Sans',
		'Philosopher' => 'Philosopher',
		'Permanent Marker' => 'Permanent Marker',
		'Poiret One' => 'Poiret One', 
		'Quicksand' => 'Quicksand', 
		'Quattrocento Sans' => 'Quattrocento Sans', 
		'Raleway' => 'Raleway', 
		'Rubik' => 'Rubik', 
		'Rokkitt' => 'Rokkitt', 
		'Russo One' => 'Russo One', 
		'Righteous' => 'Righteous', 
		'Slabo' => 'Slabo', 
		'Source Sans Pro' => 'Source Sans Pro', 
		'Shadows Into Light Two' =>'Shadows Into Light Two', 
		'Shadows Into Light' => 'Shadows Into Light', 
		'Sacramento' => 'Sacramento', 
		'Shrikhand' => 'Shrikhand', 
		'Tangerine' => 'Tangerine',
		'Ubuntu' => 'Ubuntu', 
		'VT323' => 'VT323', 
		'Varela Round' => 'Varela Round', 
		'Vampiro One' => 'Vampiro One',
		'Vollkorn' => 'Vollkorn',
		'Volkhov' => 'Volkhov', 
		'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
   );

	//Typography
	$wp_customize->add_section( 'industrial_manufacturing_typography', array(
    	'title' => __( 'Typography', 'industrial-manufacturing' ),
		'priority'   => 30,
		'panel' => 'industrial_manufacturing_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'industrial_manufacturing_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'industrial_manufacturing_paragraph_color', array(
		'label' => __('Paragraph Color', 'industrial-manufacturing'),
		'section' => 'industrial_manufacturing_typography',
		'settings' => 'industrial_manufacturing_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('industrial_manufacturing_paragraph_font_family',array(
	  	'default' => '',
	  	'capability' => 'edit_theme_options',
	  	'sanitize_callback' => 'industrial_manufacturing_sanitize_choices'
	));
	$wp_customize->add_control(
	   'industrial_manufacturing_paragraph_font_family', array(
	   'section'  => 'industrial_manufacturing_typography',
	   'label'    => __( 'Paragraph Fonts','industrial-manufacturing'),
	   'type'     => 'select',
	   'choices'  => $industrial_manufacturing_font_array,
	));

	$wp_customize->add_setting('industrial_manufacturing_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('industrial_manufacturing_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','industrial-manufacturing'),
		'section'	=> 'industrial_manufacturing_typography',
		'setting'	=> 'industrial_manufacturing_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'industrial_manufacturing_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'industrial_manufacturing_atag_color', array(
		'label' => __('"a" Tag Color', 'industrial-manufacturing'),
		'section' => 'industrial_manufacturing_typography',
		'settings' => 'industrial_manufacturing_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('industrial_manufacturing_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'industrial_manufacturing_sanitize_choices'
	));
	$wp_customize->add_control(
	   'industrial_manufacturing_atag_font_family', array(
	   'section'  => 'industrial_manufacturing_typography',
	   'label'    => __( '"a" Tag Fonts','industrial-manufacturing'),
	   'type'     => 'select',
	   'choices'  => $industrial_manufacturing_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'industrial_manufacturing_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'industrial_manufacturing_li_color', array(
		'label' => __('"li" Tag Color', 'industrial-manufacturing'),
		'section' => 'industrial_manufacturing_typography',
		'settings' => 'industrial_manufacturing_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('industrial_manufacturing_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'industrial_manufacturing_sanitize_choices'
	));
	$wp_customize->add_control(
	   'industrial_manufacturing_li_font_family', array(
	   'section'  => 'industrial_manufacturing_typography',
	   'label'    => __( '"li" Tag Fonts','industrial-manufacturing'),
	   'type'     => 'select',
	   'choices'  => $industrial_manufacturing_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'industrial_manufacturing_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'industrial_manufacturing_h1_color', array(
		'label' => __('H1 Color', 'industrial-manufacturing'),
		'section' => 'industrial_manufacturing_typography',
		'settings' => 'industrial_manufacturing_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('industrial_manufacturing_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'industrial_manufacturing_sanitize_choices'
	));
	$wp_customize->add_control(
	   'industrial_manufacturing_h1_font_family', array(
	   'section'  => 'industrial_manufacturing_typography',
	   'label'    => __( 'H1 Fonts','industrial-manufacturing'),
	   'type'     => 'select',
	   'choices'  => $industrial_manufacturing_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('industrial_manufacturing_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('industrial_manufacturing_h1_font_size',array(
		'label'	=> __('H1 Font Size','industrial-manufacturing'),
		'section'	=> 'industrial_manufacturing_typography',
		'setting'	=> 'industrial_manufacturing_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'industrial_manufacturing_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'industrial_manufacturing_h2_color', array(
		'label' => __('h2 Color', 'industrial-manufacturing'),
		'section' => 'industrial_manufacturing_typography',
		'settings' => 'industrial_manufacturing_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('industrial_manufacturing_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'industrial_manufacturing_sanitize_choices'
	));
	$wp_customize->add_control(
	   'industrial_manufacturing_h2_font_family', array(
	   'section'  => 'industrial_manufacturing_typography',
	   'label'    => __( 'h2 Fonts','industrial-manufacturing'),
	   'type'     => 'select',
	   'choices'  => $industrial_manufacturing_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('industrial_manufacturing_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('industrial_manufacturing_h2_font_size',array(
		'label'	=> __('h2 Font Size','industrial-manufacturing'),
		'section'	=> 'industrial_manufacturing_typography',
		'setting'	=> 'industrial_manufacturing_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'industrial_manufacturing_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'industrial_manufacturing_h3_color', array(
		'label' => __('h3 Color', 'industrial-manufacturing'),
		'section' => 'industrial_manufacturing_typography',
		'settings' => 'industrial_manufacturing_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('industrial_manufacturing_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'industrial_manufacturing_sanitize_choices'
	));
	$wp_customize->add_control(
	   'industrial_manufacturing_h3_font_family', array(
	   'section'  => 'industrial_manufacturing_typography',
	   'label'    => __( 'h3 Fonts','industrial-manufacturing'),
	   'type'     => 'select',
	   'choices'  => $industrial_manufacturing_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('industrial_manufacturing_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('industrial_manufacturing_h3_font_size',array(
		'label'	=> __('h3 Font Size','industrial-manufacturing'),
		'section'	=> 'industrial_manufacturing_typography',
		'setting'	=> 'industrial_manufacturing_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'industrial_manufacturing_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'industrial_manufacturing_h4_color', array(
		'label' => __('h4 Color', 'industrial-manufacturing'),
		'section' => 'industrial_manufacturing_typography',
		'settings' => 'industrial_manufacturing_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('industrial_manufacturing_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'industrial_manufacturing_sanitize_choices'
	));
	$wp_customize->add_control(
	   'industrial_manufacturing_h4_font_family', array(
	   'section'  => 'industrial_manufacturing_typography',
	   'label'    => __( 'h4 Fonts','industrial-manufacturing'),
	   'type'     => 'select',
	   'choices'  => $industrial_manufacturing_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('industrial_manufacturing_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('industrial_manufacturing_h4_font_size',array(
		'label'	=> __('h4 Font Size','industrial-manufacturing'),
		'section'	=> 'industrial_manufacturing_typography',
		'setting'	=> 'industrial_manufacturing_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'industrial_manufacturing_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'industrial_manufacturing_h5_color', array(
		'label' => __('h5 Color', 'industrial-manufacturing'),
		'section' => 'industrial_manufacturing_typography',
		'settings' => 'industrial_manufacturing_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('industrial_manufacturing_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'industrial_manufacturing_sanitize_choices'
	));
	$wp_customize->add_control(
	   'industrial_manufacturing_h5_font_family', array(
	   'section'  => 'industrial_manufacturing_typography',
	   'label'    => __( 'h5 Fonts','industrial-manufacturing'),
	   'type'     => 'select',
	   'choices'  => $industrial_manufacturing_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('industrial_manufacturing_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('industrial_manufacturing_h5_font_size',array(
		'label'	=> __('h5 Font Size','industrial-manufacturing'),
		'section'	=> 'industrial_manufacturing_typography',
		'setting'	=> 'industrial_manufacturing_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'industrial_manufacturing_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'industrial_manufacturing_h6_color', array(
		'label' => __('h6 Color', 'industrial-manufacturing'),
		'section' => 'industrial_manufacturing_typography',
		'settings' => 'industrial_manufacturing_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('industrial_manufacturing_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'industrial_manufacturing_sanitize_choices'
	));
	$wp_customize->add_control(
	   'industrial_manufacturing_h6_font_family', array(
	   'section'  => 'industrial_manufacturing_typography',
	   'label'    => __( 'h6 Fonts','industrial-manufacturing'),
	   'type'     => 'select',
	   'choices'  => $industrial_manufacturing_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('industrial_manufacturing_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('industrial_manufacturing_h6_font_size',array(
		'label'	=> __('h6 Font Size','industrial-manufacturing'),
		'section'	=> 'industrial_manufacturing_typography',
		'setting'	=> 'industrial_manufacturing_h6_font_size',
		'type'	=> 'text'
	));

	//Topbar section
	$wp_customize->add_section('industrial_manufacturing_topbar_icon',array(
		'title'	=> __('Topbar Section','industrial-manufacturing'),
		'description'	=> __('Add Header Content here','industrial-manufacturing'),
		'priority'	=> null,
		'panel' => 'industrial_manufacturing_panel_id',
	));

	$wp_customize->add_setting('industrial_manufacturing_top_header',array(
      'default' => false,
      'sanitize_callback'	=> 'industrial_manufacturing_sanitize_checkbox'
   ));
   $wp_customize->add_control('industrial_manufacturing_top_header',array(
      'type' => 'checkbox',
      'label' => __('Enable Top Header','industrial-manufacturing'),
      'section' => 'industrial_manufacturing_topbar_icon'
   ));

   $wp_customize->add_setting('industrial_manufacturing_topbar_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('industrial_manufacturing_topbar_padding',array(
		'label'	=> esc_html__('Topbar Padding','industrial-manufacturing'),
		'section'=> 'industrial_manufacturing_topbar_icon',
	));

   $wp_customize->add_setting('industrial_manufacturing_top_topbar_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'industrial_manufacturing_sanitize_float'
	));
	$wp_customize->add_control('industrial_manufacturing_top_topbar_padding',array(
		'description'	=> __('Top','industrial-manufacturing'),
		'input_attrs' => array(
         'step' => 1,
			'min' => 0,
			'max' => 50,
      ),
		'section'=> 'industrial_manufacturing_topbar_icon',
		'type'=> 'number',
	));

	$wp_customize->add_setting('industrial_manufacturing_bottom_topbar_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'industrial_manufacturing_sanitize_float'
	));
	$wp_customize->add_control('industrial_manufacturing_bottom_topbar_padding',array(
		'description'	=> __('Bottom','industrial-manufacturing'),
		'input_attrs' => array(
         'step' => 1,
			'min' => 0,
			'max' => 50,
      ),
		'section'=> 'industrial_manufacturing_topbar_icon',
		'type'=> 'number',
	));

   $wp_customize->add_setting('industrial_manufacturing_sticky_header',array(
      'default' => '',
      'sanitize_callback'	=> 'industrial_manufacturing_sanitize_checkbox'
  	));
	$wp_customize->add_control('industrial_manufacturing_sticky_header',array(
		'type' => 'checkbox',
		'label' => __('Stick header on Desktop','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_topbar_icon'
	));

 	$wp_customize->add_setting('industrial_manufacturing_sticky_header_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('industrial_manufacturing_sticky_header_padding',array(
		'label'	=> esc_html__('Sticky Header Padding','industrial-manufacturing'),
		'section'=> 'industrial_manufacturing_topbar_icon',
		'type' => 'hidden',
	));

 	$wp_customize->add_setting('industrial_manufacturing_top_sticky_header_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'industrial_manufacturing_sanitize_float'
	));
	$wp_customize->add_control('industrial_manufacturing_top_sticky_header_padding',array(
		'description'	=> __('Top','industrial-manufacturing'),
		'input_attrs' => array(
         'step' => 1,
			'min' => 0,
			'max' => 50,
     	),
		'section'=> 'industrial_manufacturing_topbar_icon',
		'type'=> 'number'
	));

	$wp_customize->add_setting('industrial_manufacturing_bottom_sticky_header_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'industrial_manufacturing_sanitize_float'
	));
	$wp_customize->add_control('industrial_manufacturing_bottom_sticky_header_padding',array(
		'description'	=> __('Bottom','industrial-manufacturing'),
		'input_attrs' => array(
         'step' => 1,
			'min' => 0,
			'max' => 50,
     	),
		'section'=> 'industrial_manufacturing_topbar_icon',
		'type'=> 'number'
	));

	$wp_customize->add_setting('industrial_manufacturing_call',array(
		'default'	=> '',
		'sanitize_callback'	=> 'industrial_manufacturing_sanitize_phone_number'
	));
	$wp_customize->add_control('industrial_manufacturing_call',array(
		'label'	=> __('Add Phone No.','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_topbar_icon',
		'setting' => 'industrial_manufacturing_call',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('industrial_manufacturing_mail_address',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_email'
	));
	$wp_customize->add_control('industrial_manufacturing_mail_address',array(
		'label'	=> __('Add Email Address','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_topbar_icon',
		'setting' => 'industrial_manufacturing_mail_address',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('industrial_manufacturing_timing',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('industrial_manufacturing_timing',array(
		'label'	=> __('Add Timing','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_topbar_icon',
		'setting' => 'industrial_manufacturing_timing',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('industrial_manufacturing_career_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('industrial_manufacturing_career_text',array(
		'label'	=> __('Add Career Text','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_topbar_icon',
		'setting' => 'industrial_manufacturing_career_text',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('industrial_manufacturing_career_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('industrial_manufacturing_career_url',array(
		'label'	=> __('Add Career URL','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_topbar_icon',
		'setting' => 'industrial_manufacturing_career_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('industrial_manufacturing_faq_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('industrial_manufacturing_faq_text',array(
		'label'	=> __('Add FAQ Text','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_topbar_icon',
		'setting' => 'industrial_manufacturing_faq_text',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('industrial_manufacturing_faq_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('industrial_manufacturing_faq_url',array(
		'label'	=> __('Add FAQ URL','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_topbar_icon',
		'setting' => 'industrial_manufacturing_faq_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('industrial_manufacturing_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('industrial_manufacturing_facebook_url',array(
		'label'	=> __('Add Facebook URL','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_topbar_icon',
		'setting' => 'industrial_manufacturing_facebook_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('industrial_manufacturing_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('industrial_manufacturing_twitter_url',array(
		'label'	=> __('Add Twitter URL','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_topbar_icon',
		'setting' => 'industrial_manufacturing_twitter_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('industrial_manufacturing_instagram_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('industrial_manufacturing_instagram_url',array(
		'label'	=> __('Add Instagram URL','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_topbar_icon',
		'setting' => 'industrial_manufacturing_instagram_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('industrial_manufacturing_pinterest_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('industrial_manufacturing_pinterest_url',array(
		'label'	=> __('Add Pinterest URL','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_topbar_icon',
		'setting' => 'industrial_manufacturing_pinterest_url',
		'type'	=> 'url'
	));

	// Header
	$wp_customize->add_section('industrial_manufacturing_header',array(
		'title'	=> __('Header','industrial-manufacturing'),
		'priority' => null,
		'panel' => 'industrial_manufacturing_panel_id',
	));

	$wp_customize->add_setting( 'industrial_manufacturing_menu_font_size', array(
		'default'=> '13',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Industrial_Manufacturing_WP_Customize_Range_Control( $wp_customize, 'industrial_manufacturing_menu_font_size', array(
		'label'  => __('Menu Font Size','industrial-manufacturing'),
		'section'  => 'industrial_manufacturing_header',
		'description' => __('Measurement is in pixel.','industrial-manufacturing'),
		'input_attrs' => array(
		   'min' => 0,
		   'max' => 50,
		)
    )));

 	$wp_customize->add_setting('industrial_manufacturing_menu_font_weight',array(
		'default' => '',
		'sanitize_callback' => 'industrial_manufacturing_sanitize_choices'
	));
	$wp_customize->add_control('industrial_manufacturing_menu_font_weight',array(
		'type' => 'select',
		'label' => __('Menu Font Weight','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_header',
		'choices' => array(
		   '100' => __('100','industrial-manufacturing'),
		   '200' => __('200','industrial-manufacturing'),
		   '300' => __('300','industrial-manufacturing'),
		   '400' => __('400','industrial-manufacturing'),
		   '500' => __('500','industrial-manufacturing'),
		   '600' => __('600','industrial-manufacturing'),
		   '700' => __('700','industrial-manufacturing'),
		   '800' => __('800','industrial-manufacturing'),
		   '900' => __('900','industrial-manufacturing'),
		),
	) );

	$wp_customize->add_setting('industrial_manufacturing_header_button_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('industrial_manufacturing_header_button_text',array(
		'label'	=> __('Add Button Text','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_header',
		'setting' => 'industrial_manufacturing_header_button_text',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('industrial_manufacturing_header_button_link',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('industrial_manufacturing_header_button_link',array(
		'label'	=> __('Add Button Link','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_header',
		'setting' => 'industrial_manufacturing_topbar_button_link',
		'type'	=> 'url'
	));

	//Slider section
  	$wp_customize->add_section('industrial_manufacturing_slider',array(
		'title' => __('Slider Section','industrial-manufacturing'),
		'description' => '',
		'priority'  => null,
		'panel' => 'industrial_manufacturing_panel_id',
	)); 

	$wp_customize->add_setting('industrial_manufacturing_show_slider',array(
		'default' => false,
		'sanitize_callback'	=> 'industrial_manufacturing_sanitize_checkbox'
	));
	$wp_customize->add_control('industrial_manufacturing_show_slider',array(
     	'type' => 'checkbox',
	   	'label' => __('Show / Hide Slider','industrial-manufacturing'),
	   	'section' => 'industrial_manufacturing_slider'
	));

	$wp_customize->add_setting('industrial_manufacturing_slider_title',array(
     'default' => true,
     'sanitize_callback'	=> 'industrial_manufacturing_sanitize_checkbox'
	));
	$wp_customize->add_control('industrial_manufacturing_slider_title',array(
     	'type' => 'checkbox',
	   	'label' => __('Show / Hide Slider Title','industrial-manufacturing'),
	   	'section' => 'industrial_manufacturing_slider'
	));

	$wp_customize->add_setting('industrial_manufacturing_slider_content',array(
		'default' => true,
		'sanitize_callback'	=> 'industrial_manufacturing_sanitize_checkbox'
	));
	$wp_customize->add_control('industrial_manufacturing_slider_content',array(
     	'type' => 'checkbox',
	   	'label' => __('Show / Hide Slider Content','industrial-manufacturing'),
	   	'section' => 'industrial_manufacturing_slider'
	));

	$wp_customize->add_setting('industrial_manufacturing_slider_button',array(
		'default' => true,
		'sanitize_callback'	=> 'industrial_manufacturing_sanitize_checkbox'
	));
	$wp_customize->add_control('industrial_manufacturing_slider_button',array(
     	'type' => 'checkbox',
	   	'label' => __('Show / Hide Slider Button','industrial-manufacturing'),
	   	'section' => 'industrial_manufacturing_slider'
	));

	for ( $count = 1; $count <= 4; $count++ ) {
		$wp_customize->add_setting( 'industrial_manufacturing_slidersettings_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'industrial_manufacturing_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'industrial_manufacturing_slidersettings_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'industrial-manufacturing' ),
			'section'  => 'industrial_manufacturing_slider',
			'type'     => 'dropdown-pages'
		) 	);
	}

	for ( $i = 1; $i <= 3; $i++ ) {
		$wp_customize->add_setting( 'industrial_manufacturing_slider_list_text' . $i, array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field'
		) );
		$wp_customize->add_control( 'industrial_manufacturing_slider_list_text' . $i, array(
			'label'    => __( 'Add List Text', 'industrial-manufacturing' ) . $i,
			'section'  => 'industrial_manufacturing_slider',
			'type'     => 'text'
		) 	);
	}

	$wp_customize->add_setting('industrial_manufacturing_content_position',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('industrial_manufacturing_content_position',array(
		'label'	=> esc_html__('Slider Content Position','industrial-manufacturing'),
		'section'=> 'industrial_manufacturing_slider',
	));

	$wp_customize->add_setting( 'industrial_manufacturing_slider_top_position', array(
		'default'  => '',
		'sanitize_callback'	=> 'industrial_manufacturing_sanitize_float'
	) );
	$wp_customize->add_control( 'industrial_manufacturing_slider_top_position', array(
		'label' => esc_html__( 'Top','industrial-manufacturing' ),
		'section' => 'industrial_manufacturing_slider',
		'type'  => 'number',
		'input_attrs' => array(
			'step' => 1,
			'min' => 0,
			'max' => 100,
		),
	) );

	$wp_customize->add_setting( 'industrial_manufacturing_slider_bottom_position', array(
		'default'  => '',
		'sanitize_callback'	=> 'industrial_manufacturing_sanitize_float'
	) );
	$wp_customize->add_control( 'industrial_manufacturing_slider_bottom_position', array(
		'label' => esc_html__( 'Bottom','industrial-manufacturing' ),
		'section' => 'industrial_manufacturing_slider',
		'type'  => 'number',
		'input_attrs' => array(
			'step' => 1,
			'min' => 0,
			'max' => 100,
		),
	) );

	$wp_customize->add_setting( 'industrial_manufacturing_slider_left_position', array(
		'default'  => '',
		'sanitize_callback'	=> 'industrial_manufacturing_sanitize_float'
	) );
	$wp_customize->add_control( 'industrial_manufacturing_slider_left_position', array(
		'label' => esc_html__( 'Left','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_slider',
		'type'  => 'number',
		'input_attrs' => array(
			'step' => 1,
			'min' => 0,
			'max' => 100,
		),
	) );

	$wp_customize->add_setting( 'industrial_manufacturing_slider_right_position', array(
		'default'  => '',
		'sanitize_callback'	=> 'industrial_manufacturing_sanitize_float'
	) );
	$wp_customize->add_control( 'industrial_manufacturing_slider_right_position', array(
		'label' => esc_html__('Right','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_slider',
		'type'  => 'number',
		'input_attrs' => array(
			'step' => 1,
			'min' => 0,
			'max' => 100,
		),
	) );

	$wp_customize->add_setting( 'industrial_manufacturing_slider_button_label', array(
		'default' => __('Read More','industrial-manufacturing'),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'industrial_manufacturing_slider_button_label', array(
		'label' => esc_html__( 'Slider Button Label','industrial-manufacturing' ),
		'section' => 'industrial_manufacturing_slider',
		'type'    => 'text',
		'settings'    => 'industrial_manufacturing_slider_button_label'
	) );

	//Services Section
	$wp_customize->add_section('industrial_manufacturing_about_section',array(
		'title'	=> __('About Section','industrial-manufacturing'),
		'description'	=> __('Add about sections below.','industrial-manufacturing'),
		'panel' => 'industrial_manufacturing_panel_id',
	));

	$wp_customize->add_setting('industrial_manufacturing_small_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('industrial_manufacturing_small_title',array(
		'label'	=> __('Section Small Title','industrial-manufacturing'),
		'section'	=> 'industrial_manufacturing_about_section',
		'type'		=> 'text'
	));

	$wp_customize->add_setting( 'industrial_manufacturing_about_page', array(
		'default'           => '',
		'sanitize_callback' => 'industrial_manufacturing_sanitize_dropdown_pages'
	) );
	$wp_customize->add_control( 'industrial_manufacturing_about_page', array(
		'label'    => __( 'Select About Page', 'industrial-manufacturing' ),
		'section'  => 'industrial_manufacturing_about_section',
		'type'     => 'dropdown-pages'
	) );

	$wp_customize->add_setting('industrial_manufacturing_experince_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('industrial_manufacturing_experince_text',array(
		'label'	=> __('Experience Text','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_about_section',
		'type'	  => 'text'
	));

	//layout setting
	$wp_customize->add_section( 'industrial_manufacturing_theme_layout', array(
    	'title' => __( 'Blog Settings', 'industrial-manufacturing' ),   
		'priority' => null,
		'panel' => 'industrial_manufacturing_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('industrial_manufacturing_layout',array(
		'default' => 'Right Sidebar',
		'sanitize_callback' => 'industrial_manufacturing_sanitize_choices'
	) );
	$wp_customize->add_control(new Industrial_Manufacturing_Image_Radio_Control($wp_customize, 'industrial_manufacturing_layout', array(
		'type' => 'radio',
		'label' => esc_html__('Select Sidebar layout', 'industrial-manufacturing'),
		'section' => 'industrial_manufacturing_theme_layout',
		'settings' => 'industrial_manufacturing_layout',
		'choices' => array(
		   'Right Sidebar' => esc_url(get_template_directory_uri()) . '/images/layout3.png',
		   'Left Sidebar' => esc_url(get_template_directory_uri()) . '/images/layout2.png',
		   'One Column' => esc_url(get_template_directory_uri()) . '/images/layout1.png',
		   'Three Columns' => esc_url(get_template_directory_uri()) . '/images/layout4.png',
		   'Four Columns' => esc_url(get_template_directory_uri()) . '/images/layout5.png',
		   'Grid Layout' => esc_url(get_template_directory_uri()) . '/images/layout6.png'
	))));

	$wp_customize->add_setting('industrial_manufacturing_blog_post_display_type',array(
		'default' => 'blocks',
		'sanitize_callback' => 'industrial_manufacturing_sanitize_choices'
	));
	$wp_customize->add_control('industrial_manufacturing_blog_post_display_type', array(
		'type' => 'select',
		'label' => __( 'Blog Page Display Type', 'industrial-manufacturing' ),
		'section' => 'industrial_manufacturing_theme_layout',
		'choices' => array(
		   'blocks' => __('Blocks','industrial-manufacturing'),
		   'without blocks' => __('Without Blocks','industrial-manufacturing'),
		),
    ));

	$wp_customize->add_setting('industrial_manufacturing_metafields_date',array(
		'default' => 'true',
		'sanitize_callback'	=> 'industrial_manufacturing_sanitize_checkbox'
	));
	$wp_customize->add_control('industrial_manufacturing_metafields_date',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Date ','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_theme_layout'
	));

	$wp_customize->add_setting('industrial_manufacturing_metafields_author',array(
		'default' => 'true',
		'sanitize_callback'	=> 'industrial_manufacturing_sanitize_checkbox'
	));
	$wp_customize->add_control('industrial_manufacturing_metafields_author',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Author','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_theme_layout'
	));

	$wp_customize->add_setting('industrial_manufacturing_metafields_comment',array(
		'default' => 'true',
		'sanitize_callback'	=> 'industrial_manufacturing_sanitize_checkbox'
	));
	$wp_customize->add_control('industrial_manufacturing_metafields_comment',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Comments','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_theme_layout'
	));

	$wp_customize->add_setting('industrial_manufacturing_metafields_time',array(
		'default' => 'true',
		'sanitize_callback'	=> 'industrial_manufacturing_sanitize_checkbox'
	));
	$wp_customize->add_control('industrial_manufacturing_metafields_time',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Time','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_theme_layout'
	));

	$wp_customize->add_setting('industrial_manufacturing_featured_image',array(
       'default' => 'true',
       'sanitize_callback'	=> 'industrial_manufacturing_sanitize_checkbox'
    ));
    $wp_customize->add_control('industrial_manufacturing_featured_image',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Featured Image','industrial-manufacturing'),
       'section' => 'industrial_manufacturing_theme_layout'
    ));

	$wp_customize->add_setting('industrial_manufacturing_post_navigation',array(
		'default' => 'true',
		'sanitize_callback' => 'industrial_manufacturing_sanitize_checkbox'
	));
	$wp_customize->add_control('industrial_manufacturing_post_navigation',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Post Navigation','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_theme_layout'
	));

 	$wp_customize->add_setting('industrial_manufacturing_blog_post_content',array(
    	'default' => 'Excerpt Content',
     	'sanitize_callback' => 'industrial_manufacturing_sanitize_choices'
	));
	$wp_customize->add_control('industrial_manufacturing_blog_post_content',array(
		'type' => 'radio',
		'label' => __('Blog Post Content Type','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_theme_layout',
		'choices' => array(
		   'No Content' => __('No Content','industrial-manufacturing'),
		   'Full Content' => __('Full Content','industrial-manufacturing'),
		   'Excerpt Content' => __('Excerpt Content','industrial-manufacturing'),
		),
	) );

 	$wp_customize->add_setting( 'industrial_manufacturing_post_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'	=> 'industrial_manufacturing_sanitize_float'
	) );
	$wp_customize->add_control( 'industrial_manufacturing_post_excerpt_number', array(
		'label' => esc_html__( 'Blog Post Excerpt Number (Max 50)','industrial-manufacturing' ),
		'section' => 'industrial_manufacturing_theme_layout',
		'type'    => 'number',
		'settings' => 'industrial_manufacturing_post_excerpt_number',
		'input_attrs' => array(
			'step'  => 1,
			'min'   => 0,
			'max'   => 50,
		),
		'active_callback' => 'industrial_manufacturing_excerpt_enabled'
	) );

	$wp_customize->add_setting( 'industrial_manufacturing_button_excerpt_suffix', array(
		'default'   => '...',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'industrial_manufacturing_button_excerpt_suffix', array(
		'label'       => esc_html__( 'Post Excerpt Suffix','industrial-manufacturing' ),
		'section'     => 'industrial_manufacturing_theme_layout',
		'type'        => 'text',
		'settings'    => 'industrial_manufacturing_button_excerpt_suffix',
		'active_callback' => 'industrial_manufacturing_excerpt_enabled'
	) );

	//Featured Image
	$wp_customize->add_setting('industrial_manufacturing_blog_image_dimension',array(
       'default' => 'default',
       'sanitize_callback'	=> 'industrial_manufacturing_sanitize_choices'
    ));
    $wp_customize->add_control('industrial_manufacturing_blog_image_dimension',array(
       'type' => 'radio',
       'label'	=> __('Blog Post Featured Image Dimension','industrial-manufacturing'),
       'choices' => array(
            'default' => __('Default','industrial-manufacturing'),
            'custom' => __('Custom Image Size','industrial-manufacturing'),
        ),
      	'section'	=> 'industrial_manufacturing_theme_layout',
    ));

    $wp_customize->add_setting( 'industrial_manufacturing_feature_image_custom_width', array(
		'default'=> '250',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Industrial_Manufacturing_WP_Customize_Range_Control( $wp_customize, 'industrial_manufacturing_feature_image_custom_width', array(
        'label'  => __('Featured Image Custom Width','industrial-manufacturing'),
        'section'  => 'industrial_manufacturing_theme_layout',
        'description' => __('Measurement is in pixel.','industrial-manufacturing'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 400,
        ),
		'active_callback' => 'industrial_manufacturing_blog_image_dimension'
    )));

    $wp_customize->add_setting( 'industrial_manufacturing_feature_image_custom_height', array(
		'default'=> '250',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Industrial_Manufacturing_WP_Customize_Range_Control( $wp_customize, 'industrial_manufacturing_feature_image_custom_height', array(
        'label'  => __('Featured Image Custom Height','industrial-manufacturing'),
        'section'  => 'industrial_manufacturing_theme_layout',
        'description' => __('Measurement is in pixel.','industrial-manufacturing'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 400,
        ),
		'active_callback' => 'industrial_manufacturing_blog_image_dimension'
    )));

	$wp_customize->add_setting( 'industrial_manufacturing_feature_image_border_radius', array(
		'default'=> '0',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Industrial_Manufacturing_WP_Customize_Range_Control( $wp_customize, 'industrial_manufacturing_feature_image_border_radius', array(
        'label'  => __('Featured Image Border Radius','industrial-manufacturing'),
        'section'  => 'industrial_manufacturing_theme_layout',
        'description' => __('Measurement is in pixel.','industrial-manufacturing'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        ),
    )));

	$wp_customize->add_setting( 'industrial_manufacturing_feature_image_border_radius', array(
		'default'=> '0',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Industrial_Manufacturing_WP_Customize_Range_Control( $wp_customize, 'industrial_manufacturing_feature_image_border_radius', array(
     	'label'  => __('Featured Image Border Radius','industrial-manufacturing'),
     	'section'  => 'industrial_manufacturing_theme_layout',
     	'description' => __('Measurement is in pixel.','industrial-manufacturing'),
     	'input_attrs' => array(
         'min' => 0,
         'max' => 50,
     	),
 	)));

 	$wp_customize->add_setting( 'industrial_manufacturing_feature_image_shadow', array(
		'default'=> '0',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Industrial_Manufacturing_WP_Customize_Range_Control( $wp_customize, 'industrial_manufacturing_feature_image_shadow', array(
		'label'  => __('Featured Image Shadow','industrial-manufacturing'),
		'section'  => 'industrial_manufacturing_theme_layout',
		'description' => __('Measurement is in pixel.','industrial-manufacturing'),
		'input_attrs' => array(
		   'min' => 0,
		   'max' => 50,
		),
    )));

	$wp_customize->add_setting( 'industrial_manufacturing_pagination_type', array(
		'default'			=> 'page-numbers',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control( 'industrial_manufacturing_pagination_type', array(
		'section' => 'industrial_manufacturing_theme_layout',
		'type' => 'select',
		'label' => __( 'Blog Pagination Style', 'industrial-manufacturing' ),
		'choices' => array(
		   'page-numbers' => __('Number', 'industrial-manufacturing' ),
	   	'next-prev' => __('Next/Prev', 'industrial-manufacturing' ),
	)));

	$wp_customize->add_setting('industrial_manufacturing_blog_nav_position',array(
		'default' => 'bottom',
		'sanitize_callback' => 'industrial_manufacturing_sanitize_choices'
	));
	$wp_customize->add_control('industrial_manufacturing_blog_nav_position', array(
		'type' => 'select',
		'label' => __( 'Blog Post Navigation Position', 'industrial-manufacturing' ),
		'section' => 'industrial_manufacturing_theme_layout',
		'choices' => array(
		   'top' => __('Top','industrial-manufacturing'),
		   'bottom' => __('Bottom','industrial-manufacturing'),
		   'both' => __('Both','industrial-manufacturing')
		),
 	));

	$wp_customize->add_section( 'industrial_manufacturing_single_post_settings', array(
		'title' => __( 'Single Post Options', 'industrial-manufacturing' ),
		'panel' => 'industrial_manufacturing_panel_id',
	));

	$wp_customize->add_setting('industrial_manufacturing_single_post_breadcrumb',array(
		'default' => 'true',
		'sanitize_callback' => 'industrial_manufacturing_sanitize_checkbox'
	));
	$wp_customize->add_control('industrial_manufacturing_single_post_breadcrumb',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Single Post Breadcrumb','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_single_post_settings'
	));

	$wp_customize->add_setting('industrial_manufacturing_single_post_date',array(
		'default' => 'true',
		'sanitize_callback'	=> 'industrial_manufacturing_sanitize_checkbox'
	));
	$wp_customize->add_control('industrial_manufacturing_single_post_date',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Single Post Date','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_single_post_settings'
	));

	$wp_customize->add_setting('industrial_manufacturing_single_post_author',array(
		'default' => 'true',
		'sanitize_callback'	=> 'industrial_manufacturing_sanitize_checkbox'
	));
	$wp_customize->add_control('industrial_manufacturing_single_post_author',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Single Post Author','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_single_post_settings'
	));

	$wp_customize->add_setting('industrial_manufacturing_single_post_comment_no',array(
		'default' => 'true',
		'sanitize_callback'	=> 'industrial_manufacturing_sanitize_checkbox'
	));
	$wp_customize->add_control('industrial_manufacturing_single_post_comment_no',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Single Post Comment Number','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_single_post_settings'
	));

	$wp_customize->add_setting('industrial_manufacturing_single_post_time',array(
       'default' => 'true',
       'sanitize_callback'	=> 'industrial_manufacturing_sanitize_checkbox'
    ));
    $wp_customize->add_control('industrial_manufacturing_single_post_time',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Time','industrial-manufacturing'),
       'section' => 'industrial_manufacturing_single_post_settings'
    ));

	$wp_customize->add_setting('industrial_manufacturing_metafields_tags',array(
		'default' => 'true',
		'sanitize_callback'	=> 'industrial_manufacturing_sanitize_checkbox'
	));
	$wp_customize->add_control('industrial_manufacturing_metafields_tags',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Single Post Tags','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_single_post_settings'
	));

	$wp_customize->add_setting('industrial_manufacturing_single_post_image',array(
		'default' => 'true',
		'sanitize_callback'	=> 'industrial_manufacturing_sanitize_checkbox'
	));
	$wp_customize->add_control('industrial_manufacturing_single_post_image',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Single Post Featured Image','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_single_post_settings'
	));

	$wp_customize->add_setting( 'industrial_manufacturing_post_featured_image', array(
		'default' => 'in-content',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control( 'industrial_manufacturing_post_featured_image', array(
		'section' => 'industrial_manufacturing_single_post_settings',
		'type' => 'radio',
		'label' => __( 'Featured Image Display Type', 'industrial-manufacturing' ),
		'choices'		=> array(
		   'banner'  => __('as Banner Image', 'industrial-manufacturing'),
		   'in-content' => __( 'as Featured Image', 'industrial-manufacturing' ),
	)));

	$wp_customize->add_setting('industrial_manufacturing_single_post_nav',array(
		'default' => 'true',
		'sanitize_callback'	=> 'industrial_manufacturing_sanitize_checkbox'
	));
	$wp_customize->add_control('industrial_manufacturing_single_post_nav',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Single Post Navigation','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_single_post_settings'
	));

 	$wp_customize->add_setting( 'industrial_manufacturing_single_post_prev_nav_text', array(
		'default' => __('Previous','industrial-manufacturing' ),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'industrial_manufacturing_single_post_prev_nav_text', array(
		'label' => esc_html__( 'Single Post Previous Nav text','industrial-manufacturing' ),
		'section'     => 'industrial_manufacturing_single_post_settings',
		'type'        => 'text',
		'settings'    => 'industrial_manufacturing_single_post_prev_nav_text'
	) );

	$wp_customize->add_setting( 'industrial_manufacturing_single_post_next_nav_text', array(
		'default' => __('Next','industrial-manufacturing' ),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'industrial_manufacturing_single_post_next_nav_text', array(
		'label' => esc_html__( 'Single Post Next Nav text','industrial-manufacturing' ),
		'section'     => 'industrial_manufacturing_single_post_settings',
		'type'        => 'text',
		'settings'    => 'industrial_manufacturing_single_post_next_nav_text'
	) );

	$wp_customize->add_setting('industrial_manufacturing_single_post_comment',array(
		'default' => 'true',
		'sanitize_callback'	=> 'industrial_manufacturing_sanitize_checkbox'
	));
	$wp_customize->add_control('industrial_manufacturing_single_post_comment',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Single Post comment','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_single_post_settings'
	));

	$wp_customize->add_setting( 'industrial_manufacturing_comment_width', array(
		'default'=> '100',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Industrial_Manufacturing_WP_Customize_Range_Control( $wp_customize, 'industrial_manufacturing_comment_width', array(
		'label'  => __('Comment textarea width','industrial-manufacturing'),
		'section'  => 'industrial_manufacturing_single_post_settings',
		'description' => __('Measurement is in %.','industrial-manufacturing'),
		'input_attrs' => array(
		   'min' => 0,
		   'max' => 100,
		),
    )));

	$wp_customize->add_setting('industrial_manufacturing_comment_title',array(
		'default' => __('Leave a Reply','industrial-manufacturing' ),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('industrial_manufacturing_comment_title',array(
		'type' => 'text',
		'label' => __('Comment form Title','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_single_post_settings'
	));

	$wp_customize->add_setting('industrial_manufacturing_comment_submit_text',array(
		'default' => __('Post Comment','industrial-manufacturing' ),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('industrial_manufacturing_comment_submit_text',array(
		'type' => 'text',
		'label' => __('Comment Submit Button Label','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_single_post_settings'
	));

	$wp_customize->add_setting('industrial_manufacturing_related_posts',array(
		'default' => true,
		'sanitize_callback'	=> 'industrial_manufacturing_sanitize_checkbox'
	));
	$wp_customize->add_control('industrial_manufacturing_related_posts',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Related Posts','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_single_post_settings'
	));

	$wp_customize->add_setting('industrial_manufacturing_related_posts_title',array(
		'default' => __('You May Also Like','industrial-manufacturing' ),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('industrial_manufacturing_related_posts_title',array(
		'type' => 'text',
		'label' => __('Related Posts Title','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_single_post_settings'
	));

 	$wp_customize->add_setting( 'industrial_manufacturing_related_post_count', array(
		'default' => 3,
		'sanitize_callback'	=> 'industrial_manufacturing_sanitize_float'
	) );
	$wp_customize->add_control( 'industrial_manufacturing_related_post_count', array(
		'label' => esc_html__( 'Related Posts Count','industrial-manufacturing' ),
		'section' => 'industrial_manufacturing_single_post_settings',
		'type' => 'number',
		'settings' => 'industrial_manufacturing_related_post_count',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 6,
		),
	) );

	$wp_customize->add_setting( 'industrial_manufacturing_post_shown_by', array(
		'default' => 'categories',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control( 'industrial_manufacturing_post_shown_by', array(
		'section' => 'industrial_manufacturing_single_post_settings',
		'type' => 'radio',
		'label' => __( 'Related Posts must be shown:', 'industrial-manufacturing' ),
		'choices'		=> array(
		   'categories'  => __('By Categories', 'industrial-manufacturing'),
		   'tags' => __( 'By Tags', 'industrial-manufacturing' ),
	)));

	// Button option
	$wp_customize->add_section( 'industrial_manufacturing_button_options', array(
		'title' =>  __( 'Button Options', 'industrial-manufacturing' ),
		'panel' => 'industrial_manufacturing_panel_id',
	));

 	$wp_customize->add_setting( 'industrial_manufacturing_blog_button_text', array(
		'default'   => __('Read Full','industrial-manufacturing' ),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'industrial_manufacturing_blog_button_text', array(
		'label'       => esc_html__( 'Blog Post Button Label','industrial-manufacturing' ),
		'section'     => 'industrial_manufacturing_button_options',
		'type'        => 'text',
		'settings'    => 'industrial_manufacturing_blog_button_text'
	) );

	$wp_customize->add_setting('industrial_manufacturing_button_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('industrial_manufacturing_button_padding',array(
		'label'	=> esc_html__('Button Padding','industrial-manufacturing'),
		'section'=> 'industrial_manufacturing_button_options',
		'active_callback' => 'industrial_manufacturing_button_enabled'
	));

	$wp_customize->add_setting('industrial_manufacturing_top_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'industrial_manufacturing_sanitize_float'
	));
	$wp_customize->add_control('industrial_manufacturing_top_button_padding',array(
		'label'	=> __('Top','industrial-manufacturing'),
		'input_attrs' => array(
         'step'             => 1,
			'min'              => 0,
			'max'              => 50,
     	),
		'section'=> 'industrial_manufacturing_button_options',
		'type'=> 'number',
		'active_callback' => 'industrial_manufacturing_button_enabled'
	));

	$wp_customize->add_setting('industrial_manufacturing_bottom_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'industrial_manufacturing_sanitize_float'
	));
	$wp_customize->add_control('industrial_manufacturing_bottom_button_padding',array(
		'label'	=> __('Bottom','industrial-manufacturing'),
		'input_attrs' => array(
         'step'             => 1,
			'min'              => 0,
			'max'              => 50,
     	),
		'section'=> 'industrial_manufacturing_button_options',
		'type'=> 'number',
		'active_callback' => 'industrial_manufacturing_button_enabled'
	));

	$wp_customize->add_setting('industrial_manufacturing_left_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'industrial_manufacturing_sanitize_float'
	));
	$wp_customize->add_control('industrial_manufacturing_left_button_padding',array(
		'label'	=> __('Left','industrial-manufacturing'),
		'input_attrs' => array(
      	'step'             => 1,
			'min'              => 0,
			'max'              => 50,
     	),
		'section'=> 'industrial_manufacturing_button_options',
		'type'=> 'number',
		'active_callback' => 'industrial_manufacturing_button_enabled'
	));

	$wp_customize->add_setting('industrial_manufacturing_right_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'industrial_manufacturing_sanitize_float'
	));
	$wp_customize->add_control('industrial_manufacturing_right_button_padding',array(
		'label'	=> __('Right','industrial-manufacturing'),
		'input_attrs' => array(
         'step'             => 1,
			'min'              => 0,
			'max'              => 50,
 	 	),
		'section'=> 'industrial_manufacturing_button_options',
		'type'=> 'number',
		'active_callback' => 'industrial_manufacturing_button_enabled'
	));

	$wp_customize->add_setting( 'industrial_manufacturing_button_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Industrial_Manufacturing_WP_Customize_Range_Control( $wp_customize, 'industrial_manufacturing_button_border_radius', array(
      'label'  => __('Border Radius','industrial-manufacturing'),
      'section'  => 'industrial_manufacturing_button_options',
      'description' => __('Measurement is in pixel.','industrial-manufacturing'),
      'input_attrs' => array(
          'min' => 0,
          'max' => 50,
      ),
		'active_callback' => 'industrial_manufacturing_button_enabled'
 	)));

    //Sidebar setting
	$wp_customize->add_section( 'industrial_manufacturing_sidebar_options', array(
    	'title'   => __( 'Sidebar options', 'industrial-manufacturing'),
		'priority'   => null,
		'panel' => 'industrial_manufacturing_panel_id'
	) );

	$wp_customize->add_setting('industrial_manufacturing_single_page_layout',array(
		'default' => 'One Column',
		'sanitize_callback' => 'industrial_manufacturing_sanitize_choices'
 	));
	$wp_customize->add_control('industrial_manufacturing_single_page_layout', array(
		'type' => 'select',
		'label' => __( 'Single Page Layout', 'industrial-manufacturing' ),
		'section' => 'industrial_manufacturing_sidebar_options',
		'choices' => array(
		   'Left Sidebar' => __('Left Sidebar','industrial-manufacturing'),
		   'Right Sidebar' => __('Right Sidebar','industrial-manufacturing'),
		   'One Column' => __('One Column','industrial-manufacturing')
		),
 	));

 	$wp_customize->add_setting('industrial_manufacturing_single_post_layout',array(
		'default' => 'Right Sidebar',
		'sanitize_callback' => 'industrial_manufacturing_sanitize_choices'
 	));
	$wp_customize->add_control('industrial_manufacturing_single_post_layout', array(
		'type' => 'select',
		'label' => __( 'Single Post Layout', 'industrial-manufacturing' ),
		'section' => 'industrial_manufacturing_sidebar_options',
		'choices' => array(
		   'Left Sidebar' => __('Left Sidebar','industrial-manufacturing'),
		   'Right Sidebar' => __('Right Sidebar','industrial-manufacturing'),
		   'One Column' => __('One Column','industrial-manufacturing')
		),
 	));

    //Advance Options
	$wp_customize->add_section( 'industrial_manufacturing_advance_options', array(
    	'title' => __( 'Advance Options', 'industrial-manufacturing' ),
		'priority'   => null,
		'panel' => 'industrial_manufacturing_panel_id'
	) );

	$wp_customize->add_setting('industrial_manufacturing_preloader',array(
		'default' => false,
		'sanitize_callback'	=> 'industrial_manufacturing_sanitize_checkbox'
	));
	$wp_customize->add_control('industrial_manufacturing_preloader',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Preloader','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_advance_options'
	));

 	$wp_customize->add_setting( 'industrial_manufacturing_preloader_color', array(
		'default' => '#333333',
		'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'industrial_manufacturing_preloader_color', array(
  		'label' => __('Preloader Color', 'industrial-manufacturing'),
		'section' => 'industrial_manufacturing_advance_options',
		'settings' => 'industrial_manufacturing_preloader_color',
  	)));

  	$wp_customize->add_setting( 'industrial_manufacturing_preloader_bg_color', array(
		'default' => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'industrial_manufacturing_preloader_bg_color', array(
  		'label' => __('Preloader Background Color', 'industrial-manufacturing'),
		'section' => 'industrial_manufacturing_advance_options',
		'settings' => 'industrial_manufacturing_preloader_bg_color',
  	)));

  	$wp_customize->add_setting('industrial_manufacturing_preloader_type',array(
		'default' => 'Square',
		'sanitize_callback' => 'industrial_manufacturing_sanitize_choices'
	));
	$wp_customize->add_control('industrial_manufacturing_preloader_type',array(
		'type' => 'radio',
		'label' => __('Preloader Type','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_advance_options',
		'choices' => array(
		   'Square' => __('Square','industrial-manufacturing'),
		   'Circle' => __('Circle','industrial-manufacturing'),
		)
	) );

	$wp_customize->add_setting('industrial_manufacturing_theme_layout_options',array(
		'default' => 'Default Theme',
		'sanitize_callback' => 'industrial_manufacturing_sanitize_choices'
	));
	$wp_customize->add_control('industrial_manufacturing_theme_layout_options',array(
		'type' => 'radio',
		'label' => __('Theme Layout','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_advance_options',
		'choices' => array(
		   'Default Theme' => __('Default Theme','industrial-manufacturing'),
		   'Container Theme' => __('Container Theme','industrial-manufacturing'),
		   'Box Container Theme' => __('Box Container Theme','industrial-manufacturing'),
		),
	) );

	//404 Page Option
	$wp_customize->add_section('industrial_manufacturing_404_settings',array(
		'title'	=> __('404 Page & Search Result Settings','industrial-manufacturing'),
		'priority'	=> null,
		'panel' => 'industrial_manufacturing_panel_id',
	));

	$wp_customize->add_setting('industrial_manufacturing_404_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('industrial_manufacturing_404_title',array(
		'label'	=> __('404 Title','industrial-manufacturing'),
		'section'	=> 'industrial_manufacturing_404_settings',
		'type'		=> 'text'
	));	

	$wp_customize->add_setting('industrial_manufacturing_404_button_label',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('industrial_manufacturing_404_button_label',array(
		'label'	=> __('404 button Label','industrial-manufacturing'),
		'section'	=> 'industrial_manufacturing_404_settings',
		'type'		=> 'text'
	));	

	$wp_customize->add_setting('industrial_manufacturing_search_result_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('industrial_manufacturing_search_result_title',array(
		'label'	=> __('No Search Result Title','industrial-manufacturing'),
		'section'	=> 'industrial_manufacturing_404_settings',
		'type'		=> 'text'
	));	

	$wp_customize->add_setting('industrial_manufacturing_search_result_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('industrial_manufacturing_search_result_text',array(
		'label'	=> __('No Search Result Text','industrial-manufacturing'),
		'section'	=> 'industrial_manufacturing_404_settings',
		'type'		=> 'text'
	));	

	//Responsive Settings
	$wp_customize->add_section('industrial_manufacturing_responsive_options',array(
		'title'	=> __('Responsive Options','industrial-manufacturing'),
		'panel' => 'industrial_manufacturing_panel_id'
	));

	$wp_customize->add_setting('industrial_manufacturing_menu_open_icon',array(
		'default'	=> 'fas fa-bars',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Industrial_Manufacturing_Icon_Selector(
     	$wp_customize,'industrial_manufacturing_menu_open_icon',array(
		'label'	=> __('Menu Open Icon','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_responsive_options',
		'type'	  => 'icon',
	)));

	$wp_customize->add_setting('industrial_manufacturing_mobile_menu_label',array(
		'default' => __('Menu','industrial-manufacturing'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('industrial_manufacturing_mobile_menu_label',array(
		'type' => 'text',
		'label' => __('Mobile Menu Label','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_responsive_options'
	));

	$wp_customize->add_setting('industrial_manufacturing_menu_close_icon',array(
		'default'	=> 'fas fa-times-circle',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Industrial_Manufacturing_Icon_Selector(
     	$wp_customize,'industrial_manufacturing_menu_close_icon',array(
		'label'	=> __('Menu Close Icon','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_responsive_options',
		'type'	  => 'icon',
	)));

	$wp_customize->add_setting('industrial_manufacturing_close_menu_label',array(
		'default' => __('Close Menu','industrial-manufacturing'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('industrial_manufacturing_close_menu_label',array(
		'type' => 'text',
		'label' => __('Close Menu Label','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_responsive_options'
	));

	$wp_customize->add_setting('industrial_manufacturing_sticky_header_responsive',array(
        'default' => false,
        'sanitize_callback'	=> 'industrial_manufacturing_sanitize_checkbox'
	));
	$wp_customize->add_control('industrial_manufacturing_sticky_header_responsive',array(
     	'type' => 'checkbox',
      	'label' => __('Enable Sticky Header','industrial-manufacturing'),
      	'section' => 'industrial_manufacturing_responsive_options',
	));

	$wp_customize->add_setting('industrial_manufacturing_hide_topbar_responsive',array(
		'default' => true,
		'sanitize_callback'	=> 'industrial_manufacturing_sanitize_checkbox'
	));
	$wp_customize->add_control('industrial_manufacturing_hide_topbar_responsive',array(
     	'type' => 'checkbox',
		'label' => __('Enable Top Header','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_responsive_options',
	));

	$wp_customize->add_setting('industrial_manufacturing_preloader_responsive',array(
        'default' => false,
        'sanitize_callback'	=> 'industrial_manufacturing_sanitize_checkbox'
	));
	$wp_customize->add_control('industrial_manufacturing_preloader_responsive',array(
     	'type' => 'checkbox',
      	'label' => __('Enable Preloader','industrial-manufacturing'),
      	'section' => 'industrial_manufacturing_responsive_options',
	));

	$wp_customize->add_setting('industrial_manufacturing_backtotop_responsive',array(
        'default' => true,
        'sanitize_callback'	=> 'industrial_manufacturing_sanitize_checkbox'
	));
	$wp_customize->add_control('industrial_manufacturing_backtotop_responsive',array(
     	'type' => 'checkbox',
      	'label' => __('Enable Back to Top','industrial-manufacturing'),
      	'section' => 'industrial_manufacturing_responsive_options',
	));

	//Woocommerce Options
	$wp_customize->add_section('industrial_manufacturing_woocommerce',array(
		'title'	=> __('WooCommerce Options','industrial-manufacturing'),
		'panel' => 'industrial_manufacturing_panel_id',
	));

	$wp_customize->add_setting('industrial_manufacturing_shop_page_sidebar',array(
		'default' => true,
		'sanitize_callback' => 'industrial_manufacturing_sanitize_checkbox'
	));
	$wp_customize->add_control('industrial_manufacturing_shop_page_sidebar',array(
		'type' => 'checkbox',
		'label' => __('Enable Shop Page Sidebar','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_woocommerce'
	));

	$wp_customize->add_setting('industrial_manufacturing_shop_page_navigation',array(
		'default' => true,
		'sanitize_callback' => 'industrial_manufacturing_sanitize_checkbox'
	));
	$wp_customize->add_control('industrial_manufacturing_shop_page_navigation',array(
		'type' => 'checkbox',
		'label' => __('Enable Shop Page Pagination','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_woocommerce'
	));

	$wp_customize->add_setting('industrial_manufacturing_single_product_sidebar',array(
		'default' => true,
		'sanitize_callback'	=> 'industrial_manufacturing_sanitize_checkbox'
	));
	$wp_customize->add_control('industrial_manufacturing_single_product_sidebar',array(
		'type' => 'checkbox',
		'label' => __('Enable Single Product Page Sidebar','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_woocommerce'
	));

	$wp_customize->add_setting('industrial_manufacturing_single_related_products',array(
		'default' => true,
		'sanitize_callback' => 'industrial_manufacturing_sanitize_checkbox'
	));
	$wp_customize->add_control('industrial_manufacturing_single_related_products',array(
		'type' => 'checkbox',
		'label' => __('Enable Related Products','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_woocommerce'
	));

 	$wp_customize->add_setting('industrial_manufacturing_products_per_page',array(
		'default'=> '9',
		'sanitize_callback'	=> 'industrial_manufacturing_sanitize_float'
	));
	$wp_customize->add_control('industrial_manufacturing_products_per_page',array(
		'label'	=> __('Products Per Page','industrial-manufacturing'),
		'input_attrs' => array(
         'step'             => 1,
			'min'              => 0,
			'max'              => 50,
     	),
		'section'=> 'industrial_manufacturing_woocommerce',
		'type'=> 'number',
	));

	$wp_customize->add_setting('industrial_manufacturing_products_per_row',array(
		'default'=> '3',
		'sanitize_callback'	=> 'industrial_manufacturing_sanitize_choices'
	));
	$wp_customize->add_control('industrial_manufacturing_products_per_row',array(
		'label'	=> __('Products Per Row','industrial-manufacturing'),
		'choices' => array(
         '2' => '2',
			'3' => '3',
			'4' => '4',
     	),
		'section'=> 'industrial_manufacturing_woocommerce',
		'type'=> 'select',
	));

	$wp_customize->add_setting('industrial_manufacturing_product_border',array(
		'default' => true,
		'sanitize_callback'	=> 'industrial_manufacturing_sanitize_checkbox'
	));
	$wp_customize->add_control('industrial_manufacturing_product_border',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide product border','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_woocommerce',
	));

 	$wp_customize->add_setting('industrial_manufacturing_product_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('industrial_manufacturing_product_padding',array(
		'label'	=> esc_html__('Product Padding','industrial-manufacturing'),
		'section'=> 'industrial_manufacturing_woocommerce',
	));

	$wp_customize->add_setting( 'industrial_manufacturing_product_top_padding',array(
		'default' => 10,
		'sanitize_callback' => 'industrial_manufacturing_sanitize_float'
	));
	$wp_customize->add_control('industrial_manufacturing_product_top_padding', array(
		'label' => esc_html__( 'Top','industrial-manufacturing' ),
		'type' => 'number',
		'section' => 'industrial_manufacturing_woocommerce',
		'input_attrs' => array(
			'min' => -1,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('industrial_manufacturing_product_bottom_padding',array(
		'default' => 10,
		'sanitize_callback' => 'industrial_manufacturing_sanitize_float'
	));
	$wp_customize->add_control('industrial_manufacturing_product_bottom_padding', array(
		'label' => esc_html__( 'Bottom','industrial-manufacturing' ),
		'type' => 'number',
		'section' => 'industrial_manufacturing_woocommerce',
		'input_attrs' => array(
			'min' => -1,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('industrial_manufacturing_product_left_padding',array(
		'default' => 10,
		'sanitize_callback' => 'industrial_manufacturing_sanitize_float'
	));
	$wp_customize->add_control('industrial_manufacturing_product_left_padding', array(
		'label' => esc_html__( 'Left','industrial-manufacturing' ),
		'type' => 'number',
		'section' => 'industrial_manufacturing_woocommerce',
		'input_attrs' => array(
			'min' => -1,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'industrial_manufacturing_product_right_padding',array(
		'default' => 10,
		'sanitize_callback' => 'industrial_manufacturing_sanitize_float'
	));
	$wp_customize->add_control('industrial_manufacturing_product_right_padding', array(
		'label' => esc_html__( 'Right','industrial-manufacturing' ),
		'type' => 'number',
		'section' => 'industrial_manufacturing_woocommerce',
		'input_attrs' => array(
			'min' => -1,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'industrial_manufacturing_product_border_radius',array(
		'default' => '0',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control( new Industrial_Manufacturing_WP_Customize_Range_Control( $wp_customize, 'industrial_manufacturing_product_border_radius', array(
		'label'  => __('Product Border Radius','industrial-manufacturing'),
		'section'  => 'industrial_manufacturing_woocommerce',
		'description' => __('Measurement is in pixel.','industrial-manufacturing'),
		'input_attrs' => array(
		   'min' => 0,
		   'max' => 50,
		)
    )));

	$wp_customize->add_setting('industrial_manufacturing_product_button_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('industrial_manufacturing_product_button_padding',array(
		'label'	=> esc_html__('Product Button Padding','industrial-manufacturing'),
		'section'=> 'industrial_manufacturing_woocommerce',
	));

	$wp_customize->add_setting( 'industrial_manufacturing_product_button_top_padding',array(
		'default' => 10,
		'sanitize_callback' => 'industrial_manufacturing_sanitize_float'
	));
	$wp_customize->add_control('industrial_manufacturing_product_button_top_padding', array(
		'label' => esc_html__( 'Top','industrial-manufacturing' ),
		'type' => 'number',
		'section' => 'industrial_manufacturing_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('industrial_manufacturing_product_button_bottom_padding',array(
		'default' => 10,
		'sanitize_callback' => 'industrial_manufacturing_sanitize_float'
	));
	$wp_customize->add_control('industrial_manufacturing_product_button_bottom_padding', array(
		'label' => esc_html__( 'Bottom','industrial-manufacturing' ),
		'type' => 'number',
		'section' => 'industrial_manufacturing_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('industrial_manufacturing_product_button_left_padding',array(
		'default' => 12,
		'sanitize_callback' => 'industrial_manufacturing_sanitize_float'
	));
	$wp_customize->add_control('industrial_manufacturing_product_button_left_padding', array(
		'label' => esc_html__( 'Left','industrial-manufacturing' ),
		'type' => 'number',
		'section' => 'industrial_manufacturing_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'industrial_manufacturing_product_button_right_padding',array(
		'default' => 12,
		'sanitize_callback' => 'industrial_manufacturing_sanitize_float'
	));
	$wp_customize->add_control('industrial_manufacturing_product_button_right_padding', array(
		'label' => esc_html__( 'Right','industrial-manufacturing' ),
		'type' => 'number',
		'section' => 'industrial_manufacturing_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'industrial_manufacturing_product_button_border_radius',array(
		'default' => '0',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control( new Industrial_Manufacturing_WP_Customize_Range_Control( $wp_customize, 'industrial_manufacturing_product_button_border_radius', array(
		'label'  => __('Product Button Border Radius','industrial-manufacturing'),
		'section'  => 'industrial_manufacturing_woocommerce',
		'description' => __('Measurement is in pixel.','industrial-manufacturing'),
		'input_attrs' => array(
		   'min' => 0,
		   'max' => 50,
		)
 	)));

 	$wp_customize->add_setting('industrial_manufacturing_product_sale_position',array(
     'default' => 'Right',
     'sanitize_callback' => 'industrial_manufacturing_sanitize_choices'
	));
	$wp_customize->add_control('industrial_manufacturing_product_sale_position',array(
		'type' => 'radio',
		'label' => __('Product Sale Position','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_woocommerce',
		'choices' => array(
		   'Left' => __('Left','industrial-manufacturing'),
		   'Right' => __('Right','industrial-manufacturing'),
		),
	) );

	$wp_customize->add_setting( 'industrial_manufacturing_product_sale_font_size',array(
		'default' => '13',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control( new Industrial_Manufacturing_WP_Customize_Range_Control( $wp_customize, 'industrial_manufacturing_product_sale_font_size', array(
		'label'  => __('Product Sale Font Size','industrial-manufacturing'),
		'section'  => 'industrial_manufacturing_woocommerce',
		'description' => __('Measurement is in pixel.','industrial-manufacturing'),
		'input_attrs' => array(
		   'min' => 0,
		   'max' => 50,
		)
 	)));

 	$wp_customize->add_setting('industrial_manufacturing_product_sale_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('industrial_manufacturing_product_sale_padding',array(
		'label'	=> esc_html__('Product Sale Padding','industrial-manufacturing'),
		'section'=> 'industrial_manufacturing_woocommerce',
	));

	$wp_customize->add_setting( 'industrial_manufacturing_product_sale_top_padding',array(
		'default' => 0,
		'sanitize_callback' => 'industrial_manufacturing_sanitize_float'
	));
	$wp_customize->add_control('industrial_manufacturing_product_sale_top_padding', array(
		'label' => esc_html__( 'Top','industrial-manufacturing' ),
		'type' => 'number',
		'section' => 'industrial_manufacturing_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('industrial_manufacturing_product_sale_bottom_padding',array(
		'default' => 0,
		'sanitize_callback' => 'industrial_manufacturing_sanitize_float'
	));
	$wp_customize->add_control('industrial_manufacturing_product_sale_bottom_padding', array(
		'label' => esc_html__( 'Bottom','industrial-manufacturing' ),
		'type' => 'number',
		'section' => 'industrial_manufacturing_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('industrial_manufacturing_product_sale_left_padding',array(
		'default' => 0,
		'sanitize_callback' => 'industrial_manufacturing_sanitize_float'
	));
	$wp_customize->add_control('industrial_manufacturing_product_sale_left_padding', array(
		'label' => esc_html__( 'Left','industrial-manufacturing' ),
		'type' => 'number',
		'section' => 'industrial_manufacturing_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('industrial_manufacturing_product_sale_right_padding',array(
		'default' => 0,
		'sanitize_callback' => 'industrial_manufacturing_sanitize_float'
	));
	$wp_customize->add_control('industrial_manufacturing_product_sale_right_padding', array(
		'label' => esc_html__( 'Right','industrial-manufacturing' ),
		'type' => 'number',
		'section' => 'industrial_manufacturing_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'industrial_manufacturing_product_sale_border_radius',array(
		'default' => '0',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control( new Industrial_Manufacturing_WP_Customize_Range_Control( $wp_customize, 'industrial_manufacturing_product_sale_border_radius', array(
		'label'  => __('Product Sale Border Radius','industrial-manufacturing'),
		'section'  => 'industrial_manufacturing_woocommerce',
		'description' => __('Measurement is in pixel.','industrial-manufacturing'),
		'input_attrs' => array(
		   'min' => 0,
		   'max' => 50,
		)
    )));

	//footer text
	$wp_customize->add_section('industrial_manufacturing_footer_section',array(
		'title'	=> __('Footer Section','industrial-manufacturing'),
		'panel' => 'industrial_manufacturing_panel_id'
	));

	$wp_customize->add_setting('industrial_manufacturing_hide_scroll',array(
		'default' => 'true',
		'sanitize_callback'	=> 'industrial_manufacturing_sanitize_checkbox'
	));
	$wp_customize->add_control('industrial_manufacturing_hide_scroll',array(
     	'type' => 'checkbox',
   	'label' => __('Show / Hide Back To Top','industrial-manufacturing'),
   	'section' => 'industrial_manufacturing_footer_section',
	));

	$wp_customize->add_setting('industrial_manufacturing_back_to_top',array(
		'default' => 'Right',
		'sanitize_callback' => 'industrial_manufacturing_sanitize_choices'
	));
	$wp_customize->add_control('industrial_manufacturing_back_to_top',array(
		'type' => 'radio',
		'label' => __('Back to Top Alignment','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_footer_section',
		'choices' => array(
		   'Left' => __('Left','industrial-manufacturing'),
		   'Right' => __('Right','industrial-manufacturing'),
		   'Center' => __('Center','industrial-manufacturing'),
		),
	) );

	$wp_customize->add_setting('industrial_manufacturing_footer_bg_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'industrial_manufacturing_footer_bg_color', array(
		'label'    => __('Footer Background Color', 'industrial-manufacturing'),
		'section'  => 'industrial_manufacturing_footer_section',
	)));

	$wp_customize->add_setting('industrial_manufacturing_footer_bg_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'industrial_manufacturing_footer_bg_image',array(
		'label' => __('Footer Background Image','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_footer_section'
	)));

	$wp_customize->add_setting('industrial_manufacturing_footer_widget',array(
		'default'           => '4',
		'sanitize_callback' => 'industrial_manufacturing_sanitize_choices',
	));
	$wp_customize->add_control('industrial_manufacturing_footer_widget',array(
		'type'        => 'radio',
		'label'       => __('No. of Footer columns', 'industrial-manufacturing'),
		'section'     => 'industrial_manufacturing_footer_section',
		'description' => __('Select the number of footer columns and add your widgets in the footer.', 'industrial-manufacturing'),
		'choices' => array(
		   '1'   => __('One column', 'industrial-manufacturing'),
		   '2'  => __('Two columns', 'industrial-manufacturing'),
		   '3' => __('Three columns', 'industrial-manufacturing'),
		   '4' => __('Four columns', 'industrial-manufacturing')
		),
	)); 

	$wp_customize->add_setting('industrial_manufacturing_copyright_bg_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'industrial_manufacturing_copyright_bg_color', array(
		'label'    => __('Copyright Background Color', 'industrial-manufacturing'),
		'section'  => 'industrial_manufacturing_footer_section',
	)));

 	$wp_customize->add_setting('industrial_manufacturing_copyright_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('industrial_manufacturing_copyright_padding',array(
		'label'	=> esc_html__('Copyright Padding','industrial-manufacturing'),
		'section'=> 'industrial_manufacturing_footer_section',
	));

    $wp_customize->add_setting('industrial_manufacturing_top_copyright_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'industrial_manufacturing_sanitize_float'
	));
	$wp_customize->add_control('industrial_manufacturing_top_copyright_padding',array(
		'description'	=> __('Top','industrial-manufacturing'),
		'input_attrs' => array(
         'step' => 1,
			'min' => 0,
			'max' => 50,
     	),
		'section'=> 'industrial_manufacturing_footer_section',
		'type'=> 'number'
	));

	$wp_customize->add_setting('industrial_manufacturing_bottom_copyright_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'industrial_manufacturing_sanitize_float'
	));
	$wp_customize->add_control('industrial_manufacturing_bottom_copyright_padding',array(
		'description'	=> __('Bottom','industrial-manufacturing'),
		'input_attrs' => array(
         'step' => 1,
			'min' => 0,
			'max' => 50,
     	),
		'section'=> 'industrial_manufacturing_footer_section',
		'type'=> 'number'
	));

	$wp_customize->add_setting('industrial_manufacturing_copyright_alignment',array(
		'default' => 'center',
		'sanitize_callback' => 'industrial_manufacturing_sanitize_choices'
	));
	$wp_customize->add_control('industrial_manufacturing_copyright_alignment',array(
		'type' => 'radio',
		'label' => __('Copyright Alignment','industrial-manufacturing'),
		'section' => 'industrial_manufacturing_footer_section',
		'choices' => array(
		   'left' => __('Left','industrial-manufacturing'),
		   'right' => __('Right','industrial-manufacturing'),
		   'center' => __('Center','industrial-manufacturing'),
		),
	) );

	$wp_customize->add_setting( 'industrial_manufacturing_copyright_font_size', array(
		'default'=> '15',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Industrial_Manufacturing_WP_Customize_Range_Control( $wp_customize, 'industrial_manufacturing_copyright_font_size', array(
		'label'  => __('Copyright Font Size','industrial-manufacturing'),
		'section'  => 'industrial_manufacturing_footer_section',
		'description' => __('Measurement is in pixel.','industrial-manufacturing'),
		'input_attrs' => array(
		   'min' => 0,
		   'max' => 50,
		)
 	)));
	
	$wp_customize->add_setting('industrial_manufacturing_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('industrial_manufacturing_text',array(
		'label'	=> __('Copyright Text','industrial-manufacturing'),
		'description'	=> __('Add some text for footer like copyright etc.','industrial-manufacturing'),
		'section'	=> 'industrial_manufacturing_footer_section',
		'type'		=> 'text'
	));	
}
add_action( 'customize_register', 'industrial_manufacturing_customize_register' );	

load_template( ABSPATH . 'wp-includes/class-wp-customize-control.php' );

// logo resize
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

class Industrial_Manufacturing_Image_Radio_Control extends WP_Customize_Control {

    public function render_content() {
 
        if (empty($this->choices))
            return;
 
        $name = '_customize-radio-' . $this->id;
        ?>
        <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
        <ul class="controls" id='industrial-manufacturing-img-container'>
            <?php
            foreach ($this->choices as $value => $label) :
                $class = ($this->value() == $value) ? 'industrial-manufacturing-radio-img-selected industrial-manufacturing-radio-img-img' : 'industrial-manufacturing-radio-img-img';
                ?>
                <li style="display: inline;">
                    <label>
                        <input <?php $this->link(); ?>style = 'display:none' type="radio" value="<?php echo esc_attr($value); ?>" name="<?php echo esc_attr($name); ?>" <?php
                          	$this->link();
                          	checked($this->value(), $value);
                          	?> />
                        <img role="img" src='<?php echo esc_url($label); ?>' class='<?php echo esc_attr($class); ?>' />
                    </label>
                </li>
                <?php
            endforeach;
            ?>
        </ul>
        <?php
    } 
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Industrial_Manufacturing_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Industrial_Manufacturing_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Industrial_Manufacturing_Customize_Section_Pro(
			$manager,
			'industrial_manufacturing_pro_link',
				array(
					'priority'   => 9,
					'title'    => esc_html__( 'Industrial Pro', 'industrial-manufacturing' ),
					'pro_text' => esc_html__( 'Go Pro', 'industrial-manufacturing' ),
					'pro_url'  => esc_url('https://www.themesglance.com/themes/manufacturing-wordpress-theme/')
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'industrial-manufacturing-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'industrial-manufacturing-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Industrial_Manufacturing_Customize::get_instance();