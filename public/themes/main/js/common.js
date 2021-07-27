$('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav',
});
$('.slider-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    centerMode: true,
    arrows: true,
    vertical: true,
    autoplay: true,
    autoplaySpeed: 2000,
    speed: 1000,
    infinite: true,
    asNavFor: '.slider-for',
    dots: false,
    focusOnSelect: true,
    verticalSwiping: true,


    responsive: [{
            breakpoint: 992,
            settings: {
                vertical: false,
            }
        },
        {
            breakpoint: 768,
            settings: {
                vertical: false,
            }
        },
        {
            breakpoint: 580,
            settings: {
                vertical: false,
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 380,
            settings: {
                vertical: false,
                slidesToShow: 2,
            }
        }
    ]
});
const pause = $('.pause').on('click', function() {
    $(this).toggleClass("active")
    const pause1 = $('.play.active')
    if (pause1) {
        pause1.toggleClass('active')
    }
    $('.slider')
        .slick('slickPause')
        .slick('slickSetOption', 'pauseOnDotsHover', false);

});

const play = $('.play').on('click', function() {
    $(this).toggleClass("active")
    const play1 = $('.pause.active')
    if (play1) {
        play1.toggleClass('active')
    }
    $('.slider')
        .slick('slickPlay')
        .slick('slickSetOption', 'pauseOnDotsHover', true);
});


//sroll top
if ($('#button-top').length > 0) {
    var btnTop = $('#button-top');
    $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
            btnTop.addClass('show-button-top');
        } else {
            btnTop.removeClass('show-button-top');
        }
    });
    btnTop.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: 0 }, '300');
    });
}
// main slider 
let main_slider = new Swiper(".main-slider", {

    speed: 800,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: '.main-slider .swiper-button-next',
        prevEl: '.main-slider .swiper-button-prev',
    },

});
let logo_company = new Swiper(".logo-company", {

    slidesPerView: 1,
    spaceBetween: 0,
    centeredSlides: true,
    loop: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },

    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: '.logo-company .swiper-button-next',
        prevEl: '.logo-company .swiper-button-prev',
    },
    breakpoints: {
        768: {
            slidesPerView: 3,
            centeredSlides: true,
            spaceBetween: 0,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.logo-company .swiper-button-next',
                prevEl: '.logo-company .swiper-button-prev',
            },
        },
    }

});

// slider post home 

let newPostSlide = new Swiper(".new-post-slide", {
    slidesPerView: 3,
    loop: true,
    centeredSlides: true,
    spaceBetween: 40,
    navigation: {
        nextEl: '.new-post-slide .swiper-button-next',
        prevEl: '.new-post-slide .swiper-button-prev',
    },
    breakpoints: {
        1024: {
            slidesPerView: 3,
            centeredSlides: true,
            spaceBetween: 40,
            navigation: {
                nextEl: '.new-post-slide .swiper-button-next',
                prevEl: '.new-post-slide .swiper-button-prev',
            },
        },
        480: {
            slidesPerView: 2,
            centeredSlides: false,
            spaceBetween: 40,
            navigation: {
                nextEl: '.new-post-slide .swiper-button-next',
                prevEl: '.new-post-slide .swiper-button-prev',
            },
        },
        320: {
            slidesPerView: 1,
            centeredSlides: false,
            spaceBetween: 40,
            navigation: {
                nextEl: '.new-post-slide .swiper-button-next',
                prevEl: '.new-post-slide .swiper-button-prev',
            },
        },
    }
});
// tuyen dung slider
var recruitment_slider = new Swiper(".recruitment-slider", {
    // slidesPerView: 1,

    centeredSlides: true,
    loop: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    speed: 2000,


    pagination: {
        el: ".recruitment-slider .swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: "swiper-button-next",
        prevEl: "swiper-button-prev",
    },
});

// linh vuc hoat dong slider
let fieldActivitySlide = new Swiper(".field-activity-slide", {
    speed: 800,
    navigation: {
        nextEl: '.field-activity-slide .swiper-button-next',
        prevEl: '.field-activity-slide .swiper-button-prev',
    },
    observer: true,
    observeParents: true,

});


// change color header 
if ($('#header').length > 0) {
    var btn = $('#header');
    var headerTop = $('#header-top');
    var boderTop = $('#boder-top');
    var logoblue = $('.logo_link-blue');
    var logowhite = $('.logo_link-white');
    var colorText = $('.nav-item .item__link,.item-top__link');
    var icontongger = $('.navbar-toggler');
    $(window).scroll(function() {
        if ($(window).scrollTop() > 10) {
            btn.addClass('add-bg-color');
            headerTop.addClass('add-bg-top');
            boderTop.addClass('add-color-boder');
            logoblue.css('display', 'block');
            logowhite.css('display', 'none');
            colorText.css('color', '#262626');
            icontongger.css('color', '#000')

        } else {
            btn.removeClass('add-bg-color');
            headerTop.removeClass('add-bg-top');
            boderTop.removeClass('add-color-boder');
            logoblue.css('display', 'none');
            logowhite.css('display', 'block')
            colorText.css('color', '#fff');
            icontongger.css('color', '#fff')
        }
    });

}