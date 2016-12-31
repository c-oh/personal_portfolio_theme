<?php /* Template Name: Resume Page */ ?>
<?php get_header(); ?>

<section class= "resume-content">
    <div class= "resume-title">
        <h1><?php echo CFS()->get( 'resume_title'); ?></h1>
    

<form method="get" action="/../assets/files/file.doc">
<button type="submit">Download Resume</button>
</form>
</div>

<div class= "work-experience">
    <?php echo CFS()->get( 'work_experience'); ?>
</div>
<div class= "skills">
    <?php echo CFS()->get( 'skills'); ?>
</div>
<div class= "soft-skills">
    <?php echo CFS()->get( 'soft_skills'); ?>
</div>
<div class= "education">
    <?php echo CFS()->get( 'education'); ?>
</div>
</section>
<!-- #primary -->
<?php get_footer(); ?>