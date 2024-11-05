
mbdg.profile = {
    center: [55.785286, 37.601025],
    timeout: null,
    map: {},
    clearSuggest: function () {
        $('[data-address-suggest]').html('');
    },
    initMap: function () {

        var _class = this;

        this.map = new ymaps.Map('mapPopup', {
            center: this.center,
            zoom: 9,
            behaviors: ['default', 'scrollZoom']
        });

        this.map.events.add('click', function (e) {
            var coords = e.get('coords');

            this.clearSuggest();
            this.myPlacemark = this.getPlacemark(coords);
            this.getAddress(coords);
        }.bind(this));

        $('[data-input="home"]').on('keyup', function () {
            _class.lockButton();
            _class.checkQuery($(this).val());
        });
        if (this.pointCenter){
            console.log(this.center);
            this.myPlacemark = this.getPlacemark(this.pointCenter);
            this.map.panTo(this.pointCenter);
        }
    },
    lockButton: function () {
        $('.add-addr-form .btn').prop('disabled', true).removeClass('-orange');
    },
    unlockButton: function () {
        $('.add-addr-form .btn').prop('disabled', false).addClass('-orange');
    },
    resetFields: function () {
        $('[name^=ADDRESS], [name^=COURIER]').val('');
    },
    getAddress: function (coords) {

        var _class = this;
        ymaps.geocode(coords).then(function (res) {
            var firstGeoObject = res.geoObjects.get(0);

            _class.fillAddressInput(firstGeoObject.getAddressLine().replace('Россия,', '')
                .replace('Московская область,', '')
                .trim());
            this.searchOnMap(firstGeoObject.getAddressLine());

            this.fillCityInput(firstGeoObject.getLocalities());
            this.fillStreetInput(firstGeoObject.getThoroughfare());
            this.fillHomeInput(firstGeoObject.getPremiseNumber());
            this.fillZipInput(firstGeoObject.properties.get('metaDataProperty').GeocoderMetaData.Address.postal_code);

        }.bind(this));
    },

    getPlacemark: function (coords) {
        if (this.myPlacemark) {
            this.myPlacemark.geometry.setCoordinates(coords);
            return this.myPlacemark
        }

        var placeMark = new ymaps.Placemark(coords, {
        }, {
            preset: 'islands#violetDotIconWithCaption',
            draggable: true
        });
        placeMark.events.add('dragend', function () {
            this.getAddress(placeMark.geometry.getCoordinates());
        }.bind(this));

        this.map.geoObjects.add(placeMark);
        return placeMark;
    },
    checkQuery: function (query) {
        if (!query)
            return false;
        query = query.trim();
        if (query.length > 5) {
            if (this.timeout) {
                clearTimeout(this.timeout);
            }

            this.timeout = setTimeout(function () {
                //query = 'Московская область, ' + query;
                query = 'Россия, ' +  query;
                this.findSuggest(query);
            }.bind(this), 500);
        }
    },
    findSuggest: function (request) {
        this.clearSuggest();
        this.lockButton();

        var _class = this;

        ymaps
            .geocode(request, {
                /*boundedBy: this.map.getBounds(),
                strictBounds: true,*/
                result: 1
            })
            .then(function (res) {
                for (var i = 0; i < res.geoObjects.getLength() && (i < 5); i++) {
                    var object = res.geoObjects.get(i);
                    var fullAddress = object.getAddressLine();
                    (function (fullAddress) {
                        var $item = $('<div>');
                        $item.addClass('address-suggest__item');
                        $item.html('<span>' + fullAddress + '</span>');
                        $item.on('click', function () {
                            _class.fillAddressInput(fullAddress
                                .replace('Россия,', '')
                                .replace('Московская область,', '')
                                .trim());
                            this.searchOnMap(fullAddress);

                            this.fillCityInput(object.getLocalities());
                            this.fillStreetInput(object.getThoroughfare());
                            this.fillHomeInput(object.getPremiseNumber());
                            this.fillZipInput(object.properties.get('metaDataProperty').GeocoderMetaData.Address.postal_code);

                            //this.fillCityInput(firstGeoObject.getLocalities());
                            //this.unlockButton();
                            this.clearSuggest();
                        }.bind(this));
                        $('[data-address-suggest]').append($item);
                    }.bind(this))(fullAddress);
                }

                if (!res.geoObjects.getLength()) {
                    this.showMessage('Запрашиваемый адрес не найден. Менеджер свяжется с Вами для уточнения', 'warning');
                    this.unlockButton();
                } else {
                    var $myItem = $('<div>');
                    $myItem.addClass('address-suggest__item');
                    $myItem.html('<span><strong>Моего адреса нет в списке</strong></span>');
                    $myItem.on('click', function () {
                        this.clearSuggest();
                        this.unlockButton();
                        this.showMessage('Менеджер свяжется с Вами для уточнения', 'warning');
                    }.bind(this));
                    $('[data-address-suggest]').append($myItem);

                    this.lockButton();
                    this.hideMessage();
                }
            }.bind(this), function (e) {
                this.showMessage('Произошла техническая ошибка. Попробуйте, пожалуйста, позже', 'error');
                console.error(e)
            }.bind(this))
    },
    fillAddressInput: function (address) {
        $('[data-search="address"]').val(address);
    },
    fillCityInput: function (city) {
        $('[data-input="city"]').val(city);
    },
    fillStreetInput: function (street) {
        $('[data-input="street"]').val(street);
    },
    fillHomeInput: function (home) {
        $('[data-input="home"]').val(home);
    },
    fillZipInput: function (zip) {
        $('[data-input="zip"]').val(zip);
    },
    searchOnMap: function (request) {
        $('[data-latitude]').val('');
        $('[data-longitude]').val('');

        ymaps
            .geocode(request, {
                /*boundedBy: this.map.getBounds(),
                strictBounds: true,*/
                result: 1
            })
            .then(function (res) {
                var error = false;
                var obj = res.geoObjects.get(0);

                console.log(obj.properties.get('metaDataProperty.GeocoderMetaData.precision'));
                if (obj) {
                    switch (obj.properties.get('metaDataProperty.GeocoderMetaData.precision')) {
                        case 'exact':
                            break;
                        case 'number':
                        case 'near':
                        case 'range':
                            error = 'Неточный адрес, требуется уточнение';
                            break;
                        case 'street':
                            error = 'Неполный адрес, требуется уточнение';
                            break;
                        case 'other':
                        default:
                            error = 'Неточный адрес, требуется уточнение';
                            break;
                    }
                } else {
                    error = 'Адрес не найден';
                }

                if (error) {
                    this.showMessage(error + "<br><strong>или</strong> оставьте поле как есть - наш менеджер свяжется с Вами для уточнения", 'warning');
                } else {
                    this.hideMessage();
                    this.unlockButton();
                    this.showResult(res);
                }
            }.bind(this), function (e) {
                this.showMessage("Техническая ошибка", 'error');
                console.log(e)
            }.bind(this))
    },
    showMessage: function (message, type) {
        $('[data-messages]')
            .removeClass('alert-danger')
            .removeClass('alert-warning')
            .removeClass('alert-success');

        switch (type) {
            case 'danger':
                $('[data-messages]').addClass('alert-danger');
                break;
            case 'success':
                $('[data-messages]').addClass('alert-success');
                break;
            default:
                $('[data-messages]').addClass('alert-warning');
        }

        $('[data-messages]').html(message);
        $('[data-messages]').slideDown();
    },
    hideMessage: function () {
        $('[data-messages]').slideUp();
    },
    showResult: function (obj) {
        var point = obj.geoObjects.get(0);
        var coordinates = point.geometry.getCoordinates();
        var latitude = coordinates[0];
        var longitude = coordinates[1];

        $('[data-latitude]').val(latitude);
        $('[data-longitude]').val(longitude);
        this.showMessage("Все в порядке, заполните оставшиеся поля", "success");
        this.myPlacemark = this.getPlacemark(coordinates);
        this.map.panTo(coordinates);

    },
    ready: function () {
        //this.initMap();
        ymaps.ready(this.initMap.bind(this));
    }
}
//mbdg.load.push('profile');