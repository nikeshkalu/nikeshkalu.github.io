<?php 
/**
 * Callback Function
 *
 * @package Career_Portfolio
 */
/**
 * Active callback Header Media
 */
if ( ! function_exists( 'career_portfolio_callback_header_media' ) ) :
	/**
	 * Active callback Header Media
	 */
	function career_portfolio_callback_header_media( $control ) { 
		if ( true == $control->manager->get_setting( 'theme_options[enable_header_media]' )->value() ) {
			return true;
		} else {
			return false;
		}
	}
endif;

/**
 * Active callback Header Navigation
 */
if ( ! function_exists( 'career_portfolio_callback_header_navigation' ) ) :
	/**
	 * Active callback Header Navigation
	 */
	function career_portfolio_callback_header_navigation( $control ) { 
		if ( true == $control->manager->get_setting( 'theme_options[enable_toggle_section]' )->value() ) {
			return true;
		} else {
			return false;
		}
	}
endif;

