<?php
/**
* Customizer validation functions
*
* @package Theme Palace
* @subpackage Bloghill
* @since Bloghill 1.0.0
*/

if ( ! function_exists( 'bloghill_validate_long_excerpt' ) ) :
  function bloghill_validate_long_excerpt( $validity, $value ){
		 $value = intval( $value );
	 if ( empty( $value ) || ! is_numeric( $value ) ) {
		 $validity->add( 'required', esc_html__( 'You must supply a valid number.', 'bloghill' ) );
	 } elseif ( $value < 5 ) {
		 $validity->add( 'min_no_of_words', esc_html__( 'Minimum no of words is 5', 'bloghill' ) );
	 } elseif ( $value > 100 ) {
		 $validity->add( 'max_no_of_words', esc_html__( 'Maximum no of words is 100', 'bloghill' ) );
	 }
	 return $validity;
  }
endif;

if ( ! function_exists( 'bloghill_validate_slider_count' ) ) :
  function bloghill_validate_slider_count( $validity, $value ){
		 $value = intval( $value );
	 if ( empty( $value ) || ! is_numeric( $value ) ) {
		 $validity->add( 'required', esc_html__( 'You must supply a valid number.', 'bloghill' ) );
	 } elseif ( $value < 1 ) {
		 $validity->add( 'min_no_of_posts', esc_html__( 'Minimum no of posts is 1', 'bloghill' ) );
	 } elseif ( $value > 50 ) {
		 $validity->add( 'max_no_of_posts', esc_html__( 'Maximum no of posts is 50', 'bloghill' ) );
	 }
	 return $validity;
  }
endif;

if ( ! function_exists( 'bloghill_validate_topics_count' ) ) :
  function bloghill_validate_topics_count( $validity, $value ){
		 $value = intval( $value );
	 if ( empty( $value ) || ! is_numeric( $value ) ) {
		 $validity->add( 'required', esc_html__( 'You must supply a valid number.', 'bloghill' ) );
	 } elseif ( $value < 1 ) {
		 $validity->add( 'min_no_of_posts', esc_html__( 'Minimum no of posts is 1', 'bloghill' ) );
	 } elseif ( $value > 50 ) {
		 $validity->add( 'max_no_of_posts', esc_html__( 'Maximum no of posts is 50', 'bloghill' ) );
	 }
	 return $validity;
  }
endif;

if ( ! function_exists( 'bloghill_validate_recent_posts_count' ) ) :
  function bloghill_validate_recent_posts_count( $validity, $value ){
		 $value = intval( $value );
	 if ( empty( $value ) || ! is_numeric( $value ) ) {
		 $validity->add( 'required', esc_html__( 'You must supply a valid number.', 'bloghill' ) );
	 } elseif ( $value < 1 ) {
		 $validity->add( 'min_no_of_posts', esc_html__( 'Minimum no of posts is 1', 'bloghill' ) );
	 } elseif ( $value > 50 ) {
		 $validity->add( 'max_no_of_posts', esc_html__( 'Maximum no of posts is 50', 'bloghill' ) );
	 }
	 return $validity;
  }
endif;

if ( ! function_exists( 'bloghill_validate_most_read_count' ) ) :
  function bloghill_validate_most_read_count( $validity, $value ){
		 $value = intval( $value );
	 if ( empty( $value ) || ! is_numeric( $value ) ) {
		 $validity->add( 'required', esc_html__( 'You must supply a valid number.', 'bloghill' ) );
	 } elseif ( $value < 1 ) {
		 $validity->add( 'min_no_of_posts', esc_html__( 'Minimum no of posts is 1', 'bloghill' ) );
	 } elseif ( $value > 50 ) {
		 $validity->add( 'max_no_of_posts', esc_html__( 'Maximum no of posts is 50', 'bloghill' ) );
	 }
	 return $validity;
  }
endif;

if ( ! function_exists( 'bloghill_validate_top_destination_count' ) ) :
  function bloghill_validate_top_destination_count( $validity, $value ){
		 $value = intval( $value );
	 if ( empty( $value ) || ! is_numeric( $value ) ) {
		 $validity->add( 'required', esc_html__( 'You must supply a valid number.', 'bloghill' ) );
	 } elseif ( $value < 1 ) {
		 $validity->add( 'min_no_of_posts', esc_html__( 'Minimum no of posts is 1', 'bloghill' ) );
	 } elseif ( $value > 50 ) {
		 $validity->add( 'max_no_of_posts', esc_html__( 'Maximum no of posts is 50', 'bloghill' ) );
	 }
	 return $validity;
  }
