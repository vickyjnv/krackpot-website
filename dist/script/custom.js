$(document).on('click', '.js-menu_toggle.closed', function (e) {
    e.preventDefault();
    $('.list_load, .list-item').stop();
    $(this).removeClass('closed').addClass('opened');

    $('.side_menu').css({
        'left': '0px'
    });

    var count = $('.list-item').length;
    $('.list_load').slideDown((count * .6) * 100);
    $('.list-item').each(function (i) {
        var thisLI = $(this);
        timeOut = 100 * i;
        setTimeout(function () {
            thisLI.css({
                'opacity': '1',
            });
        }, 100 * i);
    });
});

$(document).on('click', '.js-menu_toggle.opened', function (e) {
    e.preventDefault();
    $('.list_load, .list-item').stop();
    $(this).removeClass('opened').addClass('closed');

    $('.side_menu').css({
        'left': '-300px'
    });

    var count = $('.list-item').length;
    $('.list-item').css({
        'opacity': '0',
    });
    $('.list_load').slideUp(300);
});