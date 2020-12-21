<?php
/**
 * Template for Blog Section
 *
 * @package Career_Portfolio
 */
?>
<?php $enable_blog  = career_portfolio_get_option( 'enable_blog' );
if ( false == $enable_blog ){
    return;
}
$blog_section_title  = career_portfolio_get_option( 'blog_section_title' );
$career_portfolio_blog_title          = career_portfolio_get_option( 'blog_title' );
$blog_category       = career_portfolio_get_option( 'blog_category' );
$blog_number       = career_portfolio_get_option( 'blog_number' );
$blog_button_url       = career_portfolio_get_option( 'blog_button_url' );


?>
<section class="section blog-section default-padding fp-auto-height">
    <div class="container">
        <div class="section-wrap">
            <?php if ( !empty( $blog_section_title ) ): ?>
                <header class="entry-header heading">
                    <h4 class="entry-title animated wow zoomIn" data-wow-duration="1s">
                       <?php echo esc_html( $blog_section_title );?>
                    </h4>
                </header>
            <?php endif; ?>
            <div class="section-content-wrap">
                <?php if ( !empty( $career_portfolio_blog_title ) ): ?>
                    <h2 class="entry-title animated wow fadeInDown" data-wow-duration="1s">
                        <?php echo esc_html( $career_portfolio_blog_title ); ?>
                    </h2>
                <?php endif; ?>
                <?php $args = array(
                    'post_type'   => 'post',
                    'posts_per_page' => absint( $blog_number ),
                    'post_status' => 'publish',
                    'paged' => 1,
                );
                if ( absint( $blog_category ) > 0 ) {
                    $args['cat'] = absint( $blog_category );
                }  
                // Fetch posts.
                $the_query = new WP_Query( $args );                    
                if ( $the_query->have_posts() ) : $count = 0;  
                    $career_portfolio_blog_id = get_option( 'page_for_posts' );
                    $blog_link = get_page_link( absint( $career_portfolio_blog_id ) );
                    if ( absint( $blog_category ) > 0 ) {
                            $blog_link = get_category_link( absint( $blog_category) );
                    }
                ?>      
                    <div class="section-inner-wrap">
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); $count++; ?>
                                <article class="post blog-item animated wow fadeInDown" data-wow-duration="1s">
                                    <figure>
                                        <?php the_post_thumbnail( 'medium' )?>
                                        <a class="main-button" href="<?php the_permalink(); ?>">
                                            <span></span><?php echo esc_html__( 'Read More', 'career-portfolio');?>
                                        </a>
                                    </figure>
                                    <div class="post-content">
                                        <?php career_portfolio_posted_on(); ?>
                                        <div class="post-info">
                                            <div class="entry-meta">
                                                <?php career_portfolio_entry_categories(); ?>
                                            </div>
                                            <h5 class="entry-title">
                                                <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                                            </h5>
                                        </div>
                                    </div>
                                </article>
                        <?php endwhile; 
                        wp_reset_postdata(); ?>
                    </div>
                    <div class="read-more-wrap">
                        <a class="main-button animated wow fadeInUp" data-wow-duration="1s" href="<?php echo esc_url( $blog_link );?>">
                            <span></span><?php echo esc_html( $blog_button_url );?>
                        </a>
                    </div>
                <?php endif; ?>  
            </div>
        </div>
    </div>
</section><!--blog-section-->