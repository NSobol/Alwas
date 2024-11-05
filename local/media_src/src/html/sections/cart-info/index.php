<div class="cart-info" data-sidebar="cart-info-main">
  <div class="container">
    <div class="row justify-content-between gy-4 gy-lg-0">

      <div class="col-lg-7">
        <div class="z2 text-uppercase font-400 mb-2">Моя корзина <span>(2)</span></div>
        <div class="cart-info__orders">
          <? for ($i = 0; $i <= 1; $i++): ?>
            <div class="cart-info__product">
              <div class="row align-self-start gx-1 gx-md-2">
                <div class="col-md-3 mb-1 mb-md-0">
                  <div class="row align-items-center g-1">
                    <div class="col-3 col-md-12">
                      <a href="<?=$homeFolder?>product.php" class="cart-info__product-photo">
                        <img src="<?=MEDIA_PATH;?>images/catalog/photo-<?=$i + 5?>.png" alt="product">
                      </a>
                    </div>
                    <div class="col-9 d-md-none">
                      <div class="z3 cart-info__product-title">
                        <a href="<?=$homeFolder?>product.php">
                          Юбка женская бежевая из фатина
                          с принтом "листья" YANINA Basic
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-8 my-auto mx-auto">
                  <div class="z3 d-none d-md-block cart-info__product-title">
                    <a href="<?=$homeFolder?>product.php">
                      Юбка женская бежевая из фатина
                      с принтом "листья" YANINA Basic
                    </a>
                  </div>
                  <div class="cart-info__product-color">
                    <div class="z6 mb-0 text-uppercase">Цвет:</div>
                    <div class="cart-info__product-color-pic">
                      <img src="<?=MEDIA_PATH;?>images/product/color-<?=$i?>.png" alt="color">
                    </div>
                  </div>
                  <div class="cart-info__product-size">
                    <div class="z6 mb-0 text-uppercase">Размер:</div>
                    <div class="z4 mb-0 text-uppercase">s</div>
                  </div>
                  <div class="row align-items-center justify-content-between gx-3">
                    <div class="col-auto">
                      <button type="button" class="cart-info__product-delete">
                        <svg>
                          <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg#delete"></use>
                        </svg>
                        <span>Удалить</span>
                      </button>
                    </div>
                    <div class="col-auto ml-auto">
                      <div class="z2 mb-0 text-uppercase">31 900р.</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <? endfor; ?>
          <div class="cart-info__product">
            <div class="row align-self-start gx-1 gx-md-2">
              <div class="col-md-3 mb-1 mb-md-0">
                <div class="row align-items-center g-1">
                  <div class="col-3 col-md-12">
                    <a href="<?=$homeFolder?>product.php" class="cart-info__product-photo">
                      <img src="<?=MEDIA_PATH;?>images/catalog/photo-0.png" alt="product">
                    </a>
                  </div>
                  <div class="col-9 d-md-none">
                    <div class="z3 cart-info__product-title">
                      <a href="<?=$homeFolder?>product.php">
                        Юбка женская бежевая из фатина
                        с принтом "листья" YANINA Basic
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-8 my-auto mx-auto">
                <div class="z3 d-none d-md-block cart-info__product-title">
                  <a href="<?=$homeFolder?>product.php">
                    Юбка женская бежевая из фатина
                    с принтом "листья" YANINA Basic
                  </a>
                </div>
                <div class="quantity card__quantity" data-entity="basket-item-quantity-block">
                  <div class="z6 mb-0 mr-auto text-uppercase">Колличество:</div>
                  <button class="reset-btn minus quantity__minus" data-entity="basket-item-quantity-minus">
                    <svg class="svg-icon svg-icon--minus">
                      <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg#minuse"></use>
                    </svg>
                  </button>
                  <input readonly="" class="basket-item-amount-filed quantity__amount" value="300" data-value="3" data-entity="basket-item-quantity-field" id="basket-item-quantity-59">
                  <button class="reset-btn plus quantity__plus" data-entity="basket-item-quantity-plus">
                    <svg class="svg-icon svg-icon--plus">
                      <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg#plus"></use>
                    </svg>
                  </button>
                </div>
                <div class="cart-info__product-color">
                  <div class="z6 mb-0 text-uppercase">Цвет:</div>
                  <a href="#"class="cart-info__product-color-pic">
                    <div class="cart-info__product-color-pic-block" style="background: #000000; "></div>
                  </a>
                </div>
                <div class="cart-info__product-size">
                  <div class="z6 mb-0 text-uppercase">Размер:</div>
                  <div class="z4 mb-0 text-uppercase">s</div>
                </div>
                <div class="row align-items-center justify-content-between gx-3">
                  <div class="col-auto">
                    <button type="button" class="cart-info__product-delete">
                      <svg>
                        <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg#delete"></use>
                      </svg>
                      <span>Удалить</span>
                    </button>
                  </div>
                  <div class="col-auto ml-auto">
                    <div class="z2 mb-0 text-uppercase">31 900р.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row align-items-center justify-content-end g-2 pt-1 pt-md-2">
          <div class="col-auto">
            <div class="z4 text-uppercase mb-0">сумма:</div>
          </div>
          <div class="col-auto">
            <div class="z2 mb-0 text-uppercase">68 100р.</div>
          </div>
        </div>    
      </div>

      <div class="col-lg-5 col-xl-4">
        <div class="cart-info-asside" data-sidebar="cart-info-sidebar">
          <div class="cart-info-asside__inner" data-sidebar="cart-info-sidebar-inner">
            <div class="z2 text-uppercase font-400 mb-2">Контакты</div>
            <div class="cart-info-form">
              <form action="">
                <div class="cart-info-form__row">
                  <div class="form-field">
                    <label class="form-field__label" for="field-fio">ФИО</label>
                    <input type="text" class="form-field__area" id="field-fio" placeholder="Введите ваше ФИО" required>
                  </div>
                  <div class="form-field">
                    <label class="form-field__label" for="field-email">Email</label>
                    <input type="email" class="form-field__area" id="field-email" placeholder="example@gmail.com" data-mask="email" required>
                  </div>
                  <div class="form-field">
                    <label class="form-field__label" for="field-phone">Телефон</label>
                    <input type="text" class="form-field__area" id="field-phone" placeholder="+7" data-mask="phone" required>
                  </div>
                </div>
                <div class="cart-info-form__row">
                  <div class="d-flex align-items-center mb-2 mb-md-3">
                    <svg class="cart-info-icon">
                      <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg#credit-card"></use>
                    </svg>
                    <div class="z4 text-uppercase mb-0">
                      <span>Способы оплаты</span>
                    </div>
                  </div>
                  <div class="form-checker">
                    <div class="form-checker__checkbox">
                      <input type="checkbox" name="form-checkbox-1" id="form-checkbox-1">
                      <span></span>
                      <svg>
                        <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg#check-form"></use>
                      </svg>
                    </div>
                    <label class="form-checker__label" for="form-checkbox-1">Онлайн-оплата картой</label>
                  </div>
                </div>
                <div class="cart-info-form__row">
                  <div class="d-flex align-items-center mb-2 mb-md-3">
                    <svg class="cart-info-icon">
                      <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg#delivery-box"></use>
                    </svg>
                    <div class="z4 text-uppercase mb-0">
                      <span>доставка</span>
                    </div>
                  </div>
                  <div class="form-checker">
                    <div class="form-checker__checkbox">
                      <input type="checkbox" name="form-checkbox-2" id="form-checkbox-2">
                      <span></span>
                      <svg>
                        <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg#check-form"></use>
                      </svg>
                    </div>
                    <label class="form-checker__label" for="form-checkbox-2">Самовывоз из магазина  по адресу Москва, ул. Тверская, 6 стр.6</label>
                  </div>
                  <div class="form-checker">
                    <div class="form-checker__checkbox">
                      <input type="checkbox" name="form-checkbox-3" id="form-checkbox-3">
                      <span></span>
                      <svg>
                        <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg#check-form"></use>
                      </svg>
                    </div>
                    <label class="form-checker__label" for="form-checkbox-3">Доставка курьером в пределах МКАД</label>
                  </div>
                  <div class="form-checker">
                    <div class="form-checker__checkbox">
                      <input type="checkbox" name="form-checkbox-4" id="form-checkbox-4">
                      <span></span>
                      <svg>
                        <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg#check-form"></use>
                      </svg>
                    </div>
                    <label class="form-checker__label" for="form-checkbox-4">Доставка курьером за МКАД</label>
                  </div>
                  <div class="form-checker">
                    <div class="form-checker__checkbox">
                      <input type="checkbox" name="form-checkbox-5" id="form-checkbox-5">
                      <span></span>
                      <svg>
                        <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg#check-form"></use>
                      </svg>
                    </div>
                    <label class="form-checker__label" for="form-checkbox-5">Доставка по РФ</label>
                  </div>
                  <div class="form-checker">
                    <div class="form-checker__checkbox">
                      <input type="checkbox" name="form-checkbox-6" id="form-checkbox-6">
                      <span></span>
                      <svg>
                        <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg#check-form"></use>
                      </svg>
                    </div>
                    <label class="form-checker__label" for="form-checkbox-6">Международная доставка</label>
                  </div>
                </div>
                <div class="cart-info-form__row">
                  <div class="d-flex align-items-center mb-2 mb-md-3">
                    <svg class="cart-info-icon">
                      <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg#geo-marker"></use>
                    </svg>
                    <div class="z4 text-uppercase mb-0">
                      <span>Адрес доставки</span>
                    </div>
                  </div>
                  <div class="form-field">
                    <label class="form-field__label" for="field-select">Выберите адрес</label>
                    <div class="form-field__wrapp">
                      <select class="form-field__area form-field__area--select" name="field-select" id="field-select" required>
                        <option value="1">Яна</option>
                        <option value="2">Яна 1</option>
                        <option value="3">Яна 2</option>
                      </select>
                      <svg>
                        <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg#arrow-drop"></use>
                      </svg>
                    </div>
                  </div>
                  <a href="" class="button button--white text-uppercase w-100">
                    <span>Добавить адрес доставки</span>
                  </a>
                </div>
                <div class="cart-info-form__row">
                  <div class="row align-items-center justify-content-between g-1">
                    <div class="col-auto">
                      <label for="form-checkbox-7" class="d-flex align-items-center justify-content-between mb-0">
                        <svg class="cart-info-icon">
                          <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg#gift"></use>
                        </svg>
                        <div class="z4 text-uppercase mb-0">
                          <span>ДОБАВИТЬ УПАКОВКУ</span>
                        </div>
                      </label>
                    </div>
                    <div class="col-auto ml-auto">
                      <a href="" class="d-flex pb-0">
                        <svg class="cart-info-icon">
                          <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg#help-circle"></use>
                        </svg>
                      </a>
                    </div>
                    <div class="col-auto">
                      <div class="form-checker">
                        <div class="form-checker__checkbox">
                          <input type="checkbox" name="form-checkbox-7" id="form-checkbox-7">
                          <span></span>
                          <svg>
                            <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg#check-form"></use>
                          </svg>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="cart-info-form__row">
                  <div class="row align-items-center justify-content-between g-1">
                    <div class="col-auto">
                      <label for="form-checkbox-8" class="d-flex align-items-center justify-content-between mb-0">
                        <svg class="cart-info-icon">
                          <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg#write"></use>
                        </svg>
                        <div class="z4 text-uppercase mb-0">
                          <span>ЗАПИСАТЬСЯ В ШОУРУМ</span>
                        </div>
                      </label>
                    </div>
                    <div class="col-auto ml-auto">
                      <a href="" class="d-flex pb-0">
                        <svg class="cart-info-icon">
                          <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg#help-circle"></use>
                        </svg>
                      </a>
                    </div>
                    <div class="col-auto">
                      <div class="form-checker">
                        <div class="form-checker__checkbox">
                          <input type="checkbox" name="form-checkbox-8" id="form-checkbox-8">
                          <span></span>
                          <svg>
                            <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg#check-form"></use>
                          </svg>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="cart-info-form__row">
                  <div class="form-field">
                    <label class="form-field__label" for="product-request-3">Комментарий</label>
                    <textarea class="form-field__area form-field__area--textarea" name="product-request-3" id="product-request-3"></textarea>
                  </div>
                </div>
                <div class="cart-info-form__row">
                  <button type="submit" class="button button--black text-uppercase w-100 mb-2 mb-lg-3">
                    <span>Оформить заказ</span>
                  </button>
                  <div class="form-checker">
                    <div class="form-checker__checkbox">
                      <input type="checkbox" name="form-checkbox-9" id="form-checkbox-9" required>
                      <span></span>
                      <svg>
                        <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg#check-form"></use>
                      </svg>
                    </div>
                    <label class="form-checker__label" for="form-checkbox-9">Согласен со следующими условиями:</label>
                  </div>
                  <p class="mb-1"><a href=""><u>Политика конфиденциальности</u></a></p>
                  <p class="mb-1"><a href=""><u>Публичная оферта</u></a></p>
                  <p class="mb-0"><a href=""><u>Условия оплаты и доставки</u></a></p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>