endif;

if ( ! function_exists( 'bloghill_validate_gallery_count' ) ) :
  function bloghill_validate_gallery_count( $validity, $value ){
		 $value = intval( $value );
	 if ( empty( $value ) || ! is_numeric( $value ) ) {
		 $validity->add( 'required', esc_html__( 'You must supply a valid number.', 'bloghill' ) );
	 } elseif ( $value < 1 ) {
		 $validity->add( 'min_no_of_posts', esc_html__( 'Minimum no of posts is 1', 'bloghill' ) );
	 } elseif ( $value > 50 ) {
		 $validity->add( 'max_no_of_posts', esc_html__( 'Maximum no of posts is 50', 'bloghill' ) );
	 }
	 return $validity;
  }
endif;

if ( ! function_exists( 'bloghill_validate_event_slider_count' ) ) :
  function bloghill_validate_event_slider_count( $validity, $value ){
		 $value = intval( $value );
	 if ( empty( $value ) || ! is_numeric( $value ) ) {
		 $validity->add( 'required', esc_html__( 'You must supply a valid number.', 'bloghill' ) );
	 } elseif ( $value < 1 ) {
		 $validity->add( 'min_no_of_posts', esc_html__( 'Minimum no of posts is 1', 'bloghill' ) );
	 } elseif ( $value > 50 ) {
		 $validity->add( 'max_no_of_posts', esc_html__( 'Maximum no of posts is 50', 'bloghill' ) );
	 }
	 return $validity;
  }
endif;

if ( ! function_exists( 'bloghill_validate_upcomming_event_count' ) ) :
  function bloghill_validate_upcomming_event_count( $validity, $value ){
		 $value = intval( $value );
	 if ( empty( $value ) || ! is_numeric( $value ) ) {
		 $validity->add( 'required', esc_html__( 'You must supply a valid number.', 'bloghill' ) );
	 } elseif ( $value < 1 ) {
		 $validity->add( 'min_no_of_posts', esc_html__( 'Minimum no of posts is 1', 'bloghill' ) );
	 } elseif ( $value > 50 ) {
		 $validity->add( 'max_no_of_posts', esc_html__( 'Maximum no of posts is 50', 'bloghill' ) );
	 }
	 return $validity;
  }
endif;

if ( ! function_exists( 'bloghill_validate_team_count' ) ) :
  function bloghill_validate_team_count( $validity, $value ){
		 $value = intval( $value );
	 if ( empty( $value ) || ! is_numeric( $value ) ) {
		 $validity->add( 'required', esc_html__( 'You must supply a valid number.', 'bloghill' ) );
	 } elseif ( $value < 1 ) {
		 $validity->add( 'min_no_of_posts', esc_html__( 'Minimum no of posts is 1', 'bloghill' ) );
	 } elseif ( $value > 50 ) {
		 $validity->add( 'max_no_of_posts', esc_html__( 'Maximum no of posts is 50', 'bloghill' ) );
	 }
	 return $validity;
  }
endif;

if ( ! function_exists( 'bloghill_validate_music_gallery_count' ) ) :
  function bloghill_validate_music_gallery_count( $validity, $value ){
		 $value = intval( $value );
	 if ( empty( $value ) || ! is_numeric( $value ) ) {
		 $validity->add( 'required', esc_html__( 'You must supply a valid number.', 'bloghill' ) );
	 } elseif ( $value < 1 ) {
		 $validity->add( 'min_no_of_posts', esc_html__( 'Minimum no of posts is 1', 'bloghill' ) );
	 } elseif ( $value > 100 ) {
		 $validity->add( 'max_no_of_posts', esc_html__( 'Maximum no of posts is 100', 'bloghill' ) );
	 }
	 return $validity;
  }
endif;

if ( ! function_exists( 'bloghill_validate_counter_count' ) ) :
  function bloghill_validate_counter_count( $validity, $value ){
		 $value = intval( $value );
	 if ( empty( $value ) || ! is_numeric( $value ) ) {
		 $validity->add( 'required', esc_html__( 'You must supply a valid number.', 'bloghill' ) );
	 } elseif ( $value < 1 ) {
		 $validity->add( 'min_no_of_posts', esc_html__( 'Minimum no of posts is 1', 'bloghill' ) );
	 } elseif ( $value > 50 ) {
		 $validity->add( 'max_no_of_posts', esc_html__( 'Maximum no of posts is 50', 'bloghill' ) );
	 }
	 return $validity;
  }
