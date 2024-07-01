
$(document).ready (e => {

    console.log (1);
    $('.pros-text-slider .item .title').on ('click', e => {
        console.log (1);
        $(e.target).closest('.pros-text-slider .item').toggleClass('open');
    });
// return
    $('.pros-text-slider .items').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        // fade: true,
        arrows: true,
        prevArrow: $('.pros-text-slider-prev'),
        nextArrow: $('.pros-text-slider-next'),
        dots: false,
        centerMode: false,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    variableWidth: true,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }

            },
            {
                breakpoint: 768,
                settings: 'unslick'
            }
        ]
    });



});