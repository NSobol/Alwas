<div class="main-collections">
  <div class="container">
    <div class="swiper-container" data-slider="main-collections-slider">
      <div class="swiper-wrapper">
        <? for ($x = 0; $x <= 2; $x++): ?>
          <a href="" class="swiper-slide main-collections__item">
            <div class="main-collections__item-picture mb-1 mb-md-2">
              <img src="<?=MEDIA_PATH;?>images/home/collection-1.png" alt="">
            </div>
            <div class="main-collections__item-title">FALL WINTER 2020 - 2021</div>
          </a>
        <? endfor; ?>
      </div>
    </div>
    <div class="swiper-pagination" data-slider-pagination="main-collections-slider"></div>
    <div class="main-collections__arrow">
      <button class="main-collections__arrow-item" data-slider-prev="main-collections-slider">
        <svg>
          <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg#arrow-left"></use>
        </svg>
      </button>
      <button class="main-collections__arrow-item" data-slider-next="main-collections-slider">
        <svg>
          <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg#arrow-right"></use>
        </svg>
      </button>
    </div>
  </div>
</div>