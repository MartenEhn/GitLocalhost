<?php
/**
 * Quidus functions and definitions
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 */
if ( ! isset( $content_width ) ) {
	$content_width = 660;
}

if ( ! function_exists( 'quidus_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 */
function quidus_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on quidus, use a find and replace
	 * to change 'quidus' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'quidus', get_template_directory() . '/languages' );

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
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );
	add_image_size( 'sidebar-thumbnail', 720, 480, true ); add_image_size( 'featured-post', 1280, 720, true );
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'secondary' => __( 'Vertical Menu', 'quidus' ),
		'primary' => __( 'Primary Menu', 'quidus' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'image', 'video', 'quote', 'link', 'gallery', 'audio'
	) );
	add_theme_support( 'woocommerce' );
	load_template( get_template_directory() . '/inc/Widgets/quidus_recent_posts.php' );
	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'quidus_custom_background_args', array(
		'default-attachment' => 'fixed'
	) ) );
}
endif; // quidus_setup
add_action( 'after_setup_theme', 'quidus_setup' );

function quidus_custom_excerpt_length( $length ) {
	if( (!is_active_widget( '', '', 'quidus-recent-posts' )) ) {
	return get_theme_mod('quidus_excerpt_length', 55);} else {return 20;}
}
add_filter( 'excerpt_length', 'quidus_custom_excerpt_length', 999 );

/**
 * Register widget area.
 *
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function quidus_widgets_init() {

	register_sidebar( array(
		'name'          => __( 'Left Sidebar', 'quidus' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your left sidebar.', 'quidus' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );
		
	register_sidebar( array(
		'name'          => __( 'Content Widget One', 'quidus' ),
		'id'            => 'content-widget-1',
		'description'   => __( 'Add widgets here to appear below content.', 'quidus' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Content Widget Two', 'quidus' ),
		'id'            => 'content-widget-2',
		'description'   => __( 'Add widgets here to appear below content.', 'quidus' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Content Widget Three', 'quidus' ),
		'id'            => 'content-widget-3',
		'description'   => __( 'Add widgets here to appear below content.', 'quidus' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Right Sidebar', 'quidus' ),
		'id'            => 'right-sidebar',
		'description'   => __( 'Add widgets here to appear in your right sidebar.', 'quidus' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );
	
		
	register_sidebar( array(
		'name'          => __( 'Footer Widget One', 'quidus' ),
		'id'            => 'footer-widget-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'quidus' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Widget Two', 'quidus' ),
		'id'            => 'footer-widget-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'quidus' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Widget Three', 'quidus' ),
		'id'            => 'footer-widget-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'quidus' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Widget Four', 'quidus' ),
		'id'            => 'footer-widget-4',
		'description'   => __( 'Add widgets here to appear in your footer.', 'quidus' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );
	
}

add_action( 'widgets_init', 'quidus_widgets_init' );

if ( ! function_exists( 'quidus_fonts_url' ) ) :
/**
 * Register Google fonts.
 *
 *
 * @return string Google fonts URL for the theme.
 */
function quidus_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/* translators: If there are characters in your language that are not supported by Noto Sans, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Noto Sans font: on or off', 'quidus' ) ) {
		$fonts[] = 'Noto Sans:400italic,700italic,400,700';
	}

	/* translators: If there are characters in your language that are not supported by Noto Serif, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Noto Serif font: on or off', 'quidus' ) ) {
		$fonts[] = 'Noto Serif:400italic,700italic,400,700';
	}

	/* translators: If there are characters in your language that are not supported by Inconsolata, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'quidus' ) ) {
		$fonts[] = 'Inconsolata:400,700';
	}

	/* translators: To add an additional character subset specific to your language, translate this to 'greek', 'cyrillic', 'devanagari' or 'vietnamese'. Do not translate into your own language. */
	$subset = _x( 'no-subset', 'Add new subset (greek, cyrillic, devanagari, vietnamese)', 'quidus' );

	if ( 'cyrillic' == $subset ) {
		$subsets .= ',cyrillic,cyrillic-ext';
	} elseif ( 'greek' == $subset ) {
		$subsets .= ',greek,greek-ext';
	} elseif ( 'devanagari' == $subset ) {
		$subsets .= ',devanagari';
	} elseif ( 'vietnamese' == $subset ) {
		$subsets .= ',vietnamese';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), '//fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;

