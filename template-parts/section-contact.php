<?php
/**
 * Contact Section
 */
$contact_section_email = esc_attr(get_theme_mod('contact_section_email'));
$contact_section_address = esc_attr(get_theme_mod('contact_section_address'));
$contact_section_phone = esc_attr(get_theme_mod('contact_section_phone'));
$contact_section_gmap_lat = esc_attr(get_theme_mod('contact_section_gmap_lat'));
$contact_section_gmap_long = esc_attr(get_theme_mod('contact_section_gmap_long'));
$contact_section_gmap_display = esc_attr(get_theme_mod('contact_section_gmap_display'));
?>
<div class="container">
    <div class="clearfix">

        <div class="contact-info clearfix">
            <?php if ($contact_section_email != '') : ?>
                <div class="wow fadeInLeft" data-wow-duration="2s">
                    <a href="mailto: <?php echo $contact_section_email; ?>">
                        <i class="fa fa-envelope"></i>
                        <div class="clearfix"></div>
                        <span><?php echo $contact_section_email; ?></span>
                    </a>
                </div>
            <?php endif; ?>

            <?php if ($contact_section_address != '') : ?>
                <div class="wow fadeInDown" data-wow-duration="2s">
                        <i class="fa fa-map-marker"></i>
                        <div class="clearfix"></div>
                        <span><?php echo $contact_section_address; ?></span>
                </div>
            <?php endif; ?>

            <?php if ($contact_section_phone != '') : ?>
                <div class="wow fadeInRight" data-wow-duration="2s">
                    <a href="tel: <?php echo $contact_section_phone; ?>">
                        <i class="fa fa-mobile"></i>
                        <div class="clearfix"></div>
                        <span><?php echo $contact_section_phone; ?></span>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php if ($contact_section_gmap_display == 1) : ?>
    <?php if(is_active_sidebar('contact_section_map')) : ?>
    <div class="res-map-overlay">
        <?php dynamic_sidebar('contact_section_map'); ?>
    </div>
    <?php endif; ?>
<?php endif; ?>