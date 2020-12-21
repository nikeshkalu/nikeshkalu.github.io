<?php
/**
 * Career Portfolio Home Customizer
 *
 * @package Career_Portfolio
 */

$default = career_portfolio_get_default_theme_options();



// Home Pannel

$wp_customize->add_panel( 'home_option_panel',

	array(

	'title'      => esc_html__( 'Front Page Options', 'career-portfolio' ),

	'priority'   => 100,

	'capability' => 'edit_theme_options',

	)

);

//Home Page Section 

$wp_customize->add_section('section_home_page', 

	array(    

	'title'       => esc_html__('Home Page Content Setting', 'career-portfolio'),

	'priority'    => 110,

	'panel'       => 'home_option_panel'    

	)

);

// Enable Home Page Contet Section

$wp_customize->add_setting( 'theme_options[enable_home_content]',

	array(

		'default'           => $default['enable_home_content'],

		'capability'        => 'edit_theme_options',

		'sanitize_callback' => 'career_portfolio_sanitize_checkbox',

	)

);

$wp_customize->add_control( 'theme_options[enable_home_content]',

	array(

		'label'    => esc_html__( 'Enable Home Page Content', 'career-portfolio' ),

		'section'  => 'section_home_page',

		'type'     => 'checkbox',		

	)

);



//About Section 

$wp_customize->add_section('section_about_us', 

	array(    

	'title'       => esc_html__('About Setting', 'career-portfolio'),

	'priority'    => 110,

	'panel'       => 'home_option_panel'    

	)

);

// Enable About Section

$wp_customize->add_setting( 'theme_options[enable_aboutus]',

	array(

		'default'           => $default['enable_aboutus'],

		'capability'        => 'edit_theme_options',

		'sanitize_callback' => 'career_portfolio_sanitize_checkbox',

	)

);

$wp_customize->add_control( 'theme_options[enable_aboutus]',

	array(

		'label'    => esc_html__( 'Enable About Section', 'career-portfolio' ),

		'section'  => 'section_about_us',

		'type'     => 'checkbox',		

	)

);



// Menu Title

$wp_customize->add_setting('theme_options[aboutus_menu_title]', 

	array(

	'default'           => $default['aboutus_menu_title'],

	'type'              => 'theme_mod',

	'capability'        => 'edit_theme_options',	

	'sanitize_callback' => 'sanitize_text_field'

	)

);



$wp_customize->add_control('theme_options[aboutus_menu_title]', 

	array(

	'label'       => esc_html__('Menu Title', 'career-portfolio'),

	'section'     => 'section_about_us',   

	'settings'    => 'theme_options[aboutus_menu_title]',		

	'type'        => 'text',

	)

);



// About Section Title

$wp_customize->add_setting('theme_options[intro_section_title]', 

	array(

	'default'           => $default['intro_section_title'],

	'type'              => 'theme_mod',

	'capability'        => 'edit_theme_options',	

	'sanitize_callback' => 'sanitize_text_field'

	)

);



$wp_customize->add_control('theme_options[intro_section_title]', 

	array(

	'label'       => esc_html__('Section Title', 'career-portfolio'),

	'section'     => 'section_about_us',   

	'settings'    => 'theme_options[intro_section_title]',		

	'type'        => 'text',

	)

);



// About Us Page

$wp_customize->add_setting('theme_options[about_us_page]', 

	array(

	'default'           => $default['about_us_page'],

	'type'              => 'theme_mod',

	'capability'        => 'edit_theme_options',	

	'sanitize_callback' => 'career_portfolio_sanitize_dropdown_pages'

	)

);



$wp_customize->add_control('theme_options[about_us_page]', 

	array(

	'label'       => esc_html__('Section About Us Page', 'career-portfolio'),

	'section'     => 'section_about_us',   

	'settings'    => 'theme_options[about_us_page]',		

	'type'        => 'dropdown-pages', 

	)

);
// Service Number

$wp_customize->add_setting( 'theme_options[about_us_length]',

	array(

		'default'           => $default['about_us_length'],

		'capability'        => 'edit_theme_options',

		'sanitize_callback' => 'career_portfolio_sanitize_number_range',

		)

);

$wp_customize->add_control( 'theme_options[about_us_length]',

	array(

		'label'       => esc_html__( 'Content Length', 'career-portfolio' ),

		'section'     => 'section_about_us',

		'type'        => 'number',

		'input_attrs' => array( 'min' => 1, 'max' => 600, 'step' => 1, 'style' => 'width: 115px;' ),

	)

);


// Qualification Section

$wp_customize->add_section('section_qualification', 

	array(    

	'title'       => esc_html__('Qualification Setting', 'career-portfolio'),

	'priority'    => 120,	

	'panel'       => 'home_option_panel'    

	)

);



// Enable Qualification Section

$wp_customize->add_setting( 'theme_options[enable_qualification]',

	array(

		'default'           => $default['enable_qualification'],

		'capability'        => 'edit_theme_options',

		'sanitize_callback' => 'career_portfolio_sanitize_checkbox',

	)

);

