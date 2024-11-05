mbdg.subscribe = {

    subscribeInit: function (element){

        $('[data-subscribe-info]').html('');
        $('[data-subscribe-info]').removeClass('errors');
        $('[data-subscribe-info]').removeClass('success');
        let $this = element;
        let btnName = $this.find('[type="submit"]').attr('name');
        let btnVal = $this.find('[type="submit"]').attr('value');
        let dataForm = $this.serialize() + "&" + btnName + "=" + btnVal;

        $.ajax({
            url: $this.attr('action'),
            type: 'post',
            context: this,
            data: dataForm,
            success: function (response) {

                if (response['errors']) {
                    $('[data-subscribe-info]').addClass('errors');
                    $.each(response['errors'], function (i, val) {
                        $('[data-subscribe-info]').append(val+'<br />');
                    });
                    $('[data-subscribe-info]').append('<br />');
                }else{
                    $('[data-subscribe-info]').addClass('success');
                    $('[data-subscribe-info]').append('Вы успешно подписались на рассылку<br /><br />');
                    $(element).find('input[name="sf_EMAIL"]').val('');
                }

            },
            complete: function() {
            }
        });

    },

    ready: function () {

        var _class = this;

        $(document).on('submit', '[data-subscribe-form]', function (e){
            e.preventDefault();
            _class.subscribeInit($(this));
        });

    }
}
mbdg.load.push('subscribe');