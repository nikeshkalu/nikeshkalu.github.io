<?php
/**
 * Template for Service Section
 *
 * @package Career_Portfolio
 */
?>
<?php $enable_service  = career_portfolio_get_option( 'enable_service' );
if ( false == $enable_service ){
    return;
}
$service_section_title  = career_portfolio_get_option( 'service_section_title' );
$service_title          = career_portfolio_get_option( 'service_title' );
$service_category       = career_portfolio_get_option( 'service_category' );
$service_number         = career_portfolio_get_option( 'service_number' );
?>
<section class="section service default-padding fp-auto-height">
    <div class="container">
        <div class="section-wrap">
            <?php if ( !empty( $service_section_title ) ): ?>
                <header class="entry-header heading">
                    <h4 class="entry-title animated wow zoomIn" data-wow-duration="1s">
                       <?php echo esc_html( $service_section_title );?>
                    </h4>
                </header>
            <?php endif; ?>
            <div class="section-content-wrap">
                <?php if ( !empty( $service_title ) ): ?>
                    <h2 class="entry-title animated wow fadeInDown" data-wow-duration="1s">
                        <?php echo esc_html( $service_title ); ?>
                    </h2>
                <?php endif; ?>
                <div class="section-inner-wrap">
                    <?php $args = array(
                        'post_type'   => 'post',
                        'posts_per_page' => absint( $service_number ),
                        'post_status' => 'publish',
                        'paged' => 1,
                    );
                    if ( absint( $service_category ) > 0 ) {
                        $args['cat'] = absint( $service_category );
                    }           

                    // Fetch posts.
                    $the_query = new WP_Query( $args );                     
                    if ( $the_query->have_posts() ) : 
                        $count = 0;
                        while ( $the_query->have_posts() ) : $the_query->the_post(); $count++; ?>                   
                            <div class="service-item animated wow fadeInDown" data-wow-duration="<?php echo absint( $count );?>s">
                                <figure>
                                    <?php the_post_thumbnail( 'career-portfolio-service');?>
                                </figure>
                                <h4 class="entry-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h4>
                                <div class="entry-content">
                                    <?php
                                        $excerpt = career_portfolio_the_excerpt( 20 );
                                        echo wp_kses_post( wpautop( $excerpt ) );
                                    ?>
                                </div>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata();
                    endif; ?>
                </div>
            </div>                        
        </div>
    </div>
</section><!--service-->