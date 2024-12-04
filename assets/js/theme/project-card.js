

$(document).ready (e => {

        /// Слайдер карточки проекта

        const card_slider = {
            index: 0,
            length: $('.project-slider-gallery .item').length
        };

        // Дублирую превью картинки в основное окно слайдера
        $('.project-slider-gallery .item img').map((index, element) => {
            let html =
            `<div class="item">
                <a href="${$(element).attr('src')}" data-lightbox="work-card">
                    <img src="">
                </a>
            </div>`;
            $('.project-slider-main .items').append(html);
        });

        // Ставлю активную картинку
        card_slider.setImage = function () {
            // Активирую большой слайд
            let img_src = $(`.project-slider-main .items .item:nth-child(${card_slider.index + 1}) a`).attr('href');
            $(`.project-slider-main .items .item img`).attr('src', '');
            $(`.project-slider-main .items .item:nth-child(${card_slider.index + 1}) img`).attr('src', img_src);
            $(`.project-slider-main .items .item`).removeClass('active');
            $(`.project-slider-main .items .item:nth-child(${card_slider.index + 1})`).addClass('active');
            // Выделяю превью слайд
            $(`.project-slider-gallery .items .item`).removeClass('active');
            $(`.project-slider-gallery .items .item:nth-child(${card_slider.index + 1})`).addClass('active');
        }
        card_slider.setImage();

        // Клик на превью
        $('.project-slider-gallery .item').click (function () {
            if (window.dragscrollOffset) return; // если пользователь тащит превью не надо ничего делать
            card_slider.index = $(this).index();
            card_slider.setImage();
        });
        // Взад вперед
        $('.project-slider-prev').click(function () {
           card_slider.index = (card_slider.index == 0) ? 
                card_slider.length - 1 :
                card_slider.index - 1;
            card_slider.setImage();
        });
        $('.project-slider-next').click(function () {
           card_slider.index = (card_slider.index == card_slider.length - 1) ? 
                0 :
                card_slider.index + 1;
            card_slider.setImage();
        });
    
        // $('.project-slider-main .items').slick({
        //     slidesToShow: 1,
        //     slidesToScroll: 1,
        //     fade: true,
        //     arrows: true,
        //     prevArrow:  $('.project-slider-prev'),
        //     nextArrow: $('.project-slider-next'),
        //     dots: false,
        //     centerMode: false,
        //     asNavFor:  $('.project-slider-gallery .items'),
        //     infinite: true
        // });
        // $('.project-slider-gallery .items').slick({
        //     // slidesToShow: 10,
        //     slidesToScroll: 1,
        //     asNavFor:  $('.project-slider-main .items'),
        //     dots: false,
        //     arrows: false,
        //     centerMode: false,
        //     focusOnSelect: true,
        //     variableWidth: true
        // });

        $('.open-description-button').on('click', function () {
            $(this).closest('.project-description').toggleClass ('open');
        });

        // Попапы комплектаций

        $('[project-comp-popup-open]').on('click', function (){
            const id = $(this).attr('project-comp-popup-open');
            $(`[project-comp-popup]`).removeClass('open');
            $(`[project-comp-popup=${id}]`).addClass('open');
        });
        $('[project-comp-popup] .close').on('click', function (){
            $(this).closest('[project-comp-popup]').removeClass('open');
        });
        $(document).on('escKey swipeLeft swipeRight', e => {
            $(`[project-comp-popup]`).removeClass('open');
        });
        
        $(document).on ('mouseup', function(e) {
            var container = $('[project-comp-popup] .wrapper');
            if (!container.is(e.target) && container.has(e.target).length === 0) $('[project-comp-popup]').removeClass('open');
        });



    });
