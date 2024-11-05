<div class="container py-2">
  <div class="row gx-5 gx-xl-2">
    <div class="col-lg-6 col-xl-5 col-xxl-4 mb-4 mb-lg-0">
      <div class="z4 text-uppercase mb-2 mb-md-3">Актуальные встречи</div>

      <div class="meeting-block pb-4 pb-lg-5">
        <p class="mb-2">У вас запланированы следующие встречи:</p>

        <div class="meeting-block__headline">
          <div class="row align-items-center gx-1">
            <div class="col-5">
              <p class="mb-0">Консультант</p>
            </div>
            <div class="col-7">
              <div class="row align-items-center gx-1">
                <div class="col-5 text-center">
                  <p class="mb-0">Дата</p>
                </div>
                <div class="col-4 text-center">
                  <p class="mb-0">Время</p>
                </div>
                <div class="col-3 text-right"></div>
              </div>
            </div>
          </div>
        </div>

        <? for ($i = 0; $i <= 1; $i++): ?>
          <div class="meeting-block__item">
            <div class="row align-items-center gx-1">
              <div class="col-5">
                <p class="mb-0">Консультант Яна</p>
              </div>
              <div class="col-7">
                <div class="row align-items-center gx-1">
                  <div class="col-5 text-center">
                    <p class="mb-0">27.10.2021</p>
                  </div>
                  <div class="col-4 text-center">
                    <p class="mb-0">14.00</p>
                  </div>
                  <div class="col-3 text-right">
                    <a href="" class="meeting-block__item-eddit">
                      <svg>
                          <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg?t=1692277951183#eddit"></use>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <? endfor; ?>

      </div>

      <div class="z4 text-uppercase mb-2 mb-md-3 d-none d-lg-block">Прошедшие встречи</div>

      <div class="meeting-block pb-4 pb-lg-5 d-none d-lg-block">
        <p class="mb-2">У вас прошли следующие встречи:</p>

        <div class="meeting-block__headline">
          <div class="row align-items-center gx-1">
            <div class="col-5">
              <p class="mb-0">Консультант</p>
            </div>
            <div class="col-7">
              <div class="row align-items-center gx-1">
                <div class="col-5 text-center">
                  <p class="mb-0">Дата</p>
                </div>
                <div class="col-4 text-center">
                  <p class="mb-0">Время</p>
                </div>
                <div class="col-3 text-right">
                  <p class="mb-0">Статус</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <? for ($i = 0; $i <= 1; $i++): ?>
          <div class="meeting-block__item">
            <div class="row align-items-center gx-1">
              <div class="col-5">
                <p class="mb-0">Консультант Яна</p>
              </div>
              <div class="col-7">
                <div class="row align-items-center gx-1">
                  <div class="col-5 text-center">
                    <p class="mb-0">27.10.2021</p>
                  </div>
                  <div class="col-4 text-center">
                    <p class="mb-0">14.00</p>
                  </div>
                  <div class="col-3 text-right">
                    <p class="mb-0">
                      <span class="text-small text-gray">Отменен</span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <? endfor; ?>

      </div>

      <div class="z4 text-uppercase mb-2 mb-md-3">Важная информация</div>

      <div class="meeting-contacts pb-4">
        <a href="https://goo.gl/maps/CsUJYbuBZC4v9Yys5" target="_blank" rel="noopener noreferrer" class="meeting-contacts__item">
          <div class="meeting-contacts__item-icon">
            <svg>
              <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg?t=1692277951183#locator"></use>
            </svg>
          </div>
          <div class="meeting-contacts__item-text">Москва, ул. Тверская, 6 стр.1</div>
        </a>
        <a href="tel:+74956295106" class="meeting-contacts__item">
          <div class="meeting-contacts__item-icon">
            <svg>
              <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg?t=1692277951183#smartphone"></use>
            </svg>
          </div>
          <div class="meeting-contacts__item-text">+7 495 629 51 06</div>
        </a>
        <div class="meeting-contacts__item">
          <div class="meeting-contacts__item-icon">
            <svg>
              <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg?t=1692277951183#clock"></use>
            </svg>
          </div>
          <div class="meeting-contacts__item-text">пн-пт 10:00 - 19:00</div>
        </div>
      </div>
        
      <div class="z4 text-uppercase mb-2 mb-md-3">Как проехать:</div>
      <div class="meeting-descr">
        <p class="mb-0">Есть много вариантов Lorem Ipsum, но большинство из них имеет не всегда приемлемые модификации, например, юмористические вставки или слова, которые даже отдалённо не напоминают латынь. Если вам нужен Lorem Ipsum для серьёзного проекта, вы наверняка не хотите какой-нибудь шутки, скрытой в середине абзаца. </p>
      </div>

    </div>
    <div class="col-lg-6 col-xl-5 col-xxl-4 ml-auto">
      <div class="z4 text-uppercase mb-2 mb-md-3">Назначить встречу в шоуруме</div>
      
      <div class="meeting-form mb-2">
        <div class="form">
          <form action="">
            <div class="form-field">
              <label class="form-field__label" for="field-date">Желаемая дата</label>
              <input type="text" class="form-field__area" id="field-date" placeholder="ДД/ММ/ГГ" data-mask="date" required>
            </div>
            <div class="form-field">
              <label class="form-field__label" for="field-phone">Телефон</label>
              <input type="text" class="form-field__area" id="field-phone" placeholder="+7" data-mask="phone" required>
            </div>
            <div class="form-field">
              <label class="form-field__label" for="field-select">Стилист</label>
              <div class="form-field__wrapp">
                <select class="form-field__area form-field__area--select" name="field-select" id="field-select" required>
                  <option value="1">Яна</option>
                  <option value="2">Яна 1</option>
                  <option value="3">Яна 2</option>
                </select>
                <svg>
                  <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg?t=1692277951183#arrow-drop"></use>
                </svg>
              </div>
            </div>
            <div class="form-field">
              <label class="form-field__label" for="field-message">Комментарий</label>
              <textarea class="form-field__area form-field__area--textarea" name="field-message" id="field-message"></textarea>
            </div>
            <button type="submit" class="button text-uppercase w-100 mb-3">
              <span>Запланировать встречу</span>
            </button>
            <div class="form-checker">
              <div class="form-checker__checkbox">
                <input type="checkbox" name="form-checkbox" id="form-checkbox" required>
                <span></span>
                <svg>
                  <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg?t=1692277951183#check-form"></use>
                </svg>
              </div>
              <label class="form-checker__label" for="form-checkbox">Согласен со следующими условиями:</label>
            </div>
            <p><a href="">Политика конфиденциальности</a></p>
          </form>
        </div>
      </div>

      <div class="meeting-route">
        <div class="meeting-route__map mb-2">
          <img src="<?=MEDIA_PATH;?>images/lk-map.png?t=1692277951183" alt="">
        </div>
        <a href="" class="button text-uppercase w-100">
          <span>Построить маршрут</span>
        </a>
      </div>
    </div>
  </div>
</div>