<?php get_header(); ?>



<!-- p-page-header -->
<div class="p-page-header">

	<picture class="p-page-header__image">
		<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/header/img_firstview_news.jpg">
		<img src="<?php echo get_template_directory_uri(); ?>/img/header/img_firstview_news_sp.jpg" alt="" decoding="async" width="2560" height="640">
	</picture>

	<div class="p-page-header__title">
		<p class="p-page-header__title-en">NEWS</p>
		<p class="p-page-header__title-ja">お知らせ</p>
	</div>

</div><!-- /p-page-header -->


<?php get_template_part('/template-parts/breadcrumb'); ?>

<?php if (have_posts()): ?>
	<?php while (have_posts()): ?>
		<?php the_post(); ?>

		<!-- p-entry -->
		<article class="p-entry">

			<!-- p-entry__inner -->
			<div class="p-entry__inner">

				<!-- p-entry__header -->
				<div class="p-entry__header">
					<!-- p-entry__image -->
					<div class="p-entry__image">
						<img src="<?php echo get_template_directory_uri(); ?>/img/news/img_news1.png" alt="" width="1020" height="638">
					</div><!-- /p-entry__image -->
					<h1 class="p-entry__title"><?php the_title(); ?></h1>
					<!-- /p-entry__title -->
					<!-- p-entry__meta -->
					<div class="p-entry__meta">
						<time class="p-entry__published" datetime="<?php the_time("c"); ?>"><?php the_time('Y.m.d'); ?></time>
						<div class="p-entry__category u-hover-opacity"><a href=""><?php my_the_post_category(true); ?></a>
						</div>
					</div>
				</div><!-- /p-entry__header -->

				<!-- p-entry__body -->
				<div class="p-entry__body">

					<?php the_content(); ?>

				</div><!-- p-entry__body -->

				<!-- 記事ナビゲーション -->
				<div class="p-entry-nav">
					<p class="p-entry-nav__left u-hover-opacity">
						<?php previous_post_link('%link', '前の記事', TRUE, ''); ?>
					</p>
					<p class="p-entry-nav__top u-hover-opacity">
						<a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>">記事一覧</a>
					</p>
					<p class="p-entry-nav__right u-hover-opacity">
						<?php next_post_link('%link', '次の記事', TRUE, ''); ?>
					</p>
				</div><!-- /p-entry-nav -->


				<!-- 関連記事を表示する -->
				<?php
				$category = get_the_category(); //この記事が持つカテゴリーを取得
				$cat_ids = array(); //カテゴリーIDを格納する配列を初期化
				foreach ($category as $cat) { //カテゴリーの数だけループさせる
					$cat_ids = $cat->term_id; //カテゴリーIDを配列に格納
				}
				?>
				<?php
				$args = array( //関連記事を8件取得する設定
					'post_type' => 'post', // 投稿タイプが投稿の場合
					'posts_per_page' => 6, // 6件取得
					'post__not_in' => array(get_the_ID()), // この記事を除外
					'category__in' => $cat_ids, // この記事が持つカテゴリーIDを含む記事を取得
					'orderby' => 'rand', // ランダムに記事を取得
				);
				$related_posts = get_posts($args); //関連記事を取得（サブクエリ
				?>
				<?php if ($related_posts): //関連記事がある場合 
				?>
					<!-- p-entry-related -->
					<div class="p-entry-related">
						<h2 class="p-entry-related__title">関連記事</h2>
						<div class="p-entry-related__list">

							<?php foreach ($related_posts as $post): setup_postdata($post) //関連記事データをポストデータとして使う設定 
							?>

								<article class="c-news-article c-news-article--related">
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
											<h3 class="c-news-article__content-lead"><?php echo wp_trim_words(get_the_title(), 27, '…'); ?></h3>
											<time class="c-news-article__content-date" datetime="<?php the_time("c"); ?>"><?php the_time('Y.m.d'); ?></time>
										</div>
									</a>
								</article>

							<?php endforeach; ?>
							<?php wp_reset_postdata(); //関連記事データをポストデータとして使う設定をリセット 
							?>

						</div><!-- /related-list -->
					</div><!-- /p-entry-related -->

				<?php endif; ?><!-- /関連記事を表示する -->

			</div><!-- p-entry__inner -->
		</article><!-- /p-entry -->

	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>