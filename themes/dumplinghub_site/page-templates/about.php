<?php /* Template Name: About Page */ ?>

<?php get_header(); ?>


<section class= "about-content">
    <div class= "about-hero">
        <h1>About</h1>
    </div>
<div class="text-section">
<p class= "defintion">
 <?php echo CFS()->get( 'defintion'); ?>
 </p>

 <p class= "about_description">
     <?php echo CFS()->get( 'about_description'); ?>
     </p>
</div>

 </section>

<!-- #primary -->
<?php get_footer(); ?>