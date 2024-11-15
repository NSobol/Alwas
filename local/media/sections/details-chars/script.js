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