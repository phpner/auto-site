
function noscroll(o) {
    o ? $("html, body").addClass("no-scrolling") : $("html, body").removeClass("no-scrolling")
}

$(document).ready(function() {
    $(window).scroll(function(o) {
        if ($(".no-scrolling").length > 0) return !1
    })
}), $(document).ready(function() {

    $(".slider").each(function() {
        var o = $(this),
            n = parseInt(o.attr("show-slides")) || 1,
            e = "true" == o.attr("dots") || !1,
            t = o.find(".slider__items"),
            r = parseInt(o.attr("startSlide")) || 0,
            i = "true" == o.attr("problem-mobile") || !1,
            s = [],
            a = o.attr("responsive");
        a && (s = a.split(";").reduce(function(o, n) {
            var e = n.split(":"),
                t = e[0],
                r = parseInt(e[1]) || e[1],
                i = parseInt(e[2]) || e[2],
                s = $.grep(o, function(o) {
                    return o.breakpoint == t
                });
            if (1 == s.length) s[0].settings[r] = i;
            else {
                var a = {};
                a[r] = i, o.push({
                    breakpoint: t,
                    settings: a
                })
            }
            return o
        }, []));
        var l = {
            prevArrow: $(this).find(".sa-prev"),
            nextArrow: $(this).find(".sa-next"),
            dots: e,
            infinite: 1,
            centerMode: i,
            centerPadding: "40px",
            slidesToShow: n,
            slidesToScroll: n,
            initialSlide: r,
            responsive: s,
            autoplaySpeed: 2000,
        };
        t.slick(l)
    })
}), $(document).ready(function() {
    var o = ($(".block-6-slider"), $(".block-6-arrows"));
    $(".block-6-slider__items").slick({
        prevArrow: o.find(".block-6-arrows__arrow_prev"),
        nextArrow: o.find(".block-6-arrows__arrow_next"),
        dots: !1,
        infinite: !1,
        arrows: !0,
        fade: !0
    }).on("beforeChange", function(n, e, t, r) {
        o.find(".block-6-arrows__arrow").removeClass("block-6-arrows__arrow_stop"), $(".block-6-arrows__current").text(r + 1), r == Math.abs(e.slideCount - (r - t)) ? o.find(".block-6-arrows__arrow_next").addClass("block-6-arrows__arrow_stop") : 0 == r && o.find(".block-6-arrows__arrow_prev").addClass("block-6-arrows__arrow_stop")
    })
}), $(function() {
    $(".cap").fadeOut()
}), $(function() {

    $(".logo");

/*    $(".logo").click(function(o) {
        o.preventDefault();
        var n = $(this).attr("href");
        $(".cap").fadeIn(function() {
            $.cookie("no_first", "true", {
                path: "/"
            }), window.location.href = n
        })
    })*/
}), $(function() {
    function o(o) {
        var n = $(".menu"),
            e = n.find(".menu__toggle"),
            t = n.find(".menu__items-wrap");
        $(e).attr("toggle", o), o ? (n.addClass("menu_open"), t.addClass("menu__items-wrap_open"), noscroll(!0)) : (n.removeClass("menu_open"), t.removeClass("menu__items-wrap_open"), noscroll(!1))
    }
    $(".menu__toggle").click(function(n) {
        o(!("true" === $(this).attr("toggle")))
    }), $(".menu__link").click(function(n) {
        o(!1);
        var e = ".section_block-" + $(this).attr("block");
        $("html, body").animate({
            scrollTop: $(e).offset().top
        }, 700)
    }), $(".menu__button-close").click(function(n) {
        o(!1)
    }),
        function() {
            "true" === $(".menu").attr("autoHiding") && $(window).on("mousewheel", function(n) {
                $(window).width() < 768 && (n.originalEvent.deltaY < 0 ? $(".menu").removeClass("menu_hide") : ($(".menu").addClass("menu_hide"), o(!1)))
            })
        }()
}), $(function() {
    $(".button-close-popup").click(function() {
        $(".popup").fadeOut(), $(".body-wrap").removeClass("body-wrap_show-popup"), noscroll(!1)
    }), $(document).keydown(function(o) {
        27 === o.keyCode && $(".button-close-popup").click()
    }), $(".popup").click(function(o) {
        o.target == this && $(".button-close-popup").click()
    }), $(".button-show-popup-order").click(function(o) {
        var n = $(".popup-order"),
            e = $(this).attr("mode");
        n.find(".form__text-field-wrap").filter("[mode]").hide().filter("[mode=" + e + "]").show(), n.fadeIn(), $(".body-wrap").addClass("body-wrap_show-popup"), noscroll(!0)
    }), $(".button-show-popup-info").click(function(o) {
        o.preventDefault(), $(".popup-info").fadeIn(), $(".body-wrap").addClass("body-wrap_show-popup"), noscroll(!0)
    }), $(".button-show-popup-conditions").click(function(o) {
        o.preventDefault(), $(".popup-conditions").fadeIn(), $(".body-wrap").addClass("body-wrap_show-popup"), noscroll(!0)
    }), $(".form__select").change(function(o) {
        var n = $(this).val().split(" - "),
            e = n[0],
            t = parseInt(n[1]),
            r = $(this).parents("form");
        r.find("input[name=mainProduct]").val(e), r.find("input[name=mainProductPrice]").val(t)
    }),
        function() {
            var o = $(window).width();
            $(".form__slider").width(o)
        }()
}), $(document).ready(function() {
    function o(o) {
        n(o), e.slick("slickGoTo", 3 * o)
    }

    function n(o) {
        t.removeClass("slider-problems__tab_active"), t.filter("[tabIndex=" + o + "]").addClass("slider-problems__tab_active")
    }
    var e = $(".slider-problems").find(".slider__items");
    if (0 == e.length) return void console.error("slider-problems not found");
    if (!e.hasClass("slick-initialized")) return void console.error("slider-problems not initialized");
    var t = $(".slider-problems__tab");
    t.click(function() {
        o(parseInt($(this).attr("tabIndex")))
    }), e.on("beforeChange", function(o, e, t, r) {
        n(r / 3)
    }),
        function() {
            o(0), n(0)
        }()
}), $(function() {});

$(document).ready(function() {

    $(window).resize(function () {
        resi();
    });

    resi();

    function resi(){
        var height = $(".descrip-footer").outerHeight();

        $(".block-footer__content").css('margin-bottom', height / 1.2 );
    }

    var waypoints = $('.slider').waypoint({
        handler: function(direction) {

                $($(this.element).find('.slick-initialized')).slick('slickPlay');

        },
        offset: '90%'
    });


});

