<div class="container py-2">
  <div class="z4 text-uppercase mb-2 mb-md-3">Избранные товары</div>
  <div class="row g-1 g-md-2">
    <? for ($i = 0; $i <= 7; $i++): ?>
      <div class="col-6 col-lg-4 col-xxl-3">
        <a href="" class="catalog-product">
          <div class="catalog-product__photo bg-primary">
            <button class="catalog-product__photo-favorite is-selected" title="удалить из избранного">
              <svg>
                  <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg#like-full"></use>
              </svg>
            </button>
            <img src="<?=MEDIA_PATH;?>images/catalog/photo-<?= $i ?>.png" alt="product">
          </div>
          <div class="catalog-product__title text-uppercase">ПЛАТЬЕ ИЗ ТВИДА БУКЛЕ</div>
          <div class="catalog-product__price">340 000 руб</div>
        </a>
      </div>
    <? endfor; ?>
  </div>
  <div class="row flex-column align-items-center pt-3 mt-md-3 g-1">
    <div class="col-lg-4">
      <a href="" class="button text-uppercase w-100">
        <span>Перейти в каталог</span>
      </a>
    </div>
  </div>
</div>