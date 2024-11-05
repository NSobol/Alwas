<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Архив");
?>

<?/*
<div class="container">
  <div class="pt-1 pb-2 py-sm-2">
    <?
    $breadcrumbsArr = array(
      array(
        "href" => $homeFolder,
        "text" => "Главная"
      ),
      array(
        "href" => $homeFolder,
        "text" => "Акции"
      ),
      array(
        "href" => "",
        "text" => $pageTitle
      )
    );
    include('sections/breadcrumbs/index.php')
    ?>
  </div>
</div>
<? include('sections/promo-head/index.php') ?>
<? include('sections/promo-gallery/index.php') ?>
<? include('sections/promo-body/index.php') ?>
<? include('sections/actions-more/index.php') ?>
*/ ?>


<div class="container">
  <div class="pt-1 pb-2 py-sm-2">
    <div class="breadcrumbs
        ">
      <div class="breadcrumbs__list">
        <div class="breadcrumbs__item">
          <a href="/yanina/">Главная</a>
        </div>
        <div class="breadcrumbs__item">
          <a href="/yanina/">Акции</a>
        </div>
        <div class="breadcrumbs__item">
          <span>Детальная акции</span>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="promo-head">
  <div class="container container--smaller">
    <div class="promo-head__main">
      <div class="row align-items-center g-2 g-lg-5">
        <div class="col-md-6">
          <picture>
            <img src="/local/media/images/promo/promo-head-0.jpg?t=1692277951183?t=1692277949453?t=1692277716710?t=1692277715021?t=1692277211830?t=1692277210103?t=1692277162470?t=1692277160681?t=1692276723896?t=1679361201396" alt="">
          </picture>
          <h1 class="promo-head__title d-md-none">Осенние каникулы.<br>скидка - 25%</h1>
        </div>
        <div class="col-md-6 p-lg-2 d-none d-md-block">
          <h1 class="promo-head__title">Осенние каникулы.<br>скидка - 25%</h1>
          <p class="promo-head__date">31 октября - 6 ноября</p>
          <p class="promo-head__descr">Максимальная скидка на проживание при бронировании номера от 2х ночей с включенным завтраком</p>
        </div>
      </div>
    </div>
    <div class="promo-head__more">
      <p class="promo-head__text">Текст основных условий акйии. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>
    </div>
    <div class="promo-head__actions">
      <div class="row justify-content-center align-items-center g-1">
        <div class="col-md-auto">
          <a href="" class="button">
            <span>Кнопка - 1</span>
          </a>
        </div>
        <div class="col-md-auto">
          <a href="" class="button button--white">
            <span>Кнопка - 2</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="promo-gallery">
  <div class="container container--smaller">
    <div class="promo-gallery__slider" data-slider-container="promo-gallery">
      <div class="swiper-container swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden" data-slider="promo-gallery">
        <div class="swiper-wrapper" id="swiper-wrapper-e5dc3f00d4329287" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
          <div class="swiper-slide swiper-slide-active" style="width: 968px;" role="group" aria-label="1 / 3">
            <picture class="promo-gallery__slider-picture">
              <img src="/local/media/images/promo/promo-slide-0.jpg?t=1692277951183?t=1692277949453?t=1692277716710?t=1692277715021?t=1692277211830?t=1692277210103?t=1692277162470?t=1692277160681?t=1692276723896?t=1679361201396" alt="">
            </picture>
            <p class="promo-gallery__slider-title">Название фотографии</p>
          </div>
          <div class="swiper-slide swiper-slide-next" style="width: 968px;" role="group" aria-label="2 / 3">
            <picture class="promo-gallery__slider-picture">
              <img src="/local/media/images/promo/promo-slide-1.jpg?t=1692277951183?t=1692277949453?t=1692277716710?t=1692277715021?t=1692277211830?t=1692277210103?t=1692277162470?t=1692277160681?t=1692276723896?t=1679361201396" alt="">
            </picture>
            <p class="promo-gallery__slider-title">Название фотографии</p>
          </div>
          <div class="swiper-slide" role="group" aria-label="3 / 3" style="width: 968px;">
            <picture class="promo-gallery__slider-picture">
              <img src="/local/media/images/promo/promo-slide-2.jpg?t=1692277951183?t=1692277949453?t=1692277716710?t=1692277715021?t=1692277211830?t=1692277210103?t=1692277162470?t=1692277160681?t=1692276723896?t=1679361201396" alt="">
            </picture>
            <p class="promo-gallery__slider-title">Название фотографии</p>
          </div>
        </div>
        <div class="swiper-navigation justify-content-between d-none d-xl-flex">
          <div class="swiper-prev swiper-button-disabled" data-slider-prev="promo-gallery" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-e5dc3f00d4329287" aria-disabled="true">
            <svg width="50" height="50" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle opacity=".1" cx="25" cy="25" r="24.5" stroke="#4E2417"></circle>
              <path d="M33.25 25h-16.5M23.5 18.25L16.75 25l6.75 6.75" stroke="#4E2417" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
          </div>
          <div class="swiper-next" data-slider-next="promo-gallery" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-e5dc3f00d4329287" aria-disabled="false">
            <svg width="50" height="50" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle opacity=".1" cx="25" cy="25" r="24.5" stroke="#4E2417"></circle>
              <path d="M16.75 25h16.5M26.5 18.25L33.25 25l-6.75 6.75" stroke="#4E2417" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
          </div>
        </div>
        <div class="swiper-pagination d-xl-none swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal" data-slider-pagination="promo-gallery"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
      </div>
    </div>
  </div>
