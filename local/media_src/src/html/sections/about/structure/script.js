document.addEventListener('DOMContentLoaded', () => {
  const swiperContainer = document.body.querySelector('.structure-slider') || false;
  if (swiperContainer) {
      const swiper = new Swiper(swiperContainer, {
          slidesPerView: 1.8,
          spaceBetween: 0,
          speed: 1000,
          mousewheel: {
            releaseOnEdges: true,
          },
          // scrollbar: {
          //   el: ".swiper-scrollbar",
          //   hide: true,
          //   draggable: true,
          // },
          breakpoints: {
            0: {
              spaceBetween: 10,
              slidesPerView: 1.2
            },

            768: {
              slidesPerView: 1.6
            },

            991: {
              spaceBetween: 50,
              slidesPerView: 1.8,
            }
          }
      })
  }
})