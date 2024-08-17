<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">

    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="keywords" content="Jewelry Store, Fine Jewelry, Engagement Rings, Wedding Bands, Diamond Jewelry, Gold Jewelry, Silver Jewelry, Custom Jewelry, Luxury Watches, Bridal Jewelry, Handcrafted Jewelry, Gemstone Jewelry, Fashion Jewelry, Jewelry Repair, Jewelry Gifts, Earrings, Necklaces, Bracelets, Jewelry Sale, Vintage Jewelry.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <?php wp_head(); ?>
  </head>

  <body>
    <div class="wrapper">
      <header class="header">
        <content-container>
          <div class="header__content">
            <div class="header__row">
              <div class="header__logo">
                <a href="/">
                  <img src="<?php echo cfs_get_option( 'options', 'header_logo' ); ?>" alt="">
                </a>
              </div>

              <div class="header__nav">
                <nav>
                  <ul class="header__nav-list">
                    <li class="header__auth--mobile">
                      <a href="/">Login / Register</a>
                    </li>

                      <?php 
                        $menu_loop = cfs_get_option( 'options', 'header_menu' );
                        if ($menu_loop) {
                          foreach ($menu_loop as $item) {
                      ?>
                        <li class="header__nav-item">
                          <nav-trigger>
                            <span><?php echo $item['title']; ?></span>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/header-chevron-down.svg" alt="">
                          </nav-trigger>

                          <nav-content>
                            <hidden-content>
                              <ul class="header__sub-nav-list">

                                <?php 
                                  $sub_menu_loop = $item['sub_menu'];
                                  if ($sub_menu_loop) {
                                    foreach ($sub_menu_loop as $sub_item) {
                                ?>
                                  <li>
                                    <a href="<?php echo $sub_item['link']; ?>">
                                      <?php echo $sub_item['text']; ?>
                                    </a>
                                  </li>
                                <?php } } ?>

                              </ul>
                            </hidden-content>
                          </nav-content>
                        </li>
                      <?php } } ?>
                      
                  </ul>
                </nav>
              </div>

              <div class="header__right">
                <div class="header__auth">
                  <a href="/">Login / Register</a>
                </div>

                <div class="header__search">
                  <label>
                    <input type="text" name="search">
                    <i class="bi bi-search"></i>
                  </label>
                </div>

                <div class="header__cart">
                  <cart-trolley data-quantity="2">
                    <i class="bi bi-cart"></i>
                  </cart-trolley>

                  <cart-amount>0.00</cart-amount>
                </div>
              </div>

              <div class="header__mobile-burger">
                <i class="bi bi-list"></i>
              </div>
            </div>
          </div>
        </content-container>
      </header>