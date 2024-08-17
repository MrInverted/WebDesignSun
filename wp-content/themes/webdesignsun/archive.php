<?php get_header(); ?>

<section>
  <content-container>
    <div class="grid--three">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php get_template_part('sections/article'); ?>

      <?php endwhile; else: ?>
        Nothing is found...
      <?php endif; ?>

    </div>
  </content-container>
</section>

<?php get_footer(); ?>