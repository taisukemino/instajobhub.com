<?php
/**
 * One Paze functions and definitions
 *
 * @package One Paze
 */
 
 if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'one_paze_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function one_paze_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on One Pager, use a find and replace
	 * to change 'one-paze' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'one-paze', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'one-paze' ),
        'footer-menu' => esc_html__( 'Footer Menu', 'one-paze' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	/** Declare Woocommerce Compatibility **/
	add_theme_support( 'woocommerce' );
}
endif; // one_paze_setup
add_action( 'after_setup_theme', 'one_paze_setup' );

/** Adding Editor Styles **/
function one_paze_add_editor_styles() {
    add_editor_style( get_template_directory_uri().'/css/custom-editor-style.css' );
}

add_action( 'admin_init', 'one_paze_add_editor_styles' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function one_paze_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'one_paze_content_width', 640 );
}
add_action( 'after_setup_theme', 'one_paze_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function one_paze_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'one-paze' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
    
    /** Header Text Section **/
    register_sidebar( array(
		'name'          => __( 'Header Text', 'one-paze' ),
		'id'            => 'header_text',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
    
    /** Footer Social Links Section **/
    register_sidebar( array(
		'name'          => __( 'Footer Social Links', 'one-paze' ),
		'id'            => 'footer_social_links',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
    
    /** Footer Social Links Section **/
    register_sidebar( array(
		'name'          => __( 'Google Map (Home Page)', 'one-paze' ),
		'id'            => 'contact_section_map',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'one_paze_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function one_paze_scripts() {
	wp_enqueue_style( 'one-paze-style', get_stylesheet_uri() );
    
    wp_enqueue_style( 'one-paze-sidetogglemenu-css', get_template_directory_uri() . '/css/sidetogglemenu.css');
    
    wp_enqueue_style( 'one-paze-wow-css', get_template_directory_uri() . '/css/animate.css');
    
    wp_enqueue_style( 'one-paze-fontawesome-css', get_template_directory_uri() . '/css/faw/css/font-awesome.css');
    
    wp_enqueue_style( 'one-paze-google-fonts', '//fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,300,600,700');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
    
    wp_enqueue_script( 'one-paze-sidetogglemenu-js', get_template_directory_uri(). '/js/sidetogglemenu.js', array('jquery') );
    
    wp_enqueue_script( 'one-paze-scrollto-js', get_template_directory_uri(). '/js/jquery.scrollTo.js', array('jquery') );
    
    wp_enqueue_script( 'one-paze-localscroll-js', get_template_directory_uri(). '/js/jquery.localScroll.js', array('jquery', 'one-paze-scrollto-js') );
    
    wp_enqueue_script( 'one-paze-parallax-js', get_template_directory_uri(). '/js/jquery.parallax.js', array('jquery') );

	wp_enqueue_script( 'one-paze-mixitup-js', get_template_directory_uri(). '/js/jquery.mixitup.js', array('jquery') );
    
    wp_enqueue_script( 'one-paze-jquery-nav', get_template_directory_uri(). '/js/jquery.nav.js', array('jquery') );
    
    wp_enqueue_script( 'one-paze-bxslider', get_template_directory_uri(). '/js/bxslider/jquery.bxslider.js', array('jquery'));
    
    wp_enqueue_script( 'one-paze-wow-js', get_template_directory_uri(). '/js/wow.js'); 
    
    wp_enqueue_script( 'one-paze-custom', get_template_directory_uri() . '/js/custom.js', array('jquery', 'one-paze-wow-js', 'one-paze-jquery-nav', 'one-paze-bxslider', 'one-paze-localscroll-js', 'one-paze-parallax-js', 'one-paze-mixitup-js', 'one-paze-sidetogglemenu-js'));   
}
add_action( 'wp_enqueue_scripts', 'one_paze_scripts' );

/** Add Image Sizes **/
add_image_size('one-paze-port-thumb',363,272,true);
add_image_size('one-paze-blog-thumb',270,127,true);
add_image_size('one-paze-team-thumb',175,175,true);
add_image_size('one-paze-testimonial-thumb',79,79,true);
add_image_size('one-paze-innerpage-thumb', 869, 342, true);
add_image_size('one-paze-blog-post-thumb', 600, 342, true);
add_image_size('one-paze-slider-image-size', 1349, 670, true);
add_image_size('one-paze-blog-large-image', 805, 355, true);
add_image_size('one-paze-blog-medium-image', 380, 252, true);

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load Tgm file.
 */
require get_template_directory() . '/inc/class-tgm-plugin-activation.php';

/**
 * Tgm Suggesstions.
 */
require get_template_directory() . '/inc/one-paze-tgm.php';

/**
 * Load One Pager Custom Functions.
 */
require get_template_directory() . '/inc/one-paze-functions.php';

/**
 * Load Custom Customizer Functionality
 */

require get_template_directory() . '/inc/admin/one-paze-customizer.php';

/**
 * Load Dynamic Styles
 */
require get_template_directory() . '/css/dynamic-styles.php';
 
 
/**
 * AccessPress More Themes
 */

// Add upsell page to the menu.
function onepaze_add_upsell() {
	add_theme_page(
		__( 'More Themes', 'one-paze' ),
		__( 'More Themes', 'one-paze' ),
		'administrator',
		'accesspressstore-themes',
		'onepaze_display_upsell'
	);
}
add_action( 'admin_menu', 'onepaze_add_upsell', 11 );

// Define markup for the upsell page.
function onepaze_display_upsell() {
	// Set template directory uri
	$directory_uri = get_template_directory_uri();
	?>
	<div class="wrap">
	<h1 style="margin-bottom:20px;">
	<img src="<?php echo get_template_directory_uri(); ?>/inc/images/accesspressthemes.png"/>
	<?php echo sprintf(__( 'More Themes from <a href="%s" target="_blank">AccessPress Themes</a>', 'one-paze' ) , esc_url('https://accesspressthemes.com/'))?>
	</h1>

	<div class="theme-browser rendered">
		<div class="themes">
		<?php
		// Set the argument array with author name.
		$args = array(
			'author' => 'access-keys',
		);
		// Set the $request array.
		$request = array(
			'body' => array(
				'action'  => 'query_themes',
				'request' => serialize( (object)$args )
			)
		);
		$themes = onepaze_get_themes( $request );
		$active_theme = wp_get_theme()->get( 'Name' );
		$counter = 1;
		// For currently active theme.
		foreach ( $themes->themes as $theme ) {
			if( $active_theme == $theme->name ) {?>

				<div id="<?php echo $theme->slug; ?>" class="theme active">
					<div class="theme-screenshot">
						<img src="<?php echo $theme->screenshot_url ?>"/>
					</div>
					<h3 class="theme-name" id="accesspress-parallax-name"><strong><?php _e('Active','one-paze'); ?></strong>: <?php echo $theme->name; ?></h3>
					<div class="theme-actions">
						<a class="button button-secondary activate" target="_blank" href="<?php echo get_site_url(). '/wp-admin/customize.php' ?>"><?php _e('Customize','one-paze'); ?></a>
					</div>
				</div>
			<?php
			$counter++;
			break;
			}
		}

		// For all other themes.
		foreach ( $themes->themes as $theme ) {
			if( $active_theme != $theme->name ) {
				// Set the argument array with author name.
				$args = array(
					'slug' => $theme->slug,
				);
				// Set the $request array.
				$request = array(
					'body' => array(
						'action'  => 'theme_information',
						'request' => serialize( (object)$args )
					)
				);
				$theme_details = onepaze_get_themes( $request );
			?>
				<div id="<?php echo $theme->slug; ?>" class="theme">
					<div class="theme-screenshot">
						<img src="<?php echo $theme->screenshot_url ?>"/>
					</div>

					<h3 class="theme-name"><?php echo $theme->name; ?></h3>

					<div class="theme-actions">
						<?php if( wp_get_theme( $theme->slug )->exists() ) { ?>
							<!-- Show the tick image notifying the theme is already installed. -->
							<img data-toggle="tooltip" title="<?php _e( 'Already installed', 'one-paze' ); ?>" data-placement="bottom" class="theme-exists" src="<?php echo $directory_uri ?>/inc/images/right.png"/>
							<!-- Activate Button -->
							<a  class="button button-secondary activate"
								href="<?php echo wp_nonce_url( admin_url( 'themes.php?action=activate&amp;stylesheet=' . urlencode( $theme->slug ) ), 'switch-theme_' . $theme->slug );?>" ><?php _e('Activate','one-paze') ?></a>
						<?php }else {
							// Set the install url for the theme.
							$install_url = add_query_arg( array(
									'action' => 'install-theme',
									'theme'  => $theme->slug,
								), self_admin_url( 'update.php' ) );
						?>
							<!-- Install Button -->
							<a data-toggle="tooltip" data-placement="bottom" title="<?php echo 'Downloaded ' . number_format( $theme_details->downloaded ) . ' times'; ?>" class="button button-secondary activate" href="<?php echo esc_url( wp_nonce_url( $install_url, 'install-theme_' . $theme->slug ) ); ?>" ><?php _e( 'Install Now', 'one-paze' ); ?></a>
						<?php } ?>

						<a class="button button-primary load-customize hide-if-no-customize" target="_blank" href="<?php echo $theme->preview_url; ?>"><?php _e( 'Live Preview', 'one-paze' ); ?></a>
					</div>
				</div>
				<?php
			}
		}?>
		</div>
	</div>
	</div>
<?php
}

// Get all themeisle themes by using API.
function onepaze_get_themes( $request ) {

	// Generate a cache key that would hold the response for this request:
	$key = 'accesspressstore_' . md5( serialize( $request ) );

	// Check transient. If it's there - use that, if not re fetch the theme
	if ( false === ( $themes = get_transient( $key ) ) ) {

		// Transient expired/does not exist. Send request to the API.
		$response = wp_remote_post( 'http://api.wordpress.org/themes/info/1.0/', $request );

		// Check for the error.
		if ( !is_wp_error( $response ) ) {

			$themes = unserialize( wp_remote_retrieve_body( $response ) );

			if ( !is_object( $themes ) && !is_array( $themes ) ) {

				// Response body does not contain an object/array
				return new WP_Error( 'theme_api_error', 'An unexpected error has occurred' );
			}

			// Set transient for next time... keep it for 24 hours should be good
			set_transient( $key, $themes, 60 * 60 * 24 );
		}
		else {
			// Error object returned
			return $response;
		}
	}
	return $themes;
}

// Add specific CSS class by filter
add_filter( 'body_class', 'one_paze_add_unique_class_names' );
function one_paze_add_unique_class_names( $classes ) {
	global $post;
	$port_cat = get_theme_mod('portfolio_section_category', 0);

	if(is_single()) {
		$cats = get_the_category($post);
		$cat_arr = array();

		foreach($cats as $cat) :
		    $cat_arr[] = $cat->term_id;
		endforeach;

		if($port_cat != 0 && in_array($port_cat, $cat_arr) ) {
			$classes[] = 'single-pfolio';
		}
	} elseif(is_archive()) {
		$cat = get_query_var('cat');
		if($port_cat != 0 && $cat == $port_cat ){
			$classes[] = 'arch-pfolio';
		}
	}
	// return the $classes array
	return $classes;
}