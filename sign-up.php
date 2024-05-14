<?php

$kw = ''; // Keywords for SEO
$desc = ''; // Description for SEO
$title = 'Регистрация';
$page = 'sign-up';


include "./partials/header.php" ?>


<main class="container-fluid main">

    <section class="login__part1">
        <div class="login__part1-title">Регистрация</div>
        <form action="" class="login__form">
            <div class="login__form__content">
                <p>Ваше имя<span>*</span></p>
                <input class="info__fill_name" type="text" placeholder="Введите имя">
                <p>Телефон<span>*</span></p>
                <div class="input">
                    <input type="tel" id="telIndex" class="telCountry" required>
                    <input class="info__fill_number" type="hidden" name="phone" pattern="[0-9]" required>
                    <p class="error__message">Номер телефона уже зарегистрирован</p>
                </div>
                
                <div class="input">
                    <a href="./sign-up-confirm.php" class="btn">получить код</a>
                </div>
                <div class="registration">
                    <p class="regitstration-question">Уже есть аккаунт?</p>
                    <a href="./login.php" class="registration-btn">войти</a>
                </div>
            </div>
        </form>
    </section>

</main>


<?php include "./partials/footer.php" ?>