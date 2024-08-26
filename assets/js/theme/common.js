


$(document).on('keyup', e=> {
    if (e.keyCode == 27) {
        $(document).trigger('escKey');
    }
})