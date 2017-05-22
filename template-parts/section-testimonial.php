<?php
$test_section_title = esc_attr(get_theme_mod('testimonial_section_title'));
$test_category = esc_attr(get_theme_mod('testimonial_section_category'));
$test_query = new WP_Query(array('post_type' => 'post', 'cat' => $test_category, 'posts_per_page' => 6));
?>
<div class="container">
    <div class="testinomial clearfix">
        <h2><?php echo $test_section_title; ?></h2>
        <hr class="home-title wow fadeInUp">
        <?php if ($test_query->have_posts() && $test_category) : ?>
            <!-- <div class="testimonial-slider clearfix"> -->
            <div class="clearfix">
                <?php while ($test_query->have_posts()) : $test_query->the_post(); ?>
                    <div class="testimonial-post-wrap wow fadeInUp" data-wow-duration="2s">
                        <div class="client-testimonial">
                            <?php echo get_the_content(); ?>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</div>