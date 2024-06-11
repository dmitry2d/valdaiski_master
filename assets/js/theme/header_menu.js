



$(document).ready (e => {
    $('.header-menu .item').on ('mouseover', e => {
        $(e.currentTarget).addClass('open');
        console.log (2);
    });
    $('.header-menu .item').on ('mouseleave', e => {
        $(e.currentTarget).removeClass('open');
    });
});