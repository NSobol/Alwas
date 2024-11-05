document.addEventListener('DOMContentLoaded', () => {
    const swiperContainer = document.body.querySelector('.dth-swiper') || false;
    if (swiperContainer) {
        const MEDIA_MD = matchMedia('screen and (min-width: 768px)');
        const el = swiperContainer.querySelector('.swiper-scrollbar');
        let swiper = false;
        function checkMedia() {
            if (!MEDIA_MD.matches) {
                if (!swiper) {
                    swiper = new Swiper(swiperContainer, {
                        direction: "horizontal",
                        slidesPerView: "auto",
                        freeMode: true,
                        scrollbar: {
                            el,
                        },
                    });
                }
            } else {
                if (swiper) {
                    swiper.destroy();
                }
                swiper = false;
            }
        }
        checkMedia();
        try {
            MEDIA_MD.addEventListener('change', checkMedia);
        } catch {
            MEDIA_MD.addListener(checkMedia);
        }
    }
});