<?php
/**
 * Template for Contact Section
 *
 * @package Career_Portfolio
 */
?>
<?php $enable_contact  = career_portfolio_get_option( 'enable_contact' );
if ( false == $enable_contact ){
    return;
}
$contact_section_title  = career_portfolio_get_option( 'contact_section_title' );
$contact_title          = career_portfolio_get_option( 'contact_title' );
$contact_page       	= career_portfolio_get_option( 'contact_page' );
$contact_bg_image 		= career_portfolio_get_option( 'contact_bg_image' );
?>
<section class="section contact-us-section default-padding fp-auto-height"  <?php echo ( !empty( $contact_bg_image) ) ? 'style="background-image:url( '.esc_url( $contact_bg_image).' ) "': ''; ?>  >
        <div class="overlay"></div>
        <div class="container">
            <div class="section-wrap">
	        	<?php if ( !empty( $contact_section_title ) ): ?>
		            <header class="entry-header heading">
		                <h4 class="entry-title animated wow zoomIn" data-wow-duration="1s">
		                    <?php echo esc_html( $contact_section_title );?>
		                </h4>
		            </header>
	            <?php endif; ?>
	            <?php if( absint( $contact_page ) > 0 ): 
                    $args = array(
                        'p'             => absint( $contact_page ),
                        'post_status'    => 'publish',
                        'post_type'     => 'page',
                    );
                    $loop = new WP_Query( $args );
                    if ( $loop->have_posts() ): ?>
                    	<div class="section-content-wrap">
                        	<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
			                    <div class="section-inner-wrap">
			                        <div class="section-info"> 
			                            <h2 class="entry-title animated wow fadeInDown" data-wow-duration="1s">
			                               <?php the_title(); ?>
			                            </h2>
			                            <figure class="animated wow fadeInUp" data-wow-duration="1s">
			                                <?php the_post_thumbnail();?>
			                            </figure>
			                        </div>
			                        <div class="contact-us-wrap animated wow fadeInRight" data-wow-duration="1s">
			                        	<?php the_content(); ?>
			                        </div>
			                    </div>
		                    <?php endwhile;
		                    wp_reset_postdata();?>
                		</div>
            		<?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
</section><!--contact-us-section-->