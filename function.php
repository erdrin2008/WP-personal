<?php
function auto_theme_setup() {
    // Register navigation menu
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'auto'),
    ));

    // Add theme support
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'auto_theme_setup');

// Enqueue styles
function auto_enqueue_styles() {
    wp_enqueue_style('auto-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'auto_enqueue_styles');
?>