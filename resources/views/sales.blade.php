@extends('layouts.app')

@section('content')
<main class="pageWrapper">

<div class="inside-page page-news">
    <div class="container">
        <div class="breadcrumbs prod-breads">

            <ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a href="/"
                        itemprop="item"><span itemprop="name">🛠 Сервис-центр JSERVICE</span></a><span
                        class="divider">/</span>
                    <meta itemprop="position" content="1">
                </li>
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span span
                        itemprop="name">Акции</span>
                    <meta itemprop="position" content="2">
                </li>
            </ol>
        </div>
        <h1 class="heading__title">Акции сервисного центра</h1>

        <section class="salesSection" id="anchor-stock">
            <div class="container">


                <div class="salesWrapper">





                    <div class="articleItem">
                        <noindex>
                            <a rel="nofollow" class="support-link-sales"
                                href="/sales/sale_1">
                            </a>
                            <article itemtype="https://schema.org/BlogPosting" itemscope="itemscope"><a
                                    rel="nofollow" class="support-link-sales"
                                    href="/sales/sale_1">
                                    <img src="images/63ab26fb7f968-02a4d403cfce4aeb8b3a6fc559f6722b.png"
                                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                        alt=" Подарок 1500Р на следующий ремонт в нашем центре">
                                </a><a rel="nofollow"
                                    href="/sales/sale_1"
                                    class="titleSale no-click"> Бесплатный забор и доставка вашей техники</a>
                                <a rel="nofollow"
                                    href="/sales/sale_1"
                                    class="readmoreArtice">Подробнее</a>
                            </article>

                        </noindex>
                    </div>





                    <div class="articleItem">
                        <noindex>
                            <a rel="nofollow" class="support-link-sales"
                                href="/sales/sale_2">
                            </a>
                            <article itemtype="https://schema.org/BlogPosting" itemscope="itemscope"><a
                                    rel="nofollow" class="support-link-sales"
                                    href="/sales/sale_2">
                                    <img src="images/63ab271700ddf-e6d46dedaead616e5384b7b49ba4bced.png"
                                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                        alt="Бесплатная доставка устройства в черте города">
                                </a><a rel="nofollow"
                                    href="/sales/sale_2"
                                    class="titleSale no-click">Скидка 10% при записи через сайт</a>
                                <a rel="nofollow"
                                    href="/sales/sale_2"
                                    class="readmoreArtice">Подробнее</a>
                            </article>

                        </noindex>
                    </div>





                    <div class="articleItem">
                        <noindex>
                            <a rel="nofollow" class="support-link-sales"
                                href="/sales/sale_3">
                            </a>
                            <article itemtype="https://schema.org/BlogPosting" itemscope="itemscope"><a
                                    rel="nofollow" class="support-link-sales"
                                    href="/sales/sale_3">
                                    <img src="images/63ab2734b9d3b-68e67a22b80557807a04ca03fd382a0e.png"
                                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                        alt="Скидка 25% на ремонт при заказе с сайта">
                                </a><a rel="nofollow" href="/sales/sale_3"
                                    class="titleSale no-click">Скидка 1000 рублей при повторном обращении на ремонт</a>
                                <a rel="nofollow" href="/sales/sale_3"
                                    class="readmoreArtice">Подробнее</a>
                            </article>

                        </noindex>
                    </div>




                </div>
            </div>
        </section>

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

<div class="next-part">
    <div class="map">
        <!-- <span id="map"> -->

        <!-- </span> -->
    </div>
</div>

</main>

@endsection

@section('description', 'АСЦ — Срочный ремонт техники в Москве с бесплатной диагностикой  ✅ Гарантия до 3 лет. ✅ Получите скидку 25% при первом обращении!')
@section('keywords', 'Акции на ремонт')
@section('title', 'Акции — специализированный сервисный центр в Москве')