<?php get_header(); ?>



<!-- p-fv -->
<section class="p-fv">

  <!-- p-fv__nav -->
  <div class="p-fv__menu">
    <h1 class="p-fv__menu-logo">
      <a class="u-hover-opacity" href="#">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo-dark.png" alt="Open Cafe - dish & coffee -" width="332" height="186">
      </a>
    </h1>
    <nav class="p-fv__menu-nav">
      <ul class="p-fv__menu-list">
        <li class="p-fv__menu-item">
          <a class="p-fv__menu-link u-hover-opacity" href="#"><span class="p-fv__menu-text-en">TOP</span><span
              class="p-fv__menu-text-ja">トップ</span></a>
        </li>
        <li class="p-fv__menu-item">
          <a class="p-fv__menu-link u-hover-opacity" href="#concept"><span
              class="p-fv__menu-text-en">CONCEPT</span><span class="p-fv__menu-text-ja">コンセプト</span></a>
        </li>
        <li class="p-fv__menu-item">
          <a class="p-fv__menu-link u-hover-opacity" href="#"><span class="p-fv__menu-text-en">MENU</span><span
              class="p-fv__menu-text-ja">メニュー</span></a>
        </li>
        <li class="p-fv__menu-item">
          <a class="p-fv__menu-link u-hover-opacity" href="#"><span class="p-fv__menu-text-en">NEWS</span><span
              class="p-fv__menu-text-ja">お知らせ</span></a>
        </li>
        <li class="p-fv__menu-item">
          <a class="p-fv__menu-link u-hover-opacity" href="#"><span class="p-fv__menu-text-en">SHOP</span><span
              class="p-fv__menu-text-ja">店舗情報</span></a>
        </li>
        <li class="p-fv__menu-item">
          <a class="p-fv__menu-link u-hover-opacity" href="#"><span class="p-fv__menu-text-en">GIFT</span><span
              class="p-fv__menu-text-ja">ギフト・贈り物</span></a>
        </li>
        <li class="p-fv__menu-item">
          <a class="p-fv__menu-link u-hover-opacity" href="#"><span class="p-fv__menu-text-en">CONTACT</span><span
              class="p-fv__menu-text-ja">お問い合わせ</span></a>
        </li>
      </ul>
    </nav>
    <ul class="p-fv__menu-sns-icons">
      <li class="p-fv__menu-sns-icon">
        <a class="u-hover-opacity" href="https://x.com/home" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/Icon-twitter-dark.png"
            alt="twitter icon" width="65" height="54"></a>
      </li>
      <li class="p-fv__menu-sns-icon">
        <a class="u-hover-opacity" href="https://www.instagram.com/" target="_blank"><img
            src="<?php echo get_template_directory_uri(); ?>/img/Icon-instagram-dark.png" alt="instagram icon" width="61" height="60"></a>
      </li>
      <li class="p-fv__menu-sns-icon">
        <a class="u-hover-opacity" href="https://www.youtube.com/" target="_blank"><img
            src="<?php echo get_template_directory_uri(); ?>/img/Icon-youtube-dark.png" alt="youtube icon" width="71" height="50"></a>
      </li>
    </ul>

  </div><!-- /p-fv__menu -->

  <div class="p-fv__content">
    <!-- p-fv__slider -->
    <div class="p-fv__slider">
      <!-- Slider main container -->
      <div class="swiper p-swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper p-swiper__wrapper">
          <!-- Slides -->
          <div class="swiper-slide p-swiper__slide">
            <picture class="p-swiper__image">
              <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/fv/img_mainvisual1.jpg" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/fv/img_mainvisual1_sp.jpg" alt="" width="2160" height="1470" />
            </picture>
          </div>
          <div class="swiper-slide p-swiper__slide">
            <picture class="p-swiper__image">
              <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/fv/img_mainvisual2.jpg" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/fv/img_mainvisual2_sp.jpg" alt="" width="2160" height="1470" />
            </picture>
          </div>
          <div class="swiper-slide p-swiper__slide">
            <picture class="p-swiper__image">
              <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/fv/img_mainvisual3.jpg" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/fv/img_mainvisual3_sp.jpg" alt="" width="2160" height="1470" />
            </picture>
          </div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination p-swiper__pagination"></div>
      </div>
    </div><!-- /p-fv__slider -->

    <h1 class="p-fv__logo">
      <a class="u-hover-opacity" href="#">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo-light.png" alt="Open Cafe - dish & coffee -" width="241" height="127">
      </a>
    </h1>
    <p class="p-fv__lead"><span class="p-fv__lead-span">パスタとコーヒーが<br class="u-hidden-pc">とってもおいしい、</span><br
        class="u-hidden-pc"><span class="p-fv__lead-span">ほっと落ち着くのんびり空間。</span></p>

    <!-- p-fv__pickup -->
    <div class="p-fv__pickup">
      <span class="p-fv__pickup-label">カテゴリ</span>
      <picture class="p-fv__pickup-popup">
        <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/img_balloon-pickup.png" />
        <img src="<?php echo get_template_directory_uri(); ?>/img/img_balloon-pickup-sp.png" alt="ピックアップニュース" width="336" height="218" />
      </picture>
      <a href="#" class="p-fv__pickup-box u-hover-opacity">
        <div class="p-fv__pickup-image">
          <div class="p-fv__pickup-image-box">
            <img src="<?php echo get_template_directory_uri(); ?>/img/news/img_news1.png" alt="" width="1020" height="638">
          </div>
        </div>
        <div class="p-fv__pickup-content">
          <time class="p-fv__pickup-content-date" datetime="2021-01-01">2021.01.01</time>
          <p class="p-fv__pickup-content-text">ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、あらゆる空間が誕生。</p>
        </div>
      </a>
    </div><!-- p-fv__pickup -->

  </div><!-- /p-fv__content -->

