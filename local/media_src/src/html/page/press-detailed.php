<? $pageTitle = 'Madame Figaro China April 2020' ?>
<?include('template/header.php') ?>

<div class="container text-center">
  <div class="row justify-content-center pt-1 pb-2 py-sm-2">
    <div class="col-auto">
      <?
        $breadcrumbsArr = array(
          array(
            "href" => $homeFolder,
            "text" => "Главная страница"
          ),
          array(
            "href" => "",
            "text" => "Пресса"
          )
        );
        include('sections/breadcrumbs/index.php')
      ?>
    </div>
  </div>
</div>

<?include('sections/press-detailed/index.php')?>
<div class="pb-4 pb-sm-5">
  <?include('sections/consultation/index.php')?>
</div>

<?include('template/footer.php') ?>