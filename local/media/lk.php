<? $pageTitle = "Личный кабинет" ?>
<? include('template/header.php') ?>
<?
$lkNavItems = array(
    array(
        "name" => "Профиль",
        "href" => "info",
    ),
    array(
        "name" => "История просмотров",
        "href" => "history",
    ),
    array(
        "name" => "Заказы",
        "href" => "orders",
    ),
    array(
        "name" => "Встречи",
        "href" => "meeting",
    ),
    array(
        "name" => "Избранное",
        "href" => "favorites",
    ),
    array(
        "name" => "Выйти",
        "href" => $homeFolder
    ),
)
?>

<div class="container">
    <div class="pb-2">
        <?
        $breadcrumbsArr = array(
            array(
                "href" => $homeFolder,
                "text" => "Главная страница"
            ),
            array(
                "href" => "",
                "text" => "Личный кабинет"
            )
        );
        include('sections/breadcrumbs/index.php')
        ?>
    </div>
</div>

<div class="lk-page">
    <div class="lk-page__nav pb-1 pb-md-2">
        <div class="container">
            <div class="z2 lk-page-heading">Личный кабинет</div>
            <div class="lk-page__menu d-xl-none">
                <button type="button" class="lk-page__menu-button reset-btn" data-lk-menu="toggle">
                    <svg xmlns='http://www.w3.org/2000/svg'>
                        <use xlink:href='/local/media/images/icons.svg?t=1692277951183?t=1692277949453?t=1692277716710?t=1692277715021?t=1692277211830?t=1692277210103?t=1692277162470?t=1692277160681?t=1692276723896#arrow-toggle'></use>
                    </svg>
                    <span>Профиль</span>
                </button>
                <div class="lk-page__menu-loguot ml-auto">
                    <a href="<?= $homeFolder ?>">
                        <span>Выйти</span>
                    </a>
                </div>
            </div>
            <ul class="lk-page__nav-list" data-lk-menu="block">
                <? foreach ($lkNavItems as $navItem) : ?>
                    <li class="lk-page__nav-item">
                        <? if ($navItem['name'] !== "Выйти") : ?>
                            <a href="<?= $homeFolder . "lk.php?section=" . $navItem['href'] ?>" class="<? if ($_REQUEST['section'] === $navItem['href']) : ?>is-active<? endif; ?>">
                                <span><?= $navItem['name'] ?></span>
                            </a>
                        <? else : ?>
                            <a href="<?= $navItem['href'] ?>" class="d-none d-xl-flex">
                                <span><?= $navItem['name'] ?></span>
                            </a>
                        <? endif; ?>
                    </li>
                <? endforeach; ?>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="lk-page__user-bg" style="background-image: url(<?= MEDIA_PATH; ?>images/lk/bg.png?t=1692277951183?t=1692277949453?t=1692277716710?t=1692277715021?t=1692277211830?t=1692277210103?t=1692277162470?t=1692277160681?t=1692276723896);">
            <!-- Удалить паттерн, если будет фон из родительского блока -->
            <div class="pattern"> </div>
        </div>
        <div class="lk-page__user-initials">
            <span>I.M</span>
        </div>
        <div class="lk-page__user-name mt-1">
            <span>Иванова Мария Ивановна</span>
        </div>
    </div>
</div>

<? include('sections/lk/index.php') ?>
</div>


<? include('template/footer.php') ?>