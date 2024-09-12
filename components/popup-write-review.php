<div vm-popup="write-review" class="">
    <div class="wrapper">
        <div class="close"><img src="./assets/img/popup_close.svg" alt=""></div>
        <div class="split">    
            <div class="data">
                <div class="d-lg-flex mb-4">
                    <div class="flex-grow-1">
                        <div class="title">
                            Форма для отзыва
                        </div>
                        <div class="info pe-lg-4">
                            Заполните форму и напишите ваш отзыв о нашей работе.
                        </div>
                    </div>
                    <div class="">
                        <div class="d-flex review-stars">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <div class="review-stars-title">
                            <nobr>Оцените работу компании</nobr>
                        </div>
                    </div>
                </div>
                
                <div class="form">
                    <form action="">
                        <div class="row g-3">
                            <div class="col-lg-6">
                                <input type="text" name="name" value="" placeholder="Имя">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="email" value="" placeholder="Электронная почта">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="address" value="" placeholder="Адрес строительства">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="contract_num" value="" placeholder="Номер договора">
                            </div>
                            <div class="col-lg-12">
                                <textarea name="review_text" id="" placeholder="Написать отзыв..."></textarea>
                            </div>
                            <div class="col-lg-6">
                            <div class="warn">
                                <input type="checkbox">&nbsp;Нажимая на кнопку, вы даете согласие на обработку персональных данных и соглашаетесь c Политикой конфиденциальности
                            </div>
                            </div>
                            <div class="col-lg-6">
                                <input type="submit" value="Отправить отзыв">
                            </div>
                            <input type="hidden" id="write-review-stars" name="stars" value="0">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