</div>
<div class="promo-body">
  <div class="container container--smaller">
    <p>Текст подробного описания. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor.</p>
  </div>
  <div class="promo-body__brown">
    <div class="container container--smaller">
      <p>Текст подробного описания. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor.</p>
    </div>
  </div>
  <div class="container container--smaller">
    <p>Текст подробного описания. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor.</p>
    <picture>
      <img src="/local/media/images/promo/promo-slide-3.jpg?t=1692277951183?t=1692277949453?t=1692277716710?t=1692277715021?t=1692277211830?t=1692277210103?t=1692277162470?t=1692277160681?t=1692276723896?t=1679361201396" alt="">
    </picture>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor.</p>
    <h2>Заголовок второго уровня</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean<br>euismod bibendum laoreet. Proin gravida dolor sit amet lacus<br>accumsan et viverra justo commodo. Proin sodales pulvinar tempor.</p>
    <ol>
      <li>Элемент списка</li>
      <li>Элемент списка</li>
      <li>Элемент списка</li>
      <li>Элемент списка</li>
      <li>Элемент списка</li>
      <li>Элемент списка</li>
    </ol>
    <ul>
      <li>Элемент списка</li>
      <li>Элемент списка</li>
      <li>Элемент списка</li>
      <li>Элемент списка</li>
      <li>Элемент списка</li>
      <li>Элемент списка</li>
    </ul>
    <div class="row align-items-center g-1">
      <div class="col-md-auto">
        <a href="" class="button">
          <span>Кнопка - 1</span>
        </a>
      </div>
      <div class="col-md-auto">
        <a href="" class="button button--white">
          <span>Кнопка - 2</span>
        </a>
      </div>
    </div>
  </div>
