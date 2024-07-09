

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
            asNavFor:  $('.project-slider-gallery .items')
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

    });
