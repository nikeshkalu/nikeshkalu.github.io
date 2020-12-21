<?php
/**
 * Theme functions related to structure.
 *
 * This file contains structural hook functions.
 *
 * @package Career_Portfolio
 */

if ( ! function_exists( 'career_portfolio_doctype' ) ) :
	/**
	 * Doctype Declaration.
	 *
	 * @since 1.0.0
	 */
	function career_portfolio_doctype() {
	?><!DOCTYPE html> <html <?php language_attributes(); ?>><?php
	}	
endif;
add_action( 'career_portfolio_action_doctype', 'career_portfolio_doctype', 10 );


if ( !function_exists( 'career_portfolio_head' ) ) :
	/**
	 * Header Codes.
	 *
	 * @since 1.0.0
	 */
	function career_portfolio_head() {
	?>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
	<?php
	}

endif;
add_action( 'career_portfolio_action_head', 'career_portfolio_head', 10 );

if ( ! function_exists( 'career_portfolio_line_wrap' ) ) :
	/**
	 * Line Wrap Start.
	 *
	 * @since 1.0.0
	 */
	function career_portfolio_line_wrap() {
		 $enable_line_wrap = career_portfolio_get_option( 'enable_line_wrap' );
		 if ( false == $enable_line_wrap ){
		 	return;
		 }
	?>	

	    <div class="lines-wrap">
	        <div class="container">
	            <div class="line-inner-wrap">
	                <div class="line-item">  
	                </div>
	                <div class="line-item">  
	                </div>
	                <div class="line-item">          
	                </div>
	                <div class="line-item">
	                </div>
	            </div>
	        </div>
	    </div>
    <?php
	}
endif;
add_action( 'career_portfolio_action_before', 'career_portfolio_line_wrap', 10 );



if ( ! function_exists( 'career_portfolio_page_start' ) ) :
	/**
	 * Page Start.
	 *
	 * @since 1.0.0
	 */
	function career_portfolio_page_start() {
	?>	
    	<div id="page" class="hfeed site">
    		<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'career-portfolio' ); ?></a>
    <?php
	}
endif;
add_action( 'career_portfolio_action_before', 'career_portfolio_page_start', 15 );



if ( ! function_exists( 'career_portfolio_page_end' ) ) :
	/**
	 * Page End.
	 *
	 * @since 1.0.0
	 */
	function career_portfolio_page_end() {

	?></div><!-- #page --><?php
	}
endif;
add_action( 'career_portfolio_action_after', 'career_portfolio_page_end' );



if ( ! function_exists( 'career_portfolio_header_start' ) ) :
	/**
	 * Header Start
	 *
	 * @since 1.0.0
	 */
	function career_portfolio_header_start() {
	?>
	<header id="masthead" class="site-header"> <!-- header starting from here --><?php	
	$header_layout = career_portfolio_get_option( 'header_layout' ); 
	if( 'normal-menu' == $header_layout ):
		echo "<div class='container'>";
	endif;
	}
endif;
add_action( 'career_portfolio_action_before_header', 'career_portfolio_header_start', 10 );


if ( ! function_exists( 'career_portfolio_header_end' ) ) :
	/**
	 * Header End
	 *
	 * @since 1.0.0
	 */
	function career_portfolio_header_end() {
	$header_layout = career_portfolio_get_option( 'header_layout' ); 
	if( 'normal-menu' == $header_layout ):
		echo "</div>";
	endif;
	?></header><!-- header ends here --><?php	
	}
endif;
add_action( 'career_portfolio_action_after_header', 'career_portfolio_header_end', 10 );



if ( ! function_exists( 'career_portfolio_content_start' ) ) :
	/**
	 * Content Start.
	 *
	 * @since 1.0.0
	 */
	function career_portfolio_content_start() {
	?><div id="myfullpage"><?php
	}
endif;
add_action( 'career_portfolio_action_before_content', 'career_portfolio_content_start' );

if ( ! function_exists( 'career_portfolio_content_end' ) ) :
	/**
	 * Content End.
	 *
	 * @since 1.0.0
	 */
	function career_portfolio_content_end() {
	?></div><!-- #content --><?php
	}
endif;
add_action( 'career_portfolio_action_after_content', 'career_portfolio_content_end' );



if ( ! function_exists( 'career_portfolio_footer_start' ) ) :
	/**
	 * Footer Start.
	 *
	 * @since 1.0.0
	 */

	function career_portfolio_footer_start() {
	?>
	<footer id="colophon" class="site-footer"><div class="footer-wrap"> <!-- footer starting from here -->
	<?php
	}
endif;
add_action( 'career_portfolio_action_before_footer', 'career_portfolio_footer_start' );

if ( ! function_exists( 'career_portfolio_footer_end' ) ) :
	/**
	 * Footer End.
	 *
	 * @since 1.0.0
	 */
	function career_portfolio_footer_end() {
	?></div></footer><!-- #colophon --><?php
	}
endif;
add_action( 'career_portfolio_action_after_footer', 'career_portfolio_footer_end' );