<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Career_Portfolio
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php career_portfolio_action_image(); ?>
    <div class="post-content">

        <?php career_portfolio_action_title(); ?>

        <div class="entry-content">
            <?php the_content();

			wp_link_pages( array(

				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'career-portfolio' ),

				'after'  => '</div>',

			) );           

			?>   

        </div>

    </div>



</article><!-- #post-<?php the_ID(); ?> -->