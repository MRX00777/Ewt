<?php

$kw = ''; // Keywords for SEO
$desc = ''; // Description for SEO
$title = 'Вход';
$page = 'login';


include "./partials/header.php" ?>


<main class="container-fluid main">

    <section class="login__part1">
        <div class="login__part1-title">Вход в личный кабинет</div>
        <form action="" class="login__form">
            <div class="login__form__content">
                <p>Телефон<span>*</span></p>
                <div class="input">
                    <input type="tel" id="telIndex" class="telCountry" required>
                    <input class="info__fill_number" type="hidden" name="phone" pattern="[0-9]" required>
                </div>
                <div class="input">
                    <a href="./login-confirm.php" class="btn">получить код</a>
                </div>
                <div class="registration">
                    <p class="regitstration-question">Еще нет аккаунта?</p>
                    <a href="./sign-up.php" class="registration-btn">регистрация</a>
                </div>
            </div>
        </form>
    </section>

</main>


<?php include "./partials/footer.php" ?>