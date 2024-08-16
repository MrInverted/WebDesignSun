      <footer class="footer">
        <content-container>
          <div class="footer__content">
            <div class="footer__row">
              <div class="footer__contacts">
                <a href="/">
                  <img src="./images/footer-logo.svg" alt="">
                </a>
                <p>Condimentum adipiscing vel neque dis nam parturient orci at scelerisque neque dis nam parturient.</p>

                <ul>
                  <li>
                    <img src="./images/icon-location.svg" alt="">
                    <span>451 Wall Street, UK, London</span>
                  </li>

                  <li>
                    <img src="./images/icon-phone.svg" alt="">
                    <span>Phone: (064) 332-1233</span>
                  </li>

                  <li>
                    <img src="./images/icon-mail.svg" alt="">
                    <span>Fax: (099) 453-1357</span>
                  </li>
                </ul>
              </div>

              <div class="footer__posts">
                <dl>
                  <dt>RECENT POSTS</dt>
                  <dd>
                    <?php
                    global $post;

                    $myposts = get_posts([
                      'numberposts' => 2,
                      'orderby'     => 'date',
                      'order'       => 'DESC',
                    ]);

                    if ($myposts) {
                      foreach( $myposts as $post ) {
                        setup_postdata( $post );
                    ?>

                      <article class="blog-article-small">
                        <div class="blog-article-small__image">
                          <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                        </div>

                        <div class="blog-article-small__text">
                          <h4><?php the_title(); ?></h4>
                          <excerpt-time><?php the_time('F j, Y'); ?></excerpt-time>
                        </div>

                        <a href="<?php the_permalink(); ?>"></a>
                      </article>

                    <?php
                      }
                    } else {
                      echo "There are no posts...";
                    }

                    wp_reset_postdata(); 
                    ?>
                  </dd>
                </dl>
              </div>

              <?php 
                if ( has_nav_menu('footer_menu_left') ) {
              ?>
                <div class="footer__links">
                  <dl>
                    <dt>OUR STORES</dt>
                    <dd>

                      <?php wp_nav_menu( [
                        'theme_location'  => 'footer_menu_left',
                        'container'       => 'nav',
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => '',
                        'menu_id'         => '',
                        'walker'          => '',
                        'items_wrap'      => '<ul>%3$s</ul>',
                      ] ); ?>

                    </dd>
                  </dl>
                </div>
              <?php    
                }
              ?>

              <?php 
                if ( has_nav_menu('footer_menu_right') ) {
              ?>
                <div class="footer__links">
                  <dl>
                    <dt>USEFUL LINKS</dt>
                    <dd>

                      <?php wp_nav_menu( [
                        'theme_location'  => 'footer_menu_right',
                        'container'       => 'nav',
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => '',
                        'menu_id'         => '',
                        'walker'          => '',
                        'items_wrap'      => '<ul>%3$s</ul>',
                      ] ); ?>

                    </dd>
                  </dl>
                </div>
              <?php    
                }
              ?>

            </div>
          </div>
        </content-container>
      </footer>
    </div>

    <?php wp_footer(); ?>
  </body>

</html>