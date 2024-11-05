document.addEventListener('DOMContentLoaded', () => {
    const swiperContainers = document.body.querySelectorAll('.nov-swiper');
    if (swiperContainers.length) {
        swiperContainers.forEach(swiperContainer => {
            const el = swiperContainer.querySelector('.swiper-progress');
            const prevEl = swiperContainer.parentElement.querySelector('.swiper-prev');
            const nextEl = swiperContainer.parentElement.querySelector('.swiper-next');
            const swiper = new Swiper(swiperContainer, {
                slidesPerView: 2,
                spaceBetween: 10,
                breakpoints: {
                    992: {
                        slidesPerView: 3,
                    },
                    1200: {
                        spaceBetween: 20,
                    },
                    1400: {
                        slidesPerView: 4,
                    },
                },
                pagination: {
                    el,
                    type: 'progressbar'
                },
                navigation: {
                    prevEl,
                    nextEl
                }
            });
        })
    }
});