<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Архив");
?>

<?/*
<? include('sections/promotions/archive/index.php') ?>
*/?>


<div class="catalog-hat">
  <picture class="catalog-hat__pic">
    <img src="/local/media/images/promo/promo-banner.jpg" alt="">
  </picture>
  <div class="container container--smaller">
    <div class="catalog-hat__heading">Архив</div>
  </div>
</div>
<div class="promotions">
  <div class="container container--smaller">
    <div class="promotions-block">
      <div class="promotions-grid">
        <a href="#" class="act-item act-item--disabled">
          <picture>
            <img src="/local/media/images/promo/promo-card-0.jpg?t=1679361201396" alt="">
          </picture>
          <div class="act-item__content">
            <div class="act-item__date">1 октября - 30 ноября</div>
            <div class="act-item__title">Название акции длинное в две строки</div>
            <div class="act-item__desc">Текст основных условий акйии. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
          </div>
        </a>
        <a href="#" class="act-item act-item--disabled">
          <picture>
            <img src="/local/media/images/promo/promo-card-1.jpg?t=1679361201396" alt="">
          </picture>
          <div class="act-item__content">
            <div class="act-item__date">1 октября - 30 ноября</div>
            <div class="act-item__title">Название акции длинное в две строки</div>
            <div class="act-item__desc">Текст основных условий акйии. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
          </div>
        </a>
        <a href="#" class="act-item act-item--disabled">
          <picture>
            <img src="/local/media/images/promo/promo-card-0.jpg?t=1679361201396" alt="">
          </picture>
          <div class="act-item__content">
            <div class="act-item__date">1 октября - 30 ноября</div>
            <div class="act-item__title">Название акции длинное в две строки</div>
            <div class="act-item__desc">Текст основных условий акйии. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
          </div>
        </a>
        <a href="#" class="act-item act-item--disabled">
          <picture>
            <img src="/local/media/images/promo/promo-card-0.jpg?t=1679361201396" alt="">
          </picture>
          <div class="act-item__content">
            <div class="act-item__date">1 октября - 30 ноября</div>
            <div class="act-item__title">Название акции длинное в две строки</div>
            <div class="act-item__desc">Текст основных условий акйии. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
          </div>
        </a>
      </div>
    </div>
    <div class="promotions-pagination">
      <div class="page-pagination">
        <a href="" class="page-pagination__arrow page-pagination__arrow--disabled">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M20.25 12H3.75" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M10.5 5.25L3.75 12L10.5 18.75" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
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
            <path d="M3.75 12H20.25" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M13.5 5.25L20.25 12L13.5 18.75" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
        </a>
      </div>
    </div>
  </div>
</div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>