<div class="return-page description-page pb-4 pb-sm-5">
  <div class="container">
    <div class="z2 font-400 text-uppercase text-center mt-sm-1 mb-2 mb-sm-3 mb-lg-5"><?=$pageTitle?></div>
    <div class="row">
      <div class="col-xl-10 col-xxl-8 mx-auto">


        <div class="package-info">
          <div class="z4 text-uppercase mb-2 mb-md-3">ДОСТАВКА</div>
          <p class="mb-0 mb-1">
            Мы доставляем изделия по России и миру в будние дни с 10 утра и до 19:00. Посмотреть стоимость и сроки доставки вы можете в таблице ниже. Напоминаем, что вы также можете заказать доставку по Москве с примеркой по предварительному согласованию по номеру телефона или WhatsApp:
            <br>
            <span class="package-info__contact">
              <svg>
                <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg?t=1692277951183#whatsapp"></use>
              </svg>  
              <span>+7 929 545-87-17</span>
            </span>
          </p>
          <div class="package-info__tabel mb-2">
            <? 
              $packageTableItems = array(
                array(
                  "place" => "Москва 1 - 2 дня:",
                  "price" => "800 р"
                ),
                array(
                  "place" => "Московская область 1 - 2 дня:",
                  "price" => "1200 р"
                ),
                array(
                  "place" => "Санкт - Петербург и Ленинградская область 1 - 2 дня:",
                  "price" => "1200 р"
                ),
                array(
                  "place" => "Остальные города России 2 - 4 дня:",
                  "price" => "1500 р"
                ),
                array(
                  "place" => "Международная доставка рассчитывается индивидуально.",
                  "price" => ""
                ),
              ) 
            ?>
            <? foreach ($packageTableItems as $item): ?>
              <div class="package-info__tabel-row">
                <div class="row align-items-center justify-content-between g-1">
                  <div class="col-9">
                    <p class="mb-0"><?=$item["place"]?></p>
                  </div>
                  <div class="col-3 text-right">
                    <p class="mb-0"><?=$item["price"]?></p>
                  </div>
                </div>
              </div>
            <? endforeach; ?>
          </div>
          <p class="mb-0">
            В согласованный день курьер заблаговременно свяжется с вами для подтверждения времени и места доставки.
            <br>
            В случае отказа от заказа при курьерской доставке покупатель оплачивает стоимость доставки согласно тарифу, действующему в регионе.
            <br><br>
            Остались вопросы или нужна срочная доставка? Наш консультант с радостью поможет вам по номеру телефона или 
            <br>
            WhatsApp: +7 929 545-87-17
          </p>
        </div>

        <div class="package-info">
          <div class="z4 text-uppercase mb-2 mb-md-3">ОПЛАТА</div>
          <p class="mb-2">Вы можете оплатить любым удобным для вас способом</p>
          <ul class="package-info__list mb-2">
            <li>
              <p class="mb-0">Банковской картой на сайте Visa, Mastercard, МИР </p>
              <img src="<?=MEDIA_PATH;?>images/pay-trio.png?t=1692277951183" alt="">
            </li>
            <li>
              <p class="mb-0">Оплата через банк Тинькофф</p>
              <img src="<?=MEDIA_PATH;?>images/tinkoff.png?t=1692277951183" alt="">
            </li>
            <li>
              <p class="mb-0">Cloudpay</p>
            </li>
            <li>
              <p class="mb-0">Наличными при самовывозе или доставке с примеркой</p>
              <svg>
                <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg?t=1692277951183#money"></use>
              </svg>  
            </li>
          </ul>
          <p class="mb-0">
            Обращаем внимание граждан России, что платежи через систему PayPal запрещены, так как с 31 июля PayPal прекращает переводы по России.
            <br><br>
            Просьба пользоваться оплатой через банк Тинькофф.
            <br><br>
            Все операции с банковскими картами проводятся в соответствии с требованиями VISA International, MasterCard Worldwide, карты МИР защищены технологией MirAccept.
            <br><br>
            Мы гарантируем безопасность платежей и надежно защищаем данные вашей банковской карты при оплате онлайн. Все конфиденциальные данные передаются в зашифрованном виде с использованием криптографического протокола SSL на сервер. Дальнейшая передача данных с сервера осуществляется по закрытым банковским сетям высшей степени защиты. Обработка конфиденциальных данных клиента производится в процессинговом центре.
          </p>
        </div>


      </div>
    </div>
  </div>
</div>