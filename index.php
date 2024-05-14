<?php

$kw = ''; // Keywords for SEO
$desc = ''; // Description for SEO
$title = 'Главная';
$page = 'index';




include "partials/header.php" ?>

<main class="index">


    <aside class="top">
        <img src="/assets/images/uzor.png" alt="">
    </aside>
    <aside class="center">
        <img src="/assets/images/bg1.png" alt="">
    </aside>
    <aside class="bottom">
        <img src="/assets/images/bg2.png" alt="">
    </aside>
    <section class="section hero">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-xl-9">
                    <h1 class="hero__title">
                        Бронируйте туры в 2 клика, не выходя из дома
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <section class="section tour ">
        <div class="container-fluid">
            <div class="tour__title">
                Популярные туры
            </div>
            <div class="row tour__content">
                <?php for ($i = 1; $i < 9; $i++): ?>
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 tour__row__card">
                        <a href="./tour-internal.php" class="card">
                            <div class="card__img">
                                <div class="img">
                                    <img data-lazy="/assets/images/tour-images.jpg" alt="img">
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
            <div class="btn__wrapper">
                <a href="./tour-pages.php" class="btn">
                    смотреть все туры
                </a>
            </div>
        </div>
    </section>
    <section class="garants">
        <div class="container-fluid">
            <div class="garants__wrapper">
                <div class="title">
                    Наши гарантии
                </div>
                <div class="tab">
                    <div class="tab__nav">
                        <div class="tab__nav--scrollable swiper">

                            <div class="swiper-wrapper garants__swiper__wrapper">
                                <!-- Slides -->
                                <div  class="swiper-slide">                                    <div class="tablinks active" onclick="openTab(event, 'gar1')">
                                        <div class="g">
                                            <svg width="20" height="20">
                                                <use xlink:href="/assets/icons/sprite.svg#garant1"></use>
                                            </svg>
                                        </div>
                                        <p>Надежность и безопасность</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">                                    <div class="tablinks " onclick="openTab(event, 'gar2')">
                                        <div class="g">
                                            <svg width="20" height="20">
                                                <use xlink:href="/assets/icons/sprite.svg#garant2"></use>
                                            </svg>
                                        </div>
                                        <p>Круглосуточная поддержка</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">                                    <div class="tablinks " onclick="openTab(event, 'gar3')">
                                        <div class="g">
                                            <svg width="20" height="20">
                                                <use xlink:href="/assets/icons/sprite.svg#garant3"></use>
                                            </svg>
                                        </div>
                                        <p>Гарантия лучшей цены</p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-scrollbar"></div>    
                        </div>
                    </div>
                    <div class="tab__content ">
                        <div id="gar1" class="tabcontent active">
                            <div class="tab__content__row">
                                <div class="tab__content_field">
                                    <div class="tab__content_field_title">
                                        <p>Только надежные и безопасные туры</p>
                                    </div>
                                    <div class="tab__content_field_desc">
                                        <p>Бронирование надежных и безопасных туров - это залог удачного и комфортного
                                            отдыха. Важно удостовериться, что все условия и маршрут тура соответствуют
                                            вашим
                                            пожеланиям и потребностям. Бронируя тур у нас, вы можете быть уверены в его
                                            надежности и безопасности.</p>
                                    </div>
                                    <div class="btn__choose">
                                        <a href="./login.php" class="btn">выбрать тур</a>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 d-flex justify-content-end align-items-center">
                                    <div class="tab__content_field_img">
                                        <img src="./assets/images/garant_original.png" alt="bagajImg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="gar2" class="tabcontent">
                            <div class="tab__content__row">
                                    <div class="tab__content_field">
                                        <div class="tab__content_field_title">
                                            <p>Круглосуточная поддержка</p>
                                        </div>
                                        <div class="tab__content_field_desc">
                                            <p>Бронирование надежных и безопасных туров - это залог удачного и комфортного
                                                отдыха. Важно удостовериться, что все условия и маршрут тура соответствуют
                                                вашим
                                                пожеланиям и потребностям. Бронируя тур у нас, вы можете быть уверены в его
                                                надежности и безопасности.</p>
                                        </div>
                                        <div class="btn__choose">
                                            <a href="./tour-pages.php" class="btn">выбрать тур</a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 d-flex justify-content-end align-items-center">
                                        <div class="tab__content_field_img">
                                            <img src="./assets/images/garant_original.png" alt="bagajImg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div id="gar3" class="tabcontent">
                            <div class="tab__content__row">
                                    <div class="tab__content_field">
                                        <div class="tab__content_field_title">
                                            <p>Гарантия лучшей цены</p>
                                        </div>
                                        <div class="tab__content_field_desc">
                                            <p>Бронирование надежных и безопасных туров - это залог удачного и комфортного
                                                отдыха. Важно удостовериться, что все условия и маршрут тура соответствуют
                                                вашим
                                                пожеланиям и потребностям. Бронируя тур у нас, вы можете быть уверены в его
                                                надежности и безопасности.</p>
                                        </div>
                                        <div class="btn__choose">
                                            <a href="./tour-pages.php" class="btn">выбрать тур</a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 d-flex justify-content-end align-items-center">
                                        <div class="tab__content_field_img">
                                            <img src="./assets/images/garant_original.png" alt="bagajImg">
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section application">
        <div class="container-fluid">
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
    <section class="section heroAbout">
        <div class="container-fluid">
            <div class="job">
                <div class="job__title">
                    <h2 class="job__info_title">
                        EWT – компания, успешно осуществляющая туроператорскую и агентскую деятельность
                    </h2>
                </div>
                <div class="job__text">
                    <p>
                        В портфель основных направлений входят Чехия, Франция, Италия, Бенилюкс, Австрия, Испания,
                        Израиль, Германия, Турция,Таиланд,Египет, Вьетнам, Мальдивы и другие страны (экскурсионные,
                        лечебно-оздоровительные туры, пляжный отдых, отдых на озерах и в горах, организация свадеб, MICE
                        для групп любого размера, событийные и паломнические туры).
                    </p>
                </div>
            </div>
        </div>
        <div class="heroAbout__wrapper">
            <div class="swiper mySwiperHeroAbout">
                <div class="swiper-wrapper">
                    <?php for ($i = 1; $i < 10; $i++): ?>
                        <div class="swiper-slide">
                            <div class="img" data-src="/assets/images/gal.jpg" data-fancybox="gallery">
                                <img data-lazy="/assets/images/gal.jpg" alt="img">
                            </div>
                        </div>
                    <?php endfor ?>
                </div>
            </div>
        </div>
    </section>
    <section class="section chooseUs">
        <div class="container-fluid">
            <div class="choose">
                <p class="chooseUs__title">Почему стоит выбрать нас:</p>
                <div class="choose__cards row d-flex align-items-center justify-content-center">

                        <div class="choose__card">
                            <img class="choose__card_img" src="/assets/images/ch1.png" alt="">
                            <p class="choose__card_title">Огромный выбор туров на любой вкус</p>
                            <p class="choose__card_text">У нас есть множество интересных предложений по различным
                                направлениям и по финансовым возможностям.</p>
                        </div>

                        <div class="choose__card">
                            <img class="choose__card_img" src="/assets/images/ch2.png" alt="">
                            <p class="choose__card_title">Экономия финансов</p>
                            <p class="choose__card_text">С нами отдых обойдется значительно дешевле: бронирование туров
                                на нашем сервисе поможет избежать лишних затрат.</p>
                        </div>

                        <div class="choose__card">
                            <img class="choose__card_img" src="/assets/images/ch3.png" alt="">
                            <p class="choose__card_title">Предоставление лучших отелей</p>
                            <p class="choose__card_text">Вы сможете остановиться в проверенном месте по привлекательной
                                цене или выбрать отдых ВИП-класса.</p>
                        </div>

                </div>
            </div>
        </div>
    </section>
    <section class="section feedback">
        <div class="container-fluid">
            <p class="feedback__title">Отзывы</p>
            <div class="">
                <div class="feedback__card  justify-content-center swiper">

                    <div class="swiper-wrapper">

                    
                    <!-- Slides -->
                        <div class="swiper-slide feedback__slide">
                            <div class="feedback__item col-12 col-md-12 col-lg-5">
                                <div class="feedback__item_nav">
                                    <div class="feedback__item_nav-img">
                                       <img src="/assets/images/avatarPic.png" alt=""> 
                                    </div>
                                    <div class="feedback__item_nav_text">
                                        <p class="feedback__item_name">Абдувасит Абдуманнобзода</p>
                                        <p class="feedback__item_position">Владелец сети компаний</p>
                                    </div>
                                </div>
                                <p class="feedback__item_text">Только что вернулись с женой из путешествия. Отдыхали в
                                    Эмиратах. Галина подобрала нам
                                    великолепные аппартаменты, до пляжа 5 минут ходьбы. Рядом много вкусных ресторанов. Также
                                    Галина
                                    посоветовала нам в какие тц лучше съездить, на какие экскурсии сходить. Отдыхом довольны на
                                    все
                                    100000%!! Спасибо большое Галине!</p>
                            </div>
                        </div>
                        <div class="swiper-slide feedback__slide">
                            <div class="feedback__item col-12 col-md-12 col-lg-5">
                                <div class="feedback__item_nav">
                                    <div class="feedback__item_nav-img">
                                       <img src="/assets/images/ch1.png" alt=""> 
                                    </div>
                                    <div class="feedback__item_nav_text">
                                        <p class="feedback__item_name">Абдувасит Абдуманнобзода</p>
                                        <p class="feedback__item_position">Владелец сети компаний</p>
                                    </div>
                                </div>
                                <p class="feedback__item_text">Только что вернулись с женой из путешествия. Отдыхали в
                                    Эмиратах. Галина подобрала нам
                                    великолепные аппартаменты, до пляжа 5 минут ходьбы. Рядом много вкусных ресторанов. Также
                                    Галина
                                    посоветовала нам в какие тц лучше съездить, на какие экскурсии сходить. Отдыхом довольны на
                                    все
                                    100000%!! Спасибо большое Галине!</p>
                            </div>
                        </div>
                        <div class="swiper-slide feedback__slide">
                            <div class="feedback__item col-12 col-md-12 col-lg-5">
                                <div class="feedback__item_nav">
                                    <div class="feedback__item_nav-img">
                                       <img src="/assets/images/ch2.png" alt=""> 
                                    </div>
                                    <div class="feedback__item_nav_text">
                                        <p class="feedback__item_name">Абдувасит Абдуманнобзода</p>
                                        <p class="feedback__item_position">Владелец сети компаний</p>
                                    </div>
                                </div>
                                <p class="feedback__item_text">Только что вернулись с женой из путешествия. Отдыхали в
                                    Эмиратах. Галина подобрала нам
                                    великолепные аппартаменты, до пляжа 5 минут ходьбы. Рядом много вкусных ресторанов. Также
                                    Галина
                                    посоветовала нам в какие тц лучше съездить, на какие экскурсии сходить. Отдыхом довольны на
                                    все
                                    100000%!! Спасибо большое Галине!</p>
                            </div>
                        </div>
                        
                    
                    </div>
                    
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>
                    
                </div>
            </div>
        </div>
    </section>
    <section class="section  contacts">
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


<?php include "partials/footer.php" ?>