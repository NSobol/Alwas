<? $pageTitle = "Юбки" ?>
<? include('template/header.php') ?>

<div class="container">
  <div class="pt-1">

    <div class="catalog-slider">
      <div class="catalog-slider__item">
        <picture>
        </picture>
      </div>


      <div class="catalog-slider__holder">
        <div class="catalog-slider__holder-title">YANINA</div>
        <div class="catalog-slider__holder-subtitle">
          DEMI COUTURE </div>
      </div>

    </div>

  </div>
</div>

<div class="catalog-page">
  <div class="container">
    <div class="row justify-content-between align-items-center my-2 my-sm-3">
      <div class="col-auto">
        <div class="z2 font-400 text-uppercase text-center mt-2 mt-sm-1 mb-4 mb-sm-3 mb-lg-5">
          Home Collection </div>
      </div>
      <div class="col-auto">


        <form name="_form" action="/catalog/demi/home-collection/" method="get" class="filters">
          <div class="row align-items-center gx-3">
            <div class="col-auto d-flex">
              <p class="text-uppercase mb-0">
                <a href="javascript:;" data-src="#filters-modal" data-fancybox="" data-fancybox-fullscreen="" class="d-lg-none">
                  Фильтры </a>
                <span class="d-none d-lg-inline">
                  Фильтры:
                </span>
              </p>
            </div>
            <div class="col-auto d-none d-lg-flex">
              <div class="row">

                <div class="col-auto d-flex">
                  <span class="text-uppercase" data-filter="size">Размер</span>
                </div>
                <div class="col-auto d-flex">
                  <span class="text-uppercase" data-filter="base">Цена</span>
                </div>

                <div class="col-auto d-flex">
                  <span data-filter="sort">
                    <svg>
                      <use xlink:href="/local/media/images/icons.svg#sort"></use>
                    </svg>

                    <div class="filters-section__sort">
                      <div class="filters-section__sort-container">
                        <div class="filters-section__sort-item">
                          <a href="/catalog/demi/home-collection/?sort-order=desc&amp;sort-field=shows">
                            По популярности </a>
                        </div>
                        <div class="filters-section__sort-item">
                          <a href="/catalog/demi/home-collection/?sort-order=asc&amp;sort-field=price">
                            По цене по возрастанию </a>
                        </div>
                        <div class="filters-section__sort-item">
                          <a href="/catalog/demi/home-collection/?sort-order=desc&amp;sort-field=price">
                            По цене по убыванию </a>
                        </div>
                      </div>
                    </div>

                  </span>
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
                      <input type="checkbox" value="Y" name="arrFilter_63_2366072709" id="arrFilter_63_2366072709">
                      <span></span>
                      <svg>
                        <use xlink:href="/local/media/images/icons.svgcheck-form"></use>
                      </svg>
                    </div>
                    <label class="form-checker__label" for="arrFilter_63_2366072709">ONESIZE</label>
                  </div>

                  <input class="button button--sm" type="submit" id="set_filter" name="set_filter" value="Применить">
                  <input class="button button--sm" type="submit" id="del_filter" name="del_filter" value="Очистить фильтр">

                </div>
              </div>
            </div>
          </div>

          <div class="filters-section" data-filter-section="base">
            <div class="filters-section__container">
              <div class="filters-section__headline">
                <div class="row justify-content-between align-items-center">
                  <div class="col-auto">
                    <div class="filters-section__headline-title">Цена</div>
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
                  <input type="text" class="filters-section__range-input" data-price-range="from" data-price-min="13 000" name="arrFilter_P1_MIN" id="arrFilter_P1_MIN" value="13000">
                  <div class="px-1"> -</div>
                  <input type="text" class="filters-section__range-input" data-price-range="to" data-price-max="48 500" name="arrFilter_P1_MAX" id="arrFilter_P1_MAX" value="48500">

                </div>
                <div class="filters-section__range-info">
                  <p class="mb-0">13 000 руб</p>
                  <p class="mb-0">48 500 руб</p>
                </div>
                <div class="filters-section__range-wrapper">
                  <div data-price-range="row" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                    <div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 100%;"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;"></span><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;"></span>
                  </div>
                </div>

              </div>

              <br>
              <br>

              <input class="button button--sm" type="submit" id="set_filter" name="set_filter" value="Применить">
              <input class="button button--sm" type="submit" id="del_filter" name="del_filter" value="Очистить фильтр">

            </div>
          </div>

        </form>

        <div id="filters-modal" class="filters-modal" style="display: none;">
          <form name="_form" action="/catalog/demi/home-collection/" method="get">

            <div class="filters-modal__headline">
              <div class="row align-items-center justify-content-between">
                <div class="col-auto">
                  <input class="" type="submit" id="del_filter" name="del_filter" value="Очистить фильтр">
                </div>
                <div class="col-auto">
                  <div class="filters-modal__headline-close" data-fancybox-close="">
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
                      <a href="/catalog/demi/home-collection/?sort-order=desc&amp;sort-field=shows">
                        По популярности </a>
                    </div>
                    <div class="filters-section__sort-item">
                      <a href="/catalog/demi/home-collection/?sort-order=asc&amp;sort-field=price">
                        По цене по возрастанию </a>
                    </div>
                    <div class="filters-section__sort-item">
                      <a href="/catalog/demi/home-collection/?sort-order=desc&amp;sort-field=price">
                        По цене по убыванию </a>
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
                        <input type="checkbox" value="Y" name="arrFilter_63_2366072709" id="arrFilter_63_2366072709">
                        <span></span>
                        <svg>
                          <use xlink:href="/local/media/images/icons.svg#check-form"></use>
                        </svg>
                      </div>
                      <label class="form-checker__label" for="arrFilter_63_2366072709">ONESIZE</label>
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
                    <input type="text" class="filters-section__range-input" data-price-range="from" data-price-min="13 000" name="arrFilter_P1_MIN" id="arrFilter_P1_MIN" value="13000">
                    <div class="px-1"> -</div>
                    <input type="text" class="filters-section__range-input" data-price-range="to" data-price-max="48 500" name="arrFilter_P1_MAX" id="arrFilter_P1_MAX" value="48500">
                  </div>
                  <div class="filters-section__range-info">
                    <p class="mb-0">13 000 руб</p>
                    <p class="mb-0">48 500 руб.</p>
                  </div>
                  <div class="filters-section__range-wrapper">
                    <div data-price-range="row" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                      <div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 100%;"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;"></span><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <br>
            <br>

            <input class="button button--sm" type="submit" id="set_filter" name="set_filter" value="Применить">
            <input class="button button--sm" type="submit" id="del_filter" name="del_filter" value="Очистить фильтр">
          </form>

        </div>


      </div>
    </div>
  </div>