</section><!-- /p-fv -->

<!-- p-concept -->
<section id="concept" class="p-concept">

  <!-- p-concept__inner -->
  <div class="p-concept__inner">

    <!-- p-concept__content -->
    <div class="p-concept__content">
      <div class="p-concept__head c-head">
        <p class="c-head-en">CONCEPT</p>
        <h2 class="c-head-ja">当店のこだわり</h2>
      </div>
      <p class="p-concept__lead">最高のコーヒーと、<br>時の流れを味わうことができる<br>手作りカフェ</p>
      <p class="p-concept__description">
        ダミー_国内外から賞賛を<br>受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。<br>ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。<br><br>ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。
      </p>
      <div class="p-concept__button"><a class="c-button" href="">詳しくはこちら</a></div>
    </div><!-- /p-concept__content -->

    <!-- p-concept__image -->
    <picture class="p-concept__image">
      <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/concept/img_concept.jpg" />
      <img src="<?php echo get_template_directory_uri(); ?>/img/concept/img_concept-sp.jpg" alt="" width="1200" height="1528" />
    </picture><!-- /p-concept__image -->

    <div class="p-concept__beans-image">
      <img src="<?php echo get_template_directory_uri(); ?>/img/concept/bg_coffee-beans.png" alt="" width="592" height="530">
    </div>
    <div class="p-concept__leaves-image">
      <img src="<?php echo get_template_directory_uri(); ?>/img/concept/bg_coffee-leaves.png" alt="" width="402" height="456">
    </div>

  </div><!-- /p-concept__inner -->

</section><!-- /p-concept -->

