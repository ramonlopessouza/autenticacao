$(document).on('click', '.j_toggle_password', function () {
    let clicked = $(this);
    let input = $('#' + clicked.data('id'));

    if (clicked.html() === 'visibility') {
        clicked.html('visibility_off');
        input.attr('type', 'text');
    } else {
        clicked.html('visibility');
        input.attr('type', 'password');
    }
});