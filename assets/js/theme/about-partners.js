$(document).ready (e => {
// return;
    $('.about-partners-items').slick({
        slidesToScroll: 2,
        slidesToShow: 5,
        arrows: false,
        dots: false,
        infinite: true,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 900,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 800,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },

        ],
        autoplay: true
    });

});