<?php

get_header();
?>
<div id="container" class="<?php bravada_get_layout_class(); ?>">
	<main id="main" class="main">
		<?php cryout_before_content_hook(); ?>

		<?php if ( have_posts() ) : ?>

			<div id="content-masonry" class="content-masonry" <?php cryout_schema_microdata( 'blog' ); ?>>
				<?php 
				while ( have_posts() ) : the_post();
					get_template_part( 'content/content', get_post_format() );
				endwhile;
				?>
			</div> 
			<?php bravada_pagination(); ?>

		<?php else :
			get_template_part( 'content/content', 'notfound' );
		endif; ?>

		<?php cryout_after_content_hook(); ?>
	</main>

	<?php bravada_get_sidebar(); ?>
</div>

<?php
get_footer();