/**
 * Import scripts & styles
 */

function quidus_scripts() {

	if ( is_page_template('page-canvas.php') ) {
		// Canvas
		wp_enqueue_style('canvas', get_template_directory_uri() . '/css/canvas.css');
	}
	if ( is_page_template('page-clean.php') ) { wp_enqueue_style('clean', get_template_directory_uri() . '/css/clean.css'); }




	
	// Custom fonts
	wp_enqueue_style( 'quidus-fonts', quidus_fonts_url(), array(), null );
	// Main stylesheet.
	wp_enqueue_style( 'quidus-style', get_stylesheet_uri() );
	// Font awesome
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome-4.3.0/css/font-awesome.css');
	
	// Genericons
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.2' );
	wp_enqueue_script( 'quidus-waypoints', get_template_directory_uri() . '/js/jquery.waypoints.js', array(), '4.0.0', true );
	wp_enqueue_script( 'quidus-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20141010', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_script( 'quidus-scrollme', get_template_directory_uri() . '/js/jquery.scrollme.js', array(), false, true );
	wp_enqueue_script( 'quidus-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20141212', true );
	wp_localize_script( 'quidus-script', 'screenReaderText', array(
		'expand'   => '<span class="screen-reader-text">' . __( 'expand child menu', 'quidus' ) . '</span>',
		'collapse' => '<span class="screen-reader-text">' . __( 'collapse child menu', 'quidus' ) . '</span>',
	) );
	
	if ( is_admin() ) {
		wp_enqueue_style('custom-admin', get_template_directory_uri() . '/css/custom-admin.css');
	}
	if( class_exists( 'WooCommerce' ) ) {
		if ( is_woocommerce() or is_cart() or is_checkout() or is_account_page() or is_page('wishlist') or is_active_widget( '', '', 'woocommerce_widget_cart' ) or is_active_widget( '', '', 'woocommerce_layered_nav' ) or is_active_widget( '', '', 'woocommerce_layered_nav_filters' ) or is_active_widget( '', '', 'woocommerce_product_categories' ) or is_active_widget( '', '', 'woocommerce_products' ) or is_active_widget( '', '', 'woocommerce_product_search' ) or is_active_widget( '', '', 'woocommerce_product_tag_cloud' ) or is_active_widget( '', '', 'woocommerce_recently_viewed_products' ) or is_active_widget( '', '', 'woocommerce_recent_reviews' ) or is_active_widget( '', '', 'woocommerce_top_rated_products' )) {
		
			wp_enqueue_style('woocommerce', get_template_directory_uri() . '/css/woocommerce.css');
		
		}
	}
}

add_action( 'wp_enqueue_scripts', 'quidus_scripts' );
if( class_exists( 'WooCommerce' ) ) {
function jk_dequeue_styles( $enqueue_styles ) {

	if ( is_woocommerce() or is_cart() or is_checkout() or is_account_page() or is_page('wishlist') or is_active_widget( '', '', 'woocommerce_widget_cart' ) or is_active_widget( '', '', 'woocommerce_layered_nav' ) or is_active_widget( '', '', 'woocommerce_layered_nav_filters' ) or is_active_widget( '', '', 'woocommerce_product_categories' ) or is_active_widget( '', '', 'woocommerce_products' ) or is_active_widget( '', '', 'woocommerce_product_search' ) or is_active_widget( '', '', 'woocommerce_product_tag_cloud' ) or is_active_widget( '', '', 'woocommerce_recently_viewed_products' ) or is_active_widget( '', '', 'woocommerce_recent_reviews' ) or is_active_widget( '', '', 'woocommerce_top_rated_products' )) {
		unset( $enqueue_styles['woocommerce-general'] );
	} else {
		unset( $enqueue_styles['woocommerce-general'] );
		unset( $enqueue_styles['woocommerce-layout'] );	
		unset( $enqueue_styles['woocommerce-smallscreen'] );
	}
	
	return $enqueue_styles;

}}

add_filter( 'woocommerce_enqueue_styles', 'jk_dequeue_styles' );

function wpse_82982_removeStyles() {
	if ( !is_admin() ) {
		wp_dequeue_style('kirki-styles-php');
	}
}

add_action('wp_print_styles', 'wpse_82982_removeStyles');

/**
 * Display descriptions in main navigation.
**/
 
function quidus_nav_description( $item_output, $item, $depth, $args ) {
	if ( 'primary' == $args->theme_location && $item->description ) {
		$item_output = str_replace( $args->link_after . '</a>', '<div class="menu-item-description">' . $item->description . '</div>' . $args->link_after . '</a>', $item_output );
	}
	return $item_output;
}

add_filter( 'walker_nav_menu_start_el', 'quidus_nav_description', 10, 4 );

/**
 * Custom template tags for this theme.
 *
*/
 
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 *
*/

require get_template_directory() . '/inc/customizer.php';

/**
 * Configuration sample for the Kirki Customizer
*/

function quidus_demo_configuration_sample() {

    $args = array(
        'color_accent' => '#8bc34a',
        'color_back'   => '#8bc34a',
        'textdomain'   => 'quidus'
    );

    return $args;

}

add_filter( 'kirki/config', 'quidus_demo_configuration_sample' );

function quidus_javascript_detection() { 
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n"; 
} 
		
add_action( 'wp_head', 'quidus_javascript_detection', 0 ); 

function load_custom_wp_admin_style() {
	wp_register_style( 'custom_wp_admin_css', get_template_directory_uri() . '/css/custom-admin.css', false, '1.0.0' );
	wp_enqueue_style( 'custom_wp_admin_css' );
	wp_enqueue_script( 'quidus-custom-js', get_template_directory_uri() . '/js/functions-cjs.js', array( 'jquery' ), '20141212', true );
}
add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );

