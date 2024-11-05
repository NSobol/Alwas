<div class="catalog-slider">
  <div class="swiper-container" data-slider="catalog-slider">
    <div class="swiper-wrapper">
      <? for ($x = 0; $x <= 2; $x++): ?>
        <div class="swiper-slide">
          <div class="catalog-slider__item">
            <img src="<?=MEDIA_PATH;?>images/catalog-slider/denim-<?= $x ?>.png" alt="denim">
          </div>
        </div>
      <? endfor; ?>
    </div>
  </div>
  <div class="catalog-slider__holder">
    <div class="catalog-slider__holder-title">YANINA</div>
    <div class="catalog-slider__holder-subtitle">COUTURE</div>
  </div>
</div>