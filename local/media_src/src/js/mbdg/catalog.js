mbdg.Catalog = {

    ProductInCart: [],
    Product: {},
    smallBasket: $('[small-basket]'),
    ProductAdd: function(object){
    },

    favoriteAction: function (id, action, callback){
        if(typeof action === 'undefined') {
            return false;
        }
        $.post(mbdg.AJAX_PATH+'catalog/favorite.php',
            {
                id: id,
                action: action,
            },
            function (data) {
                if(typeof data === 'undefined')
                    return false;

                if(typeof callback === "function") {
                    callback(data);
                }

                return true;
            }, 'json'
        ).fail(function (jqxhr, textStatus, error) {
            console.log(jqxhr);
            console.log(textStatus);
            console.log(error);
        });
    },

    basketAction: function (id, quantity, action, coupon, siteId, callback){
        if(typeof action === 'undefined') {
            return false;
        }
        $.post(mbdg.AJAX_PATH+'catalog/basket.php',
            {
                id: id,
                quantity: quantity,
                action: action,
                coupon: coupon,
                siteId: siteId
            },
            function (data) {
                if(typeof data === 'undefined')
                    return false;

                if(typeof callback === "function") {
                    callback(data);
                }

                return true;
            }, 'json'
        ).fail(function (jqxhr, textStatus, error) {
            console.log(jqxhr);
            console.log(textStatus);
            console.log(error);
        });
    },

    //addToCart: function(e){
    addToFavorite: function(params){

        var _self = params,
            _class = mbdg.Catalog;

        var elementId = $(params.get( 0 )).attr('data-id');

        _class.favoriteAction(elementId, 'add', function () {
            _class.getAllFavorite();
        });

    },

    getAllFavorite: function(){

        var _class = mbdg.Catalog;
        _class.favoriteAction(0, 'getAll', function (data) {
            $('[data-action="add-to-favorite"].is-selected').removeClass('is-selected');
            $('[small-favorites]').text(data['COUNT']);
            if (typeof data['FAVORITES'] != 'undefined' && typeof data['FAVORITES']['UF_ID'] != 'undefined' && data['FAVORITES']['UF_ID'] !== null) {
                $.each(data['FAVORITES']['UF_ID'], function (i, el) {
                    if($('[data-action="add-to-favorite"][data-id="' + el + '"]').length) {
                        $('[data-action="add-to-favorite"][data-id="' + el + '"]').addClass('is-selected');
                    }
                });
            }
        });
    },

    addToCart: function(params){

        var _self = params,
            _class = mbdg.Catalog,
            quantity = 1;

        var elementId = $(params.get( 0 )).attr('data-id');
        var elementName = $(params.get( 0 )).attr('data-name');
        var elementPrice = $(params.get( 0 )).attr('data-price');
        var elementPath = $(params.get( 0 )).attr('data-path');

        dataLayer.push({
            "ecommerce": {
                "currencyCode": "RUB",
                "detail": {
                    "products": [
                        {
                            "id": elementId,
                            "name" : elementName,
                            "price": elementPrice,
                            "brand": "ALWA",
                            "category": elementPath,
                            "quantity": 1
                        }
                    ]
                }
            }
        });

        _class.basketAction(elementId, quantity, 'add', '', _self.data('site-id'), function () {
            _class.flyToCart(_self);
        });

    },

    basketUpdate: function(e){
        var _class = $(this);
        $.get(mbdg.AJAX_PATH+'/catalog/smallBasketUpdate.php', function(data){
            var $data = $('<div>').append($(data));
            if($data.find('[small-basket-count]').length > 0) {
                $('[small-basket]').find('[small-basket-count]').text($data.find('[small-basket-count]').html());
            }
        });
    },

    flyToCart: function (element){

        var _class = this;

        if (typeof element === 'undefined')
            return;

        if (element.length <= 0)
            return;

        element
            .clone()
            .css({
                'position': 'absolute',
                'z-index': '11100',
                top: element.offset().top,
                left: element.offset().left
            })
            .appendTo("body")
            .animate({
                    opacity: 0.05,
                    left: _class.smallBasket.offset()['left'],
                    top: _class.smallBasket.offset()['top'],
                    width: 20
                }, 1000, function () {
                    $(this).remove();
                    _class.basketUpdate();
                }
            );
    },

    ready: function () {
        var _class = this,
            $body = $('body');

        $(document).on('click', '[data-action="add-cart"]', function (e){
            e.preventDefault();
            _class.addToCart($(this));
        });

        $(document).on('click', '[data-action="add-to-favorite"]', function (e){
            e.preventDefault();
            _class.addToFavorite($(this));
        });
        _class.getAllFavorite($(this));

        if($(window).width() < 1200) {
            _class.smallBasket = $('[small-basket-mobile]');
        }

    }
}
mbdg.load.push('Catalog');