<div class="press-page pb-4 pb-sm-5">
  <div class="container">
    <div class="z2 font-400 text-uppercase text-center mt-sm-1 mb-2 mb-sm-3 mb-lg-5"><?=$pageTitle?></div>
    <div class="row gx-1 gy-2 gx-md-2 gy-md-3 mb-md-3 pb-3">
      <? for ($x = 0; $x <= 1; $x++): ?>
        <? for ($i = 0; $i <= 7; $i++): ?>
          <div class="col-6 col-lg-4 col-xxl-3">
            <a href="<?= $homeFolder?>product.php" class="press-item">
              <div class="press-item__photo">
                <img src="<?=MEDIA_PATH;?>images/press/item-<?= $i ?>.png" alt="product">
              </div>
              <div class="press-item__title text-uppercase">InStyle USA April 2020</div>
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
    <div class="pagination pb-lg-3">
      <a href="" class="pagination__arrow disabled">
        <svg>
          <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg#arrow-left"></use>
        </svg>
      </a>
      <div class="pagination__nums">
        <a href="">1</a>
        <a href="">2</a>
        <a href="">3</a>
        <a href="">4</a>
        <a href="">5</a>
        <span>...</span>
        <a href="">29</a>
      </div>
      <a href="" class="pagination__arrow">
        <svg>
          <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg#arrow-right"></use>
        </svg>
      </a>
    </div>
  </div>
</div>