/*=== Global consts ===*/
const TOOGLERSPEED = 400;
const MEDIA_LG = matchMedia('screen and (min-width: 992px)');
const MEDIA_XL = matchMedia('screen and (min-width: 1200px)');
/*=== end ===*/

gsap.registerPlugin(ScrollTrigger);
mbdg.beforeDom();
$(function () { //DOM READEY
    svg4everybody();
    mbdg.onDom();

    //vh fallback for mobiles
    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);
    window.addEventListener('resize', () => {
        let vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', `${vh}px`);
    });
    //

    /*=== Show and Hide header on page scroll ===*/
    var stickyHeader = new Headroom($('[data-sticky="header"]')[0], {
        offset: $('[data-sticky="header"]')[0].offsetHeight,
        classes: {
            initial: 'header--sticky',
            pinned: 'header--pinned',
            unpinned: 'header--unpinned',
            top: 'header--on-top',
            notTop: 'header--not-top',
            bottom: 'header--on-bottom',
            notBottom: 'header--not-bottom',
            frozen: 'header--frozen',
        },
        onNotTop: function () {
            $('.header-search').hide();
        },
    });
    stickyHeader.init();
    /*=== end ===*/


    /*=== Set Header submenu top position ===*/
    function setHeaderMenuTop() {
        var headerHeight = $('header').outerHeight();
        $('[data-header="menu"]').css('top', headerHeight - 3 + 'px');
        if ($(window).width() < 1200) {
            $('[data-header="menu"]').css('height', 'calc(100vh - ' + headerHeight + 'px)');
        };
    };
    setHeaderMenuTop();
    try {
        MEDIA_XL.addEventListener('change', setHeaderMenuTop);
    } catch {
        MEDIA_XL.addListener(setHeaderMenuTop);
    }
    /*=== end ===*/


    /*=== Show Header submenu on desctop ===*/
    $('body').on('mouseenter', '[data-menu-tab]', function () {
        if ($(window).width() > 1199.98) {
            var currentTabNum = $(this).data('menu-tab');
            var currenBlock = $('[data-menu-block="' + currentTabNum + '"]');
            var test = $(this).offset().left - $('[data-menu-block="container"]').offset().left - parseInt($('[data-menu-block="container"]').css('padding-left'));
            if (currenBlock.length) {
                //currenBlock.find('[data-menu-block="lonley-list"]').css('margin-left', test + 'px');
                $('[data-menu-block]').removeClass('is-visible');
                $('.header-menu').addClass('is-visible');
                currenBlock.addClass('is-visible');
            };
            if ($('.header').hasClass('header--transparent')) {
                $('.header').addClass('header--hovered');
            };
        };
    });
    /*=== end ===*/


    /*=== Hide Header submenu on desctop ===*/
    $('body').on('mouseleave', '[data-menu-tab]', function () {
        if ($(window).width() > 1199.98) {
            $('.header-menu').removeClass('is-visible');
            if ($('.header').hasClass('header--transparent')) {
                $('.header').removeClass('header--hovered');
            };
        };
    });
    /*=== end ===*/


    /*=== Add background to transparent heder in open menu ===*/
    $('body').on('mouseenter', '[data-header="menu"]', function () {
        if ($(window).width() > 1199.98) {
            if ($('.header').hasClass('header--transparent')) {
                $('.header').addClass('header--hovered');
            };
        };
    });
    /*=== end ===*/


    /*=== Remove background for transparent header in closed menu ===*/
    $('body').on('mouseleave', '[data-header="menu"]', function () {
        if ($(window).width() > 1199.98) {
            if ($('.header').hasClass('header--transparent')) {
                $('.header').removeClass('header--hovered');
            };
        };
    });
    /*=== end ===*/


    /*=== Show/Hide Header submenu on mobile ===*/
    $('body').on('click', '[data-menu-mobile-tab]', function () {
        if ($(window).width() < 1200) {
            $(this).toggleClass('is-active');
            var currentTabNum = $(this).data('menu-mobile-tab');
            var currenBlock = $('[data-menu-mobile-block="' + currentTabNum + '"]');
            currenBlock.slideToggle();
        };
    });
    /*=== end ===*/


    /*=== Show/Hide Header catalog on mobile ===*/
    $('body').on('click', '[data-submenu-mobile-tab]', function () {
        if ($(window).width() < 1200) {
            $(this).toggleClass('is-active');
            var currentTabNum = $(this).data('submenu-mobile-tab');
            var currenBlock = $('[data-submenu-mobile-block="' + currentTabNum + '"]');
            currenBlock.slideToggle();
        };
    });
    /*=== end ===*/


    /*=== Toggle mobile menu ===*/
    $('[data-mobile-menu="toggle"]').on('click', function () {
        $(this).toggleClass('is-active');
        $('.header').toggleClass('headroom--menu-open');
        $('[data-header="menu"]').toggleClass('is-visible');
    });
    /*=== end ===*/

    /*=== Header about panel ===*/
    $hmAbout = $('.hm-about');
    $hmLabel = $('.hm-about__label');
    $hmPanel = $('.hm-about__panel');
    function hmPanelSlideDown() {
        $hmAbout.off('mouseenter', hmPanelSlideDown)
        $hmPanel.slideDown(function () {
        });

    }
    function hmPanelSlideUp() {
        $hmPanel.slideUp(function () {
            $hmAbout.on('mouseenter', hmPanelSlideDown)
        });
    }
    $hmAbout.on('mouseenter', hmPanelSlideDown)
    $hmAbout.on('mouseleave', hmPanelSlideUp)

    $hmAbout.on('click', function () {
        $hmPanel.slideToggle();
    });

    /*=== end ===*/

    /*=== Custom accordion ===*/
    $('body').on('click', '[data-toggle="buttonn"]', function () {
        $(this).toggleClass('is-open');
        $(this).next('[data-toggle="content"]').slideToggle(TOOGLERSPEED);
    });
    /*=== end ===*/

    /*=== Footer accordion ===*/
    $ftrAccordionHdr = $('.ftr-group--accordion .fgp-hdr');
    $ftrAccordion = $('.ftr-group--accordion');
    $ftrAccordionList = $('.ftr-group--accordion .fgp-list');
    $ftrAccordionHdr.on('click', function (e) {
        e.preventDefault();
        if (!MEDIA_LG.matches) {
            if ($(this).parent().hasClass('is-open')) {
                $ftrAccordion.removeClass('is-open');
                $ftrAccordionList.slideUp();
            } else {
                $ftrAccordionList.slideUp();
                $ftrAccordion.removeClass('is-open');
                $(this).parent().addClass('is-open');
                $(this).next().slideDown();
            }
        }
    });
    try {
        MEDIA_LG.addEventListener('change', function () {
            if (this.matches) {
                $ftrAccordionList.show();
                $ftrAccordion.removeClass('is-open');
            } else {
                $ftrAccordionList.hide();
            }
        });
    } catch {
        MEDIA_LG.addListener(function () {
            if (this.matches) {
                $ftrAccordionList.show();
                $ftrAccordion.removeClass('is-open');
            } else {
                $ftrAccordionList.hide();
            }
        });
    }
    /*=== end ===*/

    /*=== Add/Remove product to favorite ===*/
    $('body').on('click', 'a.catalog-product', function (e) {
        var clickedEl = $(e.target)[0];

        if (clickedEl.classList.contains('catalog-product__photo-favorite')) {
            e.preventDefault();

            if (clickedEl.classList.contains('is-selected')) {
                $(clickedEl).attr('title', 'добавить в избранное');
            } else {
                $(clickedEl).attr('title', 'удалить из избранного');
            };

            $(clickedEl).toggleClass('is-selected');
        };
    });
    /*=== end ===*/


    /*=== Open/Close desktop header search ===*/
    let $headerSearchOpenButton = $('[data-header-search-button="open"]');
    let $headerSearchCloseButton = $('[data-header-search-button="close"]');
    //var $headerSearchCol = $headerSearchOpenButton.parents('[data-header-search="col"]');
    var $headerSearcField = $('.header-search');

    $headerSearchOpenButton.on('click', function () {
        $headerSearcField.slideToggle();
        //if ( $(this).data('header-search-button') === 'open' ) {
        //    //$headerSearchOpenButton.addClass('active');
        //    $headerSearcField.addClass('active');
        //    //$headerSearchCol.addClass('w-100');
        //    //$headerSearchCol.siblings().addClass('d-xl-none');
        //} else if ( $(this).data('header-search-button') === 'close' ) {
        //    $headerSearcField.removeClass('active');
        //    //$headerSearchOpenButton.removeClass('active');
        //    //$headerSearchCol.removeClass('w-100');
        //    //$headerSearchCol.siblings().removeClass('d-xl-none');
        //};
    });
    $headerSearchCloseButton.on('click', function () {
        $headerSearcField.slideToggle();
    });
    /*=== end ===*/


    /*=== Open desktop filter sections ===*/
    $('body').on('click', '[data-filter]', function () {
        var activeFilterBlock = $(this).data('filter');

        $('[data-filter-section="' + activeFilterBlock + '"]').addClass('active');
    });
    /*=== end ===*/


    /*=== Close desktop filter sections ===*/
    $('body').on('click', '.filters-section', function (e) {
        if (!e.target.closest('.filters-section__container') || e.target.closest('[data-filter-close]')) {
            $('[data-filter-section]').removeClass('active');
        }
    });
    window.addEventListener('keydown', e => {
        e.key === 'Escape' && $('[data-filter-section]').removeClass('active');
    })
    /*=== end ===*/


    /*=== Init price range slider ===*/
    if ($('[data-price-range="block"]').length > 0) {
        $('[data-price-range="block"]').each(function () {
            var rangeRow = $(this).find('[data-price-range="row"]');
            var rangePriceFrom = $('[data-price-range="from"]');
            var rangePriceTo = $('[data-price-range="to"]');
            var rangePriceMin = +$('[data-price-min]').data('price-min').replace(/ /g, '');
            var rangePriceMax = +$('[data-price-max]').data('price-max').replace(/ /g, '');

            rangeRow.slider({
                animate: "slow",
                range: true,
                min: rangePriceMin,
                max: rangePriceMax,
                values: [rangePriceFrom.val(), rangePriceTo.val()],
                slide: function (event, ui) {
                    rangePriceFrom.val(ui.values[0]);
                    rangePriceTo.val(ui.values[1]);
                }
            });
            rangePriceFrom.val(rangePriceMin);
            rangePriceTo.val(rangePriceMax);

            rangePriceFrom.on('keyup', function () {
                if (+$(this).val() >= rangePriceMax) {
                    rangePriceMin = rangePriceMax;
                    $(this).val(rangePriceMax);
                } else {
                    rangePriceMin = +$(this).val();
                };
                rangeRow.slider('values', 0, rangePriceMin);
            });

            rangePriceTo.on('blur', function () {
                if (+$(this).val() <= rangePriceMin) {
                    rangePriceMax = rangePriceMin;
                    $(this).val(rangePriceMin);
                } else {
                    rangePriceMax = +$(this).val();
                };
                rangePriceMax = +$(this).val();
                rangeRow.slider('values', 1, rangePriceMax);
            });
        });
    }
    /*=== end ===*/


    /*=== Open mobile filters blocks ===*/
    $('body').on('click', '[filters-mobile="toggler"]', function () {
        $(this).toggleClass('active');
        $(this).next('[filters-mobile="block"]').slideToggle();
    });
    /*=== end ===*/


    /*=== Init meeting modal form slider  ===*/
    var meetingFormSlider = new Swiper('[data-slider="meeting-form-slider"]', {
        slidesPerView: 2.5,
        spaceBetween: 12,
    });

    $('body').on('click', '[data-fancybox]', function () {
        setTimeout(function () {
            meetingFormSlider.update();
        }, 100);
    });
    /*=== end ===*/


    /*=== Play YouTube iframe-vido in catalog page ===*/
    $('body').on('click', '[data-catalog-video="play"]', function () {
        var $videoContainer = $(this).parents('[data-catalog-video="container"]');
        $videoContainer.find('[data-catalog-video="play"]').addClass('is-hidden');
        $videoContainer.find('iframe')[0].src += "&autoplay=1";
    });
    $('body').on('click', '[data-catalog-video="container"]', function () {
        $(this).find('[data-catalog-video="play"]').addClass('is-hidden');
        $(this).find('iframe')[0].src += "&autoplay=1";
    });
    /*=== end ===*/


    /*=== Product Card slider ===*/
    $('[data-slider="product-card"]').each(function () {
        let $sliderContainer = $(this);
        let $sliderPagination = $(this).find('[data-slider-pagination="product-card"]');

        let slider = new Swiper($sliderContainer[0], {
            pagination: {
                el: $sliderPagination[0],
            },
        });

        $sliderPagination.find('.swiper-pagination-bullet').mouseenter(function () {
            if ($(window).width() < 1200) return;

            slider.slideTo($(this).index(), 0);
        });

        $sliderContainer.mouseleave(function () {
            if ($(window).width() < 1200) return;

            slider.slideTo(0, 0);
        });
    })
    /*=== end ===*/


    /*=== Product page scheme slider ===*/
    // $('[data-slider="dtc-pic"]').each(function () {
    //     let $sliderContainer = $(this);
    //     let $sliderPagination = $(this).find('[data-slider-pagination="dtc-pic"]');

    //     let slider = new Swiper($sliderContainer[0], {
    //         pagination: {
    //             el: $sliderPagination[0],
    //             clickable: true,
    //         },
    //     });

    //     $sliderPagination.find('.swiper-pagination-bullet').mouseenter(function() {
    //         if ($(window).width() < 1200) return;

    //         slider.slideTo($(this).index(), 0);
    //     });
    // });
    /*=== end ===*/


    /*=== Product page scheme slider ===*/
    $('[data-slider="dtc-pic"]').each(function () {
        let $sliderContainer = $(this);
        let $sliderPagination = $(this).find('[data-slider-pagination="dtc-pic"]');

        let slider = new Swiper($sliderContainer[0], {
            pagination: {
                el: $sliderPagination[0],
                clickable: true,
            },
        });

        $sliderPagination.find('.swiper-pagination-bullet').mouseenter(function () {
            if ($(window).width() < 1200) return;

            slider.slideTo($(this).index(), 0);
        });
    });
    /*=== end ===*/


    /*=== Promo detailed page gallery slider ===*/
    $('[data-slider-container="promo-gallery"]').each(function () {
        let sliderName = $(this).data('slider-container');
        let $slider = $(this).find('[data-slider="' + sliderName + '"]');
        let $sliderButtonPrev = $(this).find('[data-slider-prev="' + sliderName + '"]');
        let $sliderButtonNext = $(this).find('[data-slider-next="' + sliderName + '"]');
        let $sliderPagination = $(this).find('[data-slider-pagination="' + sliderName + '"]');

        let slider = new Swiper($slider[0], {
            slidesPerView: 1,
            spaceBetween: 0,
            navigation: {
                prevEl: $sliderButtonPrev[0],
                nextEl: $sliderButtonNext[0]
            },
            pagination: {
                el: $sliderPagination[0],
                clickable: true,
            },
        });
    });
    /*=== end ===*/


    /*=== Actions more slider ===*/
    $('[data-slider-container="act-more"]').each(function () {
        let sliderName = $(this).data('slider-container');
        let $slider = $(this).find('[data-slider="' + sliderName + '"]');
        let $sliderButtonPrev = $(this).find('[data-slider-prev="' + sliderName + '"]');
        let $sliderButtonNext = $(this).find('[data-slider-next="' + sliderName + '"]');
        let $sliderPagination = $(this).find('[data-slider-progress="' + sliderName + '"]');

        let slider = new Swiper($slider[0], {
            slidesPerView: 2,
            spaceBetween: 10,
            navigation: {
                prevEl: $sliderButtonPrev[0],
                nextEl: $sliderButtonNext[0]
            },
            pagination: {
                el: $sliderPagination[0],
                type: 'progressbar',
            },
            breakpoints: {
                992: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                1200: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                }
            }
        });
    });
    /*=== end ===*/


    /*=== counter up animation ===*/
    $('.js-counter-up').each(function () {
        var numFormat = wNumb({
            thousand: ' ',
        });

        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 1500,
            easing: 'swing',
            step: function (now) {
                $(this).text(numFormat.to(Math.ceil(now)));
            }
        });
    });
    /*=== // ===*/

    
});