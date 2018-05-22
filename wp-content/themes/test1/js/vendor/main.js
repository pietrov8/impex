$(function () {
    AOS.init();
    $(window).load(function () {
        AOS.refresh();
    })
    scroll_top()
    home_box_hover();
    $(window).resize(function () {
        home_box_hover();
        scroll_top()
    });

    $(".menu-toggle").on('click', function (e) {
        $(".header nav").slideToggle()
        e.preventDefault();
    });

    $(".scroll-to").on("click", function (e) {
        $('html, body').animate({
            scrollTop: $($(this).attr("href")).offset().top
        }, 500);
        e.preventDefault()
    });

    $(".scroll-top").on("click", function (e) {
        $('html, body').animate({
            scrollTop: 0
        }, 500);
        e.preventDefault()
    });

    $(".home-box__item").on("click", function () {
        if ($(this).hasClass("open")) {
            $(".home-box__item").removeClass("open");
        }else {
            $(".home-box__item").removeClass("open");
            $(this).addClass("open")
        }

        if ($(window).width() < 1170) {
            window.location.replace($(this).find(".btn-white").attr("href"));
        }
    })
    $(".header__lang .current").on("click", function () {
        $(".header__lang").toggleClass("open");
    })
    $('.counter').counterUp({
        delay: 10,
        time: 1500
    });


});

function home_box_hover() {
    $(".home-box__toggle").each(function () {
        var height_t = $(this).outerHeight();
        $(this).parent().css("margin-bottom", - height_t)
    })
}

function scroll_top() {
    if ($("body").height() > $(window).height()) {
        if ($("body").find(".about-page").length) {
            $(".scroll-top").fadeOut();
            console.log("false")
        } else {
            $(".scroll-top").fadeIn();
            console.log("true")
        }
    } else {
        $(".scroll-top").fadeOut()
    }


}