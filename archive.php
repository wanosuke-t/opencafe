<?php get_header(); ?>



<!-- p-page-header -->
<section class="p-page-header">

  <picture class="p-page-header__image">
    <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/header/img_firstview_news.jpg">
    <img src="<?php echo get_template_directory_uri(); ?>/img/header/img_firstview_news_sp.jpg" alt="" decoding="async" width="2560" height="640">
  </picture>

  <div class="p-page-header__title">
    <p class="p-page-header__title-en">NEWS</p>
    <h1 class="p-page-header__title-ja">お知らせ</h1>
  </div>

</section><!-- /p-page-header -->


<?php get_template_part('/template-parts/breadcrumb'); ?>


<!-- l-two-column -->
<div class="l-two-column">

  <!-- l-main -->
  <main class="l-two-column__main">

    <h2 class="p-category-title"><?php the_archive_title(); ?></h2>

    <?php get_template_part('/template-parts/news-entries'); ?>

    <?php get_template_part('/template-parts/pagination'); ?>


  </main><!-- /l-main -->

  <!-- l-aside -->
  <aside class="l-two-column__aside">


    <?php get_sidebar(); ?>


  </aside><!-- /l-aside -->
</div><!-- /l-two-column -->



<?php get_footer(); ?>