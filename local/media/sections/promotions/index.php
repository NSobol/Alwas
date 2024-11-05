<div class="promotions">
  <div class="container">
    <div class="promotions-block">
      <div class="promotions-grid">
        <? for ($i = 0; $i < 2; $i++) : ?>
          <a href="#" class="act-item">
            <picture>
              <img src="<?= MEDIA_PATH; ?>images/promo/promo-card-<?= $i ?>.jpg?t=1692277951183" alt="">
            </picture>
            <div class="act-item__content">
              <div class="act-item__date">1 октября - 30 ноября</div>
              <div class="act-item__title">Название акции длинное в две строки</div>
              <div class="act-item__desc">Текст основных условий акйии. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            </div>
          </a>
        <? endfor; ?>
      </div>
    </div>
    <div class="promotions-block promotions-block--light">
      <div class="promotions-social">
        <div class="promotions-social__title">Не упустите выгоду</div>
        <div class="promotions-social__descr">Подписывайтесь на наши аккаунты в соцсетях. участвуйте в акциях и выигрывайте призы</div>
        <div class="promotions-social__links">
          <div class="promotions-social__links-row">
            <div class="promotions-social__links-col">
              <a href="http://" class="promotions-social__item" target="_blank" rel="noopener noreferrer">
                <svg width="35" height="34" viewBox="0 0 35 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="17.5" cy="17" r="17" fill="currentColor" />
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M27.9821 11.9028C28.1453 11.3936 27.9821 11.0235 27.2602 11.0235H24.8599C24.2545 11.0235 23.9749 11.3476 23.8117 11.6942C23.8117 11.6942 22.577 14.6553 20.8527 16.5751C20.2936 17.1303 20.0374 17.3154 19.7344 17.3154C19.5712 17.3154 19.3613 17.1303 19.3613 16.6216V11.8789C19.3613 11.2776 19.1752 11 18.6623 11H14.8875C14.5144 11 14.2816 11.2776 14.2816 11.5552C14.2816 12.1334 15.1437 12.2725 15.2368 13.8916V17.4097C15.2368 18.173 15.0993 18.3125 14.794 18.3125C13.9786 18.3125 11.9982 15.3284 10.8102 11.9281C10.5792 11.2546 10.3445 11 9.73859 11H7.31538C6.61642 11 6.5 11.3236 6.5 11.6708C6.5 12.2955 7.31538 15.4412 10.2978 19.6048C12.2782 22.4486 15.0974 23.977 17.6371 23.977C19.1752 23.977 19.3613 23.6299 19.3613 23.0516V20.9003C19.3613 20.2065 19.5011 20.091 19.9906 20.091C20.3399 20.091 20.9691 20.2756 22.3904 21.6406C24.0212 23.2597 24.3008 24 25.2096 24H27.6095C28.3084 24 28.6348 23.6529 28.4482 22.9821C28.2388 22.3114 27.4463 21.34 26.421 20.1835C25.8619 19.5362 25.0231 18.819 24.7669 18.4718C24.4176 18.0092 24.5107 17.8241 24.7669 17.4079C24.7435 17.4079 27.6796 13.2903 27.9821 11.901" fill="white" />
                </svg>
                <span>ВКонтакте</span>
              </a>
            </div>
            <div class="promotions-social__links-col">
              <a href="http://" class="promotions-social__item" target="_blank" rel="noopener noreferrer">
                <svg width="35" height="34" viewBox="0 0 35 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M17.5026 0.333336C8.3026 0.333336 0.835938 7.8 0.835938 17C0.835938 26.2 8.3026 33.6667 17.5026 33.6667C26.7026 33.6667 34.1693 26.2 34.1693 17C34.1693 7.8 26.7026 0.333336 17.5026 0.333336ZM25.2359 11.6667C24.9859 14.3 23.9026 20.7 23.3526 23.65C23.1193 24.9 22.6526 25.3167 22.2193 25.3667C21.2526 25.45 20.5193 24.7333 19.5859 24.1167C18.1193 23.15 17.2859 22.55 15.8693 21.6167C14.2193 20.5333 15.2859 19.9333 16.2359 18.9667C16.4859 18.7167 20.7526 14.8333 20.8359 14.4833C20.8475 14.4303 20.846 14.3753 20.8314 14.323C20.8169 14.2707 20.7899 14.2228 20.7526 14.1833C20.6526 14.1 20.5193 14.1333 20.4026 14.15C20.2526 14.1833 17.9193 15.7333 13.3693 18.8C12.7026 19.25 12.1026 19.4833 11.5693 19.4667C10.9693 19.45 9.83594 19.1333 8.98594 18.85C7.93594 18.5167 7.11927 18.3333 7.18594 17.75C7.21927 17.45 7.63594 17.15 8.41927 16.8333C13.2859 14.7167 16.5193 13.3167 18.1359 12.65C22.7693 10.7167 23.7193 10.3833 24.3526 10.3833C24.4859 10.3833 24.8026 10.4167 25.0026 10.5833C25.1693 10.7167 25.2193 10.9 25.2359 11.0333C25.2193 11.1333 25.2526 11.4333 25.2359 11.6667Z" fill="currentColor" />
                </svg>
                <span>ALWA studio</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="promotions-block">
      <div class="promotions-block__title">Завершившиеся</div>
      <div class="promotions-grid">
        <? for ($i = 0; $i < 2; $i++) : ?>
          <a href="#" class="act-item act-item--disabled">
            <picture>
              <img src="<?= MEDIA_PATH; ?>images/promo/promo-card-<?= $i ?>.jpg?t=1692277951183" alt="">
            </picture>
            <div class="act-item__content">
              <div class="act-item__date">1 октября - 30 ноября</div>
              <div class="act-item__title">Название акции длинное в две строки</div>
              <div class="act-item__desc">Текст основных условий акйии. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            </div>
          </a>
        <? endfor; ?>
      </div>
      <div class="promotions-block__actions text-center">
        <a href="" class="button">
          <span>Архив</span>
        </a>
      </div>
    </div>
  </div>
</div>