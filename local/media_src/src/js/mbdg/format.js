mbdg.Format = {
    Success: function (text) {
        if (text == "")
            text = "Спасибо! Ваша заявка принята!";
        return '<div class="bg-success message bg-message text-center">' + text + '</div>';
    },
    Error: function (text) {
        return '<div class="message bg-danger bg-message text-center">' + text + '</div>';
    },
    Popup: function (text, close) {
        var $text = $('<div class="pop"><div class="h4 p-20 mb-0 popup-message text-center">' + text + '</div></div>');
        $.fancybox.close();
        $.fancybox.open($text, {
            parentEl: '.page',
            transitionEffect: 'zoom-in-out',
            type: "inline"
        });
        if (!close) {
            setTimeout(function () {
                $.fancybox.close()
            }, 2000);
        }
    },
    Plural: function (num, expressions) {
        var result;
        count = num % 100;
        if (count >= 5 && count <= 20) {
            result = expressions['2'];
        } else {
            count = count % 10;
            if (count == 1) {
                result = expressions['0'];
            } else if (count >= 2 && count <= 4) {
                result = expressions['1'];
            } else {
                result = expressions['2'];
            }
        }
        return result;
    },
    Price: function (number, decimals, dec_point, thousands_sep) {
        number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
        var n = !isFinite(+number) ? 0 : +number,
            prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
            sep = (typeof thousands_sep === 'undefined') ? ' ' : thousands_sep,
            dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
            s = '',
            toFixedFix = function (n, prec) {
                var k = Math.pow(10, prec);
                return '' + Math.round(n * k) / k;
            };
        s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
        if (s[0].length > 3) {
            s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
        }
        if ((s[1] || '').length > prec) {
            s[1] = s[1] || '';
            s[1] += new Array(prec - s[1].length + 1).join('0');
        }
        return s.join(dec);
    }
};