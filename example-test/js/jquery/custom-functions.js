/*---------- TATWERAT FrameWork ---------*/
//-> (jQuery.javascript) TATWERAT FrameWork
// scrollTop
(function ($) {

    "use strict";

    $.fn.scrollToTop = function () {
        $(this).hide().removeAttr("href");
        if ($(window).scrollTop() !== "0") {
            $(this).fadeIn("slow");
        }
        var scrollDiv = $(this);
        $(window).scroll(function () {
            if ($(window).scrollTop() === "0") {
                $(scrollDiv).fadeOut("fast");
            } else {
                $(scrollDiv).fadeIn(800);
            }
        });
        $(this).on('click', function () {
            $("html, body").animate({
                scrollTop: 0
            }, "slow");
        });
    };

// add css animated
    $.fn.elementAnimated = function (aimateVal, offset) {
        if (offset === '') {
            offset = 150;
        }
        $(this).addClass("hidden_scroll").viewportChecker({
            classToAdd: 'visible_scroll animated ' + aimateVal, // Class to add to the elements when they are visible
            offset: offset
        });
    };

//align elements center
    $.fn.centerBlock = function (minVal) {
        $(this).each(function () {
            var width = window.innerWidth;
            var height = window.innerHeight;
            $(this).css({
                "left": width / 2 - minVal + "px",
                "top": height / 2 - minVal + "px",
                "display": "block"
            });
        });
    };

// sections h2 border
    $.fn.sectionTitle = function () {
        $(this).each(function () {
            var width = $(this).width() / 2;
            var leftVal = width - 35;
            $(this).append('<i></i>');
            $(this).find('i').css({"left": leftVal + "px"});
        });
    };

//service border
    $.fn.serviceBorder = function () {
        $(this).append('<i class="border-1"></i><i class="border-2"></i><i class="border-3"></i><i class="border-4"></i><i class="border-5"></i><i class="border-6"></i>');
    };

// smooth scrolling
    $.fn.smoothScroll = function () {
        $(this).on('click', function () {
            if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top + 1
                    }, 1000);
                    return false;
                }
            }
        });
    };

//fixed menu
    $.fn.fixedMenu = function (topVal) {
        var width = window.innerWidth;
        var top = $('#Header').height();
        var y = $(topVal).scrollTop();
        if (width > 600) {
            if (y >= top) {
                $(this).fadeIn();
            } else {
                $(this).fadeOut();
            }
        }
    };

// menu hexagon
    $.fn.menuHexagon = function () {
        $(this).each(function () {
            var img = $(this).attr('data-img');
            var width = $(this).attr('data-width');
            var height = $(this).attr('data-height');
            var title = $(this).attr('data-title');
            var href = $(this).attr('data-href');
            $(this).append('<div class="hexagon-in1"><a href="' + href + '"><i><em class="flaticon-cutlery22"></em></i> <span>' + title + '</span></a><div class="hexagon-in2" style="background-image:url(' + img + ');"></div></div>');
            $('#Menu .hexagon1').css({"width": width, "height": height});
        });
    };

// owlSlider
    $.fn.owlSlider = function (items, auto_play, transtion) {
        var Slider = $(this);
        if (items === 1) {
            Slider.owlCarousel({
                autoPlay: auto_play,
                stopOnHover: true,
                lazyEffect: 'fade',
                transitionStyle: transtion,
                navigation: false, // Show next and prev buttons
                slideSpeed: 1000,
                paginationSpeed: 1000,
                singleItem: true,
                pagination: true,
                responsive: true
            });
        } else {
            Slider.owlCarousel({
                autoPlay: auto_play,
                stopOnHover: true,
                lazyEffect: 'fade',
                transitionStyle: 'backSlide',
                navigation: false, // Show next and prev buttons
                slideSpeed: 1000,
                paginationSpeed: 1000,
                items: items, //10 items above 1000px browser width
                itemsDesktop: [1170, 3], //5 items between 1000px and 901px
                itemsDesktopSmall: [900, 2], // betweem 900px and 601px
                itemsTablet: [600, 2], //2 items between 600 and 0
                itemsMobile: [600, 1] // itemsMobile disabled - inherit from itemsTablet option
            });
        }
        // slidder nav buttons
        Slider.parent().find('button.next').on('click', function () {
            Slider.trigger('owl.next');
            return false;
        });
        Slider.parent().find('button.back').on('click', function () {
            Slider.trigger('owl.prev');
            return false;
        });
    };

// google map
    $.fn.googleMap = function (ID, latVal, lngVal, htmlData) {
        var map;
        map = new GMaps({
            div: ID,
            lat: latVal,
            lng: lngVal,
            zoomControl: true,
            scrollwheel: false,
            panControl: true,
            streetViewControl: true,
            mapTypeControl: true,
            overviewMapControl: true,
            zoomControlOpt: {
                style: 'SMALL',
                position: 'TOP_LEFT'
            }
        });
        map.addMarker({
            lat: latVal,
            lng: lngVal,
            title: 'Awtar Restaurant',
            animation: google.maps.Animation.BOUNCE,
            mouseover: function (e) {
                //this.infoWindow.open(this.map, this);
            },
            infoWindow: {
                content: htmlData
            }
        });
        (map.markers[0].infoWindow).open(map.map, map.markers[0]);
    };

// mixit menu page
    $.fn.mixitMenu = function (animate) {
        if ($.isFunction($.fn.mixItUp)) {
            $(this).mixItUp({
                animation: {
                    enable: true,
                    effects: animate
                }
            });
        }
    };

// chose theme color
    $.fn.themeSetting = function () {
        $(this).show().each(function () {
            var urlParams;
            (window.onpopstate = function () {
                var match,
                    pl = /\+/g, // Regex for replacing addition symbol with a space
                    search = /([^&=]+)=?([^&]*)/g,
                    decode = function (s) {
                        return decodeURIComponent(s.replace(pl, " "));
                    },
                    query = window.location.search.substring(1);

                urlParams = {};
                while (match = search.exec(query))
                    urlParams[decode(match[1])] = decode(match[2]);
            })();
            if (urlParams) {
                $(this).find("a[data-color='" + urlParams['color'] + "']").parent().addClass('active');
            }
            $(this).find('button').on('click', function () {
                if ($(this).hasClass('open')) {
                    $(this).removeClass('open').parent().animate({right: "-167px"}, 500);
                } else {
                    $(this).addClass('open').parent().animate({right: "0px"}, 500);
                }
            });
            $(this).find('a').each(function () {
                var color = $(this);
                $(this).css({"background": '#' + color.attr('data-color')});
                $('.theme-setting li:first').addClass('active');
            }).on('click', function () {
                var color = $(this);
                $('.theme-setting li').removeClass('active');
                $(this).parent().addClass('active');
                return false;
            });
        });
    };

// ajax contact
    $.fn.ajaxContact = function () {
        $(this).each(function () {
            var form = $(this);
            form.find('input').val('').removeAttr('required');
            form.find('textarea').val('').removeAttr('required');
            form.submit(function () {
                form.find('div.error_message').remove();
                form.find('span.contact_load').remove();
                form.find('button.sendContact').after('<span class="contact_load"></span>');
                $.post('contact.php', $(this).serialize(), function (data) {
                    form.find('div.error_message').remove();
                    form.find('span.contact_load').remove();
                    form.find('button.sendContact').after(data);
                });
                return false;
            });
        });
    };

})(jQuery);