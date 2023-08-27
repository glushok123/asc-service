@extends('layouts.app')

@section('content')

<main class="pageWrapper">
			<section class="mpBlock">
				<div class="container flex">
					<div class="lp-block">
						<h1 class="mpBlock-title">Ремонт цифровой техники в Москве</h1>
						<ul class="title-list">
							<li class="mpBlock-p"><img src="images/yes.png" alt>Ремонт устройств от 350 рублей;</li>
							<li class="mpBlock-p"><img src="images/yes.png" alt>Бесплатная диагностика;</li>
							<li class="mpBlock-p"><img src="images/yes.png" alt>Гарантия - до 3-х лет;</li>
						</ul>
						<form>
							<input type="hidden" name="form_name" value="Форма на главном экране сайта">
							<input type="text" name="phone" inputmode="tel" class="msPhone">
							<input type="submit" value="Отправить заявку" class="msSubmit" disabled="disabled">
							<div class="confirm mpBlock__confirm d-flex">
								<input type="checkbox" class="msCheck" checked>
								<div class="privacy__text">Отправляя данную форму, Вы соглашаетесь с <a
										href="/privacy-policy">политикой конфиденциальности</a> нашего сайта</div>
							</div>
						</form>
						<div class="success"></div>
					</div>
					<div class="rp-block">
						<img class="offer-phones" src="images/offer-img.png">
					</div>
				</div>
			</section>

			<span class="order-block-section">
				<section class="advsSection">
					<div class="container">


						<div class="mainAdvs flex">
							<div class="mainAdvs-item">
								<div class="maTitle">Удобное расположение в центре города</div>
								<div class="maCount">1</div>
								<img src="images/ad-1.png" class="maImg">
							</div>
							<div class="mainAdvs-item">
								<div class="maTitle">Бесплатная диагностика вашего устройства</div>
								<div class="maCount">2</div>
								<img src="images/ad-2.png" class="maImg">
							</div>
							<div class="mainAdvs-item">
								<div class="maTitle">Только качественные детали и запчасти</div>
								<div class="maCount">3</div>
								<img src="images/ad-3.png" class="maImg">
							</div>
							<div class="mainAdvs-item">
								<div class="maTitle">Выгодный ремонт с гарантией</div>
								<div class="maCount">4</div>
								<img src="images/ad-4.png" class="maImg">
							</div>
						</div>

					</div>
				</section>

				<section class="productCategories-section">
					<div class="container">
						<h2 class="titleH2">Ремонтируем</h2>
						<div class="mainCategoriesList-wrapper">
							<div class="mainCategoriesList-wrapper__item">
								<a href="/remont-noutbukov">
									<img src="images/small_h130_62b4cacea17d2-abb4dff906fae720c9ea515faf98a6c5.png">
									<h3 class="mainCategoriesList__title">Ноутбуки</h3>
								</a>
							</div>
							<div class="mainCategoriesList-wrapper__item">
								<a href="/netbuk">
									<img src="images/small_h130_64d227223a3d6-d9b6f4554ead74cebd62effb6a671a52.png">
									<h3 class="mainCategoriesList__title">Нетбуки</h3>
								</a>
							</div>
							<div class="mainCategoriesList-wrapper__item">
								<a href="/remont-monoblokov">
									<img src="images/small_h130_62b4cadeaf8af-fe2915057ffebd71aa4014186703bf38.png">
									<h3 class="mainCategoriesList__title">Моноблоки</h3>
								</a>
							</div>
							<div class="mainCategoriesList-wrapper__item">
								<a href="/remont-proektorov">
									<img src="images/small_h130_62b4cb0de6ac1-0e6336f1a35b7629de74f8c006d30790.png">
									<h3 class="mainCategoriesList__title">Проекторы</h3>
								</a>
							</div>
							<div class="mainCategoriesList-wrapper__item">
								<a href="/remont-planshetov">
									<img src="images/small_h130_62b4c99cd2151-15b6d1ef9c050530c0e97c83ceef4597.png">
									<h3 class="mainCategoriesList__title">Планшеты</h3>
								</a>
							</div>
							<div class="mainCategoriesList-wrapper__item">
								<a href="/remont-smartfonov">
									<img src="images/small_h130_62b484ca351fd-78412cb505dba7f0981003b51ac9b541.png">
									<h3 class="mainCategoriesList__title">Телефоны</h3>
								</a>
							</div>
							<div class="mainCategoriesList-wrapper__item">
								<a href="/remont-fotovspyshek">
									<img src="images/small_h130_62b4cb9792ccf-6de43c96b19b308f246fbc185eb7ea96.png">
									<h3 class="mainCategoriesList__title">Фотовспышки</h3>
								</a>
							</div>
							<div class="mainCategoriesList-wrapper__item">
								<a href="/remont-objektivov">
									<img src="images/small_h130_62b4cb713a751-5e41028c3ec943fa831123d6315478f7.png">
									<h3 class="mainCategoriesList__title">Объективы</h3>
								</a>
							</div>
							<div class="mainCategoriesList-wrapper__item">
								<a href="/remont-fotoapparatov">
									<img src="images/small_h130_62b4cb2b96474-8c0b27cc9a0e5863fd62235ea2cbcfc9.png">
									<h3 class="mainCategoriesList__title">Фотоаппараты</h3>
								</a>
							</div>
							<div class="mainCategoriesList-wrapper__item">
								<a href="/remont-mfu">
									<img src="images/small_h130_62b4cb61d47fe-3ba889a5a7010858d6994f48e20ac556.png">
									<h3 class="mainCategoriesList__title">МФУ</h3>
								</a>
							</div>
							<div class="mainCategoriesList-wrapper__item">
								<a href="/remont-printerov">
									<img src="images/small_h130_62b4cafc27dba-0469c3e7eb0d8c3c187576515eeae84c.png">
									<h3 class="mainCategoriesList__title">Принтеры</h3>
								</a>
							</div>
							<div class="mainCategoriesList-wrapper__item">
								<a href="/remont-televizorov">
									<img src="images/small_h130_62b4cb18bc220-9a077b93da0655afc3721f1abce20a16.png">
									<h3 class="mainCategoriesList__title">Телевизоры</h3>
								</a>
							</div>
						</div>
						<a class="moreCats">Больше категорий</a>
					</div>
				</section>
			</span>
			<section class="saleForm-section">
				<div class="container">
					<div class="formSale">
						<div class="fsMain">
							<div class="fsTitle mb-discont">Получите скидку 25%<br> на первые ремонтные работы</div>
							<p>Если вам понравились условия работы с нашим сервисным центром, то мы с радостью
								предоставим скидку на ремонт любого устройства в размере 25%!</p>
							<button class="getConsult js-open-modal" data-modal="2">Получить скидку</button>
							<img src="images/sale-img.png">
						</div>
						<div class="fsBg"></div>
						<div class="fsOverlay"></div>
					</div>
				</div>
			</section>
			<section class="salesSection" id="anchor-stock">
				<div class="container">
					<h2 class="titleH2">Акции сервисного центра</h2>
					<div class="salesWrapper">




						<div class="articleItem">
							<noindex>
								<a rel="nofollow" class="support-link-sales"
									href="/sales/podarok-1500r-na-sleduyuschiy-remont-v-nashem-centre">
								</a>
								<article itemtype="https://schema.org/BlogPosting" itemscope="itemscope"><a
										rel="nofollow" class="support-link-sales"
										href="/sales/podarok-1500r-na-sleduyuschiy-remont-v-nashem-centre">
										<img src="images/63ab26fb7f968-02a4d403cfce4aeb8b3a6fc559f6722b.png"
											class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
											alt=" Подарок 1500Р на следующий ремонт в нашем центре">
									</a><a rel="nofollow"
										href="/sales/podarok-1500r-na-sleduyuschiy-remont-v-nashem-centre"
										class="titleSale no-click"> Подарок 1500Р на следующий ремонт в нашем центре</a>
									<a rel="nofollow" href="/sales/podarok-1500r-na-sleduyuschiy-remont-v-nashem-centre"
										class="readmoreArtice">Подробнее</a>
								</article>

							</noindex>
						</div>





						<div class="articleItem">
							<noindex>
								<a rel="nofollow" class="support-link-sales"
									href="/sales/besplatnaya-dostavka-ustroystva-v-cherte-goroda">
								</a>
								<article itemtype="https://schema.org/BlogPosting" itemscope="itemscope"><a
										rel="nofollow" class="support-link-sales"
										href="/sales/besplatnaya-dostavka-ustroystva-v-cherte-goroda">
										<img src="images/63ab271700ddf-e6d46dedaead616e5384b7b49ba4bced.png"
											class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
											alt="Бесплатная доставка устройства в черте города">
									</a><a rel="nofollow" href="/sales/besplatnaya-dostavka-ustroystva-v-cherte-goroda"
										class="titleSale no-click">Бесплатная доставка устройства в черте города</a>
									<a rel="nofollow" href="/sales/besplatnaya-dostavka-ustroystva-v-cherte-goroda"
										class="readmoreArtice">Подробнее</a>
								</article>

							</noindex>
						</div>





						<div class="articleItem">
							<noindex>
								<a rel="nofollow" class="support-link-sales"
									href="/sales/skidka-25-na-remont-pri-zakaze-s-sayta">
								</a>
								<article itemtype="https://schema.org/BlogPosting" itemscope="itemscope"><a
										rel="nofollow" class="support-link-sales"
										href="/sales/skidka-25-na-remont-pri-zakaze-s-sayta">
										<img src="images/63ab2734b9d3b-68e67a22b80557807a04ca03fd382a0e.png"
											class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
											alt="Скидка 25% на ремонт при заказе с сайта">
									</a><a rel="nofollow" href="/sales/skidka-25-na-remont-pri-zakaze-s-sayta"
										class="titleSale no-click">Скидка 25% на ремонт при заказе с сайта</a>
									<a rel="nofollow" href="/sales/skidka-25-na-remont-pri-zakaze-s-sayta"
										class="readmoreArtice">Подробнее</a>
								</article>

							</noindex>
						</div>



					</div>
				</div>
			</section>
			<div class="lastForm-wrapper">
				<div class="container">
					<div class="lastForm">
						<div class="lf-content">
							<div class="lfTitle">Оставьте заявку на ремонт</div>
							<p class="lfText">Мы выполним ремонт любой степени сложности, работоспособность ваших
								устройств будет восстановлена грамотными сервисными инженерами в максимально короткие
								сроки.</p>
							<form>
								<input type="text" inputmode="tel" name="phone" class="msPhone"
									placeholder="+7 (9__) ___-__-__">
								<input type="submit" value="Отправить заявку" class="msSubmit" disabled="disabled">
							</form>
							<div class="success"></div>
							<p class="confrm form-mt-s">Отправляя данную форму, Вы соглашаетесь с <a
									href="/privacy-policy">политикой конфиденциальности</a> нашего сайта</p>
						</div>
						<img src="images/endform.png" class="enPhoneImg">
					</div>

				</div>
			</div>
			<section class="stepItem-section">
				<div class="container">



					<h2 class="stepTitle">Делаем ремонт качественно и в максимально короткие сроки</h2>
					<div class="stepDiv">
						<p class="paragraph">Это возможно благодаря тому, что на нашем складе имеются все необходимые
							детали, запчасти и расходники, а наши сервисные инженеры постоянно повышают свою
							квалификацию, проходят обучение и переобучение. Мы имеем все возможности для того, чтобы
							выполнять оперативный высококлассный ремонт. Мастера, на счету которых сотни успешно
							отремонтированных устройств, строго придерживаются корпоративной культуры ремонта.</p>
						<p class="paragraph">ASC Service - это, в первую очередь, команда отлично знающих своё дело
							специалистов. Все они имеют высшее образование, обширный практический опыт, теоретические
							знания. Сегодня им под силу справиться с задачами любой сложности, любой направленности и
							любой специфики.</p>
					</div>




					<ul class="adsList-ul">
						<li>
							<div class="adsItem">Оставьте заявку на ремонт</div>
							<img src="images/step-01.png">
							<div class="circle"></div>
						</li>
						<li>
							<div class="adsItem">Менеджер рассчитает стоимость</div>
							<img src="images/step-02.png">
							<div class="circle"></div>
						</li>
						<li>
							<div class="adsItem">Вы сдадите устройство сами/курьером</div>
							<img src="images/step-03.png">
							<div class="circle"></div>
						</li>
						<li>
							<div class="adsItem">Мастер выполнит диагностику</div>
							<img src="images/step-04.png">
							<div class="circle"></div>
						</li>
						<li>
							<div class="adsItem">Получит согласие на ремонт</div>
							<img src="images/step-05.png">
							<div class="circle"></div>
						</li>
						<li>
							<div class="adsItem">Ваше устройство исправно!</div>
							<img src="images/step-06.png">
							<div class="circle"></div>
						</li>
					</ul>
				</div>
			</section>

			<section class="reviewsSection">
				<div class="container">
					<h2 class="titleH2">Популярные отзывы</h2>
					<div class="reviewsSlider swiper-slider">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="reviewHeader">
									<div class="reviewMedia">
										<img src="images/review-04.jpg">
									</div>
									<div class="rheaderContent">
										<div class="reviewTitle">Мне все понравилось</div>
										<div class="reviewAuthor">Леся О., 10/10/2021</div>
										<ul class="rating">
											<li></li>
											<li></li>
											<li></li>
											<li></li>
											<li></li>
										</ul>
									</div>
								</div>
								<div class="reviewContent">
									<p>Посещала данный сервис. Для замены стекла на телефоне. Приняли по записи быстро,
										мастер дал полную консультацию по вариантам ремонта и стоимости, произвели
										ремонт в течении 4-х часов, визуально все сделано хорошо.</p>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="reviewHeader">
									<div class="reviewMedia">
										<img src="images/review-03.jpg">
									</div>
									<div class="rheaderContent">
										<div class="reviewTitle">Благодарю!</div>
										<div class="reviewAuthor">Никита Л., 01/04/2021</div>
										<ul class="rating">
											<li></li>
											<li></li>
											<li></li>
											<li></li>
											<li></li>
										</ul>
									</div>
								</div>
								<div class="reviewContent">
									<p>Всем привет, хочу выразить благодарность ASC сервису за оперативный ремонт моего
										моноблока. Починили оперативно за адекватную сумму, за что большое спасибо.</p>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="reviewHeader">
									<div class="reviewMedia">
										<img src="images/review-02.jpg">
									</div>
									<div class="rheaderContent">
										<div class="reviewTitle">Рекомендую</div>
										<div class="reviewAuthor">Роман К., 13/03/2021</div>
										<ul class="rating">
											<li></li>
											<li></li>
											<li></li>
											<li></li>
											<li></li>
										</ul>
									</div>
								</div>
								<div class="reviewContent">
									<p>Изображение по краям ЖК-монитора стало еле-еле заметным. Самостоятельно настроить
										не смог, обратился в СЦ. Мастер заменил две ленты светодиодов в подсветке
										монитора. Цена замены - не большая. Изображение - отличное. Ремонтом очень
										доволен. Огромное спасибо мастеру за помощь.</p>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="reviewHeader">
									<div class="reviewMedia">
										<img src="images/review-01.jpg">
									</div>
									<div class="rheaderContent">
										<div class="reviewTitle">Спасибо за работу!</div>
										<div class="reviewAuthor">Анна О., 25/09/2021</div>
										<ul class="rating">
											<li></li>
											<li></li>
											<li></li>
											<li></li>
											<li></li>
										</ul>
									</div>
								</div>
								<div class="reviewContent">
									<p>Благодарю за проделанную работу, отдельное спасибо руководителю отдела Дмитрию,
										помог принять правильное решение и грамотно проконсультировал. Спасли мой
										утопленный девайс в кратчайшие сроки. Удачи и процветания сервису!</p>
								</div>
							</div>
						</div>
					</div>
					<div class="reviewSilder-arrows">
						<div class="leftArrow arrow">
							<</div> <div class="rightArrow arrow">>
						</div>
					</div>
					<div class="reviewsSublay">
						<div class="rs-01"></div>
						<div class="rs-02"></div>
					</div>
				</div>
			</section>
			<div class="next-part">
				<div class="map">
					<!-- <span id="map"> -->

					<!-- </span> -->
				</div>
			</div>
		</main>
@endsection

@section('description', 'АСЦ — Срочный ремонт техники в Москве с бесплатной диагностикой  ✅ Гарантия до 3 лет. ✅ Получите скидку 25% при первом обращении!')
@section('keywords', 'ASC-Рем-Сервис, Сервис центр по срочному ремонту')
@section('title', 'Cервисный центр по ремонту цифровой техники в Москве 🚀 Федеральная сеть сервис центров ASC')