<? $pageTitle = "Юбки" ?>
<?include('template/header.php') ?>

<div class="container">
  <div class="pt-1">
    <? include('sections/catalog-slider/index.php') ?>
  </div>
  <div class="pt-1 pb-2 py-sm-2">
    <?
      $breadcrumbsArr = array(
        array(
          "href" => $homeFolder,
          "text" => "Главная страница"
        ),
        array(
          "href" => $homeFolder."catalog.php",
          "text" => "Basic"
        ),
        array(
          "href" => $homeFolder."catalog.php",
          "text" => "Одежда"
        ),
        array(
          "href" => "",
          "text" => "Юбки"
        )
      );
      include('sections/breadcrumbs/index.php')
    ?>
  </div>
</div>
<div class="catalog-page">
  <div class="container">
    <div class="row justify-content-between align-items-center mb-2 mb-sm-3">
      <div class="col-auto">
        <div class="z2 font-400 text-uppercase mb-0">Юбки</div>
      </div>
      <div class="col-auto">
        <?include('sections/filter-block/index.php')?>
      </div>
    </div>
  </div>
</div>
<?include('sections/catalog-grig/index.php')?>
<div class="mb-md-3 pb-3">
  <div class="container">
    <div class="pagination">
      <a href="" class="pagination__arrow disabled">
        <svg>
          <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg?t=1692277951183?t=1692277949453?t=1692277716710?t=1692277715021?t=1692277211830?t=1692277210103?t=1692277162470?t=1692277160681?t=1692276723896#arrow-left"></use>
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
          <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg?t=1692277951183?t=1692277949453?t=1692277716710?t=1692277715021?t=1692277211830?t=1692277210103?t=1692277162470?t=1692277160681?t=1692276723896#arrow-right"></use>
        </svg>
      </a>
    </div>
  </div>
</div>
<div class="mb-md-3 pb-3">
  <?include('sections/consultation/index.php')?>
</div>

<?include('template/footer.php') ?>