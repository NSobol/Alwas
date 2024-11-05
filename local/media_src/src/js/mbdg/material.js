mbdg.Material = {
    getLuma: function (color) {
        var rgba = color.substring(4, color.length - 1).split(','),
            r = rgba[0],
            g = rgba[1],
            b = rgba[2],
            luma = 0.2126 * r + 0.7152 * g + 0.0722 * b;
        return luma;
    },
    getBackground: function (item) {
        var color = item.css("background-color"),
            alpha = parseFloat(color.split(',')[3], 10);
        if ((isNaN(alpha) || alpha > 0.8) && color !== 'transparent') {
            return color;
        }
        if (item.is("body")) {
            return false;
        } else {
            return this.getBackground(item.parent());
        }
    },
    ready: function () {
        var self = this;
        $('body').on('click', '.ink-reaction, .btn', function (e) {
            var bound = $(this).get(0).getBoundingClientRect(),
                x = e.clientX - bound.left,
                y = e.clientY - bound.top,
                color = self.getBackground($(this)),
                inverse = (self.getLuma(color) > 183) ? ' inverse' : '',
                ink = $('<div class="ink' + inverse + '"></div>'),
                btnOffset = $(this).offset(),
                xPos = e.pageX - btnOffset.left,
                yPos = e.pageY - btnOffset.top;
            ink.css({
                top: yPos,
                left: xPos
            }).appendTo($(this));
            window.setTimeout(function () {
                ink.remove();
            }, 1500);
        });
        if (mbdg.window.width > 1200) {
            $('body').on('mousemove', '.btn', function (e) {
                var $this = $(this),
                    btnOffset = $this.offset(),
                    xPos = parseInt(e.pageX - btnOffset.left),
                    yPos = parseInt(e.pageY - btnOffset.top);
                $this.css({
                    '--x': xPos + 'px',
                    '--y': yPos + 'px'
                });
            });
        }
    },
    inView: function (item) {
        var wTop = $(window).scrollTop(),
            wHeight = $(window).height(),
            wBottom = wTop + wHeight,
            eTop = item.offset().top,
            eBottom = eTop + item.outerHeight(),
            inView = false;
        if (eBottom >= wTop && wBottom >= eTop) {
            inView = true;
        }
        return inView;
    }
};
mbdg.load.push('Material');