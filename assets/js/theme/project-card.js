

$(document).ready (e => {
    
        $('.project-slider-main .items').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            fade: true,
            arrows: true,
            prevArrow:  $('.project-slider-prev'),
            nextArrow: $('.project-slider-next'),
            dots: false,
            centerMode: false,
            asNavFor:  $('.project-slider-gallery .items'),
            infinite: true
        });
        $('.project-slider-gallery .items').slick({
            // slidesToShow: 10,
            slidesToScroll: 1,
            asNavFor:  $('.project-slider-main .items'),
            dots: false,
            arrows: false,
            centerMode: false,
            focusOnSelect: true,
            variableWidth: true
        });

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
        $(document).on('escKey', e => {
            $(`[project-comp-popup]`).removeClass('open');
        });
        
        $(document).on ('mouseup', function(e) {
            var container = $('[project-comp-popup] .wrapper');
            if (!container.is(e.target) && container.has(e.target).length === 0) $('[project-comp-popup]').removeClass('open');
        });

    });
