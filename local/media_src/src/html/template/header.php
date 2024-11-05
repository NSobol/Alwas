<?
define(MEDIA_PATH, '');

/* переменная корневого коталога для ссылок в вёрстке */
$homeFolder = '/yanina/';
?>
<!DOCTYPE HTML>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        <? if (isset($pageTitle)) : ?>
            <?= $pageTitle ?>
        <? else : ?>
            Текущая страница
        <? endif; ?>
    </title>

    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link rel="preconnect" href="https://fonts.gstatic.com">


    <link href="css/library.min.css" rel="stylesheet">
    <link href="css/base.min.css" rel="stylesheet">
    <link href="css/sections.min.css" rel="stylesheet"><!--temp include for markup only-->
</head>

<body>
    <header class="header" data-sticky="header">
        <div class="header-panel" data-header="panel">
            <div class="header__main">
                <div class="container">
                    <div class="hm-left">
                        <button class="burger d-xl-none" data-mobile-menu="toggle">
                            <div class="burger__container">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </button>
                        <div class="hm-about d-none d-xl-block">
                            <span class="hm-about__label">О компании</span>
                            <div class="hm-about__panel">
                                <div class="hm-about__links">
                                    <a href="/about/" class="hm-about__link">
                                        О бренде </a>
                                    <a href="/partners/" class="hm-about__link">
                                        Партнёрам </a>
                                    <a href="/social-responsibility/" class="hm-about__link">
                                        Социальная ответственность </a>
                                    <a href="/contacts/" class="hm-about__link">
                                        Контакты </a>
                                    <a href="/about/documents/" class="hm-about__link">
                                        Документы </a>
                                </div>
                            </div>
                        </div>
                        <a href="tel:+79990704447" class="hm-tel d-none d-xl-block">+7 (999) 070-44-47</a>


                        <div class="header-socials d-none d-xl-flex">
                            <span>НАПИСАТЬ:</span>
                            <a href="https://t.me/alwa_posyda_studio" target="_blank" class="header__main-icon">
                                <svg>
                                    <use xlink:href="<?= MEDIA_PATH; ?>images/icons.svg#telegram"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="hm-centr">
                        <a href="/" class="header__main-logo">
                            <svg xmlns='http://www.w3.org/2000/svg'>
                                <use xlink:href='<?= MEDIA_PATH; ?>images/icons.svg#alwa'></use>
                            </svg> </a>
                    </div>
                    <div class="hm-right">
                        <div class="header-socials d-none d-xl-flex my-auto mr-2">
                            <span class="text-uppercase">дистрибьюторам:</span>
                            <a href="tel:+79300330339" class="hm-tel d-none d-xl-block mr-0 p-0">+7 930 033-03-39</a>
                        </div>
                        <a href="/personal/" class="header__main-icon header__main-icon--user d-none d-xl-block">
                            <svg>
                                <use xlink:href="<?= MEDIA_PATH; ?>images/icons.svg#user"></use>
                            </svg>
                        </a>
                        <a href="/personal/favorite/" class="header__main-icon header__main-icon--user d-none d-xl-block">
                            <div class="header__main-cartitems">
                                <span small-favorites>
                                    0
                                </span>
                            </div>
                            <svg>
                                <use xlink:href="<?= MEDIA_PATH; ?>images/icons.svg#like"></use>
                            </svg>
                        </a>
                        <div class="d-none d-xl-block">
                            <div class="col-auto">
                                <a href="/personal/cart/" class="header__main-icon header__main-icon--cart" small-basket>
                                    <div class="header__main-cartitems">
                                        <span small-basket-count>
                                            0 </span>
                                    </div>
                                    <svg>
                                        <use xlink:href="<?= MEDIA_PATH; ?>images/icons.svg#shopping-bag"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="d-xl-none">
                            <button type="button" class="header-search-toggle reset-btn" data-header-search-button="open">
                                <svg>
                                    <use xlink:href="<?= MEDIA_PATH; ?>images/icons.svg#search"></use>
                                </svg>
                            </button>
                        </div>
                    </div>

                </div>

            </div>
        </div>


        <div class="header__nav d-none d-xl-block">
            <div class="container">
                <nav class="navbar">
                    <ul>
                        <li>
                            <div>
                                <a href="/catalog/idei-dlya-podarkov/">
                                    <svg xmlns='http://www.w3.org/2000/svg'>
                                        <use xlink:href='<?= MEDIA_PATH; ?>images/icons.svg#gift-ideas'></use>
                                    </svg>
                                    <span>Идеи для подарков</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div>
                                <a href="/catalog/nabor-posudy/">
                                    <span>Наборы посуды</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div data-menu-tab="3">
                                <a href="/catalog/skovorody/">
                                    Сковороды </a>
                                <svg>
                                    <use xlink:href="<?= MEDIA_PATH; ?>images/icons.svg#arrow-toggle"></use>
                                </svg>
                            </div>
                        </li>
                        <li>
                            <div>
                                <a href="/catalog/kastryulya/">
                                    <span>Кастрюли</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div>
                                <a href="/catalog/kovshi/">
                                    <span>Ковши</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div>
                                <a href="/catalog/zharovni/">
                                    <span>Жаровни</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div>
                                <a href="/catalog/furnitura/">
                                    <span>Фурнитура</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div>
                                <a href="/promo/">
                                    <span>Акции</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <button type="button" class="header-search-toggle reset-btn" data-header-search-button="open">
                                <svg>
                                    <use xlink:href="<?= MEDIA_PATH; ?>images/icons.svg#search"></use>
                                </svg>
                            </button>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>


        </div>

        <div class="header-menu" data-header="menu">

            <div class="container" data-menu-block="container">
                <div class="header-menu__block" data-menu-block="1">
                    <div class="header-menu__block-tab d-xl-none" data-menu-mobile-tab="1">
                        <a class="pb-0" href="/catalog/idei-dlya-podarkov/">Идеи для подарков</a>
                    </div>
                </div>
                <div class="header-menu__block" data-menu-block="2">
                    <div class="header-menu__block-tab d-xl-none" data-menu-mobile-tab="2">
                        <a class="pb-0" href="/catalog/nabor-posudy/">Наборы посуды</a>
                    </div>
                </div>
                <div class="header-menu__block" data-menu-block="3">
                    <div class="header-menu__block-tab d-xl-none" data-menu-mobile-tab="3">
                        <span>Сковороды</span>
                        <svg>
                            <use xlink:href="<?= MEDIA_PATH; ?>images/icons.svg#arrow-toggle"></use>
                        </svg>
                    </div>
                    <div class="header-menu__submenu" data-menu-mobile-block="3">
                        <ul data-menu-block="lonley-list">
                            <li class="header-menu__block-item">
                                <a href="/catalog/skovorody/blinnye/">
                                    Блинные </a>
                            </li>
                            <li class="header-menu__block-item">
                                <a href="/catalog/skovorody/gril/">
                                    Гриль </a>
                            </li>
                            <li class="header-menu__block-item">
                                <a href="/catalog/skovorody/traditsionnye/">
                                    Традиционные </a>
                            </li>
                        </ul>
                        <picture>
                            <img src="<?= MEDIA_PATH; ?>images/pan.jpg" alt="">
                        </picture>
                    </div>
                </div>
                <div class="header-menu__block" data-menu-block="4">
                    <div class="header-menu__block-tab d-xl-none" data-menu-mobile-tab="4">
                        <a class="pb-0" href="/catalog/kastryulya/">Кастрюли</a>
                    </div>
                </div>
                <div class="header-menu__block" data-menu-block="5">
                    <div class="header-menu__block-tab d-xl-none" data-menu-mobile-tab="5">
                        <a class="pb-0" href="/catalog/kovshi/">Ковши</a>
                    </div>
                </div>
                <div class="header-menu__block" data-menu-block="6">
                    <div class="header-menu__block-tab d-xl-none" data-menu-mobile-tab="6">
                        <a class="pb-0" href="/catalog/zharovni/">Жаровни</a>
                    </div>
                </div>
                <div class="header-menu__block" data-menu-block="7">
                    <div class="header-menu__block-tab d-xl-none" data-menu-mobile-tab="7">
                        <a class="pb-0" href="/catalog/furnitura/">Фурнитура</a>
                    </div>
                </div>
                <div class="header-menu__block" data-menu-block="8">
                    <div class="header-menu__block-tab d-xl-none" data-menu-mobile-tab="8">
                        <a class="pb-0" href="/promo/">Акции</a>
                    </div>
                </div>
            </div>
            <div class="d-md-none container mt-auto mb-2">
                <div class="contacts-block my-2">

                    <div class="ftr-group ftr-tel">

                        <button class="fgp-hdr reset-btn">
                            <span>Телефон</span>
                        </button>
                        <div class="fgp-list fgp-list--contacts">
                            <div class="fgp-list__item">
                                <a href="tel:+79990704447" class="fct-i-link">
                                    <svg xmlns='http://www.w3.org/2000/svg'>
                                        <use xlink:href='<?= MEDIA_PATH; ?>images/icons.svg#smartphone'></use>
                                    </svg>
                                    <span>+7 (999) 070-44-47</span>
                                </a>
                            </div>
                        </div>

                        <button class="fgp-hdr reset-btn pt-0 mt-lg-2">
                            <span>Дистрибьюторам</span>
                        </button>
                        <div class="fgp-list fgp-list--contacts">
                            <div class="fgp-list__item">
                                <a href="tel:+79300330339" class="fct-i-link">
                                    <svg xmlns="http://www.w3.org/2000/svg">
                                        <use xlink:href="<?= MEDIA_PATH; ?>images/icons.svg#smartphone"></use>
                                    </svg>
                                    <span>+7 930 033-03-39</span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="mt-2">
                    <a href="tel:+79295458717" class="button button--sm d-block text-center text-uppercase"><span>Позвонить</span></a>
                </div>
            </div>
        </div>
        <form class="header-search" action="/search/">
            <div class="container">
                <div class="header-search__inner">
                    <button type="submit" class="header-search-toggle reset-btn">
                        <svg>
                            <use xlink:href="<?= MEDIA_PATH; ?>images/icons.svg#search"></use>
                        </svg>
                    </button>
                    <input class="header-search__input" type="text" name="q" value="" placeholder="Поиск">
                    <button type="reset" class="header-search__close" data-header-search-button="close">
                        <svg>
                            <use xlink:href="<?= MEDIA_PATH; ?>images/icons.svg#close"></use>
                        </svg>
                    </button>
                </div>
            </div>
        </form>
    </header>
    <main class="main">