<?php
/**
 * Template part for displaying Portfolio Posts.
 *
 * @package One Paze
 */

?>
<!-- ★★★content-portfolio.php★★★ -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="clearfix portfolio-articles">
        <div class="blog-post-content">
        	<header class="entry-header">
                <a href="<?php the_permalink(); ?>">
                    <h2><?php the_title(); ?></h2>
                </a>
                <?php if(has_post_thumbnail()) : ?>
                    <figure class="archive-post-thumbnail">
                        <?php
                            $img = wp_get_attachment_image_src(get_post_thumbnail_id(),'one-paze-blog-post-thumb');
                            $img_src = $img[0];
                        ?>
                        <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo $img_src; ?>" alt="<?php the_title_attribute(); ?>" title="<?php the_title_attribute(); ?>" />
                        </a>
                    </figure>
                <?php endif; ?>
        	</header><!-- .entry-header -->
        
        	<div class="entry-content">
        		<?php the_excerpt(); ?>
        	</div><!-- .entry-content -->
            <a href="<?php the_permalink(); ?>"><?php _e('Read More', 'one-paze'); ?></a>
        </div>
    </div>
</article><!-- #post-## -->
