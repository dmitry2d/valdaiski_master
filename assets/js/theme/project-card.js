

$(document).ready (e => {


        //// Слайдер для карточки проекта
        const card_slider = {
            active_slide: 0,
            image_list: [],
        };

        // Вытаскиваю картинки из слайдера
        card_slider.image_list = $('.project-slider-gallery .item img').map((index, element) => {
            return $(element).attr('src');
        });

        // Ставлю активную картинку
        card_slider.setImage = function () {
            let img_src = card_slider.image_list[card_slider.active_slide];
            $('.project-slider-main .items .item img').attr('src', img_src);
            $('.project-slider-main .items .item a').attr('href', img_src);
            $('.project-slider-gallery .items .item').removeClass('active');
            $(`.project-slider-gallery .items .item:nth-child(${card_slider.active_slide + 1})`).addClass('active');
        }
        card_slider.setImage();

        // Клик на превью
        $('.project-slider-gallery .item').click (function () {
            if (window.dragscrollOffset) return; // если польхзователь тащит превью колбасу
            card_slider.active_slide = $(this).index();
            card_slider.setImage();
        });
        // Взад вперед
        $('.project-slider-prev').click(function () {
           card_slider.active_slide = (card_slider.active_slide == 0) ? 
                card_slider.image_list.length - 1 :
                card_slider.active_slide - 1;
            card_slider.setImage();
        });
        $('.project-slider-next').click(function () {
           card_slider.active_slide = (card_slider.active_slide == card_slider.image_list.length - 1) ? 
                0 :
                card_slider.active_slide + 1;
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
