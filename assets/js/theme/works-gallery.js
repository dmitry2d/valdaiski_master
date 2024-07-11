$(document).ready (e => {

    $('.works-gallery-slider .works-gallery-items').slick({
        slidesToScroll: 1,
        arrows: true,
        prevArrow: $('.works-gallery-prev'),
        nextArrow: $('.works-gallery-next'),
        dots: true,
        centerMode: false,
        variableWidth: true
    });

});