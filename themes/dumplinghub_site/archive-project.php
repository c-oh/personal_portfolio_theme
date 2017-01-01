<?php
/**
 * The template for displaying archive project pages.
 *
 * @package dumplinghub_site_Theme
 */
get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php if ( have_posts() ) : ?>
			<!-- .page-header -->
			<div class="boxes" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php while ( have_posts() ) : the_post(); ?>
				<div class="project-post">
					<div class="project-info">
						<?php the_title('<p class="project-title">'); ?>
						<div class="project-button">
						<a href="<?php the_permalink() ; ?>" class="button">Learn More</a>
					</div>
					</div>
					<div class="project-thumbnail">
						<a href="<?php the_permalink() ; ?> ">
							<?php the_post_thumbnail( 'large' ); ?>
						</a>
					</div>
				</div>
				<?php endwhile ?>
			</div>
	</div>
	<!-- #post-## -->
	</div>
	<?php else : ?>
	<?php get_template_part( 'template-parts/content', 'none' ); ?>
	<?php endif; ?>
	</main>
	<!-- #main -->
	</div>
	<!-- #primary -->
	<?php get_footer(); ?>