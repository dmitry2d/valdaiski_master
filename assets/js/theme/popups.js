


$(document).ready (e => {

    let closeVMPopup = function () {
        $('.vm-popup').removeClass('open');
        $(document).trigger('close_vm_popup');
    }

    $(document).on('click', '.vm-popup .close', closeVMPopup);
    $(document).on('keyup', e => {

        if (e.keyCode == 27) {
            closeVMPopup();
        }

    });

});