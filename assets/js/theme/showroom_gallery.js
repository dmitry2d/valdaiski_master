
$(document).ready (e => {

    // return;

    $('.showroom-items').slick({
        slidesToScroll: 3,
        arrows: true,
        prevArrow: $('.showroom-prev'),
        nextArrow: $('.showroom-next'),
        dots: false,
        centerMode: false,
        variableWidth: true
    });

});