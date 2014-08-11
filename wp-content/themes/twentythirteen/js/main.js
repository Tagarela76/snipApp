


(function($) {

    $(window).load(function() {
        $('.loader').fadeOut('slow', function() {
            $(this).css({
                display: 'none',
                visibility: 'hidden'
            }).remove();
        });

        setTimeout(function() {
            $('body').css('overflow-y', 'scroll');
        }, 600);
    });


    $("a[rel^='prettyPhoto']").prettyPhoto();
    

})(jQuery);









// Navigation Menu - Lava Lamp

if (jQuery(window).width() > 700) {
    gooeymenu.setup({
        id:'mainNavigation'
    });
}


if (jQuery(window).width() < 700) {
    jQuery('.goTo').click(function() {
        jQuery('#mainNavigation').addClass('disabledNav');
    });
}



// Parallax Section Hands

// Yep, that's it!
jQuery('#scene').parallax({
    calibrateX: true,
    calibrateY: true,
    invertX: false,
    invertY: true,
    limitX: false,
    limitY: false,
    scalarX: 25,
    scalarY: 15,
    frictionX: 0.2,
    frictionY: 0.8
});


// Yep, that's it!
jQuery('#scene2').parallax({
    calibrateX: true,
    calibrateY: true,
    invertX: false,
    invertY: true,
    limitX: false,
    limitY: 10,
    scalarX: 10,
    scalarY: 8,
    frictionX: 0.2,
    frictionY: 0.8
});


// Yep, that's it!
jQuery('#scene3').parallax({
    calibrateX: true,
    calibrateY: true,
    invertX: false,
    invertY: true,
    limitX: 5000,
    limitY: 10,
    scalarX: 25,
    scalarY: 15,
    frictionX: 0.2,
    frictionY: 0.8
});

// Yep, that's it!
jQuery('#scene4').parallax({
    calibrateX: true,
    calibrateY: true,
    invertX: false,
    invertY: true,
    limitX: 3500,
    limitY: 10,
    scalarX: 5,
    scalarY: 5,
    frictionX: 0.2,
    frictionY: 0.8
});

// Yep, that's it!
jQuery('#scene5').parallax({
    calibrateX: true,
    calibrateY: true,
    invertX: false,
    invertY: true,
    limitX: 3500,
    limitY: 10,
    scalarX: 17,
    scalarY: 5,
    frictionX: 0.2,
    frictionY: 0.8
});

// Yep, that's it!
jQuery('#scene6').parallax({
    calibrateX: true,
    calibrateY: true,
    invertX: false,
    invertY: true,
    limitX: 3500,
    limitY: 10,
    scalarX: 17,
    scalarY: 5,
    frictionX: 0.2,
    frictionY: 0.8
});

// Yep, that's it!
jQuery('#scene7').parallax({
    calibrateX: true,
    calibrateY: true,
    invertX: false,
    invertY: true,
    limitX: 2500,
    limitY: 15,
    scalarX: 10,
    scalarY: 20,
    frictionX: 0.2,
    frictionY: 0.8
});

// Yep, that's it!
jQuery('#scene8').parallax({
    calibrateX: true,
    calibrateY: true,
    invertX: false,
    invertY: true,
    limitX: 2500,
    limitY: 25,
    scalarX: 25,
    scalarY: 15,
    frictionX: 0.2,
    frictionY: 0.8
});

// Yep, that's it!
jQuery('#scene9').parallax({
    calibrateX: true,
    calibrateY: true,
    invertX: false,
    invertY: true,
    limitX: 2500,
    limitY: 25,
    scalarX: 25,
    scalarY: 15,
    frictionX: 0.2,
    frictionY: 0.8
});

// Yep, that's it!
jQuery('#scene10').parallax({
    calibrateX: true,
    calibrateY: true,
    invertX: false,
    invertY: true,
    limitX: 2900,
    limitY: 25,
    scalarX: 30,
    scalarY: 30,
    frictionX: 0.2,
    frictionY: 0.8
});

// Yep, that's it!
jQuery('#scene11').parallax({
    calibrateX: true,
    calibrateY: true,
    invertX: false,
    invertY: true,
    limitX: 2900,
    limitY: 25,
    scalarX: 30,
    scalarY: 30,
    frictionX: 0.2,
    frictionY: 0.8
});

// Yep, that's it!
jQuery('#scene12').parallax({
    calibrateX: true,
    calibrateY: true,
    invertX: false,
    invertY: true,
    limitX: 200,
    limitY: 25,
    scalarX: 5,
    scalarY: 5,
    frictionX: 0.2,
    frictionY: 0.8
});


