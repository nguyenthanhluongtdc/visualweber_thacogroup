// slide develop introduce page

let slide_achivement = new Swiper('.slide-achivement', {
    slidesPerView: 1,
    spaceBetween: 0,
    centeredSlides: true,
    loop: true,
    speed: 1500,
    observer: true,
    observeParents: true,
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },

    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.slide-achivement .swiper-button-next',
        prevEl: '.slide-achivement .swiper-button-prev',
    },

})
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
    speed: 1000,
    infinite: true,
    loop: true,
    asNavFor: '.slider-for',
    dots: false,
    focusOnSelect: true,
    verticalSwiping: true,
    pauseOnHover: false,
    responsive: [{
            breakpoint: 768,
            settings: {
                vertical: false,
                slidesToShow: 3,

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
    // end slide develop introduce page
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

if ($('.main-slider').length > 0) {
    let main_slider = new Swiper('.main-slider', {
        // autoplay: {
        //     delay: 5000,
        //     disableOnInteraction: false,
        // },
        effect: 'fade',
        loop: true,
        speed: 3000,
        pagination: {
            el: '.main-slider .swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.main-slider .swiper-button-next',
            prevEl: '.main-slider .swiper-button-prev',
        },
    })

    // handle playvideo
    function myHandler(e) {
        main_slider.slideNext()
    }
    const autoplay = 3000
    if ($('.main-slider .swiper-slide-active .__video').length) {
        $('.main-slider .swiper-slide-active .__video')[0].play()
        $('.main-slider .swiper-slide-active .__video')[0].addEventListener('ended', myHandler, false)

    } else {
        setTimeout(() => {
            myHandler()
        }, autoplay)
    }
    /**
     * https://stackoverflow.com/questions/2741493/detect-when-an-html5-video-finishes
     */
    main_slider.on('slideChange', function() {
        if ($('.main-slider .swiper-slide-active .__video').length) {
            $('.main-slider .swiper-slide-active .__video')[0].paused

        }
    })
    main_slider.on('slideChangeTransitionEnd', function() {
        if ($('.main-slider .swiper-slide-active .__video').length) {
            $('.main-slider .swiper-slide-active .__video')[0].play()
            $('.main-slider .swiper-slide-active .__video')[0].addEventListener('ended', myHandler, false)

        } else {
            setTimeout(() => {
                myHandler()
            }, autoplay)
        }
    })

}

// let logo_company = new Swiper('.logo-company', {
//     slidesPerView: 1,
//     spaceBetween: 0,
//     centeredSlides: true,
//     loop: true,
//     autoplay: {
//         delay: 3000,
//         disableOnInteraction: false,
//     },

//     pagination: {
//         el: '.swiper-pagination',
//         clickable: true,
//     },
//     navigation: {
//         nextEl: '.logo-company .swiper-button-next',
//         prevEl: '.logo-company .swiper-button-prev',
//     },
//     breakpoints: {
//         768: {
//             slidesPerView: 3,
//             centeredSlides: true,
//             spaceBetween: 0,
//             loop: true,
//             autoplay: {
//                 delay: 2500,
//                 disableOnInteraction: false,
//             },
//             navigation: {
//                 nextEl: '.logo-company .swiper-button-next',
//                 prevEl: '.logo-company .swiper-button-prev',
//             },
//         },
//     },
// })

// slider post home

let newPostSlide = new Swiper('.new-post-slide', {
    spaceBetween: 30,
    // effect: "fade",
    // speed: 1500,
    // loop: true,
    // autoplay: {
    //     delay: 6000,
    //     disableOnInteraction: false,
    // },
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
let newPostSlide_home_mb = new Swiper('.post-home-slide-mb', {
    spaceBetween: 30,
    // effect: "fade",
    // speed: 1500,
    // loop: true,
    // autoplay: {
    //     delay: 6000,
    //     disableOnInteraction: false,
    // },
    pagination: {
        el: '.post-home-slide-mb .swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.post-home-slide-mb .swiper-button-next',
        prevEl: '.post-home-slide-mb .swiper-button-prev',
    },
    breakpoints: {
        1024: {
            slidesPerView: 1,
            // centeredSlides: true,
            spaceBetween: 30,
            navigation: {
                nextEl: '.post-home-slide-mb .swiper-button-next',
                prevEl: '.post-home-slide-mb .swiper-button-prev',
            },
        },
        480: {
            slidesPerView: 1,
            centeredSlides: false,
            // spaceBetween: 40,
            navigation: {
                nextEl: '.post-home-slide-mb .swiper-button-next',
                prevEl: '.post-home-slide-mb .swiper-button-prev',
            },
        },
        320: {
            slidesPerView: 1,
            centeredSlides: false,
            // spaceBetween: 40,
            navigation: {
                nextEl: '.post-home-slide-mb .swiper-button-next',
                prevEl: '.post-home-slide-mb .swiper-button-prev',
            },
        },
    },
})
let post_news_mobile = new Swiper('.post-news-mobile', {
    spaceBetween: 30,
    // effect: "fade",
    // speed: 1500,
    // loop: true,
    // autoplay: {
    //     delay: 6000,
    //     disableOnInteraction: false,
    // },
    pagination: {
        el: '.post-news-mobile .swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.post-news-mobile .swiper-button-next',
        prevEl: '.post-news-mobile .swiper-button-prev',
    },
    breakpoints: {
        1024: {
            slidesPerView: 1,
            // centeredSlides: true,
            spaceBetween: 30,
            navigation: {
                nextEl: '.post-news-mobile .swiper-button-next',
                prevEl: '.post-news-mobile.swiper-button-prev',
            },
        },
        480: {
            slidesPerView: 1,
            centeredSlides: false,
            // spaceBetween: 40,
            navigation: {
                nextEl: '.post-news-mobile .swiper-button-next',
                prevEl: '.post-news-mobile .swiper-button-prev',
            },
        },
        320: {
            slidesPerView: 1,
            centeredSlides: false,
            // spaceBetween: 40,
            navigation: {
                nextEl: '.post-news-mobile .swiper-button-next',
                prevEl: '.post-news-mobile .swiper-button-prev',
            },
        },
    },
});
let newPostSlide_bottom = new Swiper('.post-slide-bottom', {
    keyboard: {
        enabled: true,
        onlyInViewport: false,
    },
    speed: 800,
    loop: true,
    slidesPerView: 3,
    spaceBetween: 25,
    pagination: {
        el: '.post-slide-bottom .swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.post-slide-bottom .swiper-button-next',
        prevEl: '.post-slide-bottom .swiper-button-prev',
    },
})
var newPostSlide_relate = new Swiper('.post-slide-relate', {
    spaceBetween: 20,
    slidesPerView: 3,
    loop: true,
    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
    },
    speed: 1000,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
    },
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
    },
    breakpoints: {
        1024: {
            slidesPerView: 3,
            // centeredSlides: true,
            spaceBetween: 20,

        },
        768: {
            slidesPerView: 2.5,
            centeredSlides: true,
            spaceBetween: 10,

        },
        320: {
            slidesPerView: 1.5,
            centeredSlides: true,
            spaceBetween: 10,

        },
    },
});
let field_slider = new Swiper('.field-slider', {
        speed: 800,
        loop: true,
        slidesPerView: 3,
        spaceBetween: 25,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.field-slider .swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.field-slider .swiper-button-next',
            prevEl: '.field-slider .swiper-button-prev',
        },
        breakpoints: {
            1024: {
                slidesPerView: 3,
                // centeredSlides: true,
                spaceBetween: 25,
                navigation: {
                    nextEl: '.field-slider .swiper-button-next',
                    prevEl: '.field-slider .swiper-button-prev',
                },
            },
            480: {
                slidesPerView: 2,
                centeredSlides: false,
                spaceBetween: 40,
                navigation: {
                    nextEl: '.field-slider .swiper-button-next',
                    prevEl: '.field-slider .swiper-button-prev',
                },
            },
            320: {
                slidesPerView: 1,
                centeredSlides: false,
                spaceBetween: 40,
                navigation: {
                    nextEl: '.field-slider .swiper-button-next',
                    prevEl: '.field-slider .swiper-button-prev',
                },
            },
        },

    })
    // tuyen dung slider
var recruitment_slider = new Swiper('.recruitment-slider', {
    direction: 'vertical',
    loop: true,
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },
    speed: 2000,

    pagination: {
        el: '.recruitment-slider .swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.recruitment-slider .swiper-button-next',
        prevEl: '.recruitment-slider .swiper-button-prev',
    },
})