$wp_customize->add_control( 'theme_options[enable_qualification]',

	array(

		'label'    => esc_html__( 'Enable Qualification Section', 'career-portfolio' ),

		'section'  => 'section_qualification',

		'type'     => 'checkbox',		

	)

);





// Menu Title

$wp_customize->add_setting('theme_options[qualification_menu_title]', 

	array(

	'default'           => $default['qualification_menu_title'],

	'type'              => 'theme_mod',

	'capability'        => 'edit_theme_options',	

	'sanitize_callback' => 'sanitize_text_field'

	)

);



$wp_customize->add_control('theme_options[qualification_menu_title]', 

	array(

	'label'       => esc_html__('Qualification Menu Title', 'career-portfolio'),

	'section'     => 'section_qualification',   

	'settings'    => 'theme_options[qualification_menu_title]',		

	'type'        => 'text',

	)

);



// Qualification Section Title

$wp_customize->add_setting('theme_options[qualification_section_title]', 

	array(

	'default'           => $default['qualification_section_title'],

	'type'              => 'theme_mod',

	'capability'        => 'edit_theme_options',	

	'sanitize_callback' => 'sanitize_text_field'

	)

);



$wp_customize->add_control('theme_options[qualification_section_title]', 

	array(

	'label'       => esc_html__('Qualification Section Title', 'career-portfolio'),

	'section'     => 'section_qualification',   

	'settings'    => 'theme_options[qualification_section_title]',		

	'type'        => 'text',

	)

);



// Qualification Title First

$wp_customize->add_setting('theme_options[qualification_title_1]', 

	array(

	'default'           => $default['qualification_title_1'],

	'type'              => 'theme_mod',

	'capability'        => 'edit_theme_options',	

	'sanitize_callback' => 'sanitize_text_field'

	)

);



$wp_customize->add_control('theme_options[qualification_title_1]', 

	array(

	'label'       => esc_html__('Qualification Title First', 'career-portfolio'),

	'section'     => 'section_qualification',   

	'settings'    => 'theme_options[qualification_title_1]',		

	'type'        => 'text',

	)

);



// Qualification Category

$wp_customize->add_setting( 'theme_options[qualification_category]',

	array(

	'default'           => $default['qualification_category'],

	'capability'        => 'edit_theme_options',

	'sanitize_callback' => 'absint',

	)

);

$wp_customize->add_control(

	new Career_Portfolio_Dropdown_Taxonomies_Control( $wp_customize, 'theme_options[qualification_category]',

		array(

		'label'    => esc_html__( 'Select Qualification Category', 'career-portfolio' ),

		'section'  => 'section_qualification',

		'settings' => 'theme_options[qualification_category]',

		)

	)

);



// Qualification Title Second

$wp_customize->add_setting('theme_options[qualification_title_2]', 

	array(

	'default'           => $default['qualification_title_2'],

	'type'              => 'theme_mod',

	'capability'        => 'edit_theme_options',	

	'sanitize_callback' => 'sanitize_text_field'

	)

);



$wp_customize->add_control('theme_options[qualification_title_2]', 

	array(

	'label'       => esc_html__('Qualification Title Second', 'career-portfolio'),

	'section'     => 'section_qualification',   

	'settings'    => 'theme_options[qualification_title_2]',		

	'type'        => 'text',

	)

);



// Qualification Category Second

$wp_customize->add_setting( 'theme_options[qualification_category_second]',

	array(

	'default'           => $default['qualification_category_second'],

	'capability'        => 'edit_theme_options',

	'sanitize_callback' => 'absint',

	)

);

$wp_customize->add_control(

	new Career_Portfolio_Dropdown_Taxonomies_Control( $wp_customize, 'theme_options[qualification_category_second]',

		array(

		'label'    => esc_html__( 'Select Qualification Second Category', 'career-portfolio' ),

		'section'  => 'section_qualification',

		'settings' => 'theme_options[qualification_category_second]',

		)

	)

);

// Qualification Number

$wp_customize->add_setting( 'theme_options[qualification_number]',

	array(

		'default'           => $default['qualification_number'],

		'capability'        => 'edit_theme_options',

		'sanitize_callback' => 'career_portfolio_sanitize_number_range',

		)

);

$wp_customize->add_control( 'theme_options[qualification_number]',

	array(

		'label'       => esc_html__( 'Select Qualification Number', 'career-portfolio' ),

		'section'     => 'section_qualification',

		'type'        => 'number',

		'input_attrs' => array( 'min' => 1, 'max' => 6, 'step' => 1, 'style' => 'width: 115px;' ),

	)

);



// Qualification Button Title

$wp_customize->add_setting('theme_options[qualification_button_title]', 

    array(

    'default'           => $default['qualification_button_title'],

    'type'              => 'theme_mod',

    'capability'        => 'edit_theme_options',    

    'sanitize_callback' => 'sanitize_text_field'

    )

);



