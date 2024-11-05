<div class="product-info" data-sidebar="product-main">
  <div class="row gy-2 gy-lg-0">

    <div class="col-lg-6 col-xl-7">
      <div class="product-gallery">
        <div class="swiper-container" data-slider="product-gallery">
          <div class="swiper-wrapper">
            <? for ($i = 0; $i < 5; $i++): ?>
              <div class="swiper-slide">
                <div class="product-gallery__item">
                  <img src="<?=MEDIA_PATH;?>images/product/pic-<?= $i?>.png" alt="">
                </div>
              </div>
            <? endfor; ?>
          </div>
        </div>
        <div class="product-gallery__arrow">
          <button class="product-gallery__arrow-item" data-slider-prev="product-gallery">
            <svg>
              <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg#arrow-left"></use>
            </svg>
          </button>
          <button class="product-gallery__arrow-item" data-slider-next="product-gallery">
            <svg>
              <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg#arrow-right"></use>
            </svg>
          </button>
        </div>
      </div>
    </div>

    <div class="col-lg-6 col-xl-5 col-xxl-4">
      <div class="product-asside" data-sidebar="product-sidebar">
        <div class="product-asside__inner" data-sidebar="product-sidebar-inner">

          <div class="z2 mb-2">Юбка женская бежевая из фатина с принтом "листья" YANINA Basic</div>
          
          <p>Артикул: 0-1659A</p>
          
          <div class="product-asside__types">

            <div class="product-asside__color">
              <div class="z4 mb-0">
                <span>Цвет:</span>
              </div>
              <div class="product-asside__color-type">
                <? for ($i = 0; $i < 2; $i++): ?>
                  <a href="#">
                    <img src="<?=MEDIA_PATH;?>images/product/color-<?= $i?>.png" alt="">
                  </a>
                <? endfor; ?>
              </div>
            </div>

            <div class="product-asside__size">
              <div class="z4 mb-0">
                <span>Размер:</span>
              </div>
              <div class="product-asside__size-type">
                <? $sizeTypes = array('S', 'M', 'L') ?>
                <? foreach ($sizeTypes as $key => $sizeItem): ?>
                  <a href="#" class="<?= $key === 0 ? 'active' : '' ?>">
                    <div class="z4 mb-0"><?= $sizeItem?></div>
                  </a>
                <? endforeach; ?>
              </div>
            </div>

            <div class="product-asside__info flex-wrap">
              <!-- <div class="product-asside__info-sizetable">
                <button class="d-none d-lg-inline-flex" data-filter="size-table">
                  <svg>
                    <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg#ruler"></use>
                  </svg>
                  <span>Таблица размеров</span>
                </button>
                <a href="javascript:;" data-src="#size-table" data-fancybox="" class="d-lg-none">
                  <svg>
                    <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg#ruler"></use>
                  </svg>
                  <span>Таблица размеров</span>
                </a>
              </div> -->
              <div class="product-asside__info-status">
                <span>
                  <span>В наличии</span>
                  <svg>
                    <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg#check"></use>
                  </svg>
                </span>
              </div>
              <div class="row align-items-center flex-nowrap g-1 pt-1 pt-sm-0">
                <div class="col-auto d-flex align-items-center justify-content-center">
                  <svg width="20" height="16px">
                    <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg#delivery-car"></use>
                  </svg>
                </div>
                <div class="col-auto">
                  <p class="mb-0">Доставка по Москве с примеркой</p>
                </div>
              </div>
            </div>
            
            <div class="product-asside__main">
              <div class="product-asside__main-favourites">
                <button>
                  <svg>
                    <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg#like-full"></use>
                  </svg>
                  <span>в избранное</span>
                </button>
              </div>
              <div class="product-asside__main-price">
                <div class="z2 mb-0">31 900р.</div>
              </div>
            </div>
            
            <div class="row gy-1 gy-xl-0 gx-1">
              <div class="col-xl-6 d-flex">
                <button class="button button--white button--sm">
                  <span>записаться в шоурум</span>
                </button>
              </div>
              <div class="col-xl-6 d-flex">
                <button class="button button--sm">
                  <span>Добавить в корзину</span>
                </button>
              </div>
            </div>

            <div class="product-asside__descr">
              <p class="mb-2">Бежевая воздушная юбка-миди с принтом листья. Модель выполнена из сетчатой ткани, подкладка — 100% хлопок.</p>
              <table>
                <tr>
                  <td>Материал:</td>
                  <td>Сетка</td>
                </tr>
                <tr>
                  <td>Подкладка:</td>
                  <td>Хлопок</td>
                </tr>
                <tr>
                  <td>Уход за изделием:</td>
                  <td>Сухая чистка</td>
                </tr>
                <tr>
                  <td>Размер:</td>
                  <td>S , M , L</td>
                </tr>
              </table>
            </div>

          </div>

          <div class="product-asside__about">
            <? 
              $filtersArr = array(
                array(
                  'icon' => 'delivery-car',
                  'title' => 'Доставка',
                  'content' => '
                    <p class="mb-1">Заказы на доставку принимаются по будним дням с 10:00 до 19:00.</p>
                    <p class="mb-1">Доставка по Москве и Московской области осуществляется в течении 2х дней с момента размещения заказа.</p>
                    <p class="mb-1">Стоимость доставки:</p>
                    <div class="row bg-primary gy-1 pb-1 my-1">
                      <div class="col-12">
                        <div class="row align-items-center justify-content-between">
                          <div class="col-auto">Москва</div>
                          <div class="col-auto">800 рублей </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="row align-items-center justify-content-between">
                          <div class="col-auto">Московская область </div>
                          <div class="col-auto">1200 рублей</div>
                        </div>
                      </div>
                    </div>
                    <p class="mb-1">Доставка по Санкт-Петербургу и Ленинградской области осуществляется в течении 3х дней с момента размещения заказа.</p>
                    <div class="row bg-primary align-items-center justify-content-between py-1 mb-1">
                      <div class="col-auto">Стоимость доставки:</div>
                      <div class="col-auto">1200 рублей</div>
                    </div>
                    <p class="mb-0">Международная доставка и доставка по России согласовывается отдельно. Подробнее в FAQ</p>'
                ),
                array(
                  'icon' => 'ruler',
                  'title' => 'Обмеры',
                  'content' => '<p>Описание пункта</p>'
                ),
                array(
                  'icon' => 'dress',
                  'title' => 'Параметры модели',
                  'content' => '
                    <table>
                      <tr>
                        <td>обхват груди:</td>
                        <td>81 см</td>
                      </tr>
                      <tr>
                        <td>обхват талии:</td>
                        <td>58 см</td>
                      </tr>
                      <tr>
                        <td>обхват бёдер:</td>
                        <td>86 см</td>
                      </tr>
                      <tr>
                        <td>рост:</td>
                        <td>174 см</td>
                      </tr>
                    </table>'
                ),
                array(
                  'icon' => 'book',
                  'title' => 'Справочник по размерам',
                  'content' => '<p>Чтобы определить нужный размер воспользуйтесь, пожалуйста, таблицей размеров. В случае, если у вас остались вопросы или сомнения, обратитесь к специалистам клиентской поддержки YANINACOUTURE.COM, позвонив по телефону  +7 (929) 545-87-17.</p>'
                ),
                array(
                  'icon' => 'info',
                  'title' => 'Состав и уход',
                  'content' => '<p>Верх: 100% полиэстер, низ: 100% хлопок. Уход: сухая чистка</p>'
                ),
                array(
                  'icon' => 'return',
                  'title' => 'Возврат',
                  'content' => '<p>Описание пункта</p>'
                ),
                array(
                  'icon' => 'credit-card',
                  'title' => 'Оплата',
                  'content' => '<p>Описание пункта</p>'
                )
              ) 
            ?>
            <? foreach ($filtersArr as $key => $filterItem): ?>
              <div class="product-asside__filter">
                <button type="button" class="product-asside__filter-button" data-toggle="buttonn">
                  <div class="product-asside__filter-item">
                    <div class="row align-items-center justify-content-between">
                      <div class="col-auto d-flex align-items-center justify-content-between">
                        <svg>
                          <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg#<?= $filterItem['icon'] ?>"></use>
                        </svg>
                        <div class="z4 mb-0">
                          <span><?= $filterItem['title'] ?></span>
                        </div>
                      </div>
                      <div class="col-auto">
                        <svg class="plus">
                          <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg#plus"></use>
                        </svg>
                      </div>
                    </div>
                  </div>
                </button>
                <div data-toggle="content">
                  <div class="pt-1">
                    <?= $filterItem['content'] ?>
                  </div>
                </div>
              </div>
            <? endforeach; ?>

          </div>

          <div class="product-asside__help">
            <p class="text-center text-uppercase mb-2 mb-md-3">
              <span>Нужна помощь?</span>
            </p>
            <!-- <a href="" class="product-asside__help-item">
              <figure>
                <img src="<?=MEDIA_PATH;?>images/bow-small.png" alt="">
              </figure>
              <p>Записаться на консультацию в&nbsp;шоурум</p>
            </a> -->
            <a href="" class="product-asside__help-item">
            <figure>
                <img src="<?=MEDIA_PATH;?>images/package.png" alt="">
              </figure>
              <p>Фирменная упаковка</p>
            </a>
          </div>

        </div>
      </div>
    </div>

  </div>
