<?php
/**
 * The header for our theme
 *
 * @package WebAIntelligence
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="navbar">
        <div class="container">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-container">
                <?php 
                if ( has_custom_logo() ) {
                    the_custom_logo();
                } else {
                    // Fallback if no custom logo is set
                    echo '<img src="' . esc_url( get_template_directory_uri() . '/logos/Logo3d.png' ) . '" alt="' . esc_attr( get_bloginfo( 'name' ) ) . '" class="logo-img">';
                }
                ?>
            </a>
            <nav>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_class'     => '',
                    'container'      => false,
                    'depth'          => 2,
                    'fallback_cb'    => 'wp_page_menu',
                ) );
                ?>
            </nav>
        </div>
    </header>
