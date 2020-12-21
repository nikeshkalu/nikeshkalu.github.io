<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Career_Portfolio
 */

	/*
	 * Hook - career_portfolio_action_after_content
	 *
	 * @hooked - career_portfolio_content_end -10
	 *
	*/
	do_action( 'career_portfolio_action_after_content' );

	/*
	 * Hook - career_portfolio_action_before_footer
	 *
	 * @hooked - career_portfolio_footer_start -10
	*/
	do_action( 'career_portfolio_action_before_footer' );

	/*
	 * Hook - career_portfolio_action_footer
	 *
	 * @hooked - career_portfolio_footer_end -10
	*/
	do_action( 'career_portfolio_action_footer' );

	/*
	 * Hook - career_portfolio_action_after_footer
	 *
	 * @hooked - career_portfolio_footer_end -10
	*/
	do_action( 'career_portfolio_action_after_footer' );

	/*
	 * Hook - career_portfolio_action_scroll_footer
	 *
	 * @hooked - career_portfolio_scroll_footer -10
	*/
	do_action( 'career_portfolio_action_scroll_footer' );	

	/*
	 * Hook - career_portfolio_action_after
	 *
	 * @hooked - career_portfolio_page_end -10
	*/
	do_action( 'career_portfolio_action_after' );
	?>

<?php wp_footer(); ?>

</body>
</html>
