var Contacts = {
    myMap: "",
    collection: "",
    CreatCollection: function () {
        Contacts.collection = new ymaps.GeoObjectCollection(null, {
            iconLayout: 'default#image',
            iconImageHref: '/local/media/images/map-icon.png',
            iconImageSize: [34, 40],
            iconImageOffset: [-17, -40],
            balloonShadow: false,
            balloonLayout: MyBalloonLayout,
            balloonContentLayout: MyBalloonContentLayout,
            balloonPanelMaxMapArea: 0
        });
    },
    createPlaceMark: function (item) {
        var placemark = new ymaps.Placemark(item.CENTER, {
            id: item.ID,
            balloonContent: Contacts.balloonHtml(item)
        }, {
            hideIconOnBalloonOpen: true
        });
        Contacts.collection.add(placemark);
    },
    balloonHtml: function (placemark) {
        var html = '<div class="map-item">';
        html += '<div class="contacts-item--address"><i class="fa fa-map-marker"></i>' + placemark.CONTENT.ADDRESS + '</div>';
        html += '<div class="contacts-item--phone"><i class="fa fa-phone"></i>' + placemark.CONTENT.PHONE + '</div>';
        if (placemark.CONTENT.FAX) {
            html += '<div class="contacts-item--phone"><i class="fa fa-fax"></i>' + placemark.CONTENT.FAX + '</div>';
        }
        //html +=	'<div class="contacts-item--person">'+placemark.CONTENT.PERSON+'</div>';
        html += '<div class="contacts-item--time"><i class="fa fa-clock-o"></i>' + placemark.CONTENT.TIME + '</div>';
        html += '<div class="contacts-item--text">' + placemark.CONTENT.TEXT + '</div>';
        html += '<div class="contacts-item--action">';
        html += '<a href="#" class="btn btn-grey w-170">Обратная связь</a>';
        html += '<a href="#" class="btn btn-tranparent-border w-280"><i class="fa fa-print btn-fa"></i>Распечатать карту проезда</a>';
        html += '</div>';
        html += "</div>";
        return html;
    },
    creatLayoutClass: function () {
        MyBalloonLayout = ymaps.templateLayoutFactory.createClass(
            '<div class="yaPopUp-container">' +
            '<a class="yaPopUp-close" href="#"></a>' +
            '$[[options.contentLayout observeSize minWidth=580 maxWidth=600 maxHeight=auto]]' +
            '</div>', {
                build: function () {
                    this.constructor.superclass.build.call(this);
                    this._$element = $('.yaPopUp-container', this.getParentElement());
                    this.applyElementOffset();
                    this._$element.find('.yaPopUp-close')
                        .on('click', $.proxy(this.onCloseClick, this));
                },
                clear: function () {
                    this._$element.find('.yaPopUp-close')
                        .off('click');
                    this.constructor.superclass.clear.call(this);
                },
                onSublayoutSizeChange: function () {
                    MyBalloonLayout.superclass.onSublayoutSizeChange.apply(this, arguments);
                    if (!this._isElement(this._$element)) {
                        return;
                    }
                    this.applyElementOffset();
                    this.events.fire('shapechange');
                },
                applyElementOffset: function () {
                    this._$element.css({
                        left: -58,
                        bottom: 18
                    });
                },
                onCloseClick: function (e) {
                    e.preventDefault();
                    this.events.fire('userclose');
                },
                getShape: function () {
                    var position = this._$element.position();
                    return new ymaps.shape.Rectangle(new ymaps.geometry.pixel.Rectangle([
                        [position.left, position.top], [
                            position.left + this._$element[0].offsetWidth,
                            position.top + this._$element[0].offsetHeight
                        ]
                    ]));
                },
                _isElement: function (element) {
                    return element && element[0] && element.find('.arrow')[0];
                }
            }),
            MyBalloonContentLayout = ymaps.templateLayoutFactory.createClass('$[properties.balloonContent]');
    },
    refreshMap: function () {
        if (ContactsPlaceMarksList.length > 1 || ContactsPlaceMarksMain.length > 1) {
            Contacts.myMap.setBounds(Contacts.myMap.geoObjects.getBounds());
        } else {
            Contacts.myMap.panTo(Contacts.myMap.geoObjects.getBounds(), {zoom: 10});
        }
    },
    inTab: function () {
        $('body').on('click', '.js-Tabs a', function (e) {
            setTimeout(function () {
                Contacts.refreshMap();
            }, 200);
        });
    },
    init: function () {
        Contacts.myMap = new ymaps.Map('map', {
            center: [55.76, 37.64],
            zoom: 14,
            behaviors: ['default', 'scrollZoom']
        });
        Contacts.myMap.behaviors.disable('scrollZoom');
        Contacts.myMap.controls.remove('searchControl');
        Contacts.creatLayoutClass();
        Contacts.CreatCollection();
        Contacts.inTab();
        for (var i = 0, l = ContactsPlaceMarksMain.length; i < l; i++) {
            Contacts.createPlaceMark(ContactsPlaceMarksMain[i]);
        }
        for (var i = 0, l = ContactsPlaceMarksList.length; i < l; i++) {
            Contacts.createPlaceMark(ContactsPlaceMarksList[i]);
        }
        Contacts.myMap.geoObjects.add(Contacts.collection);
        //Contacts.refreshMap();
        $('body').on('click', '.js-OpenOnMap', function (e) {
            e.preventDefault();
            var id = $(this).data('id')
            $('.js-Tabs a[href="#tab-map"]').trigger('click');
            Contacts.collection.each(function (item) {
                if (item.properties.get('id') == id) {
                    setTimeout(function () {
                        Contacts.myMap
                            .setBounds(item.geometry.getBounds());
                        Contacts.myMap.setZoom(14, {duration: 200});
                        item.balloon.open();
                    }, 210);
                }
            });
        });
    }
}
ymaps.ready(Contacts.init);
