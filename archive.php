<?php

get_header(); ?>

	<div id="container" class="<?php bravada_get_layout_class(); ?>">
		<main id="main" class="main">
			<?php cryout_before_content_hook(); ?>

			<?php if ( have_posts() ) : ?>

				<header class="page-header pad-container" <?php cryout_schema_microdata( 'element' ); ?>>
					<?php
						if (is_author()) {
							get_template_part( 'content/user-bio' );
						} else {
								the_archive_title( '<h1 class="page-title" ' . cryout_schema_microdata('entry-title', 0) . '>', '</h1>' );
								the_archive_description( '<div class="taxonomy-description">', '</div>' );
						}
					?>
				</header>

				<div id="content-masonry" class="content-masonry" <?php cryout_schema_microdata( 'blog' ); ?>>
					<?php
					while ( have_posts() ) : the_post();
				
					get_template_part( 'content/content', get_post_format() );
					endwhile;
					?>
				</div><!--content-masonry-->
				<?php bravada_pagination();

			// If no content, include the "No posts found" template.
			else :
				get_template_part( 'content/content', 'notfound' );
			endif;

			cryout_after_content_hook(); ?>
		</main><!-- #main -->

		<?php bravada_get_sidebar(); ?>
	</div><!-- #container -->

<?php get_footer(); ?>
