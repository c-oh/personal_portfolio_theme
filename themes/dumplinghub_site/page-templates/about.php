<?php /* Template Name: About Page */ ?>

<?php get_header(); ?>


<section class= "about-content">
<div class="text-section">
<p class= "defintion">
 <?php echo CFS()->get( 'defintion'); ?>
 </p>

 <p class= "about_description">
     <?php echo CFS()->get( 'about_description'); ?>
     </p>
</div>
<div class= "about-picture">
<h1>picture of a map</h1>
</div>
 </section>

<!-- #primary -->
<?php get_footer(); ?>