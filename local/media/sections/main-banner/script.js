var headerHeight = $('.header').outerHeight();
$('.main-banner__item').css('padding-top', headerHeight+'px');

var mainBannerSlider = new Swiper('[data-slider="main-banner-slider"]', {
  slidesPerView: 1,
  loop: true,
  allowTouchMove: true,
  speed: 1000,
  autoplay: {
    delay: 4000,
  },
  navigation: {
    nextEl: '[data-slider-next="main-banner-slider"]',
    prevEl: '[data-slider-prev="main-banner-slider"]',
  },
  breakpoints: {
    992: {
      allowTouchMove: false,
    }
  }
});