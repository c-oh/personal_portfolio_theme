<?php /* Template Name: Contact Page */ ?>

<?php get_header(); ?>

<div class= "contact-hero">
        <h1>Contact</h1>
    </div>

<section class= "contact-content">
<div class= "contact-container">   
<div class="contact-title">

 <h1> <?php echo CFS()->get( 'title'); ?> </h1>
<h3> <?php echo CFS()->get( 'contact_message'); ?></h3>
</div>

<div class= "contact-info">
<p><span class= "contact-info-title">Email</span> <i class="fa fa-envelope" aria-hidden="true"></i><?php echo CFS()->get( 'email'); ?> </p>
<p><span class= "contact-info-title">Phone</span> <i class="fa fa-phone" aria-hidden="true"></i> <?php echo CFS()->get( 'phone'); ?> </p>
</div>
</div> 

<div class= "message-box">
     <?php echo CFS()->get( 'contact_section'); ?>
    
</div>

 </section>

<!-- #primary -->
<?php get_footer(); ?>