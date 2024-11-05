<div class="product-slider">
  <div class="swiper-container" data-slider="product-slider">
    <div class="swiper-wrapper">
      <? for ($x = 0; $x <= 1; $x++): ?>
        <? for ($i = 0; $i <= 7; $i++): ?>
          <div class="swiper-slide">
            <div class="product-slider__item">
              <a href="<?= $homeFolder?>product.php" class="product-slider__item">
                <div class="product-slider__item-photo bg-primary">
                  <img src="<?=MEDIA_PATH;?>images/catalog/photo-<?= $i ?>.png?t=1692277951183" alt="product">
                </div>
                <div class="product-slider__item-title text-uppercase">ПЛАТЬЕ ИЗ ТВИДА БУКЛЕ</div>
                <div class="product-slider__item-price">340 000 руб</div>
              </a>
            </div>
          </div>
        <? endfor; ?>
      <? endfor; ?>
    </div>
  </div>
  <div class="product-slider__arrow">
    <button class="product-slider__arrow-item" data-slider-prev="product-slider">
      <svg>
        <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg?t=1692277951183#arrow-left"></use>
      </svg>
    </button>
    <button class="product-slider__arrow-item" data-slider-next="product-slider">
      <svg>
        <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg?t=1692277951183#arrow-right"></use>
      </svg>
    </button>
  </div>
</div>