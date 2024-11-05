$(function () { //DOM READEY


  ScrollTrigger.matchMedia({
    '(min-width: 1200px)': function () {
      $('.about-advantages-item').each(function () {
        gsap.fromTo($(this).find('.about-advantages__picture img'),
          {
            y: '5%',
          },
          {
            y: '-5%',
            ease: 'none',
            scrollTrigger: {
              trigger: $(this),
              start: 'top bottom',
              end: 'bottom top',
              scrub: 1,
            },
          }
        );
      });
    }
  });

  ScrollTrigger.matchMedia({
    '(min-width: 1200px)': function () {
      $('.about-advantages-item').each(function () {
        gsap.fromTo($(this).find('.about-advantages__info'),
          {
            y: '-40px',
          },
          {
            y: '40px',
            ease: 'none',
            scrollTrigger: {
              trigger: $(this),
              start: 'top bottom',
              end: 'bottom top',
              scrub: 1,
            },
          }
        );
      });
    }
  });


});
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
if ($(window).width() > 991 && $('[data-sidebar="cart-info-sidebar"]').length) {
  var cartInfoSidebar = new StickySidebar('[data-sidebar="cart-info-sidebar"]', {
    topSpacing: 20 + $('[data-sticky="header"]')[0].offsetHeight,
    bottomSpacing: 20,
    containerSelector: '[data-sidebar="cart-info-main"]',
    innerWrapperSelector: '[data-sidebar="cart-info-sidebar-inner"]'
  });
};

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

document.addEventListener('DOMContentLoaded', () => {
    if ($('.dtc-more-tables').length) {
        $panel = $('.dtc-more-tables__panel');
        $toggle = $('.dtc-more-tables__more');
        $toggleSpan = $('.dtc-more-tables__more span');
        $toggleSvg = $('.dtc-more-tables__more svg');
        $toggle.on('click', function (e) {
            e.preventDefault();
            $panel.slideToggle(function () {
                if ($(this).is(':visible')) {
                    $toggleSpan.text('Скрыть доп. характеристики');
                    $toggle.addClass('is-open');
                    $panel.get(0).scrollIntoView();
                } else {
                    $toggleSpan.text('Показать все характеристики');
                    $toggle.removeClass('is-open');
                }
            });
        });
    }
});
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
document.addEventListener('DOMContentLoaded', () => {
    const sorter = document.body.querySelector('[data-filter="sort"]') || false;
    if (sorter) {
        function closeSorter(e) {
            if (!e.target.closest('[data-filter="sort"]')) {
                sorter.classList.remove('is-selected');
            }
        }
        window.addEventListener('click', closeSorter)
        sorter.addEventListener('click', function (e) {
            this.classList.toggle('is-selected');
        })
    }
})
// /*=== Open desktop filter sections ===*/
// $('body').on('click', '[data-filter]', function() {
//   var activeFilterBlock = $(this).data('filter');

//   $('[data-filter-section="'+activeFilterBlock+'"]').addClass('active');
// });
// /*=== end ===*/


// /*=== Close desktop filter sections ===*/
// $('body').on('click', '[data-filter-close]', function() {
//     $('[data-filter-section]').removeClass('active');
// });

// // $('body').on('click', '[data-filter-section]', function(e) {
// //     var clickedEl = $(e.target);

// //     if ( clickedEl.hasClass('filters-section') ) {
// //         $('[data-filter-section]').removeClass('active');
// //     };
// // });
// /*=== end ===*/


// /*=== Init price range slider ===*/
// $('[data-price-range="block"]').each( function() {
//   var rangeRow = $(this).find('[data-price-range="row"]');
//   var rangePriceFrom = $('[data-price-range="from"]');
//   var rangePriceTo = $('[data-price-range="to"]');
//   var rangePriceMin = +$('[data-price-min]').data('price-min').replace(/ /g, '');
//   var rangePriceMax = +$('[data-price-max]').data('price-max').replace(/ /g, '');

//   rangeRow.slider({
//     animate: "slow",
//     range: true,    
//     min: rangePriceMin,
//     max: rangePriceMax,
//     values: [ rangePriceMin, rangePriceMax ],
//     slide : function(event, ui) {    
//       rangePriceFrom.val( ui.values[0] );
//       rangePriceTo.val( ui.values[1] );    
//     }
//   });
//   rangePriceFrom.val( rangePriceMin );
//   rangePriceTo.val( rangePriceMax );

