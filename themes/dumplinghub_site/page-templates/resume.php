<?php /* Template Name: Resume Page */ ?>
<?php get_header(); ?>

<section class= "resume-top">
    <div class= "resume-title">
        <h1><?php echo CFS()->get( 'resume_title'); ?></h1>
    

<form method="get" action=".../assets/files/Holly_resume.pdf">
<button type="submit">Download Resume</button>
</form>
</div>
</section>

<section class= "resume-body">
<div class= "work-experience">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/screwdriver.png'; ?>"  alt="Icon of gear" />
  <div> 
    <h1> <?php echo CFS()->get( 'work_experience_header'); ?> </h1>
    <?php echo CFS()->get( 'work_experience'); ?>
</div>
</div>
<div class= "skills">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/pen.png'; ?>"  alt="Icon of pen" />
  <div>
   <h1><?php echo CFS()->get( 'skills_header'); ?></h1>
    <p> <?php echo CFS()->get( 'skills'); ?></p>
    </div>
</div>
<div class= "soft-skills">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/paint.png'; ?>"  alt="Icon of paint board" />
  <div> 
   <h1><?php echo CFS()->get( 'soft_skills_header'); ?></h1>
    <p><?php echo CFS()->get( 'soft_skills'); ?></p>
</div>
</div>
<div class= "education">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/hat.png'; ?>"  alt="Icon of hat" />
  <div>
  <h1> <?php echo CFS()->get( 'education_header'); ?> </h1>
   <p> <?php echo CFS()->get( 'education'); ?> </p>
</div>
</div>
</section>
<!-- #primary -->
<?php get_footer(); ?>