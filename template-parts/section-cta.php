<?php
$cta_title = esc_attr(get_theme_mod('cta_section_title'));
$cta_descr = wp_kses_post(get_theme_mod('cta_section_descr'));
$cta_buton_text = esc_attr(get_theme_mod('cta_buton_text'));
$cta_buton_link = esc_url(get_theme_mod('cta_buton_link'));
?>
<h2 class="wow fadeInUp" data-wow-duration="2s"><?php echo $cta_title; ?>WHAT WE DO</h2>
<hr class="home-title wow fadeInUp">
<div class="cta-descr wow fadeInUp" data-wow-duration="2s">
    <?php echo $cta_descr; ?>
</div>
<a href="<?php echo esc_url($cta_buton_link); ?>" class="cta_read">
    <?php echo $cta_buton_text; ?>
    <!--
    <div class="card">
        <div class="face front">
    <?php echo $cta_buton_text; ?>
        </div>
        <div class="face back">
    <?php echo $cta_buton_text; ?>
        </div>
    </div>
    -->
</a>

</a>