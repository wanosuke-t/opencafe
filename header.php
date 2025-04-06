<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="最高のコーヒーと、時の流れを味わうことができる手作りカフェ">

  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Damion&family=Noto+Serif+JP:wght@200..900&family=Patua+One&display=swap"
    rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body>

  <!-- p-header -->
  <header class="p-header">

    <!-- p-drawer -->
    <?php if (is_front_page()) : ?>
      <div id="js-drawer" class="p-drawer p-drawer--front-page">
      <?php else: ?>
        <div id="js-drawer" class="p-drawer is-show">
        <?php endif; ?>

        <div id="js-drawer-icon" class="p-drawer__icon u-hover-opacity">
          <span class="p-drawer__icon-bar"></span>
          <span class="p-drawer__icon-bar"></span>
          <span class="p-drawer__icon-bar"></span>
        </div><!-- /p-drawer-icon -->

        <!-- p-drawer-content -->
        <div id="js-drawer-content" class="p-drawer__content">
          <div class="p-drawer__content-logo">
            <a class="u-hover-opacity" href="<?php echo home_url(); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo_light_drawer.png" alt="Open Cafe - dish & coffee -" width="256" height="128">
            </a>
          </div>
          <nav class="p-drawer__content-nav">
            <ul class="p-drawer__content-list">
              <li class="p-drawer__content-item">
                <a class="u-hover-opacity" href="<?php echo home_url(); ?>"><span class="p-drawer__content-text-en">TOP</span><span
                    class="p-drawer__content-text-ja">トップ</span></a>
              </li>
              <li class="p-drawer__content-item">
                <a class="u-hover-opacity" href="<?php echo get_permalink(get_page_by_path('concept')); ?>"><span class="p-drawer__content-text-en">CONCEPT</span><span
                    class="p-drawer__content-text-ja">コンセプト</span></a>
              </li>
              <li class="p-drawer__content-item">
                <a class="u-hover-opacity" href="<?php echo get_post_type_archive_link('menu'); ?>"><span class="p-drawer__content-text-en">MENU</span><span
                    class="p-drawer__content-text-ja">メニュー</span></a>
              </li>
              <li class="p-drawer__content-item">
                <a class="u-hover-opacity" href="<?php echo get_permalink(get_page_by_path('news')); ?>"><span class="p-drawer__content-text-en">NEWS</span><span
                    class="p-drawer__content-text-ja">お知らせ</span></a>
              </li>
              <li class="p-drawer__content-item">
                <a class="u-hover-opacity" href="<?php echo get_post_type_archive_link('shop'); ?>"><span class="p-drawer__content-text-en">SHOP</span><span
                    class="p-drawer__content-text-ja">店舗情報</span></a>
              </li>
              <li class="p-drawer__content-item">
                <a class="u-hover-opacity" href="<?php echo get_post_type_archive_link('products'); ?>"><span class="p-drawer__content-text-en">GIFT</span><span
                    class="p-drawer__content-text-ja">ギフト・贈り物</span></a>
              </li>
              <li class="p-drawer__content-item">
                <a class="u-hover-opacity" href="<?php echo get_permalink(get_page_by_path('contact')); ?>"><span class="p-drawer__content-text-en">CONTACT</span><span
                    class="p-drawer__content-text-ja">お問い合わせ</span></a>
              </li>
            </ul>
          </nav>
          <ul class="p-drawer__content-sns-icons">
            <li class="p-drawer__content-sns-icon">
              <a class="u-hover-opacity" href="https://x.com/home" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/Icon-twitter-light.png"
                  alt="twitter icon" width="65" height="54"></a>
            </li>
            <li class="p-drawer__content-sns-icon">
              <a class="u-hover-opacity" href="https://www.instagram.com/" target="_blank"><img
                  src="<?php echo get_template_directory_uri(); ?>/img/Icon-instagram-light.png" alt="instagram icon" width="61" height="60"></a>
            </li>
            <li class="p-drawer__content-sns-icon">
              <a class="u-hover-opacity" href="https://www.youtube.com/" target="_blank"><img
                  src="<?php echo get_template_directory_uri(); ?>/img/Icon-youtube-light.png" alt="youtube icon" width="71" height="50"></a>
            </li>
          </ul>
        </div><!-- /p-drawer-content -->
        </div><!-- /p-drawer -->

  </header><!-- /p-header -->