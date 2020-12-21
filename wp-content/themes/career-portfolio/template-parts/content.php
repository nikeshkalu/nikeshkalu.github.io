<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Career_Portfolio
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-item' ); ?> >
    <?php if ( has_post_thumbnail() ): ?>
        <figure>
            <?php the_post_thumbnail( 'medium' )?>
            <a class="main-button" href="<?php the_permalink(); ?>">
                <span></span><?php echo esc_html__( 'Read More', 'career-portfolio');?>
            </a>
        </figure>
    <?php endif; ?>
    <div class="post-content">
        <?php  $enable_posted_date = career_portfolio_get_option( 'enable_posted_date' );
        	if ( true == $enable_posted_date ){
        		career_portfolio_posted_on();
        	}
        	
        ?>
        <div class="post-info">
	        <?php  $enable_categories = career_portfolio_get_option( 'enable_categories' );
	        	if ( true == $enable_categories ){ ?>
	        		<div class="entry-meta">
	        			<?php career_portfolio_entry_categories(); ?>
        			</div>
	        	<?php }
	        	
	        ?>        	
            <h5 class="entry-title">
                <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
            </h5>
        </div>
    </div>
</article>
