mbdg.Form = {
    Class: {
        isError: 'is-error',
        isFilled: 'is-filled',
        noError: 'no-error'
    },
    CheckField: function () {
        var _self = mbdg.Form,
            _class = _self.Class,
            type = $(this).attr('type'),
            val = $(this).val(),
            bHasError = true;
        if (val.length > 0)
            $(this).addClass(_class.isFilled);
        else
            $(this).removeClass(_class.isFilled);
        if ($(this).data('required')) {
            if (val.length > 2 && val != '')
                bHasError = false;
            else
                bHasError = true;
            switch (type) {
                case 'tel':
                    var length = val.length;
                    if (length < 10)
                        bHasError = true;
                    else
                        bHasError = false;
                    break;
                case 'email':
                    var emailPattern = /.+@.+\..+/i;
                    if (emailPattern.test(val))
                        bHasError = false;
                    else
                        bHasError = true;
                    break;
            }
            if (bHasError)
                $(this)
                    .removeClass(_class.noError)
                    .addClass(_class.isError);
            else
                $(this)
                    .removeClass(_class.isError)
                    .addClass(_class.noError);
        } else {
            var bHasError = false;
            switch (type) {
                case 'tel':
                    var length = val.length;
                    if (length < 10)
                        bHasError = true;
                    else
                        bHasError = false;
                    break;
                case 'email':
                    var emailPattern = /.+@.+\..+/i;
                    if (emailPattern.test(val))
                        bHasError = false;
                    else
                        bHasError = true;
                    break;
            }
            if (bHasError)
                $(this)
                    .removeClass(_class.noError)
                    .addClass(_class.isError);
            else
                $(this)
                    .removeClass(_class.isError)
                    .addClass(_class.noError);
        }
    },
    Check: function () {
        var _form = this,
            _class = this.Class;
        $('body').on({
            'focusin': function () {
                $(this).removeClass(_class.isError);
            },
            'focusout': _form.CheckField
        }, 'input:not(:checkbox):not(:radio), textarea');
        $('body').on('change', 'input[type="file"]', function (e) {
            var _self = $(this);
            var file = e.target.files[0];
            var $fileNameOutput = _self.next('label');
            if (file) { 
                var fileName = file.name;
                $fileNameOutput.text(fileName);
            } else {
                $fileNameOutput.html($fileNameOutput.data('placeholder-default'));
            };
        });
        $('body').on('submit', 'form', function (e) {
            var $form = $(this),
                inputChecked = $form.find('input:checkbox:checked[data-required], input:radio:checked[data-required]'),
                inputNotChecked = $form.find('input:checkbox:not(:checked)[data-required], input:radio:checked:not(:checked)[data-required]'),
                inputText = $form.find('input:not(:checkbox):not(:radio)[data-required]:not(.' + _class.noError + '), textarea[data-required]:not(.' + _class.noError + ')'),
                countErrors = $form.find('[data-required]').length
            inputChecked
                .addClass(_class.noError)
                .removeClass(_class.isError);
            //BX.onCustomEvent('onStartFormSend');
            if (countErrors > $form.find('.' + _class.noError).length) {
                mbdg.log('formHasError');
                inputText
                    .addClass(_class.isError);
                inputNotChecked
                    .addClass(_class.isError)
                    .removeClass(_class.noError);
                //BX.onCustomEvent('onFormError');
                e.preventDefault();
                if (typeof BX === "function")
                    BX.closeWait();
                return false;
            }
            mbdg.log('formSuccess');
            //BX.onCustomEvent('onFormSuccess');
        });
    },
    Success: function (data) {
        var _self = this;
        if (data.ANALYTICS)
            _self.Analytics.Submit(data.ANALYTICS);
    },
    Analytics: {
        Action: function () {
            $('body').on('click', '[data-ga], [data-ym]', function (e) {
                var data = $(this).data();
                mbdg.Form.Analytics.Submit(data);
            });
        },
        Submit: function (data) {
            if (data.ym && window.yaCounterCode) {
                var yam = eval(window.yaCounterCode);
                mbdg.log(yam, data.ym)
                yam.reachGoal(data.ym);
            }
        }
    },
    ready: function () {
        this.Check();
        this.Analytics.Action();
    }
}
mbdg.load.push('Form');