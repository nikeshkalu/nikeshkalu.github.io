<?php
/**
 * Template for About Section
 *
 * @package Career_Portfolio
 */
?>
<?php $enable_aboutus  = career_portfolio_get_option( 'enable_aboutus' );
$about_us_page       = career_portfolio_get_option( 'about_us_page' );
$about_us_length       = career_portfolio_get_option( 'about_us_length' );
if ( false == $enable_aboutus ){
    return;
}
$intro_section_title = career_portfolio_get_option( 'intro_section_title' );
?>
<section class="section aboutus default-padding fp-auto-height">
    <div class="container">
        <div class="section-wrap">
            <?php if ( !empty( $intro_section_title ) ): ?>
                <header class="entry-header heading">
                    <h4 class="entry-title animated wow zoomIn" data-wow-duration="1s">
                        <?php echo esc_html( $intro_section_title );?>
                    </h4>
                </header>
            <?php endif; ?>
            <div class="section-content-wrap">
                <div class="section-inner-wrap">
                    <?php if( absint( $about_us_page ) > 0 ):
                        $args = array(
                            'p'             => absint( $about_us_page ),
                            'post_status'    => 'publish',
                            'post_type'     => 'page',
                        );
                        $loop = new WP_Query( $args );
                        if ( $loop->have_posts() ):
                            while( $loop->have_posts() ) : $loop->the_post();  ?>
                                <div class="section-info">
                                    <h2 class="entry-title animated wow fadeInDown" data-wow-duration="2s">
                                       <?php the_title(); ?>
                                    </h2>
                                    <div class="entry-content">
                                        <?php
                                            $excerpt = career_portfolio_the_excerpt( absint( $about_us_length ) );
                                            echo wp_kses_post( wpautop( $excerpt ) );
                                        ?>  
                                    </div>
                                </div>
                                <div class="my-skill  animated wow fadeInDown" data-wow-duration="1s">
                                    <figure><?php the_post_thumbnail();?></figure>
                                </div>
                            <?php endwhile;
                            wp_reset_postdata(); 
                        endif; 
                    endif;?>
                </div>
            </div>
        </div>
    </div>

</section>