if( class_exists( 'WooCommerce' ) ) {

	if (!function_exists('loop_columns')) {
		function loop_columns() {
			return 3;
		}
	}
	
	add_filter('loop_shop_columns', 'loop_columns');
}

include get_template_directory() . '/inc/SO-extensions/custom_fields.php';
	
if( class_exists( 'SiteOrigin_Widgets_Bundle' ) ) {

	// Custom SO widgets

	require_once get_template_directory() . '/inc/SO-extensions/Widgets/Quidus-Icon-Simple/quidus_icon.php';
	require_once get_template_directory() . '/inc/SO-extensions/Widgets/Quidus-Skills/quidus_skills.php';
	require_once get_template_directory() . '/inc/SO-extensions/Widgets/Quidus-Team/Quidus_Team.php';
	require_once get_template_directory() . '/inc/SO-extensions/Widgets/Quidus-Services/Quidus_Services.php';
	require_once get_template_directory() . '/inc/SO-extensions/Widgets/Quidus-Pricing-Table/Quidus_Pricing_Table.php';
	require_once get_template_directory() . '/inc/SO-extensions/Widgets/Quidus-Testimonials/Quidus_Testimonials.php';
	require_once get_template_directory() . '/inc/SO-extensions/Widgets/Quidus-Recent-Posts/Quidus_Recent_Posts.php';
	require_once get_template_directory() . '/inc/SO-extensions/Widgets/Quidus-Featured-Posts/Quidus_Featured_Posts.php';
	require_once get_template_directory() . '/inc/SO-extensions/Widgets/Quidus-Facts/Quidus_Facts.php';
	require_once get_template_directory() . '/inc/SO-extensions/Widgets/Quidus-CTA/Quidus_CTA.php';
	
	// Load widget styles
	
	include get_template_directory() . '/inc/SO-extensions/load_widgets_styles.php';
	
	// Widgets group
	
	include get_template_directory() . '/inc/SO-extensions/widgets_group.php';

}

