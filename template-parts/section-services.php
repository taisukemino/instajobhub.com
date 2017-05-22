<?php
$service_title = esc_attr(get_theme_mod('services_section_title'));
$service_descr = wp_kses_post(get_theme_mod('services_section_descr'));
$service_page1 = esc_attr(get_theme_mod('services_section_page1'));
$service_page2 = esc_attr(get_theme_mod('services_section_page2'));
$service_page3 = esc_attr(get_theme_mod('services_section_page3'));
$service_page4 = esc_attr(get_theme_mod('services_section_page4'));
$service_pg_query = new WP_Query(array('post_type' => 'page', 'post__in' => array($service_page1, $service_page2, $service_page3, $service_page4)));
?>
<h2 class="text-center"><?php echo $service_title; ?></h2>
<hr class="home-title wow fadeInUp">
<div class="container">
    <div class="service-descr wow fadeInDown" data-wow-delay="1s">
        <?php echo $service_descr; ?>
    </div>
    <?php if ($service_pg_query->have_posts()) : ?>
        <?php $count = 1; ?>
        <div class="services-posts clearfix">
            <?php while ($service_pg_query->have_posts()) : $service_pg_query->the_post(); ?>
                <div class="service-post-wrap pull-left wow fadeInLeft" >
                    <figure>
                        <?php
                        $img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail');
                        $img_src = $img[0];
                        ?>
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php echo $img_src; ?>" alt="<?php the_title_attribute(); ?>" title="<?php the_title_attribute(); ?>" />
                        <?php endif; ?>
                    </figure>
                    <h3><?php the_title(); ?></h3>
                    <div class="services-excerpt">
                        <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                    </div>
                </div>
                <?php $count++; ?>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
</div>