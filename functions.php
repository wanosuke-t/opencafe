<?php

// WordPressのテーマの初期化処理を行う関数
function my_setup()
{
  add_theme_support("post-thumbnails"); // アイキャッチ画像（投稿サムネイル）のサポートを有効化
  add_theme_support("automatic-feed-links"); // フィードリンク（RSS）の自動挿入を有効化
  add_theme_support("title-tag"); // ページタイトルの自動生成を有効化（<title>タグを自動出力）
  add_theme_support('html5', array( // HTML5マークアップのサポートを有効化（対象: コメントリスト、フォーム、検索フォームなど）
    'comment-list',   // コメントリスト
    'comment-form',   // コメントフォーム
    'search-form',    // 検索フォーム
    'gallery',        // ギャラリー
    'caption',        // キャプション
    'style',          // スタイルタグ
    'script'          // スクリプトタグ
  ));
}
add_action('after_setup_theme', 'my_setup'); // テーマの初期化処理として my_setup 関数を登録（after_setup_theme フックで実行）


// CSSとJavaScriptの読み込み
function my_script_init()
{
  wp_enqueue_style('swiper-style', get_template_directory_uri() . "/css/lib/swiper-bundle.min.css", array(),  filemtime(get_theme_file_path('css/lib/swiper-bundle.min.css')), "all");
  wp_enqueue_style("my-style", get_template_directory_uri() . "/css/style.css", array(), filemtime(get_theme_file_path('css/style.css')), "all");

  wp_enqueue_script("swiper-script", get_template_directory_uri() . "/js/lib/swiper-bundle.min.js", array(), filemtime(get_theme_file_path('js/lib/swiper-bundle.min.js')), true);
  wp_enqueue_script("jquery-script", "https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js", array("jquery"), "3.7.1", true);
  wp_enqueue_script("my-script", get_template_directory_uri() . "/js/script.js", array(), filemtime(get_theme_file_path('js/script.js')), true);
}
add_action('wp_enqueue_scripts', 'my_script_init');


/* 
*  カテゴリー名を取得する関数
*/
function my_the_post_category($anchor = false)
{
  $category = get_the_category();
  if ($category[0]) {
    if ($anchor) {
      echo '<a href="' . get_category_link($category[0]->term_id) . '">' . $category[0]->cat_name . '</a>';
    } else {
      echo $category[0]->cat_name;
    }
  }
}

// お知らせ詳細のパンくずリスト調整
add_filter('bcn_after_fill', 'custom_breadcrumb_for_post_detail');
function custom_breadcrumb_for_post_detail($trail)
{
  if (is_singular('post')) {

    // 「投稿タイトル」だけ削除
    $trail->trail = array_slice($trail->trail, 1);
  }
  return $trail;
}
