
$(document).ready (e => {

    // return;

    $('.mother-capital-logo-items').slick({
        slidesToScroll: 1,
        arrows: true,
        prevArrow: $('.mother-capital .nav .prev'),
        nextArrow: $('.mother-capital .nav .next'),
        dots: false,
        centerMode: false,
        variableWidth: true,
        infinite: true
    });

});