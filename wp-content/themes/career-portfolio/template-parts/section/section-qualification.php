<?php
/**
 * Template for Qualitication Section
 *
 * @package Career_Portfolio
 */
?>
<?php $enable_qualification  = career_portfolio_get_option( 'enable_qualification' );
if ( false == $enable_qualification ){
    return;
}
$qualification_section_title 	= career_portfolio_get_option( 'qualification_section_title' );
$qualification_title_1			= career_portfolio_get_option( 'qualification_title_1' );
$qualification_title_2			= career_portfolio_get_option( 'qualification_title_2' );
$qualification_category 		= career_portfolio_get_option( 'qualification_category' );
$qualification_category_second	= career_portfolio_get_option( 'qualification_category_second' );
$qualification_number			= career_portfolio_get_option( 'qualification_number' );
$qualification_button_title 	= career_portfolio_get_option( 'qualification_button_title' );
$qualification_button_url 		= career_portfolio_get_option( 'qualification_button_url' );
?>
<section class="section qualification default-padding fp-auto-height">
    <div class="container">
        <div class="section-wrap">
        	<?php if ( !empty( $qualification_section_title ) ): ?>
	            <header class="entry-header heading">
	                <h4 class="entry-title animated wow zoomIn" data-wow-duration="1s">
	                    <?php echo esc_html( $qualification_section_title );?>
	                </h4>
	            </header>
            <?php endif; ?>
            <div class="section-content-wrap">
                <div class="section-inner-wrap">
                    <div class="section-content-left">
                    	<?php if ( !empty( $qualification_title_1 ) ): ?>
	                        <h2 class="entry-title animated wow fadeInDown" data-wow-duration="1s">
	                            <?php echo esc_html( $qualification_title_1 ); ?>
	                        </h2>
                        <?php endif; ?>
		                <?php $args = array(
		                    'post_type'   => 'post',
		                    'posts_per_page' => absint( $qualification_number ),
		                    'post_status' => 'publish',
		                    'paged' => 1,
		                );
		                if ( absint( $qualification_category ) > 0 ) {
		                    $args['cat'] = absint( $qualification_category );
		                } 
		                // Fetch posts.
		                $the_query = new WP_Query( $args ); 
		                if ( $the_query->have_posts() ) : ?>
	                        <div class="qualification-wrap">
	                        	<?php while ( $the_query->have_posts() ) : $the_query->the_post();  ?>
		                            <div class="qualification-item animated wow fadeInDown" data-wow-duration="1s">
		                                <span class="section-icon">
		                                        <i class="fa fa-briefcase" aria-hidden="true"></i>
		                                </span>
		                                <div class="section-contain">
		                                    <span class="date-interval"><?php career_portfolio_posted_on(); ?></span>
		                                    <h5 class="entry-title">
		                                        <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
		                                    </h5>
		                                    <div class="entry-content">
			                                    <?php
			                                        $excerpt = career_portfolio_the_excerpt( 20 );
			                                        echo wp_kses_post( wpautop( $excerpt ) );
			                                    ?>
		                                    </div>
		                                </div>
		                            </div>
	                            <?php endwhile;
	                            wp_reset_postdata();?>
	                        </div>
                    	<?php endif; ?>
                    </div>
                    <div class="section-content-right">
                    	<?php if ( !empty( $qualification_title_2 ) ): ?>
	                        <h2 class="entry-title animated wow fadeInDown" data-wow-duration="1s">
	                            <?php echo esc_html( $qualification_title_2 ); ?>
	                        </h2>
                        <?php endif; ?>
		                <?php $args = array(
		                    'post_type'   => 'post',
		                    'posts_per_page' => absint( $qualification_number ),
		                    'post_status' => 'publish',
		                    'paged' => 1,
		                );

		                if ( absint( $qualification_category_second ) > 0 ) {
		                    $args['cat'] = absint( $qualification_category_second );
		                } 
		                // Fetch posts.
		                $the_query = new WP_Query( $args ); 
		                if ( $the_query->have_posts() ) : ?>  
	                        <div class="qualification-wrap">
	                        	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		                            <div class="qualification-item animated wow fadeInDown" data-wow-duration="1s">
		                                <span class="section-icon">
		                                        <i class="fa fa-briefcase" aria-hidden="true"></i>
		                                </span>
		                                <div class="section-contain">
		                                    <span class="date-interval"><?php career_portfolio_posted_on(); ?></span>
		                                    <h5 class="entry-title">
		                                        <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
		                                    </h5>
		                                    <div class="entry-content">
			                                    <?php
			                                        $excerpt = career_portfolio_the_excerpt( 20 );
			                                        echo wp_kses_post( wpautop( $excerpt ) );
			                                    ?>
		                                    </div>
		                                </div>
		                            </div>
	                            <?php endwhile;
	                            wp_reset_postdata();?>
	                        </div>
                    	<?php endif; ?>
                    </div>
                </div>
                <?php if ( !empty( $qualification_button_title) && !empty( $qualification_button_url ) ): ?>
	                <a class="main-button animated wow zoomIn" data-wow-duration="1s" href="<?php echo esc_url( $qualification_button_url );?>">
	                    <span></span><?php echo esc_html( $qualification_button_title );?>
	                </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section><!--qualification-->