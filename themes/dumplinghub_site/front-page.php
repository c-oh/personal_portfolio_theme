<?php
/**
 * The main template file.
 * @package dumplinghub-site_Theme
 */
get_header(); ?>
<section class= "front-content"> 
<div class= "title">
   <p> <?php echo CFS()->get( 'small_text'); ?></p>
   <h1 class= "large"><?php echo CFS()->get( 'big_words'); ?> </h1>
   <p> <?php echo CFS()->get( 'description'); ?></p>
  </div>
  <div class= "front-image">
 <img src="assets/images/frontpage.png" alt="Photo of electronic devices" class="front-image">
  </div>
  </section>
 
  <!--footer-->
  <?php get_footer();?>