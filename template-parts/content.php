<?php
/**
 * Template part for displaying posts.
 *
 * @package One Paze
 */
$blog_layout = esc_attr(get_theme_mod('blog_page_layouts'));
$img_size = '';
switch ($blog_layout) {
    case 'blog_image_large' :
    case 'blog_full_content' :
        $img_size = 'one-paze-blog-large-image';
        break;
    case 'blog_image_medium' :
    case 'blog_image_alt_medium' :
        $img_size = 'one-paze-blog-medium-image';
        break;
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="clearfix">
        <div class="blog-post-content">
            <a href="<?php the_permalink(); ?>">
                <h2><?php the_title(); ?></h2>
            </a>
            <div class="blog_desc clearfix">
                <header class="entry-header">
                    <?php if (has_post_thumbnail()) : ?>
                        <figure class="archive-post-thumbnail">
                            <?php
                            $img = wp_get_attachment_image_src(get_post_thumbnail_id(), $img_size);
                            $img_src = $img[0];
                            ?>
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo $img_src; ?>" alt="<?php the_title_attribute(); ?>" title="<?php the_title_attribute(); ?>" />
                            </a>
                        </figure>
                    <?php endif; ?>
                </header><!-- .entry-header -->

                <div class="entry-content">
                    <?php if ($blog_layout == 'blog_full_content') : ?>
                        <?php the_content(); ?>
                    <?php else : ?>
                        <?php the_excerpt(); ?>
                    <?php endif; ?>
                </div><!-- .entry-content -->
            </div>
            <div class="clearfix"></div>
            <div class="post-meta-infos">
                <span class="entry-footer-wrapper clearfix">
                    <?php
                        $aulink = get_author_posts_url(get_the_author_meta('ID'), get_the_author_meta('nickname'));
                        $year = get_the_date('Y');
                        $month = get_the_date('n');
                    ?>
                    <span class="author user-wrapper"><i class="fa fa-user"></i><a href="<?php echo $aulink; ?>"><?php echo get_the_author_meta('nickname'); ?></a></span>
                    <span class="posted-date user-wrapper"><i class="fa fa-calendar"></i><a href="<?php echo get_month_link($year, $month); ?>"><?php the_time( get_option( 'date_format' )); ?></a></span>
                    <?php if (has_category()) : ?>
                        <span class="category user-wrapper"><i class="fa fa-folder"></i><?php the_category(', '); ?></span>
                    <?php endif; ?>
                    <?php if (comments_open()) : ?>
                        <span class="comments user-wrapper"><i class="fa fa-comment"></i><?php comments_popup_link(); ?></span>
                    <?php endif; ?>
                    <?php if ($blog_layout != 'blog_full_content') : ?>
                        <span class="readmore">
                            <a href="<?php the_permalink(); ?>">
                                <?php _e('Read More...', 'one-paze'); ?>
                            </a>
                        </span>
                    <?php endif; ?>
                </span>
            </div>
        </div>
    </div>
</article><!-- #post-## -->
