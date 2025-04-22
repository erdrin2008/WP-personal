<?php

get_header(); ?>

	<div id="container" class="<?php bravada_get_layout_class(); ?>">

		<main id="main" class="main">
			<?php cryout_before_content_hook(); ?>

			<?php get_template_part( 'content/content', 'page' ); ?>

			<?php cryout_after_content_hook(); ?>
		</main><!-- #main -->

		<?php bravada_get_sidebar(); ?>

	</div><!-- #container -->

<?php get_footer();
