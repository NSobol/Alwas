<div class="container py-2" data-sidebar="lk-default">
  <div class="row">

    <div class="col-xl-6">
      <div class="z4 text-uppercase mb-2 mb-md-3">Актуальные заказы</div>
      <div class="block pb-2 pb-md-3">
        <? for ($x = 0; $x <= 2; $x++): ?>
          <div class="default-order">
            <div class="row align-items-center gy-1 gx-1 gx-xl-2">
              <div class="col-6 col-md-3 order-1">
                <p class="mb-0">Заказ №1003</p>
              </div>
              <div class="col-6 col-md-3 text-right text-md-left order-3 order-md-2">
                <p class="mb-0">27.05.2021</p>
              </div>
              <div class="col-6 col-md-3 order-2 order-md-3">
                <p class="mb-0">108 000 р. <span class="text-small">(3 шт.)</span></p>
              </div>
              <div class="col-6 col-md-3 text-right order-4">
                <a href="<?= $homeFolder?>lk.php?section=orders#current-orders-item-<?=$x?>">подробнее</a>
              </div>
            </div>
          </div>
        <? endfor; ?>
      </div>
      <div class="row g-1 pb-4 pb-md-3 mb-md-3">
        <div class="col-md-6">
          <a href="<?= $homeFolder?>lk.php?section=orders" class="button button--white w-100">
            <span>История заказов</span>
          </a>
        </div>
        <div class="col-md-6">
          <a href="<?= $homeFolder?>catalog.php" class="button w-100">
            <span>Продолжить покупки</span>
          </a>
        </div>
      </div>
      <div class="d-none d-xl-block">
        <div class="z4 text-uppercase mb-2 mb-md-3">История просмотров</div>
        <div class="row gx-1 gx-md-2 gy-2 gy-md-4">
          <? for ($i = 0; $i <= 3; $i++): ?>
            <div class="col-6">
              <a href="" class="catalog-product">
                <div class="catalog-product__photo bg-primary">
                  <img src="<?=MEDIA_PATH;?>images/catalog/photo-<?= $i ?>.png" alt="product">
                </div>
                <div class="catalog-product__title text-uppercase">ПЛАТЬЕ ИЗ ТВИДА БУКЛЕ</div>
                <div class="catalog-product__price">340 000 руб</div>
              </a>
            </div>
          <? endfor; ?>
        </div>
      </div>
    </div>

    <div class="col-xl-5 col-xl-4 ml-auto mt-xl-0">
      <div data-sidebar="lk-default-sidebar">
        <div class="pb-xl-5" data-sidebar="lk-default-sidebar-inner">
          <div class="z4 text-uppercase mb-2 mb-md-3">Встречи</div>
          <div class="default-meeting">
            <p class="mb-md-2">
              <span class="text-big">У вас запланированы следующие встречи:</span>
            </p>
            <div class="default-meeting__table pb-2">
              <div class="row default-meeting__table-headline">
                <div class="col-5 ml-auto text-center">
                  <p class="mb-0">Дата</p>
                </div>
              </div>
              <? for ($n = 0; $n <= 1; $n++): ?>
                <div class="row default-meeting__table-item">
                  <div class="col-6">
                    <p class="mb-0">Консультант Яна</p>
                  </div>
                  <div class="col-5 ml-auto text-center">
                    <p class="mb-0">27.10.2021</p>
                  </div>
                </div>
              <? endfor; ?>
            </div>
            <div class="row g-1 pb-4 pb-md-3 mb-md-3">
              <div class="col-12">
                <a href="" class="button w-100">
                  <span>Запланировать новую встречу</span>
                </a>
              </div>
              <div class="col-12">
                <a href="<?= $homeFolder?>lk.php?section=meeting" class="button button--white w-100">
                  <span>История встреч</span>
                </a>
              </div>
            </div>
            <div class="z4 text-uppercase mb-2">Клуб YANINA</div>
            <div class="row g-1 mb-1">
              <div class="col-auto">
                <p class="mb-0">
                  <span class="text-big">Ваша скидка:</span>
                </p>
              </div>
              <div class="col-auto">
                <p class="mb-0">
                  <span class="text-big">5%</span>
                </p>
              </div>
            </div>
            <p class="mb-1">
              <span class="text-big">до следующей скидки</span>
            </p>
            <div class="sale-lavel mb-2">
              <div class="sale-lavel__row">
                <div class="sale-lavel__row-status" style="width: 62.5%;"></div>
              </div>
              <p class="text-right">125 000 р. / 200 000 р.</p>
            </div>
            <a href="" class="button w-100">
              <span>Подробнее о Клубе</span>
            </a>
          </div>
          <div class="d-xl-none pt-4">
            <div class="z4 text-uppercase mb-2 mb-md-3">История просмотров</div>
            <div class="row gx-1 gx-md-2 gy-2 gy-md-4">
              <? for ($i = 0; $i <= 3; $i++): ?>
                <div class="col-6">
                  <a href="" class="catalog-product">
                    <div class="catalog-product__photo bg-primary">
                      <img src="<?=MEDIA_PATH;?>images/catalog/photo-<?= $i ?>.png" alt="product">
                    </div>
                    <div class="catalog-product__title text-uppercase">ПЛАТЬЕ ИЗ ТВИДА БУКЛЕ</div>
                    <div class="catalog-product__price">340 000 руб</div>
                  </a>
                </div>
              <? endfor; ?>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>