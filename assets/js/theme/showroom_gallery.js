
$(document).ready (e => {

    // return;

    $('.showroom-items').slick({
        // slidesToShow: 1,
        slidesToScroll: 1,
        // fade: true,
        arrows: true,
        prevArrow: $('.showroom-prev'),
        nextArrow: $('.showroom-next'),
        dots: false,
        centerMode: false,
        variableWidth: true
    });

});