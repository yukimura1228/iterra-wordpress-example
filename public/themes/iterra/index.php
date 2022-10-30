<?php get_header(); ?>
<main>
    <section id="news" class="news section">
      <div class="section__inner">
        <div class="section__heading">
          <h2 class="section__title">
            NEWS<span> - お知らせ</span>
          </h2>
        </div>
        <div class="section__container">
          <div class="newsList">
            <?php if (have_posts()): ?>
            <ul class="newsList__list">
              <?php while (have_posts()) : ?>
              <?php the_post(); ?>
              <li class="newsList__item"><a href="<?php the_permalink(); ?>" class="newsList__itemAnc">
                <span class="newsList__time"><time datatime="<?php the_time( get_option( 'date_format' ) ); ?>"><?php echo get_post_time( 'd M,Y' ) ?></time></span>
                <span class="newsList__news"><?php the_title(); ?></span>
              </a></li>
              <?php endwhile; ?>
            </ul>
            <?php endif; ?>
            <!-- <p class="newsList__error">お知らせはありません。</p> -->
          </div>
          <!-- /.newsList -->
        </div>
      </div>
    </section>
    <!-- /#news -->

    <section id="introduction" class="introduction section">
      <div class="section__inner">
        <div class="section__container">

          <div class="introProfile section__block">
            <div class="introProfile__visual">
              <picture>
                <source media="min-width: 768px" srcset="//placehold.jp/1200x600.jpg">
                <source media="max-width: 767px" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/img_profile.png">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img_profile.png" alt="" width="375" height="152" loading="lazy">
              </picture>
            </div>
            <div class="introProfile__desc">
              <h2 class="introProfile__title">
                Kenji Ishimaru<span class="introProfile__titlePost">人財革命家/起業家</span>
              </h2>
              <p class="introProfile__text">
                1979年6月2日生まれ　現43歳。<br>
                株式会社HEROES代表取締役 他複数社経営。<br>
                人財育成を通して世界に革命を起こすことで世界を幸せにすることをミッションとして活動中
              </p>
            </div>

            <div class="introProfile__sns">
              <ul class="introProfile__snsList">
                <li class="introProfile__snsItem"><a href="#" class="introProfile__snsAnc"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_youtube.svg" alt="youtube" width="30" height="30" loading="lazy"></a></li>
                <li class="introProfile__snsItem"><a href="#" class="introProfile__snsAnc"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_facebook.svg" alt="facebook" width="30" height="30" loading="lazy"></a></li>
                <li class="introProfile__snsItem"><a href="#" class="introProfile__snsAnc"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_instagram.svg" alt="instagram" width="30" height="30" loading="lazy"></a></li>
                <li class="introProfile__snsItem"><a href="#" class="introProfile__snsAnc"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_line.svg" alt="line" width="30" height="30" loading="lazy"></a></li>
              </ul>
            </div>
          </div>
          <!-- /.introProfile -->

          <div class="introPolicy section__block">
            <div class="introPolicy__lead">
              <h2 class="introPolicy__title">
                <span class="introPolicy__titleUnit">日本と世界により良い教育を</span>
                <br>
                <span class="introPolicy__titleUnit">享受できる環境づくりを目指します</span>
              </h2>
              <p class="introPolicy__text">
                ケーブルTVのセールスマン時代に全国3000名の中でトップセールスを達成。<br>
                その後、24歳で会社を創業しNTTのインターネットを10万人へ販売した実績を持つ。<br>
                現在は不動産賃貸や引越事業にて暮らしをサポート事業を展開している。他、プレゼンターとしても300回以上セミナーや人財研修を主催し人材革命家として活動中。<br>
                IPO支援エンジェル投資家を企業にマッチングすることで日本と世界の様々な技術力と企画力を活かしたプロジェクトを構築している。
              </p>
            </div>
            <div class="introPolicy__movie">
              <button class="introPolicy__movieButton">
                <img src="//placehold.jp/320x140.jpg" alt="" width="320" height="140" loading="lazy">
              </button>
              <div class="introPolicy__movieLink">
                <a href="#" class="introPolicy__movieAnc">Youtubeチャンネル</a>
              </div>
            </div>
          </div>
          <!-- /.introPolicy -->

          <div class="introAlbum section__block">
            <div class="introAlbum__container swiper-container" data-swiper-id="swiperAlbum01">
              <ul class="introAlbum__list swiper-wrapper">
                <li class="introAlbum__item swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/img_album01.jpg" alt="" srcset="" width="150" height="112" loading="lazy"></li>
                <li class="introAlbum__item swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/img_album02.jpg" alt="" srcset="" width="150" height="112" loading="lazy"></li>
                <li class="introAlbum__item swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/img_album03.jpg" alt="" srcset="" width="150" height="112" loading="lazy"></li>
                <li class="introAlbum__item swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/img_album04.jpg" alt="" srcset="" width="150" height="112" loading="lazy"></li>
                <li class="introAlbum__item swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/img_album05.jpg" alt="" srcset="" width="150" height="112" loading="lazy"></li>
              </ul>
            </div>
            <div class="introAlbum__container introAlbum__container--quick swiper-container" data-swiper-id="swiperAlbum02">
              <ul class="introAlbum__list swiper-wrapper">
                <li class="introAlbum__item swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/img_album06.jpg" alt="" srcset="" width="150" height="112" loading="lazy"></li>
                <li class="introAlbum__item swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/img_album07.jpg" alt="" srcset="" width="150" height="112" loading="lazy"></li>
                <li class="introAlbum__item swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/img_album08.jpg" alt="" srcset="" width="150" height="112" loading="lazy"></li>
                <li class="introAlbum__item swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/img_album09.jpg" alt="" srcset="" width="150" height="112" loading="lazy"></li>
                <li class="introAlbum__item swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/img_album10.jpg" alt="" srcset="" width="150" height="112" loading="lazy"></li>
                <li class="introAlbum__item swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/img_album11.jpg" alt="" srcset="" width="150" height="112" loading="lazy"></li>
              </ul>
            </div>
          </div>
          <!-- /.introAlbum -->
        </div>
      </div>
    </section>
    <!-- /#introduction -->

    <section id="business" class="business section">
      <div class="section__inner">
        <div class="section__heading">
          <h2 class="section__title">
            BUSINESS<span> - 事業内容</span>
          </h2>
          <p class="section__text">
            説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文。
          </p>
        </div>
        <div class="section__container">
          <div class="businessProject section__block">
            <div class="businessProject__block">
              <div class="businessProject__visual">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img_project01.jpg" alt="" width="288" height="200" loading="lazy">
              </div>
              <div class="businessProject__lead">
                <div class="businessProject__leadBlock">
                  <h3 class="businessProject__title">人財共育事業</h3>
                  <p class="businessProject__text">説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文。</p>
                </div>
              </div>
            </div>
            <div class="businessProject__block">
              <div class="businessProject__visual">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img_project02.jpg" alt="" width="288" height="200" loading="lazy">
              </div>
              <div class="businessProject__lead">
                <div class="businessProject__leadBlock">
                  <h3 class="businessProject__title">引越し・不動産事業コンサル</h3>
                  <p class="businessProject__text">説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文。</p>
                </div>
              </div>
            </div>
          </div>
          <!-- /.businessProject -->

          <div class="businessSchedule section__block">
            <h3 class="businessSchedule__title">スケジュール</h3>
            <div class="businessSchedule__container">
              <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=Asia%2FTokyo&showTitle=0&showTabs=1&showNav=1&showPrint=0&showTz=0&showCalendars=0&src=amEuamFwYW5lc2UjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23009688" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
            </div>
          </div>
          <!-- /.businessSchedule -->
        </div>
      </div>
    </section>
    <!-- /#business -->

    <section id="voice" class="voice section">
      <div class="section__inner">
        <div class="section__heading">
          <h2 class="section__title">
            VOICE<span> - お客様の声</span>
          </h2>
        </div>
        <div class="section__container">
          <div class="voiceSample">
            <!-- [WordPress Output Contents] -->
            <div class="voiceSample__container swiper-container" data-swiper-id="swiperVoice">
              <ul class="voiceSample__list swiper-wrapper">
                <li class="voiceSample__item swiper-slide"><a href="#" class="voiceSample__itemAnc">
                  <div class="voiceSample__thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/img_voice01.jpg" alt="" width="200" height="111" loading="lazy"></div>
                  <div class="voiceSample__desc">
                    <h3 class="voiceSample__title">セールスの基礎が分かった</h3>
                    <p class="voiceSample__name">S.A (21)</p>
                    <p class="voiceSample__text">説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文</p>
                  </div>
                </a></li>
                <li class="voiceSample__item swiper-slide"><a href="#" class="voiceSample__itemAnc">
                  <div class="voiceSample__thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/img_voice02.jpg" alt="" width="200" height="111" loading="lazy"></div>
                  <div class="voiceSample__desc">
                    <h3 class="voiceSample__title">セールスの基礎が分かった</h3>
                    <p class="voiceSample__name">S.A (21)</p>
                    <p class="voiceSample__text">説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文</p>
                  </div>
                </a></li>
                <li class="voiceSample__item swiper-slide"><a href="#" class="voiceSample__itemAnc">
                  <div class="voiceSample__thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/img_voice01.jpg" alt="" width="200" height="111" loading="lazy"></div>
                  <div class="voiceSample__desc">
                    <h3 class="voiceSample__title">セールスの基礎が分かった</h3>
                    <p class="voiceSample__name">S.A (21)</p>
                    <p class="voiceSample__text">説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文説明文</p>
                  </div>
                </a></li>
              </ul>
            </div>
            <!-- [WordPress Output Contents] -->
          </div>
          <!-- /.voiceSample -->
        </div>
      </div>
    </section>
    <!-- /#voice -->

    <section id="contact" class="contact section">
      <div class="section__inner">
        <div class="section__heading">
          <h2 class="section__title">
            CONTACT<span> - お問い合わせ</span>
          </h2>
        </div>
        <div class="section__container">
          <div class="contactForm">
            <?php echo apply_shortcodes( '[contact-form-7 id="4" title="お問い合わせ"]' ); ?>


            問い合わせ内容①
            問い合わせ内容②
            問い合わせ内容③
            姓 必須
            <input type="text" name="lastName" id="lastName">
            例）佐藤
            名 必須
            <input type="text" name="firstName" id="firstName">
            例）太郎
            メールアドレス 必須
            <input type="email" name="email" id="email">
            例）sample@sample.com
            お問い合わせ内容 必須
            <input type="text" name="contactBody" id="contactBody">
            <button type="submit">送信</button>
          </div>
          <!-- /.contactForm -->
        </div>
      </div>
    </section>
    <!-- /#contact -->
  </main>
  <script type="module">
    import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.esm.browser.min.js';

    const swiperVoice = new Swiper('[data-swiper-id="swiperVoice"]', {
      grabCursor: true,
      keyboard: true,
      watchOverflow: true,
      breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 1.52,
          spaceBetween: 20
        },
        // when window width is >= 640px
        640: {
          slidesPerView: 3,
          spaceBetween: 20
        },
        // when window width is >= 768px
        768: {
          slidesPerView: 3,
          spaceBetween: 40
        }
      }
    });

    const swiperAlbum01 = new Swiper('[data-swiper-id="swiperAlbum01"]', {
      allowTouchMove: false,
      loop: true,
      loopedSlides: 5,
      speed: 5000,
      autoplay: {
        delay: 0
      },
      freeMode: true,
      breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 2.2,
          spaceBetween: 20
        },
        // when window width is >= 768px
        768: {
          slidesPerView: 4,
          spaceBetween: 30
        }
      },
      on: {
        slideChangeTransitionStart: function(){
          this.wrapperEl.style.transitionTimingFunction = 'linear';
        }
      },
    });

    const swiperAlbum02 = new Swiper('[data-swiper-id="swiperAlbum02"]', {
      allowTouchMove: false,
      loop: true,
      loopedSlides: 6,
      speed: 3000,
      autoplay: {
        delay: 0
      },
      freeMode: true,
      breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 2.1,
          spaceBetween: 10
        },
        // when window width is >= 768px
        768: {
          slidesPerView: 5,
          spaceBetween: 20
        }
      },
      on: {
        slideChangeTransitionStart: function(){
          this.wrapperEl.style.transitionTimingFunction = 'linear';
        }
      },
    });
  </script>
<?php get_footer(); ?>
