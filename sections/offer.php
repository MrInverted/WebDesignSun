<section class="offer">
  <content-container>
    <div class="offer__content">
      <div class="offer__row">
        <?php 
          $banner = CFS() -> get('offer_banner');

          if ($banner) {
            $the_product = wc_get_product( $banner[0] );

            $image_url = wp_get_attachment_url($the_product->get_image_id());
            $title = $the_product->get_name();
            $product_excerpt = $the_product->get_short_description();
            $product_link = $the_product->get_permalink();
        ?>
          <div class="offer__special">
            <div class="offer__article-image">
              <img src="<?php echo $image_url; ?>" alt="">
            </div>

            <div class="offer__article-text">
              <em>Special offer</em>
              <h3><?php echo $title; ?></h3>
              <p><?php echo $product_excerpt; ?></p>
              <a class="btn btn-additional" href="<?php echo $product_link; ?>">view more</a>
            </div>
          </div>
        <?php 
          } 
        ?>

        <div class="offer__column">
          <dl>
            <dt>FEATURED PRODUCTS</dt>
            <dd>
              <?php 
                $products = CFS() -> get('offer_featured_products');

                if ($products) {
                  foreach ($products as $id) {
                    $the_product = wc_get_product( $id );

                    $image_url = wp_get_attachment_url($the_product->get_image_id());
                    $title = $the_product->get_name();
                    $price = $the_product->get_price();
                    $product_link = $the_product->get_permalink();
              ?>
                <article class="product-item-small">
                  <div class="product-item-small__image">
                    <img src="<?php echo $image_url; ?>" alt="">
                  </div>

                  <div class="product-item-small__text">
                    <h4><?php echo $title; ?></h4>
                    <span class="price"><?php echo $price; ?></span>
                  </div>
                  <a href="<?php echo $product_link; ?>"></a>
                </article>
              <?php 
                } } 
              ?>
            </dd>
          </dl>
        </div>

        <div class="offer__column">
          <dl>
            <dt>NEW PRODUCTS</dt>
            <dd>
              <?php 
                $products = CFS() -> get('offer_new_products');

                if ($products) {
                  foreach ($products as $id) {
                    $the_product = wc_get_product( $id );

                    $image_url = wp_get_attachment_url($the_product->get_image_id());
                    $title = $the_product->get_name();
                    $price = $the_product->get_price();
                    $product_link = $the_product->get_permalink();
              ?>
                <article class="product-item-small">
                  <div class="product-item-small__image">
                    <img src="<?php echo $image_url; ?>" alt="">
                  </div>
                  
                  <div class="product-item-small__text">
                    <h4><?php echo $title; ?></h4>
                    <span class="price"><?php echo $price; ?></span>
                  </div>
                  <a href="<?php echo $product_link; ?>"></a>
                </article>
              <?php 
                } } 
              ?>
            </dd>
          </dl>
        </div>

      </div>
    </div>
  </content-container>
</section>