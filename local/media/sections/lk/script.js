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