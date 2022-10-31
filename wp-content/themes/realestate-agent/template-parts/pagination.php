<?php
	the_posts_pagination( array(
		'prev_text' => esc_html__( 'Previous page', 'realestate-agent' ),
		'next_text' => esc_html__( 'Next page', 'realestate-agent' ),
	) );