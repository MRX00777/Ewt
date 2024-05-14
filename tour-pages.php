<?php

$kw = ''; // Keywords for SEO
$desc = ''; // Description for SEO
$title = 'Туры';
$page = 'tour-pages';


include "partials/header.php" ?>


<main class="main">
    <section class="container-fluid tour-top">
        <div class=" pages__name">
            <a href="./index.php" class="pages__name-left">Главная</a>
            <img src="./assets/icons/arrow-right.png" alt="">
            <a href="./tour-pages.php" class="pages__name-right">Туры</a>
        </div>

        <h2 class=" tour__title">Лучшие предложения для отдыха</h2>
        <button class="filter-menu">Фильтры <img src="./assets/icons/filter__menu__icon.svg" alt=""></button>

    </section>



    <section class="container-fluid tour">
        <div class="tour__filter__block">
           <form class="tour__filter" action="">    
            <h2 class="tour__filter__title">Фильтры</h2>
            <div class="tour__filter__close"><img src="./assets/icons/filter__menu__close.svg" alt=""></div>
            <div class="tour__filter__country">
                <h3>Страны</h3>
                <div class="tour__filter__country__list">
                    <label>
                        <input type="checkbox" name='country'  class="real-checkbox">
                        <span class="custom-border custom-checkbox"></span>
                        Норвегия
                    </label>
                    <label>
                        <input type="checkbox" name='country' class="real-checkbox">
                        <span class="custom-border custom-checkbox"></span>
                        Швеция
                    </label>
                    <label>
                        <input type="checkbox" name='country' class="real-checkbox">
                        <span class="custom-border custom-checkbox"></span>
                        Германия
                    </label>
                    <label>
                        <input type="checkbox" name='country' class="real-checkbox">
                        <span class="custom-border custom-checkbox"></span>
                        Турция
                    </label>
                    <label>
                        <input type="checkbox" name='country' class="real-checkbox">
                        <span class="custom-border custom-checkbox"></span>
                        Азербайжан
                    </label>
                    <label>
                        <input type="checkbox" name='country' class="real-checkbox">
                        <span class="custom-border custom-checkbox"></span>
                        Грузия
                    </label>
                    <label>
                        <input type="checkbox" name='country' class="real-checkbox">
                        <span class="custom-border custom-checkbox"></span>
                        Грузия
                    </label>
                    <label>
                        <input type="checkbox" name='country' class="real-checkbox">
                        <span class="custom-border custom-checkbox"></span>
                        Грузия
                    </label>
                    <label>
                        <input type="checkbox" name='country' class="real-checkbox">
                        <span class="custom-border custom-checkbox"></span>
                        Грузия
                    </label><label>
                        <input type="checkbox" name='country' class="real-checkbox">
                        <span class="custom-border custom-checkbox"></span>
                        Грузия
                    </label>
                    <label>
                        <input type="checkbox" name='country' class="real-checkbox">
                        <span class="custom-border custom-checkbox"></span>
                        Грузия
                    </label>
                </div>
            </div>
            <div class="tour__filter__country">
                <h3>Тип</h3>
                <ul class="tour__filter__country__list">
                    <label>
                        <input type="checkbox" name='country' id="group" class="real-checkbox">
                        <span class="custom-border custom-checkbox"></span>
                        Групповой
                    </label>
                    <label>
                        <input type="checkbox" name='country' id="alone" class="real-checkbox">
                        <span class="custom-border custom-checkbox"></span>
                        Одиночный
                    </label>
                </ul>
            </div>
            <div class=" tour__filter__buttons">
                <a class="filter-true">Применить фильтры</a>
                <a class="filter-false"><img src="./assets/icons/close-icon.svg" alt="">Сбросить фильтры</a>
            </div>
        </form>  
 
        </div>
          
        

        <!-- Slider main container -->
        <div class="tour__slider swiper">

            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="tour__content">
                        <div class="tour__cards">
                            <?php for ($i = 1; $i < 9; $i++) : ?>
                                <a href="./tour-internal.php" class="card">
                                    <div class="card__img">
                                        <div class="img">
                                            <img data-lazy="/assets/images/tour.jpg" alt="img">
                                        </div>
                                    </div>
                                    <div class="card__name">
                                        Отдых на побережье Индийского океана ( Шри – Ланка)
                                    </div>
                                    <div class="card__info">
                                        <div class="loc">Дубаи</div>
                                        <div class="info">5 дней, 6 ночей</div>
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
                            <?php endfor ?>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tour__content">
                        <div class="tour__cards">
                            <?php for ($i = 1; $i < 9; $i++) : ?>
                                <a href="./tour-internal.php" class="card">
                                    <div class="card__img">
                                        <div class="img">
                                            <img data-lazy="/assets/images/tour.jpg" alt="img">
                                        </div>
                                    </div>
                                    <div class="card__name">
                                        Отдых на побережье Индийского океана ( Шри – Ланка)
                                    </div>
                                    <div class="card__info">
                                        <div class="loc">Дубаи</div>
                                        <div class="info">5 дней, 6 ночей</div>
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
                            <?php endfor ?>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tour__content">
                        <div class="tour__cards">
                            <?php for ($i = 1; $i < 9; $i++) : ?>
                                <a href="./tour-internal.php" class="card">
                                    <div class="card__img">
                                        <div class="img">
                                            <img data-lazy="/assets/images/tour.jpg" alt="img">
                                        </div>
                                    </div>
                                    <div class="card__name">
                                        Отдых на побережье Индийского океана ( Шри – Ланка)
                                    </div>
                                    <div class="card__info">
                                        <div class="loc">Дубаи</div>
                                        <div class="info">5 дней, 6 ночей</div>
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
                            <?php endfor ?>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tour__content">
                        <div class="tour__cards">
                            <?php for ($i = 1; $i < 9; $i++) : ?>
                                <a href="./tour-internal.php" class="card">
                                    <div class="card__img">
                                        <div class="img">
                                            <img data-lazy="/assets/images/tour.jpg" alt="img">
                                        </div>
                                    </div>
                                    <div class="card__name">
                                        Отдых на побережье Индийского океана ( Шри – Ланка)
                                    </div>
                                    <div class="card__info">
                                        <div class="loc">Дубаи</div>
                                        <div class="info">5 дней, 6 ночей</div>
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
                            <?php endfor ?>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tour__content">
                        <div class="tour__cards">
                            <?php for ($i = 1; $i < 9; $i++) : ?>
                                <a href="./tour-internal.php" class="card">
                                    <div class="card__img">
                                        <div class="img">
                                            <img data-lazy="/assets/images/tour.jpg" alt="img">
                                        </div>
                                    </div>
                                    <div class="card__name">
                                        Отдых на побережье Индийского океана ( Шри – Ланка)
                                    </div>
                                    <div class="card__info">
                                        <div class="loc">Дубаи</div>
                                        <div class="info">5 дней, 6 ночей</div>
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
                            <?php endfor ?>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tour__content">
                        <div class="tour__cards">
                            <?php for ($i = 1; $i < 9; $i++) : ?>
                                <a href="./tour-internal.php" class="card">
                                    <div class="card__img">
                                        <div class="img">
                                            <img data-lazy="/assets/images/tour.jpg" alt="img">
                                        </div>
                                    </div>
                                    <div class="card__name">
                                        Отдых на побережье Индийского океана ( Шри – Ланка)
                                    </div>
                                    <div class="card__info">
                                        <div class="loc">Дубаи</div>
                                        <div class="info">5 дней, 6 ночей</div>
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
                            <?php endfor ?>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tour__content">
                        <div class="tour__cards">
                            <?php for ($i = 1; $i < 9; $i++) : ?>
                                <a href="./tour-internal.php" class="card">
                                    <div class="card__img">
                                        <div class="img">
                                            <img data-lazy="/assets/images/tour.jpg" alt="img">
                                        </div>
                                    </div>
                                    <div class="card__name">
                                        Отдых на побережье Индийского океана ( Шри – Ланка)
                                    </div>
                                    <div class="card__info">
                                        <div class="loc">Дубаи</div>
                                        <div class="info">5 дней, 6 ночей</div>
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
                            <?php endfor ?>
                        </div>
                    </div>
                </div>

                
            </div>

            
            <div class="swiper__buttons">
                <div class="swiper-button-prev">Вперед</div>
                <div class="swiper-pagination">1</div>
                <div class="swiper-button-next">Назад</div>  
            </div>
            

        </div>




    </section>

    <section class="container-fluid section application">
        <div class="">
            <div class="info">
                <div class="info__content">
                    <div class="info__fill col-10 col-md-10 col-lg-6 col-xl-5">
                        <div class="info__fill_title">
                            <h3>
                                Оставьте заявку и мы подберем тур, подходящий именно вам:
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
                            Получите индивидуальный подбор тура по самой выгодной цене!
                        </h3>
                        <div class="info__offer_text">
                            <div class="info__offer_text__content">
                                <div class="info__offer_text-img">
                                    <img src="./assets/icons/info__offer-img__svg.svg" alt="">
                                </div>
                                <p>Предлагаем отели, которые наши эксперты проверили лично</p>
                            </div>

                            <div class="info__offer_text__content">
                                <div class="info__offer_text-img">
                                    <img src="./assets/icons/info__offer-img__svg.svg" alt="">
                                </div>
                                <p>Гарантируем поддержку личного менеджера на всех этапах отдыха</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section tour__contacts contacts">
        <div class=" container-fluid contacts">
            <div class="contacts__info ">
                <p class="contacts__info_title">Наши контакты</p>
                <p class="contacts__info_text">Свяжитесь с нами любым удобным для вас способом</p>
                <a href="tel:+998909909889" class="contacts__info_number">+998 90 990 98 89</a>
                <div class="contacts__row">
                    <a href="https://www.google.com/maps/search/%D0%AF%D0%BA%D0%BA%D0%B0%D1%81%D0%B0%D1%80%D0%B0%D0%B9%D1%81%D0%BA%D0%B8%D0%B9+%D1%80%D0%B0%D0%B9%D0%BE%D0%BD,+%D0%B4.14,/@41.2822353,69.2022794,13z/data=!3m1!4b1?entry=ttu" class="contacts__info_mail contacts__info-adress">
                        <div class="contacts__info_mail_icons">
                            <div class="contacts__info_mail_icons">
                                <img src="./assets/images/location.png" alt="">
                            </div>
                        </div>
                        <div class="contacts__info_mail_info">
                            <p>г. Ташкент, Яккасарайский район, д.14, напротив магазина Хает</p>
                            <img src="./assets/icons/arrow-right__white.svg" alt="">
                        </div>
                    </a>
                    <a href="mailto:ewttravel@gmail.com" class="contacts__info_mail contacts__info-email">
                        <div class="contacts__info_mail_icons">
                            <img src="./assets/images/mail.png" alt="">
                        </div>
                        <div class="contacts__info_mail_info">
                            <p>ewttravel@gmail.com</p>
                            <img src="./assets/icons/arrow-right__white.svg" alt="">
                        </div>
                    </a>
                </div>
                
            </div>
            <div class="contacts__left">
                <div class="contacts__img">
                    <img src="/assets/images/form.png" alt="">
                    <div class="contacts__img__info">
                        <h3 class="contacts__img__info-title">Абдурашидова Дильноза</h3>  
                        <p class="contacts__img__info-text">
                        Старший менеджер, который всегда готов ответить на ваши вопросы
                        </p>
                    </div>
                    <div class="contacts__img-circle"></div>
                </div>
            </div>
        </div>
    </section>


</main>




<!--  <div class="tour__content__buttons nav block">
                <a href="#" class="tour-arrow"><img src="./assets/icons/arrow-left.svg" alt="">Назад</a>
                <a href="#" class="number__tour-page nav-link active">1</a>
                <a href="#" class="number__tour-page nav-link">2</a>
                <a href="#" class="number__tour-page nav-link">3</a>
                <a href="#" class="number__tour-page nav-link">4</a>
                <a href="#" class="number__tour-page nav-link">5</a>
                <a href="#" class="tour-arrow">Вперёд<img src="./assets/icons/arrow-right.svg" alt=""></a>
            </div>  -->
<?php include "partials/footer.php" ?>