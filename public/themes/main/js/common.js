$('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    speed: 1500,
    asNavFor: '.slider-nav',
})
$('.slider-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    centerMode: true,
    arrows: true,
    vertical: true,
    autoplay: true,
    autoplaySpeed: 5000,
    // speed: 1000,
    infinite: true,
    loop: true,
    asNavFor: '.slider-for',
    dots: false,
    focusOnSelect: true,
    verticalSwiping: true,
    pauseOnHover: false,
    responsive: [{
            breakpoint: 992,
            settings: {
                vertical: false,
            },
        },
        {
            breakpoint: 768,
            settings: {
                vertical: false,
            },
        },
        {
            breakpoint: 580,
            settings: {
                vertical: false,
                slidesToShow: 3,
            },
        },
        {
            breakpoint: 380,
            settings: {
                vertical: false,
                slidesToShow: 2,
            },
        },
    ],
})
const pause = $('.pause').on('click', function() {
    $(this).toggleClass('active')
    const pause1 = $('.play.active')
    if (pause1) {
        pause1.toggleClass('active')
    }
    $('.slider').slick('slickPause').slick('slickSetOption', 'pauseOnDotsHover', false)
})

const play = $('.play').on('click', function() {
    $(this).toggleClass('active')
    const play1 = $('.pause.active')
    if (play1) {
        play1.toggleClass('active')
    }
    $('.slider').slick('slickPlay').slick('slickSetOption', 'pauseOnDotsHover', true)
})

//sroll top
if ($('#button-top').length > 0) {
    var btnTop = $('#button-top')
    $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
            btnTop.addClass('show-button-top')
        } else {
            btnTop.removeClass('show-button-top')
        }
    })
    btnTop.on('click', function(e) {
        e.preventDefault()
        $('html, body').animate({ scrollTop: 0 }, '300')
    })
}
// main slider
let main_slider = new Swiper('.main-slider', {
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    effect: 'fade',
    loop: true,
    speed: 2000,
    pagination: {
        el: '.main-slider .swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.main-slider .swiper-button-next',
        prevEl: '.main-slider .swiper-button-prev',
    },
})
let logo_company = new Swiper('.logo-company', {
    slidesPerView: 1,
    spaceBetween: 0,
    centeredSlides: true,
    loop: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },

    pagination: {
        el: '.swiper-pagination',
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
    },
})

// slider post home

let newPostSlide = new Swiper('.new-post-slide', {
    speed: 1500,
    loop: true,
    autoplay: {
        delay: 6000,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.new-post-slide .swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.new-post-slide .swiper-button-next',
        prevEl: '.new-post-slide .swiper-button-prev',
    },
    breakpoints: {
        1024: {
            slidesPerView: 1,
            // centeredSlides: true,
            spaceBetween: 30,
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
    },
})
let newPostSlide_bottom = new Swiper('.post-slide-bottom', {
        speed: 800,
        loop: true,
        slidesPerView: 3,
        // autoplay: {
        //     delay: 5000,
        //     disableOnInteraction: false,

        // },
        pagination: {
            el: '.post-slide-bottom .swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.post-slide-bottom .swiper-button-next',
            prevEl: '.post-slide-bottom .swiper-button-prev',
        },
        breakpoints: {
            1024: {
                slidesPerView: 3,
                // centeredSlides: true,
                spaceBetween: 25,
                navigation: {
                    nextEl: '.post-slide-bottom .swiper-button-next',
                    prevEl: '.post-slide-bottom .swiper-button-prev',
                },
            },
            480: {
                slidesPerView: 2,
                centeredSlides: false,
                spaceBetween: 40,
                navigation: {
                    nextEl: '.post-slide-bottom .swiper-button-next',
                    prevEl: '.post-slide-bottom .swiper-button-prev',
                },
            },
            320: {
                slidesPerView: 1,
                centeredSlides: false,
                spaceBetween: 40,
                navigation: {
                    nextEl: '.post-slide-bottom .swiper-button-next',
                    prevEl: '.post-slide-bottom .swiper-button-prev',
                },
            },
        },
    })
    // tuyen dung slider
var recruitment_slider = new Swiper('.recruitment-slider', {
    direction: 'vertical',
    initialSlide: 1,
    slidesPerColumn: 1,
    centeredSlides: true,
    loop: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    speed: 3000,

    pagination: {
        el: '.recruitment-slider .swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: 'swiper-button-next',
        prevEl: 'swiper-button-prev',
    },
})

var galleryThumbs = new Swiper('.field-activity-slide-bottom', {
    spaceBetween: 15,

    // freeMode: true,
    // watchSlidesVisibility: true,
    // watchSlidesProgress: true,
    // centeredSlides: true,

    slidesPerView: 6,
    slideToClickedSlide: true,

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
})

if ($('.field-activity-slide-top').length > 0) {
    var Homebanner = new Swiper('.field-activity-slide-top', {
        slidesPerView: 1,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

        slideToClickedSlide: true,
        spaceBetween: 0,
        speed: 1000,
        loop: true,
        // loopedSlides: 6,
        thumbs: {
            swiper: galleryThumbs,
        },
    })

    function myHandler(e) {
        Homebanner.slideNext()
    }
    const autoplay = 2000
    if ($('.field-activity-slide-top .swiper-slide-active .__video').length) {
        $('.field-activity-slide-top .swiper-slide-active .__video')[0].play()
        $('.field-activity-slide-top .swiper-slide-active .__video')[0].addEventListener('ended', myHandler, false)
    } else {
        setTimeout(() => {
            myHandler()
        }, autoplay)
    }
    /**
     * https://stackoverflow.com/questions/2741493/detect-when-an-html5-video-finishes
     */
    Homebanner.on('slideChange', function() {
        if ($('.field-activity-slide-top .swiper-slide-active .__video').length) {
            $('.field-activity-slide-top .swiper-slide-active .__video')[0].paused
        }
    })
    Homebanner.on('slideChangeTransitionEnd', function() {
        if ($('.field-activity-slide-top .swiper-slide-active .__video').length) {
            $('.field-activity-slide-top .swiper-slide-active .__video')[0].play()
            $('.field-activity-slide-top .swiper-slide-active .__video')[0].addEventListener('ended', myHandler, false)
        } else {
            setTimeout(() => {
                myHandler()
            }, autoplay)
        }
    })
}

// change color header
if ($('#header').length > 0) {
    var header = $('#header')
    var headerTop = $('#header-top')
    var logoblue = $('.logo_link-blue')
    var logowhite = $('.logo_link-white')
    var colorText = $('.nav-item .item__link,.item-top__link')
    var icontongger = $('.navbar-toggler')

    $(window).scroll(function() {
        if (window.scrollY > 0) {
            header.addClass('add-bg-color')

            headerTop.addClass('add-bg-top')

            logoblue.css('display', 'block')
            logowhite.css('display', 'none')
            colorText.css('color', '#262626')
            icontongger.css('color', '#000')
        } else {
            header.removeClass('add-bg-color')
            headerTop.removeClass('add-bg-top')

            logoblue.css('display', 'none')
            logowhite.css('display', 'block')
            colorText.css('color', '#fff')
            icontongger.css('color', '#fff')
        }
    })
}
$('[data-parallax="scroll"]').each(function() {
    var $this = $(this)
    $this.parallax({ imageSrc: $this.data('image-src') })
})