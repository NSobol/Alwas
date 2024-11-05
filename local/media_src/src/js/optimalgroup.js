window.OptimalGroup = {
    AJAX_PATH: "/local/include/ajax/",
    MEDIA_PATH: "/local/media/",
    load: [],
    log: function(message){
        console.log(message);
    },
    ajaxReload: function () {
        this.log('OptimalGroup:ajaxReload');
    },
    init: function () {
        //OptimalGroup.Catalog.ready();
        var _class = this;
        //Load other components
        if (_class.load){
            console.groupCollapsed('OptimalGroup:Components');
            for (var k in _class.load){
                var functionName = _class.load[k];
                _class[functionName].ready();
                console.info(functionName);
            }
            console.groupEnd();
        }

        if (typeof BX === "function") {
            BX.addCustomEvent('onAjaxSuccess', function (e, data) {
                _class.ajaxReload();
            });
            BX.showWait = function(node, msg) {
                $('#'+node).addClass('is-loading');
            };
            BX.closeWait = function(node, obMsg) {
                $('.is-loading').removeClass('is-loading');
            };
        }
        $(window).on({
            'resize': _class.resize,
            'scroll': _class.scroll
        });
    },
}