<!-- p-access -->
<section class="p-access">

  <!-- p-access__container -->
  <div class="p-access__container">

    <!-- p-access__inner -->
    <div class="p-access__inner c-inner">
      <div class="p-access__head c-head">
        <p class="p-access__head-en c-head-en">ACCESS</p>
        <h2 class="p-access__head-ja c-head-ja">アクセス</h2>
      </div>

      <div class="c-shop">
        <div class="c-shop__map">
          <iframe class="c-shop__map-iframe"
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6480.074414226512!2d139.580213!3d35.700702!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018ee39b555205f%3A0xabb26a0a2fbda595!2z44CSMTgwLTAwMDMg5p2x5Lqs6YO95q2m6JS16YeO5biC5ZCJ56Wl5a-65Y2X55S677yR5LiB55uu!5e0!3m2!1sja!2sjp!4v1742618080559!5m2!1sja!2sjp"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- c-shop__info -->
        <div class="c-shop__info">
          <dl class="c-shop__definition">
            <dt class="c-shop__term">住所</dt>
            <dd class="c-shop__description">〒000-0000<br>東京都武蔵野市吉祥寺南町一丁目</dd>
          </dl>
          <dl class="c-shop__definition">
            <dt class="c-shop__term">TEL</dt>
            <dd class="c-shop__description">0123-456-789</dd>
          </dl>
          <dl class="c-shop__definition">
            <dt class="c-shop__term">Mail</dt>
            <dd class="c-shop__description">example@mail.com</dd>
          </dl>
          <dl class="c-shop__definition">
            <dt class="c-shop__term">営業時間</dt>
            <dd class="c-shop__description">7:00〜21:00<br>※ラストオーダー 20:30</dd>
          </dl>
          <dl class="c-shop__definition">
            <dt class="c-shop__term">定休日</dt>
            <dd class="c-shop__description">水曜日</dd>
          </dl>
          <dl class="c-shop__definition">
            <dt class="c-shop__term">座席</dt>
            <dd class="c-shop__description">テーブル20席 ／ カウンター席6席</dd>
          </dl>
        </div><!-- /c-shop__info -->
      </div>

      <div class="p-access__balloon-image"><img src="<?php echo get_template_directory_uri(); ?>/img/access/img_balloon-access.png" alt="吉祥寺駅から徒歩５分！"
          width="466" height="401"></div>
      <div class="p-access__bread-image"><img src="<?php echo get_template_directory_uri(); ?>/img/access/bg_bread.png" alt="" width="466" height="401"></div>

    </div><!-- /p-access__inner -->
  </div><!-- p-access__container -->
</section><!-- /p-access -->


<div id="js-pagetop" class="p-pagetop">
  <a href="#" class="p-pagetop__button u-hover-opacity"><img src="<?php echo get_template_directory_uri(); ?>/img/icon_arrow-top.png" alt="" width="88"
      height="88"></a>
</div>


<!-- p-footer -->
<footer class="p-footer">

  <div class="p-footer__icons">
    <div class="p-footer__icon">
      <a target="_blank" class="u-hover-opacity" href="https://x.com/home"><img src="<?php echo get_template_directory_uri(); ?>/img/Icon-twitter-light.png"
          alt="twitter icon" width="65" height="54"></a>
    </div>
    <div class="p-footer__icon">
      <a target="_blank" class="u-hover-opacity" href="https://www.instagram.com/"><img
          src="<?php echo get_template_directory_uri(); ?>/img/Icon-instagram-light.png" alt="instagram icon" width="61" height="60"></a>
    </div>
    <div class="p-footer__icon">
      <a target="_blank" class="u-hover-opacity" href="https://www.youtube.com/"><img
          src="<?php echo get_template_directory_uri(); ?>/img/Icon-youtube-light.png" alt="youtube icon" width="71" height="50"></a>
    </div>
  </div>
  <small class="p-footer__copyright">©︎2000-2021 open cafe. All Rights Reserved.</small>

  <picture class="p-footer__coffee-image">
    <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/footer/bg_coffee-beans3.png">
    <img src="<?php echo get_template_directory_uri(); ?>/img/footer/bg_coffee-beans3-sp.png" alt="" width="682" height="576">
  </picture>

</footer><!-- /footer -->


<?php wp_footer() ?>

</body>

</html>