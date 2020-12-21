<?php
/**
 * Custom theme functions.
 *
 * This file contains hook functions attached to theme hooks.
 *
 * @package Career_Portfolio
 */
if ( ! function_exists( 'career_portfolio_site_branding' ) ) :
    /**
     * Site Branding
     *
     * @since 1.0.0
     */
    function career_portfolio_site_branding() {
    ?>
        <section class="site-branding">
            <?php $site_identity  = career_portfolio_get_option( 'site_identity' );
            if ( in_array( $site_identity, array( 'logo-only', 'logo-text','logo-title' ) )  ) { ?>
                <div class="site-logo">
                    <?php the_custom_logo(); ?> 
                </div>
            <?php } ?>

            <?php if ( in_array( $site_identity, array( 'title-text', 'title-only', 'logo-text','logo-title' ) ) ) : ?>
                <?php
                if( in_array( $site_identity, array( 'title-text', 'title-only','logo-title' ) )  ) {
                    if ( is_front_page() && is_home() ) : ?>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php else : ?>
                        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                    <?php
                    endif;
                } 
                if ( in_array( $site_identity, array( 'title-text', 'logo-text' ) ) ) {
                    $description = get_bloginfo( 'description', 'display' );
                    if ( $description || is_customize_preview() ) : ?>
                        <p class="site-description"><?php echo esc_html( $description ); /* WPCS: xss ok. */ ?></p>
                    <?php
                    endif; 
                }?>
            <?php endif; ?>
        </section><!-- .site-branding -->    
    <?php }
endif;
add_action( 'career_portfolio_action_header', 'career_portfolio_site_branding', 10 );

if ( ! function_exists( 'career_portfolio_header' ) ) :
    /**
     * Header Section
     *
     * @since 1.0.0
     */
    function career_portfolio_header() {
        $enable_search          = career_portfolio_get_option( 'enable_search' );
        $enable_social_menu     = career_portfolio_get_option( 'enable_social_menu' );
        $enable_toggle_section  = career_portfolio_get_option( 'enable_toggle_section' );
        $enable_navigation      = career_portfolio_get_option( 'enable_navigation' );

        if ( false == $enable_search && false == $enable_social_menu && false == $enable_toggle_section ){
            return;
        }
        $header_layout = career_portfolio_get_option( 'header_layout' ); 
        if( 'normal-menu' == $header_layout ): ?>
            <!-- header starting from here -->
            <div class="hgroup-wrap">
                <div class="header-nav-wrapper">
                    <?php if ( true == $enable_search ): ?>
                        <a href="JavaScript:void(0)" class="search-toggle"></a>
                    <?php endif; ?>
                    <?php if ( true == $enable_search ): ?>
                        <div class="header-search">
                            <div class="search-container">                        
                                <?php get_search_form(); ?>
                                <a class="close-icon" href="JavaScript:void(0)"><i class="fa fa-times"></i></a>
                            </div> 
                        </div><!--header-search-->     
                    <?php endif; ?>

                    <?php if ( true == $enable_social_menu ): ?>
                        <div class="header-social">
                            <?php wp_nav_menu( array(
                                'theme_location'  => 'social-media',
                                'container'       => false,                         
                                'depth'           => 1,
                                'fallback_cb'     => false,

                            ) ); 
                            ?>
                        </div><!--header-social-->
                    <?php endif; ?>
                    <div class="navigation-wrap">
                        <?php if ( true == $enable_navigation ): ?>
                            <nav id="site-navigation" class="navigation main-navigation">
                                <?php
                                wp_nav_menu( array(
                                    'theme_location'    => 'menu-1',
                                    'fallback_cb'       => 'career_portfolio_primary_navigation_fallback' ,
                                ) );
                                ?> 
                            </nav><!-- main-navigation ends here -->
                        <?php endif; ?>  
                    </div>
                </div>                
            </div><!--hgroup-wrap-->

        <?php else: ?>
            <!-- header starting from here -->
            <div class="hgroup-wrap">

                <?php if ( true == $enable_search ): ?>
                    <a href="JavaScript:void(0)" class="search-toggle"></a>
                <?php endif; ?>
                <?php if ( true == $enable_search ): ?>
                    <div class="header-search">
                        <div class="search-container">                        
                            <?php get_search_form(); ?>
                            <a class="close-icon" href="JavaScript:void(0)"><i class="fa fa-times"></i></a>
                        </div> 
                    </div><!--header-search-->     
                <?php endif; ?>

                <?php if ( true == $enable_social_menu ): ?>
                    <div class="header-social">
                        <?php wp_nav_menu( array(
                            'theme_location'  => 'social-media',
                            'container'       => false,                         
                            'depth'           => 1,
                            'fallback_cb'     => false,

                        ) ); 
                        ?>
                    </div><!--header-social-->
                <?php endif; ?>

                <?php if ( true == $enable_toggle_section ): ?>
                    <a href="JavaScript:void(0)" class="nav-button" >
                        <span></span>
                        <span></span>
                        <span></span>
                    </a><!--nav-button-->
                <?php endif; ?>
            </div><!--hgroup-wrap-->

            <?php if ( true == $enable_toggle_section ): ?>
                <div id="navbar" class="navbar">
                    
                    <?php if ( true == $enable_navigation ): ?>
                        <h3 class="menu-title"><?php echo esc_html__( 'Menu', 'career-portfolio')?></h3>
                    <?php endif; ?>
                        <div class="navigation-wrap">
                            <?php if ( true == $enable_navigation ): ?>
                                <nav id="site-navigation" class="navigation main-navigation">
                                    <?php
                                    wp_nav_menu( array(
                                        'theme_location'    => 'menu-1',
                                        'fallback_cb'       => 'career_portfolio_primary_navigation_fallback' ,
                                    ) );
                                    ?> 
                                </nav><!-- main-navigation ends here -->
                            <?php endif; ?>  
                            <?php if ( is_active_sidebar( 'header-toggle-widget' ) ): ?>
                                <div class="header-toggle-widget">
                                    <?php dynamic_sidebar( 'header-toggle-widget' )?>   
                                </div>
                            <?php endif; ?>
                        </div>
                        <a href="JavaScript:void(0)" class="close"></a>
                                
                </div><!-- navbar ends here -->
            <?php endif; ?>    
                
            <div class="navbar-overlay">
                <span><?php echo esc_html__( 'Close', 'career-portfolio');?></span>
            </div>
        <?php endif; ?>
    <?php }
