<?php

$kw = ''; // Keywords for SEO
$desc = ''; // Description for SEO
$title = 'успешно оформили заказ';
$page = 'success';


include "./partials/header.php" ?>

<main class="container-fluid main">
    <section class="success">
        <p class="success__white">Ваш тур успешно оформлен! С вами свяжется наш менеджер для подтверждения бронирования тура</p>
        <p class="success__orange">В личном кабинете будет указан номер вашего заказа, который вы сможете озвучить менеджеру</p>

        <a href="./../my-profile.php" class="btn">личный кабинет</a>
    </section>
</main>


<?php include "./partials/footer.php" ?>