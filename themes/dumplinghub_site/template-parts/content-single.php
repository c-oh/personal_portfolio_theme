<?php
/**
 * Template part for displaying single posts.
 *
 * @package dumplinghub-site_Theme
 */
?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
			<?php endif; ?>
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<div class="entry-meta">
				<?php dumplingub_site_posted_on(); ?> /
				<?php dumplingub_site_comment_count(); ?> /
				<?php dumplingub_site_posted_by(); ?>
			</div>
			<!-- .entry-meta -->
		</header>
		<!-- .entry-header -->
		<div class="entry-content">
			<?php the_content(); ?>
			<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
		</div>
		<!-- .entry-content -->
	</article>
	<!-- #post-## -->
	<div class="social-media-button">
		<p class="white-link"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> Like</a></p>
		<p class="white-link"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Tweet</a></p>
		<p class="white-link"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i> Pin</a></p>
	</div>