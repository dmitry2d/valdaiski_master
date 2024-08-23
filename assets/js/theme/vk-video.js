
$(document).ready (e => {

    $('[play-vk]').on('click', e => {
        
        $('.vk-video-popup').addClass('open');
        
        $('.vk-video-popup .wrapper').html(
            `
            <iframe
            src="https://vk.com/video_ext.php?oid=-14663474&id=456240156&hd=2&autoplay=1"
            width="100%"
            height="100%"
            allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen
            ></iframe>
            `
        );
                
    })
    $(document).on('close_vm_popup', e => {
        $('.vk-video-popup .wrapper').html("");
    });

});

