<?php
function auto_theme_setup() {
    add_theme_support( 'title-tag' );

    function auto_enqueue_styles() {
        wp_enqueue_style( 'auto-style', get_stylesheet_uri() );
    }
    add_action( 'wp_enqueue_scripts', 'auto_enqueue_styles' );
}
add_action( 'after_setup_theme', 'auto_theme_setup' );
?>