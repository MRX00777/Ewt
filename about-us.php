<?php

$kw = ''; // Keywords for SEO
$desc = ''; // Description for SEO
$title = 'О нас';
$page = 'about-us';




include "partials/header.php" ?>

<main class="main">

    <div class="container-fluid pages__name">
        <a href="./index.php" class="pages__name-left">Главная</a>
        <img src="./assets/icons/arrow-right.png" alt="">
        <a href="./about-us.php" class="pages__name-right">О нас</a>
    </div>

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
                    <?php for ($i = 1; $i < 10; $i++) : ?>
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


    <section class="history ">
        <h2 class="title history__title">Наша история</h2>
        <div class="history__row">
            <div class="history__row__text">
                <p>
                    Профессиональный туроператор по Узбекистану, EWP предоставляет сегментные
                    туристические услуги - бронирование отелей в Узбекистане и трансферы, а
                    также туры в Узбекистан из Москвы и Санкт-Петербурга, комбинированные
                    туры по Шелковому Пути на территории Центральной Азии.
                </p>
                <p>
                    Туры в Узбекистан из Москвы 2023 от туроператора Dolores Travel – «чистые
                    цены» без агентских надбавок, гарантия качества сервиса «на местах»:
                    отели и рестораны проверяются дирекцией.
                </p>
            </div>
            <div class="history__row__img">
                <div class="history-img">
                    <img src="./assets/images/history-img.png" alt="">
                </div>
                <div class="img-circle"></div>
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
                        <p class="choose__card_text">У нас есть множество интересных 
                             предложений по различным
                            направлениям и по финансовым возможностям.</p>
                    </div>

                    <div class="choose__card">
                        <img class="choose__card_img" src="/assets/images/ch2.png" alt="">
                        <p class="choose__card_title">Экономия финансов</p>
                        <p class="choose__card_text">С нами отдых обойдется значительно 
                             дешевле: бронирование туров
                            на нашем сервисе поможет избежать лишних затрат.</p>
                    </div>

                    <div class="choose__card">
                        <img class="choose__card_img" src="/assets/images/ch3.png" alt="">
                        <p class="choose__card_title">Предоставление лучших отелей</p>
                        <p class="choose__card_text">Вы сможете остановиться в проверенном 
                             месте по привлекательной
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
                        <div class="swiper-slide">
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
                        <div class="swiper-slide">
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
                        <div class="swiper-slide">
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
</main>



<?php include "partials/footer.php" ?>