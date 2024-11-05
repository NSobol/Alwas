<div class="container">
  <div class="row gx-1 gy-2 gx-md-2 gy-md-3 mb-md-3 pb-3">

    <!-- <div class="col-6 col-lg-4 col-xxl-3">
      <a href="<?= $homeFolder?>product.php" class="catalog-product">
        <div class="catalog-product__photo bg-primary">
          <div class="catalog-product__photo-sale">
            <div class="catalog-product__photo-sale__icon">
              <svg>
                  <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg?t=1692277951183#percent"></use>
              </svg>
            </div>
            <span>Акция</span>
          </div>
          <button class="catalog-product__photo-favorite" title="добавить в избранное">
            <svg>
                <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg?t=1692277951183#like-full"></use>
            </svg>
          </button>
          <img src="<?=MEDIA_PATH;?>images/catalog/photo-0.png?t=1692277951183" alt="product">
        </div>
        <div class="catalog-product__title text-uppercase">ПЛАТЬЕ ИЗ ТВИДА БУКЛЕ</div>
        <div class="catalog-product__price">
          340 000 руб <span class="px-1">360 000 руб</span>
        </div>
      </a>
    </div> -->

    <div class="col-6 col-lg-4 col-xxl-3">
      <a href="<?= $homeFolder?>product.php" class="catalog-product">
        <div class="catalog-product__photo bg-primary">
          <div class="catalog-product__photo-sale">
            <div class="catalog-product__photo-sale__icon catalog-product__photo-sale__icon--black">
              <svg>
                  <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg?t=1692277951183#percent"></use>
              </svg>
            </div>
            <span>Акция</span>
          </div>
          <button class="catalog-product__photo-favorite" title="добавить в избранное">
            <svg>
                <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg?t=1692277951183#like-full"></use>
            </svg>
          </button>
          <img src="<?=MEDIA_PATH;?>images/catalog/photo-0.png?t=1692277951183" alt="product">
        </div>
        <div class="catalog-product__title text-uppercase">ПЛАТЬЕ ИЗ ТВИДА БУКЛЕ</div>
        <div class="catalog-product__price">
          340 000 руб <span class="px-1">360 000 руб</span>
        </div>
      </a>
    </div>

    <!-- <div class="col-6 col-lg-4 col-xxl-3">
      <a href="<?= $homeFolder?>product.php" class="catalog-product">
        <div class="catalog-product__photo bg-primary">
          <div class="catalog-product__photo-sale">
            <div class="catalog-product__photo-sale__icon catalog-product__photo-sale__icon--circle">
              <svg>
                  <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg?t=1692277951183#percent"></use>
              </svg>
            </div>
            <span>Акция</span>
          </div>
          <button class="catalog-product__photo-favorite" title="добавить в избранное">
            <svg>
                <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg?t=1692277951183#like-full"></use>
            </svg>
          </button>
          <img src="<?=MEDIA_PATH;?>images/catalog/photo-0.png?t=1692277951183" alt="product">
        </div>
        <div class="catalog-product__title text-uppercase">ПЛАТЬЕ ИЗ ТВИДА БУКЛЕ</div>
        <div class="catalog-product__price">
          340 000 руб <span class="px-1">360 000 руб</span>
        </div>
      </a>
    </div>

    <div class="col-6 col-lg-4 col-xxl-3">
      <a href="<?= $homeFolder?>product.php" class="catalog-product">
        <div class="catalog-product__photo bg-primary">
          <div class="catalog-product__photo-sale">
            <div class="catalog-product__photo-sale__icon catalog-product__photo-sale__icon--margin">
              <svg>
                  <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg?t=1692277951183#percent"></use>
              </svg>
            </div>
            <span>Акция</span>
          </div>
          <button class="catalog-product__photo-favorite" title="добавить в избранное">
            <svg>
                <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg?t=1692277951183#like-full"></use>
            </svg>
          </button>
          <img src="<?=MEDIA_PATH;?>images/catalog/photo-0.png?t=1692277951183" alt="product">
        </div>
        <div class="catalog-product__title text-uppercase">ПЛАТЬЕ ИЗ ТВИДА БУКЛЕ</div>
        <div class="catalog-product__price">
          340 000 руб <span class="px-1">360 000 руб</span>
        </div>
      </a>
    </div> -->


    <? for ($x = 0; $x <= 1; $x++): ?>
      <? for ($i = 0; $i <= 7; $i++): ?>
        <div class="col-6 col-lg-4 col-xxl-3">
          <a href="<?= $homeFolder?>product.php" class="catalog-product">
            <div class="catalog-product__photo bg-primary">
              <? if ($i%2 === 0): ?>
                <button class="catalog-product__photo-favorite is-selected" title="удалить из избранного">
                  <svg>
                      <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg?t=1692277951183#like-full"></use>
                  </svg>
                </button>
              <? else: ?>
                <button class="catalog-product__photo-favorite" title="добавить в избранное">
                  <svg>
                      <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg?t=1692277951183#like-full"></use>
                  </svg>
                </button>
              <? endif; ?>
              <img src="<?=MEDIA_PATH;?>images/catalog/photo-<?= $i ?>.png?t=1692277951183" alt="product">
            </div>
            <div class="catalog-product__title text-uppercase">ПЛАТЬЕ ИЗ ТВИДА БУКЛЕ</div>
            <div class="catalog-product__price">340 000 руб</div>
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