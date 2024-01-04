<?php
/**
 * Enqueue scripts and styles
 */
function newgentheme_script_enqueue() {
    // Enqueue styles
    wp_enqueue_style('customstyle-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '1.0.0', 'all');
    wp_enqueue_style('customstyle-style', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all');
    wp_enqueue_style('customstyle-comm', get_template_directory_uri() . '/assets/css/app.css', array(), '1.0.0', 'all');

    // Enqueue scripts
    wp_enqueue_script('customjs-jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), '1.0.0', true);
    wp_enqueue_script('customjs-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array(), '1.0.0', true);
    wp_enqueue_script('customjs-custom', get_template_directory_uri() . '/assets/js/app.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'newgentheme_script_enqueue');

/**
 * Theme setup
 */
function my_theme_setup() {
    // Add support for post thumbnails
    add_theme_support('post-thumbnails');

    // Add support for a custom logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 40,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'),
    ));

    // Add support for menus
    add_theme_support('menus');

    // Register a navigation menu
    register_nav_menu('nav-menu', __('Nav menu', 'theme'));
}

add_action('after_setup_theme', 'my_theme_setup');

/**
 * Add class to menu items
 */
function add_class_li($classes, $item, $args) {
    if (isset($args->li_class)) {
        $classes[] = $args->li_class;
    }
    return $classes;
}

add_filter('nav_menu_css_class', 'add_class_li', 1, 3);

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
?>