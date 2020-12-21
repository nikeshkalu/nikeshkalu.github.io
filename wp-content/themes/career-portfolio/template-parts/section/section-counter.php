<?php
/**
 * Template for Counter Section
 *
 * @package Career_Portfolio
 */
?>
<?php $enable_counter  = career_portfolio_get_option( 'enable_counter' );
$about_us_page       = career_portfolio_get_option( 'about_us_page' );
if ( false == $enable_counter ){
    return;
}
$counter_section_title 	= career_portfolio_get_option( 'counter_section_title' );
$counter_bg_image 		= career_portfolio_get_option( 'counter_bg_image' );
$counter_page       = career_portfolio_get_option( 'counter_page' );
?>
<section class="section counter-section  fp-auto-height" <?php echo ( !empty( $counter_bg_image) ) ? 'style="background-image:url( '.esc_url( $counter_bg_image).' ) "': ''; ?> >
    <div class="overlay"></div> 
    <div class="container">
        <div class="section-wrap">
        	<?php if ( !empty( $counter_section_title ) ): ?>
	            <header class="entry-header heading">
	                <h4 class="entry-title animated wow zoomIn" data-wow-duration="1s">
	                    <?php echo esc_html( $counter_section_title );?>
	                </h4>
	            </header>
            <?php endif; ?>

            <?php if( absint( $counter_page ) > 0 ):
                $args = array(
                    'p'             => absint( $counter_page ),
                    'post_status'    => 'publish',
                    'post_type'     => 'page',
                );
                $loop = new WP_Query( $args );
                if ( $loop->have_posts() ):
                    while( $loop->have_posts() ) : $loop->the_post();  ?>
                        <div class="section-content-wrap">
                       		<div class="entry-content">
	                            <?php
	                            	the_content();
	                            ?>  
	                        </div>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata(); 
                endif; 
            endif;?>
        </div>
    </div>
</section><!--counter-section-->