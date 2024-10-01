

function switchMobileMenu (open) {
    if (open) {
        $('.mobile-menu').addClass('open');
    }
    else {
        $('.mobile-menu').removeClass('open');
    }
}
$(document).ready (() => {
    // Hamburger
    $('.hamburger').on('click', e => switchMobileMenu(true));
    $('.mobile-menu .close').on('click', e => switchMobileMenu(false));
    $(document).on('keyup', e => {if (e.keyCode == 27) switchMobileMenu(false)});

    // Submenu
    $('.mobile-menu .item').on('click', e => {
        $(e.currentTarget).toggleClass('open');
    });

    $('.mobile-menu a').on('click', e => {
        e.stopPropagation();
    });

    // Click outside
    $('.mobile-menu-back').on('click', e => {
        $('.mobile-menu').removeClass('open');
    });

    //Swipe 

    $(document).on('swipeLeft', function() {
        $('.mobile-menu').removeClass('open');
    });

});