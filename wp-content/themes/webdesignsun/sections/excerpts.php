<section class="excerpts">
  <content-container>
    <div class="excerpts__content">
      <hgroup class="title">
        <p><em><?php echo CFS() -> get('blog_sup_title'); ?></em></p>
        <h2><?php echo CFS() -> get('blog_title'); ?></h2>
        <p><?php echo CFS() -> get('blog_sub_title'); ?></p>
      </hgroup>

      <div class="excerpts__slider">
        <div class="swiper">
          <div class="swiper-wrapper">

          <?php 
            $posts = CFS() -> get('blog_posts');

            if ($posts) {
              foreach ($posts as $post_id) {
                $the_post = get_post( $post_id );
                setup_postdata( $the_post );
                global $post;
                $post = $the_post;
          ?>
            <excerpts-slide class="swiper-slide">
              <?php get_template_part('sections/article'); ?>
            </excerpts-slide>
          <?php 
            wp_reset_postdata();
            } } 
          ?>

          </div>

          <div class="swiper-pagination"></div>
          <div class="swiper-button-prev">
            <img src="<?php echo get_template_directory_uri(); ?>/images/slider-chevron-right.svg" alt="">
          </div>
          <div class="swiper-button-next">
            <img src="<?php echo get_template_directory_uri(); ?>/images/slider-chevron-right.svg" alt="">
          </div>
        </div>
      </div>
    </div>
  </content-container>
</section>