endif;
add_action( 'career_portfolio_action_header', 'career_portfolio_header', 20 );

if ( ! function_exists( 'career_portfolio_fullpage_header' ) ) :
    /**
     * Full Page Header Section
     *
     * @since 1.0.0
     */
    function career_portfolio_fullpage_header() {
        $enabled_sections   = career_portfolio_get_sections();
        $enable_one_page_navigation = career_portfolio_get_option( 'enable_one_page_navigation' );
        if ( false == $enable_one_page_navigation || count($enabled_sections) == 0){
            return;
        }

        
    ?>
        <div class="full-page-menu-wrapper animated wow fadeInRight" data-wow-duration="2s">
            <ul id="fullpagemenu">

                    <?php foreach( $enabled_sections as $section ){
                        if( $section['menu_text'] ){
                        ?>
                            <li data-menuanchor="<?php echo esc_attr( $section['id'] );?>">
                                <a href="<?php echo esc_url( home_url( '/' ).'#' . esc_attr( $section['id'] ) ); ?>" data-scroll="#<?php echo esc_attr( $section['id'] );?>section"><?php echo esc_html( $section['menu_text'] );?></a>
                            </li>                   
                        <?php } 
                    }?>
            </ul>
        </div>  
    <?php }
endif;
add_action( 'career_portfolio_action_header', 'career_portfolio_fullpage_header', 30 );

