<?php
    function one_paze_dynamic_styles() {
        $slider_overlay_direction = esc_attr(get_theme_mod('slider_overlay_direction'));
        $rotate = ($slider_overlay_direction == 'top') ? '0deg' : '180deg';

         $enabled_sections = one_paze_get_parallax_sections();
        ?>
        <style type="text/css">
            /** For Slider **/
            .slider-overlay1{
                -webkit-transform: rotate(<?php echo $rotate; ?>);
                -moz-transform: rotate(<?php echo $rotate; ?>);
            }
            /** For Section Background **/
            <?php foreach ($enabled_sections as $enabled_section) : ?>
                <?php
                $section = $enabled_section['section'];
                $section_bg_color = esc_attr(get_theme_mod($section . '_section_bg_color'));
                $section_bg_image = esc_url(get_theme_mod($section . '_section_bg_image'));
                $section_bg_repeat = esc_attr(get_theme_mod($section . '_section_bg_repeat', 'no-repeat'));
                $section_bg_position = esc_attr(get_theme_mod($section . '_section_bg_position', 'left'));
                $section_bg_attachment = esc_attr(get_theme_mod($section . '_section_bg_attachment', 'scroll'));
                $section_bg_size = esc_attr(get_theme_mod($section . '_section_bg_size', 'auto'));
                ?>
                    #plx_<?php echo $section . '_section'; ?>{
                        background: <?php echo $section_bg_color.' url("'.$section_bg_image.'")'.' '.$section_bg_repeat.' '.$section_bg_position.' '.$section_bg_attachment; ?>;
                        background-size: <?php echo $section_bg_size; ?>;
                    }
            <?php endforeach; ?>
            
            /** For Section Title **/
            #plx_about_section .about h2{
                color: <?php echo esc_attr(get_theme_mod('about_section_title_color')); ?>
            }
            
            #plx_portfolio_section h2{
                color: <?php echo esc_attr(get_theme_mod('portfolio_section_title_color')); ?>
            }
            
            #plx_services_section h2{
                color: <?php echo esc_attr(get_theme_mod('services_section_title_color')); ?>
            }
            
            #plx_blog_section h2{
                color: <?php echo esc_attr(get_theme_mod('blog_section_title_color')); ?>
            }
            
            .testinomial h2{
                color: <?php echo esc_attr(get_theme_mod('testimonial_section_title_color')); ?>
            }
            
            .team h2{
                color: <?php echo esc_attr(get_theme_mod('team_section_title_color')); ?>
            }
            
            /** For Section Content **/
            #plx_about_section .about-contents *{
                color: <?php echo esc_attr(get_theme_mod('about_section_content_color')); ?>
            }
            
            #plx_services_section .service-descr, #plx_services_section .service-post-wrap h3, #plx_services_section .services-excerpt{
                color: <?php echo esc_attr(get_theme_mod('services_section_content_color')); ?>
            }
            
            #plx_cta_section .mid-content{
                color: <?php echo esc_attr(get_theme_mod('cta_section_content_color')); ?>
            }
            
            .client-testimonial{
                color: <?php echo esc_attr(get_theme_mod('testimonial_section_content_color')); ?>
            }
            
            #plx_team_section .member-says, #plx_team_section .team-member h3{
                color: <?php echo esc_attr(get_theme_mod('team_section_content_color')); ?>
            }
        </style>
        <?php 
            $show_menu_on = esc_attr(get_theme_mod('menu_show_on_click', 'top'));
            $tgl_id = '';
            $tgl_id = ($show_menu_on == 'left') ? 'left' : 'right';
        ?>
        <script>
            //$(window).on('load', function () {
                jQuery(function () { // on DOM load
                    menu1 = new sidetogglemenu({// initialize first menu example
                        id: 'togglemenu',
                        downarrowsrc: '<?php echo get_template_directory_uri().'/images/toggledown.png'; ?>',
                        position: '<?php echo $tgl_id; ?>'
                    })
                })
            //});
        </script>
        <?php
    }
    
    add_action('wp_head', 'one_paze_dynamic_styles');