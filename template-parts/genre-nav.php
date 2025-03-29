<div class="p-genre-nav">
  <div class="p-genre-nav__inner c-inner">

    <?php
    // 'genre' というカスタムタクソノミーのタームを取得する
    $genre_terms = get_terms('genre', array(
      'hide_empty' => false, // 投稿が紐づいていないタームも取得する
      'parent'     => 0, // 親タームを取得
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
        <?php if (is_tax("genre")): ?>
          <?php if ($term->term_id == $queried_object->term_id): //メインクエリのオブジェクトと一致したらクラスを追加 
          ?>
            <div class="p-genre-nav__link"><a class="is-active" href="<?php echo get_term_link($term, 'genre'); ?>"><?php echo $display_name; ?></a></div>
          <?php else: ?>
            <div class="p-genre-nav__link"><a href="<?php echo get_term_link($term, 'genre'); ?>"><?php echo $display_name; ?></a></div>
          <?php endif; ?>
        <?php else: ?>
          <div class="p-genre-nav__link"><a href="<?php echo get_term_link($term, 'genre'); ?>"><?php echo $display_name; ?></a></div>
        <?php endif; ?>

      <?php endforeach; ?>
    <?php endif; ?>

  </div>
</div><!-- /p-genre-nav -->