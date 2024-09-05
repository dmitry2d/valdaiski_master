
$(document).ready (e => {

    $('.review-stars i').on('mouseover', function () {
        $('.review-stars i').removeClass('hovered');
        let index = $(this).index();

        $('.review-stars i').each ((i, e) => {
            if (i <= index) {
                $(e).addClass('hovered');
            }
        });
    });
    $('.review-stars').on('mouseout', function () {
        $('.review-stars i').removeClass('hovered');
    });
    $('.review-stars i').on('click', function () {
        $('.review-stars i').removeClass('selected');
        let index = $(this).index();
        $('.review-stars i').each ((i, e) => {
            if (i <= index) {
                $(e).addClass('selected');
            }
        });
        $('input#write-review-stars').val(index + 1);
    });
});