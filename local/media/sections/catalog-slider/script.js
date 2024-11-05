var catalogSlider = new Swiper('[data-slider="catalog-slider"]', {
  slidesPerView: 'auto',
  loop: true,
  centeredSlides: true,
  allowTouchMove: false,
  speed: 1500,
  autoplay: {
    delay: 2000,
  },
  breakpoints: {
    768: {
      slidesPerView: 2,
      centeredSlides: true
    },
    992: {
      slidesPerView: 3,
      centeredSlides: false
    }
  }
});