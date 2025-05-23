<?php

get_header(); ?>

<div id="container" class="<?php bravada_get_layout_class(); ?>">
	<main id="main" class="main">
		<?php cryout_before_content_hook(); ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); cryout_schema_microdata( 'article' );?>>
				<div class="schema-image">
					<?php cryout_featured_hook(); ?>
				</div>

				<div class="article-inner">
					<header>
						<div class="entry-meta beforetitle-meta">
							<?php cryout_post_title_hook(); ?>
						</div>
						<?php the_title( '<h1 class="entry-title singular-title" ' . cryout_schema_microdata('entry-title', 0) . '>', '</h1>' ); ?>

						<div class="entry-meta aftertitle-meta">
							<?php cryout_post_meta_hook(); ?>
						</div>

					</header>

					<?php cryout_singular_before_inner_hook();  ?>

					<div class="entry-content" <?php cryout_schema_microdata('entry-content'); ?>>
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'bravada' ), 'after' => '</span></div>' ) ); ?>
					</div>

					<footer class="entry-meta entry-utility">
						<?php cryout_post_utility_hook(); ?>
					</footer>

				</div>
				<?php cryout_singular_after_inner_hook();  ?>
			</article>

			<?php if ( get_the_author_meta( 'description' ) ) {
				
					get_template_part( 'content/user-bio' );
			} ?>


			<?php cryout_singular_before_comments_hook();  ?>
			<?php comments_template( '', true ); ?>


		<?php endwhile; ?>

		<?php cryout_after_content_hook(); ?>
	</main>

	<?php bravada_get_sidebar(); ?>
</div>
<?php if ( 1 == cryout_get_option ('theme_singlenav') ) { ?>
	<nav id="nav-below" class="navigation">
		<?php
			$bravada_prevpost = get_previous_post( true );
			$bravada_nextpost = get_next_post( true );
			$default = '<img src="' . esc_url( get_header_image() ) . '" alt="" loading="lazy" />';
			$bravada_prevthumb = (isset($bravada_prevpost->ID) && get_the_post_thumbnail( $bravada_prevpost->ID) )
				? wp_get_attachment_image( get_post_thumbnail_id( $bravada_prevpost->ID ), 'large' )
				: $bravada_prevthumb = $default;
			$bravada_nextthumb = (isset($bravada_nextpost->ID) && get_the_post_thumbnail( $bravada_nextpost->ID) )
				? wp_get_attachment_image( get_post_thumbnail_id( $bravada_nextpost->ID ), 'large' )
				: $bravada_nextthumb = $default;
		?>
		<div class="nav-previous">
			<?php previous_post_link( '%link',  '<em>' . __('Previous', 'bravada') . '</em>' . '<span>%title</span>', true ); ?>
			<?php echo $bravada_prevthumb; ?>
		</div>
		<div class="nav-next">
			<?php next_post_link( '%link',  '<em>' . __('Next', 'bravada') . '</em>' . '<span>%title</span>', true ); ?>
			<?php echo $bravada_nextthumb; ?>
		</div>
	</nav>
<?php } ?>
<?php if ( 2 == cryout_get_option( 'theme_singlenav' ) ) { ?>
	<nav id="nav-fixed">
		<div class="nav-previous"><?php previous_post_link( '%link', '<i class="icon-fixed-nav"></i>', true );  previous_post_link( '%link', '<span>%title</span>', true );  ?></div>
		<div class="nav-next"><?php next_post_link( '%link', '<i class="icon-fixed-nav"></i>', true ); next_post_link( '%link', '<span>%title</span>', true );  ?></div>
	</nav>
<?php } ?>

<?php get_footer();
