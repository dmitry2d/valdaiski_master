
<?php
    include "./components/header.php";

    include "./components/page-header.php";

    include "./components/breadcrumbs.php";
?>

<div class="page-content">
    
    <div class="works-gallery works-gallery-full">
        
        <div class="full-photo d-lg-none mb-5">
            <img src="./assets/img/photo/house01.png" alt="" class="w-100">
        </div>

        <div class="container">

            <div class="full-icon d-none d-lg-block text-center">
                <img src="./assets/img/tool-green.svg" alt="">
            </div>


            <div class="full-title text-center my-3">Наши работы одноэтажных каркасных домов в Санкт-Петербурге и Москве</div>
            
            <div class="full-description text-center my-5">В данном разделе вы найдете фото реализованных каркасных проектов, готовых домов и бань, построенных нашими мастерами. Мы строим исключительно одноэтажные каркасные дома из нашего каталога в скандинавском и финском стиле из строганного и сухого материала высшего сорта. А так же реализуем индивидуальные проекты, разработанные под вас нашими архитекторами.</div>    

            <div class="full-tags d-flex flex-wrap justify-content-center align-items-center my-5">
                <div class="full-tag active">Все работы</div>
                <div class="full-tag">Сканди Смарт</div>
                <div class="full-tag">Финские и Скандинавские</div>
                <div class="full-tag">Сканди Смарт</div>
                <div class="full-tag">Финские и Скандинавские</div>
                <div class="full-tag">Сканди Смарт</div>
                <div class="full-tag">Финские и Скандинавские</div>
                <div class="full-tag">Сканди Смарт</div>
                <div class="full-tag">Финские и Скандинавские</div>
                <div class="full-tag">Сканди Смарт</div>
                <div class="full-tag">Финские и Скандинавские</div>
            </div>

            <div class="row align-items-stretch">

                <div class="col-lg-6 col-xl-4 d-flex"><?php include './components/works-gallery-item-social.php' ?></div>

                <?php for ($i = 1; $i <= 10; $i++) {?>
                    
                <div class="col-lg-6 col-xl-4 d-flex"><?php include './components/works-gallery-item.php' ?></div>

                <?php }?>

    
            </div>
    
        </div>

        <!-- Навигация страниц -->
        <div class="my-3 pt-2 d-flex justify-content-center">
            <?php include "./components/page-nav.php" ?>
        </div>
        <!-- / Навигация страниц -->

    </div>

    <?php
        include "./components/catalogue-widget.php";
    ?>

    <?php
        include "./components/individual-widget.php";
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