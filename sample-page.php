<?php
/**
 * Template Name: go down this is the sample page
 */
get_header(); ?>

<main id="main">
    <?php while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <div class="content">
            <?php the_content(); ?>
        </div>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?> 