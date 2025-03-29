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


<div class="p-genre-nav">
  <div class="p-genre-nav__inner c-inner">


    <?php
    // 'genre' というカスタムタクソノミーのタームを取得する
    $genre_terms = get_terms('genre', array(
      'hide_empty' => false // 投稿が紐づいていないタームも取得する
    ));

    // 取得したタームが存在するかチェック
    if (!empty($genre_terms) && !is_wp_error($genre_terms)): ?>
      <?php foreach ($genre_terms as $term): ?>
        <?php $queried_object = get_queried_object(); //現在のメインクエリが取得しているオブジェクトをゲット 

        $display_name = get_field('genre-display-name', $term); // ディスプレイ名を取得
        if (!$display_name) {
          $display_name = $term->name; // 未設定ならデフォルト名
        }
        ?>

        <?php if ($term->term_id == $queried_object->term_id): //メインクエリのオブジェクトと一致したらクラスを追加 
        ?>
          <div class="p-genre-nav__link"><a class="is-active" href="<?php echo get_term_link($term, 'genre'); ?>"><?php echo $display_name; ?></a></div>
        <?php else: ?>
          <div class="p-genre-nav__link"><a href="<?php echo get_term_link($term, 'genre'); ?>"><?php echo $display_name; ?></a></div>
        <?php endif; ?>

      <?php endforeach; ?>
    <?php endif; ?>

  </div>
</div><!-- /p-genre-nav -->


<!-- entries -->
<div class="p-menu-entries">
  <div class="p-menu-entries__inner c-inner">


    <?php $args = array(
      'post_type' => 'menu',
      'tax_query' => array(
        array(
          'taxonomy' => 'genre',
          'field'    => 'term_id',
          'terms'    => get_queried_object_id(),
        ),
      ),
      'posts_per_page' => -1, // 全件取得
      'meta_key'       => 'menu-order',        // ACFのフィールド名
      'orderby'        => 'meta_value_num',    // 数値で並べる
      'order'          => 'ASC'                // 昇順（安い順）※ DESCなら高い順
    );

    $menu_query = new WP_Query($args); ?>


    <?php if ($menu_query->have_posts()): ?>
      <?php while ($menu_query->have_posts()): ?>
        <?php $menu_query->the_post(); ?>


        <div href="" class="p-menu-entries__item">
          <div class="p-menu-entries__item-image">

            <?php if (has_post_thumbnail()): ?>
              <?php the_post_thumbnail(); ?>
            <?php else: ?>
              <img src="<?php echo get_template_directory_uri(); ?>/img/noimg.png" alt="No Image">
            <?php endif; ?>

          </div>
          <div class="p-menu-entries__item-body">
            <h3 class="p-menu-entries__item-name"><?php the_title(); ?></h3>
            <p class="p-menu-entries__item-price"><?php echo post_custom('menu-price'); ?> yen</p>
          </div><!-- /entry-item-body -->
        </div><!-- /entry-item -->


      <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>


  </div><!-- /p-menu-entries__inner -->
</div><!-- /entries -->



<?php get_footer(); ?>