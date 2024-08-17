<?php get_header(); ?>

<section class="single">
  <content-container>
    <h2>Searching by: "<?php the_search_query(); ?>"</h2>
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