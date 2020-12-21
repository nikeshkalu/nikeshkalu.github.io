<?php
/**
 * Theme Customizer
 *
 * @package Career_Portfolio
 */
$default = career_portfolio_get_default_theme_options();
/****************  Add Pannel   ***********************/
$wp_customize->add_panel( 'theme_option_panel',
	array(
	'title'      => esc_html__( 'Theme Options', 'career-portfolio' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	)
);
/************************  Site Identity  ******************/
$wp_customize->add_setting('theme_options[site_identity]', 
    array(
    'default'           => $default['site_identity'],
    'sanitize_callback' => 'career_portfolio_sanitize_select'
    )
);
$wp_customize->add_control('theme_options[site_identity]', 
    array(    
    'label'     => esc_html__('Choose Option', 'career-portfolio'),
    'section'   => 'title_tagline',
    'settings'  => 'theme_options[site_identity]',
    'type'      => 'radio',
    'choices'   =>  array(
            'logo-only'     => esc_html__('Logo Only', 'career-portfolio'),
            'logo-title'    => esc_html__('Logo + Title', 'career-portfolio'),
            'logo-text'     => esc_html__('Logo + Tagline', 'career-portfolio'),
            'title-only'    => esc_html__('Title Only', 'career-portfolio'),
            'title-text'    => esc_html__('Title + Tagline', 'career-portfolio'),
        )

    )

);



/****************  Enable Header Media************/

$wp_customize->add_setting( 'theme_options[enable_header_media]',

    array(

        'default'           => $default['enable_header_media'],

        'capability'        => 'edit_theme_options',

        'sanitize_callback' => 'career_portfolio_sanitize_checkbox',        

    )

);

$wp_customize->add_control( 'theme_options[enable_header_media]',

    array(

        'label'    => esc_html__( 'Enable Header Media', 'career-portfolio' ),

        'section'  => 'header_image',

        'type'     => 'checkbox',      

    )

);

// Menu Title

$wp_customize->add_setting('theme_options[header_media_menu_title]', 

    array(

    'default'           => $default['header_media_menu_title'],

    'type'              => 'theme_mod',

    'capability'        => 'edit_theme_options',    

    'sanitize_callback' => 'sanitize_text_field'

    )

);



$wp_customize->add_control('theme_options[header_media_menu_title]', 

    array(

    'label'       => esc_html__('Menu Title', 'career-portfolio'),

    'section'     => 'header_image',   

    'settings'    => 'theme_options[header_media_menu_title]',       

    'type'        => 'text',

    )

);



// Disbale on Search Page/ Archive Page

$wp_customize->add_setting( 'theme_options[disable_media_archive]',

    array(

        'default'           => $default['disable_media_archive'],

        'capability'        => 'edit_theme_options',

        'sanitize_callback' => 'career_portfolio_sanitize_checkbox',        

    )

);

$wp_customize->add_control( 'theme_options[disable_media_archive]',

    array(

        'label'    => esc_html__( 'Disable on 404, Search & Archives?', 'career-portfolio' ),

        'section'  => 'header_image',

        'type'     => 'checkbox', 

        'active_callback' => 'career_portfolio_callback_header_media',     

    )

);



// Disable on Blog page?

$wp_customize->add_setting( 'theme_options[disable_media_blog]',

    array(

        'default'           => $default['disable_media_blog'],

        'capability'        => 'edit_theme_options',

        'sanitize_callback' => 'career_portfolio_sanitize_checkbox',        

    )

);

$wp_customize->add_control( 'theme_options[disable_media_blog]',

    array(

        'label'    => esc_html__( 'Disable on Blog page?', 'career-portfolio' ),

        'section'  => 'header_image',

        'type'     => 'checkbox', 

        'active_callback' => 'career_portfolio_callback_header_media',     

    )

);



// Disable on Latest Posts Page?

$wp_customize->add_setting( 'theme_options[disable_media_index]',

    array(

        'default'           => $default['disable_media_index'],

        'capability'        => 'edit_theme_options',

        'sanitize_callback' => 'career_portfolio_sanitize_checkbox',        

    )

);

$wp_customize->add_control( 'theme_options[disable_media_index]',

    array(

        'label'    => esc_html__( 'Disable on Latest Posts Page?', 'career-portfolio' ),

        'section'  => 'header_image',

        'type'     => 'checkbox', 

        'active_callback' => 'career_portfolio_callback_header_media',     

    )

);



// Disable on Pages?

$wp_customize->add_setting( 'theme_options[disable_media_post]',

    array(

        'default'           => $default['disable_media_post'],

        'capability'        => 'edit_theme_options',

        'sanitize_callback' => 'career_portfolio_sanitize_checkbox',        

    )

);

$wp_customize->add_control( 'theme_options[disable_media_post]',

    array(

        'label'    => esc_html__( 'Disable on Posts?', 'career-portfolio' ),

        'section'  => 'header_image',

        'type'     => 'checkbox', 

        'active_callback' => 'career_portfolio_callback_header_media',     

    )

);



// Disable on Posts?

$wp_customize->add_setting( 'theme_options[disable_media_page]',

    array(

        'default'           => $default['disable_media_page'],

        'capability'        => 'edit_theme_options',

        'sanitize_callback' => 'career_portfolio_sanitize_checkbox',        

    )

);

$wp_customize->add_control( 'theme_options[disable_media_page]',

    array(

        'label'    => esc_html__( 'Disable on Page?', 'career-portfolio' ),

        'section'  => 'header_image',

        'type'     => 'checkbox', 

        'active_callback' => 'career_portfolio_callback_header_media',     

    )

);

// Header Media Title

$wp_customize->add_setting('theme_options[header_media_title]', 

    array(

    'default'           => $default['header_media_title'],

    'type'              => 'theme_mod',

    'capability'        => 'edit_theme_options',    

    'sanitize_callback' => 'sanitize_text_field'

    )

);



$wp_customize->add_control('theme_options[header_media_title]', 

    array(

    'label'       => esc_html__('Header Media Title', 'career-portfolio'),

    'section'     => 'header_image',   

    'settings'    => 'theme_options[header_media_title]',        

    'type'        => 'text',

    'active_callback' => 'career_portfolio_callback_header_media',    

    )

);



// Header Media Sub Title

$wp_customize->add_setting('theme_options[header_media_sub_title]', 

    array(

    'default'           => $default['header_media_sub_title'],

    'type'              => 'theme_mod',

    'capability'        => 'edit_theme_options',    

    'sanitize_callback' => 'sanitize_text_field'

    )

);



$wp_customize->add_control('theme_options[header_media_sub_title]', 

    array(

    'label'       => esc_html__('Header Media Sub Title', 'career-portfolio'),

    'section'     => 'header_image',   

    'settings'    => 'theme_options[header_media_sub_title]',        

    'type'        => 'text',

    'active_callback' => 'career_portfolio_callback_header_media',    

    )

);



// Header Media Button Title

$wp_customize->add_setting('theme_options[header_media_button_title]', 

    array(

    'default'           => $default['header_media_button_title'],

    'type'              => 'theme_mod',

    'capability'        => 'edit_theme_options',    

    'sanitize_callback' => 'sanitize_text_field'

    )

);



$wp_customize->add_control('theme_options[header_media_button_title]', 

    array(

    'label'       => esc_html__('Header Media Button Title', 'career-portfolio'),

    'section'     => 'header_image',   

    'settings'    => 'theme_options[header_media_button_title]',        

    'type'        => 'text',

    'active_callback' => 'career_portfolio_callback_header_media',    

    )

);

// Header Media Button Url

$wp_customize->add_setting('theme_options[header_media_button_url]', 

    array(

    'default'           => $default['header_media_button_url'],

    'type'              => 'theme_mod',

    'capability'        => 'edit_theme_options',    

    'sanitize_callback' => 'esc_url_raw'

    )

);



$wp_customize->add_control('theme_options[header_media_button_url]', 

    array(

    'label'       => esc_html__('Header Media Button Url', 'career-portfolio'),

    'section'     => 'header_image',   

    'settings'    => 'theme_options[header_media_button_url]',        

    'type'        => 'url',

    'active_callback' => 'career_portfolio_callback_header_media',    

    )

);







/****************  Header Setting Section starts ************/

$wp_customize->add_section('section_header', 

    array(    

    'title'       => esc_html__('Header Setting', 'career-portfolio'),

    'panel'       => 'theme_option_panel'    

    )

);

/********************* Enable line Wrap ****************************/

$wp_customize->add_setting( 'theme_options[enable_line_wrap]',

    array(

        'default'           => $default['enable_line_wrap'],

        'capability'        => 'edit_theme_options',

        'sanitize_callback' => 'career_portfolio_sanitize_checkbox',        

    )

);

$wp_customize->add_control( 'theme_options[enable_line_wrap]',

    array(

        'label'    => esc_html__( 'Enable Line Wrap', 'career-portfolio' ),

        'section'  => 'section_header',

        'type'     => 'checkbox',      

    )

);

/********************* Enable Search ****************************/

$wp_customize->add_setting( 'theme_options[enable_search]',

    array(

        'default'           => $default['enable_search'],

        'capability'        => 'edit_theme_options',

        'sanitize_callback' => 'career_portfolio_sanitize_checkbox',        

    )

);

$wp_customize->add_control( 'theme_options[enable_search]',

    array(

        'label'    => esc_html__( 'Enable Header Search', 'career-portfolio' ),

        'section'  => 'section_header',

        'type'     => 'checkbox',      

    )

);

/********************* Enable Social Menu ****************************/

$wp_customize->add_setting( 'theme_options[enable_social_menu]',

    array(

        'default'           => $default['enable_social_menu'],

        'capability'        => 'edit_theme_options',

        'sanitize_callback' => 'career_portfolio_sanitize_checkbox',        

    )

);

$wp_customize->add_control( 'theme_options[enable_social_menu]',

    array(

        'label'    => esc_html__( 'Enable Header Social Menu', 'career-portfolio' ),

        'section'  => 'section_header',

        'type'     => 'checkbox',      

    )

);



/********************* Enable Toggle Section ****************************/

$wp_customize->add_setting( 'theme_options[enable_toggle_section]',

    array(

        'default'           => $default['enable_toggle_section'],

        'capability'        => 'edit_theme_options',

        'sanitize_callback' => 'career_portfolio_sanitize_checkbox',        

    )

);

$wp_customize->add_control( 'theme_options[enable_toggle_section]',

    array(

        'label'    => esc_html__( 'Enable Header Toggle', 'career-portfolio' ),

        'section'  => 'section_header',

        'type'     => 'checkbox',      

    )

);



/********************* Enable Navigation ****************************/

$wp_customize->add_setting( 'theme_options[enable_navigation]',

    array(

        'default'           => $default['enable_navigation'],

        'capability'        => 'edit_theme_options',

        'sanitize_callback' => 'career_portfolio_sanitize_checkbox',        

    )

);

$wp_customize->add_control( 'theme_options[enable_navigation]',

    array(

        'label'    => esc_html__( 'Enable Navigation', 'career-portfolio' ),

        'section'  => 'section_header',

        'type'     => 'checkbox', 

        'active_callback' => 'career_portfolio_callback_header_navigation',      

    )

);

/********************* Enable One Page Navigation ****************************/

$wp_customize->add_setting( 'theme_options[enable_one_page_navigation]',

    array(

        'default'           => $default['enable_one_page_navigation'],

        'capability'        => 'edit_theme_options',

        'sanitize_callback' => 'career_portfolio_sanitize_checkbox',        

    )

);

$wp_customize->add_control( 'theme_options[enable_one_page_navigation]',

    array(

        'label'    => esc_html__( 'Enable One Page Navigation', 'career-portfolio' ),

        'section'  => 'section_header',

        'type'     => 'checkbox',       

    )

);


// Header Layout 
$wp_customize->add_setting('theme_options[header_layout]', 
    array(
    'default'           => $default['header_layout'],
    'type'              => 'theme_mod',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'career_portfolio_sanitize_select'
    )
);

$wp_customize->add_control('theme_options[header_layout]', 
    array(      
    'label'     => esc_html__('Header Layout', 'career-portfolio'),
    'section'   => 'section_header',
    'settings'  => 'theme_options[header_layout]',
    'type'      => 'radio',
    'choices'   => array(       
        'horizontal-menu'     => esc_html__('Horizontal Layout', 'career-portfolio'),                            
        'vertical-menu'      => esc_html__('Vertical Layout', 'career-portfolio'),
        'normal-menu'      => esc_html__('Normal Layout', 'career-portfolio'),     
        ),  
    )
);


// Blog Setting Section starts 

$wp_customize->add_section('section_general', 

    array(    

    'title'       => esc_html__('General  Setting', 'career-portfolio'),

    'panel'       => 'theme_option_panel'    

    )

);

/********************* Sidebar Layout  ****************************/

$wp_customize->add_setting('theme_options[sidebar_layout]', 

    array(

    'default'           => $default['sidebar_layout'],

    'type'              => 'theme_mod',

    'capability'        => 'edit_theme_options',

    'sanitize_callback' => 'career_portfolio_sanitize_select'

    )

);



$wp_customize->add_control('theme_options[sidebar_layout]', 

    array(      

    'label'     => esc_html__('Sidebar Layout Options', 'career-portfolio'),

    'section'   => 'section_general',

    'settings'  => 'theme_options[sidebar_layout]',

    'type'      => 'radio',

    'choices'   => array(       

        'right_sidebar'     => esc_html__('Right Sidebar', 'career-portfolio'),                            

        'left_sidebar'      => esc_html__('Left Sidebar', 'career-portfolio'),

        'no_sidebar'        => esc_html__('No Sidebar', 'career-portfolio'),       

        ),  

    )

);

// Blog Setting Section 

$wp_customize->add_section('section_archive', 

    array(    

    'title'       => esc_html__('Blog Setting', 'career-portfolio'),

    'panel'       => 'theme_option_panel'    

    )

);



// Enable Category 

$wp_customize->add_setting( 'theme_options[enable_categories]',

    array(

        'default'           => $default['enable_categories'],

        'capability'        => 'edit_theme_options',

        'sanitize_callback' => 'career_portfolio_sanitize_checkbox',

    )

);

$wp_customize->add_control( 'theme_options[enable_categories]',

    array(

        'label'    => esc_html__( 'Enable Category Meta', 'career-portfolio' ),

        'section'  => 'section_archive',

        'type'     => 'checkbox',       

    )

);



// Posted Date

$wp_customize->add_setting( 'theme_options[enable_posted_date]',

    array(

        'default'           => $default['enable_posted_date'],

        'capability'        => 'edit_theme_options',

        'sanitize_callback' => 'career_portfolio_sanitize_checkbox',

    )

);

$wp_customize->add_control( 'theme_options[enable_posted_date]',

    array(

        'label'    => esc_html__( 'Enable Posted Date', 'career-portfolio' ),

        'section'  => 'section_archive',

        'type'     => 'checkbox',       

    )

);



// Pagination Layout 

$wp_customize->add_setting('theme_options[pagination_layout]', 

    array(

    'default'           => $default['pagination_layout'],

    'type'              => 'theme_mod',

    'capability'        => 'edit_theme_options',

    'sanitize_callback' => 'career_portfolio_sanitize_select'

    )

);



$wp_customize->add_control('theme_options[pagination_layout]', 

    array(      

    'label'     => esc_html__('Pagination Options', 'career-portfolio'),

    'section'   => 'section_archive',

    'settings'  => 'theme_options[pagination_layout]',

    'type'      => 'radio',

    'choices'   => array(       

        'default'     => esc_html__('Default', 'career-portfolio'),                            

        'numeric'      => esc_html__('Numeric', 'career-portfolio'),      

        ),  

    )

);



// Footer Setting 

$wp_customize->add_section('section_footer', 

    array(    

    'title'       => esc_html__('Footer Setting', 'career-portfolio'),

    'panel'       => 'theme_option_panel'    

    )

);

// Setting copyright text

$wp_customize->add_setting( 'theme_options[copyright_text]',

    array(

    'default'           => $default['copyright_text'],

    'capability'        => 'edit_theme_options',

    'sanitize_callback' => 'sanitize_text_field',

    )

);

$wp_customize->add_control( 'theme_options[copyright_text]',

    array(

    'label'    => esc_html__( 'Copyright Text', 'career-portfolio' ),

    'section'  => 'section_footer',

    'type'     => 'text',

    )

);



/********************* Enable Scroll to Top ****************************/

$wp_customize->add_setting( 'theme_options[enable_scrollto_top]',

    array(

        'default'           => $default['enable_scrollto_top'],

        'capability'        => 'edit_theme_options',

        'sanitize_callback' => 'career_portfolio_sanitize_checkbox',

    )

);

$wp_customize->add_control( 'theme_options[enable_scrollto_top]',

    array(

        'label'    => esc_html__( 'Enable Back to Top', 'career-portfolio' ),

        'section'  => 'section_footer',

        'type'     => 'checkbox',          

    )

);