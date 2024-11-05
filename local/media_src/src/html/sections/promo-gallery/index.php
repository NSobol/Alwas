<div class="promo-gallery">
  <div class="container container--smaller">
    <div class="promo-gallery__slider" data-slider-container="promo-gallery">
      <div class="swiper-container" data-slider="promo-gallery">
        <div class="swiper-wrapper">
          <? for ($i = 0; $i < 3; $i++) : ?>
            <div class="swiper-slide">
              <picture class="promo-gallery__slider-picture">
                <img src="<?= MEDIA_PATH; ?>images/promo/promo-slide-<?= $i ?>.jpg" alt="">
              </picture>
              <p class="promo-gallery__slider-title">Название фотографии</p>
            </div>
          <? endfor; ?>
        </div>
        <div class="swiper-navigation justify-content-between d-none d-xl-flex">
          <div class="swiper-prev" data-slider-prev="promo-gallery">
            <svg width="50" height="50" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle opacity=".1" cx="25" cy="25" r="24.5" stroke="#4E2417" />
              <path d="M33.25 25h-16.5M23.5 18.25L16.75 25l6.75 6.75" stroke="#4E2417" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </div>
          <div class="swiper-next" data-slider-next="promo-gallery">
            <svg width="50" height="50" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle opacity=".1" cx="25" cy="25" r="24.5" stroke="#4E2417" />
              <path d="M16.75 25h16.5M26.5 18.25L33.25 25l-6.75 6.75" stroke="#4E2417" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </div>
        </div>
        <div class="swiper-pagination d-xl-none" data-slider-pagination="promo-gallery"></div>
      </div>
    </div>
  </div>
</div>