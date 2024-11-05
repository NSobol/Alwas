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