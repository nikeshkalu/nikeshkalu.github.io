<?php
/**
 * Template for Video Section
 *
 * @package Career_Portfolio
 */

?>
<?php $enable_video  = career_portfolio_get_option( 'enable_video' );
if ( false == $enable_video ){
    return;
}
$video_section_title  = career_portfolio_get_option( 'video_section_title' );
$video_title          = career_portfolio_get_option( 'video_title' );
$video_url          = career_portfolio_get_option( 'video_url' );
$video_bg_image          = career_portfolio_get_option( 'video_bg_image' );
?>
<section class="section video-section fp-auto-height" <?php echo ( !empty( $video_bg_image) ) ? 'style="background-image:url( '.esc_url( $video_bg_image).' ) "': ''; ?> >
    <div class="overlay"></div> 
    <div class="container">
        <div class="section-wrap">
        	<?php if ( !empty( $video_section_title ) ): ?>
                <header class="entry-header heading">
                    <h4 class="entry-title animated wow zoomIn" data-wow-duration="1s">
                        <?php echo esc_html( $video_section_title );?>
                    </h4>
                </header>
            <?php endif; ?> 
            <div class="video-content">
            	<?php if ( !empty( $video_url ) ): ?>
    	            <a class="icon animated wow zoomIn" data-wow-duration="1s" href="<?php echo esc_url( $video_url );?>">
    	                <i class="fa fa-play" aria-hidden="true"></i>
    	            </a>
                <?php endif; ?>
            	<?php if ( !empty( $video_title ) ): ?>
                    <h2 class="entry-title animated wow fadeInDown" data-wow-duration="1s">
                        <?php echo esc_html( $video_title ); ?>
                    </h2>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section><!--video-section-->