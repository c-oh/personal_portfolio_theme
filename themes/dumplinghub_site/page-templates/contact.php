<?php /* Template Name: Contact Page */ ?>

<?php get_header(); ?>


<section class= "contact-content">
    <div class= "contact-hero">
        <h1>Contact</h1>
    </div>
<div class="contact-title">

 <h1> <?php echo CFS()->get( 'title'); ?> </h1>
<h3> <?php echo CFS()->get( 'contact_message'); ?></h3>
</div>

<div class= "contact-info">
<p><i class="fa fa-envelope" aria-hidden="true"><span></i><?php echo CFS()->get( 'email'); ?> </span> </p>
<p><i class="fa fa-phone" aria-hidden="true"><span></i> <?php echo CFS()->get( 'phone'); ?> </span></p>
</div>
<div class= "message-box">
     <?php echo CFS()->get( 'contact_section'); ?>
    
</div>

 </section>

<!-- #primary -->
<?php get_footer(); ?>