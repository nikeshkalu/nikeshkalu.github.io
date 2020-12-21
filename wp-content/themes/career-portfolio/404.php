<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Career_Portfolio
 */

get_header();
?>
<div class="primary-secondary-wrap">
	<div class="container">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">				
				<section class="error-404 not-found" style="background-image: url(<?php echo esc_url(get_template_directory_uri() );?>/assets/img/error.jpg);">
					<div class="error-404-wrapper">
						<h4 class="entry-title"><span class="first-word"><?php esc_html_e( '404', 'career-portfolio' ); ?></span></h4>
						<h4><?php esc_html_e( 'page not found', 'career-portfolio' ); ?></h4>
						<a class="main-button button" href="<?php echo esc_url(home_url('/')); ?>">
							<span class="button-icon"></span><?php echo esc_html__( 'BACK TO HOMEPAGE', 'career-portfolio' );?>
						</a>
					</div>
				</section><!-- .error-404 -->
			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
</div>
<?php
get_footer();
