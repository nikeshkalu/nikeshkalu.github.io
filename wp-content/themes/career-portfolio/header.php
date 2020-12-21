<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Career_Portfolio
 */
?>
<?php 
	/*
	 * Hook- career_portfolio_action_doctype
	 *
	 * @hooked - career_portfolio_doctype -10
	*/
	do_action( 'career_portfolio_action_doctype' );
	?>
	<head>
		<?php 
			/*
			 * Hook - career_portfolio_action_head
			 *
			 * @hooked - career_portfolio_head -10
			*/
			do_action( 'career_portfolio_action_head' );		
		?>
		<?php wp_head(); ?>
	</head>
<body <?php body_class(); ?>>
	<?php if ( function_exists( 'wp_body_open' ) ) { 
		wp_body_open(); 
	} else{
		do_action( 'wp_body_open' );
	}?>
	<?php 
		/*
		 * Hook - career_portfolio_action_before
		 *
		 * @hooked - career_portfolio_page_start -10
		*/ 
		do_action( 'career_portfolio_action_before' );

		/*
		 * Hook - career_portfolio_action_before_header
		 *
		 * @hooked career_portfolio_header_start - 10
		 *
		*/
		do_action( 'career_portfolio_action_before_header' );

		/*
		 * Hook - career_portfolio_action_header
		 *
		 * @hooked career_portfolio_header - 10
		 *
		*/
		do_action( 'career_portfolio_action_header' );	

		/*
		 * Hook - career_portfolio_action_after_header
		 *
		 * @hooked career_portfolio_header_end - 10
		 *
		*/
		do_action( 'career_portfolio_action_after_header' );

		/*
		 * Hook - career_portfolio_action_before_content
		 *
		 * @hooked - career_portfolio_content_start -10
		 *
		*/
		do_action( 'career_portfolio_action_before_content' );
		
		/*
		 * Hook - career_portfolio_action_header_banner
		 *
		 * @hooked - career_portfolio_header_banner -10
		 *
		*/
		do_action( 'career_portfolio_action_header_banner' );	
	?>