var media_sider = new Swiper('.media-slider', {


    loop: true,
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },
    speed: 2000,

    pagination: {
        el: '.media-slider .swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.media-slider .swiper-button-next',
        prevEl: '.media-slider .swiper-button-prev',
    },
})


if ($('.field-activity-slide-top').length > 0) {
    var Media_home = new Swiper('.field-activity-slide-top', {
        slidesPerView: 1,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

        slideToClickedSlide: true,
        spaceBetween: 0,
        speed: 1000,
        loop: true,
    })

    function myHandler(e) {
        Media_home.slideNext()
    }
    const autoplay = 2000
    if ($('.field-activity-slide-top .swiper-slide-active .__video').length && $('.field-activity-slide-top .swiper-slide-active .__video.video-full').length) {
        $('.field-activity-slide-top .swiper-slide-active .__video')[0].play()
        $('.field-activity-slide-top .swiper-slide-active .__video.video-full')[0].play()
        $('.field-activity-slide-top .swiper-slide-active .__video')[0].addEventListener('ended', myHandler, false)
        $('.field-activity-slide-top .swiper-slide-active .__video.video-full')[0].addEventListener('ended', myHandler, false)
    } else {
        setTimeout(() => {
            myHandler()
        }, autoplay)
    }
    /**
     * https://stackoverflow.com/questions/2741493/detect-when-an-html5-video-finishes
     */
    Media_home.on('slideChange', function() {
        if ($('.field-activity-slide-top .swiper-slide-active .__video').length && $('.field-activity-slide-top .swiper-slide-active .__video.video-full').length) {
            $('.field-activity-slide-top .swiper-slide-active .__video')[0].paused
            $('.field-activity-slide-top .swiper-slide-active .__video.video-full')[0].paused
        }
    })
    Media_home.on('slideChangeTransitionEnd', function() {
        if ($('.field-activity-slide-top .swiper-slide-active .__video').length && $('.field-activity-slide-top .swiper-slide-active .__video.video-full').length) {
            $('.field-activity-slide-top .swiper-slide-active .__video')[0].play()
            $('.field-activity-slide-top .swiper-slide-active .__video.video-full')[0].play()
            $('.field-activity-slide-top .swiper-slide-active .__video')[0].addEventListener('ended', myHandler, false)
            $('.field-activity-slide-top .swiper-slide-active .__video.video-full')[0].addEventListener('ended', myHandler, false)
        } else {
            setTimeout(() => {
                myHandler()
            }, autoplay)
        }
    })
}
//scroll play video
window.addEventListener('load', videoScroll);
window.addEventListener('scroll', videoScroll);

