mbdg.parallax = {
    image: function (item, type) {
        var wTop = $(window).scrollTop(),
            wHeight = $(window).height(),
            wBottom = wTop + wHeight,
            eTop = item.offset().top,
            eHeight = item.outerHeight(),
            eBottom = eTop + item.outerHeight(),
            eHalf = eTop + item.outerHeight() / 2,
            eSpeed = parseFloat(item.data("speed")) || 1.5,
            pTop = (eHalf - wTop) / wHeight * 50 / eSpeed;
        if (eBottom >= wTop && wBottom >= eTop) {
            if (type == "bg") {
                gsap.to(item, {
                    backgroundPosition: "center " + pTop + "%",
                    duration: .35
                });
            } else {
                item.css("transform", "translateY(" + pTop + "%)");
            }
        }
    },
    element: function (e, target, container, movement) {
        var $this = container,
            relX = e.pageX - $this.offset().left,
            relY = e.pageY - $this.offset().top,
            w = $this.outerWidth(),
            h = $this.outerHeight();
        var x = (relX - w / 2) / w * (movement.x / 2),
            y = (relY - h / 2) / h * movement.y;
        gsap.to(target, {
            x: x,
            y: y,
            duration: 1
        });
    },
    action: function () {
        $(window).on('scroll load', function () {
            $('[data-parallax="scroll"]').each(function () {
                mbdg.parallax.image($(this), $(this).data('type'));
            });
        });
        $('body').on('mousemove', '[data-parallax="move"]', function (event) {
            var $container = $(this);
            $container.find('[data-parallax-item]').each(function () {
                var offset = $(this).data('offset');
                if (!offset)
                    offset = {
                        x: $(this).data('offset-x') || 0,
                        y: $(this).data('offset-y') || 0
                    }
                else
                    offset = {
                        x: $(this).data('offset'),
                        y: $(this).data('offset')
                    }
                mbdg.parallax.element(event, $(this), $container, offset);
            });
        });
    }
}