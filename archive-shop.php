<?php get_header(); ?>



<!-- p-page-header -->
<section class="p-page-header">

  <picture class="p-page-header__image">
    <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/header/img_firstview_shop.jpg">
    <img src="<?php echo get_template_directory_uri(); ?>/img/header/img_firstview_shop_sp.jpg" alt="" decoding="async" width="2560" height="640">
  </picture>

  <div class="p-page-header__title">
    <p class="p-page-header__title-en">SHOP</p>
    <h1 class="p-page-header__title-ja">店舗一覧</h1>
  </div>

</section><!-- /p-page-header -->


<?php get_template_part('/template-parts/breadcrumb'); ?>


<!-- p-sister-shop -->
<section class="p-sister-shop">
  <div class="p-sister-shop__inner">

    <div class="p-sister-shop__list">

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
            'compare' => '!=',            // フラグが true（1）じゃないものを取得 = 姉妹店だけ
          )
        )
      );
      $shop_query = new WP_Query($args); ?>

      <?php if ($shop_query->have_posts()): ?>
        <?php while ($shop_query->have_posts()): ?>
          <?php $shop_query->the_post(); ?>

          <div class="c-shop c-shop--sister">

            <h2 class="c-shop__title"><?php the_title(); ?></h2>

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

    </div><!-- p-sister-shop__list -->

  </div><!-- /p-sister-shop__inner -->
</section><!-- /p-sister-shop -->



<?php get_footer(); ?>