var productSlider = new Swiper('[data-slider="product-slider"]', {
  slidesPerView: 2,
  spaceBetween: 9,
  freeMode: true,
  navigation: {
    nextEl: '[data-slider-next="product-slider"]',
    prevEl: '[data-slider-prev="product-slider"]',
  },
  breakpoints: {
    768: {
      spaceBetween: 30
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