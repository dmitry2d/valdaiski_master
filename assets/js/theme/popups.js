


$(document).ready (e => {

    let closeVMPopup = function () {
        $('[vm-popup]').removeClass('open');
        $(document).trigger('close_vm_popup');
    };

    $(document).on('click', '[vm-popup-open]', function (e){
        e.preventDefault();
        let popup_name = $(this).attr('vm-popup-open');
        console.log(popup_name)
        $(`[vm-popup=${popup_name}]`).addClass('open');

    });
    $(document).on('click', '[vm-popup] .close', closeVMPopup);
    $(document).on('click', '[vm-popup-close]', closeVMPopup);
    $(document).on('keyup', e => {
        if (e.keyCode == 27) {
            closeVMPopup();
        }
    });

});