<section class="intro">
  <content-container>
    <div class="intro__content">
      <div class="intro__row">
        <div class="intro__text">
          <hgroup>
            <p><em><?php echo CFS() -> get('intro_sup_title'); ?></em></p>
            <h1><?php echo CFS() -> get('intro_title'); ?></h1>
          </hgroup>
          <p><?php echo CFS() -> get('intro_sub_title'); ?></p>
          
          <div class="intro__buttons">
            <a href="<?php echo CFS() -> get('intro_white_button_link'); ?>" class="btn btn-white">
              <?php echo CFS() -> get('intro_white_button_text'); ?>
            </a>

            <a href="<?php echo CFS() -> get('intro_outline_button_link'); ?>" class="btn btn-outline">
              <?php echo CFS() -> get('intro_outline_button_text'); ?>
            </a>
          </div>
        </div>

        <div class="intro__image">
          <img src="<?php echo CFS() -> get('intro_image'); ?>" alt="">
        </div>
      </div>
    </div>
  </content-container>
</section>