$wp_customize->add_control('theme_options[qualification_button_title]', 

    array(

    'label'       => esc_html__('Qualification Button Title', 'career-portfolio'),

    'section'     => 'section_qualification',   

    'settings'    => 'theme_options[qualification_button_title]',        

    'type'        => 'text',   

    )

);

// Qualification Button Url

$wp_customize->add_setting('theme_options[qualification_button_url]', 

    array(

    'default'           => $default['qualification_button_url'],

    'type'              => 'theme_mod',

    'capability'        => 'edit_theme_options',    

    'sanitize_callback' => 'esc_url_raw'

    )

);



$wp_customize->add_control('theme_options[qualification_button_url]', 

    array(

    'label'       => esc_html__('Qualification Button Url', 'career-portfolio'),

    'section'     => 'section_qualification',   

    'settings'    => 'theme_options[qualification_button_url]',        

    'type'        => 'url', 

    )

);

 



// Service Section

$wp_customize->add_section('section_service', 

	array(    

	'title'       => esc_html__('Service Setting', 'career-portfolio'),

	'priority'    => 120,	

	'panel'       => 'home_option_panel'    

	)

);



// Enable Service Section

$wp_customize->add_setting( 'theme_options[enable_service]',

	array(

		'default'           => $default['enable_service'],

		'capability'        => 'edit_theme_options',

		'sanitize_callback' => 'career_portfolio_sanitize_checkbox',

	)

);

$wp_customize->add_control( 'theme_options[enable_service]',

	array(

		'label'    => esc_html__( 'Enable Service Section', 'career-portfolio' ),

		'section'  => 'section_service',

		'type'     => 'checkbox',		

	)

);





// Menu Title

$wp_customize->add_setting('theme_options[service_menu_title]', 

	array(

	'default'           => $default['service_menu_title'],

	'type'              => 'theme_mod',

	'capability'        => 'edit_theme_options',	

	'sanitize_callback' => 'sanitize_text_field'

	)

);



$wp_customize->add_control('theme_options[service_menu_title]', 

	array(

	'label'       => esc_html__('Service Menu Title', 'career-portfolio'),

	'section'     => 'section_service',   

	'settings'    => 'theme_options[service_menu_title]',		

	'type'        => 'text',

	)

);



// Service Section Title

$wp_customize->add_setting('theme_options[service_section_title]', 

	array(

	'default'           => $default['service_section_title'],

	'type'              => 'theme_mod',

	'capability'        => 'edit_theme_options',	

	'sanitize_callback' => 'sanitize_text_field'

	)

);



$wp_customize->add_control('theme_options[service_section_title]', 

	array(

	'label'       => esc_html__('Service Section Title', 'career-portfolio'),

	'section'     => 'section_service',   

	'settings'    => 'theme_options[service_section_title]',		

	'type'        => 'text',

	)

);

// Service Title

$wp_customize->add_setting('theme_options[service_title]', 

	array(

	'default'           => $default['service_title'],

	'type'              => 'theme_mod',

	'capability'        => 'edit_theme_options',	

	'sanitize_callback' => 'sanitize_text_field'

	)

);



$wp_customize->add_control('theme_options[service_title]', 

	array(

	'label'       => esc_html__('Service Title', 'career-portfolio'),

	'section'     => 'section_service',   

	'settings'    => 'theme_options[service_title]',		

	'type'        => 'text',

	)

);

// Service Category 

$wp_customize->add_setting( 'theme_options[service_category]',

	array(

	'default'           => $default['service_category'],

	'capability'        => 'edit_theme_options',

	'sanitize_callback' => 'absint',

	)

);

$wp_customize->add_control(

	new Career_Portfolio_Dropdown_Taxonomies_Control( $wp_customize, 'theme_options[service_category]',

		array(

		'label'    => esc_html__( 'Select Service Category', 'career-portfolio' ),

		'section'  => 'section_service',

		'settings' => 'theme_options[service_category]',

		)

	)

);

// Service Number

$wp_customize->add_setting( 'theme_options[service_number]',

	array(

		'default'           => $default['service_number'],

		'capability'        => 'edit_theme_options',

		'sanitize_callback' => 'career_portfolio_sanitize_number_range',

		)

);

$wp_customize->add_control( 'theme_options[service_number]',

	array(

		'label'       => esc_html__( 'Select Service Number', 'career-portfolio' ),

		'section'     => 'section_service',

		'type'        => 'number',

		'input_attrs' => array( 'min' => 1, 'max' => 6, 'step' => 1, 'style' => 'width: 115px;' ),

	)

);





// Counter Section

$wp_customize->add_section('section_counter', 

	array(    

	'title'       => esc_html__('Counter Setting', 'career-portfolio'),

	'priority'    => 120,	

	'panel'       => 'home_option_panel'    

	)

);



// Enable Counter Section

$wp_customize->add_setting( 'theme_options[enable_counter]',

	array(

		'default'           => $default['enable_counter'],

		'capability'        => 'edit_theme_options',

		'sanitize_callback' => 'career_portfolio_sanitize_checkbox',

	)

);

