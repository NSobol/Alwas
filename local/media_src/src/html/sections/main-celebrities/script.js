var mainСelebritiesSlider = new Swiper('[data-slider="main-celebrities-slider"]', {
  slidesPerView: 'auto',
  spaceBetween: 9,
  loop: false,
  speed: 1000,
  freeMode: true,
  navigation: {
    nextEl: '[data-slider-next="main-celebrities-slider"]',
    prevEl: '[data-slider-prev="main-celebrities-slider"]',
  },
  breakpoints: {
    768: {
      slidesPerView: 2,
      freeMode: false
    }
  }
});