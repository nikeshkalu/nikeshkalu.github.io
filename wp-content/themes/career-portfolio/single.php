<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Career_Portfolio
 */

get_header();
?>
<div class="primary-secondary-wrap">
	<div class="container">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'single' );

				the_post_navigation();

				// If comments are open or we have at least one comment, load up the comment template.
				career_portfolio_action_comment();

			endwhile; // End of the loop.
			?>

			</main><!-- #main -->
		</div><!-- #primary -->
		<?php
		/**
		 *
		 * Hook - career_portfolio_action_sidebar_layout
		 *
		 * @hooked -career_portfolio_sidebar_layout -10
		*/
		do_action( 'career_portfolio_action_sidebar_layout' );
		?>
	</div>
</div>
<?php
get_footer();
