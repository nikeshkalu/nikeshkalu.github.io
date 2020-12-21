<?php
/**
 * Template Name: Home Page
 *
 * @package Career_Portfolio
 */
get_header(); 
	/***************** About Us Section **********************************/
	get_template_part( 'template-parts/section/section', 'aboutus' );

	get_template_part( 'template-parts/section/section', 'qualification' );

	get_template_part( 'template-parts/section/section', 'service' );

	get_template_part( 'template-parts/section/section', 'counter' );

	get_template_part( 'template-parts/section/section', 'portfolio' );

	get_template_part( 'template-parts/section/section', 'video' );

	get_template_part( 'template-parts/section/section', 'testimonial' );

	get_template_part( 'template-parts/section/section', 'client' );

	get_template_part( 'template-parts/section/section', 'blog' );

	get_template_part( 'template-parts/section/section', 'contact' );

	?>

	<?php $enable_home_content = career_portfolio_get_option( 'enable_home_content' );
	if ( true == $enable_home_content ): ?>
		<div class="primary-secondary-wrap">
			<div class="container">
				<div id="primary" class="content-area">
					<main id="main" class="site-main">
					<?php
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content', 'page' );
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
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
	<?php endif; ?>
<?php get_footer();