<div class="container py-2">
  <div class="row gy-5 gx-4 gx-xxl-2">
    <div class="col-xl-6 col-xxl-4">
      <div class="z4 mb-2">Личные данные</div>
      <div class="lk-user-info mb-2">
        <? 
          $lkUserItems = array(
            array("Имя", "Иванова Мария Ивановна"),
            array("E-mail", "Ivanova@email.ru"),
            array("Телефон", "+79111111111"),
            array("Пол", "Женский")
          ) 
        ?>
        <? foreach ($lkUserItems as $userItem): ?>
          <div class="lk-user-info__item">
            <div class="row gx-1 gx-md-2">
              <div class="col-4">
                <span><?= $userItem[0]?></span>
              </div>
              <div class="col-8">
                <span><?= $userItem[1]?></span>
              </div>
            </div>
          </div>
        <? endforeach; ?>
      </div>
      <div class="row g-1">
        <div class="col-12">
          <a href="" class="button w-100">
            <span>Редактировать данные</span>
          </a>
        </div>
        <div class="col-12">
          <a href="" class="button button--white w-100">
            <span>Изменить пароль</span>
          </a>
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-xxl-7 ml-auto">
      <div class="z4 mb-2">Адреса</div>
      <div class="lk-user-address mb-2">
        <? for ($i = 0; $i <= 1; $i++): ?>
          <div class="lk-user-address__item">
            <div class="row align-items-center">
              <div class="col-sm-8">
                <span>Москва, ул. Строителей, д. 25, кв. 4</span>
              </div>
              <div class="col-4 align-items-center justify-content-end d-none d-sm-flex">
                <button class="lk-user-address__item-delete">
                  <svg>
                    <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg?t=1692277951183#delete"></use>
                  </svg>
                  <span>Удалить</span>
                </button>
              </div>
            </div>
          </div>
        <? endfor; ?>
      </div>
      <div class="text-right">
        <a href="javascript:;" data-src="#subscription-form" data-fancybox="" class="button button--white">
          <span>Добавить новый адрес</span>
        </a>
      </div>
    </div>
  </div>
</div>