window.mbdg = {
    Grid: {
        sm: 576,
        md: 768,
        lg: 992,
        xl: 1200
    },
    window: {
        /*width: $(window).width(),
        height: $(window).height()*/
    },
    isEdge: function () {
        var isIE = /*@cc_on!@*/ false || !!document.documentMode,
            isEdge = isIE || !!window.StyleMedia;
        return isEdge;
    },
    graph: {},
    load: [],
    AJAX_PATH: '/local/include/ajax/',
    INCLUDE_PATH: '/local/include/',
    MEDIA_PATH: '/local/media/',
    arrow: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12.02 35.64"><path d="m11.15.5-10 17.32 10 17.32" fill="none" stroke-width="2"/></svg>',
    isMobile: function () {
        return /Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
    },
    resize: function (e) {
    },
    log: function (message) {
        console.log(message);
    },
    ajaxReload: function () {
        $('input[type="tel"], [data-mask="tel"]').inputmask({
            mask: '+7 (999) 999-99-99',
            clearIncomplete: true,
            clearMaskOnLostFocus: true,
            showMaskOnHover: false,
            autoUnmask: false,
            onBeforePaste: function () {
                if (this.el) {
                    setTimeout(() => {
                        $(this.el).trigger("input");
                    }, 50);
                }
            },
            onincomplete: function () {
                $(this).removeClass('is-filled');
            }
        });
        //$('input[type="tel"]').inputmask({
        //    mask: '+9 (999) 999-99-99',
        //    clearIncomplete: true,
        //    clearMaskOnLostFocus: true,
        //    showMaskOnHover: false,
        //    autoUnmask: true,
        //    oncleared: function () {
        //    },
        //    onincomplete: function () {
        //        $(this).val('-');
        //    }
        //});
        //$('input[type="tel"]').on('focus', function() {
        //    if ($(this)[0].inputmask.maskset.mask === '+9 (999) 999-99-99' && $(this).val() === '') {
        //        $(this).val('7');
        //    };
        //});
        console.log('ajaxReload');
    },
    fixHeaderBitrix: function () {
        if ($('#panel').html() != "") {
            $('header').css('top', parseInt($('#panel').height()));
            $(window).on('scroll', function () {
                $top = parseInt($('#panel').height());
                if ($(window).scrollTop() > 0 && $(window).scrollTop() < $top) {
                    $('header').css('top', $top - $(window).scrollTop());
                } else if ($(window).scrollTop() >= $top) {
                    $('header').css('top', 0);
                } else {
                    $('header').css('top', $top);
                }
            });
        }
    },
    fancyboxDefaults: {
        lang: "ru",
        transitionEffect: 'zoom-in-out',
        // parentEl: '.-page',
        loop: true,
        touch: false,
        buttons: [
            'close'
        ],
        beforeLoad: function () {
            if (typeof $(this.opts.$orig).data() != 'undefined') {
                var data = $(this.opts.$orig).data();
                data.fancybox = true;
                if (!data.title)
                    data.title = document.title || window.document.title;
                if (!data.url)
                    data.url = window.location.pathname + window.location.search + window.location.hash;
                this.opts.ajax.settings.data = $.param(data);
                this.opts.ajax.settings.reload = data.reload ?? "N";
            }
        },
        afterShow: function (current, previous) {
            mbdg.ajaxReload();
            console.log("afterShow");
            console.log(this.opts.ajax.settings.reload);
        },
        afterClose: function () {
            console.log("afterClose");
            console.log(this.opts.ajax.settings.reload);
            if (this.opts.ajax.settings.reload == 'Y') {
                window.location.reload();
            }
        },
        i18n: {
            ru: {
                CLOSE: "Закрыть",
                NEXT: "Следующий",
                PREV: "Предыдущий",
                ERROR: "Запрашиваемая страница недоступна.<br/>Пожалуйста, повторите попытку.",
                PLAY_START: "Старт",
                PLAY_STOP: "Пауза",
                FULL_SCREEN: "Во весь экран",
                THUMBS: "Эскизы",
                DOWNLOAD: "Скачать",
                SHARE: "Поделиться",
                ZOOM: "Увеличить"
            }
        },
        /*btnTpl: {
            close:
                '<button data-fancybox-close="" class="fancybox-button fancybox-button--close" title="Закрыть"><svg viewBox="0 0 40 40"><path d="M10,10 L30,30 M30,10 L10,30"></path></svg></button>',
            smallBtn:
                '<div class="pop-close fancybox-close-small" data-fancybox-close title="{{CLOSE}}">' +
                '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M13 12l5-5-1-1-5 5-5-5-1 1 5 5-5 5 1 1 5-5 5 5 1-1z"></path></svg>' +
                '</div>'
        }*/
    },
    beforeDom: function () {
    },
    onDom: function () {
        var _class = this,
            scrollbar_width = window.innerWidth - document.documentElement.clientWidth;
        $.fancybox.defaults = $.extend($.fancybox.defaults, _class.fancyboxDefaults);
        document.documentElement.style.setProperty('--scrollbar', scrollbar_width + 'px');
        $('html').removeClass("no-js");
        _class.ajaxReload();
        _class.resize();
        //Load other components
        if (_class.load) {
            console.groupCollapsed('mbdg:Components');
            for (var k in _class.load) {
                var functionName = _class.load[k];
                _class[functionName].ready();
                console.info(functionName);
            }
            console.groupEnd();
        }
        if (mbdg.isMobile())
            $('html').addClass('mobile');
        if (typeof BX === "function") {
            BX.showWait = function (node, msg) {
                $('#' + node).addClass('is-loading');
            };
            BX.closeWait = function (node, obMsg) {
                $('.is-loading').removeClass('is-loading');
            };
        }
        $(window).on({
            'resize': _class.resize,
            'scroll': _class.scroll
        });
        /*/init*/

        // Initialize library to lazy load images
        var observer = lozad('.lozad', {
            threshold: 0.1,
            enableAutoReload: true,
            load: function (el) {
                el.src = el.getAttribute("data-src");
            }
        });

        // Background observer
        // with default `load` method
        var backgroundObserver = lozad('.lozad-background', {
        });

        observer.observe();
        backgroundObserver.observe();

    }
};
