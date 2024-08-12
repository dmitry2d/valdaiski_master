

$(document).ready (e => {

    
    $('.reviews-item-photo-slider-items').each((i, item) => {
        // const id = '' + (Date.now() + Math.random());
        // $(item).attr('reviews-slider-id', id);
        $(item).slick({
            slidesToScroll: 1,
            arrows: true,
            dots: false,
            centerMode: false,
            variableWidth: true,
            prevArrow: $(item).closest('.reviews-item-photo-slider').find('.reviews-item-photo-slider-prev'),
            nextArrow: $(item).closest('.reviews-item-photo-slider').find('.reviews-item-photo-slider-next')
        });
    });
    
    // $('.reviews-item-photo-slider').each((i, item) => {
        
        // $('.popular .tags .items').slick({
        //     slidesToScroll: 1,
        //     arrows: false,
        //     dots: false,
        //     centerMode: false,
        //     infinite: false,
        //     variableWidth: true
        // });

    // });
    

});