

$(document).ready (e => {
    $('.color-mode').on ('click', e => {
        $(e.currentTarget).toggleClass('dark');
    });
});