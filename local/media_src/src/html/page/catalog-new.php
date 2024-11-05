<? $pageTitle = 'Каталог' ?>
<? include('template/header.php') ?>

<div class="catalog-page pb-4">
  <div class="catalog-hat">
    <picture class="catalog-hat__pic">
      <source srcset="/upload/iblock/f28/4gj0nr2uard4jkiz16y4g9gdq7sr5da3.jpg" media="screen and (min-width: 1200px)">
      <img src="/upload/iblock/f28/4gj0nr2uard4jkiz16y4g9gdq7sr5da3.jpg" alt="Кастрюли">
    </picture>
    <div class="container">
      <div class="catalog-hat__heading">
        Кастрюли </div>
    </div>
  </div>
  <div class="container">

    <form name="_form" action="/catalog/kastryulya/" method="get" class="filters">
      <div class="row align-items-center g-1">
        <div class="col-auto d-xl-none">
          <a href="javascript:;" class="button button--filter-control" data-src="#filters-modal" data-fancybox="" data-fancybox-fullscreen="">
            <span>Фильтры</span>
            <svg class="d-xl-none" xmlns="http://www.w3.org/2000/svg">
              <use xlink:href="/local/media/images/icons.svg#faders"></use>
            </svg>
          </a>
        </div>

        <div class="col-6 col-xl-2 d-none d-xl-block">
          <span class="button button--filter-control" data-filter="size">Размер</span>
        </div>
        <div class="col-6 col-xl-2 d-none d-xl-block">
          <span class="button button--filter-control" data-filter="color">Цвет</span>
        </div>
        <div class="col-6 col-xl-2 d-none d-xl-block">
          <span class="button button--filter-control" data-filter="Цены для Сайта">Цена</span>
        </div>

        <div class="col-12 col-xl-4 d-none d-xl-block">
          <div class="row align-items-center g-1">
            <div class="col-auto">
              <div class="form-checker">
                <div class="form-checker__checkbox">
                  <input type="checkbox" value="Y" name="arrFilter_119132" id="arrFilter_119132">
                  <span></span>
                  <svg>
                    <use xlink:href="/local/media/images/icons.svg#check-form"></use>
                  </svg>
                </div>
                <label class="form-checker__label p-0" for="arrFilter_119132">крышка в комплекте</label>
              </div>
            </div>
            <div class="col-auto">
              <div class="form-checker">
                <div class="form-checker__checkbox">
                  <input type="checkbox" value="Y" name="arrFilter_119223" id="arrFilter_119223">
                  <span></span>
                  <svg>
                    <use xlink:href="/local/media/images/icons.svg#check-form"></use>
                  </svg>
                </div>
                <label class="form-checker__label p-0" for="arrFilter_119223">съемная ручка</label>
              </div>
            </div>
          </div>
        </div>

        <div class="ml-auto col-auto col-xl-2">
          <div data-filter="sort" class="button button--filter-control">
            <span>Сортировка</span>
            <svg xmlns="http://www.w3.org/2000/svg">
              <use xlink:href="/local/media/images/icons.svg#sort"></use>
            </svg>
            <div class="filters-section__sort">
              <div class="filters-section__sort-container">
                <div class="filters-section__sort-item">
                  <a href="/catalog/kastryulya/?sort-order=desc&amp;sort-field=shows">
                    По популярности </a>
                </div>
                <div class="filters-section__sort-item">
                  <a href="/catalog/kastryulya/?sort-order=asc&amp;sort-field=price">
                    Цена по возрастанию </a>
                </div>
                <div class="filters-section__sort-item">
                  <a href="/catalog/kastryulya/?sort-order=desc&amp;sort-field=price">
                    Цена по убыванию </a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>


      <div class="filters-section" data-filter-section="size">
        <div class="filters-section__container">
          <div class="filters-section__headline">
            <div class="row justify-content-between align-items-center">
              <div class="col-auto">
                <div class="filters-section__headline-title">Размер</div>
              </div>
              <div class="col-auto ml-auto">
                <a href="/catalog/kastryulya/" class="reset-btn filters-reset" type="reset" name="del_filter">Очистить</a>
              </div>
              <div class="col-auto">
                <div class="filters-section__headline-close" data-filter-close="">
                  <svg class="svg-icon svg-icon--plus">
                    <use xlink:href="/local/media/images/icons.svg#plus"></use>
                  </svg>
                </div>
              </div>
            </div>
          </div>
          <div class="filters-section__list">
            <div class="filters-section__list-item">
              <div class="form-checker">
                <div class="form-checker__checkbox">
                  <input type="checkbox" value="Y" name="arrFilter_94_2322626082" id="arrFilter_94_2322626082">
                  <span></span>
                  <svg>
                    <use xlink:href="/local/media/images/icons.svg#check-form"></use>
                  </svg>
                </div>
                <label class="form-checker__label" for="arrFilter_94_2322626082">20 см</label>
              </div>
              <div class="form-checker">
                <div class="form-checker__checkbox">
                  <input type="checkbox" value="Y" name="arrFilter_94_1685985038" id="arrFilter_94_1685985038">
                  <span></span>
                  <svg>
                    <use xlink:href="/local/media/images/icons.svg#check-form"></use>
                  </svg>
                </div>
                <label class="form-checker__label" for="arrFilter_94_1685985038">22 см</label>
              </div>
              <div class="form-checker">
                <div class="form-checker__checkbox">
                  <input type="checkbox" value="Y" name="arrFilter_94_2367533627" id="arrFilter_94_2367533627">
                  <span></span>
                  <svg>
                    <use xlink:href="/local/media/images/icons.svg#check-form"></use>
                  </svg>
                </div>
                <label class="form-checker__label" for="arrFilter_94_2367533627">24 см</label>
              </div>

              <div class="pt-2"><input class="button button--sm w-100 button--accent" type="submit" id="set_filter" name="set_filter" value="Применить"></div>

            </div>
          </div>
        </div>
      </div>


      <div class="filters-section" data-filter-section="color">
        <div class="filters-section__container">
          <div class="filters-section__headline">
            <div class="row justify-content-between align-items-center">
              <div class="col-auto">
                <div class="filters-section__headline-title">Цвет</div>
              </div>
              <div class="col-auto ml-auto">
                <a href="/catalog/kastryulya/" class="reset-btn filters-reset" type="reset" name="del_filter">Очистить</a>
              </div>
              <div class="col-auto">
                <div class="filters-section__headline-close" data-filter-close="">
                  <svg class="svg-icon svg-icon--plus">
                    <use xlink:href="/local/media/images/icons.svg#plus"></use>
                  </svg>
                </div>
              </div>
            </div>
          </div>
          <div class="filters-section__list">
            <div class="filters-section__list-item">
              <div class="form-checker">
                <div class="form-checker__checkbox">
                  <input type="checkbox" value="Y" name="arrFilter_95_960890342" id="arrFilter_95_960890342">
                  <span></span>
                  <svg>
                    <use xlink:href="/local/media/images/icons.svg#check-form"></use>
                  </svg>
                </div>
                <label class="form-checker__label" for="arrFilter_95_960890342">Черный</label>
              </div>

              <div class="pt-2"><input class="button button--sm w-100 button--accent" type="submit" id="set_filter" name="set_filter" value="Применить"></div>

            </div>
          </div>
        </div>
      </div>


      <div class="filters-section" data-filter-section="volume">
        <div class="filters-section__container">
          <div class="filters-section__headline">
            <div class="row justify-content-between align-items-center">
              <div class="col-auto">
                <div class="filters-section__headline-title">Объём</div>
              </div>
              <div class="col-auto ml-auto">
                <a href="/catalog/kastryulya/" class="reset-btn filters-reset" type="reset" name="del_filter">Очистить</a>
              </div>
              <div class="col-auto">
                <div class="filters-section__headline-close" data-filter-close="">
                  <svg class="svg-icon svg-icon--plus">
                    <use xlink:href="/local/media/images/icons.svg#plus"></use>
                  </svg>
                </div>
              </div>
            </div>
          </div>
          <div class="filters-section__list">
            <div class="filters-section__list-item">
              <div class="form-checker">
                <div class="form-checker__checkbox">
                  <input type="checkbox" value="Y" name="arrFilter_96_326707096" id="arrFilter_96_326707096">
                  <span></span>
                  <svg>
                    <use xlink:href="/local/media/images/icons.svg#check-form"></use>
                  </svg>
                </div>
                <label class="form-checker__label" for="arrFilter_96_326707096">2 л</label>
              </div>
              <div class="form-checker">
                <div class="form-checker__checkbox">
                  <input type="checkbox" value="Y" name="arrFilter_96_2367533627" id="arrFilter_96_2367533627">
                  <span></span>
                  <svg>
                    <use xlink:href="/local/media/images/icons.svg#check-form"></use>
                  </svg>
                </div>
                <label class="form-checker__label" for="arrFilter_96_2367533627">3 л</label>
              </div>
              <div class="form-checker">
                <div class="form-checker__checkbox">
                  <input type="checkbox" value="Y" name="arrFilter_96_4196041389" id="arrFilter_96_4196041389">
                  <span></span>
                  <svg>
                    <use xlink:href="/local/media/images/icons.svg#check-form"></use>
                  </svg>
                </div>
                <label class="form-checker__label" for="arrFilter_96_4196041389">4 л</label>
              </div>

              <div class="pt-2"><input class="button button--sm w-100 button--accent" type="submit" id="set_filter" name="set_filter" value="Применить"></div>

            </div>
          </div>
        </div>
      </div>


      <div class="filters-section" data-filter-section="equipment">
        <div class="filters-section__container">
          <div class="filters-section__headline">
            <div class="row justify-content-between align-items-center">
              <div class="col-auto">
                <div class="filters-section__headline-title">Комплектация</div>
              </div>
              <div class="col-auto ml-auto">
                <a href="/catalog/kastryulya/" class="reset-btn filters-reset" type="reset" name="del_filter">Очистить</a>
              </div>
              <div class="col-auto">
                <div class="filters-section__headline-close" data-filter-close="">
                  <svg class="svg-icon svg-icon--plus">
                    <use xlink:href="/local/media/images/icons.svg#plus"></use>
                  </svg>
                </div>
              </div>
            </div>
          </div>
          <div class="filters-section__list">
            <div class="filters-section__list-item">
              <div class="form-checker">
                <div class="form-checker__checkbox">
                  <input type="checkbox" value="Y" name="arrFilter_119_3678868925" id="arrFilter_119_3678868925">
                  <span></span>
                  <svg>
                    <use xlink:href="/local/media/images/icons.svg#check-form"></use>
                  </svg>
                </div>
                <label class="form-checker__label" for="arrFilter_119_3678868925">Крышка в комплекте</label>
              </div>

              <div class="pt-2"><input class="button button--sm w-100 button--accent" type="submit" id="set_filter" name="set_filter" value="Применить"></div>

            </div>
          </div>
        </div>
      </div>

      <div class="filters-section" data-filter-section="Цены для Сайта">
        <div class="filters-section__container">
          <div class="filters-section__headline">
            <div class="row justify-content-between align-items-center">
              <div class="col-auto">
                <div class="filters-section__headline-title">Цена</div>
              </div>
              <div class="col-auto ml-auto">
                <a href="/catalog/kastryulya/" class="reset-btn filters-reset" type="reset" name="del_filter">Очистить</a>
              </div>
              <div class="col-auto">
                <div class="filters-section__headline-close" data-filter-close="">
                  <svg class="svg-icon svg-icon--plus">
                    <use xlink:href="/local/media/images/icons.svg#plus"></use>
                  </svg>
                </div>
              </div>
            </div>
          </div>

          <div class="filters-section__range" data-price-range="block">
            <div class="filters-section__range-row">
              <input type="text" class="filters-section__range-input" data-price-range="from" name="arrFilter_P1_MIN" id="arrFilter_P1_MIN" data-price-min="1 550" value="1550">
              <div class="px-1"> -</div>
              <input type="text" class="filters-section__range-input" data-price-range="to" name="arrFilter_P1_MAX" id="arrFilter_P1_MAX" data-price-max="1 900" value="1900">

            </div>
            <div class="filters-section__range-info">
              <p class="mb-0">1 550 руб</p>
              <p class="mb-0">1 900 руб</p>
            </div>
            <div class="filters-section__range-wrapper">
              <div data-price-range="row" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                <div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 100%;"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;"></span><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;"></span>
              </div>
            </div>

          </div>

          <div class="pt-2"><input class="button button--sm w-100 button--accent" type="submit" id="set_filter" name="set_filter" value="Применить"></div>

        </div>
      </div>

    </form>

    <div id="filters-modal" class="filters-modal" style="display: none;">
      <form name="_form" action="/local/media/catalog-new.php" method="get">

        <div class="filters-modal__headline">
          <div class="row align-items-center justify-content-between">
            <div class="col-4 d-flex align-items-center">
              <button class="reset-btn filters-back">
                <svg xmlns='http://www.w3.org/2000/svg'>
                  <use xlink:href='/local/media/images/icons.svg#arrow-toggle'></use>
                </svg>
              </button>
            </div>
            <div class="col-4 ml-auto">
              <div class="filters-heading">Фильтры</div>
            </div>
            <div class="col-4 d-flex justify-content-end">
              <a href="/local/media/catalog-new.php" class="reset-btn filters-reset" type="reset" name="del_filter">Очистить</a>
              <div class="filters-modal__headline-close" data-fancybox-close>
                <svg class="svg-icon svg-icon--plus">
                  <use xlink:href="/local/media/images/icons.svg#plus"></use>
                </svg>
              </div>
            </div>
          </div>
        </div>

        <div class="filters-modal__section" filters-mobile="section">
          <div class="filters-modal__section-title" filters-mobile="toggler">
            <div class="row align-items-center justify-content-between">
              <div class="col-auto">
                <span>
                  сортировать </span>
              </div>
              <div class="col-auto">
                <svg class="svg-icon">
                  <use xlink:href="/local/media/images/icons.svg#arrow-down"></use>
                </svg>
              </div>
            </div>
          </div>
          <div class="filters-modal__section-toggle" filters-mobile="block">
            <div class="filters-section__sort">
              <div class="filters-section__sort-container">
                <div class="filters-section__sort-item">
                  <a href="/catalog/kastryulya/?sort-order=desc&sort-field=shows">
                    По популярности </a>
                </div>
                <div class="filters-section__sort-item">
                  <a href="/catalog/kastryulya/?sort-order=asc&sort-field=price">
                    Цена по возрастанию </a>
                </div>
                <div class="filters-section__sort-item">
                  <a href="/catalog/kastryulya/?sort-order=desc&sort-field=price">
                    Цена по убыванию </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="filters-modal__section" filters-mobile="section">
          <div class="filters-modal__section-title" filters-mobile="toggler">
            <div class="row align-items-center justify-content-between">
              <div class="col-auto">
                <span>Размер</span>
              </div>
              <div class="col-auto">
                <svg class="svg-icon">
                  <use xlink:href="/local/media/images/icons.svg#arrow-down"></use>
                </svg>
              </div>
            </div>
          </div>
          <div class="filters-modal__section-toggle" filters-mobile="block">
            <div class="filters-section__list">
              <div class="filters-section__list-item">
                <div class="form-checker">
                  <div class="form-checker__checkbox">
                    <input type="checkbox" value="Y" name="arrFilter_94_2322626082" id="arrFilter_94_2322626082">
                    <span></span>
                    <svg>
                      <use xlink:href="/local/media/images/icons.svg#check-form"></use>
                    </svg>
                  </div>
                  <label class="form-checker__label" for="arrFilter_94_2322626082">20 см</label>
                </div>
                <div class="form-checker">
                  <div class="form-checker__checkbox">
                    <input type="checkbox" value="Y" name="arrFilter_94_1685985038" id="arrFilter_94_1685985038">
                    <span></span>
                    <svg>
                      <use xlink:href="/local/media/images/icons.svg#check-form"></use>
                    </svg>
                  </div>
                  <label class="form-checker__label" for="arrFilter_94_1685985038">22 см</label>
                </div>
                <div class="form-checker">
                  <div class="form-checker__checkbox">
                    <input type="checkbox" value="Y" name="arrFilter_94_2367533627" id="arrFilter_94_2367533627">
                    <span></span>
                    <svg>
                      <use xlink:href="/local/media/images/icons.svg#check-form"></use>
                    </svg>
                  </div>
                  <label class="form-checker__label" for="arrFilter_94_2367533627">24 см</label>
                </div>
              </div>
            </div>
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
                  <use xlink:href="/local/media/images/icons.svg#arrow-down"></use>
                </svg>
              </div>
            </div>
          </div>
          <div class="filters-modal__section-toggle" filters-mobile="block">
            <div class="filters-section__list">
              <div class="filters-section__list-item">
                <div class="form-checker">
                  <div class="form-checker__checkbox">
                    <input type="checkbox" value="Y" name="arrFilter_95_960890342" id="arrFilter_95_960890342">
                    <span></span>
                    <svg>
                      <use xlink:href="/local/media/images/icons.svg#check-form"></use>
                    </svg>
                  </div>
                  <label class="form-checker__label" for="arrFilter_95_960890342">Черный</label>
                </div>
              </div>
            </div>
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
                  <use xlink:href="/local/media/images/icons.svg#arrow-down"></use>
                </svg>
              </div>
            </div>
          </div>
          <div class="filters-modal__section-toggle" filters-mobile="block">
            <div class="filters-section__range" data-price-range="block">
              <div class="filters-section__range-row">
                <input type="text" class="filters-section__range-input" data-price-range="from" data-price-min="1 550" name="arrFilter_P1_MIN" id="arrFilter_P1_MIN" value="1550">
                <div class="px-1"> -</div>
                <input type="text" class="filters-section__range-input" data-price-range="to" data-price-max="1 900" name="arrFilter_P1_MAX" id="arrFilter_P1_MAX" value="1900">
              </div>
              <div class="filters-section__range-info">
                <p class="mb-0">1 550 руб</p>
                <p class="mb-0">1 900 руб.</p>
              </div>
              <div class="filters-section__range-wrapper">
                <div data-price-range="row"></div>
              </div>
            </div>
          </div>
        </div>

        <div class="filters-modal__section" filters-mobile="section">
          <div class="row align-items-center g-1">
            <div class="col-12">
              <div class="form-checker">
                <div class="form-checker__checkbox">
                  <input type="checkbox" value="Y" name="arrFilter_11913212" id="arrFilter_11913212">
                  <span></span>
                  <svg>
                    <use xlink:href="/local/media/images/icons.svg#check-form"></use>
                  </svg>
                </div>
                <label class="form-checker__label p-0" for="arrFilter_11913212">крышка в комплекте</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-checker">
                <div class="form-checker__checkbox">
                  <input type="checkbox" value="Y" name="arrFilter_1192233" id="arrFilter_1192233">
                  <span></span>
                  <svg>
                    <use xlink:href="/local/media/images/icons.svg#check-form"></use>
                  </svg>
                </div>
                <label class="form-checker__label p-0" for="arrFilter_1192233">съемная ручка</label>
              </div>
            </div>
          </div>
        </div>
        <div class="pt-2"><input class="button button--sm w-100 button--accent" type="submit" id="set_filter" name="set_filter" value="Применить" /></div>
      </form>

    </div>
  </div>
</div>


<? include('template/footer.php') ?>