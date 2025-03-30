<?php get_header(); ?>



<!-- p-page-header -->
<section class="p-page-header">

  <picture class="p-page-header__image">
    <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/header/img_firstview_gift.jpg">
    <img src="<?php echo get_template_directory_uri(); ?>/img/header/img_firstview_gift_sp.jpg" alt="" decoding="async" width="2560" height="640">
  </picture>

  <div class="p-page-header__title">
    <p class="p-page-header__title-en">GIFT</p>
    <h1 class="p-page-header__title-ja">ギフト・贈り物</h1>
  </div>

</section><!-- /p-page-header -->


<?php get_template_part('/template-parts/breadcrumb'); ?>


<!-- p-products -->
<section class="p-products">
  <div class="p-products__inner c-inner">

    <div class="p-products__entries">

      <?php $args = array(
        'post_type'      => 'products',
        'posts_per_page' => -1,
        'meta_key'       => 'order',        // ACFのフィールド名
        'orderby'        => 'meta_value_num',    // 数値で並べる
        'order'          => 'ASC'                // 昇順（安い順）※ DESCなら高い順
      );

      $products_query = new WP_Query($args); ?>

      <?php if ($products_query->have_posts()): ?>
        <?php while ($products_query->have_posts()): ?>
          <?php $products_query->the_post(); ?>

          <div class="p-products__entry">
            <div class="p-products__entry-image">

              <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail(); ?>
              <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/noimg.png" alt="No Image">
              <?php endif; ?>

            </div>
            <h3 class="p-products__entry-name"><?php the_title(); ?></h3>
            <p class="p-products__entry-price"><?php echo post_custom('price'); ?> yen</p>
            <div class="p-products__entry-button">
              <a href="#">ショップで確認する</a>
            </div>
          </div>

        <?php endwhile; ?>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>


    </div><!-- /p-products__entries -->

  </div><!-- /p-products__inner -->
</section><!-- /p-products -->


<!-- p-products-message -->
<div class="p-products-message">

  <!-- p-products-message__inner -->
  <div class="p-products-message__inner c-inner">

    <div class="p-products-message__box">
      <div class="p-products-message__content">
        <p class="p-products-message__lead">ラッピングは無料でお付けいたします。<br class="u-hidden-sp">お気軽にご相談ください。</p>
        <p class="p-products-message__text">
          テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。</p>
      </div>
      <div class="p-products-message__image"><img src="<?php echo get_template_directory_uri(); ?>/img/products/img_wrapping.jpg" alt="ラッピングサンプル" width="920"
          height="600"></div>
    </div><!-- /p-products-message__box -->

  </div><!-- /p-products-message__inner -->
</div><!-- /p-products-message -->



<?php get_footer(); ?>