<?php

require get_stylesheet_directory() . '/customizer/customizer.php';

add_action( 'after_setup_theme', 'car_paint_job_after_setup_theme' );
function car_paint_job_after_setup_theme() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( "responsive-embeds" );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'car-paint-job-featured-image', 2000, 1200, true );
    add_image_size( 'car-paint-job-thumbnail-avatar', 100, 100, true );

    // Set the default content width.
    $GLOBALS['content_width'] = 525;

    // Add theme support for Custom Logo.
    add_theme_support( 'custom-logo', array(
        'width'       => 250,
        'height'      => 250,
        'flex-width'  => true,
    ) );

    add_theme_support( 'custom-background', array(
        'default-color' => 'ffffff'
    ) );

    add_theme_support( 'html5', array('comment-form','comment-list','gallery','caption',) );

    add_editor_style( array( 'assets/css/editor-style.css') );
}

/**
 * Register widget area.
 */
function car_paint_job_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Blog Sidebar', 'car-paint-job' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'car-paint-job' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Page Sidebar', 'car-paint-job' ),
        'id'            => 'sidebar-2',
        'description'   => __( 'Add widgets here to appear in your sidebar on pages.', 'car-paint-job' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Sidebar 3', 'car-paint-job' ),
        'id'            => 'sidebar-3',
        'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'car-paint-job' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 1', 'car-paint-job' ),
        'id'            => 'footer-1',
        'description'   => __( 'Add widgets here to appear in your footer.', 'car-paint-job' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 2', 'car-paint-job' ),
        'id'            => 'footer-2',
        'description'   => __( 'Add widgets here to appear in your footer.', 'car-paint-job' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 3', 'car-paint-job' ),
        'id'            => 'footer-3',
        'description'   => __( 'Add widgets here to appear in your footer.', 'car-paint-job' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 4', 'car-paint-job' ),
        'id'            => 'footer-4',
        'description'   => __( 'Add widgets here to appear in your footer.', 'car-paint-job' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'car_paint_job_widgets_init' );

// enqueue styles for child theme
function car_paint_job_enqueue_styles() {

    wp_enqueue_style( 'car-paint-job-fonts', automobile_hub_fonts_url(), array(), null );

    // Bootstrap
    wp_enqueue_style( 'bootstrap-css', get_theme_file_uri( '/assets/css/bootstrap.css' ) );

    // Theme block stylesheet.
    wp_enqueue_style( 'car-paint-job-block-style', get_theme_file_uri( '/assets/css/blocks.css' ), array( 'car-paint-job-child-style' ), '1.0' );

    // enqueue parent styles
    wp_enqueue_style('automobile-hub-style', get_template_directory_uri() .'/style.css');


    // enqueue child styles
    wp_enqueue_style('car-paint-job-child-style', get_stylesheet_directory_uri() .'/style.css', array('automobile-hub-style'));
    
    require get_theme_file_path( '/tp-body-width-layout.php' );
    wp_add_inline_style( 'car-paint-job-child-style',$automobile_hub_tp_theme_css );

    wp_enqueue_script( 'comment-reply', '/wp-includes/js/comment-reply.min.js', array(), false, true );

    $automobile_hub_body_font_family = get_theme_mod('automobile_hub_body_font_family', '');

    $automobile_hub_heading_font_family = get_theme_mod('automobile_hub_heading_font_family', '');

    $automobile_hub_menu_font_family = get_theme_mod('automobile_hub_menu_font_family', '');

    $automobile_hub_tp_theme_css = '
        body{
            font-family: '.esc_html($automobile_hub_body_font_family).'!important;
        }
        p.simplep,.more-btn a {
            font-family: '.esc_html($automobile_hub_body_font_family).'!important;
        }
        h1{
            font-family: '.esc_html($automobile_hub_heading_font_family).'!important;
        }
        h2{
            font-family: '.esc_html($automobile_hub_heading_font_family).'!important;
        }
        h3{
            font-family: '.esc_html($automobile_hub_heading_font_family).'!important;
        }
        h4{
            font-family: '.esc_html($automobile_hub_heading_font_family).'!important;
        }
        h5{
            font-family: '.esc_html($automobile_hub_heading_font_family).'!important;
        }
        h6{
            font-family: '.esc_html($automobile_hub_heading_font_family).'!important;
        }
        #theme-sidebar .wp-block-search .wp-block-search__label{
            font-family: '.esc_html($automobile_hub_heading_font_family).'!important;
        }
        .menubar{
            font-family: '.esc_html($automobile_hub_menu_font_family).'!important;
        }
    ';
    wp_add_inline_style('automobile-hub-style', $automobile_hub_tp_theme_css);
}
add_action('wp_enqueue_scripts', 'car_paint_job_enqueue_styles');

function car_paint_job_admin_scripts() {
    // Backend CSS
    wp_enqueue_style( 'car-paint-job-backend-css', get_theme_file_uri( '/assets/css/customizer.css' ) );
}
add_action( 'admin_enqueue_scripts', 'car_paint_job_admin_scripts' );

if ( ! defined( 'AUTOMOBILE_HUB_PRO_THEME_NAME' ) ) {
    define( 'AUTOMOBILE_HUB_PRO_THEME_NAME', esc_html__( 'Car Paint Pro Theme', 'car-paint-job' ));
}
if ( ! defined( 'AUTOMOBILE_HUB_PRO_THEME_URL' ) ) {
    define( 'AUTOMOBILE_HUB_PRO_THEME_URL', 'https://www.themespride.com/products/car-paint-wordpress-theme' );
}
if ( ! defined( 'AUTOMOBILE_HUB_FREE_THEME_URL' ) ) {
    define( 'AUTOMOBILE_HUB_FREE_THEME_URL', 'https://www.themespride.com/products/free-car-painting-wordpress-theme' );
}
if ( ! defined( 'AUTOMOBILE_HUB_DEMO_THEME_URL' ) ) {
    define( 'AUTOMOBILE_HUB_DEMO_THEME_URL', 'https://page.themespride.com/car-paint-job/' );
}
if ( ! defined( 'AUTOMOBILE_HUB_DOCS_THEME_URL' ) )  {
    define( 'AUTOMOBILE_HUB_DOCS_URL', esc_url('https://page.themespride.com/demo/docs/car-paint-job/'));
}
if ( ! defined( 'AUTOMOBILE_HUB_DOCS_URL' ) ) {
    define( 'AUTOMOBILE_HUB_DOCS_URL', esc_url('https://page.themespride.com/demo/docs/car-paint-job/'));
}
if ( ! defined( 'AUTOMOBILE_HUB_RATE_THEME_URL' ) ) {
    define( 'AUTOMOBILE_HUB_RATE_THEME_URL', 'https://wordpress.org/support/theme/car-paint-job/reviews/#new-post' );
}
if ( ! defined( 'AUTOMOBILE_HUB_CHANGELOG_THEME_URL' ) ) {
    define( 'AUTOMOBILE_HUB_CHANGELOG_THEME_URL', get_stylesheet_directory() . '/readme.txt' );
}
if ( ! defined( 'AUTOMOBILE_HUB_SUPPORT_THEME_URL' ) ) {
    define( 'AUTOMOBILE_HUB_SUPPORT_THEME_URL', 'https://wordpress.org/support/theme/car-paint-job/' );
}

define('CAR_PAINT_JOB_CREDIT',__('https://www.themespride.com/products/free-car-painting-wordpress-theme','car-paint-job') );
if ( ! function_exists( 'car_paint_job_credit' ) ) {
    function car_paint_job_credit(){
        echo "<a href=".esc_url(CAR_PAINT_JOB_CREDIT)." target='_blank'>".esc_html__(get_theme_mod('automobile_hub_footer_text',__('
Car Paint WordPress Theme','car-paint-job')))."</a>";
    }
}