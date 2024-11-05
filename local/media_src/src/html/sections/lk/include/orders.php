<div class="container py-2">
  <div class="z4 text-uppercase mb-2 mb-md-3">Актуальные заказы</div>
  <div class="row">
    <div class="current-orders">

        <div class="current-orders__headline d-none d-xl-block">
          <div class="row">
            <div class="col-6">
              <div class="row">
                <div class="col-4">
                  <p class="mb-0">Номер</p>
                </div>
                <div class="col-4">
                  <p class="mb-0">Дата оформления</p>
                </div>
                <div class="col-4">
                  <p class="mb-0">Сумма</p>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="row">
                <div class="col-6">
                <p class="mb-0">Состав заказа</p>
                </div>
                <div class="col-6">
                  <p class="mb-0 text-right">Статус</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      <div class="d-block">
      <? for ($x = 0; $x <= 2; $x++): ?>
        <div class="current-orders__item" id="current-orders-item-<?=$x?>">
          <div class="row gy-1">
            <div class="col-xl-6">
              <div class="row gy-1 gx-md-2">
                <div class="col-6 col-xl-4">
                  <p class="mb-0">Заказ №1003</p>
                </div>
                <div class="col-6 col-xl-4 text-right text-xl-left">
                  <p class="mb-0">27.05.2021</p>
                </div>
                <div class="col-6 col-xl-4">
                  <p class="mb-0">108 000 р. <span class="text-small">(3&nbsp;шт.)</span></p>
                </div>
                <div class="col-6 d-xl-none text-right">
                  <p class="mb-0">Оплачен</p>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="row">
                <div class="col-xl-6">
                  <button data-current-order-button="<?=$x?>">
                    <span>Смотреть детали</span>
                    <svg>
                      <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg#arrow-drop"></use>
                    </svg>
                  </button>
                </div>
                <div class="col-6 ml-auto text-right d-none d-xl-block">
                  <p class="mb-0">Оплачен</p>
                </div>
              </div>

              <? for ($i = 0; $i <= 1; $i++): ?>
                <div class="current-orders__products" data-current-order-block="<?=$x?>">
                  <div class="ordered-product">
                    <div class="row align-self-start gx-1 gx-md-2">
                      <div class="col-3">
                        <a href="<?=$homeFolder?>product.php" class="ordered-product__photo">
                          <img src="<?=MEDIA_PATH;?>images/catalog/photo-<?=$i + 5?>.png" alt="product">
                        </a>
                      </div>
                      <div class="col-9 col-md-8 my-auto mx-auto">
                        <div class="z3 ordered-product__title">
                          <a href="<?=$homeFolder?>product.php">
                            Юбка женская бежевая из фатина
                            с принтом "листья" YANINA Basic
                          </a>
                        </div>
                        <div class="ordered-product__color">
                          <div class="z6 mb-0 text-uppercase">Цвет:</div>
                          <div class="ordered-product__color-pic">
                            <img src="<?=MEDIA_PATH;?>images/product/color-<?=$i?>.png" alt="color">
                          </div>
                        </div>
                        <div class="row align-items-center gx-1">
                          <div class="col-auto">
                            <div class="ordered-product__size">
                              <div class="z6 mb-0 text-uppercase">Размер:</div>
                              <div class="z4 mb-0 text-uppercase">s</div>
                            </div>
                          </div>
                          <div class="col-auto ml-auto">
                            <div class="z2 mb-0 text-uppercase">31 900р.</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <? endfor; ?>

            </div>
          </div>
        </div>
      <? endfor; ?>
      </div>

    </div>
  </div>
</div>