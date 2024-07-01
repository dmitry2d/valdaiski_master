


$(document).ready (e => {

    const prosIntervalTiming = [2500, 5000];

    const items = $('.pros-slider-item');
    if (items.length < 2) return;

    const left_box = $('.pros-slider .left-box');
    const right_box = $('.pros-slider .right-box');
    
    function time (time) {
        return new Promise(resolve => {
            setTimeout (resolve, time);
        });
    }

    let index = 0;

    function get_item (index) {
        let item = items[index];
        return $(item).clone();
    }
    
    function get_index () {
        index ++;
        if (index >= items.length) index = 0;
        return index;
    }

    function get_delay () {
        return (Math.random() * (prosIntervalTiming[1] - prosIntervalTiming[0])) + prosIntervalTiming[0];
    }

    function check_right_box () {
        return right_box.css('display') != 'none';
    }

    async function turn1 () {
        if (!left_box.html()) {
            let index = get_index();
            left_box.html (get_item(index));
        } else {
            let index = get_index();
            left_box.append (get_item(index));
            $(left_box.find('.pros-slider-item')[0]).addClass('gone');
            await time(500);
            left_box.find('.pros-slider-item')[0].remove();

        }
        setTimeout(turn1, get_delay());
    };

    async function turn2 () {
        if (check_right_box()) {
            if (!right_box.html()) {
                let index = get_index();
                right_box.html (get_item(index));
            } else {
                let index = get_index();
                right_box.append (get_item(index));
                $(right_box.find('.pros-slider-item')[0]).addClass('gone');
                await time(500);
                right_box.find('.pros-slider-item')[0].remove();
            }
        };
        setTimeout(turn2, get_delay());
    };
    
    turn1();
    turn2();

});