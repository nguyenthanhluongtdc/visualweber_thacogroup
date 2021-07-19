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
            $('.main-slider').owlCarousel({
            smartSpeed: 1000,
            loop: false,
            autoplay: false,
            dots: true,
            nav: true,
            navText: ["<div class='nav-btn prev-slide'><i class='fas fa-long-arrow-alt-left'></i></div>", "<div class='nav-btn next-slide'><i class='fas fa-long-arrow-alt-right'></i></div>"],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });
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
        </script>
        
    </body>
</html>
