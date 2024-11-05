<div class="promotions">
  <div class="container">
    <div class="promotions-block">
      <div class="promotions-grid">
        <? for ($i = 0; $i < 2; $i++) : ?>
          <a href="#" class="act-item">
            <picture>
              <img src="<?= MEDIA_PATH; ?>images/promo/promo-card-<?= $i ?>.jpg" alt="">
            </picture>
            <div class="act-item__content">
              <div class="act-item__date">1 октября - 30 ноября</div>
              <div class="act-item__title">Название акции длинное в две строки</div>
              <div class="act-item__desc">Текст основных условий акйии. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            </div>
          </a>
        <? endfor; ?>
        <? for ($i = 0; $i < 2; $i++) : ?>
          <a href="#" class="act-item">
            <picture>
              <img src="<?= MEDIA_PATH; ?>images/promo/promo-card-0.jpg" alt="">
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
    <div class="promotions-pagination">
      <div class="page-pagination">
        <a href="" class="page-pagination__arrow page-pagination__arrow--disabled">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M20.25 12H3.75" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M10.5 5.25L3.75 12L10.5 18.75" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </a>
        <ul>
          <li>
            <span>1</span>
          </li>
          <li>
            <a href="">2</a>
          </li>
          <li>
            <a href="">3</a>
          </li>
          <li>
            <a href="">4</a>
          </li>
          <li>
            <a href="">5</a>
          </li>
          <li>
            <a href="">...</a>
          </li>
          <li>
            <a href="">17</a>
          </li>
        </ul>
        <a href="" class="page-pagination__arrow">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3.75 12H20.25" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M13.5 5.25L20.25 12L13.5 18.75" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </a>
      </div>
    </div>
  </div>
</div>