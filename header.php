<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?> | <?php is_front_page() ? bloginfo( 'description' ) : wp_title( '' ); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <h1><?php bloginfo( 'name' ); ?></h1>
        <p><?php bloginfo( 'description' ); ?></p>
    </header>
    <nav>
        <a href="<?php echo home_url(); ?>">Home</a>
        <a href="<?php echo get_permalink( get_page_by_path( 'services' ) ); ?>">Services</a>
        <a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ); ?>">Contact</a>
    </nav>