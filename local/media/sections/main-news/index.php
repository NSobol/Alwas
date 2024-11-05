<?
  $mainNewsArr = array(
    array(
      "date" => "20 Октября 2020",
      "title" => "BACKSTAGE ПОКАЗА YANINA COUTURE&nbsp;FW&nbsp;19/20"
    ),
    array(
      "date" => "20 Октября 2020",
      "title" => "ГОСТИ ПОКАЗА YANINA COUTURE&nbsp;FW&nbsp;19/20"
    ),
    array(
      "date" => "20 Октября 2020",
      "title" => "ГОСТИ ВЫСТАВКИ, ПОСЯЩЕННОЙ 25&#8209;ЛЕТИЮ МОДНОГО ДОМА YANINA COUTURE"
    ),
    array(
      "date" => "20 Октября 2020",
      "title" => "ТРАНК ШОУ YANINA COUTURE И&nbsp;CLUEV JEWELLERY HOUSE"
    )
  )
?>

<div class="main-news pt-2 pt-lg-3 pb-3 pb-lg-5 mb-lg-3">
  <div class="container">
    <div class="row align-items-center justify-content-between mb-3 mb-md-4 mb-lg-5">
      <div class="col-auto">
        <div class="z2 text-uppercase font-400 m-0">События</div>
      </div>
      <div class="col-auto">
        <div class="show-more text-center">
          <a href="" class="show-more__button text-uppercase">
            <span>все События</span>
          </a>
        </div>
      </div>
    </div>
    <div class="main-news-slider">
      <div class="swiper-container" data-slider="main-news-slider">
        <div class="swiper-wrapper">
          <? for ($x = 0; $x <= 2; $x++): ?>
            <? foreach ($mainNewsArr as $key => $item): ?>
              <div class="swiper-slide">
                <a href="" class="main-news__item">
                  <div class="main-news__item-photo">
                    <img src="<?=MEDIA_PATH;?>images/home/news-<?=$key?>.png?t=1692277951183" alt="">
                  </div>
                  <div class="main-news__item-date">
                    <?= $item["date"]?>
                  </div>
                  <div class="z4 text-uppercase font-400 m-0 main-news__item-title">
                    <?= $item["title"]?>
                  </div>
                </div>
              </a>
            <? endforeach; ?>
          <? endfor; ?>
        </div>
      </div>
      <div class="main-news-slider__arrow">
        <button class="main-news-slider__arrow-item" data-slider-prev="main-news-slider">
          <svg>
            <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg?t=1692277951183#arrow-left"></use>
          </svg>
        </button>
        <button class="main-news-slider__arrow-item" data-slider-next="main-news-slider">
          <svg>
            <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg?t=1692277951183#arrow-right"></use>
          </svg>
        </button>
      </div>
    </div>
  </div>
</div>