<?
  $filtersItems = array(
    array(
      "title" => "Тип",
      "data-filter" => "type",
    ),
    array(
      "title" => "Цвет",
      "data-filter" => "color",
    ),
    array(
      "title" => "Цена",
      "data-filter" => "price",
    ),
  )
?>

<div class="filters">
  <div class="row align-items-center gx-3">
    <div class="col-auto d-flex">
      <p class="text-uppercase mb-0">
        <a href="javascript:;" data-src="#filters-modal" data-fancybox="" data-fancybox-fullscreen class="d-lg-none">Фильтры</a>
        <span class="d-none d-lg-inline">Фильтры:</span>
      </p>
    </div>
    <div class="col-auto d-none d-lg-flex">
      <div class="row">
        <? foreach ($filtersItems as $item): ?>
        <div class="col-auto d-flex">
          <span class="text-uppercase" data-filter="<?=$item["data-filter"]?>"><?= $item["title"]?></span>
        </div>
        <? endforeach; ?>
        <div class="col-auto d-flex">
          <span data-filter="sort">
            <svg>
              <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg?t=1692277951183#sort"></use>
            </svg>
            <div class="filters-section__sort">
              <div class="filters-section__sort-container">
                <div class="filters-section__sort-item active">
                  <a href="">По популярности</a>
                </div>
                <div class="filters-section__sort-item">
                  <a href="">По цене по возрастанию</a>
                </div>
                <div class="filters-section__sort-item">
                  <a href="">По цене по убыванию</a>
                </div>
              </div>
            </div>
          </span>
        </div>
      </div>
    </div>
  </div>
</div>





<div class="filters-section" data-filter-section="type">
  <div class="filters-section__container">
    <div class="filters-section__headline">
      <div class="row justify-content-between align-items-center">
        <div class="col-auto">
          <div class="filters-section__headline-title">Тип</div>
        </div>
        <div class="col-auto">
          <div class="filters-section__headline-close" data-filter-close>
            <svg class="svg-icon svg-icon--plus">
              <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg?t=1692277951183#plus"></use>
            </svg>
          </div>
        </div>
      </div>
    </div>
    <form action="">
      <div class="filters-section__list">
      <? $filtersBlockType = array("Платья", "Юбки", "Пальто", "Брюки") ?>
        <div class="filters-section__list-item">
        <? foreach ($filtersBlockType as $key => $type): ?>
          <div class="form-checker">
            <div class="form-checker__checkbox">
              <input type="checkbox" name="filter-type" id="filter-type-<?= $key?>">
              <span></span>
              <svg>
                <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg?t=1692277951183#check-form"></use>
              </svg>
            </div>
            <label class="form-checker__label" for="filter-type-<?= $key?>"><?= $type?></label>
          </div>
        <? endforeach; ?>
        </div>
      </div>
    </form>
  </div>
</div>

<div class="filters-section" data-filter-section="color">
  <div class="filters-section__container">
    <div class="filters-section__headline">
      <div class="row justify-content-between align-items-center">
        <div class="col-auto">
          <div class="filters-section__headline-title">Цвет</div>
        </div>
        <div class="col-auto">
          <div class="filters-section__headline-close" data-filter-close>
            <svg class="svg-icon svg-icon--plus">
              <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg?t=1692277951183#plus"></use>
            </svg>
          </div>
        </div>
      </div>
    </div>
    <form action="">
      <div class="filters-section__blocks">
      <? $filtersBlockColor = array("Бежевый", "Черный", "Золотой", "Серый", "Розовый", "Золотой", "Серый", "Розовый") ?>
        <div class="filters-section__blocks-row">
          <? foreach ($filtersBlockColor as $key => $color): ?>
          <div class="filters-section__blocks-col">
            <div class="filters-section__color">
              <input type="checkbox" name="filter-color" id="filter-color-<?= $key?>">
              <label class="filters-section__color-label" for="filter-color-<?= $key?>">
                <div class="filters-section__color-picture">
                  <img src="<?=MEDIA_PATH;?>images/filters/color-<?= $key?>.png?t=1692277951183" alt="">
                </div>
                <div class="filters-section__color-title"><?= $color?></div>
              </label>
            </div>
          </div>
          <? endforeach; ?>
        </div>
      </div>
    </form>
  </div>
</div>

<div class="filters-section" data-filter-section="price">
  <div class="filters-section__container">
    <div class="filters-section__headline">
      <div class="row justify-content-between align-items-center">
        <div class="col-auto">
          <div class="filters-section__headline-title">Цена</div>
        </div>
        <div class="col-auto">
          <div class="filters-section__headline-close" data-filter-close>
            <svg class="svg-icon svg-icon--plus">
              <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg?t=1692277951183#plus"></use>
            </svg>
          </div>
        </div>
      </div>
    </div>
    <form action="">
      <div class="filters-section__range" data-price-range="block">
        <div class="filters-section__range-row">
          <input type="text" class="filters-section__range-input" data-price-range="from" data-price-min="25 000">
          <div class="px-1"> - </div>
          <input type="text" class="filters-section__range-input" data-price-range="to" data-price-max="2 750 000">
        </div>
        <div class="filters-section__range-info">
          <p class="mb-0">25 000 руб.</p>
          <p class="mb-0">2 750 000 руб.</p>
        </div>
        <div class="filters-section__range-wrapper">
          <div data-price-range="row"></div>
        </div>
      </div>
    </form>
  </div>
