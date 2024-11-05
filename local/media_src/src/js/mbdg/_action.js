mbdg.Action = {
    Favorite: function (e) {
        e.preventDefault();
        var self = $(e.currentTarget),
            post = {
                params: self.data('params')
            };
        $.ajax({
            url: mbdg.AJAX_PATH + "Favorite.php",
            data: post,
            method: "POST",
            dataType: "json",
            success: function (result) {
                if (result.status == "added") {
                    self.addClass('is-selected');
                } else {
                    self.removeClass('is-selected');
                }
                $(window).trigger('mbdg:Favorite');
            }
        });
    },
    CityChange: function (e) {
        e.preventDefault();
        var self = $(e.currentTarget),
            post = {
                id: self.data('id')
            };
        $.ajax({
            url: mbdg.AJAX_PATH + "ChangeCity.php",
            data: post,
            method: "POST",
            dataType: "json",
            success: function (result) {
                if (result.status == "success") {
                    $('.pop-cities .active').removeClass('active')
                    self.closest('li').addClass('active');
                    window.location.reload();
                }
                $(window).trigger('mbdg:ChageCity');
            }
        });
    },
    setUserOption: function (postData, callback) {
        $.ajax({
            url: mbdg.AJAX_PATH + "SetUserOption.php",
            data: postData,
            method: "POST",
            dataType: "json",
            success: function (result) {
                if (typeof callback == 'function')
                    callback(result);
            }
        });
    }
};
mbdg.load.push('Events');