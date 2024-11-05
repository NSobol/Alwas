var mainNewsSlider = new Swiper('[data-slider="main-news-slider"]', {
  slidesPerView: 'auto',
  spaceBetween: 9,
  loop: false,
  speed: 1000,
  freeMode: true,
  navigation: {
    nextEl: '[data-slider-next="main-news-slider"]',
    prevEl: '[data-slider-prev="main-news-slider"]',
  },
  breakpoints: {
    768: {
      slidesPerView: 2,
      spaceBetween: 30,
      freeMode: false,
    },
    992: {
      slidesPerView: 3,
      spaceBetween: 30,
      freeMode: false
    },
    1400: {
      slidesPerView: 4,
      spaceBetween: 30,
      freeMode: false
    }
  }
});