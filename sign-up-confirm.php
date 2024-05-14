<?php

$kw = ''; // Keywords for SEO
$desc = ''; // Description for SEO
$title = 'Регистрация';
$page = 'sign-up-confirm';


include "./partials/header.php" ?>

<main class="container-fluid main">
    <section class="confirm">
        <h3 class="confirm-title">
            Код отправлен на номер
            <span class="confirm-title__number">+998 (99) 123 45 67</span>
        </h3>

        <form class="confirm-form" action="">
            <div class="confirm-form__content">
                <input type="text" maxlength="1" size="1" pattern="[0-9]" required placeholder="-" oninput="moveToNextOrPreviousInput(event, this)">
                <input type="text" maxlength="1" size="1" pattern="[0-9]" required placeholder="-" oninput="moveToNextOrPreviousInput(event, this)">
                <input type="text" maxlength="1" size="1" pattern="[0-9]" required placeholder="-" oninput="moveToNextOrPreviousInput(event, this)">
                <input type="text" maxlength="1" size="1" pattern="[0-9]" required placeholder="-" oninput="moveToNextOrPreviousInput(event, this)"> 
            </div>
            <p class="error__message">Вы ввели неверный код</p>
            <a>Отправить код заново <span>00:60</span></a>
            <button type="submit" class="btn sign-up__btn">зарегистрироваться</button>
        </form>
    </section>
</main>


<?php include "./partials/footer.php" ?>