</div>

<div class="container">

  <div class="catalog-page__video mb-2 mb-sm-3">
    <div class="row gx-1 gy-2 gx-md-2 gy-md-3">
      <div class="col-8 col-md-7 col-lg-6">
        <div class="catalog-page__video-item">
          <video autoplay="" preload="" muted="" loop="" poster="" controls="">
            <source src="/local/media/images/YANINA_HOME_TEASER_2.mp4" type="video/mp4">
          </video>
        </div>
      </div>
      <div class="col-4 col-md-5 col-lg-6">
        <div class="catalog-page__video-item">
          <video autoplay="" preload="" muted="" loop="" poster="" controls="">
            <source src="/local/media/images/YANINA_HOME_TEASER_1.mp4" type="video/mp4">
          </video>
        </div>
      </div>
    </div>
  </div>

  <div class="row gx-1 gy-2 gx-md-2 gy-md-3 mb-md-3 pb-3">




    <div class="col-12 col-lg-6" id="bx_3966226736_3706" itemscope="" itemtype="http://schema.org/Product">
      <a href="/catalog/demi/home-collection/0-2349/" class="catalog-product">
        <div class="catalog-product__photo bg-primary catalog-product__photo--vertical">
          <button class="catalog-product__photo-favorite" title="добавить в избранное" data-action="add-to-favorite" data-id="3706">
            <svg>
              <use xlink:href="/local/media/images/icons.svg#like-full"></use>
            </svg>
          </button>
          <img itemprop="image" src="/upload/iblock/11b/4zlx3l747a4nd6ogyj90nq6x9dzgeqv4.png" alt="Дорожка белая с принтом " Цветы""="" title="Дорожка белая с принтом ">
        </div>
        <div class="catalog-product__title text-uppercase" itemprop="name">
          Дорожка белая с принтом "Цветы" </div>
        <div class="catalog-product__price" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">

          <meta itemprop="priceCurrency" content="RUB">
          <meta itemprop="price" content="">
          <meta itemprop="availability" href="https://schema.org/OutOfStock">

          23 000 руб
        </div>
      </a>
    </div>




    <div class="col-12 col-lg-6" id="bx_3966226736_3707" itemscope="" itemtype="http://schema.org/Product">
      <a href="/catalog/demi/home-collection/0-2349A/" class="catalog-product">
        <div class="catalog-product__photo bg-primary catalog-product__photo--vertical">
          <button class="catalog-product__photo-favorite" title="добавить в избранное" data-action="add-to-favorite" data-id="3707">
            <svg>
              <use xlink:href="/local/media/images/icons.svg#like-full"></use>
            </svg>
          </button>
          <img itemprop="image" src="/upload/resize_cache/iblock/ef1/874_596_2/qothew4qjhc8inus9dvas8xslscm526r.png" alt="Дорожка серая с принтом " Цветы""="" title="Дорожка серая с принтом ">
        </div>
        <div class="catalog-product__title text-uppercase" itemprop="name">
          Дорожка серая с принтом "Цветы" </div>
        <div class="catalog-product__price" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">

          <meta itemprop="priceCurrency" content="RUB">
          <meta itemprop="price" content="23000">
          <meta itemprop="availability" href="https://schema.org/OutOfStock">

          23 000 руб
        </div>
      </a>
    </div>




    <div class="col-12 col-lg-6" id="bx_3966226736_3710" itemscope="" itemtype="http://schema.org/Product">
      <a href="/catalog/demi/home-collection/0-2349B/" class="catalog-product">
        <div class="catalog-product__photo bg-primary catalog-product__photo--vertical">
          <button class="catalog-product__photo-favorite" title="добавить в избранное" data-action="add-to-favorite" data-id="3710">
            <svg>
              <use xlink:href="/local/media/images/icons.svg#like-full"></use>
            </svg>
          </button>
          <img itemprop="image" src="/upload/resize_cache/iblock/f99/874_596_2/4q1zwvw1zki649q94mwwo9bvlzl1a8z2.png" alt="Дорожка c принтом " Рыбы""="" title="Дорожка c принтом ">
        </div>
        <div class="catalog-product__title text-uppercase" itemprop="name">
          Дорожка c принтом "Рыбы" </div>
        <div class="catalog-product__price" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">

          <meta itemprop="priceCurrency" content="RUB">
          <meta itemprop="price" content="23000">
          <meta itemprop="availability" href="https://schema.org/OutOfStock">

          23 000 руб
        </div>
      </a>
    </div>




    <div class="col-12 col-lg-6" id="bx_3966226736_3713" itemscope="" itemtype="http://schema.org/Product">
      <a href="/catalog/demi/home-collection/salfetka-s-printom-belaya-gortenziya/" class="catalog-product">
        <div class="catalog-product__photo bg-primary catalog-product__photo--vertical">
          <button class="catalog-product__photo-favorite" title="добавить в избранное" data-action="add-to-favorite" data-id="3713">
            <svg>
              <use xlink:href="/local/media/images/icons.svg#like-full"></use>
            </svg>
          </button>
          <img itemprop="image" src="/upload/iblock/2b5/0nn5ui82iidevo9a98ok8swsb9wsyoul.png" alt="Салфетка с принтом " Цветы""="" title="Салфетка с принтом ">
        </div>
        <div class="catalog-product__title text-uppercase" itemprop="name">
          Салфетка с принтом "Цветы" </div>
        <div class="catalog-product__price" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">

          <meta itemprop="priceCurrency" content="RUB">
          <meta itemprop="price" content="13000">
          <meta itemprop="availability" href="https://schema.org/OutOfStock">

          13 000 руб
        </div>
      </a>
    </div>




    <div class="col-12 col-lg-6" id="bx_3966226736_3715" itemscope="" itemtype="http://schema.org/Product">
      <a href="/catalog/demi/home-collection/0-2350A/" class="catalog-product">
        <div class="catalog-product__photo bg-primary catalog-product__photo--vertical">
          <button class="catalog-product__photo-favorite" title="добавить в избранное" data-action="add-to-favorite" data-id="3715">
            <svg>
              <use xlink:href="/local/media/images/icons.svg#like-full"></use>
            </svg>
          </button>
          <img itemprop="image" src="/upload/iblock/46f/03lxmwuhd6spfbfsvk87dcwrkhhfo6js.png" alt="Салфетка с авторским принтом " Цветы""="" title="Салфетка с авторским принтом ">
        </div>
        <div class="catalog-product__title text-uppercase" itemprop="name">
          Салфетка с авторским принтом "Цветы" </div>
        <div class="catalog-product__price" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">

          <meta itemprop="priceCurrency" content="RUB">
          <meta itemprop="price" content="13000">
          <meta itemprop="availability" href="https://schema.org/OutOfStock">

          13 000 руб
        </div>
      </a>
    </div>




    <div class="col-12 col-lg-6" id="bx_3966226736_3717" itemscope="" itemtype="http://schema.org/Product">
      <a href="/catalog/demi/home-collection/0-2350C/" class="catalog-product">
        <div class="catalog-product__photo bg-primary catalog-product__photo--vertical">
          <button class="catalog-product__photo-favorite" title="добавить в избранное" data-action="add-to-favorite" data-id="3717">
            <svg>
              <use xlink:href="/local/media/images/icons.svg#like-full"></use>
            </svg>
          </button>
          <img itemprop="image" src="/upload/iblock/e66/dsqdun9i5mr68d8wz1b7daq01xvy3iga.png" alt="Серая салфетка с авторским принтом " Цветы""="" title="Серая салфетка с авторским принтом ">
        </div>
        <div class="catalog-product__title text-uppercase" itemprop="name">
          Серая салфетка с авторским принтом "Цветы" </div>
        <div class="catalog-product__price" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">

          <meta itemprop="priceCurrency" content="RUB">
          <meta itemprop="price" content="13000">
          <meta itemprop="availability" href="https://schema.org/OutOfStock">

          13 000 руб
        </div>
      </a>
    </div>




    <div class="col-12 col-lg-6" id="bx_3966226736_3719" itemscope="" itemtype="http://schema.org/Product">
      <a href="/catalog/demi/home-collection/0-2350D/" class="catalog-product">
        <div class="catalog-product__photo bg-primary catalog-product__photo--vertical">
          <button class="catalog-product__photo-favorite" title="добавить в избранное" data-action="add-to-favorite" data-id="3719">
            <svg>
              <use xlink:href="/local/media/images/icons.svg#like-full"></use>
            </svg>
          </button>
          <img itemprop="image" src="/upload/iblock/71d/d22pvg5u85y877s225fsjpu1nw0acny5.png" alt="Серая салфетка с авторским принтом " Цветы""="" title="Серая салфетка с авторским принтом ">
        </div>
        <div class="catalog-product__title text-uppercase" itemprop="name">
          Серая салфетка с авторским принтом "Цветы" </div>
        <div class="catalog-product__price" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">

          <meta itemprop="priceCurrency" content="RUB">
          <meta itemprop="price" content="13000">
          <meta itemprop="availability" href="https://schema.org/OutOfStock">

          13 000 руб
        </div>
      </a>
    </div>




    <div class="col-12 col-lg-6" id="bx_3966226736_3721" itemscope="" itemtype="http://schema.org/Product">
      <a href="/catalog/demi/home-collection/0-2350B/" class="catalog-product">
        <div class="catalog-product__photo bg-primary catalog-product__photo--vertical">
          <button class="catalog-product__photo-favorite" title="добавить в избранное" data-action="add-to-favorite" data-id="3721">
            <svg>
              <use xlink:href="/local/media/images/icons.svg#like-full"></use>
            </svg>
          </button>
          <img itemprop="image" src="/upload/resize_cache/iblock/fdf/874_596_2/pb15bv1l79kdxpcs2x7e7a3yrt2x3hmj.png" alt="Серая салфетка с авторским принтом " Цветы""="" title="Серая салфетка с авторским принтом ">
        </div>
        <div class="catalog-product__title text-uppercase" itemprop="name">
          Серая салфетка с авторским принтом "Цветы" </div>
        <div class="catalog-product__price" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">

          <meta itemprop="priceCurrency" content="RUB">
          <meta itemprop="price" content="13000">
          <meta itemprop="availability" href="https://schema.org/OutOfStock">

          13 000 руб
        </div>
      </a>
    </div>




    <div class="col-12 col-lg-6" id="bx_3966226736_3723" itemscope="" itemtype="http://schema.org/Product">
      <a href="/catalog/demi/home-collection/0-2350K/" class="catalog-product">
        <div class="catalog-product__photo bg-primary catalog-product__photo--vertical">
          <button class="catalog-product__photo-favorite" title="добавить в избранное" data-action="add-to-favorite" data-id="3723">
            <svg>
              <use xlink:href="/local/media/images/icons.svg#like-full"></use>
            </svg>
          </button>
          <img itemprop="image" src="/upload/iblock/442/ozg68ngar81ggaj0ppt5u879o55js1th.png" alt="Белая салфетка с авторским принтом " морская="" вечеринка""="" title="Белая салфетка с авторским принтом ">
        </div>
        <div class="catalog-product__title text-uppercase" itemprop="name">
          Белая салфетка с авторским принтом "морская вечеринка" </div>
        <div class="catalog-product__price" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">

          <meta itemprop="priceCurrency" content="RUB">
          <meta itemprop="price" content="13000">
          <meta itemprop="availability" href="https://schema.org/OutOfStock">

          13 000 руб
        </div>
      </a>
    </div>




    <div class="col-12 col-lg-6" id="bx_3966226736_3725" itemscope="" itemtype="http://schema.org/Product">
      <a href="/catalog/demi/home-collection/0-2350E/" class="catalog-product">
        <div class="catalog-product__photo bg-primary catalog-product__photo--vertical">
          <button class="catalog-product__photo-favorite" title="добавить в избранное" data-action="add-to-favorite" data-id="3725">
            <svg>
              <use xlink:href="/local/media/images/icons.svg#like-full"></use>
            </svg>
          </button>
          <img itemprop="image" src="/upload/iblock/306/wg2nnr3abcgv4uaurwpsl8rgpf75ye9j.png" alt="Белая салфетка с авторским принтом " морская="" вечеринка""="" title="Белая салфетка с авторским принтом ">
        </div>
        <div class="catalog-product__title text-uppercase" itemprop="name">
          Белая салфетка с авторским принтом "морская вечеринка" </div>
        <div class="catalog-product__price" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">

          <meta itemprop="priceCurrency" content="RUB">
          <meta itemprop="price" content="13000">
          <meta itemprop="availability" href="https://schema.org/OutOfStock">

          13 000 руб
        </div>
      </a>
    </div>




    <div class="col-12 col-lg-6" id="bx_3966226736_3727" itemscope="" itemtype="http://schema.org/Product">
      <a href="/catalog/demi/home-collection/0-2350L/" class="catalog-product">
        <div class="catalog-product__photo bg-primary catalog-product__photo--vertical">
          <button class="catalog-product__photo-favorite" title="добавить в избранное" data-action="add-to-favorite" data-id="3727">
            <svg>
              <use xlink:href="/local/media/images/icons.svg#like-full"></use>
            </svg>
          </button>
          <img itemprop="image" src="/upload/iblock/6d9/lx1or1b1owwwpoxwntd9h1l6aroxmn9o.png" alt="Белая салфетка с авторским принтом " Мистер="" лобстер""="" title="Белая салфетка с авторским принтом ">
        </div>
        <div class="catalog-product__title text-uppercase" itemprop="name">
          Белая салфетка с авторским принтом "Мистер лобстер" </div>
        <div class="catalog-product__price" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">

          <meta itemprop="priceCurrency" content="RUB">
          <meta itemprop="price" content="13000">
          <meta itemprop="availability" href="https://schema.org/OutOfStock">

          13 000 руб
        </div>
      </a>
    </div>




    <div class="col-12 col-lg-6" id="bx_3966226736_3729" itemscope="" itemtype="http://schema.org/Product">
      <a href="/catalog/demi/home-collection/0-2348/" class="catalog-product">
        <div class="catalog-product__photo bg-primary catalog-product__photo--vertical">
          <button class="catalog-product__photo-favorite" title="добавить в избранное" data-action="add-to-favorite" data-id="3729">
            <svg>
              <use xlink:href="/local/media/images/icons.svg#like-full"></use>
            </svg>
          </button>
          <img itemprop="image" src="/upload/resize_cache/iblock/53d/874_596_2/j1kmr9b5etsinwoxprarwo6wcg3rkg23.png" alt="Белая скатерть с авторским принтом " цветы""="" title="Белая скатерть с авторским принтом ">
        </div>
        <div class="catalog-product__title text-uppercase" itemprop="name">
          Белая скатерть с авторским принтом "цветы" </div>
        <div class="catalog-product__price" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">

          <meta itemprop="priceCurrency" content="RUB">
          <meta itemprop="price" content="48500">
          <meta itemprop="availability" href="https://schema.org/OutOfStock">

          48 500 руб
        </div>
      </a>
    </div>




    <div class="col-12 col-lg-6" id="bx_3966226736_3731" itemscope="" itemtype="http://schema.org/Product">
      <a href="/catalog/demi/home-collection/0-2348A/" class="catalog-product">
        <div class="catalog-product__photo bg-primary catalog-product__photo--vertical">
          <button class="catalog-product__photo-favorite" title="добавить в избранное" data-action="add-to-favorite" data-id="3731">
            <svg>
              <use xlink:href="/local/media/images/icons.svg#like-full"></use>
            </svg>
          </button>
          <img itemprop="image" src="/upload/resize_cache/iblock/1de/874_596_2/n3r53whbgzjjo9cn2tpxt6xla9gv7z98.png" alt="Серая скатерть с авторским принтом " цветы""="" title="Серая скатерть с авторским принтом ">
        </div>
        <div class="catalog-product__title text-uppercase" itemprop="name">
          Серая скатерть с авторским принтом "цветы" </div>
        <div class="catalog-product__price" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">

          <meta itemprop="priceCurrency" content="RUB">
          <meta itemprop="price" content="48500">
          <meta itemprop="availability" href="https://schema.org/OutOfStock">

          48 500 руб
        </div>
      </a>
    </div>




    <div class="col-12 col-lg-6" id="bx_3966226736_3733" itemscope="" itemtype="http://schema.org/Product">
      <a href="/catalog/demi/home-collection/0-2348B/" class="catalog-product">
        <div class="catalog-product__photo bg-primary catalog-product__photo--vertical">
          <button class="catalog-product__photo-favorite" title="добавить в избранное" data-action="add-to-favorite" data-id="3733">
            <svg>
              <use xlink:href="/local/media/images/icons.svg#like-full"></use>
            </svg>
          </button>
          <img itemprop="image" src="/upload/resize_cache/iblock/45f/874_596_2/ln8o7n5pxoxdgp5bnser4q85sjwxq0ze.png" alt="Белая салфетка с авторским принтом " морская="" вечеринка""="" title="Белая салфетка с авторским принтом ">
        </div>
        <div class="catalog-product__title text-uppercase" itemprop="name">
          Белая салфетка с авторским принтом "морская вечеринка" </div>
        <div class="catalog-product__price" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">

          <meta itemprop="priceCurrency" content="RUB">
          <meta itemprop="price" content="48500">
          <meta itemprop="availability" href="https://schema.org/OutOfStock">

          48 500 руб
        </div>
      </a>
    </div>




    <div class="col-12 col-lg-6" id="bx_3966226736_3735" itemscope="" itemtype="http://schema.org/Product">
      <a href="/catalog/demi/home-collection/belaya-skatert-s-avtorskim-printom-mister-lobster/" class="catalog-product">
        <div class="catalog-product__photo bg-primary catalog-product__photo--vertical">
          <button class="catalog-product__photo-favorite" title="добавить в избранное" data-action="add-to-favorite" data-id="3735">
            <svg>
              <use xlink:href="/local/media/images/icons.svg#like-full"></use>
            </svg>
          </button>
          <img itemprop="image" src="/upload/iblock/902/0ccnujw4hyohqvvr1uaj6utcdtvmh65x.png" alt="Белая скатерть с авторским принтом " Мистер="" лобстер""="" title="Белая скатерть с авторским принтом ">
        </div>
        <div class="catalog-product__title text-uppercase" itemprop="name">
          Белая скатерть с авторским принтом "Мистер лобстер" </div>
        <div class="catalog-product__price" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">

          <meta itemprop="priceCurrency" content="RUB">
          <meta itemprop="price" content="48500">
          <meta itemprop="availability" href="https://schema.org/OutOfStock">

          48 500 руб
        </div>
      </a>
    </div>

  </div>
