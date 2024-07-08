
$(document).ready (e => {

    $('.showroom-items').slick({
        slidesToScroll: 1,
        arrows: true,
        prevArrow: $('.showroom-prev'),
        nextArrow: $('.showroom-next'),
        dots: false,
        centerMode: false,
        variableWidth: true,
        infinite: true
    });

});