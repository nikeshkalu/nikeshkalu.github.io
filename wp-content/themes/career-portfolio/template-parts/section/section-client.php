<?php
/**
 * Template for Client Section
 *
 * @package Career_Portfolio
 */
?>
<?php $enable_client  = career_portfolio_get_option( 'enable_client' );
if ( false == $enable_client ){
    return;
}
$client_section_title  = career_portfolio_get_option( 'client_section_title' );
$client_title          = career_portfolio_get_option( 'client_title' );
$client_category       = career_portfolio_get_option( 'client_category' );
$client_number       = career_portfolio_get_option( 'client_number' );
?>
<section class="section client-section default-padding fp-auto-height">
    <div class="container">
        <div class="section-wrap">
            <?php if ( !empty( $client_section_title ) ): ?>
                <header class="entry-header heading">
                    <h4 class="entry-title animated wow zoomIn" data-wow-duration="1s">
                       <?php echo esc_html( $client_section_title ); ?>
                    </h4>
                </header>
            <?php endif; ?>
            <div class="section-content-wrap">
                <?php if ( !empty( $client_title ) ): ?>
                    <h2 class="entry-title animated wow fadeInDown" data-wow-duration="1s">
                        <?php echo esc_html( $client_title ); ?>
                    </h2>
                <?php endif; ?>
                <div class="section-inner-wrap">
                    <?php $args = array(
                        'post_type'   => 'post',
                        'posts_per_page' => absint( $client_number ),
                        'post_status' => 'publish',
                        'paged' => 1,
                    );
                    if ( absint( $client_category ) > 0 ) {
                        $args['cat'] = absint( $client_category );
                    }  

                    // Fetch posts.
                    $the_query = new WP_Query( $args );                     
                    if ( $the_query->have_posts() ) : 
                        while ( $the_query->have_posts() ) : $the_query->the_post();  ?>		            		
		                    <div class="client-item animated wow fadeInDown" data-wow-duration="1s">
		                        <figure>
		                          <?php the_post_thumbnail();?>
		                        </figure>
		                    </div>	
		                <?php endwhile;
                        wp_reset_postdata();
		            endif; ?>
	            </div>
            </div>
        </div>
    </div>
</section><!--client-section-->