<!-- p-special -->
<section class="p-special">

  <!-- p-special__container -->
  <div class="p-special__container">

    <!-- p-special__inner -->
    <div class="p-special__inner">

      <div class="p-special__head c-head">
        <p class="p-special__head-en c-head-en">SPECIAL LUNCH SET</p>
        <h2 class="p-special__head-ja c-head-ja">今月のスペシャルランチセット</h2>
      </div>

      <!-- p-special__menu-box -->
      <div class="p-special__menu-box">

        <p class="p-special__menu-lead">お好きなパスタをお選びください</p>

        <div class="p-special__menu-balloon"><img src="<?php echo get_template_directory_uri(); ?>/img/special/img_balloon-special-lunch-set.png"
            alt="パスタ、サラダ、ドリンクのお得なセット" width="617" height="322"></div>

        <!-- p-special__list -->
        <ul class="p-special__menu-list">
          <li class="p-special__menu-item">
            <div class="p-special__menu-image"><img src="<?php echo get_template_directory_uri(); ?>/img/special/img_special_pasta1.jpg" alt="" width="520"
                height="520"></div>
            <h3 class="p-special__menu-name"><span class="p-special__menu-name-label">A</span><span
                class="p-special__menu-name-text">テキストテキストの○○風パスタ</span></h3>
          </li>
          <li class="p-special__menu-item">
            <div class="p-special__menu-image"><img src="<?php echo get_template_directory_uri(); ?>/img/special/img_special_pasta2.jpg" alt="" width="520"
                height="520"></div>
            <h3 class="p-special__menu-name"><span class="p-special__menu-name-label">B</span><span
                class="p-special__menu-name-text">テキストテキストの○○風パスタ</span></h3>
          </li>
          <li class="p-special__menu-item">
            <div class="p-special__menu-image"><img src="<?php echo get_template_directory_uri(); ?>/img/special/img_special_pasta3.jpg" alt="" width="520"
                height="520"></div>
            <h3 class="p-special__menu-name"><span class="p-special__menu-name-label">C</span><span
                class="p-special__menu-name-text">テキストテキストの○○風パスタ</span></h3>
          </li>
          <li class="p-special__menu-item">
            <div class="p-special__menu-image"><img src="<?php echo get_template_directory_uri(); ?>/img/special/img_special_pasta4.jpg" alt="" width="520"
                height="520"></div>
            <h3 class="p-special__menu-name"><span class="p-special__menu-name-label">D</span><span
                class="p-special__menu-name-text">テキストテキストの○○風パスタ</span></h3>
          </li>
        </ul><!-- p-special__list -->

        <!-- p-special__set-box -->
        <div class="p-special__set-box">

          <picture class="p-special__set-items">
            <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/special/img_lunch-detail.png" />
            <img src="<?php echo get_template_directory_uri(); ?>/img/special/img_lunch-detail-sp.png" alt="パスタ＋サラダ＋ドリンク" width="1400" height="380">
          </picture>

          <div class="p-special__set-content">
            <p class="p-special__set-lead">スペシャルランチセット<br>【選べる3品】</p>
            <p class="p-special__set-price">1,280 yen</p>
            <p class="p-special__set-time">(11:00 AM〜14:00 PMまで)</p>
          </div>
        </div><!-- /p-special__set-box -->

      </div><!-- /p-special__menu-box -->

    </div><!-- /p-special__inner -->

  </div><!-- /p-special__container -->

</section><!-- /p-special -->

