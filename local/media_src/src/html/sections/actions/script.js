document.addEventListener('DOMContentLoaded', () => {
    const swiperContainer = document.body.querySelector('.act-swiper') || false;
    if (swiperContainer) {
        const el = swiperContainer.parentElement.querySelector('.swiper-progress');
        const prevEl = swiperContainer.parentElement.querySelector('.swiper-prev');
        const nextEl = swiperContainer.parentElement.querySelector('.swiper-next');
        const swiper = new Swiper(swiperContainer, {
            slidesPerView: 2,
            spaceBetween: 10,
            pagination: {
                el,
                type: 'progressbar',
            },
            navigation: {
                prevEl,
                nextEl
            },
            breakpoints: {
                1200: {
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 3
                }
            }
        })
    }
})