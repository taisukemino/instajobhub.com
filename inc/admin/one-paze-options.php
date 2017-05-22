<?php
    /**
     * Necessary Variables
     */
    $one_paze_page_lists = one_paze_page_lists();
    $one_paze_category_lists = one_paze_category_lists();
    
    $bg_repeat = array(
        'no-repeat'  => __('No Repeat', 'one-paze'),
        'repeat'     => __('Tile', 'one-paze'),
        'repeat-x'   => __('Tile Horizontally', 'one-paze'),
        'repeat-y'   => __('Tile Vertically', 'one-paze'),
    );
        
    $bg_position = array(
        'left'       => __('Left', 'one-paze'),
        'center'     => __('Center', 'one-paze'),
        'right'      => __('Right', 'one-paze'),
    );
    
    $bg_attachment = array(
        'fixed'      => __('Fixed', 'one-paze'),
        'scroll'     => __('Scroll', 'one-paze'),
    );

    $bg_size = array(
        'auto' => __('Auto', 'one-paze'),
        'cover' => __('Cover', 'one-paze'),
        'contain' => __('Contain', 'one-paze'),
    );
    
    $menu_shows = array(
        'top' => __('Top', 'one-paze'),
        'right' => __('Right', 'one-paze'),
        'left' => __('Left', 'one-paze'),
    );
    
    $blog_layouts = array(
        'blog_image_large' => __('Blog Image Large', 'one-paze'),
        'blog_image_medium' => __('Blog Image Medium', 'one-paze'),
        'blog_image_alt_medium' => __('Blog Image Alternate Medium', 'one-paze'),
        'blog_full_content' => __('Blog Full Content', 'one-paze')
    );
    
    $one_paze_section_enables = array('about', 'cta', 'services', 'portfolio', 'blog', 'testimonial', 'team', 'contact');
    $one_paze_section_menu_titles = array('about', 'cta', 'services', 'portfolio', 'blog', 'testimonial', 'team', 'contact');
    $one_paze_section_titles = array('about', 'services', 'portfolio', 'blog', 'testimonial', 'team');
    $one_paze_section_title_colors = array('about', 'services', 'portfolio', 'blog', 'testimonial', 'team');
    $one_paze_section_content_colors = array('about', 'cta', 'services', 'testimonial', 'team');
    $one_paze_section_descrs = array('cta', 'services');
    $one_paze_section_categories = array('portfolio', 'blog', 'testimonial', 'team');
    $sections_bgs = array('about', 'services', 'portfolio', 'blog', 'cta', 'testimonial', 'team');
    
    /**
     * Panels
     */
    $one_paze_panels = array(
        'header_settings' => array(
            'id' => 'header_settings',
            'args' => array(
                'title' => __('Header Settings', 'one-paze'),
                'description' => __('Configure Header Sections', 'one-paze'),
                'priority' => 500,
            )
        ),
        'home_page_section' => array(
            'id' => 'home_page_section',
            'args' => array(
                'title' => __('Home Page Settings', 'one-paze'),
                'description' => __('Configure Home Page Sections', 'one-paze'),
                'priority' => 700,
            )
        ),
    );
    
    /**
     * Sections
     */
     
    $one_paze_sections = array(
        /** Slider Settings **/
        'slider_settings' => array(
            'id' => 'slider_settings',
            'args' => array(
                'title' => __('Slider Settings', 'one-paze'),
                'description' => __('Configure Slider Sections', 'one-paze'),
                'priority' => 600,
                'capability' => 'edit_theme_options',
                'theme_supports' => '',
            )
        ),                       
        /** General Section **/
        'general' => array(
            'id' => 'general_section',
            'args' => array(
                'title' => __('General Settings', 'one-paze'),
                'description' => __('General Setting Configurations', 'one-paze'),
                'priority' => 1,
                'capability' => 'edit_theme_options',
                'theme_supports' => '',
                'panel' => 'home_page_section'
            )
        ),
        
        /** About Section **/
        'about' => array(
            'id' => 'about_section',
            'args' => array(
                'title' => __('About Section', 'one-paze'),
                'description' => __('About Section Configurations', 'one-paze'),
                'priority' => 1,
                'capability' => 'edit_theme_options',
                'theme_supports' => '',
                'panel' => 'home_page_section'
            )
        ),
        
        /** Portfolio/Project Section **/
        'portfolio' => array(
            'id' => 'portfolio_section',
            'args' => array(
                'title' => __('Portfolio/Project Section', 'one-paze'),
                'description' => __('Portfolio/Project Section Configurations', 'one-paze'),
                'priority' => 2,
                'capability' => 'edit_theme_options',
                'theme_supports' => '',
                'panel' => 'home_page_section'
            )
        ),
        
        /** Our Services Section **/
        'services' => array(
            'id' => 'services_section',
            'args' => array(
                'title' => __('Our Services Section', 'one-paze'),
                'description' => __('Our Services Section Configurations', 'one-paze'),
                'priority' => 3,
                'capability' => 'edit_theme_options',
                'theme_supports' => '',
                'panel' => 'home_page_section'
            )
        ),
        
        /** Blog Section **/
        'blog' => array(
            'id' => 'blog_section',
            'args' => array(
                'title' => __('Blog Section', 'one-paze'),
                'description' => __('Blog Section Configurations', 'one-paze'),
                'priority' => 4,
                'capability' => 'edit_theme_options',
                'theme_supports' => '',
                'panel' => 'home_page_section'
            )
        ),
        
        /** Call To Action Section **/
        'cta' => array(
            'id' => 'cta_section',
            'args' => array(
                'title' => __('Call To Action Section', 'one-paze'),
                'description' => __('Call To Action Section Configurations', 'one-paze'),
                'priority' => 5,
                'capability' => 'edit_theme_options',
                'theme_supports' => '',
                'panel' => 'home_page_section'
            )
        ),
        
        /** Testimonial Section **/
        'testimonial' => array(
            'id' => 'testimonial_section',
            'args' => array(
                'title' => __('Testimonial Section', 'one-paze'),
                'description' => __('Testimonial Section Configurations', 'one-paze'),
                'priority' => 6,
                'capability' => 'edit_theme_options',
                'theme_supports' => '',
                'panel' => 'home_page_section'
            )
        ),
        
        /** Team Section **/
        'team' => array(
            'id' => 'team_section',
            'args' => array(
                'title' => __('Team Section', 'one-paze'),
                'description' => __('Team Section Configurations', 'one-paze'),
                'priority' => 7,
                'capability' => 'edit_theme_options',
                'theme_supports' => '',
                'panel' => 'home_page_section'
            )
        ),
        'contact' => array(
            'id' => 'contact_section',
            'args' => array(
                'title' => __('Contact Section', 'one-paze'),
                'description' => __('Contact Section Configurations', 'one-paze'),
                'priority' => 8,
                'capability' => 'edit_theme_options',
                'theme_supports' => '',
                'panel' => 'home_page_section'
            )
        ),
        
        /** Blog/Archive Settings **/
        'blog_archive' => array(
            'id' => 'blog_archive_section',
            'args' => array(
                'title' => __('Blog/Archive Settings', 'one-paze'),
                'description' => __('Blog/Archive Page Configurations', 'one-paze'),
                'priority' => 800,
                'capability' => 'edit_theme_options',
            )
        ),
        
    );
    
    /**
     * One Paze Settings
     */
    
    /** Settings **/
