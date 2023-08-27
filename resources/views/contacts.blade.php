@extends('layouts.app')

@section('content')
<main class="pageWrapper">
			<div class="inside-page contacts-page">
				<div class="container">
					<div class="breadcrumbs prod-breads">

						<ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
							<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a href="/"
									itemprop="item"><span itemprop="name">🛠 Сервис-центр JSERVICE</span></a><span
									class="divider">/</span>
								<meta itemprop="position" content="1">
							</li>
							<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span span
									itemprop="name">Контакты</span>
								<meta itemprop="position" content="2">
							</li>
						</ol>
					</div>
					<h1 class="heading__title">Контакты</h1>
					<div class="contactContent" itemscope itemtype="http://schema.org/Organization">
						<span class="contacts-block__servicename" itemprop="name"
							style="font-size: 0">ASC-Service</span>
						<div class="prev-part">
							<ul class="listContacts">
								<li class="adressMain" itemprop="address" itemscope
									itemtype="//schema.org/PostalAddress">
									<img src="fonts/map-pin.svg">
									<div class="c-row">
										<span class="adressTitle" itemprop="addressLocality">г. Москва, Гарибальди,
											36</span>
										<p>Офис сервисного центра</p>
										<a class="domain-name" itemprop="url" href="https://asc-rem.ru"></a>
									</div>
								</li>
								<li class="adressMain" itemprop="address" itemscope
									itemtype="//schema.org/PostalAddress">
									<img src="fonts/map-pin.svg">

									<div class="c-row ur-adress-page-contact">
										<span class="adressTitle" itemprop="addressLocality">ООО "ОБКОМ"</span>
										<p><strong>ИНН:</strong> 7813305379</p>
										<p><strong>ОГРН:</strong> 1047855059603</p>
									</div>

								</li>
								<li class="phoneCont halfRow">
									<img src="fonts/phone-ic.svg">
									<div class="c-row">
										<div class="contactItem">
											<a class="phoneCont" href="tel:+74951625317"><span itemprop="telephone">+7
													(495) 162-53-17</span></a>
										</div>
										<span>горячая линия</span>
									</div>
								</li>
								<li class="clocksWork">
									<img src="fonts/time-ic.svg">
									<div class="c-row">
										<div>ежедневно с 10:00 до 20:00</div>
										<p class="works-desc">Приём заказов, онлайн и телефонные консультации, часы
											работы офиса</p>
									</div>
								</li>
							</ul>
						</div>

						<div class="next-part">
							<div class="map">
								<!-- <span id="map"> -->

								<!-- </span> -->
							</div>
						</div>

					</div>


					<!-- block city-branch -->


					<div class="city-branch">
						<div class="container">
							<h2 class="titleH2">Города, в которых у нас есть филиалы</h2>
							<div class="we_are">Офисы сервисных центров в других 26 городах</div>
						</div>

						<div class="container citys showMob_city">


							<div class="card-branch">
								<a href="https://brn.asc-rem.ru">
									<div class="bg-branch">
										<div class="city-branch-office">г. Барнаул</div>
										<div class="address-branch">
											<div class="icon-branch">
												<svg xmlns="http://www.w3.org/2000/svg" height="48"
													viewBox="0 96 960 960" width="48">
													<path
														d="M370 606V421l110-73 110 73v185h-60V486H430v120h-60Zm110 291q133-121 196.5-219.5T740 504q0-117.79-75.292-192.895Q589.417 236 480 236t-184.708 75.105Q220 386.21 220 504q0 75 65 173.5T480 897Zm0 79Q319 839 239.5 721.5T160 504q0-150 96.5-239T480 176q127 0 223.5 89T800 504q0 100-79.5 217.5T480 976Z" />
												</svg>
											</div>
											<div>пр-кт Ленина, д. 39</div>
										</div>
										<span>Ежедневно, с 10:00 до 20:00</span>
									</div>
								</a>
							</div>


							<div class="card-branch">
								<a href="https://vlg.asc-rem.ru">
									<div class="bg-branch">
										<div class="city-branch-office">г. Волгоград</div>
										<div class="address-branch">
											<div class="icon-branch">
												<svg xmlns="http://www.w3.org/2000/svg" height="48"
													viewBox="0 96 960 960" width="48">
													<path
														d="M370 606V421l110-73 110 73v185h-60V486H430v120h-60Zm110 291q133-121 196.5-219.5T740 504q0-117.79-75.292-192.895Q589.417 236 480 236t-184.708 75.105Q220 386.21 220 504q0 75 65 173.5T480 897Zm0 79Q319 839 239.5 721.5T160 504q0-150 96.5-239T480 176q127 0 223.5 89T800 504q0 100-79.5 217.5T480 976Z" />
												</svg>
											</div>
											<div>ул. Коммунистическая, д. 19д</div>
										</div>
										<span>Ежедневно с 10:00 до 20:00</span>
									</div>
								</a>
							</div>


							<div class="card-branch">
								<a href="https://vrn.asc-rem.ru">
									<div class="bg-branch">
										<div class="city-branch-office">г. Воронеж</div>
										<div class="address-branch">
											<div class="icon-branch">
												<svg xmlns="http://www.w3.org/2000/svg" height="48"
													viewBox="0 96 960 960" width="48">
													<path
														d="M370 606V421l110-73 110 73v185h-60V486H430v120h-60Zm110 291q133-121 196.5-219.5T740 504q0-117.79-75.292-192.895Q589.417 236 480 236t-184.708 75.105Q220 386.21 220 504q0 75 65 173.5T480 897Zm0 79Q319 839 239.5 721.5T160 504q0-150 96.5-239T480 176q127 0 223.5 89T800 504q0 100-79.5 217.5T480 976Z" />
												</svg>
											</div>
											<div>ул. 9го Января, д. 36/1</div>
										</div>
										<span>Ежедневно, с 10:00 до 20:00</span>
									</div>
								</a>
							</div>


							<div class="card-branch">
								<a href="https://ekb.asc-rem.ru">
									<div class="bg-branch">
										<div class="city-branch-office">г. Екатеринбург</div>
										<div class="address-branch">
											<div class="icon-branch">
												<svg xmlns="http://www.w3.org/2000/svg" height="48"
													viewBox="0 96 960 960" width="48">
													<path
														d="M370 606V421l110-73 110 73v185h-60V486H430v120h-60Zm110 291q133-121 196.5-219.5T740 504q0-117.79-75.292-192.895Q589.417 236 480 236t-184.708 75.105Q220 386.21 220 504q0 75 65 173.5T480 897Zm0 79Q319 839 239.5 721.5T160 504q0-150 96.5-239T480 176q127 0 223.5 89T800 504q0 100-79.5 217.5T480 976Z" />
												</svg>
											</div>
											<div>пр-кт. Ленина, д. 8</div>
										</div>
										<span>Ежедневно с 10:00 до 20:00</span>
									</div>
								</a>
							</div>


							<div class="card-branch">
								<a href="https://izh.asc-rem.ru">
									<div class="bg-branch">
										<div class="city-branch-office">г. Ижевск</div>
										<div class="address-branch">
											<div class="icon-branch">
												<svg xmlns="http://www.w3.org/2000/svg" height="48"
													viewBox="0 96 960 960" width="48">
													<path
														d="M370 606V421l110-73 110 73v185h-60V486H430v120h-60Zm110 291q133-121 196.5-219.5T740 504q0-117.79-75.292-192.895Q589.417 236 480 236t-184.708 75.105Q220 386.21 220 504q0 75 65 173.5T480 897Zm0 79Q319 839 239.5 721.5T160 504q0-150 96.5-239T480 176q127 0 223.5 89T800 504q0 100-79.5 217.5T480 976Z" />
												</svg>
											</div>
											<div>ул. К. Маркса, д. 218</div>
										</div>
										<span>Ежедневно, с 10:00 до 20:00</span>
									</div>
								</a>
							</div>


							<div class="card-branch">
								<a href="https://irk.asc-rem.ru">
									<div class="bg-branch">
										<div class="city-branch-office">г. Иркутск</div>
										<div class="address-branch">
											<div class="icon-branch">
												<svg xmlns="http://www.w3.org/2000/svg" height="48"
													viewBox="0 96 960 960" width="48">
													<path
														d="M370 606V421l110-73 110 73v185h-60V486H430v120h-60Zm110 291q133-121 196.5-219.5T740 504q0-117.79-75.292-192.895Q589.417 236 480 236t-184.708 75.105Q220 386.21 220 504q0 75 65 173.5T480 897Zm0 79Q319 839 239.5 721.5T160 504q0-150 96.5-239T480 176q127 0 223.5 89T800 504q0 100-79.5 217.5T480 976Z" />
												</svg>
											</div>
											<div>ул. Седова, д. 42/2</div>
										</div>
										<span>Ежедневно, с 10:00 до 20:00</span>
									</div>
								</a>
							</div>


							<div class="card-branch">
								<a href="https://kzn.asc-rem.ru">
									<div class="bg-branch">
										<div class="city-branch-office">г. Казань</div>
										<div class="address-branch">
											<div class="icon-branch">
												<svg xmlns="http://www.w3.org/2000/svg" height="48"
													viewBox="0 96 960 960" width="48">
													<path
														d="M370 606V421l110-73 110 73v185h-60V486H430v120h-60Zm110 291q133-121 196.5-219.5T740 504q0-117.79-75.292-192.895Q589.417 236 480 236t-184.708 75.105Q220 386.21 220 504q0 75 65 173.5T480 897Zm0 79Q319 839 239.5 721.5T160 504q0-150 96.5-239T480 176q127 0 223.5 89T800 504q0 100-79.5 217.5T480 976Z" />
												</svg>
											</div>
											<div>ул. Николая Ершова, д. 1А</div>
										</div>
										<span>Ежедневно с 10:00 до 20:00</span>
									</div>
								</a>
							</div>


							<div class="card-branch">
								<a href="https://kir.asc-rem.ru">
									<div class="bg-branch">
										<div class="city-branch-office">г. Киров</div>
										<div class="address-branch">
											<div class="icon-branch">
												<svg xmlns="http://www.w3.org/2000/svg" height="48"
													viewBox="0 96 960 960" width="48">
													<path
														d="M370 606V421l110-73 110 73v185h-60V486H430v120h-60Zm110 291q133-121 196.5-219.5T740 504q0-117.79-75.292-192.895Q589.417 236 480 236t-184.708 75.105Q220 386.21 220 504q0 75 65 173.5T480 897Zm0 79Q319 839 239.5 721.5T160 504q0-150 96.5-239T480 176q127 0 223.5 89T800 504q0 100-79.5 217.5T480 976Z" />
												</svg>
											</div>
											<div>ул. Горького, 5А</div>
										</div>
										<span>Ежедневно, с 10:00 до 20:00</span>
									</div>
								</a>
							</div>


							<div class="card-branch">
								<a href="https://krd.asc-rem.ru">
									<div class="bg-branch">
										<div class="city-branch-office">г. Краснодар</div>
										<div class="address-branch">
											<div class="icon-branch">
												<svg xmlns="http://www.w3.org/2000/svg" height="48"
													viewBox="0 96 960 960" width="48">
													<path
														d="M370 606V421l110-73 110 73v185h-60V486H430v120h-60Zm110 291q133-121 196.5-219.5T740 504q0-117.79-75.292-192.895Q589.417 236 480 236t-184.708 75.105Q220 386.21 220 504q0 75 65 173.5T480 897Zm0 79Q319 839 239.5 721.5T160 504q0-150 96.5-239T480 176q127 0 223.5 89T800 504q0 100-79.5 217.5T480 976Z" />
												</svg>
											</div>
											<div>Новокузнечная улица, 34/1</div>
										</div>
										<span>Ежедневно с 10:00 до 20:00</span>
									</div>
								</a>
							</div>


							<div class="card-branch">
								<a href="https://krn.asc-rem.ru">
									<div class="bg-branch">
										<div class="city-branch-office">г. Красноярск</div>
										<div class="address-branch">
											<div class="icon-branch">
												<svg xmlns="http://www.w3.org/2000/svg" height="48"
													viewBox="0 96 960 960" width="48">
													<path
														d="M370 606V421l110-73 110 73v185h-60V486H430v120h-60Zm110 291q133-121 196.5-219.5T740 504q0-117.79-75.292-192.895Q589.417 236 480 236t-184.708 75.105Q220 386.21 220 504q0 75 65 173.5T480 897Zm0 79Q319 839 239.5 721.5T160 504q0-150 96.5-239T480 176q127 0 223.5 89T800 504q0 100-79.5 217.5T480 976Z" />
												</svg>
											</div>
											<div>ул. Алексеева, д. 49</div>
										</div>
										<span>Ежедневно, с 10:00 до 20:00</span>
									</div>
								</a>
							</div>


							<div class="card-branch">
								<a href="https://nnv.asc-rem.ru">
									<div class="bg-branch">
										<div class="city-branch-office">г. Нижний Новгород</div>
										<div class="address-branch">
											<div class="icon-branch">
												<svg xmlns="http://www.w3.org/2000/svg" height="48"
													viewBox="0 96 960 960" width="48">
													<path
														d="M370 606V421l110-73 110 73v185h-60V486H430v120h-60Zm110 291q133-121 196.5-219.5T740 504q0-117.79-75.292-192.895Q589.417 236 480 236t-184.708 75.105Q220 386.21 220 504q0 75 65 173.5T480 897Zm0 79Q319 839 239.5 721.5T160 504q0-150 96.5-239T480 176q127 0 223.5 89T800 504q0 100-79.5 217.5T480 976Z" />
												</svg>
											</div>
											<div>Малая Покровская, 24/6</div>
										</div>
										<span>ежедневно с 10:00 до 20:00</span>
									</div>
								</a>
							</div>


							<div class="card-branch">
								<a href="https://nsk.asc-rem.ru">
									<div class="bg-branch">
										<div class="city-branch-office">г. Новосибирск</div>
										<div class="address-branch">
											<div class="icon-branch">
												<svg xmlns="http://www.w3.org/2000/svg" height="48"
													viewBox="0 96 960 960" width="48">
													<path
														d="M370 606V421l110-73 110 73v185h-60V486H430v120h-60Zm110 291q133-121 196.5-219.5T740 504q0-117.79-75.292-192.895Q589.417 236 480 236t-184.708 75.105Q220 386.21 220 504q0 75 65 173.5T480 897Zm0 79Q319 839 239.5 721.5T160 504q0-150 96.5-239T480 176q127 0 223.5 89T800 504q0 100-79.5 217.5T480 976Z" />
												</svg>
											</div>
											<div>Бориса Богаткова, 53</div>
										</div>
										<span>ежедневно с 10:00 до 20:00</span>
									</div>
								</a>
							</div>


							<div class="card-branch">
								<a href="https://oms.asc-rem.ru">
									<div class="bg-branch">
										<div class="city-branch-office">г. Омск</div>
										<div class="address-branch">
											<div class="icon-branch">
												<svg xmlns="http://www.w3.org/2000/svg" height="48"
													viewBox="0 96 960 960" width="48">
													<path
														d="M370 606V421l110-73 110 73v185h-60V486H430v120h-60Zm110 291q133-121 196.5-219.5T740 504q0-117.79-75.292-192.895Q589.417 236 480 236t-184.708 75.105Q220 386.21 220 504q0 75 65 173.5T480 897Zm0 79Q319 839 239.5 721.5T160 504q0-150 96.5-239T480 176q127 0 223.5 89T800 504q0 100-79.5 217.5T480 976Z" />
												</svg>
											</div>
											<div>ул. Щербанёва, д. 25</div>
										</div>
										<span>Ежедневно с 10:00 до 20:00</span>
									</div>
								</a>
							</div>


							<div class="card-branch">
								<a href="https://prm.asc-rem.ru">
									<div class="bg-branch">
										<div class="city-branch-office">г. Пермь</div>
										<div class="address-branch">
											<div class="icon-branch">
												<svg xmlns="http://www.w3.org/2000/svg" height="48"
													viewBox="0 96 960 960" width="48">
													<path
														d="M370 606V421l110-73 110 73v185h-60V486H430v120h-60Zm110 291q133-121 196.5-219.5T740 504q0-117.79-75.292-192.895Q589.417 236 480 236t-184.708 75.105Q220 386.21 220 504q0 75 65 173.5T480 897Zm0 79Q319 839 239.5 721.5T160 504q0-150 96.5-239T480 176q127 0 223.5 89T800 504q0 100-79.5 217.5T480 976Z" />
												</svg>
											</div>
											<div>ул. Максима Горького, д. 34</div>
										</div>
										<span>Ежедневно, с 10:00 до 20:00</span>
									</div>
								</a>
							</div>


							<div class="card-branch">
								<a href="https://rnd.asc-rem.ru">
									<div class="bg-branch">
										<div class="city-branch-office">г. Ростов-на-Дону</div>
										<div class="address-branch">
											<div class="icon-branch">
												<svg xmlns="http://www.w3.org/2000/svg" height="48"
													viewBox="0 96 960 960" width="48">
													<path
														d="M370 606V421l110-73 110 73v185h-60V486H430v120h-60Zm110 291q133-121 196.5-219.5T740 504q0-117.79-75.292-192.895Q589.417 236 480 236t-184.708 75.105Q220 386.21 220 504q0 75 65 173.5T480 897Zm0 79Q319 839 239.5 721.5T160 504q0-150 96.5-239T480 176q127 0 223.5 89T800 504q0 100-79.5 217.5T480 976Z" />
												</svg>
											</div>
											<div>пер. Малый, 19</div>
										</div>
										<span>ежедневно с 10:00 до 20:00</span>
									</div>
								</a>
							</div>


							<div class="card-branch">
								<a href="https://smr.asc-rem.ru">
									<div class="bg-branch">
										<div class="city-branch-office">г. Самара</div>
										<div class="address-branch">
											<div class="icon-branch">
												<svg xmlns="http://www.w3.org/2000/svg" height="48"
													viewBox="0 96 960 960" width="48">
													<path
														d="M370 606V421l110-73 110 73v185h-60V486H430v120h-60Zm110 291q133-121 196.5-219.5T740 504q0-117.79-75.292-192.895Q589.417 236 480 236t-184.708 75.105Q220 386.21 220 504q0 75 65 173.5T480 897Zm0 79Q319 839 239.5 721.5T160 504q0-150 96.5-239T480 176q127 0 223.5 89T800 504q0 100-79.5 217.5T480 976Z" />
												</svg>
											</div>
											<div>ул. Московское шоссе, д. 55</div>
										</div>
										<span>Ежедневно с 10:00 до 20:00</span>
									</div>
								</a>
							</div>


							<div class="card-branch">
								<a href="https://spb.asc-rem.ru">
									<div class="bg-branch">
										<div class="city-branch-office">г. Санкт-Петербург</div>
										<div class="address-branch">
											<div class="icon-branch">
												<svg xmlns="http://www.w3.org/2000/svg" height="48"
													viewBox="0 96 960 960" width="48">
													<path
														d="M370 606V421l110-73 110 73v185h-60V486H430v120h-60Zm110 291q133-121 196.5-219.5T740 504q0-117.79-75.292-192.895Q589.417 236 480 236t-184.708 75.105Q220 386.21 220 504q0 75 65 173.5T480 897Zm0 79Q319 839 239.5 721.5T160 504q0-150 96.5-239T480 176q127 0 223.5 89T800 504q0 100-79.5 217.5T480 976Z" />
												</svg>
											</div>
											<div>Казанская, 29</div>
										</div>
										<span>ежедневно с 10:00 до 20:00</span>
									</div>
								</a>
							</div>


							<div class="card-branch">
								<a href="https://srt.asc-rem.ru">
									<div class="bg-branch">
										<div class="city-branch-office">г. Саратов</div>
										<div class="address-branch">
											<div class="icon-branch">
												<svg xmlns="http://www.w3.org/2000/svg" height="48"
													viewBox="0 96 960 960" width="48">
													<path
														d="M370 606V421l110-73 110 73v185h-60V486H430v120h-60Zm110 291q133-121 196.5-219.5T740 504q0-117.79-75.292-192.895Q589.417 236 480 236t-184.708 75.105Q220 386.21 220 504q0 75 65 173.5T480 897Zm0 79Q319 839 239.5 721.5T160 504q0-150 96.5-239T480 176q127 0 223.5 89T800 504q0 100-79.5 217.5T480 976Z" />
												</svg>
											</div>
											<div>ул. Чернышевского, д. 60/62</div>
										</div>
										<span>Ежедневно, с 10:00 до 20:00</span>
									</div>
								</a>
							</div>


							<div class="card-branch">
								<a href="https://tol.asc-rem.ru">
									<div class="bg-branch">
										<div class="city-branch-office">г. Тольятти</div>
										<div class="address-branch">
											<div class="icon-branch">
												<svg xmlns="http://www.w3.org/2000/svg" height="48"
													viewBox="0 96 960 960" width="48">
													<path
														d="M370 606V421l110-73 110 73v185h-60V486H430v120h-60Zm110 291q133-121 196.5-219.5T740 504q0-117.79-75.292-192.895Q589.417 236 480 236t-184.708 75.105Q220 386.21 220 504q0 75 65 173.5T480 897Zm0 79Q319 839 239.5 721.5T160 504q0-150 96.5-239T480 176q127 0 223.5 89T800 504q0 100-79.5 217.5T480 976Z" />
												</svg>
											</div>
											<div>ул. Победы, д. 72</div>
										</div>
										<span>Ежедневно, с 10:00 до 20:00</span>
									</div>
								</a>
							</div>


							<div class="card-branch">
								<a href="https://tms.asc-rem.ru">
									<div class="bg-branch">
										<div class="city-branch-office">г. Томск</div>
										<div class="address-branch">
											<div class="icon-branch">
												<svg xmlns="http://www.w3.org/2000/svg" height="48"
													viewBox="0 96 960 960" width="48">
													<path
														d="M370 606V421l110-73 110 73v185h-60V486H430v120h-60Zm110 291q133-121 196.5-219.5T740 504q0-117.79-75.292-192.895Q589.417 236 480 236t-184.708 75.105Q220 386.21 220 504q0 75 65 173.5T480 897Zm0 79Q319 839 239.5 721.5T160 504q0-150 96.5-239T480 176q127 0 223.5 89T800 504q0 100-79.5 217.5T480 976Z" />
												</svg>
											</div>
											<div>ул. Гагарина, д. 7</div>
										</div>
										<span>Ежедневно, с 10:00 до 20:00</span>
									</div>
								</a>
							</div>


							<div class="card-branch">
								<a href="https://tmn.asc-rem.ru">
									<div class="bg-branch">
										<div class="city-branch-office">г. Тюмень</div>
										<div class="address-branch">
											<div class="icon-branch">
												<svg xmlns="http://www.w3.org/2000/svg" height="48"
													viewBox="0 96 960 960" width="48">
													<path
														d="M370 606V421l110-73 110 73v185h-60V486H430v120h-60Zm110 291q133-121 196.5-219.5T740 504q0-117.79-75.292-192.895Q589.417 236 480 236t-184.708 75.105Q220 386.21 220 504q0 75 65 173.5T480 897Zm0 79Q319 839 239.5 721.5T160 504q0-150 96.5-239T480 176q127 0 223.5 89T800 504q0 100-79.5 217.5T480 976Z" />
												</svg>
											</div>
											<div>ул. Республики, д. 59</div>
										</div>
										<span>Ежедневно, с 10:00 до 20:00</span>
									</div>
								</a>
							</div>


							<div class="card-branch">
								<a href="https://uly.asc-rem.ru">
									<div class="bg-branch">
										<div class="city-branch-office">г. Ульяновск</div>
										<div class="address-branch">
											<div class="icon-branch">
												<svg xmlns="http://www.w3.org/2000/svg" height="48"
													viewBox="0 96 960 960" width="48">
													<path
														d="M370 606V421l110-73 110 73v185h-60V486H430v120h-60Zm110 291q133-121 196.5-219.5T740 504q0-117.79-75.292-192.895Q589.417 236 480 236t-184.708 75.105Q220 386.21 220 504q0 75 65 173.5T480 897Zm0 79Q319 839 239.5 721.5T160 504q0-150 96.5-239T480 176q127 0 223.5 89T800 504q0 100-79.5 217.5T480 976Z" />
												</svg>
											</div>
											<div>ул. Гончарова, ж. 27</div>
										</div>
										<span>Ежедневно, с 10:00 до 20:00</span>
									</div>
								</a>
							</div>


							<div class="card-branch">
								<a href="https://ufa.asc-rem.ru">
									<div class="bg-branch">
										<div class="city-branch-office">г. Уфа</div>
										<div class="address-branch">
											<div class="icon-branch">
												<svg xmlns="http://www.w3.org/2000/svg" height="48"
													viewBox="0 96 960 960" width="48">
													<path
														d="M370 606V421l110-73 110 73v185h-60V486H430v120h-60Zm110 291q133-121 196.5-219.5T740 504q0-117.79-75.292-192.895Q589.417 236 480 236t-184.708 75.105Q220 386.21 220 504q0 75 65 173.5T480 897Zm0 79Q319 839 239.5 721.5T160 504q0-150 96.5-239T480 176q127 0 223.5 89T800 504q0 100-79.5 217.5T480 976Z" />
												</svg>
											</div>
											<div>Худайбердина, 28к1</div>
										</div>
										<span>Ежедневно, с 10:00 до 20:00</span>
									</div>
								</a>
							</div>


							<div class="card-branch">
								<a href="https://hbr.asc-rem.ru">
									<div class="bg-branch">
										<div class="city-branch-office">г. Хабаровск</div>
										<div class="address-branch">
											<div class="icon-branch">
												<svg xmlns="http://www.w3.org/2000/svg" height="48"
													viewBox="0 96 960 960" width="48">
													<path
														d="M370 606V421l110-73 110 73v185h-60V486H430v120h-60Zm110 291q133-121 196.5-219.5T740 504q0-117.79-75.292-192.895Q589.417 236 480 236t-184.708 75.105Q220 386.21 220 504q0 75 65 173.5T480 897Zm0 79Q319 839 239.5 721.5T160 504q0-150 96.5-239T480 176q127 0 223.5 89T800 504q0 100-79.5 217.5T480 976Z" />
												</svg>
											</div>
											<div>ул. Пушкина, д. 54</div>
										</div>
										<span>Ежедневно, с 10:00 до 20:00</span>
									</div>
								</a>
							</div>


							<div class="card-branch">
								<a href="https://chl.asc-rem.ru">
									<div class="bg-branch">
										<div class="city-branch-office">г. Челябинск</div>
										<div class="address-branch">
											<div class="icon-branch">
												<svg xmlns="http://www.w3.org/2000/svg" height="48"
													viewBox="0 96 960 960" width="48">
													<path
														d="M370 606V421l110-73 110 73v185h-60V486H430v120h-60Zm110 291q133-121 196.5-219.5T740 504q0-117.79-75.292-192.895Q589.417 236 480 236t-184.708 75.105Q220 386.21 220 504q0 75 65 173.5T480 897Zm0 79Q319 839 239.5 721.5T160 504q0-150 96.5-239T480 176q127 0 223.5 89T800 504q0 100-79.5 217.5T480 976Z" />
												</svg>
											</div>
											<div>пр-т. Свердловский, 62</div>
										</div>
										<span>ежедневно с 10:00 до 20:00</span>
									</div>
								</a>
							</div>


							<div class="card-branch">
								<a href="https://yrs.asc-rem.ru">
									<div class="bg-branch">
										<div class="city-branch-office">г. Ярославль</div>
										<div class="address-branch">
											<div class="icon-branch">
												<svg xmlns="http://www.w3.org/2000/svg" height="48"
													viewBox="0 96 960 960" width="48">
													<path
														d="M370 606V421l110-73 110 73v185h-60V486H430v120h-60Zm110 291q133-121 196.5-219.5T740 504q0-117.79-75.292-192.895Q589.417 236 480 236t-184.708 75.105Q220 386.21 220 504q0 75 65 173.5T480 897Zm0 79Q319 839 239.5 721.5T160 504q0-150 96.5-239T480 176q127 0 223.5 89T800 504q0 100-79.5 217.5T480 976Z" />
												</svg>
											</div>
											<div>ул. Свободы, д. 11/37</div>
										</div>
										<span>Ежедневно, с 10:00 до 20:00</span>
									</div>
								</a>
							</div>
							<button class="btn-all-citys">Посмотреть все города</button>

						</div>

					</div>
					<!-- block city-branch -->


					<div class="archiveEndform">
						<div class="lastForm">
							<div class="lf-content">
								<div class="lfTitle">Оставьте заявку на ремонт</div>
								<p class="lfText">Мы выполним ремонт любой степени сложности, работоспособность ваших
									устройств будет восстановлена грамотными сервисными инженерами в максимально
									короткие сроки.</p>
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
			</div>
		</main>

@endsection

@section('description', 'АСЦ — Срочный ремонт техники в Москве с бесплатной диагностикой  ✅ Гарантия до 3 лет. ✅ Получите скидку 25% при первом обращении!')
@section('keywords', 'ASC-Рем-Сервис, Сервис центр по срочному ремонту')
@section('title', 'Cервисный центр по ремонту цифровой техники в Москве 🚀 Федеральная сеть сервис центров ASC')