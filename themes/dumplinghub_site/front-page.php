<?php
/**
 * The template for displaying all pages.
 *
 * @package dumplinghub-site_Theme
 */
get_header(); ?>


<script src="typed.js"></script>
<script>
  $(function(){
      $(".element").typed({
        strings: ["First sentence.", "Second sentence."],
        typeSpeed: 0
      });
  });
</script>
...

<div class="element"></div>
<?php get_footer();?>