endif;

if ( ! function_exists( 'bloghill_validate_partners_count' ) ) :
  function bloghill_validate_partners_count( $validity, $value ){
		 $value = intval( $value );
	 if ( empty( $value ) || ! is_numeric( $value ) ) {
		 $validity->add( 'required', esc_html__( 'You must supply a valid number.', 'bloghill' ) );
	 } elseif ( $value < 1 ) {
		 $validity->add( 'min_no_of_posts', esc_html__( 'Minimum no of posts is 1', 'bloghill' ) );
	 } elseif ( $value > 50 ) {
		 $validity->add( 'max_no_of_posts', esc_html__( 'Maximum no of posts is 50', 'bloghill' ) );
	 }
	 return $validity;
  }
endif;

if ( ! function_exists( 'bloghill_validate_blog_events_count' ) ) :
  function bloghill_validate_blog_events_count( $validity, $value ){
		 $value = intval( $value );
	 if ( empty( $value ) || ! is_numeric( $value ) ) {
		 $validity->add( 'required', esc_html__( 'You must supply a valid number.', 'bloghill' ) );
	 } elseif ( $value < 1 ) {
		 $validity->add( 'min_no_of_posts', esc_html__( 'Minimum no of posts is 1', 'bloghill' ) );
	 } elseif ( $value > 50 ) {
		 $validity->add( 'max_no_of_posts', esc_html__( 'Maximum no of posts is 50', 'bloghill' ) );
	 }
	 return $validity;
  }
endif;

if ( ! function_exists( 'bloghill_validate_special_events_count' ) ) :
  function bloghill_validate_special_events_count( $validity, $value ){
		 $value = intval( $value );
	 if ( empty( $value ) || ! is_numeric( $value ) ) {
		 $validity->add( 'required', esc_html__( 'You must supply a valid number.', 'bloghill' ) );
	 } elseif ( $value < 1 ) {
		 $validity->add( 'min_no_of_posts', esc_html__( 'Minimum no of posts is 1', 'bloghill' ) );
	 } elseif ( $value > 50 ) {
		 $validity->add( 'max_no_of_posts', esc_html__( 'Maximum no of posts is 50', 'bloghill' ) );
	 }
	 return $validity;
  }
endif;

if ( ! function_exists( 'bloghill_validate_service_count' ) ) :
  function bloghill_validate_service_count( $validity, $value ){
		 $value = intval( $value );
	 if ( empty( $value ) || ! is_numeric( $value ) ) {
		 $validity->add( 'required', esc_html__( 'You must supply a valid number.', 'bloghill' ) );
	 } elseif ( $value < 1 ) {
		 $validity->add( 'min_no_of_posts', esc_html__( 'Minimum no of service is 1', 'bloghill' ) );
	 } elseif ( $value > 50 ) {
		 $validity->add( 'max_no_of_posts', esc_html__( 'Maximum no of service is 50', 'bloghill' ) );
	 }
	 return $validity;
  }
endif;

if ( ! function_exists( 'bloghill_validate_testimonial_count' ) ) :
  function bloghill_validate_testimonial_count( $validity, $value ){
		 $value = intval( $value );
	 if ( empty( $value ) || ! is_numeric( $value ) ) {
		 $validity->add( 'required', esc_html__( 'You must supply a valid number.', 'bloghill' ) );
	 } elseif ( $value < 1 ) {
		 $validity->add( 'min_no_of_posts', esc_html__( 'Minimum no of testimonial is 1', 'bloghill' ) );
	 } elseif ( $value > 50 ) {
		 $validity->add( 'max_no_of_posts', esc_html__( 'Maximum no of testimonial is 50', 'bloghill' ) );
	 }
	 return $validity;
  }
endif;

if ( ! function_exists( 'mezze_pro_validate_sponsor_count' ) ) :
  function mezze_pro_validate_sponsor_count( $validity, $value ){
		 $value = intval( $value );
	 if ( empty( $value ) || ! is_numeric( $value ) ) {
		 $validity->add( 'required', esc_html__( 'You must supply a valid number.', 'bloghill' ) );
	 } elseif ( $value < 1 ) {
		 $validity->add( 'min_no_of_posts', esc_html__( 'Minimum no of testimonial is 1', 'bloghill' ) );
	 } elseif ( $value > 50 ) {
		 $validity->add( 'max_no_of_posts', esc_html__( 'Maximum no of testimonial is 50', 'bloghill' ) );
	 }
	 return $validity;
  }
endif;