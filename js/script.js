// ドロワーメニュー
$("#js-drawer-icon").on("click", function () {
  $(this).toggleClass("is-checked");
  $("#js-drawer-content").toggleClass("is-checked");
  $("#js-drawer").toggleClass("is-checked");
});

// スマホのドロワーアイコンを消す処理
$('#js-drawer-content a[href^="#"]').on("click", function (e) {
  $("#js-drawer-icon").removeClass("is-checked");
  $("#js-drawer-content").removeClass("is-checked");
  $("#js-drawer").removeClass("is-checked");
});

//ドロワーの外側をクリックしたらモーダルを閉じる
$(document).on("click", function (e) {
  // クリックした要素がドロワーの中またはトリガーなら何もしない
  if ($(e.target).closest("#js-drawer-content, #js-drawer-icon").length) {
    return;
  }

  // ドロワーを閉じる
  $("#js-drawer-icon").removeClass("is-checked");
  $("#js-drawer-content").removeClass("is-checked");
  $("#js-drawer").removeClass("is-checked");
});

// スワイパー
const swiper = new Swiper(".swiper", {
  loop: true,
  effect: "fade", // フェード切り替え
  allowTouchMove: false, // ユーザーのスワイプ操作を無効

  // 自動再生
  autoplay: {
    delay: 4000, // 4秒後に次のスライドへ
    disableOnInteraction: false, // ユーザーが操作しても自動再生を継続
  },
  speed: 2000, // 2秒かけてフェード
  // ページネーション
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

// /* drawer */
// jQuery('.drawer-icon').on('click', function () {
// 	jQuery('.drawer').toggleClass('m_checked');
// });

// jQuery(window).on('scroll', function ($) {
// 	if (100 < jQuery(this).scrollTop()) {
// 		jQuery('.floating').show();
// 	} else {
// 		jQuery('.floating').hide();
// 	}
// });

// /* SmoothScroll */
// jQuery('a[href^="#"]').click(function () {
// 	var header = 0; // jQuery( '#header' ).height();
// 	var speed = 300;
// 	var id = jQuery(this).attr('href');
// 	var target = jQuery('#' == id ? 'html' : id);
// 	var position = jQuery(target).offset().top - header;
// 	if (0 > position) {
// 		position = 0;
// 	}
// 	jQuery('html, body').animate(
// 		{
// 			scrollTop: position
// 		},
// 		speed
// 	);
// 	return false;
// });
