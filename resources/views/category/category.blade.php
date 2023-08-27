@extends('layouts.app')

@section('content')
<main class="pageWrapper">

<div class="archiveWrapper pageCat">
    <div class="container">
        <div class="breadcrumbs prod-breads">

            <ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a href="/"
                        itemprop="item"><span itemprop="name">🛠 Сервис-центр JSERVICE</span></a><span
                        class="divider">/</span>
                    <meta itemprop="position" content="1">
                </li>
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span
                        itemprop="name">Ремонт бытовой техники</span>
                    <meta itemprop="position" content="2">
                </li>
            </ol>
        </div>
        <div class="offer-part brand-offer">
            <div class="catalog-heading brands-heading">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="catalog-heading__title brands-heading__title">Ремонт бытовой техники в
                            Москве</h1>
                        <div class="offer-part__info">
                            <div class="offer-part__item ruble">
                                <div class="offer-part__item-icon">
                                    <svg width="800px" height="800px" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="12" cy="12" r="10" stroke="#1C274C"
                                            stroke-width="1.5" />
                                        <path d="M9 14H12" stroke="#1C274C" stroke-width="1.5"
                                            stroke-linecap="round" />
                                        <path
                                            d="M10 12V8.2C10 8.0142 10 7.9213 10.0123 7.84357C10.0801 7.41567 10.4157 7.08008 10.8436 7.01231C10.9213 7 11.0142 7 11.2 7H13.5C14.8807 7 16 8.11929 16 9.5C16 10.8807 14.8807 12 13.5 12H10ZM10 12V17M10 12H9"
                                            stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" />
                                    </svg>
                                </div>
                                <div class="offer-part__item-label">Стоимость:</div>
                                <div class="offer-part__item-text">от 350 руб.</div>
                            </div>
                            <div class="offer-part__item">
                                <div class="offer-part__item-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" height="37"
                                        fill="var(--violet)">
                                        <path
                                            d="M11 40.485V47H7v2h36v-2h-4v-6.515a6.954 6.954 0 0 0-2.051-4.95L26.414 25l10.535-10.535A6.955 6.955 0 0 0 39 9.515V3h4V1H7v2h4v6.515c0 1.871.729 3.628 2.051 4.95L23.586 25 13.051 35.535A6.955 6.955 0 0 0 11 40.485zm3.465-27.435A4.967 4.967 0 0 1 13 9.515V3h24v6.515a4.969 4.969 0 0 1-1.465 3.536L25 23.586 14.465 13.05zM25 26.414 35.535 36.95A4.967 4.967 0 0 1 37 40.485V47H13v-6.515c0-1.336.521-2.592 1.465-3.536L25 26.414z" />
                                    </svg>
                                </div>
                                <div class="offer-part__item-label">Время ремонта:</div>
                                <div class="offer-part__item-text">от 20 мин</div>
                            </div>
                            <div class="offer-part__item offer-part__item-price">
                                <div class="offer-part__item-icon">
                                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M24.8905 31.0199C28.2757 31.0199 31.0199 28.2757 31.0199 24.8905C31.0199 21.5054 28.2757 18.7612 24.8905 18.7612C21.5054 18.7612 18.7612 21.5054 18.7612 24.8905C18.7612 28.2757 21.5054 31.0199 24.8905 31.0199Z"
                                            stroke="var(--violet)" stroke-width="2.18905"
                                            stroke-miterlimit="10" />
                                        <path
                                            d="M47 27.7363V22.2637L40.2139 20.2935C39.995 19.4179 39.5572 18.5423 39.1194 17.6667L42.6219 11.3184L38.6816 7.37811L32.3333 10.8806C31.4577 10.4428 30.5821 10.2239 29.7065 9.78607L27.7363 3H22.2637L20.2935 9.78607C19.4179 10.005 18.5423 10.4428 17.6667 10.8806L11.3184 7.37811L7.37811 11.3184L10.8806 17.6667C10.4428 18.5423 10.005 19.4179 9.78607 20.2935L3 22.2637V27.7363L9.78607 29.7065C10.005 30.5821 10.4428 31.4577 10.8806 32.3333L7.37811 38.4627L11.3184 42.403L17.4478 38.9005C18.3234 39.3383 19.199 39.7761 20.0746 39.995L22.0448 46.7811H27.5174L29.4876 39.995C30.3632 39.7761 31.2388 39.3383 32.1144 38.9005L38.2438 42.403L42.1841 38.4627L38.9005 32.3333C39.3383 31.4577 39.7761 30.5821 39.995 29.7065L47 27.7363Z"
                                            stroke="var(--violet)" stroke-width="2.18905"
                                            stroke-miterlimit="10" />
                                    </svg>
                                </div>
                                <div class="offer-part__item-label">Диагностика:</div>
                                <div class="offer-part__item-text">бесплатно</div>
                            </div>
                        </div>
                        <div class="offer-part__text">

                            Ремонт бытовой техники в сервисном центре ASC в Москве — это гарантия качества и
                            надежности. Мы знаем, насколько важен каждый элемент вашей бытовой техники, и
                            поэтому используем только оригинальные запасные части. Опытные мастера проведут
                            диагностику и оперативно устранят любую поломку, будь то стиральная машина,
                            холодильник или пылесос. Ваша техника будет работать как новая!

                            <p>Обратитесь к нам уже сегодня!</p>
                        </div>
                        <div class="offer-part__contacts">
                            <div class="offer-part__phone">
                                <div class="offer-part__phone-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" height="24"
                                        fill="var(--violet)">
                                        <path
                                            d="M23.45 20.93a3 3 0 0 0-4.25 0l-1.45 1.45a26.14 26.14 0 0 1-4.51-3.62 26.62 26.62 0 0 1-3.62-4.51l1.45-1.45a3 3 0 0 0 0-4.25L8.24 5.73a2.93 2.93 0 0 0-2.11-.88h0A3 3 0 0 0 4 5.73L2.64 7.08A6.37 6.37 0 0 0 1 12.33c.32 3.75 2.78 8.26 6.57 12.06S15.92 30.64 19.67 31a7.87 7.87 0 0 0 .84 0 6.07 6.07 0 0 0 4.41-1.64L26.27 28a3 3 0 0 0 .88-2.13 2.93 2.93 0 0 0-.88-2.11zm1.41 5.66L23.5 27.94a4.57 4.57 0 0 1-3.66 1c-3.25-.28-7.39-2.58-10.81-6S3.31 15.41 3 12.16a4.53 4.53 0 0 1 1-3.66L5.41 7.14a1 1 0 0 1 .71-.29h0a1 1 0 0 1 .71.29L9.66 10a1 1 0 0 1 0 1.41l-2 2a1 1 0 0 0-.16 1.21 27.49 27.49 0 0 0 4.33 5.58 27.49 27.49 0 0 0 5.58 4.33 1 1 0 0 0 1.21-.16l2-2a1 1 0 0 1 1.41 0l2.83 2.83h0a1 1 0 0 1 .29.71A1 1 0 0 1 24.86 26.59zM26.6 5.39A14.92 14.92 0 0 0 16 1a1 1 0 1 0 0 2A13 13 0 0 1 29 16.11a1 1 0 0 0 1 1h0a1 1 0 0 0 1-1A14.91 14.91 0 0 0 26.6 5.39z" />
                                        <path
                                            d="M20.91,11.11a6,6,0,0,1,1.77,4.31,1,1,0,0,0,1,1h0a1,1,0,0,0,1-1,8,8,0,0,0-8-8.1,1,1,0,1,0,0,2A6,6,0,0,1,20.91,11.11Z" />
                                    </svg>
                                </div>
                                <div class="offer-part__phone-content">
                                    <div class="offer-part__phone-label">Горячая линия:</div>
                                    <a class="offer-part__phone-number" href="tel:+74951625317">+7 (495)
                                        162-53-17</a>
                                </div>
                            </div>
                            <button class="primary-button offer-part__cb js-open-modal"
                                data-modal="2">Оставить заявку</button>
                        </div>
                    </div>
                    <div class="col-md-6" itemscope itemtype="http://schema.org/ImageObject">
                        <meta itemprop="name" content="Ремонт ">
                        <img class="b-img" itemprop="image" src="/images/no-img-no-ramka.png">
                        <meta itemprop="description"
                            content="Наша компания профессионально ремонтирует цифровую и компьютерную технику">
                    </div>
                </div>
            </div>
            <div class="mainAdvs mainAdvs__mini flex">
                <div class="mainAdvs-item">
                    <div class="maTitle">Удобное расположение в центре города</div>
                    <img src="/images/ad-1.png" class="maImg">
                </div>
                <div class="mainAdvs-item">
                    <div class="maTitle">Бесплатная диагностика вашего устройства</div>
                    <img src="/images/ad-2.png" class="maImg">
                </div>
                <div class="mainAdvs-item">
                    <div class="maTitle">Только качественные детали и запчасти</div>
                    <img src="/images/ad-3.png" class="maImg">
                </div>
                <div class="mainAdvs-item">
                    <div class="maTitle">Выгодный ремонт с гарантией</div>
                    <img src="/images/ad-4.png" class="maImg">
                </div>
            </div>

        </div>


        <section class="productCategories-section">
            <div class="container">
                <h2 class="titleH2">Ремонтируем</h2>
                <div class="mainCategoriesList-wrapper">
                    <div class="mainCategoriesList-wrapper__item">
                        <a href="/remont-kofemashin">
                            <img src="/images/small_h130_62b4cc4ea7d76-a508abe7f400fc6c98437cc61d15895a.png">
                            <h3 class="mainCategoriesList__title">Кофемашина</h3>
                        </a>
                    </div>
                    <div class="mainCategoriesList-wrapper__item">
                        <a href="/remont-robotov-pylesosov">
                            <img src="/images/small_h130_62b4cc3f586c9-3cf0ed50403b5312ee74d12747b8d098.png">
                            <h3 class="mainCategoriesList__title">Робот-пылесос</h3>
                        </a>
                    </div>
                    <div class="mainCategoriesList-wrapper__item">
                        <a href="/remont-parogeneratorov">
                            <img src="/images/small_h130_62b4cc298fb64-eb6fde0a170753f699967fb7b14a21ca.png">
                            <h3 class="mainCategoriesList__title">Отпариватель</h3>
                        </a>
                    </div>
                    <div class="mainCategoriesList-wrapper__item">
                        <a href="/remont-massazhnih-kresel">
                            <img src="/images/small_h130_6336cb2e61307-7770ee37e807cb26ff79a7b772ec370b.png">
                            <h3 class="mainCategoriesList__title">Массажное кресло</h3>
                        </a>
                    </div>
                </div>
            </div>
        </section>




        <div class="category-price-section" id="type-price">
            <h2 class="catalog-h2">Цены на ремонт бытовой техники</h2>
            <div class="repair-wrapper" itemscope itemtype="http://schema.org/Service">


                <div class="title-table">
                    Кофемашина </div>

                <div class="worksTable worksTable--closed">
                    <div class="tableHeading">
                        <div class="headCol clm-1">Вид ремонтных работ</div>
                        <div class="headCol clm-2 col-mob-hide">Стоимость</div>
                        <div class="headCol clm-3">Время</div>
                        <div class="headCol clm-4"></div>
                    </div>
                    <div class="tableBody" itemprop="offers" itemscope
                        itemtype="http://schema.org/AggregateOffer">


                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-kofemashin/diagnostika">
                                        <span itemprop="name">Диагностика</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost price-cost--free">Бесплатно</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 20 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-kofemashin/remont-materinskoy-platy">
                                        <span itemprop="name">Ремонт материнской платы</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">500</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 50 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-kofemashin/remont-pompy">
                                        <span itemprop="name">Ремонт помпы</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">350</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 30 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-kofemashin/remont-schetchika-vody">
                                        <span itemprop="name">Ремонт счетчика воды</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">300</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 50 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-kofemashin/remont-krana-para">
                                        <span itemprop="name">Ремонт крана пара</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">400</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 30 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-kofemashin/kompleksnaya-chistka">
                                        <span itemprop="name">Комплексная чистка</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">350</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 30 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-kofemashin/dekalcinaciya">
                                        <span itemprop="name">Декальцинация</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">400</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 30 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-kofemashin/remont-dvigatelya-kofemolki">
                                        <span itemprop="name">Ремонт двигателя кофемолки</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">500</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 50 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-kofemashin/remont-zhernovov-kofemolki">
                                        <span itemprop="name">Ремонт жерновов кофемолки</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">450</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 30 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-kofemashin/zamena-prokladok">
                                        <span itemprop="name">Замена прокладок</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">300</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 50 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-kofemashin/remont-kofemolki">
                                        <span itemprop="name">Ремонт кофемолки</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">400</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 30 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-kofemashin/remont-termobloka-parobloka">
                                        <span itemprop="name">Ремонт термоблока/пароблока</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">400</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 30 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-kofemashin/remont-zavarnogo-mehanizma">
                                        <span itemprop="name">Ремонт заварного механизма</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">300</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 50 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                    </div>
                    <style>
                        .price-cost:not(.price-cost--free)::after {
                            content: ' руб.';
                        }
                    </style>

                    <div class="worksTable__footer">
                        <div class="worksTable__footer__updated">Цены обновлены <span
                                class="worksTable__footer__updated--dashed">21 августа </span></div>
                        <img src="/fonts/payment.svg" class="worksTable__footer__payment">
                        <img src="/fonts/credit.svg" class="worksTable__footer__credit">
                    </div>
                </div>


                <div class="title-table">
                    Робот-пылесос </div>

                <div class="worksTable worksTable--closed">
                    <div class="tableHeading">
                        <div class="headCol clm-1">Вид ремонтных работ</div>
                        <div class="headCol clm-2 col-mob-hide">Стоимость</div>
                        <div class="headCol clm-3">Время</div>
                        <div class="headCol clm-4"></div>
                    </div>
                    <div class="tableBody" itemprop="offers" itemscope
                        itemtype="http://schema.org/AggregateOffer">


                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-robotov-pylesosov/diagnostika">
                                        <span itemprop="name">Диагностика</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost price-cost--free">Бесплатно</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 20 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-robotov-pylesosov/remont-dvigatelya">
                                        <span itemprop="name">Ремонт двигателя</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">1000</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 70 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-robotov-pylesosov/remont-cepi-pitaniya">
                                        <span itemprop="name">Ремонт цепи питания</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">600</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 60 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-robotov-pylesosov/remont-gidrosistemy">
                                        <span itemprop="name">Ремонт гидросистемы</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">1000</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 70 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-robotov-pylesosov/zamena-datchikov">
                                        <span itemprop="name">Замена датчиков</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">1200</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 30 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-robotov-pylesosov/ochistka-datchikov">
                                        <span itemprop="name">Очистка датчиков</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">750</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 80 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-robotov-pylesosov/kalibrovka">
                                        <span itemprop="name">Калибровка</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">650</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 80 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-robotov-pylesosov/zamena-materinskoy-platy">
                                        <span itemprop="name">Замена материнской платы</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">500</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 50 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-robotov-pylesosov/remont-materinskoy-platy">
                                        <span itemprop="name">Ремонт материнской платы</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">900</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 30 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-robotov-pylesosov/zamena-akkumulyatora">
                                        <span itemprop="name">Замена аккумулятора</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">350</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 30 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-robotov-pylesosov/vosstanovlenie-akkumulyatora">
                                        <span itemprop="name">Восстановление аккумулятора</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">650</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 80 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-robotov-pylesosov/zamena-komplekta-schetok">
                                        <span itemprop="name">Замена комплекта щеток</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">1500</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 80 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a
                                        href="/remont-robotov-pylesosov/zamena-datchikov-upravleniya-vysoty-dvizheniya">
                                        <span itemprop="name">Замена датчиков управления, высоты,
                                            движения</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">1250</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 70 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-robotov-pylesosov/vosstanovlenie-kolesa">
                                        <span itemprop="name">Восстановление колеса</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">400</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 30 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-robotov-pylesosov/profilakticheskaya-chistka">
                                        <span itemprop="name">Профилактическая чистка</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">650</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 80 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-robotov-pylesosov/remont-bloka-pitaniya">
                                        <span itemprop="name">Ремонт блока питания</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">800</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 60 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                    </div>
                    <style>
                        .price-cost:not(.price-cost--free)::after {
                            content: ' руб.';
                        }
                    </style>

                    <div class="worksTable__footer">
                        <div class="worksTable__footer__updated">Цены обновлены <span
                                class="worksTable__footer__updated--dashed">21 августа </span></div>
                        <img src="/fonts/payment.svg" class="worksTable__footer__payment">
                        <img src="/fonts/credit.svg" class="worksTable__footer__credit">
                    </div>
                </div>


                <div class="title-table">
                    Отпариватель </div>

                <div class="worksTable worksTable--closed">
                    <div class="tableHeading">
                        <div class="headCol clm-1">Вид ремонтных работ</div>
                        <div class="headCol clm-2 col-mob-hide">Стоимость</div>
                        <div class="headCol clm-3">Время</div>
                        <div class="headCol clm-4"></div>
                    </div>
                    <div class="tableBody" itemprop="offers" itemscope
                        itemtype="http://schema.org/AggregateOffer">


                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-parogeneratorov/diagnostika">
                                        <span itemprop="name">Диагностика</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost price-cost--free">Бесплатно</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 20 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-parogeneratorov/chistka-sistemy-generacii-para">
                                        <span itemprop="name">Чистка системы генерации пара</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">1500</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 80 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-parogeneratorov/zamena-pompy">
                                        <span itemprop="name">Замена помпы</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">1000</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 70 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-parogeneratorov/zamenit-uplotnitel-boylera">
                                        <span itemprop="name">Заменить уплотнитель бойлера</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">850</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 70 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-parogeneratorov/remont-materinskoy-platy">
                                        <span itemprop="name">Ремонт материнской платы</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">1200</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 30 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-parogeneratorov/zamenit-boyler">
                                        <span itemprop="name">Заменить бойлер</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">1400</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 40 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-parogeneratorov/zamena-termostata">
                                        <span itemprop="name">Замена термостата</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">700</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 60 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-parogeneratorov/zamena-nagrevatelnogo-elementa">
                                        <span itemprop="name">Замена нагревательного элемента</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">900</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 30 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-parogeneratorov/zamena-shnura-pitaniya">
                                        <span itemprop="name">Замена шнура питания</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">700</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 60 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a
                                        href="/remont-parogeneratorov/korpusnyy-remont-zamena-rezinok-krepleniy-knopok">
                                        <span itemprop="name">Корпусный ремонт (замена резинок, креплений,
                                            кнопок)</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">500</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 50 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-parogeneratorov/ochistka-podoshvy-utyuga">
                                        <span itemprop="name">Очистка подошвы утюга</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">550</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 90 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-parogeneratorov/zamena-paroklapana">
                                        <span itemprop="name">Замена пароклапана</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">700</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 60 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-parogeneratorov/remont-zamena-datchika-temperatury">
                                        <span itemprop="name">Ремонт/замена датчика температуры</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">700</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 60 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-parogeneratorov/zamena-klapana-davleniya">
                                        <span itemprop="name">Замена клапана давления</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">650</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 80 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-parogeneratorov/vosstanovlenie-elektroklapana">
                                        <span itemprop="name">Восстановление электроклапана</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">800</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 60 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-parogeneratorov/profilakticheskaya-chistka">
                                        <span itemprop="name">Профилактическая чистка</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">550</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 90 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                    </div>
                    <style>
                        .price-cost:not(.price-cost--free)::after {
                            content: ' руб.';
                        }
                    </style>

                    <div class="worksTable__footer">
                        <div class="worksTable__footer__updated">Цены обновлены <span
                                class="worksTable__footer__updated--dashed">21 августа </span></div>
                        <img src="/fonts/payment.svg" class="worksTable__footer__payment">
                        <img src="/fonts/credit.svg" class="worksTable__footer__credit">
                    </div>
                </div>


                <div class="title-table">
                    Массажное кресло </div>

                <div class="worksTable worksTable--closed">
                    <div class="tableHeading">
                        <div class="headCol clm-1">Вид ремонтных работ</div>
                        <div class="headCol clm-2 col-mob-hide">Стоимость</div>
                        <div class="headCol clm-3">Время</div>
                        <div class="headCol clm-4"></div>
                    </div>
                    <div class="tableBody" itemprop="offers" itemscope
                        itemtype="http://schema.org/AggregateOffer">


                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-massazhnih-kresel/diagnostika">
                                        <span itemprop="name">Диагностика</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost price-cost--free">Бесплатно</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 20 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-massazhnih-kresel/remont-podemnogo-mehanizma">
                                        <span itemprop="name">Ремонт подъемного механизма</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">1900</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 50 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-massazhnih-kresel/remont-osnovnogo-massazhnogo-bloka">
                                        <span itemprop="name">Ремонт основного массажного блока</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">3000</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 50 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-massazhnih-kresel/zamena-dvigatelya-podema-spuska">
                                        <span itemprop="name">Замена двигателя подъема/спуска</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">3500</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 40 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-massazhnih-kresel/zamena-osnovnogo-dvigatelya">
                                        <span itemprop="name">Замена основного двигателя</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">5000</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 60 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-massazhnih-kresel/zamena-pnevmokamery">
                                        <span itemprop="name">Замена пневмокамеры</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">700</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 60 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-massazhnih-kresel/zamena-zamka">
                                        <span itemprop="name">Замена замка</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">1300</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 80 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a
                                        href="/remont-massazhnih-kresel/remont-na-meste-bez-zameny-zapchastey">
                                        <span itemprop="name">Ремонт на месте без замены запчастей</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">1200</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 30 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-massazhnih-kresel/remont-mikro-lifta">
                                        <span itemprop="name">Ремонт микро-лифта</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">2500</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 80 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-massazhnih-kresel/proshivka">
                                        <span itemprop="name">Прошивка</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">800</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 60 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-massazhnih-kresel/remont-materinskoy-platy">
                                        <span itemprop="name">Ремонт материнской платы</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">4100</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 70 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-massazhnih-kresel/remont-bloka-pitaniya">
                                        <span itemprop="name">Ремонт блока питания</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">1500</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 80 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-massazhnih-kresel/zamena-bloka-pitaniya">
                                        <span itemprop="name">Замена блока питания</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">1200</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 30 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-massazhnih-kresel/remont-shuma-v-massazhnom-kresle">
                                        <span itemprop="name">Ремонт шума в массажном кресле</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">800</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 60 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-massazhnih-kresel/remont-mehanicheskih-neispravnostey">
                                        <span itemprop="name">Ремонт механических неисправностей</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">1600</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 40 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-massazhnih-kresel/remont-karkasa">
                                        <span itemprop="name">Ремонт каркаса</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">1500</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 80 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-massazhnih-kresel/remont-pnevmokamery">
                                        <span itemprop="name">Ремонт пневмокамеры</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">3900</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 80 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-massazhnih-kresel/remont-pnevmosistemy">
                                        <span itemprop="name">Ремонт пневмосистемы</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">1500</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 80 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-massazhnih-kresel/remont-pulta-upravleniya">
                                        <span itemprop="name">Ремонт пульта управления</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">1200</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 30 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-massazhnih-kresel/remont-elektroprovodki">
                                        <span itemprop="name">Ремонт электропроводки</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">900</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 30 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-massazhnih-kresel/remont-skanera">
                                        <span itemprop="name">Ремонт сканера</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">1800</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 60 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-massazhnih-kresel/remont-kupyuropriemnika">
                                        <span itemprop="name">Ремонт купюроприемника</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">700</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 60 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-massazhnih-kresel/zamena-setevogo-transformatora">
                                        <span itemprop="name">Замена сетевого трансформатора</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">4500</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 80 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-massazhnih-kresel/zamena-vtorichnogo-transformatora">
                                        <span itemprop="name">Замена вторичного трансформатора</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">2200</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 30 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-massazhnih-kresel/remont-provodki">
                                        <span itemprop="name">Ремонт проводки</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">2400</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 60 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a
                                        href="/remont-massazhnih-kresel/remont-uzla-protyazhki-kupyuropriemnika">
                                        <span itemprop="name">Ремонт узла протяжки купюроприемника</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">800</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 60 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-massazhnih-kresel/remont-skanera-kupyuropriemnika">
                                        <span itemprop="name">Ремонт сканера купюроприемника</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">1900</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 50 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-massazhnih-kresel/polnoe-to">
                                        <span itemprop="name">Полное ТО</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">1400</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 40 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                        <div class="contentRow" itemprop="offers" itemscope
                            itemtype="http://schema.org/Offer">
                            <div class="itemCol clm-1">
                                <div class="fix-title fix-width" rel="bookmark">
                                    <a href="/remont-massazhnih-kresel/zamena-skanera">
                                        <span itemprop="name">Замена сканера</span>
                                    </a>
                                </div>
                            </div>
                            <div class="itemCol clm-2 col-mob-hide">
                                <div class="price-cost">3800</div>
                            </div>
                            <div class="itemCol clm-3">
                                <div class itemprop="price">от 50 мин</div>
                            </div>
                            <div class="itemCol clm-4">
                                <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                            </div>
                        </div>
                    </div>
                    <style>
                        .price-cost:not(.price-cost--free)::after {
                            content: ' руб.';
                        }
                    </style>

                    <div class="worksTable__footer">
                        <div class="worksTable__footer__updated">Цены обновлены <span
                                class="worksTable__footer__updated--dashed">21 августа </span></div>
                        <img src="/fonts/payment.svg" class="worksTable__footer__payment">
                        <img src="/fonts/credit.svg" class="worksTable__footer__credit">
                    </div>
                </div>


            </div>
        </div>



        <div class="reviewsSection">
            <div class="container">
                <h2 class="titleH2">Отзывы о нас</h2>
                <div class="reviews-wrapper">
                    <div class="reviews-container pc__vers" id="reviews-block">

                        <div class="restyling-review">
                            <div class="restyling-card">
                                <div class="restyling-header">
                                    <div>
                                        <span>Мария З.</span>
                                    </div>
                                    <div>
                                        <img class="reviewAuthor__soc" src="/fonts/vk.svg">
                                    </div>
                                </div>
                                <div class="reviewContent">
                                    <p>Перестал заряжаться мой самый главный помощник в уборке –
                                        робот-пылесос. Вроде устройство от известного бренда и такая
                                        неудача. Мастера этого сервиса рассказали, что такие ситуации бывают
                                        и ничего в них страшного нет. Все починили, обо всем
                                        проконсультировали. Огромное спасибо!</p>
                                </div>
                                <div class="load-text">
                                    <button></button>
                                </div>
                                <div class="date">
                                    <ul class="rating">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                    <div><strong>Дата:</strong> 21/03/2022</div>
                                </div>
                            </div>
                        </div>

                        <div class="restyling-review">
                            <div class="restyling-card">
                                <div class="restyling-header">
                                    <div>
                                        <span>Марк Р.</span>
                                    </div>
                                    <div>
                                        <img class="reviewAuthor__soc" src="/fonts/vk.svg">
                                    </div>
                                </div>
                                <div class="reviewContent">
                                    <p>Сломался парогенератор, который проработал всего пару месяцев.
                                        Мастера этого сервиса сразу же определили, что причина заключается в
                                        использовании некачественной воды. Поверхность утюга забилась
                                        известковым налётом. Всё очень быстро почистили, восстановили и дали
                                        полезные рекомендации о том, как не сталкиваться с подобной
                                        проблемой в будущем. Спасибо большое!</p>
                                </div>
                                <div class="load-text">
                                    <button></button>
                                </div>
                                <div class="date">
                                    <ul class="rating">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                    <div><strong>Дата:</strong> 11/08/2022</div>
                                </div>
                            </div>
                        </div>

                        <div class="restyling-review">
                            <div class="restyling-card">
                                <div class="restyling-header">
                                    <div>
                                        <span>Лиза Р.</span>
                                    </div>
                                    <div>
                                        <img class="reviewAuthor__soc" src="/fonts/vk.svg">
                                    </div>
                                </div>
                                <div class="reviewContent">
                                    <p>Наконец купила кофемашину, но свежезаваренным ароматным кофе
                                        наслаждалась недолго: что-то вышло из строя и я сразу отвезла
                                        устройство этим специалистам. Они сделали диагностику, а потом
                                        произвели ремонт. Я очень довольна!</p>
                                </div>
                                <div class="load-text">
                                    <button></button>
                                </div>
                                <div class="date">
                                    <ul class="rating">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                    <div><strong>Дата:</strong> 23/05/2022</div>
                                </div>
                            </div>
                        </div>

                        <div class="restyling-review">
                            <div class="restyling-card">
                                <div class="restyling-header">
                                    <div>
                                        <span>Игнат М.</span>
                                    </div>
                                    <div>
                                        <img class="reviewAuthor__soc" src="/fonts/vk.svg">
                                    </div>
                                </div>
                                <div class="reviewContent">
                                    <p>Самым первым устройством, который я доверил этому сервисному центру,
                                        был робот-пылесос: в один прекрасный день он просто перестал
                                        включаться. Я провел мониторинг и выяснил, что у этого сервисного
                                        центра самый высокий рейтинг, сюда и обратился. Подтверждаю, что
                                        здесь работают лучшие мастера.</p>
                                </div>
                                <div class="load-text">
                                    <button></button>
                                </div>
                                <div class="date">
                                    <ul class="rating">
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                    <div><strong>Дата:</strong> 04/09/2022</div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="swiper mobile__vers swiper__mobile">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="restyling-card">
                                    <div class="restyling-header">
                                        <div>
                                            <span>Максим Б.</span>
                                        </div>
                                        <div>
                                            <img class="reviewAuthor__soc" src="/fonts/vk.svg">
                                        </div>
                                    </div>
                                    <div class="reviewContent">
                                        <p>В течение нескольких недель искал хороший сервисный центр, так
                                            как нужно было провести ремонт парогенератора - он внезапно
                                            перестал включаться. Мастер этой компании провел диагностику и
                                            оказалось, что дело в повреждении электрошнура. Этого не было
                                            заметно невооружённым взглядом, так как он защищён оплёткой.
                                            Очень понравилось, что ребята справились с проблемой всего за
                                            час.</p>
                                    </div>
                                    <div class="load-text">
                                        <button></button>
                                    </div>
                                    <div class="date">
                                        <ul class="rating">
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                        <div><strong>Дата:</strong> 19/05/2022</div>
                                    </div>
                                </div>
                            </div>


                            <div class="swiper-slide">
                                <div class="restyling-card">
                                    <div class="restyling-header">
                                        <div>
                                            <span>Лиза Р.</span>
                                        </div>
                                        <div>
                                            <img class="reviewAuthor__soc" src="/fonts/vk.svg">
                                        </div>
                                    </div>
                                    <div class="reviewContent">
                                        <p>Наконец купила кофемашину, но свежезаваренным ароматным кофе
                                            наслаждалась недолго: что-то вышло из строя и я сразу отвезла
                                            устройство этим специалистам. Они сделали диагностику, а потом
                                            произвели ремонт. Я очень довольна!</p>
                                    </div>
                                    <div class="load-text">
                                        <button></button>
                                    </div>
                                    <div class="date">
                                        <ul class="rating">
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                        <div><strong>Дата:</strong> 23/05/2022</div>
                                    </div>
                                </div>
                            </div>


                            <div class="swiper-slide">
                                <div class="restyling-card">
                                    <div class="restyling-header">
                                        <div>
                                            <span>Владимир З.</span>
                                        </div>
                                        <div>
                                            <img class="reviewAuthor__soc" src="/fonts/vk.svg">
                                        </div>
                                    </div>
                                    <div class="reviewContent">
                                        <p>Наш офис закупил массажные кресла, но через время некоторые из
                                            них перестали включаться. Потребовался ремонт и я сразу
                                            созвонился с проверенными мастерами этого сервиса. Кресла
                                            починили в кратчайшие сроки, ответили на все вопросы. Благодарю
                                            за работу!</p>
                                    </div>
                                    <div class="load-text">
                                        <button></button>
                                    </div>
                                    <div class="date">
                                        <ul class="rating">
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                        <div><strong>Дата:</strong> 09/05/2022</div>
                                    </div>
                                </div>
                            </div>


                            <div class="swiper-slide">
                                <div class="restyling-card">
                                    <div class="restyling-header">
                                        <div>
                                            <span>Вера Д.</span>
                                        </div>
                                        <div>
                                            <img class="reviewAuthor__soc" src="/fonts/vk.svg">
                                        </div>
                                    </div>
                                    <div class="reviewContent">
                                        <p>Кофе-машина, которая верой и правдой служила больше 5 лет, в один
                                            прекрасный день сломалась - вообще перестала реагировать на
                                            команды и действия. У меня давно были контакты этого сервисного
                                            центра и я обратилась сюда. Всё сделали быстро, в лучшем виде и
                                            дали хорошую гарантию. Конечно же рекомендую этих мастеров!</p>
                                    </div>
                                    <div class="load-text">
                                        <button></button>
                                    </div>
                                    <div class="date">
                                        <ul class="rating">
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                        <div><strong>Дата:</strong> 12/04/2022</div>
                                    </div>
                                </div>
                            </div>


                            <div class="swiper-slide">
                                <div class="restyling-card">
                                    <div class="restyling-header">
                                        <div>
                                            <span>Тимур Г.</span>
                                        </div>
                                        <div>
                                            <img class="reviewAuthor__soc" src="/fonts/google-maps.svg">
                                        </div>
                                    </div>
                                    <div class="reviewContent">
                                        <p> На днях пришлось обратиться в сервис из-за того что
                                            парогенератор перестал справляться со своей основной функцией -
                                            генерировать подачу горячего пара. Я сразу отказался от
                                            самостоятельного ремонта и выбрал профессионалов этого
                                            сервисного центра - ориентировался на положительные отзывы.
                                            Мастера здесь - лучшие! Провели диагностику, всё очень быстро
                                            восстановили и дали двухлетнюю гарантию.</p>
                                    </div>
                                    <div class="load-text">
                                        <button></button>
                                    </div>
                                    <div class="date">
                                        <ul class="rating">
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                        <div><strong>Дата:</strong> 21/04/2022</div>
                                    </div>
                                </div>
                            </div>


                            <div class="swiper-slide">
                                <div class="restyling-card">
                                    <div class="restyling-header">
                                        <div>
                                            <span>Виталий К.</span>
                                        </div>
                                        <div>
                                            <img class="reviewAuthor__soc" src="/fonts/google-maps.svg">
                                        </div>
                                    </div>
                                    <div class="reviewContent">
                                        <p>Кофемашина от популярного бренда вышла из строя, а я совсем не
                                            разбираюсь в таком типе техники и не мог выполнить ремонт
                                            самостоятельно. Обратился к другу, который поделился контактами
                                            этих мастеров. Днем к ним обратился, а вечером моя кофемашина
                                            была отремонтирована. Спасибо!</p>
                                    </div>
                                    <div class="load-text">
                                        <button></button>
                                    </div>
                                    <div class="date">
                                        <ul class="rating">
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                        <div><strong>Дата:</strong> 29/04/2022</div>
                                    </div>
                                </div>
                            </div>


                            <div class="swiper-slide">
                                <div class="restyling-card">
                                    <div class="restyling-header">
                                        <div>
                                            <span>Антон Г.</span>
                                        </div>
                                        <div>
                                            <img class="reviewAuthor__soc" src="/fonts/vk.svg">
                                        </div>
                                    </div>
                                    <div class="reviewContent">
                                        <p>Я уже знаю, что со сложными поломками стоит обращаться только
                                            сюда: мастера грамотные, внимательные, видно что постоянно
                                            повышают свою квалификацию. Я даже ремонт своего массажного
                                            кресла им поручал, все сделали в лучшем виде. От души всем
                                            рекомендую!</p>
                                    </div>
                                    <div class="load-text">
                                        <button></button>
                                    </div>
                                    <div class="date">
                                        <ul class="rating">
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                        <div><strong>Дата:</strong> 16/03/2022</div>
                                    </div>
                                </div>
                            </div>


                            <div class="swiper-slide">
                                <div class="restyling-card">
                                    <div class="restyling-header">
                                        <div>
                                            <span>Тамара М.</span>
                                        </div>
                                        <div>
                                            <img class="reviewAuthor__soc" src="/fonts/google-maps.svg">
                                        </div>
                                    </div>
                                    <div class="reviewContent">
                                        <p>Сломался робот-пылесос и, как это обычно бывает, в самый
                                            неподходящий момент. Сначала хотела найти инструкции и советы по
                                            ремонту в интернете, но потом решила обратиться к
                                            профессиональным мастерам. Выбор пал на этот сервисный центр,
                                            где все сделали идеально. Моя оценка 10 из 10.</p>
                                    </div>
                                    <div class="load-text">
                                        <button></button>
                                    </div>
                                    <div class="date">
                                        <ul class="rating">
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                        <div><strong>Дата:</strong> 12/03/2022</div>
                                    </div>
                                </div>
                            </div>


                            <div class="swiper-slide">
                                <div class="restyling-card">
                                    <div class="restyling-header">
                                        <div>
                                            <span>Иннокентий К.</span>
                                        </div>
                                        <div>
                                            <img class="reviewAuthor__soc" src="/fonts/vk.svg">
                                        </div>
                                    </div>
                                    <div class="reviewContent">
                                        <p>У нас в офисе сломалась кофемашина и это стало большой проблемой.
                                            Не теряя времени, отвезли ее на диагностику в этот сервис и
                                            оказалось, что причина – износ некоторых деталей. Они уже были в
                                            наличии в мастерской, поэтому мастер быстро их заменил. Спасибо
                                            огромное!</p>
                                    </div>
                                    <div class="load-text">
                                        <button></button>
                                    </div>
                                    <div class="date">
                                        <ul class="rating">
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                        <div><strong>Дата:</strong> 17/06/2022</div>
                                    </div>
                                </div>
                            </div>


                            <div class="swiper-slide">
                                <div class="restyling-card">
                                    <div class="restyling-header">
                                        <div>
                                            <span>Сергей Г.</span>
                                        </div>
                                        <div>
                                            <img class="reviewAuthor__soc" src="/fonts/vk.svg">
                                        </div>
                                    </div>
                                    <div class="reviewContent">
                                        <p>Уже много лет я постоянный клиент этой сервисный компании, здесь
                                            чиню и ноутбук, и телевизоры, и массажное кресло. Мастера
                                            проводят всестороннюю подробную диагностику и сразу определяют,
                                            что вышло из строя. Ремонт, как правило, занимает всего час-два.
                                        </p>
                                    </div>
                                    <div class="load-text">
                                        <button></button>
                                    </div>
                                    <div class="date">
                                        <ul class="rating">
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                        <div><strong>Дата:</strong> 05/09/2022</div>
                                    </div>
                                </div>
                            </div>


                            <div class="swiper-slide">
                                <div class="restyling-card">
                                    <div class="restyling-header">
                                        <div>
                                            <span>Степан К.</span>
                                        </div>
                                        <div>
                                            <img class="reviewAuthor__soc" src="/fonts/vk.svg">
                                        </div>
                                    </div>
                                    <div class="reviewContent">
                                        <p>Появились проблемы в работе парогенератора - из него стала
                                            вытекать вода. Уже по телефону специалисты этого сервиса
                                            предположили, что дело или в неисправности запорного клапана,
                                            или в перегибе шлага подачи пара. Диагностика показала, что эти
                                            предположения верны. Мастера очень быстро подобрали необходимые
                                            детали, запчасти и комплектующие и справились с ремонтом в
                                            невероятно короткие сроки!</p>
                                    </div>
                                    <div class="load-text">
                                        <button></button>
                                    </div>
                                    <div class="date">
                                        <ul class="rating">
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                        <div><strong>Дата:</strong> 17/06/2022</div>
                                    </div>
                                </div>
                            </div>


                            <div class="swiper-slide">
                                <div class="restyling-card">
                                    <div class="restyling-header">
                                        <div>
                                            <span>Лариса С.</span>
                                        </div>
                                        <div>
                                            <img class="reviewAuthor__soc" src="/fonts/vk.svg">
                                        </div>
                                    </div>
                                    <div class="reviewContent">
                                        <p>Робот-пылесос – заветная мечта любой хозяйки! Когда мой любимый
                                            помощник внезапно сломался, я сразу обратилась сюда. Мастера все
                                            продиагностировали, определили причину неисправности и дали
                                            полезные рекомендации о том, как их избегать. Огромное им
                                            спасибо!</p>
                                    </div>
                                    <div class="load-text">
                                        <button></button>
                                    </div>
                                    <div class="date">
                                        <ul class="rating">
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                        <div><strong>Дата:</strong> 27/07/2022</div>
                                    </div>
                                </div>
                            </div>


                            <div class="swiper-slide">
                                <div class="restyling-card">
                                    <div class="restyling-header">
                                        <div>
                                            <span>Мария З.</span>
                                        </div>
                                        <div>
                                            <img class="reviewAuthor__soc" src="/fonts/vk.svg">
                                        </div>
                                    </div>
                                    <div class="reviewContent">
                                        <p>Перестал заряжаться мой самый главный помощник в уборке –
                                            робот-пылесос. Вроде устройство от известного бренда и такая
                                            неудача. Мастера этого сервиса рассказали, что такие ситуации
                                            бывают и ничего в них страшного нет. Все починили, обо всем
                                            проконсультировали. Огромное спасибо!</p>
                                    </div>
                                    <div class="load-text">
                                        <button></button>
                                    </div>
                                    <div class="date">
                                        <ul class="rating">
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                        <div><strong>Дата:</strong> 21/03/2022</div>
                                    </div>
                                </div>
                            </div>


                            <div class="swiper-slide">
                                <div class="restyling-card">
                                    <div class="restyling-header">
                                        <div>
                                            <span>Игнат М.</span>
                                        </div>
                                        <div>
                                            <img class="reviewAuthor__soc" src="/fonts/vk.svg">
                                        </div>
                                    </div>
                                    <div class="reviewContent">
                                        <p>Самым первым устройством, который я доверил этому сервисному
                                            центру, был робот-пылесос: в один прекрасный день он просто
                                            перестал включаться. Я провел мониторинг и выяснил, что у этого
                                            сервисного центра самый высокий рейтинг, сюда и обратился.
                                            Подтверждаю, что здесь работают лучшие мастера.</p>
                                    </div>
                                    <div class="load-text">
                                        <button></button>
                                    </div>
                                    <div class="date">
                                        <ul class="rating">
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                        <div><strong>Дата:</strong> 04/09/2022</div>
                                    </div>
                                </div>
                            </div>


                            <div class="swiper-slide">
                                <div class="restyling-card">
                                    <div class="restyling-header">
                                        <div>
                                            <span>Марк Р.</span>
                                        </div>
                                        <div>
                                            <img class="reviewAuthor__soc" src="/fonts/vk.svg">
                                        </div>
                                    </div>
                                    <div class="reviewContent">
                                        <p>Сломался парогенератор, который проработал всего пару месяцев.
                                            Мастера этого сервиса сразу же определили, что причина
                                            заключается в использовании некачественной воды. Поверхность
                                            утюга забилась известковым налётом. Всё очень быстро почистили,
                                            восстановили и дали полезные рекомендации о том, как не
                                            сталкиваться с подобной проблемой в будущем. Спасибо большое!
                                        </p>
                                    </div>
                                    <div class="load-text">
                                        <button></button>
                                    </div>
                                    <div class="date">
                                        <ul class="rating">
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                        <div><strong>Дата:</strong> 11/08/2022</div>
                                    </div>
                                </div>
                            </div>


                            <div class="swiper-slide">
                                <div class="restyling-card">
                                    <div class="restyling-header">
                                        <div>
                                            <span>Алена Т.</span>
                                        </div>
                                        <div>
                                            <img class="reviewAuthor__soc" src="/fonts/google-maps.svg">
                                        </div>
                                    </div>
                                    <div class="reviewContent">
                                        <p>Ремонтировала в сервисном центре свое любимое массажное кресло, у
                                            которого по какой-то причине появились проблемы с включением и
                                            выключением. Мастера справились с ремонтом всего за один день,
                                            спасибо!</p>
                                    </div>
                                    <div class="load-text">
                                        <button></button>
                                    </div>
                                    <div class="date">
                                        <ul class="rating">
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                        <div><strong>Дата:</strong> 19/08/2022</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </div>
        </div>



        <div id="youtube-section">
            <div class="container">
                <h2 class="catalog-h2">Наш YouTube</h2>
                <div class="gallery-block" id="youtube-gallery">
                    <div class="gallery-block__item video" data-link="AbGm7tArHuI"
                        style="background-image: url(images/thumb_h300_AbGm7tArHuI.jpg);" itemscope
                        itemtype="http://schema.org/VideoObject">
                        <meta itemprop="url" content="https://youtu.be/AbGm7tArHuI">
                        <meta itemprop="thumbnailUrl"
                            content="/public/yt-thumbs/thumb_h300_AbGm7tArHuI.jpg">
                        <meta itemprop="name" content="Кофемашина не видит воду">
                        <meta itemprop="description" content="Практически все бытовые приборы оснащены специальными датчиками и меню, которые сообщают пользователю о неполадках в системе. Это в полной мере относится к кофемашинам, н от которых вы можете получить сообщение об отсутствии воды в резервуаре и других проблемах. Если вода есть, но аппарат ее не видит, то проблема может состоять;