if( class_exists( 'Kirki' ) ) {

include get_template_directory() . '/inc/meta-layout.php';
	
function quidus_pages_layout($default, $setting, $name) {
	
	if ( is_home() and get_theme_mod('quidus_layout_home_' . $name, $default) != $default ) { $setting = get_theme_mod('quidus_layout_home_' . $name, $default); }
	elseif (is_single() and get_theme_mod('quidus_layout_single_' . $name, $default) != $default ) { $setting = get_theme_mod('quidus_layout_single_' . $name, $default);}
	elseif (class_exists( 'WooCommerce' ) and is_shop() and get_theme_mod('quidus_layout_shop_' . $name, $default) != $default ) { $setting = get_theme_mod('quidus_layout_shop_' . $name, $default);}
	elseif (class_exists( 'WooCommerce' ) and is_product() and get_theme_mod('quidus_layout_product_' . $name, $default) != $default ) { $setting = get_theme_mod('quidus_layout_product_' . $name, $default);}
	elseif (is_category() and get_theme_mod('quidus_layout_category_' . $name, $default) != $default ) { $setting = get_theme_mod('quidus_layout_category_' . $name, $default); }
	elseif (is_archive() and get_theme_mod('quidus_layout_archive_' . $name, $default) != $default ) { $setting = get_theme_mod('quidus_layout_archive_' . $name, $default); }
	elseif (is_search() and get_theme_mod('quidus_layout_search_' . $name, $default) != $default ) { $setting = get_theme_mod('quidus_layout_search_' . $name, $default); }
	elseif (is_404() and get_theme_mod('quidus_layout_404_' . $name, $default) != $default ) { $setting = get_theme_mod('quidus_layout_404_' . $name, $default); }
	elseif (is_page() and !is_front_page() and get_theme_mod('quidus_layout_page_' . $name, $default) != $default ) { $setting = get_theme_mod('quidus_layout_page_' . $name, $default); }
	elseif (is_front_page() and get_theme_mod('quidus_layout_front_page_' . $name, $default) != $default ) { $setting = get_theme_mod('quidus_layout_front_page_' . $name, $default); }
	else { $setting = get_theme_mod('quidus_layout_global_' . $name, $setting); }

	return $setting;
}

function quidus_widths($name) {

	$setting = 0;
										
	if ( is_home() and get_theme_mod('quidus_layout_home_' . $name, '') != '') { $setting = get_theme_mod('quidus_layout_home_' . $name, ''); } 
	elseif (is_single() and get_theme_mod('quidus_layout_single_' . $name, '') != '')  { $setting = get_theme_mod('quidus_layout_single_' . $name, ''); } 
	elseif (class_exists( 'WooCommerce' ) and is_shop() and get_theme_mod('quidus_layout_shop_' . $name, '') != '') { $setting = get_theme_mod('quidus_layout_shop_' . $name, ''); }
	elseif (class_exists( 'WooCommerce' ) and is_product() and get_theme_mod('quidus_layout_product_' . $name, '') != '') { $setting = get_theme_mod('quidus_layout_product_' . $name, ''); }
	elseif (is_category() and get_theme_mod('quidus_layout_category_' . $name, '') != '') { $setting = get_theme_mod('quidus_layout_category_' . $name, ''); } 
	elseif (is_archive() and get_theme_mod('quidus_layout_archive_' . $name, '') != '') { $setting = get_theme_mod('quidus_layout_archive_' . $name, ''); }
	elseif (is_search() and get_theme_mod('quidus_layout_search_' . $name, '') != '') { $setting = get_theme_mod('quidus_layout_search_' . $name, ''); }
	elseif (is_404() and get_theme_mod('quidus_layout_404_' . $name, '') != '') { $setting = get_theme_mod('quidus_layout_404_' . $name, ''); }
	elseif (is_page() and !is_front_page() and get_theme_mod('quidus_layout_page_' . $name, '') != '') { $setting = get_theme_mod('quidus_layout_page_' . $name, ''); }
	elseif (is_front_page() and get_theme_mod('quidus_layout_front_page_' . $name, '') != '') { $setting = get_theme_mod('quidus_layout_front_page_' . $name, ''); }
	
	return $setting;
}

function quidus_max_width($name) {

	$setting = '';
										
	if ( is_home() and get_theme_mod('quidus_layout_home_' . $name, '') != '')  { $setting = get_theme_mod('quidus_layout_home_' . $name, ''); } 
	elseif (is_single() and get_theme_mod('quidus_layout_single_' . $name, '') != '')  { $setting = get_theme_mod('quidus_layout_single_' . $name, ''); } 
	elseif (class_exists( 'WooCommerce' ) and is_shop() and get_theme_mod('quidus_layout_shop_' . $name, '') != '') { $setting = get_theme_mod('quidus_layout_shop_' . $name, ''); }
	elseif (class_exists( 'WooCommerce' ) and is_product() and get_theme_mod('quidus_layout_product_' . $name, '') != '') { $setting = get_theme_mod('quidus_layout_product_' . $name, ''); }
	elseif (is_category() and get_theme_mod('quidus_layout_category_' . $name, '') != '') { $setting = get_theme_mod('quidus_layout_category_' . $name, ''); }
	elseif (is_archive() and get_theme_mod('quidus_layout_archive_' . $name, '') != '') { $setting = get_theme_mod('quidus_layout_archive_' . $name, ''); }
	elseif (is_search() and get_theme_mod('quidus_layout_search_' . $name, '') != '') { $setting = get_theme_mod('quidus_layout_search_' . $name, ''); }
	elseif (is_404() and get_theme_mod('quidus_layout_404_' . $name, '') != '') { $setting = get_theme_mod('quidus_layout_404_' . $name, ''); }
	elseif (is_page() and !is_front_page() and get_theme_mod('quidus_layout_page_' . $name, '') != '') { $setting = get_theme_mod('quidus_layout_page_' . $name, ''); }
	elseif (is_front_page() and get_theme_mod('quidus_layout_front_page_' . $name, '') != '') { $setting = get_theme_mod('quidus_layout_front_page_' . $name, ''); }
	
	return $setting;
	
}

}

function lcfirstc( $str ) {
	$str[0] = strtolower($str[0]);
	return $str;
}


function add_taxonomies_to_pages() {
	register_taxonomy_for_object_type( 'post_tag', 'page' );
	register_taxonomy_for_object_type( 'category', 'page' );
}

add_action( 'init', 'add_taxonomies_to_pages' );

if ( ! is_admin() ) {
	add_action( 'pre_get_posts', 'category_and_tag_archives' );
}
 
function category_and_tag_archives( $wp_query ) {

	$my_post_array = array('post','page');
	 
	if ( $wp_query->get( 'category_name' ) || $wp_query->get( 'cat' ) )
	
		$wp_query->set( 'post_type', $my_post_array );
	 
	if ( $wp_query->get( 'tag' ) )
	
		$wp_query->set( 'post_type', $my_post_array );

}


/**
 * Include additional custom admin panel features. 
 */
require get_template_directory() . '/panel/quidus-theme-documentaion.php'; 
require get_template_directory() . '/inc/TGM/quidus-tgm-activate.php';