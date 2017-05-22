<?php
/**
 * Portfolio Archive Page
 */
$port_category = esc_attr(get_theme_mod('portfolio_section_category'));
$port_args = array(
    'posts_per_page' => -1,
    'post_status' => 'publish',
    'cat' => $port_category,
);

$port_query = new WP_Query($port_args);

$fil_categories = get_categories(array('type' => 'post', 'parent' => $port_category));
?>
<?php if ($port_query->have_posts()) : ?>
    <div class="portfolio-outer-container clearfix">
        <div class="portfolio-post-filter">
            <div class="filter" data-filter="all"><?php _e('Show All', 'one-paze'); ?></div>
            <?php foreach ($fil_categories as $fil_cat) : ?>
                <div class="filter" data-filter=".category-<?php echo $fil_cat->term_id; ?>"><?php echo $fil_cat->name; ?></div>
            <?php endforeach; ?>
        </div>
        <div class="portfolio-post-container clearfix">            
            <?php while ($port_query->have_posts()) : $port_query->the_post(); ?>
                <?php
                $img_arr = wp_get_attachment_image_src(get_post_thumbnail_id(), 'one-paze-port-thumb');
                $img_src = $img_arr[0];

                $cats = get_the_category();
                $cat_list = '';
                foreach ($cats as $cat) :
                    if ($cat->term_id != $port_category) {
                        $cat_list .= 'category-' . $cat->term_id . ' ';
                    }
                endforeach;
                ?>
                <div class="portfolio-post-wrap pull-left mix <?php echo $cat_list; ?>" data-myorder="2">
                    <div class="overflow">
                        <a href="<?php the_permalink(); ?>">
                            <figure>
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php echo $img_src; ?>" alt="<?php the_title_attribute(); ?>" title="<?php the_title_attribute(); ?>">
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/no-port.png" alt="<?php the_title_attribute(); ?>" title="<?php the_title_attribute(); ?>">
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
            <?php endwhile; ?>
        </div> <!-- .portfolio-post-container -->
    </div> <!-- .portfolio-outer-container -->
<?php endif; ?>