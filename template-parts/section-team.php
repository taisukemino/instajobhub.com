<?php
$team_section_title = esc_attr(get_theme_mod('team_section_title'));
$team_category = esc_attr(get_theme_mod('team_section_category'));
$team_query = new WP_Query(array('post_type' => 'post', 'cat' => $team_category, 'posts_per_page' => 4));
?>
<div class="container">
    <div class="team text-center">
        <h2><?php echo $team_section_title; ?></h2>
        <hr class="home-title wow fadeInUp">
        <p>We are three developers from Tokyo, brought together by chance, a healthy disrespect for hegemonic structures, and a desire to provide to anyone the agency to pursue the freedom to work and live on their own terms. </p>
        <?php if ($team_query->have_posts() && $team_category) : ?>
            <?php $count = 1; ?>
            <div class="teams-container clearfix">
                <?php while ($team_query->have_posts()) : $team_query->the_post(); ?>
                    <div class="team-member wow fadeInRight">
                        <figure>
                            <?php
                            $img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'one-paze-team-thumb');
                            $img_src = $img[0];
                            ?>
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php echo $img_src; ?>" alt="<?php the_title_attribute(); ?>" title="<?php the_title_attribute(); ?>" />
                            <?php else : ?>
                                <img src="<?php echo $img_src; ?>" alt="<?php the_title_attribute(); ?>" title="<?php the_title_attribute(); ?>" />
                            <?php endif; ?>
                        </figure>
                        <h3><?php the_title(); ?></h3>
                        <div class="member-says">
                            <?php echo wp_trim_words(get_the_content(), 30); ?>
                        </div>
                    </div>
                    <?php $count++; ?>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</div>