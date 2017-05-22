<?php 
	/**
	* Single Portfolio Page
	*/

    $port_category = esc_attr(get_theme_mod('portfolio_section_category'));
?>
<!-- ★★★single-portfolio.php★★★ -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="clearfix">
        <div class="portfolio-post-content">
            <header class="entry-header">
                <h2>Translation Info</h2>
                <div class='portfolio-nav clearfix'>
                    <?php previous_post_link('%link', '<i class="fa fa-angle-left"></i>', TRUE); ?>
                    <a href="<?php echo get_category_link($port_category); ?>"><i class='fa fa-th-large'></i></a>
                    <?php next_post_link('%link', '<i class="fa fa-angle-right"></i>', TRUE); ?>
                </div>
<!--                 <?php if (has_post_thumbnail()) : ?>
                    <?php
                    $img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                    $img_src = $img[0];
                    ?>
                    <figure class="entry-thumbnail">
                        <img src="<?php echo $img_src; ?>" title="<?php the_title_attribute(); ?>" alt="<?php the_title_attribute(); ?>" />
                    </figure>
                <?php endif; ?>
 -->            </header><!-- .entry-header -->
            <div class="entry-content">
                <?php the_content(); ?>
                <?php
                wp_link_pages(array(
                   'before' => '<div class="page-links">' . esc_html__('Pages:', 'one-paze'),
                   'after' => '</div>',
               ));
                ?>
            </div><!-- .entry-content -->
        </div> <!-- .blog-post-content -->
    </div> <!-- Clearfix -->
</article><!-- #post-## -->