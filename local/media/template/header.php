<?
define(MEDIA_PATH, '');

/* переменная корневого коталога для ссылок в вёрстке */
$homeFolder = '/yanina/';
?> <!--temp include for markup only-->
<div class="header" data-sticky="header">
	<div class="header-panel" data-header="panel">
		<div class="header__main">
			<div class="container">
				<div class="hm-left">
 <button class="burger d-xl-none" data-mobile-menu="toggle">
					<div class="burger__container">
					</div>
 </button>
					<div class="hm-about d-none d-xl-block">
 <span class="hm-about__label">О компании</span>
						<div class="hm-about__panel">
							<div class="hm-about__links">
 <a href="/about/" class="hm-about__link">
								О бренде </a> <a href="/partners/" class="hm-about__link">
								Партнёрам </a> <a href="/social-responsibility/" class="hm-about__link">
								Социальная ответственность </a> <a href="/contacts/" class="hm-about__link">
								Контакты </a> <a href="/about/documents/" class="hm-about__link">
								Документы </a>
							</div>
						</div>
					</div>
 <a href="tel:+79990704447" class="hm-tel d-none d-xl-block">+7 (999) 070-44-47</a>
					<div class="header-socials d-none d-xl-flex">
						 НАПИСАТЬ: <a href="https://t.me/alwa_posyda_studio" target="_blank" class="header__main-icon"> </a>
					</div>
				</div>
				<div class="hm-centr">
 <a href="/" class="header__main-logo"> </a>
				</div>
				<div class="hm-right">
					<div class="header-socials d-none d-xl-flex my-auto mr-2">
 <span class="text-uppercase">дистрибьюторам:</span> <a href="tel:+79300330339" class="hm-tel d-none d-xl-block mr-0 p-0">+7 930 033-03-39</a>
					</div>
 <a href="/personal/" class="header__main-icon header__main-icon--user d-none d-xl-block"> </a> <a href="/personal/favorite/" class="header__main-icon header__main-icon--user d-none d-xl-block">
					<div class="header__main-cartitems">
 <span small-favorites="">
						0 </span>
					</div>
 </a>
					<div class="d-none d-xl-block">
						<div class="col-auto">
 <a href="/personal/cart/" class="header__main-icon header__main-icon--cart" small-basket="">
							<div class="header__main-cartitems">
 <span small-basket-count="">
								0 </span>
							</div>
 </a>
						</div>
					</div>
					<div class="d-xl-none">
 <button type="button" class="header-search-toggle reset-btn" data-header-search-button="open"> </button>
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
					Идеи для подарков </a>
				</div>
 </li>
				<li>
				<div>
 <a href="/catalog/nabor-posudy/">
					Наборы посуды </a>
				</div>
 </li>
				<li>
				<div data-menu-tab="3">
 <a href="/catalog/skovorody/">
					Сковороды </a>
				</div>
 </li>
				<li>
				<div>
 <a href="/catalog/kastryulya/">
					Кастрюли </a>
				</div>
 </li>
				<li>
				<div>
 <a href="/catalog/kovshi/">
					Ковши </a>
				</div>
 </li>
				<li>
				<div>
 <a href="/catalog/zharovni/">
					Жаровни </a>
				</div>
 </li>
				<li>
				<div>
 <a href="/catalog/furnitura/">
					Фурнитура </a>
				</div>
 </li>
				<li>
				<div>
 <a href="/promo/">
					Акции </a>
				</div>
 </li>
				<li> <button type="button" class="header-search-toggle reset-btn" data-header-search-button="open"> </button> </li>
			</ul>
 </nav>
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
					 Сковороды
				</div>
				<div class="header-menu__submenu" data-menu-mobile-block="3">
					<ul data-menu-block="lonley-list">
						<li class="header-menu__block-item"> <a href="/catalog/skovorody/blinnye/">
						Блинные </a> </li>
						<li class="header-menu__block-item"> <a href="/catalog/skovorody/gril/">
						Гриль </a> </li>
						<li class="header-menu__block-item"> <a href="/catalog/skovorody/traditsionnye/">
						Традиционные </a> </li>
					</ul>
 <span> <img src="<?= MEDIA_PATH; ?>images/pan.jpg?t=1692277951183?t=1692277949453?t=1692277716710?t=1692277715021?t=1692277211830?t=1692277210103?t=1692277162470?t=1692277160681?t=1692276723896" alt=""> </span>
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
					Телефон </button>
					<div class="fgp-list fgp-list--contacts">
						<div class="fgp-list__item">
 <a href="tel:+79990704447" class="fct-i-link">
							+7 (999) 070-44-47 </a>
						</div>
					</div>
 <button class="fgp-hdr reset-btn pt-0 mt-lg-2">
					Дистрибьюторам </button>
					<div class="fgp-list fgp-list--contacts">
						<div class="fgp-list__item">
 <a href="tel:+79300330339" class="fct-i-link">
							+7 930 033-03-39 </a>
						</div>
					</div>
				</div>
			</div>
			<div class="mt-2">
 <a href="tel:+79295458717" class="button button--sm d-block text-center text-uppercase">Позвонить</a>
			</div>
		</div>
	</div>
	<form class="header-search" action="/search/">
		<div class="container">
			<div class="header-search__inner">
 <button type="submit" class="header-search-toggle reset-btn"> </button> <input class="header-search__input" type="text" name="q" value="" placeholder="Поиск"> <button type="reset" class="header-search__close" data-header-search-button="close"> </button>
			</div>
		</div>
	</form>
</div>
 <main class="main"></main>