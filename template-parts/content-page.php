<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package One Paze
 */
    $img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'one-paze-innerpage-thumb');
    $img_src = $img[0];

    $services_disp_feat_img = esc_attr(get_theme_mod('services_disp_feat_img'));
    $service_pages = array(
		esc_attr(get_theme_mod('services_section_page1')),
		esc_attr(get_theme_mod('services_section_page2')),
		esc_attr(get_theme_mod('services_section_page3')),
		esc_attr(get_theme_mod('services_section_page4')),
	);
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php if($services_disp_feat_img == 1 && in_array(get_the_id(), $service_pages)) : ?>
    <?php if(has_post_thumbnail()) : ?>
        <figure class="page-thumbnail">
            <img src="<?php echo $img_src; ?>" alt="<?php the_title_attribute(); ?>" title="<?php the_title_attribute(); ?>" />
        </figure>
    <?php endif; ?>
<?php endif; ?>
    
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'one-paze' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'one-paze' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