</div>

<div class="filters-section" data-filter-section="size-table">
  <div class="filters-section__container">
    <div class="filters-section__headline">
      <div class="row justify-content-between align-items-center">
        <div class="col-auto">
          <div class="filters-section__headline-title">Size chart</div>
        </div>
        <div class="col-auto">
          <div class="filters-section__headline-close" data-filter-close>
            <svg class="svg-icon svg-icon--plus">
              <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg#plus"></use>
            </svg>
          </div>
        </div>
      </div>
    </div>
    <div class="size-table">
      <div class="size-table__table size-table__table--en mb-1 mb-md-2">
        <table>
          <tr>
            <td></td>
            <td></td>
            <td>BUST (СМ)</td>
            <td>WAIST (СМ)</td>
            <td>HIP (СМ)</td>
          </tr>
          <tr>
            <td>XS</td> 
            <td>42</td> 
            <td>84</td> 
            <td>64</td> 
            <td>92</td>
          </tr>
          <tr>
            <td>S </td>
            <td>44</td> 
            <td>88</td> 
            <td>66</td> 
            <td>96</td>
          </tr>
          <tr>
            <td>M </td>
            <td>46</td> 
            <td>92</td> 
            <td>71</td> 
            <td>100</td>
          </tr>
          <tr>
            <td>L </td>
            <td>48</td> 
            <td>96</td> 
            <td>75</td> 
            <td>104</td> 
          </tr>
          <tr>
            <td>XL </td> 
            <td>50 </td> 
            <td>100</td> 
            <td>79 </td> 
            <td>108</td>
          </tr>
          <tr>
            <td>2XL</td> 
            <td>52 </td>
            <td>104</td> 
            <td>83 </td>
            <td>112</td>
          </tr>
          <tr>
            <td>3XL</td> 
            <td>54 </td>
            <td>108</td> 
            <td>88 </td>
            <td>116</td>
          </tr>
          <tr>
            <td>4XL</td> 
            <td>56 </td>
            <td>116</td> 
            <td>93 </td>
            <td>120</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>