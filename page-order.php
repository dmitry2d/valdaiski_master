
<?php
    include "./components/header.php";

    include "./components/page-header.php";

    include "./components/breadcrumbs.php";
?>

<div class="page-content">

    <div class="order container">

        <div class="top row g-lg-5">
            <div class="col-lg-6 d-flex">
                <div class="photo">
                    <img src="./assets/img/photo/delivery.png" alt="">
                </div>
                <div class="d-none d-lg-block px-4"></div>
            </div>
            <div class="col-lg-5 py-lg-5">
                <h1 class="title mt-5 mt-lg-4">Заказ и доставка</h1>
                <p class="text">
                    В данном разделе вы найдете информацию, об этапах нашей работы, заказе и доставке одноэтажных каркасных домов в скандинавском стиле.
                </p>
                <div class="theme-button gradient mb-lg-4 mb-xl-5">
                    <a href="" class="wrap bg-white">
                            Заказать консультацию
                    </a>
                </div>
            </div>
        </div>

        <div class="stages my-5">
            <div class="stages-title">4 основных этапа нашей работы:</div>
            <div class="row stages-items g-4">

                <div class="col-lg-6">
                    <div class="stages-item">
                        <div class="stage-icon"><img src="./assets/img/icn/phone02.svg" alt=""></div>
                        <div class="stage-data">
                            <div class="stage-stage">01 этап</div>
                            <div class="stage-title">Оставить заявку на сайте или позвонить к нам в компанию </div>
                            <div class="stage-text">Если вы нашли в нашем каталоге проектов на сайте, подходящий проект дома или Вы хотите построить дом по индивидуальному проекту в скандинавском или финском стиле, то оставьте заявку на консультацию и мы свяжемся с вами для уточнения деталей.</div>
                            <div class="theme-button gradient">
                                <a href="" class="wrap">
                                        Заказать консультацию
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="stages-item">
                        <div class="stage-icon"><img src="./assets//img/icn/doc02.svg" alt=""></div>
                        <div class="stage-data">
                            <div class="stage-stage">02 этап</div>
                            <div class="stage-title">Согласование проекта дома и подписание договора </div>
                            <div class="stage-text">После согласования проекта дома и его комплектации мы составляем договор на строительство дома. Заключить договор мы сможем как в офисе компании, так и «удаленно». Наши специалисты всегда рады видеть в нашем офисе, но если у Вас нет возможности приехать к нам, мы всегда сможем помочь Вам через почту, skype, телефон или онлайн консультанта.</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="stages-item">
                        <div class="stage-icon"><img src="./assets//img/icn/truck02.svg" alt=""></div>
                        <div class="stage-data">
                            <div class="stage-stage">03 этап</div>
                            <div class="stage-title">Доставка, подготовка фундамента и сборка дома на вашем участке</div>
                            <div class="stage-text">
                                С момента заключения договора и до заезда на Ваш участок проходит от двух  до восьми недель. Сроки строительства состовляет от четырех до двенадцати недель, в зависимости от объема работ и комплектации проекта. Доставка осуществляется на машине неповышенной проходимости (Камаз/Маз с прицепом).
                                <br><br>
                                Доставка до Москвы (МКАД + 100км) и Санкт-Петербурга (КАД +100км) бесплатно!
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="stages-item">
                        <div class="stage-icon"><img src="./assets//img/icn/house-02.svg" alt=""></div>
                        <div class="stage-data">
                            <div class="stage-stage">04 этап</div>
                            <div class="stage-title">Сдача готового дома заказчику и гарантийный период</div>
                            <div class="stage-text">
                                После завершения всех необходимых работ, подключения коммуникаций согласно выбранной комплектации, мы передаем заказчику готовый дом и подписываем акт приема-передачи.
                                <br><br>
                                После сдачи дома действует гарантийный период.
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="py-2">&nbsp;</div>

        <div class="order-geo my-5">
            <div class="order-geo-icon">
                <img src="./assets/img/icn/symbol-two-topors.svg" alt="">
            </div>
            <div class="order-geo-data">
                <div class="order-geo-title mb-4">
                    География нашего строительства:
                </div>
                <div class="order-geo-text">
                    С 2007 года мы строили дома от Мурманска до Сочи, в 2019 мы локализовались в ближайших к производству регионах. Преобладающие регионы нашего строительства: Великий Новгород и Новгородская область, Москва и Московская область, Санкт-Петербург и Ленинградская область, Тверь и Тверская область, Вологда и Вологодская область и другие ближайшие регионы. Если вы находитесь в соседних регионах - пишите и мы уточним возможность строительства в Вашем регионе и  рассчитаем доставку до Вашего участка. 
                </div>
            </div>
        </div>

    </div>

    <div class="py-2">&nbsp;</div>

    <div class="container">
        <?php include "./components/get-consult.php"; ?>
    </div>

    <?php
        include "./components/catalogue-widget.php";
    ?>

    <?php
        include "./components/vk-video-widget.php";
    ?>

    <?php
        include "./components/works-gallery.php";
    ?>

    <?php
        include "./components/consult-footer-widget.php";
    ?>

</div>

<?php
    include "./components/page-footer.php";
?>

<?php
    include "./components/footer.php";
?>