$wp_customize->add_control( 'theme_options[enable_counter]',

	array(

		'label'    => esc_html__( 'Enable Counter Section', 'career-portfolio' ),

		'section'  => 'section_counter',

		'type'     => 'checkbox',		

	)

);





// Menu Title

$wp_customize->add_setting('theme_options[counter_menu_title]', 

	array(

	'default'           => $default['counter_menu_title'],

	'type'              => 'theme_mod',

	'capability'        => 'edit_theme_options',	

	'sanitize_callback' => 'sanitize_text_field'

	)

);



$wp_customize->add_control('theme_options[counter_menu_title]', 

	array(

	'label'       => esc_html__('Counter Menu Title', 'career-portfolio'),

	'section'     => 'section_counter',   

	'settings'    => 'theme_options[counter_menu_title]',		

	'type'        => 'text',

	)

);



// counter Section Title

$wp_customize->add_setting('theme_options[counter_section_title]', 

	array(

	'default'           => $default['counter_section_title'],

	'type'              => 'theme_mod',

	'capability'        => 'edit_theme_options',	

	'sanitize_callback' => 'sanitize_text_field'

	)

);



$wp_customize->add_control('theme_options[counter_section_title]', 

	array(

	'label'       => esc_html__('Counter Section Title', 'career-portfolio'),

	'section'     => 'section_counter',   

	'settings'    => 'theme_options[counter_section_title]',		

	'type'        => 'text',

	)

);

// Counter Background Image

$wp_customize->add_setting('theme_options[counter_bg_image]',
	array(

	'default'           => $default['counter_bg_image'],	

	'sanitize_callback' => 'esc_url_raw'

	)

);

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'theme_options[counter_bg_image]',

       array(

           'label'      =>esc_html__( 'Upload a Background Image', 'career-portfolio' ),

           'section'    => 'section_counter',

           'settings'   => 'theme_options[counter_bg_image]',      

       )

   )

);
//Counter Page
$wp_customize->add_setting('theme_options[counter_page]', 

	array(

	'default'           => $default['counter_page'],

	'type'              => 'theme_mod',

	'capability'        => 'edit_theme_options',	

	'sanitize_callback' => 'career_portfolio_sanitize_dropdown_pages'

	)

);



$wp_customize->add_control('theme_options[counter_page]', 

	array(

	'label'       => esc_html__('Section Page', 'career-portfolio'),

	'section'     => 'section_counter',   

	'settings'    => 'theme_options[counter_page]',		

	'type'        => 'dropdown-pages', 

	)

);



// Portfolio  Section

$wp_customize->add_section('section_portfolio', 

	array(    

	'title'       => esc_html__('Portfolio Setting', 'career-portfolio'),

	'priority'    => 120,	

	'panel'       => 'home_option_panel'    

	)

);



// Enable Portfolio Section

$wp_customize->add_setting( 'theme_options[enable_portfolio]',

	array(

		'default'           => $default['enable_portfolio'],

		'capability'        => 'edit_theme_options',

		'sanitize_callback' => 'career_portfolio_sanitize_checkbox',

	)

);

$wp_customize->add_control( 'theme_options[enable_portfolio]',

	array(

		'label'    => esc_html__( 'Enable Portfolio Section', 'career-portfolio' ),

		'section'  => 'section_portfolio',

		'type'     => 'checkbox',		

	)

);





// Menu Title

$wp_customize->add_setting('theme_options[portfolio_menu_title]', 

	array(

	'default'           => $default['portfolio_menu_title'],

	'type'              => 'theme_mod',

	'capability'        => 'edit_theme_options',	

	'sanitize_callback' => 'sanitize_text_field'

	)

);



$wp_customize->add_control('theme_options[portfolio_menu_title]', 

	array(

	'label'       => esc_html__('Portfolio Menu Title', 'career-portfolio'),

	'section'     => 'section_portfolio',   

	'settings'    => 'theme_options[portfolio_menu_title]',		

	'type'        => 'text',

	)

);



// Portfolio Section Title

$wp_customize->add_setting('theme_options[portfolio_section_title]', 

	array(

	'default'           => $default['portfolio_section_title'],

	'type'              => 'theme_mod',

	'capability'        => 'edit_theme_options',	

	'sanitize_callback' => 'sanitize_text_field'

	)

);



$wp_customize->add_control('theme_options[portfolio_section_title]', 

	array(

	'label'       => esc_html__('Portfolio Section Title', 'career-portfolio'),

	'section'     => 'section_portfolio',   

	'settings'    => 'theme_options[portfolio_section_title]',		

	'type'        => 'text',

	)

);

// Portfolio Title

$wp_customize->add_setting('theme_options[portfolio_title]', 

	array(

	'default'           => $default['portfolio_title'],

	'type'              => 'theme_mod',

	'capability'        => 'edit_theme_options',	

	'sanitize_callback' => 'sanitize_text_field'

	)

);



$wp_customize->add_control('theme_options[portfolio_title]', 

	array(

	'label'       => esc_html__('Portfolio Title', 'career-portfolio'),

	'section'     => 'section_portfolio',   

	'settings'    => 'theme_options[portfolio_title]',		

	'type'        => 'text',

	)

);

