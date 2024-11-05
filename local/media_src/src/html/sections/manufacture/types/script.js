$(function () {//DOM READEY


  $('[data-slider-container="mftypes"]').each(function (index) {
    const slideName = $(this).data('slider-container');
    const $sliderBlock = $(this).find('[data-slider="' + slideName + '"]');
    const $sliderThumbs = $(this).find('[data-slider-thumbs="' + slideName + '"]');

    const thumbsSlider = new Swiper($sliderThumbs[0], {
      spaceBetween: 0,
      slidesPerView: 'auto',
    });

    const swiperSlider = new Swiper($sliderBlock[0], {
      spaceBetween: 20,
      slidesPerView: 1,
      thumbs: {
        swiper: thumbsSlider,
      },
      breakpoints: {
        768: {
          slidesPerView: 3,
        },
        1200: {
          spaceBetween: 40,
          slidesPerView: 3,
        },
      }
    });
  });


  $('body').on('mouseenter', '.mftypes-item', function () {
    let $video = $(this).find('video');

    if ($video.length === 0) return;

    $video[0].currentTime = 0;
  });


});