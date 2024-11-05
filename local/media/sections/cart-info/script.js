if ($(window).width() > 991 && $('[data-sidebar="cart-info-sidebar"]').length) {
  var cartInfoSidebar = new StickySidebar('[data-sidebar="cart-info-sidebar"]', {
    topSpacing: 20 + $('[data-sticky="header"]')[0].offsetHeight,
    bottomSpacing: 20,
    containerSelector: '[data-sidebar="cart-info-main"]',
    innerWrapperSelector: '[data-sidebar="cart-info-sidebar-inner"]'
  });
};
