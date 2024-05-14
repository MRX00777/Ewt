<?php

$kw = ''; // Keywords for SEO
$desc = ''; // Description for SEO
$title = 'Контакты';
$page = 'contacts';


include "partials/header.php" ?>

<main class="main">
    
<div class="container-fluid pages__name">
    <a href="./index.php" class="pages__name-left">Главная</a>
    <img src="./assets/icons/arrow-right.png" alt="">
    <a href="./contacts.php" class="pages__name-right">Контакты</a>
</div>

<section class="container-fluid section  contacts">
        <div class="contacts">
            <div class="contacts__info">
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
                    <div class="socials contacts__social">
                        <a href="#!" class="socials__item g contacts__social-item">
                            <svg width="17" height="17">
                                <use xlink:href="/assets/icons/sprite.svg#icon-tg"></use>
                            </svg>
                        </a>
                        <a href="#!" class="socials__item g contacts__social-item">
                            <svg width="17" height="17">
                                <use xlink:href="/assets/icons/sprite.svg#icon-inst"></use>
                            </svg>
                        </a>
                        <a href="#!" class="socials__item g contacts__social-item">
                            <svg width="17" height="17">
                                <use xlink:href="/assets/icons/sprite.svg#icon-fb"></use>
                            </svg>
                        </a>
                    </div>
                </div>
                
            </div>
            <div class="contacts__left">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2998.425223930498!2d69.29574797646053!3d41.277849102781936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38aef550be52b085%3A0x800b9aecba152a58!2z0JTQvtC8IOKEljE0LCBZYW5naXphbW9uIFN0IDE0LCAxMDAwMDUsINCi0LDRiNC60LXQvdGCLCBUb3Noa2VudCBTaGFocmksINCj0LfQsdC10LrQuNGB0YLQsNC9!5e0!3m2!1sru!2sus!4v1710312850007!5m2!1sru!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
</section>

<section class="section application contacts__bottom">
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

</main>





<?php include "partials/footer.php" ?>