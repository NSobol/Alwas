<? $pageTitle = 'Юбка женская бежевая из фатина с принтом "листья" YANINA Basic' ?>
<?include('template/header.php') ?>

<div class="container">
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
          "href" => $homeFolder."catalog.php",
          "text" => "Юбки"
        ),
        array(
          "href" => "",
          "text" => 'Юбка женская бежевая из фатина с принтом "листья" YANINA Basic'
        )
      );
      include('sections/breadcrumbs/index.php')
    ?>
  </div>
</div>
<div class="product-page pb-md-3 mb-4 mb-md-3">
  <div class="container">
      <div class="back-button d-none d-sm-block">
        <a href="<?= $homeFolder?>catalog.php" class="back-button__link text-uppercase">
          <svg>
            <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg?t=1692277951183?t=1692277949453?t=1692277716710?t=1692277715021?t=1692277211830?t=1692277210103?t=1692277162470?t=1692277160681?t=1692276723896#arrow-left"></use>
          </svg>
        </a>
      </div>
  </div>
  <div class="container pb-md-5 mb-5">
    <?include('sections/product-info/index.php')?>
  </div>
  <div class="container">
    <div class="z3 text-center font-400 mb-3 pb-md-3">ДОПОЛНИТЕ СВОЙ ОБРАЗ</div>
    <? include('sections/products-slider/index.php') ?>
  </div>
</div>

<?include('template/footer.php') ?>