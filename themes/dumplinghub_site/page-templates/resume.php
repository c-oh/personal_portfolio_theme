<?php /* Template Name: Resume Page */ ?>
<?php get_header(); ?>
<section class="resume-hero">
    <h6> resume </h6>
</section>
<section class="skill-section">
    <h2>
        <?php echo CFS()->get( 'titles'); ?>
    </h2>
    <h3>
        <?php echo CFS()->get( 'level'); ?> </h3>
    <p>
        <?php echo CFS()->get( 'skills'); ?>
    </p>
    <h3>
        <?php echo CFS()->get( 'level1'); ?> </h3>
    <p>
        <?php echo CFS()->get( 'skills1'); ?>
    </p>
</section>

<!--Work experience section-->
<section class="work-experience">
    <div class= "work-title">
    <h2>
        <?php echo CFS()->get( 'work_experience'); ?>
    </h2>
    </div>

    <div class= "resume-container">
    <h3>
        <?php echo CFS()->get( 'position'); ?>
    </h3>
    <h4>
        <?php echo CFS()->get( 'location_time'); ?>
    </h4>
    <p>
        <?php echo CFS()->get( 'description'); ?>
    </p>
    </div>

     <div class= "resume-container">
    <h3>
        <?php echo CFS()->get( 'position1'); ?>
    </h3>
    <h4>
        <?php echo CFS()->get( 'location_time1'); ?>
    </h4>
    <p>
        <?php echo CFS()->get( 'description1'); ?>
    </p>
    </div>

     <div class= "resume-container">
    <h3>
        <?php echo CFS()->get( 'position2'); ?>
    </h3>
    <h4>
        <?php echo CFS()->get( 'location_time2'); ?>
    </h4>
    <p>
        <?php echo CFS()->get( 'description2'); ?>
    </p>
    </div>

</section>

<!---education -->

<section class= "education">
<div class= "education-title">
    <h2>
        <?php echo CFS()->get( 'education'); ?>
    </h2>
    </div>

<div class= "resume-container">
    <h2>
        <?php echo CFS()->get( 'major'); ?>
    </h2>
    <h4>
        <?php echo CFS()->get( 'where_when'); ?>
    </h4>
   
</div>

<div class= "resume-container">
    <h2>
        <?php echo CFS()->get( 'major1'); ?>
    </h2>
    <h4>
        <?php echo CFS()->get( 'where_when1'); ?>
    </h4>
   
</div>

</section>
<!-- #primary -->
<?php get_footer(); ?>