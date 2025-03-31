    <!-- p-news-entries -->
    <div class="p-news-entries">

      <?php if (have_posts()): ?>
        <?php while (have_posts()): ?>
          <?php the_post(); ?>

          <article class="c-news-article c-news-article--archive">
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
                <time class="c-news-article__content-date" datetime="<?php the_time("c"); ?>"><?php the_time('Y.m.d'); ?></time>
              </div>
            </a>
          </article>

        <?php endwhile; ?>
      <?php endif; ?>

    </div><!-- /p-news-entries -->