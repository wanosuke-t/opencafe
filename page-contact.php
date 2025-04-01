<?php get_header(); ?>



<!-- p-page-header -->
<section class="p-page-header">

	<picture class="p-page-header__image">
		<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/header/img_firstview_contact.jpg">
		<img src="<?php echo get_template_directory_uri(); ?>/img/header/img_firstview_contact_sp.jpg" alt="" decoding="async" width="2560" height="640">
	</picture>

	<div class="p-page-header__title">
		<p class="p-page-header__title-en">CONTACT</p>
		<h1 class="p-page-header__title-ja">お問い合わせ</h1>
	</div>

</section><!-- /p-page-header -->


<?php get_template_part('/template-parts/breadcrumb'); ?>


<!-- p-contact -->
<section class="p-contact">
	<div class="p-contact__inner">

		<h2 class="p-contact__head">お問い合わせフォーム</h2>
		<p class="p-contact__message">お問い合わせ内容に応じて、項目をご選択のうえ、お気軽にお問い合わせください。</p>

		<div class="p-contact__form">


			<!-- Contact Form short code -->
			<?php echo do_shortcode('[contact-form-7 id="7a985d7" title="コンタクトフォーム - Open Cafe"]'); ?>
			<!-- <?php echo do_shortcode('[contact-form-7 id="8756f6f" title="aaa"]'); ?> -->


		</div><!-- /p-contact__form -->

	</div><!-- /p-contact__inner -->
</section><!-- /p-contact -->



<?php get_footer(); ?>