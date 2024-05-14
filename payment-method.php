<?php

$kw = ''; // Keywords for SEO
$desc = ''; // Description for SEO
$title = 'Способы оплаты';
$page = 'payment-method';




include "partials/header.php" ?>


<main class="main">

    <div class="container-fluid pages__name">
        <a href="./index.php" class="pages__name-left">Главная</a>
        <img src="./assets/icons/arrow-right.png" alt="">
        <a href="./payment-method.php" class="pages__name-right">Способы оплаты</a>
    </div>

    <section class="container-fluid payment">
        <h2 class="payment-title">Способы оплаты</h2>
        <p class="payment-info">Для оформления заказа доступы следующие формы оплаты:</p>
        <div class="payment__list">
            <a href="#" class="payment__list-link click"><img src="./assets/images/Click.jpg" alt=""></a>
            <a href="#" class="payment__list-link payme"><img src="./assets/images/payme.jpg" alt=""></a>
            <a href="#" class="payment__list-link">Наличными</a>
            <a href="#" class="payment__list-link">Перечислением</a>
        </div>

        <div class="payment__text">
            <p class="payment__text-content">
            После оформления заказа с вами свяжется наш менеджер для подтверждения заказа, пожалуйста, ответьте на его звонок, чтобы забронировать тур.
            </p>
        </div>
    </section>
</main>






<?php include "partials/footer.php" ?>