
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="@yield('description')">
	<meta name="keywords" content="@yield('keywords')">
	<meta name="title" content="@yield('title')" />
	<meta name="robots" content="index,follow" />
	<meta name="revisit-after" content="2 days">
	<meta name="coverage" content="Worldwide">
	<meta name="distribution" content="Global">
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>@yield('title')</title>

	<meta property="og:type" content="website">
	<meta property="og:title" content="Срочный ремонт техники и электроники в Москве">
	<meta property="og:description"
		content="Бесплатная диагностика за 30 минут даже при отказе от ремонта. Среднее время ремонта до 50 минут. Гарантия на ремонт и запчасти до 3-х лет.">

	<meta property="og:url" content="https://asc-rem.ru">
	<meta property="og:site_name" content="Федеральная сеть сервисных центров ASC в Москве">
	<meta property="og:image" content="images/offer-img.png">
	<meta property="og:image:secure_url" content="images/offer-img.png">
	<meta property="og:image:width" content="679">
	<meta property="og:image:height" content="386">
	<meta property="og:image:alt" content="Специализированный сервисный центр по ремонту и диагностике любой техники">

	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

	<!--link href="{{ asset('js/bootstrap/bootstrap.css') }}" rel="stylesheet">
	<script src="{{ asset('js/bootstrap/bootstrap.js') }}" defer></script>
	<script src="{{ asset('js/jquery/jquery.js') }}" defer></script -->

	<script type="text/javascript" async charset="utf-8" src="{{ asset('template/js/all.js') }}"></script>
	<script async src="{{ asset('template/js/tag.js') }}"></script>
	<script src="{{ asset('template/js/rrweb.min.js') }}"></script>

	<link rel="icon" href="{{ asset('template/fonts/62b9b1210b8b6-ef7bd8c3d3ce7de5a41fd332b926f146.svg') }}">
	<link rel="stylesheet" href="{{ asset('template/css/style.min.css') }}">
	<link rel="stylesheet" href="{{ asset('template/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('template/css/swiper-bundle.min.css') }}">
	<link rel="stylesheet" href="{{ asset('template/css/media.css') }}">
	<link rel="stylesheet" href="{{ asset('template/css/adaptive.css') }}">
	<link rel="stylesheet" href="{{ asset('template/css/new-style.css') }}">
</head>

<style>
	.breadcrumb{
		margin-bottom: 0px;
	}
