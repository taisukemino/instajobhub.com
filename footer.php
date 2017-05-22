<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package One Paze
 */
?>
<?php if (is_front_page()) : ?>
    <?php if (is_page_template('tpl-home.php')) : ?>
    <?php else : ?>
        </div> <!-- Container -->
        </div> <!-- Clearfix -->
    <?php endif; ?>
<?php else : ?>
    </div> <!-- Container -->
    </div> <!-- Clearfix -->
<?php endif; ?>
</div><!-- #content -->
<footer id="colophon" class="site-footer" role="contentinfo">
    <?php if(has_nav_menu('footer-menu') || is_active_sidebar('footer_social_links')) : ?>
        <div class="container">
            <div class="footer-top">
                <div class="footer-tops clearfix">
                    <?php if(has_nav_menu('footer-menu')) : ?>
                        <div class="footer-menu-container">
                        <?php wp_nav_menu(array('theme_location'  => 'footer-menu')); ?>
                        </div>
                    <?php endif; ?>
                    <?php if (is_active_sidebar('footer_social_links')) : ?>
                        <div class="footer-social-links-container">
                            <?php dynamic_sidebar('footer_social_links'); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="footer-bottom">
        <div class="container clearfix">            
            <div class="clearfix"></div>
            <div class="site-info">
                <?php
                    /* © 2016 WebsiteName | WordPress Theme : <a href="Link to Theme Download">ThemeName</a> by <a href="Link to AccessPressThemes.com">AccessPressThemes</a> */
                ?>
                <span>&copy; <?php the_time( 'Y' )?> <?php bloginfo('name'); ?></span>
            </div><!-- .site-info -->
        </div>

    </div>
</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
