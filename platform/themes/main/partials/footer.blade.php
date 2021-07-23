        <footer class="footer">
            <div class="container-customize ">
                <div class="footer-content">
                    <div class="logo_footer">
                        <img src="{{Theme::asset()->url('images/home/logo1.png')}}" alt="">
                    </div>
                    <div class="company_name">
                        <h4 class="font30">CÔNG TY CỔ PHẦN TẬP ĐOÀN TRƯỜNG HẢI</h4>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="office">
                                <h2 class="font18 text-white title">Văn Phòng TP. Hồ Chí Minh</h2>
                                <div class="address">
                                        <p class="font18 text-white">Số 10 Mai Chí Thọ, P. Thủ Thiêm, <br>TP. Thủ Đức, TP.HCM.    
                                </div>
                                <div class="phone">
                                    <a class="text-white" href="tel:+84-(0)8-39977.824">+84-(0)8-39977.824</a>
                                </div>
                                <div class="global">
                                    <a class="text-white" href="">www.truonghaiauto.com.vn</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="office">
                                <h2 class="font18 text-white title">Văn Phòng Thaco Chu Lai</h2>
                                <div class="address">
                                   
  
                                        <p class="font18 text-white">Thôn 4, Xã Tam Hiệp, Huyện
                                            Núi thành, Tỉnh Quảng Nam                                            
                                        </p>
                                    
                                </div>
                                <div class="phone ">
                                    <a class="text-white" href="tel:84-0510.3567.161">84-0510.3567.161</a>
                                </div>
                                <div class="global ">
                                    <a class="text-white" href="">www.thacochulai.vn</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="office">
                                <h2 class="font18 text-white title">Văn Phòng Hà Nội</h2>
                                <div class="address">
                                   
                                        <p class="font18 text-white">Lô D6, KCN Hà Nội Đài Tư, 386
                                            Nguyễn Văn Linh, Sài Đồng, Long Biên, Hà 
                                        </p>
                                    
                                </div>
                                <div class="phone">
                                    <a class="text-white" href="+84-(0)43.8758914">+84-(0)43.8758914</a>
                                </div>
                                <div  class="global">
                                    <a class="text-white" href="">www.truonghaiauto.com.vn</a>
                                </div>
                            </div>
                        </div>
                        <div class="list-social">
                            <ul>
                                <li>
                                    <a href="">
                                        <img src="{{Theme::asset()->url('images/home/facebook.png')}}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="{{Theme::asset()->url('images/home/youtube.png')}}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="{{Theme::asset()->url('images/home/phone.png')}}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="{{Theme::asset()->url('images/home/linkedin.png')}}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="{{Theme::asset()->url('images/home/mail.png')}}" alt="">
                                    </a>
                                </li>
                              

                            </ul>
                        </div>
                    </div>
                   
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container-customize ">
                    <div class="row">
                        <div class="col-md-7">
                           <p class="text-white">Copyright © 2013 Công ty Cổ phần Ô tô Trường Hải.. All rights reserved.</p> 
    
                        </div>
                        <div class="col-md-2">
                          <a class="text-white" href="">Terms of use
                        </a>
                        </div>
                        <div class="col-md-3">
                           <a href="" class="text-white">Terms and conditions
                        </a>
                        </div>
                    </div>
                </div>
               
            </div>
        </footer>
        {!! Theme::footer() !!}
        <script>
                                    //sroll top
                        if($('#button-top').length>0){
                            var btn = $('#button-top');
                            $(window).scroll(function() {
                            if ($(window).scrollTop() > 300) {
                                btn.addClass('show-button-top');
                            } else {
                                btn.removeClass('show-button-top');
                            }
                            });
                            btn.on('click', function(e) {
                            e.preventDefault();
                            $('html, body').animate({scrollTop:0}, '300');
                            });
                        }



      
                    let newPostSlide = new Swiper(".new-post-slide", {
                    slidesPerView: 3,
                    loop: true,
                    centeredSlides: true,
                    spaceBetween: 40,
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    breakpoints: {
                        1024: {
                            slidesPerView: 3,
                            centeredSlides: true,
                            spaceBetween: 40,
                            navigation: {
                                nextEl: '.swiper-button-next',
                                prevEl: '.swiper-button-prev',
                            },
                        },
                    }
                });
                let fieldActivitySlide = new Swiper(".field-activity-slide", {
                    speed: 800,
                  
                    // centeredSlides: true,
                    // spaceBetween: 40,
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    observer: true,
                    observeParents: true,
                    
                });
               
                let main_slider = new Swiper(".main-slider", {
                  
                    speed: 800,
                    // centeredSlides: true,
                    // spaceBetween: 40,
                    pagination: {
                        el: ".swiper-pagination",
                        clickable: true,
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    
                });
        var swiper = new Swiper(".mySwiper-home", {
        speed: 800,
        // parallax: true,
       
       

        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });


            //         var galleryTop = new Swiper('.swiper-year', {
            //         direction: 'vertical',
            //         spaceBetween: 10,
            //     });
            // var galleryThumbs = new Swiper('.swiper-content', {
            //     direction: 'vertical',
            //     spaceBetween: 10,
            //     // loop: true, bug too
            //     centeredSlides: true,
            //     slidesPerView: 5,
            //     touchRatio: 0.2,
            //     slideToClickedSlide: true
            // });
            // galleryTop.params.control = galleryThumbs;
            // galleryThumbs.params.control = galleryTop;
          
      var swiper = new Swiper(".mySwiper", {
        direction: 'vertical',
	
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
      });
      var swiper2 = new Swiper(".mySwiper2", {
        direction: 'vertical',
        
        spaceBetween: 10,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        thumbs: {
          swiper: swiper,
        },
      });
        swiper.params.control =swiper2
        swiper2.params.control = swiper
    
        </script>
        <script>
                 if($('#header').length>0){
                            var btn = $('#header');
                            var headerTop=$('#header-top');
                            var boderTop=$('#boder-top');
                            $(window).scroll(function() {
                            if ($(window).scrollTop() > 10) {
                                btn.addClass('add-bg-color');
                                headerTop.addClass('add-bg-top');
                                boderTop.addClass('add-color-boder');
                            } else {
                                btn.removeClass('add-bg-color');
                                headerTop.removeClass('add-bg-top');
                                boderTop.removeClass('add-color-boder');
                            }
                            });
                            // btn.on('click', function(e) {
                            // e.preventDefault();
                            // $('html, body').animate({scrollTop:0}, '300');
                            // });
                        }
        </script>
        
    </body>
</html>
