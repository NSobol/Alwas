<div class="faq-page description-page pb-4 pb-sm-5">
  <div class="container">
    <div class="z2 font-400 text-uppercase text-center mt-sm-1 mb-2 mb-sm-3 mb-lg-5"><?=$pageTitle?></div>
    <div class="row">
      <div class="col-xl-10 col-xxl-8 mx-auto">


        <? 
          $faqItems= array(
            "Как оформить заказ на сайте",
            "МОЖНО ЛИ ОФОРМИТЬ ЗАКАЗ ПО ТЕЛЕФОНУ?",
            "НУЖНО ЛИ МНЕ РЕГИСТРИРОВАТЬСЯ, ЧТОБЫ ОФОРМИТЬ ЗАКАЗ?",
            "ЧТО ДЕЛАТЬ, ЕСЛИ Я НЕ ПОМНЮ ПАРОЛЬ?",
            "РЕЗЕРВИРУЕТСЯ ЛИ ТОВАР В КОРЗИНЕ?",
            "КАК УЗНАТЬ, ЧТО МОЙ ЗАКАЗ ПРИНЯТ В РАБОТУ?",
            "МОГУ ЛИ ОТМЕНИТЬ ИЛИ ВНЕСТИ ИЗМЕНЕНИЯ В СВОЙ ЗАКАЗ?",
            "КАК Я МОГУ ОПЛАТИТЬ ЗАКАЗ?",
            "МОГУ ЛИ Я ОПЛАТИТЬ ОДИН ЗАКАЗ РАЗНЫМИ СПОСОБАМИ? НАПРИМЕР, ЧАСТЬ БАНКОВСКОЙ КАРТОЙ, А ЧАСТЬ НАЛИЧНЫМИ?",
            "КУДА ОБРАЩАТЬСЯ, ЕСЛИ ПРИ ОПЛАТЕ БАНКОВСКОЙ КАРТОЙ ПРОИЗОШЛА ОШИБКА?",
            "КОГДА БУДЕТ ОТПРАВЛЕН И ДОСТАВЛЕН МОЙ ЗАКАЗ?",
            "СКОЛЬКО СТОИТ ДОСТАВКА?",
            "ДОСТУПНА ЛИ В ВАШЕМ МАГАЗИНЕ ФУНКЦИЯ САМОВЫВОЗА?",
            "НУЖНО ЛИ МНЕ ОПЛАЧИВАТЬ ТАМОЖЕННУЮ ПОШЛИНУ, КАК В ДРУГИХ ИНТЕРНЕТ-БУТИКАХ?",
            "МОЖЕТ ЛИ МОЙ ЗАКАЗ ПРИНЯТЬ ДРУГОЙ ЧЕЛОВЕК?",
            "МОЖНО ЛИ ОТМЕНИТЬ ЗАКАЗ?",
            "КАК ВЕРНУТЬ ИЛИ ОБМЕНЯТЬ ТОВАР?",
            "В КАКОЙ СРОК БУДУТ ВОЗВРАЩЕНЫ ДЕНЬГИ?",
            "ЧТО ДЕЛАТЬ, ЕСЛИ ПОЛУЧЕННЫЙ ТОВАР НЕ СООТВЕТСТВУЕТ ОФОРМЛЕННОМУ ЗАКАЗУ?",
            "КАК ПРАВИЛЬНО ВЫБРАТЬ ПОДХОДЯЩИЙ РАЗМЕР?"
          ) 
        ?>
        <? foreach ($faqItems as $item): ?>
          <div class="faq-block">
            <button type="button" class="faq-block__button" data-toggle="buttonn">
              <div class="row align-items-center justify-content-between">
                <div class="col-10">
                  <div class="z4 mb-0 text-uppercase text-left">
                    <span><?=$item?></span>
                  </div>
                </div>
                <div class="col-auto">
                  <svg class="plus">
                    <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg?t=1692277951183#plus"></use>
                  </svg>
                </div>
              </div>
            </button>
            <div data-toggle="content">
              <div class="faq-block__content">
                <p>
                  Оформить заказ очень просто: чтобы найти нужный товар, воспользуйтесь навигацией сайта. На верхней панели расположены разделы по категориям — нажав на категорию, вы увидите выпадающее меню с группами товаров. Нажмите на нужную группу, и вы попадете на страницу, где собраны интересующие вас товары.
                  <br><br>
                  Выберите нужный товар и зайдите на его страницу, кликнув на изображение. На странице товара вы увидите изображения его деталей и вида сзади, а также описание состава. Внимательно ознакомьтесь с характеристиками товара и выберите нужный размер. После этого нажмите на кнопку «Добавить в корзину» и далее «Перейти в корзину». Чтобы продолжить покупки, снова воспользуйтесь навигацией.
                  <br><br>
                  Чтобы удалить ненужные позиции из корзины, нажмите на кнопку «Удалить», которая находится справа. Подтвердите удаление.
                  <br><br>
                  Для оформления заказа кликните на кнопку «Оформить заказ». Далее перед вами откроется меню из трех разделов: способ получения, способ оплаты и подтверждение. На странице «Способ получения» заполните все необходимые пункты. Вы можете указать новый адрес или выбрать его из сохраненных адресов, если вы уже совершали покупки на YANINACOUTURE.COM. Вы также можете выбрать опцию «Самовывоз», которая доступна из магазина в Москве. Нажмите кнопку «Продолжить».
                  <br><br>
                  На странице «Способ оплаты» выберите наиболее удобный для вас способ оплаты (наличными, банковской картой на сайте или курьеру, через систему PayPal) и нажмите кнопку «Продолжить». На странице «Подтверждение» проверьте, пожалуйста, ваш заказ. При необходимости укажите комментарии к заказу. После чего нажмите кнопку «Оформить заказ».
                </p>
              </div>
            </div>
          </div>
        <? endforeach; ?>


      </div>
    </div>
  </div>
</div>