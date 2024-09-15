$(document).ready(() => {
    
    // URL и прочие настройки в файле ./_project-settings.js

    const settings = window.settings?.popular_widget;
    if (!settings) return;
    // console.log ('popular settings:', settings);

    
    function get_section_HTML (section_id) {

        // Подсвечиваю кнопку
        highlight_popular_section (section_id);

        // Скачиваю контент
        const url = `${settings.url}?${settings.section_variable}=${section_id}`;
        $.ajax({
            url,
            method: 'get',
            dataType: 'html',
            success: function(data){
                // Нахожу контент в полученном и заменяю его на странице
                const newHTML = $($.parseHTML(data)).find(settings.container_selector).html();
                $(settings.container_selector).html(newHTML);
            }
        });
    };


    function highlight_popular_section (section_id) {
        $(`[${settings.section_variable}]`).removeClass('selected');
        $(`[${settings.section_variable}="${section_id}"]`).addClass('selected');
    };


    // Скачиваю на старте для секции 0
    get_section_HTML (0);
    
    // Реагирую на кнопки секций
    $(`[${settings.section_variable}]`).on('click', function (e) {
        e.preventDefault();
        const section_id = $(this).attr(settings.section_variable);
        get_section_HTML (section_id);
    })




});