// Yep, that's it!
jQuery('#scene13').parallax({
    calibrateX: true,
    calibrateY: true,
    invertX: false,
    invertY: true,
    limitX: 200,
    limitY: 25,
    scalarX: 5,
    scalarY: 5,
    frictionX: 0.2,
    frictionY: 0.8
});

// Yep, that's it!
jQuery('#scene14').parallax({
    calibrateX: true,
    calibrateY: true,
    invertX: false,
    invertY: true,
    limitX: 200,
    limitY: 25,
    scalarX: 25,
    scalarY: 45,
    frictionX: 0.2,
    frictionY: 0.8
});


// Yep, that's it!
jQuery('#scene15').parallax({
    calibrateX: true,
    calibrateY: true,
    invertX: false,
    invertY: true,
    limitX: 200,
    limitY: 150,
    scalarX: 5,
    scalarY: 5,
    frictionX: 0.2,
    frictionY: 0.8
});

// Yep, that's it!
jQuery('#scene16').parallax({
    calibrateX: true,
    calibrateY: true,
    invertX: false,
    invertY: true,
    limitX: 200,
    limitY: 25,
    scalarX: 5,
    scalarY: 5,
    frictionX: 0.2,
    frictionY: 0.8
});

jQuery('#scene17').parallax({
    calibrateX: true,
    calibrateY: true,
    invertX: false,
    invertY: true,
    limitX: 200,
    limitY: 25,
    scalarX: 5,
    scalarY: 5,
    frictionX: 0.2,
    frictionY: 0.8
});

jQuery('#scene18').parallax({
    calibrateX: true,
    calibrateY: true,
    invertX: false,
    invertY: true,
    limitX: 200,
    limitY: 25,
    scalarX: 5,
    scalarY: 5,
    frictionX: 0.2,
    frictionY: 0.8
});

jQuery('#scene19').parallax({
    calibrateX: true,
    calibrateY: true,
    invertX: false,
    invertY: true,
    limitX: 25,
    limitY: 45,
    scalarX: 5,
    scalarY: 5,
    frictionX: 0.5,
    frictionY: 0.8
});

jQuery('#scene20').parallax({
    calibrateX: true,
    calibrateY: true,
    invertX: false,
    invertY: true,
    limitX: 45,
    limitY: 150,
    scalarX: 5,
    scalarY: 5,
    frictionX: 0.5,
    frictionY: 0.8
});

jQuery('#scene21').parallax({
    calibrateX: true,
    calibrateY: true,
    invertX: false,
    invertY: true,
    limitX: 200,
    limitY: 300,
    scalarX: 5,
    scalarY: 5,
    frictionX: 0.5,
    frictionY: 0.8
});

jQuery('#scene22').parallax({
    calibrateX: true,
    calibrateY: true,
    invertX: false,
    invertY: true,
    limitX: 100,
    limitY: 150,
    scalarX: 5,
    scalarY: 5,
    frictionX: 0.5,
    frictionY: 0.8
});


jQuery('#scene23').parallax({
    calibrateX: true,
    calibrateY: true,
    invertX: false,
    invertY: true,
    limitX: 200,
    limitY: 200,
    scalarX: 5,
    scalarY: 5,
    frictionX: 1,
    frictionY: 1
});

jQuery('#scene24').parallax({
    calibrateX: true,
    calibrateY: true,
    invertX: false,
    invertY: true,
    limitX: 100,
    limitY: 150,
    scalarX: 4,
    scalarY: 3,
    frictionX: 1,
    frictionY: 1
});


jQuery('#scene25').parallax({
    calibrateX: true,
    calibrateY: true,
    invertX: false,
    invertY: true,
    limitX: 189,
    limitY: 320,
    scalarX: 5,
    scalarY: 3,
    frictionX: 1,
    frictionY: 1
});

jQuery('#scene26').parallax({
    calibrateX: true,
    calibrateY: true,
    invertX: false,
    invertY: true,
    limitX: 100,
    limitY: 132,
    scalarX: 3,
    scalarY: 2,
    frictionX: 1,
    frictionY: 1
});


jQuery('#scene27').parallax({
    calibrateX: true,
    calibrateY: true,
    invertX: false,
    invertY: true,
    limitX: 100,
    limitY: 132,
    scalarX: 3,
    scalarY: 2,
    frictionX: 1,
    frictionY: 1
});


jQuery('#scene28').parallax({
    calibrateX: true,
    calibrateY: true,
    invertX: false,
    invertY: true,
    limitX: 100,
    limitY: 132,
    scalarX: 3,
    scalarY: 2,
    frictionX: 1,
    frictionY: 1
});

