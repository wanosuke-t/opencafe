    <!-- p-latest-news -->
    <div class="p-latest-news">

      <h2 class="p-latest-news__title">最近の記事</h2>

      <div class="p-latest-news__entries">

        <?php $latest_query = new WP_Query(
          array(
            'post_type' => 'post',
            'orderby' => 'date', //日付順で取得
            'order' => 'DESC', //降順で取得
            'posts_per_page' => 5, //取得件数
          )
        ); ?>
        <?php if ($latest_query->have_posts()): ?>
          <?php while ($latest_query->have_posts()): ?>
            <?php $latest_query->the_post(); ?>

            <article class="c-news-article c-news-article--aside">
              <a href="<?php the_permalink(); ?>" class="c-news-article__link">
                <div class="c-news-article__image">

                  <?php if (has_post_thumbnail()): ?>
                    <?php the_post_thumbnail(); ?>
                  <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/noimg.png" alt="">
                  <?php endif; ?>

                </div>
                <div class="c-news-article__content">
                  <h3 class="c-news-article__content-lead"><?php echo wp_trim_words(get_the_title(), 29, '…'); ?></h3>
                  <time class="c-news-article__content-date" datetime="2021-01-01">2021.01.01</time>
                </div>
              </a>
            </article>

          <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>

      </div><!-- /p-latest-news__entries -->

    </div><!-- /p-latest-news -->

    <!-- p-categories -->
    <div class="p-categories">
      <h2 class="p-categories__title">カテゴリ</h2>
      <div class="p-categories__list">

        <?php
        $categories = get_categories([
          'taxonomy'   => 'category',
          'hide_empty' => true, // 投稿に使われていないカテゴリは除外
        ]);
        ?>

        <?php if (! empty($categories)) : ?>
          <?php foreach ($categories as $category) : ?>

            <?php $category_link = get_category_link($category->term_id); ?>
            <h3 class="p-categories__item">
              <a class="p-categories__link" href="<?php echo esc_url($category_link); ?>"><?php echo esc_html($category->name); ?></a>
            </h3>

          <?php endforeach; ?>
        <?php endif; ?>

      </div>
    </div><!-- /p-categories -->