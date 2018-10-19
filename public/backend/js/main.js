$(document).ready(function () {
    AOS.init({
        once: true,
        offset: 0,
        easing: 'ease-out-back',
        duration: "1000",

    });
    $(".memberships-content").slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        fade: false,
        autoplay: true,
        infinite: true,

        responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1
                }
                }, {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
                },


            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
                },




            {
                breakpoint: 490,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
                }
            ]
    });

    function fs_scroll(menuScrollID) {
        $("html, body").animate({
            scrollTop: $(menuScrollID).offset().top
        }, 1000);
    }
    $(".ImagesFrameCrop").each(function () {
        $(this).removeClass("wide")
        $(this).removeClass("tall")
        if ($(this).width() / $(this).height() > $(this).parent().width() / $(this).parent().height()) {
            $(this).addClass("wide");
        } else {
            $(this).addClass("tall");
        }
    });
    $(".ImagesFrameCrop").children("img").each(function () {
        $(this).removeClass("wide")
        $(this).removeClass("tall")
        if ($(this).width() / $(this).height() > $(this).parent().width() / $(this).parent().height()) {
            $(this).addClass("wide");
        } else {
            $(this).addClass("tall");
        }
    });
    $(".ImagesFrameCrop1").each(function () {
        $(this).removeClass("wide")
        $(this).removeClass("tall")
        if ($(this).width() / $(this).height() > $(this).parent().width() / $(this).parent().height()) {
            $(this).addClass("wide");
        } else {
            $(this).addClass("tall");
        }
    });
    $(".ImagesFrameCrop1").children("img").each(function () {
        $(this).removeClass("wide")
        $(this).removeClass("tall")
        if ($(this).width() / $(this).height() > $(this).parent().width() / $(this).parent().height()) {
            $(this).addClass("wide");
        } else {
            $(this).addClass("tall");
        }
    });
    $(".ImagesFrameCrop0").each(function () {
        $(this).removeClass("wide")
        $(this).removeClass("tall")
        if ($(this).width() / $(this).height() > $(this).parent().width() / $(this).parent().height()) {
            $(this).addClass("wide");
        } else {
            $(this).addClass("tall");
        }
    });
    $(".ImagesFrameCrop0").children("img").each(function () {
        $(this).removeClass("wide")
        $(this).removeClass("tall")
        if ($(this).width() / $(this).height() > $(this).parent().width() / $(this).parent().height()) {
            $(this).addClass("wide");
        } else {
            $(this).addClass("tall");
        }
    });
    $(".show__menu").click(function () {
        $(".menu-main").toggleClass("active");
    });
    $(".close__menu").click(function () {
        $(".menu-main").removeClass("active");
    });
})
