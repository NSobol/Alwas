var mainInstagramSlider = new Swiper('[data-slider="main-instagram-slider"]', {
  slidesPerView: "auto",
  spaceBetween: 9,
  freeMode: true,
  loop: true,
  speed: 1000,
  centeredSlides: true,
  autoplay: {
    delay: 3000,
  },
  navigation: {
    nextEl: '[data-slider-next="main-instagram-slider"]',
    prevEl: '[data-slider-prev="main-instagram-slider"]',
  },
  breakpoints: {
    768: {
      slidesPerView: 2,
      freeMode: false,
      centeredSlides: false,
    },
    992: {
      slidesPerView: 3,
      freeMode: false,
      centeredSlides: false,
    },
    1200: {
      slidesPerView: 4,
      freeMode: false,
      centeredSlides: false,
      speed: 500,
    },
    1400: {
      slidesPerView: 5,
      freeMode: false,
      centeredSlides: false,
    }
  }
});