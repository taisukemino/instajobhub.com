<?php
    /**
     * About Parallax Section
     */
     $about_title = esc_attr(get_theme_mod('about_section_title'));
     $about_pg_id = esc_attr(get_theme_mod('about_section_page'));
     //$about_page = get_page($about_pg_id);
     $abt_query = new WP_Query( array( 'page_id' => $about_pg_id ) );
?>
<div class="about clearfix">
    <?php if($about_pg_id || $abt_query->have_posts()) : ?>
        <h2 class="wow slideInLeft" data-wow-duration="2s"><?php echo $about_title; ?></h2>
        <?php while($abt_query->have_posts()) : $abt_query->the_post(); ?>
        <div class="about-contents wow slideInRight" data-wow-duration="2s">
            <?php the_content(); ?>
        </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>