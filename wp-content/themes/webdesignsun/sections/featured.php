<section class="featured">
  <content-container>
    <div class="featured__content">
      <hgroup class="title">
        <p><em><?php echo CFS() -> get('featured_sup_title'); ?></em></p>
        <h2><?php echo CFS() -> get('featured_title'); ?></h2>
        <p><?php echo CFS() -> get('featured_sub_title'); ?></p>
      </hgroup>

      <div class="featured__row">
        <div class="featured__banner">
          <div class="banner">

          <?php 
              $banner = CFS() -> get('featured_banner');

              if ($banner) {
                $the_product = wc_get_product( $banner[0] );

                $image_url = wp_get_attachment_url($the_product->get_image_id());
                $title = $the_product->get_name();
                $product_excerpt = $the_product->get_short_description();
                $product_link = $the_product->get_permalink();
            ?>
              <div class="banner__content">
                <h3><?php echo $title; ?></h3>
                <p><?php echo $product_excerpt; ?></p>
                <span>SHOP NOW</span>
              </div>
              <img src="<?php echo $image_url; ?>" alt="">
              <a href="<?php echo $product_link; ?>"></a>
            <?php 
              } 
            ?>

          </div>
        </div>



        <div class="featured__slider">
          <div class="swiper">
            <div class="swiper-wrapper">

            <?php 
              $products = CFS() -> get('featured_products');

              if ($products) {
                foreach ($products as $id) {
                  $the_product = wc_get_product( $id );

                  $image_url = wp_get_attachment_url($the_product->get_image_id());
                  $title = $the_product->get_name();
                  $categories = wp_get_post_terms($id, 'product_cat')[0];
                  $price = $the_product->get_price();
                  $product_link = $the_product->get_permalink();
            ?>
              <featured-slide class="swiper-slide">
                <article class="product-item">
                  <img src="<?php echo $image_url; ?>" alt="">
                  <h4><?php echo $title; ?></h4>
                  <span class="category"><?php echo $categories->name; ?></span>
                  <span class="price"><?php echo $price; ?></span>
                  <a href="<?php echo $product_link; ?>"></a>
                </article>
              </featured-slide>
            <?php 
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
    </div>
  </content-container>
</section>