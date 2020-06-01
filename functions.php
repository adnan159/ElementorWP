<?php
/**
 * Elamentor eCommerce functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Elamentor_eCommerce
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'elementor_commerce_setup' ) ) :
	
	function elementor_commerce_setup() {
		
		load_theme_textdomain( 'elementor-commerce', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Main Menu', 'elementor-commerce' ),
				'top-menu'	=> esc_html__('Top Menu', 'elementor-commerce'),
				'footer-left-menu'	=> esc_html__('Footer Left Menu', 'elementor-commerce'),
				'footer-right-menu'	=> esc_html__('Footer right menu', 'elementor-commerce')
			)
		);

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
				'elementor_commerce_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

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
add_action( 'after_setup_theme', 'elementor_commerce_setup' );

function elementor_commerce_content_width() {

	$GLOBALS['content_width'] = apply_filters( 'elementor_commerce_content_width', 640 );
}
add_action( 'after_setup_theme', 'elementor_commerce_content_width', 0 );

function elementor_commerce_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'elementor-commerce' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'elementor-commerce' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'elementor_commerce_widgets_init' );

function elementor_commerce_scripts() {
	wp_enqueue_style( 'style-sheet', get_stylesheet_uri());
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style( 'app', get_template_directory_uri() . '/app.css');

	wp_enqueue_script( 'min-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), 123456, true );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery'), 123456, true );
	wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), 123456, true );
	wp_enqueue_script( 'bootstrap-bundle-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.js', array('jquery'), 123456, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'elementor_commerce_scripts' );

require get_template_directory() . '/inc/custom-header.php';

require get_template_directory() . '/inc/template-tags.php';

require get_template_directory() . '/inc/template-functions.php';

require get_template_directory() . '/inc/customizer.php';

if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
