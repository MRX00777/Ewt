<?php

$kw = ''; // Keywords for SEO
$desc = ''; // Description for SEO
$title = 'Мой профиль';
$page = 'my-profile';


include "./partials/header.php" ?>

<main class="container-fluid main">
    <div class=" pages__name">
        <a href="./index.php" class="pages__name-left">Главная</a>
        <img src="./assets/icons/arrow-right.png" alt="">
        <a href="./my-profile.php" class="pages__name-right">Мой профиль</a>
    </div>

    <h2 class="main-title">Мой профиль</h2>
    <div class="main__buttons">
        <button class="my-tours tab show" data-tab="#tab-1">мои туры</button>
        <button class="personal-info tab" data-tab="#tab-2">личные данные</button>
    </div>

    <section id="tab-1" class="accordeon myprofil__accord tab__item show">
            <div class="accordeon__item">
                <button class="accordeon__item-btn myprofile__accordeon-btn">
                    Заказ № 678 900
                    <img class="accordeon__icon-myprofile" src="./assets/icons/accordeon__arrow-down.svg" alt="accordeon__icon-myprofile">
                </button>
                <div class="accordeon__item__content">
                    <p class="address__tour">Kite Beach. Отдых на побережье главного пляжа Дубаи</p>
                    <div class="region">
                        <p class="region-info">Южная Америка</p>
                        <p class="tour-day">5 дней, 6 ночей</p>
                    </div>
                    <div class="people__number">Количество человек: 
                        <span class="people__number-day">5</span>
                    </div>
                    <div class="payment__method">Способ оплаты:<span class="payment__method-choice">PayMe</span></div>
                    <div class="customer">Заказчик: <span class="customer-name">Абдувасит</span></div>
                    <div class="customer__tel">Телефон заказчика:<span class="customer__tel-info">+998 90 998 99 78</span></div>
                    <div class="order__price">
                        <p class="order__price-static">Стоимость за 1 человека: 16 000 000 сум </p>
                        <p class="order__price-dinamic">Итоговая стоимость:<span class="dinamic-info">16 000 000</span>сум</p>
                    </div>
                </div>
            </div>
            <div class="accordeon__item">
                <button class="accordeon__item-btn myprofile__accordeon-btn">
                    Заказ № 678 900
                    <img class="accordeon__icon-myprofile" src="./assets/icons/accordeon__arrow-down.svg" alt="accordeon__icon-myprofile">
                </button>
                <div class="accordeon__item__content">
                    <p class="address__tour">Kite Beach. Отдых на побережье главного пляжа Дубаи</p>
                    <div class="region">
                        <p class="region-info">Южная Америка</p>
                        <p class="tour-day">5 дней, 6 ночей</p>
                    </div>
                    <div class="people__number">Количество человек: 
                        <span class="people__number-day">5</span>
                    </div>
                    <div class="payment__method">Способ оплаты:<span class="payment__method-choice">PayMe</span></div>
                    <div class="customer">Заказчик: <span class="customer-name">Абдувасит</span></div>
                    <div class="customer__tel">Телефон заказчика:<span class="customer__tel-info">+998 90 998 99 78</span></div>
                    <div class="order__price">
                        <p class="order__price-static">Стоимость за 1 человека: <span>16 000 000 сум</span></p>
                        <p class="order__price-dinamic">Итоговая стоимость:<span class="dinamic-info">16 000 000 сум</span></p>
                    </div>
                </div>
            </div>
            

            <!-- Этот блок виден когда нет туров -->
            
            <!-- <div class="no__tours ">
                <h2 class="no__tours-title">У вас пока нет добавленных туров</h2>
                <p class="no__tours-info">
                    Перейдите в раздел “Туры” и выберете то, что нравится именно вам, а мы поможем вам по всем вопросам
                </p>
                <img src="./assets/images/no__tours-img.png" alt="no__tours-img" class="no__tours-img">
            </div> -->
    </section>

    

    <section id="tab-2" class="my__info tab__item">
        <div class="name">
            <div class="name__content">
                <span>Ваше имя</span>
                <h3>Абдувасит</h3>
            </div>
            <div class="icon-idit icon-edit__name"><img src="./assets/icons/edit-icon.svg" alt=""></div>
        </div>

        <div class="mobile__number">
            <div class="mobile__number__content">
                <span>Телефон</span>
                <h3>+998 90 989 88 89</h3>
            </div>
            <div class="icon-idit icon-edit__tel"><img src="./assets/icons/edit-icon.svg" alt=""></div>
        </div>


        <div id="modal___name" class="popup">
            <div class="popup__body">
                <div class="popup__content">
                    <a href="#" class="popup__close-name"><img src="./assets/icons/modal-close.png" alt=""></a>
                    <div class="pupup__title">Изменить имя</div>
                    <form action="" class="popup__form">
                        <div class="info__fill_input">
                            <p>Ваше имя<span>*</span></p>
                            <input class="info__fill_name" type="text" placeholder="Введите имя">
                            <div class="input">
                                <a href="#!" class="btn popup__btn">сохранить</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="modal___tel" class="popup__tel">
            <div class="popup__body">
                <div class="popup__content">
                    <a href="#" class="popup__close-tel"><img src="./assets/icons/modal-close.png" alt=""></a>
                    <div class="pupup__title">Изменить номер</div>
                    <div class="popup__form">
                        <div class="info__fill_input">
                            <p>Телефон</p>
                            <div class="input">
                                <input type="tel" id="telIndex" class="telCountry" required>
                                <input class="info__fill_number" type="hidden" name="phone" pattern="[0-9]" required>
                            </div>
                            <div class="input">
                                <a href="#!" class="btn popup__tel__btn">сохранить</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>


</main>


<?php include "./partials/footer.php" ?>