</style>
<body class='wp-custom-logo home'>
	<div id="page" class="site">
		<header id="main-header" class="site-header" itemscope itemtype="http://schema.org/WPHeader">
			<div class="container positionCustom">
				<div class="topHeader">
					<div class="menu-mainmenu-container">
						<nav itemscope itemtype="https://schema.org/SiteNavigationElement">
							<ul id="menu-mainmenu" class="menu">
								<li id="menu-item-16" class="menu-item menu-item-16" itemprop="name">
									<a itemprop="url" href="/varranty">Гарантия сервиса</a>
								</li>
								<li id="menu-item-17" class="menu-item menu-item-17" itemprop="name">
									<a itemprop="url" href="/out-store">Наш склад</a>
								</li>
								<li id="menu-item-17" class="menu-item menu-item-17" itemprop="name">
									<a itemprop="url" href="/news">Новости</a>
								</li>
								<li id="menu-item-18" class="menu-item menu-item-18" itemprop="name">
									<a itemprop="url" href="/sales">Акции</a>
								</li>
								<li id="menu-item-19" class="menu-item menu-item-19" itemprop="name">
									<a itemprop="url" href="/contacts">Контакты</a>
								</li>
							</ul>
						</nav>
					</div>
					<div class="topInfo">
						<div class="points">
							<img src="/fonts/russia.svg">
							<span class="media-large">Доставка на ремонт в сервисный центр и обратно – 0₽</span>
							<span class="media-medium">Доставка курьером – 0₽</span>
						</div>
						<span class="jobTime"><span class="jobTime__label">Режим работы:</span> ежедневно с 10:00 до
							20:00</span>
					</div>
				</div>
				<div class="middleHeader">
					<div class="logoPart-header">
						<a href="/" class="custom-logo-link" rel="home">
							<img src="/images/JService1.png" alt="" style="height: 70px;">
						</a>
					</div>
					<div class="searchPart-header">
						<div class="desk-hidden menuMobile js-open-modal" data-modal="3"></div>
						<button class="catalogModal js-open-modal button-puls primary-button" data-modal="2">
							<img src="/fonts/energy.svg">Срочный ремонт
							<span class="shine"></span>
						</button>
						<div class="search-form" id="searchform" itemscope itemtype="https://schema.org/WebSite">
							<meta itemprop="url" content="https://asc-rem.ru">
							<form class="search-form custom-search" id="searchform" itemprop="potentialAction" itemscope
								itemtype="https://schema.org/SearchAction">
								<meta itemprop="target" content="https://asc-rem.ru/search/?s={s}">
								<input type="hidden" name="searchid">
								<input type="text" name="text" class="search-form__input" placeholder="Поиск по сайту.."
									autocomplete="off" itemprop="query-input">
								<input type="hidden" name="web" value="0">
								<button id="searchsubmit" data-search="body" class="headerSubmit"></button>
							</form>
							<div class="ajax-search" data-search="header"></div>
						</div>
					</div>
					<div class="contactPart-header">
						<div class="adressHeader">
							<img src="/fonts/mapper.svg">
							<div>
								<div class="adressCity">г. Москва</div>
								<div class="adressStrt">Гарибальди, 36</div>
								<div class="select-city" style="display: none">
									<a href="https://ufa.asc-rem.ru">Уфа</a>
									<a href="https://vrn.asc-rem.ru">Воронеж</a>
									<a href="https://krn.asc-rem.ru">Красноярск</a>
									<a href="https://prm.asc-rem.ru">Пермь</a>
									<a href="https://irk.asc-rem.ru">Иркутск</a>
									<a href="https://tmn.asc-rem.ru">Тюмень</a>
									<a href="https://tms.asc-rem.ru">Томск</a>
									<a href="https://hbr.asc-rem.ru">Хабаровск</a>
									<a href="https://srt.asc-rem.ru">Саратов</a>
									<a href="https://yrs.asc-rem.ru">Ярославль</a>
									<a href="https://tol.asc-rem.ru">Тольятти</a>
									<a href="https://izh.asc-rem.ru">Ижевск</a>
									<a href="https://brn.asc-rem.ru">Барнаул</a>
									<a href="https://uly.asc-rem.ru">Ульяновск</a>
									<a href="https://vlg.asc-rem.ru">Волгоград</a>
									<a href="https://smr.asc-rem.ru">Самара</a>
									<a href="https://kzn.asc-rem.ru">Казань</a>
									<a href="https://oms.asc-rem.ru">Омск</a>
									<a href="https://ekb.asc-rem.ru">Екатеринбург</a>
									<a href="https://krd.asc-rem.ru">Краснодар</a>
									<a href="https://nnv.asc-rem.ru">Нижний Новгород</a>
									<a href="https://nsk.asc-rem.ru">Новосибирск</a>
									<a href="https://rnd.asc-rem.ru">Ростов-на-Дону</a>
									<a href="https://spb.asc-rem.ru">Санкт-Петербург</a>
									<a href="https://chl.asc-rem.ru">Челябинск</a>
									<a href="https://kir.asc-rem.ru">Киров</a>
								</div>
							</div>
						</div>
						<div class="phoneHeader">
							<a id="header__pc_phone" class="phone-trigger p-trigger" href="tel:+78003022817"
								data-phone="2">8 (800) 302-28-17</a>
							<a id="header__mob_phone" class="catalogModal js-open-modal button-puls primary-button"
								href="tel:+78003022817">
								8 (800) 302-28-17
								<span class="shine"></span>
							</a>
						</div>
						<div class="phoneHeader">
							<a id="header__pc_phone" class="phone-trigger p-trigger" href="tel:+74951625317"
								data-phone="1">+7 (495) 162-53-17</a>
							<a id="header__mob_phone" class="catalogModal js-open-modal button-puls primary-button"
								href="tel:+74951625317">
								+7 (495) 162-53-17 <span class="shine"></span>
							</a>


						</div>
					</div>
				</div>
				<div class="bottomHeader">
					<div class="menu-catalog-container" itemscope itemtype="https://schema.org/SiteNavigationElement">
						<nav class>
							<ul id="menu-catalog" class="menu">


								<li id="menu-item-26" class="menu-item menu-item-26 iteam-cell" itemprop="name">
									<a itemprop="url" href="/remont-bytovoy-tehniki">
										<span>Ремонт бытовой техники</span>
									</a>
									<div class="dropDown_menu">
										<ul class>


											<li class="lvl_menu_1">
												<a href="/remont-kofemashin">Кофемашина</a>
												<div class="lvl_menu_2">
													<ul class="head-col-all head-column-4">


														<li><a href="/remont-kofemashin/baratza">Baratza</a></li>


														<li><a href="/remont-kofemashin/bezzera">Bezzera</a></li>


														<li><a href="/remont-kofemashin/bodum">Bodum</a></li>


														<li><a href="/remont-kofemashin/bonavita">Bonavita</a></li>


														<li><a href="/remont-kofemashin/brasilia">Brasilia</a></li>


														<li><a href="/remont-kofemashin/bunn">Bunn</a></li>


														<li><a href="/remont-kofemashin/caffe-vergnano">Caffe
																Vergnano</a></li>


														<li><a href="/remont-kofemashin/caffemotive">Caffemotive</a>
														</li>


														<li><a href="/remont-kofemashin/caffeum-perfectus">Caffeum
																Perfectus</a></li>


														<li><a href="/remont-kofemashin/capresso">Capresso</a></li>


														<li><a href="/remont-kofemashin/carimali">Carimali</a></li>


														<li><a href="/remont-kofemashin/ceado">Ceado</a></li>


														<li><a href="/remont-kofemashin/compak">Compak</a></li>


														<li><a href="/remont-kofemashin/didiesse">Didiesse</a></li>


														<li><a href="/remont-kofemashin/ecm-germany">ECM Germany</a>
														</li>


														<li><a href="/remont-kofemashin/elektra">Elektra</a></li>


														<li><a href="/remont-kofemashin/essse">Essse</a></li>


														<li><a href="/remont-kofemashin/eureka">Eureka</a></li>


														<li><a href="/remont-kofemashin/faema">Faema</a></li>


														<li><a href="/remont-kofemashin/fellow">Fellow</a></li>


														<li><a href="/remont-kofemashin/futurmat">Futurmat</a></li>


														<li><a href="/remont-kofemashin/gaggia">Gaggia</a></li>


														<li><a href="/remont-kofemashin/grimac">Grimac</a></li>


														<li><a href="/remont-kofemashin/growlerwerks">Growlerwerks</a>
														</li>


														<li><a href="/remont-kofemashin/hamilton-beach">Hamilton
																Beach</a></li>


														<li><a href="/remont-kofemashin/hario">Hario</a></li>


														<li><a href="/remont-kofemashin/illy">Illy</a></li>


														<li><a href="/remont-kofemashin/isomac">Isomac</a></li>


														<li><a href="/remont-kofemashin/delonghi">DeLonghi</a></li>


														<li><a href="/remont-kofemashin/izzo">Izzo</a></li>


														<li><a href="/remont-kofemashin/jura">Jura</a></li>


														<li><a href="/remont-kofemashin/keurig">Keurig</a></li>


														<li><a href="/remont-kofemashin/krups">Krups</a></li>


														<li><a href="/remont-kofemashin/la-cimbali">La-Cimbali</a></li>


														<li><a href="/remont-kofemashin/la-marzocco">La-Marzocco</a>
														</li>


														<li><a href="/remont-kofemashin/la-nuova-era">La-Nuova Era</a>
														</li>


														<li><a href="/remont-kofemashin/polaris">Polaris</a></li>


														<li><a href="/remont-kofemashin/la-pavoni">La-Pavoni</a></li>


														<li><a href="/remont-kofemashin/la-spaziale">La-Spaziale</a>
														</li>


														<li><a href="/remont-kofemashin/lavazza">Lavazza</a></li>


														<li><a href="/remont-kofemashin/lelit">Lelit</a></li>


														<li><a href="/remont-kofemashin/macap">Macap</a></li>


														<li><a href="/remont-kofemashin/magister">Magister</a></li>


														<li><a href="/remont-kofemashin/mahlkonig">Mahlkonig</a></li>


														<li><a href="/remont-kofemashin/bork">Bork</a></li>


														<li><a href="/remont-kofemashin/melitta">Melitta</a></li>


														<li><a href="/remont-kofemashin/moccamaster">Moccamaster</a>
														</li>


														<li><a href="/remont-kofemashin/mr-coffee">Mr. Coffee</a></li>


														<li><a href="/remont-kofemashin/mueller-austria">Mueller
																Austria</a></li>


														<li><a href="/remont-kofemashin/nemox">Nemox</a></li>


														<li><a href="/remont-kofemashin/nuova-simonelli">Nuova
																Simonelli</a></li>


														<li><a href="/remont-kofemashin/olympia">Olympia</a></li>


														<li><a href="/remont-kofemashin/pasquini">Pasquini</a></li>


														<li><a href="/remont-kofemashin/ponte-vecchio">Ponte Vecchio</a>
														</li>


														<li><a href="/remont-kofemashin/puqpress">PuqPress</a></li>


														<li><a href="/remont-kofemashin/quamar">Quamar</a></li>


														<li><a href="/remont-kofemashin/quick-mill">Quick Mill</a></li>


														<li><a href="/remont-kofemashin/rancilio">Rancilio</a></li>


														<li><a href="/remont-kofemashin/bravilor">Bravilor</a></li>


														<li><a href="/remont-kofemashin/rocket-espresso">Rocket
																Espresso</a></li>


														<li><a href="/remont-kofemashin/s-p-m">S.P.M.</a></li>


														<li><a href="/remont-kofemashin/saeco">Saeco</a></li>


														<li><a href="/remont-kofemashin/segafredo-zanetti">Segafredo
																Zanetti</a></li>


														<li><a href="/remont-kofemashin/slayer">Slayer</a></li>


														<li><a href="/remont-kofemashin/spidem">Spidem</a></li>


														<li><a href="/remont-kofemashin/vbm-vibiemme">VBM (Vibiemme)</a>
														</li>


														<li><a href="/remont-kofemashin/cino">Cino</a></li>


														<li><a href="/remont-kofemashin/proxima">Proxima</a></li>


														<li><a href="/remont-kofemashin/lui-l-espresso">Lui
																l’Espresso</a></li>


														<li><a href="/remont-kofemashin/fiamma">Fiamma</a></li>


														<li><a href="/remont-kofemashin/philips">Philips</a></li>


														<li><a href="/remont-kofemashin/gorenje">Gorenje</a></li>


														<li><a href="/remont-kofemashin/miele">Miele</a></li>


														<li><a href="/remont-kofemashin/beko">Beko</a></li>


														<li><a href="/remont-kofemashin/brayer">Brayer</a></li>


														<li><a href="/remont-kofemashin/capri">Capri</a></li>


														<li><a href="/remont-kofemashin/conti">Conti</a></li>


														<li><a href="/remont-kofemashin/delta-lux">Delta Lux</a></li>


														<li><a href="/remont-kofemashin/dr-coffee">Dr. Coffee</a></li>


														<li><a href="/remont-kofemashin/eurostek">Eurostek</a></li>


														<li><a href="/remont-kofemashin/hogastra">Hogastra</a></li>


														<li><a href="/remont-kofemashin/italco">ITALCO</a></li>


														<li><a href="/remont-kofemashin/la-cimbali">La Cimbali</a></li>


														<li><a href="/remont-kofemashin/la-marzocco">La Marzocco</a>
														</li>


														<li><a href="/remont-kofemashin/la-pavoni">La Pavoni</a></li>


														<li><a href="/remont-kofemashin/merol">Merol</a></li>


														<li><a href="/remont-kofemashin/nespresso">Nespresso</a></li>


														<li><a href="/remont-kofemashin/profi-cook">Profi Cook</a></li>


														<li><a href="/remont-kofemashin/rondell">Rondell</a></li>


														<li><a href="/remont-kofemashin/sanremo">Sanremo</a></li>


														<li><a href="/remont-kofemashin/schaerer">Schaerer</a></li>


														<li><a href="/remont-kofemashin/solis">Solis</a></li>


														<li><a href="/remont-kofemashin/viatto">VIATTO</a></li>


														<li><a href="/remont-kofemashin/victoria">Victoria</a></li>


														<li><a href="/remont-kofemashin/wilfa">Wilfa</a></li>


														<li><a href="/remont-kofemashin/wmf">WMF</a></li>


														<li><a href="/remont-kofemashin/yamaguchi">Yamaguchi</a></li>


														<li><a href="/remont-kofemashin/xelsis">Xelsis</a></li>


														<li><a href="/remont-kofemashin/smeg">Smeg</a></li>


														<li><a href="/remont-kofemashin/xiaomi">Xiaomi</a></li>


														<li><a href="/remont-kofemashin/animo">Animo</a></li>


														<li><a href="/remont-kofemashin/maunfeld">Maunfeld</a></li>


														<li><a href="/remont-kofemashin/garlyn">GARLYN</a></li>


														<li><a href="/remont-kofemashin/nivona">Nivona</a></li>


														<li><a href="/remont-kofemashin/kaffit">Kaffit</a></li>


														<li><a href="/remont-kofemashin/centek">Centek</a></li>


														<li><a href="/remont-kofemashin/panasonic">Panasonic</a></li>


														<li><a href="/remont-kofemashin/electrolux">Electrolux</a></li>


														<li><a href="/remont-kofemashin/hotpoint-ariston">Hotpoint
																Ariston</a></li>


														<li><a href="/remont-kofemashin/asko">Asko</a></li>


														<li><a href="/remont-kofemashin/bosch">Bosch</a></li>


														<li><a href="/remont-kofemashin/kuppersbusch">Kuppersbusch</a>
														</li>


														<li><a href="/remont-kofemashin/de-dietrich">De Dietrich</a>
														</li>


														<li><a href="/remont-kofemashin/teka">TEKA</a></li>


														<li><a href="/remont-kofemashin/franke">FRANKE</a></li>


														<li><a href="/remont-kofemashin/kitchenaid">KitchenAid</a></li>


														<li><a href="/remont-kofemashin/oursson">Oursson</a></li>


														<li><a href="/remont-kofemashin/sencor">Sencor</a></li>


														<li><a href="/remont-kofemashin/airhot">Airhot</a></li>


														<li><a href="/remont-kofemashin/arzum">ARZUM</a></li>


														<li><a href="/remont-kofemashin/breville">Breville</a></li>


														<li><a href="/remont-kofemashin/caso">Caso</a></li>


														<li><a href="/remont-kofemashin/endever">ENDEVER</a></li>


														<li><a href="/remont-kofemashin/jvc">JVC</a></li>


														<li><a href="/remont-kofemashin/gastrorag">Gastrorag</a></li>


														<li><a href="/remont-kofemashin/kitfort">Kitfort</a></li>


														<li><a href="/remont-kofemashin/magio">Magio</a></li>


														<li><a href="/remont-kofemashin/marco">Marco</a></li>


														<li><a href="/remont-kofemashin/proficook">ProfiCook</a></li>


														<li><a href="/remont-kofemashin/redmond">REDMOND</a></li>


														<li><a href="/remont-kofemashin/rommelsbacher">Rommelsbacher</a>
														</li>


														<li><a href="/remont-kofemashin/siemens">Siemens</a></li>


														<li><a href="/remont-kofemashin/vitek">VITEK</a></li>


														<li><a href="/remont-kofemashin/acaia">Acaia</a></li>


														<li><a href="/remont-kofemashin/acs">ACS</a></li>


														<li><a href="/remont-kofemashin/ala-di-vittoria">Ala di
																Vittoria</a></li>


														<li><a href="/remont-kofemashin/ascaso">Ascaso</a></li>


													</ul>
												</div>
											</li>


											<li class="lvl_menu_1">
												<a href="/remont-robotov-pylesosov">Робот-пылесос</a>
												<div class="lvl_menu_2">
													<ul class="head-col-all head-column-2">


														<li><a href="/remont-robotov-pylesosov/tefal">Tefal</a></li>


														<li><a href="/remont-robotov-pylesosov/polaris">Polaris</a></li>


														<li><a href="/remont-robotov-pylesosov/bort">Bort</a></li>


														<li><a href="/remont-robotov-pylesosov/philips">Philips</a></li>


														<li><a href="/remont-robotov-pylesosov/samsung">Samsung</a></li>


														<li><a href="/remont-robotov-pylesosov/miele">Miele</a></li>


														<li><a href="/remont-robotov-pylesosov/irobot">iRobot</a></li>


														<li><a href="/remont-robotov-pylesosov/xiaomi">Xiaomi</a></li>


														<li><a
																href="/remont-robotov-pylesosov/weissgauff">Weissgauff</a>
														</li>


														<li><a href="/remont-robotov-pylesosov/aeno">AENO</a></li>


														<li><a href="/remont-robotov-pylesosov/anker">Anker</a></li>


														<li><a href="/remont-robotov-pylesosov/bist">Bist</a></li>


														<li><a href="/remont-robotov-pylesosov/cecotec">Cecotec</a></li>


														<li><a
																href="/remont-robotov-pylesosov/clever-clean">Clever&Clean</a>
														</li>


														<li><a href="/remont-robotov-pylesosov/dreame">Dreame</a></li>


														<li><a href="/remont-robotov-pylesosov/ecovacs">Ecovacs</a></li>


														<li><a href="/remont-robotov-pylesosov/eufy">Eufy</a></li>


														<li><a href="/remont-robotov-pylesosov/garlyn">GARLYN</a></li>


														<li><a href="/remont-robotov-pylesosov/genio">Genio</a></li>


														<li><a href="/remont-robotov-pylesosov/gutrend">GUTREND</a></li>


														<li><a href="/remont-robotov-pylesosov/iboto">iBoto</a></li>


														<li><a href="/remont-robotov-pylesosov/iclebo">iCLEBO</a></li>


														<li><a href="/remont-robotov-pylesosov/proficare">ProfiCare</a>
														</li>


														<li><a href="/remont-robotov-pylesosov/roborock">Roborock</a>
														</li>


														<li><a href="/remont-robotov-pylesosov/roidmi">ROIDMI</a></li>


														<li><a href="/remont-robotov-pylesosov/viomi">Viomi</a></li>


														<li><a href="/remont-robotov-pylesosov/xclea">Xclea</a></li>


														<li><a href="/remont-robotov-pylesosov/tcl">TCL</a></li>


														<li><a href="/remont-robotov-pylesosov/ilife">iLife</a></li>


														<li><a href="/remont-robotov-pylesosov/dyson">Dyson</a></li>


														<li><a href="/remont-robotov-pylesosov/rovus">Rovus</a></li>


														<li><a href="/remont-robotov-pylesosov/aquaviva">Aquaviva</a>
														</li>


														<li><a href="/remont-robotov-pylesosov/hayward">Hayward</a></li>


														<li><a href="/remont-robotov-pylesosov/vorwerk">Vorwerk</a></li>


														<li><a href="/remont-robotov-pylesosov/dexp">DEXP</a></li>


														<li><a href="/remont-robotov-pylesosov/haier">Haier</a></li>


														<li><a href="/remont-robotov-pylesosov/jvc">JVC</a></li>


														<li><a href="/remont-robotov-pylesosov/kitfort">Kitfort</a></li>


														<li><a href="/remont-robotov-pylesosov/pioneer">Pioneer</a></li>


														<li><a href="/remont-robotov-pylesosov/redmond">REDMOND</a></li>


														<li><a href="/remont-robotov-pylesosov/lg">LG</a></li>


													</ul>
												</div>
											</li>


											<li class="lvl_menu_1">
												<a href="/remont-parogeneratorov">Отпариватель</a>
												<div class="lvl_menu_2">
													<ul class="head-col-all head-column-4">


														<li><a href="/remont-parogeneratorov/tefal">Tefal</a></li>


														<li><a href="/remont-parogeneratorov/braun">Braun</a></li>


														<li><a href="/remont-parogeneratorov/polaris">Polaris</a></li>


														<li><a href="/remont-parogeneratorov/lelit">Lelit</a></li>


														<li><a href="/remont-parogeneratorov/bork">Bork</a></li>


														<li><a href="/remont-parogeneratorov/bieffe-italia">Bieffe
																italia</a></li>


														<li><a href="/remont-parogeneratorov/blowtherm-s-p-a">Blowtherm
																S.p.A.</a></li>


														<li><a href="/remont-parogeneratorov/steamone">SteamOne</a></li>


														<li><a
																href="/remont-parogeneratorov/black-decker">BLACK-DECKER</a>
														</li>


														<li><a href="/remont-parogeneratorov/bort">Bort</a></li>


														<li><a href="/remont-parogeneratorov/deerma">Deerma</a></li>


														<li><a href="/remont-parogeneratorov/eisenhoff">Eisenhoff</a>
														</li>


														<li><a href="/remont-parogeneratorov/ergolux">Ergolux</a></li>


														<li><a href="/remont-parogeneratorov/eurostir">Eurostir</a></li>


														<li><a href="/remont-parogeneratorov/gelberk">Gelberk</a></li>


														<li><a href="/remont-parogeneratorov/grand-master">Grand
																Master</a></li>


														<li><a href="/remont-parogeneratorov/hasel">Hasel</a></li>


														<li><a href="/remont-parogeneratorov/jiffy-steamer">Jiffy
																Steamer</a></li>


														<li><a href="/remont-parogeneratorov/kambrook">Kambrook</a></li>


														<li><a href="/remont-parogeneratorov/karcher">Karcher</a></li>


														<li><a href="/remont-parogeneratorov/kelli">kelli</a></li>


														<li><a href="/remont-parogeneratorov/laurastar">Laurastar</a>
														</li>


														<li><a href="/remont-parogeneratorov/lavor">Lavor</a></li>


														<li><a href="/remont-parogeneratorov/leben">Leben</a></li>


														<li><a href="/remont-parogeneratorov/loewe">Loewe</a></li>


														<li><a href="/remont-parogeneratorov/luazon">Luazon</a></li>


														<li><a href="/remont-parogeneratorov/macs">MACS</a></li>


														<li><a href="/remont-parogeneratorov/mercury">Mercury</a></li>


														<li><a href="/remont-parogeneratorov/metalnova">Metalnova</a>
														</li>


														<li><a href="/remont-parogeneratorov/mie">Mie</a></li>


														<li><a href="/remont-parogeneratorov/morphy-richards">Morphy
																Richards</a></li>


														<li><a href="/remont-parogeneratorov/polti">Polti</a></li>


														<li><a href="/remont-parogeneratorov/rohaus">Rohaus</a></li>


														<li><a href="/remont-parogeneratorov/rowenta">Rowenta</a></li>


														<li><a href="/remont-parogeneratorov/runzel">RUNZEL</a></li>


														<li><a href="/remont-parogeneratorov/russell-hobbs">Russell
																Hobbs</a></li>


														<li><a href="/remont-parogeneratorov/silter">Silter</a></li>


														<li><a href="/remont-parogeneratorov/tylo">Tylo</a></li>


														<li><a href="/remont-parogeneratorov/harvia">Harvia</a></li>


														<li><a href="/remont-parogeneratorov/coasts">Coasts</a></li>


														<li><a href="/remont-parogeneratorov/sawo">Sawo</a></li>


														<li><a href="/remont-parogeneratorov/helo">Helo</a></li>


														<li><a href="/remont-parogeneratorov/astralpool">Astralpool</a>
														</li>


														<li><a href="/remont-parogeneratorov/eos">EOS</a></li>


														<li><a href="/remont-parogeneratorov/hygromatik">Hygromatik</a>
														</li>


														<li><a href="/remont-parogeneratorov/osf">OSF</a></li>


														<li><a href="/remont-parogeneratorov/teplodar">Теплодар</a></li>


														<li><a href="/remont-parogeneratorov/rotondi">Rotondi</a></li>


														<li><a href="/remont-parogeneratorov/philips">Philips</a></li>


														<li><a href="/remont-parogeneratorov/gorenje">Gorenje</a></li>


														<li><a href="/remont-parogeneratorov/miele">Miele</a></li>


														<li><a href="/remont-parogeneratorov/xiaomi">Xiaomi</a></li>


														<li><a href="/remont-parogeneratorov/chayka">Chayka</a></li>


														<li><a href="/remont-parogeneratorov/eisenhof">Eisenhof</a></li>


														<li><a href="/remont-parogeneratorov/jiffy-streamer">Jiffy
																Streamer</a></li>


														<li><a href="/remont-parogeneratorov/centek">Centek</a></li>


														<li><a href="/remont-parogeneratorov/econ">ECON</a></li>


														<li><a href="/remont-parogeneratorov/hyundai">Hyundai</a></li>


														<li><a href="/remont-parogeneratorov/panasonic">Panasonic</a>
														</li>


														<li><a href="/remont-parogeneratorov/electrolux">Electrolux</a>
														</li>


														<li><a href="/remont-parogeneratorov/hotpoint-ariston">Hotpoint
																Ariston</a></li>


														<li><a href="/remont-parogeneratorov/bosch">Bosch</a></li>


														<li><a href="/remont-parogeneratorov/steamtec">Steamtec</a></li>


														<li><a href="/remont-parogeneratorov/leran">Leran</a></li>


														<li><a href="/remont-parogeneratorov/ginzzu">Ginzzu</a></li>


														<li><a href="/remont-parogeneratorov/zelmer">Zelmer</a></li>


														<li><a href="/remont-parogeneratorov/haier">Haier</a></li>


														<li><a href="/remont-parogeneratorov/sinbo">Sinbo</a></li>


														<li><a href="/remont-parogeneratorov/breville">Breville</a></li>


														<li><a href="/remont-parogeneratorov/delta">DELTA</a></li>


														<li><a href="/remont-parogeneratorov/endever">ENDEVER</a></li>


														<li><a href="/remont-parogeneratorov/first">First</a></li>


														<li><a href="/remont-parogeneratorov/galaxy">Galaxy</a></li>


														<li><a href="/remont-parogeneratorov/grand">GRAND</a></li>


														<li><a href="/remont-parogeneratorov/kitfort">Kitfort</a></li>


														<li><a href="/remont-parogeneratorov/pioneer">Pioneer</a></li>


														<li><a href="/remont-parogeneratorov/marta">Marta</a></li>


														<li><a href="/remont-parogeneratorov/maxwell">Maxwell</a></li>


														<li><a href="/remont-parogeneratorov/redmond">REDMOND</a></li>


														<li><a href="/remont-parogeneratorov/scarlett">Scarlett</a></li>


														<li><a href="/remont-parogeneratorov/siemens">Siemens</a></li>


														<li><a href="/remont-parogeneratorov/vitek">VITEK</a></li>


													</ul>
												</div>
											</li>


											<li class="lvl_menu_1">
												<a href="/remont-massazhnih-kresel">Массажное кресло</a>
												<div class="lvl_menu_2">
													<ul class="head-col-all head-column-2">


														<li><a href="/remont-massazhnih-kresel/beurer">Beurer</a></li>


														<li><a href="/remont-massazhnih-kresel/bodo">Bodo</a></li>


														<li><a href="/remont-massazhnih-kresel/bradex">Bradex</a></li>


														<li><a href="/remont-massazhnih-kresel/calviano">Calviano</a>
														</li>


														<li><a href="/remont-massazhnih-kresel/casada">Casada</a></li>


														<li><a href="/remont-massazhnih-kresel/ego">EGO</a></li>


														<li><a href="/remont-massazhnih-kresel/ergonova">Ergonova</a>
														</li>


														<li><a href="/remont-massazhnih-kresel/fujimo">Fujimo</a></li>


														<li><a href="/remont-massazhnih-kresel/imassage">iMassage</a>
														</li>


														<li><a href="/remont-massazhnih-kresel/yamaguchi">Yamaguchi</a>
														</li>


														<li><a href="/remont-massazhnih-kresel/joypal">Joypal</a></li>


														<li><a
																href="/remont-massazhnih-kresel/koenigsmann">Koenigsmann</a>
														</li>


														<li><a href="/remont-massazhnih-kresel/meridien">Meridien</a>
														</li>


														<li><a href="/remont-massazhnih-kresel/ogawa">Ogawa</a></li>


														<li><a href="/remont-massazhnih-kresel/ohco">OHCO</a></li>


														<li><a href="/remont-massazhnih-kresel/oto">OTO</a></li>


														<li><a href="/remont-massazhnih-kresel/relax">Relax</a></li>


														<li><a href="/remont-massazhnih-kresel/richter">Richter</a></li>


														<li><a href="/remont-massazhnih-kresel/sensa">Sensa</a></li>


														<li><a href="/remont-massazhnih-kresel/uno">Uno</a></li>


														<li><a
																href="/remont-massazhnih-kresel/victoryfit">VictoryFit</a>
														</li>


														<li><a href="/remont-massazhnih-kresel/yihocon">Yihocon</a></li>


														<li><a href="/remont-massazhnih-kresel/xiaomi">Xiaomi</a></li>


														<li><a href="/remont-massazhnih-kresel/panasonic">Panasonic</a>
														</li>


													</ul>
												</div>
											</li>


										</ul>
									</div>
								</li>


								<li id="menu-item-26" class="menu-item menu-item-26 iteam-cell" itemprop="name">
									<a itemprop="url" href="/remont-orgtehniki">
										<span>Ремонт оргтехники</span>
									</a>
									<div class="dropDown_menu">
										<ul class>


											<li class="lvl_menu_1">
												<a href="/remont-mfu">МФУ</a>
												<div class="lvl_menu_2">
													<ul class="head-col-all head-column-1">


														<li><a href="/remont-mfu/toshiba">Toshiba</a></li>


														<li><a href="/remont-mfu/pantum">Pantum</a></li>


														<li><a href="/remont-mfu/panasonic">Panasonic</a></li>


														<li><a href="/remont-mfu/kip">KIP</a></li>


														<li><a href="/remont-mfu/epson">Epson</a></li>


														<li><a href="/remont-mfu/canon">Canon</a></li>


														<li><a href="/remont-mfu/kyocera">Kyocera</a></li>


														<li><a href="/remont-mfu/hp">HP</a></li>


														<li><a href="/remont-mfu/brother">Brother</a></li>


														<li><a href="/remont-mfu/xerox">Xerox</a></li>


														<li><a href="/remont-mfu/ricoh">Ricoh</a></li>


													</ul>
												</div>
											</li>


											<li class="lvl_menu_1">
												<a href="/remont-printerov">Принтер</a>
												<div class="lvl_menu_2">
													<ul class="head-col-all head-column-1">


														<li><a href="/remont-printerov/philips">Philips</a></li>


														<li><a href="/remont-printerov/samsung">Samsung</a></li>


														<li><a href="/remont-printerov/kodak">Kodak</a></li>


														<li><a href="/remont-printerov/sony">Sony</a></li>


														<li><a href="/remont-printerov/pantum">Pantum</a></li>


														<li><a href="/remont-printerov/lexmark">Lexmark</a></li>


														<li><a href="/remont-printerov/panasonic">Panasonic</a></li>


														<li><a href="/remont-printerov/epson">Epson</a></li>


														<li><a href="/remont-printerov/canon">Canon</a></li>


														<li><a href="/remont-printerov/kyocera">Kyocera</a></li>


														<li><a href="/remont-printerov/hp">HP</a></li>


														<li><a href="/remont-printerov/brother">Brother</a></li>


														<li><a href="/remont-printerov/xerox">Xerox</a></li>


														<li><a href="/remont-printerov/ricoh">Ricoh</a></li>


													</ul>
												</div>
											</li>


										</ul>
									</div>
								</li>


								<li id="menu-item-26" class="menu-item menu-item-26 iteam-cell" itemprop="name">
									<a itemprop="url" href="/remont-videotehniki">
										<span>Ремонт видеотехники</span>
									</a>
									<div class="dropDown_menu">
										<ul class>


											<li class="lvl_menu_1">
												<a href="/remont-ekshen-camer">Экшен-камера</a>
												<div class="lvl_menu_2">
													<ul class="head-col-all head-column-1">


														<li><a href="/remont-ekshen-camer/gopro">GoPro</a></li>


														<li><a href="/remont-ekshen-camer/dji">DJI</a></li>


														<li><a href="/remont-ekshen-camer/xiaomi">Xiaomi</a></li>


														<li><a href="/remont-ekshen-camer/goxtreme">GoXtreme</a></li>


														<li><a href="/remont-ekshen-camer/insta360">Insta360</a></li>


														<li><a href="/remont-ekshen-camer/drift">Drift</a></li>


														<li><a href="/remont-ekshen-camer/digma">Digma</a></li>


														<li><a href="/remont-ekshen-camer/nikon">Nikon</a></li>


													</ul>
												</div>
											</li>


											<li class="lvl_menu_1">
												<a href="/remont-videokamer">Видеокамера</a>
												<div class="lvl_menu_2">
													<ul class="head-col-all head-column-1">


														<li><a href="/remont-videokamer/samsung">Samsung</a></li>


														<li><a href="/remont-videokamer/blackmagic">Blackmagic</a></li>


														<li><a href="/remont-videokamer/sony">Sony</a></li>


														<li><a href="/remont-videokamer/xiaomi">Xiaomi</a></li>


														<li><a href="/remont-videokamer/arri">﻿Arri</a></li>


														<li><a href="/remont-videokamer/panasonic">Panasonic</a></li>


														<li><a href="/remont-videokamer/hubsan">Hubsan</a></li>


														<li><a href="/remont-videokamer/canon">Canon</a></li>


														<li><a href="/remont-videokamer/nikon">Nikon</a></li>


														<li><a href="/remont-videokamer/jvc">JVC</a></li>


														<li><a href="/remont-videokamer/lenovo">Lenovo</a></li>


														<li><a href="/remont-videokamer/fujifilm">Fujifilm</a></li>


														<li><a href="/remont-videokamer/lg">LG</a></li>


													</ul>
												</div>
											</li>


										</ul>
									</div>
								</li>


								<li id="menu-item-26" class="menu-item menu-item-26 iteam-cell" itemprop="name">
									<a itemprop="url" href="/remont-elektronnyh-ustroystv">
										<span>Ремонт электронных устройств</span>
									</a>
									<div class="dropDown_menu">
										<ul class>


											<li class="lvl_menu_1">
												<a href="/remont-planshetov">Планшет</a>
												<div class="lvl_menu_2">
													<ul class="head-col-all head-column-2">


														<li><a href="/remont-planshetov/acer">Acer</a></li>


														<li><a href="/remont-planshetov/msi">MSI</a></li>


														<li><a href="/remont-planshetov/philips">Philips</a></li>


														<li><a href="/remont-planshetov/samsung">Samsung</a></li>


														<li><a href="/remont-planshetov/sony">Sony</a></li>


														<li><a href="/remont-planshetov/alldocube">Alldocube</a></li>


														<li><a href="/remont-planshetov/ursus">Ursus</a></li>


														<li><a href="/remont-planshetov/xiaomi">Xiaomi</a></li>


														<li><a href="/remont-planshetov/inoi">INOI</a></li>


														<li><a href="/remont-planshetov/alcatel">Alcatel</a></li>


														<li><a href="/remont-planshetov/apple">Apple</a></li>


														<li><a href="/remont-planshetov/dell">Dell</a></li>


														<li><a href="/remont-planshetov/tcl">TCL</a></li>


														<li><a href="/remont-planshetov/asus">Asus</a></li>


														<li><a href="/remont-planshetov/turbokids">TurboKids</a></li>


														<li><a href="/remont-planshetov/nokia">Nokia</a></li>


														<li><a href="/remont-planshetov/xbox">Xbox</a></li>


														<li><a href="/remont-planshetov/aquarius">Aquarius</a></li>


														<li><a href="/remont-planshetov/4good">4Good</a></li>


														<li><a href="/remont-planshetov/bq">BQ</a></li>


														<li><a href="/remont-planshetov/dexp">DEXP</a></li>


														<li><a href="/remont-planshetov/digma">Digma</a></li>


														<li><a href="/remont-planshetov/fujitsu">Fujitsu</a></li>


														<li><a href="/remont-planshetov/haier">Haier</a></li>


														<li><a href="/remont-planshetov/irbis">Irbis</a></li>


														<li><a href="/remont-planshetov/hp">HP</a></li>


														<li><a href="/remont-planshetov/huawei">Huawei</a></li>


														<li><a href="/remont-planshetov/prestigio">Prestigio</a></li>


														<li><a href="/remont-planshetov/honor">Honor</a></li>


														<li><a href="/remont-planshetov/microsoft">Microsoft</a></li>


														<li><a href="/remont-planshetov/lenovo">Lenovo</a></li>


														<li><a href="/remont-planshetov/blackview">BlackView</a></li>


														<li><a href="/remont-planshetov/amazon">Amazon</a></li>


													</ul>
												</div>
											</li>


											<li class="lvl_menu_1">
												<a href="/remont-smartfonov">Телефон</a>
												<div class="lvl_menu_2">
													<ul class="head-col-all head-column-4">


														<li><a href="/remont-smartfonov/acer">Acer</a></li>


														<li><a href="/remont-smartfonov/meizu">Meizu</a></li>


														<li><a href="/remont-smartfonov/vertu">Vertu</a></li>


														<li><a href="/remont-smartfonov/6x">AGM</a></li>


														<li><a href="/remont-smartfonov/philips">Philips</a></li>


														<li><a href="/remont-smartfonov/samsung">Samsung</a></li>


														<li><a href="/remont-smartfonov/sony">Sony</a></li>


														<li><a href="/remont-smartfonov/black-shark">Black Shark</a>
														</li>


														<li><a href="/remont-smartfonov/cubot">Cubot</a></li>


														<li><a href="/remont-smartfonov/infinix">Infinix</a></li>


														<li><a href="/remont-smartfonov/nubia">Nubia</a></li>


														<li><a href="/remont-smartfonov/torex">Torex</a></li>


														<li><a href="/remont-smartfonov/umidigi">Umidigi</a></li>


														<li><a href="/remont-smartfonov/zoji">Zoji</a></li>


														<li><a href="/remont-smartfonov/xiaomi">Xiaomi</a></li>


														<li><a href="/remont-smartfonov/finepower">FinePower</a></li>


														<li><a href="/remont-smartfonov/black-fox">Black Fox</a></li>


														<li><a href="/remont-smartfonov/inoi">INOI</a></li>


														<li><a href="/remont-smartfonov/itel">ITEL</a></li>


														<li><a href="/remont-smartfonov/viwa">VIWA</a></li>


														<li><a href="/remont-smartfonov/tp-link">Tp-Link</a></li>


														<li><a href="/remont-smartfonov/hisense">Hisense</a></li>


														<li><a href="/remont-smartfonov/turbo">Turbo</a></li>


														<li><a href="/remont-smartfonov/doogee">Doogee</a></li>


														<li><a href="/remont-smartfonov/tecno">Tecno</a></li>


														<li><a href="/remont-smartfonov/oppo">OPPO</a></li>


														<li><a href="/remont-smartfonov/realme">Realme</a></li>


														<li><a href="/remont-smartfonov/vivo">Vivo</a></li>


														<li><a href="/remont-smartfonov/oukitel">Oukitel</a></li>


														<li><a href="/remont-smartfonov/apple">Apple</a></li>


														<li><a href="/remont-smartfonov/tcl">TCL</a></li>


														<li><a href="/remont-smartfonov/asus">Asus</a></li>


														<li><a href="/remont-smartfonov/htc">HTC</a></li>


														<li><a href="/remont-smartfonov/nokia">Nokia</a></li>


														<li><a href="/remont-smartfonov/ulefone">Ulefone</a></li>


														<li><a href="/remont-smartfonov/zte">ZTE</a></li>


														<li><a href="/remont-smartfonov/land-rover">Land Rover</a></li>


														<li><a href="/remont-smartfonov/vsmart">Vsmart</a></li>


														<li><a href="/remont-smartfonov/caterpillar">Caterpillar</a>
														</li>


														<li><a href="/remont-smartfonov/fly">Fly</a></li>


														<li><a href="/remont-smartfonov/archos">Archos</a></li>


														<li><a href="/remont-smartfonov/blackberry">BlackBerry</a></li>


														<li><a href="/remont-smartfonov/bq">BQ</a></li>


														<li><a href="/remont-smartfonov/dexp">DEXP</a></li>


														<li><a href="/remont-smartfonov/digma">Digma</a></li>


														<li><a href="/remont-smartfonov/ginzzu">Ginzzu</a></li>


														<li><a href="/remont-smartfonov/highscreen">Highscreen</a></li>


														<li><a href="/remont-smartfonov/irbis">Irbis</a></li>


														<li><a href="/remont-smartfonov/kyocera">Kyocera</a></li>


														<li><a href="/remont-smartfonov/hp">HP</a></li>


														<li><a href="/remont-smartfonov/leeco">LeEco</a></li>


														<li><a href="/remont-smartfonov/micromax">Micromax</a></li>


														<li><a href="/remont-smartfonov/oneplus">OnePlus</a></li>


														<li><a href="/remont-smartfonov/huawei">Huawei</a></li>


														<li><a href="/remont-smartfonov/texet">teXet</a></li>


														<li><a href="/remont-smartfonov/motorola">Motorola</a></li>


														<li><a href="/remont-smartfonov/prestigio">Prestigio</a></li>


														<li><a href="/remont-smartfonov/honor">Honor</a></li>


														<li><a href="/remont-smartfonov/vertex">Vertex</a></li>


														<li><a href="/remont-smartfonov/microsoft">Microsoft</a></li>


														<li><a href="/remont-smartfonov/sharp">Sharp</a></li>


														<li><a href="/remont-smartfonov/lenovo">Lenovo</a></li>


														<li><a href="/remont-smartfonov/elephone">Elephone</a></li>


														<li><a href="/remont-smartfonov/lg">LG</a></li>


														<li><a href="/remont-smartfonov/blackview">BlackView</a></li>


														<li><a href="/remont-smartfonov/google">Google</a></li>


													</ul>
												</div>
											</li>


											<li class="lvl_menu_1">
												<a href="/remont-televizorov">Телевизор</a>
												<div class="lvl_menu_2">
													<ul class="head-col-all head-column-2">


														<li><a href="/remont-televizorov/philips">Philips</a></li>


														<li><a href="/remont-televizorov/samsung">Samsung</a></li>


														<li><a href="/remont-televizorov/sony">Sony</a></li>


														<li><a href="/remont-televizorov/toshiba">Toshiba</a></li>


														<li><a href="/remont-televizorov/xiaomi">Xiaomi</a></li>


														<li><a href="/remont-televizorov/hisense">Hisense</a></li>


														<li><a href="/remont-televizorov/asano">Asano</a></li>


														<li><a href="/remont-televizorov/harper">Harper</a></li>


														<li><a href="/remont-televizorov/daewoo">Daewoo</a></li>


														<li><a href="/remont-televizorov/erisson">Erisson</a></li>


														<li><a href="/remont-televizorov/centek">Centek</a></li>


														<li><a href="/remont-televizorov/gazer">Gazer</a></li>


														<li><a href="/remont-televizorov/kivi">Kivi</a></li>


														<li><a href="/remont-televizorov/polarline">Polarline</a></li>


														<li><a href="/remont-televizorov/tcl">TCL</a></li>


														<li><a href="/remont-televizorov/telefunken">Telefunken</a></li>


														<li><a href="/remont-televizorov/econ">ECON</a></li>


														<li><a href="/remont-televizorov/skyworth">Skyworth</a></li>


														<li><a href="/remont-televizorov/vr">VR</a></li>


														<li><a href="/remont-televizorov/blaupunkt">Blaupunkt</a></li>


														<li><a href="/remont-televizorov/hyundai">Hyundai</a></li>


														<li><a href="/remont-televizorov/mystery">Mystery</a></li>


														<li><a href="/remont-televizorov/bbk">BBK</a></li>


														<li><a href="/remont-televizorov/panasonic">Panasonic</a></li>


														<li><a href="/remont-televizorov/leff">Leff</a></li>


														<li><a href="/remont-televizorov/goldstar">GoldStar</a></li>


														<li><a href="/remont-televizorov/bq">BQ</a></li>


														<li><a href="/remont-televizorov/dexp">DEXP</a></li>


														<li><a href="/remont-televizorov/digma">Digma</a></li>


														<li><a href="/remont-televizorov/haier">Haier</a></li>


														<li><a href="/remont-televizorov/irbis">Irbis</a></li>


														<li><a href="/remont-televizorov/prestigio">Prestigio</a></li>


														<li><a href="/remont-televizorov/jvc">JVC</a></li>


														<li><a href="/remont-televizorov/pioneer">Pioneer</a></li>


														<li><a href="/remont-televizorov/sharp">Sharp</a></li>


														<li><a href="/remont-televizorov/novex">Novex</a></li>


														<li><a href="/remont-televizorov/supra">Supra</a></li>


														<li><a href="/remont-televizorov/aiwa">Aiwa</a></li>


														<li><a href="/remont-televizorov/starwind">StarWind</a></li>


														<li><a href="/remont-televizorov/lg">LG</a></li>


													</ul>
												</div>
											</li>


											<li class="lvl_menu_1">
												<a href="/remont-elektrosamokatov">Электросамокат</a>
												<div class="lvl_menu_2">
													<ul class="head-col-all head-column-3">


														<li><a href="/remont-elektrosamokatov/acer">Acer</a></li>


														<li><a href="/remont-elektrosamokatov/kugoo">Kugoo</a></li>


														<li><a href="/remont-elektrosamokatov/ninebot">NineBot</a></li>


														<li><a href="/remont-elektrosamokatov/razor">Razor</a></li>


														<li><a href="/remont-elektrosamokatov/globber">Globber</a></li>


														<li><a href="/remont-elektrosamokatov/halten">Halten</a></li>


														<li><a href="/remont-elektrosamokatov/eltreco">Eltreco</a></li>


														<li><a href="/remont-elektrosamokatov/hiper">Hiper</a></li>


														<li><a href="/remont-elektrosamokatov/hoverbot">Hoverbot</a>
														</li>


														<li><a href="/remont-elektrosamokatov/zaxboard">Zaxboard</a>
														</li>


														<li><a href="/remont-elektrosamokatov/kingsong">KingSong</a>
														</li>


														<li><a href="/remont-elektrosamokatov/e-twow">e-TWOW</a></li>


														<li><a href="/remont-elektrosamokatov/airwheel">AirWheel</a>
														</li>


														<li><a href="/remont-elektrosamokatov/carmega">Carmega</a></li>


														<li><a href="/remont-elektrosamokatov/mizar">Mizar</a></li>


														<li><a href="/remont-elektrosamokatov/speedroll">SpeedRoll</a>
														</li>


														<li><a href="/remont-elektrosamokatov/ibalance">iBalance</a>
														</li>


														<li><a href="/remont-elektrosamokatov/minirobot">MiniRobot</a>
														</li>


														<li><a href="/remont-elektrosamokatov/xiaomi">Xiaomi</a></li>


														<li><a href="/remont-elektrosamokatov/jetson">Jetson</a></li>


														<li><a href="/remont-elektrosamokatov/artway">Artway</a></li>


														<li><a href="/remont-elektrosamokatov/novatrack">Novatrack</a>
														</li>


														<li><a href="/remont-elektrosamokatov/midway-by-yamato">Midway
																by Yamato </a></li>


														<li><a href="/remont-elektrosamokatov/dualtron">Dualtron</a>
														</li>


														<li><a href="/remont-elektrosamokatov/ezip">eZip</a></li>


														<li><a href="/remont-elektrosamokatov/el-sport">El-Sport</a>
														</li>


														<li><a href="/remont-elektrosamokatov/speedway">Speedway</a>
														</li>


														<li><a href="/remont-elektrosamokatov/yokamura">Yokamura</a>
														</li>


														<li><a href="/remont-elektrosamokatov/ultron">Ultron</a></li>


														<li><a href="/remont-elektrosamokatov/tribe">Tribe</a></li>


														<li><a href="/remont-elektrosamokatov/kuaike">Kuaike</a></li>


														<li><a href="/remont-elektrosamokatov/x-rider">X-Rider</a></li>


														<li><a href="/remont-elektrosamokatov/weikesi">Weikesi</a></li>


														<li><a href="/remont-elektrosamokatov/maxspeed">Maxspeed</a>
														</li>


														<li><a href="/remont-elektrosamokatov/hunter">Hunter</a></li>


														<li><a href="/remont-elektrosamokatov/volteco">Volteco</a></li>


														<li><a href="/remont-elektrosamokatov/all-terrain">All
																Terrain</a></li>


														<li><a href="/remont-elektrosamokatov/white-siberia">White
																Siberia</a></li>


														<li><a href="/remont-elektrosamokatov/wellness">Wellness</a>
														</li>


														<li><a href="/remont-elektrosamokatov/currus">Currus</a></li>


														<li><a href="/remont-elektrosamokatov/aovo">AOVO</a></li>


														<li><a href="/remont-elektrosamokatov/gt">GT</a></li>


														<li><a href="/remont-elektrosamokatov/headway">Headway</a></li>


														<li><a href="/remont-elektrosamokatov/e-scooter">E-Scooter</a>
														</li>


														<li><a href="/remont-elektrosamokatov/inokim">Inokim</a></li>


														<li><a href="/remont-elektrosamokatov/evo">Evo</a></li>


														<li><a href="/remont-elektrosamokatov/genesis">Genesis</a></li>


														<li><a href="/remont-elektrosamokatov/shorner">Shorner </a></li>


														<li><a href="/remont-elektrosamokatov/yamato">Yamato</a></li>


														<li><a href="/remont-elektrosamokatov/minimotors">Minimotors</a>
														</li>


														<li><a href="/remont-elektrosamokatov/joyor">Joyor</a></li>


														<li><a href="/remont-elektrosamokatov/archos">Archos</a></li>


														<li><a href="/remont-elektrosamokatov/dexp">DEXP</a></li>


														<li><a href="/remont-elektrosamokatov/digma">Digma</a></li>


														<li><a href="/remont-elektrosamokatov/iconbit">iconBIT</a></li>


														<li><a href="/remont-elektrosamokatov/citycoco">CityCoco</a>
														</li>


													</ul>
												</div>
											</li>


											<li class="lvl_menu_1">
												<a href="/remont-igrovih-pristavok">Игровая приставка</a>
												<div class="lvl_menu_2">
													<ul class="head-col-all head-column-1">


														<li><a href="/remont-igrovih-pristavok/sony">Sony</a></li>


														<li><a href="/remont-igrovih-pristavok/playstation">Sony
																PlayStation</a></li>


														<li><a href="/remont-igrovih-pristavok/xbox">Xbox</a></li>


														<li><a href="/remont-igrovih-pristavok/nintendo">Nintendo</a>
														</li>


													</ul>
												</div>
											</li>


											<li class="lvl_menu_1">
												<a href="/cifrovoy-binokl">Цифровой бинокль</a>
												<div class="lvl_menu_2">
													<ul class="head-col-all head-column-1">


														<li><a href="/cifrovoy-binokl/leica">Leica</a></li>


														<li><a href="/cifrovoy-binokl/sytong-ht-60">Andres</a></li>


														<li><a href="/cifrovoy-binokl/veber">Veber</a></li>


														<li><a href="/cifrovoy-binokl/strix">Blaser</a></li>


														<li><a href="/cifrovoy-binokl/sytong">Bresser</a></li>


														<li><a href="/cifrovoy-binokl/pentax">Pentax</a></li>


														<li><a href="/cifrovoy-binokl/dipol">Dipol</a></li>


														<li><a href="/cifrovoy-binokl/atn">ATN</a></li>


														<li><a href="/cifrovoy-binokl/bushnell">Bushnell</a></li>


														<li><a href="/cifrovoy-binokl/sightron">Sightron</a></li>


														<li><a href="/cifrovoy-binokl/nikon">Nikon</a></li>


														<li><a href="/cifrovoy-binokl/olympus">Olympus</a></li>


													</ul>
												</div>
											</li>


											<li class="lvl_menu_1">
												<a href="/remont-teplovizorov">Тепловизор</a>
												<div class="lvl_menu_2">
													<ul class="head-col-all head-column-2">


														<li><a href="/remont-teplovizorov/infratech">Infratech</a></li>


														<li><a href="/remont-teplovizorov/iray">iRay</a></li>


														<li><a href="/remont-teplovizorov/pard">Pard</a></li>


														<li><a href="/remont-teplovizorov/conotech">ConoTech</a></li>


														<li><a href="/remont-teplovizorov/fortuna">Fortuna</a></li>


														<li><a href="/remont-teplovizorov/guide">Guide</a></li>


														<li><a href="/remont-teplovizorov/hikmicro">Hikmicro</a></li>


														<li><a href="/remont-teplovizorov/hikvision">Hikvision</a></li>


														<li><a href="/remont-teplovizorov/iwt">IWT</a></li>


														<li><a href="/remont-teplovizorov/legat">Legat</a></li>


														<li><a href="/remont-teplovizorov/strix">Blaser</a></li>


														<li><a href="/remont-teplovizorov/sytong">Bresser</a></li>


														<li><a href="/remont-teplovizorov/venox">Venox</a></li>


														<li><a href="/remont-teplovizorov/flir">FLIR</a></li>


														<li><a href="/remont-teplovizorov/pulsar">Pulsar</a></li>


														<li><a href="/remont-teplovizorov/dedal">Dedal</a></li>


														<li><a href="/remont-teplovizorov/yukon">Yukon</a></li>


														<li><a href="/remont-teplovizorov/dipol">Dipol</a></li>


														<li><a href="/remont-teplovizorov/atn">ATN</a></li>


														<li><a href="/remont-teplovizorov/seek-thermal">Seek Thermal</a>
														</li>


														<li><a href="/remont-teplovizorov/dali">Dali</a></li>


														<li><a href="/remont-teplovizorov/thermoray">ThermoRay</a></li>


														<li><a href="/remont-teplovizorov/testo">Testo</a></li>


													</ul>
												</div>
											</li>


											<li class="lvl_menu_1">
												<a href="/remont-istochnikov-bespereboynogo-pitaniya">Источник
													бесперебойного питания</a>
												<div class="lvl_menu_2">
													<ul class="head-col-all head-column-2">


														<li><a
																href="/remont-istochnikov-bespereboynogo-pitaniya/hybrid">Hybrid</a>
														</li>


														<li><a
																href="/remont-istochnikov-bespereboynogo-pitaniya/iec">IEC</a>
														</li>


														<li><a
																href="/remont-istochnikov-bespereboynogo-pitaniya/must">Must</a>
														</li>


														<li><a
																href="/remont-istochnikov-bespereboynogo-pitaniya/santak">Santak</a>
														</li>


														<li><a
																href="/remont-istochnikov-bespereboynogo-pitaniya/sven">Sven</a>
														</li>


														<li><a
																href="/remont-istochnikov-bespereboynogo-pitaniya/symmetra">Symmetra</a>
														</li>


														<li><a
																href="/remont-istochnikov-bespereboynogo-pitaniya/tripp">Tripp</a>
														</li>


														<li><a
																href="/remont-istochnikov-bespereboynogo-pitaniya/resanta">Ресанта</a>
														</li>


														<li><a
																href="/remont-istochnikov-bespereboynogo-pitaniya/soyuz">Союз</a>
														</li>


														<li><a
																href="/remont-istochnikov-bespereboynogo-pitaniya/exegate-specialpro-smart-llb-2200-lcd">Roland
																DG</a></li>


														<li><a
																href="/remont-istochnikov-bespereboynogo-pitaniya/irbis">Irbis</a>
														</li>


														<li><a
																href="/remont-istochnikov-bespereboynogo-pitaniya/huawei">Huawei</a>
														</li>


														<li><a
																href="/remont-istochnikov-bespereboynogo-pitaniya/delta">DELTA</a>
														</li>


														<li><a
																href="/remont-istochnikov-bespereboynogo-pitaniya/riello">Riello</a>
														</li>


														<li><a
																href="/remont-istochnikov-bespereboynogo-pitaniya/zota">ZOTA</a>
														</li>


														<li><a
																href="/remont-istochnikov-bespereboynogo-pitaniya/hiden-control">Hiden
																Control</a></li>


														<li><a
																href="/remont-istochnikov-bespereboynogo-pitaniya/eaton">Eaton</a>
														</li>


														<li><a
																href="/remont-istochnikov-bespereboynogo-pitaniya/rucelf">RUCELF</a>
														</li>


														<li><a
																href="/remont-istochnikov-bespereboynogo-pitaniya/tripp-lite">Tripp
																Lite</a></li>


														<li><a
																href="/remont-istochnikov-bespereboynogo-pitaniya/sibkontakt">СибКонтакт</a>
														</li>


														<li><a
																href="/remont-istochnikov-bespereboynogo-pitaniya/stark-country">Stark
																Country</a></li>


														<li><a
																href="/remont-istochnikov-bespereboynogo-pitaniya/powerman">Powerman</a>
														</li>


														<li><a
																href="/remont-istochnikov-bespereboynogo-pitaniya/microart">MicroArt</a>
														</li>


														<li><a
																href="/remont-istochnikov-bespereboynogo-pitaniya/vertiv">Vertiv</a>
														</li>


														<li><a
																href="/remont-istochnikov-bespereboynogo-pitaniya/bastion">БАСТИОН</a>
														</li>


														<li><a
																href="/remont-istochnikov-bespereboynogo-pitaniya/svyaz-inzhiniring">Связь
																инжиниринг</a></li>


														<li><a
																href="/remont-istochnikov-bespereboynogo-pitaniya/shtil">Штиль</a>
														</li>


														<li><a
																href="/remont-istochnikov-bespereboynogo-pitaniya/east">EAST</a>
														</li>


														<li><a
																href="/remont-istochnikov-bespereboynogo-pitaniya/energiya">Энергия</a>
														</li>


														<li><a
																href="/remont-istochnikov-bespereboynogo-pitaniya/impuls">ИМПУЛЬС</a>
														</li>


														<li><a
																href="/remont-istochnikov-bespereboynogo-pitaniya/tescom">TESCOM</a>
														</li>


														<li><a
																href="/remont-istochnikov-bespereboynogo-pitaniya/vision">VISION</a>
														</li>


														<li><a
																href="/remont-istochnikov-bespereboynogo-pitaniya/inform">INFORM</a>
														</li>


														<li><a
																href="/remont-istochnikov-bespereboynogo-pitaniya/gmups">GMUPS</a>
														</li>


														<li><a
																href="/remont-istochnikov-bespereboynogo-pitaniya/legrand">Legrand</a>
														</li>


														<li><a
																href="/remont-istochnikov-bespereboynogo-pitaniya/ippon">IPPON</a>
														</li>


														<li><a
																href="/remont-istochnikov-bespereboynogo-pitaniya/hiden">Hiden</a>
														</li>


														<li><a
																href="/remont-istochnikov-bespereboynogo-pitaniya/exegate">ExeGate</a>
														</li>


														<li><a
																href="/remont-istochnikov-bespereboynogo-pitaniya/eltena">ELTENA</a>
														</li>


														<li><a
																href="/remont-istochnikov-bespereboynogo-pitaniya/ecovolt">Ecovolt</a>
														</li>


														<li><a
																href="/remont-istochnikov-bespereboynogo-pitaniya/cyberpower">CyberPower</a>
														</li>


														<li><a
																href="/remont-istochnikov-bespereboynogo-pitaniya/powercom">PowerCom</a>
														</li>


														<li><a
																href="/remont-istochnikov-bespereboynogo-pitaniya/apc">APC</a>
														</li>


													</ul>
												</div>
											</li>


											<li class="lvl_menu_1">
												<a href="/remont-opticheskih-pricelov">Оптический прицел</a>
												<div class="lvl_menu_2">
													<ul class="head-col-all head-column-2">


														<li><a href="/remont-opticheskih-pricelov/4x">Maibenben</a></li>


														<li><a href="/remont-opticheskih-pricelov/6x">AGM</a></li>


														<li><a href="/remont-opticheskih-pricelov/digex">Digex</a></li>


														<li><a href="/remont-opticheskih-pricelov/gals">Gals</a></li>


														<li><a
																href="/remont-opticheskih-pricelov/infratech">Infratech</a>
														</li>


														<li><a href="/remont-opticheskih-pricelov/iray">iRay</a></li>


														<li><a href="/remont-opticheskih-pricelov/nvrs">NVRS</a></li>


														<li><a href="/remont-opticheskih-pricelov/pard">Pard</a></li>


														<li><a href="/remont-opticheskih-pricelov/phantom">Phantom</a>
														</li>


														<li><a href="/remont-opticheskih-pricelov/photon">Photon</a>
														</li>


														<li><a href="/remont-opticheskih-pricelov/pns">PNS</a></li>


														<li><a href="/remont-opticheskih-pricelov/sentinel">Sentinel</a>
														</li>


														<li><a
																href="/remont-opticheskih-pricelov/sightline">Sightline</a>
														</li>


														<li><a
																href="/remont-opticheskih-pricelov/sightmark">Sightmark</a>
														</li>


														<li><a
																href="/remont-opticheskih-pricelov/sytong-ht-60">Andres</a>
														</li>


														<li><a
																href="/remont-opticheskih-pricelov/sytong-ht-60-lrf">Sytong</a>
														</li>


														<li><a href="/remont-opticheskih-pricelov/veber">Veber</a></li>


														<li><a href="/remont-opticheskih-pricelov/npz">НПЗ</a></li>


														<li><a href="/remont-opticheskih-pricelov/pn">ПН</a></li>


														<li><a href="/remont-opticheskih-pricelov/sot">СОТ</a></li>


														<li><a href="/remont-opticheskih-pricelov/fortuna">Fortuna</a>
														</li>


														<li><a href="/remont-opticheskih-pricelov/eotech">﻿EOTech</a>
														</li>


														<li><a href="/remont-opticheskih-pricelov/pulsar">Pulsar</a>
														</li>


														<li><a href="/remont-opticheskih-pricelov/dedal">Dedal</a></li>


														<li><a href="/remont-opticheskih-pricelov/pnv">ПНВ</a></li>


														<li><a href="/remont-opticheskih-pricelov/yukon">Yukon</a></li>


														<li><a href="/remont-opticheskih-pricelov/dipol">Dipol</a></li>


														<li><a href="/remont-opticheskih-pricelov/atn">ATN</a></li>


														<li><a href="/remont-opticheskih-pricelov/dali">Dali</a></li>


														<li><a href="/remont-opticheskih-pricelov/posp">ПОСП</a></li>


														<li><a href="/remont-opticheskih-pricelov/marcool">Marcool</a>
														</li>


														<li><a href="/remont-opticheskih-pricelov/trijicon">Trijicon</a>
														</li>


														<li><a href="/remont-opticheskih-pricelov/vector-optics">Vector
																Optics</a></li>


														<li><a href="/remont-opticheskih-pricelov/bushnell">Bushnell</a>
														</li>


														<li><a href="/remont-opticheskih-pricelov/elcan">Elcan</a></li>


														<li><a href="/remont-opticheskih-pricelov/sightron">Sightron</a>
														</li>


														<li><a href="/remont-opticheskih-pricelov/leupold">Leupold</a>
														</li>


														<li><a href="/remont-opticheskih-pricelov/nikon">Nikon</a></li>


													</ul>
												</div>
											</li>


											<li class="lvl_menu_1">
												<a href="/pricel-nochnogo-videniya">Прицел ночного видения</a>
												<div class="lvl_menu_2">
													<ul class="head-col-all head-column-1">


														<li><a href="/pricel-nochnogo-videniya/zenit">Зенит</a></li>


														<li><a href="/pricel-nochnogo-videniya/pulsar">Pulsar</a></li>


														<li><a href="/pricel-nochnogo-videniya/dedal">Dedal</a></li>


														<li><a href="/pricel-nochnogo-videniya/yukon">Yukon</a></li>


													</ul>
												</div>
											</li>


										</ul>
									</div>
								</li>


								<li id="menu-item-26" class="menu-item menu-item-26 iteam-cell" itemprop="name">
									<a itemprop="url" href="/remont-fototehniki">
										<span>Ремонт фототехники</span>
									</a>
									<div class="dropDown_menu">
										<ul class>


											<li class="lvl_menu_1">
												<a href="/remont-fotovspyshek">Фотовспышка</a>
												<div class="lvl_menu_2">
													<ul class="head-col-all head-column-1">


														<li><a href="/remont-fotovspyshek/sony">Sony</a></li>


														<li><a href="/remont-fotovspyshek/godox">Godox</a></li>


														<li><a href="/remont-fotovspyshek/number-king">Number King</a>
														</li>


														<li><a href="/remont-fotovspyshek/yongnuo">YongNuo</a></li>


														<li><a href="/remont-fotovspyshek/canon">Canon</a></li>


														<li><a href="/remont-fotovspyshek/nikon">Nikon</a></li>


														<li><a href="/remont-fotovspyshek/fujifilm">Fujifilm</a></li>


													</ul>
												</div>
											</li>


											<li class="lvl_menu_1">
												<a href="/remont-objektivov">Объектив</a>
												<div class="lvl_menu_2">
													<ul class="head-col-all head-column-1">


														<li><a href="/remont-objektivov/optoma">Optoma</a></li>


														<li><a href="/remont-objektivov/sony">Sony</a></li>


														<li><a href="/remont-objektivov/pentax">Pentax</a></li>


														<li><a href="/remont-objektivov/samyang">Samyang</a></li>


														<li><a href="/remont-objektivov/tamron">Tamron</a></li>


														<li><a href="/remont-objektivov/zenit">Зенит</a></li>


														<li><a href="/remont-objektivov/panasonic">Panasonic</a></li>


														<li><a href="/remont-objektivov/canon">Canon</a></li>


														<li><a href="/remont-objektivov/nikon">Nikon</a></li>


														<li><a href="/remont-objektivov/fujifilm">Fujifilm</a></li>


														<li><a href="/remont-objektivov/sigma">Sigma</a></li>


														<li><a href="/remont-objektivov/olympus">Olympus</a></li>


													</ul>
												</div>
											</li>


											<li class="lvl_menu_1">
												<a href="/remont-fotoapparatov">Фотоаппарат</a>
												<div class="lvl_menu_2">
													<ul class="head-col-all head-column-2">


														<li><a href="/remont-fotoapparatov/samsung">Samsung</a></li>


														<li><a href="/remont-fotoapparatov/leica">Leica</a></li>


														<li><a href="/remont-fotoapparatov/sony">Sony</a></li>


														<li><a href="/remont-fotoapparatov/sytong-ht-60">Andres</a></li>


														<li><a href="/remont-fotoapparatov/veber">Veber</a></li>


														<li><a href="/remont-fotoapparatov/strix">Blaser</a></li>


														<li><a href="/remont-fotoapparatov/sytong">Bresser</a></li>


														<li><a href="/remont-fotoapparatov/pentax">Pentax</a></li>


														<li><a href="/remont-fotoapparatov/yongnuo">YongNuo</a></li>


														<li><a href="/remont-fotoapparatov/panasonic">Panasonic</a></li>


														<li><a href="/remont-fotoapparatov/dipol">Dipol</a></li>


														<li><a href="/remont-fotoapparatov/atn">ATN</a></li>


														<li><a href="/remont-fotoapparatov/sea-sea">Sea & Sea</a></li>


														<li><a href="/remont-fotoapparatov/bushnell">Bushnell</a></li>


														<li><a href="/remont-fotoapparatov/sightron">Sightron</a></li>


														<li><a href="/remont-fotoapparatov/canon">Canon</a></li>


														<li><a href="/remont-fotoapparatov/nikon">Nikon</a></li>


														<li><a href="/remont-fotoapparatov/fujifilm">Fujifilm</a></li>


														<li><a href="/remont-fotoapparatov/ricoh">Ricoh</a></li>


														<li><a href="/remont-fotoapparatov/olympus">Olympus</a></li>


														<li><a href="/remont-fotoapparatov/polaroid">Polaroid</a></li>


													</ul>
												</div>
											</li>


										</ul>
									</div>
								</li>


								<li id="menu-item-26" class="menu-item menu-item-26 iteam-cell" itemprop="name">
									<a itemprop="url" href="/remont-bpla">
										<span>Ремонт БПЛА</span>
									</a>
									<div class="dropDown_menu">
										<ul class>


											<li class="lvl_menu_1">
												<a href="/remont-kvadrokopterov">Квадрокоптер</a>
												<div class="lvl_menu_2">
													<ul class="head-col-all head-column-2">


														<li><a href="/remont-kvadrokopterov/gopro">GoPro</a></li>


														<li><a href="/remont-kvadrokopterov/blade">Blade</a></li>


														<li><a href="/remont-kvadrokopterov/cheerson">Cheerson</a></li>


														<li><a href="/remont-kvadrokopterov/nine-eagles">Nine Eagles</a>
														</li>


														<li><a href="/remont-kvadrokopterov/parrot">Parrot</a></li>


														<li><a href="/remont-kvadrokopterov/traxxas">Traxxas</a></li>


														<li><a href="/remont-kvadrokopterov/xiro">Xiro</a></li>


														<li><a href="/remont-kvadrokopterov/xk-innovations">XK
																Innovations</a></li>


														<li><a href="/remont-kvadrokopterov/dji">DJI</a></li>


														<li><a href="/remont-kvadrokopterov/yuneec">Yuneec</a></li>


														<li><a href="/remont-kvadrokopterov/xiaomi">Xiaomi</a></li>


														<li><a href="/remont-kvadrokopterov/fimi">Fimi</a></li>


														<li><a href="/remont-kvadrokopterov/walkera">Walkera</a></li>


														<li><a href="/remont-kvadrokopterov/hubsan">Hubsan</a></li>


														<li><a href="/remont-kvadrokopterov/eachine">Eachine</a></li>


														<li><a href="/remont-kvadrokopterov/wl-toys">WL Toys</a></li>


														<li><a href="/remont-kvadrokopterov/vlastelin-nebes">Vlastelin
																Nebes</a></li>


														<li><a href="/remont-kvadrokopterov/syma">Syma</a></li>


														<li><a href="/remont-kvadrokopterov/mjx">MJX</a></li>


														<li><a href="/remont-kvadrokopterov/jjrc">JJRC</a></li>


														<li><a href="/remont-kvadrokopterov/jxd">JXD</a></li>


														<li><a href="/remont-kvadrokopterov/spl">SPL</a></li>


														<li><a href="/remont-kvadrokopterov/visuo">Visuo</a></li>


														<li><a href="/remont-kvadrokopterov/silverlit">Silverlit</a>
														</li>


														<li><a href="/remont-kvadrokopterov/sjrc">SJRC</a></li>


														<li><a href="/remont-kvadrokopterov/betafpv">BETAFPV</a></li>


														<li><a href="/remont-kvadrokopterov/4drc">4DRC</a></li>


														<li><a href="/remont-kvadrokopterov/zlrc">ZLRC</a></li>


														<li><a href="/remont-kvadrokopterov/xkj">XKJ</a></li>


														<li><a href="/remont-kvadrokopterov/autel-robotics">Autel</a>
														</li>


													</ul>
												</div>
											</li>


										</ul>
									</div>
								</li>


								<li id="menu-item-26" class="menu-item menu-item-26 iteam-cell" itemprop="name">
									<a itemprop="url" href="/remont-kompyuternoy-tehniki">
										<span>Ремонт компьютерной техники</span>
									</a>
									<div class="dropDown_menu">
										<ul class="right-col">


											<li class="lvl_menu_1">
												<a href="/remont-noutbukov">Ноутбук</a>
												<div class="lvl_menu_2">
													<ul class="head-col-all head-column-2">


														<li><a href="/remont-noutbukov/acer">Acer</a></li>


														<li><a href="/remont-noutbukov/4x">Maibenben</a></li>


														<li><a href="/remont-noutbukov/msi">MSI</a></li>


														<li><a href="/remont-noutbukov/philips">Philips</a></li>


														<li><a href="/remont-noutbukov/samsung">Samsung</a></li>


														<li><a href="/remont-noutbukov/sony">Sony</a></li>


														<li><a href="/remont-noutbukov/toshiba">Toshiba</a></li>


														<li><a href="/remont-noutbukov/xiaomi">Xiaomi</a></li>


														<li><a href="/remont-noutbukov/apple">Apple</a></li>


														<li><a href="/remont-noutbukov/dell">Dell</a></li>


														<li><a href="/remont-noutbukov/asus">Asus</a></li>


														<li><a href="/remont-noutbukov/panasonic">Panasonic</a></li>


														<li><a href="/remont-noutbukov/aourus">﻿Aorus</a></li>


														<li><a href="/remont-noutbukov/aquarius">Aquarius</a></li>


														<li><a href="/remont-noutbukov/epson">Epson</a></li>


														<li><a href="/remont-noutbukov/getac">Getac</a></li>


														<li><a href="/remont-noutbukov/digma">Digma</a></li>


														<li><a href="/remont-noutbukov/fujitsu">Fujitsu</a></li>


														<li><a href="/remont-noutbukov/haier">Haier</a></li>


														<li><a href="/remont-noutbukov/hp">HP</a></li>


														<li><a href="/remont-noutbukov/packard-bell">Packard Bell</a>
														</li>


														<li><a href="/remont-noutbukov/huawei">Huawei</a></li>


														<li><a href="/remont-noutbukov/prestigio">Prestigio</a></li>


														<li><a href="/remont-noutbukov/honor">Honor</a></li>


														<li><a href="/remont-noutbukov/gigabyte">Gigabyte</a></li>


														<li><a href="/remont-noutbukov/microsoft">Microsoft</a></li>


														<li><a href="/remont-noutbukov/lenovo">Lenovo</a></li>


														<li><a href="/remont-noutbukov/lg">LG</a></li>


														<li><a href="/remont-noutbukov/alienware">Alienware</a></li>


													</ul>
												</div>
											</li>


											<li class="lvl_menu_1">
												<a href="/netbuk">Нетбук</a>
												<div class="lvl_menu_2">
													<ul class="head-col-all head-column-1">


														<li><a href="/netbuk/irbis">Irbis</a></li>


														<li><a href="/netbuk/prestigio">Prestigio</a></li>


														<li><a href="/netbuk/lenovo">Lenovo</a></li>


													</ul>
												</div>
											</li>


											<li class="lvl_menu_1">
												<a href="/remont-monoblokov">Моноблок</a>
												<div class="lvl_menu_2">
													<ul class="head-col-all head-column-1">


														<li><a href="/remont-monoblokov/acer">Acer</a></li>


														<li><a href="/remont-monoblokov/msi">MSI</a></li>


														<li><a href="/remont-monoblokov/sony">Sony</a></li>


														<li><a href="/remont-monoblokov/apple">Apple</a></li>


														<li><a href="/remont-monoblokov/dell">Dell</a></li>


														<li><a href="/remont-monoblokov/asus">Asus</a></li>


														<li><a href="/remont-monoblokov/aquarius">Aquarius</a></li>


														<li><a href="/remont-monoblokov/hp">HP</a></li>


														<li><a href="/remont-monoblokov/lenovo">Lenovo</a></li>


													</ul>
												</div>
											</li>


											<li class="lvl_menu_1">
												<a href="/remont-pk">ПК</a>
												<div class="lvl_menu_2">
													<ul class="head-col-all head-column-1">


														<li><a href="/remont-pk/acer">Acer</a></li>


														<li><a href="/remont-pk/msi">MSI</a></li>


														<li><a href="/remont-pk/apple">Apple</a></li>


														<li><a href="/remont-pk/dell">Dell</a></li>


														<li><a href="/remont-pk/asus">Asus</a></li>


														<li><a href="/remont-pk/hp">HP</a></li>


														<li><a href="/remont-pk/lenovo">Lenovo</a></li>


													</ul>
												</div>
											</li>


											<li class="lvl_menu_1">
												<a href="/remont-serverov">Сервер</a>
												<div class="lvl_menu_2">
													<ul class="head-col-all head-column-1">


														<li><a href="/remont-serverov/hpe">HPE</a></li>


														<li><a href="/remont-serverov/karma">﻿Karma</a></li>


														<li><a href="/remont-serverov/qtech">﻿Qtech</a></li>


														<li><a href="/remont-serverov/xfusion">Xfusion</a></li>


														<li><a href="/remont-serverov/yadro">Yadro</a></li>


														<li><a href="/remont-serverov/rikor">Рикор</a></li>


														<li><a href="/remont-serverov/dell">Dell</a></li>


														<li><a href="/remont-serverov/sugon">Sugon</a></li>


														<li><a href="/remont-serverov/cisco">Cisco</a></li>


														<li><a href="/remont-serverov/oracle">Oracle</a></li>


														<li><a href="/remont-serverov/ibm-system">IBM System</a></li>


														<li><a href="/remont-serverov/fusionserver">FusionServer</a>
														</li>


														<li><a href="/remont-serverov/fujitsu">Fujitsu</a></li>


														<li><a href="/remont-serverov/hp">HP</a></li>


														<li><a href="/remont-serverov/huawei">Huawei</a></li>


														<li><a href="/remont-serverov/lenovo">Lenovo</a></li>


														<li><a href="/remont-serverov/sitronics">Sitronics</a></li>


													</ul>
												</div>
											</li>


											<li class="lvl_menu_1">
												<a href="/remont-monitorov">Монитор</a>
												<div class="lvl_menu_2">
													<ul class="head-col-all head-column-1">


														<li><a href="/remont-monitorov/acer">Acer</a></li>


														<li><a href="/remont-monitorov/nec">NEC</a></li>


														<li><a href="/remont-monitorov/msi">MSI</a></li>


														<li><a href="/remont-monitorov/philips">Philips</a></li>


														<li><a href="/remont-monitorov/samsung">Samsung</a></li>


														<li><a href="/remont-monitorov/apple">Apple</a></li>


														<li><a href="/remont-monitorov/dell">Dell</a></li>


														<li><a href="/remont-monitorov/asus">Asus</a></li>


														<li><a href="/remont-monitorov/aoc">AOC</a></li>


														<li><a href="/remont-monitorov/iiyama">Iiyama</a></li>


														<li><a href="/remont-monitorov/benq">BenQ</a></li>


														<li><a href="/remont-monitorov/dexp">DEXP</a></li>


														<li><a href="/remont-monitorov/hp">HP</a></li>


														<li><a href="/remont-monitorov/viewsonic">ViewSonic</a></li>


														<li><a href="/remont-monitorov/jvc">JVC</a></li>


														<li><a href="/remont-monitorov/gigabyte">Gigabyte</a></li>


														<li><a href="/remont-monitorov/lenovo">Lenovo</a></li>


														<li><a href="/remont-monitorov/lg">LG</a></li>


													</ul>
												</div>
											</li>


											<li class="lvl_menu_1">
												<a href="/remont-videokart">Видеокарта</a>
												<div class="lvl_menu_2">
													<ul class="head-col-all head-column-1">


														<li><a href="/remont-videokart/msi">MSI</a></li>


														<li><a href="/remont-videokart/xiaomi">Xiaomi</a></li>


														<li><a href="/remont-videokart/sapphire">Sapphire</a></li>


														<li><a href="/remont-videokart/asus">Asus</a></li>


														<li><a href="/remont-videokart/amd">AMD</a></li>


														<li><a href="/remont-videokart/nvidia">Nvidia</a></li>


														<li><a href="/remont-videokart/evga">Evga</a></li>


														<li><a href="/remont-videokart/getac">Getac</a></li>


														<li><a href="/remont-videokart/geforce">GeForce</a></li>


														<li><a href="/remont-videokart/gigabyte">Gigabyte</a></li>


														<li><a href="/remont-videokart/lenovo">Lenovo</a></li>


														<li><a href="/remont-videokart/intel">Intel</a></li>


													</ul>
												</div>
											</li>


										</ul>
									</div>
								</li>


							</ul>



						</nav>
					</div>
				</div>
			</div>

			<meta itemprop="headline" content="ASC-Service — сервисный центр в Москве">
			<meta itemprop="description"
				content="АСЦ — Срочный ремонт техники в Москве с бесплатной диагностикой  ✅ Гарантия до 3 лет. ✅ Получите скидку 25% при первом обращении!">
			<meta itemprop="keywords" content="ASC-Рем-Сервис, Сервис центр по срочному ремонту">
			<script type="application/ld+json">
				{
					"@context": "http://www.schema.org",
					"@type": "ProfessionalService",
					"name": "ASC-Service — сервисный центр в Москве",
					"url": "https://asc-rem.ru",
					"logo": "https://asc-rem.ru/public/img/logo-asc.svg",
					"description": "Ремонт техники в авторизованном сервисном центре - ASC-Service, с выездом на дом или офис в Москве. Гарантия до 3 лет на все виды работ.",
					"address": {
						"@type": "PostalAddress",
						"streetAddress": "Гарибальди, 36",
						"addressLocality": "Москва",
						"addressRegion": "",
						"postalCode": "117418",
						"addressCountry": "Russia"
					},
					"geo": {
						"@type": "GeoCoordinates",
						"latitude": "55.668447",
						"longitude": "37.559856"
					},
					"hasMap": "https://www.google.com/maps/search/?api=1&query=55.668447,37.559856",
					"openingHours": "Mo, Tu, We, Th, Fr, Sa, Su 09:00-21:00",
					"contactPoint": {
						"@type": "ContactPoint",
						"telephone": "+74951625317",
						"contactType": "Основной"
					}
				}
			</script>
		</header>
	@yield('content')
	
	@include('layouts.footer')

	<!-- Footer -->

</body>

</html>