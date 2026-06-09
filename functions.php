<?php
/**
 * WebAIntelligence Theme Functions
 *
 * @package WebAIntelligence
 */

/**
 * Set up theme defaults and register support for various WordPress features.
 */
function webanintelligence_setup() {
    // Add theme support for title tag
    add_theme_support( 'title-tag' );

    // Add theme support for featured images
    add_theme_support( 'post-thumbnails' );

    // Add theme support for HTML5
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );

    // Add theme support for custom logo
    add_theme_support( 'custom-logo', array(
        'height'      => 70,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    // Register primary menu
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'webanintelligence' ),
    ) );
}
add_action( 'after_setup_theme', 'webanintelligence_setup' );

/**
 * Enqueue scripts and styles
 */
function webanintelligence_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style( 'webanintelligence-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

    // Enqueue jQuery if needed
    wp_enqueue_script( 'jquery' );

    // Enqueue custom script (if you have any)
    // wp_enqueue_script( 'webanintelligence-script', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
}
add_action( 'wp_enqueue_scripts', 'webanintelligence_scripts' );

/**
 * Customize primary menu walker to add custom button class to specific menu items
 */
function webanintelligence_nav_menu_link_attributes( $atts, $item, $args ) {
    // Add btn-nav class to specific menu items if needed
    if ( 'Contact' === $item->title ) {
        $atts['class'] = 'btn-nav';
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'webanintelligence_nav_menu_link_attributes', 10, 3 );

/**
 * Register widget areas
 */
function webanintelligence_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Primary Sidebar', 'webanintelligence' ),
        'id'            => 'primary-sidebar',
        'description'   => esc_html__( 'Main sidebar that appears on the right', 'webanintelligence' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'webanintelligence_widgets_init' );
