<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package One Paze
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?> >

        <?php 
            $show_menu_on = esc_attr(get_theme_mod('menu_show_on_click', 'top')); 
            $tgl_id = '';
            $tgl_id = ($show_menu_on == 'left') ? 'left' : 'right';
            $smenu_class = 'menu-from-'.$tgl_id;
            $disp_parallax_menu = esc_attr(get_theme_mod('disp_parallax_menu', 0));
        ?>
        <div id="togglemenu" class="sidetogglemenu <?php echo $smenu_class; ?>">
            <!-- Your content -->
            <nav id="site-navigation" class="main-navigation" role="navigation">                
                <?php if(is_page_template('tpl-home.php')) : ?>
                    <?php if($disp_parallax_menu) : ?>
                        <ul class="nav plx-nav">
                            <span class="siteurl" url="<?php echo esc_url(home_url('/')); ?>" style="display: none;"></span>
                            <li><a href="<?php echo esc_url(home_url()); ?>/#plx-slider-section" ><?php _e('Home', 'one-paze'); ?></a></li>
                            <?php
                            $enabled_sections = one_paze_get_parallax_sections('menu');
    
                            foreach ($enabled_sections as $enabled_section) :
                                ?>
                                <?php if($enabled_section['menu_text'] != '') : ?>
                                <li><a href="<?php echo esc_url(home_url()); ?>/#plx_<?php echo $enabled_section['section'] ?>_section" ><?php echo $enabled_section['menu_text']; ?></a></li>
                                <?php endif; ?>
                                <?php
                            endforeach;
                            ?>
                        </ul>
                    <?php else : ?>
                        <?php /* <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'one-paze'); ?></button>*/ ?>
                        <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
                    <?php endif; ?>
                <?php else : ?>
                    <?php /* <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'one-paze'); ?></button>*/ ?>
                    <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
                <?php endif; ?>
            </nav><!-- #site-navigation -->
            <div class="clearfix"></div>
            <?php if (is_active_sidebar('header_text') && $show_menu_on != 'top') : ?>
                <div id="header_text_container">
                    <?php dynamic_sidebar('header_text'); ?>
                </div>
            <?php endif; ?>
        </div> 


        
        <div id="page" class="hfeed site">
            <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'one-paze'); ?></a>
            <header id="masthead" class="site-header menu-on-<?php echo $show_menu_on; ?>" role="banner">

                <div class="container clearfix">
                    <div class="site-branding pull-left">
                        <?php if (get_theme_mod('header_logo_image') != '') : ?>
                            <div class="site_logo">
                                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img src="<?php echo esc_url(get_theme_mod('header_logo_image')); ?>" alt="<?php bloginfo('name'); ?>" /></a>
                            </div>
                        <?php else : ?>
                            <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                            <h2 class="site-description"><?php bloginfo('description'); ?></h2>
                        <?php endif; ?>
                    </div><!-- .site-branding -->
                    <?php if ($show_menu_on == 'top' || $show_menu_on == '') : ?>
                        <div id="toggle" class="toggle-on-<?php echo $show_menu_on ?>">
                            <div class="one"></div>
                            <div class="two"></div>
                            <div class="three"></div>
                        </div>
                        <div class="clearfix"></div>
                        <div id="menu" class="inner-menu-on-<?php echo $show_menu_on ?>">
                            <nav id="site-navigation" class="main-navigation" role="navigation">
                                <?php if($disp_parallax_menu) : ?>
                                    <ul class="nav plx-nav">
                                        <span class="siteurl" url="<?php echo esc_url(home_url('/')); ?>" style="display: none;"></span>
                                        <li><a href="<?php echo esc_url(home_url()); ?>/#plx-slider-section" ><?php _e('Home', 'one-paze'); ?></a></li>
                                        <?php
                                        $enabled_sections = one_paze_get_parallax_sections('menu');

                                        foreach ($enabled_sections as $enabled_section) :
                                            ?>
                                            <?php if($enabled_section['menu_text'] != '') : ?>
                                            <li><a href="<?php echo esc_url(home_url()); ?>/#plx_<?php echo $enabled_section['section'] ?>_section" ><?php echo $enabled_section['menu_text']; ?></a></li>
                                            <?php endif; ?>
                                            <?php
                                        endforeach;
                                        ?>
                                    </ul>
                                <?php else : ?>
                                    <?php /* <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'one-paze'); ?></button>*/ ?>
                                    <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
                                <?php endif; ?>
                            </nav><!-- #site-navigation -->
                        </div>
                    <?php else : ?>
                        <button onClick="menu1.toggle();" class="sideviewtoggle" id="toggle1">
                            <div class="one"></div>
                            <div class="two"></div>
                            <div class="three"></div>
                        </button>

                    <?php endif; ?>
                </div>
            </header><!-- #masthead -->
            <?php if (is_home() || is_front_page()) : ?>
                <?php if (is_page_template('tpl-home.php')) : ?>
                <?php else : ?> 
                    <div class="header-banner">
                        <div class="container" >
                            <?php if (is_single() || is_page()) : ?>
                                <h1 class="entry-title"><?php the_title(); ?></h1>
                            <?php elseif (is_archive()) : ?>
                                <h1 class="entry-title"><?php echo single_cat_title(); ?></h1>
                            <?php elseif (is_home()) : ?>
                                <h1 class="entry-title"><?php _e('Blogs', 'one-paze'); ?></h1>
                            <?php elseif (is_search()) : ?>
                                    <h1 class="page-title"><?php printf(esc_html__('Search Results for: %s', 'one-paze'), '<span>' . get_search_query() . '</span>'); ?></h1>
                            <?php elseif (is_404()) : ?>
                                <h1 class="page-title">
                                    <?php esc_html_e('404 Error!!', 'one-paze'); ?>
                                </h1>
                            <?php endif; ?>
                            <?php do_action('one_paze_breadcrumb'); ?>
                        </div>
                    </div>
                <?php endif; ?>
            <?php else : ?>
                <div class="header-banner">
                    <div class="container" >
                        <?php if (is_single() || is_page()) : ?>
                            <h1 class="entry-title"><?php the_title(); ?></h1>
                        <?php elseif (is_archive()) : ?>
                            <h1 class="entry-title"><?php echo single_cat_title(); ?></h1>
                        <?php elseif (is_home()) : ?>
                            <?php
                            $blog_page_id = get_option('page_for_posts');
                            $blog_page = get_page($blog_page_id);
                            ?>
                            <h1 class="entry-title"><?php echo $blog_page->post_title; ?></h1>
                        <?php elseif (is_search()) : ?>
                            <h1 class="page-title"><?php printf(esc_html__('Search Results for: %s', 'one-paze'), '<span>' . get_search_query() . '</span>'); ?></h1>
                        <?php elseif (is_404()) : ?>
                            <h1 class="page-title">
                                <?php esc_html_e('404 Error!!', 'one-paze'); ?>
                            </h1>
                        <?php endif; ?>
                        <?php do_action('one_paze_breadcrumb'); ?>
                    </div>
                </div>
            <?php endif; ?>
            <div id="content" class="site-content">
                <?php if (is_front_page()) : ?>
                    <?php if (is_page_template('tpl-home.php')) : ?>
                        <?php do_action('one_paze_slider'); ?>
                    <?php endif; ?>
                <?php endif; ?>

                <!-- assigning inner container for appropriate div structure for inner and front page separately -->
                <?php if (is_front_page()) : ?>
                    <?php if (is_page_template('tpl-home.php')) : ?>
                    <?php else : ?>
                        <div class="container"> <!-- Container -->
                            <div class="clearfix inner"> <!-- Clearfix -->
                    <?php endif; ?>
                <?php else : ?>
                    <div class="container"> <!-- Container -->
                        <div class="clearfix inner"> <!-- Clearfix -->
                        <?php endif; ?>