">
                        <meta itemprop="duration" content="PT2M27S">
                        <meta itemprop="uploadDate" content="2023-01-11">
                        <meta itemprop="isFamilyFriendly" content="True">
                        <span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject">
                            <meta itemprop="contentUrl" src="/public/yt-thumbs/thumb_h300_AbGm7tArHuI.jpg">
                            <meta itemprop="width" content="400">
                            <meta itemprop="height" content="300">
                        </span>
                        <svg class="video__youtube-svg" height="100%" version="1.1" viewBox="0 0 68 48"
                            width="100%">
                            <path class="ytp-large-play-button-bg"
                                d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"
                                fill="#f00" />
                            <path d="M 45,24 27,14 27,34" fill="#fff" />
                        </svg>
                        <div class="video__vignette"></div>
                    </div>
                    <div class="gallery-block__item video" data-link="lHN2D0FIRaM"
                        style="background-image: url(images/thumb_h300_lHN2D0FIRaM.jpg);" itemscope
                        itemtype="http://schema.org/VideoObject">
                        <meta itemprop="url" content="https://youtu.be/lHN2D0FIRaM">
                        <meta itemprop="thumbnailUrl"
                            content="/public/yt-thumbs/thumb_h300_lHN2D0FIRaM.jpg">
                        <meta itemprop="name" content="Кофемашина не включается или выключается
