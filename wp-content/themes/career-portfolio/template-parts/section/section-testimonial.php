<?php
/**
 * Template for Testimonial Section
 *
 * @package Career_Portfolio
 */
?>
<?php $enable_testimonial  = career_portfolio_get_option( 'enable_testimonial' );
if ( false == $enable_testimonial ){
    return;
}
$testimonial_section_title  = career_portfolio_get_option( 'testimonial_section_title' );
$testimonial_page          = career_portfolio_get_option( 'testimonial_page' );
$testimonial_category       = career_portfolio_get_option( 'testimonial_category' );
$testimonial_number       = career_portfolio_get_option( 'testimonial_number' );
?>
<section class="section testimonial-section default-padding fp-auto-height">
    <?php $args = array(
        'post_type'   => 'post',
        'posts_per_page' => absint( $testimonial_number ),
        'post_status' => 'publish',
        'paged' => 1,
    );
    if ( absint( $testimonial_category ) > 0 ) {
        $args['cat'] = absint( $testimonial_category );
    }  

    // Fetch posts.
    $the_query = new WP_Query( $args );                     
    if ( $the_query->have_posts() ) : ?>
    	<?php while ( $the_query->have_posts() ) : $the_query->the_post();  ?>
		    <div class="testi-figure">
		        <figure>
		            <?php the_post_thumbnail( 'thumbnail'); ?>
		        </figure>
		    </div>
	    <?php endwhile;
	    wp_reset_postdata();
	endif; ?>
    <div class="container">
        <div class="section-wrap">
        	<?php if ( $testimonial_section_title ): ?>
	            <header class="entry-header heading">
	                <h4 class="entry-title animated wow zoomIn" data-wow-duration="1s">
	                    <?php echo esc_html( $testimonial_section_title ); ?>
	                </h2>
	            </header>
            <?php endif; ?>
            <div class="section-content-wrap">
                <div class="section-inner-wrap">
                	<?php if( absint( $testimonial_page ) > 0 ): 
                        $args = array(
                            'p'             => absint( $testimonial_page ),
                            'post_status'    => 'publish',
                            'post_type'     => 'page',
                        );
                        $loop = new WP_Query( $args );
                        if ( $loop->have_posts() ):
                            while( $loop->have_posts() ) : $loop->the_post();
                        ?> 
		                        <div class="section-info animated wow fadeInDown" data-wow-duration="1s"> 
			                        <h2 class="entry-title">
			                           <?php the_title();?>
			                        </h2>
			                        <div class="entry-content">
		                                <?php
		                                    $excerpt = career_portfolio_the_excerpt( 50 );
		                                    echo wp_kses_post( wpautop( $excerpt ) );
		                                ?>  
			                        </div>

			                    </div>
		                    <?php endwhile;
		                    wp_reset_postdata();
	                    endif; ?>
                    <?php endif; ?>
                    <div class="testimonial-wrap animated wow fadeInRight" data-wow-duration="1s">
		                <?php $args = array(
		                    'post_type'   => 'post',
		                    'posts_per_page' => absint( $testimonial_number ),
		                    'post_status' => 'publish',
		                    'paged' => 1,
		                );
		                if ( absint( $testimonial_category ) > 0 ) {
		                    $args['cat'] = absint( $testimonial_category );
		                }  
		                // Fetch posts.
		                $the_query = new WP_Query( $args );  
		                if ( $the_query->have_posts() ) : ?> 
		                	<?php while ( $the_query->have_posts() ) : $the_query->the_post();  ?>
		                        <div class="testimonial-item">
		                            <div class="testimonial-content">
		                                <div class="entry-content">
		                                    <?php
		                                        $excerpt = career_portfolio_the_excerpt( 20 );
		                                        echo wp_kses_post( wpautop( $excerpt ) );
		                                    ?>
		                                </div>
		                            </div>
		                            <div class="testimonial-intro">
		                                <div class="testi-figure">
		                                    <figure>
		                                       <?php the_post_thumbnail( 'thumbnail' ); ?>
		                                    </figure>
		                                </div>
		                                <div class="intro">
		                                    <h5 class="entry-title">
		                                       <?php the_title();?>
		                                    </h5>
		                                </div>
		                            </div>
		                        </div>
	                        <?php endwhile;
	                        wp_reset_postdata(); ?>
                    	<?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--testimonial-section-->