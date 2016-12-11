<?php /* Template Name: About Page */ ?>
<?php get_header(); ?>
<button onclick="history.go(-1);" class="back"> <i class="fa fa-arrow-left" aria-hidden="true"></i>  Back</button>
<section class="about-hero">

    <h6>  <?php the_title();?> </h6>
</section>

<section class="intro">
  <div class="container">
    <h1>Vertical Timeline &darr;</h1>
  </div>
</section>

<section class="timeline">
  <ul>
    <li>
      <div>
        <time> <?php echo CFS()->get( '1'); ?> </time> <?php echo CFS()->get( 'description1'); ?>
      </div>
    </li>
    <li>
      <div>
        <time><?php echo CFS()->get( '2'); ?> </time> <?php echo CFS()->get( 'description2'); ?>
      </div>
    </li>
    <li>
      <div>
        <time><?php echo CFS()->get( '3'); ?> </time> <?php echo CFS()->get( 'description3'); ?>
      </div>
    </li>
    <li>
      <div>
        <time><?php echo CFS()->get( '4'); ?> </time> <?php echo CFS()->get( 'description4'); ?>
      </div>
    </li>
    <li>
      <div>
        <time><?php echo CFS()->get( '5'); ?> </time> <?php echo CFS()->get( 'description5'); ?>
      </div>
    </li>
    <li>
      <div>
        <time><?php echo CFS()->get( '6'); ?> </time> <?php echo CFS()->get( 'description6'); ?>
      </div>
    </li>
    <li>
      <div>
        <time><?php echo CFS()->get( '7'); ?> </time> <?php echo CFS()->get( 'description7'); ?>
    </li>
    <li>
      <div>
        <time><?php echo CFS()->get( '8'); ?> </time> <?php echo CFS()->get( 'description8'); ?>
    </li>
    <li>
      <div>
        <time><?php echo CFS()->get( '9'); ?> </time> <?php echo CFS()->get( 'description9'); ?>
    </li>
    <li>
      <div>
        <time><?php echo CFS()->get( '10'); ?> </time> <?php echo CFS()->get( 'description10'); ?>
    </li>
  </ul>
</section>



<!-- #primary -->
<?php get_footer(); ?>