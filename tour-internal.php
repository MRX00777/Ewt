<?php

$kw = ''; // Keywords for SEO
$desc = ''; // Description for SEO
$title = 'Туры';
$page = 'tour-internal';


include "partials/header.php" ?>

<main class=" main">

<div class="container-fluid pages__name">
    <a href="./index.php" class="pages__name-left">Главная</a>
    <img src="./assets/icons/arrow-right.png" alt="">
    <a href="./tour-pages.php" class="pages__name-right">Туры</a>
</div>

<h2 class="container-fluid tour__main-title">SUNSOL ECOLAND</h2>

<section class="images tour__img__container">
    <h3 class="container-fluid images-title">Город: <span>Истанбул</span></h3>

    <div class="images__cards ">
            <div class="images__cards__card" data-fancybox="gallery" data-src="./assets/images/tour__main-card.png">
                <img data-lazy="./assets/images/tour__main-card.png" alt="">
            </div>
            <div class="images__cards__card" data-fancybox="gallery" data-src="./assets/images/tour__mini-card.png">
                <img data-lazy="./assets/images/tour__mini-card.png" alt="">
            </div>
            <div class="images__cards__card" data-fancybox="gallery" data-src="./assets/images/tour__mini-card.png">
                <img data-lazy="./assets/images/tour__mini-card.png" alt="">
            </div>
            <div class="images__cards__card" data-fancybox="gallery" data-src="./assets/images/tour__mini-card.png">
                <img data-lazy="./assets/images/tour__mini-card.png" alt="">
            </div>
            <div class="images__cards__card" data-fancybox="gallery" data-src="./assets/images/tour__mini-card.png">
                <img data-lazy="./assets/images/tour__mini-card.png" alt="">
            </div>
    </div>

</section>

<a id="fixedButton" href="./payment-order.php" class="container-fluid order-btn">заказать тур</a>

