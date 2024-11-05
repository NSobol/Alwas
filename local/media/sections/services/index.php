<?
  $servicesBlocks = array(
    array(
      'title' => 'ДОСТУПНА ЛИ УСЛУГА ПОШИВА ПО МЕРКАМ ДЛЯ ПРИОБРЕТАЕМОГО ИЗДЕЛИЯ?',
      'text' => 'Мы стремимся оказать нашим покупательницам самый лучший сервис. Если вам понравилось изделие, но оно временно недоступно, или вы хотите заказать индивидуальный размер, Модный Дом YANINA предлагает услугу индивидуального пошива по меркам. Для получения подробной информации и уточнения возможных ограничений звоните по телефону: +7 929 545-87-17. Обращаем ваше внимание, что после внесения изменений в товар его уже нельзя вернуть или обменять (за исключением случаев ненадлежащего качества продукта).'
    ),
    array(
      'title' => 'КАКИЕ ИЗДЕЛИЯ YANINA Я МОГУ ПРИОБРЕСТИ ОНЛАЙН?',
      'text' => 'Онлайн вы можете приобрести изделия линеек YANINA BASIC (гиперссылка) и YANINA DEMI COUTURE (гиперссылка). Изделия доступны для покупки онлайн, если активна кнопка «Добавить в корзину».<br>
      Изделия YANINA COUTURE (гиперссылка) вы можете приобрести только по предварительному согласованию по номеру телефона +7 495 629-51-06.'
    ),
    array(
      'title' => 'МОГУ ЛИ Я ЗАПИСАТЬСЯ НА ВСТРЕЧУ В ШОУРУМЕ?',
      'text' => 'Вы можете записаться в шоурум в Личном кабинете (гиперссылка), в разделе с выбранным товаром или по номеру телефона Интернет-магазина +7-495-974-33-46,  +7 929 545-87-17.'
    ),
    array(
      'title' => 'ДОСТУПНА ЛИ УСЛУГА ДОСТАВКИ С ПРИМЕРКОЙ?',
      'text' => 'Да, вы можете заказать понравившееся вам изделия с примеркой.   Примерка с доставкой доступна по предварительному согласованию по номеру телефона или WhatsApp: +7 929 545-87-17.'
    )
  )
?>

<div class="services-page description-page pb-4 pb-sm-5">
  <div class="container">
    <div class="z2 font-400 text-uppercase text-center mt-sm-1 mb-2 mb-sm-3 mb-lg-5"><?=$pageTitle?></div>
    <div class="row">
      <div class="col-xl-10 col-xxl-8 mx-auto">

        <? foreach ($servicesBlocks as $key => $item): ?>
          <div class="services-block">
            <div class="row justify-content-between gx-1 gx-lg-2">
              <div class="col-md-6 my-auto">
                <div class="z4 text-uppercase d-none d-md-block mb-2 mb-lg-3"><?= $item["title"]?></div>
                <p class="mb-0"><?= $item["text"]?></p>
              </div>
              <div class="col-md-5 d-flex flex-column align-items-center mb-1 mb-md-0">
                <div class="z4 text-uppercase d-md-none"><?= $item["title"]?></div>
                <div class="services-block__picture">
                  <img src="<?=MEDIA_PATH;?>images/services/item-<?= $key ?>.png?t=1692277951183" alt="">
                </div>
              </div>
            </div>
          </div>
        <? endforeach; ?>


      </div>
    </div>
  </div>
</div>