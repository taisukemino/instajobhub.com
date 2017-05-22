<!-- ★★★single.php★★★ -->
<?php
/**
 * The template for displaying all single posts.
 *
 * @package One Paze
 */

	$cats = get_the_category($post);
	$cat_list = array();
	foreach($cats as $cat){
		$cat_list[] = $cat->term_id;
		$cat_list[] = $cat->parent;
	}

	$port_cat = esc_attr(get_theme_mod('portfolio_section_category'));
get_header(); ?>
    <?php if(in_array($port_cat, $cat_list) && $port_cat != '') : ?>
    <?php else : ?>
	<div id="primary" class="content-area">
    <?php endif; ?>
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			
			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php if(in_array($port_cat, $cat_list) && $port_cat != '') : ?>
			<?php else : ?>
				<?php the_post_navigation(); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>
			<?php endif; ?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
		<div class="translation-section">
            <h2>Apply Here!</h2>
            <p>Once you apply, we will send you the full infotmation about this translation right away. :)</p>
			<?php echo do_shortcode('[ninja_form id=1]'); ?>
		</div><!-- #translation-form -->
	</div><!-- #primary -->
<?php if(in_array($port_cat, $cat_list) && $port_cat != '') : ?>
<?php else : ?>
<?php get_sidebar(); ?>
<?php endif; ?>
<?php get_footer(); ?>
