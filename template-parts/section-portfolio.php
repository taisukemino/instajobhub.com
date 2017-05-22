<?php
/**
 * Portfolio Section
 */
$portfolio_section_title = esc_attr(get_theme_mod('portfolio_section_title'));
$portfolio_category = esc_attr(get_theme_mod('portfolio_section_category'));
$port_args = array('post_type' => 'post', 'cat' => $portfolio_category, 'order' => 'DESC', 'posts_per_page' => 6);
$port_query = new WP_Query($port_args);
?>
<!-- ★★★section-portfolio.php★★★ -->
<div class="container">

    <?php if ($port_query->have_posts() && $portfolio_category) : ?>
        <?php $port_view_all = esc_attr(get_theme_mod('portfolio_section_view_all', 'VIEW ALL')); ?> 
        <h2><?php echo $portfolio_section_title; ?></h2>
        <hr class="home-title wow fadeInUp">
        <div class="portfolio-posts clearfix">
            <?php $count = 1; ?>
            <?php while ($port_query->have_posts()) : $port_query->the_post(); ?>
                <div class="portfolio-post-wrap pull-left wow fadeIn" data-wow-duration="4s">
                    <div class="overflow">
                        <?php
                        $img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'one-paze-port-thumb');
                        $img_src = $img[0];
                        ?>
                        <a href="<?php the_permalink(); ?>">
                            <figure>
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php echo $img_src; ?>" title="<?php the_title_attribute(); ?>" alt="<?php the_title_attribute(); ?>" />
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/no-portfolio-thumbnail.png" title="<?php the_title_attribute(); ?>" alt="<?php the_title_attribute(); ?>" />
                                <?php endif; ?>
                            </figure>
                            <div class="hover">
                                <h3><span class=outer><span class="inner"><?php the_title(); ?></span>
                                </span></h3>
                            </div>
                        </a>
                    </div>
                    <div class="description">
                        <p><strong>Price</strong>: <?php echo esc_html( $post->price ); ?></p>
                        <p><strong>Language</strong>: <?php echo esc_html( $post->language ); ?></p>
                        <p><strong>Length</strong>: <?php echo esc_html( $post->length ); ?></p>
                    </div>                    
                </div>
                <?php if (($count % 3) == 0) : ?>
                    <div class="clearfix"></div>
                <?php endif; ?>
                <?php $count++; ?>
            <?php endwhile; ?>
        </div>
        <a class="port-view-all" href="<?php echo get_category_link($portfolio_category); ?>"><?php echo $port_view_all; ?></a>
    </div>
<?php endif; ?>