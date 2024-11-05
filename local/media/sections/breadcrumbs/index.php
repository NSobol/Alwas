<div class="breadcrumbs
    <? if (isset($breadcrumbsExtraClasses)) : ?>
        <?= $breadcrumbsExtraClasses ?>
     <? endif; ?>
    ">
    <div class="breadcrumbs__list">
        <? if (isset($breadcrumbsArr)) : ?>
            <? foreach ($breadcrumbsArr as $key => $item) : ?>
                <div class="breadcrumbs__item">
                    <? if ($key + 1 !== count($breadcrumbsArr)) : ?>
                        <a href="<?= $item["href"] ?>"><?= $item["text"] ?></a>
                    <? else : ?>
                        <span><?= $item["text"] ?></span>
                    <? endif; ?>
                </div>
            <? endforeach; ?>
        <? else : ?>
            <div class="breadcrumbs__item">
                <a href="/">Главная страница</a>
            </div>
            <div class="breadcrumbs__item">
                <? if (isset($pageTitle)) : ?>
                    <span><?= $pageTitle ?></span>
                <? else : ?>
                    <span>Текущая страница</span>
                <? endif; ?>
            </div>
        <? endif; ?>
    </div>
</div>