//   rangePriceFrom.on('keyup', function() {
//     if ( +$(this).val() >= rangePriceMax ) {
//       rangePriceMin = rangePriceMax;
//       $(this).val(rangePriceMax);
//     } else {
//       rangePriceMin = +$(this).val();
//     };
//     rangeRow.slider('values', 0, rangePriceMin);
//   });

//   rangePriceTo.on('keyup', function() {
//     if ( +$(this).val() <= rangePriceMin ) {
//       rangePriceMax = rangePriceMin;
//       $(this).val(rangePriceMin);
//     } else {
//       rangePriceMax = +$(this).val();
//     };
//     rangePriceMax = +$(this).val();
//     rangeRow.slider('values', 1, rangePriceMax);
//   });
// });
// /*=== end ===*/

// $('body').on('click', '[filters-mobile="toggler"]', function() {
//   $(this).toggleClass('active');
//   $(this).next('[filters-mobile="block"]').slideToggle();
// });
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
if ($(window).width() > 1199 && $('[data-sidebar="lk-default-sidebar"]').length) {
  var productInfoSidebar = new StickySidebar('[data-sidebar="lk-default-sidebar"]', {
    topSpacing: 90,
    bottomSpacing: 20,
    containerSelector: '[data-sidebar="lk-default"]',
    innerWrapperSelector: '[data-sidebar="lk-default-sidebar-inner"]'
  });
};


$('body').on('click', '[data-current-order-button]', function() {
  var currentBlock = $(this).data('current-order-button');

  $(this).parents('.current-orders__item').toggleClass('is-active');
  $('[data-current-order-block="'+currentBlock+'"]').slideToggle();
});


$('body').on('click', '[data-lk-menu="toggle"]', function() {
  $(this).toggleClass('is-active');
  $('[data-lk-menu="block"]').slideToggle();
});

$(document).on('click', 'body', function(e) {
  if ( !$('[data-lk-menu]').is(e.target) && $('[data-lk-menu]').has(e.target).length === 0 && $(window).width() < 1200 ) {
    $('[data-lk-menu="toggle"]').removeClass('is-active');
    $('[data-lk-menu="block"]').slideUp();
  };
});

$(document).on('touchstart', 'body', function(e) {
  if ( !$('[data-lk-menu]').is(e.target) && $('[data-lk-menu]').has(e.target).length === 0 && $(window).width() < 1200 ) {
    $('[data-lk-menu="toggle"]').removeClass('is-active');
    $('[data-lk-menu="block"]').slideUp();
  };
});


function scrollToSelectedOrder() {
  var selectedOrderID = window.location.hash.split('#')[1];

  $('.current-orders__item').each( function() {
    if ( $(this)[0].id === selectedOrderID ) {
      $(this).addClass('is-active');
      $(this).find('[data-current-order-block]').slideDown();
    };
  });
};
scrollToSelectedOrder();
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
var mainСelebritiesSlider = new Swiper('[data-slider="main-celebrities-slider"]', {
  slidesPerView: 'auto',
  spaceBetween: 9,
  loop: false,
  speed: 1000,
  freeMode: true,
  navigation: {
    nextEl: '[data-slider-next="main-celebrities-slider"]',
    prevEl: '[data-slider-prev="main-celebrities-slider"]',
  },
  breakpoints: {
    768: {
      slidesPerView: 2,
      freeMode: false
    }
  }
});
var mainCollectionsSlider = new Swiper('[data-slider="main-collections-slider"]', {
  slidesPerView: 1,
  spaceBetween: 60,
  loop: false,
  speed: 1000,
  navigation: {
    nextEl: '[data-slider-next="main-collections-slider"]',
    prevEl: '[data-slider-prev="main-collections-slider"]',
  },
  pagination: {
    clickable: true,
    el: '[data-slider-pagination="main-collections-slider"]',
  },
});
var mainInstagramSlider = new Swiper('[data-slider="main-instagram-slider"]', {
  slidesPerView: "auto",
  spaceBetween: 9,
  freeMode: true,
  loop: true,
  speed: 1000,
  centeredSlides: true,
  autoplay: {
    delay: 3000,
  },
  navigation: {
    nextEl: '[data-slider-next="main-instagram-slider"]',
    prevEl: '[data-slider-prev="main-instagram-slider"]',
  },
  breakpoints: {
    768: {
      slidesPerView: 2,
      freeMode: false,
      centeredSlides: false,
    },
    992: {
      slidesPerView: 3,
      freeMode: false,
      centeredSlides: false,
    },
    1200: {
      slidesPerView: 4,
      freeMode: false,
      centeredSlides: false,
      speed: 500,
    },
    1400: {
      slidesPerView: 5,
      freeMode: false,
      centeredSlides: false,
    }
  }
});
var mainNewsSlider = new Swiper('[data-slider="main-news-slider"]', {
  slidesPerView: 'auto',
  spaceBetween: 9,
  loop: false,
  speed: 1000,
  freeMode: true,
  navigation: {
    nextEl: '[data-slider-next="main-news-slider"]',
    prevEl: '[data-slider-prev="main-news-slider"]',
  },
  breakpoints: {
    768: {
      slidesPerView: 2,
      spaceBetween: 30,
      freeMode: false,
    },
    992: {
      slidesPerView: 3,
      spaceBetween: 30,
      freeMode: false
    },
    1400: {
      slidesPerView: 4,
      spaceBetween: 30,
      freeMode: false
    }
  }
});
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
if ($(window).width() < 992) {
  var productGallery = new Swiper('[data-slider="product-gallery"]', {
    navigation: {
      nextEl: '[data-slider-next="product-gallery"]',
      prevEl: '[data-slider-prev="product-gallery"]',
    }
  });
};