function videoScroll() {

    if (document.querySelectorAll('video[autoplay]').length > 0) {
        var windowHeight = window.innerHeight,
            videoEl = document.querySelectorAll('video[autoplay]');

        for (var i = 0; i < videoEl.length; i++) {

            var thisVideoEl = videoEl[i],
                videoHeight = thisVideoEl.clientHeight,
                videoClientRect = thisVideoEl.getBoundingClientRect().top;

            if (videoClientRect <= ((windowHeight) - (videoHeight * .5)) && videoClientRect >= (0 - (videoHeight * .5))) {
                thisVideoEl.play();
            } else {
                thisVideoEl.pause();
            }

        }
    }

}

// change color header
if ($('#header').length > 0) {
    var header = $('#header')
    var headerTop = $('#header-top')
    var logoblue = $('.logo_link-blue')
    var logowhite = $('.logo_link-white')
    var colorText = $('.nav-item .item__link,.item-top__link')
    var icontongger = $('.navbar-toggler')
    var colorActive = $('.color-active')

    $(window).scroll(function() {
        if (window.scrollY > 0) {
            header.addClass('add-bg-color')
            headerTop.addClass('add-bg-top')


            logoblue.css('display', 'block')
            logowhite.css('display', 'none')
            colorText.css('color', '#262626')
            icontongger.css('color', '#000')
            colorActive.css('color', '#0F4685')
        } else {
            header.removeClass('add-bg-color')
            headerTop.removeClass('add-bg-top')


            logoblue.css('display', 'none')
            logowhite.css('display', 'block')
            colorText.css('color', '#fff')
            icontongger.css('color', '#fff')
            colorActive.css('color', '#fff')
        }
    })
}
//scroll 
// Hide Header  on scroll down

$(document).mousemove(function(d) {
    var st = $(this).scrollTop();
    if (d.pageY <= (st + 20)) {
        if ($('.nav-up')) {
            $('.post-sidebar-content').css('top', 100);
            $('.shareholder-infomation_right').css('top', 100);
            $('header').removeClass('nav-up');

        }

    }
});
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('header').outerHeight();

