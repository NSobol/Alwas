<? $pageTitle = "YANINA COUTURE" ?>
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
          "href" => "",
          "text" => "Юбки"
        )
      );
      include('sections/breadcrumbs/index.php')
    ?>
  </div>
</div>
<div class="collections-page">
  <div class="container">
    <div class="back-button d-none d-sm-block">
      <a href="<?= $homeFolder?>catalog.php" class="back-button__link text-uppercase">
        <svg>
          <use xlink:href="<?=MEDIA_PATH;?>images/icons.svg?t=1692277951183?t=1692277949453?t=1692277716710?t=1692277715021?t=1692277211830?t=1692277210103?t=1692277162470?t=1692277160681?t=1692276723896#arrow-left"></use>
        </svg>
      </a>
    </div>
    <div class="couture-product-section__title mb-3 mb-lg-5">
      YANINA<br>
      <span>COUTURE</span>
    </div>
  </div>
  <?include('sections/collections-grid/index.php')?>
</div>

<?include('template/footer.php') ?>