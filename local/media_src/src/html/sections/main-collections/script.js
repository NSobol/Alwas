var mainCollectionsSlider = new Swiper('[data-slider="main-collections-slider"]', {
  slidesPerView: 1,
  spaceBetween: 60,
  loop: false,
  speed: 1000,
  navigation: {
    nextEl: '[data-slider-next="main-collections-slider"]',
    prevEl: '[data-slider-prev="main-collections-slider"]',
  },
  pagination: {
    clickable: true,
    el: '[data-slider-pagination="main-collections-slider"]',
  },
});