$(window).scroll(function(event) {
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 150);



function hasScrolled() {
    if (window.scrollY >= 150) {
        var st = $(this).scrollTop();

        // Make sure they scroll more than delta
        if (Math.abs(lastScrollTop - st) <= delta)
            return;

        // If they scrolled down and are past the navbar, add class .nav-up.
        // This is necessary so you never see what is "behind" the navbar.
        if (st > lastScrollTop && st > navbarHeight) {
            // Scroll Down

            $('header').removeClass('nav-down').addClass('nav-up');
            $('.post-sidebar-content').css('top', 5);
            $('.relationship-sibar').css('top', 5);
        } else {
            // Scroll Up

            if (st + $(window).height() < $(document).height()) {
                $('header').removeClass('nav-up').addClass('nav-down');
                $('.post-sidebar-content').css('top', 100);
                $('.relationship-sibar').css('top', 100);

            }
        }

        lastScrollTop = st;
    } else {
        $('header').removeClass('nav-up');
    }

}
// change bg introduce page
$(window).on("scroll touchmove", function() {
    var element = $(".develop-wrapper");

    if (element.length > 0) {
        if ($(document).scrollTop() >= $(".develop-wrapper").position().top) {
            $('.develop__title').addClass('active');
            $('.img-white').addClass('d-block');
            $('.img-blue').addClass('d-none');
            $('.big-title').addClass('text-white');

        } else {
            $('.develop__title').removeClass('active');
            $('.img-white').removeClass('d-block');
            $('.img-blue').removeClass('d-none');
            $('.big-title').removeClass('text-white');

        };
    }

});
var gallery_top = new Swiper(".gallery-top", {
    slidesPerView: 1,
    speed: 400,
    scrollbar: {
        el: ".swiper-scrollbar",

    },
    navigation: {
        nextEl: '.gallery-top .swiper-button-next',
        prevEl: '.gallery-top .swiper-button-prev',
    },

});

if ($('.image-item__back').length > 0) {
    $('.image-item__back').click(function(e) {
        $('#album_modal-detail').css('display', 'none');
        $('#album_modal').modal('show');


    });

}
if ($('.img-click').length > 0) {
    $('.img-click').click(function() {

        $('#album_modal-detail').modal('show');
    });

    // $('#album_modal-detail').modal('show');
}
if ($('.icon-sort').length > 0) {
    $('.icon-sort').click(function() {

        $('.sort-list').toggleClass('d-block');
    });

}
// filter click
if ($('.filter__title').length > 0) {
    $('.filter__title').click(function() {

        $('.filler-list').toggleClass('d-block');
    });

}
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});



if ($('.itemdown-show').length > 0) {
    $('.itemdown-show').click(function() {
        $(this).parents('.info-right').find('.downcontent').slideToggle();
        return false;
    });
}
$('#support-tab>div').click(function(event) {
    $('.contact-fo').parent().css('display', '');
    var posTop = $('#support-tab').offset().top + $('#support-tab').outerHeight();
    if ($('.anchor-link').length) {
        $('html, body').animate({ scrollTop: posTop - 70 }, 500);
    } else {
        $('html, body').animate({ scrollTop: posTop - 20 }, 500);
    }
});
$(document).ready(function() {
    const info_contact = $('.office-contact-wrapper');
    const email_us = $('.contact-fo-container');
    const chat_online = $('.chat-online');
    // info_contact.css('display', 'none');
    email_us.css('display', 'none');
    chat_online.css('display', 'none');


    if (info_contact && email_us && chat_online) {
        $('#support-tab').find('.contact-box__item:nth-child(1)').click(function() {

            info_contact.css('display', 'none');
            email_us.css('display', 'block');
            chat_online.css('display', 'none');
        });
        $('#support-tab').find('.contact-box__item:nth-child(2)').click(function() {
            info_contact.css('display', 'block');
            email_us.css('display', 'none');
            chat_online.css('display', 'none');

        });
        $('#support-tab').find('.contact-box__item:nth-child(3)').click(function() {
            info_contact.css('display', 'none');
            email_us.css('display', 'none');
            chat_online.css('display', 'block');

        });
    } else return;
});

// popup 
var id = '#dialog';

//transition effect		
$('#mask').fadeIn(500);
$('#mask').fadeTo("slow");

//transition effect
$(id).fadeIn(1000);