/** General Setting **/
$wp_customize->add_setting(
    'disp_parallax_menu',
    array(
        'default' => 0,
        'sanitize_callback' => 'one_paze_sanitize_checkbox',
    )
);

/** About Settings **/
    /** About Page Setting **/
    $wp_customize->add_setting(
        'about_section_page',
        array(
            'default' => 0,
            'sanitize_callback' => 'one_paze_sanitize_page_select',
        )
    );
    
    /** Our Services Settings **/
    $wp_customize->add_setting(
        'services_section_page1',
        array(
            'default' => 0,
            'sanitize_callback' => 'one_paze_sanitize_page_select',
        )
    );
    
    $wp_customize->add_setting(
        'services_section_page2',
        array(
            'default' => 0,
            'sanitize_callback' => 'one_paze_sanitize_page_select',
        )
    );
    
    $wp_customize->add_setting(
        'services_section_page3',
        array(
            'default' => 0,
            'sanitize_callback' => 'one_paze_sanitize_page_select',
        )
    );
    
    $wp_customize->add_setting(
        'services_section_page4',
        array(
            'default' => 0,
            'sanitize_callback' => 'one_paze_sanitize_page_select',
        )
    ); 
    
    /** Call To Action Settings **/            
    $wp_customize->add_setting(
        'cta_buton_text',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_text',
        )
    );
    
    $wp_customize->add_setting(
        'cta_buton_link',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_url',
        )
    );
    
    /** Section Enables Settings **/
    $wp_customize->add_setting(
        'about_section_enable',
        array(
            'default' => 0,
            'sanitize_callback' => 'one_paze_sanitize_checkbox',
        )
    );
    
    $wp_customize->add_setting(
        'portfolio_section_enable',
        array(
            'default' => 0,
            'sanitize_callback' => 'one_paze_sanitize_checkbox',
        )
    );
    
    $wp_customize->add_setting(
        'services_section_enable',
        array(
            'default' => 0,
            'sanitize_callback' => 'one_paze_sanitize_checkbox',
        )
    );
    
    $wp_customize->add_setting(
        'blog_section_enable',
        array(
            'default' => 0,
            'sanitize_callback' => 'one_paze_sanitize_checkbox',
        )
    );
    
    $wp_customize->add_setting(
        'cta_section_enable',
        array(
            'default' => 0,
            'sanitize_callback' => 'one_paze_sanitize_checkbox',
        )
    );
    
    $wp_customize->add_setting(
        'testimonial_section_enable',
        array(
            'default' => 0,
            'sanitize_callback' => 'one_paze_sanitize_checkbox',
        )
    );
    
    $wp_customize->add_setting(
        'team_section_enable',
        array(
            'default' => 0,
            'sanitize_callback' => 'one_paze_sanitize_checkbox',
        )
    );
    
    $wp_customize->add_setting(
        'contact_section_enable',
        array(
            'default' => 0,
            'sanitize_callback' => 'one_paze_sanitize_checkbox',
        )
    );
        
    /** Section Menu Titles Settings **/
    $wp_customize->add_setting(
        'about_section_menu_title',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_text',
        )
    );
    
    $wp_customize->add_setting(
        'portfolio_section_menu_title',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_text',
        )
    );
    
    $wp_customize->add_setting(
        'services_section_menu_title',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_text',
        )
    );
    
    $wp_customize->add_setting(
        'blog_section_menu_title',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_text',
        )
    );
    
    $wp_customize->add_setting(
        'cta_section_menu_title',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_text',
        )
    );
    
    $wp_customize->add_setting(
        'testimonial_section_menu_title',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_text',
        )
    );
    
    $wp_customize->add_setting(
        'team_section_menu_title',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_text',
        )
    );
    
    $wp_customize->add_setting(
        'contact_section_menu_title',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_text',
        )
    );
        
    /** Section Titles Settings **/
    $wp_customize->add_setting(
        'about_section_title',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_text',
        )
    );
    
    $wp_customize->add_setting(
        'portfolio_section_title',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_text',
        )
    );
    
    $wp_customize->add_setting(
        'services_section_title',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_text',
        )
    );
    
    $wp_customize->add_setting(
        'about_section_title',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_text',
        )
    );
    
    $wp_customize->add_setting(
        'blog_section_title',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_text',
        )
    );
    
    $wp_customize->add_setting(
        'testimonial_section_title',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_text',
        )
    );
    
    $wp_customize->add_setting(
        'team_section_title',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_text',
        )
    );
    
    /** Section Title Color Settings **/    
    $wp_customize->add_setting(
        'about_section_title_color',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_text',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'portfolio_section_title_color',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_text',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'services_section_title_color',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_text',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'blog_section_title_color',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_text',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'testimonial_section_title_color',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_text',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'team_section_title_color',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_text',
            'transport' => 'postMessage',
        )
    );
    
    /** Section Content Color Settings **/
    $wp_customize->add_setting(
        'about_section_content_color',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_text',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'services_section_content_color',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_text',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'cta_section_content_color',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_text',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'testimonial_section_content_color',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_text',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'team_section_content_color',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_text',
            'transport' => 'postMessage',
        )
    );
        
    /** Section Description Settings **/    
    $wp_customize->add_setting(
        'services_section_descr',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_textarea',
        )
    );
    
    $wp_customize->add_setting(
        'cta_section_descr',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_textarea',
        )
    ); 
        
    /** Categories Settings **/
    $wp_customize->add_setting(
        'portfolio_section_category',
        array(
            'default' => 0,
            'sanitize_callback' => 'one_paze_sanitize_category_select',
        )
    );
    
    $wp_customize->add_setting(
        'blog_section_category',
        array(
            'default' => 0,
            'sanitize_callback' => 'one_paze_sanitize_category_select',
        )
    );
    
    $wp_customize->add_setting(
        'testimonial_section_category',
        array(
            'default' => 0,
            'sanitize_callback' => 'one_paze_sanitize_category_select',
        )
    );
    
    $wp_customize->add_setting(
        'team_section_category',
        array(
            'default' => 0,
            'sanitize_callback' => 'one_paze_sanitize_category_select',
        )
    );
    
    /** Section View All Text **/
    $wp_customize->add_setting(
        'portfolio_section_view_all',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_text',
        )
    );
    
    $wp_customize->add_setting(
        'blog_section_view_all',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_text',
        )
    );
        
    /**
     * Section Background Settings
     */
     
    /** Section Background Color Settings **/
    $wp_customize->add_setting(
        'about_section_bg_color',
        array(
            'default' => '#FFFFFF',
            'sanitize_callback' => 'one_paze_sanitize_text',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'portfolio_section_bg_color',
        array(
            'default' => '#FFFFFF',
            'sanitize_callback' => 'one_paze_sanitize_text',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'services_section_bg_color',
        array(
            'default' => '#FFFFFF',
            'sanitize_callback' => 'one_paze_sanitize_text',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'blog_section_bg_color',
        array(
            'default' => '#FFFFFF',
            'sanitize_callback' => 'one_paze_sanitize_text',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'cta_section_bg_color',
        array(
            'default' => '#FFFFFF',
            'sanitize_callback' => 'one_paze_sanitize_text',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'testimonial_section_bg_color',
        array(
            'default' => '#FFFFFF',
            'sanitize_callback' => 'one_paze_sanitize_text',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'team_section_bg_color',
        array(
            'default' => '#FFFFFF',
            'sanitize_callback' => 'one_paze_sanitize_text',
            'transport' => 'postMessage',
        )
    );
    
    /** Section Bg Image **/
    $wp_customize->add_setting(
        'about_section_bg_image',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_url',
            //'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'portfolio_section_bg_image',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_url',
            //'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'services_section_bg_image',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_url',
            //'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'blog_section_bg_image',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_url',
            //'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'cta_section_bg_image',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_url',
            //'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'testimonial_section_bg_image',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_url',
            //'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'team_section_bg_image',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_url',
            //'transport' => 'postMessage',
        )
    );

    /** Section Bg Repeat Settings **/
    $wp_customize->add_setting(
        'about_section_bg_repeat',
        array(
            'default' => 'no-repeat',
            'sanitize_callback' => 'one_paze_sanitize_bg_repeat',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'portfolio_section_bg_repeat',
        array(
            'default' => 'no-repeat',
            'sanitize_callback' => 'one_paze_sanitize_bg_repeat',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'services_section_bg_repeat',
        array(
            'default' => 'no-repeat',
            'sanitize_callback' => 'one_paze_sanitize_bg_repeat',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'blog_section_bg_repeat',
        array(
            'default' => 'no-repeat',
            'sanitize_callback' => 'one_paze_sanitize_bg_repeat',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'cta_section_bg_repeat',
        array(
            'default' => 'no-repeat',
            'sanitize_callback' => 'one_paze_sanitize_bg_repeat',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'testimonial_section_bg_repeat',
        array(
            'default' => 'no-repeat',
            'sanitize_callback' => 'one_paze_sanitize_bg_repeat',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'team_section_bg_repeat',
        array(
            'default' => 'no-repeat',
            'sanitize_callback' => 'one_paze_sanitize_bg_repeat',
            'transport' => 'postMessage',
        )
    );
    
    /** Section Bg Position Settings **/
    $wp_customize->add_setting(
        'about_section_bg_position',
        array(
            'default' => 'left',
            'sanitize_callback' => 'one_paze_sanitize_bg_position',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'portfolio_section_bg_position',
        array(
            'default' => 'left',
            'sanitize_callback' => 'one_paze_sanitize_bg_position',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'services_section_bg_position',
        array(
            'default' => 'left',
            'sanitize_callback' => 'one_paze_sanitize_bg_position',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'blog_section_bg_position',
        array(
            'default' => 'left',
            'sanitize_callback' => 'one_paze_sanitize_bg_position',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'cta_section_bg_position',
        array(
            'default' => 'left',
            'sanitize_callback' => 'one_paze_sanitize_bg_position',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'testimonial_section_bg_position',
        array(
            'default' => 'left',
            'sanitize_callback' => 'one_paze_sanitize_bg_position',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'team_section_bg_position',
        array(
            'default' => 'left',
            'sanitize_callback' => 'one_paze_sanitize_bg_position',
            'transport' => 'postMessage',
        )
    );
    
    /** Section BG attachment **/
    $wp_customize->add_setting(
        'about_section_bg_attachment',
        array(
            'default' => 'scroll',
            'sanitize_callback' => 'one_paze_sanitize_bg_attachment',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'portfolio_section_bg_attachment',
        array(
            'default' => 'scroll',
            'sanitize_callback' => 'one_paze_sanitize_bg_attachment',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'services_section_bg_attachment',
        array(
            'default' => 'scroll',
            'sanitize_callback' => 'one_paze_sanitize_bg_attachment',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'blog_section_bg_attachment',
        array(
            'default' => 'scroll',
            'sanitize_callback' => 'one_paze_sanitize_bg_attachment',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'cta_section_bg_attachment',
        array(
            'default' => 'scroll',
            'sanitize_callback' => 'one_paze_sanitize_bg_attachment',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'testimonial_section_bg_attachment',
        array(
            'default' => 'scroll',
            'sanitize_callback' => 'one_paze_sanitize_bg_attachment',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'team_section_bg_attachment',
        array(
            'default' => 'scroll',
            'sanitize_callback' => 'one_paze_sanitize_bg_attachment',
            'transport' => 'postMessage',
        )
    );

    /** Section Background Size **/
    $wp_customize->add_setting(
        'about_section_bg_size',
        array(
            'default' => 'auto',
            'sanitize_callback' => 'one_paze_sanitize_bg_size',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'portfolio_section_bg_size',
        array(
            'default' => 'auto',
            'sanitize_callback' => 'one_paze_sanitize_bg_size',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'services_section_bg_size',
        array(
            'default' => 'auto',
            'sanitize_callback' => 'one_paze_sanitize_bg_size',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'blog_section_bg_size',
        array(
            'default' => 'auto',
            'sanitize_callback' => 'one_paze_sanitize_bg_size',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'cta_section_bg_size',
        array(
            'default' => 'auto',
            'sanitize_callback' => 'one_paze_sanitize_bg_size',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'testimonial_section_bg_size',
        array(
            'default' => 'auto',
            'sanitize_callback' => 'one_paze_sanitize_bg_size',
            'transport' => 'postMessage',
        )
    );
    
    $wp_customize->add_setting(
        'team_section_bg_size',
        array(
            'default' => 'auto',
            'sanitize_callback' => 'one_paze_sanitize_bg_size',
            'transport' => 'postMessage',
        )
    );
    
    /** Section Enable Overlay Settings **/
    $wp_customize->add_setting(
        'about_section_enable_overlay',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_checkbox',
        )
    );
    
    $wp_customize->add_setting(
        'portfolio_section_enable_overlay',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_checkbox',
        )
    );
    
    $wp_customize->add_setting(
        'services_section_enable_overlay',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_checkbox',
        )
    );
    
    $wp_customize->add_setting(
        'blog_section_enable_overlay',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_checkbox',
        )
    );
    
    $wp_customize->add_setting(
        'cta_section_enable_overlay',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_checkbox',
        )
    );
    
    $wp_customize->add_setting(
        'testimonial_section_enable_overlay',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_checkbox',
        )
    );
    
    $wp_customize->add_setting(
        'team_section_enable_overlay',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_checkbox',
        )
    );
    
    /** Contact Section Settings **/
    $wp_customize->add_setting(
        'contact_section_email',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_email',
        )
    );
    
    $wp_customize->add_setting(
        'contact_section_address',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_text',
        )
    );
    
    $wp_customize->add_setting(
        'contact_section_phone',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_text',
        )
    );
    
    $wp_customize->add_setting(
        'contact_section_gmap_display',
        array(
            'default' => '',
            'sanitize_callback' => 'one_paze_sanitize_checkbox',
        )
    );
    
    /** Blog Archive Settings **/
    $wp_customize->add_setting(
        'blog_page_layouts',
        array(
            'default' => 'blog_image_large',
            'sanitize_callback' => 'one_paze_sanitize_text',
        )
    );
    
    $one_paze_other_controls['blog_page_layouts'] = array(
        'id' => 'blog_page_layouts',
        'args' => array(
            'label' => __('Select Layout', 'one-paze'),
            'section' => 'blog_archive_section',
            'type' => 'select',
            'choices' => $blog_layouts,
            'priority' => 1,
        )
    );
    
    /**
     * One Paze Controls
     */
    
    /**
     * Section Wise Specific Controls
     */
    $one_paze_other_controls = array(         
        /** General Section Controls **/
        'disp_parallax_menu' => array(
                'id' => 'disp_parallax_menu',
                'args' => array(
                    'label' => __('Display One Page Menu', 'one-paze'),
                    'section' => 'general_section',
                    'type' => 'checkbox',
                    'priority' => 1,
                )
            ),
        
        /** About Section Controls **/
            /** About Page Controls **/
            'about_section_page' => array(
                'id' => 'about_section_page',
                'args' => array(
                    'label' => __('Select Page', 'one-paze'),
                    'section' => 'about_section',
                    'type' => 'select',
                    'choices' => $one_paze_page_lists,
                    'priority' => 3,
                )
            ),
        
            /** Our Services Controls **/
            'services_section_page1' => array(
                'id' => 'services_section_page1',
                'args' => array(
                    'label' => __('Service 1', 'one-paze'),
                    'section' => 'services_section',
                    'type' => 'select',
                    'choices' => $one_paze_page_lists,
                    'priority' => 5,
                )
            ),
            
            'services_section_page2' => array(
                'id' => 'services_section_page2',
                'args' => array(
                    'label' => __('Service 2', 'one-paze'),
                    'section' => 'services_section',
                    'type' => 'select',
                    'choices' => $one_paze_page_lists,
                    'priority' => 6,
                )
            ),
            
            'services_section_page3' => array(
                'id' => 'services_section_page3',
                'args' => array(
                    'label' => __('Service 3', 'one-paze'),
                    'section' => 'services_section',
                    'type' => 'select',
                    'choices' => $one_paze_page_lists,
                    'priority' => 7,
                )
            ),
            
            'services_section_page4' => array(
                'id' => 'services_section_page4',
                'args' => array(
                    'label' => __('Service 4', 'one-paze'),
                    'section' => 'services_section',
                    'type' => 'select',
                    'choices' => $one_paze_page_lists,
                    'priority' => 8,
                )
            ),
            
            /** Call To Action Section Controls **/            
            'cta_buton_text' => array(
                'id' => 'cta_buton_text',
                'args' => array(
                    'label' => __('Button Text', 'one-paze'),
                    'section' => 'cta_section',
                    'type' => 'text',
                    'priority' => 5,
                )
            ),
            
            'cta_buton_link' => array(
                'id' => 'cta_buton_link',
                'args' => array(
                    'label' => __('Button Link', 'one-paze'),
                    'section' => 'cta_section',
                    'type' => 'text',
                    'priority' => 6,
                )
            ),
            
        /** Portfolio Section View All Text **/
        'portfolio_section_view_all' => array(
            'id' => 'portfolio_section_view_all',
            'args' => array(
                'label' => __('Portfolio View All Text', 'one-paze'),
                'section' => 'portfolio_section',
                'type' => 'text',
                'priority' => 6
            )
        ),
        
        /** Blog Section View All Text **/
        'blog_section_view_all' => array(
            'id' => 'blog_section_view_all',
            'args' => array(
                'label' => __('Blog View All Text', 'one-paze'),
                'section' => 'blog_section',
                'type' => 'text',
                'priority' => 6
            )
        ),
        
        /** Contact Section Controls **/
        'contact_section_email' => array(
            'id' => 'contact_section_email',
            'args' => array(
                'label' => __('Email', 'one-paze'),
                'section' => 'contact_section',
                'type' => 'text',
                'priority' => 5
            )
        ),
        
        'contact_section_address' => array(
            'id' => 'contact_section_address',
            'args' => array(
                'label' => __('Address', 'one-paze'),
                'section' => 'contact_section',
                'type' => 'text',
                'priority' => 6
            )
        ),
        
        'contact_section_phone' => array(
            'id' => 'contact_section_phone',
            'args' => array(
                'label' => __('Phone', 'one-paze'),
                'section' => 'contact_section',
                'type' => 'text',
                'priority' => 7
            )
        ),
        
        'contact_section_gmap_display' => array(
            'id' => 'contact_section_gmap_display',
            'args' => array(
                'label' => __('Display Google Map', 'one-paze'),
                'section' => 'contact_section',
                'type' => 'checkbox',
                'priority' => 8
            )
        ),
        
        /** Blog/Archive Page Controls **/
        'blog_archive_layouts' => array(
            'id' => 'blog_page_layouts',
            'args' => array(
                'label' => __('Select Layout', 'one-paze'),
                'section' => 'blog_archive_section',
                'type' => 'select',
                'choices' => $blog_layouts,
                'priority' => 1,
            )
        ),
    );
    
    /**
     * Bulk Controls
     */
        /**
         * Section Enable/Disable Controls
         */
        foreach($one_paze_section_enables as $one_paze_section_enable) :
            $one_paze_other_controls[] = array(
                'id' => $one_paze_section_enable.'_section_enable',
                'args' => array(
                    'label' => __('Enable Section', 'one-paze'),
                    'section' => $one_paze_section_enable.'_section',
                    'type' => 'checkbox',
                    'priority' => 1,
                )
            );
        endforeach;
        
        /**
         * Section Menu Title Controls
         */
        foreach($one_paze_section_menu_titles as $one_paze_section_menu_title) :
            $one_paze_other_controls[] = array(
                'id' => $one_paze_section_menu_title.'_section_menu_title',
                'args' => array(
                    'label' => __('Section Menu Text', 'one-paze'),
                    'section' => $one_paze_section_menu_title.'_section',
                    'type' => 'text',
                    'priority' => 2,
                )
            );
        endforeach;
        
        /**
         * Section Custom Title Controls
         */
        foreach($one_paze_section_titles as $one_paze_section_title) :
            $one_paze_other_controls[] = array(
                'id' => $one_paze_section_title.'_section_title',
                'args' => array(
                    'label' => __('Section Title', 'one-paze'),
                    'section' => $one_paze_section_title.'_section',
                    'type' => 'text',
                    'priority' => 3,
                )
            );
        endforeach;
        
        /**
         * Section Title Color Controls
         */
        $one_paze_other_color_controls = array();
        
        foreach($one_paze_section_title_colors as $one_paze_section_title_color) :
            $one_paze_other_color_controls[] = array(
            'id' => $one_paze_section_title_color.'_section_title_color',
            'args' => array(
                        'label' => __('Section Title Color', 'one-paze'),
                        'section' => $one_paze_section_title_color.'_section',
                        'settings' => $one_paze_section_title_color.'_section_title_color',
                        'priority' => 3,
                    )
            );
        endforeach;
        
        /** 
         * Section Content Color Controls
         */
        
        foreach($one_paze_section_content_colors as $one_paze_section_content_color) :
            $one_paze_other_color_controls[] = array(
            'id' => $one_paze_section_content_color.'_section_content_color',
            'args' => array(
                        'label' => __('Section Content Color', 'one-paze'),
                        'section' => $one_paze_section_content_color.'_section',
                        'settings' => $one_paze_section_content_color.'_section_content_color',
                        'priority' => 4,
                    )
            );
        endforeach;
        
        /**
         * Section Description Controls
         */
        foreach($one_paze_section_descrs as $one_paze_section_descr) :
            $one_paze_other_controls[] = array(
                'id' => $one_paze_section_descr.'_section_descr',
                'args' => array(
                    'label' => __('Section Description', 'one-paze'),
                    'section' => $one_paze_section_descr.'_section',
                    'type' => 'textarea',
                    'priority' => 4,
                )
            );
        endforeach;
        
        /**
         * Section Category Controls
         */
         foreach($one_paze_section_categories as $one_paze_section_category) :
            $one_paze_other_controls[] = array(
                'id' => $one_paze_section_category.'_section_category',
                'args' => array(
                    'label' => __('Select Category', 'one-paze'),
                    'section' => $one_paze_section_category.'_section',
                    'type' => 'select',
                    'choices' => $one_paze_category_lists,
                    'priority' => 5,
                )
            );
        endforeach;
        
        
        /**
         * Background Controls
         */
        $one_paze_control_bg_colors = array();
        $one_paze_control_bg_images = array();
        
        /** Background Color **/
        foreach($sections_bgs as $section_bg) :
            $one_paze_control_bg_colors[] = array(
                'id' => $section_bg.'_section_bg_color',
                'args' => array(
                    'label' => __('Background Color', 'one-paze'),
                    'section' => $section_bg.'_section',
                    'settings' => $section_bg.'_section_bg_color',
                    'priority' => 10, 
                )
            );
        
        /** Background Images **/
            $one_paze_control_bg_images[] = array(
                'id' => $section_bg.'_section_bg_image',
                'args' => array(
                    'label' => __('Background Image', 'one-paze'),
                    'section' => $section_bg.'_section',
                    'settings' => $section_bg.'_section_bg_image',
                    'priority' => 20, 
                ),
            );
        
        /** Backgroiund Repeat **/ 
            $one_paze_other_controls[] = array(
                'id' => $section_bg.'_section_bg_repeat',
                'args' => array(
                    'label' => __('Background Repeat', 'one-paze'),
                    'section' => $section_bg.'_section',
                    'type' => 'radio',
                    'choices' => $bg_repeat,
                    'priority' => 21,
                    'active_callback' => 'one_paze_display_bg_options_'.$section_bg, 
                )
            );
         
        /** Background Position **/
            $one_paze_other_controls[] = array(
                'id' => $section_bg.'_section_bg_position',
                'args' => array(
                    'label' => __('Background Position', 'one-paze'),
                    'type' => 'radio',
                    'section' => $section_bg.'_section',
                    'choices' => $bg_position,
                    'priority' => 22,
                    'active_callback' => 'one_paze_display_bg_options_'.$section_bg,
                )
            ); 
        
        /** Background Attachment **/
            $one_paze_other_controls[] = array(
                'id' => $section_bg.'_section_bg_attachment',
                'args' => array(
                    'label' => __('Background Attachment', 'one-paze'),
                    'type' => 'radio',
                    'section' => $section_bg.'_section',
                    'choices' => $bg_attachment,
                    'priority' => 23,
                    'active_callback' => 'one_paze_display_bg_options_'.$section_bg,
                )
            );
        /** Background Size **/
            $one_paze_other_controls[] = array(
                'id' => $section_bg.'_section_bg_size',
                'args' => array(
                    'label' => __('Background Size', 'one-paze'),
                    'type' => 'radio',
                    'section' => $section_bg.'_section',
                    'choices' => $bg_size,
                    'priority' => 24,
                    'active_callback' => 'one_paze_display_bg_options_'.$section_bg,
                )
            );
            
        /** Background Overlay **/
            $one_paze_other_controls[] = array(
                'id' => $section_bg.'_section_enable_overlay',
                'args' => array(
                    'label' => __('Enable Background Overlay', 'one-paze'),
                    'type' => 'checkbox',
                    'section' => $section_bg.'_section',
                    'priority' => 25,
                    'active_callback' => 'one_paze_display_bg_options_'.$section_bg,
                )
            );
        endforeach;
        
        /** Header Section **/
            $one_paze_sections['header_logo_settings'] = array(
                'id' => 'header_logo_settings',
                'args' => array(
                    'title' => __('Header Logo Settings', 'one-paze'),
                    'priority' => 1,
                    'capability' => 'edit_theme_options',
                    'panel' => 'header_settings'
                )
            );
            
            $one_paze_sections['header_favicon_settings'] = array(
                'id' => 'header_favicon_settings',
                'args' => array(
                    'title' => __('Header Fav Icon Settings', 'one-paze'),
                    'priority' => 1,
                    'capability' => 'edit_theme_options',
                    'panel' => 'header_settings'
                )
            );
            
            $one_paze_sections['header_menu_settings'] = array(
                'id' => 'header_menu_settings',
                'args' => array(
                    'title' => __('Top Menu Settings', 'one-paze'),
                    'priority' => 1,
                    'capability' => 'edit_theme_options',
                    'panel' => 'header_settings'
                )
            );
            
            /** Header Settings **/
            /** Header logo setting **/
            $wp_customize->add_setting(
                'header_logo_image',
                array(
                    'default' => '',
                    'sanitize_callback' => 'one_paze_sanitize_url'
                )
            );
            
            $one_paze_control_bg_images['header_logo_image'] = array(
                'id' => 'header_logo_image',
                'args' => array(
                    'label' => __('Header Logo', 'one-paze'),
                    'section' => 'header_logo_settings',
                    'settings' => 'header_logo_image',
                    'priority' => 1
                )
            );
            
            /** Show on the left on click **/
            $wp_customize->add_setting(
                'menu_show_on_click',
                array(
                    'default' => 'top',
                    'sanitize_callback' => 'one_paze_sanitize_text'                 
                )
            );
            
            $one_paze_other_controls['menu_show_on_click'] = array(
                'id' => 'menu_show_on_click',
                'args' => array(
                    'label' => __('Show Where On Click', 'one-paze'),
                    'section' => 'header_menu_settings',
                    'type' => 'select',
                    'choices' => $menu_shows,
                    'priority' => 2
                )
            );
             
        /** Slider Settings **/
        $wp_customize->add_setting(
            'enable_slider_overlay',
            array(
                'default' => '',
                'sanitize_callback' => 'one_paze_sanitize_checkbox'
            )
        );
        
        $wp_customize->add_setting(
            'slider_overlay_direction',
            array(
                'default' => 'top',
                'transport' => 'postMessage',
                'sanitize_callback' => 'one_paze_sanitize_overlay_direction',
            )
        );
            
        /** Slider Controls **/ 
            $one_paze_other_controls['enable_slider_overlay'] = array(
                'id' => 'enable_slider_overlay',
                'args' => array(
                    'label' => __('Enable Overlay', 'one-paze'),
                    'section' => 'slider_settings',
                    'type' => 'checkbox',
                    'priority' => 1
                )
            );
            
            $one_paze_other_controls['slider_overlay_direction'] = array(
                'id' => 'slider_overlay_direction',
                'args' => array(
                    'label' => __('Overlay Direction', 'one-paze'),
                    'section' => 'slider_settings',
                    'type' => 'select',
                    'priority' => 2,
                    'choices' => array(
                        'top' => __('Top', 'one-paze'),
                        'below' => __('Below', 'one-paze')
                    )
                )
            );
            
            $wp_customize->add_setting( 'slider_category', array( 'default' => 0, 'sanitize_callback' => 'absint'));
            $one_paze_other_controls['slider_category'] = array(
                'id' => 'slider_category',
                'args' => array(
                    'label' => __('Select Slider Category', 'one-paze'),
                    'section' => 'slider_settings',
                    'type' => 'select',
                    'priority' => 3,
                    'choices' => $one_paze_category_lists,
                )
            );
            
            $wp_customize->add_setting( 'slider_readmore_text', array( 'default' => 'Call To Action', 'sanitize_callback' => 'sanitize_text_field'));
            $one_paze_other_controls['slider_readmore_text'] = array(
                'id' => 'slider_readmore_text',
                'args' => array(
                    'label' => __('Slider Read More Text', 'one-paze'),
                    'section' => 'slider_settings',
                    'type' => 'text',
                    'priority' => 4,
                )
            );
            
        /** Google Map Contact Section **/
        //contact_section_gmap_iframe
        /** Adding Progress Section Help **/            
        $wp_customize->add_setting( 'contact_section_widget_help', array( 'default' => '', 'sanitize_callback' => 'one_paze_sanitize_text') );
        $wp_customize->add_control( new WP_Customize_Ohelp_Control(
            $wp_customize,
            'contact_section_widget_help',
            array(
                'section' => 'contact_section',
                'settings' => 'contact_section_widget_help',
                'input_attrs' => array(
                    'info' => '<p>Add the <span style="text-decoration: underline;">Text</span> widget to the <a href="'.admin_url('widgets.php').'" target="_blank" >Google Map (Home Page)</a> widget area.</p>',
                ),
                'priority' => 10,
            )
        ) );
        
        
        /**
        ** Custom Themes Info
        **/
                 
        
            $wp_customize->add_section(
                'onepaze_pro_features',
                array(
                  'title'           =>  __('Important Links', 'one-paze'),
                  'priority'        =>  '10'
                     )
                );
        
            $wp_customize->add_setting('theme_info_theme',array(
                'default' => '',
                'sanitize_callback' => 'sanitize_text_field',
                ));
        
            $wp_customize->add_control( new Theme_Info_Custom_Control( $wp_customize ,'theme_info_theme',array(
                'label' => __( 'OnePaze Pro Features' , 'one-paze' ),
                'section' => 'onepaze_pro_features',
               )));