if ( ! function_exists( 'career_portfolio_header_banner' ) ) :
    /**
     * Header Banner Section
     *
     * @since 1.0.0
     */
    function career_portfolio_header_banner() {
        $enable_header_media     = career_portfolio_get_option( 'enable_header_media' );
        $disable_media_archive   = career_portfolio_get_option( 'disable_media_archive' );
        $disable_media_blog      = career_portfolio_get_option( 'disable_media_blog' );
        $disable_media_page      = career_portfolio_get_option( 'disable_media_page' );
        $disable_media_post      = career_portfolio_get_option( 'disable_media_post' );
        $disable_media_index     = career_portfolio_get_option( 'disable_media_index' );

        if ( ! $enable_header_media ){
            return;
        }

        if ( $enable_header_media ) {
            if ( career_portfolio_is_blog_page() && true == $disable_media_blog ) {
                $header_media = 'disable';
            } elseif ( career_portfolio_is_latest_posts() && true == $disable_media_index ) {
                $header_media = 'disable';
            } elseif( is_page() && true == $disable_media_page ) {
                $header_media = 'disable';
            } elseif( is_single() &&  true == $disable_media_post ) {
                $header_media = 'disable';
            } elseif ( ( is_404() || is_archive() || is_search() ) && true == $disable_media_archive ){
                $header_media = 'disable';
            } else{
                $header_media = 'enable';
            }

            if ( 'disable' == $header_media ){
                return;
            }

        }

        $header_image = get_header_image();
        ?>

        <?php if ( ( is_header_video_active() && has_header_video() ) || !empty( $header_image ) ) : ?>
            
            <section class="section fearured-section fp-auto-height">
                <figure>
                    <?php
                    if ( is_header_video_active() && has_header_video() ) {
                        the_custom_header_markup();
                    } elseif ( $header_image ) {
                        echo '<img src="' . esc_url( $header_image ) . '"/>';
                    }
                    ?>
                </figure>
                <div class="info-wrap">
                    <?php $header_media_title     = career_portfolio_get_option( 'header_media_title' );
                    $header_media_sub_title     = career_portfolio_get_option( 'header_media_sub_title' );
                    $header_media_button_title     = career_portfolio_get_option( 'header_media_button_title' );
                    $header_media_button_url     = career_portfolio_get_option( 'header_media_button_url' );
                    $header_media_title = explode( ' ', esc_html( $header_media_title ) );                    
                    $header_media_title = implode( ' ', $header_media_title );

                    ?>
                    <div class="info-wrap-inner">
                        <?php if ( !empty( $header_media_title ) ): ?>
                            <h4 class="entry-title animated wow fadeInDown" data-wow-duration="1s"><?php echo wp_kses_post( $header_media_title ); ?></h4>
                        <?php endif; ?>
                        <div class="social-links">
                            <?php wp_nav_menu( array(
                                'theme_location'  => 'social-media',
                                'container'       => false,                         
                                'depth'           => 1,
                                'fallback_cb'     => false,

                            ) ); 
                            ?>
                        </div>
                        <div class="designation animated wow zoomIn" data-wow-duration="2s"><?php echo esc_html( $header_media_sub_title );?></div>
                        <a class="main-button animated wow zoomIn" data-wow-duration="1s" href="<?php echo esc_url( $header_media_button_url);?>">
                            <span class="button-icon"></span><?php echo esc_html( $header_media_button_title );?>
                        </a>
                    </div>
                </div>
            </section><!--.page-title-wrap-->
        <?php endif; 

    }
endif;
add_action( 'career_portfolio_action_header_banner', 'career_portfolio_header_banner', 10 );

if ( !function_exists( 'career_portfolio_bottom_footer') ):
    /**
     * Footer Section
     *
     * @since 1.0.0
    */
    function career_portfolio_footer(){
    ?>  

        <div class="container">
            <div class="footer-bottom-wrap">
                <div class="footer-bottom-left">
                    <?php $copyright_footer = career_portfolio_get_option( 'copyright_text' );
                    // Powered by content.
                    $powered_by_text = sprintf( __( 'Theme of %s', 'career-portfolio' ), '<a target="_blank" rel="designer" href="http://theme404.com/">Theme 404.</a>' ); 
                    if ( !empty( $copyright_footer ) || !empty( $powered_by_text ) ) : ?>             
                        <div class="copyright-part">
                            <span><?php echo wp_kses_post($powered_by_text);?></span>&nbsp;<span><?php echo esc_html( $copyright_footer ); ?></span>
                        </div>
                    <?php endif; ?>
                </div>    
                <div class="footer-bottom-right">
                    <div class="social-links">
                        <?php wp_nav_menu( array(
                            'theme_location'  => 'social-media',
                            'container'       => false,                         
                            'depth'           => 1,
                            'fallback_cb'     => false,

                        ) ); 
                        ?>
                    </div>
                </div>  
            </div>
        </div>

    <?php }