//if close button is clicked
$('.window .close').click(function(e) {
    //Cancel the link behavior
    e.preventDefault();

    $('#mask').hide();
    $('.window').hide();
});

//if mask is clicked
$('#mask').click(function() {
    $(this).hide();
    $('.window').hide();
});
//end popup


//slide feild of activity

let commercialFieldSlider = new Swiper('.commercial-field-slider', {
    speed: 1500,
    loop: true,
    autoplay: {
        delay: 1000,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.commercial-field-slider .swiper-pagination',
        clickable: true,
    },
    pagination: {
        el: ".news-content-mobile .pagination-news",
        type: "fraction",
        clickable: true,
    },


})

$(document).ready(function() {
    var $swiper = $(".slide-news");
    var $bottomSlide = null;
    var $bottomSlideContent = null;
    var mySwiper = new Swiper(".slide-news", {
        spaceBetween: 1,
        slidesPerView: 3,
        centeredSlides: true,
        roundLengths: true,
        loop: true,
        loopAdditionalSlides: 30,
        autoplay: {
            delay: 1500,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
        pagination: {
            el: '.slide-news .swiper-pagination',
            clickable: true,
        },
    });
});

$(function() {
    var swiper = new Swiper('.swiper-content-detail', {
        loop: true,
        slidesPerView: 4,
        paginationClickable: true,
        spaceBetween: 0,
        pagination: {
            el: ".swiper-content-detail .swiper-pagination",
            type: "fraction",
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        }
    });
});

//btn scroll activity
if ($('#button-activity').length > 0) {
    var btnTop = $('#button-activity');
    var element = $('.activity-news');
    $(window).scroll(function() {
        if (element.length > 0) {
            if ($(document).scrollTop() >= element.position().top - 250) {
                btnTop.addClass('d-none')

            } else {
                btnTop.removeClass('d-none')

            };
        }

    })

}

$(document).ready(function() {
    var docEl = $(document),

        linkScroll = $('.click_scroll');

    linkScroll.click(function(e) {
        $top = $(this.hash).offset().top - 300;
        e.preventDefault();
        $('body, html').animate({
            scrollTop: $top
        }, 700);
    });

});


(function($) {
    $(function() {
        $('.menu-mobile .nav-list .nav-item a:not(:only-child)').click(function(e) {
            $(this).siblings('.nav-dropdown').toggle();
            e.stopPropagation();
        });
        $('html').click(function() {
            $('.nav-dropdown').hide();
        });
        $('#nav-toggle').click(function() {
            $('.menu-mobile .nav-list').slideToggle();
        });
        $('#nav-toggle').on('click', function() {
            this.classList.toggle('active');
        });
    });
})(jQuery);


var Ajax = {
    getShareholder: () => {
        // const shareholderResult = $('.shareholder-infomation_left')
        // if (!shareholderResult) return
        $(document).on('click', '.item_link_shareholder', function() {
            $(this).addClass('active').siblings().removeClass('active')
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: getShareholderUrl,
                data: {
                    categoryId: $(this).data('category')
                },
                method: "GET",
                dataType: 'json',
                beforeSend: function() {
                    $('.render-html').hide()
                    $('.loading').removeClass('d-none')
                },
                success: function(data) {

                    if ($('.render-html').length) {
                        $('.render-html').show()
                        $("#breadcrum").load(" #breadcrum1");
                        $('.render-html').html(data.html);
                        if ($('.itemdown-show').length > 0) {
                            $('.itemdown-show').click(function() {
                                $(this).parents('.info-right').find('.downcontent').slideToggle();
                                return false;
                            });
                        }

                        window.history.pushState({}, '', data.url)
                    }

                },
                error: function(xhr, thrownError) {
                    console.log('error')
                    console.log(xhr.responseText);
                    console.log(thrownError)
                    $('.loading').addClass('d-none')
                },
                complete: function(xhr, status) {
                    $('.loading').addClass('d-none')
                }
            })
        })
    },
    getMedia: () => {
        $(document).on('click', '.item_link_media', function() {
            $(this).addClass('active-row').siblings().removeClass('active-row')
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: getMediaUrl,
                data: {
                    categoryId: $(this).data('category')
                },
                method: "GET",
                dataType: 'json',
                beforeSend: function() {
                    $('.loading').removeClass('d-none')
                    $('.render-media').hide()
                },
                success: function(data) {
                    if ($('.render-media').length && !data.reload) {
                        $('.render-media').show()
                        $("#breadcrum").load(" #breadcrum1");
                        $('.render-media').html(data.html)
                        if ($('.itemdown-show').length > 0) {
                            $('.itemdown-show').click(function() {
                                $(this).parents('.info-right').find('.downcontent').slideToggle();
                                return false;
                            });
                        }
                        window.history.pushState({}, '', data.url)
                            // init slide after load ajax
                        let newPostSlide = new Swiper('.new-post-slide', {
                            spaceBetween: 30,
                            effect: "fade",
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
                        let news_post_mobile = new Swiper('.new-post-slide-mb ', {
                            effect: "fade",
                            speed: 1500,
                            pagination: {
                                el: ".news-content-mobile .pagination-news",
                                type: "fraction",
                                clickable: true,
                            },
                            navigation: {
                                nextEl: '.news-content-mobile .swiper-button-next',
                                prevEl: '.news-content-mobile .swiper-button-prev',
                            },
                        });
                        let newPostSlide_bottom = new Swiper('.post-slide-bottom', {
                            keyboard: {
                                enabled: true,
                                onlyInViewport: false,
                            },
                            speed: 800,
                            loop: true,
                            slidesPerView: 3,
                            spaceBetween: 25,
                            pagination: {
                                el: '.post-slide-bottom .swiper-pagination',
                                clickable: true,
                            },
                            navigation: {
                                nextEl: '.post-slide-bottom .swiper-button-next',
                                prevEl: '.post-slide-bottom .swiper-button-prev',
                            },
                        })
                        if (screen.width < 1080) {
                            // let position = $('.media_content-wrapper').position();
                            // $('html, body').animate({
                            //     scrollTop: position.top - 100
                            // }, 1000);
                            location.reload()
                        }
                    } else {
                        window.location = data.url
                    }

                },
                error: function(xhr, thrownError) {
                    console.log('error')
                    console.log(xhr.responseText);
                    console.log(thrownError)
                    $('.loading').addClass('d-none')
                },
                complete: function(xhr, status) {
                    $('.loading').addClass('d-none')
                }
            })
        })
    },


    zipDownload: function() {

        const url = window.urlDownload;

        if (url != undefined) {

            $(document).on('click', '.post.download', function(e) {
                e.preventDefault();

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: url,
                    data: {
                        id: $(this).data('id')
                    },
                    method: "GET",
                    success: function(response) {
                        if (response.data) {
                            window.location = response.data
                        } else {
                            alert('C?? l???i vui l??ng th??? l???i sau!')
                        }

                    },
                    error: function(xhr, thrownError) {
                        console.log(thrownError)
                    },
                })
            })
        }
    }

}
$(document).ready(function() {
    Ajax.getShareholder();
    Ajax.zipDownload();
    Ajax.getMedia();

})


