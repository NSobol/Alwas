<div class="container">
  <div class="row gx-1 gy-2 gx-md-2 gy-md-3 mb-md-3 pb-3">
    <? for ($x = 0; $x <= 1; $x++): ?>
      <? for ($i = 0; $i <= 7; $i++): ?>
        <div class="col-6 col-lg-4 col-xxl-3">
          <div class="catalog-product">
            <div class="catalog-product__photo">
              <img src="<?=MEDIA_PATH;?>images/couture/pic-<?= $i ?>.png?t=1692277951183" alt="product">
            </div>
            <div class="catalog-product__title text-uppercase">ПЛАТЬЕ ИЗ ТВИДА БУКЛЕ</div>
            <div class="row">
              <div class="col-auto d-none d-md-inline">
                <a href="" class="catalog-product__action">подробнее</a>
              </div>
              <div class="col-auto">
                <a href="javascript:;" data-src="#product-request" data-fancybox="" class="catalog-product__action">Оставить запрос</a>
              </div>
            </div>
          </div>
        </div>
      <? endfor; ?>
    <? endfor; ?>
  </div>
  <div class="show-more text-center mb-md-3 pb-3">
    <button type="button" class="show-more__button text-uppercase">
      <span>показать еще</span>
    </button>
  </div>
</div>