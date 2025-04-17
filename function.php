<?php
// Theme setup
function auto_theme_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('custom-logo');
  register_nav_menus([
    'primary' => __('Primary Menu', 'auto'),
  ]);
}
add_action('after_setup_theme', 'auto_theme_setup');

// Enqueue styles and scripts
function auto_enqueue_scripts() {
  wp_enqueue_style('auto-style', get_stylesheet_uri());
  wp_enqueue_style('auto-main', get_template_directory_uri() . '/assets/css/main.css');
  wp_enqueue_script('auto-main', get_template_directory_uri() . '/assets/js/main.js', [], '1.0', true);
}
add_action('wp_enqueue_scripts', 'auto_enqueue_scripts');

// Register widget areas
function auto_widgets_init() {
  register_sidebar([
    'name' => __('Footer Widget Area', 'auto'),
    'id' => 'footer-sidebar',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
  ]);
}
add_action('widgets_init', 'auto_widgets_init');
?>