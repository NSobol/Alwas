<div class="container">
  <div class="row gx-1 gy-2 gx-md-2 gy-md-4 mb-md-3 pb-3">
    <? for ($x = 0; $x <= 1; $x++): ?>
      <? for ($i = 0; $i <= 5; $i++): ?>
        <div class="col-md-6 col-lg-4">
          <a href="<?= $homeFolder?>product.php" class="catalog-product">
            <div class="catalog-product__photo">
              <img src="<?=MEDIA_PATH;?>images/collections/pic-<?= $i ?>.png" alt="product">
            </div>
            <div class="catalog-product__title text-center text-uppercase">ОСЕНЬ-ЗИМА ’21</div>
          </a>
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