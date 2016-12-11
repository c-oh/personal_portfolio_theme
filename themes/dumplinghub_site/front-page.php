<?php
/**
 * The template for displaying all pages.
 *
 * @package dumplinghub-site_Theme
 */
get_header(); ?>
<!--typesection-->
  <div class="text">
    <h3 class="typing-animation"> I am <span id="typewrite"> </span></h3>
  </div>

<!--show casing work-->
<section class="taxonomy-loop">
        <h2> Projects </h2>
        <?php 
		$taxonomies  = get_terms( array(
			'taxonomy' => 'project_type',
			'hide_empty' => true,
			) );
			foreach ( $taxonomies as $term ):?>
        <div class="taxonomy-loop-wrapper">
            <?php $url = get_term_link($term->slug, 'project_type') ?>
            <!--<img src="<?php echo get_template_directory_uri() ?>/images/product-type-icons/<?php echo $term->slug?>.svg" alt= "product-type-icons">-->
            <p>
                <?php echo $term->description ?> </p>
            <a href="<?php echo $url ?>" class='btn'>
                <?php echo $term->name ?></a>
        </div>
        <?php endforeach ?>
        </section>

  <!--Journal section-->
  <section class="journal">
    <h2>journal</h2>
    <div class="journal-container">
      <?php
   $args = array( 'numberposts' => '3', 'order' => 'DESC','post_status' => 'publish'  );
   $recent_posts = get_posts( $args ); // returns an array of posts ?>
        <?php foreach ( $recent_posts as $post ) : setup_postdata( $post ); ?>
        <div class="post-list-info">
          <?php the_post_thumbnail('category-thumb'); ?>
          <div class="info-area">
            <?php the_date(); ?>/
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class='title'>
              <?php the_title();?> </a>
            <a href="<?php the_permalink(); ?>" class='read-entry-btn'> Read More</a>
          </div>
        </div>
        <?php endforeach; wp_reset_postdata(); ?>
    </div>
  </section>

  <!--footer-->
  <?php get_footer();?>