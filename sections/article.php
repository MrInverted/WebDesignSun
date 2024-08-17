<article class="blog-article">
  <img src="<?php the_post_thumbnail_url(); ?>" alt="">

  <?php 
  $category = get_the_category();
  if ($category) {
    echo '<article-category>' . $category[0]->name . '</article-category>';
  }
  ?>

  <?php the_title('<h3>', '</h3>'); ?>

  <cite>
    <span>Posted by</span>
    <?php
    $author_id = get_the_author_meta('ID'); 
    $avatar_url = get_avatar_url($author_id); 
    echo '<img src="' . $avatar_url . '" alt="">';
    ?>
    <span><?php the_author(); ?></span>
  </cite>

  <?php the_excerpt(); ?>

  <excerpt-time>
    <?php the_time('j'); ?>
    <br>
    <?php the_time('M'); ?>
  </excerpt-time>
  
  <a href="<?php the_permalink(); ?>">Continue reading</a>
</article>