<!-- p-menu -->
<section class="p-menu">

  <!-- p-menu__inner -->
  <div class="p-menu__inner c-inner">

    <div class="p-menu__head c-head">
      <p class="p-menu__head-en c-head-en">GRAND MENU</p>
      <h2 class="p-menu__head-ja c-head-ja">グランドメニュー</h2>
    </div>


    <?php
    $terms = get_terms(array(
      'taxonomy'   => 'genre',
      'hide_empty' => false,
      'parent'     => 0, // 親タームのみ取得
    )); ?>

    <?php if (!empty($terms) && !is_wp_error($terms)) : ?>
      <?php foreach ($terms as $term) : ?>

        <!-- ジャンルごとのヘッダー記述 -->
        <!-- p-menu__genre -->
        <div class="p-menu__genre">
          <h3 class="p-menu__genre-head"><?php echo esc_html($term->name); ?></h3>
          <!-- /ジャンルごとのヘッダー記述 -->

          <?php
          // drinks 以外のターム
          if ($term->slug !== 'drinks') : ?>

            <!-- ドリンク以外のジャンルごとのヘッダー記述 -->
            <!-- p-menu__genre-list -->
            <ul class="p-menu__genre-list">
              <!-- /ドリンク以外のジャンルごとのヘッダー記述 -->

              <?php $args = array(
                'post_type'      => 'menu',
                'posts_per_page' => -1,
                'orderby'        => 'meta_value_num',
                'order'          => 'ASC',
                'meta_key'       => 'order',
                'tax_query'      => array(
                  array(
                    'taxonomy' => 'genre',
                    'field'    => 'slug',
                    'terms'    => $term->slug,
                  ),
                ),
              );

              $menu_query = new WP_Query($args); ?>

              <?php if ($menu_query->have_posts()) : ?>
                <?php while ($menu_query->have_posts()) : $menu_query->the_post(); ?>

                  <!-- ドリンク以外ジャンルのアイテム記述 -->
                  <li class="p-menu__genre-item">
                    <div class="p-menu__genre-item-image">

                      <?php if (has_post_thumbnail()): ?>
                        <?php the_post_thumbnail(); ?>
                      <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/noimg.png" alt="No Image">
                      <?php endif; ?>

                    </div>
                    <p class="p-menu__genre-item-name"><?php the_title(); ?></p>
                    <p class="p-menu__genre-item-price"><?php echo post_custom('price'); ?> yen</p>
                  </li>
                  <!-- /ドリンク以外ジャンルのアイテム記述 -->

                <?php endwhile;
                wp_reset_postdata(); ?>

              <?php else : ?>
                <p>該当するメニューがありません。</p>
              <?php endif; ?>

              <!-- ドリンク以外のジャンルのヘッダー閉じ記述 -->
            </ul><!-- p-menu__genre-list -->
            <!-- /ドリンク以外のジャンルのヘッダー閉じ記述 -->

            <!-- drinks の場合は子タームごとに処理 -->
          <?php else : ?>

            <!-- ドリンクのジャンルのヘッダー記述 -->
            <!-- p-menu__drinks -->
            <div class="p-menu__drinks-wrapper">
              <div class="p-menu__drinks-image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/menu/coffee.jpg" alt="" width="654" height="654">
              </div>
              <!-- p-menu__drinks -->
              <div class="p-menu__drinks">
                <!-- /ドリンクのジャンルのヘッダー記述 -->

                <?php $child_terms = get_terms(array(
                  'taxonomy'   => 'genre',
                  'hide_empty' => false,
                  'parent'     => $term->term_id,
                )); ?>

                <?php if (!empty($child_terms) && !is_wp_error($child_terms)) : ?>
                  <?php foreach ($child_terms as $child_term) : ?>

                    <!-- ドリンクの子ジャンルのヘッダー記述 -->
                    <!-- p-menu__drink -->
                    <div class="p-menu__drink">
                      <h4 class="p-menu__drink-head"><?php echo esc_html($child_term->name); ?></h4>
                      <ul class="p-menu__drink-list">
                        <!-- /ドリンクの子ジャンルのヘッダー記述 -->

                        <?php $args = array(
                          'post_type'      => 'menu',
                          'posts_per_page' => -1,
                          'orderby'        => 'meta_value_num',
                          'order'          => 'ASC',
                          'meta_key'       => 'order',
                          'tax_query'      => array(
                            array(
                              'taxonomy' => 'genre',
                              'field'    => 'slug',
                              'terms'    => $child_term->slug,
                            ),
                          ),
                        );

                        $child_query = new WP_Query($args); ?>

                        <?php if ($child_query->have_posts()) : ?>
                          <?php while ($child_query->have_posts()) : $child_query->the_post(); ?>

                            <!-- ドリンクの子ジャンルのアイテム記述 -->
                            <li class="p-menu__drink-item">
                              <p class="p-menu__drink-name"><?php the_title(); ?></p>
                              <p class="p-menu__drink-price"><?php echo post_custom('price'); ?> yen</p>
                            </li>
                            <!-- /ドリンクの子ジャンルのアイテム記述 -->

                          <?php endwhile;
                          wp_reset_postdata(); ?>
                        <?php else : ?>
                          <p>該当するメニューがありません。</p>
                        <?php endif; ?>

                        <!-- ドリンクの子ジャンルのヘッダー閉じ記述 -->
                      </ul>
                    </div><!-- /p-menu__drink -->
                    <!-- /ドリンクの子ジャンルのヘッダー閉じ記述 -->

                  <?php endforeach; ?>

                <?php endif; ?>

                <!-- ドリンクのジャンルのヘッダー閉じ記述 -->
              </div><!-- /p-menu__drinks -->
            </div><!-- /p-menu__drinks-wrapper -->
            <!-- /ドリンクのジャンルのヘッダー閉じ記述 -->

          <?php endif; ?>

        </div><!-- p-menu__genre -->

      <?php endforeach; ?>
    <?php endif; ?>





    <div class="p-menu__button"><a class="c-button" href="">その他のメニュー</a></div>

    <div class="p-menu__leaves-image">
      <img src="<?php echo get_template_directory_uri(); ?>/img/menu/bg_coffee-leaves2.png" alt="" width="791" height="793">
    </div>

  </div><!-- /p-menu__inner -->

