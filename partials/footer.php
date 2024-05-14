<footer class="footer">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <div class="footer__wrapper">
                    <div class="footer__wrapper-left">
                        <div class="logo">
                            <img src="/assets/icons/logo.svg" alt="logo">
                            <p>Отдых и путешествия для каждого: <br> подбор тура по вашим предпочтениям</p>
                        </div>
                    </div>
                    <div class="footer__wrapper-center">
                        <ul class="footer__wrapper_inner footer__wrapper_inner-nav">
                            <li class="footer__wrapper_inner_link  <?php echo $active_tour ?>">
                                <a href="./../tour-pages.php">
                                    <p>Туры</p>
                                </a>
                            </li>
                            <li class="footer__wrapper_inner_link <?php echo $active_about_us ?>">
                                <a href="./../about-us.php">
                                    <p>О нас</p>
                                </a>
                            </li>
                            <li class="footer__wrapper_inner_link <?php echo $active_payment ?>">
                                <a href="./../payment-method.php">
                                    <p>способы оплаты</p>
                                </a>
                            </li>
                            <li class="footer__wrapper_inner_link <?php echo $active_contacts ?>">
                                <a href="./../contacts.php">
                                    <p>Контакты</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer__wrapper-right">
                        <div class="socials">
                            <a href="#!" class="socials__item g">
                                <svg width="17" height="17">
                                    <use xlink:href="/assets/icons/sprite.svg#icon-tg"></use>
                                </svg>
                            </a>
                            <a href="#!" class="socials__item g">
                                <svg width="17" height="17">
                                    <use xlink:href="/assets/icons/sprite.svg#icon-inst"></use>
                                </svg>
                            </a>
                            <a href="#!" class="socials__item g">
                                <svg width="17" height="17">
                                    <use xlink:href="/assets/icons/sprite.svg#icon-fb"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

</div>
<!-- /.wrapper -->
<script src="/assets/libraries/jquery/jquery.min.js"></script>
<script src="/assets/libraries/swiper/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/4.0.8/jquery.inputmask.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.0/js/intlTelInput.min.js"></script>
<script src="/assets/libraries/phonemask/phonemask.min.js"></script>
<script src="/assets/js/modal.js"></script>
<script src="/assets/js/swipers.js"></script>
<script src="/assets/js/script.js"></script>
<script src="/assets/js/lazyImage.js"></script>
<script src="/assets/js/telInput.js"></script>
</body>

</html>