//Portfolio category

$wp_customize->add_setting( 'theme_options[portfolio_category]',

	array(

	'default'           => $default['portfolio_category'],

	'capability'        => 'edit_theme_options',

	'sanitize_callback' => 'career_portfolio_sanitize_multiple_dropdown_taxonomies',

	)

);

$wp_customize->add_control(

	new Career_Portfolio_Multiple_Dropdown_Taxonomies_Control( $wp_customize, 'theme_options[portfolio_category]',

		array(

		'label'    => esc_html__( 'Select Category', 'career-portfolio' ),

		'description' => esc_html__( 'Hold down the Ctrl (windows) / Command (Mac) button to select multiple options.', 'career-portfolio' ),

		'section'  => 'section_portfolio',

		'settings' => 'theme_options[portfolio_category]',

		'multiple'    => true,

		)

	)

);

// Button Title

$wp_customize->add_setting('theme_options[portfolio_button_title]', 

	array(

	'default'           => $default['portfolio_button_title'],

	'type'              => 'theme_mod',

	'capability'        => 'edit_theme_options',	

	'sanitize_callback' => 'sanitize_text_field'

	)

);



$wp_customize->add_control('theme_options[portfolio_button_title]', 

	array(

	'label'       => esc_html__('Portfolio Button Title', 'career-portfolio'),

	'section'     => 'section_portfolio',   

	'settings'    => 'theme_options[portfolio_button_title]',		

	'type'        => 'text',

	)

);



// Video Section

$wp_customize->add_section('section_video', 

	array(    

	'title'       => esc_html__('Video Setting', 'career-portfolio'),

	'priority'    => 120,	

	'panel'       => 'home_option_panel'    

	)

);



// Enable Video Section

$wp_customize->add_setting( 'theme_options[enable_video]',

	array(

		'default'           => $default['enable_video'],

		'capability'        => 'edit_theme_options',

		'sanitize_callback' => 'career_portfolio_sanitize_checkbox',

	)

);

$wp_customize->add_control( 'theme_options[enable_video]',

	array(

		'label'    => esc_html__( 'Enable video Section', 'career-portfolio' ),

		'section'  => 'section_video',

		'type'     => 'checkbox',		

	)

);





// Menu Title

$wp_customize->add_setting('theme_options[video_menu_title]', 

	array(

	'default'           => $default['video_menu_title'],

	'type'              => 'theme_mod',

	'capability'        => 'edit_theme_options',	

	'sanitize_callback' => 'sanitize_text_field'

	)

);



$wp_customize->add_control('theme_options[video_menu_title]', 

	array(

	'label'       => esc_html__('Video Menu Title', 'career-portfolio'),

	'section'     => 'section_video',   

	'settings'    => 'theme_options[video_menu_title]',		

	'type'        => 'text',

	)

);



// Video Section Title

$wp_customize->add_setting('theme_options[video_section_title]', 

	array(

	'default'           => $default['video_section_title'],

	'type'              => 'theme_mod',

	'capability'        => 'edit_theme_options',	

	'sanitize_callback' => 'sanitize_text_field'

	)

);



$wp_customize->add_control('theme_options[video_section_title]', 

	array(

	'label'       => esc_html__('Video Section Title', 'career-portfolio'),

	'section'     => 'section_video',   

	'settings'    => 'theme_options[video_section_title]',		

	'type'        => 'text',

	)

);

// Video Background Image

$wp_customize->add_setting('theme_options[video_bg_image]', 

	array(

	'default'           => $default['video_bg_image'],	

	'sanitize_callback' => 'esc_url_raw'

	)

);

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'theme_options[video_bg_image]',

       array(

           'label'      =>esc_html__( 'Upload a Background Image', 'career-portfolio' ),

           'section'    => 'section_video',

           'settings'   => 'theme_options[video_bg_image]',      

       )

   )

);



// Video Title

$wp_customize->add_setting('theme_options[video_title]', 

	array(

	'default'           => $default['video_title'],

	'type'              => 'theme_mod',

	'capability'        => 'edit_theme_options',	

	'sanitize_callback' => 'sanitize_text_field'

	)

);



$wp_customize->add_control('theme_options[video_title]', 

	array(

	'label'       => esc_html__('Video Title', 'career-portfolio'),

	'section'     => 'section_video',   

	'settings'    => 'theme_options[video_title]',		

	'type'        => 'text',

	)

);

// Video Url

$wp_customize->add_setting('theme_options[video_url]', 

	array(

	'default'           => $default['video_url'],

	'type'              => 'theme_mod',

	'capability'        => 'edit_theme_options',	

	'sanitize_callback' => 'esc_url_raw'

	)

);



$wp_customize->add_control('theme_options[video_url]', 

	array(

	'label'       => esc_html__('Video Url', 'career-portfolio'),

	'section'     => 'section_video',   

	'settings'    => 'theme_options[video_url]',		

	'type'        => 'url',

	)

);



