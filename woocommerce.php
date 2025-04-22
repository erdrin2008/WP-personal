<?php

get_header(); ?>

	<div id="container" class="<?php bravada_get_layout_class(); ?>">

		<main id="main" class="main">

		<article id="post-<?php the_ID(); ?>" <?php post_class( 'hentry' ); ?>>
			<div class="article-inner">
				<?php cryout_before_content_hook(); ?>

				<?php woocommerce_content(); ?>

				<?php cryout_after_content_hook(); ?>
			</div>
		</article>
		</main>

		<?php bravada_get_sidebar(); ?>

	</div>

<?php get_footer();