jQuery('#scene29').parallax({
    calibrateX: true,
    calibrateY: true,
    invertX: false,
    invertY: true,
    limitX: 100,
    limitY: 132,
    scalarX: 3,
    scalarY: 2,
    frictionX: 1,
    frictionY: 1
});

jQuery('#scene30').parallax({
    calibrateX: true,
    calibrateY: true,
    invertX: false,
    invertY: true,
    limitX: 100,
    limitY: 132,
    scalarX: 3,
    scalarY: 2,
    frictionX: 1,
    frictionY: 1
});

jQuery('#scene31').parallax({
    calibrateX: true,
    calibrateY: true,
    invertX: false,
    invertY: true,
    limitX: 100,
    limitY: 132,
    scalarX: 3,
    scalarY: 2,
    frictionX: 1,
    frictionY: 1
});

jQuery('#scene32').parallax({
    calibrateX: true,
    calibrateY: true,
    invertX: false,
    invertY: true,
    limitX: 100,
    limitY: 132,
    scalarX: 3,
    scalarY: 2,
    frictionX: 1,
    frictionY: 1
});

jQuery('#scene33').parallax({
    calibrateX: true,
    calibrateY: true,
    invertX: false,
    invertY: true,
    limitX: 100,
    limitY: 132,
    scalarX: 3,
    scalarY: 2,
    frictionX: 1,
    frictionY: 1
});

jQuery('#scene34').parallax({
    calibrateX: true,
    calibrateY: true,
    invertX: false,
    invertY: true,
    limitX: 400,
    limitY: 400,
    scalarX: 15,
    scalarY: 15,
    frictionX: 0.2,
    frictionY: 0.5
});

jQuery('#scene35').parallax({
    calibrateX: true,
    calibrateY: true,
    invertX: false,
    invertY: true,
    limitX: 200,
    limitY: 200,
    scalarX: 18,
    scalarY: 18,
    frictionX: 0.2,
    frictionY: 0.5
});

jQuery('#scene36').parallax({
    calibrateX: true,
    calibrateY: true,
    invertX: false,
    invertY: true,
    limitX: 600,
    limitY: 600,
    scalarX: 21,
    scalarY: 21,
    frictionX: 0.5,
    frictionY: 0.8
});

jQuery('#scene37').parallax({
    calibrateX: true,
    calibrateY: true,
    invertX: false,
    invertY: true,
    limitX: 600,
    limitY: 600,
    scalarX: 21,
    scalarY: 21,
    frictionX: 0.5,
    frictionY: 0.8
});

jQuery('#scene38').parallax({
    calibrateX: true,
    calibrateY: true,
    invertX: false,
    invertY: true,
    limitX: 600,
    limitY: 600,
    scalarX: 21,
    scalarY: 21,
    frictionX: 0.5,
    frictionY: 0.8
});

jQuery('#scene39').parallax({
    calibrateX: true,
    calibrateY: true,
    invertX: false,
    invertY: true,
    limitX: 600,
    limitY: 600,
    scalarX: 21,
    scalarY: 21,
    frictionX: 0.5,
    frictionY: 0.8
});







// Slider Rotator Script

(function($) {

    $('.imageRotator button').click(function() {
		$('.rotator').toggleClass('rotate-3d');
	});

})(jQuery);






(function($) {

    $('.goTo').on('click', function(e) {
        e.preventDefault();
        var aniLocation = $(this).attr('href');
        
        if ($(window).width() > 700) {
            $('body, html').animate({
                scrollTop : $(aniLocation).offset().top
            }, {
                duration: 1000,
                queue: false,
                specialEasing: {
                    width: "linear",
                    height: "easeInOutExpo"
                }
            });
        } else {
            $('body, html').animate({
                scrollTop : $(aniLocation).offset().top - 150
            }, {
                duration: 1000,
                queue: false,
                specialEasing: {
                    width: "linear",
                    height: "easeInOutExpo"
                }
            });
        }

    });



    //  Scrolled by user interaction
    $('#screenGallery').carouFredSel({
        auto: false,
        responsive: true,
        circular: true,
        prev: '#prev2',
        next: '#next2',
        mousewheel: false,
        swipe: {
            onMouse: false,
            onTouch: true
        }
    });


    //  Scrolled by user interaction
    $('#screenGallery-two').carouFredSel({
        auto: false,
        responsive: true,
        circular: true,
        prev: '#prev1',
        next: '#next1',
        mousewheel: false,
        swipe: {
            onMouse: false,
            onTouch: true
        }
    });




    $('.scrollTop').on('click', function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, 1000);
    });




    $('.smallNavButton').on('click', function(event) {

       $('#mainNavigation').toggleClass('disabledNav');
        
    });


})(jQuery);