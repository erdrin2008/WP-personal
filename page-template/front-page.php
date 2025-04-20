<?php
/**
 * Template Name: Custom Home Page
 *
 * @package Car Paint Job
 * @subpackage car_paint_job
 */

get_header(); ?>

<main id="tp_content" role="main">
	<?php get_template_part( 'template-parts/home/slider' ); ?>
	<?php get_template_part( 'template-parts/home/car-paint-job' ); ?>
	<?php get_template_part( 'template-parts/home/about' ); ?>
	<?php get_template_part( 'template-parts/home/home-content' ); ?>
</main>

<?php get_footer();