// Testimonial Section

$wp_customize->add_section('section_testimonial', 

	array(    

	'title'       => esc_html__('Testimonial Setting', 'career-portfolio'),

	'priority'    => 120,	

	'panel'       => 'home_option_panel'    

	)

);



// Enable Testimonial Section

$wp_customize->add_setting( 'theme_options[enable_testimonial]',

	array(

		'default'           => $default['enable_testimonial'],

		'capability'        => 'edit_theme_options',

		'sanitize_callback' => 'career_portfolio_sanitize_checkbox',

	)

);

$wp_customize->add_control( 'theme_options[enable_testimonial]',

	array(

		'label'    => esc_html__( 'Enable Testimonial Section', 'career-portfolio' ),

		'section'  => 'section_testimonial',

		'type'     => 'checkbox',		

	)

);





// Menu Title

$wp_customize->add_setting('theme_options[testimonial_menu_title]', 

	array(

	'default'           => $default['testimonial_menu_title'],

	'type'              => 'theme_mod',

	'capability'        => 'edit_theme_options',	

	'sanitize_callback' => 'sanitize_text_field'

	)

);



$wp_customize->add_control('theme_options[testimonial_menu_title]', 

	array(

	'label'       => esc_html__('Testimonial Menu Title', 'career-portfolio'),

	'section'     => 'section_testimonial',   

	'settings'    => 'theme_options[testimonial_menu_title]',		

	'type'        => 'text',

	)

);



// Testimonial Section Title

$wp_customize->add_setting('theme_options[testimonial_section_title]', 

	array(

	'default'           => $default['testimonial_section_title'],

	'type'              => 'theme_mod',

	'capability'        => 'edit_theme_options',	

	'sanitize_callback' => 'sanitize_text_field'

	)

);



$wp_customize->add_control('theme_options[testimonial_section_title]', 

	array(

	'label'       => esc_html__('Testimonial Section Title', 'career-portfolio'),

	'section'     => 'section_testimonial',   

	'settings'    => 'theme_options[testimonial_section_title]',		

	'type'        => 'text',

	)

);

// Testimonial Page

$wp_customize->add_setting('theme_options[testimonial_page]', 

	array(

	'default'           => $default['testimonial_page'],

	'type'              => 'theme_mod',

	'capability'        => 'edit_theme_options',	

	'sanitize_callback' => 'career_portfolio_sanitize_dropdown_pages'

	)

);



$wp_customize->add_control('theme_options[testimonial_page]', 

	array(

	'label'       => esc_html__('Section Testimonial Page', 'career-portfolio'),

	'section'     => 'section_testimonial',   

	'settings'    => 'theme_options[testimonial_page]',		

	'type'        => 'dropdown-pages', 

	)

);



// Testimonial Category 

$wp_customize->add_setting( 'theme_options[testimonial_category]',

	array(

	'default'           => $default['testimonial_category'],

	'capability'        => 'edit_theme_options',

	'sanitize_callback' => 'absint',

	)

);

$wp_customize->add_control(

	new Career_Portfolio_Dropdown_Taxonomies_Control( $wp_customize, 'theme_options[testimonial_category]',

		array(

		'label'    => esc_html__( 'Select Testimonial Category', 'career-portfolio' ),

		'section'  => 'section_testimonial',

		'settings' => 'theme_options[testimonial_category]',

		)

	)

);

// Testimonial Number

$wp_customize->add_setting( 'theme_options[testimonial_number]',

	array(

		'default'           => $default['testimonial_number'],

		'capability'        => 'edit_theme_options',

		'sanitize_callback' => 'career_portfolio_sanitize_number_range',

		)

);

$wp_customize->add_control( 'theme_options[testimonial_number]',

	array(

		'label'       => esc_html__( 'Select Testimonial Number', 'career-portfolio' ),

		'section'     => 'section_testimonial',

		'type'        => 'number',

		'input_attrs' => array( 'min' => 1, 'max' => 6, 'step' => 1, 'style' => 'width: 115px;' ),

	)

);



// Client Section

$wp_customize->add_section('section_client', 

	array(    

	'title'       => esc_html__('Client Setting', 'career-portfolio'),

	'priority'    => 120,	

	'panel'       => 'home_option_panel'    

	)

);



// Enable Client Section

$wp_customize->add_setting( 'theme_options[enable_client]',

	array(

		'default'           => $default['enable_client'],

		'capability'        => 'edit_theme_options',

		'sanitize_callback' => 'career_portfolio_sanitize_checkbox',

	)

);

$wp_customize->add_control( 'theme_options[enable_client]',

	array(

		'label'    => esc_html__( 'Enable Client Section', 'career-portfolio' ),

		'section'  => 'section_client',

		'type'     => 'checkbox',		

	)

);





// Menu Title

$wp_customize->add_setting('theme_options[client_menu_title]', 

	array(

	'default'           => $default['client_menu_title'],

	'type'              => 'theme_mod',

	'capability'        => 'edit_theme_options',	

	'sanitize_callback' => 'sanitize_text_field'

	)

);



