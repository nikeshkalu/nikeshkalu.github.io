<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Career_Portfolio
 */

get_header();
?>
<div class="primary-secondary-wrap">
	<div class="container">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
				<section class="section blog-article">
					<div class="section-wrap">
						<?php if ( have_posts() ) : 
							if ( is_home() && ! is_front_page() ) :
								?>
								<header class="entry-header heading">
									<h2 class="page-title entry-title screen-reader-text">
										<?php
										/* translators: %s: search query. */
										printf( esc_html__( 'Search Results for: %s', 'career-portfolio' ), '<span>' . get_search_query() . '</span>' );
										?>
									</h2>
								</header>
								<?php
							endif;
							?>

							<div class="section-content-wrap" id="section-content-wrap">
								<?php

								the_archive_description( '<h2 class="entry-title">', '</h2>' );
								?>
								<div class="section-inner-wrap" id="section-inner-wrap">
									<?php 
									/* Start the Loop */
									while ( have_posts() ) :
										the_post();

										/*
										 * Include the Post-Type-specific template for the content.
										 * If you want to override this in a child theme, then include a file
										 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
										 */
										get_template_part( 'template-parts/content', get_post_type() );

									endwhile;

										do_action( 'career_portfolio_action_navigation' );
									
									?>
								</div>
							</div>
						<?php else :

							get_template_part( 'template-parts/content', 'none' );

						endif;	
						?>
					</div>
				</section>	
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
