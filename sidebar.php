<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package One Paze
 */

if ( is_active_sidebar( 'sidebar-1' ) ) {
?>
<div id="secondary" class="widget-area clearfix" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
<?php
}
?>
