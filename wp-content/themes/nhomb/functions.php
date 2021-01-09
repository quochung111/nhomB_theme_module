<?php
/**
 * nhomb functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package nhomb
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'nhomb_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function nhomb_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on nhomb, use a find and replace
		 * to change 'nhomb' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'nhomb', get_template_directory() . '/languages' );

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
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'nhomb' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'nhomb_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'nhomb_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nhomb_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'nhomb_content_width', 640 );
}
add_action( 'after_setup_theme', 'nhomb_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nhomb_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'nhomb' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'nhomb' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'nhomb_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function nhomb_scripts() {
	wp_enqueue_style( 'nhomb-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'nhomb-style', 'rtl', 'replace' );

	wp_enqueue_script( 'nhomb-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'nhomb_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}



wp_enqueue_style ('font-awesome-all', get_template_directory_uri().'/font-awesome/all.css');


wp_enqueue_script( 'script-icon', get_template_directory_uri() . '/js/iconify.min.js', array ( 'jquery' ), 1.1, true);
wp_enqueue_script( 'script-ani', get_template_directory_uri() . '/js/g1', array ( 'jquery' ), 1.1, true);
wp_enqueue_script( 'script-md_about_4.js', get_template_directory_uri() . '/js/md_about_4.js', array ( 'jquery' ), 1.1, true);


/* Ẩn chữ giảm giá */
remove_action( 'woocommerce_before_shop_loop_item_title',
'woocommerce_show_product_loop_sale_flash', 10 );


function loop_columns() {
return 3; //  products per row
}
add_filter('loop_shop_columns', 'loop_columns', 999);


add_filter( 'add_to_cart_text', 'woo_custom_cart_button_text' );                        // < 2.1
add_filter( 'woocommerce_product_add_to_cart_text', 'woo_custom_cart_button_text' );    // 2.1 +
  
function woo_custom_cart_button_text() {
  
        return __( 'Add To Cart', 'woocommerce' );
  
}

function cloudways_short_des_product() {
	the_excerpt();
}
add_action('woocommerce_after_shop_loop_item_title', 'cloudways_short_des_product',40);


