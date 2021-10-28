<?php
/**
 * White Canvas Design Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wcd_Theme
 */

if ( ! function_exists( 'wcd_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function wcd_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
    'primary' => esc_html( 'Primary Menu' ),
    // 'social-menu' => esc_html( 'Social Menu' ),
    'mobile-menu' => esc_html( 'Mobile Menu' ),
    // 'mobile-social-menu' => esc_html( 'Mobile Social Menu' )
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // wcd_setup
add_action( 'after_setup_theme', 'wcd_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function wcd_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wcd_content_width', 640 );
}
add_action( 'after_setup_theme', 'wcd_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wcd_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Sidebar' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wcd_widgets_init' );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function wcd_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'wcd_minified_css', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function wcd_scripts() {
  wp_enqueue_style( 'wcd-style', get_stylesheet_uri(), array(), time(), 'all' );
  
  // to link animate.css
  wp_enqueue_style( 'wcd-animate','https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css' );

  // to link Google fonts
  wp_enqueue_style( 'wcd-google-fonts','https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap' );

  // tp link Adobe typekit
  // TODO: alt font request
  // wp_enqueue_style( 'wcd-fonts','https://use.typekit.net/xgv3kon.css' );

  // to link Animate on Scroll (https://github.com/michalsnik/aos/tree/v2)
  wp_enqueue_style( 'wcd-aos-style','https://unpkg.com/aos@2.3.1/dist/aos.css', false, null );

  wp_enqueue_script( 'wcd-aos','https://unpkg.com/aos@2.3.1/dist/aos.js', false, time(), false );

  // to link Swiper.js
  if ( is_page_template( 'page-suites.php' ) ) {
    wp_enqueue_style( 'wcd-swiper.css','https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css' );

    wp_enqueue_script( 'wcd-swiper.js','https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js', array ('jquery'), true ); // true to load at the bottom after jquery

    wp_enqueue_script( 'wcd-gallery', get_template_directory_uri() . '/build/js/gallery.min.js', array('jquery'), false, true );
  }
  
  // to link skip-link-focus-fix.js
  wp_enqueue_script( 'wcd-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20151215', true );

  // to link navigation.js
  wp_enqueue_script( 'wcd-navigation', get_template_directory_uri() . '/build/js/navigation.min.js', array(), '20151215', true );

  // to link animations.js
  wp_enqueue_script( 'wcd-animations', get_template_directory_uri() . '/build/js/animations.min.js', array('jquery'), false, true );

  // to link custom.js
  wp_enqueue_script( 'wcd-custom', get_template_directory_uri() . '/build/js/custom.min.js', array('jquery'), time(), true );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wcd_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Remove "Editor" links from sub-menus
 */
function wcd_remove_submenus() {
  remove_submenu_page( 'themes.php', 'theme-editor.php' );
  remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_menu', 'wcd_remove_submenus', 110 );

/**
 * Add ACF options page
 */
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

