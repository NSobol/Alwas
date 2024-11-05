mbdg.analytics = {
    init: function () {
        $('body').on('click', '[data-ga], [data-ym], [data-fb]',
            function (e) {/*EVENT SUBMIT DATA*/
                var data = $(this).data();
                mbdg.analytics.Submit(data);
            }
        );
    },
    Submit: function (data) {
        console.log(data);
        if (data.gtag) {
            gtag('event', data.gtag.event, {'event_category': data.gtag.cat, 'event_label': data.gtag.label});
        }
        if (data.ga && typeof ga === 'function') {
            ga('send', 'event', data.ga.action, data.ga.method);
        }
        if (data.ym && window.yaCounterCode) {
            var yam = eval(window.yaCounterCode);
            yam.reachGoal(data.ym);
        }
        if (data.fb && window.fbq) {
            fbq('track', data.fb);
        }
        if (data.gtm) {
            dataLayer.push({
                'event': 'GAEvent',
                'eventCategory': 'form',
                'eventAction': 'success',
                'eventLabel': data.gtm
            });
        }
    }
}