</div>





<div id="filters-modal" class="filters-modal" style="display: none;">

  <div class="filters-modal__headline">
    <div class="row align-items-center justify-content-between">
      <div class="col-auto">
        <button type="reset">Очистить фильтр</button>
      </div>
      <div class="col-auto">
        <div class="filters-modal__headline-close" data-fancybox-close>
          <svg class="svg-icon svg-icon--plus">
            <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg?t=1692277951183#plus"></use>
          </svg>
        </div>
      </div>
    </div>
  </div>

  <div class="filters-modal__section" filters-mobile="section">
    <div class="filters-modal__section-title" filters-mobile="toggler">
      <div class="row align-items-center justify-content-between">
        <div class="col-auto">
          <span>сортировать</span>
        </div>
        <div class="col-auto">
          <svg class="svg-icon">
            <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg?t=1692277951183#arrow-down"></use>
          </svg>
        </div>
      </div>
    </div>
    <div class="filters-modal__section-toggle" filters-mobile="block">
      <div class="filters-section__sort">
        <div class="filters-section__sort-item active">
          <a href="">По популярности</a>
        </div>
        <div class="filters-section__sort-item">
          <a href="">По цене по возрастанию</a>
        </div>
        <div class="filters-section__sort-item">
          <a href="">По цене по убыванию</a>
        </div>
      </div>
    </div>
  </div>

  <div class="filters-modal__section" filters-mobile="section">
    <div class="filters-modal__section-title" filters-mobile="toggler">
      <div class="row align-items-center justify-content-between">
        <div class="col-auto">
          <span>Тип</span>
        </div>
        <div class="col-auto">
          <svg class="svg-icon">
            <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg?t=1692277951183#arrow-down"></use>
          </svg>
        </div>
      </div>
    </div>
    <div class="filters-modal__section-toggle" filters-mobile="block">
      <form action="">
        <div class="filters-section__list">
          <div class="filters-section__list-item">
          <? foreach ($filtersBlockType as $key => $type): ?>
            <div class="form-checker">
              <div class="form-checker__checkbox">
                <input type="checkbox" name="filter-type-mobile" id="filter-type-mobile-<?= $key?>">
                <span></span>
                <svg>
                  <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg?t=1692277951183#check-form"></use>
                </svg>
              </div>
              <label class="form-checker__label" for="filter-type-mobile-<?= $key?>"><?= $type?></label>
            </div>
          <? endforeach; ?>
          </div>
        </div>
      </form>
    </div>
  </div>

  <div class="filters-modal__section" filters-mobile="section">
    <div class="filters-modal__section-title" filters-mobile="toggler">
      <div class="row align-items-center justify-content-between">
        <div class="col-auto">
          <span>Цвет</span>
        </div>
        <div class="col-auto">
          <svg class="svg-icon">
            <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg?t=1692277951183#arrow-down"></use>
          </svg>
        </div>
      </div>
    </div>
    <div class="filters-modal__section-toggle" filters-mobile="block">
      <form action="">
        <div class="filters-section__blocks">
          <div class="filters-section__blocks-row">
            <? foreach ($filtersBlockColor as $key => $color): ?>
            <div class="filters-section__blocks-col">
              <div class="filters-section__color">
                <input type="checkbox" name="filter-color-mobile" id="filter-color-mobile-<?= $key?>">
                <label class="filters-section__color-label" for="filter-color-mobile-<?= $key?>">
                  <div class="filters-section__color-picture">
                    <img src="<?=MEDIA_PATH;?>images/filters/color-<?= $key?>.png?t=1692277951183" alt="">
                  </div>
                  <div class="filters-section__color-title"><?= $color?></div>
                </label>
              </div>
            </div>
            <? endforeach; ?>
          </div>
        </div>
      </form>
    </div>
  </div>

  <div class="filters-modal__section" filters-mobile="section">
    <div class="filters-modal__section-title" filters-mobile="toggler">
      <div class="row align-items-center justify-content-between">
        <div class="col-auto">
          <span>Цена</span>
        </div>
        <div class="col-auto">
          <svg class="svg-icon">
            <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg?t=1692277951183#arrow-down"></use>
          </svg>
        </div>
      </div>
    </div>
    <div class="filters-modal__section-toggle" filters-mobile="block">
      <form action="">
        <div class="filters-section__range" data-price-range="block">
          <div class="filters-section__range-row">
            <input type="text" class="filters-section__range-input" data-price-range="from" data-price-min="25 000">
            <div class="px-1"> - </div>
            <input type="text" class="filters-section__range-input" data-price-range="to" data-price-max="2 750 000">
          </div>
          <div class="filters-section__range-info">
            <p class="mb-0">25 000 руб.</p>
            <p class="mb-0">2 750 000 руб.</p>
          </div>
          <div class="filters-section__range-wrapper">
            <div data-price-range="row"></div>
          </div>
        </div>
      </form>
    </div>
  </div>

</div>