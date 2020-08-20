<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );

/**
 * Register our top bar widgets
 *
 */
function topbar1_widgets_init() {

	register_sidebar( array(
		'name'          => 'Top Bar 1',
		'id'            => 'top-bar1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<p class="topbar-title">',
		'after_title'   => '<p>',
	) );

}
add_action( 'widgets_init', 'topbar1_widgets_init' );

function topbar2_widgets_init() {

	register_sidebar( array(
		'name'          => 'Top Bar 2',
		'id'            => 'top-bar2',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<p class="topbar-title">',
		'after_title'   => '<p>',
	) );

}
add_action( 'widgets_init', 'topbar2_widgets_init' );

function topbar3_widgets_init() {

	register_sidebar( array(
		'name'          => 'Top Bar 3',
		'id'            => 'top-bar3',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<p class="topbar-title">',
		'after_title'   => '<p>',
	) );

}
add_action( 'widgets_init', 'topbar3_widgets_init' );

function topbar4_widgets_init() {

	register_sidebar( array(
		'name'          => 'Top Bar 4',
		'id'            => 'top-bar4',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<p class="topbar-title">',
		'after_title'   => '<p>',
	) );

}
add_action( 'widgets_init', 'topbar4_widgets_init' );



/**
 * Google Fonts
 *
 */
function wpb_add_google_fonts() {

wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap', false );


wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );
