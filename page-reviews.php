
<?php
    include "./components/header.php";

    include "./components/page-header.php";

    include "./components/breadcrumbs.php";
?>

<div class="page-content">
    
    <div class="page-reviews">
        <div class="container">

            <div class="d-lg-flex align-items-center">
                <div class="flex-grow-1">
                    <div class="page-title">
                        Отзывы о работе компании
                    </div>
                    <div class="page-title-description my-4 my-md-0">
                        В данном разделе публикуются отзывы о работе нашей компании.
                    </div>
                </div>
                <div class="">                    
                    <a href="">
                        <img src="./assets/img/rating_1.svg" alt="" class="">
                    </a>
                </div>
            </div>

            <div class="border-bottom border-style-lighter my-5 d-none d-lg-5"></div>

            <div class="row mt-5">
                <div class="col-lg-4 left">
                    <div class="d-block d-sm-flex d-lg-block">
                        <div class="reviews-dir-photo mb-4">
                            <img src="./assets/img/photo/loginov01.png" alt="" class="w-100">
                        </div>
                        <div class="ps-sm-5 ps-lg-0">
                            <div class="reviews-dir-text mb-4">
                                Рады приветствовать Вас в нашем разделе “Отзывы о работе компании”. Будем рады любому честному отзыву от вас, напишите о своем доме и его строителстве.
                            </div>
                            <div class="reviews-dir-sign mb-4">
                                С уважением, руководитель компании Лoгинoв А.В.
                            </div>
                        </div>
                    </div>
                    <div class="border-bottom border-style-lighter mb-4"></div>
                    <div class="review-create">
                        <a href="">Написать отзыв о работе компании</a>
                    </div>
                    <div class="reviews-dir-instruct my-4">
                        Чтобы оставить отзыв о работе компании, укажите номер догвора, место и сроки строительства. Напишите текст и добавьте фото вашего дома, чтобы отзыв был информативным.  
                    </div>
                    <div class="d-flex flex-wrap my-4 b-2">
                        <a href="" class="me-1">
                            <img src="./assets/img/rating_1.svg" alt="" class="mb-2">
                        </a>
                        <a href="">
                            <img src="./assets/img/rating_2.svg" alt="" class="mb-2">
                        </a>
                    </div>
                    <div class="reviews-more">
                        <a href="">Больше отзывов на Яндекс Картах</a>
                    </div>

                </div>
                
                <div class="d-none d-lg-block col-1"></div>

                <div class="col-lg-7 right">
                    <div class="reviews-title d-flex align-items-end mt-5 mt-lg-0">
                        <div class="reviews-title-text pe-2">
                            Отзывы о компании
                        </div>
                        <div class="reviews-title-tag">
                            2204122
                        </div>
                    </div>

                    <?php include './components/reviews-item.php' ?>
                    <?php include './components/reviews-item.php' ?>
                    <?php include './components/reviews-item.php' ?>

                </div>


            </div>


        </div>
    </div>

    <?php
        include "./components/catalogue-widget.php";
    ?>

</div>

<?php
    include "./components/page-footer.php";
?>

<?php
    include "./components/footer.php";
?>