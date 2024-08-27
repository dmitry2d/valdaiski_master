
$(document).ready (e => {


    // Вставляю видео vk при прорисовке страницы

    $('[vk-video-insert]').each((i,e) => {
        const ids =  $(e).attr('vk-video-insert').split('_');
        $(e).html (`
            <iframe
                src="https://vk.com/video_ext.php?oid=-${ids[0]}&id=${ids[1]}&hd=2&autoplay=0"
                width="100%"
                height="100%"
                allow="autoplay;
                encrypted-media;
                fullscreen;
                picture-in-picture;
                screen-wake-lock;"
                frameborder="0"
                allowfullscreen
            ></iframe>
        `);
    });

    // Вставляю видео при клике в целевой контейнер

    $('[vk-video-play]').on ('click', function () {
        
        const ids =  $(this).attr('vk-video-play').split('_');
        const target =  $(this).attr('vk-video-target');
        $(`[vk-video-container=${target}]`).html (`
            <iframe
                src="https://vk.com/video_ext.php?oid=-${ids[0]}&id=${ids[1]}&hd=2&autoplay=0"
                width="100%"
                height="100%"
                allow="autoplay;
                encrypted-media;
                fullscreen;
                picture-in-picture;
                screen-wake-lock;"
                frameborder="0"
                allowfullscreen
            ></iframe>
        `);
    });




    // $('[play-vk]').on('click', function (e) {

    //     e.preventDefault();

    //     let ids = $(this).attr('play-vk').split('_');
    //     console.log (ids);

    // })




    // Вставляю видео в контейнер по клику play-vk


    // $('[play-vk]').on('click', e => {
        
    //     $('.vk-video-popup').addClass('open');
        
    //     $('.vk-video-popup .wrapper').html(
    //         `
    //         <iframe
    //         src="https://vk.com/video_ext.php?oid=-14663474&id=456240156&hd=2&autoplay=1"
    //         width="100%"
    //         height="100%"
    //         allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen
    //         ></iframe>
    //         `
    //     );
                
    // })
    // $(document).on('close_vm_popup', e => {
    //     $('.vk-video-popup .wrapper').html("");
    // });

});