</div>

<div class="pb-4 pb-sm-5">
  <div class="consultation">
    <div class="container">
      <div class="row align-items-stretch flex-column-reverse flex-md-row g-0">
        <div class="col-md-6 col-lg-5">
          <div class="consultation__descr bg-primary">
            <div class="consultation__descr-block">
              <div class="z2 font-400 text-uppercase mb-2 mb-md-3">
                ПОДОБРАТЬ И КУПИТЬ<br>
                В ШОУРУМЕ </div>
              <p class="mb-2 mb-md-3">
                Вы можете зарезервировать встречу в шоу-руме на Тверской, чтобы посмотреть нашу коллекцию и получить специализированный сервис от наших сотрудников.
                <br><br>
                Эта услуга является бесплатной и доступна только для коллекций BASIC и DEMI COUTURE.
                Узнать о покупке изделий YANINA COUTURE можно только по телефону: <a href="tel:8 (495) 629 51 06">8 (495) 629 51 06</a>
              </p>
              <a href="#" data-fancybox="" data-type="ajax" data-src="/local/include/ajax/forms/" data-form="1" class="button text-uppercase w-100" data-form-name="consultation">
                <span>Записаться</span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-7 d-flex">
          <div class="consultation__picture" style="background-image: url(/local/media/images/consultation/Untitled-4_1.jpg);"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<? include('template/footer.php') ?>