if ($(window).width() > 991 && $('[data-sidebar="product-sidebar"]').length) {
  var productInfoSidebar = new StickySidebar('[data-sidebar="product-sidebar"]', {
    topSpacing: 20 + $('[data-sticky="header"]')[0].offsetHeight,
    bottomSpacing: 20,
    containerSelector: '[data-sidebar="product-main"]',
    innerWrapperSelector: '[data-sidebar="product-sidebar-inner"]'
  });
};

$('body').on('click', '[data-toggle="buttonn"]', function() {
  if ( productInfoSidebar !== undefined ) {
    setTimeout( function() {
      productInfoSidebar.updateSticky();
    }, TOOGLERSPEED + 10);
  };
});
var productSlider = new Swiper('[data-slider="product-slider"]', {
  slidesPerView: 2,
  spaceBetween: 9,
  freeMode: true,
  navigation: {
    nextEl: '[data-slider-next="product-slider"]',
    prevEl: '[data-slider-prev="product-slider"]',
  },
  breakpoints: {
    768: {
      spaceBetween: 30
    },
    992: {
      slidesPerView: 3,
      spaceBetween: 30,
      freeMode: false
    },
    1400: {
      slidesPerView: 4,
      spaceBetween: 30,
      freeMode: false
    }
  }
});
$(function () { //DOM READEY


  ScrollTrigger.matchMedia({
    '(min-width: 1200px)': function () {
      $('.about-advantages-item').each(function () {
        gsap.fromTo($(this).find('.about-advantages__picture img'),
          {
            y: '5%',
          },
          {
            y: '-5%',
            ease: 'none',
            scrollTrigger: {
              trigger: $(this),
              start: 'top bottom',
              end: 'bottom top',
              scrub: 1,
            },
          }
        );
      });
    }
  });

  ScrollTrigger.matchMedia({
    '(min-width: 1200px)': function () {
      $('.about-advantages-item').each(function () {
        gsap.fromTo($(this).find('.about-advantages__info'),
          {
            y: '-40px',
          },
          {
            y: '40px',
            ease: 'none',
            scrollTrigger: {
              trigger: $(this),
              start: 'top bottom',
              end: 'bottom top',
              scrub: 1,
            },
          }
        );
      });
    }
  });


});
$(function () { //DOM READEY


  $('body').on('mouseenter', '.made-content', function () {
    let $video = $(this).find('video');

    if ($video.length === 0) return;

    $video[0].currentTime = 0;
  });


});
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
$('.pnslist-block').each(function() {
  let $video = $(this).find('video');

  if ($video.length === 0) return;

  $(window).scroll(function(){
    let videoTopPosition = $video[0].getBoundingClientRect().top;
    let windowHeight = $(window).innerHeight();

    if (videoTopPosition < (windowHeight / 3 * 2)) {
      if (!$video.hasClass('is-palyed')) {
        $video.addClass('is-palyed');
        $video.trigger('play');
      };
    };
  });
});