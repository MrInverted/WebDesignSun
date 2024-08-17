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
            <div class="banner__content">
              <h3>TRISTIQUE<br>JUSTO</h3>
              <p>Started now shortly had for assured hearing expense led juvenile.</p>
              <span>SHOP NOW</span>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/banner.jpg" alt="">
            <a href="/"></a>
          </div>
        </div>

        <div class="featured__slider">
          <div class="swiper">
            <div class="swiper-wrapper">
              <featured-slide class="swiper-slide">
                <article class="product-item">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/item-1.jpg" alt="">
                  <h4>Curabitur sitamet</h4>
                  <span class="category">Jewelry</span>
                  <span class="price">169.00</span>
                  <a href="/"></a>
                </article>
              </featured-slide>

              <featured-slide class="swiper-slide">
                <article class="product-item">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/item-2.jpg" alt="">
                  <h4>Porttitor accumsan</h4>
                  <span class="category">Jewelry</span>
                  <span class="price">269.00</span>
                  <a href="/"></a>
                </article>
              </featured-slide>

              <featured-slide class="swiper-slide">
                <article class="product-item">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/item-3.jpg" alt="">
                  <h4>Sollicitudin molestie</h4>
                  <span class="category">Jewelry</span>
                  <span class="price">169.00</span>
                  <a href="/"></a>
                </article>
              </featured-slide>

              <featured-slide class="swiper-slide">
                <article class="product-item">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/item-4.jpg" alt="">
                  <h4>Curabitur sitamet</h4>
                  <span class="category">Jewelry</span>
                  <span class="price">129.00</span>
                  <a href="/"></a>
                </article>
              </featured-slide>
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