<?php
    add_action( 'customize_register', 'one_paze_additional_customize_register' );
    function one_paze_additional_customize_register( $wp_customize ) {
        require get_template_directory() . '/inc/admin/one-paze-options.php';
        require get_template_directory() . '/inc/admin/one-paze-sanitize.php';
        
        /**
         * Panels
         */
        //print_r($one_paze_panels);
        foreach($one_paze_panels as $one_paze_panel) :
            $wp_customize->add_panel($one_paze_panel['id'],$one_paze_panel['args']);             
        endforeach;
        
        /**
         * Sections
         */
        foreach($one_paze_sections as $one_paze_section) :
            $wp_customize->add_section($one_paze_section['id'], $one_paze_section['args']);
        endforeach;
        
        /**
         * Settings
         */
        
        /**
         * Controls
         */
        /** One Page Other Controls **/
        foreach($one_paze_other_controls as $one_paze_other_control) :
            $wp_customize->add_control($one_paze_other_control['id'], $one_paze_other_control['args']);
        endforeach;
        
        foreach($one_paze_other_color_controls as $one_paze_other_color_control) :
            $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,$one_paze_other_color_control['id'],$one_paze_other_color_control['args']));
        endforeach;
        
        /** Background Color Controls **/
        foreach($one_paze_control_bg_colors as $one_paze_control_bg_color) :
            $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,$one_paze_control_bg_color['id'],$one_paze_control_bg_color['args']));
        endforeach;
        
        /** Backgroiund Image Controls **/
        foreach($one_paze_control_bg_images as $one_paze_control_bg_image) :
            $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,$one_paze_control_bg_image['id'],$one_paze_control_bg_image['args']));
        endforeach;
            
        /**
         * Active Callbacks
         */
         //print_r($sections_bgs);
         function one_paze_display_bg_options_about( $control ) {
            if($control->manager->get_setting('about_section_bg_image')->value() != ''){
                return true;
            }else{
                return false;
            }
        }
        function one_paze_display_bg_options_portfolio( $control ) {
            if($control->manager->get_setting('portfolio_section_bg_image')->value() != ''){
                return true;
            }else{
                return false;
            }
        } 
        function one_paze_display_bg_options_services( $control ) {
            if($control->manager->get_setting('services_section_bg_image')->value() != ''){
                return true;
            }else{
                return false;
            }
        } 
        function one_paze_display_bg_options_blog( $control ) {
            if($control->manager->get_setting('blog_section_bg_image')->value() != ''){
                return true;
            }else{
                return false;
            }
        }
        function one_paze_display_bg_options_cta( $control ) {
            if($control->manager->get_setting('cta_section_bg_image')->value() != ''){
                return true;
            }else{
                return false;
            }
        }
        function one_paze_display_bg_options_testimonial( $control ) {
            if($control->manager->get_setting('testimonial_section_bg_image')->value() != ''){
                return true;
            }else{
                return false;
            }
        }
        function one_paze_display_bg_options_team( $control ) {
            if($control->manager->get_setting('team_section_bg_image')->value() != ''){
                return true;
            }else{
                return false;
            }
        }
        function one_paze_display_bg_options_contact( $control ) {
            if($control->manager->get_setting('contact_section_bg_image')->value() != ''){
                return true;
            }else{
                return false;
            }
        }
    }
    
    /**
     * Enqueue script for custom customize control.
     */
    function one_paze_custom_customize_enqueue() {
        wp_enqueue_style('one-paze-customizer-custom-css', get_template_directory_uri() . '/inc/admin/css/customizer-custom.css');        
        wp_enqueue_script( 'one-paze-customizer-custom-js', get_template_directory_uri() . '/inc/admin/js/customizer-custom.js', array( 'jquery', 'customize-controls'), false );
        wp_localize_script( 'one-paze-customizer-custom-js' , 'one_paze_template_path'  , array('template_path'=> get_template_directory_uri()));
    }
    add_action( 'customize_controls_enqueue_scripts', 'one_paze_custom_customize_enqueue' );