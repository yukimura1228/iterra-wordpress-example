<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
  <meta content="<?php bloginfo('description'); ?>">
  <!-- Library - Swiper -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
  <script type="module">
    import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.esm.browser.min.js';

    const swiperHero = new Swiper('[data-swiper-id="swiperHero"]', {
      grabCursor: true,
      keyboard: true,
      watchOverflow: true,
      loop: true,
      spaceBetween: 0,
      autoplay: {
        delay: 6000
      },
      breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 1
        },
        // when window width is >= 768px
        768: {
          slidesPerView: 2
        }
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true
      },
    });
  </script>
  <!-- Reset CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/modern-css-reset/dist/reset.min.css" />
  <!-- Original CSS -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <?php wp_head(); ?>
</head>
<body>
  <header class="header">
    <div class="headerNav">
      <div class="headerNav__container">
        <div class="headerNav__logo"><a href="/" class="headerNav__logoAnc"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_corporate.png" alt="KENJI ISHIMARU" width="90" height="30" loading="lazy"></a></div>
        <button class="headerNav__button"></button>
      </div>
    </div>
    <div class="headerHero">
      <div class="headerHero__container swiper-container" data-swiper-id="swiperHero">
        <ul class="headerHero__list swiper-wrapper">
          <li class="headerHero__item swiper-slide">
            <picture>
              <source media="min-width: 768px" srcset="//placehold.jp/1200x600.jpg">
              <source media="max-width: 767px" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/img_mainvisual01.jpg">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img_mainvisual01.jpg" alt="" width="375" height="455" loading="lazy">
            </picture>
          </li>
          <li class="headerHero__item swiper-slide">
            <picture>
              <source media="min-width: 768px" srcset="//placehold.jp/1200x600.jpg">
              <source media="max-width: 767px" srcset="//placehold.jp/375x455.jpg">
              <img src="//placehold.jp/375x455.jpg" alt="" width="375" height="455" loading="lazy">
            </picture>
          </li>
          <li class="headerHero__item swiper-slide">
            <picture>
              <source media="min-width: 768px" srcset="//placehold.jp/1200x600.jpg">
              <source media="max-width: 767px" srcset="//placehold.jp/375x455.jpg">
              <img src="//placehold.jp/375x455.jpg" alt="" width="375" height="455" loading="lazy">
            </picture>
          </li>
        </ul>
        <div class="headerHero__overlay">
          <div class="headerHero__overlayLead">
            <h1 class="headerHero__title">
              タイトルが入ります
              <span>サブタイトルサブタイトルサブタイトル</span>
            </h1>
          </div>
        </div>
        <div class="headerHero__pagination swiper-pagination"></div>
      </div>
    </div>
  </header>