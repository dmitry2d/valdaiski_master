
$(document).ready (e => {


    // Проигрываю видео при нажатии на превью
    
    $('[vm-video-player]').on('click', function (){

        if ($(this).attr('ready')) return;

        const ids =  $(this).attr('vm-video-player').split('_');
        $(this).html (`
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
        $(this).attr('ready', 1);

    });

    // Устанавливаю видео в окне при нажатии на превью

    
    $('[vm-video-preview]').on('click', function (){

        if ($(this).hasClass('vm-video-selected')) return;

        const target_id =  $(this).attr('vm-video-target');
        const target_node =  $(`[vm-video-container="${target_id}"]`);


        $(target_node).html($(this).html());
        $(target_node).attr('vm-video-player', $(this).attr('vm-video-preview'));
        $(target_node).removeAttr('ready');

        
        $('[vm-video-preview]').removeClass('vm-video-selected');
        $(this).addClass('vm-video-selected');

    });

});