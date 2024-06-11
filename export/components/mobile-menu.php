<!-- Мобильное меню -->
<div class="mobile-menu d-xl-none">
    <div class="wrapper d-flex flex-column">

        <div class="d-flex align-items-center">

            <!-- Цветовой режим -->
            <div class="flex-grow-1">    
                <div class="color-mode align-items-center d-flex">
                    <div class="mode light">Светлая</div>
                    <div class="switcher d-flex align-items-center px-2">
                        <img src="./assets/img/switcher.svg" alt="">
                    </div>
                    <div class="mode dark">Темная</div>
                </div>
            </div>
            <!-- /Цветовой режим -->
            
            <!-- Закрыть -->
            <div class="close">
                <img src="./assets/img/icn/close.svg" alt="">
            </div>
            <!-- /Закрыть -->

        </div>

        <div class="title">Меню</div>

        <!-- Пункты меню -->
        <div class="menu-items flex-grow-1">
            <div class="item">
                <div class="item-title">
                    <span>Проекты домов</span>
                    <img src="./assets/img/arr.svg" alt="">
                </div>
                <div class="subitems">
                    <div class="subitem">
                        <a href="" class="subitem">Финские и Скандинавские</a>
                    </div>
                    <div class="subitem">
                        <a href="" class="subitem">Сканди Смарт</a>
                    </div>
                    <div class="subitem selected">
                        <a href="" class="subitem">Сканди Дачи</a>
                    </div>
                    <div class="subitem">
                        <a href="" class="subitem">Гаражи / Бани / Навесы</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item-title">
                    <a href="#">Наши работы</a>
                </div>
            </div>
            <div class="item">
                <div class="item-title">
                    <a href="#">дом в ипотеку от 5%</a>
                </div>
            </div>
            <div class="item">
                <div class="item-title">
                    <span>Читать</span>
                    <img src="./assets/img/arr.svg" alt="">
                </div>
                <div class="subitems">
                    <div class="subitem">
                        <a href="" class="subitem">О компании</a>
                    </div>
                    <div class="subitem">
                        <a href="" class="subitem">Новости</a>
                    </div>
                    <div class="subitem">
                        <a href="" class="subitem">Заказ и Доставка</a>
                    </div>
                    <div class="subitem">
                        <a href="" class="subitem">Отзывы</a>
                    </div>
                    <div class="subitem">
                        <a href="" class="subitem">Статьи о строительстве</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item-title">
                    <a href="#">О компании</a>
                </div>
            </div>
            <div class="item">
                <div class="item-title">
                    <a href="#">Контакты</a>
                </div>
            </div>
        </div>
        <!-- /Пункты меню -->


        <div class="d-flex align-items-center justify-content-between border-bottom border-style-light py-3">

            <div>
                <div class="theme-button outline">
                        <a href="">
                            <div class="wrap bg-white">
                                Дом в ипотеку от 5%
                            </div>
                        </a>
                </div>
            </div>


            <!-- Соцсети -->
            <div class="mobile-menu-socials">
                <?php include './components/socials.php'; ?>
            </div>
            <!-- /Соцсети -->

        </div>

        <div class="py-3 d-flex contacts align-items-start justify-content-between">
            <div class="time">
                с 09:00 - 20:00
                <span>(без выходных)</span>
            </div>
            <div class="d-sm-flex align-items-start">
                <div class="phones order-2">
                    +7 (921) 707-80-10<br>
                    8 (800) 550-96-76
                </div>
                <div class="email d-flex align-items-center order-1 pe-sm-5 py-2 py-sm-0">
                    <img src="./assets/img/icn/sms_dark.svg" alt="" class="pe-2">
                    <a href="mailto:sale@domavn.ru" class="">
                        sale@domavn.ru
                    </a>
                </div>

            </div>
        </div>

    </div>
</div>
<!-- / Мобильное меню -->




