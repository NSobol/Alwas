<div class="main-celebrities py-5 my-md-2 my-lg-5">
  <div class="container">
    <div class="z2 text-uppercase text-center mb-3 mb-md-4 mb-lg-5 font-400">Celebrities</div>

    <div class="main-celebrities__slider">
      <div class="swiper-container" data-slider="main-celebrities-slider">
        <div class="swiper-wrapper">
          <? for ($x = 0; $x <= 2; $x++): ?>
            <div class="swiper-slide">
              <a href="" class="main-celebrities__item">
                <div class="main-celebrities__item-photo mb-md-1 mb-lg-2">
                  <img src="<?=MEDIA_PATH;?>images/home/celebrities-1.png?t=1692277951183" alt="">
                </div>
                <div class="z4 text-uppercase font-400 m-0 main-celebrities__item-title">Влада рослякова</div>
              </a>
            </div>
            <div class="swiper-slide">
              <a href="" class="main-celebrities__item">
                <div class="main-celebrities__item-photo mb-md-1 mb-lg-2">
                  <img src="<?=MEDIA_PATH;?>images/home/celebrities-2.png?t=1692277951183" alt="">
                </div>
                <div class="z4 text-uppercase font-400 m-0 main-celebrities__item-title">ПЛАТЬЕ ИЗ ТВИДА БУКЛЕ</div>
              </a>
            </div>
          <? endfor; ?>
        </div>
      </div>
      <div class="main-celebrities__arrow">
        <button class="main-celebrities__arrow-item" data-slider-prev="main-celebrities-slider">
          <svg>
            <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg?t=1692277951183#arrow-left"></use>
          </svg>
        </button>
        <button class="main-celebrities__arrow-item" data-slider-next="main-celebrities-slider">
          <svg>
            <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg?t=1692277951183#arrow-right"></use>
          </svg>
        </button>
      </div>
    </div>

    <div class="show-more text-center mt-lg-3 pt-3">
      <a href="" class="show-more__button text-uppercase">
        <span>смотреть все </span>
      </a>
    </div>
  </div>
</div>