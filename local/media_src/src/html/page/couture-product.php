<? $pageTitle = 'ПЛАТЬЕ ИЗ ТВИДА БУКЛЕ' ?>
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
        )
      );
      include('sections/breadcrumbs/index.php')
    ?>
  </div>
</div>
<div class="couture-product-page pb-md-3 mb-4 mb-md-3">
  <div class="container">
      <div class="back-button d-none d-sm-block">
        <a href="<?= $homeFolder?>catalog.php" class="back-button__link text-uppercase">
          <svg>
            <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg#arrow-left"></use>
          </svg>
        </a>
      </div>
  </div>
  <?include('sections/couture-product/index.php')?>
  <div class="container">
    <div class="z3 text-center font-400 mb-3 pb-md-3 text-uppercase">Yanina Couture FW 2021...</div>
    <? include('sections/products-slider/index--couture.php') ?>
  </div>
</div>

<?include('template/footer.php') ?>