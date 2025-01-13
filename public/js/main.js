/*
-------------------------------------------------------------------------------------------
* Template Name    : MedApp - Bootstrap 4 HTML5  Multi Purpose One/Multi Pages Template   *
* Author           : ParExcellence                                                        *
* Version          : 1.0.0                                                                *
* File Description : Main Js file of the template                                         *
*------------------------------------------------------------------------------------------
*/
$(document).ready(function () {
    "use strict";
    /*----MAIN SLIDER-----*/
    (function ($) {
        var MainSilderCarousel = $('.main-slider');
        if (MainSilderCarousel.length > 0) {
            MainSilderCarousel.owlCarousel({
                merge: true,
                loop: true,
                nav: false,
                center: false,
                dots: false,
                animateIn: 'fadeIn',
                autoplay: true,
                autoplayTimeout: 5000,
                margin: 0,
                items: 1,
                mouseDrag: false, // Deshabilita arrastre con el mouse
                touchDrag: false, // Deshabilita interacciones táctiles
            });
        }
    })(jQuery);
    /*----SHOWCASE SLIDER-----*/
    (function ($) {
        var showcaseCarousel = $('.showcase-slider');
        if (showcaseCarousel.length > 0) {
            showcaseCarousel.owlCarousel({
                merge: true,
                loop: true,
                nav: false,
                center: false,
                dots: false,
                animateIn: 'fadeIn',
                autoplay: true,
                autoplayTimeout: 2000,
                margin: 0,
            });
        }
    })(jQuery);

    /*----TESTIMONIAL SLIDER-----*/
    (function ($) {
        var testimonialCarousel = $('.testimonial-slider');
        if (testimonialCarousel.length > 0) {
            testimonialCarousel.owlCarousel({
                margin: 16,
                loop: true,
                nav: false,
                center: false,
                dots: true,
                autoplay: true,
                autoplayTimeout: 5000,
                items: 3,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false,
                        dots: true
                    },
                    600: {
                        items: 2,
                        nav: false,
                        dots: true
                    },
                    1000: {
                        items: 3,
                        nav: false,
                        dots: true
                    }
                }
            });
        }
    })(jQuery);

    /*----CLIENTS SLIDER-----*/
    (function ($) {
        var testimonialCarousel = $('.clients-slider');
        if (testimonialCarousel.length > 0) {
            testimonialCarousel.owlCarousel({
                margin: 16,
                loop: true,
                nav: true,
                center: false,
                dots: false,
                autoplay: false,
                autoplayTimeout: 5000,
                items: 2,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true,
                        dots: false
                    },
                    600: {
                        items: 2,
                        nav: true,
                        dots: false
                    },
                    1000: {
                        items: 2,
                        nav: true,
                        dots: false
                    }
                }
            });
        }
    })(jQuery);
    /*----MAGIC POPUP-----*/
    if (('.filters-content').length > 0) {
        $('.filters-content').each(function () {
            $(this).magnificPopup({
                delegate: '.js-zoom-gallery',
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        });
    }
/*----ISOTOP JS-----*/
var length = $('.portfolio-section').length;
if (length >= 1) {
    $('.filters ul li').click(function () {
        $('.filters ul li').removeClass('active');
        $(this).addClass('active');

        var data = $(this).attr('data-filter');
        $grid.isotope({
            filter: data
        })
    });

    var $grid = $(".grid").isotope({
        itemSelector: ".all",
        percentPosition: true,
        masonry: {
            columnWidth: ".all"
        }
    });
}
    /*----ACCORDIAN JS-----*/
    (function ($) {
        $(".question-card").click(function () {
            if ($(this).hasClass('active')) {
                $('.question-card').removeClass('active');
                $(this).removeClass('active')
            } else {
                $('.question-card').removeClass('active');
                $(this).addClass('active')
            }
        });
    })(jQuery);

    /*---- MOBILE FOOTER TOGGLE -----*/
    (function ($) {
        var contentwidth = jQuery(window).width();
        if ((contentwidth) < '575') {
            jQuery('.footer-title').append('<span class="mdi mdi-arrow-down-drop-circle"></span>');
            jQuery('.footer-title').click(function () {
                jQuery('.footer-title').removeClass('active');
                jQuery('.footer_menu_list').slideUp('normal');
                if (jQuery(this).next().is(':hidden') == true) {
                    jQuery(this).addClass('active');
                    jQuery(this).next().slideDown('normal');
                }
            });
            jQuery('.footer-content').hide();
        } else {
            jQuery('.footer-content').show();
        }
    })(jQuery);
});

/*----WOW ANIMATION-----*/
(function ($) {
    var length = $('.wow').length;
    if (length >= 1) {
        wow = new WOW({
            boxClass: 'wow',
            animateClass: 'animated',
            offset: 0,
        });
        wow.init();
    }
})(jQuery);

/*----ONSCROLL JS-----*/
$(window).on("scroll", function () {
    "use strict";

    // Sticky header al hacer scroll

    // Elimina la lógica que afecta las clases "active" basadas en el scroll
}), $(".onepage-links .nav-item a").on("click", function (o) {
    var t = $(this);
    $('.nav-item').removeClass('active');
    $(t).parent().addClass('active');
    $("html, body").stop().animate({
        scrollTop: $(t.attr("href")).offset().top - 50
    }, 1500, "easeInOutExpo"), o.preventDefault()
}), $(document).on("click", ".navbar-collapse.show", function (o) {
    $(o.target).is("a") && $(this).collapse("hide")
}), $(window).on("scroll", function () {
    $(this).scrollTop() > 100 ? $(".back_top").fadeIn() : $(".back_top").fadeOut()
}), $(".back_top").on("click", function () {
    return $("html, body").animate({
        scrollTop: 0
    }, 1e3), !1
});

/*----OTHER LINK JS-----*/
(function ($) {
    "use strict";
    $(".onepage-links .contact_btn a").on("click", function (event) {
        var t = $(this);
        $("html, body").stop().animate({
            scrollTop: $(t.attr("href")).offset().top - 50
        }, 2000, "easeInOutExpo"), event.preventDefault()
    })
})(jQuery);

/*----PARTICLES-JS-----*/
(function ($) {
    "use strict";
    var length = $('.particles-js').length;
    var length01 = $('.particles-js').length;
    if (length >= 1 && length01 >= 1) {
        var ViewportWidth = jQuery(window).width();
        if ((ViewportWidth) > '992') {
            particlesJS.load('particles-js', 'particles.json', function () { });
            particlesJS.load('particles-js1', 'particles.json', function () { });
        }
    }
})(jQuery);