window.addEventListener('load', () => {
    const swiperContainer = document.body.querySelector('.dtg-swiper') || false;
    if (swiperContainer) {
        const prevEl = $(swiperContainer).parents('.details-gallery').find('.swiper-prev')[0] || false;
        const nextEl = $(swiperContainer).parents('.details-gallery').find('.swiper-next')[0] || false;
        const params = {
            slidesPerView: 'auto',
            spaceBetween: 10,
            freeMode: true,
            breakpoints: {
                768: {
                    spaceBetween: 20,
                }
            }
        };
        if (prevEl && nextEl) {
            params.navigation = {
                nextEl,
                prevEl
            };
        }
        const swiper = new Swiper(swiperContainer, params);
    };
});