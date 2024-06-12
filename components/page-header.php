

<div class="page-header">

    <div class="header-top bg-style-green-darkest">

        <div class="container d-flex align-items-center py-2">
            <img src="./assets/img/icn/location.svg" alt="" class="d-none d-md-block">
            <div class="cities text-style-lightest ps-2 flex-grow-1 d-none d-md-block">
                Санкт-Петербург&nbsp;&nbsp;•&nbsp;&nbsp;Москва&nbsp;&nbsp;•&nbsp;&nbsp;Великий Новгород&nbsp;&nbsp;•&nbsp;&nbsp;Тверь
            </div>
            <img src="./assets/img/icn/sms.svg" alt="" class="d-xs-block d-md-none d-xl-block">
            <a href="mailto:sale@domavn.ru" class="email text-style-lightest px-2 d-md-none d-xl-block">sale@domavn.ru</a>
            <div class="flex-grow-1 d-md-none"></div>
            <a href="phone:+78005509676" class="phone text-style-lightest ps-4">8 (800) 550-96-76</a>
            <div class="color-mode align-items-center text-style-lightest ps-5 d-none d-lg-flex">
                <div class="mode light">Светлая</div>
                <div class="switcher d-flex align-items-center px-2">
                    <img src="./assets/img/switcher.svg" alt="">
                </div>
                <div class="mode dark">Темная</div>
            </div>
        </div>

    </div>

    <div class="header-bottom">
        <div class="container py-4 border-bottom border-bottom-1 border-style-light">

            <div class="d-flex align-items-center">

                <!-- Лого -->
                <a href="/" class="logo flex-grow-1">
                    <img src="./assets/img/logo.svg" alt="">
                </a>
                <!-- /Лого -->

                <!-- Гланвое меню  -->
                <div class="header-menu">
                    <div class="items">
                        <div class="item d-none d-lg-block">
                            <div class="link">
                                <a href="">Проекты домов</a>
                                <img src="./assets/img/arr.svg" alt="">
                            </div>
                            <div class="subitems text-style-grey">
                                <div class="subitem">
                                    <a href="" class="text-style-grey">Финские и Скандинавские</a>
                                    <span class="bg-style-lightest">23</span>
                                </div>
                                <div class="subitem">
                                    <a href="" class="text-style-grey">Сканди Смарт</a>
                                    <span class="bg-style-lightest">1</span>
                                </div>
                                <div class="subitem">
                                    <a href="" class="text-style-grey">Сканди Дача</a>
                                    <span class="bg-style-lightest">231</span>
                                </div>
                                <div class="subitem">
                                    <a href="" class="text-style-grey">Гаражи / Бани / Навесы</a>
                                    <span class="bg-style-lightest"></span>
                                </div>
                            </div>
                        </div>
                        <div class="item d-none d-lg-block">
                            <div class="link">
                                <a href="">Наши работы</a>
                            </div>
                        </div>
                        <div class="item d-none d-xl-block">
                            <div class="link">
                                <a href="">Читать</a>
                                <img src="./assets/img/arr.svg" alt="">
                            </div>
                            <div class="subitems text-style-grey">
                                <div class="subitem">
                                    <a href="" class="text-style-grey">О компании</a>
                                    <span class="bg-style-lightest"></span>
                                </div>
                                <div class="subitem">
                                    <a href="" class="text-style-grey">Новости</a>
                                    <span class="bg-style-lightest"></span>
                                </div>
                                <div class="subitem">
                                    <a href="" class="text-style-grey">Заказ и Доставка</a>
                                    <span class="bg-style-lightest"></span>
                                </div>
                                <div class="subitem">
                                    <a href="" class="text-style-grey">Отзывы</a>
                                    <span class="bg-style-lightest">3449</span>
                                </div>
                                <div class="subitem">
                                    <a href="" class="text-style-grey">Статьи о строительстве</a>
                                    <span class="bg-style-lightest"></span>
                                </div>
                            </div>
                        </div>
                        <div class="item d-none d-xl-block">
                            <div class="link">
                                <a href="">Контакты</a>
                                <!-- <img src="./assets/img/arr.svg" alt=""> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Гланвое меню  -->
                
                <!-- Кнопка -->
                <div class="theme-button gradient outline ms-4 d-none d-xl-block">
                    <a href="">
                        <div class="wrap bg-white">
                            Дом в ипотеку от 5%
                        </div>
                    </a>
                </div>
                <!-- /Кнопка -->

                <!-- Соцсети -->
                <div class="header-socials ms-4 d-none d-sm-block">
                    <?php include './components/socials.php'; ?>
                </div>
                <!-- /Соцсети -->

                <!-- Гамбургер -->
                 <div class="hamburger d-xl-none ms-2">
                    <img src="./assets/img/icn/burger.svg" alt="">
                 </div>
                <!-- /Гамбургер -->

            </div>
            
        </div>
    </div>

</div>


<?php
    include './components/mobile-menu.php';
?>