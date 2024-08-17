<?php get_header(); ?>

<section>
  <content-container>
    <?php the_title( '<h1>', '</h1>' )?>
    <?php the_content(); ?>
  </content-container>
</section>

<?php get_footer(); ?>