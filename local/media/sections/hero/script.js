document.addEventListener('DOMContentLoaded', () => {
    const swiperContainer = document.body.querySelector('.hro-swiper') || false;
    if (swiperContainer) {
        const el = swiperContainer.parentElement.querySelector('.swiper-progress');
        const nextEl = swiperContainer.parentElement.querySelector('.swiper-next');
        const prevEl = swiperContainer.parentElement.querySelector('.swiper-prev');
        const swiper = new Swiper(swiperContainer, {
            slidesPerView: 1,
            spaceBetween: 0,
            speed: 1000,
            pagination: {
                el,
                type: 'progressbar'
            },
            navigation: {
                prevEl,
                nextEl
            }
        })
    }
})