//tab active contact

var selector = '.active-tabs li';

$(selector).on('click', function() {
    $(selector).removeClass('active');
    $(this).addClass('active');
});

// open fancy box

// function function_open_fancy(e) {
//     $(e).fancybox({
//         'autoScale': true,
//         'transitionIn': 'elastic',
//         'transitionOut': 'elastic',
//         'speedIn': 500,
//         'speedOut': 300,
//         'autoDimensions': true,
//         'centerOnScroll': true // remove the trailing comma!!
//     }).click();
//     // fire the click event after initializing fancybox on this element
//     // this should open the fancybox
// }

// var element_fancy = '.post-content img';
// $(element_fancy).each(function() {
//     $(this).attr("data-fancybox", "gallery");
//     // var titleCaption = $(this).attr('title').val();
//     // $(this).attr("data-caption", "titleCaption ");
// })
// $(element_fancy).on('click', function() {
//     var tarGet;

//     $(element_fancy).fancybox({
//         beforeShow: function() {

//             tarGet = element_fancy;

//         },
//         afterClose: function() {
//             $(tarGet).show();
//         },
//         maxWidth: '100vw',
//         maxHeight: '80vh',
//         fitToView: false,
//         autoSize: false,
//         closeClick: false,
//         openEffect: 'none',
//         closeEffect: 'none'
//     });

// })

$('.post-detail-wrapper .content-main .post-content img').each(function() {
    const title = $(this).attr('title')
    const src = $(this).attr('src')
    $(this).removeAttr('data-fancybox')
    $(this).wrap(`<a href="${src}" data-fancybox="gallery" data-caption="${title}">`)
})