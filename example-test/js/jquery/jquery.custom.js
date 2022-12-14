//-> (jQuery.javascript) TATWERAT FrameWork

(function ($) {

    "use strict";

    function AH_Custom_JS() {

        // show wrapper
        this.showWrapper = function () {
            $('#Wrapper').css({"visibility": "visible"}).animate({opacity: "1"}, 500);
        };

        // costum jQuery elment
        this.customUI = function () {

            $('.custom-select').fancySelect(); // custom select
            $('[data-toggle="tooltip"]').tooltip(); // tooltip

            $('.tabs ul.buttons li a').on('click', function () {
                var ID = $(this).attr('href');
                $(this).parents('ul.buttons').find('>li').removeClass('active');
                $(this).parent().addClass('active');
                $('.tabs .tab-content').hide().removeClass('active');
                $('.tabs .tab-content' + ID).fadeIn(200);
                return false;
            });

            // ajax data

            $('.tab-content form').on('submit',function () {
                var form = $(this);
                form.find('.btn').html(form.find('.btn').text() + '<span> &nbsp; <i class=" fa fa-refresh fa-spin"></i> </span>');
                form.next('.code').html('');
                $.post('ajax-data.php', form.serialize(), function (data) {
                    setTimeout(function () {
                        form.find('.btn > span').remove();
                        form.next('.code').html(data);
                    }, 1000);
                });
                return false;
            });

        };
    }

// on window load run functions
    $(window).load(function () {

        var runJS = new AH_Custom_JS(); // function object

        // when loader fadeOut
        $('div.loading_window').delay(100).fadeOut(function () {
            runJS.showWrapper();
            runJS.customUI();

            if (window.location.hash) {
                var target = $(window.location.hash);
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                window.location.hash = '';
            }

        });

        $(this).resize(function () {
            //alert('xxxxx');
        });

    });
    $(document).ready(function () {
        $('.loading_window').centerBlock(35);
    });
    /*---------- TATWERAT FrameWork ---------*/

})(jQuery);