$wp_customize->add_control('theme_options[client_menu_title]', 

	array(

	'label'       => esc_html__('Client Menu Title', 'career-portfolio'),

	'section'     => 'section_client',   

	'settings'    => 'theme_options[client_menu_title]',		

	'type'        => 'text',

	)

);



// Client Section Title

$wp_customize->add_setting('theme_options[client_section_title]', 

	array(

	'default'           => $default['client_section_title'],

	'type'              => 'theme_mod',

	'capability'        => 'edit_theme_options',	

	'sanitize_callback' => 'sanitize_text_field'

	)

);



$wp_customize->add_control('theme_options[client_section_title]', 

	array(

	'label'       => esc_html__('Client Section Title', 'career-portfolio'),

	'section'     => 'section_client',   

	'settings'    => 'theme_options[client_section_title]',		

	'type'        => 'text',

	)

);

// Client Title

$wp_customize->add_setting('theme_options[client_title]', 

	array(

	'default'           => $default['client_title'],

	'type'              => 'theme_mod',

	'capability'        => 'edit_theme_options',	

	'sanitize_callback' => 'sanitize_text_field'

	)

);



$wp_customize->add_control('theme_options[client_title]', 

	array(

	'label'       => esc_html__('Client Title', 'career-portfolio'),

	'section'     => 'section_client',   

	'settings'    => 'theme_options[client_title]',		

	'type'        => 'text',

	)

);

// Client Category 

$wp_customize->add_setting( 'theme_options[client_category]',

	array(

	'default'           => $default['client_category'],

	'capability'        => 'edit_theme_options',

	'sanitize_callback' => 'absint',

	)

);

$wp_customize->add_control(

	new Career_Portfolio_Dropdown_Taxonomies_Control( $wp_customize, 'theme_options[client_category]',

		array(

		'label'    => esc_html__( 'Select Category', 'career-portfolio' ),

		'section'  => 'section_client',

		'settings' => 'theme_options[client_category]',

		)

	)

);

// Client Number
$wp_customize->add_setting( 'theme_options[client_number]',

	array(

		'default'           => $default['client_number'],

		'capability'        => 'edit_theme_options',

		'sanitize_callback' => 'career_portfolio_sanitize_number_range',

		)

);

$wp_customize->add_control( 'theme_options[client_number]',

	array(

		'label'       => esc_html__( 'Select Number', 'career-portfolio' ),

		'section'     => 'section_client',

		'type'        => 'number',

		'input_attrs' => array( 'min' => 1, 'max' => 6, 'step' => 1, 'style' => 'width: 115px;' ),

	)

);

// Blog Section

$wp_customize->add_section('section_blog', 

	array(    

	'title'       => esc_html__('Blog Setting', 'career-portfolio'),

	'priority'    => 120,	

	'panel'       => 'home_option_panel'    

	)

);



// Enable Blog Section

$wp_customize->add_setting( 'theme_options[enable_blog]',

	array(

		'default'           => $default['enable_blog'],

		'capability'        => 'edit_theme_options',

		'sanitize_callback' => 'career_portfolio_sanitize_checkbox',

	)

);

$wp_customize->add_control( 'theme_options[enable_blog]',

	array(

		'label'    => esc_html__( 'Enable Blog Section', 'career-portfolio' ),

		'section'  => 'section_blog',

		'type'     => 'checkbox',		

	)

);





// Menu Title

$wp_customize->add_setting('theme_options[blog_menu_title]', 

	array(

	'default'           => $default['blog_menu_title'],

	'type'              => 'theme_mod',

	'capability'        => 'edit_theme_options',	

	'sanitize_callback' => 'sanitize_text_field'

	)

);



$wp_customize->add_control('theme_options[blog_menu_title]', 

	array(

	'label'       => esc_html__('Blog Menu Title', 'career-portfolio'),

	'section'     => 'section_blog',   

	'settings'    => 'theme_options[blog_menu_title]',		

	'type'        => 'text',

	)

);



// Blog Section Title

$wp_customize->add_setting('theme_options[blog_section_title]', 

	array(

	'default'           => $default['blog_section_title'],

	'type'              => 'theme_mod',

	'capability'        => 'edit_theme_options',	

	'sanitize_callback' => 'sanitize_text_field'

	)

);



$wp_customize->add_control('theme_options[blog_section_title]', 

	array(

	'label'       => esc_html__('Blog Section Title', 'career-portfolio'),

	'section'     => 'section_blog',   

	'settings'    => 'theme_options[blog_section_title]',		

	'type'        => 'text',

	)

);



// Blog  Title

$wp_customize->add_setting('theme_options[blog_title]', 

	array(

	'default'           => $default['blog_title'],

	'type'              => 'theme_mod',

	'capability'        => 'edit_theme_options',	

	'sanitize_callback' => 'sanitize_text_field'

	)

);