">
                        <meta itemprop="description"
                            content="Захотели начать утро с чашки крепкого ароматного кофе, но кофемашина не включилась? Это неприятная ситуация, которую хочется как можно скорее исправить. Самое простое, что может сделать пользователь - проверить, работает ли розетка и есть ли в доме свет. Если все вышеперечисленное в порядке, то можно задуматься о звонке в специализированную сервисную службу: ее мастера приедут в удобный день и время, проведут диагностику и сразу же определят, какие элементы, детали и комплектующие дали сбой, вышли из строя и требуют замены.">
                        <meta itemprop="duration" content="PT2M08S">
                        <meta itemprop="uploadDate" content="2023-01-11">
                        <meta itemprop="isFamilyFriendly" content="True">
                        <span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject">
                            <meta itemprop="contentUrl" src="/public/yt-thumbs/thumb_h300_lHN2D0FIRaM.jpg">
                            <meta itemprop="width" content="400">
                            <meta itemprop="height" content="300">
                        </span>
                        <svg class="video__youtube-svg" height="100%" version="1.1" viewBox="0 0 68 48"
                            width="100%">
                            <path class="ytp-large-play-button-bg"
                                d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"
                                fill="#f00" />
                            <path d="M 45,24 27,14 27,34" fill="#fff" />
                        </svg>
                        <div class="video__vignette"></div>
                    </div>
                    <div class="gallery-block__item video" data-link="ofcZ6XdzL8o"
                        style="background-image: url(images/thumb_h300_ofcZ6XdzL8o.jpg);" itemscope
                        itemtype="http://schema.org/VideoObject">
                        <meta itemprop="url" content="https://youtu.be/ofcZ6XdzL8o">
                        <meta itemprop="thumbnailUrl"
                            content="/public/yt-thumbs/thumb_h300_ofcZ6XdzL8o.jpg">
                        <meta itemprop="name"
                            content="Парогенератор не представляется возможным отрегулировать уровень давления. Что делать?">
                        <meta itemprop="description" content="Актуальным является вопрос о том, можно ли своими руками отремонтировать парогенератор - устройство, которое сегодня можно увидеть практически в любой квартире. Им с удовольствием пользуются домохозяйки, ведь он значительно упрощает и ускоряет решение повседневных задач. Как и любая другая техника, парогенератор время от времени выходит из строя и чаще всего дают сбой следующие элементы:
- нагревательный элемент;
- регулятор подачи пара;
- индикатор давления.">
                        <meta itemprop="duration" content="PT1M56S">
                        <meta itemprop="uploadDate" content="2023-01-30">
                        <meta itemprop="isFamilyFriendly" content="True">
                        <span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject">
                            <meta itemprop="contentUrl" src="/public/yt-thumbs/thumb_h300_ofcZ6XdzL8o.jpg">
                            <meta itemprop="width" content="400">
                            <meta itemprop="height" content="300">
                        </span>
                        <svg class="video__youtube-svg" height="100%" version="1.1" viewBox="0 0 68 48"
                            width="100%">
                            <path class="ytp-large-play-button-bg"
                                d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"
                                fill="#f00" />
                            <path d="M 45,24 27,14 27,34" fill="#fff" />
                        </svg>
                        <div class="video__vignette"></div>
                    </div>
                    <div class="gallery-block__item video" data-link="FA7Lrx5PqcM"
                        style="background-image: url(images/thumb_h300_FA7Lrx5PqcM.jpg);" itemscope
                        itemtype="http://schema.org/VideoObject">
                        <meta itemprop="url" content="https://youtu.be/FA7Lrx5PqcM">
                        <meta itemprop="thumbnailUrl"
                            content="/public/yt-thumbs/thumb_h300_FA7Lrx5PqcM.jpg">
                        <meta itemprop="name" content="Массажное кресло внезапно выключается само">
                        <meta itemprop="description"
                            content="Массажные кресла - это достаточно сложные механизмы, состоящие из множества движущихся частей и компьютерных компонентов. Именно по этой причине починить сломавшееся массажное кресло, не имея специальные инструменты, практически невозможно. Самым верным решением будет незамедлительное обращение к специалистам известного сервисного центра по ремонту техники и электроники: они начнут ремонт с подробной всесторонней диагностики, которая покажет, что именно вышло из строя в отдельно взятом случае и какие факторы к этому привели.">
                        <meta itemprop="duration" content="PT2M02S">
                        <meta itemprop="uploadDate" content="2023-01-25">
                        <meta itemprop="isFamilyFriendly" content="True">
                        <span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject">
                            <meta itemprop="contentUrl" src="/public/yt-thumbs/thumb_h300_FA7Lrx5PqcM.jpg">
                            <meta itemprop="width" content="400">
                            <meta itemprop="height" content="300">
                        </span>
                        <svg class="video__youtube-svg" height="100%" version="1.1" viewBox="0 0 68 48"
                            width="100%">
                            <path class="ytp-large-play-button-bg"
                                d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"
                                fill="#f00" />
                            <path d="M 45,24 27,14 27,34" fill="#fff" />
                        </svg>
                        <div class="video__vignette"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="stepItem-section" id="steps-section">
            <div class="container">
                <ul class="adsList-ul">
                    <li>
                        <div class="adsItem">Оставьте заявку на ремонт</div>
                        <img src="/images/step-01.png">
                        <div class="circle"></div>
                    </li>
                    <li>
                        <div class="adsItem">Менеджер рассчитает стоимость</div>
                        <img src="/images/step-02.png">
                        <div class="circle"></div>
                    </li>
                    <li>
                        <div class="adsItem">Вы сдадите устройство сами/курьером</div>
                        <img src="/images/step-03.png">
                        <div class="circle"></div>
                    </li>
                    <li>
                        <div class="adsItem">Мастер выполнит диагностику</div>
                        <img src="/images/step-04.png">
                        <div class="circle"></div>
                    </li>
                    <li>
                        <div class="adsItem">Получит согласие на ремонт</div>
                        <img src="/images/step-05.png">
                        <div class="circle"></div>
                    </li>
                    <li>
                        <div class="adsItem">Ваше устройство исправно!</div>
                        <img src="/images/step-06.png">
                        <div class="circle"></div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="archiveEndform" id="endform">
            <div class="container">
                <div class="lastForm">
                    <div class="lf-content">
                        <div class="lfTitle">Оставьте заявку на ремонт</div>
                        <p class="lfText">Мы выполним ремонт любой степени сложности, работоспособность
                            ваших устройств будет восстановлена грамотными сервисными инженерами в
                            максимально короткие сроки.</p>
                        <form>
                            <input type="text" inputmode="tel" name="phone" class="msPhone"
                                placeholder="+7 (9__) ___-__-__">
                            <input type="submit" value="Отправить заявку" class="msSubmit"
                                disabled="disabled">
                        </form>
                        <div class="success"></div>
                        <p class="confrm form-mt-s">Отправляя данную форму, Вы соглашаетесь с <a
                                href="/privacy-policy">политикой конфиденциальности</a> нашего сайта</p>
                    </div>
                    <img src="/images/endform.png" class="enPhoneImg">
                </div>

            </div>
        </div>
    </div>

    <div class="next-part">
        <div class="map">
            <!-- <span id="map"> -->

            <!-- </span> -->
        </div>
    </div>
</div>
</main>

@endsection

@section('description', 'АСЦ — Срочный ремонт техники в Москве с бесплатной диагностикой  ✅ Гарантия до 3 лет. ✅ Получите скидку 25% при первом обращении!')
@section('keywords', 'Акции на ремонт')
@section('title', 'Акции — специализированный сервисный центр в Москве')