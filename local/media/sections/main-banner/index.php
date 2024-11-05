<div class="main-banner">
  <div class="swiper-container" data-slider="main-banner-slider">
    <div class="swiper-wrapper">
      <? for ($x = 0; $x <= 3; $x++): ?>
      <div class="swiper-slide main-banner__item" style="background-image: url(<?=MEDIA_PATH;?>images/home/banner-1.png?t=1692277951183)">
        <div class="container">
          <img class=" main-banner__item-logo" src="<?=MEDIA_PATH;?>images/home/banner-logo-1.svg?t=1692277951183" alt="logo">
          <div class="z3 text-uppercase font-400 pt-3 pb-5 mb-3 d-none d-lg-block">за красивым платьем в упаковке из люкса и обожания!</div>
          <a href="" class="button button--transparent-white text-uppercase mt-5 mt-lg-0">
            <span>смотреть коллекцию</span>
          </a>
        </div>
      </div>
      <?endfor;?>
    </div>
  </div>
  <div class="main-banner__arrow">
    <button class="main-banner__arrow-item" data-slider-prev="main-banner-slider">
      <svg>
        <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg?t=1692277951183#arrow-left"></use>
      </svg>
    </button>
    <button class="main-banner__arrow-item" data-slider-next="main-banner-slider">
      <svg>
        <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg?t=1692277951183#arrow-right"></use>
      </svg>
    </button>
  </div>
</div>