</section><!-- /p-menu -->

<!-- p-gallery -->
<section class="p-gallery">

  <!-- p-gallery__container -->
  <div class="p-gallery__container">

    <!-- p-gallery__inner -->
    <div class="p-gallery__inner c-inner">

      <div class="p-gallery__head c-head">
        <p class="p-gallery__head-en c-head-en">GALLERY</p>
        <h2 class="p-gallery__head-ja c-head-ja">ギャラリー</h2>
      </div>

      <div class="p-gallery__images">
        <div class="p-gallery__image"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery/img_gallery1.png" alt="" width="514" height="514"></div>
        <div class="p-gallery__image"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery/img_gallery2.png" alt="" width="514" height="514"></div>
        <div class="p-gallery__image"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery/img_gallery3.png" alt="" width="514" height="514"></div>
        <div class="p-gallery__image"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery/img_gallery4.png" alt="" width="514" height="514"></div>
      </div>

      <div class="p-gallery__button"><a class="c-button" href="">インスタグラムを見る</a></div>

      <div class="p-gallery__beans-image">
        <img src="<?php echo get_template_directory_uri(); ?>/img/gallery/bg_coffee-beans2.png" alt="" width="780" height="660">
      </div>

    </div><!-- /p-gallery__inner -->

    <div class="p-gallery__balloon-image">
      <img src="<?php echo get_template_directory_uri(); ?>/img/gallery/img_balloon-gallery.png" alt="インスタグラムも毎日投稿しています！" width="533" height="276">
    </div>

  </div><!-- /p-gallery__container -->
</section><!-- /p-gallery -->

<!-- p-news -->
<section class="p-news">

  <!-- p-news__inner -->
  <div class="p-news__inner c-inner">

    <div class="p-news__head c-head">
      <p class="p-news__head-en c-head-en">NEWS</p>
      <h2 class="p-news__head-ja c-head-ja">お知らせ</h2>
    </div>


    <!-- p-news__list -->
    <ul class="p-news__list">

      <?php $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 5,
        'orderby'        => 'date',
        'order'          => 'DESC',
      );
      $news_query = new WP_Query($args); ?>

      <?php if ($news_query->have_posts()): ?>
        <?php $count = 0; ?>
        <?php while ($news_query->have_posts()): ?>
          <?php $news_query->the_post(); ?>

          <!-- p-news__item -->
          <li class="p-news__item">

            <?php if ($count === 0): ?>
              <article class="c-news-article c-news-article--large">
              <?php else: ?>
                <article class="c-news-article">
                <?php endif; ?>

                <span class="c-news-article__label"><?php my_the_post_category(); ?></span>
                <a href="<?php the_permalink(); ?>" class="c-news-article__link">
                  <div class="c-news-article__image">

                    <?php if (has_post_thumbnail()): ?>
                      <?php the_post_thumbnail(); ?>
                    <?php else: ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/noimg.png" alt="">
                    <?php endif; ?>

                  </div>
                  <div class="c-news-article__content">
                    <h3 class="c-news-article__content-lead"><?php the_title(); ?></h3>

                    <?php if ($count === 0): ?>
                      <div class="c-news-article__content-description"><?php the_excerpt(); ?></div>
                    <?php endif; ?>

                    <time class="c-news-article__content-date" datetime="<?php the_time("c"); ?>"><?php the_time('Y.m.d'); ?></time>
                  </div>
                </a>

                </article><!-- /c-news-article -->
          </li><!-- /p-news__item -->


          <?php $count++; ?>
        <?php endwhile; ?>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>

    </ul><!-- /p-news__list -->


    <div class="p-news__button"><a class="c-button" href="">過去のお知らせ</a></div>

    <div class="p-news__plate-image"><img src="<?php echo get_template_directory_uri(); ?>/img/news/bg_plate.png" alt="" width="708" height="640"></div>

  </div><!-- /p-news__inner -->

</section><!-- /p-news -->



<?php get_footer(); ?>