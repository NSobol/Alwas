<div class="club-page description-page pb-3 mb-lg-4">
  <div class="container">
    <div class="z2 font-400 text-uppercase text-center mt-sm-1 mb-2 mb-sm-3 mb-lg-5"><?=$pageTitle?></div>
    <div class="row pb-2 mb-lg-4">
      <div class="col-xl-10 col-xxl-8 mx-auto">
        <p class="mb-0">
          Дорогие друзья и поклонницы Модного Дома YANINA!
          <br>
          Мы приглашаем вас в YANINA Club - наш  клуб привилегий.
          <br><br>
          Зарегистрировавшись в личном кабинете на сайте, вы станете первыми узнавать об акциях и новостях Дома. Совершив покупку на определенную сумму, в течение двух лет вы гарантированно получите скидки на следующие покупки, а также доступ к закрытым мероприятиям и акциям. Программа лояльности накопительная - ведь #YANINAGirls остаются с нами навсегда, с первого клика! 
          <br><br>
          В YANINA Club есть четыре уровня программы лояльности: Silver, Gold, Platinum и Black. 
        </p>
      </div>
    </div>
    <div class="club-cards">
      <?
        $clubCards = array(
          array(
            "title" => "Silver",
            "subtitle" => "Сумма покупок<br>на 50.000 рублей",
            "list" => array(
              "Приоритетная запись в шоурум и возможность доставки с примеркой.",
              "Информационная рассылка.",
              "Уведомления о закрытых распродажах и о поступлении новинок."
            )
          ),
          array(
            "title" => "Gold",
            "subtitle" => "Сумма покупок<br>на 100.000 рублей",
            "list" => array(
              "Гарантированная скидка 5%.",
              "Уведомления о закрытых распродажах и о поступлении новинок.",
              "Информационная рассылка.",
              "Приоритетная запись в шоурум и возможность доставки с примеркой."
            )
          ),
          array(
            "title" => "Platinum",
            "subtitle" => "Сумма покупок<br>на 200.000 рублей",
            "list" => array(
              "Гарантированная скидка 10%.",
              "Приглашение на клиентские дни Модного Дома.",
              "Подарки на праздники.",
              "Уведомления о закрытых распродажах и о поступлении новинок.",
              "Возможность выездной примерки и приоритетная доставка."
            )
          ),
          array(
            "title" => "Black",
            "subtitle" => "Сумма покупок<br>на 700.000 рублей",
            "list" => array(
              "Гарантированная скидка 15%.",
              "Приглашение на коктейли и клиентские дни Модного Дома.",
              "Возможность предзаказа изделий на приоритетном уровне.",
              "Подарки на праздники.",
              "Уведомления о закрытых распродажах и о поступлении новинок.",
              "Возможность выездной примерки и приоритетная доставка."
            )
          )
        );
      ?>
      <div class="row align-items-stretch g-2">
        <? foreach ($clubCards as $key => $card): ?>
          <div class="col-md-6 col-xxl-3">
            <div class="club-cards__item<?if ($key === 3):?> club-cards__item--black<?endif;?>">
              <div class="z2 text-center text-uppercase mb-2 mb-md-3"><?=$card["title"]?></div>
              <div class="z3 text-center mb-2 mb-md-3"><?=$card["subtitle"]?></div>
              <ol class="club-cards__item-list">
                <? foreach ($card["list"] as $item): ?>
                  <li><?=$item?></li>
                <? endforeach; ?>
              </ol>
            </div>
          </div>
        <? endforeach; ?>
      </div>
    </div>
  </div>
</div>
