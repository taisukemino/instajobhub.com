<?php
$blog_section_title = esc_attr(get_theme_mod('blog_section_title'));
$blog_category = esc_attr(get_theme_mod('blog_section_category'));
$blog_query = new WP_Query(array('post_type' => 'post', 'cat' => $blog_category, 'posts_per_page' => 3));
?>
<div class="container">

    <?php if ($blog_query->have_posts() && $blog_category) : ?>
        <?php $blog_view_all = esc_attr(get_theme_mod('blog_section_view_all', 'VIEW ALL')); ?>
        <h2><?php echo $blog_section_title; ?></h2>
        <a class="blog-view-all" href="<?php echo get_category_link($blog_category); ?>"><?php echo $blog_view_all; ?></a>
        <div class="blog-posts clearfix">
            <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                <div class="blog-post-wrap pull-left wow slideInUp" data-wow-duration="2s" data-wow-delay="1s">
                    <figure>
                        <?php
                        $img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'one-paze-blog-thumb');
                        $img_src = $img[0];
                        ?>
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php echo $img_src; ?>" title="<?php the_title_attribute(); ?>" alt="<?php the_title_attribute(); ?>" class="img-responsive" />
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/no-blog-thumbnail.png" title="<?php the_title_attribute(); ?>" alt="<?php the_title_attribute(); ?>" class="img-responsive" />
                        <?php endif; ?>
                        <div class="hover">
                            <a href="<?php the_permalink(); ?>">
                                <span class=outer>
                                    <span class="inner">
                                        <?php the_title(); ?>
                                    </span>
                                </span>
                            </a>
                        </div>

                    </figure>
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <span class="published-date">
                        <?php echo get_the_date('F j, Y'); ?>
                    </span>
                    <div class="blog-excerpt">
                        <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="blog_read"><?php _e('Read More', 'one-paze'); ?></a>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
</div>