<div class="section__container">

    <div class="section__container-left">
        <section class="info">

            <div class="container-fluid info__top">
                <div class="info__top__row">
                    <div class="info__top__row-city">Южная Америка</div>
                    <div class="info__top__row-srok">5 дней, 6 ночей</div>   
                </div>
                
                <div class="info__top__price">
                    <div class="info__top__price-text">
                        Стоимость:
                    </div>
                    <div class="info__top__price-number">
                        16 000 000 сум / за человека
                    </div>
                </div>
            </div>

            <div class="container-fluid info__descriptions">
                <h3 class="info__descriptions-title">Описание тура</h3>
                <p class="info__descriptions-text">Самый большой рекреационный комплекс в Венесуэле, работает по системе «Все включено». Развитая инфраструктура, развлекательные программы, внимательный персонал. Состоит из 4х экосистем: лагуны, моря, песчаных дюн и гор. Расположен в живописной бухте.
                </p>
            </div>

            <div class="container-fluid info__residence">
                <h3 class="info__residence-title">Проживание</h3>
                <div class="info__residence__content">
                    <ul>
                        <li>Всего 510 номеров.</li>
                        <li>Superior (макс. 3+1 чел.);</li>
                        <li>Superior Lagoon View (макс. 3+1 чел.);</li>
                        <li>Superior Sea View (макс. 3+1 чел.);</li>
                        <li>Premium (двуспальная или 2 односпальные кровати, макс. 3+1 чел., прим. 32 м2).</li>
                        <li>Есть номера для людей с ограниченными возможностями.</li>
                        <li>Номера для некурящих.</li>
                   </ul>
                </div>
                
            </div>

            <div class=" swiper info__slider">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="info__slider__img" data-fancybox="gallery" data-src="./assets/images/tour_internal-sl1.png">
                            <img data-lazy="./assets/images/tour_internal-sl1.png" alt="">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="info__slider__img" data-fancybox="gallery" data-src="./assets/images/tour_internal-sl2.png">
                            <img data-lazy="./assets/images/tour_internal-sl2.png" alt="">
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="info__slider__img" data-fancybox="gallery" data-src="./assets/images/tour_internal-sl1.png">
                            <img data-lazy="./assets/images/tour_internal-sl1.png" alt="">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="info__slider__img" data-fancybox="gallery" data-src="./assets/images/tour_internal-sl2.png">
                            <img data-lazy="./assets/images/tour_internal-sl2.png" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="info__slider__img" data-fancybox="gallery" data-src="./assets/images/tour_internal-sl1.png">
                            <img data-lazy="./assets/images/tour_internal-sl1.png" alt="">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="info__slider__img" data-fancybox="gallery" data-src="./assets/images/tour_internal-sl2.png">
                            <img data-lazy="./assets/images/tour_internal-sl2.png" alt="">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="info__slider__img" data-fancybox="gallery" data-src="./assets/images/tour_internal-sl1.png">
                            <img data-lazy="./assets/images/tour_internal-sl1.png" alt="">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="info__slider__img" data-fancybox="gallery" data-src="./assets/images/tour_internal-sl2.png">
                            <img data-lazy="./assets/images/tour_internal-sl2.png" alt="">
                        </div>
                    </div>
                    
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

            <div class="container-fluid info__included">
                <h3 class="info__included-title">Что включено в тур</h3>
                <div class="info__included__content">
                    <ul>
                        <li><span>Перелет. </span>Это самая распространенная услуга, которая входит в состав любого тура. Перелет может быть как прямым, так и с пересадками.</li>
                        <li><span>Проживание. </span>Тур может включать в себя проживание в отеле, хостеле, апартаментах или другом месте размещения.
                        Питание. Тур может включать в себя питание по системе "все включено", "полупансион" или "завтраки".</li>
                        <li><span>Экскурсии. </span>Тур может включать в себя посещение различных достопримечательностей и экскурсионных объектов.</li>
                        <li><span>Транспорт. </span> Тур может включать в себя трансферы между аэропортом, отелем и другими объектами.</li>
                        <li><span>Страховка. </span>Тур может включать в себя медицинскую страховку.</li>
                    </ul>
                </div>
            </div>

            <div class="container-fluid info__questions">
                <h3 class="info__questions-title">Часто задаваемые вопросы о туре</h3>
                <div class="info__questions__content">
                    <div class="accordeon">
                        <div class="accordeon__item">
                            <button class="accordeon__item-btn">Какой тип питания в отеле?<img class="accordeon__icon" src="./assets/icons/accordeon__arrow-down.svg" alt="accordeon__icon"></button>
                            <div class="accordeon__item-text">
                                <p>Тип питания в отеле SUNSOL ECOLAND - "Все включено". Это означает, что в стоимость проживания включены завтрак, обед, ужин, а также закуски и напитки в течение дня.</p>
                            </div>
                        </div>
                        <div class="accordeon__item">
                            <button class="accordeon__item-btn">Какие номера есть в отеле?<img class="accordeon__icon" src="./assets/icons/accordeon__arrow-down.svg" alt="accordeon__icon"></button>
                            <div class="accordeon__item-text">
                                <p>Тип питания в отеле SUNSOL ECOLAND - "Все включено". Это означает, что в стоимость проживания включены завтрак, обед, ужин, а также закуски и напитки в течение дня.</p>
                            </div>
                        </div>
                        <div class="accordeon__item">
                            <button class="accordeon__item-btn">Есть ли номера для людей с ограниченными возможностями?<img class="accordeon__icon" src="./assets/icons/accordeon__arrow-down.svg" alt="accordeon__icon"></button>
                            <div class="accordeon__item-text">
                                <p>Тип питания в отеле SUNSOL ECOLAND - "Все включено". Это означает, что в стоимость проживания включены завтрак, обед, ужин, а также закуски и напитки в течение дня.</p>
                            </div>
                        </div>
                        <div class="accordeon__item">
                            <button class="accordeon__item-btn">Есть ли номера для некурящих?<img class="accordeon__icon" src="./assets/icons/accordeon__arrow-down.svg" alt="accordeon__icon"></button>
                            <div class="accordeon__item-text">
                                <p>Тип питания в отеле SUNSOL ECOLAND - "Все включено". Это означает, что в стоимость проживания включены завтрак, обед, ужин, а также закуски и напитки в течение дня.</p>
                            </div>
                        </div>
                        <div class="accordeon__item">
                            <button class="accordeon__item-btn">Какой пляж у отеля?<img class="accordeon__icon" src="./assets/icons/accordeon__arrow-down.svg" alt="accordeon__icon"></button>
                            <div class="accordeon__item-text">
                                <p>Тип питания в отеле SUNSOL ECOLAND - "Все включено". Это означает, что в стоимость проживания включены завтрак, обед, ужин, а также закуски и напитки в течение дня.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </section>
    </div>

    <div class="container-fluid section__container-right">
        <section class="section tour ">
            <div class="section__container-right__block">
                <div class="tour__title">
                    Другие туры
                </div>
                <div class="tour__content">
                    <?php for ($i = 1; $i < 5; $i++): ?>
                        <div class="col-12">
                            <a href="./tour-internal.php" class="card">
                                <div class="card__img">
                                    <div class="img">
                                        <img data-lazy="/assets/images/tour.jpg" alt="img">
                                    </div>
                                </div>
                                <div class="card__name">
                                    <p>Kite Beach. Отдых на побережье главного пляжа Дубаи</p>
                                </div>
                                <div class="card__info">
                                    <div class="loc">Дубаи</div>
                                    <div class="info-day">5 дней, 6 ночей</div>
                                </div>
                                <div class="card__price">
                                    <div class="top">
                                        Стоимость:
                                    </div>
                                    <div class="price">
                                        16 000 000 сум / за человека
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endfor ?>
                </div>
            </div>
        </section>
    </div>

</div>

<section class="container-fluid section application">
        <div class="">
            <div class="application__info info ">
                <div class="info__content">
                    <div class="info__fill col-10 col-md-10 col-lg-6 col-xl-5">
                        <div class="info__fill_title">
                            <h3>
                                Отправить заявку на этот тур
                            </h3>
                        </div>
                        <div class="info__fill_input">
                            <p>Ваше имя</p>
                            <input class="info__fill_name" type="text" placeholder="Введите имя">
                            <p>Телефон</p>
                            <div class="input">
                                <input type="tel" id="telIndex" class="telCountry" required>
                                <input class="info__fill_number" type="hidden" name="phone">
                            </div>
                            <div class="input">
                                <a href="./partials/application-success.php" class="btn">Отправить</a>
                            </div>
                        </div>
                    </div>
                    <div class="info__offer col-10 col-md-10 col-lg-6 col-xl-5">
                        <h3 class="info__offer_title">
                        Оставьте заявку и мы проконсультируем вас по всем вопросам
                        </h3>
                        <div class="info__offer_text">
                            <div class="info__offer_text__content">
                                <div class="info__offer_text-img">
                                    <img src="./assets/icons/info__offer-img__svg.svg" alt="">
                                </div>
                                <p>Мы можем оформить все необходимые документы для поездки</p>
                            </div>

                            <div class="info__offer_text__content">
                                <div class="info__offer_text-img">
                                    <img src="./assets/icons/info__offer-img__svg.svg" alt="">
                                </div>
                                <p>Взять на себя все заботы по организации путешествия</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>








<?php include "partials/footer.php" ?>