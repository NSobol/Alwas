/*
<div data-role="tabs">
    <div data-action="tabs-selector">
        <a href="#tab-id"></a>
    </div>
    <div data-role="tab-container">
        <div class="is-visible" id="tab-id" data-role="tab-content"></div>
    </div>
</div>

*/
mbdg.Tabs = {
    List: {},
    CloseTabs: function (id) {
        var _self = this;
        for (var i in _self.List) {
            var Group = _self.List[i],
                Tab = Group.List[id];
            if (Tab) {
                container
                    .find('[data-role="tab-content"]')
                    .removeClass('is-visible');
            }
        }
    },
    OpenTab: function (id) {
        var _self = this,
            sId = id.split("#");
        if (sId.length > 1)
            sId = sId[1];
        for (var i in _self.List) {
            var Group = _self.List[i],
                Tab = Group.List[sId];
            if (Tab) {
                var $tabs = $(Group.Group),
                    $tabsContainer = Group.Container,
                    $tabsContent = $tabsContainer.find('> [data-role="tab-content"]'),
                    $tabsSelector = Group.Selectors,
                    newTabHeight = $(Tab).outerHeight(),
                    tabHeight = $tabsContainer.outerHeight();
                $tabsSelector
                    .find('a')
                    .removeClass('is-selected')
                    .end()
                    .find('a[href="#' + sId + '"]')
                    .addClass('is-selected');
                $tabsContainer
                    .css({
                        'height': tabHeight
                    })
                    .addClass('is-changing');
                $tabsContent
                    .removeClass('is-visible');
                $(Tab)
                    .addClass('is-visible');
                $tabsContainer
                    .css({
                        'height': newTabHeight
                    });
                setTimeout(function () {
                    $tabsContainer
                        .removeClass('is-changing')
                        .removeAttr('style')
                }, 600);
            }
        }
    },
    ready: function () {
        var _self = this,
            List = {};
        $('[data-role="tabs"]').each(function (index) {
            var TabGroup = index;
            List[TabGroup] = {
                Group: this,
                Container: $(this).find(' > [data-role="tab-container"]'),
                Selectors: $(this).find(' > [data-action="tabs-selector"]'),
                List: {}
            };
            $(this).find(' > [data-role="tab-container"] > [data-role="tab-content"]').each(function () {
                List[TabGroup]['List'][$(this).attr('id')] = this;
            });
        });
        _self.List = List;
        $('body').on('click', '[data-action="tabs-selector"] a', function (e) {
            e.preventDefault();
            var _this = $(this),
                tabId = _this.attr('href') ? _this.attr('href') : _this.data('id');
            if (_this.hasClass('is-selected')) {
                return false;
            }
            _self.OpenTab(tabId);
        });
    }
};
mbdg.load.push('Tabs');