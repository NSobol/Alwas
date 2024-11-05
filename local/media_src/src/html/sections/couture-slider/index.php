<div class="catalog-slider" style="background-color: #000000">
  <div class="swiper-container" data-slider="catalog-slider">
    <div class="swiper-wrapper">
      <? for ($x = 0; $x <= 2; $x++): ?>
        <div class="swiper-slide">
          <div class="catalog-slider__item">
            <img src="<?=MEDIA_PATH;?>images/couture/slide-<?= $x ?>.png" alt="couture">
          </div>
        </div>
      <? endfor; ?>
    </div>
  </div>
  <div class="catalog-slider__holder">
    <div class="catalog-slider__holder-title">YANINA</div>
    <div class="catalog-slider__holder-subtitle">couture</div>
  </div>
</div>