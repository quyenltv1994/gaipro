<?php if ( ! defined('APP_PATH')) die ('Bad requested!');

/**
 * Enqueue scripts and styles.
 **/
function setup_scripts() {
    // Styles
    wp_enqueue_style('wow-animation', ASSETS_PATH.'/wow/css/libs/animate.css', array(), null);
    wp_enqueue_style('main-style', ASSETS_PATH.'/css/main.css', array(), null);

    // Add print CSS.
    wp_enqueue_style( 'print-style', get_template_directory_uri() . '/print.css', null, null, 'print' );

    // Scripts
    wp_enqueue_script('core-script', ASSETS_PATH.'/js/core.min.js', array(), null, true);
    wp_script_add_data( 'core-script', 'defer', true );
    wp_enqueue_script('main-script', ASSETS_PATH.'/js/main.js', array(), null, true);
    wp_script_add_data( 'main-script', 'defer', true );

    /* array with elements to localize in scripts */
    $script_localization = array(
        'ajax_url' => admin_url( 'admin-ajax.php' ),
        'home_url' => get_home_url()
    );
    wp_localize_script('main-script', 'script_loc', $script_localization);
}
add_action( 'wp_enqueue_scripts', 'setup_scripts' );

/**
 * Default setup.
 **/
function default_setup(){
    register_nav_menus( array(
        'main_menu' => __('Main Menu', DOMAIN),
        'footer_menu' => __('Footer Menu', DOMAIN),
        'sidebar_menu' => __('Sidebar Menu', DOMAIN)
    ) );

    add_theme_support( 'post-thumbnails' );

    // Add support for full and wide align images.
    add_theme_support( 'align-wide' );

    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );

    add_theme_support( 'title-tag' );

    // Add custom image size.
    add_image_size( 'product_thumb', 253, 379, true );
//    add_image_size( 'service-thumb', 480, 480, true );
//    add_image_size( 'post-image-thumbnail', 220, 150, true );
//    add_image_size( 'gallery', 346, 230, true );
}
add_action('init', 'default_setup');