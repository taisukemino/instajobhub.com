<?php
/**
 * Template part for displaying single posts.
 *
 * @package One Paze
 */
?>
<!-- ★★★content-single.php★★★ -->
<?php
    $cats = get_the_category();
    $pcats = array();
    foreach($cats as $cat){
        $pcats[] = $cat->term_id;
        $pcats[] = $cat->parent;
    }
    
    $port_cat = esc_attr(get_theme_mod('portfolio_section_category'));
    if(in_array($port_cat, $pcats) && $port_cat != '') :
        get_template_part('template-parts/single', 'portfolio');
    else :
?>
<!-- for other single post page -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="clearfix">
        <div class="meta-info">
            <?php
                $dates = get_the_date('F,j,Y');
                $date_arr = explode(',', $dates);
                $day = $date_arr[1];
                $month = $date_arr[0];
                $year = $date_arr[2];
            ?>
            <div class="posted-date">
                <span><?php echo $day; ?></span>
                <span><?php echo $month.' '.$year; ?></span>
            </div>
            <div class="post-metas">
                <p>
                    <i class="fa fa-user"></i><?php _e('By', 'one-paze'); ?><span> <?php echo get_the_author_meta('display_name'); ?> 
                </p>
                
                <?php if(has_category()) : ?>
                    <p>
                        <i class="fa fa-folder"></i><?php _e('Posted In', 'one-paze'); ?> <span><?php the_category(', '); ?></span>
                    </p>
                <?php endif; ?>
                <?php if(comments_open()) : ?>
                    <p>
                        <i class="fa fa-comment"></i><?php _e('With', 'one-paze'); ?><?php comments_popup_link(); ?></span>
                    </p>
                <?php endif; ?>
            </span>
            </div>
        </div>
        <div class="blog-post-content clearfix">
            <header class="entry-header">
                <h2><?php the_title(); ?></h2>
                <?php if (has_post_thumbnail()) : ?>
                    <?php
                    $img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'one-paze-blog-post-thumb');
                    $img_src = $img[0];
                    ?>
<!--                     <figure class="entry-thumbnail">
                        <img src="<?php echo $img_src; ?>" title="<?php the_title_attribute(); ?>" alt="<?php the_title_attribute(); ?>" />
                    </figure>
 -->                <?php endif; ?>
            </header><!-- .entry-header -->
            <div class="entry-content">
                <?php the_content(); ?>
            </div><!-- .entry-content -->
        </div> <!-- .blog-post-content -->
    </div> <!-- Clearfix -->
</article><!-- #post-## -->
<?php endif; ?><!-- End of condition to check if the it's the single post page of portfolio -->