$wp_customize->add_control('theme_options[blog_title]', 

	array(

	'label'       => esc_html__('Blog Title', 'career-portfolio'),

	'section'     => 'section_blog',   

	'settings'    => 'theme_options[blog_title]',		

	'type'        => 'text',

	)

);



// Blog Category 

$wp_customize->add_setting( 'theme_options[blog_category]',

	array(

	'default'           => $default['blog_category'],

	'capability'        => 'edit_theme_options',

	'sanitize_callback' => 'absint',

	)

);

$wp_customize->add_control(

	new Career_Portfolio_Dropdown_Taxonomies_Control( $wp_customize, 'theme_options[blog_category]',

		array(

		'label'    => esc_html__( 'Select Blog Category', 'career-portfolio' ),

		'section'  => 'section_blog',

		'settings' => 'theme_options[blog_category]',

		)

	)

);

// Blog Number

$wp_customize->add_setting( 'theme_options[blog_number]',

	array(

		'default'           => $default['blog_number'],

		'capability'        => 'edit_theme_options',

		'sanitize_callback' => 'career_portfolio_sanitize_number_range',

		)

);

$wp_customize->add_control( 'theme_options[blog_number]',

	array(

		'label'       => esc_html__( 'Select Blog Number', 'career-portfolio' ),

		'section'     => 'section_blog',

		'type'        => 'number',

		'input_attrs' => array( 'min' => 1, 'max' => 6, 'step' => 1, 'style' => 'width: 115px;' ),

	)

);

// Blog  Title

$wp_customize->add_setting('theme_options[blog_button_url]', 

	array(

	'default'           => $default['blog_button_url'],

	'type'              => 'theme_mod',

	'capability'        => 'edit_theme_options',	

	'sanitize_callback' => 'sanitize_text_field'

	)

);



$wp_customize->add_control('theme_options[blog_button_url]', 

	array(

	'label'       => esc_html__('Blog Button Text', 'career-portfolio'),

	'section'     => 'section_blog',   

	'settings'    => 'theme_options[blog_button_url]',		

	'type'        => 'text',

	)

);



// Contact Section

$wp_customize->add_section('section_contact', 

	array(    

	'title'       => esc_html__('Contact Setting', 'career-portfolio'),

	'priority'    => 120,	

	'panel'       => 'home_option_panel'    

	)

);



// Enable Contact Section

$wp_customize->add_setting( 'theme_options[enable_contact]',

	array(

		'default'           => $default['enable_contact'],

		'capability'        => 'edit_theme_options',

		'sanitize_callback' => 'career_portfolio_sanitize_checkbox',

	)

);

$wp_customize->add_control( 'theme_options[enable_contact]',

	array(

		'label'    => esc_html__( 'Enable Contact Section', 'career-portfolio' ),

		'section'  => 'section_contact',

		'type'     => 'checkbox',		

	)

);





// Menu Title

$wp_customize->add_setting('theme_options[contact_menu_title]', 

	array(

	'default'           => $default['contact_menu_title'],

	'type'              => 'theme_mod',

	'capability'        => 'edit_theme_options',	

	'sanitize_callback' => 'sanitize_text_field'

	)

);



$wp_customize->add_control('theme_options[contact_menu_title]', 

	array(

	'label'       => esc_html__('Contact Menu Title', 'career-portfolio'),

	'section'     => 'section_contact',   

	'settings'    => 'theme_options[contact_menu_title]',		

	'type'        => 'text',

	)

);



// Contact Section Title

$wp_customize->add_setting('theme_options[contact_section_title]', 

	array(

	'default'           => $default['contact_section_title'],

	'type'              => 'theme_mod',

	'capability'        => 'edit_theme_options',	

	'sanitize_callback' => 'sanitize_text_field'

	)

);



$wp_customize->add_control('theme_options[contact_section_title]', 

	array(

	'label'       => esc_html__('Contact Section Title', 'career-portfolio'),

	'section'     => 'section_contact',   

	'settings'    => 'theme_options[contact_section_title]',		

	'type'        => 'text',

	)

);

// Contact Background Image

$wp_customize->add_setting('theme_options[contact_bg_image]', 

	array(

	'default'           => $default['contact_bg_image'],	

	'sanitize_callback' => 'esc_url_raw'

	)

);

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'theme_options[contact_bg_image]',

       array(

           'label'      =>esc_html__( 'Upload a Background Image', 'career-portfolio' ),

           'section'    => 'section_contact',

           'settings'   => 'theme_options[contact_bg_image]',      

       )

   )

);

// Contact Page

$wp_customize->add_setting('theme_options[contact_page]', 

	array(

	'default'           => $default['contact_page'],

	'type'              => 'theme_mod',

	'capability'        => 'edit_theme_options',	

	'sanitize_callback' => 'career_portfolio_sanitize_dropdown_pages'

	)

);



$wp_customize->add_control('theme_options[contact_page]', 

	array(

	'label'       => esc_html__('Section Contact Page', 'career-portfolio'),

	'section'     => 'section_contact',   

	'settings'    => 'theme_options[contact_page]',		

	'type'        => 'dropdown-pages', 

	)

);