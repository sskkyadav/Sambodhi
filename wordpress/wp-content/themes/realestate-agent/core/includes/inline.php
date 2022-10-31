<?php


$realestate_agent_custom_css = '';

	/*---------------------------text-transform-------------------*/

	$realestate_agent_text_transform = get_theme_mod( 'menu_text_transform_realestate_agent','CAPITALISE');
    if($realestate_agent_text_transform == 'CAPITALISE'){

		$realestate_agent_custom_css .='#main-menu ul li a{';

			$realestate_agent_custom_css .='text-transform: capitalize ; font-size: 14px !important;';

		$realestate_agent_custom_css .='}';

	}else if($realestate_agent_text_transform == 'UPPERCASE'){

		$realestate_agent_custom_css .='#main-menu ul li a{';

			$realestate_agent_custom_css .='text-transform: uppercase ; font-size: 14px !important';

		$realestate_agent_custom_css .='}';

	}else if($realestate_agent_text_transform == 'LOWERCASE'){

		$realestate_agent_custom_css .='#main-menu ul li a{';

			$realestate_agent_custom_css .='text-transform: lowercase ; font-size: 14px !important';

		$realestate_agent_custom_css .='}';
	}

	/*---------------------------Container Width-------------------*/

		$realestate_agent_container_width = get_theme_mod('realestate_agent_container_width');

				$realestate_agent_custom_css .='body{';

					$realestate_agent_custom_css .='width: '.esc_attr($realestate_agent_container_width).'%; margin: auto';

				$realestate_agent_custom_css .='}';
