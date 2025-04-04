<?php get_header(); ?>



<!-- p-page-header -->
<section class="p-page-header">

  <picture class="p-page-header__image">
    <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/header/img_firstview_menu.jpg">
    <img src="<?php echo get_template_directory_uri(); ?>/img/header/img_firstview_menu_sp.jpg" alt="" decoding="async" width="2560" height="640">
  </picture>

  <div class="p-page-header__title">
    <p class="p-page-header__title-en">MENU</p>
    <h1 class="p-page-header__title-ja">メニュー</h1>
  </div>

</section><!-- /p-page-header -->


<?php get_template_part('/template-parts/breadcrumb'); ?>

<?php get_template_part('/template-parts/genre-nav'); ?>

<!-- entries -->
<div class="p-menu-entries">
  <div class="p-menu-entries__inner c-inner">


    <?php $args = array(
      'post_type'      => 'menu',
      'posts_per_page' => -1,
      'meta_key'       => 'order',        // ACFのフィールド名
      'orderby'        => 'meta_value_num',    // 数値で並べる
      'order'          => 'ASC',                // 昇順（安い順）※ DESCなら高い順
      'meta_query'     => array(
        array(
          'key'     => 'is-special-menu', // スペシャルメニューフラグのACFフィールド名
          'value'   => '1',
          'compare' => '!=',            // フラグが true（1）じゃないものを取得 = グランドメニューだけ
        )
      )
    );

    $menu_query = new WP_Query($args); ?>


    <?php if ($menu_query->have_posts()): ?>
      <?php while ($menu_query->have_posts()): ?>
        <?php $menu_query->the_post(); ?>


        <div class="p-menu-entries__item">
          <div class="p-menu-entries__item-image">

            <?php if (has_post_thumbnail()): ?>
              <?php the_post_thumbnail(); ?>
            <?php else: ?>
              <img src="<?php echo get_template_directory_uri(); ?>/img/noimg.png" alt="No Image">
            <?php endif; ?>

          </div>
          <div class="p-menu-entries__item-body">
            <h3 class="p-menu-entries__item-name"><?php the_title(); ?></h3>
            <p class="p-menu-entries__item-price"><?php echo post_custom('price'); ?> yen</p>
          </div><!-- /entry-item-body -->
        </div><!-- /entry-item -->


      <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>


  </div><!-- /p-menu-entries__inner -->
</div><!-- /entries -->



<?php get_footer(); ?>