<?php
/**
 * WebAIntelligence Theme - Advanced Features (Optional)
 *
 * This file contains optional advanced features that you can integrate into functions.php
 * Uncomment the functions you want to use.
 *
 * @package WebAIntelligence
 */

/**
 * Enable featured images for posts and pages
 */
// Uncomment these lines in functions.php if using featured images
/*
add_post_type_support( 'page', 'excerpt' );
add_post_type_support( 'post', 'excerpt' );
*/

/**
 * Custom excerpt length
 */
/*
function webanintelligence_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'webanintelligence_excerpt_length', 999 );
*/

/**
 * Register additional theme colors for customization
 */
/*
function webanintelligence_customize_register( $wp_customize ) {
    // Add a custom color setting
    $wp_customize->add_setting( 'primary_color', array(
        'default' => '#fb00ff',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control(
        $wp_customize,
        'primary_color',
        array(
            'label' => __( 'Primary Color', 'webanintelligence' ),
            'section' => 'colors',
        )
    ) );
}
add_action( 'customize_register', 'webanintelligence_customize_register' );
*/

/**
 * Enable support for WooCommerce (if using the theme with WooCommerce)
 */
/*
function webanintelligence_woocommerce_setup() {
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'webanintelligence_woocommerce_setup' );
*/

/**
 * Custom body class for additional styling
 */
/*
function webanintelligence_body_classes( $classes ) {
    if ( is_front_page() ) {
        $classes[] = 'homepage';
    }
    return $classes;
}
add_filter( 'body_class', 'webanintelligence_body_classes' );
*/

/**
 * Remove emoji support if not needed (performance improvement)
 */
/*
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
*/

/**
 * Disable WordPress auto-paragraphs if needed
 */
/*
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
*/

/**
 * Add custom post type: Services
 */
/*
function webanintelligence_register_service_post_type() {
    $labels = array(
        'name'               => _x( 'Services', 'Post Type General Name', 'webanintelligence' ),
        'singular_name'      => _x( 'Service', 'Post Type Singular Name', 'webanintelligence' ),
        'menu_name'          => __( 'Services', 'webanintelligence' ),
        'all_items'          => __( 'All Services', 'webanintelligence' ),
        'add_new_item'       => __( 'Add New Service', 'webanintelligence' ),
    );

    $args = array(
        'label'              => __( 'Service', 'webanintelligence' ),
        'description'        => __( 'Business Services', 'webanintelligence' ),
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'services' ),
        'has_archive'        => true,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
    );

    register_post_type( 'service', $args );
}
add_action( 'init', 'webanintelligence_register_service_post_type' );
*/

/**
 * Add page-specific template selection
 */
/*
function webanintelligence_page_templates( $templates ) {
    $templates['templates/page-full-width.php'] = __( 'Full Width', 'webanintelligence' );
    $templates['templates/page-sidebar.php'] = __( 'With Sidebar', 'webanintelligence' );
    return $templates;
}
add_filter( 'theme_page_templates', 'webanintelligence_page_templates' );
*/

/**
 * Add social media links widget area
 */
/*
function webanintelligence_footer_widgets() {
    register_sidebar( array(
        'name'          => __( 'Footer Column 1', 'webanintelligence' ),
        'id'            => 'footer-col-1',
        'description'   => __( 'Footer widget area', 'webanintelligence' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'webanintelligence_footer_widgets' );
*/

/**
 * Custom login page styling
 */
/*
function webanintelligence_login_logo() {
    ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_template_directory_uri(); ?>/logos/Logo3d.png);
            width: 320px;
            height: 70px;
            background-size: contain;
            background-repeat: no-repeat;
        }
    </style>
    <?php
}
add_action( 'login_enqueue_scripts', 'webanintelligence_login_logo' );
*/

/**
 * Disable unnecessary WordPress features for performance
 */
/*
// Remove jQuery migrate
wp_dequeue_script( 'jquery-migrate' );

// Remove REST API links from header
remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );
*/
