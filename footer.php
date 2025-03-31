<!-- p-access -->
<section class="p-access">

  <!-- p-access__container -->
  <div class="p-access__container">

    <!-- p-access__inner -->
    <div class="p-access__inner c-inner">
      <div class="p-access__head c-head">
        <p class="p-access__head-en c-head-en">ACCESS</p>
        <h2 class="p-access__head-ja c-head-ja">アクセス</h2>
      </div>


      <?php $args = array(
        'post_type'      => 'shop',
        'posts_per_page' => -1,
        'meta_key'       => 'order',        // ACFのフィールド名
        'orderby'        => 'meta_value_num',    // 数値で並べる
        'order'          => 'ASC',                // 昇順（安い順）※ DESCなら高い順
        'meta_query'     => array(
          array(
            'key'     => 'is_main_store', // 本店フラグのACFフィールド名
            'value'   => '1',
            'compare' => '==',            // フラグが true（1）のものを取得 = 本店だけ
          )
        )
      );
      $shop_query = new WP_Query($args); ?>

      <?php if ($shop_query->have_posts()): ?>
        <?php while ($shop_query->have_posts()): ?>
          <?php $shop_query->the_post(); ?>

          <div class="c-shop">
            <div class="c-shop__map"><?php echo post_custom('google-map'); ?></div>
            <!-- c-shop__info -->
            <div class="c-shop__info">
              <dl class="c-shop__definition">
                <dt class="c-shop__term">住所</dt>
                <dd class="c-shop__description"><?php echo nl2br(post_custom('address')); ?></dd>
              </dl>
              <dl class="c-shop__definition">
                <dt class="c-shop__term">TEL</dt>
                <dd class="c-shop__description"><?php echo post_custom('tel'); ?></dd>
              </dl>
              <dl class="c-shop__definition">
                <dt class="c-shop__term">Mail</dt>
                <dd class="c-shop__description"><?php echo post_custom('mail'); ?></dd>
              </dl>
              <dl class="c-shop__definition">
                <dt class="c-shop__term">営業時間</dt>
                <dd class="c-shop__description"><?php echo nl2br(post_custom('opening-hours')); ?></dd>
              </dl>
              <dl class="c-shop__definition">
                <dt class="c-shop__term">定休日</dt>
                <dd class="c-shop__description"><?php echo post_custom('closed-day'); ?></dd>
              </dl>
              <dl class="c-shop__definition">
                <dt class="c-shop__term">座席</dt>
                <dd class="c-shop__description"><?php echo post_custom('seats'); ?></dd>
              </dl>
            </div><!-- /c-shop__info -->
          </div>

        <?php endwhile; ?>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>

      <div class="p-access__balloon-image"><img src="<?php echo get_template_directory_uri(); ?>/img/access/img_balloon-access.png" alt="吉祥寺駅から徒歩５分！"
          width="466" height="401"></div>
      <div class="p-access__bread-image"><img src="<?php echo get_template_directory_uri(); ?>/img/access/bg_bread.png" alt="" width="466" height="401"></div>

    </div><!-- /p-access__inner -->
  </div><!-- p-access__container -->
</section><!-- /p-access -->


<div id="js-pagetop" class="p-pagetop">
  <a href="#" class="p-pagetop__button u-hover-opacity"><img src="<?php echo get_template_directory_uri(); ?>/img/icon_arrow-top.png" alt="" width="88"
      height="88"></a>
</div>


<!-- p-footer -->
<footer class="p-footer">

  <div class="p-footer__icons">
    <div class="p-footer__icon">
      <a target="_blank" class="u-hover-opacity" href="https://x.com/home"><img src="<?php echo get_template_directory_uri(); ?>/img/Icon-twitter-light.png"
          alt="twitter icon" width="65" height="54"></a>
    </div>
    <div class="p-footer__icon">
      <a target="_blank" class="u-hover-opacity" href="https://www.instagram.com/"><img
          src="<?php echo get_template_directory_uri(); ?>/img/Icon-instagram-light.png" alt="instagram icon" width="61" height="60"></a>
    </div>
    <div class="p-footer__icon">
      <a target="_blank" class="u-hover-opacity" href="https://www.youtube.com/"><img
          src="<?php echo get_template_directory_uri(); ?>/img/Icon-youtube-light.png" alt="youtube icon" width="71" height="50"></a>
    </div>
  </div>
  <small class="p-footer__copyright">©︎2000-2021 open cafe. All Rights Reserved.</small>

  <picture class="p-footer__coffee-image">
    <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/footer/bg_coffee-beans3.png">
    <img src="<?php echo get_template_directory_uri(); ?>/img/footer/bg_coffee-beans3-sp.png" alt="" width="682" height="576">
  </picture>

</footer><!-- /footer -->


<?php wp_footer() ?>

</body>

</html>