<?php

$kw = ''; // Keywords for SEO
$desc = ''; // Description for SEO
$title = 'Заказать тур';
$page = 'payment-order';


include "./partials/header.php" ?>


<main class="container-fluid main">
    <h2 class="main__payment-title">Заказать тур</h2>

    <section class="adress ">
        <div class="adress__content"><p>Kite Beach. Отдых на побережье главного пляжа Дубаи</p></div>
        <div class="adress__info">
            <p class="adress__info-country">Южная Америка</p>
            <p class="adress__info-day">5 дней, 6 ночей</p>
        </div>
    </section>


    <section class="order__price ">
        <div class="number__people">
            <p class="number__people-text">Количество человек:</p>
            <div class="number__people__count">
                <button class="minus"></button>
                <span class="people-number">1</span>
                <button class="plus"></button>
            </div>
        </div>

        <div class="order__price__content">
            <p class="static">Стоимость за 1 человека: 16 000 000 сум </p>
            <p class="dinamic">Итоговая стоимость:<span class="dinamic-info">16 000 000</span>сум</p>
        </div>
    </section>


<form action="">


<section class="payment__method">
        <h3 class="payment__method-title">Выберите способ оплаты:</h3>
        <div action="" class="payment__method__content">
            <label class="round-checkbox click">
                <input type="radio"  name="myCheckbox" class="real-checkbox">
                <span class="custom-border custom-checkbox"></span>
                <img src="./assets/images/Click.jpg" alt="">
            </label>
            <label class="round-checkbox payme">
                <input type="radio"  name="myCheckbox" class="real-checkbox">
                <span class="custom-border custom-checkbox"></span>
                <img src="./assets/images/payme.jpg" alt="">
            </label>
            <label class="round-checkbox ">
                <input type="radio"  name="myCheckbox" class="real-checkbox">
                <span class="custom-border custom-checkbox"></span>
                Наличными
            </label>
            <label class="round-checkbox">
                <input type="radio"  name="myCheckbox" class="real-checkbox">
                <span class="custom-border custom-checkbox"></span>
                Перечислением
            </label>
        </div>
    </section>


    <section class="order__contacts">
        <h3 class="order__contacts-title">Контактные данные:</h3>

        <div class="order__contacts__form">
            <div class="name">
                <p>Ваше имя</p>
                <input class="info__fill_name" type="text" placeholder="Введите имя">
            </div>
            <div class="telephone">
               <p>Телефон</p>
                <div class="input">
                    <input style="color: #091C43" type="tel" id="telIndex" class="telCountry" required>
                    <input class="info__fill_number" type="hidden" name="phone">
                    <p>*На этот номер позвонит менеджер для подтверждения заказа</p>
                </div> 
            </div>
            
        </div>
    </section>


<a href="./success.php" class="order-btn">оформить заказ</a>
</form>

    






</main>



<?php include "./partials/footer.php" ?>