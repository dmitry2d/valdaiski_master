



$(document).ready (e => {
    $('.header-menu .item').on ('mouseover', e => {
        $(e.currentTarget).addClass('open');
    });
    $('.header-menu .item').on ('mouseleave', e => {
        $(e.currentTarget).removeClass('open');
    });
});