</div>
<div class="actions-more" data-slider-container="act-more">
  <div class="container">
    <div class="d-flex mb-2 justify-content-between align-items-center">
      <a href="#" class="z4 mb-0">
        <span>Акции</span>
        <svg xmlns="http://www.w3.org/2000/svg">
          <use xlink:href="/local/media/images/icons.svg?t=1692277951183?t=1692277949453?t=1692277716710?t=1692277715021?t=1692277211830?t=1692277210103?t=1692277162470?t=1692277160681?t=1692276723896?t=1679361201396#caret-right"></use>
        </svg>
      </a>
      <div class="swiper-navigation d-none d-md-flex">
        <div class="swiper-prev swiper-button-disabled" data-slider-prev="act-more" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-2eac17bdc596c0ec" aria-disabled="true">
          <svg width="50" height="50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle opacity=".1" cx="25" cy="25" r="24.5" stroke="#4E2417"></circle>
            <path d="M33.25 25h-16.5M23.5 18.25L16.75 25l6.75 6.75" stroke="#4E2417" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
        </div>
        <div class="swiper-next" data-slider-next="act-more" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-2eac17bdc596c0ec" aria-disabled="false">
          <svg width="50" height="50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle opacity=".1" cx="25" cy="25" r="24.5" stroke="#4E2417"></circle>
            <path d="M16.75 25h16.5M26.5 18.25L33.25 25l-6.75 6.75" stroke="#4E2417" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
        </div>
      </div>
    </div>
    <div class="swiper-container swiper-initialized swiper-horizontal swiper-pointer-events" data-slider="act-more">
      <div class="swiper-wrapper" id="swiper-wrapper-2eac17bdc596c0ec" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
        <div class="swiper-slide swiper-slide-active" style="width: 277.5px; margin-right: 20px;" role="group" aria-label="1 / 12">
          <a href="#" class="act-item">
            <picture>
              <img src="/local/media/images/promo/promo-item-0.jpg?t=1692277951183?t=1692277949453?t=1692277716710?t=1692277715021?t=1692277211830?t=1692277210103?t=1692277162470?t=1692277160681?t=1692276723896?t=1679361201396" alt="">
            </picture>
            <div class="act-item__content">
              <div class="act-item__date">1 октября - 30 ноября</div>
              <div class="act-item__title">Название акции длинное в две строки</div>
              <div class="act-item__desc">Текст основных условий акйии. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            </div>
          </a>
        </div>
        <div class="swiper-slide swiper-slide-next" style="width: 277.5px; margin-right: 20px;" role="group" aria-label="2 / 12">
          <a href="#" class="act-item">
            <picture>
              <img src="/local/media/images/promo/promo-item-0.jpg?t=1692277951183?t=1692277949453?t=1692277716710?t=1692277715021?t=1692277211830?t=1692277210103?t=1692277162470?t=1692277160681?t=1692276723896?t=1679361201396" alt="">
            </picture>
            <div class="act-item__content">
              <div class="act-item__date">1 октября - 30 ноября</div>
              <div class="act-item__title">Название акции длинное в две строки</div>
              <div class="act-item__desc">Текст основных условий акйии. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            </div>
          </a>
        </div>
        <div class="swiper-slide" style="width: 277.5px; margin-right: 20px;" role="group" aria-label="3 / 12">
          <a href="#" class="act-item">
            <picture>
              <img src="/local/media/images/promo/promo-item-0.jpg?t=1692277951183?t=1692277949453?t=1692277716710?t=1692277715021?t=1692277211830?t=1692277210103?t=1692277162470?t=1692277160681?t=1692276723896?t=1679361201396" alt="">
            </picture>
            <div class="act-item__content">
              <div class="act-item__date">1 октября - 30 ноября</div>
              <div class="act-item__title">Название акции длинное в две строки</div>
              <div class="act-item__desc">Текст основных условий акйии. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            </div>
          </a>
        </div>
        <div class="swiper-slide" style="width: 277.5px; margin-right: 20px;" role="group" aria-label="4 / 12">
          <a href="#" class="act-item">
            <picture>
              <img src="/local/media/images/promo/promo-item-0.jpg?t=1692277951183?t=1692277949453?t=1692277716710?t=1692277715021?t=1692277211830?t=1692277210103?t=1692277162470?t=1692277160681?t=1692276723896?t=1679361201396" alt="">
            </picture>
            <div class="act-item__content">
              <div class="act-item__date">1 октября - 30 ноября</div>
              <div class="act-item__title">Название акции длинное в две строки</div>
              <div class="act-item__desc">Текст основных условий акйии. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            </div>
          </a>
        </div>
        <div class="swiper-slide" style="width: 277.5px; margin-right: 20px;" role="group" aria-label="5 / 12">
          <a href="#" class="act-item">
            <picture>
              <img src="/local/media/images/promo/promo-item-0.jpg?t=1692277951183?t=1692277949453?t=1692277716710?t=1692277715021?t=1692277211830?t=1692277210103?t=1692277162470?t=1692277160681?t=1692276723896?t=1679361201396" alt="">
            </picture>
            <div class="act-item__content">
              <div class="act-item__date">1 октября - 30 ноября</div>
              <div class="act-item__title">Название акции длинное в две строки</div>
              <div class="act-item__desc">Текст основных условий акйии. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            </div>
          </a>
        </div>
        <div class="swiper-slide" style="width: 277.5px; margin-right: 20px;" role="group" aria-label="6 / 12">
          <a href="#" class="act-item">
            <picture>
              <img src="/local/media/images/promo/promo-item-0.jpg?t=1692277951183?t=1692277949453?t=1692277716710?t=1692277715021?t=1692277211830?t=1692277210103?t=1692277162470?t=1692277160681?t=1692276723896?t=1679361201396" alt="">
            </picture>
            <div class="act-item__content">
              <div class="act-item__date">1 октября - 30 ноября</div>
              <div class="act-item__title">Название акции длинное в две строки</div>
              <div class="act-item__desc">Текст основных условий акйии. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            </div>
          </a>
        </div>
        <div class="swiper-slide" style="width: 277.5px; margin-right: 20px;" role="group" aria-label="7 / 12">
          <a href="#" class="act-item">
            <picture>
              <img src="/local/media/images/promo/promo-item-0.jpg?t=1692277951183?t=1692277949453?t=1692277716710?t=1692277715021?t=1692277211830?t=1692277210103?t=1692277162470?t=1692277160681?t=1692276723896?t=1679361201396" alt="">
            </picture>
            <div class="act-item__content">
              <div class="act-item__date">1 октября - 30 ноября</div>
              <div class="act-item__title">Название акции длинное в две строки</div>
              <div class="act-item__desc">Текст основных условий акйии. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            </div>
          </a>
        </div>
        <div class="swiper-slide" style="width: 277.5px; margin-right: 20px;" role="group" aria-label="8 / 12">
          <a href="#" class="act-item">
            <picture>
              <img src="/local/media/images/promo/promo-item-0.jpg?t=1692277951183?t=1692277949453?t=1692277716710?t=1692277715021?t=1692277211830?t=1692277210103?t=1692277162470?t=1692277160681?t=1692276723896?t=1679361201396" alt="">
            </picture>
            <div class="act-item__content">
              <div class="act-item__date">1 октября - 30 ноября</div>
              <div class="act-item__title">Название акции длинное в две строки</div>
              <div class="act-item__desc">Текст основных условий акйии. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            </div>
          </a>
        </div>
        <div class="swiper-slide" style="width: 277.5px; margin-right: 20px;" role="group" aria-label="9 / 12">
          <a href="#" class="act-item">
            <picture>
              <img src="/local/media/images/promo/promo-item-0.jpg?t=1692277951183?t=1692277949453?t=1692277716710?t=1692277715021?t=1692277211830?t=1692277210103?t=1692277162470?t=1692277160681?t=1692276723896?t=1679361201396" alt="">
            </picture>
            <div class="act-item__content">
              <div class="act-item__date">1 октября - 30 ноября</div>
              <div class="act-item__title">Название акции длинное в две строки</div>
              <div class="act-item__desc">Текст основных условий акйии. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            </div>
          </a>
        </div>
        <div class="swiper-slide" style="width: 277.5px; margin-right: 20px;" role="group" aria-label="10 / 12">
          <a href="#" class="act-item">
            <picture>
              <img src="/local/media/images/promo/promo-item-0.jpg?t=1692277951183?t=1692277949453?t=1692277716710?t=1692277715021?t=1692277211830?t=1692277210103?t=1692277162470?t=1692277160681?t=1692276723896?t=1679361201396" alt="">
            </picture>
            <div class="act-item__content">
              <div class="act-item__date">1 октября - 30 ноября</div>
              <div class="act-item__title">Название акции длинное в две строки</div>
              <div class="act-item__desc">Текст основных условий акйии. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            </div>
          </a>
        </div>
        <div class="swiper-slide" style="width: 277.5px; margin-right: 20px;" role="group" aria-label="11 / 12">
          <a href="#" class="act-item">
            <picture>
              <img src="/local/media/images/promo/promo-item-0.jpg?t=1692277951183?t=1692277949453?t=1692277716710?t=1692277715021?t=1692277211830?t=1692277210103?t=1692277162470?t=1692277160681?t=1692276723896?t=1679361201396" alt="">
            </picture>
            <div class="act-item__content">
              <div class="act-item__date">1 октября - 30 ноября</div>
              <div class="act-item__title">Название акции длинное в две строки</div>
              <div class="act-item__desc">Текст основных условий акйии. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            </div>
          </a>
        </div>
        <div class="swiper-slide" role="group" aria-label="12 / 12" style="width: 277.5px; margin-right: 20px;">
          <a href="#" class="act-item">
            <picture>
              <img src="/local/media/images/promo/promo-item-0.jpg?t=1692277951183?t=1692277949453?t=1692277716710?t=1692277715021?t=1692277211830?t=1692277210103?t=1692277162470?t=1692277160681?t=1692276723896?t=1679361201396" alt="">
            </picture>
            <div class="act-item__content">
              <div class="act-item__date">1 октября - 30 ноября</div>
              <div class="act-item__title">Название акции длинное в две строки</div>
              <div class="act-item__desc">Текст основных условий акйии. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            </div>
          </a>
        </div>
      </div>
      <div class="swiper-progress swiper-progress--dark swiper-pagination-progressbar swiper-pagination-horizontal" data-slider-progress="act-more"><span class="swiper-pagination-progressbar-fill" style="transform: translate3d(0px, 0px, 0px) scaleX(0.111111) scaleY(1); transition-duration: 300ms;"></span></div>
      <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
    </div>
  </div>
</div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>