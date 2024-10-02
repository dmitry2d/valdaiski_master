$(document).ready (e => {
    
        $('.about-slider-main-items').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            fade: true,
            arrows: true,
            prevArrow:  $('.about-slider-prev'),
            nextArrow: $('.about-slider-next'),
            dots: false,
            centerMode: false,
            asNavFor:  $('.about-slider-preview-items'),
            infinite: true,
            lazyLoad: 'ondemand'
        });
        $('.about-slider-preview-items').slick({
            slidesToScroll: 1,
            asNavFor:  $('.about-slider-main-items'),
            dots: false,
            arrows: false,
            centerMode: false,
            focusOnSelect: true,
            variableWidth: true,
            lazyLoad: 'ondemand'
        });

});