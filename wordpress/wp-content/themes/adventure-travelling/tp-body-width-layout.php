<?php

	$adventure_travelling_theme_lay = get_theme_mod( 'adventure_travelling_tp_body_layout_settings','Full');
    if($adventure_travelling_theme_lay == 'Container'){
		$adventure_travelling_tp_theme_css .='body{';
			$adventure_travelling_tp_theme_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$adventure_travelling_tp_theme_css .='}';
		$adventure_travelling_tp_theme_css .='.scrolled{';
			$adventure_travelling_tp_theme_css .='width: auto; left:0; right:0;';
		$adventure_travelling_tp_theme_css .='}';
	}else if($adventure_travelling_theme_lay == 'Container Fluid'){
		$adventure_travelling_tp_theme_css .='body{';
			$adventure_travelling_tp_theme_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$adventure_travelling_tp_theme_css .='}';
		$adventure_travelling_tp_theme_css .='.scrolled{';
			$adventure_travelling_tp_theme_css .='width: auto; left:0; right:0;';
		$adventure_travelling_tp_theme_css .='}';
	}else if($adventure_travelling_theme_lay == 'Full'){
		$adventure_travelling_tp_theme_css .='body{';
			$adventure_travelling_tp_theme_css .='max-width: 100%;';
		$adventure_travelling_tp_theme_css .='}';
	}

	$adventure_travelling_scroll_position = get_theme_mod( 'adventure_travelling_scroll_top_position','Right');
	if($adventure_travelling_scroll_position == 'Right'){
		$adventure_travelling_tp_theme_css .='#return-to-top{';
			$adventure_travelling_tp_theme_css .='right: 20px;';
		$adventure_travelling_tp_theme_css .='}';
	}else if($adventure_travelling_scroll_position == 'Left'){
		$adventure_travelling_tp_theme_css .='#return-to-top{';
			$adventure_travelling_tp_theme_css .='left: 20px;';
		$adventure_travelling_tp_theme_css .='}';
	}else if($adventure_travelling_scroll_position == 'Center'){
		$adventure_travelling_tp_theme_css .='#return-to-top{';
			$adventure_travelling_tp_theme_css .='right: 50%;left: 50%;';
		$adventure_travelling_tp_theme_css .='}';
	}