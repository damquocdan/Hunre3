(function () {
    'use strict';

    // Toggle sidebar on Menu button click
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        $('#body').toggleClass('active');
    });

    // Auto-hide sidebar on window resize if window size is small
    // $(window).on('resize', function () {
    //     if ($(window).width() <= 768) {
    //         $('#sidebar, #body').addClass('active');
    //     }
    // });
})();
(function ($) {
    /*------------------
        Preloader
    --------------------*/
    $(window).on('load', function () {
        $('.loader').fadeOut();
        $('#preloader').delay(100).fadeOut('slow');
    });
})(jQuery);

// Quantity
$(document).ready(function () {
    var quantity = 1;

    $('.quantity-right-plus').click(function (e) {
        e.preventDefault();
        var quantity = parseInt($('#quantity').val());
        $('#quantity').val(quantity + 1);
    });

    $('.quantity-left-minus').click(function (e) {
        e.preventDefault();
        var quantity = parseInt($('#quantity').val());
        if (quantity > 1) {
            $('#quantity').val(quantity - 1);
        }
    });

    /////////////////====================  Same product=============

    if ($('.owl-carousel').length > 0) {
        // check if element exists
        $('.owl-carousel').slick({
            infinite: true,
            swipeToSlide: true,
            slidesToShow: 5,
            dots: true,
            slidesToScroll: 2,
            autoplay: true,
            prevArrow:
                '<button type="button" class="slick-prev"><i class="fa fa-chevron-left"></i></button>',
            nextArrow:
                '<button type="button" class="slick-next"><i class="fa fa-chevron-right"></i></button>',
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                    },
                },
                {
                    breakpoint: 640,
                    settings: {
                        slidesToShow: 1,
                    },
                },
            ],
        });
    } // end if

    // ===============active category=============================
});
