<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="<?= $kw ?>">
    <meta name="description" content="<?= $desc ?>">
    <link rel="shortcut icon" href="./../fav/favicon.svg" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="/fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/fav/favicon-16x16.png">
    <link rel="manifest" href="/fav/site.webmanifest">
    <link rel="mask-icon" href="/fav/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="/assets/libraries/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.0/css/intlTelInput.css">
    <link rel="stylesheet" href="/assets/css/global.css">
    
    <?php
    switch ($page) {
        case 'index':
            echo '<link rel="stylesheet" href="/assets/css/index.css">';
            break;
        case 'quiz':
            echo '<link rel="stylesheet" href="/assets/css/quiz.css">';
            break;
        case 'tour-pages':
            echo '<link rel="stylesheet" href="./assets/css/tour-pages.css">';
            $active_tour = 'header__nav-active';
            break;
        case 'about-us':
            echo '<link rel="stylesheet" href="./assets/css/about-us.css">';
            $active_about_us = 'header__nav-active';
            break;
        case 'payment-method':
            echo '<link rel="stylesheet" href="./assets/css/payment-method.css">';
            $active_payment = 'header__nav-active';
            break;
        case 'contacts':
            echo '<link rel="stylesheet" href="./assets/css/contacts.css">';
            $active_contacts = 'header__nav-active';
            break;
        case 'tour-internal':
            echo '<link rel="stylesheet" href="./assets/css/tour-internal.css">';
            break;
        case 'payment-order':
            echo '<link rel="stylesheet" href="../assets/css/payment-order.css">';
            break;
        case 'success':
            echo '<link rel="stylesheet" href="../assets/css/success.css">';
            break;
        case 'my-profile':
            echo '<link rel="stylesheet" href="../assets/css/my-profile.css">';
            $active_my__profile = 'my-profile__active';
            break;
        case 'login':
            echo '<link rel="stylesheet" href="../assets/css/login.css">';
            break;
        case 'sign-up':
            echo '<link rel="stylesheet" href="../assets/css/sign-up.css">';
            break;
        case 'login-confirm':
            echo '<link rel="stylesheet" href="../assets/css/login-confirm.css">';
            break;
        case 'sign-up-confirm':
            echo '<link rel="stylesheet" href="../assets/css/sign-up-confirm.css">';
            break;
    }
    ?>
    <title><?= $title ?></title>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="container-fluid">
                <div class="header__wrapper">
                    <div class="header__item header__item-left">
                        <a href="/" class="header__item_inner header__item_inner-logo">
                            <img src="/assets/icons/logo.svg" alt="logo">
                        </a>
                    </div>
                    <div class="header__item header__item-right">
                        <?php include "includes/nav.php" ?>
                        <?php include "includes/lang.php" ?>
                        <a href="./../my-profile.php" class="btn <?php echo $active_my__profile?>">личный кабинет</a>
                        <div class="burger " onclick="toggleMobileMenu()">
                            <div class="burger__wrapper">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>