endif;
add_action( 'career_portfolio_action_footer', 'career_portfolio_footer');


if ( !function_exists( 'career_portfolio_scroll_footer') ):
    /**
     * Bottom Scroll Section
     *
     * @since 1.0.0
    */
    function career_portfolio_scroll_footer(){
    ?>  
    <div class="back-to-top">
        <a href="#masthead" title="<?php echo esc_attr__('Go to Top', 'career-portfolio')?>"></a>
    </div>
    <?php }
endif;
add_action( 'career_portfolio_action_scroll_footer', 'career_portfolio_scroll_footer');


if ( ! function_exists( 'career_portfolio_sidebar_layout' ) ) :

    /**
     * Add sidebar.
     *
     * @since 1.0.0
     */
    function career_portfolio_sidebar_layout() {

        // Sidebar Layout
        global $post;
        $sidebar_layout = career_portfolio_get_option( 'sidebar_layout' ); 
        
        // Check if single.
        if ( $post  && is_single() || is_page() ) {
            $sidebar_post_options = get_post_meta( $post->ID, 'career_portfolio_sidebar_options', true );
            if ( isset( $sidebar_post_options ) && ! empty( $sidebar_post_options ) ) {
                if ( 'customizer_setting' == $sidebar_post_options ){
                    $sidebar_layout = career_portfolio_get_option( 'sidebar_layout' );
                } else{
                    $sidebar_layout = $sidebar_post_options;
                }
                
            }
        }

        // Include primary sidebar.
        if ( 'no_sidebar' !== $sidebar_layout ) {            
                get_sidebar();
        }

    }

endif;

add_action( 'career_portfolio_action_sidebar_layout', 'career_portfolio_sidebar_layout' );

if ( ! function_exists( 'career_portfolio_title' ) ) :

    /**
     * Add Title.
     *
     * @since 1.0.0
     */
    function career_portfolio_title() {
        global $post;
        $title_options = career_portfolio_get_meta( $post->ID, 'career_portfolio_enable_title', 'yes' );
       
        if ( isset( $title_options ) && ! empty( $title_options ) ) {
            if( 'yes' == $title_options ){
               the_title( '<header class="entry-header"><h4 class="entry-title">', '</h4></header>' );
            }
        }

    }

endif;

add_action( 'career_portfolio_action_title', 'career_portfolio_title' );

if ( ! function_exists( 'career_portfolio_post_thumbnail' ) ) :

    /**
     * Add Feature Image.
     *
     * @since 1.0.0
     */
    function career_portfolio_post_thumbnail() {
        global $post;
        $image_options = career_portfolio_get_meta( $post->ID, 'career_portfolio_enable_feature_image', 'yes' );
        //var_dump( $image_options );
        if ( isset( $image_options ) && ! empty( $image_options ) ) {
            if( 'yes' == $image_options ){ ?>
                <figure class="featured-post-image">
                <?php the_post_thumbnail();   ?>  
                </figure>    
            <?php } 
        }

    }

endif;

add_action( 'career_portfolio_action_image', 'career_portfolio_post_thumbnail' );

if ( ! function_exists( 'career_portfolio_post_comment' ) ) :

    /**
     * Enable/Disable Comment Section
     *
     * @since 1.0.0
     */
    function career_portfolio_post_comment() {
        global $post;
        $enable_comment = career_portfolio_get_meta( $post->ID, 'career_portfolio_enable_comment', 'yes' );
        if ( isset( $enable_comment ) && ! empty( $enable_comment ) ) {
            if( 'yes' == $enable_comment ){
                
                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
            }
        }

    }

endif;

add_action( 'career_portfolio_action_comment', 'career_portfolio_post_comment' );