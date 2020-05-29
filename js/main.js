jQuery(document).ready(function ($) {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 1) {
            $('header').addClass("sticky");
        } else {
            $('header').removeClass("sticky");
        }
    });


    /******************************
     BOTTOM SCROLL TOP BUTTON
     ******************************/

    // declare variable
    var scrollTop = $(".scrollTop");

    $(window).scroll(function () {
        // declare variable
        var topPos = $(this).scrollTop();

        // if user scrolls down - show scroll to top button
        if (topPos > 100) {
            $(scrollTop).css("opacity", "1");

        } else {
            $(scrollTop).css("opacity", "0");
        }

    }); // scroll END

    //Click event to scroll to top
    $(scrollTop).click(function () {
        $('html, body').animate({
            scrollTop: 0
        }, 800);
        return false;

    }); // click() scroll top EMD


    AOS.init({
        duration: 1200,
    })

//carouse
    jQuery(document).ready(function () {
        jQuery('.menu-toggle').click(function () {
            jQuery('.site-nav').toggleClass('site-nav--open', 500);
            jQuery(this).toggleClass('open');
        });
        jQuery('#reserve-carousel').owlCarousel({
            loop: true,
            items: 1,
            margin: 5,
            nav: true,
            dots: false,
            autoplay: false,
            smartSpeed: 900,
            responsive: {
                0: {
                    items: 1,
                    nav: true,
                    dots: false,
                },
                600: {
                    items: 1
                },
                768: {
                    items: 1
                },
            }
        })
    });
//  2  
    jQuery(document).ready(function () {
        jQuery('.menu-toggle').click(function () {
            jQuery('.site-nav').toggleClass('site-nav--open', 500);
            jQuery(this).toggleClass('open');
        });
        jQuery('#blair-carousel').owlCarousel({
            loop: true,
            items: 1,
            margin: 5,
            nav: true,
            dots: false,
            autoplay: false,
            smartSpeed: 900,
            responsive: {
                0: {
                    items: 1,
                    nav: true,
                    dots: false,
                },
                600: {
                    items: 1
                },
                768: {
                    items: 1
                },
            }
        })
    });
//  3  
    jQuery(document).ready(function () {
        jQuery('.menu-toggle').click(function () {
            jQuery('.site-nav').toggleClass('site-nav--open', 500);
            jQuery(this).toggleClass('open');
        });
        jQuery('#henry-carousel').owlCarousel({
            loop: true,
            items: 1,
            margin: 5,
            nav: true,
            dots: false,
            autoplay: false,
            smartSpeed: 900,
            responsive: {
                0: {
                    items: 1,
                    nav: true,
                    dots: false,
                },
                600: {
                    items: 1
                },
                768: {
                    items: 1
                },
            }
        })
    });

//accordion section
    var selectIds = $('#panel1,#panel2,#panel3');
    $(function ($) {
        selectIds.on('show.bs.collapse hidden.bs.collapse', function () {
            $(this).prev().find('.far').toggleClass('far fa-plus-square far fa-minus-square');
        })
    });

//tab section
    $(document).ready(function () {

        $('ul.tabs li').click(function () {
            var tab_id = $(this).attr('data-tab');

            $('ul.tabs li').removeClass('current');
            $('.tab-content').removeClass('current');

            $(this).addClass('current');
            $("#" + tab_id).addClass('current');
        })

    })

    //$("input.btn.course-submit-btn").before("<i class='fas fa-address-card'></i>");

}); //main.js

//mobile menu
function openNav() {
    document.getElementById("myNav").style.width = "60%";
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}





     