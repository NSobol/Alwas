<div class="actions-more" data-slider-container="act-more">
  <div class="container">
    <div class="d-flex mb-2 justify-content-between align-items-center">
      <a href="#" class="z4 mb-0">
        <span>Акции</span>
        <svg xmlns='http://www.w3.org/2000/svg'>
          <use xlink:href='/local/media/images/icons.svg?t=1692277951183#caret-right'></use>
        </svg>
      </a>
      <div class="swiper-navigation d-none d-md-flex">
        <div class="swiper-prev" data-slider-prev="act-more">
          <svg width="50" height="50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle opacity=".1" cx="25" cy="25" r="24.5" stroke="#4E2417" />
            <path d="M33.25 25h-16.5M23.5 18.25L16.75 25l6.75 6.75" stroke="#4E2417" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
        <div class="swiper-next" data-slider-next="act-more">
          <svg width="50" height="50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle opacity=".1" cx="25" cy="25" r="24.5" stroke="#4E2417" />
            <path d="M16.75 25h16.5M26.5 18.25L33.25 25l-6.75 6.75" stroke="#4E2417" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
      </div>
    </div>
    <div class="swiper-container" data-slider="act-more">
      <div class="swiper-wrapper">
        <? for ($i = 0; $i < 12; $i++) : ?>
          <div class="swiper-slide">
            <a href="#" class="act-item">
              <picture>
                <img src="<?= MEDIA_PATH; ?>images/promo/promo-item-0.jpg?t=1692277951183" alt="">
              </picture>
              <div class="act-item__content">
                <div class="act-item__date">1 октября - 30 ноября</div>
                <div class="act-item__title">Название акции длинное в две строки</div>
                <div class="act-item__desc">Текст основных условий акйии. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
              </div>
            </a>
          </div>
        <? endfor; ?>
      </div>
      <div class="swiper-progress swiper-progress--dark" data-slider-progress="act-more"></div>
    </div>
  </div>
</div>