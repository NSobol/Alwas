<div class="main-instagram pb-4 pt-2">
  <div class="container">
    <div class="z2 text-uppercase text-center font-400 mb-3 mb-md-4 mb-lg-5">
      <a href="https://www.instagram.com/yaninacouture/" target="_blank" rel="noopener noreferrer">@yaninacouture</a>
    </div>
    <div class="main-instagram-slider">
      <div class="swiper-container" data-slider="main-instagram-slider">
        <div class="swiper-wrapper">
          <? for ($i = 0; $i <= 2; $i++): ?>
            <? for ($x = 1; $x < 6; $x++): ?>
              <div class="swiper-slide">
                <a href="https://www.instagram.com/yaninacouture/" class="main-instagram__photo" target="_blank" rel="noopener noreferrer">
                  <img src="<?=MEDIA_PATH;?>images/home/insta-<?= $x?>.png" alt="">
                </a>
              </div>
            <? endfor; ?>
          <? endfor; ?>
        </div>
      </div>
      <div class="main-instagram-slider__arrow">
        <button class="main-instagram-slider__arrow-item" data-slider-prev="main-instagram-slider">
          <svg>
            <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg#arrow-left"></use>
          </svg>
        </button>
        <button class="main-instagram-slider__arrow-item" data-slider-next="main-instagram-slider">
          <svg>
            <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg#arrow-right"></use>
          </svg>
        </button>
      </div>
    </div>
  </div>
</div>