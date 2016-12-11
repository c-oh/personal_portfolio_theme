<?php /* Template Name: About Page */ ?>
<?php get_header(); ?>
<button onclick="history.go(-1);" class="back"> <i class="fa fa-arrow-left" aria-hidden="true"></i>  Back</button>
<section class="about-hero">

    <h6>
        <?php the_title();?> </h6>
</section>
<div class="about-section">
    <p>
        <?php echo CFS()->get( 'description'); ?>
    </p>
    <p>
        <?php echo CFS()->get( 'values'); ?>
    </p>
</div>
<!-- #primary -->
<?php get_footer(); ?>