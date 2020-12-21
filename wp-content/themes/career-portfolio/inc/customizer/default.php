<?php
/**
 * Default theme options.
 *
 * @package Career_Portfolio
 */



if ( ! function_exists( 'career_portfolio_get_default_theme_options' ) ) :



	/**

	 * Get default theme options.

	 *

	 * @since 1.0.0

	 *

	 * @return array Default theme options.

	 */

function career_portfolio_get_default_theme_options() {



	$defaults = array();



	$defaults['site_identity']					= 'title-text';

	$defaults['enable_line_wrap']              	= true;

	$defaults['enable_search']			        = true;

    $defaults['enable_social_menu']             = false;

    $defaults['enable_toggle_section']          = true;

    $defaults['enable_navigation']              = true;

    $defaults['enable_one_page_navigation']     = false;

    $defaults['header_layout']     				= 'vertical-menu';



    // Header Media 

    $defaults['enable_header_media']            = false;

    $defaults['header_media_menu_title']		= esc_html__( 'Home','career-portfolio');

    $defaults['disable_media_archive']          = false;

    $defaults['disable_media_blog']             = false;

    $defaults['disable_media_index']            = false;

    $defaults['disable_media_page']             = false;

    $defaults['disable_media_post']             = false;

    $defaults['header_media_title']				= esc_html__( 'Will Smith','career-portfolio');

    $defaults['header_media_sub_title']			= esc_html__( 'ui/ux designer','career-portfolio');

    $defaults['header_media_button_title']		= esc_html__( 'Download My Cv','career-portfolio');

    $defaults['header_media_button_url']		= '';



    // Home Page Content

    $defaults[ 'enable_home_content' ]			=  true; 



	// About Section 

	$defaults['enable_aboutus']					= false;	

	$defaults['aboutus_menu_title']				= esc_html__( 'About Me','career-portfolio');

	$defaults['intro_section_title']			= esc_html__( 'There is all about me','career-portfolio'); 

	$defaults['about_us_page']					= 0;
	$defaults['about_us_length']				= 50;	



	// Qualification Section 

	$defaults['enable_qualification']			= false;	

	$defaults['qualification_menu_title']		= esc_html__( 'Qualification','career-portfolio');

	$defaults['qualification_section_title']	= esc_html__( 'My Qualification','career-portfolio'); 

	$defaults['qualification_title_1']			= esc_html__( 'My Education','career-portfolio'); 

	$defaults['qualification_title_2']			= esc_html__( 'My EXPERIENCE','career-portfolio'); 

	$defaults['qualification_category']			= 0; 

	$defaults['qualification_category_second']	= 0; 

    $defaults['qualification_button_title']		= esc_html__( 'Download My Cv','career-portfolio');

    $defaults['qualification_button_url']		= '';

    $defaults['qualification_number']			= 3;		



	// Service Section /

	$defaults['enable_service']					= false;	

	$defaults['service_menu_title']				= esc_html__( 'Service','career-portfolio');

	$defaults['service_section_title']			= esc_html__( 'My Service','career-portfolio');	

	$defaults['service_number']					= 4;

	$defaults['service_category']				= 0;  

	$defaults['service_title']					= esc_html__( 'BEST SERVICE, RIGHT TIME, RIGHT PEOPLE','career-portfolio');	



	// Counter Section /

	$defaults['enable_counter']					= false;	

	$defaults['counter_menu_title']				= esc_html__( 'Counter','career-portfolio');

	$defaults['counter_section_title']			= esc_html__( 'Counter','career-portfolio');

	$defaults['counter_bg_image']				= '';
	$defaults['counter_page']					= 0;



	// Counter Section /

	$defaults['enable_portfolio']				= false;	

	$defaults['portfolio_menu_title']			= esc_html__( 'Portfolio','career-portfolio');

	$defaults['portfolio_section_title']		= esc_html__( 'My Portfolio','career-portfolio');

	$defaults['portfolio_title']				= esc_html__( 'AN EYE FOR DETAILS MAKES OUR WORKS EXCELLENT','career-portfolio');	

	$defaults['portfolio_category']				= array();	

	$defaults['portfolio_button_title']			= esc_html__( 'View More','career-portfolio');



	// Video Section /

	$defaults['enable_video']					= false;	

	$defaults['video_menu_title']				= esc_html__( 'Video','career-portfolio');

	$defaults['video_section_title']			= esc_html__( 'My Video','career-portfolio');

	$defaults['video_title']					= esc_html__( 'HOW TO DEAL WITH CLIENTS','career-portfolio');

	$defaults['video_url']						= '';		

	$defaults['video_bg_image']					= '';	



	// Testimonial Section /

	$defaults['enable_testimonial']				= false;	

	$defaults['testimonial_menu_title']			= esc_html__( 'Testimonial','career-portfolio');

	$defaults['testimonial_section_title']		= esc_html__( 'My Testimonial','career-portfolio');	

	$defaults['testimonial_page']				= 0;	

	$defaults['testimonial_number']				= 4;

	$defaults['testimonial_category']			= 0;  	



	// Client Section

	$defaults['enable_client']					= false;	

	$defaults['client_menu_title']				= esc_html__( 'Client','career-portfolio');

	$defaults['client_section_title']			= esc_html__( 'My Client','career-portfolio');	

	$defaults['client_title']					= esc_html__( 'SATISFIED COMPANY FROM MY WORK','career-portfolio');	

	$defaults['client_number']					= 4;

	$defaults['client_category']				= 0;


	// Blog Section /

	$defaults['enable_blog']					= false;	

	$defaults['blog_menu_title']				= esc_html__( 'Blog','career-portfolio');

	$defaults['blog_section_title']				= esc_html__( 'My Blog','career-portfolio');	

	$defaults['blog_title']						= esc_html__( 'GET EVERY UPDATES', 'career-portfolio' );
	$defaults['blog_button_url']				= esc_html__( 'Read More', 'career-portfolio' );

	$defaults['blog_number']					= 3;

	$defaults['blog_category']					= 0;



	// Contact Section /

	$defaults['enable_contact']					= false;	

	$defaults['contact_menu_title']				= esc_html__( 'Contact','career-portfolio');

	$defaults['contact_section_title']			= esc_html__( 'My Contact','career-portfolio');	

	$defaults['contact_page']					= 0;

	$defaults[ 'contact_bg_image' ]				= 0; 



	// General Setting

	$defaults[ 'sidebar_layout' ]				= 'right_sidebar'; 



	// Archive Setting

	$defaults[ 'enable_posted_date' ]			= true;

	$defaults[ 'enable_categories' ]			=  true; 

	$defaults[ 'pagination_layout' ]			= 'default'; 







	//Footer 

	$defaults['copyright_text']					= '';

	$defaults['enable_scrollto_top']			= true;





	// Pass through filter.

	$defaults = apply_filters( 'career_portfolio_filter_default_theme_options', $defaults );

	return $defaults;

}



endif;



/**

*  Get theme options

*/

if ( ! function_exists( 'career_portfolio_get_option' ) ) :



	/**

	 * Get theme option

	 *

	 * @since 1.0.0

	 *

	 * @param string $key Option key.

	 * @return mixed Option value.

	 */

	function career_portfolio_get_option( $key ) {



		$default_options = career_portfolio_get_default_theme_options();



		if ( empty( $key ) ) {

			return;

		}



		$theme_options = (array)get_theme_mod( 'theme_options' );

		$theme_options = wp_parse_args( $theme_options, $default_options );



		$value = null;



		if ( isset( $theme_options[ $key ] ) ) {

			$value = $theme_options[ $key ];

		}



		return $value;



	}



endif;