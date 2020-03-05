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


//Toggle Divs
$(document).ready(function () {

    $(".content-one-link").click(function () {
        $("#list-one").fadeIn("slow");
        $(".content-one").hide();
        $("#list-two").hide();
        $(".content-two").show("slow");
        $("#list-three").hide();
        $(".content-three").show("slow");
        $("#list-four").hide();
        $(".content-four").show("slow");
        $("#list-five").hide();
        $(".content-five").show("slow");
        $("#list-six").hide();
        $(".content-six").show("slow");
    });

    $(".content-two-link").click(function () {
        $("#list-one").hide();
        $(".content-one").show("slow");
        $("#list-two").fadeIn("slow");
        $(".content-two").hide();
        $("#list-three").hide();
        $(".content-three").show("slow");
        $("#list-four").hide();
        $(".content-four").show("slow");
        $("#list-five").hide();
        $(".content-five").show("slow");
        $("#list-six").hide();
        $(".content-six").show("slow");
    });

    $(".content-three-link").click(function () {
        $("#list-one").hide();
        $(".content-one").show("slow");
        $("#list-two").hide();
        $(".content-two").show("slow");
        $("#list-three").fadeIn("slow");
        $(".content-three").hide();
        $("#list-four").hide();
        $(".content-four").show("slow");
        $("#list-five").hide();
        $(".content-five").show("slow");
        $("#list-six").hide();
        $(".content-six").show("slow");
    });

    $(".content-four-link").click(function () {
        $("#list-one").hide();
        $(".content-one").show("slow");
        $("#list-two").hide();
        $(".content-two").show("slow");
        $("#list-three").hide();
        $(".content-three").show("slow");
        $("#list-four").fadeIn("slow");
        $(".content-four").hide();
        $("#list-five").hide();
        $(".content-five").show("slow");
        $("#list-six").hide();
        $(".content-six").show("slow");
    });

    $(".content-five-link").click(function () {
        $("#list-one").hide();
        $(".content-one").show("slow");
        $("#list-two").hide();
        $(".content-two").show("slow");
        $("#list-three").hide();
        $(".content-three").show("slow");
        $("#list-four").hide();
        $(".content-four").show("slow");
        $("#list-five").fadeIn("slow");
        $(".content-five").hide();
        $("#list-six").hide();
        $(".content-six").show("slow");
    });

    $(".content-six-link").click(function () {
        $("#list-one").hide();
        $(".content-one").show("slow");
        $("#list-two").hide();
        $(".content-two").show("slow");
        $("#list-three").hide();
        $(".content-three").show("slow");
        $("#list-four").hide();
        $(".content-four").show("slow");
        $("#list-five").hide();
        $(".content-five").show("slow");
        $("#list-six").fadeIn("slow");
        $(".content-six").hide();
    });

});