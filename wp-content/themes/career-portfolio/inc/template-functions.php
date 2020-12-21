<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Career_Portfolio
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function career_portfolio_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	// Sidebar Layout
	global $post;
	$sidebar_layout = career_portfolio_get_option( 'sidebar_layout' ); 
	if ( $post  && is_singular() ) {
		$sidebar_post_options = get_post_meta( $post->ID, 'career_portfolio_sidebar_options', true );
		if ( isset( $sidebar_post_options ) && ! empty( $sidebar_post_options ) ) {
			if ( 'customizer_setting' == $sidebar_post_options ){
				$sidebar_layout = career_portfolio_get_option( 'sidebar_layout' );
			} else{
				$sidebar_layout = $sidebar_post_options;
			}
			
		}
	}

	$classes[] = esc_attr( $sidebar_layout );
	$header_layout = career_portfolio_get_option( 'header_layout' ); 
	if ( !empty( $header_layout ) ){
		$classes[] = esc_attr( $header_layout );
	}

	return $classes;
}
add_filter( 'body_class', 'career_portfolio_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function career_portfolio_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'career_portfolio_pingback_header' );

/**
 * Register the required plugins for this theme.
 * 
 * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
 */
function career_portfolio_register_required_plugins() {
    /*
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(     
        array(
            'name'      => esc_html__( 'Theme Once Click Demo Importer', 'career-portfolio' ), //The plugin name
            'slug'      => 'theme-one-click-demo-import',  // The plugin slug (typically the folder name)
            'required'  => false,  // If false, the plugin is only 'recommended' instead of required.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
        ),    
               
    );

    $config = array(
        'id'           => 'career-portfolio',        // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to bundled plugins.     
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
        );

    tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'career_portfolio_register_required_plugins' );

