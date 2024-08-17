<?php
  /*
  Template Name: front-page
  Template Post Type: page
  */
?>

<?php get_header(); ?>

<main>
  <?php get_template_part('sections/intro'); ?>

  <?php get_template_part('sections/featured'); ?>
  
  <?php get_template_part('sections/offer'); ?>
  
  <?php get_template_part('sections/excerpts'); ?>
</main>

<?php get_footer(); ?>