<?php
/**
 * Template for Portfolio Section
 *
 * @package Career_Portfolio
 */
?>
<?php $enable_portfolio  = career_portfolio_get_option( 'enable_portfolio' );
if ( false == $enable_portfolio ){
    return;
}
$portfolio_section_title  = career_portfolio_get_option( 'portfolio_section_title' );
$portfolio_title          = career_portfolio_get_option( 'portfolio_title' );
$portfolio_category          = career_portfolio_get_option( 'portfolio_category' );
$portfolio_button_title          = career_portfolio_get_option( 'portfolio_button_title' );
?>
<section class="section portfolio default-padding fp-auto-height">
    <div class="container">
        <div class="section-wrap">
        	<?php if ( !empty( $portfolio_section_title ) ): ?>
	            <header class="entry-header heading">
	                <h4 class="entry-title  animated wow zoomIn" data-wow-duration="1s">
	                    <?php echo esc_html( $portfolio_section_title);?>
	                </h4>
	            </header>
            <?php endif; ?>
            <div class="section-content-wrap">
            	<?php if ( !empty( $portfolio_title ) ): ?>
	                <h2 class="entry-title  animated wow fadeInDown" data-wow-duration="1s">
	                    <?php echo esc_html( $portfolio_title ); ?>
	                </h2>
                <?php endif; ?>
                <div class="section-inner-wrap">
                    <div class="portfolio-tab-option">
                        <ul class="button-group work-filters-button">
                            <li class="active" data-filter="*"><?php echo esc_html__( 'All','career-portfolio');?></li>
							<?php if ( ! empty( $portfolio_category ) ) : 

								foreach ( $portfolio_category as $category ) :
								$career_portfolio_term = get_term( (int) $category, 'category' );							
								?>
									<li class="btnn fil-cat filter" data-filter=".<?php echo esc_attr($career_portfolio_term->slug);?>"><?php echo esc_html( $career_portfolio_term->name ); ?></li>	
								<?php endforeach;				
							endif;?>                            
                        </ul>
                    </div>
                    <?php if ( ! empty( $portfolio_category ) ) {  ?>
	                    <div class="portfolio-wrap">
	                    	<?php $portfolio_arg = array(
								'post_type'         => 'post',	
								'posts_per_page' 	=> 6,
								'post_status'		=> 'publish',
								'cat'				=> $portfolio_category,
							);
							$portfolio_posts = new WP_Query( $portfolio_arg );
							if ( $portfolio_posts->have_posts() ) :
								while ( $portfolio_posts->have_posts() ) :$portfolio_posts->the_post(); ?>
									<?php $retreat_cat = get_the_terms( get_the_ID(), 'category' );
						        	 
						        	    $retreat_cat_list = array();
						        	    foreach ( $retreat_cat as $career_portfolio_term ) {
						        	        $retreat_cat_list[] = $career_portfolio_term->slug;
						        	    }
						        	    $category_list = join( " ", $retreat_cat_list );
						        								
									?>	
			                        <article class="portfolio-item <?php echo esc_attr($category_list );?> " >		 	
			                            <figure>
			                                <?php the_post_thumbnail( 'career-portfolio-portfolio' ); ?>
			                            </figure>
			                            <div class="portfolio-content">
			                                <div class="entry-meta">
			                                    <div class="post-cat-list">
													<?php career_portfolio_entry_categories(); ?>
			                                    </div>
			                                </div>
			                                <h5 class="entry-title">
			                                    <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
			                                </h5>
			                                <a class="read-more" href="<?php the_permalink();?>"><?php echo esc_html( $portfolio_button_title );?></a>
			                            </div>
			                        </article>
		                        <?php endwhile;
		                        wp_reset_postdata(); 
	                        endif; ?>
	                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section><!--portfolio-->