<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Страница не найдена");
?>

<div class="error-section">
  <div class="container">
    <div class="error-section__content">
      <div class="error-section__title">Страница не найдена</div>
      <div class="text-center">
        <a href="/" class="button button--accent">
          <span>Вернуться на главную</span>
        </a>
      </div>
    </div>
  </div>
</div>

<?\mbdg\helpers::includeSection('novelties',['FILTER_NAME'=>'popularFilter','CUSTOM_TITLE'=>'Популярные товары']);?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>